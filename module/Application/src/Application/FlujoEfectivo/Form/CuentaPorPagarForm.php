<?php

namespace Application\FlujoEfectivo\Form;

use Zend\Form\Form;

class CuentaPorPagarForm extends Form
{
    public function __construct
    (
        $cuentas = array()
    )
    {
        // we want to ignore the name passed
        parent::__construct('CuentaPorPagarForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idcompra',
            'type' => 'Hidden',
        ));
        
        

        $this->add(array(
            'name' => 'cuentabancariamovimiento_comprobante',
            'type' => 'File',
            'attributes' => array(
                'required' => false,
                'class' => 'infput-thick',
                'tabindex' =>4,

            ),
        ));

        $this->add(array(
            'name' => 'cuentabancariamovimiento_referencia',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
                'tabindex' =>4,

            ),
        ));


        $this->add(array(
            'name' => 'cuentabancariamovimiento_cantidad',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>4,

            ),
        ));


        $this->add(array(
            'name' => 'cuentabancariamovimiento_fechamovimiento',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>3,

            ),
        ));


        



        $this->add(array(
            'name' => 'cuentabancariamovimiento_medio',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => array(
                    'cheque' => 'Cheque',
                    'efectivo' => 'Efectivo',
                    'transferencia' => 'Transferencia',

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>5,

            ),
        ));


        $this->add(array(
            'name' => 'idcuentabancaria',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => $cuentas,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>2,
            ),
        ));


        

        


      
        

        
    }
}