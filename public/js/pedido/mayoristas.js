(function( $ ){
    
   
   /*
    * Handle input. Call public functions and initializers
    */
   
    $.fn.mayoristas= function(data){
        var _this = $(this);
        var plugin = _this.data('mayoristas');
        
        /*Inicializado ?*/
        if (!plugin) {
            
            plugin = new $.mayoristas(this, data);
            
            _this.data('mayoristas', plugin);
            
            return plugin;
        /*Si ya fue inizializado regresamos el plugin*/    
        }else{
            return plugin;
        }
        
    };
    
    /*
    * Plugin Constructor
    */
   
    $.mayoristas = function(container, options){
        
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

            $container.find('input[name=pedidomayorista_fechasolicitud]').datepicker({
                language:'es',
            });

            $container.find('input[name=pedidomayorista_fechaentrega]').datepicker({
                language:'es',
            });

           
            
            $container.find('select[name*=idproductovariante]').multipleSelect({
                filter:true,
                selectAllText: 'Seleccionar Todos',
                width: '100%',
                allSelected: 'Todos seleccionados',
                countSelected: '# de % Seleccionados',
                //multiple: true,
                //multipleWidth: 100
            });

            $container.find('select[name*=idcliente]').select2();
            
            
            var idpedidomayorista = $('input[name=idpedidomayorista]').val();
            
            $.ajax({
                url:'/pedidos/mayoristas/getProductosvariantes',
                type: 'POST',
                dataType: 'JSON',
                data:{
                    name: 'productosvariantes',
                    data: {
                        idpedidomayorista:idpedidomayorista,
                    },
                },
                success: function (data, textStatus, jqXHR) {
                    $container.find('select[name*=idproductovariante]').multipleSelect("setSelects", data.selects);

                    $container.find('#btn_add_productovariante').trigger('click');
                    $.ajax({
                      url:'/pedidos/mayoristas/getProductosvariantes',
                      type: 'POST',
                      dataType: 'JSON',
                      data:{
                          name: 'productosvariantes',
                          data: {
                              idpedidomayorista:idpedidomayorista,
                          },
                      },
                      success: function (data, textStatus, jqXHR) {
                          $container.find('select[name*=idproductovariante]').multipleSelect("setSelects", data.selects);

                          $container.find('#btn_add_productovariante').trigger('click');
                          productosvariantes_added = data.selects;  
                          console.log(data);
                          for(var i = 0; i<data.selects.length;i++)
                          {
                            
                            $container.find('input[name=cantidad'+data.selects[i]+']').attr('value',data.cantidad[i].replace(".00",""));
                            $container.find('select#'+data.selects[i]).val(1);
                            $container.find('select#'+data.selects[i]).val(data.estatus[i]);
                            $container.find('select#'+data.selects[i]).change();
                          }
                                            
                      }
                  });
                                      
                }
            });







            var productosvariantes_added = [];



            $container.find('#btn_add_productovariante').on('click',function(){
                 
             var productovariantes = $container.find('select[name*=idproductovariante]').multipleSelect("getSelects");

             var productovariantes_text =  $container.find('select[name*=idproductovariante]').multipleSelect("getSelects", "text");
             
              productovariantes_text.forEach(function(value,index){
                 

                 var id =  productovariantes[index];

                 if($.inArray(id,productosvariantes_added) < 0){
                   
                  $.ajax({
                    method: 'POST',
                    url:'/pedidos/mayoristas/initializetable',
                    dataType:'JSON',
                    data:{
                      id:id,
                    },success:function(data){


                      $.each(data.data,function(index, tables){
                        $.each(tables,function(indexRango, value){

                          var tmpl = [
                            '<div id="details" style="overflow:auto"> ',
                              '<table  class="table table-bordered table-nowrap" cellspacing="0" width="100%">',
                                  '<thead>',
                                      '<th style="width:10px">Modelo</th>',
                                      '<th style="width:10px">Variante</th>',
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
                                      '<th>Acción</th>',
                                  '</thead>',
                                  '<tbody id="content">',
                                  '</tbody>',
                              '</table>',
                            '</div>',
                                    
                          ].join('');

                          

                          $information = $(tmpl);
                          $tr = $('<tr>');

                          $tr.append('<td><input id="modelo" disabled></input></td>');
                          $tr.append('<td>'+index+'</td>');
                          for(var i = 70; i<=350;)
                          {
                            $tr.append('<td id="'+i+'"></td>'); 
                            i+=5;
                          }

                          variantesDisponibles = [];
                          idVariantesDisponibles = [];
                          var referencia = 0;
                          $.each(value,function(indexVariante, valueVariante){
                            variantesDisponibles.push(valueVariante.talla*10);
                            idVariantesDisponibles.push(valueVariante.variante);

                            $input = $('<input>');
                            $input.attr('id',valueVariante.variante);
                            $input.attr('size',1);
                            $input.attr('name','cantidad'+valueVariante.variante);
                            $input.attr('value',0);
                            $input.numeric();
                            $tr.find('#'+(valueVariante.talla*10)).append($input);
                            $tr.find('#modelo').attr('value',valueVariante.modelo); 
                            referencia = valueVariante.variante;
                            
                          });

                          $trSelect = $('<tr>');
                          $trSelect.append('<td></td><td></td>');

                          for(var i = 70; i<=350;)
                          {
                            var bandera = false;
                            for(var j = 0; j < variantesDisponibles.length; j++)
                            {
                              if(i == parseInt(variantesDisponibles[j]))
                              {
                                $td = $('<td>');
                                $select = $('<select>');
                                $select.attr('id',idVariantesDisponibles[j]);
                                $select.attr('name','estatus'+idVariantesDisponibles[j]);
                                $select.attr('style',"width:40px;");

                                $select.append('<option value="pendiente">Pendiente</option>');
                                $select.append('<option value="solicitado">Solicitado</option>');
                                $select.append('<option value="completado">Completado</option>');
                                $select.append('<option value="transito">Tránsito</option>');
                                $select.append('<option value="cancelado">Cancelado</option>');
                                $td.append($select);

                                $td.find('select').on('change',function(){
                                  var id = $(this).closest('select').find(':selected').text();
                                  
                                  if(id == 'Completado')
                                  {
                                    $(this).closest('select').removeClass();
                                    $(this).closest('select').addClass('selectColorCompletado');
                                  }
                                  else if(id == 'Solicitado')
                                  {
                                    $(this).closest('select').removeClass();
                                    $(this).closest('select').addClass('selectColorSolicitado');
                                  }
                                  else if(id == 'Tránsito')
                                  {
                                    $(this).closest('select').removeClass();
                                    $(this).closest('select').addClass('selectColorTransito');
                                  }
                                  else if(id == 'Cancelado')
                                  {
                                    $(this).closest('select').removeClass();
                                    $(this).closest('select').addClass('selectColorCancelado');
                                  }
                                  else{
                                    $(this).closest('select').removeClass();
                                    $(this).closest('select').addClass('selectColorPendiente');
                                  }
                                });

                                $trSelect.append($td);
                                bandera = true;
                                break;
                              }
                            }
                            if(!bandera)
                            {
                              $tr.find('#'+(i)).remove();
                              $information.find('#tallaje'+i).remove();
                            }
                            i+=5;
                          }

                          $tr.find('input').numeric();
                          $tr.append('<td><a href="javascript:;">Eliminar</a></td>');

                          

                          $information.find('#content').append($tr);
                          $information.find('#content').append($trSelect);

                          $tr.find('a').on('click',function(){
                              var $information = $(this).closest('#details');

                              $information.remove();

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
                              
                          });

                          $tr.find('input').on('keyup',function(){

                            var $information = $(this).closest('#details');
                          });

                          $container.find('#tables_information').append($information);

                          

                          productosvariantes_added.push(id);
                        
                        });

                        
                      
                      });
                        

                    }
                  });

                }
                 
                 
              });
  
            });


            $container.find('#btn_add_productogeneral').on('click',function(){
              var idproductogeneral = $container.find('select[name*=productos_generales] option:selected').val();
              var producto = $container.find('select[name*=productos_generales] option:selected').html();

              $.ajax({
                  method: 'POST',
                  url:'/pedidos/mayoristas/getdetails',
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
                                '<h3 class="text-primary">Detalles del producto '+producto+'</h3>',
                               
                              '</div>',
                              
                             ' <div class="modal-body" style="overflow-x:auto;">',
                                '<table id="details" class="table table-bordered table-nowrap dataTable" cellspacing="0" width="100%">',
                                    '<thead>',
                                        '<th>Variante</th>',
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

                      variantesDisponibles = [];

                      $.each(value,function(indexVariante, valueVariante){
                        variantesDisponibles.push(valueVariante.talla*10);

                        $input = $('<input>');
                        $input.attr('id',valueVariante.variante);
                        $input.attr('size',1);
                        $input.attr('name','variantes');
                        $input.numeric();
                        $tr.find('#'+(valueVariante.talla*10)).append($input);
                        
                      });

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
                          $tr.find('#'+(i)).remove();
                          $modal.find('#tallaje'+i).remove();
                        }
                        i+=5;
                      }

                      $tr.append('<td><button class="btn btn-primary">Guardar</button></td>');
                      $modal.find('#details tbody').append($tr);


                      $tr.find('button').on('click',function(){

                          var $tr = $(this).closest('tr');

                          var selects = [];
                          var value = [];

                          $tr.find('input[name=variantes]').filter(function(){
                            if($(this).val() != "")
                            {
                              
                              var id = $(this).attr("id");
                              var cantidadVariante = $(this).val();
                              console.log(value);
                              $.ajax({
                                method: 'POST',
                                url:'/pedidos/mayoristas/initializetablegeneral',
                                dataType:'JSON',
                                data:{
                                  id:id,
                                },success:function(data){

                                  var value = $container.find('input[name*=cantidad'+id+']');
                                  if(value.length ==0){

                                    $.each(data.data,function(index, tables){
                                      $.each(tables,function(indexRango, value){

                                        var tmpl = [
                                          '<div id="details" style="overflow:auto"> ',
                                            '<table  class="table table-bordered table-nowrap" cellspacing="0" width="100%">',
                                                '<thead>',
                                                    '<th>Modelo</th>',
                                                    '<th>Variante</th>',
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
                                                    '<th>Acción</th>',
                                                '</thead>',
                                                '<tbody id="content">',
                                                '</tbody>',
                                            '</table>',
                                          '</div>',
                                                  
                                        ].join('');

                                        

                                        $information = $(tmpl);
                                        $tr = $('<tr>');

                                        $tr.append('<td><input id="modelo" disabled></input></td>');
                                        $tr.append('<td>'+index+'</td>');


                                        for(var i = 70; i<=350;)
                                        {
                                          $tr.append('<td id="'+i+'"></td>'); 
                                          i+=5;
                                        }

                                        variantesDisponibles = [];
                                        var referencia = 0;
                                        idVariantesDisponibles = [];
                                        $.each(value,function(indexVariante, valueVariante){
                                          variantesDisponibles.push(valueVariante.talla*10);
                                          idVariantesDisponibles.push(valueVariante.variante);

                                          $input = $('<input>');
                                          $input.attr('id',valueVariante.variante);
                                          $input.attr('size',1);
                                          $input.attr('name','cantidad'+valueVariante.variante);
                                          $input.attr('value',0);
                                          $input.numeric();
                                          $tr.find('#'+(valueVariante.talla*10)).append($input);
                                          $tr.find('#modelo').attr('value',valueVariante.modelo); 
                                          referencia = valueVariante.variante;
                                          
                                        });

                                        $trSelect = $('<tr>');
                                        $trSelect.append('<td></td><td></td>');

                                        for(var i = 70; i<=350;)
                                        {
                                          var bandera = false;
                                          for(var j = 0; j < variantesDisponibles.length; j++)
                                          {
                                            if(i == parseInt(variantesDisponibles[j]))
                                            {
                                              $td = $('<td>');
                                              $select = $('<select>');
                                              $select.attr('id',idVariantesDisponibles[j]);
                                              $select.attr('name','estatus'+idVariantesDisponibles[j]);
                                              $select.attr('style',"width:40px;");
                                              $select.append('<option value="pendiente">Pendiente</option>');
                                              $select.append('<option value="solicitado">Solicitado</option>');
                                              $select.append('<option value="completado">Completado</option>');
                                              $select.append('<option value="transito">Tránsito</option>');
                                              $select.append('<option value="cancelado">Cancelado</option>');
                                              $td.append($select);


                                              $trSelect.append($td);

                                              bandera = true;
                                              break;
                                            }
                                          }
                                          if(!bandera)
                                          {
                                            $tr.find('#'+(i)).remove();
                                            $information.find('#tallaje'+i).remove();
                                          }
                                          i+=5;
                                        }

                                        $tr.find('input').numeric();
                                        $tr.append('<td><a href="javascript:;">Eliminar</a></td>');

                                        

                                        $information.find('#content').append($tr);
                                        $information.find('#content').append($trSelect);

                                        $tr.find('a').on('click',function(){
                                            var $information = $(this).closest('#details');

                                            $information.remove();

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
                                            
                                        });

                                        $tr.find('input[name*=cantidad'+id+']').attr('value',cantidadVariante);

                                        $tr.find('input').on('keyup',function(){

                                          var $information = $(this).closest('#details');
                                        });

                                        $container.find('#tables_information').append($information);

                                        

                                        productosvariantes_added.push(id);
                                      
                                      });

                                      
                                    
                                    });
                                  }else
                                  {
                                    $container.find('input[name*=cantidad'+id+']').attr('value',cantidadVariante);
                                    $container.find('input[name*=cantidad'+id+']').keyup();
                                  }

                                }
                              });

                            }

                          });



                      });
                      
                    });

                    $modal.find('.dataTable').dataTable(
                    {
                        language: {
                          url: "/json/datatable_es.json",

                        },
                        "scrollX": true,
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