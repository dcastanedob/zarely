<?php



/**
 * This class defines the structure of the 'transferencia' table.
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
class TransferenciaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.TransferenciaTableMap';

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
        $this->setName('transferencia');
        $this->setPhpName('Transferencia');
        $this->setClassname('Transferencia');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idtransferencia', 'Idtransferencia', 'INTEGER', true, null, null);
        $this->addForeignKey('idsucursalorigen', 'Idsucursalorigen', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addForeignKey('idsucursaldestino', 'Idsucursaldestino', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addColumn('transferencia_fecha', 'TransferenciaFecha', 'TIMESTAMP', true, null, null);
        $this->addColumn('transferencia_estatus', 'TransferenciaEstatus', 'CHAR', true, null, null);
        $this->getColumn('transferencia_estatus', false)->setValueSet(array (
  0 => 'creada',
  1 => 'aceptada',
  2 => 'rechazada',
  3 => 'cancelada',
));
        $this->addForeignKey('idempleadocreador', 'Idempleadocreador', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addForeignKey('idempleadoreceptor', 'Idempleadoreceptor', 'INTEGER', 'empleado', 'idempleado', false, null, null);
        $this->addColumn('transferencia_nota', 'TransferenciaNota', 'VARCHAR', false, 45, null);
        $this->addColumn('transferencia_fecharecepcion', 'TransferenciaFecharecepcion', 'TIMESTAMP', false, null, null);
        $this->addColumn('transferencia_razon', 'TransferenciaRazon', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('EmpleadoRelatedByIdempleadocreador', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleadocreador' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('EmpleadoRelatedByIdempleadoreceptor', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleadoreceptor' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('SucursalRelatedByIdsucursaldestino', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursaldestino' => 'idsucursal', ), 'CASCADE', 'CASCADE');
        $this->addRelation('SucursalRelatedByIdsucursalorigen', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursalorigen' => 'idsucursal', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Transferenciadetalle', 'Transferenciadetalle', RelationMap::ONE_TO_MANY, array('idtransferencia' => 'idtransferencia', ), 'CASCADE', 'CASCADE', 'Transferenciadetalles');
    } // buildRelations()

} // TransferenciaTableMap
