<?php



/**
 * This class defines the structure of the 'productovariante' table.
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
class ProductovarianteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.ProductovarianteTableMap';

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
        $this->setName('productovariante');
        $this->setPhpName('Productovariante');
        $this->setClassname('Productovariante');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproductovariante', 'Idproductovariante', 'INTEGER', true, null, null);
        $this->addForeignKey('idproducto', 'Idproducto', 'INTEGER', 'producto', 'idproducto', true, null, null);
        $this->addForeignKey('idproductocolor', 'Idproductocolor', 'INTEGER', 'productocolor', 'idproductocolor', true, null, null);
        $this->addForeignKey('idproductomaterial', 'Idproductomaterial', 'INTEGER', 'productomaterial', 'idproductomaterial', true, null, null);
        $this->addColumn('productovariante_codigobarras', 'ProductovarianteCodigobarras', 'VARCHAR', false, 45, null);
        $this->addColumn('productovariante_talla', 'ProductovarianteTalla', 'VARCHAR', true, 45, null);
        $this->addColumn('productovariante_tallatipo', 'ProductovarianteTallatipo', 'CHAR', false, null, null);
        $this->getColumn('productovariante_tallatipo', false)->setValueSet(array (
  0 => 'medida',
  1 => 'numero',
  2 => 'ninguno',
));
        $this->addColumn('productovariante_estatus', 'ProductovarianteEstatus', 'BOOLEAN', true, 1, true);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Producto', 'Producto', RelationMap::MANY_TO_ONE, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Productocolor', 'Productocolor', RelationMap::MANY_TO_ONE, array('idproductocolor' => 'idproductocolor', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Productomaterial', 'Productomaterial', RelationMap::MANY_TO_ONE, array('idproductomaterial' => 'idproductomaterial', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Compradetalle', 'Compradetalle', RelationMap::ONE_TO_MANY, array('idproductovariante' => 'idproductovariante', ), 'CASCADE', 'CASCADE', 'Compradetalles');
        $this->addRelation('Devoluciondetalle', 'Devoluciondetalle', RelationMap::ONE_TO_MANY, array('idproductovariante' => 'idproductovariante', ), 'CASCADE', 'CASCADE', 'Devoluciondetalles');
        $this->addRelation('Pedido', 'Pedido', RelationMap::ONE_TO_MANY, array('idproductovariante' => 'idproductovariante', ), 'CASCADE', 'CASCADE', 'Pedidos');
        $this->addRelation('Pedidomayoristadetalle', 'Pedidomayoristadetalle', RelationMap::ONE_TO_MANY, array('idproductovariante' => 'idproductovariante', ), 'CASCADE', 'CASCADE', 'Pedidomayoristadetalles');
        $this->addRelation('Productosucursal', 'Productosucursal', RelationMap::ONE_TO_MANY, array('idproductovariante' => 'idproductovariante', ), 'CASCADE', 'CASCADE', 'Productosucursals');
    } // buildRelations()

} // ProductovarianteTableMap
