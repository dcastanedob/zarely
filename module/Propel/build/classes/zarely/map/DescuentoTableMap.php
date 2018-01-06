<?php



/**
 * This class defines the structure of the 'descuento' table.
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
class DescuentoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.DescuentoTableMap';

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
        $this->setName('descuento');
        $this->setPhpName('Descuento');
        $this->setClassname('Descuento');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('iddescuento', 'Iddescuento', 'INTEGER', true, null, null);
        $this->addColumn('descuento_nombre', 'DescuentoNombre', 'LONGVARCHAR', true, null, null);
        $this->addColumn('descuento_fechainicio', 'DescuentoFechainicio', 'DATE', true, null, null);
        $this->addColumn('descuento_fechafin', 'DescuentoFechafin', 'DATE', true, null, null);
        $this->addColumn('descuento_estatus', 'DescuentoEstatus', 'BOOLEAN', true, 1, null);
        $this->addColumn('descuento_tipo', 'DescuentoTipo', 'CHAR', true, null, null);
        $this->getColumn('descuento_tipo', false)->setValueSet(array (
  0 => 'porcentaje',
  1 => 'cantidad',
));
        $this->addColumn('descuento_descripcion', 'DescuentoDescripcion', 'LONGVARCHAR', false, null, null);
        $this->addColumn('descuento_cantidad', 'DescuentoCantidad', 'DECIMAL', false, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Descuentodetalle', 'Descuentodetalle', RelationMap::ONE_TO_MANY, array('iddescuento' => 'iddescuento', ), 'CASCADE', 'CASCADE', 'Descuentodetalles');
        $this->addRelation('Ventadetalle', 'Ventadetalle', RelationMap::ONE_TO_MANY, array('iddescuento' => 'iddescuento', ), 'CASCADE', 'CASCADE', 'Ventadetalles');
    } // buildRelations()

} // DescuentoTableMap
