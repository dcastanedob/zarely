<?php


/**
 * Base static class for performing query and update operations on the 'cortecaja' table.
 *
 *
 *
 * @package propel.generator.zarely.om
 */
abstract class BaseCortecajaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'zarely';

    /** the table name for this class */
    const TABLE_NAME = 'cortecaja';

    /** the related Propel class for this table */
    const OM_CLASS = 'Cortecaja';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CortecajaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the idcortecaja field */
    const IDCORTECAJA = 'cortecaja.idcortecaja';

    /** the column name for the idsucursal field */
    const IDSUCURSAL = 'cortecaja.idsucursal';

    /** the column name for the idempleadoenvia field */
    const IDEMPLEADOENVIA = 'cortecaja.idempleadoenvia';

    /** the column name for the cortecaja_fecha field */
    const CORTECAJA_FECHA = 'cortecaja.cortecaja_fecha';

    /** the column name for the cortecaja_total field */
    const CORTECAJA_TOTAL = 'cortecaja.cortecaja_total';

    /** the column name for the cortecaja_efectivo field */
    const CORTECAJA_EFECTIVO = 'cortecaja.cortecaja_efectivo';

    /** the column name for the cortecaja_tarjetas field */
    const CORTECAJA_TARJETAS = 'cortecaja.cortecaja_tarjetas';

    /** the column name for the cortecaja_vales field */
    const CORTECAJA_VALES = 'cortecaja.cortecaja_vales';

    /** the column name for the cortecaja_enviado field */
    const CORTECAJA_ENVIADO = 'cortecaja.cortecaja_enviado';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Cortecaja objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Cortecaja[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CortecajaPeer::$fieldNames[CortecajaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idcortecaja', 'Idsucursal', 'Idempleadoenvia', 'CortecajaFecha', 'CortecajaTotal', 'CortecajaEfectivo', 'CortecajaTarjetas', 'CortecajaVales', 'CortecajaEnviado', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcortecaja', 'idsucursal', 'idempleadoenvia', 'cortecajaFecha', 'cortecajaTotal', 'cortecajaEfectivo', 'cortecajaTarjetas', 'cortecajaVales', 'cortecajaEnviado', ),
        BasePeer::TYPE_COLNAME => array (CortecajaPeer::IDCORTECAJA, CortecajaPeer::IDSUCURSAL, CortecajaPeer::IDEMPLEADOENVIA, CortecajaPeer::CORTECAJA_FECHA, CortecajaPeer::CORTECAJA_TOTAL, CortecajaPeer::CORTECAJA_EFECTIVO, CortecajaPeer::CORTECAJA_TARJETAS, CortecajaPeer::CORTECAJA_VALES, CortecajaPeer::CORTECAJA_ENVIADO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCORTECAJA', 'IDSUCURSAL', 'IDEMPLEADOENVIA', 'CORTECAJA_FECHA', 'CORTECAJA_TOTAL', 'CORTECAJA_EFECTIVO', 'CORTECAJA_TARJETAS', 'CORTECAJA_VALES', 'CORTECAJA_ENVIADO', ),
        BasePeer::TYPE_FIELDNAME => array ('idcortecaja', 'idsucursal', 'idempleadoenvia', 'cortecaja_fecha', 'cortecaja_total', 'cortecaja_efectivo', 'cortecaja_tarjetas', 'cortecaja_vales', 'cortecaja_enviado', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CortecajaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idcortecaja' => 0, 'Idsucursal' => 1, 'Idempleadoenvia' => 2, 'CortecajaFecha' => 3, 'CortecajaTotal' => 4, 'CortecajaEfectivo' => 5, 'CortecajaTarjetas' => 6, 'CortecajaVales' => 7, 'CortecajaEnviado' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcortecaja' => 0, 'idsucursal' => 1, 'idempleadoenvia' => 2, 'cortecajaFecha' => 3, 'cortecajaTotal' => 4, 'cortecajaEfectivo' => 5, 'cortecajaTarjetas' => 6, 'cortecajaVales' => 7, 'cortecajaEnviado' => 8, ),
        BasePeer::TYPE_COLNAME => array (CortecajaPeer::IDCORTECAJA => 0, CortecajaPeer::IDSUCURSAL => 1, CortecajaPeer::IDEMPLEADOENVIA => 2, CortecajaPeer::CORTECAJA_FECHA => 3, CortecajaPeer::CORTECAJA_TOTAL => 4, CortecajaPeer::CORTECAJA_EFECTIVO => 5, CortecajaPeer::CORTECAJA_TARJETAS => 6, CortecajaPeer::CORTECAJA_VALES => 7, CortecajaPeer::CORTECAJA_ENVIADO => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCORTECAJA' => 0, 'IDSUCURSAL' => 1, 'IDEMPLEADOENVIA' => 2, 'CORTECAJA_FECHA' => 3, 'CORTECAJA_TOTAL' => 4, 'CORTECAJA_EFECTIVO' => 5, 'CORTECAJA_TARJETAS' => 6, 'CORTECAJA_VALES' => 7, 'CORTECAJA_ENVIADO' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('idcortecaja' => 0, 'idsucursal' => 1, 'idempleadoenvia' => 2, 'cortecaja_fecha' => 3, 'cortecaja_total' => 4, 'cortecaja_efectivo' => 5, 'cortecaja_tarjetas' => 6, 'cortecaja_vales' => 7, 'cortecaja_enviado' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
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
        $toNames = CortecajaPeer::getFieldNames($toType);
        $key = isset(CortecajaPeer::$fieldKeys[$fromType][$name]) ? CortecajaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CortecajaPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CortecajaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CortecajaPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CortecajaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CortecajaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CortecajaPeer::IDCORTECAJA);
            $criteria->addSelectColumn(CortecajaPeer::IDSUCURSAL);
            $criteria->addSelectColumn(CortecajaPeer::IDEMPLEADOENVIA);
            $criteria->addSelectColumn(CortecajaPeer::CORTECAJA_FECHA);
            $criteria->addSelectColumn(CortecajaPeer::CORTECAJA_TOTAL);
            $criteria->addSelectColumn(CortecajaPeer::CORTECAJA_EFECTIVO);
            $criteria->addSelectColumn(CortecajaPeer::CORTECAJA_TARJETAS);
            $criteria->addSelectColumn(CortecajaPeer::CORTECAJA_VALES);
            $criteria->addSelectColumn(CortecajaPeer::CORTECAJA_ENVIADO);
        } else {
            $criteria->addSelectColumn($alias . '.idcortecaja');
            $criteria->addSelectColumn($alias . '.idsucursal');
            $criteria->addSelectColumn($alias . '.idempleadoenvia');
            $criteria->addSelectColumn($alias . '.cortecaja_fecha');
            $criteria->addSelectColumn($alias . '.cortecaja_total');
            $criteria->addSelectColumn($alias . '.cortecaja_efectivo');
            $criteria->addSelectColumn($alias . '.cortecaja_tarjetas');
            $criteria->addSelectColumn($alias . '.cortecaja_vales');
            $criteria->addSelectColumn($alias . '.cortecaja_enviado');
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
        $criteria->setPrimaryTableName(CortecajaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CortecajaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CortecajaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CortecajaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Cortecaja
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CortecajaPeer::doSelect($critcopy, $con);
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
        return CortecajaPeer::populateObjects(CortecajaPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CortecajaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CortecajaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CortecajaPeer::DATABASE_NAME);

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
     * @param Cortecaja $obj A Cortecaja object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdcortecaja();
            } // if key === null
            CortecajaPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Cortecaja object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Cortecaja) {
                $key = (string) $value->getIdcortecaja();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Cortecaja object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CortecajaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Cortecaja Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CortecajaPeer::$instances[$key])) {
                return CortecajaPeer::$instances[$key];
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
        foreach (CortecajaPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CortecajaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to cortecaja
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
        $cls = CortecajaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CortecajaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CortecajaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CortecajaPeer::addInstanceToPool($obj, $key);
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
     * @return array (Cortecaja object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CortecajaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CortecajaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CortecajaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CortecajaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CortecajaPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(CortecajaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CortecajaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CortecajaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CortecajaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CortecajaPeer::IDEMPLEADOENVIA, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Sucursal table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinSucursal(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CortecajaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CortecajaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CortecajaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CortecajaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CortecajaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Selects a collection of Cortecaja objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cortecaja objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CortecajaPeer::DATABASE_NAME);
        }

        CortecajaPeer::addSelectColumns($criteria);
        $startcol = CortecajaPeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(CortecajaPeer::IDEMPLEADOENVIA, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CortecajaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CortecajaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CortecajaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CortecajaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Cortecaja) to $obj2 (Empleado)
                $obj2->addCortecaja($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cortecaja objects pre-filled with their Sucursal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cortecaja objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSucursal(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CortecajaPeer::DATABASE_NAME);
        }

        CortecajaPeer::addSelectColumns($criteria);
        $startcol = CortecajaPeer::NUM_HYDRATE_COLUMNS;
        SucursalPeer::addSelectColumns($criteria);

        $criteria->addJoin(CortecajaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CortecajaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CortecajaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CortecajaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CortecajaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = SucursalPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = SucursalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    SucursalPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Cortecaja) to $obj2 (Sucursal)
                $obj2->addCortecaja($obj1);

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
        $criteria->setPrimaryTableName(CortecajaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CortecajaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CortecajaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CortecajaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CortecajaPeer::IDEMPLEADOENVIA, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(CortecajaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Selects a collection of Cortecaja objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cortecaja objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CortecajaPeer::DATABASE_NAME);
        }

        CortecajaPeer::addSelectColumns($criteria);
        $startcol2 = CortecajaPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CortecajaPeer::IDEMPLEADOENVIA, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(CortecajaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CortecajaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CortecajaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CortecajaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CortecajaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Cortecaja) to the collection in $obj2 (Empleado)
                $obj2->addCortecaja($obj1);
            } // if joined row not null

            // Add objects for joined Sucursal rows

            $key3 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = SucursalPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = SucursalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    SucursalPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Cortecaja) to the collection in $obj3 (Sucursal)
                $obj3->addCortecaja($obj1);
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
        $criteria->setPrimaryTableName(CortecajaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CortecajaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CortecajaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CortecajaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CortecajaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Sucursal table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptSucursal(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CortecajaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CortecajaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CortecajaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CortecajaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CortecajaPeer::IDEMPLEADOENVIA, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Selects a collection of Cortecaja objects pre-filled with all related objects except Empleado.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cortecaja objects.
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
            $criteria->setDbName(CortecajaPeer::DATABASE_NAME);
        }

        CortecajaPeer::addSelectColumns($criteria);
        $startcol2 = CortecajaPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CortecajaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CortecajaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CortecajaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CortecajaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CortecajaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Sucursal rows

                $key2 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = SucursalPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = SucursalPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    SucursalPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Cortecaja) to the collection in $obj2 (Sucursal)
                $obj2->addCortecaja($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cortecaja objects pre-filled with all related objects except Sucursal.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cortecaja objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptSucursal(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CortecajaPeer::DATABASE_NAME);
        }

        CortecajaPeer::addSelectColumns($criteria);
        $startcol2 = CortecajaPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CortecajaPeer::IDEMPLEADOENVIA, EmpleadoPeer::IDEMPLEADO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CortecajaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CortecajaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CortecajaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CortecajaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Cortecaja) to the collection in $obj2 (Empleado)
                $obj2->addCortecaja($obj1);

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
        return Propel::getDatabaseMap(CortecajaPeer::DATABASE_NAME)->getTable(CortecajaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCortecajaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCortecajaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CortecajaTableMap());
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
        return CortecajaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Cortecaja or Criteria object.
     *
     * @param      mixed $values Criteria or Cortecaja object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CortecajaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Cortecaja object
        }

        if ($criteria->containsKey(CortecajaPeer::IDCORTECAJA) && $criteria->keyContainsValue(CortecajaPeer::IDCORTECAJA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CortecajaPeer::IDCORTECAJA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CortecajaPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Cortecaja or Criteria object.
     *
     * @param      mixed $values Criteria or Cortecaja object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CortecajaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CortecajaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CortecajaPeer::IDCORTECAJA);
            $value = $criteria->remove(CortecajaPeer::IDCORTECAJA);
            if ($value) {
                $selectCriteria->add(CortecajaPeer::IDCORTECAJA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CortecajaPeer::TABLE_NAME);
            }

        } else { // $values is Cortecaja object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CortecajaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the cortecaja table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CortecajaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CortecajaPeer::TABLE_NAME, $con, CortecajaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CortecajaPeer::clearInstancePool();
            CortecajaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Cortecaja or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Cortecaja object or primary key or array of primary keys
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
            $con = Propel::getConnection(CortecajaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CortecajaPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Cortecaja) { // it's a model object
            // invalidate the cache for this single object
            CortecajaPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CortecajaPeer::DATABASE_NAME);
            $criteria->add(CortecajaPeer::IDCORTECAJA, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CortecajaPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CortecajaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CortecajaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Cortecaja object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Cortecaja $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CortecajaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CortecajaPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CortecajaPeer::DATABASE_NAME, CortecajaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Cortecaja
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CortecajaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CortecajaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CortecajaPeer::DATABASE_NAME);
        $criteria->add(CortecajaPeer::IDCORTECAJA, $pk);

        $v = CortecajaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Cortecaja[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CortecajaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CortecajaPeer::DATABASE_NAME);
            $criteria->add(CortecajaPeer::IDCORTECAJA, $pks, Criteria::IN);
            $objs = CortecajaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCortecajaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCortecajaPeer::buildTableMap();

