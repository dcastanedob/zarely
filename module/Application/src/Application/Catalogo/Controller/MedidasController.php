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

class MedidasController extends AbstractActionController
{

    public $column_map = array(
        0 => 'Idmedida',
        1 => 'MedidaNombre',
        2 => 'Medidasrango',
    );

    public function serversideAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();
           
            $query = new \MedidaQuery();
            
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
               
                $c1= $c->getNewCriterion('medida.idmedida', '%'.$search_value.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('medida.medida_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                 $c3= $c->getNewCriterion('medida.medidasrango', '%'.$search_value.'%', \Criteria::LIKE);


          
                $c1->addOr($c2)->addOr($c3);

                $query->addAnd($c1);
                $query->groupByIdmedida();
                
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

                $tmp['DT_RowId'] = $value['idmedida'];
                $tmp['idmedida'] = $value['idmedida'];
                $tmp['medida_nombre'] = $value['medida_nombre'];
                $tmp['medidasrango'] = $value['medidasrango'];
                $tmp['options'] = '<td><div class="btn-group dropdown">
                  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-gear icon-lg icon-fw"></span>
                    Opciones
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/catalogo/medidas/ver/' . $value['idmedida'] . '">
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

        $view_model->setTemplate('application/catalogo/medidas/index');
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
            $entity = new \Medida();
            $inicio =null;
            $fin =null;
            $inicioEncontrado = false;

            
            
//            foreach ($post_data as $key => $value) {
//                if(\MedidaPeer::getTableMap()->hasColumn($key))
//                {
//                    var_dump($post_data["medida_nombre"]);
//            exit();
                    $entity->setMedidaNombre($post_data["medida_nombre"]);
                    $entity->setMedidaXs($post_data["medida_xs"]);
                    $entity->setMedidaS($post_data["medida_s"]);
                    $entity->setMedidaM($post_data["medida_m"]);
                    $entity->setMedidaL($post_data["medida_l"]);
                    $entity->setMedidaXl($post_data["medida_xl"]);
                    $entity->setMedidaXxl($post_data["medida_xxl"]);
                    $entity->setMedidaUnitalla($post_data["medida_unitalla"]);
                    
//                    if(!$inicioEncontrado && $value == 1 ){
//                        $inicio = $key;
//                        $inicioEncontrado = true;
//                    }
//                    if($inicioEncontrado && $value == 1)
//                    {
//                        $fin = $key;
//                    }
//
//                    $entity->setByName($key,$value,\BasePeer::TYPE_FIELDNAME);
//                    
//                }
//            }
//            $inicio = str_replace("medida_", "", $inicio);
//            $fin = str_replace("medida_", "", $fin);
//            $rango = $inicio ." - ". $fin;
//           // $entity->setByName("medidasrango",$rango,\BasePeer::TYPE_FIELDNAME);

            $entity->save();
            $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');

            return $this->redirect()->toUrl('/catalogo/medidas');
        }


        $form = new \Application\Catalogo\Form\MedidasForm();
        $view_model = new ViewModel();
        $view_model->setTemplate('application/catalogo/medidas/nuevo');
        $view_model->setVariables(array(
            'form' => $form
        ));
  
        return $view_model;
    }

    public function verAction()
    {

        $request = $this->getRequest();

        $id = $this->params()->fromRoute('id');

        $exists = \MedidaQuery::create()->filterByIdmedida($id)->exists();

        if($exists)
        {
            $entity = \MedidaQuery::create()->findPk($id);

            if($request->isPost())
            {
                $post_data = $request->getPost();
                $inicio =null;
                $fin =null;
                $inicioEncontrado = false;
                
                $entity->setMedidaNombre($post_data["medida_nombre"]);
                    $entity->setMedidaXs($post_data["medida_xs"]);
                    $entity->setMedidaS($post_data["medida_s"]);
                    $entity->setMedidaM($post_data["medida_m"]);
                    $entity->setMedidaL($post_data["medida_l"]);
                    $entity->setMedidaXl($post_data["medida_xl"]);
                    $entity->setMedidaXxl($post_data["medida_xxl"]);
                    $entity->setMedidaUnitalla($post_data["medida_unitalla"]);
                    

//                foreach ($post_data as $key => $value) {
//                    if(\MedidaPeer::getTableMap()->hasColumn($key))
//                    {
//                        if(!$inicioEncontrado && $value == 1 ){
//                            $inicio = $key;
//                            $inicioEncontrado = true;
//                        }
//                        if($inicioEncontrado && $value == 1)
//                        {
//                            $fin = $key;
//                        }
//
//                        $entity->setByName($key,$value,\BasePeer::TYPE_FIELDNAME);
//                    }
//                }
//                $inicio = str_replace("medida_", "", $inicio);
//                
//                $fin = str_replace("medida_", "", $fin);
//                
//                $rango = $inicio ." - ". $fin;
//                $entity->setByName("medidasrango",$rango,\BasePeer::TYPE_FIELDNAME);
                $entity->save();
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');

                return $this->redirect()->toUrl('/catalogo/medidas');
            }

            $form = new \Application\Catalogo\Form\MedidasForm();

            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));


            $view_model = new ViewModel();
            $view_model->setTemplate('application/catalogo/medidas/ver');

            $view_model->setVariables(array(
                'form' => $form,
                'entity' =>$entity
            ));

            return $view_model;
        }else
        {
            $this->flashMessenger()->addErrorMessage('Id inválido');
            return $this->redirect()->toUrl('/catalogo/medidas');   
        }
    }

    public function eliminarAction(){
        $request = $this->getRequest();

        if($request->isPost())
        {
            $id = $this->params()->fromRoute('id');
            $entity = \MedidaQuery::create()->findPk($id);
            $entity->delete();

            if($entity->isDeleted()){
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido eliminado satisfactoriamente.');
            }else{
                $this->flashMessenger()->addErrorMessage('Ocurrió un error al intentar eliminar. Pruebe más tarde.');
            }
        }

        return $this->redirect()->toUrl('/catalogo/medidas');
    }


}
