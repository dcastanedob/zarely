<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class SucursalesForm extends Form
{
    public function __construct($vendedores_array = array(),$cajeros_array = array())
    {
        // we want to ignore the name passed
        parent::__construct('SucursalesForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idsucursal',
            'type' => 'Hidden',
        ));

        $this->add(array(
            'name' => 'sucursal_nombrecomercial',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => '1'
            ),
        ));

        $this->add(array(
            'name' => 'sucursal_razonsocial',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => '2'
            ),
        ));

        $this->add(array(
            'name' => 'sucursal_rfc',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => '2'
            ),
        ));


        $this->add(array(
            'name' => 'sucursal_calle',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => '3'
            ),
        ));

        $this->add(array(
            'name' => 'sucursal_numexterno',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => '4'
            ),
        ));

        $this->add(array(
            'name' => 'sucursal_numinterior',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => '5'
            ),
        ));

        $this->add(array(
            'name' => 'sucursal_colonia',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => '8'
            ),
        ));

        $this->add(array(
            'name' => 'sucursal_codigopostal',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => '9'
            ),
        ));

        $this->add(array(
            'name' => 'sucursal_ciudad',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => '6'
            ),
        ));

        $this->add(array(
            'name' => 'sucursal_estado',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => '7'
            ),
        ));

        $this->add(array(
            'name' => 'idempleadovendedor[]',
            'type' => 'Select',
            'options' => array(

            'value_options' => $vendedores_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => '',
                'tabindex' => '11'

            ),
        ));

        $this->add(array(
            'name' => 'idempleadocajero[]',
            'type' => 'Select',
            'options' => array(

            'value_options' => $cajeros_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => '',
                'tabindex' => '10'

            ),
        ));


    }
}
