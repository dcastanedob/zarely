<?php



/**
 * This class defines the structure of the 'productocolor' table.
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
class ProductocolorTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.ProductocolorTableMap';

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
        $this->setName('productocolor');
        $this->setPhpName('Productocolor');
        $this->setClassname('Productocolor');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproductocolor', 'Idproductocolor', 'INTEGER', true, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', true, null, null);
        $this->addForeignKey('idcolor', 'Idcolor', 'INTEGER', 'color', 'idcolor', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Color', 'Color', RelationMap::MANY_TO_ONE, array('idcolor' => 'idcolor', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), null, null);
        $this->addRelation('Productovariante', 'Productovariante', RelationMap::ONE_TO_MANY, array('idproductocolor' => 'idproductocolor', ), 'CASCADE', 'CASCADE', 'Productovariantes');
    } // buildRelations()

} // ProductocolorTableMap
