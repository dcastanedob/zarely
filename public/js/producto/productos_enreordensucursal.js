(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.productos_enreordensucursal= function(data){
        var _this = $(this);
        var plugin = _this.data('productos_enreordensucursal');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.productos_enreordensucursal(this, data);
            
            _this.data('productos_enreordensucursal', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.productos_enreordensucursal = function(container, options){
        
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

            var columns = [
                {"data":"idproductovariante","name":"idproductovariante","orderable":true},
                {"data":"producto_modelo","name":"producto_modelo","orderable":true},
                {"data":"productovariante_talla","name":"productovariante_talla","orderable":true},
                {"data":"idmarca","name":"idmarca","orderable":true},
                {"data":"idcolor","name":"idcolor","orderable":true},
                {"data":"idmaterial","name":"idmaterial","orderable":true},
                
            ];

            $.ajax({
              url:'/json/getsucursal',
              dataType:'json',
              async:false,
              success:function(data){
                
                  if(data.response){
                    
                    var obj = {
                      data:"sucursal_"+data.data.Idsucursal,
                      name:"sucursal_"+data.data.Idsucursal,
                      orderable:true,
                    };
                    columns.push(obj);



                  }

              },
            });


            var $table = $container.find('.dataTable').dataTable(
                {
                    language: {
                      url: "/json/datatable_es.json",

                    },
                    serverSide:true,

                    ajax:{
                        method: 'POST',
                        url:'/producto/enreorden/serversideproductovariantesucursal',
                        data:{
                          idproducto:$container.find('input[name=idproducto]').val(),
                        },
                    },
                    columns:columns,
                    proccesing: true,


                }
            );


        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );