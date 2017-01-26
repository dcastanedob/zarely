<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class TallajesForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('TallajesForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idtallaje',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'tallaje_nombre',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_70',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        
    }
}