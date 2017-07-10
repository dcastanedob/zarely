<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Transferencia\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class TransferenciaController extends AbstractActionController
{

    public $column_map = array(
        0 => 'a.SucursalNombrecomercial',
        1 => 'b.SucursalNombrecomercial',
        2 => 'c.EmpleadoNombre',
        3 => 'c.EmpleadoNombre',
        4 => 'TransferenciaFecha',
        5 => 'TransferenciaFecharecepcion',
        6 => 'TransferenciaEstatus',


    );
    
    public function serversideAction(){

        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $post_data = $request->getPost();

            $query = new \TransferenciaQuery();
            

            $query->useSucursalRelatedByIdsucursalorigenQuery('a')->endUse();
            $query->useSucursalRelatedByIdsucursaldestinoQuery('b')->endUse();

            $query->useEmpleadoRelatedByIdempleadocreadorQuery('c')->endUse();
            $query->useEmpleadoRelatedByIdempleadoreceptorQuery('d')->endUse();

            $query->withColumn('a.SucursalNombrecomercial', 'sucursal_origen');
            $query->withColumn('b.SucursalNombrecomercial', 'sucursal_destino');

            $query->withColumn('c.EmpleadoNombre', 'empleado_creador');
            $query->withColumn('d.EmpleadoNombre', 'empleado_receptor');

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

                $c1= $c->getNewCriterion('transferencia.idtransferencia', '%'.$search_value.'%', \Criteria::LIKE);

                $c2= $c->getNewCriterion('sucursal.sucursal_nombrecomercial', '%'.$search_value.'%', \Criteria::LIKE);

                $c3= $c->getNewCriterion('sucursal.sucursal_nombrecomercial', '%'.$search_value.'%', \Criteria::LIKE);

                $c4= $c->getNewCriterion('empleado.empleado_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                $c5= $c->getNewCriterion('empleado.empleado_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                $c6= $c->getNewCriterion('transferencia.transferencia_estatus', '%'.$search_value.'%', \Criteria::LIKE);


                $c1->addOr($c2)->addOr($c3)->addOr($c4)->addOr($c5)->addOr($c6);

                $query->addAnd($c1);
                $query->groupByTransferenciaFecha();

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
                $tmp['DT_RowId'] = $value['idtransferencia'];
                $tmp['idtransferencia'] = $value['idtransferencia'];
                $tmp['sucursal_origen'] = $value['sucursal_origen'];
                $tmp['sucursal_destino'] = $value['sucursal_destino'];
                $tmp['empleado_creador'] = $value['empleado_creador'];
                if($value['empleado_receptor'] == null)
                {
                    $tmp['empleado_receptor'] = "N/A";
                }else
                {
                    $tmp['empleado_receptor'] = $value['empleado_receptor'];
                }
                
                $tmp['transferencia_fecha'] = $value['transferencia_fecha'];

                $tmp['transferencia_estatus'] = $value['transferencia_estatus'];

                $tmp['options'] = '<td><div class="btn-group dropdown">
                  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-gear icon-lg icon-fw"></span>
                    Opciones
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/transferencias/ver/' . $value['idtransferencia'] . '">
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

    public function serversidesucursalAction(){

        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $post_data = $request->getPost();

            $query = new \TransferenciaQuery();
            

            $query->useSucursalRelatedByIdsucursalorigenQuery('a')->endUse();
            $query->useSucursalRelatedByIdsucursaldestinoQuery('b')->endUse();

            $query->useEmpleadoRelatedByIdempleadocreadorQuery('c')->endUse();
            $query->useEmpleadoRelatedByIdempleadoreceptorQuery('d')->endUse();

            $query->withColumn('a.SucursalNombrecomercial', 'sucursal_origen');
            $query->withColumn('b.SucursalNombrecomercial', 'sucursal_destino');

            $query->withColumn('c.EmpleadoNombre', 'empleado_creador');
            $query->withColumn('d.EmpleadoNombre', 'empleado_receptor');

            $user = new \Application\Session\AouthSession();
            $user = $user->getData();
            $query->filterByIdsucursalorigen($user['idsucursal'])->_or()->filterByIdsucursaldestino($user['idsucursal']);
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

                $c1= $c->getNewCriterion('transferencia.idtransferencia', '%'.$search_value.'%', \Criteria::LIKE);

                $c2= $c->getNewCriterion('sucursal.sucursal_nombrecomercial', '%'.$search_value.'%', \Criteria::LIKE);

                $c3= $c->getNewCriterion('sucursal.sucursal_nombrecomercial', '%'.$search_value.'%', \Criteria::LIKE);

                $c4= $c->getNewCriterion('empleado.empleado_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                $c5= $c->getNewCriterion('empleado.empleado_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                $c6= $c->getNewCriterion('transferencia.transferencia_estatus', '%'.$search_value.'%', \Criteria::LIKE);


                $c1->addOr($c2)->addOr($c3)->addOr($c4)->addOr($c5)->addOr($c6);

                $query->addAnd($c1);
                $query->groupByTransferenciaFecha();

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
                $tmp['DT_RowId'] = $value['idtransferencia'];
                $tmp['idtransferencia'] = $value['idtransferencia'];
                $tmp['sucursal_origen'] = $value['sucursal_origen'];
                $tmp['sucursal_destino'] = $value['sucursal_destino'];
                $tmp['empleado_creador'] = $value['empleado_creador'];
                if($value['empleado_receptor'] == null)
                {
                    $tmp['empleado_receptor'] = "N/A";
                }else
                {
                    $tmp['empleado_receptor'] = $value['empleado_receptor'];
                }
                
                $tmp['transferencia_fecha'] = $value['transferencia_fecha'];

                $tmp['transferencia_estatus'] = $value['transferencia_estatus'];

                if($user['idsucursal'] == $value['idsucursalorigen'])
                {
                    $tmp['options'] = '<td><div class="btn-group dropdown">
                      <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                        <span class="icon icon-gear icon-lg icon-fw"></span>
                        Opciones
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="/transferencias-sucursal/editar/' . $value['idtransferencia'] . '">
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
                }

                if($user['idsucursal'] == $value['idsucursaldestino'])
                {
                    $tmp['options'] = '<td><div class="btn-group dropdown">
                  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-gear icon-lg icon-fw"></span>
                    Opciones
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/transferencias-sucursal/recibir/' . $value['idtransferencia'] . '">
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
                }
                


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
        $view_model->setTemplate('application/transferencias/index');
        $view_model->setVariables(array(
             'messages' => $this->flashMessenger(),
        ));
        return $view_model;
    }


    public function indexsucursalAction()
    {   
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/transferencias-sucursal/index');
        $view_model->setVariables(array(
             'messages' => $this->flashMessenger(),
        ));
        return $view_model;
    }


    public function nuevoAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();

            $entity = new \Transferencia();

            $post_data['transferencia_fecharecepcion'] = date_create_from_format('d/m/Y', $post_data['transferencia_fecharecepcion']);

            $post_data['transferencia_fecha'] = date_create_from_format('d/m/Y', $post_data['transferencia_fecha']);

            $post_data['transferencia_estatus'] = "aceptada";
            $user = new \Application\Session\AouthSession();
            $user = $user->getData();

            $post_data['idempleadocreador'] = $user['idempleado'];

            $precios = [];
            $variantes = [];
            foreach ($post_data as $key => $value){
                if(\TransferenciaPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }

                if(substr( $key, 0, 6 ) === "precio")
                {
                    $temp = array(
                        "variante" => str_replace("preciounitario", "", $key),
                        "valor" => $value
                    );
                    array_push($precios, $temp);
                }

                if(substr( $key, 0, 8 ) === "cantidad")
                {
                    /*if($value != 0)
                    {*/
                        $temp = array(
                            "variante" => str_replace("cantidad", "", $key),
                            "valor" => $value
                        );
                        array_push($variantes, $temp);
                    //}
                    
                }
            }

            $entity->save();

            
            
            //$total = 0;
            foreach ($variantes as $variante) {
                $transferencia_detalle = new \Transferenciadetalle();
                $varianteTemp = \ProductovarianteQuery::create()->findPk($variante["variante"]);
                //encontrar a que precio le corresponde
                foreach ($precios as $key=>$precio) {

                    //obtenemos la variante 
                    $productovariante = \ProductovarianteQuery::create()->findPk($precio["variante"]);

                    if($productovariante->getIdproducto() == $varianteTemp->getIdproducto() && $productovariante->getIdproductocolor() == $varianteTemp->getIdproductocolor() && $productovariante->getIdproductomaterial() == $varianteTemp->getIdproductomaterial())
                        {


                        //obtenemos el rango de los tallajes
                        $tallajes = \ProductotallajeQuery::create()->JoinTallaje()->withColumn('Tallajerango')->filterByIdproducto($productovariante->getIdproducto())->find();

                        $boolean = false;
                        foreach ($tallajes->toArray() as $tallaje) {
                            $rango = $tallaje["Tallajerango"];
                            $inf = explode(" - ", $rango);


                            //verificamos que este en el rango del precio asociado
                            if($productovariante->getProductovarianteTalla()>=$inf[0] &&  $productovariante->getProductovarianteTalla()<=$inf[1] && $varianteTemp->getProductovarianteTalla()>=$inf[0] &&  $varianteTemp->getProductovarianteTalla()<=$inf[1])
                            {
                                $transferencia_detalle->setIdtransferencia($entity->getIdtransferencia())
                                              ->setIdproductovariante($variante["variante"])
                                              ->setTransferenciadetalleCantidad($variante["valor"])
                                              ->setTransferenciadetallePreciounitario($precio["valor"])
                                              ->setTransferenciadetalleSubtotal(floatval($variante["valor"] * floatval($precio["valor"])))->save();

                                //$total+= $transferencia_detalle->getCompradetalleSubtotal();
                                $boolean = true;
                                break;
                            }
                        }

                        //$entity->setCompraTotal($total);
                        $entity->save();

                        //unset($precios[$key]);
                        if($boolean)
                            break;
                    }
                    
                }
            }


            $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
            return $this->redirect()->toUrl('/transferencias');
        

        }

        //traer los proveedores
        $empleados = \EmpleadoQuery::create()->find();
        $empleados_array = array();

        foreach ($empleados as $value){
            $empleados_array[$value->getIdempleado()] = $value->getEmpleadoNombre()." " . $value->getEmpleadoApaterno() ." " . $value->getEmpleadoAmaterno();
        }

        //traer las sucursales
        $sucursales = \SucursalQuery::create()->find();
        $sucursales_array = array();

        foreach ($sucursales as $value){
            $sucursales_array[$value->getIdsucursal()] = $value->getSucursalNombrecomercial();
        }


        //traer los productosvariantes
        $variantes = \ProductovarianteQuery::create()->groupByIdproductomaterial()->groupByIdproductocolor()->find();

        $productosvariante_array = array();

        foreach ($variantes as $value){
            $producto = $value->getProducto();
            $color = $value->getProductocolor();
            $color = $color->getColor();
            $material = $value->getProductomaterial();
            $material = $material->getMaterial();


            $information =$producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre();

            $productosvariante_array[$value->getIdproductovariante()] = $information;
        }


        //traer los productos generales
        $generales = \ProductoQuery::create()->find();
        $productos_generales_array = array();

        foreach ($generales as $value){

            $productos_generales_array[$value->getIdproducto()] = $value->getProductoModelo();
        }

        $user = new \Application\Session\AouthSession();
        $user = $user->getData();


        $form = new \Application\Transferencia\Form\TransferenciaForm($empleados_array,$sucursales_array,$productosvariante_array,$productos_generales_array,$user);
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/transferencias/nuevo');
        $view_model->setVariables(array(
            'form' => $form
        ));
        return $view_model;
        
    }

    public function nuevaAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();

            $entity = new \Transferencia();

            $post_data['transferencia_fecharecepcion'] = date_create_from_format('d/m/Y', $post_data['transferencia_fecharecepcion']);

            $post_data['transferencia_fecha'] = date_create_from_format('d/m/Y', $post_data['transferencia_fecha']);
            $user = new \Application\Session\AouthSession();
            $user = $user->getData();

            $post_data['idempleadocreador'] = $user['idempleado'];

            $post_data['idsucursalorigen'] = $user['idsucursal'];
            $post_data['transferencia_estatus'] = 'creada';

            $precios = [];
            $variantes = [];
            foreach ($post_data as $key => $value){
                if(\TransferenciaPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }

                if(substr( $key, 0, 6 ) === "precio")
                {
                    $temp = array(
                        "variante" => str_replace("preciounitario", "", $key),
                        "valor" => $value
                    );
                    array_push($precios, $temp);
                }

                if(substr( $key, 0, 8 ) === "cantidad")
                {
                    /*if($value != 0)
                    {*/
                        $temp = array(
                            "variante" => str_replace("cantidad", "", $key),
                            "valor" => $value
                        );
                        array_push($variantes, $temp);
                    //}
                    
                }
            }

            $entity->save();

            
            
            //$total = 0;
            foreach ($variantes as $variante) {
                $transferencia_detalle = new \Transferenciadetalle();
                $varianteTemp = \ProductovarianteQuery::create()->findPk($variante["variante"]);
                //encontrar a que precio le corresponde
                foreach ($precios as $key=>$precio) {

                    //obtenemos la variante 
                    $productovariante = \ProductovarianteQuery::create()->findPk($precio["variante"]);

                    if($productovariante->getIdproducto() == $varianteTemp->getIdproducto() && $productovariante->getIdproductocolor() == $varianteTemp->getIdproductocolor() && $productovariante->getIdproductomaterial() == $varianteTemp->getIdproductomaterial())
                        {


                        //obtenemos el rango de los tallajes
                        $tallajes = \ProductotallajeQuery::create()->JoinTallaje()->withColumn('Tallajerango')->filterByIdproducto($productovariante->getIdproducto())->find();

                        $boolean = false;
                        foreach ($tallajes->toArray() as $tallaje) {
                            $rango = $tallaje["Tallajerango"];
                            $inf = explode(" - ", $rango);


                            //verificamos que este en el rango del precio asociado
                            if($productovariante->getProductovarianteTalla()>=$inf[0] &&  $productovariante->getProductovarianteTalla()<=$inf[1] && $varianteTemp->getProductovarianteTalla()>=$inf[0] &&  $varianteTemp->getProductovarianteTalla()<=$inf[1])
                            {
                                $transferencia_detalle->setIdtransferencia($entity->getIdtransferencia())
                                              ->setIdproductovariante($variante["variante"])
                                              ->setTransferenciadetalleCantidad($variante["valor"])
                                              ->setTransferenciadetallePreciounitario($precio["valor"])
                                              ->setTransferenciadetalleSubtotal(floatval($variante["valor"] * floatval($precio["valor"])))->save();

                                //$total+= $transferencia_detalle->getCompradetalleSubtotal();
                                $boolean = true;
                                break;
                            }
                        }

                        //$entity->setCompraTotal($total);
                        $entity->save();

                        //unset($precios[$key]);
                        if($boolean)
                            break;
                    }
                    
                }
            }


            $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
            return $this->redirect()->toUrl('/transferencias-sucursal');
        

        }

        //traer los proveedores
        $empleados = \EmpleadoQuery::create()->find();
        $empleados_array = array();

        foreach ($empleados as $value){
            $empleados_array[$value->getIdempleado()] = $value->getEmpleadoNombre()." " . $value->getEmpleadoApaterno() ." " . $value->getEmpleadoAmaterno();
        }

        //traer las sucursales
        $sucursales = \SucursalQuery::create()->find();
        $sucursales_array = array();

        foreach ($sucursales as $value){
            $sucursales_array[$value->getIdsucursal()] = $value->getSucursalNombrecomercial();
        }


        //traer los productosvariantes
        $variantes = \ProductovarianteQuery::create()->groupByIdproductomaterial()->groupByIdproductocolor()->find();

        $productosvariante_array = array();

        foreach ($variantes as $value){
            $producto = $value->getProducto();
            $color = $value->getProductocolor();
            $color = $color->getColor();
            $material = $value->getProductomaterial();
            $material = $material->getMaterial();


            $information =$producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre();

            $productosvariante_array[$value->getIdproductovariante()] = $information;
        }


        //traer los productos generales
        $generales = \ProductoQuery::create()->find();
        $productos_generales_array = array();

        foreach ($generales as $value){

            $productos_generales_array[$value->getIdproducto()] = $value->getProductoModelo();
        }

        $user = new \Application\Session\AouthSession();
        $user = $user->getData();


        $form = new \Application\Transferencia\Form\TransferenciaForm($empleados_array,$sucursales_array,$productosvariante_array,$productos_generales_array,$user);
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/transferencias-sucursal/nuevo');
        $view_model->setVariables(array(
            'form' => $form
        ));
        return $view_model;
        
    }


    public function verAction()
    {
        $request = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \TransferenciaQuery::create()->filterByIdtransferencia($id)->exists();
        
        if($exist){
            
            $entity = \TransferenciaQuery::create()->findPk($id);
            
            if($request->isPost()){
                $post_data = $request->getPost();
                $post_files = $request->getFiles();

                $post_data['transferencia_fecharecepcion'] = date_create_from_format('d/m/Y', $post_data['transferencia_fecharecepcion']);

                $post_data['transferencia_fecha'] = date_create_from_format('d/m/Y', $post_data['transferencia_fecha']);
                $user = new \Application\Session\AouthSession();
                $user = $user->getData();

                $post_data['idempleadocreador'] = $user['idempleado'];
                
                $precios = [];
                $variantes = [];

                foreach ($post_data as $key => $value){
                    if(\TransferenciaPeer::getTableMap()->hasColumn($key)){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }

                    if(substr( $key, 0, 6 ) === "precio")
                    {
                        $temp = array(
                            "variante" => str_replace("preciounitario", "", $key),
                            "valor" => $value
                        );
                        array_push($precios, $temp);
                    }

                    if(substr( $key, 0, 8 ) === "cantidad")
                    {
                        /*if($value != 0)
                        {*/
                            $temp = array(
                                "variante" => str_replace("cantidad", "", $key),
                                "valor" => $value
                            );
                            array_push($variantes, $temp);
                        //}
                        
                    }
                }

                $detalles = \TransferenciadetalleQuery::create()->filterByIdtransferencia($id)->delete();
                $entity->save();


                //$total = 0;
                foreach ($variantes as $variante) {
                    $transferencia_detalle = new \Transferenciadetalle();
                    $varianteTemp = \ProductovarianteQuery::create()->findPk($variante["variante"]);
                    //encontrar a que precio le corresponde
                    foreach ($precios as $key=>$precio) {

                        //obtenemos la variante 
                        $productovariante = \ProductovarianteQuery::create()->findPk($precio["variante"]);

                        if($productovariante->getIdproducto() == $varianteTemp->getIdproducto() && $productovariante->getIdproductocolor() == $varianteTemp->getIdproductocolor() && $productovariante->getIdproductomaterial() == $varianteTemp->getIdproductomaterial())
                            {


                            //obtenemos el rango de los tallajes
                            $tallajes = \ProductotallajeQuery::create()->JoinTallaje()->withColumn('Tallajerango')->filterByIdproducto($productovariante->getIdproducto())->find();

                            $boolean = false;
                            foreach ($tallajes->toArray() as $tallaje) {
                                $rango = $tallaje["Tallajerango"];
                                $inf = explode(" - ", $rango);


                                //verificamos que este en el rango del precio asociado
                                if($productovariante->getProductovarianteTalla()>=$inf[0] &&  $productovariante->getProductovarianteTalla()<=$inf[1] && $varianteTemp->getProductovarianteTalla()>=$inf[0] &&  $varianteTemp->getProductovarianteTalla()<=$inf[1])
                                {
                                    $transferencia_detalle->setIdtransferencia($entity->getIdtransferencia())
                                                  ->setIdproductovariante($variante["variante"])
                                                  ->setTransferenciadetalleCantidad($variante["valor"])
                                                  ->setTransferenciadetallePreciounitario($precio["valor"])
                                                  ->setTransferenciadetalleSubtotal(floatval($variante["valor"] * floatval($precio["valor"])))->save();

                                    //$total+= $transferencia_detalle->getCompradetalleSubtotal();
                                    $boolean = true;
                                    break;
                                }
                            }

                            //$entity->setCompraTotal($total);
                            $entity->save();

                            //unset($precios[$key]);
                            if($boolean)
                                break;
                        }
                        
                    }
                }


                $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
                return $this->redirect()->toUrl('/transferencias');
            }
            
                
            //traer los proveedores
            $empleados = \EmpleadoQuery::create()->find();
            $empleados_array = array();

            foreach ($empleados as $value){
                $empleados_array[$value->getIdempleado()] = $value->getEmpleadoNombre()." " . $value->getEmpleadoApaterno() ." " . $value->getEmpleadoAmaterno();
            }

            //traer las sucursales
            $sucursales = \SucursalQuery::create()->find();
            $sucursales_array = array();

            foreach ($sucursales as $value){
                $sucursales_array[$value->getIdsucursal()] = $value->getSucursalNombrecomercial();
            }


            //traer los productosvariantes
            $variantes = \ProductovarianteQuery::create()->groupByIdproductomaterial()->groupByIdproductocolor()->find();

            $productosvariante_array = array();

            foreach ($variantes as $value){
                $producto = $value->getProducto();
                $color = $value->getProductocolor();
                $color = $color->getColor();
                $material = $value->getProductomaterial();
                $material = $material->getMaterial();


                $information =$producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre();

                $productosvariante_array[$value->getIdproductovariante()] = $information;
            }


            //traer los productos generales
            $generales = \ProductoQuery::create()->find();
            $productos_generales_array = array();

            foreach ($generales as $value){

                $productos_generales_array[$value->getIdproducto()] = $value->getProductoModelo();
            }


            $form = new \Application\Transferencia\Form\TransferenciaForm($empleados_array,$sucursales_array,$productosvariante_array,$productos_generales_array);

            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

            $form->get('transferencia_fecha')->setValue($entity->getTransferenciaFecha('d/m/Y'));
            $form->get('transferencia_fecharecepcion')->setValue($entity->getTransferenciaFecharecepcion('d/m/Y'));

            $form->get('idempleadocreador')->setValue($entity->getEmpleadoRelatedByIdempleadocreador()->toArray()['EmpleadoNombre']);

            //verificamos que ya tenga un receptor
            if($entity->getEmpleadoRelatedByIdempleadoreceptor() != null)
            {
                $form->get('idempleadoreceptor')->setValue($entity->getEmpleadoRelatedByIdempleadoreceptor()->toArray()['EmpleadoNombre']);
            }
            


            $view_model = new ViewModel();
            $view_model->setTemplate('application/transferencias/ver');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
            ));
            return $view_model;
            
            
        }else{
            $this->flashMessenger()->addErrorMessage('Id Invalido.');
            return $this->redirect()->toUrl('/transferencias');
        }
        return $view_model;
    }


    public function editarAction()
    {
        $request = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \TransferenciaQuery::create()->filterByIdtransferencia($id)->exists();
        
        if($exist){
            
            $entity = \TransferenciaQuery::create()->findPk($id);
            
            if($request->isPost()){
                $post_data = $request->getPost();
                $post_files = $request->getFiles();

                $post_data['transferencia_fecharecepcion'] = date_create_from_format('d/m/Y', $post_data['transferencia_fecharecepcion']);

                $post_data['transferencia_fecha'] = date_create_from_format('d/m/Y', $post_data['transferencia_fecha']);
                $user = new \Application\Session\AouthSession();
                $user = $user->getData();

                $post_data['idempleadocreador'] = $user['idempleado'];

                $post_data['idempleadocreador'] = $user['idempleado'];
                
                $precios = [];
                $variantes = [];

                foreach ($post_data as $key => $value){
                    if(\TransferenciaPeer::getTableMap()->hasColumn($key)){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }

                    if(substr( $key, 0, 6 ) === "precio")
                    {
                        $temp = array(
                            "variante" => str_replace("preciounitario", "", $key),
                            "valor" => $value
                        );
                        array_push($precios, $temp);
                    }

                    if(substr( $key, 0, 8 ) === "cantidad")
                    {
                        /*if($value != 0)
                        {*/
                            $temp = array(
                                "variante" => str_replace("cantidad", "", $key),
                                "valor" => $value
                            );
                            array_push($variantes, $temp);
                        //}
                        
                    }
                }

                $detalles = \TransferenciadetalleQuery::create()->filterByIdtransferencia($id)->delete();
                $entity->save();


                //$total = 0;
                foreach ($variantes as $variante) {
                    $transferencia_detalle = new \Transferenciadetalle();
                    $varianteTemp = \ProductovarianteQuery::create()->findPk($variante["variante"]);
                    //encontrar a que precio le corresponde
                    foreach ($precios as $key=>$precio) {

                        //obtenemos la variante 
                        $productovariante = \ProductovarianteQuery::create()->findPk($precio["variante"]);

                        if($productovariante->getIdproducto() == $varianteTemp->getIdproducto() && $productovariante->getIdproductocolor() == $varianteTemp->getIdproductocolor() && $productovariante->getIdproductomaterial() == $varianteTemp->getIdproductomaterial())
                            {


                            //obtenemos el rango de los tallajes
                            $tallajes = \ProductotallajeQuery::create()->JoinTallaje()->withColumn('Tallajerango')->filterByIdproducto($productovariante->getIdproducto())->find();

                            $boolean = false;
                            foreach ($tallajes->toArray() as $tallaje) {
                                $rango = $tallaje["Tallajerango"];
                                $inf = explode(" - ", $rango);


                                //verificamos que este en el rango del precio asociado
                                if($productovariante->getProductovarianteTalla()>=$inf[0] &&  $productovariante->getProductovarianteTalla()<=$inf[1] && $varianteTemp->getProductovarianteTalla()>=$inf[0] &&  $varianteTemp->getProductovarianteTalla()<=$inf[1])
                                {
                                    $transferencia_detalle->setIdtransferencia($entity->getIdtransferencia())
                                                  ->setIdproductovariante($variante["variante"])
                                                  ->setTransferenciadetalleCantidad($variante["valor"])
                                                  ->setTransferenciadetallePreciounitario($precio["valor"])
                                                  ->setTransferenciadetalleSubtotal(floatval($variante["valor"] * floatval($precio["valor"])))->save();

                                    //$total+= $transferencia_detalle->getCompradetalleSubtotal();
                                    $boolean = true;
                                    break;
                                }
                            }

                            //$entity->setCompraTotal($total);
                            $entity->save();

                            //unset($precios[$key]);
                            if($boolean)
                                break;
                        }
                        
                    }
                }


                $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
                return $this->redirect()->toUrl('/transferencias-sucursal');
            }
            
                
            //traer los proveedores
            $empleados = \EmpleadoQuery::create()->find();
            $empleados_array = array();

            foreach ($empleados as $value){
                $empleados_array[$value->getIdempleado()] = $value->getEmpleadoNombre()." " . $value->getEmpleadoApaterno() ." " . $value->getEmpleadoAmaterno();
            }

            //traer las sucursales
            $sucursales = \SucursalQuery::create()->find();
            $sucursales_array = array();

            foreach ($sucursales as $value){
                $sucursales_array[$value->getIdsucursal()] = $value->getSucursalNombrecomercial();
            }


            //traer los productosvariantes
            $variantes = \ProductovarianteQuery::create()->groupByIdproductomaterial()->groupByIdproductocolor()->find();

            $productosvariante_array = array();

            foreach ($variantes as $value){
                $producto = $value->getProducto();
                $color = $value->getProductocolor();
                $color = $color->getColor();
                $material = $value->getProductomaterial();
                $material = $material->getMaterial();


                $information =$producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre();

                $productosvariante_array[$value->getIdproductovariante()] = $information;
            }


            //traer los productos generales
            $generales = \ProductoQuery::create()->find();
            $productos_generales_array = array();

            foreach ($generales as $value){

                $productos_generales_array[$value->getIdproducto()] = $value->getProductoModelo();
            }


            $form = new \Application\Transferencia\Form\TransferenciaForm($empleados_array,$sucursales_array,$productosvariante_array,$productos_generales_array);

            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

            $form->get('transferencia_fecha')->setValue($entity->getTransferenciaFecha('d/m/Y'));
            $form->get('transferencia_fecharecepcion')->setValue($entity->getTransferenciaFecharecepcion('d/m/Y'));

            $form->get('idempleadocreador')->setValue($entity->getEmpleadoRelatedByIdempleadocreador()->toArray()['EmpleadoNombre']);

            //verificamos que ya tenga un receptor
            if($entity->getEmpleadoRelatedByIdempleadoreceptor() != null)
            {
                $form->get('idempleadoreceptor')->setValue($entity->getEmpleadoRelatedByIdempleadoreceptor()->toArray()['EmpleadoNombre']);
            }
            


            $view_model = new ViewModel();
            $view_model->setTemplate('application/transferencias-sucursal/ver');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
                'razon' => $entity->getTransferenciaRazon(),
            ));
            return $view_model;
            
            
        }else{
            $this->flashMessenger()->addErrorMessage('Id Invalido.');
            return $this->redirect()->toUrl('/transferencias');
        }
        return $view_model;
    }


    public function recibirAction()
    {
        $request = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \TransferenciaQuery::create()->filterByIdtransferencia($id)->exists();
        
        if($exist){
            
            $entity = \TransferenciaQuery::create()->findPk($id);
            
            if($request->isPost()){
                $post_data = $request->getPost();


                $user = new \Application\Session\AouthSession();
                $user = $user->getData();

                $post_data['idempleadoreceptor'] = $user['idempleado'];
                $entity->setTransferenciaFecharecepcion((date("Y/m/d")))
                       ->setIdempleadoreceptor($post_data['idempleadoreceptor'])
                       ->setTransferenciaEstatus($post_data['transferencia_estatus']);

                if($post_data['transferencia_estatus'] == "rechazada")
                {
                    $entity->setTransferenciaRazon($post_data['transferencia_razon']);
                }

                if($post_data['transferencia_estatus'] == "aceptada")
                {
                    $this->updateInventory($entity->getIdtransferencia(), $entity->getIdsucursalorigen(), $entity->getIdsucursaldestino());
                }

                $entity->save();


                $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
                return $this->redirect()->toUrl('/transferencias-sucursal');
            }
            
                
            //traer los proveedores
            $empleados = \EmpleadoQuery::create()->find();
            $empleados_array = array();

            foreach ($empleados as $value){
                $empleados_array[$value->getIdempleado()] = $value->getEmpleadoNombre()." " . $value->getEmpleadoApaterno() ." " . $value->getEmpleadoAmaterno();
            }

            //traer las sucursales
            $sucursales = \SucursalQuery::create()->find();
            $sucursales_array = array();

            foreach ($sucursales as $value){
                $sucursales_array[$value->getIdsucursal()] = $value->getSucursalNombrecomercial();
            }


            //traer los productosvariantes
            $variantes = \ProductovarianteQuery::create()->groupByIdproductomaterial()->groupByIdproductocolor()->find();

            $productosvariante_array = array();

            foreach ($variantes as $value){
                $producto = $value->getProducto();
                $color = $value->getProductocolor();
                $color = $color->getColor();
                $material = $value->getProductomaterial();
                $material = $material->getMaterial();


                $information =$producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre();

                $productosvariante_array[$value->getIdproductovariante()] = $information;
            }


            //traer los productos generales
            $generales = \ProductoQuery::create()->find();
            $productos_generales_array = array();

            foreach ($generales as $value){

                $productos_generales_array[$value->getIdproducto()] = $value->getProductoModelo();
            }


            $form = new \Application\Transferencia\Form\TransferenciaForm($empleados_array,$sucursales_array,$productosvariante_array,$productos_generales_array);

            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

            $form->get('transferencia_fecha')->setValue($entity->getTransferenciaFecha('d/m/Y'));
            $form->get('transferencia_fecharecepcion')->setValue($entity->getTransferenciaFecharecepcion('d/m/Y'));

            $form->get('idempleadocreador')->setValue($entity->getEmpleadoRelatedByIdempleadocreador()->toArray()['EmpleadoNombre']);

            //verificamos que ya tenga un receptor
            if($entity->getEmpleadoRelatedByIdempleadoreceptor() != null)
            {
                $form->get('idempleadoreceptor')->setValue($entity->getEmpleadoRelatedByIdempleadoreceptor()->toArray()['EmpleadoNombre']);
            }
            


            $view_model = new ViewModel();
            $view_model->setTemplate('application/transferencias-sucursal/recibir');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
                'razon' => $entity->getTransferenciaRazon(),

            ));
            return $view_model;
            
            
        }else{
            $this->flashMessenger()->addErrorMessage('Id Invalido.');
            return $this->redirect()->toUrl('/transferencias');
        }
        return $view_model;
    }
    



    public function getProductovariantes($data){
        $information = [
            'selects' => \TransferenciadetalleQuery::create()->select('idproductovariante')->filterByIdtransferencia($data['idtransferencia'])->find()->toArray(),
            'cantidad' =>\TransferenciadetalleQuery::create()->select('transferenciadetalle_cantidad')->filterByIdtransferencia($data['idtransferencia'])->find()->toArray(),
            'precio' =>\TransferenciadetalleQuery::create()->select('transferenciadetalle_preciounitario')->filterByIdtransferencia($data['idtransferencia'])->find()->toArray(),
        ];

        return $information;

    }

    public function getProductosvariantesAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            if($post_data['name'] == 'productosvariantes'){
                $response = $this->getProductovariantes($post_data['data']);

                return $this->getResponse()->setContent(json_encode($response));
                
            }
            
        };
    }


    public function getdetailsAction(){

        $request = $this->getRequest();
        if($request->isPost()){

            $post_data = $request->getPost();
            
            //filtramos los productos variantes por producto
            $variantes = \ProductovarianteQuery::create()->filterByIdproducto($post_data['idproductogeneral'])->find();
            
            $details = [];


            //iteramos sobre todas als variantes
            foreach ($variantes as $variante) {
                $indice = $variante->getProductocolor()->getColor()->getColorNombre() .'/'. $variante->getProductomaterial()->getMaterial()->getMaterialNombre();


                
                //verificamos que la combinacion de material color n oexista
                if($details[$indice] == null)
                {

                    //inicializamos las variantes de ese color y material
                    $details[$indice] = [];
                    $value = array(
                                'talla' => $variante->getProductovarianteTalla(),
                                'variante' => $variante->getIdproductovariante(),
                             );

                    array_push($details[$indice], $value);

                }else{
                    $value = array(
                                'talla' => $variante->getProductovarianteTalla(),
                                'variante' => $variante->getIdproductovariante(),
                             );

                    array_push($details[$indice], $value);
                }
                
            }

            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $details)));

            //echo '<pre>'; var_dump($details); echo '</pre>';exit();
        }

    } 
    
    public function initializetableAction(){

        $request = $this->getRequest();
        if($request->isPost()){

            $post_data = $request->getPost();
            
            //obtenemos la variante 
            $variante = \ProductovarianteQuery::create()->findPk($post_data['id']);

            //obtenemos el rango de los tallajes
            $tallajes = \ProductotallajeQuery::create()->JoinTallaje()->withColumn('Tallajerango')->filterByIdproducto($variante->getIdproducto())->find();

            //ovtenemos combinacion color/material
            $details = [];
            $indice = $variante->getProductocolor()->getColor()->getColorNombre() .'/'. $variante->getProductomaterial()->getMaterial()->getMaterialNombre();
            $details[$indice] = [];

            $nombreProducto = $variante->getProducto()->getProductoModelo();

            foreach ($tallajes->toArray() as $tallaje) {
                //obtenemos el rango del tallaje
                $rango = $tallaje["Tallajerango"];
                $inf = explode(" - ", $rango);
                $details[$indice][$tallaje['Idproductotallaje']] = [];

                //iteramos desde el limite superior hasta el inferior 
                for ($i = $inf[0]; $i<=$inf[1];) {

                    //obtenemos la variante correspondiente a lo solicitado
                    $productoVariante = \ProductovarianteQuery::create()->filterByIdproducto($variante->getIdproducto())->filterByIdproductomaterial($variante->getIdproductomaterial())->filterByIdproductocolor($variante->getIdproductocolor())->filterByProductovarianteTalla($i)->findOne();
                    if($productoVariante != null)
                    {
                        $productoVariante = $productoVariante->toArray();
                        $value = array(
                                    'talla' => $productoVariante['ProductovarianteTalla'],
                                    'variante' => $productoVariante['Idproductovariante'],
                                    'modelo' => $nombreProducto,
                                 );

                        array_push($details[$indice][$tallaje['Idproductotallaje']], $value);
                    }
                    $i+=0.5;
                }

            }

            

            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $details)));

            //echo '<pre>'; var_dump($details); echo '</pre>';exit();
        }

    } 

    public function initializetablegeneralAction(){

        $request = $this->getRequest();
        if($request->isPost()){

            $post_data = $request->getPost();
            
            //obtenemos la variante 
            $variante = \ProductovarianteQuery::create()->findPk($post_data['id']);

            //obtenemos el rango de los tallajes
            $tallajes = \ProductotallajeQuery::create()->JoinTallaje()->withColumn('Tallajerango')->filterByIdproducto($variante->getIdproducto())->find();

            //ovtenemos combinacion color/material
            $details = [];
            $indice = $variante->getProductocolor()->getColor()->getColorNombre() .'/'. $variante->getProductomaterial()->getMaterial()->getMaterialNombre();
            $details[$indice] = [];

            $nombreProducto = $variante->getProducto()->getProductoModelo();

            foreach ($tallajes->toArray() as $tallaje) {
                //obtenemos el rango del tallaje
                $rango = $tallaje["Tallajerango"];
                $inf = explode(" - ", $rango);
                

                //Verificamos que pertenezca al tallaje
                if($variante->getProductovarianteTalla() <= $inf[1] && $variante->getProductovarianteTalla() >= $inf[0])
                {
                    $details[$indice][$tallaje['Idproductotallaje']] = [];

                    //iteramos desde el limite superior hasta el inferior 
                    for ($i = $inf[0]; $i<=$inf[1];) {

                        //obtenemos la variante correspondiente a lo solicitado
                        $productoVariante = \ProductovarianteQuery::create()->filterByIdproducto($variante->getIdproducto())->filterByIdproductomaterial($variante->getIdproductomaterial())->filterByIdproductocolor($variante->getIdproductocolor())->filterByProductovarianteTalla($i)->findOne();
                        if($productoVariante != null)
                        {
                            $productoVariante = $productoVariante->toArray();
                            $value = array(
                                        'talla' => $productoVariante['ProductovarianteTalla'],
                                        'variante' => $productoVariante['Idproductovariante'],
                                        'modelo' => $nombreProducto,
                                     );

                            array_push($details[$indice][$tallaje['Idproductotallaje']], $value);
                        }
                        $i+=0.5;
                    }
                }

            }

            

            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $details)));

            //echo '<pre>'; var_dump($details); echo '</pre>';exit();
        }

    } 

    public function eliminarAction(){
        $request = $this->getRequest();

        if($request->isPost())
        {
            $id = $this->params()->fromRoute('id');
            $entity = \TransferenciaQuery::Create()->findPk($id);

            //unlink("/files/compras/19.");
            
            $entity->delete();

            $detalles = \TransferenciadetalleQuery::create()->filterByIdtransferencia($id)->delete();
            
            if($entity->isDeleted()){
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido eliminado satisfactoriamente.');
            }else{
                $this->flashMessenger()->addErrorMessage('Ocurrió un error al intentar eliminar. Pruebe más tarde.');
            }
        }

        return $this->redirect()->toUrl('/transferencias');
    }

     private function updateInventory($id, $destino, $origen)
    {
        //Actualizamos as existencias de los productos sucursal
        $transferencia_detalle = \TransferenciadetalleQuery::create()->filterByIdtransferencia($id)->find()->toArray();

        foreach ($transferencia_detalle as $detalle) {

            $producto_sucursal_destino = \ProductosucursalQuery::create()->filterByIdproductovariante($detalle['Idproductovariante'])->filterByIdsucursal($destino)->find()[0];

            $producto_sucursal_origen = \ProductosucursalQuery::create()->filterByIdproductovariante($detalle['Idproductovariante'])->filterByIdsucursal($origen)->find()[0];

            $producto_sucursal_destino->setProductosucursalExistencia($producto_sucursal_destino->getProductosucursalExistencia() - $detalle['TransferenciadetalleCantidad'])->save();

            $producto_sucursal_origen->setProductosucursalExistencia($producto_sucursal_origen->getProductosucursalExistencia() + $detalle['TransferenciadetalleCantidad'])->save();

            
        }

        
            
    }

}
