<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class DescuentosController extends AbstractActionController
{

    public $column_map = array(
        0 => 'Iddescuento',
        1 => 'DescuentoNombre',
        2 => 'DescuentoTipo',
        3 => 'DescuentoEstatus',
        4 => 'DescuentoFechainicio',
        5=> 'DescuentoFechafin',
        6=> 'DescuentoCantidad',
    );



    public function serversideAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();
           
            $query = new \DescuentoQuery();
            

            $records_filtered = $query->count();
            
            //SEARCH
            if(!empty($post_data['search']['value'])){
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
                if ( strpos($search_value, 'Ð') !== false)
                {
                    $search_value = str_replace("Ð", "Ã", $search_value);
                }
                if ( strpos($search_value, 'Á') !== false )
                {
                    $search_value = str_replace("Á", "Ã", $search_value);
                }
                if ( strpos($search_value, 'Í') !== false )
                {
                    $search_value = str_replace("Í", "Ã", $search_value);
                }
                $c = new \Criteria();
               
                $c1= $c->getNewCriterion('descuento.iddescuento', '%'.$search_value.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('descuento.descuento_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('descuento.descuento_tipo', '%'.$search_value.'%', \Criteria::LIKE);
                $c4= $c->getNewCriterion('descuento.descuento_estatus', '%'.$search_value.'%', \Criteria::LIKE);

                $c5= $c->getNewCriterion('descuento.descuento_fechainicio', '%'.$search_value.'%', \Criteria::LIKE);

                $c6= $c->getNewCriterion('descuento.descuento_fechafin', '%'.$search_value.'%', \Criteria::LIKE);

                $c1->addOr($c2)->addOr($c3)->addOr($c4)->addOr($c5)->addOr($c6);

                $query->addAnd($c1);
                $query->groupByIddescuento();
                
                $records_filtered = $query->count();
                
            }
            
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->column_map[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if($dir == 'desc'){
                $query->orderBy($order_column,  \Criteria::DESC);
            }else{
                $query->orderBy($order_column,  \Criteria::ASC);
            }

            
            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();
            
           
            
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                // var_dump($value);exit();
                
                $tmp['DT_RowId'] = $value['iddescuento'];
                $tmp['iddescuento'] = $value['iddescuento'];
                $tmp['descuento_nombre'] = $value['descuento_nombre'];
                $tmp['descuento_tipo'] = $value['descuento_tipo'];
                if($value['descuento_estatus'])
                {
                    $tmp['descuento_esatus'] = "Sí";
                }else{
                    $tmp['descuento_esatus'] = "No";
                }
                
                $tmp['descuento_fechainicio'] = $value['descuento_fechainicio'];
                $tmp['descuento_fechafin'] = $value['descuento_fechafin'];
                $tmp['descuento_cantidad'] = $value['descuento_cantidad'];

                $tmp['options'] = '<td><div class="btn-group dropdown">
                  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-gear icon-lg icon-fw"></span>
                    Opciones
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/catalogo/descuentos/ver/' . $value['iddescuento'] . '">
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
                "draw"            => (int)$post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => $records_filtered,
                "data"            => $data
            );
            

            
            return $this->getResponse()->setContent(json_encode($json_data));
        }
    }

    public function indexAction()
    {
        $view_model = new ViewModel();

        $view_model->setTemplate('application/catalogo/descuentos/index');
        $view_model->setVariables(array(
            'messages' =>$this->flashMessenger()
        ));
        return $view_model;
    }

   

    public function nuevoAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();

            $entity = new \Descuento();

            $post_data['descuento_fechainicio'] = date_create_from_format('d/m/Y', $post_data['descuento_fechainicio']);
            $post_data['descuento_fechafin'] = date_create_from_format('d/m/Y', $post_data['descuento_fechafin']);

            foreach ($post_data as $key => $value){
                if(\DescuentoPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }

            $entity->save();

            foreach ($post_data['variante'] as $variante) {
                $detalle = new \Descuentodetalle();
                $detalle->setIddescuento($entity->getIddescuento())
                        ->setIdproductovariante($variante)
                        ->save();
                
            }

            foreach ($post_data['producto'] as $variante) {
                $detalle = new \Descuentodetalle();
                $detalle->setIddescuento($entity->getIddescuento())
                        ->setIdproducto($variante)
                        ->save();
                
            }

            foreach ($post_data['marca'] as $variante) {
                $detalle = new \Descuentodetalle();
                $detalle->setIddescuento($entity->getIddescuento())
                        ->setIdmarca($variante)
                        ->save();
                
            }

            
            

            $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
            return $this->redirect()->toUrl('/catalogo/descuentos');
        

        }


        //traer los productos
        $productos = \ProductoQuery::create()->find();
        $productos_array = array();
        $value = new \Producto();
        foreach ($productos as $value){
            $productos_array[$value->getIdproducto()] = $value->getProductoModelo();
        }


        //traer las marcas
        $marcas = \MarcaQuery::create()->find();
        $marcas_array = array();
        $value = new \Marca();
        foreach ($marcas as $value){
            $marcas_array[$value->getIdmarca()] = $value->getMarcaNombre();
        }

        //traer las variantes
        $variantes = \ProductovarianteQuery::create()->find();
        $variantes_array = array();
        $value = new \Productovariante();
        foreach ($variantes as $value){
            $producto = $value->getProducto();
            $color = $value->getProductocolor();
            $color = $color->getColor();
            $material = $value->getProductomaterial();
            $material = $material->getMaterial();


            $information =$producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre() . ' - ' . $value->getProductovarianteTalla();

            $variantes_array[$value->getIdproductovariante()] = $information;
        }




        $form = new \Application\Catalogo\Form\DescuentosForm($productos_array,$marcas_array,$variantes_array);
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/catalogo/descuentos/nuevo');
        $view_model->setVariables(array(
            'form' => $form
        ));
        return $view_model;
        
    }

    public function verAction()
    {
        $reqest = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \DescuentoQuery::create()->filterByIddescuento($id)->exists();
        
        if($exist){
            
            $entity = \DescuentoQuery::create()->findPk($id);
            
            if($reqest->isPost()){
                $post_data = $reqest->getPost();
                
                $post_data['descuento_fechainicio'] = date_create_from_format('d/m/Y', $post_data['descuento_fechainicio']);
                $post_data['descuento_fechafin'] = date_create_from_format('d/m/Y', $post_data['descuento_fechafin']);

                foreach ($post_data as $key => $value){
                    if(\DescuentoPeer::getTableMap()->hasColumn($key)){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }

                $entity->save();
                
                $detalles = \DescuentodetalleQuery::create()->filterByIddescuento($id)->delete();

                foreach ($post_data['variante'] as $variante) {
                    $detalle = new \Descuentodetalle();
                    $detalle->setIddescuento($entity->getIddescuento())
                            ->setIdproductovariante($variante)
                            ->save();
                    
                }

                foreach ($post_data['producto'] as $variante) {
                    $detalle = new \Descuentodetalle();
                    $detalle->setIddescuento($entity->getIddescuento())
                            ->setIdproducto($variante)
                            ->save();
                    
                }

                foreach ($post_data['marca'] as $variante) {
                    $detalle = new \Descuentodetalle();
                    $detalle->setIddescuento($entity->getIddescuento())
                            ->setIdmarca($variante)
                            ->save();
                    
                }


                $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
                return $this->redirect()->toUrl('/catalogo/descuentos');
            }

            //traer los productos
            $productos = \ProductoQuery::create()->find();
            $productos_array = array();
            $value = new \Producto();
            foreach ($productos as $value){
                $productos_array[$value->getIdproducto()] = $value->getProductoModelo();
            }


            //traer las marcas
            $marcas = \MarcaQuery::create()->find();
            $marcas_array = array();
            $value = new \Marca();
            foreach ($marcas as $value){
                $marcas_array[$value->getIdmarca()] = $value->getMarcaNombre();
            }

            //traer las variantes
            $variantes = \ProductovarianteQuery::create()->find();
            $variantes_array = array();
            $value = new \Productovariante();
            foreach ($variantes as $value){
                $producto = $value->getProducto();
                $color = $value->getProductocolor();
                $color = $color->getColor();
                $material = $value->getProductomaterial();
                $material = $material->getMaterial();


                $information =$producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre() . ' - ' . $value->getProductovarianteTalla();

                $variantes_array[$value->getIdproductovariante()] = $information;
            }


            $form = new \Application\Catalogo\Form\DescuentosForm($productos_array,$marcas_array,$variantes_array);
            
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            $view_model = new ViewModel();
            $view_model->setTemplate('application/catalogo/descuentos/ver'); 
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
            ));
            return $view_model;
            
            
        }else{
            $this->flashMessenger()->addErrorMessage('Id Invalido.');
            return $this->redirect()->toUrl('/catalogo/descuentos');
        }
        return $view_model;
    }

    public function eliminarAction(){
        $request = $this->getRequest();

        if($request->isPost())
        {
            $id = $this->params()->fromRoute('id');
            $entity = \DescuentoQuery::Create()->findPk($id);
            $entity->delete();

            $detalles = \DescuentodetalleQuery::create()->filterByIddescuento($id)->delete();

            if($entity->isDeleted()){
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido eliminado satisfactoriamente.');
            }else{
                $this->flashMessenger()->addErrorMessage('Ocurrió un error al intentar eliminar. Pruebe más tarde.');
            }
        }

        return $this->redirect()->toUrl('/catalogo/descuentos');
    }


    public function getProductos($data){
        $productos = \DescuentodetalleQuery::create()->select('idproducto')->filterByIddescuento($data['iddescuento'])->find()->toArray();
        return $productos;

    }

    public function getProductosAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            if($post_data['name'] == 'productos'){
                    
                $response = $this->getProductos($post_data['data']);

                return $this->getResponse()->setContent(json_encode($response));
                
            }
            
        };
    }



    public function getVariantes($data){
        $variantes = \DescuentodetalleQuery::create()->select('idproductovariante')->filterByIddescuento($data['iddescuento'])->find()->toArray();
        return $variantes;

    }

    public function getVariantesAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            if($post_data['name'] == 'variantes'){
                    
                $response = $this->getVariantes($post_data['data']);

                return $this->getResponse()->setContent(json_encode($response));
                
            }
            
        };
    }


    public function getMarcas($data){
        $marcas = \DescuentodetalleQuery::create()->select('idmarca')->filterByIddescuento($data['iddescuento'])->find()->toArray();
        return $marcas;

    }

    public function getMarcasAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            if($post_data['name'] == 'marcas'){
                    
                $response = $this->getMarcas($post_data['data']);

                return $this->getResponse()->setContent(json_encode($response));
                
            }
            
        };
    }

}
