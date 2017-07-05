<?php



/**
 * This class defines the structure of the 'empleado' table.
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
class EmpleadoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.EmpleadoTableMap';

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
        $this->setName('empleado');
        $this->setPhpName('Empleado');
        $this->setClassname('Empleado');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idempleado', 'Idempleado', 'INTEGER', true, null, null);
        $this->addColumn('empleado_nombre', 'EmpleadoNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_apaterno', 'EmpleadoApaterno', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_amaterno', 'EmpleadoAmaterno', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_rfc', 'EmpleadoRfc', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_nss', 'EmpleadoNss', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_curp', 'EmpleadoCurp', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_telefono', 'EmpleadoTelefono', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_email', 'EmpleadoEmail', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_estatus', 'EmpleadoEstatus', 'BOOLEAN', true, 1, null);
        $this->addColumn('empleado_username', 'EmpleadoUsername', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_password', 'EmpleadoPassword', 'VARCHAR', true, 45, null);
        $this->addColumn('empleado_comision', 'EmpleadoComision', 'BOOLEAN', true, 1, null);
        $this->addColumn('empleado_fechaentrada', 'EmpleadoFechaentrada', 'TIMESTAMP', true, null, null);
        $this->addColumn('empleado_fechanacimiento', 'EmpleadoFechanacimiento', 'DATE', true, null, null);
        $this->addColumn('empleado_calle', 'EmpleadoCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_numexterno', 'EmpleadoNumexterno', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_numinterno', 'EmpleadoNuminterno', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_colonia', 'EmpleadoColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_codigopostal', 'EmpleadoCodigopostal', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_ciudad', 'EmpleadoCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('empleado_estado', 'EmpleadoEstado', 'VARCHAR', false, 45, null);
        $this->addForeignKey('idrol', 'Idrol', 'INTEGER', 'rol', 'idrol', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Rol', 'Rol', RelationMap::MANY_TO_ONE, array('idrol' => 'idrol', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Cortecaja', 'Cortecaja', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadoenvia', ), 'CASCADE', 'CASCADE', 'Cortecajas');
        $this->addRelation('Cuentabancariamovimiento', 'Cuentabancariamovimiento', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Cuentabancariamovimientos');
        $this->addRelation('Pedidosucursal', 'Pedidosucursal', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Pedidosucursals');
        $this->addRelation('Sucursalempleado', 'Sucursalempleado', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Sucursalempleados');
        $this->addRelation('TransferenciaRelatedByIdempleadocreador', 'Transferencia', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadocreador', ), 'CASCADE', 'CASCADE', 'TransferenciasRelatedByIdempleadocreador');
        $this->addRelation('TransferenciaRelatedByIdempleadoreceptor', 'Transferencia', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadoreceptor', ), 'CASCADE', 'CASCADE', 'TransferenciasRelatedByIdempleadoreceptor');
        $this->addRelation('VentaRelatedByIdempleadocajero', 'Venta', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadocajero', ), 'CASCADE', 'CASCADE', 'VentasRelatedByIdempleadocajero');
        $this->addRelation('VentaRelatedByIdempleadovendedor', 'Venta', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleadovendedor', ), 'CASCADE', 'CASCADE', 'VentasRelatedByIdempleadovendedor');
        $this->addRelation('Ventapago', 'Ventapago', RelationMap::ONE_TO_MANY, array('idempleado' => 'idempleado', ), 'CASCADE', 'CASCADE', 'Ventapagos');
    } // buildRelations()

} // EmpleadoTableMap
