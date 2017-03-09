<?php



/**
 * This class defines the structure of the 'productomaterial' table.
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
class ProductomaterialTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.ProductomaterialTableMap';

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
        $this->setName('productomaterial');
        $this->setPhpName('Productomaterial');
        $this->setClassname('Productomaterial');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproductomaterial', 'Idproductomaterial', 'INTEGER', true, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', true, null, null);
        $this->addForeignKey('idmaterial', 'Idmaterial', 'INTEGER', 'material', 'idmaterial', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Material', 'Material', RelationMap::MANY_TO_ONE, array('idmaterial' => 'idmaterial', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Productovariante', 'Productovariante', RelationMap::ONE_TO_MANY, array('idproductomaterial' => 'idproductomaterial', ), 'CASCADE', 'CASCADE', 'Productovariantes');
    } // buildRelations()

} // ProductomaterialTableMap
