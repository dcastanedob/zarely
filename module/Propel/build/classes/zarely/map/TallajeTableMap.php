<?php



/**
 * This class defines the structure of the 'tallaje' table.
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
class TallajeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.TallajeTableMap';

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
        $this->setName('tallaje');
        $this->setPhpName('Tallaje');
        $this->setClassname('Tallaje');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idtallaje', 'Idtallaje', 'INTEGER', true, null, null);
        $this->addColumn('tallaje_nombre', 'TallajeNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('talla_70', 'Talla70', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_75', 'Talla75', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_80', 'Talla80', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_85', 'Talla85', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_90', 'Talla90', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_95', 'Talla95', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_100', 'Talla100', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_105', 'Talla105', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_110', 'Talla110', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_115', 'Talla115', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_120', 'Talla120', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_125', 'Talla125', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_130', 'Talla130', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_135', 'Talla135', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_140', 'Talla140', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_145', 'Talla145', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_150', 'Talla150', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_155', 'Talla155', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_160', 'Talla160', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_165', 'Talla165', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_170', 'Talla170', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_175', 'Talla175', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_180', 'Talla180', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_185', 'Talla185', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_190', 'Talla190', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_195', 'Talla195', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_200', 'Talla200', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_205', 'Talla205', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_210', 'Talla210', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_215', 'Talla215', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_220', 'Talla220', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_225', 'Talla225', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_230', 'Talla230', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_235', 'Talla235', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_240', 'Talla240', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_245', 'Talla245', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_250', 'Talla250', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_255', 'Talla255', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_260', 'Talla260', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_265', 'Talla265', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_270', 'Talla270', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_275', 'Talla275', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_280', 'Talla280', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_285', 'Talla285', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_290', 'Talla290', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_295', 'Talla295', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_300', 'Talla300', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_305', 'Talla305', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_310', 'Talla310', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_315', 'Talla315', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_320', 'Talla320', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_325', 'Talla325', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_330', 'Talla330', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_335', 'Talla335', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_340', 'Talla340', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_345', 'Talla345', 'BOOLEAN', false, 1, null);
        $this->addColumn('talla_350', 'Talla350', 'BOOLEAN', false, 1, null);
        $this->addColumn('tallajerango', 'Tallajerango', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Marcatallaje', 'Marcatallaje', RelationMap::ONE_TO_MANY, array('idtallaje' => 'idtallaje', ), 'CASCADE', 'CASCADE', 'Marcatallajes');
        $this->addRelation('Producto', 'Producto', RelationMap::ONE_TO_MANY, array('idtallaje' => 'idtallaje', ), 'CASCADE', 'CASCADE', 'Productos');
    } // buildRelations()

} // TallajeTableMap
