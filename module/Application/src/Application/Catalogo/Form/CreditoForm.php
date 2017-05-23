<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class CreditoForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('CreditoForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idcliente',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'cliente_limitecredito',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'cliente_creditorestante',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));
        
    }
}