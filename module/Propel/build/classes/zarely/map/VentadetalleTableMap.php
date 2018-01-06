<?php



/**
 * This class defines the structure of the 'ventadetalle' table.
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
class VentadetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.VentadetalleTableMap';

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
        $this->setName('ventadetalle');
        $this->setPhpName('Ventadetalle');
        $this->setClassname('Ventadetalle');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idventadetalle', 'Idventadetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idventa', 'Idventa', 'INTEGER', 'venta', 'idventa', true, null, null);
        $this->addForeignKey('iddescuento', 'Iddescuento', 'INTEGER', 'descuento', 'iddescuento', false, null, null);
        $this->addForeignKey('idpromocion', 'Idpromocion', 'INTEGER', 'promocion', 'idpromocion', false, null, null);
        $this->addForeignKey('idproductovariante', 'Idproductovariante', 'INTEGER', 'productovariante', 'idproductovariante', false, null, null);
        $this->addColumn('ventadetalle_cantidad', 'VentadetalleCantidad', 'INTEGER', true, null, null);
        $this->addColumn('ventadetalle_subtotal', 'VentadetalleSubtotal', 'DECIMAL', true, 15, null);
        $this->addColumn('ventadetalle_preciounitario', 'VentadetallePreciounitario', 'DECIMAL', true, 15, null);
        $this->addColumn('ventadetalle_estatus', 'VentadetalleEstatus', 'CHAR', true, null, null);
        $this->getColumn('ventadetalle_estatus', false)->setValueSet(array (
  0 => 'completo',
  1 => 'defecto',
  2 => 'cambio',
));
        $this->addColumn('ventadetalle_descuento', 'VentadetalleDescuento', 'FLOAT', false, null, null);
        $this->addForeignKey('idventadetallapadre', 'Idventadetallapadre', 'INTEGER', 'ventadetalle', 'idventadetalle', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Descuento', 'Descuento', RelationMap::MANY_TO_ONE, array('iddescuento' => 'iddescuento', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Productovariante', 'Productovariante', RelationMap::MANY_TO_ONE, array('idproductovariante' => 'idproductovariante', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Promocion', 'Promocion', RelationMap::MANY_TO_ONE, array('idpromocion' => 'idpromocion', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Venta', 'Venta', RelationMap::MANY_TO_ONE, array('idventa' => 'idventa', ), 'CASCADE', 'CASCADE');
        $this->addRelation('VentadetalleRelatedByIdventadetallapadre', 'Ventadetalle', RelationMap::MANY_TO_ONE, array('idventadetallapadre' => 'idventadetalle', ), 'CASCADE', 'CASCADE');
        $this->addRelation('VentadetalleRelatedByIdventadetalle', 'Ventadetalle', RelationMap::ONE_TO_MANY, array('idventadetalle' => 'idventadetallapadre', ), 'CASCADE', 'CASCADE', 'VentadetallesRelatedByIdventadetalle');
    } // buildRelations()

} // VentadetalleTableMap
