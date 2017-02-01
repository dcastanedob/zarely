<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class ProveedoresForm  extends Form
{
    public function __construct($marcas_array = array())
    {
        // we want to ignore the name passed
        parent::__construct('ProveedoresForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idproveedor',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'proveedor_nombrecomercial',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'proveedor_telefono',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'proveedor_celular',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'proveedor_fechainicio',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'proveedor_email',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        
        $this->add(array(
            'name' => 'idmarca[]',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => $marcas_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => '',
               
            ),
        ));

        
    }
}