<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\PuntoDeVenta\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class PuntoDeVentaController extends AbstractActionController
{

    public $column_map = array(
        0 => 'VentaFecha',
        1 => 'a.ClienteNombre',
        2 => 'VentaEstatuspago',
        3 => 'VentaTipo',
        4 => 'VentaEstatus',
        5 => 'VentaTotal',


    );
    
    public function serversideAction(){

        $request = $this->getRequest();
        
        if ($request->isPost()) {
            
            $post_data = $request->getPost();

            $query = new \VentaQuery();
            
            //Creamos una instancia de la sesión
            $user = new \Application\Session\AouthSession();
            $user = $user->getData();

            $query->useClienteQuery('a')->endUse();

            $query->withColumn('a.ClienteNombre', 'cliente_nombre');
            $query->withColumn('a.ClienteAmaterno', 'cliente_materno');
            $query->withColumn('a.ClienteApaterno', 'cliente_paterno');

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

                $c1= $c->getNewCriterion('venta.idventa', '%'.$search_value.'%', \Criteria::LIKE);

                $c2= $c->getNewCriterion('cliente.cliente_nombre', '%'.$search_value.'%', \Criteria::LIKE);

                $c3= $c->getNewCriterion('venta.venta_estatuspago', '%'.$search_value.'%', \Criteria::LIKE);

                $c4= $c->getNewCriterion('venta.venta_fecha', '%'.$search_value.'%', \Criteria::LIKE);

                $c5= $c->getNewCriterion('venta.venta_tipo', '%'.$search_value.'%', \Criteria::LIKE);

                $c6= $c->getNewCriterion('venta.venta_estatus', '%'.$search_value.'%', \Criteria::LIKE);


                $c1->addOr($c2)->addOr($c3)->addOr($c4)->addOr($c5)->addOr($c6);

                $query->addAnd($c1);
                $query->groupByVentaFecha();

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
                $tmp['DT_RowId'] = $value['idventa'];
                $tmp['idventa'] = $value['idventa'];

                $tmp['venta_fecha'] = $value['venta_fecha'];

                $tmp['cliente_nombre'] = $value['cliente_nombre'] . " " . $value['cliente_paterno'] . " " .$value['cliente_materno'] ;

                if($value['venta_estatuspago'])
                {
                    $tmp['venta_estatuspago'] = '<label class="label label-success">Pagada</label>';;
                }else
                {
                    $tmp['venta_estatuspago'] = '<label class="label label-danger">No pagada</label>';;
                }

                $tmp['venta_tipo'] = $value['venta_tipo'];
                


                $tmp['venta_estatus'] = $value['venta_estatus'];
                 $tmp['venta_total'] = "$" . money_format('%.2n',$value['venta_total']);
                 if($user['idrol'] == 1 || $user['idrol'] == 6)
                 {
                    $tmp['options'] = '<td><div class="btn-group dropdown">
                      <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                        <span class="icon icon-gear icon-lg icon-fw"></span>
                        Opciones
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="/puntodeventa/ver/' . $value['idventa'] . '">
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
                          <a href="/puntodeventa/devoluciones/' . $value['idventa'] . '">
                            <div class="media">
                              <div class="media-left">
                                <span class="icon icon-mail-reply icon-lg icon-fw"></span>
                              </div>
                              <div class="media-body">
                                <span class="d-b">Devoluciones</span>
                               
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
                 }else{
                    $tmp['options'] = '<td><div class="btn-group dropdown">
                      <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                        <span class="icon icon-gear icon-lg icon-fw"></span>
                        Opciones
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="/puntodeventa/devoluciones/' . $value['idventa'] . '">
                            <div class="media">
                              <div class="media-left">
                                <span class="icon icon-mail-reply icon-lg icon-fw"></span>
                              </div>
                              <div class="media-body">
                                <span class="d-b">Devoluciones</span>
                               
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
                 }
                


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
    
    

    public function indexAction()
    {   
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/puntodeventa/index');
        $view_model->setVariables(array(
             'messages' => $this->flashMessenger(),
        ));
        return $view_model;
    }


    public function nuevoAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){

            $post_data = $request->getPost();
            $entity = new \Venta();

            $post_data['venta_fecha'] = date_create_from_format('d/m/Y', $post_data['venta_fecha']);
            
            $user = new \Application\Session\AouthSession();
            $user = $user->getData();
            $post_data['idempleadocajero'] = $user['idempleado'];
            $post_data['venta_estatuspago'] = 0;
            $post_data['venta_estatus'] = "procesando";
            $post_data['idsucursal'] = $user['idsucursal'];
            $post_data['venta_total'] = 0;
            $post_data['venta_subtotal'] = 0;
            $post_data['venta_iva'] = 0;

            $descuentos = [];
            $cantidades = [];
            //obtenemos todos los descuentos y cantidades correspondientes al id
            foreach ($post_data as $key => $value){
                if(\VentaPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }


                if(substr( $key, 0, 9 ) === "descuento")
                {
                    $descuentos[str_replace("descuento", "", $key)] = [];

                    $temp = array(
                        "valor" => $value
                    );
                    array_push($descuentos[str_replace("descuento", "", $key)], $temp);
                }

                if(substr( $key, 0, 8 ) === "cantidad")
                {
                    $cantidades[str_replace("cantidad", "", $key)] = [];
                    
                    $temp = array(
                        "valor" => $value
                    );
                    array_push($cantidades[str_replace("cantidad", "", $key)], $temp);
     
                }
            }

            //verificamos que si existan prodcuctos
            if(count($cantidades) != 0)
            {
                //asignamos el tipo de venta
                $entity->setVentaTipo = $post_data['venta_tipo'];
                $entity->save();

                $total = 0;
                
                foreach ($descuentos as $variante => $value) {
                    //traemos la informacion del producto de la sucursal que estamos
                    $producto_sucursal = \ProductosucursalQuery::create()->filterByIdproductovariante($variante)->filterByIdsucursal($user['idsucursal'])->find()->toArray();

                    if($producto_sucursal != null)
                    {
                        $precioUnitario = money_format('%.2n', $producto_sucursal[0]["ProductosucursalPrecioventa"]);
                        $cantidad = $cantidades[$variante][0]['valor'];
                        $descuento = $value[0]['valor'];
                        $subtotal = ($precioUnitario * $cantidad);
                        $subtotal = $subtotal - ($subtotal * ($descuento/100));
                        
                        $venta_detalle = new \Ventadetalle();
                        $venta_detalle->setIdventa($entity->getIdventa())
                                        ->setIdproductovariante($variante)
                                        ->setVentadetalleCantidad($cantidad)
                                        ->setVentadetalleSubtotal($subtotal)
                                        ->setVentadetallePreciounitario($precioUnitario)
                                        ->setVentadetalleEstatus('completo')
                                        ->setVentadetalleDescuento($descuento)
                                        ->save();
                        $total += $venta_detalle->getVentadetalleSubtotal();

                        
                        

                    }

                }

                if(isset($post_data['id_promocion'])){

                    foreach ($post_data['id_promocion'] as $value) {
                        //traemos la informacion del producto de la sucursal que estamos
                        $producto_sucursal = \ProductosucursalQuery::create()->filterByIdproductovariante($value)->filterByIdsucursal($user['idsucursal'])->find()->toArray();
                        if($producto_sucursal != null)
                        {
                            $precioUnitario = money_format('%.2n', $producto_sucursal[0]["ProductosucursalPrecioventa"]);
                            $cantidad = intval($cantidades[$value][0]['valor'] / 2);
                            $descuento = 150;
                            $subtotal = ($precioUnitario * $cantidad);
                            $subtotal = $subtotal - ($subtotal * ($descuento/100));

                            $venta_detalle = new \Ventadetalle();
                            $venta_detalle->setIdventa($entity->getIdventa())
                                            ->setIdproductovariante($variante)
                                            ->setVentadetalleCantidad($cantidad)
                                            ->setVentadetalleSubtotal($subtotal)
                                            ->setVentadetallePreciounitario($precioUnitario)
                                            ->setVentadetalleEstatus('completo')
                                            ->setVentadetalleDescuento($descuento)
                                            ->save();
                            $total += $venta_detalle->getVentadetalleSubtotal();
                            
                        }
                    }
                }

                //aplicamos la fórmula del iva

                $subtotal = $total / 1.16;
                $iva = $total- $subtotal;
                $entity->setVentaTotal($total)->setVentaSubtotal($subtotal)->setVentaIva($iva)->save();

                

                if($post_data['venta_tipo'] == "credito")
                {
                    //obtenemos el credito del cliente
                    $cliente = \ClienteQuery::create()->findPk($post_data['idcliente']);
                    $credito = $cliente->getClienteCreditorestante();
                    return $this->getResponse()->setContent(json_encode(array('response' => true,'message'=>'Venta realizada','id' =>$entity->getIdventa(),"credito" =>true,"cantidadCredito" => $credito ,'idcliente' => $post_data['idcliente'])));

                }else
                {
                    return $this->getResponse()->setContent(json_encode(array('response' => true,'message'=>'Venta realizada','id' =>$entity->getIdventa(),"credito" =>false)));
                }
                
            }else{
                return $this->getResponse()->setContent(json_encode(array('response' => false)));
            }
            
        

        }

        //traer los proveedores
        $empleados = \EmpleadoQuery::create()->filterByIdrol(5)->find();
        $vendedores_array = array();

        foreach ($empleados as $value){
            $vendedores_array[$value->getIdempleado()] = $value->getEmpleadoNombre()." " . $value->getEmpleadoApaterno() ." " . $value->getEmpleadoAmaterno();
        }

        //traer los clientes
        $clientes = \ClienteQuery::create()->find();
        $clientes_array = array();

        foreach ($clientes as $value){
            $clientes_array[$value->getIdcliente()] = $value->getClienteNombre() ." ". $value->getClienteApaterno() ." ". $value->getClienteAmaterno() ;
        }

        //traer la sesiòn
        $user = new \Application\Session\AouthSession();
        $user = $user->getData();
        
        $venta = \VentaQuery::create()->orderBy('idventa', \Criteria::DESC)->findOne();
        
        $id = null;

        if($venta != null)
        {   $venta = $venta->toArray();
            $id = $venta['Idventa']+1;
        }else{
            $id = 1;
        }
        //traer los productosvariantes
        $variantes = \ProductovarianteQuery::create()->find();

        $productosvariante_array = array();

        foreach ($variantes as $value){
            //traemos la informacion del producto de la sucursal que estamos
            $producto_sucursal = \ProductosucursalQuery::create()->filterByIdproductovariante($value->getIdproductovariante())->filterByIdsucursal($user['idsucursal'])->find()->toArray();

            if($producto_sucursal == null)
            {
                continue;
            }
            //verificamos que tengamos en existena
            if($producto_sucursal[0]["ProductosucursalExistencia"] > 0 )
            {

                $producto = $value->getProducto();
                $color = $value->getProductocolor();
                $color = $color->getColor();
                $material = $value->getProductomaterial();
                $material = $material->getMaterial();
                $tallaje = $value->getProductovarianteTalla();

                $information =$producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre(). ' / ' . $tallaje;

                $productosvariante_array[$value->getIdproductovariante()] = $information;
            }
        }


        //traer los productos generales
        $generales = \ProductoQuery::create()->find();
        $productos_generales_array = array();

        foreach ($generales as $value){

            $productos_generales_array[$value->getIdproducto()] = $value->getProductoModelo();
        }

        


        $form = new \Application\PuntoDeVenta\Form\PuntoDeVentaForm($vendedores_array,$clientes_array,$productosvariante_array,$productos_generales_array,$user,$id);
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/puntodeventa/nuevo');
        $view_model->setVariables(array(
            'form' => $form,
            'id' => $id
        ));
        return $view_model;
        
    }

    public function devolucionesAction()
    {
        $request = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \VentaQuery::create()->filterByIdventa($id)->exists();
        if($exist){
            
            $entity = \VentaQuery::create()->findPk($id);
            if($request->isPost()){
                $post_data = $request->getPost();
            }

            $view_model = new ViewModel();
            $view_model->setTemplate('application/puntodeventa/devoluciones');
            $view_model->setVariables(array(
                'entity' => $entity,
            ));
            return $view_model;

        }else{
            $this->flashMessenger()->addErrorMessage('Id Invalido.');
            return $this->redirect()->toUrl('/puntodeventa');
        }
    }


    public function verAction()
    {
        $request = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \VentaQuery::create()->filterByIdventa($id)->exists();
        
        if($exist){
            
            $entity = \VentaQuery::create()->findPk($id);
            
            if($request->isPost()){
                $post_data = $request->getPost();

                //verificamos que haya cambiado el estatus
                if($entity->getVentaEstatus() == $post_data['venta_estatus'])
                {
                    return $this->redirect()->toUrl('/puntodeventa');
                }else{
                    $entity->setVentaEstatus($post_data['venta_estatus'])->save();
                    //si la venta fue cancelada, regresamos el inventario
                    if($post_data['venta_estatus'] == 'cancelada') {
                        $this->restoreInventory($id);
                    }
                }

                $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
                return $this->redirect()->toUrl('/puntodeventa');
            }
            
                

            $form = new \Application\PuntoDeVenta\Form\PuntoDeVentaVerForm();

            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

            $form->get('venta_fecha')->setValue($entity->getVentaFecha('d/m/Y'));
            $form->get('folio')->setValue($entity->getIdventa());
            $form->get('idempleadocajero')->setValue($entity->getEmpleadoRelatedByIdempleadocajero()->getEmpleadoNombre());

            $form->get('venta_tipo')->setValue($entity->getVentaTipo());
            $form->get('idempleadovendedor')->setValue($entity->getEmpleadoRelatedByIdempleadovendedor()->getEmpleadoNombre());

            $form->get('idcliente')->setValue($entity->getCliente()->getClienteNombre() ." ". $entity->getCliente()->getClienteApaterno() ." ". $entity->getCliente()->getClienteAmaterno());

            if($entity->getVentaEstatuspago())
            {
                $form->get('venta_estatuspago')->setValue("Pagada");
            }
            else{
                $form->get('venta_estatuspago')->setValue("No pagada");
            }

            $view_model = new ViewModel();
            $view_model->setTemplate('application/puntodeventa/ver');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
            ));
            return $view_model;
            
            
        }else{
            $this->flashMessenger()->addErrorMessage('Id Invalido.');
            return $this->redirect()->toUrl('/puntodeventa');
        }
        return $view_model;
    }
    
    private function restoreInventory($id)
    {
        //obtenemos instancia del usuario para saber en que sucursal regresaremos el inventario
        $user = new \Application\Session\AouthSession();
        $user = $user->getData();

        $productos = \VentadetalleQuery::create()->filterByIdventa($id)->find()->toArray();

        foreach ($productos as $producto) {

            $producto_sucursal = \ProductosucursalQuery::create()->filterByIdproductovariante($producto['Idproductovariante'])->filterByIdsucursal($user['idsucursal'])->find()[0];

            $producto_sucursal->setProductosucursalExistencia($producto_sucursal->getProductosucursalExistencia() + $producto['VentadetalleCantidad'])->save();
        }

    }

    public function hacerPagoAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){

            $post_data = $request->getPost();

            //verificamos qeu tenga informacion
            if(count($post_data) > 1)
            {
                $entity = \VentaQuery::Create()->findPk($post_data['id']);

                //Creamos el objeto venta pago
                $venta_pago = new \Ventapago();
                $venta_pago->setIdventa($entity->getIdventa())
                                ->setVentaFecha($entity->getVentaFecha())
                                ->setIdempleado($entity->getIdempleadocajero())
                                ->setVentapagoCantidad($post_data['cantidad'])
                                ->setVentapagoMetododepago($post_data['metodo']);

                //verficiamos si es vales o tarjeta
                if($post_data['metodo'] == 'vales')
                {
                    $venta_pago->setVentapagoReferencia($post_data['referencia']);
                }

                if($post_data['metodo'] == 'tarjeta')
                {
                    $venta_pago->setVentapagoReferencia($post_data['referencia']);
                    $venta_pago->setVentapagoCuatrodigitos($post_data['digitos']);
                }

                //guardamos la entidad
                $venta_pago->save();

                $temp = $this->totalAlMomento($post_data['id'],0);
                if($temp != 0)
                {
                    
                    $cliente = \ClienteQuery::Create()->findPk($post_data['cliente']);
                    $cliente->setClienteCreditorestante($post_data['credito'] - $temp)->save();       

                }else{
                    //completamos la compra y actualizamos el saldo del cliente
                    $entity->setVentaEstatuspago(1)->setVentaEstatus('completada')->save();
                    $this->updateInventory($post_data['id'],$entity->getIdsucursal(), $entity->getIdempleadocajero());
                }
                return $this->getResponse()->setContent(json_encode(array('response' => true,'message'=>'Pago realizado')));
            }else{
                return $this->getResponse()->setContent(json_encode(array('response' => false,'message'=>'No se pudo realizar el pago')));
            }


        }
    }

    //funcion para calcular la cantidad de pago que llevamos al momento
    private function totalAlMomento($id, $credito)
    {
        $entity = \VentaQuery::Create()->findPk($id);
        $pagos = \VentapagoQuery::create()->filterByIdventa($id)->find();
        $totalAlMomento = 0;
        if($pagos != null)
        {
            
            foreach ($pagos->toArray() as $index => $value) {
                $totalAlMomento+=$value['VentapagoCantidad'];
            }
        }

        if(($totalAlMomento + $credito) < $entity->getVentatotal())
        {
            return   $entity->getVentatotal() - ($totalAlMomento + $credito);
        }

        return 0;
    }

    private function updateInventory($id,$sucursal,$user)
    {

        //Actualizamos as existencias de los productos sucursal
        $venta_detalle = \VentadetalleQuery::create()->filterByIdventa($id)->find()->toArray();
        $totalComisionable = 0;
        foreach ($venta_detalle as $detalle) {

            $producto_sucursal = \ProductosucursalQuery::create()->filterByIdproductovariante($detalle['Idproductovariante'])->filterByIdsucursal($sucursal)->find()[0];

            $producto_sucursal->setProductosucursalExistencia($producto_sucursal->getProductosucursalExistencia() - $detalle['VentadetalleCantidad'])->save();

            $comisionable = \ProductovarianteQuery::create()->findPk($detalle['Idproductovariante'])->getProducto()->getProductoComisionable();

            if($comisionable)
            {
                $totalComisionable += $detalle['VentadetalleCantidad'];
            }
        }

        
            //verificamos si exista ya la comision del día
            $comisiones = \ComisionesQuery::create()->filterByIdsucursal($sucursal)->filterByIdempleado($user)->filterByComisionesFecha(date("Y/m/d"))->find()->toArray();

            if($comisiones != null)
            {
                $id = $comisiones[0]['Idcomisiones'];

                $cliente_comision = \ComisionesQuery::create()->findPk($id);

                //modificamos la comision
                $cliente_comision->setComisionesCantidad($totalComisionable + $cliente_comision->getComisionesCantidad())
                                 ->save();
            }else{

            //aplicamos la comision
            $cliente_comision = new \Comisiones();
            $cliente_comision->setIdsucursal($sucursal)
                             ->setIdempleado($user)
                             ->setComisionesCantidad($totalComisionable)
                             ->setComisionesFecha(date("Y/m/d"))
                             ->save();
            }
        
        
    }

    public function getProductovariantes($data){
        $information = [
            'selects' => \TransferenciadetalleQuery::create()->select('idproductovariante')->filterByIdtransferencia($data['idtransferencia'])->find()->toArray(),
            'cantidad' =>\TransferenciadetalleQuery::create()->select('transferenciadetalle_cantidad')->filterByIdtransferencia($data['idtransferencia'])->find()->toArray(),
            'precio' =>\TransferenciadetalleQuery::create()->select('transferenciadetalle_preciounitario')->filterByIdtransferencia($data['idtransferencia'])->find()->toArray(),
        ];

        return $information;

    }

    public function getProductosvariantesAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            if($post_data['name'] == 'productosvariantes'){
                $response = $this->getProductovariantes($post_data['data']);

                return $this->getResponse()->setContent(json_encode($response));
                
            }
            
        };
    }


    public function getdetailsAction(){

        $request = $this->getRequest();
        if($request->isPost()){

            $post_data = $request->getPost();
            
            //filtramos los productos variantes por producto
            $variantes = \ProductovarianteQuery::create()->filterByIdproducto($post_data['idproductogeneral'])->find();
            
            $details = [];


            //iteramos sobre todas als variantes
            foreach ($variantes as $variante) {
                $indice = $variante->getProductocolor()->getColor()->getColorNombre() .'/'. $variante->getProductomaterial()->getMaterial()->getMaterialNombre();


                
                //verificamos que la combinacion de material color n oexista
                if($details[$indice] == null)
                {

                    //inicializamos las variantes de ese color y material
                    $details[$indice] = [];
                    $value = array(
                                'talla' => $variante->getProductovarianteTalla(),
                                'variante' => $variante->getIdproductovariante(),
                             );

                    array_push($details[$indice], $value);

                }else{
                    $value = array(
                                'talla' => $variante->getProductovarianteTalla(),
                                'variante' => $variante->getIdproductovariante(),
                             );

                    array_push($details[$indice], $value);
                }
                
            }

            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $details)));

            //echo '<pre>'; var_dump($details); echo '</pre>';exit();
        }

    } 
    
    public function verproductosventaAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();

            //traemos todos los detalles de la venta
            $venta_detalle = \VentadetalleQuery::create()->filterByIdventa($post_data['idventa'])->find()->toArray();

            //Creamos una instancia del arreglo que regresaremos
            $details = [];

            foreach ($venta_detalle as $venta) {
                //obtenemos la información del producto variante
                $variante = \ProductovarianteQuery::create()->findPk($venta['Idproductovariante']);
                $producto = $variante->getProducto();

                $color = $variante->getProductocolor();
                $color = $color->getColor();
                $material = $variante->getProductomaterial();
                $material = $material->getMaterial();
                $tallaje = $variante->getProductovarianteTalla();

                //procesamos la informacion en un json
                $details[] = array(
                                'cantidad' => $venta['VentadetalleCantidad'],
                                'precioUnitario' => $venta['VentadetallePreciounitario'],
                                'descuento' => $venta['VentadetalleDescuento'],
                                'subtotal' => $venta['VentadetalleSubtotal'],
                                'nombre' => $producto->getProductoModelo() .' - ' . $color->getColorNombre().' / ' . $material->getMaterialNombre().' / ' . $tallaje,
                                'descripcion' => $producto->getProductoDescripcion()
                            );

            }

            //obtenemos  el subtotal, iva y total de la venta
            $entity = \VentaQuery::Create()->findPk($post_data['idventa']);
            $iva = $entity->getVentaIva();
            $subtotal = $entity->getVentaSubtotal();
            $total = $entity->getVentaTotal();

            //regresamos una respuesta
            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $details,'total' => $total, 'iva'=>$iva,'subtotal'=>$subtotal,'estatus'=>$entity->getVentaEstatus())));

        }


    }


    public function initializetableAction(){

        $request = $this->getRequest();
        if($request->isPost()){

            $post_data = $request->getPost();
            
            //obtenemos la variante 
            $variante = \ProductovarianteQuery::create()->findPk($post_data['id']);

            $producto = $variante->getProducto();
            $color = $variante->getProductocolor();
            $color = $color->getColor();
            $material = $variante->getProductomaterial();
            $material = $material->getMaterial();
            $tallaje = $variante->getProductovarianteTalla();
            
            //traer la sesiòn para ver la sucursal
            $user = new \Application\Session\AouthSession();
            $user = $user->getData();

            //traemos la informacion del producto de la sucursal que estamos para ver el precio del producto
            $producto_sucursal = \ProductosucursalQuery::create()->filterByIdproductovariante($post_data['id'])->filterByIdsucursal($user['idsucursal'])->find()->toArray();

            //verificamos si tiene algun descuento
            $descuento = $this->getDescuento($post_data['id']);
            
            $tieneDescuento = false;
            if($descuento != null)
            {
                $tieneDescuento = true;
            }

            //si tiene descuento 
            if($tieneDescuento)
            {
                //creamos el objeto que procesará los datos que necesitamos
                $precio = money_format('%.2n', $producto_sucursal[0]["ProductosucursalPrecioventa"]);
                $porcentaje = $descuento['DescuentoCantidad'];
                $descuentoCantidad = floatval($porcentaje/100) * floatval($precio);
          
                $details = array(
                    'id' => $post_data['id'],
                    'existencias' => $producto_sucursal[0]['ProductosucursalExistencia'],
                    'nombre' =>  $producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre(). ' / ' . $tallaje,
                    'descripcion' => $producto->getProductoDescripcion(),
                    'precio' => money_format('%.2n', $producto_sucursal[0]["ProductosucursalPrecioventa"]),
                    'descuento' => $tieneDescuento,
                    'nombreDescuento' => $descuento['DescuentoNombre'],
                    'descripcionDescuento' => $descuento['DescuentoDescripcion'],
                    'descuentoPrecio' => $descuentoCantidad,
                    'descuentoCantidad' => $porcentaje,
                    'descuentoSubtotal' => $descuentoCantidad * -1
                );
                return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $details)));
            }else{
                $details = array(
                    'id' => $post_data['id'],
                    'existencias' => $producto_sucursal[0]['ProductosucursalExistencia'],
                    'nombre' =>  $producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre(). ' / ' . $tallaje,
                    'descripcion' => $producto->getProductoDescripcion(),
                    'precio' => money_format('%.2n', $producto_sucursal[0]["ProductosucursalPrecioventa"]),
                    'descuento' => $tieneDescuento
                );
            }



            //verificamos si tiene alguna promociòn
            $promocion = $this->getPromocion($post_data['id']);
            
            
            $tienePromocion = false;
            if($promocion != null)
            {
                $tienePromocion = true;
            }

            //si tiene promocion 
            if($tienePromocion)
            {
                //creamos el objeto que procesará los datos que necesitamos
                $precio = money_format('%.2n', $producto_sucursal[0]["ProductosucursalPrecioventa"]);
                $porcentaje = "50";
                $promocionCantidad = floatval($porcentaje/100) * floatval($precio);
          
                $details = array(
                    'id' => $post_data['id'],
                    'existencias' => $producto_sucursal[0]['ProductosucursalExistencia'],
                    'nombre' =>  $producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre(). ' / ' . $tallaje,
                    'descripcion' => $producto->getProductoDescripcion(),
                    'precio' => money_format('%.2n', $producto_sucursal[0]["ProductosucursalPrecioventa"]),
                    'nombrePromocion' => $promocion['PromocionNombre'],
                    'descripcionPromocion' => $promocion['PromocionDescripcion'],
                    'promocion' => $tienePromocion,
                    'promocionPorcentaje' => $porcentaje,
                    'promocionSubtotal' => $promocionCantidad 
                );
                return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $details)));
            }else{
                $details = array(
                    'id' => $post_data['id'],
                    'existencias' => $producto_sucursal[0]['ProductosucursalExistencia'],
                    'nombre' =>  $producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre(). ' / ' . $tallaje,
                    'descripcion' => $producto->getProductoDescripcion(),
                    'precio' => money_format('%.2n', $producto_sucursal[0]["ProductosucursalPrecioventa"]),
                    'descuento' => $tienePromocion
                );
            }
            

            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $details)));

            //echo '<pre>'; var_dump($details); echo '</pre>';exit();
        }

    } 


    private function getDescuento($id)
    {
        //verificamos si el productovariante pertence a alguno de los descuentos
        //verificamos si pertenece a la variante
        $descuentos = \DescuentodetalleQuery::create()->select('iddescuento')->filterByIdproductovariante($id)->find()->toArray();
        if($descuentos != null)
        {
            $descuento = \DescuentoQuery::create()->filterByDescuentoestatus(1)->filterByIddescuento($descuentos)->find()->toArray();
            return $descuento[0];
        }


        //verificamos que perttenezca al producto
        $variante = \ProductovarianteQuery::Create()->findPk($id);
        $descuentos = \DescuentodetalleQuery::create()->select('iddescuento')->filterByIdproducto($variante->getIdproducto())->find()->toArray();

        if($descuentos != null)
        {

            $descuento = \DescuentoQuery::create()->filterByDescuentoestatus(1)->filterByIddescuento($descuentos)->find()->toArray();
            return $descuento[0];
        }


        //verificamos que perttenezca a la marca
        $producto = \ProductoQuery::Create()->findPk($variante->getIdproducto());
        $descuentos = \DescuentodetalleQuery::create()->select('iddescuento')->filterByIdmarca($producto->getIdmarca())->find()->toArray();

        if($descuentos != null)
        {

            $descuento = \DescuentoQuery::create()->filterByDescuentoestatus(1)->filterByIddescuento($descuentos)->find()->toArray();
            return $descuento[0];
        }

        
        
        return null;
    }

    private function getPromocion($id)
    {
        //verificamos si el productovariante pertence a alguna de las promociones
        //verificamos si pertenece a la variante
        $promociones = \PromociondetalleQuery::create()->select('idpromocion')->filterByIdproductovariante($id)->find()->toArray();
        if($promociones != null)
        {
            $promocion = \PromocionQuery::create()->filterByPromocionestatus(1)->filterByIdpromocion($promociones)->find()->toArray();
            return $promocion[0];
        }


        //verificamos que perttenezca al producto
        $variante = \ProductovarianteQuery::Create()->findPk($id);
        $promociones = \PromociondetalleQuery::create()->select('idpromocion')->filterByIdproducto($variante->getIdproducto())->find()->toArray();

        if($promociones != null)
        {

            $promocion = \PromocionQuery::create()->filterByPromocionestatus(1)->filterByIdpromocion($promociones)->find()->toArray();
            return $promocion[0];
        }


        //verificamos que perttenezca a la marca
        $producto = \ProductoQuery::Create()->findPk($variante->getIdproducto());
        $promociones = \PromociondetalleQuery::create()->select('idpromocion')->filterByIdmarca($producto->getIdmarca())->find()->toArray();

        if($promociones != null)
        {

            $promocion = \PromocionQuery::create()->filterByPromocionestatus(1)->filterByIdpromocion($promociones)->find()->toArray();
            return $promocion[0];
        }

        
        
        return null;
    }

    

    public function eliminarAction(){
        $request = $this->getRequest();

        if($request->isPost())
        {
            $id = $this->params()->fromRoute('id');
            $entity = \VentaQuery::Create()->findPk($id);

            //unlink("/files/compras/19.");
            
            $entity->delete();

            $detalles = \VentadetalleQuery::create()->filterByIdventa($id)->delete();
            $detalles = \VentapagoQuery::create()->filterByIdventa($id)->delete();

            if($entity->isDeleted()){
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido eliminado satisfactoriamente.');
            }else{
                $this->flashMessenger()->addErrorMessage('Ocurrió un error al intentar eliminar. Pruebe más tarde.');
            }
        }

        return $this->redirect()->toUrl('/puntodeventa');
    }


    public function eliminarVentaAction(){
        $request = $this->getRequest();

        if($request->isPost())
        {
            
            $post_data = $request->getPost();
            $id = $post_data['id'];

            $entity = \VentaQuery::Create()->findPk($id);

            //unlink("/files/compras/19.");
            
            $entity->delete();

            $detalles = \VentadetalleQuery::create()->filterByIdventa($id)->delete();
            $detalles = \VentadepagoQuery::create()->filterByIdventa($id)->delete();

            if($entity->isDeleted()){
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido eliminado satisfactoriamente.');
            }else{
                $this->flashMessenger()->addErrorMessage('Ocurrió un error al intentar eliminar. Pruebe más tarde.');
            }
        }

         return $this->getResponse()->setContent(json_encode(array('response' => true)));
    }


    public function getClientesAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){

            $post_data = $request->getPost();
            
            if($post_data['tipo'] == "venta")
            {
                //traer los clientes
                $clientes = \ClienteQuery::create()->find();
                $clientes_array = array();

                foreach ($clientes as $value){
                    $clientes_array[$value->getIdcliente()] = $value->getClienteNombre() ." ". $value->getClienteApaterno() ." ". $value->getClienteAmaterno() ;
                }
                return $this->getResponse()->setContent(json_encode(array('response' => true,'clientes',$clientes_array)));


            }else if($post_data['tipo'] == "apartado")
            {
                //traer los clientes
                $clientes = \ClienteQuery::create()->find();
                $clientes_array = array();

                foreach ($clientes as $value){
                    if($value->getClienteNombre() != 'Venta')
                    {
                        $clientes_array[$value->getIdcliente()] = $value->getClienteNombre() ." ". $value->getClienteApaterno() ." ". $value->getClienteAmaterno() ;
                    }
                    
                }
                return $this->getResponse()->setContent(json_encode(array('response' => true,'clientes',$clientes_array)));
            

            }else
            {
                //traer los clientes
                $clientes = \ClienteQuery::create()->find();
                $clientes_array = array();

                foreach ($clientes as $value){
                    if($value->getClienteNombre() != 'Venta')
                    {
                        if($value->getClienteCredito())
                        {
                            $clientes_array[$value->getIdcliente()] = $value->getClienteNombre() ." ". $value->getClienteApaterno() ." ". $value->getClienteAmaterno() ;
                        }
                        
                    }
                    
                }
                return $this->getResponse()->setContent(json_encode(array('response' => true,'clientes',$clientes_array)));
            }
        }

    }

    public function getPagosAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){

            $post_data = $request->getPost();

            //traemos todos los pagos
            $pagos = \VentapagoQuery::create()->filterByIdventa($post_data['idventa'])->find()->toArray();
            $totalAlMomento = 0;

            //calculamos el total al momento del pago
            foreach ($pagos as $pago) {
                $totalAlMomento+=$pago['VentapagoCantidad'];
            }

            //obtenemos el total de la venta
            $venta = \VentaQuery::create()->findPk($post_data['idventa']);
            $total = $venta->getVentaTotal();

            return $this->getResponse()->setContent(json_encode(array('response' => true,'pagos'=>$pagos,'total'=>$total,'totalAlMomento'=>$totalAlMomento)));
        }
    }

}
