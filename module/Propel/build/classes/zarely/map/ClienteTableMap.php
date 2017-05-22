<?php



/**
 * This class defines the structure of the 'cliente' table.
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
class ClienteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.ClienteTableMap';

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
        $this->setName('cliente');
        $this->setPhpName('Cliente');
        $this->setClassname('Cliente');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcliente', 'Idcliente', 'INTEGER', true, null, null);
        $this->addColumn('cliente_nombre', 'ClienteNombre', 'VARCHAR', true, 45, null);
        $this->addColumn('cliente_apaterno', 'ClienteApaterno', 'VARCHAR', true, 45, null);
        $this->addColumn('cliente_amaterno', 'ClienteAmaterno', 'VARCHAR', true, 45, null);
        $this->addColumn('cliente_rfc', 'ClienteRfc', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_razonsocial', 'ClienteRazonsocial', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_callefiscal', 'ClienteCallefiscal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_numerofiscal', 'ClienteNumerofiscal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_interiorfiscal', 'ClienteInteriorfiscal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_coloniafiscal', 'ClienteColoniafiscal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_ciudadfiscal', 'ClienteCiudadfiscal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_cpfiscal', 'ClienteCpfiscal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_estadofiscal', 'ClienteEstadofiscal', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_calle', 'ClienteCalle', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_numero', 'ClienteNumero', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_interior', 'ClienteInterior', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_colonia', 'ClienteColonia', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_cp', 'ClienteCp', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_ciudad', 'ClienteCiudad', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_estado', 'ClienteEstado', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_tipo', 'ClienteTipo', 'CHAR', true, null, null);
        $this->getColumn('cliente_tipo', false)->setValueSet(array (
  0 => 'mayorista',
  1 => 'general',
));
        $this->addColumn('cliente_fecharegistro', 'ClienteFecharegistro', 'DATE', true, null, null);
        $this->addColumn('cliente_estatus', 'ClienteEstatus', 'BOOLEAN', true, 1, null);
        $this->addColumn('cliente_credito', 'ClienteCredito', 'TINYINT', true, null, null);
        $this->addColumn('cliente_limitecredito', 'ClienteLimitecredito', 'DECIMAL', false, 15, null);
        $this->addColumn('cliente_creditorestante', 'ClienteCreditorestante', 'DECIMAL', false, 15, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ClienterelacionadoRelatedByIdcliente', 'Clienterelacionado', RelationMap::ONE_TO_MANY, array('idcliente' => 'idcliente', ), 'CASCADE', 'CASCADE', 'ClienterelacionadosRelatedByIdcliente');
        $this->addRelation('ClienterelacionadoRelatedByIdclienteasociado', 'Clienterelacionado', RelationMap::ONE_TO_MANY, array('idcliente' => 'idclienteasociado', ), 'CASCADE', 'CASCADE', 'ClienterelacionadosRelatedByIdclienteasociado');
        $this->addRelation('Pedidomayorista', 'Pedidomayorista', RelationMap::ONE_TO_MANY, array('idcliente' => 'idcliente', ), 'CASCADE', 'CASCADE', 'Pedidomayoristas');
        $this->addRelation('Venta', 'Venta', RelationMap::ONE_TO_MANY, array('idcliente' => 'idcliente', ), 'CASCADE', 'CASCADE', 'Ventas');
    } // buildRelations()

} // ClienteTableMap
