<?php



/**
 * This class defines the structure of the 'vale' table.
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
class ValeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.ValeTableMap';

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
        $this->setName('vale');
        $this->setPhpName('Vale');
        $this->setClassname('Vale');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idvale', 'Idvale', 'INTEGER', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addColumn('vale_cantidad', 'ValeCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('vale_estatus', 'ValeEstatus', 'BOOLEAN', true, 1, null);
        $this->addColumn('vale_vigenciadesde', 'ValeVigenciadesde', 'TIMESTAMP', true, null, null);
        $this->addColumn('vale_vigenciahasta', 'ValeVigenciahasta', 'TIMESTAMP', true, null, null);
        $this->addColumn('vale_cantidadutilizada', 'ValeCantidadutilizada', 'DECIMAL', false, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ValeTableMap
