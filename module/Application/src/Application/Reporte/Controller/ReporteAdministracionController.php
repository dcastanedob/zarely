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

class ReporteAdministracionController extends AbstractActionController
{
    public $column_map = array(
        0 => 'b.ProductoModelo',
        1 => 'c.MarcaNombre',
        2 => 'ventadetalle_cantidad',
        3 => 'ventadetalle_subtotal',
    );

    public $proveedor_map = array(
        0 => 'a.ProveedorNombrecomercial',
        1 => 'b.MarcaNombre',
    );

    public $proveedor_pedido_map = array(
        0 => 'a.ClienteNombre',
        1 => 'Idpedidomayorista',
        2 => 'PedidomayoristaFechasolicitud',
        3 => 'PedidomayoristaEstatus'
    );

    public $sucursal_map = array(
        0 => 'd.ProveedorNombrecomercial',
        1 => 'b.ProductoModelo',
        2 => 'ventadetalle_cantidad'
    );





	public function modelosMasVendidosAction()
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

            $query->useVentaQuery()->filterByVentaFecha(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByVentaTipo('venta')->filterByVentaEstatuspago(1)->filterByVentaEstatus('completada')->endUse();

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
        $view_model->setTemplate('application/reporte/administracion/modelosMasVendidos/ver');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
	}

    public function lineaMasVendidaAction()
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
            
            $query->useProductovarianteQuery('a')->useProductoQuery('b')->useProveedorQuery('d')->endUse()->useProductotallajeQuery('pt')->useTallajeQuery('t')->endUse()->endUse()->useMarcaQuery('c')->endUse()->endUse()->endUse();
			

            $query->useVentaQuery()->filterByVentaFecha(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByVentaTipo('venta')->filterByVentaEstatuspago(1)->filterByVentaEstatus('completada')->endUse();

           

            $query->withColumn('b.ProductoModelo', 'producto_nombre');
            $query->withColumn('d.ProveedorNombrecomercial', 'proveedor_nombre');
            $query->withColumn('c.MarcaNombre', 'producto_marca');
            $query->withColumn('t.TallajeNombre', 'tallaje_nombre');
            $query->withColumn('SUM(ventadetalle_cantidad)','ventadetalle_cantidad_total');
            


            $query->groupBy("t.Idtallaje");

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
                $tmp['tallaje_nombre'] = $value['tallaje_nombre'];
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
        $view_model->setTemplate('application/reporte/administracion/lineasMasVendidas/ver');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
    }

    public function marcasProveedorAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){

            //Creamos una instancia de la sesión
            $user = new \Application\Session\AouthSession();
            $user = $user->getData();

            $post_data = $request->getPost();
            

            $query = new \ProductoQuery();
            
            $query->useProveedorQuery('a')->endUse();
            $query->useMarcaQuery('b')->endUse();

           

            $query->withColumn('a.ProveedorNombrecomercial', 'proveedor_nombre');
            $query->withColumn('b.MarcaNombre', 'producto_marca');

            $query->groupByIdmarca();

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
               
                
                $c1= $c->getNewCriterion('marca.marca_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                
                $c2= $c->getNewCriterion('proveedor.proveedor_nombrecomercial', '%'.$search_value.'%', \Criteria::LIKE);

                $c1->addOr($c2);

                $query->addAnd($c1);

              


                $records_filtered = $query->count();
                
            }

            //LIMIT
            $query->setOffset((int)$post_data['start']);
            $query->setLimit((int)$post_data['length']);
            
            
            //ORDER
            $order_column = $post_data['order'][0]['column'];
            $order_column = $this->proveedor_map[$order_column];
            $dir = $post_data['order'][0]['dir'];
            if($dir == 'desc'){
                $query->orderBy($order_column,  \Criteria::DESC);
            }else{
                $query->orderBy($order_column,  \Criteria::ASC);
            }

            
            
            //DAMOS EL FORMATO PARA EL PLUGIN (DATATABLE)
            $data = array();
            

        
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                
                $tmp['DT_RowId'] = $value['idventadetalle'];
                $tmp['proveedor_nombre'] = $value['proveedor_nombre'];


                $tmp['producto_marca'] = $value['producto_marca'];

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

        

       


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/administracion/marcasProveedor/ver');

        

        return $view_model;
    }


    public function pedidosProveedorAction()
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
            

            
            $query->filterByPedidomayoristaFechasolicitud(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByPedidomayoristaEstatus($post_data['estatus'],\Criteria::IN);


            $query->withColumn('a.ClienteNombre', 'cliente_nombre');
            

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

                $c2= $c->getNewCriterion('pedidomayorista.pedidomayorista_estatus', '%'.$search_value.'%', \Criteria::LIKE);
                

                $c1->addOr($c2);

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

                $tmp['pedidomayorista_fechasolicitud'] = $value['pedidomayorista_fechasolicitud'];
                $tmp['pedidomayorista_estatus'] = $value['pedidomayorista_estatus'];

                

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
        $view_model->setTemplate('application/reporte/administracion/pedidosProveedor/ver');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
    }


    public function pedidosCompletadosProveedorAction()
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
            

            
            $query->filterByPedidomayoristaFechasolicitud(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByPedidomayoristaEstatus('completado');


            $query->withColumn('a.ClienteNombre', 'cliente_nombre');
            

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

                $c2= $c->getNewCriterion('pedidomayorista.pedidomayorista_estatus', '%'.$search_value.'%', \Criteria::LIKE);
                

                $c1->addOr($c2);

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
        $view_model->setTemplate('application/reporte/administracion/pedidosCompletados/ver');

        $view_model->setVariables(array(
            'form' => $form,
        ));

        return $view_model;
    }

    public function pedidosSolicitadosProveedorAction()
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
            

            
            $query->filterByPedidomayoristaFechasolicitud(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByPedidomayoristaEstatus('solicitado');


            $query->withColumn('a.ClienteNombre', 'cliente_nombre');
            

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

                $c2= $c->getNewCriterion('pedidomayorista.pedidomayorista_estatus', '%'.$search_value.'%', \Criteria::LIKE);
                

                $c1->addOr($c2);

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
        $view_model->setTemplate('application/reporte/administracion/pedidosSolicitados/ver');

        $view_model->setVariables(array(
            'form' => $form,
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
            
            $query->useProductovarianteQuery('a')->useProductoQuery('b')->useProveedorQuery('d')->endUse()->endUse()->endUse();

            $query->useVentaQuery()->filterByVentaFecha(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByVentaTipo('venta')->filterByVentaEstatuspago(1)->filterByVentaEstatus('completada')->filterByIdsucursal($post_data['sucursal'],\Criteria::IN)->endUse();


            $query->withColumn('b.ProductoModelo', 'producto_nombre');
            $query->withColumn('d.ProveedorNombrecomercial', 'proveedor_nombre');
            $query->withColumn('SUM(ventadetalle_cantidad)','ventadetalle_cantidad_total');


            $query->groupBy("b.Idproducto");

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
            $order_column = $this->sucursal_map[$order_column];
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

        //traer las sucursales
        $generales = \SucursalQuery::create()->find();
        $sucursal_array = array();

        foreach ($generales as $value){

            $sucursal_array[$value->getIdsucursal()] = $value->getSucursalNombrecomercial();
        }

        $form = new \Application\Reporte\Form\MasVendidosForm();


        $view_model = new ViewModel();
        $view_model->setTemplate('application/reporte/administracion/masVendidosSucursal/ver');

        $view_model->setVariables(array(
            'form' => $form,
            'sucursales' => $sucursal_array
        ));

        return $view_model;
    }

    


}
