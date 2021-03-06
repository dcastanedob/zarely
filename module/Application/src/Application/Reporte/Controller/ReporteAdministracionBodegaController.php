<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Reporte\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ReporteAdministracionBodegaController extends AbstractActionController
{
    public $mas_vendidos = array(
        0 => 'b.ProductoModelo',
        1 => 'c.MarcaNombre',
        2 => 'ventadetalle_cantidad',
        3 => 'ventadetalle_subtotal',
    );


    public $column_map = array(
        0 => 'a.ProductoModelo',
        1 => 'productos_existencia'
    );

    public $proveedor_pedido_map = array(
        0 => 'a.ClienteNombre',
        1 => 'Idpedidomayorista',
        2 => 'PedidomayoristaFechasolicitud',
        3 => 'PedidomayoristaEstatus'
    );

    public $sucursal_pedido_map = array(
        0 => 'a.SucursalNombrecomercial',
        1 => 'Idpedidosucursal',
        2 => 'PedidosucursalFechasolicitud',
        3 => 'PedidosucursalEstatus'
    );

    public $articulos_map = array(
        0 => 'c.ProductoModelo'
    );


    public function inventarioAction(){
        
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $post_data = $request->getPost();

            $query = new \ProductosucursalQuery();  

            $query->filterByIdsucursal(1);

            $query->useProductovarianteQuery('pv')->useProductoQuery('a')->endUse()->endUse();


            $query->withColumn('a.ProductoModelo', 'producto_nombre');

            $query->withColumn('SUM(productosucursal_existencia)','productos_existencia');
            $query->withColumn('a.Idproducto','idproducto');
            $query->groupBy("a.Idproducto");

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



                $c1= $c->getNewCriterion('producto.producto_modelo', '%'.$search_value.'%', \Criteria::LIKE);


                $query->addAnd($c1);
                $query->groupByIdproductosucursal();

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
                $tmp['DT_RowId'] = $value['idproductosucursal'];
                $tmp['productos_existencia'] = $value['productos_existencia'];
                $tmp['producto_nombre'] = $value['producto_nombre'];

                $tmp['options'] = '
                <a href="/reporte-bodega/ver/' . $value['idproducto'] . '">
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


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/administracion/bodega/inventario/index');
        $view_model->setVariables(array(
             'messages' => $this->flashMessenger(),
        ));
        return $view_model;
    }


    public function pendientesProveedorAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){

            
            $post_data = $request->getPost();
            //convertir la fecha
            $temp = explode('/',$post_data['desde']);

            $post_data['desde'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 00:00:00';

            $temp = explode('/',$post_data['hasta']);
            $post_data['hasta'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 23:59:59';

            $query = new \PedidomayoristaQuery();
            
            $query->useClienteQuery('a')->endUse();
            $query->usePedidomayoristadetalleQuery('b')->endUse();
            

            
            $query->filterByPedidomayoristaFechasolicitud(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByPedidomayoristaEstatus('pendiente');


            $query->withColumn('a.ClienteNombre', 'cliente_nombre');
            $query->withColumn('SUM(b.PedidomayoristadetalleCantidad)', 'cantidad');

            $records_filtered = $query->count();

            $query->groupByIdpedidomayorista();

            
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
               
                
                $c1= $c->getNewCriterion('cliente.cliente_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                
                


                $query->addAnd($c1);

              
                $query->groupByIdpedidomayorista();

                $records_filtered = $query->count();
                
            }
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->proveedor_pedido_map[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if($dir == 'desc'){
                $query->orderBy($order_column,  \Criteria::DESC);
            }else{
                $query->orderBy($order_column,  \Criteria::ASC);
            }

            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();
            
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                
                $tmp['DT_RowId'] = $value['idpedidomayorista'];
                $tmp['cliente_nombre'] = $value['cliente_nombre'];
                $tmp['idpedidomayorista'] = $value['idpedidomayorista'];
                $tmp['cantidad_pares'] = $value['cantidad'];

                $tmp['pedidomayorista_fechasolicitud'] = $value['pedidomayorista_fechasolicitud'];

                

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
            
            if($post_data['btn'] == 'excel')
            {
                $phpreport = new \Application\Shared\PHPReport();
                $phpreport->load(array(
                    array(
                        'id' => 'reporte',
                        'repeat' => true,
                        'data' => $data,
                        'minRows' => 2,
                    )
                ));
                $base_64 = $phpreport->render('excel2003','reporte_venta',true);
                $json_data['base64'] = $base_64;
            }

            if(count($json_data['data']) > 0){
                $index = count($json_data['data']) -1;
                if($post_data['btn'] == 'excel'){
                    
                    $phpreport = new \Application\Shared\PHPReport();
                    $phpreport->load(array(
                    array(
                           'id' => 'reporte',
                           'repeat' => true,
                           'data' => $data,
                           'minRows' => 2,
                       )));
                    $base_64 = $phpreport->render('excel2003','reporte_venta',true);
                    $json_data['data'][$index]['base64'] = $base_64;
                    $json_data['output'] = 'excel';
                    
                    
                }
            }
            return $this->getResponse()->setContent(json_encode($json_data));
        }

        $empleados = \EmpleadoQuery::create()->filterByIdrol(5)->find();
        $empleados_array = array();
        foreach ($empleados as $empleado){
            $empleados_array[$empleado->getIdempleado()] = $empleado->getEmpleadonombre() ." " .$empleado->getEmpleadoapaterno() ." " .$empleado->getEmpleadoamaterno();
        }

        $form = new \Application\Reporte\Form\VentasForm($empleados_array);


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/administracion/bodega/proveedor/pendientes');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
    }


    public function pendientesSucursalAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){

            
            $post_data = $request->getPost();
            //convertir la fecha
            $temp = explode('/',$post_data['desde']);

            $post_data['desde'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 00:00:00';

            $temp = explode('/',$post_data['hasta']);
            $post_data['hasta'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 23:59:59';

            $query = new \PedidosucursalQuery();
            
            $query->useSucursalQuery('a')->endUse();
            $query->usePedidosucursaldetalleQuery('b')->endUse();
            

            
            $query->filterByPedidosucursalFechasolicitud(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByPedidosucursalEstatus('pendiente');


            $query->withColumn('a.SucursalNombrecomercial', 'sucursal_nombrecomercial');
            $query->withColumn('SUM(b.PedidosucursaldetalleCantidad)', 'cantidad');

            $records_filtered = $query->count();

            $query->groupByIdpedidosucursal();

            
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
               
                
                $c1= $c->getNewCriterion('sucursal.sucursal_nombrecomercial', '%'.$search_value.'%', \Criteria::LIKE);

                
                


                $query->addAnd($c1);

              
                $query->groupByIdpedidosucursal();

                $records_filtered = $query->count();
                
            }
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->sucursal_pedido_map[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if($dir == 'desc'){
                $query->orderBy($order_column,  \Criteria::DESC);
            }else{
                $query->orderBy($order_column,  \Criteria::ASC);
            }

            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();
            
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                
                $tmp['DT_RowId'] = $value['idpedidosucursal'];
                $tmp['sucursal_nombre'] = $value['sucursal_nombrecomercial'];
                $tmp['idpedidosucursal'] = $value['idpedidosucursal'];
                $tmp['cantidad_pares'] = $value['cantidad'];

                $tmp['pedidosucursal_fechasolicitud'] = $value['pedidosucursal_fechasolicitud'];

                

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
            
            if($post_data['btn'] == 'excel')
            {
                $phpreport = new \Application\Shared\PHPReport();
                $phpreport->load(array(
                    array(
                        'id' => 'reporte',
                        'repeat' => true,
                        'data' => $data,
                        'minRows' => 2,
                    )
                ));
                $base_64 = $phpreport->render('excel2003','reporte_venta',true);
                $json_data['base64'] = $base_64;
            }

            if(count($json_data['data']) > 0){
                $index = count($json_data['data']) -1;
                if($post_data['btn'] == 'excel'){
                    
                    $phpreport = new \Application\Shared\PHPReport();
                    $phpreport->load(array(
                    array(
                           'id' => 'reporte',
                           'repeat' => true,
                           'data' => $data,
                           'minRows' => 2,
                       )));
                    $base_64 = $phpreport->render('excel2003','reporte_venta',true);
                    $json_data['data'][$index]['base64'] = $base_64;
                    $json_data['output'] = 'excel';
                    
                    
                }
            }
            return $this->getResponse()->setContent(json_encode($json_data));
        }

        $empleados = \EmpleadoQuery::create()->filterByIdrol(5)->find();
        $empleados_array = array();
        foreach ($empleados as $empleado){
            $empleados_array[$empleado->getIdempleado()] = $empleado->getEmpleadonombre() ." " .$empleado->getEmpleadoapaterno() ." " .$empleado->getEmpleadoamaterno();
        }

        $form = new \Application\Reporte\Form\VentasForm($empleados_array);


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/administracion/bodega/sucursal/pendientes');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
    }


    public function masVendidosAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){

            //Creamos una instancia de la sesión
            $user = new \Application\Session\AouthSession();
            $user = $user->getData();

            $post_data = $request->getPost();

            //convertir la fecha
            $temp = explode('/',$post_data['desde']);


            $post_data['desde'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 00:00:00';

            $temp = explode('/',$post_data['hasta']);
            $post_data['hasta'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 23:59:59';



            $query = new \VentadetalleQuery();
            
            $query->useProductovarianteQuery('a')->useProductoQuery('b')->useMarcaQuery('c')->endUse()->endUse()->endUse();

            $query->useProductovarianteQuery('x')->useProductoQuery('y')->useProveedorQuery('d')->endUse()->endUse()->endUse();

            $query->useVentaQuery()->useClienteQuery('cq')->filterByClienteTipo('mayorista')->endUse()->filterByVentaFecha(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByVentaTipo('venta')->filterByVentaEstatuspago(1)->filterByVentaEstatus('completada')->endUse();

            $query->useProductovarianteQuery()->useProductoQuery()->useMarcaQuery()->endUse()->endUse()->endUse();

            $query->withColumn('b.ProductoModelo', 'producto_nombre');
            $query->withColumn('d.ProveedorNombrecomercial', 'proveedor_nombre');
            $query->withColumn('c.MarcaNombre', 'producto_marca');
            $query->withColumn('SUM(ventadetalle_cantidad)','ventadetalle_cantidad_total');
            $query->withColumn('SUM(ventadetalle_subtotal)','ventadetalle_subtotal_total');


            $query->groupBy("b.idproducto");

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
               
                
                $c1= $c->getNewCriterion('ventadetalle.idventadetalle', '%'.$search_value.'%', \Criteria::LIKE);

                $c2= $c->getNewCriterion('producto.producto_modelo', '%'.$search_value.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('marca.marca_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                $c1->addOr($c2)->addOr($c3);

                $query->addAnd($c1);

              


                $records_filtered = $query->count();
                
            }
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->mas_vendidos[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if($dir == 'desc'){
                $query->orderBy($order_column,  \Criteria::DESC);
            }else{
                $query->orderBy($order_column,  \Criteria::ASC);
            }

            
            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();
            

           
            $query->filterByVentadetalleEstatus('completo');

            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                $tmp['DT_RowId'] = $value['idventadetalle'];
                $tmp['idventadetalle'] = $value['idventadetalle'];
                $tmp['producto_nombre'] = $value['producto_nombre'];
                $tmp['proveedor_nombre'] = $value['proveedor_nombre'];

                $tmp['producto_marca'] = $value['producto_marca'];

                $tmp['ventadetalle_cantidad'] = $value['ventadetalle_cantidad_total'];
                $tmp['ventadetalle_subtotal'] = "$" . $value['ventadetalle_subtotal_total'];

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
            
            if($post_data['btn'] == 'excel')
            {
                $phpreport = new \Application\Shared\PHPReport();
                $phpreport->load(array(
                    array(
                        'id' => 'reporte',
                        'repeat' => true,
                        'data' => $data,
                        'minRows' => 2,
                    )
                ));
                $base_64 = $phpreport->render('excel2003','reporte_contrarecibo',true);
                $json_data['base64'] = $base_64;
            }

            if(count($json_data['data']) > 0){
                $index = count($json_data['data']) -1;
                if($post_data['btn'] == 'excel'){
                    
                    $phpreport = new \Application\Shared\PHPReport();
                    $phpreport->load(array(
                    array(
                           'id' => 'reporte',
                           'repeat' => true,
                           'data' => $data,
                           'minRows' => 2,
                       )));
                    $base_64 = $phpreport->render('excel2003','reporte_contrarecibo',true);
                    $json_data['data'][$index]['base64'] = $base_64;
                    $json_data['output'] = 'excel';
                    
                    
                }
            }
            return $this->getResponse()->setContent(json_encode($json_data));
        }

       

        $form = new \Application\Reporte\Form\MasVendidosForm();


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/administracion/bodega/masVendidos/ver');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
    }

    public function verAction()
    {
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \ProductoQuery::create()->filterByIdproducto($id)->exists();
        
        if($exist){
            $request = $this->getRequest();
            $producto = \ProductoQuery::create()->findPk($id);
            if($request->isPost()){

                $query = new \ProductosucursalQuery();
                $query->filterByIdsucursal(1);
                
                $query->useProductovarianteQuery('a')->useProductoQuery('b')->filterByIdproducto($id)->endUse()->useProductomaterialQuery('pm')->useMaterialQuery('m')->endUse()->endUse()->useProductocolorQuery('pc')->useColorQuery('c')->endUse()->endUse()->endUse();


                
                $query->withColumn('m.MaterialNombre', 'producto_material');
                $query->withColumn('c.ColorNombre', 'producto_color');
                $query->withColumn('pc.ProductocolorFoto', 'producto_foto');
                $query->withColumn('a.ProductovarianteTalla', 'producto_talla');





                $query->groupBy("idproductosucursal");

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
                   
                    
                    $c1= $c->getNewCriterion('ventadetalle.idventadetalle', '%'.$search_value.'%', \Criteria::LIKE);

                    $c2= $c->getNewCriterion('producto.producto_modelo', '%'.$search_value.'%', \Criteria::LIKE);
                    $c3= $c->getNewCriterion('marca.marca_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                    $c1->addOr($c2)->addOr($c3);

                    $query->addAnd($c1);

                  


                    
                }
                //LIMIT
                $query->setOffset((int)$post_data['start']);
                $query->setLimit((int)$post_data['length']);
                
                
                //ORDER
                /*$order_column = $post_data['order'][0]['column'];
                $order_column = $this->mas_vendidos[$order_column];
                $dir = $post_data['order'][0]['dir'];
                if($dir == 'desc'){
                    $query->orderBy($order_column,  \Criteria::DESC);
                }else{
                    $query->orderBy($order_column,  \Criteria::ASC);
                }*/

                
                
                //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
                
                $preData = array();
                foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){

                    $tmp['DT_RowId'] = $value['idproductosucursal'];

                    $preData[$value['producto_color'] . ' - ' . $value['producto_material']]['tallas'][$value['producto_talla']] = $value['productosucursal_existencia'];     
                    $preData[$value['producto_color'] . ' - ' . $value['producto_material']]['foto'] = $value['producto_foto'];

                }  

                $data = array();

                foreach ($preData as $combinacion => $value) {
                    $temp = [];
                    $temp['producto_variante'] = $combinacion;
                    $temp['producto_fotografia'] = '<img class="center-block" src="'.$value['foto'].'" width="40%">';

                    foreach ($value['tallas'] as $talla => $existencia) {
                        $temp['talla_'.str_replace('.', "_", $talla)] = $existencia;
                    }
                    $data[] = $temp;

                }





                
                //El arreglo que regresamos
                $json_data = array(
                    'order' => $order_column,
                    "draw"            => (int)$post_data['draw'],
                    //"recordsTotal"    => 100,
                    "recordsFiltered" => count($data),
                    "data"            => $data
                );
                
                if($post_data['btn'] == 'excel')
                {
                    $phpreport = new \Application\Shared\PHPReport();
                    $phpreport->load(array(
                        array(
                            'id' => 'reporte',
                            'repeat' => true,
                            'data' => $data,
                            'minRows' => 2,
                        )
                    ));
                    $base_64 = $phpreport->render('excel2003','reporte_contrarecibo',true);
                    $json_data['base64'] = $base_64;
                }

                if(count($json_data['data']) > 0){
                    $index = count($json_data['data']) -1;
                    if($post_data['btn'] == 'excel'){
                        
                        $phpreport = new \Application\Shared\PHPReport();
                        $phpreport->load(array(
                        array(
                               'id' => 'reporte',
                               'repeat' => true,
                               'data' => $data,
                               'minRows' => 2,
                           )));
                        $base_64 = $phpreport->render('excel2003','reporte_contrarecibo',true);
                        $json_data['data'][$index]['base64'] = $base_64;
                        $json_data['output'] = 'excel';
                        
                        
                    }
                }
                return $this->getResponse()->setContent(json_encode($json_data));

            }else{
                $form = new \Application\Reporte\Form\VentasForm($empleados_array);

                $tallas = $this->getRows($id);
                $view_model = new ViewModel();
                $view_model->setTemplate('application/reporte/administracion/bodega/inventario/ver');

                $view_model->setVariables(array(
                    'form' => $form,
                    'producto' => $producto,
                    'tallas' => $tallas,
                    'id'   => $id
                ));

                return $view_model;
            }
            
            
            
        }else{
            $this->flashMessenger()->addErrorMessage('Id Invalido.');
            return $this->redirect()->toUrl('/reporte-bodega/inventario');
        }
    }


    private function getRows($id)
    {

        //filtramos por sucursal
        $query = new \ProductosucursalQuery();
        $query->filterByIdsucursal(1);
        
        //obtenemos el rango
        $query->useProductovarianteQuery('a')->useProductoQuery('b')->filterByIdproducto($id)->endUse()->endUse();

        $query->withColumn('a.ProductovarianteTalla', 'producto_talla');

        $query->groupBy("idproductosucursal");

        //iteramos sobre cada talla
        $array = [];
        foreach ($query->find()->toArray() as $key => $value) {
            $array[] = (float)$value['producto_talla'];
        }

        //eleiminamos los duplicados y ordenamos
        $array = array_unique($array);

        sort($array);

        return $array;
    }

    public function rowsAction()
    {
        $request = $this->getRequest();
        if($request->isPost())
        {
            $post_data = $request->getPost();
            $array = $this->getRows($post_data['id']);
            return $this->getResponse()->setContent(json_encode($array));
        }
    }



    public function ventasSucursalAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data  = $request->getPost();
            $query = new \VentapagoQuery();
            $query->filterByVentaFecha(array('min'=>str_replace('/', '-', $post_data['desde']) ,'max'=>str_replace('/', '-', $post_data['hasta'])));


            $query->useVentaQuery('a')->useSucursalQuery('b')->endUse()->endUse();

            
            $query->withColumn('b.SucursalNombrecomercial', 'sucursal_nombre');


            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            

            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();

            
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){

                $tmp['DT_RowId'] = $value['idventapago'];
                //verificamos que ya exista el tipo de venta
                if(isset($sucursal_array[$value['sucursal_nombre']][$value['ventapago_metododepago']]))
                {
                    //le sumamos lo nuevo mas lo anterior
                    $sucursal_array[$value['sucursal_nombre']][$value['ventapago_metododepago']] = $sucursal_array[$value['sucursal_nombre']][$value['ventapago_metododepago']] +  money_format('%.2n', $value['ventapago_cantidad']); 
                }else{
                    //Creamos el metodo
                    $sucursal_array[$value['sucursal_nombre']][$value['ventapago_metododepago']] =  money_format('%.2n', $value['ventapago_cantidad']); 
                }
                
 
            }   
            
            if($sucursal_array != null)
            {
                //itero sobre todas las combinaciones para hacerle push al arreglo
                foreach ($sucursal_array as $sucursal => $values) {
                    $data[0][str_replace(' ', '_', $sucursal)] = '$' . ($values['efectivo'] + $values['vales'] + $values['tarjeta'] + $values['puntos']) . '  (Total)';

                    $data[1][str_replace(' ', '_', $sucursal)] = '$' . ( 0.00 +$values['efectivo']) . '  (Efectivo)';
                    $data[2][str_replace(' ', '_', $sucursal)] = '$' . ( 0.00 +$values['vales']) . '  (Vales)';
                    $data[3][str_replace(' ', '_', $sucursal)] = '$' . ( 0.00 +$values['tarjeta']) . '  (Tarjeta)';
                    $data[4][str_replace(' ', '_', $sucursal)] = '$' . ( 0.00 +$values['puntos']) . '  (Puntos)';
                }
            }
            

            
            //El arreglo que regresamos
            $json_data = array(
                'order' => $order_column,
                "draw"            => (int)$post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => 5,
                "data"            => $data
            );
            
            if($post_data['btn'] == 'excel')
            {
                $phpreport = new \Application\Shared\PHPReport();
                $phpreport->load(array(
                    array(
                        'id' => 'reporte',
                        'repeat' => true,
                        'data' => $data,
                        'minRows' => 2,
                    )
                ));
                $base_64 = $phpreport->render('excel2003','reporte_venta',true);
                $json_data['base64'] = $base_64;
            }

            if(count($json_data['data']) > 0){
                $index = count($json_data['data']) -1;
                if($post_data['btn'] == 'excel'){
                    
                    $phpreport = new \Application\Shared\PHPReport();
                    $phpreport->load(array(
                    array(
                           'id' => 'reporte',
                           'repeat' => true,
                           'data' => $data,
                           'minRows' => 2,
                       )));
                    $base_64 = $phpreport->render('excel2003','reporte_venta',true);
                    $json_data['data'][$index]['base64'] = $base_64;
                    $json_data['output'] = 'excel';
                    
                    
                }
            }
            return $this->getResponse()->setContent(json_encode($json_data));


        }

        //traer las sucursales
        $generales = \SucursalQuery::create()->find();
        $sucursal_array = array();

        foreach ($generales as $value){

            $sucursal_array[$value->getIdsucursal()] = $value->getSucursalNombrecomercial();
        }

        $form = new \Application\Reporte\Form\MasVendidosForm();


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/administracion/bodega/ventasSucursal/ver');

        $view_model->setVariables(array(
            'form' => $form,
            'sucursales' => $sucursal_array
        ));

        return $view_model;
    }

    public function masVendidosSucursalAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){


            $post_data = $request->getPost();

            //convertir la fecha
            $temp = explode('/',$post_data['desde']);


            $post_data['desde'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 00:00:00';

            $temp = explode('/',$post_data['hasta']);
            $post_data['hasta'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 23:59:59';



            $query = new \VentadetalleQuery();
            

            $query->useVentaQuery('vq')->filterByVentaFecha(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByVentaEstatuspago(1)->filterByIdsucursal($post_data['sucursal'],\Criteria::IN)->endUse();


            $query->useVentaQuery('vq')->useSucursalQuery('d')->endUse()->endUse();

            $query->useProductovarianteQuery('b')->useProductoQuery('c')->endUse()->endUse();

            $query->withColumn('c.ProductoModelo', 'nombre_producto');
            $query->withColumn('SUM(ventadetalle_cantidad)','cantidad_producto')->orderBy('cantidad_producto',\Criteria::DESC);
            $query->withColumn('vq.Idsucursal', 'idsucursal');

            $query->groupBy("c.Idproducto");
            $query->groupBy("d.Idsucursal");
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
               
                
                $c1= $c->getNewCriterion('producto.producto_modelo', '%'.$search_value.'%', \Criteria::LIKE);



                $query->addAnd($c1);

              


                $records_filtered = $query->count();
                
            }
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->articulos_map[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if($dir == 'desc'){
                $query->orderBy($order_column,  \Criteria::DESC);
            }else{
                $query->orderBy($order_column,  \Criteria::ASC);
            }

            
                
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $temp = array();
            $query->orderBy('cantidad_producto',  \Criteria::ASC);
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                $tmp['DT_RowId'] = $value['idventa'];
                $tmp['nombre_producto'] = $value['nombre_producto'];
                $tmp['cantidad_producto'] = $value['cantidad_producto'];
                $temp['row'+$value['idsucursal']][] = $tmp;
 
            }   
            
            $data = array();
            foreach ($temp as $key => $value) {
                //$value = array_reverse($value);
                foreach ($value as $sucursal) {
                    $data['sucursal'.$key][] = $sucursal['nombre_producto'] . ' - ' . $sucursal['cantidad_producto'] . " pares"; 
                }
                
            }

            //ciclo para ver que todas las sucursales tengan valores
            foreach ($post_data['sucursal'] as $idSucursal) {
                if(!isset($data['sucursal'.$idSucursal]))
                {
                    $data['sucursal'.$idSucursal] = array();
                }
            }

            $newData = [];
            foreach ($data as $index => $info) {
                $i = 0; 

                foreach ($info as $value ) {
                    $newData[$i][$index] = $value;
                    $i++;
                }

            }

            $i=0;
            foreach ($newData as $info) {
                foreach ($post_data['sucursal'] as $idSucursal) {
                    if(!isset($info['sucursal'.$idSucursal]))
                    {
                        $newData[$i]['sucursal'.$idSucursal] = '';
                    }
                }
                $i++;
            }

            //El arreglo que regresamos
            $json_data = array(
                'order' => $order_column,
                "draw"            => (int)$post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => $records_filtered,
                "data"            => $newData
            );
            
            if($post_data['btn'] == 'excel')
            {
                $phpreport = new \Application\Shared\PHPReport();
                $phpreport->load(array(
                    array(
                        'id' => 'reporte',
                        'repeat' => true,
                        'data' => $data,
                        'minRows' => 2,
                    )
                ));
                $base_64 = $phpreport->render('excel2003','reporte_contrarecibo',true);
                $json_data['base64'] = $base_64;
            }

            if(count($json_data['data']) > 0){
                $index = count($json_data['data']) -1;
                if($post_data['btn'] == 'excel'){
                    
                    $phpreport = new \Application\Shared\PHPReport();
                    $phpreport->load(array(
                    array(
                           'id' => 'reporte',
                           'repeat' => true,
                           'data' => $data,
                           'minRows' => 2,
                       )));
                    $base_64 = $phpreport->render('excel2003','reporte_contrarecibo',true);
                    $json_data['data'][$index]['base64'] = $base_64;
                    $json_data['output'] = 'excel';
                    
                    
                }
            }
            return $this->getResponse()->setContent(json_encode($json_data));
        }

        //traer las sucursales
        $generales = \SucursalQuery::create()->find();
        $sucursal_array = array();

        foreach ($generales as $value){

            $sucursal_array[$value->getIdsucursal()] = $value->getSucursalNombrecomercial();
        }

        $form = new \Application\Reporte\Form\MasVendidosForm();


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/administracion/bodega/masVendidosSucursal/ver');

        $view_model->setVariables(array(
            'form' => $form,
            'sucursales' => $sucursal_array
        ));

        return $view_model;
    }

    public function modelosMasVendidosSucursalAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){


            $post_data = $request->getPost();

            //convertir la fecha
            $temp = explode('/',$post_data['desde']);


            $post_data['desde'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 00:00:00';

            $temp = explode('/',$post_data['hasta']);
            $post_data['hasta'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 23:59:59';




            $query = new \VentadetalleQuery();
            

            $query->useVentaQuery('vq')->filterByVentaFecha(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByVentaEstatuspago(1)->filterByIdsucursal($post_data['sucursal'],\Criteria::IN)->endUse();


            $query->useVentaQuery('vq')->useSucursalQuery('d')->endUse()->endUse();

            $query->useProductovarianteQuery('b')->useProductocolorQuery('pc')->useColorQuery('cl')->endUse()->endUse()->useProductoQuery('c')->endUse()->endUse();

            $query->withColumn('c.ProductoModelo', 'nombre_producto');
            $query->withColumn('SUM(ventadetalle_cantidad)','cantidad_producto')->orderBy('cantidad_producto',\Criteria::DESC);
            $query->withColumn('cl.ColorNombre', 'color_nombre');
            $query->withColumn('vq.Idsucursal', 'idsucursal');

            $query->groupBy("b.Idproductocolor");
            $query->groupBy("d.Idsucursal");

            $records_filtered = $query->count();
            

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
               
                
                $c1= $c->getNewCriterion('producto.producto_modelo', '%'.$search_value.'%', \Criteria::LIKE);



                $query->addAnd($c1);

              


                $records_filtered = $query->count();
                
            }
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->articulos_map[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if($dir == 'desc'){
                $query->orderBy($order_column,  \Criteria::DESC);
            }else{
                $query->orderBy($order_column,  \Criteria::ASC);
            }

            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $temp = array();
            $query->orderBy('cantidad_producto',  \Criteria::ASC);
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                $tmp['DT_RowId'] = $value['idventa'];
                $tmp['nombre_producto'] = $value['nombre_producto'];
                $tmp['cantidad_producto'] = $value['cantidad_producto'];
                $tmp['color_nombre'] = $value['color_nombre'];
                $temp['row'+$value['idsucursal']][] = $tmp;
 
            }   
            
            $data = array();
            foreach ($temp as $key => $value) {
                //$value = array_reverse($value);
                foreach ($value as $sucursal) {
                    $data['sucursal'.$key][] = $sucursal['nombre_producto'] . ' ' . $sucursal['color_nombre'] . ' - ' . $sucursal['cantidad_producto'] . ' pares'; 
                }
                
            }

            //ciclo para ver que todas las sucursales tengan valores
            foreach ($post_data['sucursal'] as $idSucursal) {
                if(!isset($data['sucursal'.$idSucursal]))
                {
                    $data['sucursal'.$idSucursal] = array();
                }
            }

            $newData = [];
            foreach ($data as $index => $info) {
                $i = 0; 

                foreach ($info as $value ) {
                    $newData[$i][$index] = $value;
                    $i++;
                }

            }

            $i=0;
            foreach ($newData as $info) {
                foreach ($post_data['sucursal'] as $idSucursal) {
                    if(!isset($info['sucursal'.$idSucursal]))
                    {
                        $newData[$i]['sucursal'.$idSucursal] = '';
                    }
                }
                $i++;
            }

            //El arreglo que regresamos
            $json_data = array(
                'order' => $order_column,
                "draw"            => (int)$post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => $records_filtered,
                "data"            => $newData
            );
            
            if($post_data['btn'] == 'excel')
            {
                $phpreport = new \Application\Shared\PHPReport();
                $phpreport->load(array(
                    array(
                        'id' => 'reporte',
                        'repeat' => true,
                        'data' => $data,
                        'minRows' => 2,
                    )
                ));
                $base_64 = $phpreport->render('excel2003','reporte_contrarecibo',true);
                $json_data['base64'] = $base_64;
            }

            if(count($json_data['data']) > 0){
                $index = count($json_data['data']) -1;
                if($post_data['btn'] == 'excel'){
                    
                    $phpreport = new \Application\Shared\PHPReport();
                    $phpreport->load(array(
                    array(
                           'id' => 'reporte',
                           'repeat' => true,
                           'data' => $data,
                           'minRows' => 2,
                       )));
                    $base_64 = $phpreport->render('excel2003','reporte_contrarecibo',true);
                    $json_data['data'][$index]['base64'] = $base_64;
                    $json_data['output'] = 'excel';
                    
                    
                }
            }
            return $this->getResponse()->setContent(json_encode($json_data));
        }

        //traer las sucursales
        $generales = \SucursalQuery::create()->find();
        $sucursal_array = array();

        foreach ($generales as $value){

            $sucursal_array[$value->getIdsucursal()] = $value->getSucursalNombrecomercial();
        }

        $form = new \Application\Reporte\Form\MasVendidosForm();


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/administracion/bodega/modelosMasVendidosSucursal/ver');

        $view_model->setVariables(array(
            'form' => $form,
            'sucursales' => $sucursal_array
        ));

        return $view_model;
    }


    public function getSucursalesAction()
    {
        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            //traer las sucursales
            $generales = \SucursalQuery::create()->find();
            $sucursal_array = array();

            foreach ($generales as $value){

                $sucursal_array[$value->getIdsucursal()] = str_replace(' ', '_', $value->getSucursalNombrecomercial());
            }

            return $this->getResponse()->setContent(json_encode($sucursal_array));

        }
    }


    public function ventasVendedorAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data  = $request->getPost();
            $query = new \VentaQuery();
            $query->filterByVentaFecha(array('min'=>str_replace('/', '-', $post_data['desde']) ,'max'=>str_replace('/', '-', $post_data['hasta'])));


            $query->useEmpleadoRelatedByIdempleadovendedorQuery('b')->endUse();
            $query->useSucursalQuery('a')->endUse();
            
            $query->withColumn('b.EmpleadoNombre', 'empleado_nombre');
            $query->withColumn('b.EmpleadoApaterno', 'empleado_apaterno');
            $query->withColumn('b.EmpleadoAmaterno', 'empleado_amaterno');
            $query->withColumn('a.SucursalNombrecomercial', 'sucursal_nombrecomercial');
            $query->withColumn('SUM(venta_total)','ventas_total')->orderBy('ventas_total',\Criteria::DESC);;

            $query->groupBy('Idempleadovendedor');
            $query->groupBy('Idsucursal');


            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            

            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();
            $query->orderBy('ventas_total',  \Criteria::DESC);
            $temp = array();
            
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){

                $temp[$value['sucursal_nombrecomercial']][] = $value['empleado_nombre']  . ' '. $value['empleado_apaterno']  . ' '. $value['empleado_amaterno']  . ' - $'. $value['ventas_total'];
 
            }   

            //obtenemos el màximo numero de empleados por sucursal
            $max = 0;
            foreach ($temp as  $vendedores) {
                if($max < count($vendedores))
                    $max = count($vendedores); 
            }
            
            //iteramos sobre todos los valores
            foreach ($temp as $sucursal => $vendedores) {
                //recorremos todos los valores y lo agregamos a la nueva data
                for ($i=0; $i < $max; $i++) { 
                    $data[$i][str_replace(' ', '_', $sucursal)] = $vendedores[$i];
                }
            }
           
            //var_dump($data);exit();
            //El arreglo que regresamos
            $json_data = array(
                'order' => $order_column,
                "draw"            => (int)$post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => $max,
                "data"            => $data
            );
            
            if($post_data['btn'] == 'excel')
            {
                $phpreport = new \Application\Shared\PHPReport();
                $phpreport->load(array(
                    array(
                        'id' => 'reporte',
                        'repeat' => true,
                        'data' => $data,
                        'minRows' => 2,
                    )
                ));
                $base_64 = $phpreport->render('excel2003','reporte_venta',true);
                $json_data['base64'] = $base_64;
            }

            if(count($json_data['data']) > 0){
                $index = count($json_data['data']) -1;
                if($post_data['btn'] == 'excel'){
                    
                    $phpreport = new \Application\Shared\PHPReport();
                    $phpreport->load(array(
                    array(
                           'id' => 'reporte',
                           'repeat' => true,
                           'data' => $data,
                           'minRows' => 2,
                       )));
                    $base_64 = $phpreport->render('excel2003','reporte_venta',true);
                    $json_data['data'][$index]['base64'] = $base_64;
                    $json_data['output'] = 'excel';
                    
                    
                }
            }
            return $this->getResponse()->setContent(json_encode($json_data));


        }

        //traer las sucursales
        $generales = \SucursalQuery::create()->find();
        $sucursal_array = array();

        foreach ($generales as $value){

            $sucursal_array[$value->getIdsucursal()] = $value->getSucursalNombrecomercial();
        }

        $form = new \Application\Reporte\Form\MasVendidosForm();


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/administracion/bodega/ventasVendedor/ver');

        $view_model->setVariables(array(
            'form' => $form,
            'sucursales' => $sucursal_array
        ));

        return $view_model;
    }


    public function ventasDiaAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data  = $request->getPost();
            $query = new \VentaQuery();
            $query->filterByVentaFecha(array('min'=>str_replace('/', '-', $post_data['desde']) ,'max'=>str_replace('/', '-', $post_data['hasta'])));


            $query->useSucursalQuery('a')->endUse();
            $query->withColumn('a.SucursalNombrecomercial', 'sucursal_nombrecomercial');

            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            

            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();
            
            $temp = array();
            
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                //obtenemos el día de la seamna
                $day = date( "l", strtotime($value['venta_fecha']));
                
                //verificamos si ya se agregò informaciòn
                if(isset($temp[$value['sucursal_nombrecomercial']][$day])) {
                    //sumamos la cantidad
                    $temp[$value['sucursal_nombrecomercial']][$day] = $temp[$value['sucursal_nombrecomercial']][$day] + $value['venta_total'];
                } else {
                     $temp[$value['sucursal_nombrecomercial']][$day] =  $value['venta_total'];
                }
 
            }   

            //iteramos sobre cada sucursal para obtener su valor
            foreach ($temp as $sucursal => $values) {
                $data[0][str_replace(' ', '_', $sucursal)] = 'Lunes - $'.  money_format('%.2n', $values['Monday']);
                $data[1][str_replace(' ', '_', $sucursal)] = 'Martes - $'.  money_format('%.2n', $values['Tuesday']);
                $data[2][str_replace(' ', '_', $sucursal)] = 'Miércoles - $'.  money_format('%.2n', $values['Wednesday']);
                $data[3][str_replace(' ', '_', $sucursal)] = 'Jueves - $'.  money_format('%.2n', $values['Thursday']);
                $data[4][str_replace(' ', '_', $sucursal)] = 'Viernes - $'.  money_format('%.2n', $values['Friday']);
                $data[5][str_replace(' ', '_', $sucursal)] = 'Sábado - $'.  money_format('%.2n', $values['Saturday']);
                $data[6][str_replace(' ', '_', $sucursal)] = 'Domingo - $'.  money_format('%.2n', $values['Sunday']);
            }
            
            //El arreglo que regresamos
            $json_data = array(
                'order' => $order_column,
                "draw"            => (int)$post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => 7,
                "data"            => $data
            );
            
            if($post_data['btn'] == 'excel')
            {
                $phpreport = new \Application\Shared\PHPReport();
                $phpreport->load(array(
                    array(
                        'id' => 'reporte',
                        'repeat' => true,
                        'data' => $data,
                        'minRows' => 2,
                    )
                ));
                $base_64 = $phpreport->render('excel2003','reporte_venta',true);
                $json_data['base64'] = $base_64;
            }

            if(count($json_data['data']) > 0){
                $index = count($json_data['data']) -1;
                if($post_data['btn'] == 'excel'){
                    
                    $phpreport = new \Application\Shared\PHPReport();
                    $phpreport->load(array(
                    array(
                           'id' => 'reporte',
                           'repeat' => true,
                           'data' => $data,
                           'minRows' => 2,
                       )));
                    $base_64 = $phpreport->render('excel2003','reporte_venta',true);
                    $json_data['data'][$index]['base64'] = $base_64;
                    $json_data['output'] = 'excel';
                    
                    
                }
            }
            return $this->getResponse()->setContent(json_encode($json_data));


        }

        //traer las sucursales
        $generales = \SucursalQuery::create()->find();
        $sucursal_array = array();

        foreach ($generales as $value){

            $sucursal_array[$value->getIdsucursal()] = $value->getSucursalNombrecomercial();
        }

        $form = new \Application\Reporte\Form\MasVendidosForm();


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/administracion/bodega/ventasDia/ver');

        $view_model->setVariables(array(
            'form' => $form,
            'sucursales' => $sucursal_array
        ));

        return $view_model;
    }

    public function ventasHoraAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data  = $request->getPost();
            $query = new \VentaQuery();
            $query->filterByVentaFecha(array('min'=>str_replace('/', '-', $post_data['desde']) ,'max'=>str_replace('/', '-', $post_data['hasta'])));


            $query->useSucursalQuery('a')->endUse();
            $query->withColumn('a.SucursalNombrecomercial', 'sucursal_nombrecomercial');

            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            

            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();
            
            $temp = array();
            
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                //obtenemos el tiempo
                $time = explode(' ', $value['venta_fecha'])[1];
                //obtenemos lahora
                $hour = explode(':', $time)[0];


                
                //verificamos si ya se agregò informaciòn
                if(isset($temp[$value['sucursal_nombrecomercial']][$hour])) {
                    //sumamos la cantidad
                    $temp[$value['sucursal_nombrecomercial']][$hour] = $temp[$value['sucursal_nombrecomercial']][$hour] + $value['venta_total'];
                } else {
                     $temp[$value['sucursal_nombrecomercial']][$hour] =  $value['venta_total'];
                }
 
            }   
            

            //iteramos sobre cada sucursal para obtener su valor
            foreach ($temp as $sucursal => $values) {
                $data[0][str_replace(' ', '_', $sucursal)] = '9:00 am - 9:59 am  - $'.  money_format('%.2n', $values[9]);
                $data[1][str_replace(' ', '_', $sucursal)] = '10:00 am - 10:59 am  - $'.  money_format('%.2n', $values[10]);
                $data[2][str_replace(' ', '_', $sucursal)] = '11:00 am - 11:59 am  - $'.  money_format('%.2n', $values[11]);
                $data[3][str_replace(' ', '_', $sucursal)] = '12:00 pm - 12:59 pm  - $'.  money_format('%.2n', $values[12]);
                $data[4][str_replace(' ', '_', $sucursal)] = '1:00 pm - 1:59 pm  - $'.  money_format('%.2n', $values[13]);
                $data[5][str_replace(' ', '_', $sucursal)] = '2:00 pm - 2:59 pm  - $'.  money_format('%.2n', $values[14]);
                $data[6][str_replace(' ', '_', $sucursal)] = '3:00 pm - 3:59 pm  - $'.  money_format('%.2n', $values[15]);
                $data[7][str_replace(' ', '_', $sucursal)] = '4:00 pm - 4:59 pm  - $'.  money_format('%.2n', $values[16]);
                $data[8][str_replace(' ', '_', $sucursal)] = '5:00 pm - 9:59 pm  - $'.  money_format('%.2n', $values[17]);
                $data[9][str_replace(' ', '_', $sucursal)] = '6:00 pm - 6:59 pm  - $'.  money_format('%.2n', $values[18]);
                $data[10][str_replace(' ', '_', $sucursal)] = '7:00 pm - 7:59 pm  - $'.  money_format('%.2n', $values[19]);
                $data[11][str_replace(' ', '_', $sucursal)] = '8:00 pm - 8:59 pm  - $'.  money_format('%.2n', $values[20]);
            }

            
            //El arreglo que regresamos
            $json_data = array(
                'order' => $order_column,
                "draw"            => (int)$post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => 7,
                "data"            => $data
            );
            
            if($post_data['btn'] == 'excel')
            {
                $phpreport = new \Application\Shared\PHPReport();
                $phpreport->load(array(
                    array(
                        'id' => 'reporte',
                        'repeat' => true,
                        'data' => $data,
                        'minRows' => 2,
                    )
                ));
                $base_64 = $phpreport->render('excel2003','reporte_venta',true);
                $json_data['base64'] = $base_64;
            }

            if(count($json_data['data']) > 0){
                $index = count($json_data['data']) -1;
                if($post_data['btn'] == 'excel'){
                    
                    $phpreport = new \Application\Shared\PHPReport();
                    $phpreport->load(array(
                    array(
                           'id' => 'reporte',
                           'repeat' => true,
                           'data' => $data,
                           'minRows' => 2,
                       )));
                    $base_64 = $phpreport->render('excel2003','reporte_venta',true);
                    $json_data['data'][$index]['base64'] = $base_64;
                    $json_data['output'] = 'excel';
                    
                    
                }
            }
            return $this->getResponse()->setContent(json_encode($json_data));


        }

        //traer las sucursales
        $generales = \SucursalQuery::create()->find();
        $sucursal_array = array();

        foreach ($generales as $value){

            $sucursal_array[$value->getIdsucursal()] = $value->getSucursalNombrecomercial();
        }

        $form = new \Application\Reporte\Form\MasVendidosForm();


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/administracion/bodega/ventasHora/ver');

        $view_model->setVariables(array(
            'form' => $form,
            'sucursales' => $sucursal_array
        ));

        return $view_model;
    }


    public function medidasMasVendidasAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){


            $post_data = $request->getPost();

            //convertir la fecha
            $temp = explode('/',$post_data['desde']);


            $post_data['desde'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 00:00:00';

            $temp = explode('/',$post_data['hasta']);
            $post_data['hasta'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 23:59:59';



            $query = new \VentadetalleQuery();
            

            $query->useVentaQuery('vq')->filterByVentaFecha(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByVentaEstatuspago(1)->endUse();


            $query->useVentaQuery('vq')->useSucursalQuery('d')->endUse()->endUse();

            $query->useProductovarianteQuery('b')->useProductoQuery('c')->endUse()->endUse();

            $query->withColumn('c.ProductoModelo', 'nombre_producto');
            $query->withColumn('b.ProductovarianteTalla', 'talla_producto');
            $query->withColumn('b.Idproductovariante', 'id_pv');
            $query->withColumn('SUM(ventadetalle_cantidad)','cantidad_producto')->orderBy('cantidad_producto',\Criteria::DESC);
            $query->withColumn('d.SucursalNombrecomercial', 'sucursal_nombre');
            $query->withColumn('vq.Idsucursal', 'idsucursal');

            $query->groupBy("b.Idproductovariante");
            $query->groupBy("d.Idsucursal");




            
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
               
                
                $c1= $c->getNewCriterion('producto.producto_modelo', '%'.$search_value.'%', \Criteria::LIKE);



                $query->addAnd($c1);

              


                $records_filtered = $query->count();
                
            }
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->articulos_map[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if($dir == 'desc'){
                $query->orderBy($order_column,  \Criteria::DESC);
            }else{
                $query->orderBy($order_column,  \Criteria::ASC);
            }
            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $temp = array();
            $query->orderBy('cantidad_producto',  \Criteria::ASC);
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                $pv = \ProductovarianteQuery::create()->findPk($value['id_pv']);
                if($pv->getIdproducto() == $post_data['producto'])
                {
                    $tmp['DT_RowId'] = $value['idventa'];
                    $tmp['nombre_producto'] = $value['nombre_producto'];
                    $tmp['cantidad_producto'] = $value['cantidad_producto'];
                    $tmp['talla_producto'] = $value['talla_producto'];
                    $temp[$value['sucursal_nombre']][] = $tmp;
                }
                
 
            }   


            $data = array();
            foreach ($temp as $key => $value) {
                foreach ($value as $sucursal) {
                    $data[str_replace(' ', '_', $key)][] = $sucursal['nombre_producto'] . " ".$sucursal['talla_producto'].' - ' . $sucursal['cantidad_producto'] . " pares"; 
                }
                
            }


            $newData = [];
            foreach ($data as $index => $info) {
                $i = 0; 

                for(;$i<5;$i++)
                {
                    $newData[$i][$index] = $info[$i];

                }
                
            }

            


            //El arreglo que regresamos
            $json_data = array(
                'order' => $order_column,
                "draw"            => (int)$post_data['draw'],
                //"recordsTotal"    => 100,
                "recordsFiltered" => 5,
                "data"            => $newData
            );
            
            if($post_data['btn'] == 'excel')
            {
                $phpreport = new \Application\Shared\PHPReport();
                $phpreport->load(array(
                    array(
                        'id' => 'reporte',
                        'repeat' => true,
                        'data' => $data,
                        'minRows' => 2,
                    )
                ));
                $base_64 = $phpreport->render('excel2003','reporte_contrarecibo',true);
                $json_data['base64'] = $base_64;
            }

            if(count($json_data['data']) > 0){
                $index = count($json_data['data']) -1;
                if($post_data['btn'] == 'excel'){
                    
                    $phpreport = new \Application\Shared\PHPReport();
                    $phpreport->load(array(
                    array(
                           'id' => 'reporte',
                           'repeat' => true,
                           'data' => $data,
                           'minRows' => 2,
                       )));
                    $base_64 = $phpreport->render('excel2003','reporte_contrarecibo',true);
                    $json_data['data'][$index]['base64'] = $base_64;
                    $json_data['output'] = 'excel';
                    
                    
                }
            }
            return $this->getResponse()->setContent(json_encode($json_data));
        }

        //traer los productos
        $generales = \ProductoQuery::create()->find();
        $producto_array = array();

        foreach ($generales as $value){

            $producto_array[$value->getIdproducto()] = $value->getProductoModelo();
        }

        //traer las sucursales
        $generales = \SucursalQuery::create()->find();
        $sucursal_array = array();

        foreach ($generales as $value){

            $sucursal_array[$value->getIdsucursal()] = $value->getSucursalNombrecomercial();
        }

        $form = new \Application\Reporte\Form\MasVendidosForm();


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/administracion/bodega/medidasMasVendidas/ver');

        $view_model->setVariables(array(
            'form' => $form,
            'productos' => $producto_array,
            'sucursales' =>$sucursal_array
        ));

        return $view_model;
    }


}
