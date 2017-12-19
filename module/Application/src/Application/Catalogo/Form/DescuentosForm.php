<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class DescuentosForm extends Form
{
    public function __construct
    (
         $productos_array = array(), $marcas_array = array(), $variantes_array = array()
    )
    {
        // we want to ignore the name passed
        parent::__construct('DescuentosForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'iddescuento',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'descuento_nombre',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 1,
            ),
        ));

        $this->add(array(
            'name' => 'descuento_cantidad',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 1,
            ),
        ));

        $this->add(array(
            'name' => 'descuento_descripcion',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 1,
            ),
        ));

        $this->add(array(
            'name' => 'descuento_fechainicio',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 1,
            ),
        ));

        $this->add(array(
            'name' => 'descuento_fechafin',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 1,
            ),
        ));

        $this->add(array(
            'name' => 'descuento_tipo',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => array(
                    'porcentaje' => 'Porcentaje',
                    'cantidad' => 'Cantidad',

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 3,
            ),
        ));

        


        $this->add(array(
            'name' => 'descuento_estatus',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => array(
                    1 => 'Activo',
                    0 => 'Inactivo',

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 11,
            ),
        ));


        $this->add(array(
            'name' => 'idproducto[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $productos_array,   
            ),
            'attributes' => array(
                'required' => false,
                'class' => '',
               
            ),
        ));


        $this->add(array(
            'name' => 'idmarca[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $marcas_array,   
            ),
            'attributes' => array(
                'required' => false,
                'class' => '',
               
            ),
        ));


        $this->add(array(
            'name' => 'idvariante[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $variantes_array,   
            ),
            'attributes' => array(
                'required' => false,
                'class' => '',
               
            ),
        ));

       
        
    }
}