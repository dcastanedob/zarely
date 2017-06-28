<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Producto\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ReordenProductoController extends AbstractActionController
{

    public $column_map = array(
        0 => 'Idproductotallaje',
        1 => 'Idproducto',
        2 => 'Idtallaje',
    );

    public function serversideAction()
    {

        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();
           
            $query = new \ProductotallajeQuery();
            
             
             //JOIN
            $query->useProductoQuery('a')->endUse();
            $query->useTallajeQuery('b')->endUse();
            $query->withColumn('a.ProductoModelo', 'producto_modelo')
                  ->withColumn('b.Tallajerango', 'tallaje_rango');
  
            


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
               
                $c1= $c->getNewCriterion('productotallaje.idproductotallaje', '%'.$search_value.'%', \Criteria::LIKE);

                $c2= $c->getNewCriterion('productotallaje.idproducto', '%'.$search_value.'%', \Criteria::LIKE);

                 $c3= $c->getNewCriterion('productotallaje.idtallaje', '%'.$search_value.'%', \Criteria::LIKE);


          
                $c1->addOr($c2)->addOr($c3);

                $query->addAnd($c1);
                $query->groupByIdempleado();
                
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
            
           
            $sucursales = \SucursalQuery::create()->find();
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){

                $tmp['DT_RowId'] = $value['idproductotallaje'];
                $tmp['idproductotallaje'] = $value['idproductotallaje'];
                $tmp['idproducto'] = $value['producto_modelo'];
                $tmp['idtallaje'] = $value['tallaje_rango'];
                
                $tmp['acciones'] = "<label>Reorden</label><br><label>Mínimo</label>";
                $tmp['options'] = '
                
          
                  <button class="btn btn-info dropdown-toggle" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-save icon-lg icon-fw"></span>
                    Guardar
                  </button>
                  
                  ';



                //Obtenemos las variantes a las cuales le pertenece ese tallaje
                $producto_variante = \ProductovarianteQuery::create()->filterByIdproducto($value['idproducto'])->find()->toArray();

                 //Otenemos los tallajes individuales de el producto que buscamos
                $tallaje = \TallajeQuery::create()->findOneByIdtallaje($value['idtallaje'])->toArray();

                //Obtenemos el rango
                 $tallaje_rango = $tallaje['Tallajerango'];

                 
                //Obtenemos el limite inferior y el limite superior del rango
                $valores = explode('-', $tallaje_rango);
                $minimo = intval($valores[0]);


                foreach ($producto_variante as $variante) {
                    
                    if($variante['ProductovarianteTalla'] == $minimo)
                    {
                        //iteramos sobre cada sucursal

                        foreach ($sucursales as $key => $value) {
                            $name = 'sucursal_'.$value->getIdsucursal();

                            $sucursal_producto = \ProductosucursalQuery::create()->filterByIdsucursal($value->getIdsucursal())->findOneByIdproductovariante($variante['Idproductovariante']);
                            if($sucursal_producto != null)
                            {
                                $tmp[$name] = '<input type="hidden" name="idsucursal" value="'.$value->getIdsucursal().'"><input type="text" name="reorden" placeholder="'.number_format($sucursal_producto->getProductosucursalReorden(),0).'" value="'.number_format($sucursal_producto->getProductosucursalReorden(),0).'" >' . '<br><input type="hidden" name="idsucursal" value="'.$value->getIdsucursal().'"><input type="text" name="minimo" placeholder="'.number_format($sucursal_producto->getProductosucursalMinimo(),0).'" value="'.number_format($sucursal_producto->getProductosucursalMinimo(),0).'" >';
                            }else
                            {
                                $tmp[$name] = 'No existe el producto';
                            }
                        }

                    
                    }
                } 
                
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


    public function serversidesucursalAction()
    {

        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();
           
            $query = new \ProductotallajeQuery();
            
             
             //JOIN
            $query->useProductoQuery('a')->endUse();
            $query->useTallajeQuery('b')->endUse();
            $query->withColumn('a.ProductoModelo', 'producto_modelo')
                  ->withColumn('b.Tallajerango', 'tallaje_rango');
  
            


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
               
                $c1= $c->getNewCriterion('productotallaje.idproductotallaje', '%'.$search_value.'%', \Criteria::LIKE);

                $c2= $c->getNewCriterion('productotallaje.idproducto', '%'.$search_value.'%', \Criteria::LIKE);

                 $c3= $c->getNewCriterion('productotallaje.idtallaje', '%'.$search_value.'%', \Criteria::LIKE);


          
                $c1->addOr($c2)->addOr($c3);

                $query->addAnd($c1);
                $query->groupByIdempleado();
                
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
            
           
            $sucursales = \SucursalQuery::create()->find();
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){

                $tmp['DT_RowId'] = $value['idproductotallaje'];
                $tmp['idproductotallaje'] = $value['idproductotallaje'];
                $tmp['idproducto'] = $value['producto_modelo'];
                $tmp['idtallaje'] = $value['tallaje_rango'];
                
                $tmp['acciones'] = "<label>Reorden</label><br><label>Mínimo</label>";
                $tmp['options'] = '
                
          
                  <button class="btn btn-info dropdown-toggle" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-save icon-lg icon-fw"></span>
                    Guardar
                  </button>
                  
                  ';



                //Obtenemos las variantes a las cuales le pertenece ese tallaje
                $producto_variante = \ProductovarianteQuery::create()->filterByIdproducto($value['idproducto'])->find()->toArray();

                 //Otenemos los tallajes individuales de el producto que buscamos
                $tallaje = \TallajeQuery::create()->findOneByIdtallaje($value['idtallaje'])->toArray();

                //Obtenemos el rango
                 $tallaje_rango = $tallaje['Tallajerango'];

                 
                //Obtenemos el limite inferior y el limite superior del rango
                $valores = explode('-', $tallaje_rango);
                $minimo = intval($valores[0]);


                foreach ($producto_variante as $variante) {
                    
                    if($variante['ProductovarianteTalla'] == $minimo)
                    {
                        //iteramos sobre cada sucursal

                        foreach ($sucursales as $key => $value) {
                            $name = 'sucursal_'.$value->getIdsucursal();

                            $sucursal_producto = \ProductosucursalQuery::create()->filterByIdsucursal($value->getIdsucursal())->findOneByIdproductovariante($variante['Idproductovariante']);
                            if($sucursal_producto != null)
                            {
                                $tmp[$name] = '<input type="hidden" name="idsucursal" value="'.$value->getIdsucursal().'"><input type="text" name="reorden" placeholder="'.number_format($sucursal_producto->getProductosucursalReorden(),0).'" value="'.number_format($sucursal_producto->getProductosucursalReorden(),0).'" >' . '<br><input type="hidden" name="idsucursal" value="'.$value->getIdsucursal().'"><input type="text" name="minimo" placeholder="'.number_format($sucursal_producto->getProductosucursalMinimo(),0).'" value="'.number_format($sucursal_producto->getProductosucursalMinimo(),0).'" >';
                            }else
                            {
                                $tmp[$name] = 'No existe el producto';
                            }
                        }

                    
                    }
                } 
                
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

        $request = $this->getRequest();
        if($request->isPost()){

            $post_data = $request->getPost();

            //Obtenemos todos los productos que pertecenen a ese tallaje
            $producto_tallaje= \ProductotallajeQuery::create()->findOneByIdproductotallaje($post_data['id'])->toArray();

            //Obtenemos las variantes a las cuales le pertenece ese tallaje
            $producto_variante = \ProductovarianteQuery::create()->filterByIdproducto($producto_tallaje['Idproducto'])->find()->toArray();

            //Otenemos los tallajes individuales de el producto que buscamos
            $tallaje = \TallajeQuery::create()->findOneByIdtallaje($producto_tallaje['Idtallaje'])->toArray();

            //Obtenemos el rango
            $tallaje_rango = $tallaje['Tallajerango'];

            //Obtenemos el limite inferior y el limite superior del rango
            $valores = explode('-', $tallaje_rango);
            $minimo = 0;
            $maximo = 0;

            //Verificamos que tenga menor y mayor
            if(count($valores) > 1)
            {
                //asignamos el minimo y el maximo
                $minimo = intval($valores['0']);
                $maximo = intval($valores['1']);

                //iteramos sobre cada variante y verificamos que esta en rango que buscamos
                foreach ($producto_variante as $variante) {
                    if($variante['ProductovarianteTalla']>= $minimo && $variante['ProductovarianteTalla'] <=$maximo)
                    {
                        //iteramos sobre cada sucursal
                        foreach ($post_data['data'] as $sucursal) {

                            //filtramos por el producto sucursal que tenga el id sucursal y producto variante
                            $sucursal_producto = \ProductosucursalQuery::create()->filterByIdsucursal($sucursal['idsucursal'])->findOneByIdproductovariante($variante['Idproductovariante']);

                            if($sucursal_producto != null && $sucursal['reorden'] != null && $sucursal['minimo'] != null){
                                $sucursal_producto->setProductosucursalReorden($sucursal['reorden'])->setProductosucursalMinimo($sucursal['minimo'])->save();
                            }

                        }
                    }
                    
                }
            }
            else
            {
                foreach ($producto_variante as $variante) {
                    if($variante['ProductovarianteTalla']== $minimo)
                    {
                        //iteramos sobre cada sucursal
                        foreach ($post_data['data'] as $sucursal) {

                            //filtramos por el producto sucursal que tenga el id sucursal y producto variante
                            $sucursal_producto = \ProductosucursalQuery::create()->filterByIdsucursal($sucursal['idsucursal'])->findOneByIdproductovariante($variante['Idproductovariante']);

                            if($sucursal_producto != null && $sucursal['reorden'] != null){
                                $sucursal_producto->setProductosucursalreordenventa($sucursal['reorden'])->save();
                            }

                        }
                    }
                    
                }
            }

            return $this->getResponse()->setContent(json_encode(array('response' => true)));

            
        }

        $sucursales = \SucursalQuery::create()->find();


        $view_model = new ViewModel();

        $view_model->setTemplate('application/producto/reordenes/index');
        $view_model->setVariables(array(
            'messages' =>$this->flashMessenger(),
            'sucursales' => $sucursales,
        ));
        return $view_model;
    }


    public function indexsucursalAction()
    {

        $request = $this->getRequest();
        if($request->isPost()){

            $post_data = $request->getPost();

            //Obtenemos todos los productos que pertecenen a ese tallaje
            $producto_tallaje= \ProductotallajeQuery::create()->findOneByIdproductotallaje($post_data['id'])->toArray();

            //Obtenemos las variantes a las cuales le pertenece ese tallaje
            $producto_variante = \ProductovarianteQuery::create()->filterByIdproducto($producto_tallaje['Idproducto'])->find()->toArray();

            //Otenemos los tallajes individuales de el producto que buscamos
            $tallaje = \TallajeQuery::create()->findOneByIdtallaje($producto_tallaje['Idtallaje'])->toArray();

            //Obtenemos el rango
            $tallaje_rango = $tallaje['Tallajerango'];

            //Obtenemos el limite inferior y el limite superior del rango
            $valores = explode('-', $tallaje_rango);
            $minimo = 0;
            $maximo = 0;

            //Verificamos que tenga menor y mayor
            if(count($valores) > 1)
            {
                //asignamos el minimo y el maximo
                $minimo = intval($valores['0']);
                $maximo = intval($valores['1']);

                //iteramos sobre cada variante y verificamos que esta en rango que buscamos
                foreach ($producto_variante as $variante) {
                    if($variante['ProductovarianteTalla']>= $minimo && $variante['ProductovarianteTalla'] <=$maximo)
                    {
                        //iteramos sobre cada sucursal
                        foreach ($post_data['data'] as $sucursal) {

                            //filtramos por el producto sucursal que tenga el id sucursal y producto variante
                            $sucursal_producto = \ProductosucursalQuery::create()->filterByIdsucursal($sucursal['idsucursal'])->findOneByIdproductovariante($variante['Idproductovariante']);

                            if($sucursal_producto != null && $sucursal['reorden'] != null && $sucursal['minimo'] != null){
                                $sucursal_producto->setProductosucursalReorden($sucursal['reorden'])->setProductosucursalMinimo($sucursal['minimo'])->save();
                            }

                        }
                    }
                    
                }
            }
            else
            {
                foreach ($producto_variante as $variante) {
                    if($variante['ProductovarianteTalla']== $minimo)
                    {
                        //iteramos sobre cada sucursal
                        foreach ($post_data['data'] as $sucursal) {

                            //filtramos por el producto sucursal que tenga el id sucursal y producto variante
                            $sucursal_producto = \ProductosucursalQuery::create()->filterByIdsucursal($sucursal['idsucursal'])->findOneByIdproductovariante($variante['Idproductovariante']);

                            if($sucursal_producto != null && $sucursal['reorden'] != null){
                                $sucursal_producto->setProductosucursalreordenventa($sucursal['reorden'])->save();
                            }

                        }
                    }
                    
                }
            }

            return $this->getResponse()->setContent(json_encode(array('response' => true)));

            
        }
        $user = new \Application\Session\AouthSession();
        $user = $user->getData();

        $sucursal = \SucursalQuery::create()->findPk($user['idsucursal']);

        $view_model = new ViewModel();

        $view_model->setTemplate('application/producto/reordenessucursal/index');
        $view_model->setVariables(array(
            'messages' =>$this->flashMessenger(),
            'sucursal' => $sucursal,
        ));
        return $view_model;
    }

    


}
