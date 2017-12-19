(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.inventarioVer= function(data){
        var _this = $(this);
        var plugin = _this.data('inventarioVer');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.inventarioVer(this, data);
            
            _this.data('inventarioVer', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.inventarioVer = function(container, options){
        
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

            var newColumns = []
            $.post( "/reporte-bodega/rows", { id: $('#producto_id').val()})
              .done(function( data ) {
                
                newColumns.push({"data":"producto_variante","name":"producto_variante","orderable":true});
                newColumns.push({"data":"producto_fotografia","name":"producto_fotografia","orderable":true});
                $.each(JSON.parse(data), function( index, value ) {
                  newColumns.push({"data":"talla_"+value.toString().replace('.',"_")+"","name":"talla_"+value.toString().replace('.',"_")+"","orderable":true});
                });

                console.log(newColumns);
                var $table = $container.find('.dataTable').dataTable(
                {
                    language: {
                      url: "/json/datatable_es.json",

                    },
                    "scrollX": true,

                    serverSide:true,
                    proccesing: true,

                    ajax:{
                        type: 'POST',
                        order:[[0,'asc']],
                        
                        
                    },
                    

                    columns:newColumns,

                    createdRow: function( nRow, aData, iDataIndex) {
                        console.log(aData);
                        if(typeof aData.base64 != 'undefined'){
                            download("data:application/xls;base64,"+aData.base64,"inventarioVer.XLS", "application/xls");
                        }
                    }
                    
                }
            );
            });



            

           

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