<?php

namespace Application\PuntoDeVenta\Form;

use Zend\Form\Form;

class PuntoDeVentaVerForm extends Form
{
    public function __construct
    (
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
                'disabled'=> " ",


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
            'type' => 'Text',
            
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>2,
                'disabled'=> " ",

            ),
        ));

        


        $this->add(array(
            'name' => 'venta_tipo',
            'type' => 'Text',
            
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>5,
                'disabled'=> " ",


            ),
        ));


        $this->add(array(
            'name' => 'venta_estatuspago',
            'type' => 'Text',
            
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
                    'cancelada' => 'Cancelada',
                    'completada' => 'Completada',
                    'procesando' => 'Procesando',

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>5,

            ),
        ));


        $this->add(array(
            'name' => 'idproductovariante1[]',
            'type' => 'Text',
            
            'attributes' => array(
                'required' => true,
                'class' => '',
                

               
            ),
        ));

        $this->add(array(
            'name' => 'idempleadovendedor',
            'type' => 'Text',
            
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'disabled'=> " ",


               
            ),
        ));

        $this->add(array(
            'name' => 'idproductovariante2[]',
            'type' => 'Text',
            
            'attributes' => array(
                'required' => true,
                'class' => '',
                

               
            ),
        ));

        $this->add(array(
            'name' => 'productos_generales',
            'type' => 'Text',
            
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',


               
            ),
        ));
        

        
    }
}