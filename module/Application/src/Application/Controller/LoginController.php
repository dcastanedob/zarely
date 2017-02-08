<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Session\AouthSession;


class LoginController extends AbstractActionController
{
    public function indexAction()
    {
    	$this->layout('/layout/layout_login');
        return new ViewModel();
    }

    public function inAction()
    {
    	$request = $this->getRequest();

    	if($request->isPost())
    	{
    		$post_data = $request->getPost();


    	
    		$is_valid = \EmpleadoQuery::create()->filterByEmpleadoUsername($post_data['username'])->filterByEmpleadoPassword(md5($post_data['password']))->exists();

    		

    		if($is_valid)
    		{
    			$empleado = \EmpleadoQuery::create()->filterByEmpleadoUsername($post_data['username'])->filterByEmpleadoPassword(md5($post_data['password']))->findOne();

    			$session = new AouthSession();

    			$session->Create($empleado->toArray(\BasePeer::TYPE_FIELDNAME));

    			return $this->redirect()->toUrl('/');
    		}else
    		{
    			return $this->redirect()->toUrl('/login');
    		}

    		
    	}
    }


    public function outAction()
    {

    	$session = new AouthSession();
    	$session->Close();

    	return $this->redirect()->toUrl('/login');
    }
}
