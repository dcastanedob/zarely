<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class TipoCalzadosForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('TipoCalzadosForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idtipocalzado',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'tipocalzado_nombre',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        
        
    }
}