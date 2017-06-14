(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.ver= function(data){
        var _this = $(this);
        var plugin = _this.data('ver');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.ver(this, data);
            
            _this.data('ver', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.ver = function(container, options){
        
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


       


        plugin.initForm = function(){

            
            
            var idventa = $('input[name=idventa]').val();
            $.ajax({
                url:'/puntodeventa/verproductosventa',
                type: 'POST',
                dataType: 'JSON',
                data:{
                    idventa:idventa,
                },
                success: function (data, textStatus, jqXHR) {
                    //iniciamos la tabla con la informaciòn que tenemos
                    $.each(data.data,function(index, object){
                      $tr = $('<tr>');
                      $tr.append('<td>'+object.cantidad+'</td>')
                      $tr.append('<td>'+object.nombre+'</td>')
                      $tr.append('<td>'+object.descripcion+'</td>')
                      $tr.append('<td>$'+object.precioUnitario+'</td>')
                      $tr.append('<td>'+object.descuento+'%</td>')
                      $tr.append('<td>$'+object.subtotal+'</td>')
                      $container.find('#tables_information1').append($tr);
                    }); 

                    //seteamos el total, iva y subtotal
                    $container.find('#total_transferencia').val(data.total);
                    $container.find('#iva_transferencia').val(data.iva);
                    $container.find('#subtotal_transferencia').val(data.subtotal);

                    //verificamos si el estatus es cancelado para no mostrar botòn, si es completado o si es en proceso para hacer pagos
                    if(data.estatus == 'cancelada')
                    {
                        $container.find('#btn_venta_1').remove();
                        $container.find('select[name=venta_estatus]').attr('disabled',"");
                    }else if(data.estatus == 'completada')
                    {
                        $container.find('select[name=venta_estatus] option[value="procesando"]').remove();
                    }else{
                        $container.find('#btn_venta_1').text('Hacer pago');

                        $container.find('#btn_venta_1').on('click',function(event){
                            //prevenimos que se envìe el formulario
                            event.preventDefault();
                            
                            //hacemos una peticiòn ajax para obtener los pagos al momento
                            $.ajax({
                              url:'/puntodeventa/getPagos',
                              type: 'POST',
                              dataType: 'JSON',
                              data:{
                                  idventa:idventa,
                              },
                              success: function (data, textStatus, jqXHR) {
                                var tmpl = [
                                  '<div id="modalBounceInLeft" tabindex="-1" role="dialog" class="modal fade bs-example-modal-lg">',
                                        '<div class="modal-dialog">',
                                         ' <div class="modal-content animated bounceInLeft" style="margin-left: -30%;margin-right: -30%;">',
                                          '  <div class="modal-header">',
                                              ' <button type="button" class="close" data-dismiss="modal">',
                                                '<span aria-hidden="true">×</span>',
                                                '<span class="sr-only">Close</span>',
                                              '</button>',
                                              '<h3 class="text-primary">Pagos de la venta </h3>',
                                              '<div class="row">',
                                                '<div class="col-md-offset-1 col-md-5">',
                                                  '<h5>Pago total</h5><h5 id="pago_total" class="text-primary"> </h5>',
                                                '</div>',
                                                '<div class=" col-md-5">',
                                                  '<h5>Pago al momento</h5><h5 id="pago_almomento" class="text-primary"> </h5>',
                                                '</div>',
                                              '</div>',
                                            '</div>',
                                            
                                           ' <div class="modal-body" style="overflow-x:auto;">',
                                                '<table id="pagos_al_momento" class="table table-bordered table-nowrap dataTable" cellspacing="0" width="100%">',
                                                    '<thead>',
                                                      '<th>Fecha</th>',
                                                      '<th>Método</th>',
                                                      '<th>Cantidad</th>',
                                                      '<th>Referencia</th>',
                                                      '<th>Dígitos</th>',
                                                    '</thead>',
                                                    '<tbody>',
                                                    '</tbody>',
                                                '</table>',
                                                '<hr>',
                                                '<div id="pagos_venta">',
                                                  '<h3>Nuevos pagos</h3>',
                                                  '<div class="row">',
                                                    '<div class="col-md-offset-1 col-md-2">',
                                                      '<div class="form-group">',
                                                        '<label for="metodo"> Método </label>',
                                                        '<select id="metodo_de_pago" class="form-control infput-thick">',
                                                          '<option value="efectivo">Efectivo</option>',
                                                          '<option value="tarjeta">Tarjeta</option>',
                                                          '<option value="vales">Vales</option>',
                                                        '</select>',
                                                      '</div>',
                                                    '</div>',

                                                    '<div class="col-md-2">',
                                                      '<div class="form-group">',
                                                        '<label for="metodo"> Cantidad </label>',
                                                        '<input id="cantidad_met"></input>',
                                                      '</div>',
                                                    '</div>',

                                                    '<div class="col-md-2">',
                                                      '<div class="form-group" id="referencia" hidden="">',
                                                        '<label for="metodo"> Referencia </label>',
                                                        '<input id="referencia_pago"></input>',
                                                      '</div>',
                                                    '</div>',

                                                    '<div class="col-md-2">',
                                                      '<div class="form-group" id="digitos" hidden="">',
                                                        '<label for="metodo"> 4 dígitos </label>',
                                                        '<input id="digitos_pago" maxlength="4"></input>',
                                                      '</div>',
                                                    '</div>',


                                                    '<div class="col-md-2">',
                                                      '<div class="form-group">',
                                                        '<a class="btn btn-primary btn-block btn-next" style="margin-top: 20px;" id="btn_add_pago">',
                                                              'Agregar',
                                                        '</a>',
                                                      '</dvi>',
                                                    '</div>',

                                                  '</div>',
                                                '</div>',

                                                '<table id="detalles_de_venta" class="table table-bordered table-nowrap dataTable" cellspacing="0" width="100%">',
                                                    '<thead>',
                                                      '<th>Método</th>',
                                                      '<th>Cantidad</th>',
                                                      '<th>Referencia</th>',
                                                      '<th>Dígitos</th>',
                                                      '<th>Opciones</th>',
                                                    '</thead>',
                                                    '<tbody>',
                                                    '</tbody>',
                                                '</table>',
                                                '<div class="row">',
                                                  '<div class="col-md-4">',
                                                  '</div>',
                                                  '<div class="col-md-4">',
                                                    '<h3>Recibí</h3><input id="recibi"></input>',
                                                  '</div>',
                                                  '<div class="col-md-4">',
                                                    '<h3>Cambio</h3>',
                                                    '<input id="cambio" disabled></input>',
                                                  '</div>',
                                                '</div>',
                                                '<div class="row">',
                                                  '<div class="col-md-6">',
                                                    '<div class="form-group">',
                                                        '<a class="btn btn-danger btn-block btn-next" data-dismiss="modal" style="margin-top: 20px;" id="btn_cancelar_pago">',
                                                              'Cancelar',
                                                        '</a>',
                                                      '</dvi>',
                                                    '</div>',
                                                  '</div>',
                                                  '<div class="col-md-6">',
                                                    '<div class="form-group">',
                                                        '<a class="btn btn-primary btn-block btn-next" style="margin-top: 20px;" id="btn_hacer_pago" disabled="">',
                                                              'Pagar',
                                                        '</a>',
                                                      '</dvi>',
                                                    '</div>',
                                                  '</div>',
                                                '</div>',
                                            '</div>',
                                          '</div>',
                                        '</div>',
                                      '</div>',
                                ].join('');

                                var totalAlMomento = data.totalAlMomento;

                                $modal = $(tmpl);

                                //seteamos el total de la venta y el total al momento
                                $modal.find('#pago_total').html('$'+data.total);
                                $modal.find('#pago_almomento').html('$'+data.totalAlMomento);


                                //mostrar los pagos ya realizados
                                $.each(data['pagos'],function(index, pago){
                                    $tr = $('<tr>');
                                    $tr.append('<td>'+pago.VentaFecha+'</td>');
                                    $tr.append('<td>'+pago.VentapagoMetododepago+'</td>');
                                    $tr.append('<td>'+pago.VentapagoCantidad+'</td>');
                                    if(pago.VentapagoReferencia == null)
                                    {
                                        $tr.append('<td>###</td>');
                                    }else{
                                        $tr.append('<td>'+pago.VentapagoReferencia+'</td>');
                                    }
                                    
                                    if(pago.VentapagoCuatrodigitos == null)
                                    {
                                        $tr.append('<td>###</td>');
                                    }else{
                                        $tr.append('<td>'+pago.VentapagoCuatrodigitos+'</td>');
                                    }

                                    $modal.find('#pagos_al_momento').append($tr);
                                });

                                //asignar el evento on change al metodo de pago para visualizar los inputs
                                $modal.find('#metodo_de_pago').on('change',function()
                                {
                                  if(this.value == "efectivo")
                                  {
                                    $modal.find('#referencia').attr('hidden',"");
                                    $modal.find('#digitos').attr('hidden',"");
                                  }

                                  if(this.value == "tarjeta")
                                  {
                                    $modal.find('#referencia').removeAttr('hidden');
                                    $modal.find('#digitos').removeAttr('hidden');
                                  }

                                  if(this.value == "vales")
                                  {
                                    $modal.find('#referencia').removeAttr('hidden');
                                    $modal.find('#digitos').attr('hidden',"");
                                  }
                                });
                                
                                var totalDeVenta = data.total;

                                //verificar que no excedamos la cantidad
                                $modal.find('#cantidad_met').on('keyup',function(){
                                  var comparable = parseFloat($(this).val()) + totalAlMomento;
                                  if(totalDeVenta < comparable )
                                  {
                                    $(this).val(totalDeVenta-totalAlMomento);
                                  }
                                });


                                //hacer el pago
                                $modal.find('#btn_add_pago').on('click',function()
                                {
                                  $tr = $('<tr>');
                                  $tr.attr('id',"row_data");
                                  var metodo = $modal.find('#metodo_de_pago option:selected').val();
                                  $tr.append('<td id="metodoRow">'+metodo+'</td>');
                                  var cantidad = $modal.find('#cantidad_met').val();
                                  $tr.append('<td id="cantidadRow">'+cantidad+'</td>');

                                  var booleano = false;

                                  if(metodo == "efectivo")
                                  {
                                    $tr.append('<td id="referenciaRow">N/A</td>');
                                    $tr.append('<td id="digitosRow">N/A</td>');
                                    if(cantidad != "")
                                    {
                                      booleano = true;
                                    }
                                  }


                                  if(metodo == "vales")
                                  {
                                    var referencia = $modal.find('#referencia_pago').val();
                                    $tr.append('<td id="referenciaRow">'+referencia+'</td>');
                                    $tr.append('<td id="digitosRow">N/A</td>');

                                    if(cantidad != "" && referencia != "")
                                    {
                                      booleano = true;
                                    }

                                  }
                                  
                                  if(metodo == "tarjeta")
                                  {
                                    var referencia = $modal.find('#referencia_pago').val();
                                    $tr.append('<td id="referenciaRow">'+referencia+'</td>');
                                    var digitos = $modal.find('#digitos_pago').val();
                                    $tr.append('<td id="digitosRow">'+digitos+'</td>');
                                    if(cantidad != "" && referencia != "" && digitos != "")
                                    {
                                      booleano = true;
                                    }
                                  }
                                  
                                  if(booleano){

                                  
                                    totalAlMomento+=parseFloat(cantidad);
                                    $modal.find('#pago_almomento').html('$'+totalAlMomento);

                                    $tr.append('<td><a href="javascript:;">Eliminar</a></td>');

                                    $tr.find('a').on('click',function(){
                                      var $information = $(this).closest('#row_data');
                                      var cantEliminiar = parseFloat($information.find('#cantidadRow').html());
                                      totalAlMomento-= cantEliminiar;
                                      $information.remove();

                                      
                                    });

                                    $modal.find('#detalles_de_venta').append($tr);
                                  }

                                  $modal.find('#cantidad_met').val(0);



                                $modal.find('#btn_hacer_pago').click(function() { return false; }); // Adds another click event
                                $modal.find('#btn_hacer_pago').off('click');
                                $modal.find('#btn_hacer_pago').removeAttr('disabled');
                                $modal.find('#btn_hacer_pago').on('click',function(){
                                  
                                  $modal.find('#detalles_de_venta tr').filter(function(){
                                    var cantidadRow = $(this).find('#cantidadRow').html();
                                    if ( "undefined" !== typeof cantidadRow)
                                    {
                                      var referenciaRow = $(this).find('#referenciaRow').html();
                                      var digitosRow = $(this).find('#digitosRow').html();
                                      var metodoRow = $(this).find('#metodoRow').html();
                                      $.ajax({
                                          method: 'POST',
                                          url:'/puntodeventa/hacerPago',
                                          dataType:'JSON',
                                          data:{
                                            id:idventa,
                                            cantidad:cantidadRow,
                                            referencia:referenciaRow,
                                            digitos:digitosRow,
                                            metodo:metodoRow,
                                          }
                                      
                                      });
                                      $modal.find('#btn_hacer_pago').attr('disabled',"").text('Imprimir ticket');
                                      $modal.find('#btn_hacer_pago').click(function() { return false; }); // Adds another click event
                                      $modal.find('#btn_hacer_pago').off('click');

                                      $modal.find('#btn_cancelar_pago').click(function() { return false; }); // Adds another click event
                                      $modal.find('#btn_cancelar_pago').off('click');
                                      $modal.find('#btn_cancelar_pago').text('Regresar');
                                      swal("Éxito","Acción realizada correctamente","success");
                                      $container.find('#tables_information1 a').filter(function(){
                                        $(this).trigger('click');
                                      });
                                      var newFolio = parseInt($container.find('#compra_1 input[name=folio]').val()) + 5;
                                      $container.find('#compra_1 input[name=folio]').val(newFolio);
                                      $container.find('#folio_venta_1').html('Venta '+newFolio);

                                    }else
                                    {
                                      swal("Oopss...","Realiza algún pago","error");
                                    }
                                    
                                  });

                                  
                                });
                                  

                                });

                                //para ver el cambio que tiene que recibir el cliente
                                $modal.find('#recibi').on('keyup',function(){
                                  $recibi = parseFloat($(this).val());
                                  var total = 0;
                                  $modal.find('#detalles_de_venta tr').filter(function(){
                                    if($(this).find('#metodoRow').html() == 'efectivo')
                                    {
                                      var cantidadRow = $(this).find('#cantidadRow').html();
                                      total+=parseFloat(cantidadRow);
                                     
                                    }
                                    
                                  });
                                  var $cambio = parseFloat($recibi) - parseFloat(total);
                                  $modal.find('#cambio').val("$"+$cambio.toFixed(2));
                                
                                });
                                $modal.modal();
                              }
                            });
                        });
                    }
                }
            });

            

           


           


        };
        
        
      

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );