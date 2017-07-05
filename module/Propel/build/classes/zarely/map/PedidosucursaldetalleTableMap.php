<?php



/**
 * This class defines the structure of the 'pedidosucursaldetalle' table.
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
class PedidosucursaldetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.PedidosucursaldetalleTableMap';

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
        $this->setName('pedidosucursaldetalle');
        $this->setPhpName('Pedidosucursaldetalle');
        $this->setClassname('Pedidosucursaldetalle');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpedidosucursaldetalle', 'Idpedidosucursaldetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idpedidosucursal', 'Idpedidosucursal', 'INTEGER', 'pedidosucursal', 'idpedidosucursal', true, null, null);
        $this->addForeignKey('idproductovariante', 'Idproductovariante', 'INTEGER', 'productovariante', 'idproductovariante', false, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', false, null, null);
        $this->addColumn('pedidosucursaldetalle_cantidad', 'PedidosucursaldetalleCantidad', 'INTEGER', false, null, null);
        $this->addColumn('pedidosucursaldetalle_estatus', 'PedidosucursaldetalleEstatus', 'CHAR', false, null, null);
        $this->getColumn('pedidosucursaldetalle_estatus', false)->setValueSet(array (
  0 => 'pendiente',
  1 => 'solicitado',
  2 => 'transito',
  3 => 'completado',
  4 => 'cancelado',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Pedidosucursal', 'Pedidosucursal', RelationMap::MANY_TO_ONE, array('idpedidosucursal' => 'idpedidosucursal', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Productovariante', 'Productovariante', RelationMap::MANY_TO_ONE, array('idproductovariante' => 'idproductovariante', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // PedidosucursaldetalleTableMap
