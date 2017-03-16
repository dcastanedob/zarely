<?php

namespace Application\Compra\Form;

use Zend\Form\Form;

class CompraGeneralForm extends Form
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
            'name' => 'idcompra',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'compra_fechacompra',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'compra_comprobante',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'compra_fechaentrega',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'compra_nota',
            'type' => 'TextArea',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));



        $this->add(array(
            'name' => 'compra_estatus',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => array(
                    'pendiente' => 'Pendiente',
                    'enviada' => 'Enviada',
                    'procesando' => 'Procesando',
                    'en transito' => 'En tránsito',
                    'recibido' => 'Recibido',
                    'revisado' => 'Revisado',

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
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
            ),
        ));


        

        $this->add(array(
            'name' => 'compra_estatuspago',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => array(
                    1 => 'Sí',
                    0 => 'No',

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'idproductovariante[]',
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