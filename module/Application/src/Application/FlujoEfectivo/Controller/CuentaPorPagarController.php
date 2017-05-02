<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\FlujoEfectivo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CuentaPorPagarController extends AbstractActionController
{

    public $column_map = array(
        0 => 'a.ProveedorNombrecomercial',
        1 => 'Idcompra',
        2 => 'CompraFechacompra',
        3 => 'CompraTotal',
        4 => 'CompraEstatuspago',


    );
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $post_data = $request->getPost();

            $query = new \CompraQuery();
            

            $query->useProveedorQuery('a')->endUse();

            $query->withColumn('a.ProveedorNombrecomercial', 'proveedor_nombre');


            $records_filtered = $query->count();

            //SEARCH
            if (!empty($post_data['search']['value'])) {
                
                $search_value = $post_data['search']['value'];

                $search_value = str_replace("Ñ", "Ã‘", $search_value);
                $search_value = str_replace("L'", "L'", $search_value);
                $search_value = str_replace("Ç", "Ã‡", $search_value);
                $search_value = str_replace("À", "Ã€", $search_value);
                $search_value = str_replace("È", "Ãˆ", $search_value);
                $search_value = str_replace("Û", "Ã›", $search_value);
                $search_value = str_replace("´", "Â´", $search_value);
                $search_value = str_replace("ñ", "Ã±", $search_value);
                $search_value = str_replace("Ú", "Ãš", $search_value);
                $search_value = str_replace("é", "Ã©", $search_value);
                $search_value = str_replace("Á", "Ã", $search_value);
                $search_value = str_replace("ó", "Ã³", $search_value);
                $search_value = str_replace("'", "'", $search_value);
                $search_value = str_replace("ú", "Ãº", $search_value);
                if (strpos($search_value, 'Ð') !== false) {
                    $search_value = str_replace("Ð", "Ã", $search_value);
                }
                if (strpos($search_value, 'Á') !== false) {
                    $search_value = str_replace("Á", "Ã", $search_value);
                }
                if (strpos($search_value, 'Í') !== false) {
                    $search_value = str_replace("Í", "Ã", $search_value);
                }
                $c = new \Criteria();

                $c1= $c->getNewCriterion('compra.idcompra', '%'.$search_value.'%', \Criteria::LIKE);

                $c2= $c->getNewCriterion('proveedor.proveedor_nombrecomercial', '%'.$search_value.'%', \Criteria::LIKE);

                $c3= $c->getNewCriterion('compra.compra_fechacompra', '%'.$search_value.'%', \Criteria::LIKE);


                $c1->addOr($c2)->addOr($c3);

                $query->addAnd($c1);
                $query->groupByCompraFechacompra();

                $records_filtered = $query->count();
            }

            //LIMIT
            $query->setOffset((int) $post_data['start']);
            $query->setLimit((int) $post_data['length']);


            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->column_map[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if ($dir == 'desc') {
                $query->orderBy($order_column, \Criteria::DESC);
            } else {
                $query->orderBy($order_column, \Criteria::ASC);
            }

            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();




            foreach ($query->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME) as $value) {
                $tmp['DT_RowId'] = $value['idcompra'];
                $tmp['idcompra'] = $value['idcompra'];
                $tmp['compra_fechacompra'] = $value['compra_fechacompra'];
                $tmp['proveedor_nombre'] = $value['proveedor_nombre'];
                $tmp['compra_total'] = '$'.number_format($value['compra_total'],2);
                

                if($value['compra_estatuspago'])
                {
                    $tmp['compra_estatuspago'] = "Sí";
                }else{
                    $tmp['compra_estatuspago'] = "No";
                }
                

                $tmp['options'] = '<td><div class="btn-group dropdown">
                  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-gear icon-lg icon-fw"></span>
                    Opciones
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/flujo-efectivo/porpagar/ver/' . $value['idcompra'] . '">
                        <div class="media">
                          <div class="media-left">
                            <span class="icon icon-edit icon-lg icon-fw"></span>
                          </div>
                          <div class="media-body">
                            <span class="d-b">Editar</span>
                           
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="javascript:;" class="delete_modal">
                        <div class="media">
                          <div class="media-left">
                            <span class="icon icon-trash icon-lg icon-fw"></span>
                          </div>
                          <div class="media-body">
                            <span class="d-b">Eliminar</span>
                       
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div></td>';


                $data[] = $tmp;
            }

            //El arreglo que regresamos
            $json_data = array(
                'order' => $order_column,
                "draw" => (int) $post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => $records_filtered,
                "data" => $data
            );



            return $this->getResponse()->setContent(json_encode($json_data));
        }
    }
    
    function get_extension($file) {
         $tmp = explode(".", $file);
         $extension =end($tmp);
         return $extension ? $extension : false;
    }

    public function indexAction()
    {   
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/flujoefectivo/porpagar/index');
        $view_model->setVariables(array(
             'messages' => $this->flashMessenger(),
        ));
        return $view_model;
    }


    public function initializeAction(){
        $request = $this->getRequest();

        if($request->isPost())
        {
            $post_data = $request->getPost();

            //obtenemos todos los movimientos de la compra
            $movimientos = \CuentabancariamovimientoQuery::create()->filterByIdproceso($post_data['id'])->find();

            //procesamos la informaciòn para recibirla como la queremos
            $information = [];
            foreach ($movimientos->toArray() as $movimiento) {
                $entity = \CuentabancariaQuery::create()->findPk($movimiento['Idcuentabancaria']);

                $data = array(
                    "idCuentabancariamovimiento"=>$movimiento['Idcuentabancariamovimiento'],
                    "fecha"=>$movimiento['CuentabancariamovimientoFechamovimiento'],
                    "idCuentabancaria"=>$entity->getCuentabancariaBanco() . ' - '
                                        . preg_replace('/(0|1|2|3|4|5|6|7|8|9)/', 'x', $entity->getCuentabancariaCuenta()),
                    "cantidad"=>$movimiento['CuentabancariamovimientoCantidad'],
                    "medio" => $movimiento['CuentabancariamovimientoMedio'],
                    "referencia" =>$movimiento['CuentabancariamovimientoReferencia'],
                    "comprobante"=>$movimiento['CuentabancariamovimientoComprobante'],
                );

                $information[] = $data;
            }
            
            return $this->getResponse()->setContent(json_encode(array('response' => true,'information'=>$information)));
        }

    }

    public function verAction()
    {
        $request = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \CompraQuery::create()->filterByIdcompra($id)->exists();
        
        if($exist){
            
            $entity = \CompraQuery::create()->findPk($id);
            
            
            
                
            ///traer las cuentas bancarias
            $cuentas = \CuentabancariaQuery::create()->find();
            $cuentas_array = array();

            foreach ($cuentas as $value){
                $cuentas_array[$value->getIdcuentabancaria()] = $value->getCuentabancariaBanco() . ' - '
                . preg_replace('/(0|1|2|3|4|5|6|7|8|9)/', 'x', $value->getCuentabancariaCuenta());

            }

            //filtramos los movimientos de la ceunta  asociada
            $movimientos = \CuentabancariamovimientoQuery::create()->filterByIdproceso($id)->find();

            //obtenemos el total de la cuenta bancaria
            $totalAlMomento = 0;    
            foreach ($movimientos->toArray() as $movimiento ) {
                $totalAlMomento+=$movimiento['CuentabancariamovimientoCantidad'];
            }
            $restante = floatval($entity->getCompraTotal() - floatval($totalAlMomento));
            
            $form = new \Application\FlujoEfectivo\Form\CuentaPorPagarForm($cuentas_array);

            
            
            $view_model = new ViewModel();
            $view_model->setTemplate('application/flujoefectivo/porpagar/ver');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
                'restante' => money_format('%.2n', $restante),
            ));

            return $view_model;
            
            
        }else{
            $this->flashMessenger()->addErrorMessage('Id Invalido.');
            return $this->redirect()->toUrl('/flujo-efectivo/porpagar');
        }
        return $view_model;
    }
    

    public function pagoAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();

            $entity = \CompraQuery::create()->findPk($post_data['data']['idproceso']);

            //verificamos que se manden los datos necesarios
            if($post_data['data']['cuentabancariamovimiento_fechamovimiento'] != "" && $post_data['data']['cuentabancariamovimiento_cantidad'] != "" && $post_data['data']['idcuentabancaria'] !="" && $post_data['data']['cuentabancariamovimiento_medio'] != "")
            {

                //filtramos los movimientos de la ceunta  asociada
                $movimientos = \CuentabancariamovimientoQuery::create()->filterByIdproceso($post_data['data']['idproceso'])->find();

                //obtenemos el total de la cuenta bancaria
                $totalAlMomento = $post_data['data']['cuentabancariamovimiento_cantidad'];    
                foreach ($movimientos->toArray() as $movimiento ) {
                    $totalAlMomento+=$movimiento['CuentabancariamovimientoCantidad'];
                }

                //verificamos que no se pase del pago
                if($totalAlMomento > $entity->getCompraTotal())
                {
                    return $this->getResponse()->setContent(json_encode(array('response' => false,'message'=>'no pagues tanto')));
                }else{

                    //obtenemos el usuario que está en sesión
                    $user = new \Application\Session\AouthSession();
                    $user = $user->getData();

                    $cuentabancaria_movimiento = new \Cuentabancariamovimiento();
                    $cuentabancaria_movimiento->setIdcuentabancaria($post_data['data']['idcuentabancaria'])
                                                ->setIdempleado($user['idempleado'])
                                                ->setCuentabancariamovimientoProceso("compra")
                                                ->setIdproceso($entity->getIdcompra())
                                                ->setCuentabancariamovimientoCantidad(intval($post_data['data']['cuentabancariamovimiento_cantidad']))
                                                ->setCuentabancariamovimientoFechamovimiento($post_data['data']['cuentabancariamovimiento_fechamovimiento'])
                                                ->setCuentabancariamovimientoReferencia($post_data['data']['cuentabancariamovimiento_referencia'])
                                                ->setCuentabancariamovimientoMedio($post_data['data']['cuentabancariamovimiento_medio'])
                                                ->setCuentabancariamovimientoFechacreacion(date("Y-n-j"))
                                                ->setCuentabancariamovimientoBalance(floatval($entity->getCompraTotal() - floatval($totalAlMomento)))->save();
                    if($cuentabancaria_movimiento->getCuentabancariamovimientoBalance() == 0)
                    {
                        $entity->setCompraEstatuspago(1)->save();
                    }
                    //verificamos que exista un comprobante
                    if(isset($post_data['data']['cuentabancariamovimiento_comprobante'])){

                        $file_type = $this->get_extension($post_data['data']['cuentabancariamovimiento_comprobante']);

                        move_uploaded_file($post_data['data']['cuentabancariamovimiento_comprobante'], $_SERVER['DOCUMENT_ROOT'].'/files/flujoefectivo/porpagar/'.$cuentabancaria_movimiento->getIdcuentabancariamovimiento().'.'.$file_type);


                        $cuentabancaria_movimiento->setCuentabancariamovimientoComprobante('/files/flujoefectivo/porpagar/'.$cuentabancaria_movimiento->getIdcuentabancariamovimiento().'.'.$file_type)->save();
                    }

                    return $this->getResponse()->setContent(json_encode(array('response' => true,'message'=>'pago realizado','restante'=>floatval($entity->getCompraTotal() - floatval($totalAlMomento)),'id'=>$cuentabancaria_movimiento->getIdcuentabancariamovimiento(),'comprobante' =>'/files/flujoefectivo/porpagar/'.$cuentabancaria_movimiento->getIdcuentabancariamovimiento().'.'.$file_type)));
                }  
            }else{
                return $this->getResponse()->setContent(json_encode(array('response' => false,'message'=>'llena todos los campos')));
            }      
        };
    }

    

    public function eliminarAction(){
        $request = $this->getRequest();

        if($request->isPost())
        {
            $id = $this->params()->fromRoute('id');
            $entity = \CompraQuery::Create()->findPk($id);
            
            $entity->delete();

            $detalles = \CuentabancariamovimientoQuery::create()->filterByIdproceso($id)->delete();
            
            if($entity->isDeleted()){
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido eliminado satisfactoriamente.');
            }else{
                $this->flashMessenger()->addErrorMessage('Ocurrió un error al intentar eliminar. Pruebe más tarde.');
            }
        }

        return $this->redirect()->toUrl('/flujo-efectivo/porpagar');
    }

    public function eliminarmovimientoAction(){
        $request = $this->getRequest();

        if($request->isPost())
        {
            $post_data = $request->getPost();
            $exist = \CuentabancariamovimientoQuery::create()->filterByIdcuentabancariamovimiento($post_data['data']['id'])->exists();
            
            if($exist){

                //eliminamos el movimiento de la cuenta bancaria
                $entity = \CuentabancariamovimientoQuery::create()->filterByIdcuentabancariamovimiento($post_data['data']['id'])->delete();

                $compra = \CompraQuery::create()->findPk($post_data['data']['idcompra']);


                //filtramos los movimientos de la cuenta  asociada
                $movimientos = \CuentabancariamovimientoQuery::create()->filterByIdproceso($post_data['data']['idcompra'])->find();

                //obtenemos el total de la cuenta bancaria
                $totalAlMomento = 0;    
                foreach ($movimientos->toArray() as $movimiento ) {
                    $totalAlMomento+=$movimiento['CuentabancariamovimientoCantidad'];
                }
                $restante = floatval($compra->getCompraTotal() - floatval($totalAlMomento));

                if($restante>0)
                {
                    $compra->setCompraEstatuspago(0)->save();
                }
                
                return $this->getResponse()->setContent(json_encode(array('response' => true,'message'=>'El pago ha sido eliminado','restante' => $restante)));
            }else{
                return $this->getResponse()->setContent(json_encode(array('response' => false,'message'=>'No se pudo eliminar')));
            }
            
        }

    }

}
