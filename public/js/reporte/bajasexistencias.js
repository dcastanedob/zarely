(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.bajasexistencias= function(data){
        var _this = $(this);
        var plugin = _this.data('bajasexistencias');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.bajasexistencias(this, data);
            
            _this.data('bajasexistencias', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.bajasexistencias = function(container, options){
        
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


            $container.find('select[name*=idmarca]').multipleSelect({
                filter:true,
                selectAllText: 'Seleccionar Todos',
                width: '100%',
                allSelected: 'Todos seleccionados',
                countSelected: '# de % Seleccionados',
                //multiple: true,
                //multipleWidth: 100
            });

            $container.find('input[type=checkbox]').trigger('click');
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
                          d.marcas = $container.find('select[name*=idmarca]').multipleSelect("getSelects"),
                          d.btn = $container.find('input#btn_download').val()
                        },
                        
                    },
                    

                    columns:[
                        {"data":"producto_nombre","name":"producto_nombre","orderable":true},
                        {"data":"producto_marca","name":"producto_marca","orderable":true},
                        {"data":"productosucursal_existencia","name":"productosucursal_existencia","orderable":true},
                        {"data":"productosucursal_minimo","name":"productosucursal_minimo","orderable":true},
                        {"data":"productosucursal_reorden","name":"productosucursal_reorden","orderable":true},

                    ],

                    createdRow: function( nRow, aData, iDataIndex) {
                        console.log(aData);
                        if(typeof aData.base64 != 'undefined'){
                            download("data:application/xls;base64,"+aData.base64,"bajasexistencias.XLS", "application/xls");
                        }
                    }
                    
                }
            );

            

             $container.find('select[name*=idmarca]').on('change',function(){
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