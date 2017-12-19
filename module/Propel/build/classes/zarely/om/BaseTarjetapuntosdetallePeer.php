<?php


/**
 * Base static class for performing query and update operations on the 'tarjetapuntosdetalle' table.
 *
 *
 *
 * @package propel.generator.zarely.om
 */
abstract class BaseTarjetapuntosdetallePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'zarely';

    /** the table name for this class */
    const TABLE_NAME = 'tarjetapuntosdetalle';

    /** the related Propel class for this table */
    const OM_CLASS = 'Tarjetapuntosdetalle';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TarjetapuntosdetalleTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the idtarjetapuntosdetalle field */
    const IDTARJETAPUNTOSDETALLE = 'tarjetapuntosdetalle.idtarjetapuntosdetalle';

    /** the column name for the idtarjetapuntos field */
    const IDTARJETAPUNTOS = 'tarjetapuntosdetalle.idtarjetapuntos';

    /** the column name for the tarjetapuntosdetalle_tipo field */
    const TARJETAPUNTOSDETALLE_TIPO = 'tarjetapuntosdetalle.tarjetapuntosdetalle_tipo';

    /** the column name for the tarjetapuntosdetalle_cantidad field */
    const TARJETAPUNTOSDETALLE_CANTIDAD = 'tarjetapuntosdetalle.tarjetapuntosdetalle_cantidad';

    /** the column name for the idventa field */
    const IDVENTA = 'tarjetapuntosdetalle.idventa';

    /** the column name for the idempleado field */
    const IDEMPLEADO = 'tarjetapuntosdetalle.idempleado';

    /** The enumerated values for the tarjetapuntosdetalle_tipo field */
    const TARJETAPUNTOSDETALLE_TIPO_INGRESO = 'ingreso';
    const TARJETAPUNTOSDETALLE_TIPO_EGRESO = 'egreso';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Tarjetapuntosdetalle objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Tarjetapuntosdetalle[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TarjetapuntosdetallePeer::$fieldNames[TarjetapuntosdetallePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idtarjetapuntosdetalle', 'Idtarjetapuntos', 'TarjetapuntosdetalleTipo', 'TarjetapuntosdetalleCantidad', 'Idventa', 'Idempleado', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idtarjetapuntosdetalle', 'idtarjetapuntos', 'tarjetapuntosdetalleTipo', 'tarjetapuntosdetalleCantidad', 'idventa', 'idempleado', ),
        BasePeer::TYPE_COLNAME => array (TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE, TarjetapuntosdetallePeer::IDTARJETAPUNTOS, TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_TIPO, TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_CANTIDAD, TarjetapuntosdetallePeer::IDVENTA, TarjetapuntosdetallePeer::IDEMPLEADO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDTARJETAPUNTOSDETALLE', 'IDTARJETAPUNTOS', 'TARJETAPUNTOSDETALLE_TIPO', 'TARJETAPUNTOSDETALLE_CANTIDAD', 'IDVENTA', 'IDEMPLEADO', ),
        BasePeer::TYPE_FIELDNAME => array ('idtarjetapuntosdetalle', 'idtarjetapuntos', 'tarjetapuntosdetalle_tipo', 'tarjetapuntosdetalle_cantidad', 'idventa', 'idempleado', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TarjetapuntosdetallePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idtarjetapuntosdetalle' => 0, 'Idtarjetapuntos' => 1, 'TarjetapuntosdetalleTipo' => 2, 'TarjetapuntosdetalleCantidad' => 3, 'Idventa' => 4, 'Idempleado' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idtarjetapuntosdetalle' => 0, 'idtarjetapuntos' => 1, 'tarjetapuntosdetalleTipo' => 2, 'tarjetapuntosdetalleCantidad' => 3, 'idventa' => 4, 'idempleado' => 5, ),
        BasePeer::TYPE_COLNAME => array (TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE => 0, TarjetapuntosdetallePeer::IDTARJETAPUNTOS => 1, TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_TIPO => 2, TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_CANTIDAD => 3, TarjetapuntosdetallePeer::IDVENTA => 4, TarjetapuntosdetallePeer::IDEMPLEADO => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDTARJETAPUNTOSDETALLE' => 0, 'IDTARJETAPUNTOS' => 1, 'TARJETAPUNTOSDETALLE_TIPO' => 2, 'TARJETAPUNTOSDETALLE_CANTIDAD' => 3, 'IDVENTA' => 4, 'IDEMPLEADO' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('idtarjetapuntosdetalle' => 0, 'idtarjetapuntos' => 1, 'tarjetapuntosdetalle_tipo' => 2, 'tarjetapuntosdetalle_cantidad' => 3, 'idventa' => 4, 'idempleado' => 5, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_TIPO => array(
            TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_TIPO_INGRESO,
            TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_TIPO_EGRESO,
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
        $toNames = TarjetapuntosdetallePeer::getFieldNames($toType);
        $key = isset(TarjetapuntosdetallePeer::$fieldKeys[$fromType][$name]) ? TarjetapuntosdetallePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TarjetapuntosdetallePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TarjetapuntosdetallePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TarjetapuntosdetallePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return TarjetapuntosdetallePeer::$enumValueSets;
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
        $valueSets = TarjetapuntosdetallePeer::getValueSets();

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
        $values = TarjetapuntosdetallePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. TarjetapuntosdetallePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TarjetapuntosdetallePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE);
            $criteria->addSelectColumn(TarjetapuntosdetallePeer::IDTARJETAPUNTOS);
            $criteria->addSelectColumn(TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_TIPO);
            $criteria->addSelectColumn(TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_CANTIDAD);
            $criteria->addSelectColumn(TarjetapuntosdetallePeer::IDVENTA);
            $criteria->addSelectColumn(TarjetapuntosdetallePeer::IDEMPLEADO);
        } else {
            $criteria->addSelectColumn($alias . '.idtarjetapuntosdetalle');
            $criteria->addSelectColumn($alias . '.idtarjetapuntos');
            $criteria->addSelectColumn($alias . '.tarjetapuntosdetalle_tipo');
            $criteria->addSelectColumn($alias . '.tarjetapuntosdetalle_cantidad');
            $criteria->addSelectColumn($alias . '.idventa');
            $criteria->addSelectColumn($alias . '.idempleado');
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
        $criteria->setPrimaryTableName(TarjetapuntosdetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TarjetapuntosdetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Tarjetapuntosdetalle
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TarjetapuntosdetallePeer::doSelect($critcopy, $con);
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
        return TarjetapuntosdetallePeer::populateObjects(TarjetapuntosdetallePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TarjetapuntosdetallePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);

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
     * @param Tarjetapuntosdetalle $obj A Tarjetapuntosdetalle object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdtarjetapuntosdetalle();
            } // if key === null
            TarjetapuntosdetallePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Tarjetapuntosdetalle object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Tarjetapuntosdetalle) {
                $key = (string) $value->getIdtarjetapuntosdetalle();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Tarjetapuntosdetalle object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TarjetapuntosdetallePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Tarjetapuntosdetalle Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TarjetapuntosdetallePeer::$instances[$key])) {
                return TarjetapuntosdetallePeer::$instances[$key];
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
        foreach (TarjetapuntosdetallePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TarjetapuntosdetallePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to tarjetapuntosdetalle
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
        $cls = TarjetapuntosdetallePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TarjetapuntosdetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TarjetapuntosdetallePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TarjetapuntosdetallePeer::addInstanceToPool($obj, $key);
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
     * @return array (Tarjetapuntosdetalle object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TarjetapuntosdetallePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TarjetapuntosdetallePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TarjetapuntosdetallePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TarjetapuntosdetallePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TarjetapuntosdetallePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Empleado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmpleado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TarjetapuntosdetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TarjetapuntosdetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TarjetapuntosdetallePeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Tarjetapuntos table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinTarjetapuntos(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TarjetapuntosdetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TarjetapuntosdetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TarjetapuntosdetallePeer::IDTARJETAPUNTOS, TarjetapuntosPeer::IDTARJETAPUNTOS, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Venta table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinVenta(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TarjetapuntosdetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TarjetapuntosdetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TarjetapuntosdetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
     * Selects a collection of Tarjetapuntosdetalle objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Tarjetapuntosdetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);
        }

        TarjetapuntosdetallePeer::addSelectColumns($criteria);
        $startcol = TarjetapuntosdetallePeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(TarjetapuntosdetallePeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TarjetapuntosdetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TarjetapuntosdetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TarjetapuntosdetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TarjetapuntosdetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = EmpleadoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EmpleadoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    EmpleadoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Tarjetapuntosdetalle) to $obj2 (Empleado)
                $obj2->addTarjetapuntosdetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Tarjetapuntosdetalle objects pre-filled with their Tarjetapuntos objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Tarjetapuntosdetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinTarjetapuntos(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);
        }

        TarjetapuntosdetallePeer::addSelectColumns($criteria);
        $startcol = TarjetapuntosdetallePeer::NUM_HYDRATE_COLUMNS;
        TarjetapuntosPeer::addSelectColumns($criteria);

        $criteria->addJoin(TarjetapuntosdetallePeer::IDTARJETAPUNTOS, TarjetapuntosPeer::IDTARJETAPUNTOS, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TarjetapuntosdetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TarjetapuntosdetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TarjetapuntosdetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TarjetapuntosdetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = TarjetapuntosPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = TarjetapuntosPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = TarjetapuntosPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    TarjetapuntosPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Tarjetapuntosdetalle) to $obj2 (Tarjetapuntos)
                $obj2->addTarjetapuntosdetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Tarjetapuntosdetalle objects pre-filled with their Venta objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Tarjetapuntosdetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinVenta(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);
        }

        TarjetapuntosdetallePeer::addSelectColumns($criteria);
        $startcol = TarjetapuntosdetallePeer::NUM_HYDRATE_COLUMNS;
        VentaPeer::addSelectColumns($criteria);

        $criteria->addJoin(TarjetapuntosdetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TarjetapuntosdetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TarjetapuntosdetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = TarjetapuntosdetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TarjetapuntosdetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = VentaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = VentaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    VentaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Tarjetapuntosdetalle) to $obj2 (Venta)
                $obj2->addTarjetapuntosdetalle($obj1);

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
        $criteria->setPrimaryTableName(TarjetapuntosdetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TarjetapuntosdetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TarjetapuntosdetallePeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(TarjetapuntosdetallePeer::IDTARJETAPUNTOS, TarjetapuntosPeer::IDTARJETAPUNTOS, $join_behavior);

        $criteria->addJoin(TarjetapuntosdetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
     * Selects a collection of Tarjetapuntosdetalle objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Tarjetapuntosdetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);
        }

        TarjetapuntosdetallePeer::addSelectColumns($criteria);
        $startcol2 = TarjetapuntosdetallePeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        TarjetapuntosPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + TarjetapuntosPeer::NUM_HYDRATE_COLUMNS;

        VentaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + VentaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TarjetapuntosdetallePeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(TarjetapuntosdetallePeer::IDTARJETAPUNTOS, TarjetapuntosPeer::IDTARJETAPUNTOS, $join_behavior);

        $criteria->addJoin(TarjetapuntosdetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TarjetapuntosdetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TarjetapuntosdetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TarjetapuntosdetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TarjetapuntosdetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Empleado rows

            $key2 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = EmpleadoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = EmpleadoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    EmpleadoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Tarjetapuntosdetalle) to the collection in $obj2 (Empleado)
                $obj2->addTarjetapuntosdetalle($obj1);
            } // if joined row not null

            // Add objects for joined Tarjetapuntos rows

            $key3 = TarjetapuntosPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = TarjetapuntosPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = TarjetapuntosPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    TarjetapuntosPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Tarjetapuntosdetalle) to the collection in $obj3 (Tarjetapuntos)
                $obj3->addTarjetapuntosdetalle($obj1);
            } // if joined row not null

            // Add objects for joined Venta rows

            $key4 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = VentaPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = VentaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    VentaPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Tarjetapuntosdetalle) to the collection in $obj4 (Venta)
                $obj4->addTarjetapuntosdetalle($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Empleado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmpleado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TarjetapuntosdetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TarjetapuntosdetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TarjetapuntosdetallePeer::IDTARJETAPUNTOS, TarjetapuntosPeer::IDTARJETAPUNTOS, $join_behavior);

        $criteria->addJoin(TarjetapuntosdetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Tarjetapuntos table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptTarjetapuntos(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TarjetapuntosdetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TarjetapuntosdetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TarjetapuntosdetallePeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(TarjetapuntosdetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Venta table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptVenta(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TarjetapuntosdetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TarjetapuntosdetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(TarjetapuntosdetallePeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(TarjetapuntosdetallePeer::IDTARJETAPUNTOS, TarjetapuntosPeer::IDTARJETAPUNTOS, $join_behavior);

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
     * Selects a collection of Tarjetapuntosdetalle objects pre-filled with all related objects except Empleado.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Tarjetapuntosdetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmpleado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);
        }

        TarjetapuntosdetallePeer::addSelectColumns($criteria);
        $startcol2 = TarjetapuntosdetallePeer::NUM_HYDRATE_COLUMNS;

        TarjetapuntosPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + TarjetapuntosPeer::NUM_HYDRATE_COLUMNS;

        VentaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + VentaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TarjetapuntosdetallePeer::IDTARJETAPUNTOS, TarjetapuntosPeer::IDTARJETAPUNTOS, $join_behavior);

        $criteria->addJoin(TarjetapuntosdetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TarjetapuntosdetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TarjetapuntosdetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TarjetapuntosdetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TarjetapuntosdetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Tarjetapuntos rows

                $key2 = TarjetapuntosPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = TarjetapuntosPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = TarjetapuntosPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    TarjetapuntosPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Tarjetapuntosdetalle) to the collection in $obj2 (Tarjetapuntos)
                $obj2->addTarjetapuntosdetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Venta rows

                $key3 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = VentaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = VentaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    VentaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Tarjetapuntosdetalle) to the collection in $obj3 (Venta)
                $obj3->addTarjetapuntosdetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Tarjetapuntosdetalle objects pre-filled with all related objects except Tarjetapuntos.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Tarjetapuntosdetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptTarjetapuntos(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);
        }

        TarjetapuntosdetallePeer::addSelectColumns($criteria);
        $startcol2 = TarjetapuntosdetallePeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        VentaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + VentaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TarjetapuntosdetallePeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(TarjetapuntosdetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TarjetapuntosdetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TarjetapuntosdetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TarjetapuntosdetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TarjetapuntosdetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Empleado rows

                $key2 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = EmpleadoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = EmpleadoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    EmpleadoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Tarjetapuntosdetalle) to the collection in $obj2 (Empleado)
                $obj2->addTarjetapuntosdetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Venta rows

                $key3 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = VentaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = VentaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    VentaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Tarjetapuntosdetalle) to the collection in $obj3 (Venta)
                $obj3->addTarjetapuntosdetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Tarjetapuntosdetalle objects pre-filled with all related objects except Venta.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Tarjetapuntosdetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptVenta(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);
        }

        TarjetapuntosdetallePeer::addSelectColumns($criteria);
        $startcol2 = TarjetapuntosdetallePeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        TarjetapuntosPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + TarjetapuntosPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(TarjetapuntosdetallePeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(TarjetapuntosdetallePeer::IDTARJETAPUNTOS, TarjetapuntosPeer::IDTARJETAPUNTOS, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = TarjetapuntosdetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = TarjetapuntosdetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = TarjetapuntosdetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                TarjetapuntosdetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Empleado rows

                $key2 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = EmpleadoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = EmpleadoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    EmpleadoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Tarjetapuntosdetalle) to the collection in $obj2 (Empleado)
                $obj2->addTarjetapuntosdetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Tarjetapuntos rows

                $key3 = TarjetapuntosPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = TarjetapuntosPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = TarjetapuntosPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    TarjetapuntosPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Tarjetapuntosdetalle) to the collection in $obj3 (Tarjetapuntos)
                $obj3->addTarjetapuntosdetalle($obj1);

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
        return Propel::getDatabaseMap(TarjetapuntosdetallePeer::DATABASE_NAME)->getTable(TarjetapuntosdetallePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTarjetapuntosdetallePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTarjetapuntosdetallePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \TarjetapuntosdetalleTableMap());
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
        return TarjetapuntosdetallePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Tarjetapuntosdetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Tarjetapuntosdetalle object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Tarjetapuntosdetalle object
        }

        if ($criteria->containsKey(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE) && $criteria->keyContainsValue(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Tarjetapuntosdetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Tarjetapuntosdetalle object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TarjetapuntosdetallePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE);
            $value = $criteria->remove(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE);
            if ($value) {
                $selectCriteria->add(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TarjetapuntosdetallePeer::TABLE_NAME);
            }

        } else { // $values is Tarjetapuntosdetalle object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the tarjetapuntosdetalle table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TarjetapuntosdetallePeer::TABLE_NAME, $con, TarjetapuntosdetallePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TarjetapuntosdetallePeer::clearInstancePool();
            TarjetapuntosdetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Tarjetapuntosdetalle or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Tarjetapuntosdetalle object or primary key or array of primary keys
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
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TarjetapuntosdetallePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Tarjetapuntosdetalle) { // it's a model object
            // invalidate the cache for this single object
            TarjetapuntosdetallePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TarjetapuntosdetallePeer::DATABASE_NAME);
            $criteria->add(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TarjetapuntosdetallePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TarjetapuntosdetallePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TarjetapuntosdetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Tarjetapuntosdetalle object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Tarjetapuntosdetalle $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TarjetapuntosdetallePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TarjetapuntosdetallePeer::TABLE_NAME);

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

        return BasePeer::doValidate(TarjetapuntosdetallePeer::DATABASE_NAME, TarjetapuntosdetallePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Tarjetapuntosdetalle
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TarjetapuntosdetallePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TarjetapuntosdetallePeer::DATABASE_NAME);
        $criteria->add(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE, $pk);

        $v = TarjetapuntosdetallePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Tarjetapuntosdetalle[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TarjetapuntosdetallePeer::DATABASE_NAME);
            $criteria->add(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE, $pks, Criteria::IN);
            $objs = TarjetapuntosdetallePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTarjetapuntosdetallePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTarjetapuntosdetallePeer::buildTableMap();

