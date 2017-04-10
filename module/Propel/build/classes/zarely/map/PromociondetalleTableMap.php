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
        $this->addForeignKey('idmarcaoperando', 'Idmarcaoperando', 'INTEGER', 'marca', 'idmarca', true, null, null);
        $this->addForeignKey('idproductooperando', 'Idproductooperando', 'INTEGER', 'producto', 'idproducto', true, null, null);
        $this->addColumn('promociondetalle_cantidadoperando', 'PromociondetalleCantidadoperando', 'DECIMAL', true, 10, null);
        $this->addForeignKey('idmarcaresultado', 'Idmarcaresultado', 'INTEGER', 'marca', 'idmarca', true, null, null);
        $this->addForeignKey('idproductoresultado', 'Idproductoresultado', 'INTEGER', 'producto', 'idproducto', true, null, null);
        $this->addColumn('promociondetalle_cantidadresultado', 'PromociondetalleCantidadresultado', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('MarcaRelatedByIdmarcaoperando', 'Marca', RelationMap::MANY_TO_ONE, array('idmarcaoperando' => 'idmarca', ), 'CASCADE', 'CASCADE');
        $this->addRelation('MarcaRelatedByIdmarcaresultado', 'Marca', RelationMap::MANY_TO_ONE, array('idmarcaresultado' => 'idmarca', ), 'CASCADE', 'CASCADE');
        $this->addRelation('ProductoRelatedByIdproductooperando', 'Producto', RelationMap::MANY_TO_ONE, array('idproductooperando' => 'idproducto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('ProductoRelatedByIdproductoresultado', 'Producto', RelationMap::MANY_TO_ONE, array('idproductoresultado' => 'idproducto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Promocion', 'Promocion', RelationMap::MANY_TO_ONE, array('idpromocion' => 'idpromocion', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // PromociondetalleTableMap
