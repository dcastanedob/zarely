<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class PromocionesForm extends Form
{
    public function __construct
    (
         $productos_array = array(), $marcas_array = array(), $variantes_array = array()
    )
    {
        // we want to ignore the name passed
        parent::__construct('PromocionesForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idpromocion',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'promocion_nombre',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 1,
            ),
        ));


        $this->add(array(
            'name' => 'promocion_descripcion',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 1,
            ),
        ));

        $this->add(array(
            'name' => 'promocion_fechainicio',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 1,
            ),
        ));

        $this->add(array(
            'name' => 'promocion_fechafin',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 1,
            ),
        ));

      

        


        $this->add(array(
            'name' => 'promocion_estatus',
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
                'tabindex' => 11,
            ),
        ));


        $this->add(array(
            'name' => 'idproducto[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $productos_array,   
            ),
            'attributes' => array(
                'required' => false,
                'class' => '',
               
            ),
        ));


        $this->add(array(
            'name' => 'idmarca[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $marcas_array,   
            ),
            'attributes' => array(
                'required' => false,
                'class' => '',
               
            ),
        ));


        $this->add(array(
            'name' => 'idvariante[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $variantes_array,   
            ),
            'attributes' => array(
                'required' => false,
                'class' => '',
               
            ),
        ));

       
        
    }
}