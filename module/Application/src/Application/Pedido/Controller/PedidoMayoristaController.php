<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Pedido\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PedidoMayoristaController extends AbstractActionController
{

    public $column_map = array(
        0 => 'a.ClienteNombre',
        1 => 'PedidomayoristaFechasolicitud',
        2 => 'PedidomayoristaEstatus',
        4 => 'PedidomayoristaFechaentrega',
    );

    public $column_map_sucursal = array(
        0 => 'a.SucursalNombrecomercial',
        1 => 'PedidosucursalFechasolicitud',
        2 => 'PedidosucursalEstatus',
        3 => 'PedidosucursalFechaentrega',
    );

    public function getdetailsolicitadoAction(){

        $request = $this->getRequest();
        //Verificamos que la peticion sea post
        if($request->isPost()){

            //obtenemos todos los pedidos del request que se mandó
            $post_data = $request->getPost();

            //filtramos por estatus solicitado y por la variante
            $details = \PedidomayoristadetalleQuery::create()->filterByPedidomayoristadetalleEstatus('solicitado')->filterByIdproductovariante($post_data['idvariante'])->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);

            //iteramos para obtener el nombre del mayorista
            for ($pedido = 0; $pedido<count($details); $pedido++) {
                $pedidomayorista = \PedidomayoristaQuery::create()->findPK($details[$pedido]['idpedidomayorista']);

                $cliente = $pedidomayorista->getCliente();


                //verificamos que exista
                if($cliente != null)
                    $details[$pedido]['idpedidomayorista'] = $cliente->getClienteNombre();
            }


            //regresamos la respuesta
            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $details)));

        }

    } 

    public function getdetailpendienteAction(){

        $request = $this->getRequest();
        //Verificamos que la peticion sea post
        if($request->isPost()){

            //obtenemos todos los pedidos del request que se mandó
            $post_data = $request->getPost();

            //filtramos por estatus pendiente y por la variante
            $details = \PedidomayoristadetalleQuery::create()->filterByPedidomayoristadetalleEstatus('pendiente')->filterByIdproductovariante($post_data['idvariante'])->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);

            //iteramos para obtener el nombre del mayorista
            for ($pedido = 0; $pedido<count($details); $pedido++) {
                $pedidomayorista = \PedidomayoristaQuery::create()->findPK($details[$pedido]['idpedidomayorista']);

                $cliente = $pedidomayorista->getCliente();


                //verificamos que exista
                if($cliente != null)
                    $details[$pedido]['idpedidomayorista'] = $cliente->getClienteNombre();
            }


            //regresamos la respuesta
            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $details)));

        }

    } 

    public function getdetailcompletadoAction(){

        $request = $this->getRequest();
        //Verificamos que la peticion sea post
        if($request->isPost()){

            //obtenemos todos los pedidos del request que se mandó
            $post_data = $request->getPost();

            //filtramos por estatus completado y por la variante
            $details = \PedidomayoristadetalleQuery::create()->filterByPedidomayoristadetalleEstatus('completado')->filterByIdproductovariante($post_data['idvariante'])->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);

            //iteramos para obtener el nombre del mayorista
            for ($pedido = 0; $pedido<count($details); $pedido++) {
                $pedidomayorista = \PedidomayoristaQuery::create()->findPK($details[$pedido]['idpedidomayorista']);

                $cliente = $pedidomayorista->getCliente();


                //verificamos que exista
                if($cliente != null)
                    $details[$pedido]['idpedidomayorista'] = $cliente->getClienteNombre();
            }


            //regresamos la respuesta
            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $details)));

        }

    } 

    public function getdetailtransitoAction(){

        $request = $this->getRequest();
        //Verificamos que la peticion sea post
        if($request->isPost()){

            //obtenemos todos los pedidos del request que se mandó
            $post_data = $request->getPost();

            //filtramos por estatus transito y por la variante
            $details = \PedidomayoristadetalleQuery::create()->filterByPedidomayoristadetalleEstatus('transito')->filterByIdproductovariante($post_data['idvariante'])->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);

            //iteramos para obtener el nombre del mayorista
            for ($pedido = 0; $pedido<count($details); $pedido++) {
                $pedidomayorista = \PedidomayoristaQuery::create()->findPK($details[$pedido]['idpedidomayorista']);

                $cliente = $pedidomayorista->getCliente();


                //verificamos que exista
                if($cliente != null)
                    $details[$pedido]['idpedidomayorista'] = $cliente->getClienteNombre();
            }


            //regresamos la respuesta
            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $details)));

        }

    } 
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $post_data = $request->getPost();

            $query = new \PedidomayoristaQuery();
            

            $query->useClienteQuery('a')->endUse();

            $query->withColumn('a.ClienteNombre', 'pedido_clientenombre');


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

                $c1= $c->getNewCriterion('pedidomayorista.idcliente', '%'.$search_value.'%', \Criteria::LIKE);

                $c2= $c->getNewCriterion('pedidomayorista.pedidomayorista_fechasolicitud', '%'.$search_value.'%', \Criteria::LIKE);

                $c3= $c->getNewCriterion('pedidomayorista.pedidomayorista_estatus', '%'.$search_value.'%', \Criteria::LIKE);

                $c4= $c->getNewCriterion('pedidomayorista.pedidomayorista_fechaentrega', '%'.$search_value.'%', \Criteria::LIKE);


                $c1->addOr($c2)->addOr($c3)->addOr($c4);

                $query->addAnd($c1);
                $query->groupByPedidomayoristaFechasolicitud();

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
                $tmp['DT_RowId'] = $value['idpedidomayorista'];
                $tmp['idpedidomayorista'] = $value['idpedidomayorista'];
                $tmp['pedido_clientenombre'] = $value['pedido_clientenombre'];
                $tmp['pedidomayorista_fechasolicitud'] = $value['pedidomayorista_fechasolicitud'];
                $tmp['pedidomayorista_estatus'] = $value['pedidomayorista_estatus'];
                $tmp['pedidomayorista_fechaentrega'] = $value['pedidomayorista_fechaentrega'];
                

                $tmp['options'] = '<td><div class="btn-group dropdown">
                  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-gear icon-lg icon-fw"></span>
                    Opciones
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/pedidos/mayoristas/ver/' . $value['idpedidomayorista'] . '">
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

            $query = new \PedidosucursalQuery();
            

            $query->useSucursalQuery('a')->endUse();

            $query->withColumn('a.SucursalNombrecomercial', 'pedido_sucursalnombre');


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

                $c1= $c->getNewCriterion('pedidosucursal.idsucursal', '%'.$search_value.'%', \Criteria::LIKE);



                $c2= $c->getNewCriterion('pedidosucursal.pedidosucursal_estatus', '%'.$search_value.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('sucursal.sucursal_nombrecomercial', '%'.$search_value.'%', \Criteria::LIKE);



                $c1->addOr($c2)->addOr($c3);

                $query->addAnd($c1);
                $query->groupByPedidosucursalFechasolicitud();

                $records_filtered = $query->count();
            }

            //LIMIT
            $query->setOffset((int) $post_data['start']);
            $query->setLimit((int) $post_data['length']);


            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->column_map_sucursal[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if ($dir == 'desc') {
                $query->orderBy($order_column, \Criteria::DESC);
            } else {
                $query->orderBy($order_column, \Criteria::ASC);
            }

            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();




            foreach ($query->find()->toArray(null, false, \BasePeer::TYPE_FIELDNAME) as $value) {

                $tmp['DT_RowId'] = $value['idpedidosucursal'];
                $tmp['idpedidomayorista'] = $value['idpedidosucursal'];
                $tmp['pedido_clientenombre'] = $value['pedido_sucursalnombre'];
                $tmp['pedidomayorista_fechasolicitud'] = $value['pedidosucursal_fechasolicitud'];
                $tmp['pedidomayorista_estatus'] = $value['pedidosucursal_estatus'];
                $tmp['pedidomayorista_fechaentrega'] = $value['pedidosucursal_fechaentrega'];
                

                $tmp['options'] = '<td><div class="btn-group dropdown">
                  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-gear icon-lg icon-fw"></span>
                    Opciones
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/pedidos/mayoristas-sucursal/editar/' . $value['idpedidosucursal'] . '">
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
    
    
    public function indexAction()
    {   
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/pedido/mayoristas/index');
        $view_model->setVariables(array(
             'messages' => $this->flashMessenger(),
        ));
        return $view_model;
    }


    public function indexsucursalAction()
    {   
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/pedido/mayoristas-sucursal/index');
        $view_model->setVariables(array(
             'messages' => $this->flashMessenger(),
        ));
        return $view_model;
    }


    public function nuevoAction(){
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            $post_files = $request->getFiles();

            $entity = new \Pedidomayorista();

            $post_data['pedidomayorista_fechasolicitud'] = date_create_from_format('d/m/Y', $post_data['pedidomayorista_fechasolicitud']);

            $post_data['pedidomayorista_fechaentrega'] = date_create_from_format('d/m/Y', $post_data['pedidomayorista_fechaentrega']);

            $variantes = [];
            foreach ($post_data as $key => $value){
                if(\PedidomayoristaPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
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

            foreach ($variantes as $variante) {
                $pedidomayoristadetalle = new \Pedidomayoristadetalle();
                $producto_variante = \ProductovarianteQuery::create()->findPk($variante["variante"]);

                $pedidomayoristadetalle->setIdpedidomayorista($entity->getIdpedidomayorista())
                              ->setIdproductovariante($variante["variante"])
                              ->setPedidomayoristadetalleCantidad($variante["valor"])
                              ->setPedidomayoristadetalleEstatus($post_data['estatus' . $variante["variante"]])
                              ->setPedidomayoristadetalleFecha($entity->getPedidomayoristaFechasolicitud());
                              $pedidomayoristadetalle->setIdproducto($producto_variante->getIdproducto())->save();
            }



            $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
            return $this->redirect()->toUrl('/pedidos/mayoristas');
        

        }

        //traer los clientes
        $clientes = \ClienteQuery::create()->find();
        $clientes_array = array();

        foreach ($clientes as $cliente){
            $clientes_array[$cliente->getIdcliente()] = $cliente->getClienteNombre();
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



        $form = new \Application\Pedido\Form\PedidoMayoristaForm($clientes_array,$productosvariante_array,$productos_generales_array);
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/pedido/mayoristas/nuevo');
        $view_model->setVariables(array(
            'form' => $form
        ));
        return $view_model;
        
    }
    
    public function nuevosAction(){
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            $post_files = $request->getFiles();

            $entity = new \Pedidosucursal();

            $post_data['pedidosucursal_fechasolicitud'] = date_create_from_format('d/m/Y', $post_data['pedidomayorista_fechasolicitud']);

            $post_data['pedidosucursal_fechaentrega'] = date_create_from_format('d/m/Y', $post_data['pedidomayorista_fechaentrega']);

            $post_data['pedidosucursal_estatus'] = $post_data['pedidomayorista_estatus'];

            $post_data['pedidosucursal_nota'] = $post_data['pedidomayorista_nota'];

            $variantes = [];
            foreach ($post_data as $key => $value){
                if(\PedidosucursalPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
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

            $user = new \Application\Session\AouthSession();
            $user = $user->getData();

            $entity->setIdsucursal($user['idsucursal'])
                    ->setIdempleado($user['idempleado'])
                    ->save();


            foreach ($variantes as $variante) {
                $pedidosucursaldetalle = new \Pedidosucursaldetalle();
                $producto_variante = \ProductovarianteQuery::create()->findPk($variante["variante"]);

                $pedidosucursaldetalle->setIdpedidosucursal($entity->getIdpedidosucursal())
                              ->setIdproductovariante($variante["variante"])
                              ->setPedidosucursaldetalleCantidad($variante["valor"])
                              ->setPedidosucursaldetalleEstatus($post_data['estatus' . $variante["variante"]]);
                              $pedidosucursaldetalle->setIdproducto($producto_variante->getIdproducto())->save();
            }



            $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
            return $this->redirect()->toUrl('/pedidos/mayoristas-sucursal');
        

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



        $form = new \Application\Pedido\Form\PedidoMayoristaForm(null,$productosvariante_array,$productos_generales_array);
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/pedido/mayoristas-sucursal/nuevo');
        $view_model->setVariables(array(
            'form' => $form
        ));
        return $view_model;
        
    }

    public function verAction()
    {

        $request = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \PedidomayoristaQuery::create()->filterByIdpedidomayorista($id)->exists();
        
        if($exist){
            $entity = \PedidomayoristaQuery::create()->findPk($id);
            
            if($request->isPost()){

                $post_data = $request->getPost();

                $post_data['pedidomayorista_fechasolicitud'] = date_create_from_format('d/m/Y', $post_data['pedidomayorista_fechasolicitud']);

                $post_data['pedidomayorista_fechaentrega'] = date_create_from_format('d/m/Y', $post_data['pedidomayorista_fechaentrega']);
                
                $variantes = [];
                foreach ($post_data as $key => $value){
                    if(\PedidomayoristaPeer::getTableMap()->hasColumn($key)){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
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

                $detalles = \PedidomayoristadetalleQuery::create()->filterByIdpedidomayorista($id)->delete();
                $entity->save();

                foreach ($variantes as $variante) {
                    $pedidomayoristadetalle = new \Pedidomayoristadetalle();
                    $producto_variante = \ProductovarianteQuery::create()->findPk($variante["variante"]);

                    $pedidomayoristadetalle->setIdpedidomayorista($entity->getIdpedidomayorista())
                                  ->setIdproductovariante($variante["variante"])
                                  ->setPedidomayoristadetalleCantidad($variante["valor"])
                                  ->setPedidomayoristadetalleEstatus($post_data['estatus' . $variante["variante"]])
                                  ->setPedidomayoristadetalleFecha($entity->getPedidomayoristaFechasolicitud());
                                  $pedidomayoristadetalle->setIdproducto($producto_variante->getIdproducto())->save();
                }


                $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
                return $this->redirect()->toUrl('/pedidos/mayoristas');
            }
            
            
                
            //traer los clientes
            $clientes = \ClienteQuery::create()->find();
            $clientes_array = array();

            foreach ($clientes as $cliente){
                $clientes_array[$cliente->getIdcliente()] = $cliente->getClienteNombre();
            }

            
            //$variantesMayoristas = \PedidomayoristadetalleQuery::create()->useProductovarianteQuery()->groupByIdproductomaterial()->groupByIdproductocolor()->endUse()->find();
            

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



            $form = new \Application\Pedido\Form\PedidoMayoristaForm($clientes_array,$productosvariante_array,$productos_generales_array);
                    

            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            $form->get('pedidomayorista_fechasolicitud')->setValue($entity->getPedidomayoristaFechasolicitud('d/m/Y'));
            $form->get('pedidomayorista_fechaentrega')->setValue($entity->getPedidomayoristaFechaentrega('d/m/Y'));
            $view_model = new ViewModel();
            $view_model->setTemplate('application/pedido/mayoristas/ver');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
            ));
            //var_dump($entity);exit();
            return $view_model;
            
            
        }else{
            $this->flashMessenger()->addErrorMessage('Id Invalido.');
            return $this->redirect()->toUrl('/compras/generales');
        }
        return $view_model;
    }

    public function editarAction()
    {

        $request = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \PedidosucursalQuery::create()->filterByIdpedidosucursal($id)->exists();
        
        if($exist){
            $entity = \PedidosucursalQuery::create()->findPk($id);
            
            if($request->isPost()){

                $post_data = $request->getPost();

                $post_data['pedidosucursal_fechasolicitud'] = date_create_from_format('d/m/Y', $post_data['pedidomayorista_fechasolicitud']);

                $post_data['pedidosucursal_fechaentrega'] = date_create_from_format('d/m/Y', $post_data['pedidomayorista_fechaentrega']);

                $post_data['pedidosucursal_estatus'] = $post_data['pedidomayorista_estatus'];

                $post_data['pedidosucursal_nota'] = $post_data['pedidomayorista_nota'];
                
                $variantes = [];
                foreach ($post_data as $key => $value){
                    if(\PedidosucursalPeer::getTableMap()->hasColumn($key)){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
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

                $detalles = \PedidosucursaldetalleQuery::create()->filterByIdpedidosucursal($id)->delete();
                $entity->save();

                foreach ($variantes as $variante) {
                $pedidosucursaldetalle = new \Pedidosucursaldetalle();
                $producto_variante = \ProductovarianteQuery::create()->findPk($variante["variante"]);

                $pedidosucursaldetalle->setIdpedidosucursal($entity->getIdpedidosucursal())
                              ->setIdproductovariante($variante["variante"])
                              ->setPedidosucursaldetalleCantidad($variante["valor"])
                              ->setPedidosucursaldetalleEstatus($post_data['estatus' . $variante["variante"]]);
                              $pedidosucursaldetalle->setIdproducto($producto_variante->getIdproducto())->save();
            }


                $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
                return $this->redirect()->toUrl('/pedidos/mayoristas-sucursal');
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



            $form = new \Application\Pedido\Form\PedidoMayoristaForm(null,$productosvariante_array,$productos_generales_array);
                    

            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            $form->get('pedidomayorista_fechasolicitud')->setValue($entity->getPedidosucursalFechasolicitud('d/m/Y'));
            $form->get('pedidomayorista_fechaentrega')->setValue($entity->getPedidosucursalFechaentrega('d/m/Y'));

            $form->get('pedidomayorista_estatus')->setValue($entity->getPedidosucursalEstatus());

            $form->get('pedidomayorista_nota')->setValue($entity->getPedidosucursalNota());
            $view_model = new ViewModel();
            $view_model->setTemplate('application/pedido/mayoristas-sucursal/ver');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
            ));
            //var_dump($entity);exit();
            return $view_model;
            
            
        }else{
            $this->flashMessenger()->addErrorMessage('Id Invalido.');
            return $this->redirect()->toUrl('/compras/generales');
        }
        return $view_model;
    }
    
    public function getProductovariantes($data){
        $information = [
            'selects' => \PedidomayoristadetalleQuery::create()->select('idproductovariante')->filterByIdpedidomayorista($data['idpedidomayorista'])->find()->toArray(),
            'cantidad' =>\PedidomayoristadetalleQuery::create()->select('pedidomayoristadetalle_cantidad')->filterByIdpedidomayorista($data['idpedidomayorista'])->find()->toArray(),
            'estatus' =>\PedidomayoristadetalleQuery::create()->select('pedidomayoristadetalle_estatus')->filterByIdpedidomayorista($data['idpedidomayorista'])->find()->toArray(),
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


    public function getProductovariantessucursal($data){
        $information = [
            'selects' => \PedidosucursaldetalleQuery::create()->select('idproductovariante')->filterByIdpedidosucursal($data['idpedidosucursal'])->find()->toArray(),
            'cantidad' =>\PedidosucursaldetalleQuery::create()->select('pedidosucursaldetalle_cantidad')->filterByIdpedidosucursal($data['idpedidosucursal'])->find()->toArray(),
            'estatus' =>\PedidosucursaldetalleQuery::create()->select('pedidosucursaldetalle_estatus')->filterByIdpedidosucursal($data['idpedidosucursal'])->find()->toArray(),
        ];
        return $information;

    }

    public function getProductosvariantessucursalAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();

            if($post_data['name'] == 'productosvariantes'){
                $response = $this->getProductovariantessucursal($post_data['data']);

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
            $entity = \PedidomayoristaQuery::Create()->findPk($id);
            $entity->delete();

            $detalles = \PedidomayoristadetalleQuery::create()->filterByIdpedidomayorista($id)->delete();
            
            if($entity->isDeleted()){
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido eliminado satisfactoriamente.');
            }else{
                $this->flashMessenger()->addErrorMessage('Ocurrió un error al intentar eliminar. Pruebe más tarde.');
            }
        }

        return $this->redirect()->toUrl('/pedidos/mayoristas');
    }

    public function actualizarinformacionAction()
    {
        $request = $this->getRequest();
        if($request->isPost())
        {

            $post_data = $request->getPost();
            $pedido = \PedidomayoristadetalleQuery::create()->findPK($post_data['idpedido']);
                        
            if($pedido != null)
            {
                $pedido->setPedidomayoristadetalleEstatus($post_data['pedido_estatus'])
                ->save();
                return $this->getResponse()->setContent(json_encode(array('response' => true)));
            }
            
        }
    }

    public function getClienteAction()
    {
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $post_data = $request->getPost();
            $pedidosucursal = \PedidosucursalQuery::create()->findPK($post_data['id']);
            $empleado = $pedidosucursal->getEmpleado();


            return $this->getResponse()->setContent(json_encode(array('response' => true, 'nombre' => $empleado->getEmpleadoNombre() ." " . $empleado->getEmpleadoApaterno()." " . $empleado->getEmpleadoAmaterno())));

        }
    }
}
