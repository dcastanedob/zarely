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
        0 => 'CompraFechacompra',
        1 => 'a.ProveedorNombrecomercial',
        2 => 'CompraTotal',
        4 => 'CompraEstatus',
        3 => 'CompraComprobante',


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

                $c3= $c->getNewCriterion('compra.compra_estatus', '%'.$search_value.'%', \Criteria::LIKE);


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
                $tmp['compra_comprobante'] = '<a href="'.$value['compra_comprobante'].'"    target="_blank"> 
                        <span class="icon icon-file icon-lg ">
                    </span>
                </a>';

                $tmp['compra_estatus'] = $value['compra_estatus'];

                $tmp['options'] = '<td><div class="btn-group dropdown">
                  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-gear icon-lg icon-fw"></span>
                    Opciones
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/compras/generales/ver/' . $value['idcompra'] . '">
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
         $extension = end(explode(".", $file));
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


    public function nuevoAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();

            $post_files = $request->getFiles();
            

            $entity = new \Compra();

            $post_data['compra_fechacompra'] = date_create_from_format('d/m/Y', $post_data['compra_fechacompra']);

            $post_data['compra_fechaentrega'] = date_create_from_format('d/m/Y', $post_data['compra_fechaentrega']);

            foreach ($post_data as $key => $value){
                if(\CompraPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }

            $entity->save();

            if(isset($post_files['compra_comprobante'])){

                $file_type = $this->get_extension($post_files['compra_comprobante']['name']);

                move_uploaded_file($post_files['compra_comprobante']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/files/compras/'.$entity->getIdcompra().'.'.$file_type);


                $entity->setCompraComprobante('/files/compras/'.$entity->getIdcompra().'.'.$file_type)->save();
            }


            $entity->setCompraFechacreacion(date("Y-n-j"));

            $entity->save();
            
            $total = 0;

            for($variante = 0; $variante < count($post_data['productosvariantes']); $variante++)
            {
                $compradetalle = new \Compradetalle();
                $compradetalle->setIdcompra($entity->getIdcompra())
                              ->setIdproductovariante($post_data['productosvariantes'][$variante])
                              ->setCompradetalleCantidad($post_data['cantidad'][$variante])
                              ->setCompradetallePreciounitario($post_data['preciounitario'][$variante])
                              ->setCompradetalleSubtotal(intval($post_data['cantidad'][$variante]) * intval($post_data['preciounitario'][$variante]))
                              ->save();
                $total+= $compradetalle->getCompradetalleSubtotal();

            }
            $entity->setCompraTotal($total);
            $entity->save();


            $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
            return $this->redirect()->toUrl('/compras/generales');
        

        }

        //traer los proveedores
        $provedorees = \ProveedorQuery::create()->find();
        $provedorees_array = array();

        foreach ($provedorees as $value){
            $provedorees_array[$value->getIdproveedor()] = $value->getProveedorNombrecomercial();
        }


        //traer los productosvariantes
        $variantes = \ProductovarianteQuery::create()->find();
        $productosvariante_array = array();

        foreach ($variantes as $value){
            $producto = $value->getProducto();
            $color = $value->getProductocolor();
            $color = $color->getColor();
            $material = $value->getProductomaterial();
            $material = $material->getMaterial();


            $information =$producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre().' / '. $value->getProductovarianteTalla().'';

            $productosvariante_array[$value->getIdproductovariante()] = $information;
        }


        //traer los productos generales
        $generales = \ProductoQuery::create()->find();
        $productos_generales_array = array();

        foreach ($generales as $value){

            $productos_generales_array[$value->getIdproducto()] = $value->getProductoModelo();
        }



        $form = new \Application\Compra\Form\CompraGeneralForm($provedorees_array,$productosvariante_array,$productos_generales_array);
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/compra/generales/nuevo');
        $view_model->setVariables(array(
            'form' => $form
        ));
        return $view_model;
        
    }


    public function verAction()
    {
        $request = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \CompraQuery::create()->filterByIdcompra($id)->exists();
        
        if($exist){
            
            $entity = \CompraQuery::create()->findPk($id);
            
            if($request->isPost()){
                $post_data = $request->getPost();
                $post_files = $request->getFiles();

                $post_data['compra_fechacompra'] = date_create_from_format('d/m/Y', $post_data['compra_fechacompra']);

                $post_data['compra_fechaentrega'] = date_create_from_format('d/m/Y', $post_data['compra_fechaentrega']);
                
                foreach ($post_data as $key => $value){
                    if(\CompraPeer::getTableMap()->hasColumn($key)){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }

                $detalles = \CompradetalleQuery::create()->filterByIdcompra($id)->delete();
                //$entity->getProductotallajes()->delete();

                $total = 0;
                for($variante = 0; $variante < count($post_data['productosvariantes']); $variante++)
                {
                    $compradetalle = new \Compradetalle();
                    $compradetalle->setIdcompra($entity->getIdcompra())
                                  ->setIdproductovariante($post_data['productosvariantes'][$variante])
                                  ->setCompradetalleCantidad($post_data['cantidad'][$variante])
                                  ->setCompradetallePreciounitario($post_data['preciounitario'][$variante])
                                  ->setCompradetalleSubtotal(intval($post_data['cantidad'][$variante]) * intval($post_data['preciounitario'][$variante]))
                                  ->save();
                    $total+= $compradetalle->getCompradetalleSubtotal();

                }

                if(isset($post_files['compra_comprobante'])){

                    $file_type = $this->get_extension($post_files['compra_comprobante']['name']);

                    move_uploaded_file($post_files['compra_comprobante']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/files/compras/'.$entity->getIdcompra().'.'.$file_type);


                    $entity->setCompraComprobante('/files/compras/'.$entity->getIdcompra().'.'.$file_type)->save();
                }

                $entity->setCompraTotal($total);
                $entity->save();


                $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
                return $this->redirect()->toUrl('/compras/generales');
            }
            
                
            //traer los proveedores
            $provedorees = \ProveedorQuery::create()->find();
            $provedorees_array = array();

            foreach ($provedorees as $value){
                $provedorees_array[$value->getIdproveedor()] = $value->getProveedorNombrecomercial();
            }


            //traer los productosvariantes
            $variantes = \ProductovarianteQuery::create()->find();
            $productosvariante_array = array();

            foreach ($variantes as $value){
                $producto = $value->getProducto();
                $color = $value->getProductocolor();
                $color = $color->getColor();
                $material = $value->getProductomaterial();
                $material = $material->getMaterial();


                $information =$producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre().' / '. $value->getProductovarianteTalla().'';

                $productosvariante_array[$value->getIdproductovariante()] = $information;
            }

            
            //traer los productos generales
            $generales = \ProductoQuery::create()->find();
            $productos_generales_array = array();

            foreach ($generales as $value){

                $productos_generales_array[$value->getIdproducto()] = $value->getProductoModelo();
            }

            
            $form = new \Application\Compra\Form\CompraGeneralForm($provedorees_array,$productosvariante_array,$productos_generales_array);

            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            $form->get("compra_comprobante")->setAttribute('required',false);
            
            $view_model = new ViewModel();
            $view_model->setTemplate('application/compra/generales/ver');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
            ));
            return $view_model;
            
            
        }else{
            $this->flashMessenger()->addErrorMessage('Id Invalido.');
            return $this->redirect()->toUrl('/compras/generales');
        }
        return $view_model;
    }
    



    public function getProductovariantes($data){
        $information = [
            'selects' => \CompradetalleQuery::create()->select('idproductovariante')->filterByIdcompra($data['idcompra'])->find()->toArray(),
            'cantidad' =>\CompradetalleQuery::create()->select('compradetalle_cantidad')->filterByIdcompra($data['idcompra'])->find()->toArray(),
            'precio' =>\CompradetalleQuery::create()->select('compradetalle_preciounitario')->filterByIdcompra($data['idcompra'])->find()->toArray(),
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
    

    public function eliminarAction(){
        $request = $this->getRequest();

        if($request->isPost())
        {
            $id = $this->params()->fromRoute('id');
            $entity = \CompraQuery::Create()->findPk($id);

            unlink("/files/compras/19.");
            
            $entity->delete();

            $detalles = \CompradetalleQuery::create()->filterByIdcompra($id)->delete();
            
            if($entity->isDeleted()){
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido eliminado satisfactoriamente.');
            }else{
                $this->flashMessenger()->addErrorMessage('Ocurrió un error al intentar eliminar. Pruebe más tarde.');
            }
        }

        return $this->redirect()->toUrl('/compras/generales');
    }

}
