<?php



/**
 * This class defines the structure of the 'descuentodetalle' table.
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
class DescuentodetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.DescuentodetalleTableMap';

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
        $this->setName('descuentodetalle');
        $this->setPhpName('Descuentodetalle');
        $this->setClassname('Descuentodetalle');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('iddescuentodetalle', 'Iddescuentodetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('iddescuento', 'Iddescuento', 'INTEGER', 'descuento', 'iddescuento', true, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', false, null, null);
        $this->addForeignKey('idmarca', 'Idmarca', 'INTEGER', 'marca', 'idmarca', false, null, null);
        $this->addForeignKey('idproductovariante', 'Idproductovariante', 'INTEGER', 'productovariante', 'idproductovariante', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Descuento', 'Descuento', RelationMap::MANY_TO_ONE, array('iddescuento' => 'iddescuento', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Marca', 'Marca', RelationMap::MANY_TO_ONE, array('idmarca' => 'idmarca', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Productovariante', 'Productovariante', RelationMap::MANY_TO_ONE, array('idproductovariante' => 'idproductovariante', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // DescuentodetalleTableMap
