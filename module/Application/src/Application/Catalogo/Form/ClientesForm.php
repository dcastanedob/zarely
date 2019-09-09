<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class ClientesForm extends Form
{
    public function __construct(
        $clientes_array = array()
    )
    {
        // we want to ignore the name passed
        parent::__construct('ClientesForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idcliente',
            'type' => 'Hidden',
        ));

        $this->add(array(
            'name' => 'cliente_nombre',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 2,
            ),
        ));

        $this->add(array(
            'name' => 'cliente_apaterno',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 3,
            ),
        ));

        $this->add(array(
            'name' => 'cliente_amaterno',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 4,
            ),
        ));


        $this->add(array(
            'name' => 'cliente_rfc',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
                'tabindex' => 15,
            ),
        ));


        $this->add(array(
            'name' => 'cliente_razonsocial',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
                'tabindex' => 14,
            ),
        ));


        $this->add(array(
            'name' => 'cliente_callefiscal',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
                'tabindex' => 16,
            ),
        ));

        $this->add(array(
            'name' => 'cliente_numerofiscal',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
                'tabindex' => 17,
            ),
        ));

        $this->add(array(
            'name' => 'cliente_interiorfiscal',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
                'tabindex' => 18,
            ),
        ));


        $this->add(array(
            'name' => 'cliente_coloniafiscal',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
                'tabindex' => 19,
            ),
        ));


        $this->add(array(
            'name' => 'cliente_ciudadfiscal',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
                'tabindex' => 21,
            ),
        ));


        $this->add(array(
            'name' => 'cliente_cpfiscal',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
                'tabindex' => 20,
            ),
        ));


        $this->add(array(
            'name' => 'cliente_estadofiscal',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
                'tabindex' => 22,
            ),
        ));


        $this->add(array(
            'name' => 'cliente_calle',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 7,
            ),
        ));

        $this->add(array(
            'name' => 'cliente_numero',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 8,
            ),
        ));

        $this->add(array(
            'name' => 'cliente_interior',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 9,
            ),
        ));

        $this->add(array(
            'name' => 'cliente_limitecredito',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
                'tabindex' => 21,
            ),
        ));


        $this->add(array(
            'name' => 'cliente_colonia',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 10,
            ),
        ));


        $this->add(array(
            'name' => 'cliente_cp',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 11,
            ),
        ));


        $this->add(array(
            'name' => 'cliente_ciudad',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 12,
            ),
        ));


        $this->add(array(
            'name' => 'cliente_estado',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 13,
            ),
        ));




        $this->add(array(
            'name' => 'cliente_tipo',
            'type' => 'Select',
            'options' => array(

                'value_options' => array(
                    'mayorista' => 'Mayorista',
                  
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 5,
            ),
        ));



        $this->add(array(
            'name' => 'cliente_estatus',
            'type' => 'Select',
            'options' => array(

                'value_options' => array(
                    1 => 'Activo',
                    0 => 'Inactivo',
                ),
            ),

            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 6,
            ),
        ));


        $this->add(array(
            'name' => 'cliente_credito',
            'type' => 'Select',
            'options' => array(

                'value_options' => array(
                    1 => 'Si',
                    0 => 'No',
                ),
            ),

            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 20,
            ),
        ));




        $this->add(array(
            'name' => 'cliente_fecharegistro',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 1,
            ),
        ));


        $this->add(array(
            'name' => 'idclientes[]',
            'type' => 'Select',
            'options' => array(

            'value_options' => $clientes_array,
            ),
            'attributes' => array(
                'required' => false,
                'class' => '',



            ),
        ));

    }
}
