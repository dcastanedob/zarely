<?php



/**
 * This class defines the structure of the 'devolucion' table.
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
class DevolucionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.DevolucionTableMap';

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
        $this->setName('devolucion');
        $this->setPhpName('Devolucion');
        $this->setClassname('Devolucion');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('iddevolucion', 'Iddevolucion', 'INTEGER', true, null, null);
        $this->addForeignKey('idproveedor', 'Idproveedor', 'INTEGER', 'proveedor', 'idproveedor', true, null, null);
        $this->addColumn('devolucion_fecha', 'DevolucionFecha', 'DATE', true, null, null);
        $this->addColumn('devolucion_total', 'DevolucionTotal', 'DECIMAL', true, 10, null);
        $this->addColumn('devolucion_estatus', 'DevolucionEstatus', 'CHAR', true, null, null);
        $this->getColumn('devolucion_estatus', false)->setValueSet(array (
  0 => 'pendiente',
  1 => 'completado',
));
        $this->addColumn('devolucion_nota', 'DevolucionNota', 'LONGVARCHAR', false, null, null);
        $this->addColumn('devolucion_comprobante', 'DevolucionComprobante', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Proveedor', 'Proveedor', RelationMap::MANY_TO_ONE, array('idproveedor' => 'idproveedor', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Devoluciondetalle', 'Devoluciondetalle', RelationMap::ONE_TO_MANY, array('iddevolucion' => 'iddevolucion', ), 'CASCADE', 'CASCADE', 'Devoluciondetalles');
    } // buildRelations()

} // DevolucionTableMap
