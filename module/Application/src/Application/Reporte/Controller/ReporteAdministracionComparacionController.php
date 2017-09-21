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

class ReporteAdministracionComparacionController extends AbstractActionController
{
    public $sucursal_map = array(
        0 => 'a.SucursalNombrecomercial',
        1 => 'b.ProductoModelo',
        2 => 'ventadetalle_cantidad'
    );

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
            
            $query->useSucursalQuery('a')->endUse();

            $query->filterByVentaFecha(array('min'=>$post_data['desde'],'max'=>$post_data['hasta']))->filterByVentaEstatuspago(1)->filterByIdsucursal($post_data['sucursal'],\Criteria::IN);


            $query->withColumn('a.SucursalNombrecomercial', 'sucursal_nombre');
            $query->withColumn('SUM(venta_total)','cantidad_flujo');
            $query->withColumn('SUM(idventa)','cantidad_ventas');

            $query->groupBy("a.Idsucursal");



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

                $c2= $c->getNewCriterion('sucursal.sucursal_nombrecomercial', '%'.$search_value.'%', \Criteria::LIKE);

                $c1->addOr($c2);

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
            

           

            foreach ($query->find()->toArray(null,false,  \BasePeer::TYPE_FIELDNAME) as $value){
                $tmp['DT_RowId'] = $value['idventa'];
                $tmp['sucursal_nombre'] = $value['sucursal_nombre'];
                $tmp['cantidad_ventas'] = $value['cantidad_ventas'];
                $tmp['cantidad_flujo'] = $value['cantidad_flujo'];

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
        $view_model->setTemplate('application/reporte/administracion/comparacion/ventas/ver');

        $view_model->setVariables(array(
            'form' => $form,
            'sucursales' => $sucursal_array
        ));

        return $view_model;
    }


}
