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

class ReporteAdministracionRemisionController extends AbstractActionController
{
    public $cliente_venta_array = array(
        0 => 'a.ClienteNombre',
        1 => 'Idventa',
        2 => 'VentaTotal',
        3 => 'VentaFecha',
        4 => 'VentaEstatus'
    );

    public $proveedor_compra_array = array(
        0 => 'a.ProveedorNombrecomercial',
        1 => 'Idcompra',
        2 => 'CompraTotal',
        3 => 'CompraFechacompra',
        4 => 'CompraEstatus'
    );

    public function emitidasAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){

            
            $post_data = $request->getPost();
            //convertir la fecha
            $temp = explode('/',$post_data['desde']);

            $post_data['desde'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 00:00:00';

            $temp = explode('/',$post_data['hasta']);
            $post_data['hasta'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 23:59:59';

            $query = new \VentaQuery();

            $query->filterByVentaFecha(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByVentaEstatuspago($post_data['estatus'],\Criteria::IN);


            $query->useClienteQuery('a')->filterByClienteTipo('mayorista')->endUse();
                
            $query->withColumn('a.ClienteNombre', 'cliente_nombre');
            $query->withColumn('a.ClienteApaterno', 'cliente_apaterno');
            $query->withColumn('a.ClienteAmaterno', 'cliente_amaterno');

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
               
                
                $c1= $c->getNewCriterion('cliente.cliente_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                $c2= $c->getNewCriterion('cliente.cliente_apaterno', '%'.$search_value.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('cliente.cliente_amaterno', '%'.$search_value.'%', \Criteria::LIKE);
                

                $c1->addOr($c2)->addOr($c3);

                $query->addAnd($c1);

              
                $query->groupByIdventa();

                $records_filtered = $query->count();
                
            }
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->cliente_venta_array[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if($dir == 'desc'){
                $query->orderBy($order_column,  \Criteria::DESC);
            }else{
                $query->orderBy($order_column,  \Criteria::ASC);
            }
            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();
            
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                $tmp['DT_RowId'] = $value['idcliente'];
                $tmp['cliente_nombre'] = $value['cliente_nombre'] . ' ' .$value['cliente_apaterno'] . ' ' . $value['cliente_amaterno'];
                $tmp['venta_total'] = $value['venta_total'];

                $tmp['idventa'] = $value['idventa'];
                $tmp['venta_fecha'] = $value['venta_fecha'];
                if($value['venta_estatuspago'])
                    $tmp['venta_estatus'] = 'Pagada';
                else
                    $tmp['venta_estatus'] = 'No pagada';

                

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
        $view_model->setTemplate('application/reporte/administracion/remision/emitidas/ver');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
    }




    public function entregadasAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){

            
            $post_data = $request->getPost();
            //convertir la fecha
            $temp = explode('/',$post_data['desde']);

            $post_data['desde'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 00:00:00';

            $temp = explode('/',$post_data['hasta']);
            $post_data['hasta'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 23:59:59';

            $query = new \CompraQuery();

            $query->filterByCompraFechacompra(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByCompraEstatuspago($post_data['estatus'],\Criteria::IN);


            $query->useProveedorQuery('a')->endUse();
                
            $query->withColumn('a.ProveedorNombrecomercial', 'proveedor_nombre');

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
               
                
                $c1= $c->getNewCriterion('proveedor.proveedor_nombrecomercial', '%'.$search_value.'%', \Criteria::LIKE);



                $query->addAnd($c1);

              
                $query->groupByIdcompra();

                $records_filtered = $query->count();
                
            }
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->proveedor_compra_array[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if($dir == 'desc'){
                $query->orderBy($order_column,  \Criteria::DESC);
            }else{
                $query->orderBy($order_column,  \Criteria::ASC);
            }
            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();
            
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                $tmp['DT_RowId'] = $value['idcompra'];
                $tmp['proveedor_nombre'] = $value['proveedor_nombre'];
                $tmp['compra_total'] = $value['compra_total'];

                $tmp['idcompra'] = $value['idcompra'];
                $tmp['compra_fecha'] = $value['compra_fechacompra'];
                if($value['compra_estatuspago'])
                    $tmp['compra_estatus'] = 'Pagada';
                else
                    $tmp['compra_estatus'] = 'No pagada';

                

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
        $view_model->setTemplate('application/reporte/administracion/remision/entregadas/ver');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
    }


    public function pagadasProveedorAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){

            
            $post_data = $request->getPost();
            //convertir la fecha
            $temp = explode('/',$post_data['desde']);

            $post_data['desde'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 00:00:00';

            $temp = explode('/',$post_data['hasta']);
            $post_data['hasta'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 23:59:59';

            $query = new \CompraQuery();

            $query->filterByCompraFechacompra(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByCompraEstatuspago(1);


            $query->useProveedorQuery('a')->endUse();
                
            $query->withColumn('a.ProveedorNombrecomercial', 'proveedor_nombre');

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
               
                
                $c1= $c->getNewCriterion('proveedor.proveedor_nombrecomercial', '%'.$search_value.'%', \Criteria::LIKE);



                $query->addAnd($c1);

              
                $query->groupByIdcompra();

                $records_filtered = $query->count();
                
            }
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->proveedor_compra_array[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if($dir == 'desc'){
                $query->orderBy($order_column,  \Criteria::DESC);
            }else{
                $query->orderBy($order_column,  \Criteria::ASC);
            }
            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();
            
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                $tmp['DT_RowId'] = $value['idcompra'];
                $tmp['proveedor_nombre'] = $value['proveedor_nombre'];
                $tmp['compra_total'] = $value['compra_total'];

                $tmp['idcompra'] = $value['idcompra'];
                $tmp['compra_fecha'] = $value['compra_fechacompra'];
                if($value['compra_estatuspago'])
                    $tmp['compra_estatus'] = 'Pagada';
                else
                    $tmp['compra_estatus'] = 'No pagada';

                

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
        $view_model->setTemplate('application/reporte/administracion/remision/pagadasProveedores/ver');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
    }




    public function pagadasClienteAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){

            
            $post_data = $request->getPost();
            //convertir la fecha
            $temp = explode('/',$post_data['desde']);

            $post_data['desde'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 00:00:00';

            $temp = explode('/',$post_data['hasta']);
            $post_data['hasta'] = $temp[2] . '-' . $temp[1] . '-' . $temp[0] . ' 23:59:59';

            $query = new \VentaQuery();

            $query->filterByVentaFecha(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByVentaEstatuspago(1);


            $query->useClienteQuery('a')->filterByClienteTipo('mayorista')->endUse();
                
            $query->withColumn('a.ClienteNombre', 'cliente_nombre');
            $query->withColumn('a.ClienteApaterno', 'cliente_apaterno');
            $query->withColumn('a.ClienteAmaterno', 'cliente_amaterno');

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
               
                
                $c1= $c->getNewCriterion('cliente.cliente_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                $c2= $c->getNewCriterion('cliente.cliente_apaterno', '%'.$search_value.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('cliente.cliente_amaterno', '%'.$search_value.'%', \Criteria::LIKE);
                

                $c1->addOr($c2)->addOr($c3);

                $query->addAnd($c1);

              
                $query->groupByIdventa();

                $records_filtered = $query->count();
                
            }
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->cliente_venta_array[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if($dir == 'desc'){
                $query->orderBy($order_column,  \Criteria::DESC);
            }else{
                $query->orderBy($order_column,  \Criteria::ASC);
            }
            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();
            
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                $tmp['DT_RowId'] = $value['idcliente'];
                $tmp['cliente_nombre'] = $value['cliente_nombre'] . ' ' .$value['cliente_apaterno'] . ' ' . $value['cliente_amaterno'];
                $tmp['venta_total'] = $value['venta_total'];

                $tmp['idventa'] = $value['idventa'];
                $tmp['venta_fecha'] = $value['venta_fecha'];
                if($value['venta_estatuspago'])
                    $tmp['venta_estatus'] = 'Pagada';
                else
                    $tmp['venta_estatus'] = 'No pagada';

                

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
        $view_model->setTemplate('application/reporte/administracion/remision/pagadasClientes/ver');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
    }


}
