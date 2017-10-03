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


}
