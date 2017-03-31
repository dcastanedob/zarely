<?php


/**
 * Base static class for performing query and update operations on the 'pedidomayorista' table.
 *
 *
 *
 * @package propel.generator.zarely.om
 */
abstract class BasePedidomayoristaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'zarely';

    /** the table name for this class */
    const TABLE_NAME = 'pedidomayorista';

    /** the related Propel class for this table */
    const OM_CLASS = 'Pedidomayorista';

    /** the related TableMap class for this table */
    const TM_CLASS = 'PedidomayoristaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 6;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 6;

    /** the column name for the idpedidomayorista field */
    const IDPEDIDOMAYORISTA = 'pedidomayorista.idpedidomayorista';

    /** the column name for the idcliente field */
    const IDCLIENTE = 'pedidomayorista.idcliente';

    /** the column name for the pedidomayorista_fechasolicitud field */
    const PEDIDOMAYORISTA_FECHASOLICITUD = 'pedidomayorista.pedidomayorista_fechasolicitud';

    /** the column name for the pedidomayorista_estatus field */
    const PEDIDOMAYORISTA_ESTATUS = 'pedidomayorista.pedidomayorista_estatus';

    /** the column name for the pedidomayorista_fechaentrega field */
    const PEDIDOMAYORISTA_FECHAENTREGA = 'pedidomayorista.pedidomayorista_fechaentrega';

    /** the column name for the pedidomayorista_nota field */
    const PEDIDOMAYORISTA_NOTA = 'pedidomayorista.pedidomayorista_nota';

    /** The enumerated values for the pedidomayorista_estatus field */
    const PEDIDOMAYORISTA_ESTATUS_PENDIENTE = 'pendiente';
    const PEDIDOMAYORISTA_ESTATUS_SOLICITADO = 'solicitado';
    const PEDIDOMAYORISTA_ESTATUS_TRANSITO = 'transito';
    const PEDIDOMAYORISTA_ESTATUS_COMPLETADO = 'completado';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Pedidomayorista objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Pedidomayorista[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. PedidomayoristaPeer::$fieldNames[PedidomayoristaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idpedidomayorista', 'Idcliente', 'PedidomayoristaFechasolicitud', 'PedidomayoristaEstatus', 'PedidomayoristaFechaentrega', 'PedidomayoristaNota', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idpedidomayorista', 'idcliente', 'pedidomayoristaFechasolicitud', 'pedidomayoristaEstatus', 'pedidomayoristaFechaentrega', 'pedidomayoristaNota', ),
        BasePeer::TYPE_COLNAME => array (PedidomayoristaPeer::IDPEDIDOMAYORISTA, PedidomayoristaPeer::IDCLIENTE, PedidomayoristaPeer::PEDIDOMAYORISTA_FECHASOLICITUD, PedidomayoristaPeer::PEDIDOMAYORISTA_ESTATUS, PedidomayoristaPeer::PEDIDOMAYORISTA_FECHAENTREGA, PedidomayoristaPeer::PEDIDOMAYORISTA_NOTA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPEDIDOMAYORISTA', 'IDCLIENTE', 'PEDIDOMAYORISTA_FECHASOLICITUD', 'PEDIDOMAYORISTA_ESTATUS', 'PEDIDOMAYORISTA_FECHAENTREGA', 'PEDIDOMAYORISTA_NOTA', ),
        BasePeer::TYPE_FIELDNAME => array ('idpedidomayorista', 'idcliente', 'pedidomayorista_fechasolicitud', 'pedidomayorista_estatus', 'pedidomayorista_fechaentrega', 'pedidomayorista_nota', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. PedidomayoristaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idpedidomayorista' => 0, 'Idcliente' => 1, 'PedidomayoristaFechasolicitud' => 2, 'PedidomayoristaEstatus' => 3, 'PedidomayoristaFechaentrega' => 4, 'PedidomayoristaNota' => 5, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idpedidomayorista' => 0, 'idcliente' => 1, 'pedidomayoristaFechasolicitud' => 2, 'pedidomayoristaEstatus' => 3, 'pedidomayoristaFechaentrega' => 4, 'pedidomayoristaNota' => 5, ),
        BasePeer::TYPE_COLNAME => array (PedidomayoristaPeer::IDPEDIDOMAYORISTA => 0, PedidomayoristaPeer::IDCLIENTE => 1, PedidomayoristaPeer::PEDIDOMAYORISTA_FECHASOLICITUD => 2, PedidomayoristaPeer::PEDIDOMAYORISTA_ESTATUS => 3, PedidomayoristaPeer::PEDIDOMAYORISTA_FECHAENTREGA => 4, PedidomayoristaPeer::PEDIDOMAYORISTA_NOTA => 5, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDPEDIDOMAYORISTA' => 0, 'IDCLIENTE' => 1, 'PEDIDOMAYORISTA_FECHASOLICITUD' => 2, 'PEDIDOMAYORISTA_ESTATUS' => 3, 'PEDIDOMAYORISTA_FECHAENTREGA' => 4, 'PEDIDOMAYORISTA_NOTA' => 5, ),
        BasePeer::TYPE_FIELDNAME => array ('idpedidomayorista' => 0, 'idcliente' => 1, 'pedidomayorista_fechasolicitud' => 2, 'pedidomayorista_estatus' => 3, 'pedidomayorista_fechaentrega' => 4, 'pedidomayorista_nota' => 5, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        PedidomayoristaPeer::PEDIDOMAYORISTA_ESTATUS => array(
            PedidomayoristaPeer::PEDIDOMAYORISTA_ESTATUS_PENDIENTE,
            PedidomayoristaPeer::PEDIDOMAYORISTA_ESTATUS_SOLICITADO,
            PedidomayoristaPeer::PEDIDOMAYORISTA_ESTATUS_TRANSITO,
            PedidomayoristaPeer::PEDIDOMAYORISTA_ESTATUS_COMPLETADO,
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
        $toNames = PedidomayoristaPeer::getFieldNames($toType);
        $key = isset(PedidomayoristaPeer::$fieldKeys[$fromType][$name]) ? PedidomayoristaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(PedidomayoristaPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, PedidomayoristaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return PedidomayoristaPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return PedidomayoristaPeer::$enumValueSets;
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
        $valueSets = PedidomayoristaPeer::getValueSets();

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
        $values = PedidomayoristaPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. PedidomayoristaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(PedidomayoristaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(PedidomayoristaPeer::IDPEDIDOMAYORISTA);
            $criteria->addSelectColumn(PedidomayoristaPeer::IDCLIENTE);
            $criteria->addSelectColumn(PedidomayoristaPeer::PEDIDOMAYORISTA_FECHASOLICITUD);
            $criteria->addSelectColumn(PedidomayoristaPeer::PEDIDOMAYORISTA_ESTATUS);
            $criteria->addSelectColumn(PedidomayoristaPeer::PEDIDOMAYORISTA_FECHAENTREGA);
            $criteria->addSelectColumn(PedidomayoristaPeer::PEDIDOMAYORISTA_NOTA);
        } else {
            $criteria->addSelectColumn($alias . '.idpedidomayorista');
            $criteria->addSelectColumn($alias . '.idcliente');
            $criteria->addSelectColumn($alias . '.pedidomayorista_fechasolicitud');
            $criteria->addSelectColumn($alias . '.pedidomayorista_estatus');
            $criteria->addSelectColumn($alias . '.pedidomayorista_fechaentrega');
            $criteria->addSelectColumn($alias . '.pedidomayorista_nota');
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
        $criteria->setPrimaryTableName(PedidomayoristaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PedidomayoristaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(PedidomayoristaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(PedidomayoristaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Pedidomayorista
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = PedidomayoristaPeer::doSelect($critcopy, $con);
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
        return PedidomayoristaPeer::populateObjects(PedidomayoristaPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(PedidomayoristaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            PedidomayoristaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(PedidomayoristaPeer::DATABASE_NAME);

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
     * @param Pedidomayorista $obj A Pedidomayorista object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdpedidomayorista();
            } // if key === null
            PedidomayoristaPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Pedidomayorista object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Pedidomayorista) {
                $key = (string) $value->getIdpedidomayorista();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Pedidomayorista object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(PedidomayoristaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Pedidomayorista Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(PedidomayoristaPeer::$instances[$key])) {
                return PedidomayoristaPeer::$instances[$key];
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
        foreach (PedidomayoristaPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        PedidomayoristaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to pedidomayorista
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in PedidomayoristadetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        PedidomayoristadetallePeer::clearInstancePool();
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
        $cls = PedidomayoristaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = PedidomayoristaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = PedidomayoristaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                PedidomayoristaPeer::addInstanceToPool($obj, $key);
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
     * @return array (Pedidomayorista object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = PedidomayoristaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = PedidomayoristaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + PedidomayoristaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = PedidomayoristaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            PedidomayoristaPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Cliente table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCliente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(PedidomayoristaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PedidomayoristaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PedidomayoristaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PedidomayoristaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PedidomayoristaPeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

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
     * Selects a collection of Pedidomayorista objects pre-filled with their Cliente objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pedidomayorista objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCliente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PedidomayoristaPeer::DATABASE_NAME);
        }

        PedidomayoristaPeer::addSelectColumns($criteria);
        $startcol = PedidomayoristaPeer::NUM_HYDRATE_COLUMNS;
        ClientePeer::addSelectColumns($criteria);

        $criteria->addJoin(PedidomayoristaPeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PedidomayoristaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PedidomayoristaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = PedidomayoristaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PedidomayoristaPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = ClientePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = ClientePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    ClientePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Pedidomayorista) to $obj2 (Cliente)
                $obj2->addPedidomayorista($obj1);

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
        $criteria->setPrimaryTableName(PedidomayoristaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            PedidomayoristaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(PedidomayoristaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(PedidomayoristaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(PedidomayoristaPeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

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
     * Selects a collection of Pedidomayorista objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Pedidomayorista objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(PedidomayoristaPeer::DATABASE_NAME);
        }

        PedidomayoristaPeer::addSelectColumns($criteria);
        $startcol2 = PedidomayoristaPeer::NUM_HYDRATE_COLUMNS;

        ClientePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(PedidomayoristaPeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = PedidomayoristaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = PedidomayoristaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = PedidomayoristaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                PedidomayoristaPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Cliente rows

            $key2 = ClientePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = ClientePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = ClientePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ClientePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Pedidomayorista) to the collection in $obj2 (Cliente)
                $obj2->addPedidomayorista($obj1);
            } // if joined row not null

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
        return Propel::getDatabaseMap(PedidomayoristaPeer::DATABASE_NAME)->getTable(PedidomayoristaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BasePedidomayoristaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BasePedidomayoristaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \PedidomayoristaTableMap());
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
        return PedidomayoristaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Pedidomayorista or Criteria object.
     *
     * @param      mixed $values Criteria or Pedidomayorista object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PedidomayoristaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Pedidomayorista object
        }

        if ($criteria->containsKey(PedidomayoristaPeer::IDPEDIDOMAYORISTA) && $criteria->keyContainsValue(PedidomayoristaPeer::IDPEDIDOMAYORISTA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.PedidomayoristaPeer::IDPEDIDOMAYORISTA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(PedidomayoristaPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Pedidomayorista or Criteria object.
     *
     * @param      mixed $values Criteria or Pedidomayorista object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PedidomayoristaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(PedidomayoristaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(PedidomayoristaPeer::IDPEDIDOMAYORISTA);
            $value = $criteria->remove(PedidomayoristaPeer::IDPEDIDOMAYORISTA);
            if ($value) {
                $selectCriteria->add(PedidomayoristaPeer::IDPEDIDOMAYORISTA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(PedidomayoristaPeer::TABLE_NAME);
            }

        } else { // $values is Pedidomayorista object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(PedidomayoristaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the pedidomayorista table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PedidomayoristaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += PedidomayoristaPeer::doOnDeleteCascade(new Criteria(PedidomayoristaPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(PedidomayoristaPeer::TABLE_NAME, $con, PedidomayoristaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            PedidomayoristaPeer::clearInstancePool();
            PedidomayoristaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Pedidomayorista or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Pedidomayorista object or primary key or array of primary keys
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
            $con = Propel::getConnection(PedidomayoristaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Pedidomayorista) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(PedidomayoristaPeer::DATABASE_NAME);
            $criteria->add(PedidomayoristaPeer::IDPEDIDOMAYORISTA, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(PedidomayoristaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += PedidomayoristaPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                PedidomayoristaPeer::clearInstancePool();
            } elseif ($values instanceof Pedidomayorista) { // it's a model object
                PedidomayoristaPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    PedidomayoristaPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            PedidomayoristaPeer::clearRelatedInstancePool();
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
        $objects = PedidomayoristaPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Pedidomayoristadetalle objects
            $criteria = new Criteria(PedidomayoristadetallePeer::DATABASE_NAME);

            $criteria->add(PedidomayoristadetallePeer::IDPEDIDOMAYORISTA, $obj->getIdpedidomayorista());
            $affectedRows += PedidomayoristadetallePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Pedidomayorista object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Pedidomayorista $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(PedidomayoristaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(PedidomayoristaPeer::TABLE_NAME);

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

        return BasePeer::doValidate(PedidomayoristaPeer::DATABASE_NAME, PedidomayoristaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Pedidomayorista
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = PedidomayoristaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(PedidomayoristaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(PedidomayoristaPeer::DATABASE_NAME);
        $criteria->add(PedidomayoristaPeer::IDPEDIDOMAYORISTA, $pk);

        $v = PedidomayoristaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Pedidomayorista[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(PedidomayoristaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(PedidomayoristaPeer::DATABASE_NAME);
            $criteria->add(PedidomayoristaPeer::IDPEDIDOMAYORISTA, $pks, Criteria::IN);
            $objs = PedidomayoristaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BasePedidomayoristaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BasePedidomayoristaPeer::buildTableMap();

