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

class ClientesController extends AbstractActionController
{

    public $column_map = array(
        0 => 'Idcliente',
        1 => 'ClienteNombre',
        2 => 'ClienteRfc',
        3 => 'ClienteTipo',
        4 => 'ClienteEstatus',
    );

    public function serversideAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();
           
            $query = new \ClienteQuery();
            


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
               
                $c1= $c->getNewCriterion('cliente.idcliente', '%'.$search_value.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('cliente.cliente_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                 $c3= $c->getNewCriterion('cliente.cliente_rfc', '%'.$search_value.'%', \Criteria::LIKE);

                 $c4= $c->getNewCriterion('cliente.cliente_tipo', '%'.$search_value.'%', \Criteria::LIKE);

                 

          
                $c1->addOr($c2)->addOr($c3)->addOr($c4);

                $query->addAnd($c1);
                $query->groupByIdcliente();
                
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

                if($value['cliente_estatus']){
                    $tmp['cliente_estatus'] = "Activo";
                }else{
                    $tmp['cliente_estatus'] = "Inactivo";
                }
                $tmp['DT_RowId'] = $value['idcliente'];
                $tmp['idcliente'] = $value['idcliente'];
                $tmp['cliente_nombre'] = $value['cliente_nombre']." ".$value['cliente_apaterno']." ".$value['cliente_amaterno'];
                $tmp['cliente_rfc'] = $value['cliente_rfc'];
                $tmp['cliente_tipo'] = $value['cliente_tipo'];
                $tmp['options'] = '<td><div class="btn-group dropdown">
                  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-gear icon-lg icon-fw"></span>
                    Opciones
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/catalogo/clientes/ver/' . $value['idcliente'] . '">
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

        $view_model->setTemplate('application/catalogo/clientes/index');
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
            

            $entity = new \Cliente();
            
            $post_data['cliente_fecharegistro'] = date_create_from_format('d/m/Y', $post_data['cliente_fecharegistro']);
            

             
            foreach ($post_data as $key => $value) {
                if(\ClientePeer::getTableMap()->hasColumn($key))
                {
                    $entity->setByName($key,$value,\BasePeer::TYPE_FIELDNAME);
                }
            }
            
            $entity->save();
            $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
           
            return $this->redirect()->toUrl('/catalogo/clientes');
        }

        
        $form = new \Application\Catalogo\Form\ClientesForm( );
        $view_model = new ViewModel();
        $view_model->setTemplate('application/catalogo/clientes/nuevo');
        $view_model->setVariables(array(
            'form' => $form
        ));
  
        return $view_model;
    }

    public function verAction()
    {

        $request = $this->getRequest();

        $id = $this->params()->fromRoute('id');

        $exists = \ClienteQuery::create()->filterByIdcliente($id)->exists();

        if($exists)
        {
            $entity = \ClienteQuery::create()->findPk($id);

            if($request->isPost())
            {
                $post_data = $request->getPost();
                $post_data['cliente_fecharegistro'] = date_create_from_format('d/m/Y', $post_data['cliente_fecharegistro']);
                
                
                foreach ($post_data as $key => $value) {
                    if(\ClientePeer::getTableMap()->hasColumn($key))
                    {
                        $entity->setByName($key,$value,\BasePeer::TYPE_FIELDNAME);
                    }
                }
                $entity->save();
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');

                return $this->redirect()->toUrl('/catalogo/clientes');
            }
           
            $form = new \Application\Catalogo\Form\ClientesForm();

            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            $form->get('cliente_fecharegistro')->setValue($entity->getClienteFecharegistro('d/m/Y'));
            
            
            $view_model = new ViewModel();
            $view_model->setTemplate('application/catalogo/clientes/ver');

            $view_model->setVariables(array(
                'form' => $form,
                'entity' =>$entity
            ));

            return $view_model;
        }else
        {
            $this->flashMessenger()->addErrorMessage('Id inválido');
            return $this->redirect()->toUrl('/catalogo/clientes');   
        }
    }

    public function eliminarAction(){
        $request = $this->getRequest();

        if($request->isPost())
        {
            $id = $this->params()->fromRoute('id');
            $entity = \ClienteQuery::Create()->findPk($id);
            $entity->delete();

            if($entity->isDeleted()){
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido eliminado satisfactoriamente.');
            }else{
                $this->flashMessenger()->addErrorMessage('Ocurrió un error al intentar eliminar. Pruebe más tarde.');
            }
        }

        return $this->redirect()->toUrl('/catalogo/clientes');
    }


}
