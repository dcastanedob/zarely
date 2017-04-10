<?php

namespace Application\Transferencia\Form;

use Zend\Form\Form;

class TransferenciaForm extends Form
{
    public function __construct
    (
        $empleados_array = array(),
        $sucursales_array = array(),
        $productosvariante_array = array(),
        $productos_generales_array = array(),
        $user = null
    )
    {
        // we want to ignore the name passed
        parent::__construct('TransferenciaForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idtransferencia',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'transferencia_fecharecepcion',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>1
            ),
        ));

    


        $this->add(array(
            'name' => 'transferencia_fecha',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>3,

            ),
        ));


        $this->add(array(
            'name' => 'transferencia_nota',
            'type' => 'TextArea',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 7
            ),
        ));



        $this->add(array(
            'name' => 'idempleadocreador',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>2,
                'disabled' =>" ",
                'value' =>$user['empleado_nombre'],
            ),
        ));


        $this->add(array(
            'name' => 'idempleadoreceptor',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => $empleados_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>2,
            ),
        ));

        $this->add(array(
            'name' => 'idsucursalorigen',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => $sucursales_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>2,
            ),
        ));

        $this->add(array(
            'name' => 'idsucursaldestino',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => $sucursales_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>2,
            ),
        ));


        

        $this->add(array(
            'name' => 'transferencia_estatus',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => array(
                    'creada' => 'Creada',
                    'aceptada' => 'Aceptada',
                    'rechazada' => 'Rechazada',

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>5,

            ),
        ));


        $this->add(array(
            'name' => 'idproductovariante[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $productosvariante_array,   
            ),
            'attributes' => array(
                'required' => true,
                'class' => '',
                

               
            ),
        ));

        $this->add(array(
            'name' => 'productos_generales',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $productos_generales_array,   
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',


               
            ),
        ));
        

        
    }
}