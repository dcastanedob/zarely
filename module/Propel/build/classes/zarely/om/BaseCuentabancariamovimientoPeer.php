<?php


/**
 * Base static class for performing query and update operations on the 'cuentabancariamovimiento' table.
 *
 *
 *
 * @package propel.generator.zarely.om
 */
abstract class BaseCuentabancariamovimientoPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'zarely';

    /** the table name for this class */
    const TABLE_NAME = 'cuentabancariamovimiento';

    /** the related Propel class for this table */
    const OM_CLASS = 'Cuentabancariamovimiento';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CuentabancariamovimientoTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the idcuentabancariamovimiento field */
    const IDCUENTABANCARIAMOVIMIENTO = 'cuentabancariamovimiento.idcuentabancariamovimiento';

    /** the column name for the idcuentabancaria field */
    const IDCUENTABANCARIA = 'cuentabancariamovimiento.idcuentabancaria';

    /** the column name for the idempleado field */
    const IDEMPLEADO = 'cuentabancariamovimiento.idempleado';

    /** the column name for the cuentabancariamovimiento_proceso field */
    const CUENTABANCARIAMOVIMIENTO_PROCESO = 'cuentabancariamovimiento.cuentabancariamovimiento_proceso';

    /** the column name for the idproceso field */
    const IDPROCESO = 'cuentabancariamovimiento.idproceso';

    /** the column name for the cuentabancariamovimiento_cantidad field */
    const CUENTABANCARIAMOVIMIENTO_CANTIDAD = 'cuentabancariamovimiento.cuentabancariamovimiento_cantidad';

    /** the column name for the cuentabancariamovimiento_comprobante field */
    const CUENTABANCARIAMOVIMIENTO_COMPROBANTE = 'cuentabancariamovimiento.cuentabancariamovimiento_comprobante';

    /** the column name for the cuentabancariamovimiento_fechamovimiento field */
    const CUENTABANCARIAMOVIMIENTO_FECHAMOVIMIENTO = 'cuentabancariamovimiento.cuentabancariamovimiento_fechamovimiento';

    /** the column name for the cuentabancariamovimiento_fechacreacion field */
    const CUENTABANCARIAMOVIMIENTO_FECHACREACION = 'cuentabancariamovimiento.cuentabancariamovimiento_fechacreacion';

    /** the column name for the cuentabancariamovimiento_balance field */
    const CUENTABANCARIAMOVIMIENTO_BALANCE = 'cuentabancariamovimiento.cuentabancariamovimiento_balance';

    /** the column name for the cuentabancariamovimiento_referencia field */
    const CUENTABANCARIAMOVIMIENTO_REFERENCIA = 'cuentabancariamovimiento.cuentabancariamovimiento_referencia';

    /** the column name for the cuentabancariamovimiento_medio field */
    const CUENTABANCARIAMOVIMIENTO_MEDIO = 'cuentabancariamovimiento.cuentabancariamovimiento_medio';

    /** The enumerated values for the cuentabancariamovimiento_proceso field */
    const CUENTABANCARIAMOVIMIENTO_PROCESO_COMPRA = 'compra';
    const CUENTABANCARIAMOVIMIENTO_PROCESO_VENTA = 'venta';

    /** The enumerated values for the cuentabancariamovimiento_medio field */
    const CUENTABANCARIAMOVIMIENTO_MEDIO_CHEQUE = 'cheque';
    const CUENTABANCARIAMOVIMIENTO_MEDIO_EFECTIVO = 'efectivo';
    const CUENTABANCARIAMOVIMIENTO_MEDIO_TRANSFERENCIA = 'transferencia';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Cuentabancariamovimiento objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Cuentabancariamovimiento[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CuentabancariamovimientoPeer::$fieldNames[CuentabancariamovimientoPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idcuentabancariamovimiento', 'Idcuentabancaria', 'Idempleado', 'CuentabancariamovimientoProceso', 'Idproceso', 'CuentabancariamovimientoCantidad', 'CuentabancariamovimientoComprobante', 'CuentabancariamovimientoFechamovimiento', 'CuentabancariamovimientoFechacreacion', 'CuentabancariamovimientoBalance', 'CuentabancariamovimientoReferencia', 'CuentabancariamovimientoMedio', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcuentabancariamovimiento', 'idcuentabancaria', 'idempleado', 'cuentabancariamovimientoProceso', 'idproceso', 'cuentabancariamovimientoCantidad', 'cuentabancariamovimientoComprobante', 'cuentabancariamovimientoFechamovimiento', 'cuentabancariamovimientoFechacreacion', 'cuentabancariamovimientoBalance', 'cuentabancariamovimientoReferencia', 'cuentabancariamovimientoMedio', ),
        BasePeer::TYPE_COLNAME => array (CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO, CuentabancariamovimientoPeer::IDCUENTABANCARIA, CuentabancariamovimientoPeer::IDEMPLEADO, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_PROCESO, CuentabancariamovimientoPeer::IDPROCESO, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_CANTIDAD, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_COMPROBANTE, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHAMOVIMIENTO, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHACREACION, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_BALANCE, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_REFERENCIA, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_MEDIO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCUENTABANCARIAMOVIMIENTO', 'IDCUENTABANCARIA', 'IDEMPLEADO', 'CUENTABANCARIAMOVIMIENTO_PROCESO', 'IDPROCESO', 'CUENTABANCARIAMOVIMIENTO_CANTIDAD', 'CUENTABANCARIAMOVIMIENTO_COMPROBANTE', 'CUENTABANCARIAMOVIMIENTO_FECHAMOVIMIENTO', 'CUENTABANCARIAMOVIMIENTO_FECHACREACION', 'CUENTABANCARIAMOVIMIENTO_BALANCE', 'CUENTABANCARIAMOVIMIENTO_REFERENCIA', 'CUENTABANCARIAMOVIMIENTO_MEDIO', ),
        BasePeer::TYPE_FIELDNAME => array ('idcuentabancariamovimiento', 'idcuentabancaria', 'idempleado', 'cuentabancariamovimiento_proceso', 'idproceso', 'cuentabancariamovimiento_cantidad', 'cuentabancariamovimiento_comprobante', 'cuentabancariamovimiento_fechamovimiento', 'cuentabancariamovimiento_fechacreacion', 'cuentabancariamovimiento_balance', 'cuentabancariamovimiento_referencia', 'cuentabancariamovimiento_medio', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CuentabancariamovimientoPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idcuentabancariamovimiento' => 0, 'Idcuentabancaria' => 1, 'Idempleado' => 2, 'CuentabancariamovimientoProceso' => 3, 'Idproceso' => 4, 'CuentabancariamovimientoCantidad' => 5, 'CuentabancariamovimientoComprobante' => 6, 'CuentabancariamovimientoFechamovimiento' => 7, 'CuentabancariamovimientoFechacreacion' => 8, 'CuentabancariamovimientoBalance' => 9, 'CuentabancariamovimientoReferencia' => 10, 'CuentabancariamovimientoMedio' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idcuentabancariamovimiento' => 0, 'idcuentabancaria' => 1, 'idempleado' => 2, 'cuentabancariamovimientoProceso' => 3, 'idproceso' => 4, 'cuentabancariamovimientoCantidad' => 5, 'cuentabancariamovimientoComprobante' => 6, 'cuentabancariamovimientoFechamovimiento' => 7, 'cuentabancariamovimientoFechacreacion' => 8, 'cuentabancariamovimientoBalance' => 9, 'cuentabancariamovimientoReferencia' => 10, 'cuentabancariamovimientoMedio' => 11, ),
        BasePeer::TYPE_COLNAME => array (CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO => 0, CuentabancariamovimientoPeer::IDCUENTABANCARIA => 1, CuentabancariamovimientoPeer::IDEMPLEADO => 2, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_PROCESO => 3, CuentabancariamovimientoPeer::IDPROCESO => 4, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_CANTIDAD => 5, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_COMPROBANTE => 6, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHAMOVIMIENTO => 7, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHACREACION => 8, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_BALANCE => 9, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_REFERENCIA => 10, CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_MEDIO => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDCUENTABANCARIAMOVIMIENTO' => 0, 'IDCUENTABANCARIA' => 1, 'IDEMPLEADO' => 2, 'CUENTABANCARIAMOVIMIENTO_PROCESO' => 3, 'IDPROCESO' => 4, 'CUENTABANCARIAMOVIMIENTO_CANTIDAD' => 5, 'CUENTABANCARIAMOVIMIENTO_COMPROBANTE' => 6, 'CUENTABANCARIAMOVIMIENTO_FECHAMOVIMIENTO' => 7, 'CUENTABANCARIAMOVIMIENTO_FECHACREACION' => 8, 'CUENTABANCARIAMOVIMIENTO_BALANCE' => 9, 'CUENTABANCARIAMOVIMIENTO_REFERENCIA' => 10, 'CUENTABANCARIAMOVIMIENTO_MEDIO' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('idcuentabancariamovimiento' => 0, 'idcuentabancaria' => 1, 'idempleado' => 2, 'cuentabancariamovimiento_proceso' => 3, 'idproceso' => 4, 'cuentabancariamovimiento_cantidad' => 5, 'cuentabancariamovimiento_comprobante' => 6, 'cuentabancariamovimiento_fechamovimiento' => 7, 'cuentabancariamovimiento_fechacreacion' => 8, 'cuentabancariamovimiento_balance' => 9, 'cuentabancariamovimiento_referencia' => 10, 'cuentabancariamovimiento_medio' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_PROCESO => array(
            CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_PROCESO_COMPRA,
            CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_PROCESO_VENTA,
        ),
        CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_MEDIO => array(
            CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_MEDIO_CHEQUE,
            CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_MEDIO_EFECTIVO,
            CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_MEDIO_TRANSFERENCIA,
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
        $toNames = CuentabancariamovimientoPeer::getFieldNames($toType);
        $key = isset(CuentabancariamovimientoPeer::$fieldKeys[$fromType][$name]) ? CuentabancariamovimientoPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CuentabancariamovimientoPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CuentabancariamovimientoPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CuentabancariamovimientoPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CuentabancariamovimientoPeer::$enumValueSets;
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
        $valueSets = CuentabancariamovimientoPeer::getValueSets();

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
        $values = CuentabancariamovimientoPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CuentabancariamovimientoPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CuentabancariamovimientoPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO);
            $criteria->addSelectColumn(CuentabancariamovimientoPeer::IDCUENTABANCARIA);
            $criteria->addSelectColumn(CuentabancariamovimientoPeer::IDEMPLEADO);
            $criteria->addSelectColumn(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_PROCESO);
            $criteria->addSelectColumn(CuentabancariamovimientoPeer::IDPROCESO);
            $criteria->addSelectColumn(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_CANTIDAD);
            $criteria->addSelectColumn(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_COMPROBANTE);
            $criteria->addSelectColumn(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHAMOVIMIENTO);
            $criteria->addSelectColumn(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHACREACION);
            $criteria->addSelectColumn(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_BALANCE);
            $criteria->addSelectColumn(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_REFERENCIA);
            $criteria->addSelectColumn(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_MEDIO);
        } else {
            $criteria->addSelectColumn($alias . '.idcuentabancariamovimiento');
            $criteria->addSelectColumn($alias . '.idcuentabancaria');
            $criteria->addSelectColumn($alias . '.idempleado');
            $criteria->addSelectColumn($alias . '.cuentabancariamovimiento_proceso');
            $criteria->addSelectColumn($alias . '.idproceso');
            $criteria->addSelectColumn($alias . '.cuentabancariamovimiento_cantidad');
            $criteria->addSelectColumn($alias . '.cuentabancariamovimiento_comprobante');
            $criteria->addSelectColumn($alias . '.cuentabancariamovimiento_fechamovimiento');
            $criteria->addSelectColumn($alias . '.cuentabancariamovimiento_fechacreacion');
            $criteria->addSelectColumn($alias . '.cuentabancariamovimiento_balance');
            $criteria->addSelectColumn($alias . '.cuentabancariamovimiento_referencia');
            $criteria->addSelectColumn($alias . '.cuentabancariamovimiento_medio');
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
        $criteria->setPrimaryTableName(CuentabancariamovimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CuentabancariamovimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CuentabancariamovimientoPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Cuentabancariamovimiento
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CuentabancariamovimientoPeer::doSelect($critcopy, $con);
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
        return CuentabancariamovimientoPeer::populateObjects(CuentabancariamovimientoPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CuentabancariamovimientoPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CuentabancariamovimientoPeer::DATABASE_NAME);

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
     * @param Cuentabancariamovimiento $obj A Cuentabancariamovimiento object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdcuentabancariamovimiento();
            } // if key === null
            CuentabancariamovimientoPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Cuentabancariamovimiento object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Cuentabancariamovimiento) {
                $key = (string) $value->getIdcuentabancariamovimiento();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Cuentabancariamovimiento object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CuentabancariamovimientoPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Cuentabancariamovimiento Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CuentabancariamovimientoPeer::$instances[$key])) {
                return CuentabancariamovimientoPeer::$instances[$key];
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
        foreach (CuentabancariamovimientoPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CuentabancariamovimientoPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to cuentabancariamovimiento
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
        $cls = CuentabancariamovimientoPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CuentabancariamovimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CuentabancariamovimientoPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CuentabancariamovimientoPeer::addInstanceToPool($obj, $key);
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
     * @return array (Cuentabancariamovimiento object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CuentabancariamovimientoPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CuentabancariamovimientoPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CuentabancariamovimientoPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CuentabancariamovimientoPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CuentabancariamovimientoPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Cuentabancaria table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCuentabancaria(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CuentabancariamovimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CuentabancariamovimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CuentabancariamovimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CuentabancariamovimientoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

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
        $criteria->setPrimaryTableName(CuentabancariamovimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CuentabancariamovimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CuentabancariamovimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CuentabancariamovimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Selects a collection of Cuentabancariamovimiento objects pre-filled with their Cuentabancaria objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cuentabancariamovimiento objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCuentabancaria(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CuentabancariamovimientoPeer::DATABASE_NAME);
        }

        CuentabancariamovimientoPeer::addSelectColumns($criteria);
        $startcol = CuentabancariamovimientoPeer::NUM_HYDRATE_COLUMNS;
        CuentabancariaPeer::addSelectColumns($criteria);

        $criteria->addJoin(CuentabancariamovimientoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CuentabancariamovimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CuentabancariamovimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CuentabancariamovimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CuentabancariamovimientoPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CuentabancariaPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CuentabancariaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CuentabancariaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CuentabancariaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Cuentabancariamovimiento) to $obj2 (Cuentabancaria)
                $obj2->addCuentabancariamovimiento($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cuentabancariamovimiento objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cuentabancariamovimiento objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleado(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CuentabancariamovimientoPeer::DATABASE_NAME);
        }

        CuentabancariamovimientoPeer::addSelectColumns($criteria);
        $startcol = CuentabancariamovimientoPeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(CuentabancariamovimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CuentabancariamovimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CuentabancariamovimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CuentabancariamovimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CuentabancariamovimientoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Cuentabancariamovimiento) to $obj2 (Empleado)
                $obj2->addCuentabancariamovimiento($obj1);

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
        $criteria->setPrimaryTableName(CuentabancariamovimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CuentabancariamovimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CuentabancariamovimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CuentabancariamovimientoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(CuentabancariamovimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Selects a collection of Cuentabancariamovimiento objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cuentabancariamovimiento objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CuentabancariamovimientoPeer::DATABASE_NAME);
        }

        CuentabancariamovimientoPeer::addSelectColumns($criteria);
        $startcol2 = CuentabancariamovimientoPeer::NUM_HYDRATE_COLUMNS;

        CuentabancariaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CuentabancariaPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CuentabancariamovimientoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

        $criteria->addJoin(CuentabancariamovimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CuentabancariamovimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CuentabancariamovimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CuentabancariamovimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CuentabancariamovimientoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Cuentabancaria rows

            $key2 = CuentabancariaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CuentabancariaPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CuentabancariaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CuentabancariaPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Cuentabancariamovimiento) to the collection in $obj2 (Cuentabancaria)
                $obj2->addCuentabancariamovimiento($obj1);
            } // if joined row not null

            // Add objects for joined Empleado rows

            $key3 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = EmpleadoPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = EmpleadoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    EmpleadoPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Cuentabancariamovimiento) to the collection in $obj3 (Empleado)
                $obj3->addCuentabancariamovimiento($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Cuentabancaria table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCuentabancaria(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CuentabancariamovimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CuentabancariamovimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CuentabancariamovimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CuentabancariamovimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
        $criteria->setPrimaryTableName(CuentabancariamovimientoPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CuentabancariamovimientoPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CuentabancariamovimientoPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CuentabancariamovimientoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);

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
     * Selects a collection of Cuentabancariamovimiento objects pre-filled with all related objects except Cuentabancaria.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cuentabancariamovimiento objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCuentabancaria(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CuentabancariamovimientoPeer::DATABASE_NAME);
        }

        CuentabancariamovimientoPeer::addSelectColumns($criteria);
        $startcol2 = CuentabancariamovimientoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CuentabancariamovimientoPeer::IDEMPLEADO, EmpleadoPeer::IDEMPLEADO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CuentabancariamovimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CuentabancariamovimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CuentabancariamovimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CuentabancariamovimientoPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Cuentabancariamovimiento) to the collection in $obj2 (Empleado)
                $obj2->addCuentabancariamovimiento($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Cuentabancariamovimiento objects pre-filled with all related objects except Empleado.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Cuentabancariamovimiento objects.
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
            $criteria->setDbName(CuentabancariamovimientoPeer::DATABASE_NAME);
        }

        CuentabancariamovimientoPeer::addSelectColumns($criteria);
        $startcol2 = CuentabancariamovimientoPeer::NUM_HYDRATE_COLUMNS;

        CuentabancariaPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CuentabancariaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CuentabancariamovimientoPeer::IDCUENTABANCARIA, CuentabancariaPeer::IDCUENTABANCARIA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CuentabancariamovimientoPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CuentabancariamovimientoPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CuentabancariamovimientoPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CuentabancariamovimientoPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Cuentabancaria rows

                $key2 = CuentabancariaPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CuentabancariaPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = CuentabancariaPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CuentabancariaPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Cuentabancariamovimiento) to the collection in $obj2 (Cuentabancaria)
                $obj2->addCuentabancariamovimiento($obj1);

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
        return Propel::getDatabaseMap(CuentabancariamovimientoPeer::DATABASE_NAME)->getTable(CuentabancariamovimientoPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCuentabancariamovimientoPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCuentabancariamovimientoPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \CuentabancariamovimientoTableMap());
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
        return CuentabancariamovimientoPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Cuentabancariamovimiento or Criteria object.
     *
     * @param      mixed $values Criteria or Cuentabancariamovimiento object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Cuentabancariamovimiento object
        }

        if ($criteria->containsKey(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO) && $criteria->keyContainsValue(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CuentabancariamovimientoPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Cuentabancariamovimiento or Criteria object.
     *
     * @param      mixed $values Criteria or Cuentabancariamovimiento object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CuentabancariamovimientoPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO);
            $value = $criteria->remove(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO);
            if ($value) {
                $selectCriteria->add(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CuentabancariamovimientoPeer::TABLE_NAME);
            }

        } else { // $values is Cuentabancariamovimiento object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CuentabancariamovimientoPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the cuentabancariamovimiento table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CuentabancariamovimientoPeer::TABLE_NAME, $con, CuentabancariamovimientoPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CuentabancariamovimientoPeer::clearInstancePool();
            CuentabancariamovimientoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Cuentabancariamovimiento or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Cuentabancariamovimiento object or primary key or array of primary keys
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
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CuentabancariamovimientoPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Cuentabancariamovimiento) { // it's a model object
            // invalidate the cache for this single object
            CuentabancariamovimientoPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CuentabancariamovimientoPeer::DATABASE_NAME);
            $criteria->add(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CuentabancariamovimientoPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CuentabancariamovimientoPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            CuentabancariamovimientoPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Cuentabancariamovimiento object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Cuentabancariamovimiento $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CuentabancariamovimientoPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CuentabancariamovimientoPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CuentabancariamovimientoPeer::DATABASE_NAME, CuentabancariamovimientoPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Cuentabancariamovimiento
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CuentabancariamovimientoPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CuentabancariamovimientoPeer::DATABASE_NAME);
        $criteria->add(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO, $pk);

        $v = CuentabancariamovimientoPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Cuentabancariamovimiento[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CuentabancariamovimientoPeer::DATABASE_NAME);
            $criteria->add(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO, $pks, Criteria::IN);
            $objs = CuentabancariamovimientoPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCuentabancariamovimientoPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCuentabancariamovimientoPeer::buildTableMap();
