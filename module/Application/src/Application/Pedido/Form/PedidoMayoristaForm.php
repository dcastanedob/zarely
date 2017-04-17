<?php

namespace Application\Pedido\Form;

use Zend\Form\Form;

class PedidoMayoristaForm extends Form
{
    public function __construct
    (
        $clientes_array = array(),
        $productosvariante_array = array(),
        $productos_generales_array = array()
    )
    {
        // we want to ignore the name passed
        parent::__construct('PedidoMayoristaForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idpedido',
            'type' => 'Hidden',
        ));
        


        $this->add(array(
            'name' => 'pedidomayorista_fechasolicitud',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>1,

            ),
        ));

        $this->add(array(
            'name' => 'pedidomayorista_fechaentrega',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>2,

            ),
        ));


        $this->add(array(
            'name' => 'pedidomayorista_nota',
            'type' => 'TextArea',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 5
            ),
        ));



        $this->add(array(
            'name' => 'pedidomayorista_estatus',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => array(
                    'pendiente' => 'Pendiente',
                    'solicitado' => 'Solicitado',
                    'completado' => 'Completado',
                    'transito' => 'En tránsito',
                    'cancelado' => 'Cancelado',

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>4,

            ),
        ));


        $this->add(array(
            'name' => 'idcliente',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => $clientes_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' =>3,
            ),
        ));


        


        $this->add(array(
            'name' => 'idproductovariante[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $productosvariante_array,   
            ),
            'attributes' => array(
                'required' => false,
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