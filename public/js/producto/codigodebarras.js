(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.codigodebarras= function(data){
        var _this = $(this);
        var plugin = _this.data('codigodebarras');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.codigodebarras(this, data);
            
            _this.data('codigodebarras', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.codigodebarras = function(container, options){
        
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
                {"data":"producto_codigodebarras","name":"producto_codigodebarras","orderable":true},
                {"data":"producto_modelo","name":"producto_modelo","orderable":true},
                {"data":"productovariante_talla","name":"productovariante_talla","orderable":true},
                {"data":"idmarca","name":"idmarca","orderable":true},
                {"data":"idcolor","name":"idcolor","orderable":true},
                {"data":"idmaterial","name":"idmaterial","orderable":true},
                
            ];

            $.ajax({
              url:'/json/getsucursales',
              dataType:'json',
              async:false,
              success:function(data){
                
                  if(data.response){

                    data.data.forEach(function(value,index){

                      var obj = {
                        data:"sucursal_"+value.idsucursal,
                        name:"sucursal_"+value.idsucursal,
                        orderable:true,
                      };

                      columns.push(obj);

                    });

                    columns.push({"data":"options","name":"options","orderable":false, class:"td_options"});


                  }

              },
            });


            var $table = $container.find('.dataTable').dataTable(
                {
                    language: {
                      url: "/json/datatable_es.json",

                    },
                    serverSide:true,

                    ajax:{
                        method: 'POST',
                        url:'/producto/codigodebarras/serversideproductovariante',
                        data:{
                          idproducto:$container.find('input[name=idproducto]').val(),
                        },
                    },
                    columns:columns,
                    proccesing: true,

                    createdRow: function(row,data,index){
                     
                        $(row).find('button').on('click',function(){


                          $tr = $(this).closest('tr');
                          
                          


                          var id = $tr.attr('id');
                          var result = {
                            id:id,
                            data:[],
                          }; 

                          $tr.find('input[name=existencia]').filter(function(){
                            result.data.push({idsucursal:$(this).siblings('[name=idsucursal]').val(), precio:$(this).val()});
                          });                         


                          console.log(result);
                         

                            $.ajax({
                              url:'/producto/existencias/guardarprecio',
                              type: 'POST',
                              dataType: 'json',
                              data:result,
                              success: function(data){
                                if(data.response){
                                  swal("Éxito","Existencia actualizada!!!  ","success");
                                }
                                
                              },

                          })

                        });
                        $(row).find('.delete_modal').on('click',function(){
                            var id = $(row).attr('id');
                            var tmpl = [
                            '<div id="modalBounceInLeft" tabindex="-1" role="dialog" class="modal in">',
                                  '<div class="modal-dialog">',
                                   ' <div class="modal-content animated bounceInLeft">',
                                    '  <div class="modal-header">',
                                       ' <button type="button" class="close" data-dismiss="modal">',
                                          '<span aria-hidden="true">×</span>',
                                          '<span class="sr-only">Close</span>',
                                        '</button>',
                                      '</div>',
                                      '<form action="/catalogo/precios/eliminar/'+id+'" method="POST">',
                                     ' <div class="modal-body">',
                                        '<div class="text-center">',
                                         ' <span class="text-primary icon icon-times-circle icon-5x"></span>',
                                          '<h3 class="text-primary">Advertencia</h3>',
                                          '<p>¿Estás seguro que deseas eliminar el registro seleccionado?</p>',
                                         ' <div class="m-t-lg">',
                                          '  <button class="btn btn-primary" type="submit">Eliminar</button>',
                                           ' <button class="btn btn-default" data-dismiss="modal" type="button">Cancelar</button>',
                                          '</div>',
                                        '</div>',
                                      '</div>',
                                      '<div class="modal-footer"></div>',
                                    '</div>',
                                  '</div>',
                                '</div>',
                            ].join('');

                            $(tmpl).modal();
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