<?php



/**
 * This class defines the structure of the 'compra' table.
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
class CompraTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.CompraTableMap';

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
        $this->setName('compra');
        $this->setPhpName('Compra');
        $this->setClassname('Compra');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcompra', 'Idcompra', 'INTEGER', true, null, null);
        $this->addForeignKey('idproveedor', 'Idproveedor', 'INTEGER', 'proveedor', 'idproveedor', true, null, null);
        $this->addColumn('compra_fechacreacion', 'CompraFechacreacion', 'DATE', true, null, null);
        $this->addColumn('compra_fechacompra', 'CompraFechacompra', 'DATE', true, null, null);
        $this->addColumn('compra_total', 'CompraTotal', 'DECIMAL', true, 10, null);
        $this->addColumn('compra_estatuspago', 'CompraEstatuspago', 'BOOLEAN', true, 1, null);
        $this->addColumn('compra_estatus', 'CompraEstatus', 'CHAR', true, null, null);
        $this->getColumn('compra_estatus', false)->setValueSet(array (
  0 => 'pendiente',
  1 => 'enviada',
  2 => 'procesando',
  3 => 'en transito',
  4 => 'recibido',
  5 => 'revisado',
));
        $this->addColumn('compra_nota', 'CompraNota', 'VARCHAR', false, 45, null);
        $this->addColumn('compra_comprobante', 'CompraComprobante', 'VARCHAR', false, 45, null);
        $this->addColumn('compra_fechaentrega', 'CompraFechaentrega', 'DATE', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Proveedor', 'Proveedor', RelationMap::MANY_TO_ONE, array('idproveedor' => 'idproveedor', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Compradetalle', 'Compradetalle', RelationMap::ONE_TO_MANY, array('idcompra' => 'idcompra', ), 'CASCADE', 'CASCADE', 'Compradetalles');
    } // buildRelations()

} // CompraTableMap
