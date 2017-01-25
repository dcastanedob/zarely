<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class TemporadasForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('TemporadasForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idtemporada',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'temporada_nombre',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));
        
    }
}