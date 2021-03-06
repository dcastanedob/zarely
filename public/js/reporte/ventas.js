(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.ventas= function(data){
        var _this = $(this);
        var plugin = _this.data('ventas');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.ventas(this, data);
            
            _this.data('ventas', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.ventas = function(container, options){
        
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

            $container.find('select[name*=idestatus]').multipleSelect({
                filter:true,
                selectAllText: 'Seleccionar Todos',
                width: '100%',
                allSelected: 'Todos seleccionados',
                countSelected: '# de % Seleccionados',
                //multiple: true,
                //multipleWidth: 100
            });

            $container.find('select[name*=idvendedor]').multipleSelect({
                filter:true,
                selectAllText: 'Seleccionar Todos',
                width: '100%',
                allSelected: 'Todos seleccionados',
                countSelected: '# de % Seleccionados',
                //multiple: true,
                //multipleWidth: 100
            });

            $container.find('select[name*=idtipo]').multipleSelect({
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
                          d.estatus = $container.find('select[name*=idestatus]').multipleSelect("getSelects"),
                          d.tipo = $container.find('select[name*=idtipo]').multipleSelect("getSelects"),
                          d.vendedor = $container.find('select[name*=idvendedor]').multipleSelect("getSelects"),
                          d.desde = $container.find('input[name*=fecha_desde]').val(),
                          d.hasta = $container.find('input[name*=fecha_hasta]').val(),
                          d.btn = $container.find('input#btn_download').val()
                        },
                        
                    },
                    

                    columns:[
                        {"data":"venta_fecha","name":"venta_fecha","orderable":true},
                        {"data":"venta_tipo","name":"venta_tipo","orderable":true},
                        {"data":"vendedor","name":"vendedor","orderable":true},
                        {"data":"cliente","name":"cliente","orderable":true},
                        {"data":"venta_total","name":"venta_total","orderable":true},
                        {"data":"venta_estatus","name":"venta_estatus","orderable":true},

                    ],

                    createdRow: function( nRow, aData, iDataIndex) {
                        console.log(aData);
                        if(typeof aData.base64 != 'undefined'){
                            download("data:application/xls;base64,"+aData.base64,"ventas.XLS", "application/xls");
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

             $container.find('select[name*=idestatus]').on('change',function(){
              $table.api().ajax.reload();
            });


             $container.find('select[name*=idvendedor]').on('change',function(){
              $table.api().ajax.reload();
            });


             $container.find('select[name*=idtipo]').on('change',function(){
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