<?php



/**
 * This class defines the structure of the 'proveedormarca' table.
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
class ProveedormarcaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.ProveedormarcaTableMap';

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
        $this->setName('proveedormarca');
        $this->setPhpName('Proveedormarca');
        $this->setClassname('Proveedormarca');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproveedormarca', 'Idproveedormarca', 'INTEGER', true, null, null);
        $this->addForeignKey('idproveedor', 'Idproveedor', 'INTEGER', 'proveedor', 'idproveedor', true, null, null);
        $this->addForeignKey('idmarca', 'Idmarca', 'INTEGER', 'marca', 'idmarca', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Marca', 'Marca', RelationMap::MANY_TO_ONE, array('idmarca' => 'idmarca', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Proveedor', 'Proveedor', RelationMap::MANY_TO_ONE, array('idproveedor' => 'idproveedor', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ProveedormarcaTableMap
