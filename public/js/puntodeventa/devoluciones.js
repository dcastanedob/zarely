(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.devoluciones= function(data){
        var _this = $(this);
        var plugin = _this.data('devoluciones');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.devoluciones(this, data);
            
            _this.data('devoluciones', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.devoluciones = function(container, options){
        
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


        var ventaTotal = parseFloat($('input[name=venta_total]').val());

        calcularTotal = function(){
          var total = 0;
          $container.find('#tables_information1 tr').filter(function(){
            subtotal = accounting.unformat($(this).find('input.transferenciadetalle_subtotal').val());
            total+= parseFloat(subtotal);

          });
          var subtotal = total/1.16;
          $container.find('input[name=transferencia_subtotal1]').val(accounting.formatMoney(subtotal));
          $container.find('input[name=transferencia_total1]').val(accounting.formatMoney(total));

          var iva = total-subtotal;
          $container.find('input[name=transferencia_iva1]').val(accounting.formatMoney(iva));

          $container.find('#diferencia_venta').val(accounting.formatMoney(ventaTotal-total));

        }

        calcularSubtotal = function($row){
          var cantidad = 0;

          $row.find('input[name*=cantidad]').filter(function(){
            cantidad+=parseInt($(this).val());

          });

          //var cantidad = parseFloat($row.find('input[name*=cantidad]').val());
          console.log($row);
          var precio = parseFloat($row.find('input#precio').val());
          var descuento = parseFloat($row.find('input#descuento').val());
          var subtotal = cantidad * precio;
          subtotal = subtotal - (subtotal*(descuento/100));

          $row.find('input.transferenciadetalle_subtotal').val(accounting.formatMoney(subtotal));
          calcularTotal();
        }

        plugin.initForm = function(){


            $container.find('select[name=venta_estatus]').attr('disabled',"");
            $container.find('select[name*=idproductovariante1]').multipleSelect({
                filter:true,
                selectAllText: 'Seleccionar Todos',
                width: '100%',
                allSelected: 'Todos seleccionados',
                countSelected: '# de % Seleccionados',
                //multiple: true,
                //multipleWidth: 100
            });

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
                      $tr.attr('id',object.idvariante);
                      $tr.append('<td><input type="checkbox" id="esdevolucion'+object.id+'" name="esdevolucion'+object.id+'"size="5" ></input></td>');
                      $tr.append('<td id="totaldevolucion'+object.id+'">'+object.cantidad+'</td>')
                      $tr.append('<td><input id="devolucion'+object.id+'" value="0" name="devolucion'+object.id+'"size="5" disabled></input></td>');
                      $tr.append('<td>'+object.nombre+'</td>')

                      $tr.find('#esdevolucion'+object.id).on('change',function()
                      {

                        if($(this).is(':checked'))
                        {
                            $container.find('#devolucion'+object.id).removeAttr('disabled');
                        }else{
                            $container.find('#devolucion'+object.id).attr('disabled',"");
                            $container.find('#devolucion'+object.id).val(0);
                            $container.find('#devolucion'+object.id).keyup();
                        }
                      });

                      //verificamos que no sobrepase el límite de devoluciones con los que comp´ro
                      $tr.find('#devolucion'+object.id).on('keyup',function()
                      {
                        if($(this).val()>object.cantidad)
                        {
                            $(this).val(object.cantidad);
                        }
                        var trTemp = $container.find('#devolucion'+object.id).parents('tr');
                        var idVariante = trTemp.attr('id');
                        var totalTemp = parseInt($container.find('#totaldevolucion'+object.id).html());

                        $container.find('input[name=cantidad'+idVariante+']').val(totalTemp-$(this).val());
                        $container.find('input[name=cantidad'+idVariante+']').keyup();
                      });
                      $container.find('#tables_information').append($tr);
                      $container.find('input').numeric();
                    }); 

            
                    
                }
            });

            var productosvariantes_added = [];
            
            $.ajax({
                url:'/puntodeventa/getProductosvariantes',
                type: 'POST',
                dataType: 'JSON',
                data:{
                    name: 'productosvariantes',
                    data: {
                        idventa:idventa,
                    },
                },
                success: function (data, textStatus, jqXHR) {
                    $container.find('select[name*=idproductovariante1]').multipleSelect("setSelects", data.selects);

                    $container.find('#btn_add_productovariante1').trigger('click');
                    productosvariantes_added = data.selects;  
                    alert("");
                    for(var i = 0; i<data.selects.length;i++)
                    {
                    
                        $container.find('input[name=cantidad'+data.selects[i]+']').attr('value',data.cantidad[i].replace(".00",""));
                        $container.find('input[name=preciounitario'+data.selects[i]+']').attr('value',data.precio[i]);
                        $container.find('input[name=preciounitario'+data.selects[i]+']').keyup();
                        $container.find('input[name=descuento'+data.selects[i]+']').attr('value',data.descuento[i]);
                        $container.find('input[name=descuento'+data.selects[i]+']').keyup();
                    }
                                      
                }
            });

            

            $container.find('#btn_add_productovariante1').on('click',function(){
             var productovariantes = $container.find('select[name*=idproductovariante1]').multipleSelect("getSelects");

             var productovariantes_text =  $container.find('select[name*=idproductovariante1]').multipleSelect("getSelects", "text");

              productovariantes_text.forEach(function(value,index){
                 $container.find('#venta_tipo select[name=venta_tipo]').attr('disabled',"");

                 var id =  productovariantes[index];

                 if($.inArray(id,productosvariantes_added) < 0){
                  $.ajax({
                    method: 'POST',
                    url:'/puntodeventa/initializetable',
                    dataType:'JSON',
                    data:{
                      id:id,
                    },success:function(data){

                      console.log(data);
                      var verificarTipo = $container.find('#venta_tipo select[name*=venta_tipo] option:selected').val();
                      $tr = $('<tr id="details">');

                      $tr.append('<td><input type="text" size="5" id="cantidad" value="1" name="cantidad'+data.data.id+'"></input></td>');
                      $tr.append('<td>'+data.data.nombre+'</td>');
                      $tr.append('<td>'+data.data.descripcion+'</td>');
                      $tr.append('<td><input type="text" size="7" id="precio" value="'+data.data.precio+'" name="preciounitario'+data.data.id+'" disabled></input></td>');
                      
                      if(verificarTipo == "venta"){

                        //verificamos que e ldescuento sea mayor que 15
                        if(data.data.descuentoCantidad > 15)
                        {
                          $tr.append('<td><input type="text" size="5" id="" value="'+data.data.descuentoCantidad+'" name="descuento'+data.data.id+'" hidden><input type="text" size="5" id="descuento" value="0" name="descuento'+data.data.id+'" disabled></input></td>');

                        }else{
                          $tr.append('<td><input type="text" size="5" id="descuento" value="0" name="descuento'+data.data.id+'"></input><input type="text" size="5" id="" value="'+data.data.descuentoCantidad+'" name="descuento'+data.data.id+'" hidden></td>');

                        }
                      }else{
                        $tr.append('<td><input type="text" size="5" id="descuento" value="0" name="descuento'+data.data.id+'" disabled></input><input type="text" size="5" id="" value="0" name="descuento'+data.data.id+'" hidden></td>');
                      }

                      $tr.find('input').numeric();
                      $tr.append('<td><input type="text" size="5" class="transferenciadetalle_subtotal" value="0.0" disabled></input></td>');
                      $tr.append('<td><a href="javascript:;">Eliminar</a></td>');
                      
                      $tr.find('a').on('click',function(){
                          var $information = $(this).closest('#details');

                          $information.remove();

                          $container.find('#descuentos'+data.data.id).remove();
                          $container.find('#promociones'+data.data.id).remove();

                          var index = productovariantes.indexOf(id);
                          if (index > -1) {
                             productovariantes.splice(index, 1);
                          }
                          var index =productosvariantes_added.indexOf(id);
                          if(index> -1)
                          {
                           productosvariantes_added.splice(index,1);
                          }
                          $container.find('select[name*=idproductovariante1]') .multipleSelect("setSelects", productovariantes);
                          calcularTotal();
                      });

                      $tr.find('input').on('keyup',function(){

                        var $information = $(this).closest('#details');
                        calcularSubtotal($information)
                      });

                      $tr.find('#cantidad').on('keyup',function(){
                        var cantidad = parseInt($(this).val());
                        if(cantidad > data.data.existencias)
                        {
                          $(this).val(data.data.existencias);
                        }
                        var $information = $(this).closest('#details');
                        calcularSubtotal($information)
                      });

                     
                      if(data.data.promocion)
                      {
                        
                        $tr.find('#cantidad').on('keyup',function(){

                          //calculamos subtotal
                          var $information = $(this).closest('#details');
                          
                          calcularSubtotal($information);

                          //obtenemos el valor tecleado
                          var cantidad = parseInt($(this).val());
                          $(this).val(cantidad);

                          if(cantidad>=1)
                          {
                            //verificamos que podamos aplicar la promocion
                            if(cantidad >= 2)
                            {
                              //hacemos visible la fila
                              $container.find('#promociones'+data.data.id).removeAttr('hidden');

                              //obtenemos las cantidades de promocion
                              var temp = parseInt(cantidad/2);


                              //obtenemos el subtotal
                              var subtotal = (temp * parseFloat(data.data.precio)) * 0.5;

                              $container.find('#promocion_precio'+data.data.id).html(subtotal);

                              //insertamos el subtotal
                              $container.find('#promociones'+data.data.id).find('#detalle_subtotal'+data.data.id).val(accounting.formatMoney(subtotal*-1));
                            }
                            if(cantidad < 2)
                            {
                              $container.find('#promociones'+data.data.id).attr('hidden',"");
                              $container.find('#promociones'+data.data.id+".transferenciadetalle_subtotal").val(accounting.formatMoney(0));
                            }
                          }else{
                            $(this).val(1);
                          
                          }
                          calcularSubtotal($information)
                        });

                      }

                      if(data.data.descuento)
                      {
                        $tr.find('#cantidad').on('keyup',function(){
                          //calculamos subtotal
                          var $information = $(this).closest('#details');
                          calcularSubtotal($information);

                          //obtenemos el valor
                          var cantidad = parseInt($(this).val());
                          $(this).val(cantidad);

                          if(cantidad>=1)
                          {
                            var $descuento = parseFloat($container.find('#precios_unitarios_descuentos'+data.data.id).val());
                            var $total = (-1 * cantidad * $descuento);
                            container.find('#detalle_subtotal'+data.data.id).val($total);
                          }else{
                            $(this).val(1);
                          }
                          calcularSubtotal($information)
                        });
                      }

                      $tr.find('#descuento').on('keyup',function(){
                        var comparable = parseFloat($(this).val()) ;

                        $container.find('#detalle_subtotal'+data.data.id).removeClass('transferenciadetalle_subtotal');
                          //verificamos que el descuento aplicado este en el rango de el descuento aplicado y 15

                        if(15 < comparable )
                        {
                          $(this).val(15);
                        }

                        if(data.data.descuentoCantidad > comparable)
                        {
                          $(this).val(data.data.descuentoCantidad);
                        }

                        var $information = $(this).closest('#details');
                        calcularSubtotal($information);
                      });

                      $container.find('#tables_information1').append($tr);
                      calcularSubtotal($tr); 
                      
                      
                      if(verificarTipo == "venta")
                      {
                        if(data.data.descuento)
                        {
                          $tr = $('<tr id="descuentos'+data.data.id+'">');

                          $tr.append('<td>Descuento</td>');
                          $tr.append('<td>'+data.data.nombreDescuento+'</td>');
                          $tr.append('<td>'+data.data.descripcionDescuento+'</td>');
                          $tr.append('<td>'+data.data.descuentoPrecio+'</td>');
                          $tr.append('<td>'+data.data.descuentoCantidad+'</td>');
                          $tr.append('<td><input id="detalle_subtotal'+data.data.id+'" size="5" class="transferenciadetalle_subtotal" value="'+data.data.descuentoSubtotal+'" disabled="" type="text"></td>');
                          $tr.append('<td><input id="precios_unitarios_descuentos'+data.data.id+'" value="'+data.data.descuentoPrecio+'" disabled hidden></input></td>');
                          $container.find('#tables_information1').append($tr);
                          calcularTotal();
                        }

                        if(data.data.promocion)
                        {
                          $tr = $('<tr id="promociones'+data.data.id+'" bgcolor="#FAF7F7" hidden>');

                          $tr.append('<td>Promoción<input name="id_promocion[]" value="'+data.data.id+'" hidden></input></td>');
                          $tr.append('<td>'+data.data.nombrePromocion+'</td>');
                          $tr.append('<td>'+data.data.descripcionPromocion+'</td>');
                          $tr.append('<td id="promocion_precio'+data.data.id+'"> '+data.data.promocionSubtotal+'</td>');
                          $tr.append('<td></td>');
                          $tr.append('<td><input id="detalle_subtotal'+data.data.id+'" size="5" class="transferenciadetalle_subtotal" value="'+(0)+'" disabled="" type="text"></td>');
                          $tr.append('<td></td>');
                          $container.find('#tables_information1').append($tr);
                          calcularTotal();
                        }
                      }
                      
                      productosvariantes_added.push(id);
                        

                        
                      
                        

                    }

                  });

              }

                 
              });
            
            });

           
            $container.find('#terminar_venta  ').on('click',function(){
              $.ajax({
                    method: 'POST',
                    url:'/puntodeventa/checkday',
                    dataType:'JSON',
                    data:{
                      id:idventa,
                    },success:function(data){
                      if($container.find('#diferencia_venta').val().split("$")[1] > 0 && data.response) 
                      {
                        var tmpl = [
                                    '<div id="modalBounceInLeft" tabindex="-1" role="dialog" class="modal fade bs-example-modal-lg">',
                                          '<div class="modal-dialog">',
                                           ' <div class="modal-content animated bounceInLeft" style="margin-left: -10%;margin-right: -20%;">',
                                            '  <div class="modal-header">',
                                                ' <button type="button" class="close" data-dismiss="modal">',
                                                  '<span aria-hidden="true">×</span>',
                                                  '<span class="sr-only">Close</span>',
                                                '</button>',
                                                '<h3 class="text-primary">Saldo a canjear: </h3>',
                                                '<h3 class="text-primary" id="cantidad_canjear"></h3>',
                                              '</div>',
                                              '<div class="row">',
                                                '<div class="col-md-offset-1 col-md-5">',
                                                  '<button class="btn btn-info buttonSize" data-dismiss="modal" id="canjear_vale">Vale</button>',
                                                '</div>',
                                                '<div class="col-md-5">',
                                                  '<button class="btn btn-success buttonSize" data-dismiss="modal" id="canjear_dinero">Efectivo</button>',
                                                '</div>',
                                              '</div>',
                                              
                                             ' <div class="modal-body" style="overflow-x:auto;">',
                                                  '<hr>',
                                              '</div>',
                                            '</div>',
                                          '</div>',
                                        '</div>',
                                    ].join('');
                        $modal = $(tmpl);
                        $modal.find('#cantidad_canjear').html("$"+$container.find('#diferencia_venta').val().split("$")[1]);
                        $modal.modal();
                      }else if($container.find('#diferencia_venta').val().split("$")[1] == 0)
                      {
                         var data = $('#venta_devolucion').serialize();
              
                        $.post('/puntodeventa/actualizardetalles', data).done(function(e){
                          if(JSON.parse(e).response)
                          {
                            swal("Éxito","Acción realizada correctamente","success");

                          }
                        });

                      }else{
                        
                        var id = idventa;
                        var totalAlMomento = 0;
                        var id_cliente = null;
                        
                        var tmpl = [
                                    '<div id="modalBounceInLeft" tabindex="-1" role="dialog" class="modal fade bs-example-modal-lg">',
                                          '<div class="modal-dialog">',
                                           ' <div class="modal-content animated bounceInLeft" style="margin-left: -30%;margin-right: -30%;">',
                                            '  <div class="modal-header">',
                                                ' <button type="button" class="close" data-dismiss="modal">',
                                                  '<span aria-hidden="true">×</span>',
                                                  '<span class="sr-only">Close</span>',
                                                '</button>',
                                                '<h3 class="text-primary">Detalles de la venta </h3>',
                                               
                                              '</div>',
                                              
                                             ' <div class="modal-body" style="overflow-x:auto;">',
                                                  '<div id="detalle_venta">',
                                                  '</div>',
                                                  '<hr>',
                                                  '<div id="pagos_venta">',
                                                    '<h3>Pagos</h3>',
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
                        $modal = $(tmpl);

                        $table = $('#table_venta1').clone();
                        $table.find('input').attr('disabled',"");
                        $modal.find('#detalle_venta').append($table);
                        $modal.find('#detalle_venta').append($('#informacion_venta1').clone());
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

                        var totalDeVenta =  parseFloat($modal.find('input[name=diferencia_venta]').val().replace("$","").replace(",","")*-1);

                        $modal.find('#cantidad_met').on('keyup',function(){
                          var comparable = parseFloat($(this).val()) + totalAlMomento;
                          if(totalDeVenta < comparable )
                          {
                            $(this).val(totalDeVenta-totalAlMomento);
                          }
                        });

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

                            $tr.append('<td><a href="javascript:;">Eliminar</a></td>');

                            $tr.find('a').on('click',function(){
                              var $information = $(this).closest('#row_data');
                              var cantEliminiar = parseFloat($information.find('#cantidadRow').html());
                              totalAlMomento-= cantEliminiar;
                              $information.remove();

                              if((totalAlMomento) < totalDeVenta)
                              {
                                $modal.find('#btn_hacer_pago').attr('disabled',"");
                              }
                            });

                            $modal.find('#detalles_de_venta').append($tr);
                          }

                          $modal.find('#cantidad_met').val(0);



                          if((totalAlMomento ) >= totalDeVenta)
                          {
                            $modal.find('#btn_hacer_pago').removeAttr('disabled');
                            $modal.find('#btn_hacer_pago').on('click',function(){
                              
                              $modal.find('#detalles_de_venta tr').filter(function(){
                                var cantidadRow = $(this).find('#cantidadRow').html();
                                console.log("undefined" !== typeof cantidadRow);
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
                                        id:id,
                                        cantidad:cantidadRow,
                                        referencia:referenciaRow,
                                        digitos:digitosRow,
                                        metodo:metodoRow,
                                        credito:0,
                                        cliente:id_cliente,
                                      }
                                  
                                  });
                                  $modal.find('#btn_hacer_pago').attr('disabled',"").text('Imprimir ticket');
                                  $modal.find('#btn_hacer_pago').click(function() { return false; }); // Adds another click event
                                  $modal.find('#btn_hacer_pago').off('click');

                                  $modal.find('#btn_cancelar_pago').click(function() { return false; }); // Adds another click event
                                  $modal.find('#btn_cancelar_pago').off('click');
                                  $modal.find('#btn_cancelar_pago').text('Regresar');
                                  swal("Éxito","Acción realizada correctamente","success");
                                  $container.find('#tables_information5 a').filter(function(){
                                    $(this).trigger('click');
                                  });
                                  var newFolio = parseInt($container.find('#compra_5 input[name=folio]').val()) + 5;
                                  $container.find('#compra_5 input[name=folio]').val(newFolio);
                                  $container.find('#folio_venta_5').html('Venta '+newFolio);
                                }else
                                {
                                  swal("Oopss...","Realiza algún pago","error");
                                }
                                
                              });

                              
                            });
                          }

                        });

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

                        
                        $modal.find('input').numeric();
                        $modal.modal({backdrop: 'static', keyboard: false});
                      }
                    }
              });

                
            });

        };
        
        
      

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );