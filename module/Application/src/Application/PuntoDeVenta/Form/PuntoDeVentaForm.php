<?php

namespace Application\PuntoDeVenta\Form;

use Zend\Form\Form;

class PuntoDeVentaForm extends Form
{
    public function __construct
    (
        $vendedores_array = array(),
        $clientes_array = array(),
        $productosvariante_array = array(),
        $productos_generales_array = array(),
        $user = null,
        $nextId = null
    )
    {
        // we want to ignore the name passed
        parent::__construct('PuntoDeVentaForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idfecha',
            'type' => 'Hidden',
        ));
        
       
    


        $this->add(array(
            'name' => 'venta_fecha',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>3,

            ),
        ));


       



        $this->add(array(
            'name' => 'idempleadocajero',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>2,
                'disabled' =>" ",
                'value' =>$user['empleado_nombre'],
            ),
        ));

        $this->add(array(
            'name' => 'folio',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>2,
                'disabled' =>" ",
                'value' =>$nextId,
            ),
        ));



        $this->add(array(
            'name' => 'idcliente',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => $clientes_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>2,
            ),
        ));

        


        $this->add(array(
            'name' => 'venta_tipo',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => array(
                    'venta' => 'Venta',
                    'credito' => 'Crédito',
                    'apartado' => 'Apartado',

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>5,

            ),
        ));


        $this->add(array(
            'name' => 'venta_estatuspago',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => array(
                    '0' => 'No pagada',
                    '1' => 'Pagada',

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>5,
                'disabled'=> " ",

            ),
        ));


        $this->add(array(
            'name' => 'venta_estatus',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => array(
                    'proceso' => 'En proceso',
                    'terminada' => 'Terminada',
                    'devolucion' => 'Devolución',
                    'cambio' => 'Cambio',

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>5,
                'disabled' =>" ",

            ),
        ));


        $this->add(array(
            'name' => 'idproductovariante1[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $productosvariante_array,   
            ),
            'attributes' => array(
                'required' => true,
                'class' => '',
                

               
            ),
        ));

        $this->add(array(
            'name' => 'idempleadovendedor',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $vendedores_array,   
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                

               
            ),
        ));

        $this->add(array(
            'name' => 'idproductovariante2[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $productosvariante_array,   
            ),
            'attributes' => array(
                'required' => true,
                'class' => '',
                

               
            ),
        ));


        $this->add(array(
            'name' => 'idproductovariante3[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $productosvariante_array,   
            ),
            'attributes' => array(
                'required' => true,
                'class' => '',
                

               
            ),
        ));



        $this->add(array(
            'name' => 'idproductovariante4[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $productosvariante_array,   
            ),
            'attributes' => array(
                'required' => true,
                'class' => '',
                

               
            ),
        ));


        $this->add(array(
            'name' => 'idproductovariante5[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $productosvariante_array,   
            ),
            'attributes' => array(
                'required' => true,
                'class' => '',
                

               
            ),
        ));

        $this->add(array(
            'name' => 'productos_generales',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $productos_generales_array,   
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',


               
            ),
        ));
        

        
    }
}