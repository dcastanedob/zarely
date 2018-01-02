<?php



/**
 * This class defines the structure of the 'producto' table.
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
class ProductoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'zarely.map.ProductoTableMap';

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
        $this->setName('producto');
        $this->setPhpName('Producto');
        $this->setClassname('Producto');
        $this->setPackage('zarely');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('idproducto', 'Idproducto', 'INTEGER', true, null, null);
        $this->addColumn('producto_modelo', 'ProductoModelo', 'VARCHAR', true, 100, null);
        $this->addForeignKey('idmarca', 'Idmarca', 'INTEGER', 'marca', 'idmarca', true, null, null);
        $this->addForeignKey('idtemporada', 'Idtemporada', 'INTEGER', 'temporada', 'idtemporada', true, null, null);
        $this->addColumn('producto_comisionable', 'ProductoComisionable', 'TINYINT', true, null, null);
        $this->addForeignKey('idproveedor', 'Idproveedor', 'INTEGER', 'proveedor', 'idproveedor', true, null, null);
        $this->addColumn('producto_dirigidoa', 'ProductoDirigidoa', 'CHAR', true, null, null);
        $this->getColumn('producto_dirigidoa', false)->setValueSet(array (
  0 => 'dama',
  1 => 'caballero',
  2 => 'nino',
  3 => 'nina',
  4 => 'jovenes',
));
        $this->addColumn('producto_precioventa', 'ProductoPrecioventa', 'DECIMAL', true, 15, null);
        $this->addColumn('producto_preciomayoreo', 'ProductoPreciomayoreo', 'DECIMAL', true, 15, null);
        $this->addColumn('producto_minimo', 'ProductoMinimo', 'INTEGER', true, null, null);
        $this->addColumn('producto_reorden', 'ProductoReorden', 'INTEGER', true, null, null);
        $this->addForeignKey('idtipocalzado', 'Idtipocalzado', 'INTEGER', 'tipocalzado', 'idtipocalzado', true, null, null);
        $this->addColumn('producto_descripcion', 'ProductoDescripcion', 'VARCHAR', false, 500, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Marca', 'Marca', RelationMap::MANY_TO_ONE, array('idmarca' => 'idmarca', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Proveedor', 'Proveedor', RelationMap::MANY_TO_ONE, array('idproveedor' => 'idproveedor', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Temporada', 'Temporada', RelationMap::MANY_TO_ONE, array('idtemporada' => 'idtemporada', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Tipocalzado', 'Tipocalzado', RelationMap::MANY_TO_ONE, array('idtipocalzado' => 'idtipocalzado', ), 'CASCADE', 'CASCADE');
        $this->addRelation('Descuentodetalle', 'Descuentodetalle', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Descuentodetalles');
        $this->addRelation('Pedido', 'Pedido', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Pedidos');
        $this->addRelation('Pedidomayoristadetalle', 'Pedidomayoristadetalle', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Pedidomayoristadetalles');
        $this->addRelation('Productocolor', 'Productocolor', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), null, null, 'Productocolors');
        $this->addRelation('Productomaterial', 'Productomaterial', RelationMap::ONE_TO_MANY, array('idproducto' => 'idmaterial', ), 'CASCADE', 'CASCADE', 'Productomaterials');
        $this->addRelation('Productomedida', 'Productomedida', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Productomedidas');
        $this->addRelation('Productotallaje', 'Productotallaje', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Productotallajes');
        $this->addRelation('Productovariante', 'Productovariante', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Productovariantes');
        $this->addRelation('Promociondetalle', 'Promociondetalle', RelationMap::ONE_TO_MANY, array('idproducto' => 'idproducto', ), 'CASCADE', 'CASCADE', 'Promociondetalles');
    } // buildRelations()

} // ProductoTableMap
