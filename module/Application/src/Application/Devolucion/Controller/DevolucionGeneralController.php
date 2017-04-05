<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Devolucion\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DevolucionGeneralController extends AbstractActionController
{

    public $column_map = array(
        0 => 'DevolucionFecha',
        1 => 'a.ProveedorNombrecomercial',
        2 => 'DevolucionTotal',
        4 => 'DevolucionEstatus',
        3 => 'DevolucionComprobante',


    );
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $post_data = $request->getPost();

            $query = new \DevolucionQuery();
            

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

                $c1= $c->getNewCriterion('devolucion.iddevolucion', '%'.$search_value.'%', \Criteria::LIKE);

                $c2= $c->getNewCriterion('proveedor.proveedor_nombrecomercial', '%'.$search_value.'%', \Criteria::LIKE);

                $c3= $c->getNewCriterion('devolucion.devolucion_estatus', '%'.$search_value.'%', \Criteria::LIKE);


                $c1->addOr($c2)->addOr($c3);

                $query->addAnd($c1);
                $query->groupBydevolucionFecha();

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
                $tmp['DT_RowId'] = $value['iddevolucion'];
                $tmp['iddevolucion'] = $value['iddevolucion'];
                $tmp['devolucion_fecha'] = $value['devolucion_fecha'];
                $tmp['proveedor_nombre'] = $value['proveedor_nombre'];
                $tmp['devolucion_total'] = '$'.number_format($value['devolucion_total'],2);

                if($value['devolucion_comprobante'] == null)
                {
                    $tmp['devolucion_comprobante'] = "<label>No tiene </label>";
                }else
                {
                    $tmp['devolucion_comprobante'] = '<a href="'.$value['devolucion_comprobante'].'"    target="_blank"> 
                            <span class="icon icon-file icon-lg ">
                        </span>
                    </a>';
                }
                $tmp['devolucion_estatus'] = $value['devolucion_estatus'];

                $tmp['options'] = '<td><div class="btn-group dropdown">
                  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-gear icon-lg icon-fw"></span>
                    Opciones
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/devoluciones/generales/ver/' . $value['iddevolucion'] . '">
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
        $view_model->setTemplate('application/devolucion/generales/index');
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
            

            $entity = new \Devolucion();

            $post_data['devolucion_fecha'] = date_create_from_format('d/m/Y', $post_data['devolucion_fecha']);

            $precios = [];
            $variantes = [];
            foreach ($post_data as $key => $value){
                if(\DevolucionPeer::getTableMap()->hasColumn($key)){
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

            if(isset($post_files['devolucion_comprobante'])){

                $file_type = $this->get_extension($post_files['devolucion_comprobante']['name']);

                move_uploaded_file($post_files['devolucion_comprobante']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/files/devoluciones/'.$entity->getIddevolucion().'.'.$file_type);


                $entity->setDevolucionComprobante('/files/devoluciones/'.$entity->getIddevolucion().'.'.$file_type)->save();
            }


            $total = 0;
            foreach ($variantes as $variante) {
                $devoulucion_detalle = new \Devoluciondetalle();
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
                                $devoulucion_detalle->setIddevolucion($entity->getIddevolucion())
                                              ->setIdproductovariante($variante["variante"])
                                              ->setDevoluciondetalleCantidad($variante["valor"])
                                              ->setDevoluciondetallePreciounitario($precio["valor"])
                                              ->setDevoluciondetalleSubtotal(floatval($variante["valor"] * floatval($precio["valor"])))->save();

                                $total+= $devoulucion_detalle->getDevoluciondetalleSubtotal();
                                $boolean = true;
                                break;
                            }
                        }

                        $entity->setDevolucionTotal($total);
                        $entity->save();

                        //unset($precios[$key]);
                        if($boolean)
                            break;
                    }
                    
                }
            }


            $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
            return $this->redirect()->toUrl('/devoluciones/generales');
        

        }

        //traer los proveedores
        $provedorees = \ProveedorQuery::create()->find();
        $provedorees_array = array();

        foreach ($provedorees as $value){
            $provedorees_array[$value->getIdproveedor()] = $value->getProveedorNombrecomercial();
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



        $form = new \Application\Devolucion\Form\DevolucionGeneralForm($provedorees_array,$productosvariante_array,$productos_generales_array);
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/devolucion/generales/nuevo');
        $view_model->setVariables(array(
            'form' => $form
        ));
        return $view_model;
        
    }


    public function verAction()
    {
        $request = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \DevolucionQuery::create()->filterByIddevolucion($id)->exists();
        
        if($exist){
            
            $entity = \DevolucionQuery::create()->findPk($id);
            
            if($request->isPost()){
                $post_data = $request->getPost();
                $post_files = $request->getFiles();

                $post_data['devolucion_fecha'] = date_create_from_format('d/m/Y', $post_data['devolucion_fecha']);

                $precios = [];
                $variantes = [];
                foreach ($post_data as $key => $value){
                    if(\DevolucionPeer::getTableMap()->hasColumn($key)){
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
                $detalles = \DevoluciondetalleQuery::create()->filterByIddevolucion($id)->delete();
                $entity->save();

                if(isset($post_files['devolucion_comprobante'])){

                    $file_type = $this->get_extension($post_files['devolucion_comprobante']['name']);

                    move_uploaded_file($post_files['devolucion_comprobante']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/files/devoluciones/'.$entity->getIddevolucion().'.'.$file_type);


                    $entity->setDevolucionComprobante('/files/devoluciones/'.$entity->getIddevolucion().'.'.$file_type)->save();
                }


                $total = 0;
                foreach ($variantes as $variante) {
                    $devoulucion_detalle = new \Devoluciondetalle();
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
                                    $devoulucion_detalle->setIddevolucion($entity->getIddevolucion())
                                                  ->setIdproductovariante($variante["variante"])
                                                  ->setDevoluciondetalleCantidad($variante["valor"])
                                                  ->setDevoluciondetallePreciounitario($precio["valor"])
                                                  ->setDevoluciondetalleSubtotal(floatval($variante["valor"] * floatval($precio["valor"])))->save();

                                    $total+= $devoulucion_detalle->getDevoluciondetalleSubtotal();
                                    $boolean = true;
                                    break;
                                }
                            }

                            $entity->setDevolucionTotal($total);
                            $entity->save();

                            //unset($precios[$key]);
                            if($boolean)
                                break;
                        }
                        
                    }
                }
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
                return $this->redirect()->toUrl('/devoluciones/generales');
            }
            
                
           //traer los proveedores
        $provedorees = \ProveedorQuery::create()->find();
        $provedorees_array = array();

        foreach ($provedorees as $value){
            $provedorees_array[$value->getIdproveedor()] = $value->getProveedorNombrecomercial();
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



        $form = new \Application\Devolucion\Form\DevolucionGeneralForm($provedorees_array,$productosvariante_array,$productos_generales_array);

            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            $form->get("devolucion_comprobante")->setAttribute('required',false);

            $form->get('devolucion_fecha')->setValue($entity->getDevolucionFecha('d/m/Y'));

            $view_model = new ViewModel();
            $view_model->setTemplate('application/devolucion/generales/ver');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
            ));
            return $view_model;
            
            
        }else{
            $this->flashMessenger()->addErrorMessage('Id Invalido.');
            return $this->redirect()->toUrl('/devoluciones/generales');
        }
        return $view_model;
    }
    



    public function getProductovariantes($data){

        $information = [
            'selects' => \DevoluciondetalleQuery::create()->select('idproductovariante')->filterByIddevolucion($data['iddevolucion'])->find()->toArray(),
            'cantidad' =>\DevoluciondetalleQuery::create()->select('devoluciondetalle_cantidad')->filterByIddevolucion($data['iddevolucion'])->find()->toArray(),
            'precio' =>\DevoluciondetalleQuery::create()->select('devoluciondetalle_preciounitario')->filterByIddevolucion($data['iddevolucion'])->find()->toArray(),
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
            $entity = \DevolucionQuery::Create()->findPk($id);

            
            $entity->delete();

            $detalles = \DevoluciondetalleQuery::create()->filterByIddevolucion($id)->delete();
            
            if($entity->isDeleted()){
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido eliminado satisfactoriamente.');
            }else{
                $this->flashMessenger()->addErrorMessage('Ocurrió un error al intentar eliminar. Pruebe más tarde.');
            }
        }

        return $this->redirect()->toUrl('/devoluciones/generales');
    }

}
