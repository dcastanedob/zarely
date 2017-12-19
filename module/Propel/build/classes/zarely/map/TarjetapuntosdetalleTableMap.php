<?php



/**
 * This class defines the structure of the 'tarjetapuntosdetalle' table.
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
class TarjetapuntosdetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.TarjetapuntosdetalleTableMap';

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
        $this->setName('tarjetapuntosdetalle');
        $this->setPhpName('Tarjetapuntosdetalle');
        $this->setClassname('Tarjetapuntosdetalle');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idtarjetapuntosdetalle', 'Idtarjetapuntosdetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idtarjetapuntos', 'Idtarjetapuntos', 'INTEGER', 'tarjetapuntos', 'idtarjetapuntos', true, null, null);
        $this->addColumn('tarjetapuntosdetalle_tipo', 'TarjetapuntosdetalleTipo', 'CHAR', true, null, null);
        $this->getColumn('tarjetapuntosdetalle_tipo', false)->setValueSet(array (
  0 => 'ingreso',
  1 => 'egreso',
));
        $this->addColumn('tarjetapuntosdetalle_cantidad', 'TarjetapuntosdetalleCantidad', 'INTEGER', true, null, null);
        $this->addForeignKey('idventa', 'Idventa', 'INTEGER', 'venta', 'idventa', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Tarjetapuntos', 'Tarjetapuntos', RelationMap::MANY_TO_ONE, array('idtarjetapuntos' => 'idtarjetapuntos', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Venta', 'Venta', RelationMap::MANY_TO_ONE, array('idventa' => 'idventa', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // TarjetapuntosdetalleTableMap
