<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class ColoresForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('ColoresForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idcolor',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'color_nombre',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));
        
    }
}