<?php



/**
 * This class defines the structure of the 'transferenciadetalle' table.
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
class TransferenciadetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.TransferenciadetalleTableMap';

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
        $this->setName('transferenciadetalle');
        $this->setPhpName('Transferenciadetalle');
        $this->setClassname('Transferenciadetalle');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idtransferenciadetalle', 'Idtransferenciadetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idtransferencia', 'Idtransferencia', 'INTEGER', 'transferencia', 'idtransferencia', true, null, null);
        $this->addForeignKey('idproductovariante', 'Idproductovariante', 'INTEGER', 'productovariante', 'idproductovariante', true, null, null);
        $this->addColumn('transferenciadetalle_cantidad', 'TransferenciadetalleCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('transferenciadetalle_preciounitario', 'TransferenciadetallePreciounitario', 'DECIMAL', true, 10, null);
        $this->addColumn('transferenciadetalle_subtotal', 'TransferenciadetalleSubtotal', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Productovariante', 'Productovariante', RelationMap::MANY_TO_ONE, array('idproductovariante' => 'idproductovariante', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Transferencia', 'Transferencia', RelationMap::MANY_TO_ONE, array('idtransferencia' => 'idtransferencia', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // TransferenciadetalleTableMap
