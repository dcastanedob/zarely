<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ProductosController extends AbstractActionController
{

    public $column_map = array(
        0 => 'Idproducto',
        1 => 'Productomodelo',
        2 => 'Idmarca',
        3 => 'Idtemporada',
        4 => 'Productoprecioventa',
        5=> 'Productopreciomayoreo',
    );

    public function getTallajes($data){
        $tallajes = \ProductotallajeQuery::create()->select('idtallaje')->filterByIdproducto($data['idproducto'])->find()->toArray();
        return $tallajes;

    }

    public function getTallajesAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            if($post_data['name'] == 'tallajes'){
                    
                $response = $this->getTallajes($post_data['data']);

                return $this->getResponse()->setContent(json_encode($response));
                
            }
            
        };
    }


    public function getMedidas($data){
        $medidas = \ProductomedidaQuery::create()->select('idmedida')->filterByIdproducto($data['idproducto'])->find()->toArray();
        return $medidas;

    }

    public function getMedidasAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            if($post_data['name'] == 'medidas'){
                    
                $response = $this->getMedidas($post_data['data']);

                return $this->getResponse()->setContent(json_encode($response));
                
            }
            
        };
    }

    public function getMateriales($data){
        $materiales = \ProductomaterialQuery::create()->select('idmaterial')->filterByIdproducto($data['idproducto'])->find()->toArray();
        return $materiales;

    }

    public function getMaterialesAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            if($post_data['name'] == 'materiales'){
                    
                $response = $this->getMateriales($post_data['data']);

                return $this->getResponse()->setContent(json_encode($response));
                
            }
            
        };
    }

    public function getColores($data){
        $colores = \ProductocolorQuery::create()->select('idcolor')->filterByIdproducto($data['idproducto'])->find()->toArray();
        return $colores;

    }

    public function getColoresAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            if($post_data['name'] == 'colores'){
                    
                $response = $this->getColores($post_data['data']);

                return $this->getResponse()->setContent(json_encode($response));
                
            }
            
        };
    }

    public function serversideAction()
    {
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();
           
            $query = new \ProductoQuery();
            
             //JOIN
            $query->useMarcaQuery('a')->endUse();
            $query->useTemporadaQuery('b')->endUse();
      
            $query->withColumn('a.MarcaNombre', 'marca_nombre')
                  ->withColumn('b.TemporadaNombre', 'temporada_nombre');

            


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
               
                $c1= $c->getNewCriterion('producto.idproducto', '%'.$search_value.'%', \Criteria::LIKE);
                $c2= $c->getNewCriterion('producto.producto_modelo', '%'.$search_value.'%', \Criteria::LIKE);

                $c1->addOr($c2);

                $query->addAnd($c1);
                $query->groupByIdproducto();
                
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
            
           
            
            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                // var_dump($value);exit();
                
                $tmp['DT_RowId'] = $value['idproducto'];
                $tmp['idproducto'] = $value['idproducto'];
                $tmp['producto_modelo'] = $value['producto_modelo'];
                $tmp['idmarca'] = $value['marca_nombre'];
                $tmp['idtemporada'] = $value['temporada_nombre'];
                $tmp['producto_precioventa'] = $value['producto_precioventa'];
                $tmp['producto_preciomayoreo'] = $value['producto_preciomayoreo'];

                $tmp['options'] = '<td><div class="btn-group dropdown">
                  <button class="btn btn-info dropdown-toggle" data-toggle="dropdown" type="button" aria-expanded="false" style="padding: 2px 6px;">
                    <span class="icon icon-gear icon-lg icon-fw"></span>
                    Opciones
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="/catalogo/productos/ver/' . $value['idproducto'] . '">
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

        $view_model->setTemplate('application/catalogo/productos/index');
        $view_model->setVariables(array(
            'messages' =>$this->flashMessenger()
        ));
        return $view_model;
    }

    public function getTallajesRango($tallaje)
    {

        $valores = explode('-', $tallaje);
        $menor = 0;
        $mayor = 0;
        $productoTallajeRango = [];

        if(count($valores) > 1)
        {
            $menor = intval($valores['0']);
            $mayor = intval($valores['1']);

            $limite = ($mayor-$menor)*2;

            for($i = 0; $i<=$limite; $i++)
            {
                array_push($productoTallajeRango, $menor);
                $menor = $menor+0.5;
            }
        }
        else
        {
            $menor = intval($valores['0']);
            array_push($productoTallajeRango, $menor);
        }
        
        
        
        return $productoTallajeRango;
    }

    public function getMedidasRango($medida)
    {
        $rangos = ['xs','s','m','l','xl','xxl','unitalla'];
        $valores = explode('-', $medida);
        $menor = "";
        $mayor = "";
        $productoMarcaRango = [];

        if(count($valores) > 1)
        {
            $menor = $valores['0'];
            $mayor = $valores['1'];
            $booleana = false;

            foreach ($rangos as $rango) {

                if($booleana)
                {
                    array_push($productoMarcaRango, $rango);
                    if(strcmp(trim($rango), trim($mayor)) == 0)
                    {
                        $booleana = false;
                        break;
                    }
                }   


                if(strcmp(trim($rango), trim($menor)) == 0)
                {

                    $booleana = true;
                    array_push($productoMarcaRango, $rango);
                }
            }
            
        }
        else
        {
            $menor = $valores['0'];
            array_push($productoMarcaRango, $menor);
        }
        
        
        
        return $productoMarcaRango;
    }

    function get_extension($file) {
         $extension = end(explode(".", $file));
         return $extension ? $extension : false;
    }

    public function nuevoAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            $post_files = $request->getFiles();

            


            $entity = new \Producto();

            

            foreach ($post_data as $key => $value){
                if(\ProductoPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }

            $entity->save();
            
            

            $productoMaterialId = [];
            foreach ($post_data['material'] as $value){
                $productomaterial = new \Productomaterial();
                $productomaterial->setIdproducto($entity->getIdproducto())
                             ->setIdmaterial($value)
                             ->save();

                array_push($productoMaterialId, $productomaterial->getIdproductomaterial());
            }

            $productoColorId = [];
            foreach ($post_data['color'] as $value){
                $productocolor = new \Productocolor();
                $productocolor->setIdproducto($entity->getIdproducto())
                             ->setIdcolor($value)
                             ->save();

                if(isset($post_files['uploadedfile'.$value])){

                    $file_type = $this->get_extension($post_files['uploadedfile'.$value]['name']);

                    move_uploaded_file($post_files['uploadedfile'.$value]['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/img/productocolor/'.$productocolor->getIdproductocolor().'.'.$file_type);


                    $productocolor->setProductocolorFoto('/img/productocolor/'.$productocolor->getIdproductocolor().'.'.$file_type)->save();
                }

                array_push($productoColorId, $productocolor->getIdproductocolor());
            }

            $productoVarianteId = [];
            if($post_data['tallaje'] != null)
            {
                $productoTallajeNombre = [];
                foreach ($post_data['tallaje'] as $value){
                    $productotallaje = new \Productotallaje();
                    $productotallaje->setIdproducto($entity->getIdproducto())
                                 ->setIdtallaje($value)
                                 ->save();

                    array_push($productoTallajeNombre, $productotallaje->getTallaje()->getTallajerango());
                }

                

                foreach ($productoTallajeNombre as $tallaje) {
                    $tallaje = $this->getTallajesRango($tallaje);
                    foreach ($tallaje as $numero) {
                        foreach ($productoMaterialId as $material) {
                            foreach ($productoColorId as $color) {
                                $productovariante = new \Productovariante();
                                $productovariante->setIdproducto($entity->getIdproducto())
                                                ->setIdproductocolor($color)
                                                ->setIdproductomaterial($material)
                                                ->setProductovarianteTalla($numero)
                                                ->setProductovarianteEstatus(1)
                                                ->setProductovarianteTallatipo('numero')
                                                ->save();
                                array_push($productoVarianteId, $productovariante->getIdproductovariante());

                            }
                        }
                    }
                }

            }

            if($post_data['medida'] != null)
            {
                $productoMedidaNombre = [];
                foreach ($post_data['medida'] as $value){
                    $productomedida = new \Productomedida();
                    $productomedida->setIdproducto($entity->getIdproducto())
                                 ->setIdmedida($value)
                                 ->save();
                    array_push($productoMedidaNombre, $productomedida->getMedida()->getMedidasrango());
                }

                foreach ($productoMedidaNombre as $medida) {
                    $medida = $this->getMedidasrango($medida);

                    foreach ($medida as $numero) {

                        foreach ($productoMaterialId as $material) {
                            foreach ($productoColorId as $color) {
                                $productovariante = new \Productovariante();
                                $productovariante->setIdproducto($entity->getIdproducto())
                                                ->setIdproductocolor($color)
                                                ->setIdproductomaterial($material)
                                                ->setProductovarianteTalla($numero)
                                                ->setProductovarianteEstatus(1)
                                                ->setProductovarianteTallatipo("medida")
                                                ->save();
                                array_push($productoVarianteId, $productovariante->getIdproductovariante());
                            }
                        }
                    }
                }
            }

            if($post_data['medida'] == null && $post_data['tallaje'] == null)
            {
   
                foreach ($productoMaterialId as $material) {
                    foreach ($productoColorId as $color) {
                        $productovariante = new \Productovariante();
                        $productovariante->setIdproducto($entity->getIdproducto())
                                        ->setIdproductocolor($color)
                                        ->setIdproductomaterial($material)
                                        ->setProductovarianteMedida("")
                                        ->setProductovarianteEstatus(1)
                                        ->setProductovarianteTallatipo("ninguno")
                                        ->save();
                            array_push($productoVarianteId, $productovariante->getIdproductovariante());
                    }
                }
                
            }

            $sucursales = \SucursalQuery::create()->find();

            foreach ($sucursales as $sucursal) {
                foreach ($productoVarianteId as $variante) {
                    $productosucursal = new \Productosucursal();
                    $productosucursal->setIdproductovariante($variante)
                                    ->setIdsucursal($sucursal->getIdsucursal())
                                    ->setProductosucursalExistencia(0)
                                    ->setProductosucursalMinimo($entity->getProductoMinimo())
                                    ->setProductosucursalReorden($entity->getProductoReorden())
                                    ->setProductosucursalMinimo($entity->getProductoMinimo())
                                    ->setProductosucursalPrecioventa($entity->getProductoPrecioventa())
                                    ->setProductosucursalMinimo($entity->getProductoMinimo())
                                    ->setProductosucursalPreciomayoreo($entity->getProductoPreciomayoreo())
                                    ->setProductosucursalEstatus(1)
                                    ->save();
                }
            }


            $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
            return $this->redirect()->toUrl('/catalogo/productos');
        

        }

        //traer los tipos de calzado
        $calzados = \TipocalzadoQuery::create()->find();
        $calzados_array = array();
        $value = new \Tipocalzado();
        foreach ($calzados as $value){
            $calzados_array[$value->getIdtipocalzado()] = $value->getTipocalzadoNombre();
        }

        //traer los proveedores
        $provedorees = \ProveedorQuery::create()->find();
        $provedorees_array = array();
        $value = new \Proveedor();
        foreach ($provedorees as $value){
            $provedorees_array[$value->getIdproveedor()] = $value->getProveedorNombrecomercial();
        }

        //traer las marcas
        $marcas = \MarcaQuery::create()->find();
        $marcas_array = array();
        $value = new \Marca();
        foreach ($marcas as $value){
            $marcas_array[$value->getIdMarca()] = $value->getMarcaNombre();
        }

        //traer las temporadas
        $temporadas = \TemporadaQuery::create()->find();

        $temporadas_array = array();
        $value = new \Temporada();
        foreach ($temporadas as $value){
            $temporadas_array[$value->getIdtemporada()] = $value->getTemporadaNombre();
        }


        //traer los tallajes
        $tallajes = \TallajeQuery::create()->find();
        $tallajes_array = array();
        $value = new \Tallaje();
        foreach ($tallajes as $value){
            $tallajes_array[$value->getIdtallaje()] = $value->getTallajeNombre()." (".$value->getTallajerango().")";
        }

        //traer las medidas
        $medidas = \MedidaQuery::create()->find();
        $medidas_array = array();
        $value = new \Medida();
        foreach ($medidas as $value){
            $medidas_array[$value->getIdmedida()] = $value->getMedidaNombre()." (".$value->getMedidasrango().")";
        }


        //traer los materiales
        $materiales = \MaterialQuery::create()->find();
        $materiales_array = array();
        $value = new \Material();
        foreach ($materiales as $value){
            $materiales_array[$value->getIdmaterial()] = $value->getMaterialNombre();
        }

        //traer los colores
        $colores = \ColorQuery::create()->find();
        $colores_array = array();
        $value = new \Color();
        foreach ($colores as $value){
            $colores_array[$value->getIdcolor()] = $value->getColorNombre();
        }



        //traer las temporadas
        $temporadas = \TemporadaQuery::create()->find();

        $temporadas_array = array();
        $value = new \Temporada();
        foreach ($temporadas as $value){
            $temporadas_array[$value->getIdtemporada()] = $value->getTemporadaNombre();
        }


        $form = new \Application\Catalogo\Form\ProductosForm($calzados_array,$provedorees_array,$marcas_array,$temporadas_array,$tallajes_array,$materiales_array,$colores_array,$medidas_array);
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/catalogo/productos/nuevo');
        $view_model->setVariables(array(
            'form' => $form
        ));
        return $view_model;
        
    }

    public function verAction()
    {
        $reqest = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \ProductoQuery::create()->filterByIdproducto($id)->exists();
        
        if($exist){
            
            $entity = \ProductoQuery::create()->findPk($id);
            
            if($reqest->isPost()){
                $post_data = $reqest->getPost();
                foreach ($post_data as $key => $value){
                    if(\ProductoPeer::getTableMap()->hasColumn($key)){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }

                $entity->getProductotallajes()->delete();
                $entity->getProductocolors()->delete();
                $entity->getProductomaterials()->delete();

                $productoMaterialId = [];
                foreach ($post_data['material'] as $value){
                    $productomaterial = new \Productomaterial();
                    $productomaterial->setIdproducto($entity->getIdproducto())
                                 ->setIdmaterial($value)
                                 ->save();

                    array_push($productoMaterialId, $productomaterial->getIdproductomaterial());
                }

                $productoColorId = [];
                foreach ($post_data['color'] as $value){
                    $productocolor = new \Productocolor();
                    $productocolor->setIdproducto($entity->getIdproducto())
                                 ->setIdcolor($value)
                                 ->save();

                    if(isset($post_files['uploadedfile'.$value])){

                        $file_type = $this->get_extension($post_files['uploadedfile'.$value]['name']);

                        move_uploaded_file($post_files['uploadedfile'.$value]['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/img/productocolor/'.$productocolor->getIdproductocolor().'.'.$file_type);


                        $productocolor->setProductocolorFoto('/img/productocolor/'.$productocolor->getIdproductocolor().'.'.$file_type)->save();
                    }

                    array_push($productoColorId, $productocolor->getIdproductocolor());
                }

                $productoVarianteId = [];
                if($post_data['tallaje'] != null)
                {
                    $productoTallajeNombre = [];
                    foreach ($post_data['tallaje'] as $value){
                        $productotallaje = new \Productotallaje();
                        $productotallaje->setIdproducto($entity->getIdproducto())
                                     ->setIdtallaje($value)
                                     ->save();

                        array_push($productoTallajeNombre, $productotallaje->getTallaje()->getTallajerango());
                    }

                    

                    foreach ($productoTallajeNombre as $tallaje) {
                        $tallaje = $this->getTallajesRango($tallaje);
                        foreach ($tallaje as $numero) {
                            foreach ($productoMaterialId as $material) {
                                foreach ($productoColorId as $color) {
                                    $productovariante = new \Productovariante();
                                    $productovariante->setIdproducto($entity->getIdproducto())
                                                    ->setIdproductocolor($color)
                                                    ->setIdproductomaterial($material)
                                                    ->setProductovarianteTalla($numero)
                                                    ->setProductovarianteEstatus(1)
                                                    ->setProductovarianteTallatipo('numero')
                                                    ->save();
                                    array_push($productoVarianteId, $productovariante->getIdproductovariante());

                                }
                            }
                        }
                    }

                }

                if($post_data['medida'] != null)
                {
                    $productoMedidaNombre = [];
                    foreach ($post_data['medida'] as $value){
                        $productomedida = new \Productomedida();
                        $productomedida->setIdproducto($entity->getIdproducto())
                                     ->setIdmedida($value)
                                     ->save();
                        array_push($productoMedidaNombre, $productomedida->getMedida()->getMedidasrango());
                    }

                    foreach ($productoMedidaNombre as $medida) {
                        $medida = $this->getMedidasrango($medida);

                        foreach ($medida as $numero) {

                            foreach ($productoMaterialId as $material) {
                                foreach ($productoColorId as $color) {
                                    $productovariante = new \Productovariante();
                                    $productovariante->setIdproducto($entity->getIdproducto())
                                                    ->setIdproductocolor($color)
                                                    ->setIdproductomaterial($material)
                                                    ->setProductovarianteTalla($numero)
                                                    ->setProductovarianteEstatus(1)
                                                    ->setProductovarianteTallatipo("medida")
                                                    ->save();
                                    array_push($productoVarianteId, $productovariante->getIdproductovariante());
                                }
                            }
                        }
                    }
                }

                if($post_data['medida'] == null && $post_data['tallaje'] == null)
                {
       
                    foreach ($productoMaterialId as $material) {
                        foreach ($productoColorId as $color) {
                            $productovariante = new \Productovariante();
                            $productovariante->setIdproducto($entity->getIdproducto())
                                            ->setIdproductocolor($color)
                                            ->setIdproductomaterial($material)
                                            ->setProductovarianteMedida("")
                                            ->setProductovarianteEstatus(1)
                                            ->setProductovarianteTallatipo("ninguno")
                                            ->save();
                                array_push($productoVarianteId, $productovariante->getIdproductovariante());
                        }
                    }
                    
                }

                $sucursales = \SucursalQuery::create()->find();

                foreach ($sucursales as $sucursal) {
                    foreach ($productoVarianteId as $variante) {
                        $productosucursal = new \Productosucursal();
                        $productosucursal->setIdproductovariante($variante)
                                        ->setIdsucursal($sucursal->getIdsucursal())
                                        ->setProductosucursalExistencia(0)
                                        ->setProductosucursalMinimo($entity->getProductoMinimo())
                                        ->setProductosucursalReorden($entity->getProductoReorden())
                                        ->setProductosucursalMinimo($entity->getProductoMinimo())
                                        ->setProductosucursalPrecioventa($entity->getProductoPrecioventa())
                                        ->setProductosucursalMinimo($entity->getProductoMinimo())
                                        ->setProductosucursalPreciomayoreo($entity->getProductoPreciomayoreo())
                                        ->setProductosucursalEstatus(1)
                                        ->save();
                    }
                }

                $entity->save();


                $this->flashMessenger()->addSuccessMessage('Su registro ha sido guardado satisfactoriamente.');
                return $this->redirect()->toUrl('/catalogo/productos');
            }
            
                
            //traer los tipos de calzado
            $calzados = \TipocalzadoQuery::create()->find();
            $calzados_array = array();
            $value = new \Tipocalzado();
            foreach ($calzados as $value){
                $calzados_array[$value->getIdtipocalzado()] = $value->getTipocalzadoNombre();
            }

            //traer los proveedores
            $provedorees = \ProveedorQuery::create()->find();
            $provedorees_array = array();
            $value = new \Proveedor();
            foreach ($provedorees as $value){
                $provedorees_array[$value->getIdproveedor()] = $value->getProveedorNombrecomercial();
            }

            //traer las marcas
            $marcas = \MarcaQuery::create()->find();
            $marcas_array = array();
            $value = new \Marca();
            foreach ($marcas as $value){
                $marcas_array[$value->getIdMarca()] = $value->getMarcaNombre();
            }

            //traer las temporadas
            $temporadas = \TemporadaQuery::create()->find();

            $temporadas_array = array();
            $value = new \Temporada();
            foreach ($temporadas as $value){
                $temporadas_array[$value->getIdtemporada()] = $value->getTemporadaNombre();
            }


            //traer los tallajes
            $tallajes = \TallajeQuery::create()->find();
            $tallajes_array = array();
            $value = new \Tallaje();
            foreach ($tallajes as $value){
                $tallajes_array[$value->getIdtallaje()] = $value->getTallajeNombre()." (".$value->getTallajerango().")";
            }

            //traer las medidas
            $medidas = \MedidaQuery::create()->find();
            $medidas_array = array();
            $value = new \Medida();
            foreach ($medidas as $value){
                $medidas_array[$value->getIdmedida()] = $value->getMedidaNombre()." (".$value->getMedidasrango().")";
            }

            //traer los materiales
            $materiales = \MaterialQuery::create()->find();
            $materiales_array = array();
            $value = new \Material();
            foreach ($materiales as $value){
                $materiales_array[$value->getIdmaterial()] = $value->getMaterialNombre();
            }

            //traer los colores
            $colores = \ColorQuery::create()->find();
            $colores_array = array();
            $value = new \Color();
            foreach ($colores as $value){
                $colores_array[$value->getIdcolor()] = $value->getColorNombre();
            }



            //traer las temporadas
            $temporadas = \TemporadaQuery::create()->find();

            $temporadas_array = array();
            $value = new \Temporada();
            foreach ($temporadas as $value){
                $temporadas_array[$value->getIdtemporada()] = $value->getTemporadaNombre();
            }


        

            $form = new \Application\Catalogo\Form\ProductosForm($calzados_array,$provedorees_array,$marcas_array,$temporadas_array,$tallajes_array,$materiales_array,$colores_array,$medidas_array);
            
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            $view_model = new ViewModel();
            $view_model->setTemplate('application/catalogo/productos/ver'); 
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
            ));
            return $view_model;
            
            
        }else{
            $this->flashMessenger()->addErrorMessage('Id Invalido.');
            return $this->redirect()->toUrl('/catalogo/productos');
        }
        return $view_model;
    }

    public function eliminarAction(){
        $request = $this->getRequest();

        if($request->isPost())
        {
            $id = $this->params()->fromRoute('id');
            $entity = \ProductoQuery::Create()->findPk($id);
            $entity->delete();

            if($entity->isDeleted()){
                $this->flashMessenger()->addSuccessMessage('Su registro ha sido eliminado satisfactoriamente.');
            }else{
                $this->flashMessenger()->addErrorMessage('Ocurrió un error al intentar eliminar. Pruebe más tarde.');
            }
        }

        return $this->redirect()->toUrl('/catalogo/productos');
    }


}
