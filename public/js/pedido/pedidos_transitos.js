(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.pedidos_transitos= function(data){
        var _this = $(this);
        var plugin = _this.data('pedidos_transitos');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.pedidos_transitos(this, data);
            
            _this.data('pedidos_transitos', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.pedidos_transitos = function(container, options){
        
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

            var columns = [
                {"data":"sucursal_nombre","name":"sucursal_nombre","orderable":true},
                {"data":"producto_variantes","name":"producto_variantes","orderable":true},
                {"data":"color_fotografia","name":"color_fotografia","orderable":false},
                {"data":"Tallaje70","name":"Tallaje70","orderable":false},
                {"data":"Tallaje75","name":"Tallaje75","orderable":false},
                {"data":"Tallaje80","name":"Tallaje80","orderable":false},
                {"data":"Tallaje85","name":"Tallaje85","orderable":false},
                {"data":"Tallaje90","name":"Tallaje90","orderable":false},
                {"data":"Tallaje95","name":"Tallaje95","orderable":false},
                {"data":"Tallaje100","name":"Tallaje100","orderable":false},
                {"data":"Tallaje105","name":"Tallaje105","orderable":false},
                {"data":"Tallaje110","name":"Tallaje110","orderable":false},
                {"data":"Tallaje115","name":"Tallaje115","orderable":false},
                {"data":"Tallaje120","name":"Tallaje120","orderable":false},
                {"data":"Tallaje125","name":"Tallaje125","orderable":false},
                {"data":"Tallaje130","name":"Tallaje130","orderable":false},
                {"data":"Tallaje135","name":"Tallaje135","orderable":false},
                {"data":"Tallaje140","name":"Tallaje140","orderable":false},
                {"data":"Tallaje145","name":"Tallaje145","orderable":false},
                {"data":"Tallaje150","name":"Tallaje150","orderable":false},
                {"data":"Tallaje155","name":"Tallaje155","orderable":false},
                {"data":"Tallaje160","name":"Tallaje160","orderable":false},
                {"data":"Tallaje165","name":"Tallaje165","orderable":false},
                {"data":"Tallaje170","name":"Tallaje170","orderable":false},
                {"data":"Tallaje175","name":"Tallaje175","orderable":false},
                {"data":"Tallaje180","name":"Tallaje180","orderable":false},
                {"data":"Tallaje185","name":"Tallaje185","orderable":false},
                {"data":"Tallaje190","name":"Tallaje190","orderable":false},
                {"data":"Tallaje195","name":"Tallaje195","orderable":false},
                {"data":"Tallaje200","name":"Tallaje200","orderable":false},
                {"data":"Tallaje205","name":"Tallaje205","orderable":false},
                {"data":"Tallaje210","name":"Tallaje210","orderable":false},
                {"data":"Tallaje215","name":"Tallaje215","orderable":false},
                {"data":"Tallaje220","name":"Tallaje220","orderable":false},
                {"data":"Tallaje225","name":"Tallaje225","orderable":false},
                {"data":"Tallaje230","name":"Tallaje230","orderable":false},
                {"data":"Tallaje235","name":"Tallaje235","orderable":false},
                {"data":"Tallaje240","name":"Tallaje240","orderable":false},
                {"data":"Tallaje245","name":"Tallaje245","orderable":false},
                {"data":"Tallaje250","name":"Tallaje250","orderable":false},
                {"data":"Tallaje255","name":"Tallaje255","orderable":false},
                {"data":"Tallaje260","name":"Tallaje260","orderable":false},
                {"data":"Tallaje265","name":"Tallaje265","orderable":false},
                {"data":"Tallaje270","name":"Tallaje270","orderable":false},
                {"data":"Tallaje275","name":"Tallaje275","orderable":false},
                {"data":"Tallaje280","name":"Tallaje280","orderable":false},
                {"data":"Tallaje285","name":"Tallaje285","orderable":false},
                {"data":"Tallaje290","name":"Tallaje290","orderable":false},
                {"data":"Tallaje295","name":"Tallaje295","orderable":false},
                {"data":"Tallaje300","name":"Tallaje300","orderable":false},
                {"data":"Tallaje305","name":"Tallaje305","orderable":false},
                {"data":"Tallaje310","name":"Tallaje310","orderable":false},
                {"data":"Tallaje315","name":"Tallaje315","orderable":false},
                {"data":"Tallaje320","name":"Tallaje320","orderable":false},
                {"data":"Tallaje325","name":"Tallaje325","orderable":false},
                {"data":"Tallaje330","name":"Tallaje330","orderable":false},
                {"data":"Tallaje335","name":"Tallaje335","orderable":false},
                {"data":"Tallaje340","name":"Tallaje340","orderable":false},
                {"data":"Tallaje345","name":"Tallaje345","orderable":false},
                {"data":"Tallaje350","name":"Tallaje350","orderable":false},
                


                
                
            ];

            


            var $table = $container.find('.dataTable').dataTable(
                {
                    
                    language: {
                      url: "/json/datatable_es.json",

                    },
                    serverSide:true,

                    ajax:{
                        method: 'POST',
                        url:'/pedidos/transitos/serversideproductovariante',
                        data:{
                          idproducto:$container.find('input[name=idproducto]').val(),
                        },
                    },
                    columns:columns,
                    proccesing: true,
                    "scrollX": true,
                    createdRow: function(row,data,index){
                        $(row).find('a').on('click',function(){
                            var id = $(row).attr('id');
                            $.ajax({
                                url:'/pedidos/transitos/getdetails',
                                method:'post',
                                dataType:'json',
                                data:{idpedido:id},
                                success:function(data){

                                    var tmpl = [
                                    '<div id="modalBounceInLeft" tabindex="-1" role="dialog" class="modal in">',
                                          '<div class="modal-dialog">',
                                           ' <div class="modal-content animated bounceInLeft">',
                                            '  <div class="modal-header">',
                                                ' <button type="button" class="close" data-dismiss="modal">',
                                                  '<span aria-hidden="true">×</span>',
                                                  '<span class="sr-only">Close</span>',
                                                '</button>',
                                                '<h3 class="text-primary">Detalles</h3>',
                                               
                                              '</div>',
                                              
                                             ' <div class="modal-body">',
                                                '<table id="details" class="table table-striped table-nowrap dataTable" cellspacing="0" width="100%">',
                                                    '<thead>',
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
                                         
                                        $select = $('<select>');
                                        $select.append('<option value="pendiente">Pendiente</option>');
                                        $select.append('<option value="solicitado">Solicitado</option>');
                                        $select.append('<option value="transito">Transito</option>');
                                        $select.append('<option value="completado">Completado</option>');

                                        $select.find('option[value='+value.pedido_estatus+']').attr('selected',true);

                                        console.log($select);
                                        $tr = $('<tr>');
                                        $tr.attr('id',value.idpedido);
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
                                                url:'/pedidos/transitos/actualizarinformacion',
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


                                        


                                    });

                                    $modal.modal();
                                  //  console.log($(tmpl));

                                }
                            });
                            
                        });
                    }
                }
            );


        }

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );