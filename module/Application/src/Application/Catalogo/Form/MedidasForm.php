<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class MedidasForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('MedidasForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idtallaje',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'medida_nombre',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'medida_l',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'medida_xs',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'medida_s',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'medida_m',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

         $this->add(array(
            'name' => 'medida_xl',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


          $this->add(array(
            'name' => 'medida_xxl',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));



           $this->add(array(
            'name' => 'medida_unitalla',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        


        
    }
}