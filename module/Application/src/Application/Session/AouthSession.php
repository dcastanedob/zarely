<?php 

namespace Application\Session;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Session\Container;


class AouthSession extends AbstractActionController {

    /**
     * 
     * @param array $session
     * @param type $expirationTime
     */
    public function Create( array $session=null) {
        
            
            $session["idempleado"] = array_key_exists( "idempleado", $session ) ? $session["idempleado"] : null;
            $session["empleado_username"] = array_key_exists( "empleado_username", $session ) ? $session["empleado_username"] : null;
            $session["empleado_nombre"] = array_key_exists( "empleado_nombre", $session ) ? $session["empleado_nombre"] : null;
            $session["idsucursal"] = array_key_exists( "idsucursal", $session ) ? $session["idsucursal"] : null;

            $session["idrol"] = array_key_exists( "idrol", $session ) ? $session["idrol"] : null;
            $session["rol_nombre"] = array_key_exists( "rol_nombre", $session ) ? $session["rol_nombre"] : null;

            $session_data = new Container('session_data');
            $session_data->idempleado        = $session["idempleado"];
            $session_data->empleado_username            = $session["empleado_username"];
            $session_data->empleado_nombre   = $session["empleado_nombre"];
            $session_data->idsucursal   = $session["idsucursal"];
            $session_data->idrol   = $session["idrol"];
            $session_data->rol_nombre   = $session["rol_nombre"];
            if($session['idsucursal'] == null)
            {
                $session_data->idsucursal = 1;
            }
    }
    
    /**
     * 
     * @return boolean
     */
    public function Close() {
        
        $session_data = new Container('session_data');
        $session_data->idempleado            = null;
        $session_data->empleado_username     = null;
        $session_data->idsucursal       = null;
        $session_data->empleado_nombre       = null;
        $session_data->idrol    =null;
        $session_data->rol_nombre =null;
        $session_data->getManager()->getStorage()->clear('session_data');
        
        return true;  
    }
    
    /**
     * 
     * @return boolean
     */
    
    public static function isActive() {    
        $session_data = new Container('session_data');
        if( $session_data->idempleado != null){
            return true;
        }else{
            return false;
        }
    }

    /**
     * 
     * @return array
     */
    public function getData() {
        
        $session_data = new Container('session_data');
        
        return array(
            "idempleado"                 => $session_data->idempleado,
            "empleado_username"           => $session_data->empleado_username,
            "empleado_nombre"            => $session_data->empleado_nombre,
            "idsucursal"                => $session_data->idsucursal,
            "idrol"                      =>$session_data->idrol, 
            "rol_nombre"            => $session_data->rol_nombre,


        );
    }
    
    public function setSucursal($idsucursal){
         $session_data = new Container('session_data');
         $session_data->idsucursal = $idsucursal;
    }
    
    public static function getRol()
    {
        $session_data = new Container('session_data');
        return $session_data->rol_nombre;
    }
}

?>