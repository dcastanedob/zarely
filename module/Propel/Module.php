<?php

namespace Propel;

use Zend\ModuleManager\ModuleManager;
use Application\Session\AouthSession;

class Module
{
    public function init(ModuleManager $moduleManager) {
       
       //obtenemos la sesion actual
       	$auth = new AouthSession();

       	//verificamos si está activo para loggearlo
       	if(!$auth->isActive())
       	{
       		\Propel::init(__DIR__ . '/build/conf/zarely-conf.php');
       	}else{
       		//verificamos el tipo de usuario que es
       		if($auth->getRol() == 'Sat')
       		{
       			\Propel::init(__DIR__ . '/build/conf/zarely-conf2.php');
       		}else{
       			\Propel::init(__DIR__ . '/build/conf/zarely-conf.php');
       		}
       		
       	}
        
        set_include_path(__DIR__ . '/build/classes' . PATH_SEPARATOR . get_include_path());
    }
   
}