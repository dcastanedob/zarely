<?php



/**
 * This class defines the structure of the 'medida' table.
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
class MedidaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.MedidaTableMap';

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
        $this->setName('medida');
        $this->setPhpName('Medida');
        $this->setClassname('Medida');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idmedida', 'Idmedida', 'INTEGER', true, null, null);
        $this->addColumn('medida_nombre', 'MedidaNombre', 'VARCHAR', false, 255, null);
        $this->addColumn('medida_xs', 'MedidaXs', 'BOOLEAN', false, 1, null);
        $this->addColumn('medida_s', 'MedidaS', 'BOOLEAN', false, 1, null);
        $this->addColumn('medida_m', 'MedidaM', 'BOOLEAN', false, 1, null);
        $this->addColumn('medida_l', 'MedidaL', 'BOOLEAN', false, 1, null);
        $this->addColumn('medida_xl', 'MedidaXl', 'BOOLEAN', false, 1, null);
        $this->addColumn('medida_xxl', 'MedidaXxl', 'BOOLEAN', false, 1, null);
        $this->addColumn('medida_unitalla', 'MedidaUnitalla', 'BOOLEAN', false, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Productomedida', 'Productomedida', RelationMap::ONE_TO_MANY, array('idmedida' => 'idmedida', ), 'CASCADE', 'CASCADE', 'Productomedidas');
    } // buildRelations()

} // MedidaTableMap
