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
            'Application\Catalogo\Controller\Sucursales' => 'Application\Catalogo\Controller\SucursalesController',
            'Application\Catalogo\Controller\Tallajes' => 'Application\Catalogo\Controller\TallajesController',
            'Application\Catalogo\Controller\Proveedores' => 'Application\Catalogo\Controller\ProveedoresController',
            'Application\Catalogo\Controller\Productos' => 'Application\Catalogo\Controller\ProductosController',
            'Application\Catalogo\Controller\Medidas' => 'Application\Catalogo\Controller\MedidasController'
            ,
            'Application\Controller\Login' => 'Application\Controller\LoginController',

            'Application\Producto\Controller\PrecioProducto' => 'Application\Producto\Controller\PrecioProductoController'
            ,

            'Application\Producto\Controller\ReordenProducto' => 'Application\Producto\Controller\ReordenProductoController'
            ,
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
