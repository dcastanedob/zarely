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
            
            $container.find('.dataTable').dataTable({
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
      
            });
        };

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );


