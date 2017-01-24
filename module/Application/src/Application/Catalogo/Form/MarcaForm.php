<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class MarcaForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('MarcaForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idmarca',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'marca_nombre',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));
        
    }
}