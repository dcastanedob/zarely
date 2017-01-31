(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.marcas= function(data){
        var _this = $(this);
        var plugin = _this.data('marcas');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.marcas(this, data);
            
            _this.data('marcas', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.marcas = function(container, options){
        
        var plugin = this;
       
       /* 
        * Important Components
        */ 
        var $container = $(container);  
        
        var settings;

        var defaults = {
        
       };
        

        plugin.init = function(){

            settings = plugin.settings = $.extend({}, defaults, options);

        }

        plugin.list =function(){
            var $table = $container.find('.dataTable').dataTable(
                {
                    language: {
                      url: "/json/datatable_es.json",

                    },
                    serverSide:true,

                    ajax:{
                        method: 'POST',
                        url:'/catalogo/marcas/serverside',
                    },
                    columns:[
                        {"data":"idmarca","name":"idmarca","orderable":true},
                        {"data":"marca_nombre","name":"marca_nombre","orderable":true},
                        {"data":"options","name":"options","orderable":false, class:"td_options"},
                    ],
                    proccesing: true,

                    createdRow: function(row,data,index){
                        $(row).find('.delete_modal').on('click',function(){
                            var id = $(row).attr('id');
                            var tmpl = [
                            '<div id="modalBounceInLeft" tabindex="-1" role="dialog" class="modal in">',
                                  '<div class="modal-dialog">',
                                   ' <div class="modal-content animated bounceInLeft">',
                                    '  <div class="modal-header">',
                                       ' <button type="button" class="close" data-dismiss="modal">',
                                          '<span aria-hidden="true">×</span>',
                                          '<span class="sr-only">Close</span>',
                                        '</button>',
                                      '</div>',
                                      '<form action="/catalogo/marcas/eliminar/'+id+'" method="POST">',
                                     ' <div class="modal-body">',
                                        '<div class="text-center">',
                                         ' <span class="text-primary icon icon-times-circle icon-5x"></span>',
                                          '<h3 class="text-primary">Advertencia</h3>',
                                          '<p>¿Estás seguro que deseas eliminar el registro seleccionado?</p>',
                                         ' <div class="m-t-lg">',
                                          '  <button class="btn btn-primary" type="submit">Eliminar</button>',
                                           ' <button class="btn btn-default" data-dismiss="modal" type="button">Cancelar</button>',
                                          '</div>',
                                        '</div>',
                                      '</div>',
                                      '<div class="modal-footer"></div>',
                                    '</div>',
                                  '</div>',
                                '</div>',
                            ].join('');

                            $(tmpl).modal();
                        });
                    }
                }
            );


        }
        
        plugin.initForm = function(){
            
            $container.find('select[name*=idtallaje]').multipleSelect({
                filter:true,
                selectAllText: 'Seleccionar Todos',
                width: '100%',
                allSelected: 'Todos seleccionados',
                countSelected: '# de % Seleccionados',
                //multiple: true,
                //multipleWidth: 100
            });
            
            $('button[type=submit]').on('click',function(e){
                e.preventDefault();
                var tallajes = $container.find('select[name*=idtallaje]').multipleSelect("getSelects");
                tallajes.forEach(function(value){
                    var $input = $('<input type="hidden" name="tallajes_array[]">');
                    $input.val(value);
                    $container.find('form').append($input);
                });
                $container.find('form').submit();
                
            });
            
            var idmarca = $('input[name=idmarca]').val();
            $.ajax({
                url:'/catalogo/marcas/get',
                type: 'POST',
                dataType: 'JSON',
                data:{
                    name: 'tallajes',
                    data: {
                        idmarca:idmarca,
                    },
                },
                success: function (data, textStatus, jqXHR) {
                    $container.find('select[name*=idtallaje]').multipleSelect("setSelects", data);
                }
            });
        };
        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );