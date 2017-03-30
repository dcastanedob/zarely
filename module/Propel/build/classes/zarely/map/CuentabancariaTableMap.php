<?php



/**
 * This class defines the structure of the 'cuentabancaria' table.
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
class CuentabancariaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.CuentabancariaTableMap';

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
        $this->setName('cuentabancaria');
        $this->setPhpName('Cuentabancaria');
        $this->setClassname('Cuentabancaria');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idcuentabancaria', 'Idcuentabancaria', 'INTEGER', true, null, null);
        $this->addColumn('cuentabancaria_banco', 'CuentabancariaBanco', 'VARCHAR', true, 255, null);
        $this->addColumn('cuentabancaria_cuenta', 'CuentabancariaCuenta', 'VARCHAR', true, 45, null);
        $this->addColumn('cuentabancaria_saldo', 'CuentabancariaSaldo', 'DECIMAL', true, 15, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CuentabancariaTableMap
