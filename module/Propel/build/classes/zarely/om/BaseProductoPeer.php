<?php


/**
 * Base static class for performing query and update operations on the 'producto' table.
 *
 *
 *
 * @package propel.generator.zarely.om
 */
abstract class BaseProductoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'zarely';

    /** the table name for this class */
    const TABLE_NAME = 'producto';

    /** the related Propel class for this table */
    const OM_CLASS = 'Producto';

    /** the related TableMap class for this table */
    const TM_CLASS = 'ProductoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the idproducto field */
    const IDPRODUCTO = 'producto.idproducto';

    /** the column name for the producto_modelo field */
    const PRODUCTO_MODELO = 'producto.producto_modelo';

    /** the column name for the idmarca field */
    const IDMARCA = 'producto.idmarca';

    /** the column name for the idtemporada field */
    const IDTEMPORADA = 'producto.idtemporada';

    /** the column name for the producto_comisionable field */
    const PRODUCTO_COMISIONABLE = 'producto.producto_comisionable';

    /** the column name for the idproveedor field */
    const IDPROVEEDOR = 'producto.idproveedor';

    /** the column name for the producto_dirigidoa field */
    const PRODUCTO_DIRIGIDOA = 'producto.producto_dirigidoa';

    /** the column name for the producto_precioventa field */
    const PRODUCTO_PRECIOVENTA = 'producto.producto_precioventa';

    /** the column name for the producto_preciomayoreo field */
    const PRODUCTO_PRECIOMAYOREO = 'producto.producto_preciomayoreo';

    /** the column name for the producto_minimo field */
    const PRODUCTO_MINIMO = 'producto.producto_minimo';

    /** the column name for the producto_reorden field */
    const PRODUCTO_REORDEN = 'producto.producto_reorden';

    /** the column name for the idtipocalzado field */
    const IDTIPOCALZADO = 'producto.idtipocalzado';

    /** the column name for the producto_descripcion field */
    const PRODUCTO_DESCRIPCION = 'producto.producto_descripcion';

    /** the column name for the producto_costo field */
    const PRODUCTO_COSTO = 'producto.producto_costo';

    /** The enumerated values for the producto_dirigidoa field */
    const PRODUCTO_DIRIGIDOA_DAMA = 'dama';
    const PRODUCTO_DIRIGIDOA_CABALLERO = 'caballero';
    const PRODUCTO_DIRIGIDOA_NINO = 'nino';
    const PRODUCTO_DIRIGIDOA_NINA = 'nina';
    const PRODUCTO_DIRIGIDOA_JOVENES = 'jovenes';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Producto objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Producto[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. ProductoPeer::$fieldNames[ProductoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idproducto', 'ProductoModelo', 'Idmarca', 'Idtemporada', 'ProductoComisionable', 'Idproveedor', 'ProductoDirigidoa', 'ProductoPrecioventa', 'ProductoPreciomayoreo', 'ProductoMinimo', 'ProductoReorden', 'Idtipocalzado', 'ProductoDescripcion', 'ProductoCosto', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idproducto', 'productoModelo', 'idmarca', 'idtemporada', 'productoComisionable', 'idproveedor', 'productoDirigidoa', 'productoPrecioventa', 'productoPreciomayoreo', 'productoMinimo', 'productoReorden', 'idtipocalzado', 'productoDescripcion', 'productoCosto', ),
        BasePeer::TYPE_COLNAME => array (ProductoPeer::IDPRODUCTO, ProductoPeer::PRODUCTO_MODELO, ProductoPeer::IDMARCA, ProductoPeer::IDTEMPORADA, ProductoPeer::PRODUCTO_COMISIONABLE, ProductoPeer::IDPROVEEDOR, ProductoPeer::PRODUCTO_DIRIGIDOA, ProductoPeer::PRODUCTO_PRECIOVENTA, ProductoPeer::PRODUCTO_PRECIOMAYOREO, ProductoPeer::PRODUCTO_MINIMO, ProductoPeer::PRODUCTO_REORDEN, ProductoPeer::IDTIPOCALZADO, ProductoPeer::PRODUCTO_DESCRIPCION, ProductoPeer::PRODUCTO_COSTO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPRODUCTO', 'PRODUCTO_MODELO', 'IDMARCA', 'IDTEMPORADA', 'PRODUCTO_COMISIONABLE', 'IDPROVEEDOR', 'PRODUCTO_DIRIGIDOA', 'PRODUCTO_PRECIOVENTA', 'PRODUCTO_PRECIOMAYOREO', 'PRODUCTO_MINIMO', 'PRODUCTO_REORDEN', 'IDTIPOCALZADO', 'PRODUCTO_DESCRIPCION', 'PRODUCTO_COSTO', ),
        BasePeer::TYPE_FIELDNAME => array ('idproducto', 'producto_modelo', 'idmarca', 'idtemporada', 'producto_comisionable', 'idproveedor', 'producto_dirigidoa', 'producto_precioventa', 'producto_preciomayoreo', 'producto_minimo', 'producto_reorden', 'idtipocalzado', 'producto_descripcion', 'producto_costo', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. ProductoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idproducto' => 0, 'ProductoModelo' => 1, 'Idmarca' => 2, 'Idtemporada' => 3, 'ProductoComisionable' => 4, 'Idproveedor' => 5, 'ProductoDirigidoa' => 6, 'ProductoPrecioventa' => 7, 'ProductoPreciomayoreo' => 8, 'ProductoMinimo' => 9, 'ProductoReorden' => 10, 'Idtipocalzado' => 11, 'ProductoDescripcion' => 12, 'ProductoCosto' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idproducto' => 0, 'productoModelo' => 1, 'idmarca' => 2, 'idtemporada' => 3, 'productoComisionable' => 4, 'idproveedor' => 5, 'productoDirigidoa' => 6, 'productoPrecioventa' => 7, 'productoPreciomayoreo' => 8, 'productoMinimo' => 9, 'productoReorden' => 10, 'idtipocalzado' => 11, 'productoDescripcion' => 12, 'productoCosto' => 13, ),
        BasePeer::TYPE_COLNAME => array (ProductoPeer::IDPRODUCTO => 0, ProductoPeer::PRODUCTO_MODELO => 1, ProductoPeer::IDMARCA => 2, ProductoPeer::IDTEMPORADA => 3, ProductoPeer::PRODUCTO_COMISIONABLE => 4, ProductoPeer::IDPROVEEDOR => 5, ProductoPeer::PRODUCTO_DIRIGIDOA => 6, ProductoPeer::PRODUCTO_PRECIOVENTA => 7, ProductoPeer::PRODUCTO_PRECIOMAYOREO => 8, ProductoPeer::PRODUCTO_MINIMO => 9, ProductoPeer::PRODUCTO_REORDEN => 10, ProductoPeer::IDTIPOCALZADO => 11, ProductoPeer::PRODUCTO_DESCRIPCION => 12, ProductoPeer::PRODUCTO_COSTO => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPRODUCTO' => 0, 'PRODUCTO_MODELO' => 1, 'IDMARCA' => 2, 'IDTEMPORADA' => 3, 'PRODUCTO_COMISIONABLE' => 4, 'IDPROVEEDOR' => 5, 'PRODUCTO_DIRIGIDOA' => 6, 'PRODUCTO_PRECIOVENTA' => 7, 'PRODUCTO_PRECIOMAYOREO' => 8, 'PRODUCTO_MINIMO' => 9, 'PRODUCTO_REORDEN' => 10, 'IDTIPOCALZADO' => 11, 'PRODUCTO_DESCRIPCION' => 12, 'PRODUCTO_COSTO' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('idproducto' => 0, 'producto_modelo' => 1, 'idmarca' => 2, 'idtemporada' => 3, 'producto_comisionable' => 4, 'idproveedor' => 5, 'producto_dirigidoa' => 6, 'producto_precioventa' => 7, 'producto_preciomayoreo' => 8, 'producto_minimo' => 9, 'producto_reorden' => 10, 'idtipocalzado' => 11, 'producto_descripcion' => 12, 'producto_costo' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        ProductoPeer::PRODUCTO_DIRIGIDOA => array(
            ProductoPeer::PRODUCTO_DIRIGIDOA_DAMA,
            ProductoPeer::PRODUCTO_DIRIGIDOA_CABALLERO,
            ProductoPeer::PRODUCTO_DIRIGIDOA_NINO,
            ProductoPeer::PRODUCTO_DIRIGIDOA_NINA,
            ProductoPeer::PRODUCTO_DIRIGIDOA_JOVENES,
        ),
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = ProductoPeer::getFieldNames($toType);
        $key = isset(ProductoPeer::$fieldKeys[$fromType][$name]) ? ProductoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(ProductoPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, ProductoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return ProductoPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return ProductoPeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = ProductoPeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = ProductoPeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. ProductoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(ProductoPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(ProductoPeer::IDPRODUCTO);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_MODELO);
            $criteria->addSelectColumn(ProductoPeer::IDMARCA);
            $criteria->addSelectColumn(ProductoPeer::IDTEMPORADA);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_COMISIONABLE);
            $criteria->addSelectColumn(ProductoPeer::IDPROVEEDOR);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_DIRIGIDOA);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_PRECIOVENTA);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_PRECIOMAYOREO);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_MINIMO);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_REORDEN);
            $criteria->addSelectColumn(ProductoPeer::IDTIPOCALZADO);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_DESCRIPCION);
            $criteria->addSelectColumn(ProductoPeer::PRODUCTO_COSTO);
        } else {
            $criteria->addSelectColumn($alias . '.idproducto');
            $criteria->addSelectColumn($alias . '.producto_modelo');
            $criteria->addSelectColumn($alias . '.idmarca');
            $criteria->addSelectColumn($alias . '.idtemporada');
            $criteria->addSelectColumn($alias . '.producto_comisionable');
            $criteria->addSelectColumn($alias . '.idproveedor');
            $criteria->addSelectColumn($alias . '.producto_dirigidoa');
            $criteria->addSelectColumn($alias . '.producto_precioventa');
            $criteria->addSelectColumn($alias . '.producto_preciomayoreo');
            $criteria->addSelectColumn($alias . '.producto_minimo');
            $criteria->addSelectColumn($alias . '.producto_reorden');
            $criteria->addSelectColumn($alias . '.idtipocalzado');
            $criteria->addSelectColumn($alias . '.producto_descripcion');
            $criteria->addSelectColumn($alias . '.producto_costo');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(ProductoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Producto
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = ProductoPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return ProductoPeer::populateObjects(ProductoPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            ProductoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Producto $obj A Producto object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdproducto();
            } // if key === null
            ProductoPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Producto object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Producto) {
                $key = (string) $value->getIdproducto();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Producto object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(ProductoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Producto Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(ProductoPeer::$instances[$key])) {
                return ProductoPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (ProductoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        ProductoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to producto
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in DescuentodetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        DescuentodetallePeer::clearInstancePool();
        // Invalidate objects in NotificacionPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        NotificacionPeer::clearInstancePool();
        // Invalidate objects in PedidoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PedidoPeer::clearInstancePool();
        // Invalidate objects in PedidomayoristadetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PedidomayoristadetallePeer::clearInstancePool();
        // Invalidate objects in ProductomaterialPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ProductomaterialPeer::clearInstancePool();
        // Invalidate objects in ProductomedidaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ProductomedidaPeer::clearInstancePool();
        // Invalidate objects in ProductotallajePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ProductotallajePeer::clearInstancePool();
        // Invalidate objects in ProductovariantePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ProductovariantePeer::clearInstancePool();
        // Invalidate objects in PromociondetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PromociondetallePeer::clearInstancePool();
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = ProductoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = ProductoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                ProductoPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Producto object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = ProductoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + ProductoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = ProductoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            ProductoPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Marca table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinMarca(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDMARCA, MarcaPeer::IDMARCA, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Proveedor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinProveedor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Temporada table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTemporada(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDTEMPORADA, TemporadaPeer::IDTEMPORADA, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Tipocalzado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTipocalzado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDTIPOCALZADO, TipocalzadoPeer::IDTIPOCALZADO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Producto objects pre-filled with their Marca objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinMarca(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol = ProductoPeer::NUM_HYDRATE_COLUMNS;
        MarcaPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProductoPeer::IDMARCA, MarcaPeer::IDMARCA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = MarcaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = MarcaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = MarcaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    MarcaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Producto) to $obj2 (Marca)
                $obj2->addProducto($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Producto objects pre-filled with their Proveedor objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProveedor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol = ProductoPeer::NUM_HYDRATE_COLUMNS;
        ProveedorPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProductoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProveedorPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProveedorPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProveedorPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Producto) to $obj2 (Proveedor)
                $obj2->addProducto($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Producto objects pre-filled with their Temporada objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTemporada(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol = ProductoPeer::NUM_HYDRATE_COLUMNS;
        TemporadaPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProductoPeer::IDTEMPORADA, TemporadaPeer::IDTEMPORADA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TemporadaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TemporadaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TemporadaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TemporadaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Producto) to $obj2 (Temporada)
                $obj2->addProducto($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Producto objects pre-filled with their Tipocalzado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTipocalzado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol = ProductoPeer::NUM_HYDRATE_COLUMNS;
        TipocalzadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(ProductoPeer::IDTIPOCALZADO, TipocalzadoPeer::IDTIPOCALZADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TipocalzadoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TipocalzadoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TipocalzadoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TipocalzadoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Producto) to $obj2 (Tipocalzado)
                $obj2->addProducto($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDMARCA, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTEMPORADA, TemporadaPeer::IDTEMPORADA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTIPOCALZADO, TipocalzadoPeer::IDTIPOCALZADO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of Producto objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol2 = ProductoPeer::NUM_HYDRATE_COLUMNS;

        MarcaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MarcaPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        TemporadaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + TemporadaPeer::NUM_HYDRATE_COLUMNS;

        TipocalzadoPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + TipocalzadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProductoPeer::IDMARCA, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTEMPORADA, TemporadaPeer::IDTEMPORADA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTIPOCALZADO, TipocalzadoPeer::IDTIPOCALZADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Marca rows

            $key2 = MarcaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = MarcaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = MarcaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    MarcaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Producto) to the collection in $obj2 (Marca)
                $obj2->addProducto($obj1);
            } // if joined row not null

            // Add objects for joined Proveedor rows

            $key3 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ProveedorPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ProveedorPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProveedorPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Producto) to the collection in $obj3 (Proveedor)
                $obj3->addProducto($obj1);
            } // if joined row not null

            // Add objects for joined Temporada rows

            $key4 = TemporadaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = TemporadaPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = TemporadaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    TemporadaPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Producto) to the collection in $obj4 (Temporada)
                $obj4->addProducto($obj1);
            } // if joined row not null

            // Add objects for joined Tipocalzado rows

            $key5 = TipocalzadoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = TipocalzadoPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = TipocalzadoPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    TipocalzadoPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Producto) to the collection in $obj5 (Tipocalzado)
                $obj5->addProducto($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Marca table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptMarca(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTEMPORADA, TemporadaPeer::IDTEMPORADA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTIPOCALZADO, TipocalzadoPeer::IDTIPOCALZADO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Proveedor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptProveedor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDMARCA, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTEMPORADA, TemporadaPeer::IDTEMPORADA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTIPOCALZADO, TipocalzadoPeer::IDTIPOCALZADO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Temporada table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptTemporada(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDMARCA, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTIPOCALZADO, TipocalzadoPeer::IDTIPOCALZADO, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Tipocalzado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptTipocalzado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            ProductoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(ProductoPeer::IDMARCA, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTEMPORADA, TemporadaPeer::IDTEMPORADA, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of Producto objects pre-filled with all related objects except Marca.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptMarca(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol2 = ProductoPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        TemporadaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + TemporadaPeer::NUM_HYDRATE_COLUMNS;

        TipocalzadoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + TipocalzadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProductoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTEMPORADA, TemporadaPeer::IDTEMPORADA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTIPOCALZADO, TipocalzadoPeer::IDTIPOCALZADO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Proveedor rows

                $key2 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ProveedorPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ProveedorPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ProveedorPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Producto) to the collection in $obj2 (Proveedor)
                $obj2->addProducto($obj1);

            } // if joined row is not null

                // Add objects for joined Temporada rows

                $key3 = TemporadaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = TemporadaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = TemporadaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    TemporadaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Producto) to the collection in $obj3 (Temporada)
                $obj3->addProducto($obj1);

            } // if joined row is not null

                // Add objects for joined Tipocalzado rows

                $key4 = TipocalzadoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = TipocalzadoPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = TipocalzadoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    TipocalzadoPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Producto) to the collection in $obj4 (Tipocalzado)
                $obj4->addProducto($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Producto objects pre-filled with all related objects except Proveedor.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptProveedor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol2 = ProductoPeer::NUM_HYDRATE_COLUMNS;

        MarcaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MarcaPeer::NUM_HYDRATE_COLUMNS;

        TemporadaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + TemporadaPeer::NUM_HYDRATE_COLUMNS;

        TipocalzadoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + TipocalzadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProductoPeer::IDMARCA, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTEMPORADA, TemporadaPeer::IDTEMPORADA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTIPOCALZADO, TipocalzadoPeer::IDTIPOCALZADO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Marca rows

                $key2 = MarcaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = MarcaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = MarcaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    MarcaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Producto) to the collection in $obj2 (Marca)
                $obj2->addProducto($obj1);

            } // if joined row is not null

                // Add objects for joined Temporada rows

                $key3 = TemporadaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = TemporadaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = TemporadaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    TemporadaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Producto) to the collection in $obj3 (Temporada)
                $obj3->addProducto($obj1);

            } // if joined row is not null

                // Add objects for joined Tipocalzado rows

                $key4 = TipocalzadoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = TipocalzadoPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = TipocalzadoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    TipocalzadoPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Producto) to the collection in $obj4 (Tipocalzado)
                $obj4->addProducto($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Producto objects pre-filled with all related objects except Temporada.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptTemporada(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol2 = ProductoPeer::NUM_HYDRATE_COLUMNS;

        MarcaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MarcaPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        TipocalzadoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + TipocalzadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProductoPeer::IDMARCA, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTIPOCALZADO, TipocalzadoPeer::IDTIPOCALZADO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Marca rows

                $key2 = MarcaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = MarcaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = MarcaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    MarcaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Producto) to the collection in $obj2 (Marca)
                $obj2->addProducto($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedor rows

                $key3 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProveedorPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProveedorPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProveedorPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Producto) to the collection in $obj3 (Proveedor)
                $obj3->addProducto($obj1);

            } // if joined row is not null

                // Add objects for joined Tipocalzado rows

                $key4 = TipocalzadoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = TipocalzadoPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = TipocalzadoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    TipocalzadoPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Producto) to the collection in $obj4 (Tipocalzado)
                $obj4->addProducto($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Producto objects pre-filled with all related objects except Tipocalzado.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Producto objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptTipocalzado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(ProductoPeer::DATABASE_NAME);
        }

        ProductoPeer::addSelectColumns($criteria);
        $startcol2 = ProductoPeer::NUM_HYDRATE_COLUMNS;

        MarcaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MarcaPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        TemporadaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + TemporadaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(ProductoPeer::IDMARCA, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $criteria->addJoin(ProductoPeer::IDTEMPORADA, TemporadaPeer::IDTEMPORADA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = ProductoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = ProductoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = ProductoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                ProductoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Marca rows

                $key2 = MarcaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = MarcaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = MarcaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    MarcaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Producto) to the collection in $obj2 (Marca)
                $obj2->addProducto($obj1);

            } // if joined row is not null

                // Add objects for joined Proveedor rows

                $key3 = ProveedorPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProveedorPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProveedorPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProveedorPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Producto) to the collection in $obj3 (Proveedor)
                $obj3->addProducto($obj1);

            } // if joined row is not null

                // Add objects for joined Temporada rows

                $key4 = TemporadaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = TemporadaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = TemporadaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    TemporadaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Producto) to the collection in $obj4 (Temporada)
                $obj4->addProducto($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(ProductoPeer::DATABASE_NAME)->getTable(ProductoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseProductoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseProductoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \ProductoTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return ProductoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Producto or Criteria object.
     *
     * @param      mixed $values Criteria or Producto object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Producto object
        }

        if ($criteria->containsKey(ProductoPeer::IDPRODUCTO) && $criteria->keyContainsValue(ProductoPeer::IDPRODUCTO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.ProductoPeer::IDPRODUCTO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Producto or Criteria object.
     *
     * @param      mixed $values Criteria or Producto object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(ProductoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(ProductoPeer::IDPRODUCTO);
            $value = $criteria->remove(ProductoPeer::IDPRODUCTO);
            if ($value) {
                $selectCriteria->add(ProductoPeer::IDPRODUCTO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(ProductoPeer::TABLE_NAME);
            }

        } else { // $values is Producto object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the producto table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += ProductoPeer::doOnDeleteCascade(new Criteria(ProductoPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(ProductoPeer::TABLE_NAME, $con, ProductoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            ProductoPeer::clearInstancePool();
            ProductoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Producto or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Producto object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Producto) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(ProductoPeer::DATABASE_NAME);
            $criteria->add(ProductoPeer::IDPRODUCTO, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(ProductoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += ProductoPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                ProductoPeer::clearInstancePool();
            } elseif ($values instanceof Producto) { // it's a model object
                ProductoPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    ProductoPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            ProductoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = ProductoPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Descuentodetalle objects
            $criteria = new Criteria(DescuentodetallePeer::DATABASE_NAME);

            $criteria->add(DescuentodetallePeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += DescuentodetallePeer::doDelete($criteria, $con);

            // delete related Notificacion objects
            $criteria = new Criteria(NotificacionPeer::DATABASE_NAME);

            $criteria->add(NotificacionPeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += NotificacionPeer::doDelete($criteria, $con);

            // delete related Pedido objects
            $criteria = new Criteria(PedidoPeer::DATABASE_NAME);

            $criteria->add(PedidoPeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += PedidoPeer::doDelete($criteria, $con);

            // delete related Pedidomayoristadetalle objects
            $criteria = new Criteria(PedidomayoristadetallePeer::DATABASE_NAME);

            $criteria->add(PedidomayoristadetallePeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += PedidomayoristadetallePeer::doDelete($criteria, $con);

            // delete related Productomaterial objects
            $criteria = new Criteria(ProductomaterialPeer::DATABASE_NAME);

            $criteria->add(ProductomaterialPeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += ProductomaterialPeer::doDelete($criteria, $con);

            // delete related Productomedida objects
            $criteria = new Criteria(ProductomedidaPeer::DATABASE_NAME);

            $criteria->add(ProductomedidaPeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += ProductomedidaPeer::doDelete($criteria, $con);

            // delete related Productotallaje objects
            $criteria = new Criteria(ProductotallajePeer::DATABASE_NAME);

            $criteria->add(ProductotallajePeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += ProductotallajePeer::doDelete($criteria, $con);

            // delete related Productovariante objects
            $criteria = new Criteria(ProductovariantePeer::DATABASE_NAME);

            $criteria->add(ProductovariantePeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += ProductovariantePeer::doDelete($criteria, $con);

            // delete related Promociondetalle objects
            $criteria = new Criteria(PromociondetallePeer::DATABASE_NAME);

            $criteria->add(PromociondetallePeer::IDPRODUCTO, $obj->getIdproducto());
            $affectedRows += PromociondetallePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Producto object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Producto $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(ProductoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(ProductoPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(ProductoPeer::DATABASE_NAME, ProductoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Producto
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = ProductoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(ProductoPeer::DATABASE_NAME);
        $criteria->add(ProductoPeer::IDPRODUCTO, $pk);

        $v = ProductoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Producto[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(ProductoPeer::DATABASE_NAME);
            $criteria->add(ProductoPeer::IDPRODUCTO, $pks, Criteria::IN);
            $objs = ProductoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseProductoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseProductoPeer::buildTableMap();

