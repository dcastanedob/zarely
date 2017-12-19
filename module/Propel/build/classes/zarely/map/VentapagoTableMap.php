<?php



/**
 * This class defines the structure of the 'ventapago' table.
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
class VentapagoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.VentapagoTableMap';

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
        $this->setName('ventapago');
        $this->setPhpName('Ventapago');
        $this->setClassname('Ventapago');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idventapago', 'Idventapago', 'INTEGER', true, null, null);
        $this->addForeignKey('idventa', 'Idventa', 'INTEGER', 'venta', 'idventa', true, null, null);
        $this->addColumn('venta_fecha', 'VentaFecha', 'TIMESTAMP', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addColumn('ventapago_metododepago', 'VentapagoMetododepago', 'CHAR', true, null, null);
        $this->getColumn('ventapago_metododepago', false)->setValueSet(array (
  0 => 'efectivo',
  1 => 'vales',
  2 => 'tarjeta',
  3 => 'puntos',
));
        $this->addColumn('ventapago_cantidad', 'VentapagoCantidad', 'DECIMAL', false, 15, null);
        $this->addColumn('ventapago_referencia', 'VentapagoReferencia', 'VARCHAR', false, 50, null);
        $this->addColumn('ventapago_cuatrodigitos', 'VentapagoCuatrodigitos', 'VARCHAR', false, 4, null);
        $this->addColumn('idvale', 'Idvale', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Venta', 'Venta', RelationMap::MANY_TO_ONE, array('idventa' => 'idventa', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // VentapagoTableMap
