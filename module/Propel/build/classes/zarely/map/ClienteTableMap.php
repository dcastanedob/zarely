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
        $this->addColumn('cliente_amaterno', 'ClienteAmaterno', 'VARCHAR', false, 45, null);
        $this->addColumn('cliente_rfc', 'ClienteRfc', 'VARCHAR', false, 45, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // ClienteTableMap
