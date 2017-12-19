<?php



/**
 * This class defines the structure of the 'comisiones' table.
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
class ComisionesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.ComisionesTableMap';

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
        $this->setName('comisiones');
        $this->setPhpName('Comisiones');
        $this->setClassname('Comisiones');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcomisiones', 'Idcomisiones', 'INTEGER', true, null, null);
        $this->addColumn('idsucursal', 'Idsucursal', 'INTEGER', true, null, null);
        $this->addColumn('idempleado', 'Idempleado', 'INTEGER', true, null, null);
        $this->addColumn('comisiones_cantidad', 'ComisionesCantidad', 'INTEGER', true, null, null);
        $this->addColumn('comisiones_fecha', 'ComisionesFecha', 'DATE', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ComisionesTableMap
