<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Configuraciones\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ConfiguracionesController extends AbstractActionController
{

	

    public function indexAction()
    {
    	$view_model = new ViewModel();
    	$view_model->setTemplate('application/configuraciones/index');

        //obtenemos las configuraciones
        $entity = \ConfiguracionQuery::create()->findOne();
        $desc = 0;
        //verificamos que la configuracion exista
        if( $entity != null)
        {
            $desc = $entity->getConfiguracionDescuentosat();
        }

  		$view_model->setVariables(array(
  			'messages' =>$this->flashMessenger(),
            'desc' =>$desc
  		));
        return $view_model;
    }

    public function actualizarAction()
    {
    	$request = $this->getRequest();

    	if($request->isPost())
    	{
    		$post_data = $request->getPost();

            //obtnemos la configuracion
            $configuraciones = \ConfiguracionQuery::create()->find();

            //verificamos si existen ya
            if( count($configuraciones) == 0)
            {
                //Creamos una nueva
                $entity = new \Configuracion();
                $entity->setConfiguracionDescuentosat($post_data['configuracion_descuentosat']);

            }else{
                //Actualizamos la existente
                $entity = \ConfiguracionQuery::create()->findOne();
                $entity->setConfiguracionDescuentosat($post_data['configuracion_descuentosat']);
            }

    		

    		$entity->save();
    		$this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');

    		return $this->redirect()->toUrl('/configuraciones');
    	}


    	
    }

    


}
