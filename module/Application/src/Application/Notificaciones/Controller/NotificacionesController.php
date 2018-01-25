<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Notificaciones\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class NotificacionesController extends AbstractActionController
{

    public $column_map = array(
        0 => 'Idnotificacion',
        1 => 'a.ProductoModelo',
        2 => 'b.SucursalNombrecomercial',
        3 => 'NotificacionAplicada',
        4 => 'c.EmpleadoNombre',
        5 => 'NotificacionAplicadaen'
    );


	public function serversideAction(){
        
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $post_data = $request->getPost();

             //obtenemos el usuario loggeado
            $session = new \Application\Session\AouthSession();
            $session = $session->getData();


            $query = new \NotificacionQuery();  

            $query->useProductoQuery('a')->endUse();
            $query->useSucursalQuery('b')->endUse();
            $query->useEmpleadoQuery('c')->endUse();

            $query->withColumn('a.ProductoModelo', 'producto_nombre')
                  ->withColumn('b.SucursalNombrecomercial', 'sucursal_nombre')
                  ->withColumn('c.EmpleadoNombre', 'empleado_nombre');

            if ($session['idsucursal'] != null)
            {
                $query->filterByIdsucursal($session['idsucursal']);
            }

            //WHERE
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

                $c1 = $c->getNewCriterion('producto.producto_modelo', '%' . $search_value . '%', \Criteria::LIKE);
                $c2 = $c->getNewCriterion('sucursal.sucursal_nombrecomercial', '%' . $search_value . '%', \Criteria::LIKE);
                $c1->addOr($c2);

                $query->addAnd($c1);
                $query->groupByIdnotificacion();

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

                $tmp['DT_RowId'] = $value['idnotificacion'];
                $tmp['idnotificacion'] = $value['idnotificacion'];
                $tmp['producto_nombre'] = $value['producto_nombre'];
                $tmp['sucursal_nombre'] = $value['sucursal_nombre'];
                if ($value['notificacion_aplicada'])
                {
                    $tmp['notificacion_aplicada'] = '<button class="btn btn-success">Revisada<button>';
                    $tmp['options'] = '';
                }else{
                    $tmp['notificacion_aplicada'] = '<button class="btn btn-danger">No Revisada<button>';
                    $tmp['options'] = '<td><div class="btn-group dropdown">
                      <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                        <span class="icon icon-gear icon-lg icon-fw"></span>
                        Opciones
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="javascript:;" class="delete_modal">
                            <div class="media">
                              <div class="media-left">
                                <span class="icon icon-check icon-lg icon-fw"></span>
                              </div>
                              <div class="media-body">
                                <span class="d-b">Aceptar</span>
                           
                              </div>
                            </div>
                          </a>
                        </li>
                      </ul>
                    </div></td>';
                }
                $tmp['empleado_nombre'] = $value['empleado_nombre'];
                $tmp['notificacion_aplicadaen'] = $value['notificacion_aplicadaen'];
                


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

    public function indexAction()
    {   
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/notificaciones/index');
        $view_model->setVariables(array(
             'messages' => $this->flashMessenger(),
        ));
        return $view_model;
    }


    public function aceptarAction(){
        $request = $this->getRequest();
        if($request->isPost()){
            
            $id = $this->params()->fromRoute('id');
            //obtenemos el usuario loggeado
            $session = new \Application\Session\AouthSession();
            $session = $session->getData();

            //modificamos la notificacion
            $entity = \NotificacionQuery::create()->findPk($id);
            $entity->setNotificacionAplicada(true);
            $entity->setNotificacionAplicadaen(date("Y-n-j"));
            $entity->setIdempleado($session['idempleado']);
            $entity->save();
            
            $this->flashMessenger()->addSuccessMessage('Su registro ha sido aceptado satisfactoriamente.');
            
            return $this->redirect()->toUrl('/notificaciones');
            
            
            
        }
        
    }



    


}
