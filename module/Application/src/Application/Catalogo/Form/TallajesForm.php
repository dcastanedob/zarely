<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class TallajesForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('TallajesForm');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idtallaje',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'tallaje_nombre',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_70',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_75',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_80',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_85',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_90',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

         $this->add(array(
            'name' => 'talla_95',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


          $this->add(array(
            'name' => 'talla_100',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));



           $this->add(array(
            'name' => 'talla_105',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_110',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_115',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_120',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_125',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_130',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_135',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_140',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_145',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_150',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));



        $this->add(array(
            'name' => 'talla_155',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_160',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_165',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_170',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_175',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_180',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_185',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_190',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_195',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_200',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_205',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_210',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_215',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_220',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_225',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_230',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_235',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_240',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_245',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_250',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_255',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_260',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_265',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_270',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_275',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_280',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_285',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_290',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_295',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_300',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_305',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_310',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_315',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_320',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_325',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_330',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_335',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_340',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));

        $this->add(array(
            'name' => 'talla_345',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));


        $this->add(array(
            'name' => 'talla_350',
            'type' => 'Checkbox',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control infput-thick',
            ),
        ));



        
    }
}