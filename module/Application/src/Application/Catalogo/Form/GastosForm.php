<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class GastosForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('GastosForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idgasto',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'gasto_nombre',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'gasto_descripcion',
            'type' => 'Textarea',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
    }
}