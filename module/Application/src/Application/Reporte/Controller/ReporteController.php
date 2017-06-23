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

class ReporteController extends AbstractActionController
{
    public $column_map = array(
        0 => 'b.ProductoModelo',
        1 => 'c.MarcaNombre',
        2 => 'ventadetalle_cantidad'
    );


    public $column_map_ventas = array(
        0 => 'VentaFecha',
        1 => 'VentaTipo',
        2 => 'b.EmpleadoNombre',
        3 => 'a.ClienteNombre',
        4 => 'VentaTotal', 
        5 => 'VentaEstatus'

    );


	public function masvendidosAction()
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
            
            $query->useProductovarianteQuery('a')->useProductoQuery('b')->useMarcaQuery('c')->endUse()->endUse()->endUse();

            $query->useVentaQuery()->filterByVentaFecha(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByVentaTipo('venta')->filterByVentaEstatuspago(1)->filterByVentaEstatus('completada')->endUse();

            $query->useProductovarianteQuery()->useProductoQuery()->useMarcaQuery()->filterByIdMarca($post_data['marcas'],\Criteria::IN)->endUse()->endUse()->endUse();

            $query->withColumn('b.ProductoModelo', 'producto_nombre');
            $query->withColumn('c.MarcaNombre', 'producto_marca');
            $query->withColumn('SUM(ventadetalle_cantidad)','ventadetalle_cantidad_total');

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
            $order_column = $this->column_map[$order_column];
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

                $tmp['producto_marca'] = $value['producto_marca'];

                $tmp['ventadetalle_cantidad'] = $value['ventadetalle_cantidad_total'];
                
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

        $marcas = \MarcaQuery::create()->find();
        $marcas_array = array();
        $value = new \Tallaje();
        foreach ($marcas as $marca){
            $marcas_array[$marca->getIdmarca()] = $marca->getMarcaNombre();
        }

        $form = new \Application\Reporte\Form\MasVendidosForm($marcas_array);


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/masVendidos/ver');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
	}

    public function mascreditosAction()
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
            
            $query->useProductovarianteQuery('a')->useProductoQuery('b')->useMarcaQuery('c')->endUse()->endUse()->endUse();

            $query->useVentaQuery()->filterByVentaFecha(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByVentaTipo('credito')->filterByVentaEstatuspago(1)->filterByVentaEstatus('completada')->endUse();

            $query->useProductovarianteQuery()->useProductoQuery()->useMarcaQuery()->filterByIdMarca($post_data['marcas'],\Criteria::IN)->endUse()->endUse()->endUse();

            $query->withColumn('b.ProductoModelo', 'producto_nombre');
            $query->withColumn('c.MarcaNombre', 'producto_marca');
            $query->withColumn('SUM(ventadetalle_cantidad)','ventadetalle_cantidad_total');

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
            $order_column = $this->column_map[$order_column];
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

                $tmp['producto_marca'] = $value['producto_marca'];

                $tmp['ventadetalle_cantidad'] = $value['ventadetalle_cantidad_total'];
                
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

        $marcas = \MarcaQuery::create()->find();
        $marcas_array = array();
        $value = new \Tallaje();
        foreach ($marcas as $marca){
            $marcas_array[$marca->getIdmarca()] = $marca->getMarcaNombre();
        }

        $form = new \Application\Reporte\Form\MasVendidosForm($marcas_array);


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/masCreditos/ver');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
    }

    public function masapartadosAction()
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
            
            $query->useProductovarianteQuery('a')->useProductoQuery('b')->useMarcaQuery('c')->endUse()->endUse()->endUse();

            $query->useVentaQuery()->filterByVentaFecha(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByVentaTipo('apartado')->filterByVentaEstatuspago(1)->filterByVentaEstatus('completada')->endUse();

            $query->useProductovarianteQuery()->useProductoQuery()->useMarcaQuery()->filterByIdMarca($post_data['marcas'],\Criteria::IN)->endUse()->endUse()->endUse();

            $query->withColumn('b.ProductoModelo', 'producto_nombre');
            $query->withColumn('c.MarcaNombre', 'producto_marca');
            $query->withColumn('SUM(ventadetalle_cantidad)','ventadetalle_cantidad_total');

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
            $order_column = $this->column_map[$order_column];
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

                $tmp['producto_marca'] = $value['producto_marca'];

                $tmp['ventadetalle_cantidad'] = $value['ventadetalle_cantidad_total'];
                
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

        $marcas = \MarcaQuery::create()->find();
        $marcas_array = array();
        $value = new \Tallaje();
        foreach ($marcas as $marca){
            $marcas_array[$marca->getIdmarca()] = $marca->getMarcaNombre();
        }

        $form = new \Application\Reporte\Form\MasVendidosForm($marcas_array);


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/masApartados/ver');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
    }


    public function ventasAction()
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
            
            $query->useClienteQuery('a')->endUse();
            $query->useEmpleadoRelatedByIdempleadovendedorQuery('b')->endUse();

            
            $query->filterByVentaFecha(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByVentaTipo($post_data['tipo'],\Criteria::IN)->filterByVentaEstatuspago($post_data['estatus'],\Criteria::IN)->filterByIdempleadovendedor($post_data['vendedor'],\Criteria::IN);


            $query->withColumn('a.ClienteNombre', 'cliente_nombre');
            $query->withColumn('a.ClienteAmaterno', 'cliente_materno');
            $query->withColumn('a.ClienteApaterno', 'cliente_paterno');

            $query->withColumn('b.EmpleadoNombre', 'empleado_nombre');
            $query->withColumn('b.EmpleadoAmaterno', 'empleado_materno');
            $query->withColumn('b.EmpleadoApaterno', 'empleado_paterno');

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
               
                
                $c1= $c->getNewCriterion('venta.idventa', '%'.$search_value.'%', \Criteria::LIKE);

                $c2= $c->getNewCriterion('venta.venta_tipo', '%'.$search_value.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('cliente.cliente_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                $c4= $c->getNewCriterion('empleado.empleado_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                $c5= $c->getNewCriterion('venta.venta_total', '%'.$search_value.'%', \Criteria::LIKE);
                $c6= $c->getNewCriterion('venta.venta_estatus', '%'.$search_value.'%', \Criteria::LIKE);

                $c1->addOr($c2)->addOr($c3)->addOr($c4)->addOr($c5)->addOr($c6);

                $query->addAnd($c1);

              


                $records_filtered = $query->count();
                
            }
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->column_map_ventas[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if($dir == 'desc'){
                $query->orderBy($order_column,  \Criteria::DESC);
            }else{
                $query->orderBy($order_column,  \Criteria::ASC);
            }

            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();
            
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){

                $tmp['DT_RowId'] = $value['idventa'];
                $tmp['idventa'] = $value['idventa'];
                $tmp['venta_fecha'] = $value['venta_fecha'];
                $tmp['venta_tipo'] = $value['venta_tipo'];

                $tmp['vendedor'] = $value['empleado_nombre'] . " " . $value['empleado_paterno'] . " " . $value['empleado_materno'] ;

                $tmp['cliente'] = $value['cliente_nombre'] . " " . $value['cliente_paterno'] . " " . $value['cliente_materno'] ;


                $tmp['venta_total'] = $value['venta_total'];
                
                $tmp['venta_estatus'] = $value['venta_estatus'];

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
        $view_model->setTemplate('application/reporte/ventas/ver');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
    }



    public function porPagarAction()
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
            
            $query->useClienteQuery('a')->endUse();
            $query->useEmpleadoRelatedByIdempleadovendedorQuery('b')->endUse();

            
            $query->filterByVentaFecha(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByVentaTipo($post_data['tipo'],\Criteria::IN)->filterByVentaEstatuspago(0)->filterByIdempleadovendedor($post_data['vendedor'],\Criteria::IN);


            $query->withColumn('a.ClienteNombre', 'cliente_nombre');
            $query->withColumn('a.ClienteAmaterno', 'cliente_materno');
            $query->withColumn('a.ClienteApaterno', 'cliente_paterno');

            $query->withColumn('b.EmpleadoNombre', 'empleado_nombre');
            $query->withColumn('b.EmpleadoAmaterno', 'empleado_materno');
            $query->withColumn('b.EmpleadoApaterno', 'empleado_paterno');

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
               
                
                $c1= $c->getNewCriterion('venta.idventa', '%'.$search_value.'%', \Criteria::LIKE);

                $c2= $c->getNewCriterion('venta.venta_tipo', '%'.$search_value.'%', \Criteria::LIKE);
                $c3= $c->getNewCriterion('cliente.cliente_nombre', '%'.$search_value.'%', \Criteria::LIKE);
                $c4= $c->getNewCriterion('empleado.empleado_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                $c5= $c->getNewCriterion('venta.venta_total', '%'.$search_value.'%', \Criteria::LIKE);
                $c6= $c->getNewCriterion('venta.venta_estatus', '%'.$search_value.'%', \Criteria::LIKE);

                $c1->addOr($c2)->addOr($c3)->addOr($c4)->addOr($c5)->addOr($c6);

                $query->addAnd($c1);

              
                $query->groupByIdventa();

                $records_filtered = $query->count();
                
            }
            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->column_map_ventas[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if($dir == 'desc'){
                $query->orderBy($order_column,  \Criteria::DESC);
            }else{
                $query->orderBy($order_column,  \Criteria::ASC);
            }

            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();
            
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){

                $tmp['DT_RowId'] = $value['idventa'];
                $tmp['idventa'] = $value['idventa'];

                $tmp['venta_fecha'] = $value['venta_fecha'];
                $tmp['venta_fechavencimiento'] = date('Y-m-d',strtotime("+1 month"));
                $tmp['venta_tipo'] = $value['venta_tipo'];

                $tmp['vendedor'] = $value['empleado_nombre'] . " " . $value['empleado_paterno'] . " " . $value['empleado_materno'] ;

                $tmp['cliente'] = $value['cliente_nombre'] . " " . $value['cliente_paterno'] . " " . $value['cliente_materno'] ;

                $tmp['venta_folio'] = $value['idventa'];

                //calcular saldo restante
                $pagos = \VentapagoQuery::create()->filterByIdventa($value['idventa'])->find();
                $totalAlMomento = 0;
                if($pagos != null)
                {
                    
                    foreach ($pagos->toArray() as $index => $pago) {
                        $totalAlMomento+=$pago['VentapagoCantidad'];
                    }
                }

                $tmp['venta_adeudo'] ="$" . ($value['venta_total'] - $totalAlMomento);

                $tmp['venta_total'] = $value['venta_total'];
                

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
        $view_model->setTemplate('application/reporte/porPagar/ver');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
    }


    


}
