<?php



/**
 * This class defines the structure of the 'cuentabancariamovimiento' table.
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
class CuentabancariamovimientoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.CuentabancariamovimientoTableMap';

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
        $this->setName('cuentabancariamovimiento');
        $this->setPhpName('Cuentabancariamovimiento');
        $this->setClassname('Cuentabancariamovimiento');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcuentabancariamovimiento', 'Idcuentabancariamovimiento', 'INTEGER', true, null, null);
        $this->addForeignKey('idcuentabancaria', 'Idcuentabancaria', 'INTEGER', 'cuentabancaria', 'idcuentabancaria', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addColumn('cuentabancariamovimiento_proceso', 'CuentabancariamovimientoProceso', 'CHAR', true, null, null);
        $this->getColumn('cuentabancariamovimiento_proceso', false)->setValueSet(array (
  0 => 'compra',
  1 => 'venta',
));
        $this->addColumn('idproceso', 'Idproceso', 'INTEGER', true, null, null);
        $this->addColumn('cuentabancariamovimiento_cantidad', 'CuentabancariamovimientoCantidad', 'DECIMAL', true, 10, null);
        $this->addColumn('cuentabancariamovimiento_comprobante', 'CuentabancariamovimientoComprobante', 'LONGVARCHAR', false, null, null);
        $this->addColumn('cuentabancariamovimiento_fechamovimiento', 'CuentabancariamovimientoFechamovimiento', 'TIMESTAMP', true, null, null);
        $this->addColumn('cuentabancariamovimiento_fechacreacion', 'CuentabancariamovimientoFechacreacion', 'TIMESTAMP', true, null, null);
        $this->addColumn('cuentabancariamovimiento_balance', 'CuentabancariamovimientoBalance', 'DECIMAL', true, 10, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Cuentabancaria', 'Cuentabancaria', RelationMap::MANY_TO_ONE, array('idcuentabancaria' => 'idcuentabancaria', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CuentabancariamovimientoTableMap
