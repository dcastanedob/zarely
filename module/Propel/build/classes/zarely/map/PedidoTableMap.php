<?php



/**
 * This class defines the structure of the 'pedido' table.
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
class PedidoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.PedidoTableMap';

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
        $this->setName('pedido');
        $this->setPhpName('Pedido');
        $this->setClassname('Pedido');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpedido', 'Idpedido', 'INTEGER', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addColumn('pedido_fecha', 'PedidoFecha', 'DATE', true, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', true, null, null);
        $this->addColumn('pedido_cantidad', 'PedidoCantidad', 'INTEGER', true, null, null);
        $this->addForeignKey('idproductovariante', 'Idproductovariante', 'INTEGER', 'productovariante', 'idproductovariante', true, null, null);
        $this->addColumn('pedido_nota', 'PedidoNota', 'LONGVARCHAR', false, null, null);
        $this->addColumn('pedido_estatus', 'PedidoEstatus', 'CHAR', true, null, 'pendiente');
        $this->getColumn('pedido_estatus', false)->setValueSet(array (
  0 => 'pendiente',
  1 => 'solicitado',
  2 => 'transito',
  3 => 'completado',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Productovariante', 'Productovariante', RelationMap::MANY_TO_ONE, array('idproductovariante' => 'idproductovariante', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // PedidoTableMap
