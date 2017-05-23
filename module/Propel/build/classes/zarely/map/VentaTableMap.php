<?php



/**
 * This class defines the structure of the 'venta' table.
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
class VentaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.VentaTableMap';

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
        $this->setName('venta');
        $this->setPhpName('Venta');
        $this->setClassname('Venta');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idventa', 'Idventa', 'INTEGER', true, null, null);
        $this->addForeignKey('idempleadocajero', 'Idempleadocajero', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addForeignKey('idempleadovendedor', 'Idempleadovendedor', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addForeignKey('idcliente', 'Idcliente', 'INTEGER', 'cliente', 'idcliente', true, null, null);
        $this->addColumn('venta_total', 'VentaTotal', 'DECIMAL', true, 15, null);
        $this->addColumn('venta_fecha', 'VentaFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('venta_comprobante', 'VentaComprobante', 'LONGVARCHAR', false, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addColumn('venta_estatuspago', 'VentaEstatuspago', 'BOOLEAN', true, 1, null);
        $this->addColumn('venta_tipo', 'VentaTipo', 'CHAR', true, null, null);
        $this->getColumn('venta_tipo', false)->setValueSet(array (
  0 => 'venta',
  1 => 'credito',
  2 => 'apartado',
));
        $this->addColumn('venta_subtotal', 'VentaSubtotal', 'DECIMAL', true, 15, null);
        $this->addColumn('venta_iva', 'VentaIva', 'DECIMAL', true, 15, null);
        $this->addColumn('venta_estatus', 'VentaEstatus', 'CHAR', true, null, null);
        $this->getColumn('venta_estatus', false)->setValueSet(array (
  0 => 'cancelada',
  1 => 'completada',
  2 => 'procesando',
));
        $this->addColumn('venta_facturacion', 'VentaFacturacion', 'BOOLEAN', false, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Cliente', 'Cliente', RelationMap::MANY_TO_ONE, array('idcliente' => 'idcliente', ), 'CASCADE', 'CASCADE');
        $this->addRelation('EmpleadoRelatedByIdempleadocajero', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleadocajero' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('EmpleadoRelatedByIdempleadovendedor', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleadovendedor' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Ventadetalle', 'Ventadetalle', RelationMap::ONE_TO_MANY, array('idventa' => 'idventa', ), 'CASCADE', 'CASCADE', 'Ventadetalles');
        $this->addRelation('Ventapago', 'Ventapago', RelationMap::ONE_TO_MANY, array('idventa' => 'idventa', ), 'CASCADE', 'CASCADE', 'Ventapagos');
    } // buildRelations()

} // VentaTableMap
