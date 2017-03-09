(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.productos= function(data){
        var _this = $(this);
        var plugin = _this.data('productos');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.productos(this, data);
            
            _this.data('productos', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.productos = function(container, options){
        
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
                        url:'/catalogo/productos/serverside',
                    },
                    columns:[
                        {"data":"idproducto","name":"idproducto","orderable":true},
                        {"data":"producto_modelo","name":"producto_modelo","orderable":true},
                        {"data":"idmarca","name":"idmarca","orderable":true},
                        {"data":"idtemporada","name":"idtemporada","orderable":true},
                        {"data":"producto_precioventa","name":"producto_precioventa","orderable":true},
                        {"data":"producto_preciomayoreo","name":"producto_preciomayoreo","orderable":true},
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
                                      '<form action="/catalogo/productos/eliminar/'+id+'" method="POST">',
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
            
            $container.find('select[name*=idtallaje]').multipleSelect({
                filter:true,
                selectAllText: 'Seleccionar Todos',
                width: '100%',
                allSelected: 'Todos seleccionados',
                countSelected: '# de % Seleccionados',
                //multiple: true,
                //multipleWidth: 100
            });

            $container.find('select[name*=idmaterial]').multipleSelect({
                filter:true,
                selectAllText: 'Seleccionar Todos',
                width: '100%',
                allSelected: 'Todos seleccionados',
                countSelected: '# de % Seleccionados',
                //multiple: true,
                //multipleWidth: 100
            });

            $container.find('select[name*=idcolor]').multipleSelect({
                filter:true,
                selectAllText: 'Seleccionar Todos',
                width: '100%',
                allSelected: 'Todos seleccionados',
                countSelected: '# de % Seleccionados',
                //multiple: true,
                //multipleWidth: 100
            });

            $container.find('select[name*=idmedida]').multipleSelect({
                filter:true,
                selectAllText: 'Seleccionar Todos',
                width: '100%',
                allSelected: 'Todos seleccionados',
                countSelected: '# de % Seleccionados',
                //multiple: true,
                //multipleWidth: 100
            });

            
            
            
            var idproducto = $('input[name=idproducto]').val();
            
            $.ajax({
                url:'/catalogo/productos/getTallajes',
                type: 'POST',
                dataType: 'JSON',
                data:{
                    name: 'tallajes',
                    data: {
                        idproducto:idproducto,
                    },
                },
                success: function (data, textStatus, jqXHR) {
                    $container.find('select[name*=idtallaje]').multipleSelect("setSelects", data);

                    $container.find('#btn_add_tallaje').trigger('click');
                    tallajes_added = data;

                    
                }
            });


            $.ajax({
                url:'/catalogo/productos/getMedidas',
                type: 'POST',
                dataType: 'JSON',
                data:{
                    name: 'medidas',
                    data: {
                        idproducto:idproducto,
                    },
                },
                success: function (data, textStatus, jqXHR) {
                    $container.find('select[name*=idmedida]').multipleSelect("setSelects", data);

                    $container.find('#btn_add_medida').trigger('click');
                    medidas_added = data;

                    
                }
            });

            
            $.ajax({
                url:'/catalogo/productos/getMateriales',
                type: 'POST',
                dataType: 'JSON',
                data:{
                    name: 'materiales',
                    data: {
                        idproducto:idproducto,
                    },
                },
                  success: function (data, textStatus, jqXHR) {
                      $container.find('select[name*=idmaterial]').multipleSelect("setSelects", data);
                    
                  $container.find('#btn_add_material').trigger('click');
                      materiales_added = data;

                   
                }
            });


            $.ajax({
                url:'/catalogo/productos/getColores',
                type: 'POST',
                dataType: 'JSON',
                data:{
                    name: 'colores',
                    data: {
                        idproducto:idproducto,
                    },
                },
                success: function (data, textStatus, jqXHR) {
                    $container.find('select[name*=idcolor]').multipleSelect("setSelects", data);

                    $container.find('#btn_add_color').trigger('click');
                    colores_added = data;
                }
            });

            var tallajes_added = [];
            var materiales_added = [];
            var colores_added = [];
            var medidas_added = [];


            $container.find('#btn_add_tallaje').on('click',function(){
                 
             var tallajes = $container.find('select[name*=idtallaje]').multipleSelect("getSelects");

             var tallajes_text =  $container.find('select[name*=idtallaje]').multipleSelect("getSelects", "text");
             
              tallajes_text.forEach(function(value,index){
                 


                 var id =  tallajes[index];

                 if($.inArray(id,tallajes_added) < 0){
                 
                   var $tr = $('<tr>');
                   
                   $tr.append('<td><input type="hidden" name="tallaje[]" value="'+id+'">'+value+'</td>');
                   $tr.append('<td><a href="javascript:;">Eliminar</a></td>');
                   
                   $tr.find('a').on('click',function(){
                       $tr.remove();
                       
                       var index = tallajes.indexOf(id);
                       if (index > -1) {
                          tallajes.splice(index, 1);
                       }
                       var index =tallajes_added.indexOf(id);
                       if(index> -1)
                       {
                        tallajes_added.splice(index,1);
                       }
                       $container.find('select[name*=idtallaje]') .multipleSelect("setSelects", tallajes);
                   });
                   
                   $container.find('#tabla_tallaje tbody').append($tr);
                   
                   tallajes_added.push(id);
                }
                 
                 
              });
  
            });

            $container.find('#btn_add_medida').on('click',function(){
                 
             var medidas = $container.find('select[name*=idmedida]').multipleSelect("getSelects");

             var medidas_text =  $container.find('select[name*=idmedida]').multipleSelect("getSelects", "text");
             
              medidas_text.forEach(function(value,index){
                 


                 var id =  medidas[index];

                 if($.inArray(id,medidas_added) < 0){
                 
                   var $tr = $('<tr>');
                   
                   $tr.append('<td><input type="hidden" name="medida[]" value="'+id+'">'+value+'</td>');
                   $tr.append('<td><a href="javascript:;">Eliminar</a></td>');
                   
                   $tr.find('a').on('click',function(){
                       $tr.remove();
                       
                       var index = medidas.indexOf(id);
                       if (index > -1) {
                          medidas.splice(index, 1);
                       }
                       var index =medidas_added.indexOf(id);
                       if(index> -1)
                       {
                        medidas_added.splice(index,1);
                       }
                       $container.find('select[name*=idmedida]') .multipleSelect("setSelects", medidas);
                   });
                   
                   $container.find('#tabla_medida tbody').append($tr);
                   
                   medidas_added.push(id);
                }
                 
                 
              });
            
            });

            $container.find('#btn_add_material').on('click',function(){
                 
             var materiales = $container.find('select[name*=idmaterial]').multipleSelect("getSelects");

             var materiales_text =  $container.find('select[name*=idmaterial]').multipleSelect("getSelects", "text");
             
              materiales_text.forEach(function(value,index){
                 


                 var id =  materiales[index];

                 if($.inArray(id,materiales_added) < 0){
                 
                   var $tr = $('<tr>');
                   
                   $tr.append('<td><input type="hidden" name="material[]" value="'+id+'">'+value+'</td>');
                   $tr.append('<td><a href="javascript:;">Eliminar</a></td>');
                   
                   $tr.find('a').on('click',function(){
                       $tr.remove();
                       
                       var index = materiales.indexOf(id);
                       if (index > -1) {
                          materiales.splice(index, 1);
                       }
                       var index =materiales_added.indexOf(id);
                       if(index> -1)
                       {
                        materiales_added.splice(index,1);
                       }
                       $container.find('select[name*=idmaterial]') .multipleSelect("setSelects", materiales);
                   });
                   
                   $container.find('#tabla_material tbody').append($tr);
                   
                   materiales_added.push(id);
                }
                 
                 
              });  
            });




            $container.find('#btn_add_color').on('click',function(){
                 
             var colores = $container.find('select[name*=idcolor]').multipleSelect("getSelects");
             var colores_text =  $container.find('select[name*=idcolor]').multipleSelect("getSelects", "text");
             
              colores_text.forEach(function(value,index){
                 


                 var id =  colores[index];

                 if($.inArray(id,colores_added) < 0){
                 
                   var $tr = $('<tr>');
                   
                   $tr.append('<td><input type="hidden" name="color[]" value="'+id+'">'+value+'</td>');
                   $tr.append('<td><input name="uploadedfile' +id+ '"type="file" /></td>');
                   $tr.append('<td><a href="javascript:;">Eliminar</a></td>');
                   
                   $tr.find('a').on('click',function(){
                       $tr.remove();
                       
                       var index = colores.indexOf(id);
                       if (index > -1) {
                          colores.splice(index, 1);
                       }
                       var index =colores_added.indexOf(id);
                       if(index> -1)
                       {
                        colores_added.splice(index,1);
                       }
                       $container.find('select[name*=idcolor]') .multipleSelect("setSelects", colores);
                   });
                   
                   $container.find('#tabla_color tbody').append($tr);
                   
                   colores_added.push(id);
                }
                 
                 
              });

                   
                 
                 
            });


            $container.find('#medidas').on('click',function(){
               var tallajesDisable = $container.find('div[id*=tallajesInformation]').addClass('ocultar');
               var medidasAvailable = $container.find('div[id*=medidasInformation]').removeClass('ocultar');


            });

            $container.find('#numerico').on('click',function(){
               var tallajesAvailable = $container.find('div[id*=tallajesInformation]').removeClass('ocultar');
               var medidasDisable = $container.find('div[id*=medidasInformation]').addClass('ocultar');
              

            });

            $container.find('#ninguno').on('click',function(){
               var tallajesDisable = $container.find('div[id*=tallajesInformation]').addClass('ocultar');
               var medidasDisable = $container.find('div[id*=medidasInformation]').addClass('ocultar');

               
              

            });
        };
        
        
      

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );