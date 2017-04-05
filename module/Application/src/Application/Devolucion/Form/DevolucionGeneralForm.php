<?php

namespace Application\Devolucion\Form;

use Zend\Form\Form;

class DevolucionGeneralForm extends Form
{
    public function __construct
    (
        $proveedores_array = array(),
        $productosvariante_array = array(),
        $productos_generales_array = array()
    )
    {
        // we want to ignore the name passed
        parent::__construct('ProductForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'iddevolucion',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'devolucion_fecha',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>1
            ),
        ));

        $this->add(array(
            'name' => 'devolucion_comprobante',
            'type' => 'File',
            'attributes' => array(
                'required' => false,
                'class' => 'infput-thick',
                'tabindex' =>4,

            ),
        ));


        


        $this->add(array(
            'name' => 'devolucion_nota',
            'type' => 'TextArea',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 7
            ),
        ));



        $this->add(array(
            'name' => 'devolucion_estatus',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => array(
                    'pendiente' => 'Pendiente',
                    'completado' => 'Completado',

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>5,

            ),
        ));


        $this->add(array(
            'name' => 'idproveedor',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => $proveedores_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>2,
            ),
        ));


        



        $this->add(array(
            'name' => 'idproductovariante[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $productosvariante_array,   
            ),
            'attributes' => array(
                'required' => false,
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
                'required' => false,
                'class' => 'form-control infput-thick',


               
            ),
        ));
        

        
    }
}