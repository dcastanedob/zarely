(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.pedidos_pendientes= function(data){
        var _this = $(this);
        var plugin = _this.data('pedidos_pendientes');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.pedidos_pendientes(this, data);
            
            _this.data('pedidos_pendientes', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.pedidos_pendientes = function(container, options){
        
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
            var idproductogeneral = $('input[name=idproducto]').val();
            

            $.ajax({
                url:'/pedidos/pendientes/initializetable',
                type: 'POST',
                dataType: 'JSON',
                data:{
                    idproductogeneral:idproductogeneral,
                  },
                success: function (data, textStatus, jqXHR) {
                    
                    var tmpl = [
                        '<div id="">',
                            '<table id="variantecantidad" class="table table-bordered table-nowrap dataTable" cellspacing="0" width="100%">',
                                '<thead>',
                                    '<th>Sucursal</th>',
                                    '<th>Variante</th>',
                                    '<th>Fotografía</th>',
                                    '<th id="tallaje70">7.0</th>',
                                    '<th id="tallaje75">7.5</th>',
                                    '<th id="tallaje80">8.0</th>',
                                    '<th id="tallaje85">8.5</th>',
                                    '<th id="tallaje90">9.0</th>',
                                    '<th id="tallaje95">9.5</th>',
                                    '<th id="tallaje100">10.0</th>',
                                    '<th id="tallaje105">10.5</th>',
                                    '<th id="tallaje110">11.0</th>',
                                    '<th id="tallaje115">11.5</th>',
                                    '<th id="tallaje120">12.0</th>',
                                    '<th id="tallaje125">12.5</th>',
                                    '<th id="tallaje130">13.0</th>',
                                    '<th id="tallaje135">13.5</th>',
                                    '<th id="tallaje140">14.0</th>',
                                    '<th id="tallaje145">14.5</th>',
                                    '<th id="tallaje150">15.0</th>',
                                    '<th id="tallaje155">15.5</th>',
                                    '<th id="tallaje160">16.0</th>',
                                    '<th id="tallaje165">16.5</th>',
                                    '<th id="tallaje170">17.0</th>',
                                    '<th id="tallaje175">17.5</th>',
                                    '<th id="tallaje180">18.0</th>',
                                    '<th id="tallaje185">18.5</th>',
                                    '<th id="tallaje190">19.0</th>',
                                    '<th id="tallaje195">19.5</th>',
                                    '<th id="tallaje200">20.0</th>',
                                    '<th id="tallaje205">20.5</th>',
                                    '<th id="tallaje210">21.0</th>',
                                    '<th id="tallaje215">21.5</th>',
                                    '<th id="tallaje220">22.0</th>',
                                    '<th id="tallaje225">22.5</th>',
                                    '<th id="tallaje230">23.0</th>',
                                    '<th id="tallaje235">23.5</th>',
                                    '<th id="tallaje240">24.0</th>',
                                    '<th id="tallaje245">24.5</th>',
                                    '<th id="tallaje250">25.0</th>',
                                    '<th id="tallaje255">25.5</th>',
                                    '<th id="tallaje260">26.0</th>',
                                    '<th id="tallaje265">26.5</th>',
                                    '<th id="tallaje270">27.0</th>',
                                    '<th id="tallaje275">27.5</th>',
                                    '<th id="tallaje280">28.0</th>',
                                    '<th id="tallaje285">28.5</th>',
                                    '<th id="tallaje290">29.0</th>',
                                    '<th id="tallaje295">29.5</th>',
                                    '<th id="tallaje300">30.0</th>',
                                    '<th id="tallaje305">30.5</th>',
                                    '<th id="tallaje310">31.0</th>',
                                    '<th id="tallaje315">31.5</th>',
                                    '<th id="tallaje320">32.0</th>',
                                    '<th id="tallaje325">32.5</th>',
                                    '<th id="tallaje330">33.0</th>',
                                    '<th id="tallaje335">33.5</th>',
                                    '<th id="tallaje340">34.0</th>',
                                    '<th id="tallaje345">34.5</th>',
                                    '<th id="tallaje350">35.0</th>',
                                '</thead>',
                                '<tbody id="contenido">',
                                '</tbody>',
                            '</table>',
                        '</div>',
                              
                    ].join('');

                    $table = $(tmpl);

                    
                    variantesDisponibles = [];
                    $.each(data.data,function(indexSucursal, sucursal){

                   
                        $.each(sucursal,function(index, value){

                          $tr = $('<tr>');
                          $tr.attr('id',indexSucursal);
                          $tr.append('<td id="sucursal"></td>');
                          $tr.append('<td>'+index+'</td>');
                          $tr.append('<td id="fotografia"></td>');
                          for(var i = 70; i<=350;)
                          {
                            $tr.append('<td id="'+i+'"></td>'); 
                            i+=5;
                          }

                          

                          $.each(value,function(indexVariante, valueVariante){

                            
                            $img = $('<img>');
                            $img.attr('src',valueVariante.fotografia);
                            $img.attr('width',100);
                            $img.attr('height',100);

                            $tr.find('#fotografia').append($img);
                            $tr.find('#sucursal').append(valueVariante.sucursal);
                            console.log(valueVariante);
                            $.each(valueVariante.talla,function(talla, cantidad)
                            {
                                variantesDisponibles.push(talla*10);
                                $a = $('<a>');
                                $a.attr('id',valueVariante.variante[talla]);
                                $a.attr('href','#');
                                $a.append(cantidad);
                                $a.numeric();
                                
                                $tr.find('#'+(talla*10)).append($a);
                            });
                            
                          });

                          

                          $table.find('#contenido').append($tr);

                          $tr.find('a').filter(function(){

                            $(this).on('click',function(){
                                
                                var idvariante = $(this).attr('id');
                                var idSucursal = $(this).closest('tr').attr('id');

                                $modal = null;

                                $.ajax({
                                    url:'/pedidos/pendientes/getdetails',
                                    method:'post',
                                    dataType:'json',
                                    data:{
                                        idvariante:idvariante,
                                        idSucursal:idSucursal,
                                    },
                                    success:function(data){

                                        var tmpl = [
                                        '<div id="modalBounceInLeft" tabindex="-1" role="dialog" class="modal in">',
                                              '<div class="modal-dialog" style="width:60%; max-height: 80vh">',
                                               ' <div class="modal-content animated bounceInLeft">',
                                                '  <div class="modal-header">',
                                                    ' <button type="button" class="close" data-dismiss="modal">',
                                                      '<span aria-hidden="true">×</span>',
                                                      '<span class="sr-only">Close</span>',
                                                    '</button>',
                                                    '<h3 class="text-primary">Detalles</h3>',
                                                   
                                                  '</div>',
                                                  
                                                 ' <div id="scrolltable" class="modal-body">',
                                                    '<table id="details" class="table  table-bordered table-nowrap dataTable" cellspacing="0" width="100%">',
                                                        '<thead>',
                                                            '<th>Sucursal</th>',
                                                            '<th>Fecha</th>',
                                                            '<th>Cantidad</th>',
                                                            '<th>Estatus</th>',
                                                            '<th>Opciones</th>',
                                                        '</thead>',
                                                        '<tbody>',
                                                        '</tbody>',
                                                    '</table>',
                                                  '</div>',
                                                  '<div class="modal-footer">',
                                                    '<a href="" type"button" class="btn btn-info">Regresar</a>',
                                                  '</div>',
                                                '</div>',
                                              '</div>',
                                            '</div>',
                                        ].join('');


                                        $modal = $(tmpl);

                                        data.data.forEach(function(value,index){
                                             console.log(value);
                                            $select = $('<select>');
                                            $select.append('<option value="pendiente">Pendiente</option>');
                                            $select.append('<option value="solicitado">Solicitado</option>');
                                            $select.append('<option value="transito">Transito</option>');
                                            $select.append('<option value="completado">Completado</option>');

                                            $select.find('option[value='+value.pedido_estatus+']').attr('selected',true);

                                            console.log($select);
                                            $tr = $('<tr>');
                                            $tr.attr('id',value.idpedido);
                                            $tr.append('<td>'+value.idsucursal+'</td>');
                                            $tr.append('<td>'+value.pedido_fecha+'</td>');
                                            $tr.append('<td><input name="pedido_cantidad" class="form-control" value="'+value.pedido_cantidad+'" disabled></td>');
                                            $tr.append('<td><select class="form-control">'+$select.html()+'</select></td>');
                                            $tr.append('<td><button class="btn btn-primary">Guardar</button></td>');
                                            
                                            $modal.find('#details tbody').append($tr);


                                            $tr.find('button').on('click',function(){

                                                var $tr = $(this).closest('tr');

                                                var pedido_estatus = $tr.find('select option:selected').val();
                                                $.ajax({
                                                    method: 'POST',
                                                    url:'/pedidos/pendientes/actualizarinformacion',
                                                    dataType: 'json',
                                                    data:{
                                                        idpedido:value.idpedido,
                                                        pedido_estatus:pedido_estatus,
                                                    },
                                                    success: function(data){
                                                        console.log(data);
                                                      if(data.response){
                                                        swal("Éxito","Estatus actualizado!!!  ","success");
                                                      }
                                                      
                                                    },
                                                })
                                            });


                                            $modal.modal();


                                            


                                        });

                                        $modal.find('.dataTable').dataTable(
                                        {
                                            language: {
                                              url: "/json/datatable_es.json",

                                            },
                                            "scrollX": true,
                                        });

                                        

                                    }
                                });

                                
                            });
                          });

                          
                        });
                     })

                    for(var i = 70; i<=350;)
                    {
                      var bandera = false;
                      for(var j = 0; j < variantesDisponibles.length; j++)
                      {
                        if(i == parseInt(variantesDisponibles[j]))
                        {
                          bandera = true;
                          break;
                        }
                      }
                      if(!bandera)
                      {
                        $table.find('#'+(i)).remove();
                        $table.find('#tallaje'+i).remove();
                      }
                      i+=5;
                    }


                    $('div.card-body').append($table);
                    $container.find('.dataTable').dataTable(
                    {
                        language: {
                          url: "/json/datatable_es.json",

                        },
                        "scrollX": true,
                    });
                    
                }
            });


            


        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );