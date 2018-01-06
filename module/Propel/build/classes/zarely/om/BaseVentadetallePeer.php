<?php


/**
 * Base static class for performing query and update operations on the 'ventadetalle' table.
 *
 *
 *
 * @package propel.generator.zarely.om
 */
abstract class BaseVentadetallePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'zarely';

    /** the table name for this class */
    const TABLE_NAME = 'ventadetalle';

    /** the related Propel class for this table */
    const OM_CLASS = 'Ventadetalle';

    /** the related TableMap class for this table */
    const TM_CLASS = 'VentadetalleTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the idventadetalle field */
    const IDVENTADETALLE = 'ventadetalle.idventadetalle';

    /** the column name for the idventa field */
    const IDVENTA = 'ventadetalle.idventa';

    /** the column name for the iddescuento field */
    const IDDESCUENTO = 'ventadetalle.iddescuento';

    /** the column name for the idpromocion field */
    const IDPROMOCION = 'ventadetalle.idpromocion';

    /** the column name for the idproductovariante field */
    const IDPRODUCTOVARIANTE = 'ventadetalle.idproductovariante';

    /** the column name for the ventadetalle_cantidad field */
    const VENTADETALLE_CANTIDAD = 'ventadetalle.ventadetalle_cantidad';

    /** the column name for the ventadetalle_subtotal field */
    const VENTADETALLE_SUBTOTAL = 'ventadetalle.ventadetalle_subtotal';

    /** the column name for the ventadetalle_preciounitario field */
    const VENTADETALLE_PRECIOUNITARIO = 'ventadetalle.ventadetalle_preciounitario';

    /** the column name for the ventadetalle_estatus field */
    const VENTADETALLE_ESTATUS = 'ventadetalle.ventadetalle_estatus';

    /** the column name for the ventadetalle_descuento field */
    const VENTADETALLE_DESCUENTO = 'ventadetalle.ventadetalle_descuento';

    /** the column name for the idventadetallapadre field */
    const IDVENTADETALLAPADRE = 'ventadetalle.idventadetallapadre';

    /** The enumerated values for the ventadetalle_estatus field */
    const VENTADETALLE_ESTATUS_COMPLETO = 'completo';
    const VENTADETALLE_ESTATUS_DEFECTO = 'defecto';
    const VENTADETALLE_ESTATUS_CAMBIO = 'cambio';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Ventadetalle objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Ventadetalle[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. VentadetallePeer::$fieldNames[VentadetallePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idventadetalle', 'Idventa', 'Iddescuento', 'Idpromocion', 'Idproductovariante', 'VentadetalleCantidad', 'VentadetalleSubtotal', 'VentadetallePreciounitario', 'VentadetalleEstatus', 'VentadetalleDescuento', 'Idventadetallapadre', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idventadetalle', 'idventa', 'iddescuento', 'idpromocion', 'idproductovariante', 'ventadetalleCantidad', 'ventadetalleSubtotal', 'ventadetallePreciounitario', 'ventadetalleEstatus', 'ventadetalleDescuento', 'idventadetallapadre', ),
        BasePeer::TYPE_COLNAME => array (VentadetallePeer::IDVENTADETALLE, VentadetallePeer::IDVENTA, VentadetallePeer::IDDESCUENTO, VentadetallePeer::IDPROMOCION, VentadetallePeer::IDPRODUCTOVARIANTE, VentadetallePeer::VENTADETALLE_CANTIDAD, VentadetallePeer::VENTADETALLE_SUBTOTAL, VentadetallePeer::VENTADETALLE_PRECIOUNITARIO, VentadetallePeer::VENTADETALLE_ESTATUS, VentadetallePeer::VENTADETALLE_DESCUENTO, VentadetallePeer::IDVENTADETALLAPADRE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDVENTADETALLE', 'IDVENTA', 'IDDESCUENTO', 'IDPROMOCION', 'IDPRODUCTOVARIANTE', 'VENTADETALLE_CANTIDAD', 'VENTADETALLE_SUBTOTAL', 'VENTADETALLE_PRECIOUNITARIO', 'VENTADETALLE_ESTATUS', 'VENTADETALLE_DESCUENTO', 'IDVENTADETALLAPADRE', ),
        BasePeer::TYPE_FIELDNAME => array ('idventadetalle', 'idventa', 'iddescuento', 'idpromocion', 'idproductovariante', 'ventadetalle_cantidad', 'ventadetalle_subtotal', 'ventadetalle_preciounitario', 'ventadetalle_estatus', 'ventadetalle_descuento', 'idventadetallapadre', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. VentadetallePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idventadetalle' => 0, 'Idventa' => 1, 'Iddescuento' => 2, 'Idpromocion' => 3, 'Idproductovariante' => 4, 'VentadetalleCantidad' => 5, 'VentadetalleSubtotal' => 6, 'VentadetallePreciounitario' => 7, 'VentadetalleEstatus' => 8, 'VentadetalleDescuento' => 9, 'Idventadetallapadre' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idventadetalle' => 0, 'idventa' => 1, 'iddescuento' => 2, 'idpromocion' => 3, 'idproductovariante' => 4, 'ventadetalleCantidad' => 5, 'ventadetalleSubtotal' => 6, 'ventadetallePreciounitario' => 7, 'ventadetalleEstatus' => 8, 'ventadetalleDescuento' => 9, 'idventadetallapadre' => 10, ),
        BasePeer::TYPE_COLNAME => array (VentadetallePeer::IDVENTADETALLE => 0, VentadetallePeer::IDVENTA => 1, VentadetallePeer::IDDESCUENTO => 2, VentadetallePeer::IDPROMOCION => 3, VentadetallePeer::IDPRODUCTOVARIANTE => 4, VentadetallePeer::VENTADETALLE_CANTIDAD => 5, VentadetallePeer::VENTADETALLE_SUBTOTAL => 6, VentadetallePeer::VENTADETALLE_PRECIOUNITARIO => 7, VentadetallePeer::VENTADETALLE_ESTATUS => 8, VentadetallePeer::VENTADETALLE_DESCUENTO => 9, VentadetallePeer::IDVENTADETALLAPADRE => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDVENTADETALLE' => 0, 'IDVENTA' => 1, 'IDDESCUENTO' => 2, 'IDPROMOCION' => 3, 'IDPRODUCTOVARIANTE' => 4, 'VENTADETALLE_CANTIDAD' => 5, 'VENTADETALLE_SUBTOTAL' => 6, 'VENTADETALLE_PRECIOUNITARIO' => 7, 'VENTADETALLE_ESTATUS' => 8, 'VENTADETALLE_DESCUENTO' => 9, 'IDVENTADETALLAPADRE' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('idventadetalle' => 0, 'idventa' => 1, 'iddescuento' => 2, 'idpromocion' => 3, 'idproductovariante' => 4, 'ventadetalle_cantidad' => 5, 'ventadetalle_subtotal' => 6, 'ventadetalle_preciounitario' => 7, 'ventadetalle_estatus' => 8, 'ventadetalle_descuento' => 9, 'idventadetallapadre' => 10, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        VentadetallePeer::VENTADETALLE_ESTATUS => array(
            VentadetallePeer::VENTADETALLE_ESTATUS_COMPLETO,
            VentadetallePeer::VENTADETALLE_ESTATUS_DEFECTO,
            VentadetallePeer::VENTADETALLE_ESTATUS_CAMBIO,
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
        $toNames = VentadetallePeer::getFieldNames($toType);
        $key = isset(VentadetallePeer::$fieldKeys[$fromType][$name]) ? VentadetallePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(VentadetallePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, VentadetallePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return VentadetallePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return VentadetallePeer::$enumValueSets;
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
        $valueSets = VentadetallePeer::getValueSets();

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
        $values = VentadetallePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. VentadetallePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(VentadetallePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(VentadetallePeer::IDVENTADETALLE);
            $criteria->addSelectColumn(VentadetallePeer::IDVENTA);
            $criteria->addSelectColumn(VentadetallePeer::IDDESCUENTO);
            $criteria->addSelectColumn(VentadetallePeer::IDPROMOCION);
            $criteria->addSelectColumn(VentadetallePeer::IDPRODUCTOVARIANTE);
            $criteria->addSelectColumn(VentadetallePeer::VENTADETALLE_CANTIDAD);
            $criteria->addSelectColumn(VentadetallePeer::VENTADETALLE_SUBTOTAL);
            $criteria->addSelectColumn(VentadetallePeer::VENTADETALLE_PRECIOUNITARIO);
            $criteria->addSelectColumn(VentadetallePeer::VENTADETALLE_ESTATUS);
            $criteria->addSelectColumn(VentadetallePeer::VENTADETALLE_DESCUENTO);
            $criteria->addSelectColumn(VentadetallePeer::IDVENTADETALLAPADRE);
        } else {
            $criteria->addSelectColumn($alias . '.idventadetalle');
            $criteria->addSelectColumn($alias . '.idventa');
            $criteria->addSelectColumn($alias . '.iddescuento');
            $criteria->addSelectColumn($alias . '.idpromocion');
            $criteria->addSelectColumn($alias . '.idproductovariante');
            $criteria->addSelectColumn($alias . '.ventadetalle_cantidad');
            $criteria->addSelectColumn($alias . '.ventadetalle_subtotal');
            $criteria->addSelectColumn($alias . '.ventadetalle_preciounitario');
            $criteria->addSelectColumn($alias . '.ventadetalle_estatus');
            $criteria->addSelectColumn($alias . '.ventadetalle_descuento');
            $criteria->addSelectColumn($alias . '.idventadetallapadre');
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
        $criteria->setPrimaryTableName(VentadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(VentadetallePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return Ventadetalle
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = VentadetallePeer::doSelect($critcopy, $con);
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
        return VentadetallePeer::populateObjects(VentadetallePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            VentadetallePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(VentadetallePeer::DATABASE_NAME);

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
     * @param Ventadetalle $obj A Ventadetalle object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdventadetalle();
            } // if key === null
            VentadetallePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Ventadetalle object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Ventadetalle) {
                $key = (string) $value->getIdventadetalle();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Ventadetalle object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(VentadetallePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Ventadetalle Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(VentadetallePeer::$instances[$key])) {
                return VentadetallePeer::$instances[$key];
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
        foreach (VentadetallePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        VentadetallePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to ventadetalle
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in VentadetallePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        VentadetallePeer::clearInstancePool();
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
        $cls = VentadetallePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = VentadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = VentadetallePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                VentadetallePeer::addInstanceToPool($obj, $key);
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
     * @return array (Ventadetalle object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = VentadetallePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = VentadetallePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + VentadetallePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = VentadetallePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            VentadetallePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related Descuento table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinDescuento(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VentadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VentadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentadetallePeer::IDDESCUENTO, DescuentoPeer::IDDESCUENTO, $join_behavior);

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
        $criteria->setPrimaryTableName(VentadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VentadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentadetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

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
        $criteria->setPrimaryTableName(VentadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VentadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentadetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

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
        $criteria->setPrimaryTableName(VentadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VentadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentadetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
     * Selects a collection of Ventadetalle objects pre-filled with their Descuento objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ventadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinDescuento(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VentadetallePeer::DATABASE_NAME);
        }

        VentadetallePeer::addSelectColumns($criteria);
        $startcol = VentadetallePeer::NUM_HYDRATE_COLUMNS;
        DescuentoPeer::addSelectColumns($criteria);

        $criteria->addJoin(VentadetallePeer::IDDESCUENTO, DescuentoPeer::IDDESCUENTO, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VentadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentadetallePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = DescuentoPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = DescuentoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = DescuentoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    DescuentoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (Ventadetalle) to $obj2 (Descuento)
                $obj2->addVentadetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ventadetalle objects pre-filled with their Productovariante objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ventadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinProductovariante(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VentadetallePeer::DATABASE_NAME);
        }

        VentadetallePeer::addSelectColumns($criteria);
        $startcol = VentadetallePeer::NUM_HYDRATE_COLUMNS;
        ProductovariantePeer::addSelectColumns($criteria);

        $criteria->addJoin(VentadetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VentadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentadetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ventadetalle) to $obj2 (Productovariante)
                $obj2->addVentadetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ventadetalle objects pre-filled with their Promocion objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ventadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinPromocion(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VentadetallePeer::DATABASE_NAME);
        }

        VentadetallePeer::addSelectColumns($criteria);
        $startcol = VentadetallePeer::NUM_HYDRATE_COLUMNS;
        PromocionPeer::addSelectColumns($criteria);

        $criteria->addJoin(VentadetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VentadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentadetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ventadetalle) to $obj2 (Promocion)
                $obj2->addVentadetalle($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ventadetalle objects pre-filled with their Venta objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ventadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinVenta(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VentadetallePeer::DATABASE_NAME);
        }

        VentadetallePeer::addSelectColumns($criteria);
        $startcol = VentadetallePeer::NUM_HYDRATE_COLUMNS;
        VentaPeer::addSelectColumns($criteria);

        $criteria->addJoin(VentadetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = VentadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentadetallePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (Ventadetalle) to $obj2 (Venta)
                $obj2->addVentadetalle($obj1);

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
        $criteria->setPrimaryTableName(VentadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(VentadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentadetallePeer::IDDESCUENTO, DescuentoPeer::IDDESCUENTO, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
     * Selects a collection of Ventadetalle objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ventadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VentadetallePeer::DATABASE_NAME);
        }

        VentadetallePeer::addSelectColumns($criteria);
        $startcol2 = VentadetallePeer::NUM_HYDRATE_COLUMNS;

        DescuentoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + DescuentoPeer::NUM_HYDRATE_COLUMNS;

        ProductovariantePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductovariantePeer::NUM_HYDRATE_COLUMNS;

        PromocionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PromocionPeer::NUM_HYDRATE_COLUMNS;

        VentaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + VentaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VentadetallePeer::IDDESCUENTO, DescuentoPeer::IDDESCUENTO, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VentadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined Descuento rows

            $key2 = DescuentoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = DescuentoPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = DescuentoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    DescuentoPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (Ventadetalle) to the collection in $obj2 (Descuento)
                $obj2->addVentadetalle($obj1);
            } // if joined row not null

            // Add objects for joined Productovariante rows

            $key3 = ProductovariantePeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = ProductovariantePeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = ProductovariantePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    ProductovariantePeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (Ventadetalle) to the collection in $obj3 (Productovariante)
                $obj3->addVentadetalle($obj1);
            } // if joined row not null

            // Add objects for joined Promocion rows

            $key4 = PromocionPeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = PromocionPeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = PromocionPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    PromocionPeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (Ventadetalle) to the collection in $obj4 (Promocion)
                $obj4->addVentadetalle($obj1);
            } // if joined row not null

            // Add objects for joined Venta rows

            $key5 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = VentaPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = VentaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    VentaPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (Ventadetalle) to the collection in $obj5 (Venta)
                $obj5->addVentadetalle($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related Descuento table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptDescuento(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VentadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VentadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentadetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
        $criteria->setPrimaryTableName(VentadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VentadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentadetallePeer::IDDESCUENTO, DescuentoPeer::IDDESCUENTO, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
        $criteria->setPrimaryTableName(VentadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VentadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentadetallePeer::IDDESCUENTO, DescuentoPeer::IDDESCUENTO, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
        $criteria->setPrimaryTableName(VentadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VentadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentadetallePeer::IDDESCUENTO, DescuentoPeer::IDDESCUENTO, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related VentadetalleRelatedByIdventadetallapadre table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptVentadetalleRelatedByIdventadetallapadre(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(VentadetallePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            VentadetallePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(VentadetallePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(VentadetallePeer::IDDESCUENTO, DescuentoPeer::IDDESCUENTO, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);

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
     * Selects a collection of Ventadetalle objects pre-filled with all related objects except Descuento.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ventadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptDescuento(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VentadetallePeer::DATABASE_NAME);
        }

        VentadetallePeer::addSelectColumns($criteria);
        $startcol2 = VentadetallePeer::NUM_HYDRATE_COLUMNS;

        ProductovariantePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + ProductovariantePeer::NUM_HYDRATE_COLUMNS;

        PromocionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PromocionPeer::NUM_HYDRATE_COLUMNS;

        VentaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + VentaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VentadetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VentadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Productovariante rows

                $key2 = ProductovariantePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = ProductovariantePeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = ProductovariantePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    ProductovariantePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ventadetalle) to the collection in $obj2 (Productovariante)
                $obj2->addVentadetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Promocion rows

                $key3 = PromocionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = PromocionPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = PromocionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    PromocionPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ventadetalle) to the collection in $obj3 (Promocion)
                $obj3->addVentadetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Venta rows

                $key4 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = VentaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = VentaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    VentaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ventadetalle) to the collection in $obj4 (Venta)
                $obj4->addVentadetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ventadetalle objects pre-filled with all related objects except Productovariante.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ventadetalle objects.
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
            $criteria->setDbName(VentadetallePeer::DATABASE_NAME);
        }

        VentadetallePeer::addSelectColumns($criteria);
        $startcol2 = VentadetallePeer::NUM_HYDRATE_COLUMNS;

        DescuentoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + DescuentoPeer::NUM_HYDRATE_COLUMNS;

        PromocionPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + PromocionPeer::NUM_HYDRATE_COLUMNS;

        VentaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + VentaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VentadetallePeer::IDDESCUENTO, DescuentoPeer::IDDESCUENTO, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VentadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Descuento rows

                $key2 = DescuentoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = DescuentoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = DescuentoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    DescuentoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ventadetalle) to the collection in $obj2 (Descuento)
                $obj2->addVentadetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Promocion rows

                $key3 = PromocionPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = PromocionPeer::getInstanceFromPool($key3);
                    if (!$obj3) {

                        $cls = PromocionPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    PromocionPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (Ventadetalle) to the collection in $obj3 (Promocion)
                $obj3->addVentadetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Venta rows

                $key4 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = VentaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = VentaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    VentaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ventadetalle) to the collection in $obj4 (Venta)
                $obj4->addVentadetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ventadetalle objects pre-filled with all related objects except Promocion.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ventadetalle objects.
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
            $criteria->setDbName(VentadetallePeer::DATABASE_NAME);
        }

        VentadetallePeer::addSelectColumns($criteria);
        $startcol2 = VentadetallePeer::NUM_HYDRATE_COLUMNS;

        DescuentoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + DescuentoPeer::NUM_HYDRATE_COLUMNS;

        ProductovariantePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductovariantePeer::NUM_HYDRATE_COLUMNS;

        VentaPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + VentaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VentadetallePeer::IDDESCUENTO, DescuentoPeer::IDDESCUENTO, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VentadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Descuento rows

                $key2 = DescuentoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = DescuentoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = DescuentoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    DescuentoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ventadetalle) to the collection in $obj2 (Descuento)
                $obj2->addVentadetalle($obj1);

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

                // Add the $obj1 (Ventadetalle) to the collection in $obj3 (Productovariante)
                $obj3->addVentadetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Venta rows

                $key4 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = VentaPeer::getInstanceFromPool($key4);
                    if (!$obj4) {

                        $cls = VentaPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    VentaPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (Ventadetalle) to the collection in $obj4 (Venta)
                $obj4->addVentadetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ventadetalle objects pre-filled with all related objects except Venta.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ventadetalle objects.
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
            $criteria->setDbName(VentadetallePeer::DATABASE_NAME);
        }

        VentadetallePeer::addSelectColumns($criteria);
        $startcol2 = VentadetallePeer::NUM_HYDRATE_COLUMNS;

        DescuentoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + DescuentoPeer::NUM_HYDRATE_COLUMNS;

        ProductovariantePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductovariantePeer::NUM_HYDRATE_COLUMNS;

        PromocionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PromocionPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VentadetallePeer::IDDESCUENTO, DescuentoPeer::IDDESCUENTO, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VentadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Descuento rows

                $key2 = DescuentoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = DescuentoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = DescuentoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    DescuentoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ventadetalle) to the collection in $obj2 (Descuento)
                $obj2->addVentadetalle($obj1);

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

                // Add the $obj1 (Ventadetalle) to the collection in $obj3 (Productovariante)
                $obj3->addVentadetalle($obj1);

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

                // Add the $obj1 (Ventadetalle) to the collection in $obj4 (Promocion)
                $obj4->addVentadetalle($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of Ventadetalle objects pre-filled with all related objects except VentadetalleRelatedByIdventadetallapadre.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of Ventadetalle objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptVentadetalleRelatedByIdventadetallapadre(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(VentadetallePeer::DATABASE_NAME);
        }

        VentadetallePeer::addSelectColumns($criteria);
        $startcol2 = VentadetallePeer::NUM_HYDRATE_COLUMNS;

        DescuentoPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + DescuentoPeer::NUM_HYDRATE_COLUMNS;

        ProductovariantePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + ProductovariantePeer::NUM_HYDRATE_COLUMNS;

        PromocionPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + PromocionPeer::NUM_HYDRATE_COLUMNS;

        VentaPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + VentaPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(VentadetallePeer::IDDESCUENTO, DescuentoPeer::IDDESCUENTO, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPRODUCTOVARIANTE, ProductovariantePeer::IDPRODUCTOVARIANTE, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDPROMOCION, PromocionPeer::IDPROMOCION, $join_behavior);

        $criteria->addJoin(VentadetallePeer::IDVENTA, VentaPeer::IDVENTA, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = VentadetallePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = VentadetallePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = VentadetallePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                VentadetallePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined Descuento rows

                $key2 = DescuentoPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = DescuentoPeer::getInstanceFromPool($key2);
                    if (!$obj2) {

                        $cls = DescuentoPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    DescuentoPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (Ventadetalle) to the collection in $obj2 (Descuento)
                $obj2->addVentadetalle($obj1);

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

                // Add the $obj1 (Ventadetalle) to the collection in $obj3 (Productovariante)
                $obj3->addVentadetalle($obj1);

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

                // Add the $obj1 (Ventadetalle) to the collection in $obj4 (Promocion)
                $obj4->addVentadetalle($obj1);

            } // if joined row is not null

                // Add objects for joined Venta rows

                $key5 = VentaPeer::getPrimaryKeyHashFromRow($row, $startcol5);
                if ($key5 !== null) {
                    $obj5 = VentaPeer::getInstanceFromPool($key5);
                    if (!$obj5) {

                        $cls = VentaPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    VentaPeer::addInstanceToPool($obj5, $key5);
                } // if $obj5 already loaded

                // Add the $obj1 (Ventadetalle) to the collection in $obj5 (Venta)
                $obj5->addVentadetalle($obj1);

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
        return Propel::getDatabaseMap(VentadetallePeer::DATABASE_NAME)->getTable(VentadetallePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseVentadetallePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseVentadetallePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \VentadetalleTableMap());
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
        return VentadetallePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Ventadetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Ventadetalle object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Ventadetalle object
        }

        if ($criteria->containsKey(VentadetallePeer::IDVENTADETALLE) && $criteria->keyContainsValue(VentadetallePeer::IDVENTADETALLE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.VentadetallePeer::IDVENTADETALLE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(VentadetallePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Ventadetalle or Criteria object.
     *
     * @param      mixed $values Criteria or Ventadetalle object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(VentadetallePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(VentadetallePeer::IDVENTADETALLE);
            $value = $criteria->remove(VentadetallePeer::IDVENTADETALLE);
            if ($value) {
                $selectCriteria->add(VentadetallePeer::IDVENTADETALLE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(VentadetallePeer::TABLE_NAME);
            }

        } else { // $values is Ventadetalle object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(VentadetallePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the ventadetalle table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += VentadetallePeer::doOnDeleteCascade(new Criteria(VentadetallePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(VentadetallePeer::TABLE_NAME, $con, VentadetallePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            VentadetallePeer::clearInstancePool();
            VentadetallePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Ventadetalle or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Ventadetalle object or primary key or array of primary keys
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
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Ventadetalle) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(VentadetallePeer::DATABASE_NAME);
            $criteria->add(VentadetallePeer::IDVENTADETALLE, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(VentadetallePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += VentadetallePeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                VentadetallePeer::clearInstancePool();
            } elseif ($values instanceof Ventadetalle) { // it's a model object
                VentadetallePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    VentadetallePeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            VentadetallePeer::clearRelatedInstancePool();
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
        $objects = VentadetallePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Ventadetalle objects
            $criteria = new Criteria(VentadetallePeer::DATABASE_NAME);

            $criteria->add(VentadetallePeer::IDVENTADETALLAPADRE, $obj->getIdventadetalle());
            $affectedRows += VentadetallePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Ventadetalle object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Ventadetalle $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(VentadetallePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(VentadetallePeer::TABLE_NAME);

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

        return BasePeer::doValidate(VentadetallePeer::DATABASE_NAME, VentadetallePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Ventadetalle
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = VentadetallePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(VentadetallePeer::DATABASE_NAME);
        $criteria->add(VentadetallePeer::IDVENTADETALLE, $pk);

        $v = VentadetallePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Ventadetalle[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(VentadetallePeer::DATABASE_NAME);
            $criteria->add(VentadetallePeer::IDVENTADETALLE, $pks, Criteria::IN);
            $objs = VentadetallePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseVentadetallePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseVentadetallePeer::buildTableMap();

