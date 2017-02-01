<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class EmpleadosForm extends Form
{
    public function __construct($roles_array = array())
    {
        // we want to ignore the name passed
        parent::__construct('EmpleadosForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idempleado',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'empleado_nombre',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'empleado_apaterno',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'empleado_amaterno',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'empleado_rfc',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'empleado_nss',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'empleado_curp',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'empleado_telefono',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'empleado_email',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'empleado_estatus',
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
            ),
        ));

        $this->add(array(
            'name' => 'empleado_username',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'empleado_comision',
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
            ),
        ));

        $this->add(array(
            'name' => 'empleado_password',
            'type' => 'Password',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'empleado_fechaentrada',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'empleado_fechanacimiento',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'empleado_estado',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'empleado_colonia',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));
        
        $this->add(array(
            'name' => 'empleado_ciudad',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'empleado_codigopostal',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'empleado_calle',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'empleado_numinterno',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'empleado_numexterno',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'idrol',
            'type' => 'Select',
            'options' => array(
              
                'value_options' => $roles_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
               
            ),
        ));
    }
}