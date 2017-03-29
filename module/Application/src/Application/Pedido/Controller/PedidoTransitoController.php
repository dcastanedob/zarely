<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Pedido\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PedidoTransitoController extends AbstractActionController
{

    public function getdetailsAction(){

        $request = $this->getRequest();
        //Verificamos que la peticion sea post
        if($request->isPost()){

            //obtenemos todos los pedidos del request que se mandó
            $post_data = $request->getPost();

            //filtramos por estatus transito y por la variante
            $details = \PedidoQuery::create()->filterByPedidoEstatus('transito')->filterByIdproductovariante($post_data['idvariante'])->filterByIdsucursal($post_data['idSucursal'])->find()->toArray(null,false,\BasePeer::TYPE_FIELDNAME);

            //iteramos para obtener el nombre de la sucursal
            for ($pedido = 0; $pedido<count($details); $pedido++) {
                $sucursal = \SucursalQuery::create()->findPK($details[$pedido]['idsucursal']);

                //verificamos que exista
                if($sucursal != null)
                    $details[$pedido]['idsucursal'] = $sucursal->getSucursalNombrecomercial();
            }


            //regresamos la respuesta
            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $details)));

        }

    } 


    public $column_map = array(
        0 => 'Idproducto',
        1 => 'ProductoModelo',
        2 => 'ProductoMarca',
        3=>'ProductoProveedor'

    );

    public $column_map_producto_variante = array(
        0 => 'Idpedido',
        1 => 'ProductoVariante',
        2 => 'ColorFotografia',
        3 => 'Tallaje70',
        4 => 'Tallaje75',
        5 => 'Tallaje80',
        6 => 'Tallaje85',
        7 => 'Tallaje90',
        8 => 'Tallaje95',
        9 => 'Tallaje100',
        10 => 'Tallaje105',
        11 => 'Tallaje110',
        12 => 'Tallaje115',
        13 => 'Tallaje120',
        14 => 'Tallaje125',
        15 => 'Tallaje130',
        16 => 'Tallaje135',
        17 => 'Tallaje140',
        18 => 'Tallaje145',
        19 => 'Tallaje150',
        20 => 'Tallaje155',
        21 => 'Tallaje160',
        22 => 'Tallaje165',
        23 => 'Tallaje170',
        24 => 'Tallaje175',
        25 => 'Tallaje180',
        26 => 'Tallaje185',
        27 => 'Tallaje190',
        28 => 'Tallaje195',
        29 => 'Tallaje200',
        30 => 'Tallaje205',
        31 => 'Tallaje210',
        32 => 'Tallaje215',
        33 => 'Tallaje220',
        34 => 'Tallaje225',
        35 => 'Tallaje230',
        36 => 'Tallaje235',
        37 => 'Tallaje240',
        38 => 'Tallaje245',
        39 => 'Tallaje250',
        40 => 'Tallaje255',
        41 => 'Tallaje260',
        42 => 'Tallaje265',
        43 => 'Tallaje270',
        44 => 'Tallaje275',
        45 => 'Tallaje280',
        46 => 'Tallaje285',
        47 => 'Tallaje290',
        48 => 'Tallaje295',
        49 => 'Tallaje300',
        50 => 'Tallaje305',
        51 => 'Tallaje310',
        52 => 'Tallaje315',
        53 => 'Tallaje320',
        54 => 'Tallaje325',
        55 => 'Tallaje330',
        56 => 'Tallaje335',
        57 => 'Tallaje340',
        58 => 'Tallaje345',
        59 => 'Tallaje350',
            
    );

    
    public function serversideAction(){
        
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $post_data = $request->getPost();

            $query = new \PedidoQuery();

            $query->filterByPedidoEstatus('transito');

            

            $query->useProductoQuery('a')->useMarcaQuery('m')->endUse()->endUse();
            $query->useProductoQuery('a')->useProveedorQuery('p')->endUse()->endUse();
            $query->withColumn('a.ProductoModelo', 'producto_modelo')
                  ->withColumn('m.MarcaNombre','producto_marca')
                  ->withColumn('p.ProveedorNombrecomercial','producto_proveedor');


            //GORUP BY
            $query->groupByIdproducto();

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


                $c1->addOr($c2);

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
                $tmp['producto_marca'] = $value['producto_marca'];
                $tmp['producto_proveedor'] = $value['producto_proveedor'];

                $tmp['options'] = '
                <a href="/pedidos/transitos/ver/' . $value['idproducto'] . '">
                <button class="btn btn-info dropdown-toggle" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-eye icon-lg icon-fw"></span>
                    Ver 
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
                       

            $query = new \PedidoQuery();
           
            //WHERE
            $query->filterByIdproducto($post_data['idproducto']);
            $query->filterByPedidoEstatus('transito');
            
             //JOIN
            $query->useSucursalQuery('a')->endUse();
            $query->useProductovarianteQuery('b')->useProductocolorQuery('c')->useColorQuery('d')->endUse()->endUse()->endUse();
            $query->useProductovarianteQuery('e')->useProductomaterialQuery('f')->useMaterialQuery('g')->endUse()->endUse()->endUse();

            $query->withColumn('a.SucursalNombrecomercial', 'sucursal_nombre')
                  ->withColumn('d.ColorNombre','producto_color')
                  ->withColumn('c.ProductocolorFoto','color_fotografia')
                  ->withColumn('SUM(pedido_cantidad)','pedido_cantidad_total')
                  ->withColumn('g.MaterialNombre','producto_material');


            $query->groupByIdproductovariante();
            $query->groupByIdsucursal();
           
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
                
                $tmp['DT_RowId'] = $value['idpedido'];
                $tmp['idproductovariante'] = $value['idproductovariante'];
                $tmp['sucursal_nombre'] = $value['sucursal_nombre'];
                $tmp['producto_variantes'] = $value['producto_color']."/".$value['producto_material'];
                $tmp['color_fotografia'] ='<td><a href=""><img src="'.$value['color_fotografia'].'"WIDTH=100 HEIGHT=100></a></img></td>';

                $producto_variante = \ProductovarianteQuery::create()->findPK($value['idproductovariante']);
                for($i = 70;$i <= 350;)
                {
                    if(((float)$producto_variante->getProductovarianteTalla() *10) == $i)
                    {
                        $tmp['Tallaje'.$i] = '<a href="javascript:;">'.(int)$value['pedido_cantidad_total'].'</a>';
                    }else
                    {
                        $tmp['Tallaje'.$i] = 0;
                    }
                    
                    $i+=5;
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
        $view_model->setTemplate('application/pedido/transitos/index');
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

        $view_model->setTemplate('application/pedido/transitos/ver');
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

    public function actualizarinformacionAction()
    {
        $request = $this->getRequest();
        if($request->isPost())
        {

            $post_data = $request->getPost();
            $pedido = \PedidoQuery::create()->findPK($post_data['idpedido']);
                        
            if($pedido != null)
            {
                $pedido->setPedidoEstatus($post_data['pedido_estatus'])
                ->save();
                return $this->getResponse()->setContent(json_encode(array('response' => true)));
            }
            
        }
    }


    public function initializetableAction(){

        $request = $this->getRequest();
        
        if($request->isPost()){

            $post_data = $request->getPost();


            $pedidos = \PedidoQuery::create()->filterByIdproducto($post_data['idproductogeneral'])->filterByPedidoEstatus('transito')->find();

            $details = [];


            //iteramos sobre todas als variantes
            foreach ($pedidos as $pedido) {
                
                $variante = $pedido->getProductovariante();
                $productocolor = $variante->getProductocolor();

                $indice = $variante->getProductocolor()->getColor()->getColorNombre() .'/'. $variante->getProductomaterial()->getMaterial()->getMaterialNombre();
                $sucursal = $pedido->getIdsucursal();

                if($details[$sucursal] == null)
                {
                    $details[$sucursal] = [];

                    //verificamos que la combinacion de material color no exista
                    if($details[$sucursal][$indice] == null)
                    {

                        //inicializamos las variantes de ese color y material
                        $details[$sucursal][$indice] = [];
                        $value = array(
                                    'fotografia' => $productocolor->getProductocolorFoto(),
                                    'talla' => $variante->getProductovarianteTalla(),
                                    'variante' => $variante->getIdproductovariante(),
                                    'cantidad' => $pedido->getPedidoCantidad(),

                                 );

                        array_push($details[$sucursal][$indice], $value);

                    }else{
                        $value = array(
                                    'fotografia' => $productocolor->getProductocolorFoto(),
                                    'talla' => $variante->getProductovarianteTalla(),
                                    'variante' => $variante->getIdproductovariante(),
                                    'cantidad' => $pedido->getPedidoCantidad(),
                                 );

                        array_push($details[$sucursal][$indice], $value);
                    }
                }
                else
                {
                    //verificamos que la combinacion de material color no exista
                    if($details[$sucursal][$indice] == null)
                    {

                        //inicializamos las variantes de ese color y material
                        $details[$sucursal][$indice] = [];
                        $value = array(
                                    'fotografia' => $productocolor->getProductocolorFoto(),
                                    'talla' => $variante->getProductovarianteTalla(),
                                    'variante' => $variante->getIdproductovariante(),
                                    'cantidad' => $pedido->getPedidoCantidad(),

                                 );

                        array_push($details[$sucursal][$indice], $value);

                    }else{
                        $value = array(
                                    'fotografia' => $productocolor->getProductocolorFoto(),
                                    'talla' => $variante->getProductovarianteTalla(),
                                    'variante' => $variante->getIdproductovariante(),
                                    'cantidad' => $pedido->getPedidoCantidad(),
                                 );

                        array_push($details[$sucursal][$indice], $value);
                    }
                }
                
                
                
            }



            $productos = [];
            foreach ($details as $key=>$sucursal) {
          
                foreach ($sucursal as $detail) {
                    
                    foreach ($detail as $product) {
                        $productoVariante = \ProductovarianteQuery::create()->findPK($product['variante']);

                        $indice = $productoVariante->getProductocolor()->getColor()->getColorNombre() .'/'. $productoVariante->getProductomaterial()->getMaterial()->getMaterialNombre();

                       if($productos[$key][$indice] == null)
                        {
                            $nombreSucursal = \SucursalQuery::create()->findPK($key)->getSucursalNombrecomercial();
                            //inicializamos las variantes de ese color y material
                            $productos[$key][$indice] = [];

                            $value = array(
                                        'fotografia' => $product['fotografia'],
                                        'talla' => array($product['talla'] => $product['cantidad']),
                                        'variante' => array($product['talla'] => $product['variante']),
                                        'sucursal' => $nombreSucursal,
                                     );

                            array_push($productos[$key][$indice], $value);

                        }else{
                          
                                $productos[$key][$indice][0]['talla'][$product['talla']]+=$product['cantidad'];
                                $productos[$key][$indice][0]['variante'][$product['talla']]=$product['variante'];
                            
                        }
                    }
                }
            }

            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $productos)));

            //echo '<pre>'; var_dump($details); echo '</pre>';exit();
        }

    } 
    

}
