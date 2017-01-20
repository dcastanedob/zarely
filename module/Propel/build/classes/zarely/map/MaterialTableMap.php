<?php



/**
 * This class defines the structure of the 'material' table.
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
class MaterialTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.MaterialTableMap';

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
        $this->setName('material');
        $this->setPhpName('Material');
        $this->setClassname('Material');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idmaterial', 'Idmaterial', 'INTEGER', true, null, null);
        $this->addColumn('material_nombre', 'MaterialNombre', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Productomaterial', 'Productomaterial', RelationMap::ONE_TO_MANY, array('idmaterial' => 'idmaterial', ), 'CASCADE', 'CASCADE', 'Productomaterials');
    } // buildRelations()

} // MaterialTableMap
