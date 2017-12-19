(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.pendientesSucursal= function(data){
        var _this = $(this);
        var plugin = _this.data('pendientesSucursal');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.pendientesSucursal(this, data);
            
            _this.data('pendientesSucursal', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.pendientesSucursal = function(container, options){
        
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

            $container.find('input[name=fecha_desde]').datepicker({
                language:'es',
            }).datepicker("setDate", new Date());

            $container.find('input[name=fecha_hasta]').datepicker({
                language:'es',
            }).datepicker("setDate", new Date());


          


           
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
                        data: function(d)
                        {
                          d.desde = $container.find('input[name*=fecha_desde]').val(),
                          d.hasta = $container.find('input[name*=fecha_hasta]').val(),
                          d.btn = $container.find('input#btn_download').val()
                        },
                        
                    },
                    

                    columns:[
                        {"data":"sucursal_nombre","name":"sucursal_nombre","orderable":true},
                        {"data":"idpedidosucursal","name":"idpedidosucursal","orderable":true},
                        {"data":"pedidosucursal_fechasolicitud","name":"pedidosucursal_fechasolicitud","orderable":true},
                        {"data":"cantidad_pares","name":"cantidad_pares","orderable":true},
                        

                    ],

                    createdRow: function( nRow, aData, iDataIndex) {
                        console.log(aData);
                        if(typeof aData.base64 != 'undefined'){
                            download("data:application/xls;base64,"+aData.base64,"pendientesSucursal.XLS", "application/xls");
                        }
                    }
                    
                }
            );

            $container.find('input[name=fecha_desde]').on('change',function(){
              $table.api().ajax.reload();
            });

            $container.find('input[name=fecha_hasta]').on('change',function(){
              $table.api().ajax.reload();
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