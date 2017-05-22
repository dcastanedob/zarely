(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.clientes= function(data){
        var _this = $(this);
        var plugin = _this.data('clientes');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.clientes(this, data);
            
            _this.data('clientes', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.clientes = function(container, options){
        
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
        
        plugin.initForm = function(){
            
            $container.find('input[name=cliente_fecharegistro]').datepicker({
                language:'es',
            });
            
            $container.find('select[name=cliente_credito]').on('change',function()
              {
                var option = $(this).find('option:selected').val();
                if(option == 1)
                {
                   $container.find('input[name=cliente_limitecredito]').removeAttr('disabled');
                }else{
                   $container.find('input[name=cliente_limitecredito]').attr('disabled',"");
                }
              }
            );

            var optionCredit = $container.find('select[name=cliente_credito] option:selected').val();
            if(optionCredit == 1)
            {
               $container.find('input[name=cliente_limitecredito]').removeAttr('disabled');
            }else{
               $container.find('input[name=cliente_limitecredito]').attr('disabled',"");
            }
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
                        url:'/catalogo/clientes/serverside',
                    },
                    columns:[
                        {"data":"idcliente","name":"idcliente","orderable":true},
                        {"data":"cliente_nombre","name":"cliente_nombre","orderable":true},
                        {"data":"cliente_rfc","name":"cliente_rfc","orderable":true},
                        {"data":"cliente_tipo","name":"cliente_tipo","orderable":true},
                        {"data":"cliente_estatus","name":"cliente_estatus","orderable":true},
                        {"data":"cliente_credito","name":"cliente_credito","orderable":true},
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
                                      '<form action="/catalogo/clientes/eliminar/'+id+'" method="POST">',
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

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );