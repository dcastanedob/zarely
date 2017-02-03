(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.proveedores= function(data){
        var _this = $(this);
        var plugin = _this.data('proveedores');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.proveedores(this, data);
            
            _this.data('proveedores', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.proveedores = function(container, options){
        
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
                        url:'/catalogo/proveedores/serverside',
                    },
                    columns:[
                        {"data":"idproveedor","name":"idproveedor","orderable":true},
                        {"data":"proveedor_nombrecomercial","name":"proveedor_nombrecomercial","orderable":true},
                        {"data":"proveedor_celular","name":"proveedor_celular","orderable":true},
                        {"data":"proveedor_fechainicio","name":"proveedor_fechainicio","orderable":true},
                        {"data":"proveedor_email","name":"proveedor_email","orderable":true},
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
                                      '<form action="/catalogo/proveedores/eliminar/'+id+'" method="POST">',
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
            $container.find('input[name=proveedor_fechainicio]').datepicker({
                language:'es',
            });

            $container.find('select[name*=idmarca]').multipleSelect({
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
                var marcas = $container.find('select[name*=idmarca]').multipleSelect("getSelects");
                marcas.forEach(function(value){
                    var $input = $('<input type="hidden" name="marcas_array[]">');
                    $input.val(value);
                    $container.find('form').append($input);
                });
                $container.find('form').submit();
                
            });
            
            var idproveedor = $('input[name=idproveedor]').val();
            $.ajax({
                url:'/catalogo/proveedores/get',
                type: 'POST',
                dataType: 'JSON',
                data:{
                    name: 'marcas',
                    data: {
                        idproveedor:idproveedor,
                    },
                },
                success: function (data, textStatus, jqXHR) {
                    $container.find('select[name*=idmarca]').multipleSelect("setSelects", data);
                }
            });
        };
        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );