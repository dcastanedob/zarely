<?php



/**
 * This class defines the structure of the 'sucursal' table.
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
class SucursalTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.SucursalTableMap';

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
        $this->setName('sucursal');
        $this->setPhpName('Sucursal');
        $this->setClassname('Sucursal');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idsucursal', 'Idsucursal', 'INTEGER', true, null, null);
        $this->addColumn('sucursal_nombrecomercial', 'SucursalNombrecomercial', 'VARCHAR', true, 255, null);
        $this->addColumn('sucursal_razonsocial', 'SucursalRazonsocial', 'VARCHAR', true, 255, null);
        $this->addColumn('sucursal_calle', 'SucursalCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('sucursal_numexterno', 'SucursalNumexterno', 'VARCHAR', false, 45, null);
        $this->addColumn('sucursal_numinterior', 'SucursalNuminterior', 'VARCHAR', false, 45, null);
        $this->addColumn('sucursal_colonia', 'SucursalColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('sucursal_codigopostal', 'SucursalCodigopostal', 'VARCHAR', false, 45, null);
        $this->addColumn('sucursal_ciudad', 'SucursalCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('sucursal_estado', 'SucursalEstado', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Pedido', 'Pedido', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Pedidos');
        $this->addRelation('Productosucursal', 'Productosucursal', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Productosucursals');
        $this->addRelation('Sucursalempleado', 'Sucursalempleado', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Sucursalempleados');
        $this->addRelation('TransferenciaRelatedByIdsucursaldestino', 'Transferencia', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursaldestino', ), 'CASCADE', 'CASCADE', 'TransferenciasRelatedByIdsucursaldestino');
        $this->addRelation('TransferenciaRelatedByIdsucursalorigen', 'Transferencia', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursalorigen', ), 'CASCADE', 'CASCADE', 'TransferenciasRelatedByIdsucursalorigen');
        $this->addRelation('Venta', 'Venta', RelationMap::ONE_TO_MANY, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE', 'Ventas');
    } // buildRelations()

} // SucursalTableMap
