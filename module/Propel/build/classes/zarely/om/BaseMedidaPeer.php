<?php


/**
 * Base static class for performing query and update operations on the 'medida' table.
 *
 *
 *
 * @package propel.generator.zarely.om
 */
abstract class BaseMedidaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'zarely';

    /** the table name for this class */
    const TABLE_NAME = 'medida';

    /** the related Propel class for this table */
    const OM_CLASS = 'Medida';

    /** the related TableMap class for this table */
    const TM_CLASS = 'MedidaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the idmedida field */
    const IDMEDIDA = 'medida.idmedida';

    /** the column name for the medida_nombre field */
    const MEDIDA_NOMBRE = 'medida.medida_nombre';

    /** the column name for the medida_xs field */
    const MEDIDA_XS = 'medida.medida_xs';

    /** the column name for the medida_s field */
    const MEDIDA_S = 'medida.medida_s';

    /** the column name for the medida_m field */
    const MEDIDA_M = 'medida.medida_m';

    /** the column name for the medida_l field */
    const MEDIDA_L = 'medida.medida_l';

    /** the column name for the medida_xl field */
    const MEDIDA_XL = 'medida.medida_xl';

    /** the column name for the medida_xxl field */
    const MEDIDA_XXL = 'medida.medida_xxl';

    /** the column name for the medida_unitalla field */
    const MEDIDA_UNITALLA = 'medida.medida_unitalla';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Medida objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Medida[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. MedidaPeer::$fieldNames[MedidaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idmedida', 'MedidaNombre', 'MedidaXs', 'MedidaS', 'MedidaM', 'MedidaL', 'MedidaXl', 'MedidaXxl', 'MedidaUnitalla', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idmedida', 'medidaNombre', 'medidaXs', 'medidaS', 'medidaM', 'medidaL', 'medidaXl', 'medidaXxl', 'medidaUnitalla', ),
        BasePeer::TYPE_COLNAME => array (MedidaPeer::IDMEDIDA, MedidaPeer::MEDIDA_NOMBRE, MedidaPeer::MEDIDA_XS, MedidaPeer::MEDIDA_S, MedidaPeer::MEDIDA_M, MedidaPeer::MEDIDA_L, MedidaPeer::MEDIDA_XL, MedidaPeer::MEDIDA_XXL, MedidaPeer::MEDIDA_UNITALLA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDMEDIDA', 'MEDIDA_NOMBRE', 'MEDIDA_XS', 'MEDIDA_S', 'MEDIDA_M', 'MEDIDA_L', 'MEDIDA_XL', 'MEDIDA_XXL', 'MEDIDA_UNITALLA', ),
        BasePeer::TYPE_FIELDNAME => array ('idmedida', 'medida_nombre', 'medida_xs', 'medida_s', 'medida_m', 'medida_l', 'medida_xl', 'medida_xxl', 'medida_unitalla', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. MedidaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idmedida' => 0, 'MedidaNombre' => 1, 'MedidaXs' => 2, 'MedidaS' => 3, 'MedidaM' => 4, 'MedidaL' => 5, 'MedidaXl' => 6, 'MedidaXxl' => 7, 'MedidaUnitalla' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idmedida' => 0, 'medidaNombre' => 1, 'medidaXs' => 2, 'medidaS' => 3, 'medidaM' => 4, 'medidaL' => 5, 'medidaXl' => 6, 'medidaXxl' => 7, 'medidaUnitalla' => 8, ),
        BasePeer::TYPE_COLNAME => array (MedidaPeer::IDMEDIDA => 0, MedidaPeer::MEDIDA_NOMBRE => 1, MedidaPeer::MEDIDA_XS => 2, MedidaPeer::MEDIDA_S => 3, MedidaPeer::MEDIDA_M => 4, MedidaPeer::MEDIDA_L => 5, MedidaPeer::MEDIDA_XL => 6, MedidaPeer::MEDIDA_XXL => 7, MedidaPeer::MEDIDA_UNITALLA => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDMEDIDA' => 0, 'MEDIDA_NOMBRE' => 1, 'MEDIDA_XS' => 2, 'MEDIDA_S' => 3, 'MEDIDA_M' => 4, 'MEDIDA_L' => 5, 'MEDIDA_XL' => 6, 'MEDIDA_XXL' => 7, 'MEDIDA_UNITALLA' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('idmedida' => 0, 'medida_nombre' => 1, 'medida_xs' => 2, 'medida_s' => 3, 'medida_m' => 4, 'medida_l' => 5, 'medida_xl' => 6, 'medida_xxl' => 7, 'medida_unitalla' => 8, ),
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
        $toNames = MedidaPeer::getFieldNames($toType);
        $key = isset(MedidaPeer::$fieldKeys[$fromType][$name]) ? MedidaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(MedidaPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, MedidaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return MedidaPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. MedidaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(MedidaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(MedidaPeer::IDMEDIDA);
            $criteria->addSelectColumn(MedidaPeer::MEDIDA_NOMBRE);
            $criteria->addSelectColumn(MedidaPeer::MEDIDA_XS);
            $criteria->addSelectColumn(MedidaPeer::MEDIDA_S);
            $criteria->addSelectColumn(MedidaPeer::MEDIDA_M);
            $criteria->addSelectColumn(MedidaPeer::MEDIDA_L);
            $criteria->addSelectColumn(MedidaPeer::MEDIDA_XL);
            $criteria->addSelectColumn(MedidaPeer::MEDIDA_XXL);
            $criteria->addSelectColumn(MedidaPeer::MEDIDA_UNITALLA);
        } else {
            $criteria->addSelectColumn($alias . '.idmedida');
            $criteria->addSelectColumn($alias . '.medida_nombre');
            $criteria->addSelectColumn($alias . '.medida_xs');
            $criteria->addSelectColumn($alias . '.medida_s');
            $criteria->addSelectColumn($alias . '.medida_m');
            $criteria->addSelectColumn($alias . '.medida_l');
            $criteria->addSelectColumn($alias . '.medida_xl');
            $criteria->addSelectColumn($alias . '.medida_xxl');
            $criteria->addSelectColumn($alias . '.medida_unitalla');
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
        $criteria->setPrimaryTableName(MedidaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            MedidaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(MedidaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(MedidaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Medida
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = MedidaPeer::doSelect($critcopy, $con);
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
        return MedidaPeer::populateObjects(MedidaPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(MedidaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            MedidaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(MedidaPeer::DATABASE_NAME);

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
     * @param Medida $obj A Medida object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdmedida();
            } // if key === null
            MedidaPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Medida object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Medida) {
                $key = (string) $value->getIdmedida();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Medida object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(MedidaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Medida Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(MedidaPeer::$instances[$key])) {
                return MedidaPeer::$instances[$key];
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
        foreach (MedidaPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        MedidaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to medida
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in ProductomedidaPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ProductomedidaPeer::clearInstancePool();
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
        $cls = MedidaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = MedidaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = MedidaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                MedidaPeer::addInstanceToPool($obj, $key);
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
     * @return array (Medida object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = MedidaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = MedidaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + MedidaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = MedidaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            MedidaPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(MedidaPeer::DATABASE_NAME)->getTable(MedidaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseMedidaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseMedidaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \MedidaTableMap());
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
        return MedidaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Medida or Criteria object.
     *
     * @param      mixed $values Criteria or Medida object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MedidaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Medida object
        }

        if ($criteria->containsKey(MedidaPeer::IDMEDIDA) && $criteria->keyContainsValue(MedidaPeer::IDMEDIDA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.MedidaPeer::IDMEDIDA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(MedidaPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Medida or Criteria object.
     *
     * @param      mixed $values Criteria or Medida object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MedidaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(MedidaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(MedidaPeer::IDMEDIDA);
            $value = $criteria->remove(MedidaPeer::IDMEDIDA);
            if ($value) {
                $selectCriteria->add(MedidaPeer::IDMEDIDA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(MedidaPeer::TABLE_NAME);
            }

        } else { // $values is Medida object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(MedidaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the medida table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MedidaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += MedidaPeer::doOnDeleteCascade(new Criteria(MedidaPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(MedidaPeer::TABLE_NAME, $con, MedidaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            MedidaPeer::clearInstancePool();
            MedidaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Medida or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Medida object or primary key or array of primary keys
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
            $con = Propel::getConnection(MedidaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Medida) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(MedidaPeer::DATABASE_NAME);
            $criteria->add(MedidaPeer::IDMEDIDA, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(MedidaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += MedidaPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                MedidaPeer::clearInstancePool();
            } elseif ($values instanceof Medida) { // it's a model object
                MedidaPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    MedidaPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            MedidaPeer::clearRelatedInstancePool();
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
        $objects = MedidaPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Productomedida objects
            $criteria = new Criteria(ProductomedidaPeer::DATABASE_NAME);

            $criteria->add(ProductomedidaPeer::IDMEDIDA, $obj->getIdmedida());
            $affectedRows += ProductomedidaPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Medida object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Medida $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(MedidaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(MedidaPeer::TABLE_NAME);

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

        return BasePeer::doValidate(MedidaPeer::DATABASE_NAME, MedidaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Medida
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = MedidaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(MedidaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(MedidaPeer::DATABASE_NAME);
        $criteria->add(MedidaPeer::IDMEDIDA, $pk);

        $v = MedidaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Medida[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(MedidaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(MedidaPeer::DATABASE_NAME);
            $criteria->add(MedidaPeer::IDMEDIDA, $pks, Criteria::IN);
            $objs = MedidaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseMedidaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseMedidaPeer::buildTableMap();

