(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.promociones= function(data){
        var _this = $(this);
        var plugin = _this.data('promociones');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.promociones(this, data);
            
            _this.data('promociones', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.promociones = function(container, options){
        
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
            var $table = $container.find('.dataTable').dataTable(
                {
                    language: {
                      url: "/json/datatable_es.json",

                    },
                    serverSide:true,

                    ajax:{
                        method: 'POST',
                        url:'/catalogo/promociones/serverside',
                    },
                    columns:[
                        {"data":"promocion_nombre","name":"promocion_nombre","orderable":true},
                        {"data":"promocion_esatus","name":"promocion_esatus","orderable":true},
                        {"data":"promocion_fechainicio","name":"promocion_fechainicio","orderable":true},
                        {"data":"promocion_fechafin","name":"promocion_fechafin","orderable":true},
                        {"data":"options","name":"options","orderable":false, class:"td_options"},
                    ],
                    proccesing: true,

                    createdRow: function(row,data,index){
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
                                      '<form action="/catalogo/promociones/eliminar/'+id+'" method="POST">',
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

       


        plugin.initForm = function(){
            
            $container.find('select[name*=idproducto]').multipleSelect({
                filter:true,
                selectAllText: 'Seleccionar Todos',
                width: '100%',
                allSelected: 'Todos seleccionados',
                countSelected: '# de % Seleccionados',
                //multiple: true,
                //multipleWidth: 100
            });

            $container.find('select[name*=idmarca]').multipleSelect({
                filter:true,
                selectAllText: 'Seleccionar Todos',
                width: '100%',
                allSelected: 'Todos seleccionados',
                countSelected: '# de % Seleccionados',
                //multiple: true,
                //multipleWidth: 100
            });

            $container.find('select[name*=idvariante]').multipleSelect({
                filter:true,
                selectAllText: 'Seleccionar Todos',
                width: '100%',
                allSelected: 'Todos seleccionados',
                countSelected: '# de % Seleccionados',
                //multiple: true,
                //multipleWidth: 100
            });

            var dateToday = new Date();
            $container.find('input[name=promocion_fechafin]').datepicker({
                language:'es',
                startDate: 'today',
            }).datepicker("setDate",dateToday);



            $container.find('input[name=promocion_cantidad]').numeric();

            $container.find('input[name=promocion_fechainicio]').datepicker({
                language:'es',
                startDate: 'today',
            }).datepicker("setDate",dateToday);
            
            
            var idpromocion = $('input[name=idpromocion]').val();
            
            $.ajax({
                url:'/catalogo/promociones/getProductos',
                type: 'POST',
                dataType: 'JSON',
                data:{
                    name: 'productos',
                    data: {
                        idpromocion:idpromocion,
                    },
                },
                success: function (data, textStatus, jqXHR) {
                    $container.find('select[name*=producto]').multipleSelect("setSelects", data);

                    $container.find('#btn_add_producto').trigger('click');
                    productos_added = data;

                    
                }
            });


           
            
            $.ajax({
                url:'/catalogo/promociones/getMarcas',
                type: 'POST',
                dataType: 'JSON',
                data:{
                    name: 'marcas',
                    data: {
                        idpromocion:idpromocion,
                    },
                },
                  success: function (data, textStatus, jqXHR) {
                      $container.find('select[name*=marca]').multipleSelect("setSelects", data);
                    
                  $container.find('#btn_add_marca').trigger('click');
                      marcas_added = data;

                   
                }
            });


            $.ajax({
                url:'/catalogo/promociones/getVariantes',
                type: 'POST',
                dataType: 'JSON',
                data:{
                    name: 'variantes',
                    data: {
                        idpromocion:idpromocion,
                    },
                },
                success: function (data, textStatus, jqXHR) {
                    $container.find('select[name*=variante]').multipleSelect("setSelects", data);

                    $container.find('#btn_add_variante').trigger('click');
                    variantes_added = data;
                }
            });

            var productos_added = [];
            var marcas_added = [];
            var variantes_added = [];


            $container.find('#btn_add_producto').on('click',function(){
                 
             var productos = $container.find('select[name*=idproducto]').multipleSelect("getSelects");

             var productos_text =  $container.find('select[name*=idproducto]').multipleSelect("getSelects", "text");
             
              productos_text.forEach(function(value,index){
                 


                 var id =  productos[index];

                 if($.inArray(id,productos_added) < 0){
                 
                   var $tr = $('<tr>');
                   
                   $tr.append('<td><input type="hidden" name="producto[]" value="'+id+'">'+value+'</td>');
                   $tr.append('<td><a href="javascript:;">Eliminar</a></td>');
                   $tr.find('a').on('click',function(){
                       $tr.remove();
                       
                       var index = productos.indexOf(id);
                       if (index > -1) {
                          productos.splice(index, 1);
                       }
                       var index =productos_added.indexOf(id);
                       if(index> -1)
                       {
                        productos_added.splice(index,1);
                       }
                       $container.find('select[name*=idproducto]') .multipleSelect("setSelects", productos);
                   });
                   
                   $container.find('#tabla_producto tbody').append($tr);
                   
                   productos_added.push(id);
                }
                 
                 
              });
  
            });

           
            $container.find('#btn_add_marca').on('click',function(){
                 
             var marcas = $container.find('select[name*=idmarca]').multipleSelect("getSelects");

             var marcas_text =  $container.find('select[name*=idmarca]').multipleSelect("getSelects", "text");
             
              marcas_text.forEach(function(value,index){
                 


                 var id =  marcas[index];

                 if($.inArray(id,marcas_added) < 0){
                 
                   var $tr = $('<tr>');
                   
                   $tr.append('<td><input type="hidden" name="marca[]" value="'+id+'">'+value+'</td>');
                   $tr.append('<td><a href="javascript:;">Eliminar</a></td>');
                   
                   $tr.find('a').on('click',function(){
                       $tr.remove();
                       
                       var index = marcas.indexOf(id);
                       if (index > -1) {
                          marcas.splice(index, 1);
                       }
                       var index =marcas_added.indexOf(id);
                       if(index> -1)
                       {
                        marcas_added.splice(index,1);
                       }
                       $container.find('select[name*=idmarca]') .multipleSelect("setSelects", marcas);
                   });
                   
                   $container.find('#tabla_marca tbody').append($tr);
                   
                   marcas_added.push(id);
                }
                 
                 
              });  
            });




            $container.find('#btn_add_variante').on('click',function(){
                 
             var variantes = $container.find('select[name*=idvariante]').multipleSelect("getSelects");
             var variantes_text =  $container.find('select[name*=idvariante]').multipleSelect("getSelects", "text");
             
              variantes_text.forEach(function(value,index){
                 


                 var id =  variantes[index];

                 if($.inArray(id,variantes_added) < 0){
                 
                   var $tr = $('<tr>');
                   
                   $tr.append('<td><input type="hidden" name="variante[]" value="'+id+'">'+value+'</td>');
                   $tr.append('<td><a href="javascript:;">Eliminar</a></td>');
                   
                   $tr.find('a').on('click',function(){
                       $tr.remove();
                       
                       var index = variantes.indexOf(id);
                       if (index > -1) {
                          variantes.splice(index, 1);
                       }
                       var index =variantes_added.indexOf(id);
                       if(index> -1)
                       {
                        variantes_added.splice(index,1);
                       }
                       $container.find('select[name*=idvariante]') .multipleSelect("setSelects", variantes);
                   });
                   
                   $container.find('#tabla_variante tbody').append($tr);
                   
                   variantes_added.push(id);
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