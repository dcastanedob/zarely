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
                        $sessionTemp = $empleado->toArray(\BasePeer::TYPE_FIELDNAME);
                        $sessionTemp['rol_nombre'] = $empleado->getRol()->getRolNombre();

                        $session->Create($sessionTemp);
                            
                            
                        if($empleado->getRol()->getRolNombre() == 'Caja'){
                            return $this->redirect()->toUrl('/login/select');
                        }
    			

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
    
    public function selectAction(){
        
        $session = new AouthSession();

        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            $session->setSucursal($post_data['idsucursal']);
            return $this->redirect()->toUrl('/');
        }
        
        $session = $session->getData();
        $sucursales = \SucursalempleadoQuery::create()->select('idsucursal','sucursal_nombrecomercial')->filterByIdempleado($session['idempleado'])->useSucursalQuery('a')->endUse()->withColumn('a.SucursalNombrecomercial','sucursal_nombrecomercial')->find()->toKeyValue('idsucursal','sucursal_nombrecomercial');
      

        $this->layout('/layout/layout_login');
        return new ViewModel(array(
            'sucursales' => $sucursales,
        ));
    }
}
