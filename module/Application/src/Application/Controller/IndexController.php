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
        $graphic = array(
            'x' => json_encode(array("enero","febrero","marzo","abril","mayo","junio","julio","agosto","septiembre","octubre", "noviembre", "diciembre")),
            'y' => json_encode(array(10,20,15,15,23,15,23,12,19,28,10,32,0)),
        );
        $total = $this->getTotal();
        $pedidos = $this->getPedidos();

        if($session['idsucursal'] != null)
        {
            $sucursal = \SucursalQuery::create()->findPK($session['idsucursal']); 
            return new ViewModel(array(
                'session' => $session,
                'sucursal' => $sucursal,
                'graphic' => $graphic,
                'total' => $total,
                'pedidos'=>$pedidos
            ));
        }else{
            return new ViewModel(array(
                'session' => $session,
                'graphic' => $graphic,
                'total' => $total,
                'pedidos'=>$pedidos
            ));
        }
        

        
    }

    private function getTotal()
    {
        //traer las compras
        $compras = \VentaQuery::create()->find();
        $compras_array = array();
        $total = 0 ;
        foreach ($compras as $value){
            $total += $value->getVentaTotal();
        }
        return $total;
    }

    private function getPedidos()
    {
        //traer los pedidos
        $pedidos = \PedidoQuery::create()->find();
        return count($pedidos);
    }

    public function getsucursalesAction(){

    	 $sucursales = \SucursalQuery::create()->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);

    	return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $sucursales)));

    }


    public function getsucursalAction(){
        $user = new \Application\Session\AouthSession();
        $user = $user->getData();
        $sucursales = \SucursalQuery::create()->findPk($user['idsucursal'])->toArray();

        return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $sucursales)));

    }
}
