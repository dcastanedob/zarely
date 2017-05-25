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

            //vericiamos que si existan prodcuctos
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




    public function verAction()
    {
        $request = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \TransferenciaQuery::create()->filterByIdtransferencia($id)->exists();
        
        if($exist){
            
            $entity = \TransferenciaQuery::create()->findPk($id);
            
            if($request->isPost()){
                $post_data = $request->getPost();
                $post_files = $request->getFiles();

                $post_data['transferencia_fecharecepcion'] = date_create_from_format('d/m/Y', $post_data['transferencia_fecharecepcion']);

                $post_data['transferencia_fecha'] = date_create_from_format('d/m/Y', $post_data['transferencia_fecha']);
                $user = new \Application\Session\AouthSession();
                $user = $user->getData();

                $post_data['idempleadocreador'] = $user['idempleado'];
                
                $precios = [];
                $variantes = [];

                foreach ($post_data as $key => $value){
                    if(\TransferenciaPeer::getTableMap()->hasColumn($key)){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }

                    if(substr( $key, 0, 6 ) === "precio")
                    {
                        $temp = array(
                            "variante" => str_replace("preciounitario", "", $key),
                            "valor" => $value
                        );
                        array_push($precios, $temp);
                    }

                    if(substr( $key, 0, 8 ) === "cantidad")
                    {
                        /*if($value != 0)
                        {*/
                            $temp = array(
                                "variante" => str_replace("cantidad", "", $key),
                                "valor" => $value
                            );
                            array_push($variantes, $temp);
                        //}
                        
                    }
                }

                $detalles = \TransferenciadetalleQuery::create()->filterByIdtransferencia($id)->delete();
                $entity->save();


                //$total = 0;
                foreach ($variantes as $variante) {
                    $transferencia_detalle = new \Transferenciadetalle();
                    $varianteTemp = \ProductovarianteQuery::create()->findPk($variante["variante"]);
                    //encontrar a que precio le corresponde
                    foreach ($precios as $key=>$precio) {

                        //obtenemos la variante 
                        $productovariante = \ProductovarianteQuery::create()->findPk($precio["variante"]);

                        if($productovariante->getIdproducto() == $varianteTemp->getIdproducto() && $productovariante->getIdproductocolor() == $varianteTemp->getIdproductocolor() && $productovariante->getIdproductomaterial() == $varianteTemp->getIdproductomaterial())
                            {


                            //obtenemos el rango de los tallajes
                            $tallajes = \ProductotallajeQuery::create()->JoinTallaje()->withColumn('Tallajerango')->filterByIdproducto($productovariante->getIdproducto())->find();

                            $boolean = false;
                            foreach ($tallajes->toArray() as $tallaje) {
                                $rango = $tallaje["Tallajerango"];
                                $inf = explode(" - ", $rango);


                                //verificamos que este en el rango del precio asociado
                                if($productovariante->getProductovarianteTalla()>=$inf[0] &&  $productovariante->getProductovarianteTalla()<=$inf[1] && $varianteTemp->getProductovarianteTalla()>=$inf[0] &&  $varianteTemp->getProductovarianteTalla()<=$inf[1])
                                {
                                    $transferencia_detalle->setIdtransferencia($entity->getIdtransferencia())
                                                  ->setIdproductovariante($variante["variante"])
                                                  ->setTransferenciadetalleCantidad($variante["valor"])
                                                  ->setTransferenciadetallePreciounitario($precio["valor"])
                                                  ->setTransferenciadetalleSubtotal(floatval($variante["valor"] * floatval($precio["valor"])))->save();

                                    //$total+= $transferencia_detalle->getCompradetalleSubtotal();
                                    $boolean = true;
                                    break;
                                }
                            }

                            //$entity->setCompraTotal($total);
                            $entity->save();

                            //unset($precios[$key]);
                            if($boolean)
                                break;
                        }
                        
                    }
                }


                $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
                return $this->redirect()->toUrl('/transferencias');
            }
            
                
            //traer los proveedores
            $empleados = \EmpleadoQuery::create()->find();
            $empleados_array = array();

            foreach ($empleados as $value){
                $empleados_array[$value->getIdempleado()] = $value->getEmpleadoNombre()." " . $value->getEmpleadoApaterno() ." " . $value->getEmpleadoAmaterno();
            }

            //traer las sucursales
            $sucursales = \SucursalQuery::create()->find();
            $sucursales_array = array();

            foreach ($sucursales as $value){
                $sucursales_array[$value->getIdsucursal()] = $value->getSucursalNombrecomercial();
            }


            //traer los productosvariantes
            $variantes = \ProductovarianteQuery::create()->groupByIdproductomaterial()->groupByIdproductocolor()->find();

            $productosvariante_array = array();

            foreach ($variantes as $value){
                $producto = $value->getProducto();
                $color = $value->getProductocolor();
                $color = $color->getColor();
                $material = $value->getProductomaterial();
                $material = $material->getMaterial();


                $information =$producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre();

                $productosvariante_array[$value->getIdproductovariante()] = $information;
            }


            //traer los productos generales
            $generales = \ProductoQuery::create()->find();
            $productos_generales_array = array();

            foreach ($generales as $value){

                $productos_generales_array[$value->getIdproducto()] = $value->getProductoModelo();
            }


            $form = new \Application\Transferencia\Form\TransferenciaForm($empleados_array,$sucursales_array,$productosvariante_array,$productos_generales_array);

            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

            $form->get('transferencia_fecha')->setValue($entity->getTransferenciaFecha('d/m/Y'));
            $form->get('transferencia_fecharecepcion')->setValue($entity->getTransferenciaFecharecepcion('d/m/Y'));

            $form->get('idempleadocreador')->setValue($entity->getEmpleadoRelatedByIdempleadocreador()->toArray()['EmpleadoNombre']);

            //verificamos que ya tenga un receptor
            if($entity->getEmpleadoRelatedByIdempleadoreceptor() != null)
            {
                $form->get('idempleadoreceptor')->setValue($entity->getEmpleadoRelatedByIdempleadoreceptor()->toArray()['EmpleadoNombre']);
            }
            


            $view_model = new ViewModel();
            $view_model->setTemplate('application/transferencias/ver');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
            ));
            return $view_model;
            
            
        }else{
            $this->flashMessenger()->addErrorMessage('Id Invalido.');
            return $this->redirect()->toUrl('/transferencias');
        }
        return $view_model;
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

                $temp = $this->totalAlMomento($post_data['id'],$post_data['credito']);
                if($temp != 0)
                {
                    //completamos la compra y actualizamos el saldo del cliente
                    $entity->setVentaEstatuspago(1)->save();
                    $cliente = \ClienteQuery::Create()->findPk($post_data['cliente']);
                    $cliente->setClienteCreditorestante( $temp)->save();

                }
                $entity->setVentaEstatuspago(1)->save();
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

        if(($totalAlMomento + $credito) >= $entity->getVentatotal())
        {
            return ($totalAlMomento + $credito) - $entity->getVentatotal();
        }

        return 0;
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
            }else{
                $details = array(
                    'id' => $post_data['id'],
                    'nombre' =>  $producto->getProductoModelo() .' - ' . $material->getMaterialNombre() .' / ' . $color->getColorNombre(). ' / ' . $tallaje,
                    'descripcion' => $producto->getProductoDescripcion(),
                    'precio' => money_format('%.2n', $producto_sucursal[0]["ProductosucursalPrecioventa"]),
                    'descuento' => $tieneDescuento
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


            }else if($post_data['tipo'] == "apartada")
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

}
