<?php



/**
 * This class defines the structure of the 'pedidomayorista' table.
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
class PedidomayoristaTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.PedidomayoristaTableMap';

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
        $this->setName('pedidomayorista');
        $this->setPhpName('Pedidomayorista');
        $this->setClassname('Pedidomayorista');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpedidomayorista', 'Idpedidomayorista', 'INTEGER', true, null, null);
        $this->addForeignKey('idcliente', 'Idcliente', 'INTEGER', 'cliente', 'idcliente', true, null, null);
        $this->addColumn('pedidomayorista_fechasolicitud', 'PedidomayoristaFechasolicitud', 'DATE', true, null, null);
        $this->addColumn('pedidomayorista_estatus', 'PedidomayoristaEstatus', 'CHAR', true, null, null);
        $this->getColumn('pedidomayorista_estatus', false)->setValueSet(array (
  0 => 'pendiente',
  1 => 'solicitado',
  2 => 'transito',
  3 => 'completado',
));
        $this->addColumn('pedidomayorista_fechaentrega', 'PedidomayoristaFechaentrega', 'DATE', true, null, null);
        $this->addColumn('pedidomayorista_nota', 'PedidomayoristaNota', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Cliente', 'Cliente', RelationMap::MANY_TO_ONE, array('idcliente' => 'idcliente', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Pedidomayoristadetalle', 'Pedidomayoristadetalle', RelationMap::ONE_TO_MANY, array('idpedidomayorista' => 'idpedidomayorista', ), 'CASCADE', 'CASCADE', 'Pedidomayoristadetalles');
    } // buildRelations()

} // PedidomayoristaTableMap
