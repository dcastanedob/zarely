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
    
    public $column_map = array(
        0 => 'a.ProductoModelo',
        1 => 'productos_existencia'
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
                <a href="/reporte-bodega/inventario/ver/' . $value['idproductosucursal'] . '">
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


}
