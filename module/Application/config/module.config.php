<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'json' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/json[/:action]',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            'login' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/login[/:action]',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Login',
                        'action'     => 'index',
                    ),
                ),
            ),

            'empleados' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/catalogo/empleados[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Catalogo\Controller\Empleados',
                        'action'     => 'index',
                    ),
                ),
            ),

            'clientes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/catalogo/clientes[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Catalogo\Controller\Clientes',
                        'action'     => 'index',
                    ),
                ),
            ),

            'cuentas' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/catalogo/cuentas[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Catalogo\Controller\Cuentas',
                        'action'     => 'index',
                    ),
                ),
            ),

            'temporadas' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/catalogo/temporadas[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Catalogo\Controller\Temporadas',
                        'action'     => 'index',
                    ),
                ),
            ),

            'medidas' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/catalogo/medidas[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Catalogo\Controller\Medidas',
                        'action'     => 'index',
                    ),
                ),
            ),

            'sucursales' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/catalogo/sucursales[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Catalogo\Controller\Sucursales',
                        'action'     => 'index',
                    ),
                ),
            ),

            'tallajes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/catalogo/tallajes[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Catalogo\Controller\Tallajes',
                        'action'     => 'index',
                    ),
                ),
            ),

            'colores' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/catalogo/colores[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Catalogo\Controller\Colores',
                        'action'     => 'index',
                    ),
                ),
            ),

            'materiales' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/catalogo/materiales[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Catalogo\Controller\Materiales',
                        'action'     => 'index',
                    ),
                ),
            ),  

            'marcas' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/catalogo/marcas[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Catalogo\Controller\Marcas',
                        'action'     => 'index',
                    ),
                ),
            ),

            'tipocalzados' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/catalogo/tipocalzados[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Catalogo\Controller\TipoCalzados',
                        'action'     => 'index',
                    ),
                ),
            ),

            'proveedores' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/catalogo/proveedores[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Catalogo\Controller\Proveedores',
                        'action'     => 'index',
                    ),
                ),
            ),

            'productos' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/catalogo/productos[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Catalogo\Controller\Productos',
                        'action'     => 'index',
                    ),
                ),
            ),

            'gastos' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/catalogo/gastos[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Catalogo\Controller\Gastos',
                        'action'     => 'index',
                    ),
                ),
            ),

            'precios' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/producto/precios[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Producto\Controller\PrecioProducto',
                        'action'     => 'index',
                    ),
                ),
            ),

            'reordenes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/producto/reordenes[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Producto\Controller\ReordenProducto',
                        'action'     => 'index',
                    ),
                ),
            ),

            'existencias' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/producto/existencias[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Producto\Controller\ExistenciaProducto',
                        'action'     => 'index',
                    ),
                ),
            ),

            'enreorden' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/producto/enreorden[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Producto\Controller\EnReordenProducto',
                        'action'     => 'index',
                    ),
                ),
            ),

            'mayoristas' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/pedidos/mayoristas[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Pedido\Controller\PedidoMayorista',
                        'action'     => 'index',
                    ),
                ),
            ),


            'pendientes' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/pedidos/pendientes[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Pedido\Controller\PedidoPendiente',
                        'action'     => 'index',
                    ),
                ),
            ),

            'pendientesproducto' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/pedidos/pendientes-producto[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Pedido\Controller\PedidoPendienteProducto',
                        'action'     => 'index',
                    ),
                ),
            ),

            'solicitados' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/pedidos/solicitados[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Pedido\Controller\PedidoSolicitado',
                        'action'     => 'index',
                    ),
                ),
            ),

            'solicitadosproducto' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/pedidos/solicitados-producto[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Pedido\Controller\PedidoSolicitadoProducto',
                        'action'     => 'index',
                    ),
                ),
            ),


            'transitos' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/pedidos/transitos[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Pedido\Controller\PedidoTransito',
                        'action'     => 'index',
                    ),
                ),
            ),

            'transitosproducto' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/pedidos/transitos-producto[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Pedido\Controller\PedidoTransitoProducto',
                        'action'     => 'index',
                    ),
                ),
            ),



            'completados' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/pedidos/completados[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Pedido\Controller\PedidoCompletado',
                        'action'     => 'index',
                    ),
                ),
            ),

            'completadosproducto' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/pedidos/completados-producto[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Pedido\Controller\PedidoCompletadoProducto',
                        'action'     => 'index',
                    ),
                ),
            ),

            'comprasgenerales' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/compras/generales[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Compra\Controller\CompraGeneral',
                        'action'     => 'index',
                    ),
                ),
            ),


            'devolucionesgenerales' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/devoluciones/generales[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Devolucion\Controller\DevolucionGeneral',
                        'action'     => 'index',
                    ),
                ),
            ),


            'porpagar' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/flujo-efectivo/porpagar[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\FlujoEfectivo\Controller\CuentaPorPagar',
                        'action'     => 'index',
                    ),
                ),
            ),

            'porcobrar' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/flujo-efectivo/porcobrar[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\FlujoEfectivo\Controller\CuentaPorCobrar',
                        'action'     => 'index',
                    ),
                ),
            ),

            'transferencias' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/transferencias[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\Transferencia\Controller\Transferencia',
                        'action'     => 'index',
                    ),
                ),
            ),

            'puntodeventa' => array(
                'type' => 'Segment',
                'options' => array(
                    'route'    => '/puntodeventa[/:action][/:id]',
                    'defaults' => array(
                        'controller' => 'Application\PuntoDeVenta\Controller\PuntoDeVenta',
                        'action'     => 'index',
                    ),
                ),
            ),


            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/application',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController',
            'Application\Catalogo\Controller\Materiales' => 'Application\Catalogo\Controller\MaterialesController',
            'Application\Catalogo\Controller\Marcas' => 'Application\Catalogo\Controller\MarcasController',
            'Application\Catalogo\Controller\Temporadas' => 'Application\Catalogo\Controller\TemporadasController',
            'Application\Catalogo\Controller\Colores' => 'Application\Catalogo\Controller\ColoresController',
            'Application\Catalogo\Controller\TipoCalzados' => 'Application\Catalogo\Controller\TipoCalzadosController',
            'Application\Catalogo\Controller\Gastos' => 'Application\Catalogo\Controller\GastosController',
            'Application\Catalogo\Controller\Empleados' => 'Application\Catalogo\Controller\EmpleadosController',
            'Application\Catalogo\Controller\Clientes' => 'Application\Catalogo\Controller\ClientesController',
            'Application\Catalogo\Controller\Cuentas' => 'Application\Catalogo\Controller\CuentasController',
            'Application\Catalogo\Controller\Sucursales' => 'Application\Catalogo\Controller\SucursalesController',
            'Application\Catalogo\Controller\Tallajes' => 'Application\Catalogo\Controller\TallajesController',
            'Application\Catalogo\Controller\Proveedores' => 'Application\Catalogo\Controller\ProveedoresController',
            'Application\Catalogo\Controller\Productos' => 'Application\Catalogo\Controller\ProductosController',
            'Application\Catalogo\Controller\Medidas' => 'Application\Catalogo\Controller\MedidasController',
            'Application\Controller\Login' => 'Application\Controller\LoginController',

            'Application\Producto\Controller\PrecioProducto' => 'Application\Producto\Controller\PrecioProductoController',

            'Application\Producto\Controller\ReordenProducto' => 'Application\Producto\Controller\ReordenProductoController',

            'Application\Producto\Controller\ExistenciaProducto' => 'Application\Producto\Controller\ExistenciaProductoController',

            'Application\Producto\Controller\EnReordenProducto' => 'Application\Producto\Controller\EnReordenProductoController',

            'Application\Pedido\Controller\PedidoPendiente' => 'Application\Pedido\Controller\PedidoPendienteController',

            'Application\Pedido\Controller\PedidoSolicitado' => 'Application\Pedido\Controller\PedidoSolicitadoController',

            'Application\Pedido\Controller\PedidoTransito' => 'Application\Pedido\Controller\PedidoTransitoController',

            'Application\Pedido\Controller\PedidoCompletado' => 'Application\Pedido\Controller\PedidoCompletadoController',

            'Application\Pedido\Controller\PedidoCompletadoProducto' => 'Application\Pedido\Controller\PedidoCompletadoProductoController',

            'Application\Pedido\Controller\PedidoTransitoProducto' => 'Application\Pedido\Controller\PedidoTransitoProductoController',

            'Application\Pedido\Controller\PedidoSolicitadoProducto' => 'Application\Pedido\Controller\PedidoSolicitadoProductoController',

            'Application\Pedido\Controller\PedidoPendienteProducto' => 'Application\Pedido\Controller\PedidoPendienteProductoController',

            'Application\Pedido\Controller\PedidoMayorista' => 'Application\Pedido\Controller\PedidoMayoristaController',

            'Application\Compra\Controller\CompraGeneral' => 'Application\Compra\Controller\CompraGeneralController',

            'Application\Devolucion\Controller\DevolucionGeneral' => 'Application\Devolucion\Controller\DevolucionGeneralController',

            'Application\FlujoEfectivo\Controller\CuentaPorCobrar' => 'Application\FlujoEfectivo\Controller\CuentaPorCobrarController',

            'Application\FlujoEfectivo\Controller\CuentaPorPagar' => 'Application\FlujoEfectivo\Controller\CuentaPorPagarController',
            'Application\Transferencia\Controller\Transferencia' => 'Application\Transferencia\Controller\TransferenciaController',
            'Application\PuntoDeVenta\Controller\PuntoDeVenta' => 'Application\PuntoDeVenta\Controller\PuntoDeVentaController',


        ),
    ),

    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
