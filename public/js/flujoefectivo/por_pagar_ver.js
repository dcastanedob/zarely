(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.por_pagar_ver= function(data){
        var _this = $(this);
        var plugin = _this.data('por_pagar_ver');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.por_pagar_ver(this, data);
            
            _this.data('por_pagar_ver', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.por_pagar_ver = function(container, options){
        
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
            
            $container.find('input[name=cuentabancariamovimiento_fechamovimiento]').datepicker({
                language:'en',
            });

            $container.find('input[name=cuentabancariamovimiento_cantidad]').numeric();
          

            $container.find('#guardarbtn').on('click',function(){

                var idcompra = $('input[name=idcompra]').val();
                var cantidad = $('input[name=cuentabancariamovimiento_cantidad]').val();
                var fecha = $('input[name=cuentabancariamovimiento_fechamovimiento]').val();
                var referencia = $('input[name=cuentabancariamovimiento_referencia]').val();
                var cuenta = $('select[name=idcuentabancaria]').val();
                var medio = $('select[name=cuentabancariamovimiento_medio]').val();
                var comprobante = $('input[name=cuentabancariamovimiento_comprobante]').val();
                comprobante = comprobante.substring(comprobante.lastIndexOf("\\") + 1, comprobante.length);

                $.ajax({
                      url:'/flujo-efectivo/porpagar/pago',
                      type: 'POST',
                      dataType: 'JSON',
                      data:{
                          data: {
                              idproceso:idcompra,
                              cuentabancariamovimiento_cantidad:cantidad,
                              cuentabancariamovimiento_fechamovimiento:fecha,
                              cuentabancariamovimiento_referencia:referencia,
                              idcuentabancaria:cuenta,
                              cuentabancariamovimiento_medio:medio,
                              cuentabancariamovimiento_comprobante:comprobante,


                          },
                      },
                      success: function (data, textStatus, jqXHR) {
                        console.log(data.response);
                          if(data.response)
                          {
                            swal("Éxito",data.message,"success");
                            if(data.restante == 0)
                            {
                              swal("Felicidades","Has terminado de pagar","success");
                            }
                            $container.find('#restante').text("$"+data.restante.toFixed(2));

                            var $tr = $('<tr>');
                            $tr.attr('id',data.id);
                            $tr.append('<td>'+fecha+'</td>');
                            $tr.append('<td>'+$('select[name=idcuentabancaria] option:selected').text()+'</td>');
                            $tr.append('<td>$'+cantidad+'</td>');
                            $tr.append('<td>'+medio+'</td>');
                            if(referencia== "")
                            {
                              $tr.append('<td>'+'No tiene'+'</td>');
                            }else{
                              $tr.append('<td>'+referencia+'</td>');
                            }
                            if(comprobante== "")
                            {
                              $tr.append('<td>'+'No tiene'+'</td>');
                            }else{
                              $tr.append('<td><a href="'+data.comprobante+'" target="_blank"><span class="icon icon-file icon-lg "></span></td>');
                            }
                            $tr.append('<td><a id="eliminar" href="javascript:;">Eliminar</a></td>');

                            $tr.find('#eliminar').on('click',function(){
                              var id = $tr.attr('id');
                              var idcompra = $('input[name=idcompra]').val();
                              $.ajax({
                                  url:'/flujo-efectivo/porpagar/eliminarmovimiento',
                                  type: 'POST',
                                  dataType: 'JSON',
                                  data:{
                                      data: {
                                          id:id,
                                          idcompra:idcompra,
                                      },
                                  },
                                  success: function (data, textStatus, jqXHR) {
                                      if(data.response)
                                      {
                                        swal("Éxito",data.message,"success");
                                        $tr.remove();
                                        $container.find('#restante').text("$"+data.restante.toFixed(2));
                                        
                                      }else
                                      {
                                        swal("Oops...",data.message,"error");
                                        
                                      }
                                                        
                                  }
                              });
                               
                               
                            });


                            $container.find('#tabla_movimientos tbody').append($tr);
                            
                          }else
                          {
                            swal("Oops...",data.message,"error");
                            
                          }
                                            
                      }
                });

            });
            
            var id = $('input[name=idcompra]').val();

            $.ajax({
                url:'/flujo-efectivo/porpagar/initialize',
                type: 'POST',
                dataType: 'JSON',
                data:{
                    id:id,
                },
                success: function (data, textStatus, jqXHR) {
                  
                    $.each(data.information,function(index, movimiento){
                      var $tr = $('<tr>');
                      $tr.attr('id',movimiento['idCuentabancariamovimiento']);
                      $tr.append('<td>'+movimiento['fecha']+'</td>');
                      $tr.append('<td>'+movimiento['idCuentabancaria']+'</td>');
                      $tr.append('<td>$'+movimiento['cantidad']+'</td>');
                      $tr.append('<td>'+movimiento['medio']+'</td>');

                      if(movimiento['referencia'] == null)
                      {
                        $tr.append('<td>'+'No tiene'+'</td>');
                      }else{
                        $tr.append('<td>'+movimiento['referencia']+'</td>');
                      }


                      if(movimiento['comprobante'] == null)
                      {
                        $tr.append('<td>'+'No tiene'+'</td>');
                      }else{
                        $tr.append('<td><a href="'+movimiento['comprobante']+'" target="_blank"><span class="icon icon-file icon-lg "></span></td>');
                      }
                      
                      $tr.append('<td><a id="eliminar" href="javascript:;">Eliminar</a></td>');

                      $tr.find('#eliminar').on('click',function(){
                        var id = $tr.attr('id');
                        var idcompra = $('input[name=idcompra]').val();
                        $.ajax({
                            url:'/flujo-efectivo/porpagar/eliminarmovimiento',
                            type: 'POST',
                            dataType: 'JSON',
                            data:{
                                data: {
                                    id:id,
                                    idcompra:idcompra,
                                },
                            },
                            success: function (data, textStatus, jqXHR) {
                                if(data.response)
                                {
                                  swal("Éxicto","Pago eliminado satisfactoriamente","success");
                                  $tr.remove();
                                  $container.find('#restante').text("$"+data.restante.toFixed(2));
                                  
                                }else
                                {
                                  swal("Oops...",data.message,"error");
                                  
                                }
                                                  
                            }
                        });
                         
                         
                      });
                      $container.find('#tabla_movimientos tbody').append($tr);
                    })
                   
                    
                }
            });
            
        };
        
        
      

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );