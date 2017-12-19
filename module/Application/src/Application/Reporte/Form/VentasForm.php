<?php

namespace Application\Reporte\Form;

use Zend\Form\Form;

class VentasForm extends Form
{
    public function __construct(
        $vendedor_array = array()


    )
    
    {
        // we want to ignore the name passed
        parent::__construct('VentasForm');
        $this->setAttribute('method', 'post');
        
       
        
        $this->add(array(
            'name' => 'idvendedor[]',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => $vendedor_array,
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

         $this->add(array(
            'name' => 'idestatus[]',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => array(
                    0 => 'No pagada',
                    1 => 'Pagada',

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => '',
                'tabindex' =>5,

            ),
        ));

         $this->add(array(
            'name' => 'idtipo[]',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => array(
                    'venta' => 'Venta',
                    'credito' => 'Crédito',
                    'apartado' => 'Apartado'

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => '',
                'tabindex' =>5,

            ),
        ));
        
    }
}