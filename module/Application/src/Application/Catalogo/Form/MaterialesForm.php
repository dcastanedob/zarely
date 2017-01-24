<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class MaterialesForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('MaterialesForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idmateriales',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'material_nombre',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));
        
    }
}
