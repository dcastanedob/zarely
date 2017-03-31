<?php



/**
 * This class defines the structure of the 'pedidomayoristadetalle' table.
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
class PedidomayoristadetalleTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.PedidomayoristadetalleTableMap';

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
        $this->setName('pedidomayoristadetalle');
        $this->setPhpName('Pedidomayoristadetalle');
        $this->setClassname('Pedidomayoristadetalle');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idpedidomayoristadetalle', 'Idpedidomayoristadetalle', 'INTEGER', true, null, null);
        $this->addForeignKey('idpedidomayorista', 'Idpedidomayorista', 'INTEGER', 'pedidomayorista', 'idpedidomayorista', true, null, null);
        $this->addForeignKey('idproductovariante', 'Idproductovariante', 'INTEGER', 'productovariante', 'idproductovariante', true, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', true, null, null);
        $this->addColumn('pedidomayoristadetalle_cantidad', 'PedidomayoristadetalleCantidad', 'INTEGER', true, null, null);
        $this->addColumn('pedidomayoristadetalle_estatus', 'PedidomayoristadetalleEstatus', 'CHAR', true, null, null);
        $this->getColumn('pedidomayoristadetalle_estatus', false)->setValueSet(array (
  0 => 'pendiente',
  1 => 'solicitado',
  2 => 'transito',
  3 => 'completado',
));
        $this->addColumn('pedidomayoristadetalle_fecha', 'PedidomayoristadetalleFecha', 'DATE', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Pedidomayorista', 'Pedidomayorista', RelationMap::MANY_TO_ONE, array('idpedidomayorista' => 'idpedidomayorista', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Productovariante', 'Productovariante', RelationMap::MANY_TO_ONE, array('idproductovariante' => 'idproductovariante', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // PedidomayoristadetalleTableMap
