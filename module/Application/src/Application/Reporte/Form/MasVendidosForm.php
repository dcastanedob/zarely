<?php

namespace Application\Reporte\Form;

use Zend\Form\Form;

class MasVendidosForm extends Form
{
    public function __construct(
        $marcas_array = array()

    )
    
    {
        // we want to ignore the name passed
        parent::__construct('MasVendidosForm');
        $this->setAttribute('method', 'post');
        
       
        
        $this->add(array(
            'name' => 'idmarca[]',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => $marcas_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => '',
                'tabindex' =>3,
            ),
        ));

        $this->add(array(
            'name' => 'fecha_desde',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>1,

            ),
        ));

        $this->add(array(
            'name' => 'fecha_hasta',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>2,

            ),
        ));
        
    }
}