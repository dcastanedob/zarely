<?php


/**
 * Base static class for performing query and update operations on the 'compra' table.
 *
 *
 *
 * @package propel.generator.zarely.om
 */
abstract class BaseCompraPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'zarely';

    /** the table name for this class */
    const TABLE_NAME = 'compra';

    /** the related Propel class for this table */
    const OM_CLASS = 'Compra';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CompraTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 10;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 10;

    /** the column name for the idcompra field */
    const IDCOMPRA = 'compra.idcompra';

    /** the column name for the idproveedor field */
    const IDPROVEEDOR = 'compra.idproveedor';

    /** the column name for the compra_fechacreacion field */
    const COMPRA_FECHACREACION = 'compra.compra_fechacreacion';

    /** the column name for the compra_fechacompra field */
    const COMPRA_FECHACOMPRA = 'compra.compra_fechacompra';

    /** the column name for the compra_total field */
    const COMPRA_TOTAL = 'compra.compra_total';

    /** the column name for the compra_estatuspago field */
    const COMPRA_ESTATUSPAGO = 'compra.compra_estatuspago';

    /** the column name for the compra_estatus field */
    const COMPRA_ESTATUS = 'compra.compra_estatus';

    /** the column name for the compra_nota field */
    const COMPRA_NOTA = 'compra.compra_nota';

    /** the column name for the compra_comprobante field */
    const COMPRA_COMPROBANTE = 'compra.compra_comprobante';

    /** the column name for the compra_fechaentrega field */
    const COMPRA_FECHAENTREGA = 'compra.compra_fechaentrega';

    /** The enumerated values for the compra_estatus field */
    const COMPRA_ESTATUS_PENDIENTE = 'pendiente';
    const COMPRA_ESTATUS_ENVIADA = 'enviada';
    const COMPRA_ESTATUS_PROCESANDO = 'procesando';
    const COMPRA_ESTATUS_EN_TRANSITO = 'en transito';
    const COMPRA_ESTATUS_RECIBIDO = 'recibido';
    const COMPRA_ESTATUS_REVISADO = 'revisado';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Compra objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Compra[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CompraPeer::$fieldNames[CompraPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idcompra', 'Idproveedor', 'CompraFechacreacion', 'CompraFechacompra', 'CompraTotal', 'CompraEstatuspago', 'CompraEstatus', 'CompraNota', 'CompraComprobante', 'CompraFechaentrega', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcompra', 'idproveedor', 'compraFechacreacion', 'compraFechacompra', 'compraTotal', 'compraEstatuspago', 'compraEstatus', 'compraNota', 'compraComprobante', 'compraFechaentrega', ),
        BasePeer::TYPE_COLNAME => array (CompraPeer::IDCOMPRA, CompraPeer::IDPROVEEDOR, CompraPeer::COMPRA_FECHACREACION, CompraPeer::COMPRA_FECHACOMPRA, CompraPeer::COMPRA_TOTAL, CompraPeer::COMPRA_ESTATUSPAGO, CompraPeer::COMPRA_ESTATUS, CompraPeer::COMPRA_NOTA, CompraPeer::COMPRA_COMPROBANTE, CompraPeer::COMPRA_FECHAENTREGA, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCOMPRA', 'IDPROVEEDOR', 'COMPRA_FECHACREACION', 'COMPRA_FECHACOMPRA', 'COMPRA_TOTAL', 'COMPRA_ESTATUSPAGO', 'COMPRA_ESTATUS', 'COMPRA_NOTA', 'COMPRA_COMPROBANTE', 'COMPRA_FECHAENTREGA', ),
        BasePeer::TYPE_FIELDNAME => array ('idcompra', 'idproveedor', 'compra_fechacreacion', 'compra_fechacompra', 'compra_total', 'compra_estatuspago', 'compra_estatus', 'compra_nota', 'compra_comprobante', 'compra_fechaentrega', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CompraPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idcompra' => 0, 'Idproveedor' => 1, 'CompraFechacreacion' => 2, 'CompraFechacompra' => 3, 'CompraTotal' => 4, 'CompraEstatuspago' => 5, 'CompraEstatus' => 6, 'CompraNota' => 7, 'CompraComprobante' => 8, 'CompraFechaentrega' => 9, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcompra' => 0, 'idproveedor' => 1, 'compraFechacreacion' => 2, 'compraFechacompra' => 3, 'compraTotal' => 4, 'compraEstatuspago' => 5, 'compraEstatus' => 6, 'compraNota' => 7, 'compraComprobante' => 8, 'compraFechaentrega' => 9, ),
        BasePeer::TYPE_COLNAME => array (CompraPeer::IDCOMPRA => 0, CompraPeer::IDPROVEEDOR => 1, CompraPeer::COMPRA_FECHACREACION => 2, CompraPeer::COMPRA_FECHACOMPRA => 3, CompraPeer::COMPRA_TOTAL => 4, CompraPeer::COMPRA_ESTATUSPAGO => 5, CompraPeer::COMPRA_ESTATUS => 6, CompraPeer::COMPRA_NOTA => 7, CompraPeer::COMPRA_COMPROBANTE => 8, CompraPeer::COMPRA_FECHAENTREGA => 9, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCOMPRA' => 0, 'IDPROVEEDOR' => 1, 'COMPRA_FECHACREACION' => 2, 'COMPRA_FECHACOMPRA' => 3, 'COMPRA_TOTAL' => 4, 'COMPRA_ESTATUSPAGO' => 5, 'COMPRA_ESTATUS' => 6, 'COMPRA_NOTA' => 7, 'COMPRA_COMPROBANTE' => 8, 'COMPRA_FECHAENTREGA' => 9, ),
        BasePeer::TYPE_FIELDNAME => array ('idcompra' => 0, 'idproveedor' => 1, 'compra_fechacreacion' => 2, 'compra_fechacompra' => 3, 'compra_total' => 4, 'compra_estatuspago' => 5, 'compra_estatus' => 6, 'compra_nota' => 7, 'compra_comprobante' => 8, 'compra_fechaentrega' => 9, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CompraPeer::COMPRA_ESTATUS => array(
            CompraPeer::COMPRA_ESTATUS_PENDIENTE,
            CompraPeer::COMPRA_ESTATUS_ENVIADA,
            CompraPeer::COMPRA_ESTATUS_PROCESANDO,
            CompraPeer::COMPRA_ESTATUS_EN_TRANSITO,
            CompraPeer::COMPRA_ESTATUS_RECIBIDO,
            CompraPeer::COMPRA_ESTATUS_REVISADO,
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
        $toNames = CompraPeer::getFieldNames($toType);
        $key = isset(CompraPeer::$fieldKeys[$fromType][$name]) ? CompraPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CompraPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CompraPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CompraPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CompraPeer::$enumValueSets;
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
        $valueSets = CompraPeer::getValueSets();

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
        $values = CompraPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CompraPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CompraPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CompraPeer::IDCOMPRA);
            $criteria->addSelectColumn(CompraPeer::IDPROVEEDOR);
            $criteria->addSelectColumn(CompraPeer::COMPRA_FECHACREACION);
            $criteria->addSelectColumn(CompraPeer::COMPRA_FECHACOMPRA);
            $criteria->addSelectColumn(CompraPeer::COMPRA_TOTAL);
            $criteria->addSelectColumn(CompraPeer::COMPRA_ESTATUSPAGO);
            $criteria->addSelectColumn(CompraPeer::COMPRA_ESTATUS);
            $criteria->addSelectColumn(CompraPeer::COMPRA_NOTA);
            $criteria->addSelectColumn(CompraPeer::COMPRA_COMPROBANTE);
            $criteria->addSelectColumn(CompraPeer::COMPRA_FECHAENTREGA);
        } else {
            $criteria->addSelectColumn($alias . '.idcompra');
            $criteria->addSelectColumn($alias . '.idproveedor');
            $criteria->addSelectColumn($alias . '.compra_fechacreacion');
            $criteria->addSelectColumn($alias . '.compra_fechacompra');
            $criteria->addSelectColumn($alias . '.compra_total');
            $criteria->addSelectColumn($alias . '.compra_estatuspago');
            $criteria->addSelectColumn($alias . '.compra_estatus');
            $criteria->addSelectColumn($alias . '.compra_nota');
            $criteria->addSelectColumn($alias . '.compra_comprobante');
            $criteria->addSelectColumn($alias . '.compra_fechaentrega');
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
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CompraPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Compra
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CompraPeer::doSelect($critcopy, $con);
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
        return CompraPeer::populateObjects(CompraPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CompraPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

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
     * @param Compra $obj A Compra object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdcompra();
            } // if key === null
            CompraPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Compra object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Compra) {
                $key = (string) $value->getIdcompra();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Compra object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CompraPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Compra Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CompraPeer::$instances[$key])) {
                return CompraPeer::$instances[$key];
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
        foreach (CompraPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CompraPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to compra
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CompradetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CompradetallePeer::clearInstancePool();
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
        $cls = CompraPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CompraPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CompraPeer::addInstanceToPool($obj, $key);
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
     * @return array (Compra object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CompraPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CompraPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CompraPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CompraPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CompraPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

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
     * Selects a collection of Compra objects pre-filled with their Proveedor objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Compra objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProveedor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompraPeer::DATABASE_NAME);
        }

        CompraPeer::addSelectColumns($criteria);
        $startcol = CompraPeer::NUM_HYDRATE_COLUMNS;
        ProveedorPeer::addSelectColumns($criteria);

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompraPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CompraPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompraPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Compra) to $obj2 (Proveedor)
                $obj2->addCompra($obj1);

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
        $criteria->setPrimaryTableName(CompraPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CompraPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

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
     * Selects a collection of Compra objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Compra objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CompraPeer::DATABASE_NAME);
        }

        CompraPeer::addSelectColumns($criteria);
        $startcol2 = CompraPeer::NUM_HYDRATE_COLUMNS;

        ProveedorPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProveedorPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CompraPeer::IDPROVEEDOR, ProveedorPeer::IDPROVEEDOR, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CompraPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CompraPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CompraPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CompraPeer::addInstanceToPool($obj1, $key1);
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
                } // if obj2 loaded

                // Add the $obj1 (Compra) to the collection in $obj2 (Proveedor)
                $obj2->addCompra($obj1);
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
        return Propel::getDatabaseMap(CompraPeer::DATABASE_NAME)->getTable(CompraPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCompraPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCompraPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CompraTableMap());
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
        return CompraPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Compra or Criteria object.
     *
     * @param      mixed $values Criteria or Compra object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Compra object
        }

        if ($criteria->containsKey(CompraPeer::IDCOMPRA) && $criteria->keyContainsValue(CompraPeer::IDCOMPRA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CompraPeer::IDCOMPRA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Compra or Criteria object.
     *
     * @param      mixed $values Criteria or Compra object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CompraPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CompraPeer::IDCOMPRA);
            $value = $criteria->remove(CompraPeer::IDCOMPRA);
            if ($value) {
                $selectCriteria->add(CompraPeer::IDCOMPRA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CompraPeer::TABLE_NAME);
            }

        } else { // $values is Compra object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the compra table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += CompraPeer::doOnDeleteCascade(new Criteria(CompraPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(CompraPeer::TABLE_NAME, $con, CompraPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CompraPeer::clearInstancePool();
            CompraPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Compra or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Compra object or primary key or array of primary keys
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
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Compra) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CompraPeer::DATABASE_NAME);
            $criteria->add(CompraPeer::IDCOMPRA, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(CompraPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += CompraPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                CompraPeer::clearInstancePool();
            } elseif ($values instanceof Compra) { // it's a model object
                CompraPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    CompraPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CompraPeer::clearRelatedInstancePool();
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
        $objects = CompraPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Compradetalle objects
            $criteria = new Criteria(CompradetallePeer::DATABASE_NAME);

            $criteria->add(CompradetallePeer::IDCOMPRA, $obj->getIdcompra());
            $affectedRows += CompradetallePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Compra object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Compra $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CompraPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CompraPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CompraPeer::DATABASE_NAME, CompraPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Compra
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CompraPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CompraPeer::DATABASE_NAME);
        $criteria->add(CompraPeer::IDCOMPRA, $pk);

        $v = CompraPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Compra[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CompraPeer::DATABASE_NAME);
            $criteria->add(CompraPeer::IDCOMPRA, $pks, Criteria::IN);
            $objs = CompraPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCompraPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCompraPeer::buildTableMap();

