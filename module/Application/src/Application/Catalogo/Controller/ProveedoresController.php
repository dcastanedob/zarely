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

class ProveedoresController extends AbstractActionController
{

    public $column_map = array(
        0 => 'Idproveedor',
        1 => 'ProveedorNombrecomercial',
        2 =>'ProveedorCelular',
        3 => 'ProveedorEmail',
        4 => 'ProveedorFechainicio'
    );

    public function serversideAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();
           
            $query = new \ProveedorQuery();
            
             /*JOIN
            $query->useCategoriaRelatedByIdcategoriaQuery('a')->endUse();
            $query->useCategoriaRelatedByIdsubcategoriaQuery('b')->endUse();
            $query->useUnidadmedidaQuery('c')->endUse();
            $query->withColumn('a.CategoriaNombre', 'categoria_nombre')
                  ->withColumn('b.CategoriaNombre', 'subcategoria_nombre')
                  ->withColumn('c.UnidadmedidaNombre', 'unidadmedida_nombre');
            */


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
               
                $c1= $c->getNewCriterion('proveedor.idproveedor', '%'.$search_value.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('proveedor.proveedor_nombrecomercial', '%'.$search_value.'%', \Criteria::LIKE);

                 $c3= $c->getNewCriterion('proveedor.proveedor_celular', '%'.$search_value.'%', \Criteria::LIKE);

                 $c4= $c->getNewCriterion('proveedor.proveedor_email', '%'.$search_value.'%', \Criteria::LIKE);

                 $c5= $c->getNewCriterion('proveedor.proveedor_fechainicio', '%'.$search_value.'%', \Criteria::LIKE);

          
                $c1->addOr($c2)->addOr($c3)->addOr($c4)->addOr($c5);

                $query->addAnd($c1);
                $query->groupByIdproveedor();
                
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
         
                $tmp['DT_RowId'] = $value['idproveedor'];
                $tmp['idproveedor'] = $value['idproveedor'];
                $tmp['proveedor_nombrecomercial'] = $value['proveedor_nombrecomercial'];
                $tmp['proveedor_celular'] = $value['proveedor_celular'];
                $tmp['proveedor_email'] = $value['proveedor_email'];
                $tmp['proveedor_fechainicio'] = $value['proveedor_fechainicio'];

                $tmp['options'] = '<td><div class="btn-group dropdown">
                  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-gear icon-lg icon-fw"></span>
                    Opciones
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/catalogo/proveedores/ver/' . $value['idproveedor'] . '">
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
        
    public function getMarcas($data){
        
        $marcas = \ProveedormarcaQuery::create()->select('idmarca')->filterByIdproveedor($data['idproveedor'])->find()->toArray();
        return $marcas;

    }

    public function getAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
                
            if($post_data['name'] == 'marcas'){
                
                $response = $this->getMarcas($post_data['data']);
                return $this->getResponse()->setContent(json_encode($response));
                
            }
            
            
        };
        
    }




        public function indexAction()
    {
        $view_model = new ViewModel();
        $view_model->setTemplate('application/catalogo/proveedores/index');
        $view_model->setVariables(array(
            'messages' =>$this->flashMessenger()
        ));
        return $view_model;
    }

    public function nuevoAction()
    {
        $request = $this->getRequest();

        if($request->isPost())
        {
            $post_data = $request->getPost();

            $entity = new \Proveedor();

            foreach ($post_data as $key => $value) {
                if(\ProveedorPeer::getTableMap()->hasColumn($key))
                {
                    $entity->setByName($key,$value,\BasePeer::TYPE_FIELDNAME);
                }
            }
                
                
            $entity->save();
                //Marca
                foreach ($post_data['marcas_array'] as $value){
                    $proveedormarca = new \Proveedormarca();
                    $proveedormarca->setIdproveedor($entity->getIdproveedor())
                                 ->setIdmarca($value)
                                 ->save();
                }
            $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');

            return $this->redirect()->toUrl('/catalogo/proveedores');
        }

        $marcas = \MarcaQuery::create()->find();
        $marcas_array = array();
        $value = new \Marca();
        foreach ($marcas as $value){
            $marcas_array[$value->getIdmarca()] = $value->getMarcaNombre();
        }
        $form = new \Application\Catalogo\Form\ProveedoresForm($marcas_array);
        $view_model = new ViewModel();
        $view_model->setTemplate('application/catalogo/proveedores/nuevo');
        $view_model->setVariables(array(
            'form' => $form
        ));
  
        return $view_model;
    }

    public function verAction()
    {

        $request = $this->getRequest();

        $id = $this->params()->fromRoute('id');

        $exists = \ProveedorQuery::create()->filterByIdproveedor($id)->exists();

        if($exists)
        {
            $entity = \ProveedorQuery::create()->findPk($id);

            if($request->isPost())
            {
                $post_data = $request->getPost();
                     

                foreach ($post_data as $key => $value) {
                    if(\ProveedorPeer::getTableMap()->hasColumn($key))
                    {
                        $entity->setByName($key,$value,\BasePeer::TYPE_FIELDNAME);
                    }
                }
                        
                    //TALLAJE
                    $entity->getProveedormarcas()->delete();
                    foreach ($post_data['marcas_array'] as $value){
                        $proveedormarca = new \Proveedormarca();
                        $proveedormarca->setIdproveedor($entity->getIdproveedor())
                                     ->setIdmarca($value)
                                     ->save();
                    }
                        
                $entity->save();
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');

                return $this->redirect()->toUrl('/catalogo/proveedores');
            }
                
            $marcas = \MarcaQuery::create()->find();
            $marcas_array = array();
            $value = new \Marca();
            foreach ($marcas as $value){
                $marcas_array[$value->getIdmarca()] = $value->getMarcaNombre();
            }

            $form = new \Application\Catalogo\Form\ProveedoresForm($marcas_array);
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

            $view_model = new ViewModel();
            $view_model->setTemplate('application/catalogo/proveedores/ver');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity
            ));
            return $view_model;
            }else
            {
                $this->flashMessenger()->addErrorMessage('Id inválido');
                return $this->redirect()->toUrl('/catalogo/proveedores');    
            }
    }

    public function eliminarAction(){
        $request = $this->getRequest();

        if($request->isPost())
        {
            $id = $this->params()->fromRoute('id');
            $entity = \ProveedorQuery::Create()->findPk($id);
            $entity->delete();

            if($entity->isDeleted()){
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido eliminado satisfactoriamente.');
            }else{
                $this->flashMessenger()->addErrorMessage('Ocurrió un error al intentar eliminar. Pruebe más tarde.');
            }
        }

        return $this->redirect()->toUrl('/catalogo/proveedores');
    }


}
