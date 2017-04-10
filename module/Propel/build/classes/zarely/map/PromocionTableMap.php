<?php



/**
 * This class defines the structure of the 'promocion' table.
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
class PromocionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.PromocionTableMap';

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
        $this->setName('promocion');
        $this->setPhpName('Promocion');
        $this->setClassname('Promocion');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpromocion', 'Idpromocion', 'INTEGER', true, null, null);
        $this->addColumn('promocion_nombre', 'PromocionNombre', 'LONGVARCHAR', true, null, null);
        $this->addColumn('promocion_fechainicio', 'PromocionFechainicio', 'DATE', true, null, null);
        $this->addColumn('promocion_fechafin', 'PromocionFechafin', 'DATE', true, null, null);
        $this->addColumn('promocion_estatus', 'PromocionEstatus', 'BOOLEAN', true, 1, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Promociondetalle', 'Promociondetalle', RelationMap::ONE_TO_MANY, array('idpromocion' => 'idpromocion', ), 'CASCADE', 'CASCADE', 'Promociondetalles');
    } // buildRelations()

} // PromocionTableMap
