<?php



/**
 * This class defines the structure of the 'cortecaja' table.
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
class CortecajaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.CortecajaTableMap';

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
        $this->setName('cortecaja');
        $this->setPhpName('Cortecaja');
        $this->setClassname('Cortecaja');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcortecaja', 'Idcortecaja', 'INTEGER', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addForeignKey('idempleadoenvia', 'Idempleadoenvia', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addColumn('cortecaja_fecha', 'CortecajaFecha', 'DATE', true, null, null);
        $this->addColumn('cortecaja_total', 'CortecajaTotal', 'DECIMAL', true, 15, null);
        $this->addColumn('cortecaja_efectivo', 'CortecajaEfectivo', 'DECIMAL', true, 15, null);
        $this->addColumn('cortecaja_tarjetas', 'CortecajaTarjetas', 'DECIMAL', true, 15, null);
        $this->addColumn('cortecaja_vales', 'CortecajaVales', 'DECIMAL', true, 15, null);
        $this->addColumn('cortecaja_enviado', 'CortecajaEnviado', 'BOOLEAN', true, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleadoenvia' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CortecajaTableMap
