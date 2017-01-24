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

class MaterialesController extends AbstractActionController
{
    
    
    public $column_map = array(
         0 => 'Idmaterial',
         1 => 'MaterialNombre',
    );
    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $post_data = $request->getPost();

            $query = new \MaterialQuery();  

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

                $c1 = $c->getNewCriterion('material.idmaterial', '%' . $search_value . '%', \Criteria::LIKE);
                $c2 = $c->getNewCriterion('material.material_nombre', '%' . $search_value . '%', \Criteria::LIKE);
                $c1->addOr($c2);

                $query->addAnd($c1);
                $query->groupByIdmaterial();

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

                $tmp['DT_RowId'] = $value['idmaterial'];
                $tmp['idmaterial'] = $value['idmaterial'];
                $tmp['material_nombre'] = $value['material_nombre'];
                $tmp['options'] = '<td><a href="/catalogo/materiales/ver/'.$value['idmaterial'].'"><span class="icon icon-eye"></span></a><a href="javascript:;"><span class="icon icon-trash"></span></a></td>';


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
        $view_model->setTemplate('application/catalogo/materiales/index');
        $view_model->setVariables(array(
             'messages' => $this->flashMessenger(),
        ));
        return $view_model;
    }
    
    public function nuevoAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $entity = new \Material();
            foreach ($post_data as $key => $value){
                if(\MaterialPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            $entity->save();
            $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
            return $this->redirect()->toUrl('/catalogo/materiales');
    

        }
        
        
        $form = new \Application\Catalogo\Form\MaterialesForm();
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/catalogo/materiales/nuevo');
        $view_model->setVariables(array(
            'form' => $form
        ));
        return $view_model;
        
    }
    
    public function verAction(){
        
        $reqest = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \MaterialQuery::create()->filterByIdmaterial($id)->exists();
        
        if($exist){
            
            $entity = \MaterialQuery::create()->findPk($id);
            
            if($reqest->isPost()){
                $post_data = $reqest->getPost();
                foreach ($post_data as $key => $value){
                    if(\MaterialPeer::getTableMap()->hasColumn($key)){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }
                $entity->save();
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
                return $this->redirect()->toUrl('/catalogo/materiales');
            }
            
            
            
            $form = new \Application\Catalogo\Form\MaterialesForm();
            
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            $view_model = new ViewModel();
            $view_model->setTemplate('application/catalogo/materiales/ver'); 
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
            ));
            return $view_model;
            
            
        }else{
            $this->flashMessenger()->addErrorMessage('Id Invalido.');
            return $this->redirect()->toUrl('/catalogo/materiales');
        }
        
    }
    
}
