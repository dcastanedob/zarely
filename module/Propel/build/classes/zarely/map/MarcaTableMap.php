<?php



/**
 * This class defines the structure of the 'marca' table.
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
class MarcaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.MarcaTableMap';

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
        $this->setName('marca');
        $this->setPhpName('Marca');
        $this->setClassname('Marca');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idmarca', 'Idmarca', 'INTEGER', true, null, null);
        $this->addColumn('marca_nombre', 'MarcaNombre', 'VARCHAR', true, 255, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Descuentodetalle', 'Descuentodetalle', RelationMap::ONE_TO_MANY, array('idmarca' => 'idmarca', ), 'CASCADE', 'CASCADE', 'Descuentodetalles');
        $this->addRelation('Marcatallaje', 'Marcatallaje', RelationMap::ONE_TO_MANY, array('idmarca' => 'idmarca', ), 'CASCADE', 'CASCADE', 'Marcatallajes');
        $this->addRelation('Producto', 'Producto', RelationMap::ONE_TO_MANY, array('idmarca' => 'idmarca', ), 'CASCADE', 'CASCADE', 'Productos');
        $this->addRelation('Promociondetalle', 'Promociondetalle', RelationMap::ONE_TO_MANY, array('idmarca' => 'idmarca', ), 'CASCADE', 'CASCADE', 'Promociondetalles');
        $this->addRelation('Proveedormarca', 'Proveedormarca', RelationMap::ONE_TO_MANY, array('idmarca' => 'idmarca', ), 'CASCADE', 'CASCADE', 'Proveedormarcas');
    } // buildRelations()

} // MarcaTableMap
