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

class ExistenciaProductoController extends AbstractActionController
{

    public $column_map = array(
        0 => 'Idproducto',
        1 => 'ProductoModelo',
        2=> 'IdMarca',
    );

    public $column_map_producto_variante = array(
         0 => 'Idproductovariante',
        1 => 'ProductoModelo',
        2 => 'ProductovarianteTalla',
        3 => 'ProductoMarca',
        4 => 'ProductoColor',
        
    );

    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $post_data = $request->getPost();

            $query = new \ProductoQuery();  


            $query->useMarcaQuery('a')->endUse();
            $query->withColumn('a.MarcaNombre', 'marca_nombre');

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

                $c1= $c->getNewCriterion('producto.idproducto', '%'.$search_value.'%', \Criteria::LIKE);

                $c2= $c->getNewCriterion('producto.producto_modelo', '%'.$search_value.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('marca.marca_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                $c1->addOr($c2)->addOr($c3);

                $query->addAnd($c1);
                $query->groupByIdproducto();

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

                $tmp['DT_RowId'] = $value['idproducto'];
                $tmp['idproducto'] = $value['idproducto'];
                $tmp['producto_modelo'] = $value['producto_modelo'];
                $tmp['marca_nombre'] = $value['marca_nombre'];
                $tmp['options'] = '
                <a href="/producto/existencias/ver/' . $value['idproducto'] . '">
                <button class="btn btn-info dropdown-toggle" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-edit icon-lg icon-fw"></span>
                    Editar 
                  </button></a>';


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
    
    public function serversideproductovarianteAction(){

        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();
                       

            $query = new \ProductovarianteQuery();
           
            //WHERE
            $query->filterByIdproducto($post_data['idproducto']);

             //JOIN
            $query->useProductoQuery('a')->useMarcaQuery('g')->endUse()->endUse();
            $query->useProductocolorQuery('c')->useColorQuery('e')->endUse()->endUse();
            $query->useProductomaterialQuery('d')->useMaterialQuery('f')->endUse()->endUse();
            $query->withColumn('a.ProductoModelo', 'producto_modelo')
                  ->withColumn('e.ColorNombre','producto_color')
                  ->withColumn('f.MaterialNombre','producto_material')
                  ->withColumn('g.MarcaNombre','producto_marca');
  

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
                $query->groupByIdproductovariante();
                
                $records_filtered = $query->count();
                
            }
            
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->column_map_producto_variante[$order_column];
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


                $tmp['DT_RowId'] = $value['idproductovariante'];
                $tmp['idproductovariante'] = $value['idproductovariante'];
                $tmp['producto_modelo'] = $value['producto_modelo'];
                $tmp['productovariante_talla'] = $value['productovariante_talla'];
                $tmp['idmarca'] = $value['producto_marca'];
                $tmp['idcolor'] = $value['producto_color'];
                $tmp['idmaterial'] = $value['producto_material'];
                
                
                $tmp['options'] = '
                
          
                  <button class="btn btn-info dropdown-toggle" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-save icon-lg icon-fw"></span>
                    Guardar
                  </button>
                  
                  ';

                foreach ($sucursales as $key => $sucursal) {
                    $name = 'sucursal_'.$sucursal->getIdsucursal();

                    $sucursal_producto = \ProductosucursalQuery::create()->filterByIdsucursal($sucursal->getIdsucursal())->findOneByIdproductovariante($value['idproductovariante']);

                    if($sucursal_producto != null)
                    {
                        $tmp[$name] = '<input type="hidden" name="idsucursal" value="'.$sucursal->getIdsucursal().'"><input type="text" name="existencia" placeholder="'.number_format($sucursal_producto->getProductosucursalExistencia(),0).'" value="'.number_format($sucursal_producto->getProductosucursalExistencia(),0).'" >';
                    }else
                    {
                        $tmp[$name] = 'No existe el producto en la sucursal';
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
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/producto/existencias/index');
        $view_model->setVariables(array(
             'messages' => $this->flashMessenger(),
        ));
        return $view_model;
    }


    public function verAction()
    {

        $request = $this->getRequest();
        $id = $this->params()->fromRoute('id');
        $sucursales = \SucursalQuery::create()->find();

        $view_model = new ViewModel();

        $view_model->setTemplate('application/producto/existencias/ver');
        $view_model->setVariables(array(
            'messages' =>$this->flashMessenger(),
            'sucursales' => $sucursales,
            'id'=>$id,
        ));
        return $view_model;
    }

    public function guardarprecioAction()
    {
        $request = $this->getRequest();
        if($request->isPost())
        {
            $post_data = $request->getPost();
            foreach ($post_data['data'] as $productoVariante) {
                if($productoVariante['precio'] != null)
                {
                    $sucursal_producto = \ProductosucursalQuery::create()->filterByIdsucursal($productoVariante['idsucursal'])->findOneByIdproductovariante($post_data['id']);
                    $sucursal_producto->setProductosucursalExistencia($productoVariante['precio'])->save();
                }

            }
            return $this->getResponse()->setContent(json_encode(array('response' => true)));
        }
    }
    

}
