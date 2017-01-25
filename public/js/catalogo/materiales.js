(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.materiales= function(data){
        var _this = $(this);
        var plugin = _this.data('materiales');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.materiales(this, data);
            
            _this.data('materiales', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.materiales = function(container, options){
        
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
        
        plugin.list = function(){
            
            var table = $container.find('.dataTable').dataTable({
                language: {
                    url: "/json/datatable_es.json",
                 
                },
                   sInfoFiltered:   "",
                serverSide:true,
                ajax: {
                    method: 'POST',
                    url:'/catalogo/materiales/serverside'
                },
                columns: [
                    {"data": "idmaterial", "name": "idmaterial", "orderable": true},
                    {"data": "material_nombre", "name": "material_nombre", "orderable": true},
                    {"data": "options", "name": "options", "orderable": false, class:"td_options"}
                ],
                processing: true,
                createdRow: function ( row, data, index ) {
                        
                      
                       $(row).find('.delete_modal').on('click',function(){
                       var id =  $(row).attr('id');
                       
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
                                      '<form action="/catalogo/materiales/eliminar/'+id+'" method="POST">',
                                      '<div class="modal-body">',
                                        '<div class="text-center">',
                                         ' <span class="text-primary icon icon-times-circle icon-5x"></span>',
                                          '<h3 class="text-primary">Advertencia</h3>',
                                          '<p>¿Estás seguro que deseas eliminar el registro seleccionado?</p>',
                                         ' <div class="m-t-lg">',
                                          '  <button class="btn btn-primary"  type="submit">Eliminar</button>',
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
      
            });
         
            
            
            
        };

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


