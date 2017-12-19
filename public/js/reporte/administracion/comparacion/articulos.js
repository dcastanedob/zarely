(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.articulos= function(data){
        var _this = $(this);
        var plugin = _this.data('articulos');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.articulos(this, data);
            
            _this.data('articulos', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.articulos = function(container, options){
        
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


            $container.find('select[name*=idsucursal]').multipleSelect({
                filter:true,
                selectAllText: 'Seleccionar Todos',
                width: '100%',
                allSelected: 'Todos seleccionados',
                countSelected: '# de % Seleccionados',
                //multiple: true,
                //multipleWidth: 100
            });



           
        }

        plugin.list =function(){


            var $table ;


            $container.find('input[name=fecha_desde]').on('change',function(){
              $('select[name*=idsucursal]').trigger('change');
            });

            $container.find('input[name=fecha_hasta]').on('change',function(){
              $('select[name*=idsucursal]').trigger('change');
            });


             $container.find('select[name*=idsucursal]').on('change',function(){
                var columns = [];
                $selects = $(this).multipleSelect("getSelects");
                $.ajax({
                  url:'/reporte-administracion-comparacion/getSucursales',
                  type: 'POST',
                  dataType: 'JSON',
                  data:{
                      sucursales:$selects,
                  },
                  success: function (data, textStatus, jqXHR) {
                    $('#tittle_tr').html('');
                    $('#subtittle_tr').html('');

                    $.each(data, function( index, value ) {

                        $('#tittle_tr').append('<th>'+value+'</th>');
                        $('#subtittle_tr').append('<th>'+value+'</th>');
                        var temp = {"data":"sucursal"+index,"name":"sucursal"+index,"orderable":true};
                        columns.push(temp);
                    });


                    var $table = $container.find('.dataTable').dataTable(
                        {
                            language: {
                              url: "/json/datatable_es.json",

                            },
                            serverSide:true,
                            proccesing: true,
                            "destroy": true,

                            ajax:{
                                type: 'POST',
                                order:[[0,'asc']],
                                data: function(d)
                                {
                                  d.sucursal = $container.find('select[name*=idsucursal]').multipleSelect("getSelects"),
                                  d.desde = $container.find('input[name*=fecha_desde]').val(),
                                  d.hasta = $container.find('input[name*=fecha_hasta]').val(),
                                  d.btn = $container.find('input#btn_download').val()
                                },
                                
                            },
                            

                            columns:columns,
                            
                            createdRow: function( nRow, aData, iDataIndex) {
                                if(typeof aData.base64 != 'undefined'){
                                    download("data:application/xls;base64,"+aData.base64,"articulos.XLS", "application/xls");
                                }
                            }
                            
                        }
                    );
                    
                                            
                  }
                });

                
            });

            $container.find('#btn_excel').on('click',function(){
                $container.find('#btn_download').val('excel');
                $table.api().ajax.reload();
                $container.find('#btn_download').val('');
            });

           $container.find('select[name*=idsucursal]').trigger('change');

             
        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );