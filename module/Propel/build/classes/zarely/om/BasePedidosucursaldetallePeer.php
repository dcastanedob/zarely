<?php


/**
 * Base static class for performing query and update operations on the 'pedidosucursaldetalle' table.
 *
 *
 *
 * @package propel.generator.zarely.om
 */
abstract class BasePedidosucursaldetallePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'zarely';

    /** the table name for this class */
    const TABLE_NAME = 'pedidosucursaldetalle';

    /** the related Propel class for this table */
    const OM_CLASS = 'Pedidosucursaldetalle';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PedidosucursaldetalleTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the idpedidosucursaldetalle field */
    const IDPEDIDOSUCURSALDETALLE = 'pedidosucursaldetalle.idpedidosucursaldetalle';

    /** the column name for the idpedidosucursal field */
    const IDPEDIDOSUCURSAL = 'pedidosucursaldetalle.idpedidosucursal';

    /** the column name for the idproductovariante field */
    const IDPRODUCTOVARIANTE = 'pedidosucursaldetalle.idproductovariante';

    /** the column name for the idproducto field */
    const IDPRODUCTO = 'pedidosucursaldetalle.idproducto';

    /** the column name for the pedidosucursaldetalle_cantidad field */
    const PEDIDOSUCURSALDETALLE_CANTIDAD = 'pedidosucursaldetalle.pedidosucursaldetalle_cantidad';

    /** the column name for the pedidosucursaldetalle_estatus field */
    const PEDIDOSUCURSALDETALLE_ESTATUS = 'pedidosucursaldetalle.pedidosucursaldetalle_estatus';

    /** The enumerated values for the pedidosucursaldetalle_estatus field */
    const PEDIDOSUCURSALDETALLE_ESTATUS_PENDIENTE = 'pendiente';
    const PEDIDOSUCURSALDETALLE_ESTATUS_SOLICITADO = 'solicitado';
    const PEDIDOSUCURSALDETALLE_ESTATUS_TRANSITO = 'transito';
    const PEDIDOSUCURSALDETALLE_ESTATUS_COMPLETADO = 'completado';
    const PEDIDOSUCURSALDETALLE_ESTATUS_CANCELADO = 'cancelado';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Pedidosucursaldetalle objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Pedidosucursaldetalle[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PedidosucursaldetallePeer::$fieldNames[PedidosucursaldetallePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idpedidosucursaldetalle', 'Idpedidosucursal', 'Idproductovariante', 'Idproducto', 'PedidosucursaldetalleCantidad', 'PedidosucursaldetalleEstatus', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idpedidosucursaldetalle', 'idpedidosucursal', 'idproductovariante', 'idproducto', 'pedidosucursaldetalleCantidad', 'pedidosucursaldetalleEstatus', ),
        BasePeer::TYPE_COLNAME => array (PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE, PedidosucursaldetallePeer::IDPEDIDOSUCURSAL, PedidosucursaldetallePeer::IDPRODUCTOVARIANTE, PedidosucursaldetallePeer::IDPRODUCTO, PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_CANTIDAD, PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_ESTATUS, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPEDIDOSUCURSALDETALLE', 'IDPEDIDOSUCURSAL', 'IDPRODUCTOVARIANTE', 'IDPRODUCTO', 'PEDIDOSUCURSALDETALLE_CANTIDAD', 'PEDIDOSUCURSALDETALLE_ESTATUS', ),
        BasePeer::TYPE_FIELDNAME => array ('idpedidosucursaldetalle', 'idpedidosucursal', 'idproductovariante', 'idproducto', 'pedidosucursaldetalle_cantidad', 'pedidosucursaldetalle_estatus', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PedidosucursaldetallePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idpedidosucursaldetalle' => 0, 'Idpedidosucursal' => 1, 'Idproductovariante' => 2, 'Idproducto' => 3, 'PedidosucursaldetalleCantidad' => 4, 'PedidosucursaldetalleEstatus' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idpedidosucursaldetalle' => 0, 'idpedidosucursal' => 1, 'idproductovariante' => 2, 'idproducto' => 3, 'pedidosucursaldetalleCantidad' => 4, 'pedidosucursaldetalleEstatus' => 5, ),
        BasePeer::TYPE_COLNAME => array (PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE => 0, PedidosucursaldetallePeer::IDPEDIDOSUCURSAL => 1, PedidosucursaldetallePeer::IDPRODUCTOVARIANTE => 2, PedidosucursaldetallePeer::IDPRODUCTO => 3, PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_CANTIDAD => 4, PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_ESTATUS => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPEDIDOSUCURSALDETALLE' => 0, 'IDPEDIDOSUCURSAL' => 1, 'IDPRODUCTOVARIANTE' => 2, 'IDPRODUCTO' => 3, 'PEDIDOSUCURSALDETALLE_CANTIDAD' => 4, 'PEDIDOSUCURSALDETALLE_ESTATUS' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('idpedidosucursaldetalle' => 0, 'idpedidosucursal' => 1, 'idproductovariante' => 2, 'idproducto' => 3, 'pedidosucursaldetalle_cantidad' => 4, 'pedidosucursaldetalle_estatus' => 5, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_ESTATUS => array(
            PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_ESTATUS_PENDIENTE,
            PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_ESTATUS_SOLICITADO,
            PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_ESTATUS_TRANSITO,
            PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_ESTATUS_COMPLETADO,
            PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_ESTATUS_CANCELADO,
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
        $toNames = PedidosucursaldetallePeer::getFieldNames($toType);
        $key = isset(PedidosucursaldetallePeer::$fieldKeys[$fromType][$name]) ? PedidosucursaldetallePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PedidosucursaldetallePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PedidosucursaldetallePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PedidosucursaldetallePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return PedidosucursaldetallePeer::$enumValueSets;
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
        $valueSets = PedidosucursaldetallePeer::getValueSets();

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
        $values = PedidosucursaldetallePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. PedidosucursaldetallePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PedidosucursaldetallePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE);
            $criteria->addSelectColumn(PedidosucursaldetallePeer::IDPEDIDOSUCURSAL);
            $criteria->addSelectColumn(PedidosucursaldetallePeer::IDPRODUCTOVARIANTE);
            $criteria->addSelectColumn(PedidosucursaldetallePeer::IDPRODUCTO);
            $criteria->addSelectColumn(PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_CANTIDAD);
            $criteria->addSelectColumn(PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_ESTATUS);
        } else {
            $criteria->addSelectColumn($alias . '.idpedidosucursaldetalle');
            $criteria->addSelectColumn($alias . '.idpedidosucursal');
            $criteria->addSelectColumn($alias . '.idproductovariante');
            $criteria->addSelectColumn($alias . '.idproducto');
            $criteria->addSelectColumn($alias . '.pedidosucursaldetalle_cantidad');
            $criteria->addSelectColumn($alias . '.pedidosucursaldetalle_estatus');
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
        $criteria->setPrimaryTableName(PedidosucursaldetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PedidosucursaldetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Pedidosucursaldetalle
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PedidosucursaldetallePeer::doSelect($critcopy, $con);
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
        return PedidosucursaldetallePeer::populateObjects(PedidosucursaldetallePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PedidosucursaldetallePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);

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
     * @param Pedidosucursaldetalle $obj A Pedidosucursaldetalle object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdpedidosucursaldetalle();
            } // if key === null
            PedidosucursaldetallePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Pedidosucursaldetalle object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Pedidosucursaldetalle) {
                $key = (string) $value->getIdpedidosucursaldetalle();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Pedidosucursaldetalle object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PedidosucursaldetallePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Pedidosucursaldetalle Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PedidosucursaldetallePeer::$instances[$key])) {
                return PedidosucursaldetallePeer::$instances[$key];
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
        foreach (PedidosucursaldetallePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PedidosucursaldetallePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to pedidosucursaldetalle
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
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
        $cls = PedidosucursaldetallePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PedidosucursaldetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PedidosucursaldetallePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PedidosucursaldetallePeer::addInstanceToPool($obj, $key);
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
     * @return array (Pedidosucursaldetalle object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PedidosucursaldetallePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PedidosucursaldetallePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PedidosucursaldetallePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PedidosucursaldetallePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PedidosucursaldetallePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Pedidosucursal table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPedidosucursal(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PedidosucursaldetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PedidosucursaldetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PedidosucursaldetallePeer::IDPEDIDOSUCURSAL, PedidosucursalPeer::IDPEDIDOSUCURSAL, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Producto table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinProducto(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PedidosucursaldetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PedidosucursaldetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Productovariante table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinProductovariante(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PedidosucursaldetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PedidosucursaldetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

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
     * Selects a collection of Pedidosucursaldetalle objects pre-filled with their Pedidosucursal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pedidosucursaldetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPedidosucursal(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);
        }

        PedidosucursaldetallePeer::addSelectColumns($criteria);
        $startcol = PedidosucursaldetallePeer::NUM_HYDRATE_COLUMNS;
        PedidosucursalPeer::addSelectColumns($criteria);

        $criteria->addJoin(PedidosucursaldetallePeer::IDPEDIDOSUCURSAL, PedidosucursalPeer::IDPEDIDOSUCURSAL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PedidosucursaldetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PedidosucursaldetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PedidosucursaldetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PedidosucursaldetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PedidosucursalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PedidosucursalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PedidosucursalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PedidosucursalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Pedidosucursaldetalle) to $obj2 (Pedidosucursal)
                $obj2->addPedidosucursaldetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Pedidosucursaldetalle objects pre-filled with their Producto objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pedidosucursaldetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProducto(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);
        }

        PedidosucursaldetallePeer::addSelectColumns($criteria);
        $startcol = PedidosucursaldetallePeer::NUM_HYDRATE_COLUMNS;
        ProductoPeer::addSelectColumns($criteria);

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PedidosucursaldetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PedidosucursaldetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PedidosucursaldetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PedidosucursaldetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProductoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProductoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProductoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Pedidosucursaldetalle) to $obj2 (Producto)
                $obj2->addPedidosucursaldetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Pedidosucursaldetalle objects pre-filled with their Productovariante objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pedidosucursaldetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProductovariante(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);
        }

        PedidosucursaldetallePeer::addSelectColumns($criteria);
        $startcol = PedidosucursaldetallePeer::NUM_HYDRATE_COLUMNS;
        ProductovariantePeer::addSelectColumns($criteria);

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PedidosucursaldetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PedidosucursaldetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PedidosucursaldetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PedidosucursaldetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ProductovariantePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ProductovariantePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ProductovariantePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ProductovariantePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Pedidosucursaldetalle) to $obj2 (Productovariante)
                $obj2->addPedidosucursaldetalle($obj1);

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
        $criteria->setPrimaryTableName(PedidosucursaldetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PedidosucursaldetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PedidosucursaldetallePeer::IDPEDIDOSUCURSAL, PedidosucursalPeer::IDPEDIDOSUCURSAL, $join_behavior);

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

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
     * Selects a collection of Pedidosucursaldetalle objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pedidosucursaldetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);
        }

        PedidosucursaldetallePeer::addSelectColumns($criteria);
        $startcol2 = PedidosucursaldetallePeer::NUM_HYDRATE_COLUMNS;

        PedidosucursalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PedidosucursalPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        ProductovariantePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProductovariantePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PedidosucursaldetallePeer::IDPEDIDOSUCURSAL, PedidosucursalPeer::IDPEDIDOSUCURSAL, $join_behavior);

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PedidosucursaldetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PedidosucursaldetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PedidosucursaldetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PedidosucursaldetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Pedidosucursal rows

            $key2 = PedidosucursalPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = PedidosucursalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PedidosucursalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PedidosucursalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Pedidosucursaldetalle) to the collection in $obj2 (Pedidosucursal)
                $obj2->addPedidosucursaldetalle($obj1);
            } // if joined row not null

            // Add objects for joined Producto rows

            $key3 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ProductoPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ProductoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProductoPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Pedidosucursaldetalle) to the collection in $obj3 (Producto)
                $obj3->addPedidosucursaldetalle($obj1);
            } // if joined row not null

            // Add objects for joined Productovariante rows

            $key4 = ProductovariantePeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = ProductovariantePeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = ProductovariantePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProductovariantePeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Pedidosucursaldetalle) to the collection in $obj4 (Productovariante)
                $obj4->addPedidosucursaldetalle($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Pedidosucursal table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPedidosucursal(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PedidosucursaldetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PedidosucursaldetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Producto table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptProducto(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PedidosucursaldetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PedidosucursaldetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PedidosucursaldetallePeer::IDPEDIDOSUCURSAL, PedidosucursalPeer::IDPEDIDOSUCURSAL, $join_behavior);

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Productovariante table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptProductovariante(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PedidosucursaldetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PedidosucursaldetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PedidosucursaldetallePeer::IDPEDIDOSUCURSAL, PedidosucursalPeer::IDPEDIDOSUCURSAL, $join_behavior);

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Selects a collection of Pedidosucursaldetalle objects pre-filled with all related objects except Pedidosucursal.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pedidosucursaldetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPedidosucursal(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);
        }

        PedidosucursaldetallePeer::addSelectColumns($criteria);
        $startcol2 = PedidosucursaldetallePeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        ProductovariantePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductovariantePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PedidosucursaldetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PedidosucursaldetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PedidosucursaldetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PedidosucursaldetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Producto rows

                $key2 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ProductoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ProductoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ProductoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Pedidosucursaldetalle) to the collection in $obj2 (Producto)
                $obj2->addPedidosucursaldetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Productovariante rows

                $key3 = ProductovariantePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProductovariantePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProductovariantePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProductovariantePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Pedidosucursaldetalle) to the collection in $obj3 (Productovariante)
                $obj3->addPedidosucursaldetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Pedidosucursaldetalle objects pre-filled with all related objects except Producto.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pedidosucursaldetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptProducto(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);
        }

        PedidosucursaldetallePeer::addSelectColumns($criteria);
        $startcol2 = PedidosucursaldetallePeer::NUM_HYDRATE_COLUMNS;

        PedidosucursalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PedidosucursalPeer::NUM_HYDRATE_COLUMNS;

        ProductovariantePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductovariantePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PedidosucursaldetallePeer::IDPEDIDOSUCURSAL, PedidosucursalPeer::IDPEDIDOSUCURSAL, $join_behavior);

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PedidosucursaldetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PedidosucursaldetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PedidosucursaldetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PedidosucursaldetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Pedidosucursal rows

                $key2 = PedidosucursalPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = PedidosucursalPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = PedidosucursalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PedidosucursalPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Pedidosucursaldetalle) to the collection in $obj2 (Pedidosucursal)
                $obj2->addPedidosucursaldetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Productovariante rows

                $key3 = ProductovariantePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProductovariantePeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProductovariantePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProductovariantePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Pedidosucursaldetalle) to the collection in $obj3 (Productovariante)
                $obj3->addPedidosucursaldetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Pedidosucursaldetalle objects pre-filled with all related objects except Productovariante.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pedidosucursaldetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptProductovariante(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);
        }

        PedidosucursaldetallePeer::addSelectColumns($criteria);
        $startcol2 = PedidosucursaldetallePeer::NUM_HYDRATE_COLUMNS;

        PedidosucursalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + PedidosucursalPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PedidosucursaldetallePeer::IDPEDIDOSUCURSAL, PedidosucursalPeer::IDPEDIDOSUCURSAL, $join_behavior);

        $criteria->addJoin(PedidosucursaldetallePeer::IDPRODUCTO, ProductoPeer::IDPRODUCTO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PedidosucursaldetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PedidosucursaldetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PedidosucursaldetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PedidosucursaldetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Pedidosucursal rows

                $key2 = PedidosucursalPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = PedidosucursalPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = PedidosucursalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    PedidosucursalPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Pedidosucursaldetalle) to the collection in $obj2 (Pedidosucursal)
                $obj2->addPedidosucursaldetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Producto rows

                $key3 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = ProductoPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = ProductoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProductoPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Pedidosucursaldetalle) to the collection in $obj3 (Producto)
                $obj3->addPedidosucursaldetalle($obj1);

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
        return Propel::getDatabaseMap(PedidosucursaldetallePeer::DATABASE_NAME)->getTable(PedidosucursaldetallePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePedidosucursaldetallePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePedidosucursaldetallePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PedidosucursaldetalleTableMap());
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
        return PedidosucursaldetallePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Pedidosucursaldetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Pedidosucursaldetalle object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Pedidosucursaldetalle object
        }

        if ($criteria->containsKey(PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE) && $criteria->keyContainsValue(PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Pedidosucursaldetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Pedidosucursaldetalle object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PedidosucursaldetallePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE);
            $value = $criteria->remove(PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE);
            if ($value) {
                $selectCriteria->add(PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PedidosucursaldetallePeer::TABLE_NAME);
            }

        } else { // $values is Pedidosucursaldetalle object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the pedidosucursaldetalle table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PedidosucursaldetallePeer::TABLE_NAME, $con, PedidosucursaldetallePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PedidosucursaldetallePeer::clearInstancePool();
            PedidosucursaldetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Pedidosucursaldetalle or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Pedidosucursaldetalle object or primary key or array of primary keys
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
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PedidosucursaldetallePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Pedidosucursaldetalle) { // it's a model object
            // invalidate the cache for this single object
            PedidosucursaldetallePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PedidosucursaldetallePeer::DATABASE_NAME);
            $criteria->add(PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PedidosucursaldetallePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PedidosucursaldetallePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PedidosucursaldetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Pedidosucursaldetalle object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Pedidosucursaldetalle $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PedidosucursaldetallePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PedidosucursaldetallePeer::TABLE_NAME);

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

        return BasePeer::doValidate(PedidosucursaldetallePeer::DATABASE_NAME, PedidosucursaldetallePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Pedidosucursaldetalle
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PedidosucursaldetallePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PedidosucursaldetallePeer::DATABASE_NAME);
        $criteria->add(PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE, $pk);

        $v = PedidosucursaldetallePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Pedidosucursaldetalle[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PedidosucursaldetallePeer::DATABASE_NAME);
            $criteria->add(PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE, $pks, Criteria::IN);
            $objs = PedidosucursaldetallePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePedidosucursaldetallePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePedidosucursaldetallePeer::buildTableMap();

