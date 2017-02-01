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

class MarcasController extends AbstractActionController
{

	public $column_map = array(
		0 => 'Idmarca',
		1 => 'MarcaNombre',
	);

	public function serversideAction()
	{
		$request = $this->getRequest();

		if($request->isPost()){
            $post_data = $request->getPost();
           
            $query = new \MarcaQuery();
            
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
               
                $c1= $c->getNewCriterion('marca.idmarca', '%'.$search_value.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('marca.marca_nombre', '%'.$search_value.'%', \Criteria::LIKE);

          
                $c1->addOr($c2);

                $query->addAnd($c1);
                $query->groupByIdmarca();
                
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

                
                $tmp['DT_RowId'] = $value['idmarca'];
                $tmp['idmarca'] = $value['idmarca'];
                $tmp['marca_nombre'] = $value['marca_nombre'];

                $tmp['options'] = '<td><div class="btn-group dropdown">
                  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-gear icon-lg icon-fw"></span>
                    Opciones
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/catalogo/marcas/ver/' . $value['idmarca'] . '">
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
        
    public function getTallajes($data){
        
        $tallajes = \MarcatallajeQuery::create()->select('idtallaje')->filterByIdmarca($data['idmarca'])->find()->toArray();
        return $tallajes;

    }

    public function getAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            if($post_data['name'] == 'tallajes'){
                    
                $response = $this->getTallajes($post_data['data']);
                return $this->getResponse()->setContent(json_encode($response));
                
            }
            
            
        };
        
    }




        public function indexAction()
    {
    	$view_model = new ViewModel();
    	$view_model->setTemplate('application/catalogo/marcas/index');
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

    		$entity = new \Marca();

    		foreach ($post_data as $key => $value) {
    			if(\MarcaPeer::getTableMap()->hasColumn($key))
    			{
    				$entity->setByName($key,$value,\BasePeer::TYPE_FIELDNAME);
    			}
    		}
                
                
    		$entity->save();
                
            //TALLAJE
            foreach ($post_data['tallajes_array'] as $value){
                $marcatallaje = new \Marcatallaje();
                $marcatallaje->setIdmarca($entity->getIdmarca())
                             ->setIdtallaje($value)
                             ->save();
            }
    		$this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');

    		return $this->redirect()->toUrl('/catalogo/marcas');
    	}

        $tallajes = \TallajeQuery::create()->find();
        $tallajes_array = array();
        $value = new \Tallaje();
        foreach ($tallajes as $value){
            $tallajes_array[$value->getIdtallaje()] = $value->getTallajeNombre()." (".$value->getTallajerango().")";
        }
    	$form = new \Application\Catalogo\Form\MarcaForm($tallajes_array);
    	$view_model = new ViewModel();
    	$view_model->setTemplate('application/catalogo/marcas/nuevo');
    	$view_model->setVariables(array(
    		'form' => $form
    	));
  
        return $view_model;
    }

    public function verAction()
    {

    	$request = $this->getRequest();

    	$id = $this->params()->fromRoute('id');

    	$exists = \MarcaQuery::create()->filterByIdmarca($id)->exists();

    	if($exists)
    	{
    		$entity = \MarcaQuery::create()->findPk($id);

    		if($request->isPost())
    		{
    			$post_data = $request->getPost();
                     

    			foreach ($post_data as $key => $value) {
	    			if(\MarcaPeer::getTableMap()->hasColumn($key))
	    			{
	    				$entity->setByName($key,$value,\BasePeer::TYPE_FIELDNAME);
	    			}
    			}
                        
                        //TALLAJE
                        $entity->getMarcatallajes()->delete();
                        foreach ($post_data['tallajes_array'] as $value){
                            $marcatallaje = new \Marcatallaje();
                            $marcatallaje->setIdmarca($entity->getIdmarca())
                                         ->setIdtallaje($value)
                                         ->save();
                        }
                        
	    		$entity->save();
	    		$this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');

	    		return $this->redirect()->toUrl('/catalogo/marcas');
	    	}
                
                $tallajes = \TallajeQuery::create()->find();
                $tallajes_array = array();
                $value = new \Tallaje();
                foreach ($tallajes as $value){
                    $tallajes_array[$value->getIdtallaje()] = $value->getTallajeNombre()." (".$value->getTallajerango().")";
                }

    		$form = new \Application\Catalogo\Form\MarcaForm($tallajes_array);

    		$form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));


    		$view_model = new ViewModel();
    		$view_model->setTemplate('application/catalogo/marcas/ver');

    		$view_model->setVariables(array(
    			'form' => $form,
    			'entity' =>$entity
    		));

    		return $view_model;
    	}else
    	{
    		$this->flashMessenger()->addErrorMessage('Id inválido');
    		return $this->redirect()->toUrl('/catalogo/marcas');	
    	}
    }

    public function eliminarAction(){
        $request = $this->getRequest();

        if($request->isPost())
        {
            $id = $this->params()->fromRoute('id');
            $entity = \MarcaQuery::Create()->findPk($id);
            $entity->delete();

            if($entity->isDeleted()){
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido eliminado satisfactoriamente.');
            }else{
                $this->flashMessenger()->addErrorMessage('Ocurrió un error al intentar eliminar. Pruebe más tarde.');
            }
        }

        return $this->redirect()->toUrl('/catalogo/marcas');
    }


}
