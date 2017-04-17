<?php


/**
 * Base static class for performing query and update operations on the 'promociondetalle' table.
 *
 *
 *
 * @package propel.generator.zarely.om
 */
abstract class BasePromociondetallePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'zarely';

    /** the table name for this class */
    const TABLE_NAME = 'promociondetalle';

    /** the related Propel class for this table */
    const OM_CLASS = 'Promociondetalle';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PromociondetalleTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the idpromociondetalle field */
    const IDPROMOCIONDETALLE = 'promociondetalle.idpromociondetalle';

    /** the column name for the idpromocion field */
    const IDPROMOCION = 'promociondetalle.idpromocion';

    /** the column name for the idmarcaoperando field */
    const IDMARCAOPERANDO = 'promociondetalle.idmarcaoperando';

    /** the column name for the idproductooperando field */
    const IDPRODUCTOOPERANDO = 'promociondetalle.idproductooperando';

    /** the column name for the promociondetalle_cantidadoperando field */
    const PROMOCIONDETALLE_CANTIDADOPERANDO = 'promociondetalle.promociondetalle_cantidadoperando';

    /** the column name for the idmarcaresultado field */
    const IDMARCARESULTADO = 'promociondetalle.idmarcaresultado';

    /** the column name for the idproductoresultado field */
    const IDPRODUCTORESULTADO = 'promociondetalle.idproductoresultado';

    /** the column name for the promociondetalle_cantidadresultado field */
    const PROMOCIONDETALLE_CANTIDADRESULTADO = 'promociondetalle.promociondetalle_cantidadresultado';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Promociondetalle objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Promociondetalle[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PromociondetallePeer::$fieldNames[PromociondetallePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idpromociondetalle', 'Idpromocion', 'Idmarcaoperando', 'Idproductooperando', 'PromociondetalleCantidadoperando', 'Idmarcaresultado', 'Idproductoresultado', 'PromociondetalleCantidadresultado', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idpromociondetalle', 'idpromocion', 'idmarcaoperando', 'idproductooperando', 'promociondetalleCantidadoperando', 'idmarcaresultado', 'idproductoresultado', 'promociondetalleCantidadresultado', ),
        BasePeer::TYPE_COLNAME => array (PromociondetallePeer::IDPROMOCIONDETALLE, PromociondetallePeer::IDPROMOCION, PromociondetallePeer::IDMARCAOPERANDO, PromociondetallePeer::IDPRODUCTOOPERANDO, PromociondetallePeer::PROMOCIONDETALLE_CANTIDADOPERANDO, PromociondetallePeer::IDMARCARESULTADO, PromociondetallePeer::IDPRODUCTORESULTADO, PromociondetallePeer::PROMOCIONDETALLE_CANTIDADRESULTADO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPROMOCIONDETALLE', 'IDPROMOCION', 'IDMARCAOPERANDO', 'IDPRODUCTOOPERANDO', 'PROMOCIONDETALLE_CANTIDADOPERANDO', 'IDMARCARESULTADO', 'IDPRODUCTORESULTADO', 'PROMOCIONDETALLE_CANTIDADRESULTADO', ),
        BasePeer::TYPE_FIELDNAME => array ('idpromociondetalle', 'idpromocion', 'idmarcaoperando', 'idproductooperando', 'promociondetalle_cantidadoperando', 'idmarcaresultado', 'idproductoresultado', 'promociondetalle_cantidadresultado', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PromociondetallePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idpromociondetalle' => 0, 'Idpromocion' => 1, 'Idmarcaoperando' => 2, 'Idproductooperando' => 3, 'PromociondetalleCantidadoperando' => 4, 'Idmarcaresultado' => 5, 'Idproductoresultado' => 6, 'PromociondetalleCantidadresultado' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idpromociondetalle' => 0, 'idpromocion' => 1, 'idmarcaoperando' => 2, 'idproductooperando' => 3, 'promociondetalleCantidadoperando' => 4, 'idmarcaresultado' => 5, 'idproductoresultado' => 6, 'promociondetalleCantidadresultado' => 7, ),
        BasePeer::TYPE_COLNAME => array (PromociondetallePeer::IDPROMOCIONDETALLE => 0, PromociondetallePeer::IDPROMOCION => 1, PromociondetallePeer::IDMARCAOPERANDO => 2, PromociondetallePeer::IDPRODUCTOOPERANDO => 3, PromociondetallePeer::PROMOCIONDETALLE_CANTIDADOPERANDO => 4, PromociondetallePeer::IDMARCARESULTADO => 5, PromociondetallePeer::IDPRODUCTORESULTADO => 6, PromociondetallePeer::PROMOCIONDETALLE_CANTIDADRESULTADO => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPROMOCIONDETALLE' => 0, 'IDPROMOCION' => 1, 'IDMARCAOPERANDO' => 2, 'IDPRODUCTOOPERANDO' => 3, 'PROMOCIONDETALLE_CANTIDADOPERANDO' => 4, 'IDMARCARESULTADO' => 5, 'IDPRODUCTORESULTADO' => 6, 'PROMOCIONDETALLE_CANTIDADRESULTADO' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('idpromociondetalle' => 0, 'idpromocion' => 1, 'idmarcaoperando' => 2, 'idproductooperando' => 3, 'promociondetalle_cantidadoperando' => 4, 'idmarcaresultado' => 5, 'idproductoresultado' => 6, 'promociondetalle_cantidadresultado' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
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
        $toNames = PromociondetallePeer::getFieldNames($toType);
        $key = isset(PromociondetallePeer::$fieldKeys[$fromType][$name]) ? PromociondetallePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PromociondetallePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PromociondetallePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PromociondetallePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. PromociondetallePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PromociondetallePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PromociondetallePeer::IDPROMOCIONDETALLE);
            $criteria->addSelectColumn(PromociondetallePeer::IDPROMOCION);
            $criteria->addSelectColumn(PromociondetallePeer::IDMARCAOPERANDO);
            $criteria->addSelectColumn(PromociondetallePeer::IDPRODUCTOOPERANDO);
            $criteria->addSelectColumn(PromociondetallePeer::PROMOCIONDETALLE_CANTIDADOPERANDO);
            $criteria->addSelectColumn(PromociondetallePeer::IDMARCARESULTADO);
            $criteria->addSelectColumn(PromociondetallePeer::IDPRODUCTORESULTADO);
            $criteria->addSelectColumn(PromociondetallePeer::PROMOCIONDETALLE_CANTIDADRESULTADO);
        } else {
            $criteria->addSelectColumn($alias . '.idpromociondetalle');
            $criteria->addSelectColumn($alias . '.idpromocion');
            $criteria->addSelectColumn($alias . '.idmarcaoperando');
            $criteria->addSelectColumn($alias . '.idproductooperando');
            $criteria->addSelectColumn($alias . '.promociondetalle_cantidadoperando');
            $criteria->addSelectColumn($alias . '.idmarcaresultado');
            $criteria->addSelectColumn($alias . '.idproductoresultado');
            $criteria->addSelectColumn($alias . '.promociondetalle_cantidadresultado');
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
        $criteria->setPrimaryTableName(PromociondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PromociondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Promociondetalle
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PromociondetallePeer::doSelect($critcopy, $con);
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
        return PromociondetallePeer::populateObjects(PromociondetallePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PromociondetallePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);

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
     * @param Promociondetalle $obj A Promociondetalle object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdpromociondetalle();
            } // if key === null
            PromociondetallePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Promociondetalle object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Promociondetalle) {
                $key = (string) $value->getIdpromociondetalle();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Promociondetalle object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PromociondetallePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Promociondetalle Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PromociondetallePeer::$instances[$key])) {
                return PromociondetallePeer::$instances[$key];
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
        foreach (PromociondetallePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PromociondetallePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to promociondetalle
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
        $cls = PromociondetallePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PromociondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PromociondetallePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PromociondetallePeer::addInstanceToPool($obj, $key);
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
     * @return array (Promociondetalle object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PromociondetallePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PromociondetallePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PromociondetallePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PromociondetallePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PromociondetallePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related MarcaRelatedByIdmarcaoperando table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinMarcaRelatedByIdmarcaoperando(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PromociondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PromociondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PromociondetallePeer::IDMARCAOPERANDO, MarcaPeer::IDMARCA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related MarcaRelatedByIdmarcaresultado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinMarcaRelatedByIdmarcaresultado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PromociondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PromociondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PromociondetallePeer::IDMARCARESULTADO, MarcaPeer::IDMARCA, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ProductoRelatedByIdproductooperando table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinProductoRelatedByIdproductooperando(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PromociondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PromociondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTOOPERANDO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ProductoRelatedByIdproductoresultado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinProductoRelatedByIdproductoresultado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PromociondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PromociondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTORESULTADO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Promocion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinPromocion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PromociondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PromociondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PromociondetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

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
     * Selects a collection of Promociondetalle objects pre-filled with their Marca objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Promociondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinMarcaRelatedByIdmarcaoperando(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);
        }

        PromociondetallePeer::addSelectColumns($criteria);
        $startcol = PromociondetallePeer::NUM_HYDRATE_COLUMNS;
        MarcaPeer::addSelectColumns($criteria);

        $criteria->addJoin(PromociondetallePeer::IDMARCAOPERANDO, MarcaPeer::IDMARCA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PromociondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PromociondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PromociondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PromociondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Promociondetalle) to $obj2 (Marca)
                $obj2->addPromociondetalleRelatedByIdmarcaoperando($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Promociondetalle objects pre-filled with their Marca objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Promociondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinMarcaRelatedByIdmarcaresultado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);
        }

        PromociondetallePeer::addSelectColumns($criteria);
        $startcol = PromociondetallePeer::NUM_HYDRATE_COLUMNS;
        MarcaPeer::addSelectColumns($criteria);

        $criteria->addJoin(PromociondetallePeer::IDMARCARESULTADO, MarcaPeer::IDMARCA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PromociondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PromociondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PromociondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PromociondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Promociondetalle) to $obj2 (Marca)
                $obj2->addPromociondetalleRelatedByIdmarcaresultado($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Promociondetalle objects pre-filled with their Producto objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Promociondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProductoRelatedByIdproductooperando(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);
        }

        PromociondetallePeer::addSelectColumns($criteria);
        $startcol = PromociondetallePeer::NUM_HYDRATE_COLUMNS;
        ProductoPeer::addSelectColumns($criteria);

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTOOPERANDO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PromociondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PromociondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PromociondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PromociondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Promociondetalle) to $obj2 (Producto)
                $obj2->addPromociondetalleRelatedByIdproductooperando($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Promociondetalle objects pre-filled with their Producto objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Promociondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProductoRelatedByIdproductoresultado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);
        }

        PromociondetallePeer::addSelectColumns($criteria);
        $startcol = PromociondetallePeer::NUM_HYDRATE_COLUMNS;
        ProductoPeer::addSelectColumns($criteria);

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTORESULTADO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PromociondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PromociondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PromociondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PromociondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Promociondetalle) to $obj2 (Producto)
                $obj2->addPromociondetalleRelatedByIdproductoresultado($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Promociondetalle objects pre-filled with their Promocion objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Promociondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPromocion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);
        }

        PromociondetallePeer::addSelectColumns($criteria);
        $startcol = PromociondetallePeer::NUM_HYDRATE_COLUMNS;
        PromocionPeer::addSelectColumns($criteria);

        $criteria->addJoin(PromociondetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PromociondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PromociondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PromociondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PromociondetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = PromocionPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = PromocionPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = PromocionPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    PromocionPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Promociondetalle) to $obj2 (Promocion)
                $obj2->addPromociondetalle($obj1);

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
        $criteria->setPrimaryTableName(PromociondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PromociondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PromociondetallePeer::IDMARCAOPERANDO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDMARCARESULTADO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTOOPERANDO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTORESULTADO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

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
     * Selects a collection of Promociondetalle objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Promociondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);
        }

        PromociondetallePeer::addSelectColumns($criteria);
        $startcol2 = PromociondetallePeer::NUM_HYDRATE_COLUMNS;

        MarcaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MarcaPeer::NUM_HYDRATE_COLUMNS;

        MarcaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + MarcaPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        PromocionPeer::addSelectColumns($criteria);
        $startcol7 = $startcol6 + PromocionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PromociondetallePeer::IDMARCAOPERANDO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDMARCARESULTADO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTOOPERANDO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTORESULTADO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PromociondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PromociondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PromociondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PromociondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Promociondetalle) to the collection in $obj2 (Marca)
                $obj2->addPromociondetalleRelatedByIdmarcaoperando($obj1);
            } // if joined row not null

            // Add objects for joined Marca rows

            $key3 = MarcaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = MarcaPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = MarcaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    MarcaPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Promociondetalle) to the collection in $obj3 (Marca)
                $obj3->addPromociondetalleRelatedByIdmarcaresultado($obj1);
            } // if joined row not null

            // Add objects for joined Producto rows

            $key4 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = ProductoPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = ProductoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProductoPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Promociondetalle) to the collection in $obj4 (Producto)
                $obj4->addPromociondetalleRelatedByIdproductooperando($obj1);
            } // if joined row not null

            // Add objects for joined Producto rows

            $key5 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = ProductoPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = ProductoPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ProductoPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Promociondetalle) to the collection in $obj5 (Producto)
                $obj5->addPromociondetalleRelatedByIdproductoresultado($obj1);
            } // if joined row not null

            // Add objects for joined Promocion rows

            $key6 = PromocionPeer::getPrimaryKeyHashFromRow($row, $startcol6);
            if ($key6 !== null) {
                $obj6 = PromocionPeer::getInstanceFromPool($key6);
                if (!$obj6) {

                    $cls = PromocionPeer::getOMClass();

                    $obj6 = new $cls();
                    $obj6->hydrate($row, $startcol6);
                    PromocionPeer::addInstanceToPool($obj6, $key6);
                } // if obj6 loaded

                // Add the $obj1 (Promociondetalle) to the collection in $obj6 (Promocion)
                $obj6->addPromociondetalle($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related MarcaRelatedByIdmarcaoperando table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptMarcaRelatedByIdmarcaoperando(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PromociondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PromociondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTOOPERANDO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTORESULTADO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related MarcaRelatedByIdmarcaresultado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptMarcaRelatedByIdmarcaresultado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PromociondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PromociondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTOOPERANDO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTORESULTADO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ProductoRelatedByIdproductooperando table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptProductoRelatedByIdproductooperando(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PromociondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PromociondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PromociondetallePeer::IDMARCAOPERANDO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDMARCARESULTADO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related ProductoRelatedByIdproductoresultado table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptProductoRelatedByIdproductoresultado(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PromociondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PromociondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PromociondetallePeer::IDMARCAOPERANDO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDMARCARESULTADO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related Promocion table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptPromocion(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PromociondetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PromociondetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PromociondetallePeer::IDMARCAOPERANDO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDMARCARESULTADO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTOOPERANDO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTORESULTADO, ProductoPeer::IDPRODUCTO, $join_behavior);

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
     * Selects a collection of Promociondetalle objects pre-filled with all related objects except MarcaRelatedByIdmarcaoperando.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Promociondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptMarcaRelatedByIdmarcaoperando(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);
        }

        PromociondetallePeer::addSelectColumns($criteria);
        $startcol2 = PromociondetallePeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        PromocionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PromocionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTOOPERANDO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTORESULTADO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PromociondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PromociondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PromociondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PromociondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Promociondetalle) to the collection in $obj2 (Producto)
                $obj2->addPromociondetalleRelatedByIdproductooperando($obj1);

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

                // Add the $obj1 (Promociondetalle) to the collection in $obj3 (Producto)
                $obj3->addPromociondetalleRelatedByIdproductoresultado($obj1);

            } // if joined row is not null

                // Add objects for joined Promocion rows

                $key4 = PromocionPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = PromocionPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = PromocionPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    PromocionPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Promociondetalle) to the collection in $obj4 (Promocion)
                $obj4->addPromociondetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Promociondetalle objects pre-filled with all related objects except MarcaRelatedByIdmarcaresultado.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Promociondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptMarcaRelatedByIdmarcaresultado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);
        }

        PromociondetallePeer::addSelectColumns($criteria);
        $startcol2 = PromociondetallePeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        PromocionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PromocionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTOOPERANDO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTORESULTADO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PromociondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PromociondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PromociondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PromociondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Promociondetalle) to the collection in $obj2 (Producto)
                $obj2->addPromociondetalleRelatedByIdproductooperando($obj1);

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

                // Add the $obj1 (Promociondetalle) to the collection in $obj3 (Producto)
                $obj3->addPromociondetalleRelatedByIdproductoresultado($obj1);

            } // if joined row is not null

                // Add objects for joined Promocion rows

                $key4 = PromocionPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = PromocionPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = PromocionPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    PromocionPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Promociondetalle) to the collection in $obj4 (Promocion)
                $obj4->addPromociondetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Promociondetalle objects pre-filled with all related objects except ProductoRelatedByIdproductooperando.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Promociondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptProductoRelatedByIdproductooperando(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);
        }

        PromociondetallePeer::addSelectColumns($criteria);
        $startcol2 = PromociondetallePeer::NUM_HYDRATE_COLUMNS;

        MarcaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MarcaPeer::NUM_HYDRATE_COLUMNS;

        MarcaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + MarcaPeer::NUM_HYDRATE_COLUMNS;

        PromocionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PromocionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PromociondetallePeer::IDMARCAOPERANDO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDMARCARESULTADO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PromociondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PromociondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PromociondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PromociondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Promociondetalle) to the collection in $obj2 (Marca)
                $obj2->addPromociondetalleRelatedByIdmarcaoperando($obj1);

            } // if joined row is not null

                // Add objects for joined Marca rows

                $key3 = MarcaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = MarcaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = MarcaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    MarcaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Promociondetalle) to the collection in $obj3 (Marca)
                $obj3->addPromociondetalleRelatedByIdmarcaresultado($obj1);

            } // if joined row is not null

                // Add objects for joined Promocion rows

                $key4 = PromocionPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = PromocionPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = PromocionPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    PromocionPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Promociondetalle) to the collection in $obj4 (Promocion)
                $obj4->addPromociondetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Promociondetalle objects pre-filled with all related objects except ProductoRelatedByIdproductoresultado.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Promociondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptProductoRelatedByIdproductoresultado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);
        }

        PromociondetallePeer::addSelectColumns($criteria);
        $startcol2 = PromociondetallePeer::NUM_HYDRATE_COLUMNS;

        MarcaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MarcaPeer::NUM_HYDRATE_COLUMNS;

        MarcaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + MarcaPeer::NUM_HYDRATE_COLUMNS;

        PromocionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PromocionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PromociondetallePeer::IDMARCAOPERANDO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDMARCARESULTADO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PromociondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PromociondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PromociondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PromociondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Promociondetalle) to the collection in $obj2 (Marca)
                $obj2->addPromociondetalleRelatedByIdmarcaoperando($obj1);

            } // if joined row is not null

                // Add objects for joined Marca rows

                $key3 = MarcaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = MarcaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = MarcaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    MarcaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Promociondetalle) to the collection in $obj3 (Marca)
                $obj3->addPromociondetalleRelatedByIdmarcaresultado($obj1);

            } // if joined row is not null

                // Add objects for joined Promocion rows

                $key4 = PromocionPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = PromocionPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = PromocionPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    PromocionPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Promociondetalle) to the collection in $obj4 (Promocion)
                $obj4->addPromociondetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Promociondetalle objects pre-filled with all related objects except Promocion.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Promociondetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptPromocion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);
        }

        PromociondetallePeer::addSelectColumns($criteria);
        $startcol2 = PromociondetallePeer::NUM_HYDRATE_COLUMNS;

        MarcaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + MarcaPeer::NUM_HYDRATE_COLUMNS;

        MarcaPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + MarcaPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        ProductoPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + ProductoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PromociondetallePeer::IDMARCAOPERANDO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDMARCARESULTADO, MarcaPeer::IDMARCA, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTOOPERANDO, ProductoPeer::IDPRODUCTO, $join_behavior);

        $criteria->addJoin(PromociondetallePeer::IDPRODUCTORESULTADO, ProductoPeer::IDPRODUCTO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PromociondetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PromociondetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PromociondetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PromociondetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Promociondetalle) to the collection in $obj2 (Marca)
                $obj2->addPromociondetalleRelatedByIdmarcaoperando($obj1);

            } // if joined row is not null

                // Add objects for joined Marca rows

                $key3 = MarcaPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = MarcaPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = MarcaPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    MarcaPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Promociondetalle) to the collection in $obj3 (Marca)
                $obj3->addPromociondetalleRelatedByIdmarcaresultado($obj1);

            } // if joined row is not null

                // Add objects for joined Producto rows

                $key4 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = ProductoPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = ProductoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    ProductoPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Promociondetalle) to the collection in $obj4 (Producto)
                $obj4->addPromociondetalleRelatedByIdproductooperando($obj1);

            } // if joined row is not null

                // Add objects for joined Producto rows

                $key5 = ProductoPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = ProductoPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = ProductoPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    ProductoPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Promociondetalle) to the collection in $obj5 (Producto)
                $obj5->addPromociondetalleRelatedByIdproductoresultado($obj1);

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
        return Propel::getDatabaseMap(PromociondetallePeer::DATABASE_NAME)->getTable(PromociondetallePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePromociondetallePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePromociondetallePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PromociondetalleTableMap());
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
        return PromociondetallePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Promociondetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Promociondetalle object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Promociondetalle object
        }

        if ($criteria->containsKey(PromociondetallePeer::IDPROMOCIONDETALLE) && $criteria->keyContainsValue(PromociondetallePeer::IDPROMOCIONDETALLE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PromociondetallePeer::IDPROMOCIONDETALLE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Promociondetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Promociondetalle object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PromociondetallePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PromociondetallePeer::IDPROMOCIONDETALLE);
            $value = $criteria->remove(PromociondetallePeer::IDPROMOCIONDETALLE);
            if ($value) {
                $selectCriteria->add(PromociondetallePeer::IDPROMOCIONDETALLE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PromociondetallePeer::TABLE_NAME);
            }

        } else { // $values is Promociondetalle object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the promociondetalle table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(PromociondetallePeer::TABLE_NAME, $con, PromociondetallePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PromociondetallePeer::clearInstancePool();
            PromociondetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Promociondetalle or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Promociondetalle object or primary key or array of primary keys
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
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            PromociondetallePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Promociondetalle) { // it's a model object
            // invalidate the cache for this single object
            PromociondetallePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PromociondetallePeer::DATABASE_NAME);
            $criteria->add(PromociondetallePeer::IDPROMOCIONDETALLE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                PromociondetallePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(PromociondetallePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PromociondetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Promociondetalle object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Promociondetalle $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PromociondetallePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PromociondetallePeer::TABLE_NAME);

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

        return BasePeer::doValidate(PromociondetallePeer::DATABASE_NAME, PromociondetallePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Promociondetalle
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PromociondetallePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PromociondetallePeer::DATABASE_NAME);
        $criteria->add(PromociondetallePeer::IDPROMOCIONDETALLE, $pk);

        $v = PromociondetallePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Promociondetalle[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PromociondetallePeer::DATABASE_NAME);
            $criteria->add(PromociondetallePeer::IDPROMOCIONDETALLE, $pks, Criteria::IN);
            $objs = PromociondetallePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePromociondetallePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePromociondetallePeer::buildTableMap();

