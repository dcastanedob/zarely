(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.inventarioIndex= function(data){
        var _this = $(this);
        var plugin = _this.data('inventarioIndex');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.inventarioIndex(this, data);
            
            _this.data('inventarioIndex', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.inventarioIndex = function(container, options){
        
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
                    proccesing: true,

                    ajax:{
                        type: 'POST',
                        order:[[0,'asc']],
                        
                        
                    },
                    

                    columns:[
                        {"data":"producto_nombre","name":"producto_nombre","orderable":true},
                        {"data":"productos_existencia","name":"productos_existencia","orderable":true},
                        {"data":"options","name":"options","orderable":false, class:"td_options"},

                    ],

                    createdRow: function( nRow, aData, iDataIndex) {
                        console.log(aData);
                        if(typeof aData.base64 != 'undefined'){
                            download("data:application/xls;base64,"+aData.base64,"inventarioIndex.XLS", "application/xls");
                        }
                    }
                    
                }
            );

           

            $container.find('#btn_excel').on('click',function(){
                $container.find('#btn_download').val('excel');
                $table.api().ajax.reload();
                $container.find('#btn_download').val('');
            });

           

             
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );