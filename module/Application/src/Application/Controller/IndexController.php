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

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $session = new \Application\Session\AouthSession();
        $session = $session->getData();
        if($session['idsucursal'] != null)
        {
            $sucursal = \SucursalQuery::create()->findPK($session['idsucursal']); 
            return new ViewModel(array(
                'session' => $session,
                'sucursal' => $sucursal,
            ));
        }else{
            return new ViewModel(array(
                'session' => $session,
            ));
        }
        

        
    }

    public function getsucursalesAction(){

    	 $sucursales = \SucursalQuery::create()->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);

    	return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $sucursales)));

    }
}
