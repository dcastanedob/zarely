<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use Application\Listener\AuthListener;
use Application\Session\AouthSession;
class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        
        date_default_timezone_set('America/Mexico_City');
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);

        $authListener = new AuthListener();
        $authListener->attach($eventManager);

        $this -> initAcl($e);
        if(AouthSession::isActive()){
            $e -> getApplication() -> getEventManager() -> attach('route', array($this, 'checkAcl'));
        }
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function initAcl(MvcEvent $e) {
        $acl = new \Zend\Permissions\Acl\Acl();
        $roles = include __DIR__  . '/config/module.acl.roles.php';
        $allResources = array();
        foreach ($roles as $role => $resources) {
            $role = new \Zend\Permissions\Acl\Role\GenericRole($role); 
            $acl -> addRole($role);
            
                //adding resources
                foreach ($resources as $resource) {
                     // Edit 4
                     if(!$acl ->hasResource($resource)){
                        $acl -> addResource(new \Zend\Permissions\Acl\Resource\GenericResource($resource));
                     }
                     $acl -> allow($role, $resource);
                } 
        }
        //setting to view
       $e -> getViewModel() -> acl = $acl;

    }


    public function checkAcl(MvcEvent $e) {
        $route = $e -> getRouteMatch() -> getMatchedRouteName();
      
        //you set your role
        $userRole = AouthSession::getRol();

        if($route == 'auth'){
            return;
        }

        if ($e -> getViewModel() -> acl -> isAllowed($userRole, $route)) {
          return;  
        }else{
            

            $response = $e -> getResponse();
            //location to page or what ever
            $response -> getHeaders() -> addHeaderLine('Location', $e -> getRequest() -> getBaseUrl() . '/404');
            $response -> setStatusCode(404);
        }
    }


    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
