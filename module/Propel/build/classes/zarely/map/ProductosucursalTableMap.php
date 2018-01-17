<?php



/**
 * This class defines the structure of the 'productosucursal' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.zarely.map
 */
class ProductosucursalTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.ProductosucursalTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('productosucursal');
        $this->setPhpName('Productosucursal');
        $this->setClassname('Productosucursal');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproductosucursal', 'Idproductosucursal', 'INTEGER', true, null, null);
        $this->addForeignKey('idproductovariante', 'Idproductovariante', 'INTEGER', 'productovariante', 'idproductovariante', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addColumn('productosucursal_existencia', 'ProductosucursalExistencia', 'INTEGER', true, null, 0);
        $this->addColumn('productosucursal_minimo', 'ProductosucursalMinimo', 'INTEGER', true, null, null);
        $this->addColumn('productosucursal_reorden', 'ProductosucursalReorden', 'INTEGER', true, null, null);
        $this->addColumn('productosucursal_precioventa', 'ProductosucursalPrecioventa', 'DECIMAL', true, 10, null);
        $this->addColumn('productosucursal_preciomayoreo', 'ProductosucursalPreciomayoreo', 'DECIMAL', true, 10, null);
        $this->addColumn('productosucursal_estatus', 'ProductosucursalEstatus', 'BOOLEAN', true, 1, true);
        $this->addColumn('productosucursal_costo', 'ProductosucursalCosto', 'DECIMAL', true, 10, null);
        $this->addColumn('productosucursal_precioventamayoreonuevo', 'ProductosucursalPrecioventamayoreonuevo', 'DECIMAL', false, 10, null);
        $this->addColumn('productosucursal_precioventanuevo', 'ProductosucursalPrecioventanuevo', 'DECIMAL', false, 10, null);
        $this->addColumn('productosucursal_precioaplicado', 'ProductosucursalPrecioaplicado', 'BOOLEAN', false, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Productovariante', 'Productovariante', RelationMap::MANY_TO_ONE, array('idproductovariante' => 'idproductovariante', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ProductosucursalTableMap
