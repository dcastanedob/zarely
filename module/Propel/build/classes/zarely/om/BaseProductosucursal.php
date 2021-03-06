<?php


/**
 * Base class that represents a row from the 'productosucursal' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseProductosucursal extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProductosucursalPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProductosucursalPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idproductosucursal field.
     * @var        int
     */
    protected $idproductosucursal;

    /**
     * The value for the idproductovariante field.
     * @var        int
     */
    protected $idproductovariante;

    /**
     * The value for the idsucursal field.
     * @var        int
     */
    protected $idsucursal;

    /**
     * The value for the productosucursal_existencia field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $productosucursal_existencia;

    /**
     * The value for the productosucursal_minimo field.
     * @var        int
     */
    protected $productosucursal_minimo;

    /**
     * The value for the productosucursal_reorden field.
     * @var        int
     */
    protected $productosucursal_reorden;

    /**
     * The value for the productosucursal_precioventa field.
     * @var        string
     */
    protected $productosucursal_precioventa;

    /**
     * The value for the productosucursal_preciomayoreo field.
     * @var        string
     */
    protected $productosucursal_preciomayoreo;

    /**
     * The value for the productosucursal_estatus field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $productosucursal_estatus;

    /**
     * The value for the productosucursal_costo field.
     * @var        string
     */
    protected $productosucursal_costo;

    /**
     * The value for the productosucursal_precioventamayoreonuevo field.
     * @var        string
     */
    protected $productosucursal_precioventamayoreonuevo;

    /**
     * The value for the productosucursal_precioventanuevo field.
     * @var        string
     */
    protected $productosucursal_precioventanuevo;

    /**
     * The value for the productosucursal_precioaplicado field.
     * @var        boolean
     */
    protected $productosucursal_precioaplicado;

    /**
     * @var        Productovariante
     */
    protected $aProductovariante;

    /**
     * @var        Sucursal
     */
    protected $aSucursal;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->productosucursal_existencia = 0;
        $this->productosucursal_estatus = true;
    }

    /**
     * Initializes internal state of BaseProductosucursal object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idproductosucursal] column value.
     *
     * @return int
     */
    public function getIdproductosucursal()
    {

        return $this->idproductosucursal;
    }

    /**
     * Get the [idproductovariante] column value.
     *
     * @return int
     */
    public function getIdproductovariante()
    {

        return $this->idproductovariante;
    }

    /**
     * Get the [idsucursal] column value.
     *
     * @return int
     */
    public function getIdsucursal()
    {

        return $this->idsucursal;
    }

    /**
     * Get the [productosucursal_existencia] column value.
     *
     * @return int
     */
    public function getProductosucursalExistencia()
    {

        return $this->productosucursal_existencia;
    }

    /**
     * Get the [productosucursal_minimo] column value.
     *
     * @return int
     */
    public function getProductosucursalMinimo()
    {

        return $this->productosucursal_minimo;
    }

    /**
     * Get the [productosucursal_reorden] column value.
     *
     * @return int
     */
    public function getProductosucursalReorden()
    {

        return $this->productosucursal_reorden;
    }

    /**
     * Get the [productosucursal_precioventa] column value.
     *
     * @return string
     */
    public function getProductosucursalPrecioventa()
    {

        return $this->productosucursal_precioventa;
    }

    /**
     * Get the [productosucursal_preciomayoreo] column value.
     *
     * @return string
     */
    public function getProductosucursalPreciomayoreo()
    {

        return $this->productosucursal_preciomayoreo;
    }

    /**
     * Get the [productosucursal_estatus] column value.
     *
     * @return boolean
     */
    public function getProductosucursalEstatus()
    {

        return $this->productosucursal_estatus;
    }

    /**
     * Get the [productosucursal_costo] column value.
     *
     * @return string
     */
    public function getProductosucursalCosto()
    {

        return $this->productosucursal_costo;
    }

    /**
     * Get the [productosucursal_precioventamayoreonuevo] column value.
     *
     * @return string
     */
    public function getProductosucursalPrecioventamayoreonuevo()
    {

        return $this->productosucursal_precioventamayoreonuevo;
    }

    /**
     * Get the [productosucursal_precioventanuevo] column value.
     *
     * @return string
     */
    public function getProductosucursalPrecioventanuevo()
    {

        return $this->productosucursal_precioventanuevo;
    }

    /**
     * Get the [productosucursal_precioaplicado] column value.
     *
     * @return boolean
     */
    public function getProductosucursalPrecioaplicado()
    {

        return $this->productosucursal_precioaplicado;
    }

    /**
     * Set the value of [idproductosucursal] column.
     *
     * @param  int $v new value
     * @return Productosucursal The current object (for fluent API support)
     */
    public function setIdproductosucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproductosucursal !== $v) {
            $this->idproductosucursal = $v;
            $this->modifiedColumns[] = ProductosucursalPeer::IDPRODUCTOSUCURSAL;
        }


        return $this;
    } // setIdproductosucursal()

    /**
     * Set the value of [idproductovariante] column.
     *
     * @param  int $v new value
     * @return Productosucursal The current object (for fluent API support)
     */
    public function setIdproductovariante($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproductovariante !== $v) {
            $this->idproductovariante = $v;
            $this->modifiedColumns[] = ProductosucursalPeer::IDPRODUCTOVARIANTE;
        }

        if ($this->aProductovariante !== null && $this->aProductovariante->getIdproductovariante() !== $v) {
            $this->aProductovariante = null;
        }


        return $this;
    } // setIdproductovariante()

    /**
     * Set the value of [idsucursal] column.
     *
     * @param  int $v new value
     * @return Productosucursal The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = ProductosucursalPeer::IDSUCURSAL;
        }

        if ($this->aSucursal !== null && $this->aSucursal->getIdsucursal() !== $v) {
            $this->aSucursal = null;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Set the value of [productosucursal_existencia] column.
     *
     * @param  int $v new value
     * @return Productosucursal The current object (for fluent API support)
     */
    public function setProductosucursalExistencia($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->productosucursal_existencia !== $v) {
            $this->productosucursal_existencia = $v;
            $this->modifiedColumns[] = ProductosucursalPeer::PRODUCTOSUCURSAL_EXISTENCIA;
        }


        return $this;
    } // setProductosucursalExistencia()

    /**
     * Set the value of [productosucursal_minimo] column.
     *
     * @param  int $v new value
     * @return Productosucursal The current object (for fluent API support)
     */
    public function setProductosucursalMinimo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->productosucursal_minimo !== $v) {
            $this->productosucursal_minimo = $v;
            $this->modifiedColumns[] = ProductosucursalPeer::PRODUCTOSUCURSAL_MINIMO;
        }


        return $this;
    } // setProductosucursalMinimo()

    /**
     * Set the value of [productosucursal_reorden] column.
     *
     * @param  int $v new value
     * @return Productosucursal The current object (for fluent API support)
     */
    public function setProductosucursalReorden($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->productosucursal_reorden !== $v) {
            $this->productosucursal_reorden = $v;
            $this->modifiedColumns[] = ProductosucursalPeer::PRODUCTOSUCURSAL_REORDEN;
        }


        return $this;
    } // setProductosucursalReorden()

    /**
     * Set the value of [productosucursal_precioventa] column.
     *
     * @param  string $v new value
     * @return Productosucursal The current object (for fluent API support)
     */
    public function setProductosucursalPrecioventa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->productosucursal_precioventa !== $v) {
            $this->productosucursal_precioventa = $v;
            $this->modifiedColumns[] = ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTA;
        }


        return $this;
    } // setProductosucursalPrecioventa()

    /**
     * Set the value of [productosucursal_preciomayoreo] column.
     *
     * @param  string $v new value
     * @return Productosucursal The current object (for fluent API support)
     */
    public function setProductosucursalPreciomayoreo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->productosucursal_preciomayoreo !== $v) {
            $this->productosucursal_preciomayoreo = $v;
            $this->modifiedColumns[] = ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOMAYOREO;
        }


        return $this;
    } // setProductosucursalPreciomayoreo()

    /**
     * Sets the value of the [productosucursal_estatus] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Productosucursal The current object (for fluent API support)
     */
    public function setProductosucursalEstatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->productosucursal_estatus !== $v) {
            $this->productosucursal_estatus = $v;
            $this->modifiedColumns[] = ProductosucursalPeer::PRODUCTOSUCURSAL_ESTATUS;
        }


        return $this;
    } // setProductosucursalEstatus()

    /**
     * Set the value of [productosucursal_costo] column.
     *
     * @param  string $v new value
     * @return Productosucursal The current object (for fluent API support)
     */
    public function setProductosucursalCosto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->productosucursal_costo !== $v) {
            $this->productosucursal_costo = $v;
            $this->modifiedColumns[] = ProductosucursalPeer::PRODUCTOSUCURSAL_COSTO;
        }


        return $this;
    } // setProductosucursalCosto()

    /**
     * Set the value of [productosucursal_precioventamayoreonuevo] column.
     *
     * @param  string $v new value
     * @return Productosucursal The current object (for fluent API support)
     */
    public function setProductosucursalPrecioventamayoreonuevo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->productosucursal_precioventamayoreonuevo !== $v) {
            $this->productosucursal_precioventamayoreonuevo = $v;
            $this->modifiedColumns[] = ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTAMAYOREONUEVO;
        }


        return $this;
    } // setProductosucursalPrecioventamayoreonuevo()

    /**
     * Set the value of [productosucursal_precioventanuevo] column.
     *
     * @param  string $v new value
     * @return Productosucursal The current object (for fluent API support)
     */
    public function setProductosucursalPrecioventanuevo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->productosucursal_precioventanuevo !== $v) {
            $this->productosucursal_precioventanuevo = $v;
            $this->modifiedColumns[] = ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTANUEVO;
        }


        return $this;
    } // setProductosucursalPrecioventanuevo()

    /**
     * Sets the value of the [productosucursal_precioaplicado] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Productosucursal The current object (for fluent API support)
     */
    public function setProductosucursalPrecioaplicado($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->productosucursal_precioaplicado !== $v) {
            $this->productosucursal_precioaplicado = $v;
            $this->modifiedColumns[] = ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOAPLICADO;
        }


        return $this;
    } // setProductosucursalPrecioaplicado()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->productosucursal_existencia !== 0) {
                return false;
            }

            if ($this->productosucursal_estatus !== true) {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->idproductosucursal = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idproductovariante = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idsucursal = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->productosucursal_existencia = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->productosucursal_minimo = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->productosucursal_reorden = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->productosucursal_precioventa = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->productosucursal_preciomayoreo = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->productosucursal_estatus = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->productosucursal_costo = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->productosucursal_precioventamayoreonuevo = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->productosucursal_precioventanuevo = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->productosucursal_precioaplicado = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 13; // 13 = ProductosucursalPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Productosucursal object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

        if ($this->aProductovariante !== null && $this->idproductovariante !== $this->aProductovariante->getIdproductovariante()) {
            $this->aProductovariante = null;
        }
        if ($this->aSucursal !== null && $this->idsucursal !== $this->aSucursal->getIdsucursal()) {
            $this->aSucursal = null;
        }
    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ProductosucursalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProductosucursalPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aProductovariante = null;
            $this->aSucursal = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ProductosucursalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProductosucursalQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(ProductosucursalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                ProductosucursalPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aProductovariante !== null) {
                if ($this->aProductovariante->isModified() || $this->aProductovariante->isNew()) {
                    $affectedRows += $this->aProductovariante->save($con);
                }
                $this->setProductovariante($this->aProductovariante);
            }

            if ($this->aSucursal !== null) {
                if ($this->aSucursal->isModified() || $this->aSucursal->isNew()) {
                    $affectedRows += $this->aSucursal->save($con);
                }
                $this->setSucursal($this->aSucursal);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = ProductosucursalPeer::IDPRODUCTOSUCURSAL;
        if (null !== $this->idproductosucursal) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProductosucursalPeer::IDPRODUCTOSUCURSAL . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProductosucursalPeer::IDPRODUCTOSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idproductosucursal`';
        }
        if ($this->isColumnModified(ProductosucursalPeer::IDPRODUCTOVARIANTE)) {
            $modifiedColumns[':p' . $index++]  = '`idproductovariante`';
        }
        if ($this->isColumnModified(ProductosucursalPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_EXISTENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`productosucursal_existencia`';
        }
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_MINIMO)) {
            $modifiedColumns[':p' . $index++]  = '`productosucursal_minimo`';
        }
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_REORDEN)) {
            $modifiedColumns[':p' . $index++]  = '`productosucursal_reorden`';
        }
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTA)) {
            $modifiedColumns[':p' . $index++]  = '`productosucursal_precioventa`';
        }
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOMAYOREO)) {
            $modifiedColumns[':p' . $index++]  = '`productosucursal_preciomayoreo`';
        }
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`productosucursal_estatus`';
        }
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_COSTO)) {
            $modifiedColumns[':p' . $index++]  = '`productosucursal_costo`';
        }
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTAMAYOREONUEVO)) {
            $modifiedColumns[':p' . $index++]  = '`productosucursal_precioventamayoreonuevo`';
        }
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTANUEVO)) {
            $modifiedColumns[':p' . $index++]  = '`productosucursal_precioventanuevo`';
        }
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOAPLICADO)) {
            $modifiedColumns[':p' . $index++]  = '`productosucursal_precioaplicado`';
        }

        $sql = sprintf(
            'INSERT INTO `productosucursal` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idproductosucursal`':
                        $stmt->bindValue($identifier, $this->idproductosucursal, PDO::PARAM_INT);
                        break;
                    case '`idproductovariante`':
                        $stmt->bindValue($identifier, $this->idproductovariante, PDO::PARAM_INT);
                        break;
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`productosucursal_existencia`':
                        $stmt->bindValue($identifier, $this->productosucursal_existencia, PDO::PARAM_INT);
                        break;
                    case '`productosucursal_minimo`':
                        $stmt->bindValue($identifier, $this->productosucursal_minimo, PDO::PARAM_INT);
                        break;
                    case '`productosucursal_reorden`':
                        $stmt->bindValue($identifier, $this->productosucursal_reorden, PDO::PARAM_INT);
                        break;
                    case '`productosucursal_precioventa`':
                        $stmt->bindValue($identifier, $this->productosucursal_precioventa, PDO::PARAM_STR);
                        break;
                    case '`productosucursal_preciomayoreo`':
                        $stmt->bindValue($identifier, $this->productosucursal_preciomayoreo, PDO::PARAM_STR);
                        break;
                    case '`productosucursal_estatus`':
                        $stmt->bindValue($identifier, (int) $this->productosucursal_estatus, PDO::PARAM_INT);
                        break;
                    case '`productosucursal_costo`':
                        $stmt->bindValue($identifier, $this->productosucursal_costo, PDO::PARAM_STR);
                        break;
                    case '`productosucursal_precioventamayoreonuevo`':
                        $stmt->bindValue($identifier, $this->productosucursal_precioventamayoreonuevo, PDO::PARAM_STR);
                        break;
                    case '`productosucursal_precioventanuevo`':
                        $stmt->bindValue($identifier, $this->productosucursal_precioventanuevo, PDO::PARAM_STR);
                        break;
                    case '`productosucursal_precioaplicado`':
                        $stmt->bindValue($identifier, (int) $this->productosucursal_precioaplicado, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdproductosucursal($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aProductovariante !== null) {
                if (!$this->aProductovariante->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProductovariante->getValidationFailures());
                }
            }

            if ($this->aSucursal !== null) {
                if (!$this->aSucursal->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSucursal->getValidationFailures());
                }
            }


            if (($retval = ProductosucursalPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ProductosucursalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdproductosucursal();
                break;
            case 1:
                return $this->getIdproductovariante();
                break;
            case 2:
                return $this->getIdsucursal();
                break;
            case 3:
                return $this->getProductosucursalExistencia();
                break;
            case 4:
                return $this->getProductosucursalMinimo();
                break;
            case 5:
                return $this->getProductosucursalReorden();
                break;
            case 6:
                return $this->getProductosucursalPrecioventa();
                break;
            case 7:
                return $this->getProductosucursalPreciomayoreo();
                break;
            case 8:
                return $this->getProductosucursalEstatus();
                break;
            case 9:
                return $this->getProductosucursalCosto();
                break;
            case 10:
                return $this->getProductosucursalPrecioventamayoreonuevo();
                break;
            case 11:
                return $this->getProductosucursalPrecioventanuevo();
                break;
            case 12:
                return $this->getProductosucursalPrecioaplicado();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['Productosucursal'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Productosucursal'][$this->getPrimaryKey()] = true;
        $keys = ProductosucursalPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdproductosucursal(),
            $keys[1] => $this->getIdproductovariante(),
            $keys[2] => $this->getIdsucursal(),
            $keys[3] => $this->getProductosucursalExistencia(),
            $keys[4] => $this->getProductosucursalMinimo(),
            $keys[5] => $this->getProductosucursalReorden(),
            $keys[6] => $this->getProductosucursalPrecioventa(),
            $keys[7] => $this->getProductosucursalPreciomayoreo(),
            $keys[8] => $this->getProductosucursalEstatus(),
            $keys[9] => $this->getProductosucursalCosto(),
            $keys[10] => $this->getProductosucursalPrecioventamayoreonuevo(),
            $keys[11] => $this->getProductosucursalPrecioventanuevo(),
            $keys[12] => $this->getProductosucursalPrecioaplicado(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aProductovariante) {
                $result['Productovariante'] = $this->aProductovariante->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSucursal) {
                $result['Sucursal'] = $this->aSucursal->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = ProductosucursalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdproductosucursal($value);
                break;
            case 1:
                $this->setIdproductovariante($value);
                break;
            case 2:
                $this->setIdsucursal($value);
                break;
            case 3:
                $this->setProductosucursalExistencia($value);
                break;
            case 4:
                $this->setProductosucursalMinimo($value);
                break;
            case 5:
                $this->setProductosucursalReorden($value);
                break;
            case 6:
                $this->setProductosucursalPrecioventa($value);
                break;
            case 7:
                $this->setProductosucursalPreciomayoreo($value);
                break;
            case 8:
                $this->setProductosucursalEstatus($value);
                break;
            case 9:
                $this->setProductosucursalCosto($value);
                break;
            case 10:
                $this->setProductosucursalPrecioventamayoreonuevo($value);
                break;
            case 11:
                $this->setProductosucursalPrecioventanuevo($value);
                break;
            case 12:
                $this->setProductosucursalPrecioaplicado($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = ProductosucursalPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdproductosucursal($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdproductovariante($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdsucursal($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setProductosucursalExistencia($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setProductosucursalMinimo($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setProductosucursalReorden($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setProductosucursalPrecioventa($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setProductosucursalPreciomayoreo($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setProductosucursalEstatus($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setProductosucursalCosto($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setProductosucursalPrecioventamayoreonuevo($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setProductosucursalPrecioventanuevo($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setProductosucursalPrecioaplicado($arr[$keys[12]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProductosucursalPeer::DATABASE_NAME);

        if ($this->isColumnModified(ProductosucursalPeer::IDPRODUCTOSUCURSAL)) $criteria->add(ProductosucursalPeer::IDPRODUCTOSUCURSAL, $this->idproductosucursal);
        if ($this->isColumnModified(ProductosucursalPeer::IDPRODUCTOVARIANTE)) $criteria->add(ProductosucursalPeer::IDPRODUCTOVARIANTE, $this->idproductovariante);
        if ($this->isColumnModified(ProductosucursalPeer::IDSUCURSAL)) $criteria->add(ProductosucursalPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_EXISTENCIA)) $criteria->add(ProductosucursalPeer::PRODUCTOSUCURSAL_EXISTENCIA, $this->productosucursal_existencia);
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_MINIMO)) $criteria->add(ProductosucursalPeer::PRODUCTOSUCURSAL_MINIMO, $this->productosucursal_minimo);
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_REORDEN)) $criteria->add(ProductosucursalPeer::PRODUCTOSUCURSAL_REORDEN, $this->productosucursal_reorden);
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTA)) $criteria->add(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTA, $this->productosucursal_precioventa);
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOMAYOREO)) $criteria->add(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOMAYOREO, $this->productosucursal_preciomayoreo);
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_ESTATUS)) $criteria->add(ProductosucursalPeer::PRODUCTOSUCURSAL_ESTATUS, $this->productosucursal_estatus);
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_COSTO)) $criteria->add(ProductosucursalPeer::PRODUCTOSUCURSAL_COSTO, $this->productosucursal_costo);
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTAMAYOREONUEVO)) $criteria->add(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTAMAYOREONUEVO, $this->productosucursal_precioventamayoreonuevo);
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTANUEVO)) $criteria->add(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTANUEVO, $this->productosucursal_precioventanuevo);
        if ($this->isColumnModified(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOAPLICADO)) $criteria->add(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOAPLICADO, $this->productosucursal_precioaplicado);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(ProductosucursalPeer::DATABASE_NAME);
        $criteria->add(ProductosucursalPeer::IDPRODUCTOSUCURSAL, $this->idproductosucursal);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdproductosucursal();
    }

    /**
     * Generic method to set the primary key (idproductosucursal column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdproductosucursal($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdproductosucursal();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Productosucursal (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdproductovariante($this->getIdproductovariante());
        $copyObj->setIdsucursal($this->getIdsucursal());
        $copyObj->setProductosucursalExistencia($this->getProductosucursalExistencia());
        $copyObj->setProductosucursalMinimo($this->getProductosucursalMinimo());
        $copyObj->setProductosucursalReorden($this->getProductosucursalReorden());
        $copyObj->setProductosucursalPrecioventa($this->getProductosucursalPrecioventa());
        $copyObj->setProductosucursalPreciomayoreo($this->getProductosucursalPreciomayoreo());
        $copyObj->setProductosucursalEstatus($this->getProductosucursalEstatus());
        $copyObj->setProductosucursalCosto($this->getProductosucursalCosto());
        $copyObj->setProductosucursalPrecioventamayoreonuevo($this->getProductosucursalPrecioventamayoreonuevo());
        $copyObj->setProductosucursalPrecioventanuevo($this->getProductosucursalPrecioventanuevo());
        $copyObj->setProductosucursalPrecioaplicado($this->getProductosucursalPrecioaplicado());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdproductosucursal(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Productosucursal Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return ProductosucursalPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProductosucursalPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Productovariante object.
     *
     * @param                  Productovariante $v
     * @return Productosucursal The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProductovariante(Productovariante $v = null)
    {
        if ($v === null) {
            $this->setIdproductovariante(NULL);
        } else {
            $this->setIdproductovariante($v->getIdproductovariante());
        }

        $this->aProductovariante = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Productovariante object, it will not be re-added.
        if ($v !== null) {
            $v->addProductosucursal($this);
        }


        return $this;
    }


    /**
     * Get the associated Productovariante object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Productovariante The associated Productovariante object.
     * @throws PropelException
     */
    public function getProductovariante(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProductovariante === null && ($this->idproductovariante !== null) && $doQuery) {
            $this->aProductovariante = ProductovarianteQuery::create()->findPk($this->idproductovariante, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProductovariante->addProductosucursals($this);
             */
        }

        return $this->aProductovariante;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Productosucursal The current object (for fluent API support)
     * @throws PropelException
     */
    public function setSucursal(Sucursal $v = null)
    {
        if ($v === null) {
            $this->setIdsucursal(NULL);
        } else {
            $this->setIdsucursal($v->getIdsucursal());
        }

        $this->aSucursal = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Sucursal object, it will not be re-added.
        if ($v !== null) {
            $v->addProductosucursal($this);
        }


        return $this;
    }


    /**
     * Get the associated Sucursal object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Sucursal The associated Sucursal object.
     * @throws PropelException
     */
    public function getSucursal(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aSucursal === null && ($this->idsucursal !== null) && $doQuery) {
            $this->aSucursal = SucursalQuery::create()->findPk($this->idsucursal, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSucursal->addProductosucursals($this);
             */
        }

        return $this->aSucursal;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idproductosucursal = null;
        $this->idproductovariante = null;
        $this->idsucursal = null;
        $this->productosucursal_existencia = null;
        $this->productosucursal_minimo = null;
        $this->productosucursal_reorden = null;
        $this->productosucursal_precioventa = null;
        $this->productosucursal_preciomayoreo = null;
        $this->productosucursal_estatus = null;
        $this->productosucursal_costo = null;
        $this->productosucursal_precioventamayoreonuevo = null;
        $this->productosucursal_precioventanuevo = null;
        $this->productosucursal_precioaplicado = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;
            if ($this->aProductovariante instanceof Persistent) {
              $this->aProductovariante->clearAllReferences($deep);
            }
            if ($this->aSucursal instanceof Persistent) {
              $this->aSucursal->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aProductovariante = null;
        $this->aSucursal = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProductosucursalPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
