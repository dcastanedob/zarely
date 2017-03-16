(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.generales= function(data){
        var _this = $(this);
        var plugin = _this.data('generales');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.generales(this, data);
            
            _this.data('generales', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.generales = function(container, options){
        
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


        calcularTotal = function(){
          var total = 0;
          $container.find('#tabla_productovariante tbody tr').filter(function(){
            subtotal = accounting.unformat($(this).find('input.compradetalle_subtotal').val());
            total+= parseFloat(subtotal);

          });
          $container.find('input[name=compra_total]').val(accounting.formatMoney(total));

        }

        calcularSubtotal = function($row){
          var cantidad = parseFloat($row.find('input[name*=cantidad]').val());
          var precio = parseFloat($row.find('input[name*=preciounitario]').val());
          var subtotal = cantidad * precio;
          $row.find('input.compradetalle_subtotal').val(accounting.formatMoney(subtotal));
          calcularTotal();
        }
       


        plugin.initForm = function(){
            
            $container.find('select[name*=idproductovariante]').multipleSelect({
                filter:true,
                selectAllText: 'Seleccionar Todos',
                width: '100%',
                allSelected: 'Todos seleccionados',
                countSelected: '# de % Seleccionados',
                //multiple: true,
                //multipleWidth: 100
            });

            
            
            var idcompra = $('input[name=idcompra]').val();
            
            $.ajax({
                url:'/compras/generales/getProductosvariantes',
                type: 'POST',
                dataType: 'JSON',
                data:{
                    name: 'productosvariantes',
                    data: {
                        idcompra:idcompra,
                    },
                },
                success: function (data, textStatus, jqXHR) {
                    $container.find('select[name*=idproductovariante]').multipleSelect("setSelects", data.selects);

                    $container.find('#btn_add_productovariante').trigger('click');
                    productosvariantes_added = data.selects;

                    for(var i = 0; i<data.selects.length;i++)
                    {
                      $container.find('#'+data.selects[i]+ ' td input[name*=cantidad]').attr('value',data.cantidad[i]);
                      $container.find('#'+data.selects[i]+ ' td input[name*=preciounitario]').attr('value',data.precio[i]);
                      $container.find('#'+data.selects[i]+ ' td input[name*=cantidad]').keyup();
                    }

                    
                }
            });







            var productosvariantes_added = [];



            $container.find('#btn_add_productovariante').on('click',function(){
                 
             var productovariantes = $container.find('select[name*=idproductovariante]').multipleSelect("getSelects");

             var productovariantes_text =  $container.find('select[name*=idproductovariante]').multipleSelect("getSelects", "text");
             
              productovariantes_text.forEach(function(value,index){
                 


                 var id =  productovariantes[index];

                 if($.inArray(id,productosvariantes_added) < 0){
                 
                   var $tr = $('<tr>');
                   $tr.attr('id',id);
                   $tr.append('<td><input type="hidden" name="productosvariantes[]"  value="'+id+'">'+value+'</td>');
                   $tr.append('<td><input type="text" name="cantidad[]" value="1"></input></td>');
                   $tr.append('<td><input type="text" name="preciounitario[]" value="1"></input></td>');
                   $tr.append('<td><input type="text" disabled class="compradetalle_subtotal" value="1"></input></td>');
                   $tr.append('<td><a href="javascript:;">Eliminar</a></td>');
                   


                   $tr.find('a').on('click',function(){
                       $tr.remove();
                    
                       var index = productovariantes.indexOf(id);
                       if (index > -1) {
                          productovariantes.splice(index, 1);
                       }
                       var index =productosvariantes_added.indexOf(id);
                       if(index> -1)
                       {
                        productosvariantes_added.splice(index,1);
                       }
                       $container.find('select[name*=idproductovariante]') .multipleSelect("setSelects", productovariantes);
                       calcularTotal();
                   });
                   
                   //EVENTOS
                   $tr.find('input').numeric();

                   $tr.find('input').on('keyup',function(){
                    calcularSubtotal($tr)
                   });


                   $container.find('#tabla_productovariante tbody').append($tr);
                   
                   calcularSubtotal($tr);

                   productosvariantes_added.push(id);
                }
                 
                 
              });
  
            });


            $container.find('#btn_add_productogeneral').on('click',function(){
              var idproductogeneral = $container.find('select[name*=productos_generales] option:selected').val();

              $.ajax({
                  method: 'POST',
                  url:'/compras/generales/getdetails',
                  dataType:'JSON',
                  data:{
                    idproductogeneral:idproductogeneral,
                  },success:function(data){

                    var tmpl = [
                    '<div id="modalBounceInLeft" tabindex="-1" role="dialog" class="modal fade bs-example-modal-lg">',
                          '<div class="modal-dialog">',
                           ' <div class="modal-content animated bounceInLeft">',
                            '  <div class="modal-header">',
                                ' <button type="button" class="close" data-dismiss="modal">',
                                  '<span aria-hidden="true">×</span>',
                                  '<span class="sr-only">Close</span>',
                                '</button>',
                                '<h3 class="text-primary">Detalles</h3>',
                               
                              '</div>',
                              
                             ' <div class="modal-body" style="overflow-x:auto;">',
                                '<table id="details" class="table table-bordered table-nowrap " cellspacing="0" width="100%">',
                                    '<thead>',
                                        '<th>Variante</th>',
                                        '<th>7.0</th>',
                                        '<th>7.5</th>',
                                        '<th>8.0</th>',
                                        '<th>8.5</th>',
                                        '<th>9.0</th>',
                                        '<th>9.5</th>',
                                        '<th>10.0</th>',
                                        '<th>10.5</th>',
                                        '<th>11.0</th>',
                                        '<th>11.5</th>',
                                        '<th>12.0</th>',
                                        '<th>12.5</th>',
                                        '<th>13.0</th>',
                                        '<th>13.5</th>',
                                        '<th>14.0</th>',
                                        '<th>14.5</th>',
                                        '<th>15.0</th>',
                                        '<th>15.5</th>',
                                        '<th>16.0</th>',
                                        '<th>16.5</th>',
                                        '<th>17.0</th>',
                                        '<th>17.5</th>',
                                        '<th>18.0</th>',
                                        '<th>18.5</th>',
                                        '<th>19.0</th>',
                                        '<th>19.5</th>',
                                        '<th>20.0</th>',
                                        '<th>20.5</th>',
                                        '<th>21.0</th>',
                                        '<th>21.5</th>',
                                        '<th>22.0</th>',
                                        '<th>22.5</th>',
                                        '<th>23.0</th>',
                                        '<th>23.5</th>',
                                        '<th>24.0</th>',
                                        '<th>24.5</th>',
                                        '<th>25.0</th>',
                                        '<th>25.5</th>',
                                        '<th>26.0</th>',
                                        '<th>26.5</th>',
                                        '<th>27.0</th>',
                                        '<th>27.5</th>',
                                        '<th>28.0</th>',
                                        '<th>28.5</th>',
                                        '<th>29.0</th>',
                                        '<th>29.5</th>',
                                        '<th>30.0</th>',
                                        '<th>30.5</th>',
                                        '<th>31.0</th>',
                                        '<th>31.5</th>',
                                        '<th>32.0</th>',
                                        '<th>32.5</th>',
                                        '<th>33.0</th>',
                                        '<th>33.5</th>',
                                        '<th>34.0</th>',
                                        '<th>34.5</th>',
                                        '<th>35.0</th>',
                                        '<th>Acción</th>',
                                    '</thead>',
                                    '<tbody>',
                                    '</tbody>',
                                '</table>',
                              '</div>',
                            '</div>',
                          '</div>',
                        '</div>',
                    ].join('');

                    

                    $modal = $(tmpl);
                   

                    $td = $container.find('td.dataTables_empty').remove();
                    console.log($td);
               

                    $.each(data.data,function(index, value){
                      $tr = $('<tr>');
                      
                      $tr.append('<td>'+index+'</td>');
                      for(var i = 70; i<=350;)
                      {
                        $tr.append('<td id="'+i+'"></td>'); 
                        i+=5;
                      }

                      $.each(value,function(indexVariante, valueVariante){
                        $input = $('<input>');
                        $input.attr('id',valueVariante.variante);
                        $input.attr('size',1);
                        $input.attr('name','variantes');
                        $input.numeric();
                        $tr.find('#'+(valueVariante.talla*10)).append($input);
                        
                      });
                      $tr.append('<td><button class="btn btn-primary">Guardar</button></td>');
                      $modal.find('#details tbody').append($tr);


                      $tr.find('button').on('click',function(){

                          var $tr = $(this).closest('tr');

                          var selects = [];
                          var value = [];

                          $tr.find('input[name=variantes]').filter(function(){
                            if($(this).val() != "")
                            {
                              selects.push($(this).attr("id"));
                              value.push($(this).val());
                            }

                          });

                          $container.find('select[name*=idproductovariante]') .multipleSelect("setSelects", selects);
                          $container.find('#btn_add_productovariante').trigger('click');

                          for(var i = 0; i<selects.length;i++)
                          {
                            $container.find('#'+selects[i]+ ' td input[name*=cantidad]').attr('value',value[i]);
                            $container.find('#'+selects[i]+ ' td input[name*=cantidad]').keyup();
                          }


                      });
                      
                    });
                    
                    $modal.modal();
                  }
              });

              

            });


            $container.find('#variante').on('click',function(){
               var tallajesDisable = $container.find('div[id*=producto_general]').addClass('ocultar');
               var medidasAvailable = $container.find('div[id*=variantes]').removeClass('ocultar');


            });

            $container.find('#general').on('click',function(){
               var tallajesAvailable = $container.find('div[id*=producto_general]').removeClass('ocultar');
               var medidasDisable = $container.find('div[id*=variantes]').addClass('ocultar');
               $container.find('#btn_add_productovariante').trigger('click');
              

            });


        };
        
        
      

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );