<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class ProductosForm extends Form
{
    public function __construct
    (
        $calzados_array = array(), $proveedores_array = array(),$marcas_array = array(), $temporadas_array = array(), $tallajes_array = array(), $materiales_array = array(), $colores_array = array(),$medidas_array = array()
    )
    {
        // we want to ignore the name passed
        parent::__construct('ProductForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idproducto',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'producto_modelo',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 1,
            ),
        ));

        $this->add(array(
            'name' => 'producto_dirigidoa',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => array(
                    'dama' => 'Dama',
                    'caballero' => 'Caballero',
                    'nino' => 'Niño',
                    'nina' => 'Niña',
                    'jovenes' => 'Jóvenes',

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 3,
            ),
        ));


        $this->add(array(
            'name' => 'idtipocalzado',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => $calzados_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 5,
            ),
        ));

        $this->add(array(
            'name' => 'producto_precioventa',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 7,
            ),
        ));

        $this->add(array(
            'name' => 'producto_minimo',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 9,
            ),
        ));

        $this->add(array(
            'name' => 'producto_costo',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 12,
            ),
        ));

        $this->add(array(
            'name' => 'producto_comisionable',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => array(
                    0 => 'Sí',
                    1 => 'No',

                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 11,
            ),
        ));


        $this->add(array(
            'name' => 'idproveedor',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => $proveedores_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 2,
            ),
        ));


        $this->add(array(
            'name' => 'idmarca',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => $marcas_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 4,
            ),
        ));

        $this->add(array(
            'name' => 'idtemporada',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => $temporadas_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 6,
            ),
        ));

        $this->add(array(
            'name' => 'producto_preciomayoreo',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 8,
            ),
        ));

        $this->add(array(
            'name' => 'producto_reorden',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
                'tabindex' => 10,
            ),
        ));

        $this->add(array(
            'name' => 'idtallaje[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $tallajes_array,   
            ),
            'attributes' => array(
                'required' => false,
                'class' => '',
               
            ),
        ));


        $this->add(array(
            'name' => 'idmedida[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $medidas_array,   
            ),
            'attributes' => array(
                'required' => false,
                'class' => '',
               
            ),
        ));


        $this->add(array(
            'name' => 'idmaterial[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $materiales_array,   
            ),
            'attributes' => array(
                'required' => true,
                'class' => '',
               
            ),
        ));

        $this->add(array(
            'name' => 'idcolor[]',
            'type' => 'Select',
            'options' => array(
              
            'value_options' => $colores_array,   
            ),
            'attributes' => array(
                'required' => true,
                'class' => '',
               
            ),
        ));
        
    }
}