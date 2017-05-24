<?php


/**
 * Base static class for performing query and update operations on the 'descuento' table.
 *
 *
 *
 * @package propel.generator.zarely.om
 */
abstract class BaseDescuentoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'zarely';

    /** the table name for this class */
    const TABLE_NAME = 'descuento';

    /** the related Propel class for this table */
    const OM_CLASS = 'Descuento';

    /** the related TableMap class for this table */
    const TM_CLASS = 'DescuentoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the iddescuento field */
    const IDDESCUENTO = 'descuento.iddescuento';

    /** the column name for the descuento_nombre field */
    const DESCUENTO_NOMBRE = 'descuento.descuento_nombre';

    /** the column name for the descuento_fechainicio field */
    const DESCUENTO_FECHAINICIO = 'descuento.descuento_fechainicio';

    /** the column name for the descuento_fechafin field */
    const DESCUENTO_FECHAFIN = 'descuento.descuento_fechafin';

    /** the column name for the descuento_estatus field */
    const DESCUENTO_ESTATUS = 'descuento.descuento_estatus';

    /** the column name for the descuento_tipo field */
    const DESCUENTO_TIPO = 'descuento.descuento_tipo';

    /** the column name for the descuento_descripcion field */
    const DESCUENTO_DESCRIPCION = 'descuento.descuento_descripcion';

    /** the column name for the descuento_cantidad field */
    const DESCUENTO_CANTIDAD = 'descuento.descuento_cantidad';

    /** The enumerated values for the descuento_tipo field */
    const DESCUENTO_TIPO_PORCENTAJE = 'porcentaje';
    const DESCUENTO_TIPO_CANTIDAD = 'cantidad';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Descuento objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Descuento[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. DescuentoPeer::$fieldNames[DescuentoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Iddescuento', 'DescuentoNombre', 'DescuentoFechainicio', 'DescuentoFechafin', 'DescuentoEstatus', 'DescuentoTipo', 'DescuentoDescripcion', 'DescuentoCantidad', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('iddescuento', 'descuentoNombre', 'descuentoFechainicio', 'descuentoFechafin', 'descuentoEstatus', 'descuentoTipo', 'descuentoDescripcion', 'descuentoCantidad', ),
        BasePeer::TYPE_COLNAME => array (DescuentoPeer::IDDESCUENTO, DescuentoPeer::DESCUENTO_NOMBRE, DescuentoPeer::DESCUENTO_FECHAINICIO, DescuentoPeer::DESCUENTO_FECHAFIN, DescuentoPeer::DESCUENTO_ESTATUS, DescuentoPeer::DESCUENTO_TIPO, DescuentoPeer::DESCUENTO_DESCRIPCION, DescuentoPeer::DESCUENTO_CANTIDAD, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDDESCUENTO', 'DESCUENTO_NOMBRE', 'DESCUENTO_FECHAINICIO', 'DESCUENTO_FECHAFIN', 'DESCUENTO_ESTATUS', 'DESCUENTO_TIPO', 'DESCUENTO_DESCRIPCION', 'DESCUENTO_CANTIDAD', ),
        BasePeer::TYPE_FIELDNAME => array ('iddescuento', 'descuento_nombre', 'descuento_fechainicio', 'descuento_fechafin', 'descuento_estatus', 'descuento_tipo', 'descuento_descripcion', 'descuento_cantidad', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. DescuentoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Iddescuento' => 0, 'DescuentoNombre' => 1, 'DescuentoFechainicio' => 2, 'DescuentoFechafin' => 3, 'DescuentoEstatus' => 4, 'DescuentoTipo' => 5, 'DescuentoDescripcion' => 6, 'DescuentoCantidad' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('iddescuento' => 0, 'descuentoNombre' => 1, 'descuentoFechainicio' => 2, 'descuentoFechafin' => 3, 'descuentoEstatus' => 4, 'descuentoTipo' => 5, 'descuentoDescripcion' => 6, 'descuentoCantidad' => 7, ),
        BasePeer::TYPE_COLNAME => array (DescuentoPeer::IDDESCUENTO => 0, DescuentoPeer::DESCUENTO_NOMBRE => 1, DescuentoPeer::DESCUENTO_FECHAINICIO => 2, DescuentoPeer::DESCUENTO_FECHAFIN => 3, DescuentoPeer::DESCUENTO_ESTATUS => 4, DescuentoPeer::DESCUENTO_TIPO => 5, DescuentoPeer::DESCUENTO_DESCRIPCION => 6, DescuentoPeer::DESCUENTO_CANTIDAD => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDDESCUENTO' => 0, 'DESCUENTO_NOMBRE' => 1, 'DESCUENTO_FECHAINICIO' => 2, 'DESCUENTO_FECHAFIN' => 3, 'DESCUENTO_ESTATUS' => 4, 'DESCUENTO_TIPO' => 5, 'DESCUENTO_DESCRIPCION' => 6, 'DESCUENTO_CANTIDAD' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('iddescuento' => 0, 'descuento_nombre' => 1, 'descuento_fechainicio' => 2, 'descuento_fechafin' => 3, 'descuento_estatus' => 4, 'descuento_tipo' => 5, 'descuento_descripcion' => 6, 'descuento_cantidad' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        DescuentoPeer::DESCUENTO_TIPO => array(
            DescuentoPeer::DESCUENTO_TIPO_PORCENTAJE,
            DescuentoPeer::DESCUENTO_TIPO_CANTIDAD,
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
        $toNames = DescuentoPeer::getFieldNames($toType);
        $key = isset(DescuentoPeer::$fieldKeys[$fromType][$name]) ? DescuentoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(DescuentoPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, DescuentoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return DescuentoPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return DescuentoPeer::$enumValueSets;
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
        $valueSets = DescuentoPeer::getValueSets();

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
        $values = DescuentoPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. DescuentoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(DescuentoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(DescuentoPeer::IDDESCUENTO);
            $criteria->addSelectColumn(DescuentoPeer::DESCUENTO_NOMBRE);
            $criteria->addSelectColumn(DescuentoPeer::DESCUENTO_FECHAINICIO);
            $criteria->addSelectColumn(DescuentoPeer::DESCUENTO_FECHAFIN);
            $criteria->addSelectColumn(DescuentoPeer::DESCUENTO_ESTATUS);
            $criteria->addSelectColumn(DescuentoPeer::DESCUENTO_TIPO);
            $criteria->addSelectColumn(DescuentoPeer::DESCUENTO_DESCRIPCION);
            $criteria->addSelectColumn(DescuentoPeer::DESCUENTO_CANTIDAD);
        } else {
            $criteria->addSelectColumn($alias . '.iddescuento');
            $criteria->addSelectColumn($alias . '.descuento_nombre');
            $criteria->addSelectColumn($alias . '.descuento_fechainicio');
            $criteria->addSelectColumn($alias . '.descuento_fechafin');
            $criteria->addSelectColumn($alias . '.descuento_estatus');
            $criteria->addSelectColumn($alias . '.descuento_tipo');
            $criteria->addSelectColumn($alias . '.descuento_descripcion');
            $criteria->addSelectColumn($alias . '.descuento_cantidad');
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
        $criteria->setPrimaryTableName(DescuentoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            DescuentoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(DescuentoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(DescuentoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Descuento
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = DescuentoPeer::doSelect($critcopy, $con);
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
        return DescuentoPeer::populateObjects(DescuentoPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(DescuentoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            DescuentoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(DescuentoPeer::DATABASE_NAME);

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
     * @param Descuento $obj A Descuento object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIddescuento();
            } // if key === null
            DescuentoPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Descuento object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Descuento) {
                $key = (string) $value->getIddescuento();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Descuento object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(DescuentoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Descuento Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(DescuentoPeer::$instances[$key])) {
                return DescuentoPeer::$instances[$key];
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
        foreach (DescuentoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        DescuentoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to descuento
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in DescuentodetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        DescuentodetallePeer::clearInstancePool();
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
        $cls = DescuentoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = DescuentoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = DescuentoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                DescuentoPeer::addInstanceToPool($obj, $key);
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
     * @return array (Descuento object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = DescuentoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = DescuentoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + DescuentoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = DescuentoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            DescuentoPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(DescuentoPeer::DATABASE_NAME)->getTable(DescuentoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseDescuentoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseDescuentoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \DescuentoTableMap());
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
        return DescuentoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Descuento or Criteria object.
     *
     * @param      mixed $values Criteria or Descuento object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DescuentoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Descuento object
        }

        if ($criteria->containsKey(DescuentoPeer::IDDESCUENTO) && $criteria->keyContainsValue(DescuentoPeer::IDDESCUENTO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.DescuentoPeer::IDDESCUENTO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(DescuentoPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Descuento or Criteria object.
     *
     * @param      mixed $values Criteria or Descuento object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DescuentoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(DescuentoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(DescuentoPeer::IDDESCUENTO);
            $value = $criteria->remove(DescuentoPeer::IDDESCUENTO);
            if ($value) {
                $selectCriteria->add(DescuentoPeer::IDDESCUENTO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(DescuentoPeer::TABLE_NAME);
            }

        } else { // $values is Descuento object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(DescuentoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the descuento table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DescuentoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += DescuentoPeer::doOnDeleteCascade(new Criteria(DescuentoPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(DescuentoPeer::TABLE_NAME, $con, DescuentoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            DescuentoPeer::clearInstancePool();
            DescuentoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Descuento or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Descuento object or primary key or array of primary keys
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
            $con = Propel::getConnection(DescuentoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Descuento) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(DescuentoPeer::DATABASE_NAME);
            $criteria->add(DescuentoPeer::IDDESCUENTO, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(DescuentoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += DescuentoPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                DescuentoPeer::clearInstancePool();
            } elseif ($values instanceof Descuento) { // it's a model object
                DescuentoPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    DescuentoPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            DescuentoPeer::clearRelatedInstancePool();
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
        $objects = DescuentoPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Descuentodetalle objects
            $criteria = new Criteria(DescuentodetallePeer::DATABASE_NAME);

            $criteria->add(DescuentodetallePeer::IDDESCUENTO, $obj->getIddescuento());
            $affectedRows += DescuentodetallePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Descuento object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Descuento $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(DescuentoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(DescuentoPeer::TABLE_NAME);

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

        return BasePeer::doValidate(DescuentoPeer::DATABASE_NAME, DescuentoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Descuento
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = DescuentoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(DescuentoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(DescuentoPeer::DATABASE_NAME);
        $criteria->add(DescuentoPeer::IDDESCUENTO, $pk);

        $v = DescuentoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Descuento[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(DescuentoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(DescuentoPeer::DATABASE_NAME);
            $criteria->add(DescuentoPeer::IDDESCUENTO, $pks, Criteria::IN);
            $objs = DescuentoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseDescuentoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseDescuentoPeer::buildTableMap();

