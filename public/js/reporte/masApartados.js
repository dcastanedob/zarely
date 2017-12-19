(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.masapartados= function(data){
        var _this = $(this);
        var plugin = _this.data('masapartados');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.masapartados(this, data);
            
            _this.data('masapartados', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.masapartados = function(container, options){
        
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
                          d.desde = $container.find('input[name*=fecha_desde]').val(),
                          d.hasta = $container.find('input[name*=fecha_hasta]').val(),
                          d.btn = $container.find('input#btn_download').val()
                        },
                        
                    },
                    

                    columns:[
                        {"data":"producto_nombre","name":"producto_nombre","orderable":true},
                        {"data":"producto_marca","name":"producto_marca","orderable":true},
                        {"data":"ventadetalle_cantidad","name":"ventadetalle_cantidad","orderable":true},
                    ],

                    createdRow: function( nRow, aData, iDataIndex) {
                        console.log(aData);
                        if(typeof aData.base64 != 'undefined'){
                            download("data:application/xls;base64,"+aData.base64,"masapartados.XLS", "application/xls");
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