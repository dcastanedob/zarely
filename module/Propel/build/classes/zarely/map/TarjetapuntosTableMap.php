<?php



/**
 * This class defines the structure of the 'tarjetapuntos' table.
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
class TarjetapuntosTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.TarjetapuntosTableMap';

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
        $this->setName('tarjetapuntos');
        $this->setPhpName('Tarjetapuntos');
        $this->setClassname('Tarjetapuntos');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idtarjetapuntos', 'Idtarjetapuntos', 'INTEGER', true, null, null);
        $this->addColumn('tarjetapuntos_fechaactivacion', 'TarjetapuntosFechaactivacion', 'TIMESTAMP', true, null, null);
        $this->addColumn('tarjetapuntos_estatus', 'TarjetapuntosEstatus', 'BOOLEAN', true, 1, null);
        $this->addColumn('tarjetapuntos_puntos', 'TarjetapuntosPuntos', 'INTEGER', true, null, null);
        $this->addForeignKey('idempleadoactivador', 'Idempleadoactivador', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleadoactivador' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Tarjetapuntosdetalle', 'Tarjetapuntosdetalle', RelationMap::ONE_TO_MANY, array('idtarjetapuntos' => 'idtarjetapuntos', ), 'CASCADE', 'CASCADE', 'Tarjetapuntosdetalles');
    } // buildRelations()

} // TarjetapuntosTableMap
