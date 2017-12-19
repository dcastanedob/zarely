<?php



/**
 * This class defines the structure of the 'pedidosucursal' table.
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
class PedidosucursalTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.PedidosucursalTableMap';

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
        $this->setName('pedidosucursal');
        $this->setPhpName('Pedidosucursal');
        $this->setClassname('Pedidosucursal');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpedidosucursal', 'Idpedidosucursal', 'INTEGER', true, null, null);
        $this->addForeignKey('idsucursal', 'Idsucursal', 'INTEGER', 'sucursal', 'idsucursal', true, null, null);
        $this->addForeignKey('idempleado', 'Idempleado', 'INTEGER', 'empleado', 'idempleado', true, null, null);
        $this->addColumn('pedidosucursal_fechasolicitud', 'PedidosucursalFechasolicitud', 'DATE', true, null, null);
        $this->addColumn('pedidosucursal_fechaentrega', 'PedidosucursalFechaentrega', 'DATE', true, null, null);
        $this->addColumn('pedidosucursal_estatus', 'PedidosucursalEstatus', 'CHAR', true, null, null);
        $this->getColumn('pedidosucursal_estatus', false)->setValueSet(array (
  0 => 'pendiente',
  1 => 'solicitado',
  2 => 'transito',
  3 => 'completado',
));
        $this->addColumn('pedidosucursal_nota', 'PedidosucursalNota', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Empleado', 'Empleado', RelationMap::MANY_TO_ONE, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Sucursal', 'Sucursal', RelationMap::MANY_TO_ONE, array('idsucursal' => 'idsucursal', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Pedidosucursaldetalle', 'Pedidosucursaldetalle', RelationMap::ONE_TO_MANY, array('idpedidosucursal' => 'idpedidosucursal', ), 'CASCADE', 'CASCADE', 'Pedidosucursaldetalles');
    } // buildRelations()

} // PedidosucursalTableMap
