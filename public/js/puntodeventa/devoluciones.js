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
                      $tr.append('<td><input id="devolucion'+object.id+'" name="devolucion'+object.id+'"size="5"></input></td>');
                      $tr.append('<td>'+object.nombre+'</td>')

                      //verificamos que no sobrepase el límite de devoluciones con los que comp´ro
                      $tr.find('#devolucion'+object.id).on('keyup',function()
                      {
                        if($(this).val()>object.cantidad)
                        {
                            $(this).val(object.cantidad);
                        }
                      });
                      $container.find('#tables_information').append($tr);
                      $container.find('input').numeric();
                    }); 

            
                    
                }
            });

            

           


           


        };
        
        
      

        /*
        * Plugin initializing
        */
        
        plugin.init();
       
    }
    
    
    
})( jQuery );