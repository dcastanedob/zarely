(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.precios= function(data){
        var _this = $(this);
        var plugin = _this.data('precios');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.precios(this, data);
            
            _this.data('precios', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.precios = function(container, options){
        
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
                {"data":"idproductotallaje","name":"idproductotallaje","orderable":true},
                {"data":"idproducto","name":"idproducto","orderable":true},
                {"data":"idtallaje","name":"idtallaje","orderable":true},
                
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
                        url:'/producto/precios/serverside',
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

                          $tr.find('input[name=precio]').filter(function(){
                            result.data.push({idsucursal:$(this).siblings('[name=idsucursal]').val(), precio:$(this).val()});
                          });                         


                          console.log(result);
                         

                            $.ajax({
                              url:'/producto/precios',
                              type: 'POST',
                              dataType: 'json',
                              data:result,
                              success: function(data){
                                if(data.response){
                                  swal("Éxito","Pedidos actualizados!!!  ","success");
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