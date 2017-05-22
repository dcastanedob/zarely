<?php



/**
 * This class defines the structure of the 'clienterelacionado' table.
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
class ClienterelacionadoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.ClienterelacionadoTableMap';

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
        $this->setName('clienterelacionado');
        $this->setPhpName('Clienterelacionado');
        $this->setClassname('Clienterelacionado');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idclienterelacionado', 'Idclienterelacionado', 'INTEGER', true, null, null);
        $this->addForeignKey('idcliente', 'Idcliente', 'INTEGER', 'cliente', 'idcliente', true, null, null);
        $this->addForeignKey('idclienteasociado', 'Idclienteasociado', 'INTEGER', 'cliente', 'idcliente', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('ClienteRelatedByIdcliente', 'Cliente', RelationMap::MANY_TO_ONE, array('idcliente' => 'idcliente', ), 'CASCADE', 'CASCADE');
        $this->addRelation('ClienteRelatedByIdclienteasociado', 'Cliente', RelationMap::MANY_TO_ONE, array('idclienteasociado' => 'idcliente', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // ClienterelacionadoTableMap
