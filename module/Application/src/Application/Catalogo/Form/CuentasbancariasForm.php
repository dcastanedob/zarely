<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class CuentasbancariasForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('CuentasbancariasForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idcuentabancaria',
            'type' => 'Hidden',
        ));

        $this->add(array(
            'name' => 'cuentabancaria_banco',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex'=>1,
            ),
        ));

        $this->add(array(
            'name' => 'cuentabancaria_propietario',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
                'tabindex'=>1,
            ),
        ));

        $this->add(array(
            'name' => 'cuentabancaria_cuenta',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex'=>2,
            ),
        ));

        $this->add(array(
            'name' => 'cuentabancaria_saldo',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex'=>3,
            ),
        ));



    }
}
