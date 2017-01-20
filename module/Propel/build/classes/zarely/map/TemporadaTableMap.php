<?php



/**
 * This class defines the structure of the 'temporada' table.
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
class TemporadaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.TemporadaTableMap';

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
        $this->setName('temporada');
        $this->setPhpName('Temporada');
        $this->setClassname('Temporada');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idtemporada', 'Idtemporada', 'INTEGER', true, null, null);
        $this->addColumn('temporada_nombre', 'TemporadaNombre', 'VARCHAR', true, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Producto', 'Producto', RelationMap::ONE_TO_MANY, array('idtemporada' => 'idtemporada', ), 'CASCADE', 'CASCADE', 'Productos');
    } // buildRelations()

} // TemporadaTableMap
