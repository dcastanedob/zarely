<?php



/**
 * This class defines the structure of the 'promociondetalle' table.
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
class PromociondetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.PromociondetalleTableMap';

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
        $this->setName('promociondetalle');
        $this->setPhpName('Promociondetalle');
        $this->setClassname('Promociondetalle');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpromociondetalle', 'Idpromociondetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idpromocion', 'Idpromocion', 'INTEGER', 'promocion', 'idpromocion', true, null, null);
        $this->addForeignKey('idmarca', 'Idmarca', 'INTEGER', 'marca', 'idmarca', false, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', false, null, null);
        $this->addForeignKey('idproductovariante', 'Idproductovariante', 'INTEGER', 'productovariante', 'idproductovariante', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Marca', 'Marca', RelationMap::MANY_TO_ONE, array('idmarca' => 'idmarca', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Productovariante', 'Productovariante', RelationMap::MANY_TO_ONE, array('idproductovariante' => 'idproductovariante', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Promocion', 'Promocion', RelationMap::MANY_TO_ONE, array('idpromocion' => 'idpromocion', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // PromociondetalleTableMap
