<?php


/**
 * Base static class for performing query and update operations on the 'venta' table.
 *
 *
 *
 * @package propel.generator.zarely.om
 */
abstract class BaseVentaPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'zarely';

    /** the table name for this class */
    const TABLE_NAME = 'venta';

    /** the related Propel class for this table */
    const OM_CLASS = 'Venta';

    /** the related TableMap class for this table */
    const TM_CLASS = 'VentaTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the idventa field */
    const IDVENTA = 'venta.idventa';

    /** the column name for the idempleadocajero field */
    const IDEMPLEADOCAJERO = 'venta.idempleadocajero';

    /** the column name for the idempleadovendedor field */
    const IDEMPLEADOVENDEDOR = 'venta.idempleadovendedor';

    /** the column name for the idcliente field */
    const IDCLIENTE = 'venta.idcliente';

    /** the column name for the venta_total field */
    const VENTA_TOTAL = 'venta.venta_total';

    /** the column name for the venta_fecha field */
    const VENTA_FECHA = 'venta.venta_fecha';

    /** the column name for the venta_comprobante field */
    const VENTA_COMPROBANTE = 'venta.venta_comprobante';

    /** the column name for the idsucursal field */
    const IDSUCURSAL = 'venta.idsucursal';

    /** the column name for the venta_estatuspago field */
    const VENTA_ESTATUSPAGO = 'venta.venta_estatuspago';

    /** the column name for the venta_tipo field */
    const VENTA_TIPO = 'venta.venta_tipo';

    /** the column name for the venta_subtotal field */
    const VENTA_SUBTOTAL = 'venta.venta_subtotal';

    /** the column name for the venta_iva field */
    const VENTA_IVA = 'venta.venta_iva';

    /** the column name for the venta_estatus field */
    const VENTA_ESTATUS = 'venta.venta_estatus';

    /** the column name for the venta_facturacion field */
    const VENTA_FACTURACION = 'venta.venta_facturacion';

    /** The enumerated values for the venta_tipo field */
    const VENTA_TIPO_VENTA = 'venta';
    const VENTA_TIPO_CREDITO = 'credito';
    const VENTA_TIPO_APARTADO = 'apartado';

    /** The enumerated values for the venta_estatus field */
    const VENTA_ESTATUS_CANCELADA = 'cancelada';
    const VENTA_ESTATUS_COMPLETADA = 'completada';
    const VENTA_ESTATUS_PROCESANDO = 'procesando';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Venta objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Venta[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. VentaPeer::$fieldNames[VentaPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idventa', 'Idempleadocajero', 'Idempleadovendedor', 'Idcliente', 'VentaTotal', 'VentaFecha', 'VentaComprobante', 'Idsucursal', 'VentaEstatuspago', 'VentaTipo', 'VentaSubtotal', 'VentaIva', 'VentaEstatus', 'VentaFacturacion', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idventa', 'idempleadocajero', 'idempleadovendedor', 'idcliente', 'ventaTotal', 'ventaFecha', 'ventaComprobante', 'idsucursal', 'ventaEstatuspago', 'ventaTipo', 'ventaSubtotal', 'ventaIva', 'ventaEstatus', 'ventaFacturacion', ),
        BasePeer::TYPE_COLNAME => array (VentaPeer::IDVENTA, VentaPeer::IDEMPLEADOCAJERO, VentaPeer::IDEMPLEADOVENDEDOR, VentaPeer::IDCLIENTE, VentaPeer::VENTA_TOTAL, VentaPeer::VENTA_FECHA, VentaPeer::VENTA_COMPROBANTE, VentaPeer::IDSUCURSAL, VentaPeer::VENTA_ESTATUSPAGO, VentaPeer::VENTA_TIPO, VentaPeer::VENTA_SUBTOTAL, VentaPeer::VENTA_IVA, VentaPeer::VENTA_ESTATUS, VentaPeer::VENTA_FACTURACION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDVENTA', 'IDEMPLEADOCAJERO', 'IDEMPLEADOVENDEDOR', 'IDCLIENTE', 'VENTA_TOTAL', 'VENTA_FECHA', 'VENTA_COMPROBANTE', 'IDSUCURSAL', 'VENTA_ESTATUSPAGO', 'VENTA_TIPO', 'VENTA_SUBTOTAL', 'VENTA_IVA', 'VENTA_ESTATUS', 'VENTA_FACTURACION', ),
        BasePeer::TYPE_FIELDNAME => array ('idventa', 'idempleadocajero', 'idempleadovendedor', 'idcliente', 'venta_total', 'venta_fecha', 'venta_comprobante', 'idsucursal', 'venta_estatuspago', 'venta_tipo', 'venta_subtotal', 'venta_iva', 'venta_estatus', 'venta_facturacion', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. VentaPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idventa' => 0, 'Idempleadocajero' => 1, 'Idempleadovendedor' => 2, 'Idcliente' => 3, 'VentaTotal' => 4, 'VentaFecha' => 5, 'VentaComprobante' => 6, 'Idsucursal' => 7, 'VentaEstatuspago' => 8, 'VentaTipo' => 9, 'VentaSubtotal' => 10, 'VentaIva' => 11, 'VentaEstatus' => 12, 'VentaFacturacion' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idventa' => 0, 'idempleadocajero' => 1, 'idempleadovendedor' => 2, 'idcliente' => 3, 'ventaTotal' => 4, 'ventaFecha' => 5, 'ventaComprobante' => 6, 'idsucursal' => 7, 'ventaEstatuspago' => 8, 'ventaTipo' => 9, 'ventaSubtotal' => 10, 'ventaIva' => 11, 'ventaEstatus' => 12, 'ventaFacturacion' => 13, ),
        BasePeer::TYPE_COLNAME => array (VentaPeer::IDVENTA => 0, VentaPeer::IDEMPLEADOCAJERO => 1, VentaPeer::IDEMPLEADOVENDEDOR => 2, VentaPeer::IDCLIENTE => 3, VentaPeer::VENTA_TOTAL => 4, VentaPeer::VENTA_FECHA => 5, VentaPeer::VENTA_COMPROBANTE => 6, VentaPeer::IDSUCURSAL => 7, VentaPeer::VENTA_ESTATUSPAGO => 8, VentaPeer::VENTA_TIPO => 9, VentaPeer::VENTA_SUBTOTAL => 10, VentaPeer::VENTA_IVA => 11, VentaPeer::VENTA_ESTATUS => 12, VentaPeer::VENTA_FACTURACION => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDVENTA' => 0, 'IDEMPLEADOCAJERO' => 1, 'IDEMPLEADOVENDEDOR' => 2, 'IDCLIENTE' => 3, 'VENTA_TOTAL' => 4, 'VENTA_FECHA' => 5, 'VENTA_COMPROBANTE' => 6, 'IDSUCURSAL' => 7, 'VENTA_ESTATUSPAGO' => 8, 'VENTA_TIPO' => 9, 'VENTA_SUBTOTAL' => 10, 'VENTA_IVA' => 11, 'VENTA_ESTATUS' => 12, 'VENTA_FACTURACION' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('idventa' => 0, 'idempleadocajero' => 1, 'idempleadovendedor' => 2, 'idcliente' => 3, 'venta_total' => 4, 'venta_fecha' => 5, 'venta_comprobante' => 6, 'idsucursal' => 7, 'venta_estatuspago' => 8, 'venta_tipo' => 9, 'venta_subtotal' => 10, 'venta_iva' => 11, 'venta_estatus' => 12, 'venta_facturacion' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        VentaPeer::VENTA_TIPO => array(
            VentaPeer::VENTA_TIPO_VENTA,
            VentaPeer::VENTA_TIPO_CREDITO,
            VentaPeer::VENTA_TIPO_APARTADO,
        ),
        VentaPeer::VENTA_ESTATUS => array(
            VentaPeer::VENTA_ESTATUS_CANCELADA,
            VentaPeer::VENTA_ESTATUS_COMPLETADA,
            VentaPeer::VENTA_ESTATUS_PROCESANDO,
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
        $toNames = VentaPeer::getFieldNames($toType);
        $key = isset(VentaPeer::$fieldKeys[$fromType][$name]) ? VentaPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(VentaPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, VentaPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return VentaPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return VentaPeer::$enumValueSets;
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
        $valueSets = VentaPeer::getValueSets();

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
        $values = VentaPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. VentaPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(VentaPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(VentaPeer::IDVENTA);
            $criteria->addSelectColumn(VentaPeer::IDEMPLEADOCAJERO);
            $criteria->addSelectColumn(VentaPeer::IDEMPLEADOVENDEDOR);
            $criteria->addSelectColumn(VentaPeer::IDCLIENTE);
            $criteria->addSelectColumn(VentaPeer::VENTA_TOTAL);
            $criteria->addSelectColumn(VentaPeer::VENTA_FECHA);
            $criteria->addSelectColumn(VentaPeer::VENTA_COMPROBANTE);
            $criteria->addSelectColumn(VentaPeer::IDSUCURSAL);
            $criteria->addSelectColumn(VentaPeer::VENTA_ESTATUSPAGO);
            $criteria->addSelectColumn(VentaPeer::VENTA_TIPO);
            $criteria->addSelectColumn(VentaPeer::VENTA_SUBTOTAL);
            $criteria->addSelectColumn(VentaPeer::VENTA_IVA);
            $criteria->addSelectColumn(VentaPeer::VENTA_ESTATUS);
            $criteria->addSelectColumn(VentaPeer::VENTA_FACTURACION);
        } else {
            $criteria->addSelectColumn($alias . '.idventa');
            $criteria->addSelectColumn($alias . '.idempleadocajero');
            $criteria->addSelectColumn($alias . '.idempleadovendedor');
            $criteria->addSelectColumn($alias . '.idcliente');
            $criteria->addSelectColumn($alias . '.venta_total');
            $criteria->addSelectColumn($alias . '.venta_fecha');
            $criteria->addSelectColumn($alias . '.venta_comprobante');
            $criteria->addSelectColumn($alias . '.idsucursal');
            $criteria->addSelectColumn($alias . '.venta_estatuspago');
            $criteria->addSelectColumn($alias . '.venta_tipo');
            $criteria->addSelectColumn($alias . '.venta_subtotal');
            $criteria->addSelectColumn($alias . '.venta_iva');
            $criteria->addSelectColumn($alias . '.venta_estatus');
            $criteria->addSelectColumn($alias . '.venta_facturacion');
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
        $criteria->setPrimaryTableName(VentaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(VentaPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Venta
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = VentaPeer::doSelect($critcopy, $con);
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
        return VentaPeer::populateObjects(VentaPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            VentaPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(VentaPeer::DATABASE_NAME);

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
     * @param Venta $obj A Venta object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdventa();
            } // if key === null
            VentaPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Venta object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Venta) {
                $key = (string) $value->getIdventa();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Venta object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(VentaPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Venta Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(VentaPeer::$instances[$key])) {
                return VentaPeer::$instances[$key];
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
        foreach (VentaPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        VentaPeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to venta
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in VentadetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        VentadetallePeer::clearInstancePool();
        // Invalidate objects in VentapagoPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        VentapagoPeer::clearInstancePool();
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
        $cls = VentaPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = VentaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = VentaPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                VentaPeer::addInstanceToPool($obj, $key);
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
     * @return array (Venta object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = VentaPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + VentaPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = VentaPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            VentaPeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(VentaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VentaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentaPeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related EmpleadoRelatedByIdempleadocajero table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmpleadoRelatedByIdempleadocajero(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VentaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VentaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentaPeer::IDEMPLEADOCAJERO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related EmpleadoRelatedByIdempleadovendedor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinEmpleadoRelatedByIdempleadovendedor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VentaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VentaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentaPeer::IDEMPLEADOVENDEDOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
        $criteria->setPrimaryTableName(VentaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VentaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Selects a collection of Venta objects pre-filled with their Cliente objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Venta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCliente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VentaPeer::DATABASE_NAME);
        }

        VentaPeer::addSelectColumns($criteria);
        $startcol = VentaPeer::NUM_HYDRATE_COLUMNS;
        ClientePeer::addSelectColumns($criteria);

        $criteria->addJoin(VentaPeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VentaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Venta) to $obj2 (Cliente)
                $obj2->addVenta($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Venta objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Venta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleadoRelatedByIdempleadocajero(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VentaPeer::DATABASE_NAME);
        }

        VentaPeer::addSelectColumns($criteria);
        $startcol = VentaPeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(VentaPeer::IDEMPLEADOCAJERO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VentaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Venta) to $obj2 (Empleado)
                $obj2->addVentaRelatedByIdempleadocajero($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Venta objects pre-filled with their Empleado objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Venta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinEmpleadoRelatedByIdempleadovendedor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VentaPeer::DATABASE_NAME);
        }

        VentaPeer::addSelectColumns($criteria);
        $startcol = VentaPeer::NUM_HYDRATE_COLUMNS;
        EmpleadoPeer::addSelectColumns($criteria);

        $criteria->addJoin(VentaPeer::IDEMPLEADOVENDEDOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VentaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Venta) to $obj2 (Empleado)
                $obj2->addVentaRelatedByIdempleadovendedor($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Venta objects pre-filled with their Sucursal objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Venta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinSucursal(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VentaPeer::DATABASE_NAME);
        }

        VentaPeer::addSelectColumns($criteria);
        $startcol = VentaPeer::NUM_HYDRATE_COLUMNS;
        SucursalPeer::addSelectColumns($criteria);

        $criteria->addJoin(VentaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VentaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Venta) to $obj2 (Sucursal)
                $obj2->addVenta($obj1);

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
        $criteria->setPrimaryTableName(VentaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VentaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentaPeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

        $criteria->addJoin(VentaPeer::IDEMPLEADOCAJERO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VentaPeer::IDEMPLEADOVENDEDOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VentaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Selects a collection of Venta objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Venta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VentaPeer::DATABASE_NAME);
        }

        VentaPeer::addSelectColumns($criteria);
        $startcol2 = VentaPeer::NUM_HYDRATE_COLUMNS;

        ClientePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientePeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VentaPeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

        $criteria->addJoin(VentaPeer::IDEMPLEADOCAJERO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VentaPeer::IDEMPLEADOVENDEDOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VentaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VentaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Venta) to the collection in $obj2 (Cliente)
                $obj2->addVenta($obj1);
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

                // Add the $obj1 (Venta) to the collection in $obj3 (Empleado)
                $obj3->addVentaRelatedByIdempleadocajero($obj1);
            } // if joined row not null

            // Add objects for joined Empleado rows

            $key4 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = EmpleadoPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = EmpleadoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    EmpleadoPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Venta) to the collection in $obj4 (Empleado)
                $obj4->addVentaRelatedByIdempleadovendedor($obj1);
            } // if joined row not null

            // Add objects for joined Sucursal rows

            $key5 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = SucursalPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = SucursalPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    SucursalPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Venta) to the collection in $obj5 (Sucursal)
                $obj5->addVenta($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
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
    public static function doCountJoinAllExceptCliente(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VentaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VentaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentaPeer::IDEMPLEADOCAJERO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VentaPeer::IDEMPLEADOVENDEDOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VentaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related EmpleadoRelatedByIdempleadocajero table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmpleadoRelatedByIdempleadocajero(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VentaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VentaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentaPeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

        $criteria->addJoin(VentaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related EmpleadoRelatedByIdempleadovendedor table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptEmpleadoRelatedByIdempleadovendedor(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VentaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VentaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentaPeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

        $criteria->addJoin(VentaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);

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
        $criteria->setPrimaryTableName(VentaPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentaPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VentaPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentaPeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

        $criteria->addJoin(VentaPeer::IDEMPLEADOCAJERO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VentaPeer::IDEMPLEADOVENDEDOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

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
     * Selects a collection of Venta objects pre-filled with all related objects except Cliente.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Venta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCliente(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VentaPeer::DATABASE_NAME);
        }

        VentaPeer::addSelectColumns($criteria);
        $startcol2 = VentaPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VentaPeer::IDEMPLEADOCAJERO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VentaPeer::IDEMPLEADOVENDEDOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VentaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VentaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentaPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Venta) to the collection in $obj2 (Empleado)
                $obj2->addVentaRelatedByIdempleadocajero($obj1);

            } // if joined row is not null

                // Add objects for joined Empleado rows

                $key3 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = EmpleadoPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = EmpleadoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    EmpleadoPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Venta) to the collection in $obj3 (Empleado)
                $obj3->addVentaRelatedByIdempleadovendedor($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key4 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = SucursalPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = SucursalPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    SucursalPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Venta) to the collection in $obj4 (Sucursal)
                $obj4->addVenta($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Venta objects pre-filled with all related objects except EmpleadoRelatedByIdempleadocajero.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Venta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmpleadoRelatedByIdempleadocajero(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VentaPeer::DATABASE_NAME);
        }

        VentaPeer::addSelectColumns($criteria);
        $startcol2 = VentaPeer::NUM_HYDRATE_COLUMNS;

        ClientePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientePeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VentaPeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

        $criteria->addJoin(VentaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VentaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentaPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (Venta) to the collection in $obj2 (Cliente)
                $obj2->addVenta($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key3 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = SucursalPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = SucursalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    SucursalPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Venta) to the collection in $obj3 (Sucursal)
                $obj3->addVenta($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Venta objects pre-filled with all related objects except EmpleadoRelatedByIdempleadovendedor.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Venta objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptEmpleadoRelatedByIdempleadovendedor(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VentaPeer::DATABASE_NAME);
        }

        VentaPeer::addSelectColumns($criteria);
        $startcol2 = VentaPeer::NUM_HYDRATE_COLUMNS;

        ClientePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientePeer::NUM_HYDRATE_COLUMNS;

        SucursalPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + SucursalPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VentaPeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

        $criteria->addJoin(VentaPeer::IDSUCURSAL, SucursalPeer::IDSUCURSAL, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VentaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentaPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (Venta) to the collection in $obj2 (Cliente)
                $obj2->addVenta($obj1);

            } // if joined row is not null

                // Add objects for joined Sucursal rows

                $key3 = SucursalPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = SucursalPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = SucursalPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    SucursalPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Venta) to the collection in $obj3 (Sucursal)
                $obj3->addVenta($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Venta objects pre-filled with all related objects except Sucursal.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Venta objects.
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
            $criteria->setDbName(VentaPeer::DATABASE_NAME);
        }

        VentaPeer::addSelectColumns($criteria);
        $startcol2 = VentaPeer::NUM_HYDRATE_COLUMNS;

        ClientePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ClientePeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        EmpleadoPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + EmpleadoPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VentaPeer::IDCLIENTE, ClientePeer::IDCLIENTE, $join_behavior);

        $criteria->addJoin(VentaPeer::IDEMPLEADOCAJERO, EmpleadoPeer::IDEMPLEADO, $join_behavior);

        $criteria->addJoin(VentaPeer::IDEMPLEADOVENDEDOR, EmpleadoPeer::IDEMPLEADO, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentaPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentaPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VentaPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentaPeer::addInstanceToPool($obj1, $key1);
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
                } // if $obj2 already loaded

                // Add the $obj1 (Venta) to the collection in $obj2 (Cliente)
                $obj2->addVenta($obj1);

            } // if joined row is not null

                // Add objects for joined Empleado rows

                $key3 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = EmpleadoPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = EmpleadoPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    EmpleadoPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Venta) to the collection in $obj3 (Empleado)
                $obj3->addVentaRelatedByIdempleadocajero($obj1);

            } // if joined row is not null

                // Add objects for joined Empleado rows

                $key4 = EmpleadoPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = EmpleadoPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = EmpleadoPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    EmpleadoPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Venta) to the collection in $obj4 (Empleado)
                $obj4->addVentaRelatedByIdempleadovendedor($obj1);

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
        return Propel::getDatabaseMap(VentaPeer::DATABASE_NAME)->getTable(VentaPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseVentaPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseVentaPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \VentaTableMap());
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
        return VentaPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Venta or Criteria object.
     *
     * @param      mixed $values Criteria or Venta object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Venta object
        }

        if ($criteria->containsKey(VentaPeer::IDVENTA) && $criteria->keyContainsValue(VentaPeer::IDVENTA) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.VentaPeer::IDVENTA.')');
        }


        // Set the correct dbName
        $criteria->setDbName(VentaPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Venta or Criteria object.
     *
     * @param      mixed $values Criteria or Venta object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(VentaPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(VentaPeer::IDVENTA);
            $value = $criteria->remove(VentaPeer::IDVENTA);
            if ($value) {
                $selectCriteria->add(VentaPeer::IDVENTA, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(VentaPeer::TABLE_NAME);
            }

        } else { // $values is Venta object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(VentaPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the venta table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += VentaPeer::doOnDeleteCascade(new Criteria(VentaPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(VentaPeer::TABLE_NAME, $con, VentaPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            VentaPeer::clearInstancePool();
            VentaPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Venta or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Venta object or primary key or array of primary keys
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
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Venta) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(VentaPeer::DATABASE_NAME);
            $criteria->add(VentaPeer::IDVENTA, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(VentaPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += VentaPeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                VentaPeer::clearInstancePool();
            } elseif ($values instanceof Venta) { // it's a model object
                VentaPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    VentaPeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            VentaPeer::clearRelatedInstancePool();
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
        $objects = VentaPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Ventadetalle objects
            $criteria = new Criteria(VentadetallePeer::DATABASE_NAME);

            $criteria->add(VentadetallePeer::IDVENTA, $obj->getIdventa());
            $affectedRows += VentadetallePeer::doDelete($criteria, $con);

            // delete related Ventapago objects
            $criteria = new Criteria(VentapagoPeer::DATABASE_NAME);

            $criteria->add(VentapagoPeer::IDVENTA, $obj->getIdventa());
            $affectedRows += VentapagoPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Venta object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Venta $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(VentaPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(VentaPeer::TABLE_NAME);

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

        return BasePeer::doValidate(VentaPeer::DATABASE_NAME, VentaPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Venta
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = VentaPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(VentaPeer::DATABASE_NAME);
        $criteria->add(VentaPeer::IDVENTA, $pk);

        $v = VentaPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Venta[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(VentaPeer::DATABASE_NAME);
            $criteria->add(VentaPeer::IDVENTA, $pks, Criteria::IN);
            $objs = VentaPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseVentaPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseVentaPeer::buildTableMap();

