<?php


/**
 * Base class that represents a row from the 'productovariante' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseProductovariante extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProductovariantePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProductovariantePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idproductovariante field.
     * @var        int
     */
    protected $idproductovariante;

    /**
     * The value for the idproducto field.
     * @var        int
     */
    protected $idproducto;

    /**
     * The value for the idproductocolor field.
     * @var        int
     */
    protected $idproductocolor;

    /**
     * The value for the idproductomaterial field.
     * @var        int
     */
    protected $idproductomaterial;

    /**
     * The value for the productovariante_codigobarras field.
     * @var        string
     */
    protected $productovariante_codigobarras;

    /**
     * The value for the productovariante_talla field.
     * @var        string
     */
    protected $productovariante_talla;

    /**
     * The value for the productovariante_tallatipo field.
     * @var        string
     */
    protected $productovariante_tallatipo;

    /**
     * The value for the productovariante_estatus field.
     * Note: this column has a database default value of: true
     * @var        boolean
     */
    protected $productovariante_estatus;

    /**
     * @var        Producto
     */
    protected $aProducto;

    /**
     * @var        Productocolor
     */
    protected $aProductocolor;

    /**
     * @var        Productomaterial
     */
    protected $aProductomaterial;

    /**
     * @var        PropelObjectCollection|Compradetalle[] Collection to store aggregation of Compradetalle objects.
     */
    protected $collCompradetalles;
    protected $collCompradetallesPartial;

    /**
     * @var        PropelObjectCollection|Descuentodetalle[] Collection to store aggregation of Descuentodetalle objects.
     */
    protected $collDescuentodetalles;
    protected $collDescuentodetallesPartial;

    /**
     * @var        PropelObjectCollection|Devoluciondetalle[] Collection to store aggregation of Devoluciondetalle objects.
     */
    protected $collDevoluciondetalles;
    protected $collDevoluciondetallesPartial;

    /**
     * @var        PropelObjectCollection|Pedido[] Collection to store aggregation of Pedido objects.
     */
    protected $collPedidos;
    protected $collPedidosPartial;

    /**
     * @var        PropelObjectCollection|Pedidomayoristadetalle[] Collection to store aggregation of Pedidomayoristadetalle objects.
     */
    protected $collPedidomayoristadetalles;
    protected $collPedidomayoristadetallesPartial;

    /**
     * @var        PropelObjectCollection|Productosucursal[] Collection to store aggregation of Productosucursal objects.
     */
    protected $collProductosucursals;
    protected $collProductosucursalsPartial;

    /**
     * @var        PropelObjectCollection|Promociondetalle[] Collection to store aggregation of Promociondetalle objects.
     */
    protected $collPromociondetalles;
    protected $collPromociondetallesPartial;

    /**
     * @var        PropelObjectCollection|Transferenciadetalle[] Collection to store aggregation of Transferenciadetalle objects.
     */
    protected $collTransferenciadetalles;
    protected $collTransferenciadetallesPartial;

    /**
     * @var        PropelObjectCollection|Ventadetalle[] Collection to store aggregation of Ventadetalle objects.
     */
    protected $collVentadetalles;
    protected $collVentadetallesPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $compradetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $descuentodetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $devoluciondetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $pedidosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $pedidomayoristadetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productosucursalsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $promociondetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $transferenciadetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ventadetallesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->productovariante_estatus = true;
    }

    /**
     * Initializes internal state of BaseProductovariante object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
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
     * Get the [idproducto] column value.
     *
     * @return int
     */
    public function getIdproducto()
    {

        return $this->idproducto;
    }

    /**
     * Get the [idproductocolor] column value.
     *
     * @return int
     */
    public function getIdproductocolor()
    {

        return $this->idproductocolor;
    }

    /**
     * Get the [idproductomaterial] column value.
     *
     * @return int
     */
    public function getIdproductomaterial()
    {

        return $this->idproductomaterial;
    }

    /**
     * Get the [productovariante_codigobarras] column value.
     *
     * @return string
     */
    public function getProductovarianteCodigobarras()
    {

        return $this->productovariante_codigobarras;
    }

    /**
     * Get the [productovariante_talla] column value.
     *
     * @return string
     */
    public function getProductovarianteTalla()
    {

        return $this->productovariante_talla;
    }

    /**
     * Get the [productovariante_tallatipo] column value.
     *
     * @return string
     */
    public function getProductovarianteTallatipo()
    {

        return $this->productovariante_tallatipo;
    }

    /**
     * Get the [productovariante_estatus] column value.
     *
     * @return boolean
     */
    public function getProductovarianteEstatus()
    {

        return $this->productovariante_estatus;
    }

    /**
     * Set the value of [idproductovariante] column.
     *
     * @param  int $v new value
     * @return Productovariante The current object (for fluent API support)
     */
    public function setIdproductovariante($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproductovariante !== $v) {
            $this->idproductovariante = $v;
            $this->modifiedColumns[] = ProductovariantePeer::IDPRODUCTOVARIANTE;
        }


        return $this;
    } // setIdproductovariante()

    /**
     * Set the value of [idproducto] column.
     *
     * @param  int $v new value
     * @return Productovariante The current object (for fluent API support)
     */
    public function setIdproducto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproducto !== $v) {
            $this->idproducto = $v;
            $this->modifiedColumns[] = ProductovariantePeer::IDPRODUCTO;
        }

        if ($this->aProducto !== null && $this->aProducto->getIdproducto() !== $v) {
            $this->aProducto = null;
        }


        return $this;
    } // setIdproducto()

    /**
     * Set the value of [idproductocolor] column.
     *
     * @param  int $v new value
     * @return Productovariante The current object (for fluent API support)
     */
    public function setIdproductocolor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproductocolor !== $v) {
            $this->idproductocolor = $v;
            $this->modifiedColumns[] = ProductovariantePeer::IDPRODUCTOCOLOR;
        }

        if ($this->aProductocolor !== null && $this->aProductocolor->getIdproductocolor() !== $v) {
            $this->aProductocolor = null;
        }


        return $this;
    } // setIdproductocolor()

    /**
     * Set the value of [idproductomaterial] column.
     *
     * @param  int $v new value
     * @return Productovariante The current object (for fluent API support)
     */
    public function setIdproductomaterial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproductomaterial !== $v) {
            $this->idproductomaterial = $v;
            $this->modifiedColumns[] = ProductovariantePeer::IDPRODUCTOMATERIAL;
        }

        if ($this->aProductomaterial !== null && $this->aProductomaterial->getIdproductomaterial() !== $v) {
            $this->aProductomaterial = null;
        }


        return $this;
    } // setIdproductomaterial()

    /**
     * Set the value of [productovariante_codigobarras] column.
     *
     * @param  string $v new value
     * @return Productovariante The current object (for fluent API support)
     */
    public function setProductovarianteCodigobarras($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->productovariante_codigobarras !== $v) {
            $this->productovariante_codigobarras = $v;
            $this->modifiedColumns[] = ProductovariantePeer::PRODUCTOVARIANTE_CODIGOBARRAS;
        }


        return $this;
    } // setProductovarianteCodigobarras()

    /**
     * Set the value of [productovariante_talla] column.
     *
     * @param  string $v new value
     * @return Productovariante The current object (for fluent API support)
     */
    public function setProductovarianteTalla($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->productovariante_talla !== $v) {
            $this->productovariante_talla = $v;
            $this->modifiedColumns[] = ProductovariantePeer::PRODUCTOVARIANTE_TALLA;
        }


        return $this;
    } // setProductovarianteTalla()

    /**
     * Set the value of [productovariante_tallatipo] column.
     *
     * @param  string $v new value
     * @return Productovariante The current object (for fluent API support)
     */
    public function setProductovarianteTallatipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->productovariante_tallatipo !== $v) {
            $this->productovariante_tallatipo = $v;
            $this->modifiedColumns[] = ProductovariantePeer::PRODUCTOVARIANTE_TALLATIPO;
        }


        return $this;
    } // setProductovarianteTallatipo()

    /**
     * Sets the value of the [productovariante_estatus] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Productovariante The current object (for fluent API support)
     */
    public function setProductovarianteEstatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->productovariante_estatus !== $v) {
            $this->productovariante_estatus = $v;
            $this->modifiedColumns[] = ProductovariantePeer::PRODUCTOVARIANTE_ESTATUS;
        }


        return $this;
    } // setProductovarianteEstatus()

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
            if ($this->productovariante_estatus !== true) {
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

            $this->idproductovariante = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idproducto = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idproductocolor = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idproductomaterial = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->productovariante_codigobarras = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->productovariante_talla = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->productovariante_tallatipo = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->productovariante_estatus = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = ProductovariantePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Productovariante object", $e);
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

        if ($this->aProducto !== null && $this->idproducto !== $this->aProducto->getIdproducto()) {
            $this->aProducto = null;
        }
        if ($this->aProductocolor !== null && $this->idproductocolor !== $this->aProductocolor->getIdproductocolor()) {
            $this->aProductocolor = null;
        }
        if ($this->aProductomaterial !== null && $this->idproductomaterial !== $this->aProductomaterial->getIdproductomaterial()) {
            $this->aProductomaterial = null;
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
            $con = Propel::getConnection(ProductovariantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProductovariantePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aProducto = null;
            $this->aProductocolor = null;
            $this->aProductomaterial = null;
            $this->collCompradetalles = null;

            $this->collDescuentodetalles = null;

            $this->collDevoluciondetalles = null;

            $this->collPedidos = null;

            $this->collPedidomayoristadetalles = null;

            $this->collProductosucursals = null;

            $this->collPromociondetalles = null;

            $this->collTransferenciadetalles = null;

            $this->collVentadetalles = null;

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
            $con = Propel::getConnection(ProductovariantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProductovarianteQuery::create()
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
            $con = Propel::getConnection(ProductovariantePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ProductovariantePeer::addInstanceToPool($this);
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

            if ($this->aProducto !== null) {
                if ($this->aProducto->isModified() || $this->aProducto->isNew()) {
                    $affectedRows += $this->aProducto->save($con);
                }
                $this->setProducto($this->aProducto);
            }

            if ($this->aProductocolor !== null) {
                if ($this->aProductocolor->isModified() || $this->aProductocolor->isNew()) {
                    $affectedRows += $this->aProductocolor->save($con);
                }
                $this->setProductocolor($this->aProductocolor);
            }

            if ($this->aProductomaterial !== null) {
                if ($this->aProductomaterial->isModified() || $this->aProductomaterial->isNew()) {
                    $affectedRows += $this->aProductomaterial->save($con);
                }
                $this->setProductomaterial($this->aProductomaterial);
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

            if ($this->compradetallesScheduledForDeletion !== null) {
                if (!$this->compradetallesScheduledForDeletion->isEmpty()) {
                    CompradetalleQuery::create()
                        ->filterByPrimaryKeys($this->compradetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->compradetallesScheduledForDeletion = null;
                }
            }

            if ($this->collCompradetalles !== null) {
                foreach ($this->collCompradetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->descuentodetallesScheduledForDeletion !== null) {
                if (!$this->descuentodetallesScheduledForDeletion->isEmpty()) {
                    DescuentodetalleQuery::create()
                        ->filterByPrimaryKeys($this->descuentodetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->descuentodetallesScheduledForDeletion = null;
                }
            }

            if ($this->collDescuentodetalles !== null) {
                foreach ($this->collDescuentodetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->devoluciondetallesScheduledForDeletion !== null) {
                if (!$this->devoluciondetallesScheduledForDeletion->isEmpty()) {
                    DevoluciondetalleQuery::create()
                        ->filterByPrimaryKeys($this->devoluciondetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->devoluciondetallesScheduledForDeletion = null;
                }
            }

            if ($this->collDevoluciondetalles !== null) {
                foreach ($this->collDevoluciondetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->pedidosScheduledForDeletion !== null) {
                if (!$this->pedidosScheduledForDeletion->isEmpty()) {
                    PedidoQuery::create()
                        ->filterByPrimaryKeys($this->pedidosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->pedidosScheduledForDeletion = null;
                }
            }

            if ($this->collPedidos !== null) {
                foreach ($this->collPedidos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->pedidomayoristadetallesScheduledForDeletion !== null) {
                if (!$this->pedidomayoristadetallesScheduledForDeletion->isEmpty()) {
                    PedidomayoristadetalleQuery::create()
                        ->filterByPrimaryKeys($this->pedidomayoristadetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->pedidomayoristadetallesScheduledForDeletion = null;
                }
            }

            if ($this->collPedidomayoristadetalles !== null) {
                foreach ($this->collPedidomayoristadetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->productosucursalsScheduledForDeletion !== null) {
                if (!$this->productosucursalsScheduledForDeletion->isEmpty()) {
                    ProductosucursalQuery::create()
                        ->filterByPrimaryKeys($this->productosucursalsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->productosucursalsScheduledForDeletion = null;
                }
            }

            if ($this->collProductosucursals !== null) {
                foreach ($this->collProductosucursals as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->promociondetallesScheduledForDeletion !== null) {
                if (!$this->promociondetallesScheduledForDeletion->isEmpty()) {
                    PromociondetalleQuery::create()
                        ->filterByPrimaryKeys($this->promociondetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->promociondetallesScheduledForDeletion = null;
                }
            }

            if ($this->collPromociondetalles !== null) {
                foreach ($this->collPromociondetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->transferenciadetallesScheduledForDeletion !== null) {
                if (!$this->transferenciadetallesScheduledForDeletion->isEmpty()) {
                    TransferenciadetalleQuery::create()
                        ->filterByPrimaryKeys($this->transferenciadetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->transferenciadetallesScheduledForDeletion = null;
                }
            }

            if ($this->collTransferenciadetalles !== null) {
                foreach ($this->collTransferenciadetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ventadetallesScheduledForDeletion !== null) {
                if (!$this->ventadetallesScheduledForDeletion->isEmpty()) {
                    VentadetalleQuery::create()
                        ->filterByPrimaryKeys($this->ventadetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ventadetallesScheduledForDeletion = null;
                }
            }

            if ($this->collVentadetalles !== null) {
                foreach ($this->collVentadetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = ProductovariantePeer::IDPRODUCTOVARIANTE;
        if (null !== $this->idproductovariante) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProductovariantePeer::IDPRODUCTOVARIANTE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProductovariantePeer::IDPRODUCTOVARIANTE)) {
            $modifiedColumns[':p' . $index++]  = '`idproductovariante`';
        }
        if ($this->isColumnModified(ProductovariantePeer::IDPRODUCTO)) {
            $modifiedColumns[':p' . $index++]  = '`idproducto`';
        }
        if ($this->isColumnModified(ProductovariantePeer::IDPRODUCTOCOLOR)) {
            $modifiedColumns[':p' . $index++]  = '`idproductocolor`';
        }
        if ($this->isColumnModified(ProductovariantePeer::IDPRODUCTOMATERIAL)) {
            $modifiedColumns[':p' . $index++]  = '`idproductomaterial`';
        }
        if ($this->isColumnModified(ProductovariantePeer::PRODUCTOVARIANTE_CODIGOBARRAS)) {
            $modifiedColumns[':p' . $index++]  = '`productovariante_codigobarras`';
        }
        if ($this->isColumnModified(ProductovariantePeer::PRODUCTOVARIANTE_TALLA)) {
            $modifiedColumns[':p' . $index++]  = '`productovariante_talla`';
        }
        if ($this->isColumnModified(ProductovariantePeer::PRODUCTOVARIANTE_TALLATIPO)) {
            $modifiedColumns[':p' . $index++]  = '`productovariante_tallatipo`';
        }
        if ($this->isColumnModified(ProductovariantePeer::PRODUCTOVARIANTE_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`productovariante_estatus`';
        }

        $sql = sprintf(
            'INSERT INTO `productovariante` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idproductovariante`':
                        $stmt->bindValue($identifier, $this->idproductovariante, PDO::PARAM_INT);
                        break;
                    case '`idproducto`':
                        $stmt->bindValue($identifier, $this->idproducto, PDO::PARAM_INT);
                        break;
                    case '`idproductocolor`':
                        $stmt->bindValue($identifier, $this->idproductocolor, PDO::PARAM_INT);
                        break;
                    case '`idproductomaterial`':
                        $stmt->bindValue($identifier, $this->idproductomaterial, PDO::PARAM_INT);
                        break;
                    case '`productovariante_codigobarras`':
                        $stmt->bindValue($identifier, $this->productovariante_codigobarras, PDO::PARAM_STR);
                        break;
                    case '`productovariante_talla`':
                        $stmt->bindValue($identifier, $this->productovariante_talla, PDO::PARAM_STR);
                        break;
                    case '`productovariante_tallatipo`':
                        $stmt->bindValue($identifier, $this->productovariante_tallatipo, PDO::PARAM_STR);
                        break;
                    case '`productovariante_estatus`':
                        $stmt->bindValue($identifier, (int) $this->productovariante_estatus, PDO::PARAM_INT);
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
        $this->setIdproductovariante($pk);

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

            if ($this->aProducto !== null) {
                if (!$this->aProducto->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProducto->getValidationFailures());
                }
            }

            if ($this->aProductocolor !== null) {
                if (!$this->aProductocolor->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProductocolor->getValidationFailures());
                }
            }

            if ($this->aProductomaterial !== null) {
                if (!$this->aProductomaterial->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProductomaterial->getValidationFailures());
                }
            }


            if (($retval = ProductovariantePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCompradetalles !== null) {
                    foreach ($this->collCompradetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collDescuentodetalles !== null) {
                    foreach ($this->collDescuentodetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collDevoluciondetalles !== null) {
                    foreach ($this->collDevoluciondetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPedidos !== null) {
                    foreach ($this->collPedidos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPedidomayoristadetalles !== null) {
                    foreach ($this->collPedidomayoristadetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProductosucursals !== null) {
                    foreach ($this->collProductosucursals as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPromociondetalles !== null) {
                    foreach ($this->collPromociondetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTransferenciadetalles !== null) {
                    foreach ($this->collTransferenciadetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVentadetalles !== null) {
                    foreach ($this->collVentadetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = ProductovariantePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdproductovariante();
                break;
            case 1:
                return $this->getIdproducto();
                break;
            case 2:
                return $this->getIdproductocolor();
                break;
            case 3:
                return $this->getIdproductomaterial();
                break;
            case 4:
                return $this->getProductovarianteCodigobarras();
                break;
            case 5:
                return $this->getProductovarianteTalla();
                break;
            case 6:
                return $this->getProductovarianteTallatipo();
                break;
            case 7:
                return $this->getProductovarianteEstatus();
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
        if (isset($alreadyDumpedObjects['Productovariante'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Productovariante'][$this->getPrimaryKey()] = true;
        $keys = ProductovariantePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdproductovariante(),
            $keys[1] => $this->getIdproducto(),
            $keys[2] => $this->getIdproductocolor(),
            $keys[3] => $this->getIdproductomaterial(),
            $keys[4] => $this->getProductovarianteCodigobarras(),
            $keys[5] => $this->getProductovarianteTalla(),
            $keys[6] => $this->getProductovarianteTallatipo(),
            $keys[7] => $this->getProductovarianteEstatus(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aProducto) {
                $result['Producto'] = $this->aProducto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProductocolor) {
                $result['Productocolor'] = $this->aProductocolor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProductomaterial) {
                $result['Productomaterial'] = $this->aProductomaterial->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCompradetalles) {
                $result['Compradetalles'] = $this->collCompradetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDescuentodetalles) {
                $result['Descuentodetalles'] = $this->collDescuentodetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDevoluciondetalles) {
                $result['Devoluciondetalles'] = $this->collDevoluciondetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPedidos) {
                $result['Pedidos'] = $this->collPedidos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPedidomayoristadetalles) {
                $result['Pedidomayoristadetalles'] = $this->collPedidomayoristadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductosucursals) {
                $result['Productosucursals'] = $this->collProductosucursals->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPromociondetalles) {
                $result['Promociondetalles'] = $this->collPromociondetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTransferenciadetalles) {
                $result['Transferenciadetalles'] = $this->collTransferenciadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVentadetalles) {
                $result['Ventadetalles'] = $this->collVentadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ProductovariantePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdproductovariante($value);
                break;
            case 1:
                $this->setIdproducto($value);
                break;
            case 2:
                $this->setIdproductocolor($value);
                break;
            case 3:
                $this->setIdproductomaterial($value);
                break;
            case 4:
                $this->setProductovarianteCodigobarras($value);
                break;
            case 5:
                $this->setProductovarianteTalla($value);
                break;
            case 6:
                $this->setProductovarianteTallatipo($value);
                break;
            case 7:
                $this->setProductovarianteEstatus($value);
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
        $keys = ProductovariantePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdproductovariante($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdproducto($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdproductocolor($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdproductomaterial($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setProductovarianteCodigobarras($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setProductovarianteTalla($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setProductovarianteTallatipo($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setProductovarianteEstatus($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProductovariantePeer::DATABASE_NAME);

        if ($this->isColumnModified(ProductovariantePeer::IDPRODUCTOVARIANTE)) $criteria->add(ProductovariantePeer::IDPRODUCTOVARIANTE, $this->idproductovariante);
        if ($this->isColumnModified(ProductovariantePeer::IDPRODUCTO)) $criteria->add(ProductovariantePeer::IDPRODUCTO, $this->idproducto);
        if ($this->isColumnModified(ProductovariantePeer::IDPRODUCTOCOLOR)) $criteria->add(ProductovariantePeer::IDPRODUCTOCOLOR, $this->idproductocolor);
        if ($this->isColumnModified(ProductovariantePeer::IDPRODUCTOMATERIAL)) $criteria->add(ProductovariantePeer::IDPRODUCTOMATERIAL, $this->idproductomaterial);
        if ($this->isColumnModified(ProductovariantePeer::PRODUCTOVARIANTE_CODIGOBARRAS)) $criteria->add(ProductovariantePeer::PRODUCTOVARIANTE_CODIGOBARRAS, $this->productovariante_codigobarras);
        if ($this->isColumnModified(ProductovariantePeer::PRODUCTOVARIANTE_TALLA)) $criteria->add(ProductovariantePeer::PRODUCTOVARIANTE_TALLA, $this->productovariante_talla);
        if ($this->isColumnModified(ProductovariantePeer::PRODUCTOVARIANTE_TALLATIPO)) $criteria->add(ProductovariantePeer::PRODUCTOVARIANTE_TALLATIPO, $this->productovariante_tallatipo);
        if ($this->isColumnModified(ProductovariantePeer::PRODUCTOVARIANTE_ESTATUS)) $criteria->add(ProductovariantePeer::PRODUCTOVARIANTE_ESTATUS, $this->productovariante_estatus);

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
        $criteria = new Criteria(ProductovariantePeer::DATABASE_NAME);
        $criteria->add(ProductovariantePeer::IDPRODUCTOVARIANTE, $this->idproductovariante);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdproductovariante();
    }

    /**
     * Generic method to set the primary key (idproductovariante column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdproductovariante($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdproductovariante();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Productovariante (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdproducto($this->getIdproducto());
        $copyObj->setIdproductocolor($this->getIdproductocolor());
        $copyObj->setIdproductomaterial($this->getIdproductomaterial());
        $copyObj->setProductovarianteCodigobarras($this->getProductovarianteCodigobarras());
        $copyObj->setProductovarianteTalla($this->getProductovarianteTalla());
        $copyObj->setProductovarianteTallatipo($this->getProductovarianteTallatipo());
        $copyObj->setProductovarianteEstatus($this->getProductovarianteEstatus());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCompradetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCompradetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getDescuentodetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDescuentodetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getDevoluciondetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDevoluciondetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPedidos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPedido($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPedidomayoristadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPedidomayoristadetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProductosucursals() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProductosucursal($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPromociondetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPromociondetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTransferenciadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTransferenciadetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVentadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVentadetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdproductovariante(NULL); // this is a auto-increment column, so set to default value
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
     * @return Productovariante Clone of current object.
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
     * @return ProductovariantePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProductovariantePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Producto object.
     *
     * @param                  Producto $v
     * @return Productovariante The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProducto(Producto $v = null)
    {
        if ($v === null) {
            $this->setIdproducto(NULL);
        } else {
            $this->setIdproducto($v->getIdproducto());
        }

        $this->aProducto = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Producto object, it will not be re-added.
        if ($v !== null) {
            $v->addProductovariante($this);
        }


        return $this;
    }


    /**
     * Get the associated Producto object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Producto The associated Producto object.
     * @throws PropelException
     */
    public function getProducto(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProducto === null && ($this->idproducto !== null) && $doQuery) {
            $this->aProducto = ProductoQuery::create()->findPk($this->idproducto, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProducto->addProductovariantes($this);
             */
        }

        return $this->aProducto;
    }

    /**
     * Declares an association between this object and a Productocolor object.
     *
     * @param                  Productocolor $v
     * @return Productovariante The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProductocolor(Productocolor $v = null)
    {
        if ($v === null) {
            $this->setIdproductocolor(NULL);
        } else {
            $this->setIdproductocolor($v->getIdproductocolor());
        }

        $this->aProductocolor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Productocolor object, it will not be re-added.
        if ($v !== null) {
            $v->addProductovariante($this);
        }


        return $this;
    }


    /**
     * Get the associated Productocolor object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Productocolor The associated Productocolor object.
     * @throws PropelException
     */
    public function getProductocolor(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProductocolor === null && ($this->idproductocolor !== null) && $doQuery) {
            $this->aProductocolor = ProductocolorQuery::create()->findPk($this->idproductocolor, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProductocolor->addProductovariantes($this);
             */
        }

        return $this->aProductocolor;
    }

    /**
     * Declares an association between this object and a Productomaterial object.
     *
     * @param                  Productomaterial $v
     * @return Productovariante The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProductomaterial(Productomaterial $v = null)
    {
        if ($v === null) {
            $this->setIdproductomaterial(NULL);
        } else {
            $this->setIdproductomaterial($v->getIdproductomaterial());
        }

        $this->aProductomaterial = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Productomaterial object, it will not be re-added.
        if ($v !== null) {
            $v->addProductovariante($this);
        }


        return $this;
    }


    /**
     * Get the associated Productomaterial object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Productomaterial The associated Productomaterial object.
     * @throws PropelException
     */
    public function getProductomaterial(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProductomaterial === null && ($this->idproductomaterial !== null) && $doQuery) {
            $this->aProductomaterial = ProductomaterialQuery::create()->findPk($this->idproductomaterial, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProductomaterial->addProductovariantes($this);
             */
        }

        return $this->aProductomaterial;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('Compradetalle' == $relationName) {
            $this->initCompradetalles();
        }
        if ('Descuentodetalle' == $relationName) {
            $this->initDescuentodetalles();
        }
        if ('Devoluciondetalle' == $relationName) {
            $this->initDevoluciondetalles();
        }
        if ('Pedido' == $relationName) {
            $this->initPedidos();
        }
        if ('Pedidomayoristadetalle' == $relationName) {
            $this->initPedidomayoristadetalles();
        }
        if ('Productosucursal' == $relationName) {
            $this->initProductosucursals();
        }
        if ('Promociondetalle' == $relationName) {
            $this->initPromociondetalles();
        }
        if ('Transferenciadetalle' == $relationName) {
            $this->initTransferenciadetalles();
        }
        if ('Ventadetalle' == $relationName) {
            $this->initVentadetalles();
        }
    }

    /**
     * Clears out the collCompradetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Productovariante The current object (for fluent API support)
     * @see        addCompradetalles()
     */
    public function clearCompradetalles()
    {
        $this->collCompradetalles = null; // important to set this to null since that means it is uninitialized
        $this->collCompradetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collCompradetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialCompradetalles($v = true)
    {
        $this->collCompradetallesPartial = $v;
    }

    /**
     * Initializes the collCompradetalles collection.
     *
     * By default this just sets the collCompradetalles collection to an empty array (like clearcollCompradetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCompradetalles($overrideExisting = true)
    {
        if (null !== $this->collCompradetalles && !$overrideExisting) {
            return;
        }
        $this->collCompradetalles = new PropelObjectCollection();
        $this->collCompradetalles->setModel('Compradetalle');
    }

    /**
     * Gets an array of Compradetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Productovariante is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Compradetalle[] List of Compradetalle objects
     * @throws PropelException
     */
    public function getCompradetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCompradetallesPartial && !$this->isNew();
        if (null === $this->collCompradetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCompradetalles) {
                // return empty collection
                $this->initCompradetalles();
            } else {
                $collCompradetalles = CompradetalleQuery::create(null, $criteria)
                    ->filterByProductovariante($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCompradetallesPartial && count($collCompradetalles)) {
                      $this->initCompradetalles(false);

                      foreach ($collCompradetalles as $obj) {
                        if (false == $this->collCompradetalles->contains($obj)) {
                          $this->collCompradetalles->append($obj);
                        }
                      }

                      $this->collCompradetallesPartial = true;
                    }

                    $collCompradetalles->getInternalIterator()->rewind();

                    return $collCompradetalles;
                }

                if ($partial && $this->collCompradetalles) {
                    foreach ($this->collCompradetalles as $obj) {
                        if ($obj->isNew()) {
                            $collCompradetalles[] = $obj;
                        }
                    }
                }

                $this->collCompradetalles = $collCompradetalles;
                $this->collCompradetallesPartial = false;
            }
        }

        return $this->collCompradetalles;
    }

    /**
     * Sets a collection of Compradetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $compradetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Productovariante The current object (for fluent API support)
     */
    public function setCompradetalles(PropelCollection $compradetalles, PropelPDO $con = null)
    {
        $compradetallesToDelete = $this->getCompradetalles(new Criteria(), $con)->diff($compradetalles);


        $this->compradetallesScheduledForDeletion = $compradetallesToDelete;

        foreach ($compradetallesToDelete as $compradetalleRemoved) {
            $compradetalleRemoved->setProductovariante(null);
        }

        $this->collCompradetalles = null;
        foreach ($compradetalles as $compradetalle) {
            $this->addCompradetalle($compradetalle);
        }

        $this->collCompradetalles = $compradetalles;
        $this->collCompradetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Compradetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Compradetalle objects.
     * @throws PropelException
     */
    public function countCompradetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCompradetallesPartial && !$this->isNew();
        if (null === $this->collCompradetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCompradetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCompradetalles());
            }
            $query = CompradetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductovariante($this)
                ->count($con);
        }

        return count($this->collCompradetalles);
    }

    /**
     * Method called to associate a Compradetalle object to this object
     * through the Compradetalle foreign key attribute.
     *
     * @param    Compradetalle $l Compradetalle
     * @return Productovariante The current object (for fluent API support)
     */
    public function addCompradetalle(Compradetalle $l)
    {
        if ($this->collCompradetalles === null) {
            $this->initCompradetalles();
            $this->collCompradetallesPartial = true;
        }

        if (!in_array($l, $this->collCompradetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCompradetalle($l);

            if ($this->compradetallesScheduledForDeletion and $this->compradetallesScheduledForDeletion->contains($l)) {
                $this->compradetallesScheduledForDeletion->remove($this->compradetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Compradetalle $compradetalle The compradetalle object to add.
     */
    protected function doAddCompradetalle($compradetalle)
    {
        $this->collCompradetalles[]= $compradetalle;
        $compradetalle->setProductovariante($this);
    }

    /**
     * @param	Compradetalle $compradetalle The compradetalle object to remove.
     * @return Productovariante The current object (for fluent API support)
     */
    public function removeCompradetalle($compradetalle)
    {
        if ($this->getCompradetalles()->contains($compradetalle)) {
            $this->collCompradetalles->remove($this->collCompradetalles->search($compradetalle));
            if (null === $this->compradetallesScheduledForDeletion) {
                $this->compradetallesScheduledForDeletion = clone $this->collCompradetalles;
                $this->compradetallesScheduledForDeletion->clear();
            }
            $this->compradetallesScheduledForDeletion[]= clone $compradetalle;
            $compradetalle->setProductovariante(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Compradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compradetalle[] List of Compradetalle objects
     */
    public function getCompradetallesJoinCompra($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompradetalleQuery::create(null, $criteria);
        $query->joinWith('Compra', $join_behavior);

        return $this->getCompradetalles($query, $con);
    }

    /**
     * Clears out the collDescuentodetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Productovariante The current object (for fluent API support)
     * @see        addDescuentodetalles()
     */
    public function clearDescuentodetalles()
    {
        $this->collDescuentodetalles = null; // important to set this to null since that means it is uninitialized
        $this->collDescuentodetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collDescuentodetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialDescuentodetalles($v = true)
    {
        $this->collDescuentodetallesPartial = $v;
    }

    /**
     * Initializes the collDescuentodetalles collection.
     *
     * By default this just sets the collDescuentodetalles collection to an empty array (like clearcollDescuentodetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDescuentodetalles($overrideExisting = true)
    {
        if (null !== $this->collDescuentodetalles && !$overrideExisting) {
            return;
        }
        $this->collDescuentodetalles = new PropelObjectCollection();
        $this->collDescuentodetalles->setModel('Descuentodetalle');
    }

    /**
     * Gets an array of Descuentodetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Productovariante is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Descuentodetalle[] List of Descuentodetalle objects
     * @throws PropelException
     */
    public function getDescuentodetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collDescuentodetallesPartial && !$this->isNew();
        if (null === $this->collDescuentodetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collDescuentodetalles) {
                // return empty collection
                $this->initDescuentodetalles();
            } else {
                $collDescuentodetalles = DescuentodetalleQuery::create(null, $criteria)
                    ->filterByProductovariante($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collDescuentodetallesPartial && count($collDescuentodetalles)) {
                      $this->initDescuentodetalles(false);

                      foreach ($collDescuentodetalles as $obj) {
                        if (false == $this->collDescuentodetalles->contains($obj)) {
                          $this->collDescuentodetalles->append($obj);
                        }
                      }

                      $this->collDescuentodetallesPartial = true;
                    }

                    $collDescuentodetalles->getInternalIterator()->rewind();

                    return $collDescuentodetalles;
                }

                if ($partial && $this->collDescuentodetalles) {
                    foreach ($this->collDescuentodetalles as $obj) {
                        if ($obj->isNew()) {
                            $collDescuentodetalles[] = $obj;
                        }
                    }
                }

                $this->collDescuentodetalles = $collDescuentodetalles;
                $this->collDescuentodetallesPartial = false;
            }
        }

        return $this->collDescuentodetalles;
    }

    /**
     * Sets a collection of Descuentodetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $descuentodetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Productovariante The current object (for fluent API support)
     */
    public function setDescuentodetalles(PropelCollection $descuentodetalles, PropelPDO $con = null)
    {
        $descuentodetallesToDelete = $this->getDescuentodetalles(new Criteria(), $con)->diff($descuentodetalles);


        $this->descuentodetallesScheduledForDeletion = $descuentodetallesToDelete;

        foreach ($descuentodetallesToDelete as $descuentodetalleRemoved) {
            $descuentodetalleRemoved->setProductovariante(null);
        }

        $this->collDescuentodetalles = null;
        foreach ($descuentodetalles as $descuentodetalle) {
            $this->addDescuentodetalle($descuentodetalle);
        }

        $this->collDescuentodetalles = $descuentodetalles;
        $this->collDescuentodetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Descuentodetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Descuentodetalle objects.
     * @throws PropelException
     */
    public function countDescuentodetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collDescuentodetallesPartial && !$this->isNew();
        if (null === $this->collDescuentodetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDescuentodetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDescuentodetalles());
            }
            $query = DescuentodetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductovariante($this)
                ->count($con);
        }

        return count($this->collDescuentodetalles);
    }

    /**
     * Method called to associate a Descuentodetalle object to this object
     * through the Descuentodetalle foreign key attribute.
     *
     * @param    Descuentodetalle $l Descuentodetalle
     * @return Productovariante The current object (for fluent API support)
     */
    public function addDescuentodetalle(Descuentodetalle $l)
    {
        if ($this->collDescuentodetalles === null) {
            $this->initDescuentodetalles();
            $this->collDescuentodetallesPartial = true;
        }

        if (!in_array($l, $this->collDescuentodetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddDescuentodetalle($l);

            if ($this->descuentodetallesScheduledForDeletion and $this->descuentodetallesScheduledForDeletion->contains($l)) {
                $this->descuentodetallesScheduledForDeletion->remove($this->descuentodetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Descuentodetalle $descuentodetalle The descuentodetalle object to add.
     */
    protected function doAddDescuentodetalle($descuentodetalle)
    {
        $this->collDescuentodetalles[]= $descuentodetalle;
        $descuentodetalle->setProductovariante($this);
    }

    /**
     * @param	Descuentodetalle $descuentodetalle The descuentodetalle object to remove.
     * @return Productovariante The current object (for fluent API support)
     */
    public function removeDescuentodetalle($descuentodetalle)
    {
        if ($this->getDescuentodetalles()->contains($descuentodetalle)) {
            $this->collDescuentodetalles->remove($this->collDescuentodetalles->search($descuentodetalle));
            if (null === $this->descuentodetallesScheduledForDeletion) {
                $this->descuentodetallesScheduledForDeletion = clone $this->collDescuentodetalles;
                $this->descuentodetallesScheduledForDeletion->clear();
            }
            $this->descuentodetallesScheduledForDeletion[]= $descuentodetalle;
            $descuentodetalle->setProductovariante(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Descuentodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Descuentodetalle[] List of Descuentodetalle objects
     */
    public function getDescuentodetallesJoinDescuento($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DescuentodetalleQuery::create(null, $criteria);
        $query->joinWith('Descuento', $join_behavior);

        return $this->getDescuentodetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Descuentodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Descuentodetalle[] List of Descuentodetalle objects
     */
    public function getDescuentodetallesJoinMarca($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DescuentodetalleQuery::create(null, $criteria);
        $query->joinWith('Marca', $join_behavior);

        return $this->getDescuentodetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Descuentodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Descuentodetalle[] List of Descuentodetalle objects
     */
    public function getDescuentodetallesJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DescuentodetalleQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getDescuentodetalles($query, $con);
    }

    /**
     * Clears out the collDevoluciondetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Productovariante The current object (for fluent API support)
     * @see        addDevoluciondetalles()
     */
    public function clearDevoluciondetalles()
    {
        $this->collDevoluciondetalles = null; // important to set this to null since that means it is uninitialized
        $this->collDevoluciondetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collDevoluciondetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialDevoluciondetalles($v = true)
    {
        $this->collDevoluciondetallesPartial = $v;
    }

    /**
     * Initializes the collDevoluciondetalles collection.
     *
     * By default this just sets the collDevoluciondetalles collection to an empty array (like clearcollDevoluciondetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDevoluciondetalles($overrideExisting = true)
    {
        if (null !== $this->collDevoluciondetalles && !$overrideExisting) {
            return;
        }
        $this->collDevoluciondetalles = new PropelObjectCollection();
        $this->collDevoluciondetalles->setModel('Devoluciondetalle');
    }

    /**
     * Gets an array of Devoluciondetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Productovariante is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Devoluciondetalle[] List of Devoluciondetalle objects
     * @throws PropelException
     */
    public function getDevoluciondetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collDevoluciondetallesPartial && !$this->isNew();
        if (null === $this->collDevoluciondetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collDevoluciondetalles) {
                // return empty collection
                $this->initDevoluciondetalles();
            } else {
                $collDevoluciondetalles = DevoluciondetalleQuery::create(null, $criteria)
                    ->filterByProductovariante($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collDevoluciondetallesPartial && count($collDevoluciondetalles)) {
                      $this->initDevoluciondetalles(false);

                      foreach ($collDevoluciondetalles as $obj) {
                        if (false == $this->collDevoluciondetalles->contains($obj)) {
                          $this->collDevoluciondetalles->append($obj);
                        }
                      }

                      $this->collDevoluciondetallesPartial = true;
                    }

                    $collDevoluciondetalles->getInternalIterator()->rewind();

                    return $collDevoluciondetalles;
                }

                if ($partial && $this->collDevoluciondetalles) {
                    foreach ($this->collDevoluciondetalles as $obj) {
                        if ($obj->isNew()) {
                            $collDevoluciondetalles[] = $obj;
                        }
                    }
                }

                $this->collDevoluciondetalles = $collDevoluciondetalles;
                $this->collDevoluciondetallesPartial = false;
            }
        }

        return $this->collDevoluciondetalles;
    }

    /**
     * Sets a collection of Devoluciondetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $devoluciondetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Productovariante The current object (for fluent API support)
     */
    public function setDevoluciondetalles(PropelCollection $devoluciondetalles, PropelPDO $con = null)
    {
        $devoluciondetallesToDelete = $this->getDevoluciondetalles(new Criteria(), $con)->diff($devoluciondetalles);


        $this->devoluciondetallesScheduledForDeletion = $devoluciondetallesToDelete;

        foreach ($devoluciondetallesToDelete as $devoluciondetalleRemoved) {
            $devoluciondetalleRemoved->setProductovariante(null);
        }

        $this->collDevoluciondetalles = null;
        foreach ($devoluciondetalles as $devoluciondetalle) {
            $this->addDevoluciondetalle($devoluciondetalle);
        }

        $this->collDevoluciondetalles = $devoluciondetalles;
        $this->collDevoluciondetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Devoluciondetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Devoluciondetalle objects.
     * @throws PropelException
     */
    public function countDevoluciondetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collDevoluciondetallesPartial && !$this->isNew();
        if (null === $this->collDevoluciondetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDevoluciondetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDevoluciondetalles());
            }
            $query = DevoluciondetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductovariante($this)
                ->count($con);
        }

        return count($this->collDevoluciondetalles);
    }

    /**
     * Method called to associate a Devoluciondetalle object to this object
     * through the Devoluciondetalle foreign key attribute.
     *
     * @param    Devoluciondetalle $l Devoluciondetalle
     * @return Productovariante The current object (for fluent API support)
     */
    public function addDevoluciondetalle(Devoluciondetalle $l)
    {
        if ($this->collDevoluciondetalles === null) {
            $this->initDevoluciondetalles();
            $this->collDevoluciondetallesPartial = true;
        }

        if (!in_array($l, $this->collDevoluciondetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddDevoluciondetalle($l);

            if ($this->devoluciondetallesScheduledForDeletion and $this->devoluciondetallesScheduledForDeletion->contains($l)) {
                $this->devoluciondetallesScheduledForDeletion->remove($this->devoluciondetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Devoluciondetalle $devoluciondetalle The devoluciondetalle object to add.
     */
    protected function doAddDevoluciondetalle($devoluciondetalle)
    {
        $this->collDevoluciondetalles[]= $devoluciondetalle;
        $devoluciondetalle->setProductovariante($this);
    }

    /**
     * @param	Devoluciondetalle $devoluciondetalle The devoluciondetalle object to remove.
     * @return Productovariante The current object (for fluent API support)
     */
    public function removeDevoluciondetalle($devoluciondetalle)
    {
        if ($this->getDevoluciondetalles()->contains($devoluciondetalle)) {
            $this->collDevoluciondetalles->remove($this->collDevoluciondetalles->search($devoluciondetalle));
            if (null === $this->devoluciondetallesScheduledForDeletion) {
                $this->devoluciondetallesScheduledForDeletion = clone $this->collDevoluciondetalles;
                $this->devoluciondetallesScheduledForDeletion->clear();
            }
            $this->devoluciondetallesScheduledForDeletion[]= clone $devoluciondetalle;
            $devoluciondetalle->setProductovariante(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Devoluciondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devoluciondetalle[] List of Devoluciondetalle objects
     */
    public function getDevoluciondetallesJoinDevolucion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevoluciondetalleQuery::create(null, $criteria);
        $query->joinWith('Devolucion', $join_behavior);

        return $this->getDevoluciondetalles($query, $con);
    }

    /**
     * Clears out the collPedidos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Productovariante The current object (for fluent API support)
     * @see        addPedidos()
     */
    public function clearPedidos()
    {
        $this->collPedidos = null; // important to set this to null since that means it is uninitialized
        $this->collPedidosPartial = null;

        return $this;
    }

    /**
     * reset is the collPedidos collection loaded partially
     *
     * @return void
     */
    public function resetPartialPedidos($v = true)
    {
        $this->collPedidosPartial = $v;
    }

    /**
     * Initializes the collPedidos collection.
     *
     * By default this just sets the collPedidos collection to an empty array (like clearcollPedidos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPedidos($overrideExisting = true)
    {
        if (null !== $this->collPedidos && !$overrideExisting) {
            return;
        }
        $this->collPedidos = new PropelObjectCollection();
        $this->collPedidos->setModel('Pedido');
    }

    /**
     * Gets an array of Pedido objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Productovariante is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Pedido[] List of Pedido objects
     * @throws PropelException
     */
    public function getPedidos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPedidosPartial && !$this->isNew();
        if (null === $this->collPedidos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPedidos) {
                // return empty collection
                $this->initPedidos();
            } else {
                $collPedidos = PedidoQuery::create(null, $criteria)
                    ->filterByProductovariante($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPedidosPartial && count($collPedidos)) {
                      $this->initPedidos(false);

                      foreach ($collPedidos as $obj) {
                        if (false == $this->collPedidos->contains($obj)) {
                          $this->collPedidos->append($obj);
                        }
                      }

                      $this->collPedidosPartial = true;
                    }

                    $collPedidos->getInternalIterator()->rewind();

                    return $collPedidos;
                }

                if ($partial && $this->collPedidos) {
                    foreach ($this->collPedidos as $obj) {
                        if ($obj->isNew()) {
                            $collPedidos[] = $obj;
                        }
                    }
                }

                $this->collPedidos = $collPedidos;
                $this->collPedidosPartial = false;
            }
        }

        return $this->collPedidos;
    }

    /**
     * Sets a collection of Pedido objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $pedidos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Productovariante The current object (for fluent API support)
     */
    public function setPedidos(PropelCollection $pedidos, PropelPDO $con = null)
    {
        $pedidosToDelete = $this->getPedidos(new Criteria(), $con)->diff($pedidos);


        $this->pedidosScheduledForDeletion = $pedidosToDelete;

        foreach ($pedidosToDelete as $pedidoRemoved) {
            $pedidoRemoved->setProductovariante(null);
        }

        $this->collPedidos = null;
        foreach ($pedidos as $pedido) {
            $this->addPedido($pedido);
        }

        $this->collPedidos = $pedidos;
        $this->collPedidosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Pedido objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Pedido objects.
     * @throws PropelException
     */
    public function countPedidos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPedidosPartial && !$this->isNew();
        if (null === $this->collPedidos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPedidos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPedidos());
            }
            $query = PedidoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductovariante($this)
                ->count($con);
        }

        return count($this->collPedidos);
    }

    /**
     * Method called to associate a Pedido object to this object
     * through the Pedido foreign key attribute.
     *
     * @param    Pedido $l Pedido
     * @return Productovariante The current object (for fluent API support)
     */
    public function addPedido(Pedido $l)
    {
        if ($this->collPedidos === null) {
            $this->initPedidos();
            $this->collPedidosPartial = true;
        }

        if (!in_array($l, $this->collPedidos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPedido($l);

            if ($this->pedidosScheduledForDeletion and $this->pedidosScheduledForDeletion->contains($l)) {
                $this->pedidosScheduledForDeletion->remove($this->pedidosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Pedido $pedido The pedido object to add.
     */
    protected function doAddPedido($pedido)
    {
        $this->collPedidos[]= $pedido;
        $pedido->setProductovariante($this);
    }

    /**
     * @param	Pedido $pedido The pedido object to remove.
     * @return Productovariante The current object (for fluent API support)
     */
    public function removePedido($pedido)
    {
        if ($this->getPedidos()->contains($pedido)) {
            $this->collPedidos->remove($this->collPedidos->search($pedido));
            if (null === $this->pedidosScheduledForDeletion) {
                $this->pedidosScheduledForDeletion = clone $this->collPedidos;
                $this->pedidosScheduledForDeletion->clear();
            }
            $this->pedidosScheduledForDeletion[]= clone $pedido;
            $pedido->setProductovariante(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Pedidos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pedido[] List of Pedido objects
     */
    public function getPedidosJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PedidoQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getPedidos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Pedidos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pedido[] List of Pedido objects
     */
    public function getPedidosJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PedidoQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getPedidos($query, $con);
    }

    /**
     * Clears out the collPedidomayoristadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Productovariante The current object (for fluent API support)
     * @see        addPedidomayoristadetalles()
     */
    public function clearPedidomayoristadetalles()
    {
        $this->collPedidomayoristadetalles = null; // important to set this to null since that means it is uninitialized
        $this->collPedidomayoristadetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collPedidomayoristadetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialPedidomayoristadetalles($v = true)
    {
        $this->collPedidomayoristadetallesPartial = $v;
    }

    /**
     * Initializes the collPedidomayoristadetalles collection.
     *
     * By default this just sets the collPedidomayoristadetalles collection to an empty array (like clearcollPedidomayoristadetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPedidomayoristadetalles($overrideExisting = true)
    {
        if (null !== $this->collPedidomayoristadetalles && !$overrideExisting) {
            return;
        }
        $this->collPedidomayoristadetalles = new PropelObjectCollection();
        $this->collPedidomayoristadetalles->setModel('Pedidomayoristadetalle');
    }

    /**
     * Gets an array of Pedidomayoristadetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Productovariante is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Pedidomayoristadetalle[] List of Pedidomayoristadetalle objects
     * @throws PropelException
     */
    public function getPedidomayoristadetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPedidomayoristadetallesPartial && !$this->isNew();
        if (null === $this->collPedidomayoristadetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPedidomayoristadetalles) {
                // return empty collection
                $this->initPedidomayoristadetalles();
            } else {
                $collPedidomayoristadetalles = PedidomayoristadetalleQuery::create(null, $criteria)
                    ->filterByProductovariante($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPedidomayoristadetallesPartial && count($collPedidomayoristadetalles)) {
                      $this->initPedidomayoristadetalles(false);

                      foreach ($collPedidomayoristadetalles as $obj) {
                        if (false == $this->collPedidomayoristadetalles->contains($obj)) {
                          $this->collPedidomayoristadetalles->append($obj);
                        }
                      }

                      $this->collPedidomayoristadetallesPartial = true;
                    }

                    $collPedidomayoristadetalles->getInternalIterator()->rewind();

                    return $collPedidomayoristadetalles;
                }

                if ($partial && $this->collPedidomayoristadetalles) {
                    foreach ($this->collPedidomayoristadetalles as $obj) {
                        if ($obj->isNew()) {
                            $collPedidomayoristadetalles[] = $obj;
                        }
                    }
                }

                $this->collPedidomayoristadetalles = $collPedidomayoristadetalles;
                $this->collPedidomayoristadetallesPartial = false;
            }
        }

        return $this->collPedidomayoristadetalles;
    }

    /**
     * Sets a collection of Pedidomayoristadetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $pedidomayoristadetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Productovariante The current object (for fluent API support)
     */
    public function setPedidomayoristadetalles(PropelCollection $pedidomayoristadetalles, PropelPDO $con = null)
    {
        $pedidomayoristadetallesToDelete = $this->getPedidomayoristadetalles(new Criteria(), $con)->diff($pedidomayoristadetalles);


        $this->pedidomayoristadetallesScheduledForDeletion = $pedidomayoristadetallesToDelete;

        foreach ($pedidomayoristadetallesToDelete as $pedidomayoristadetalleRemoved) {
            $pedidomayoristadetalleRemoved->setProductovariante(null);
        }

        $this->collPedidomayoristadetalles = null;
        foreach ($pedidomayoristadetalles as $pedidomayoristadetalle) {
            $this->addPedidomayoristadetalle($pedidomayoristadetalle);
        }

        $this->collPedidomayoristadetalles = $pedidomayoristadetalles;
        $this->collPedidomayoristadetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Pedidomayoristadetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Pedidomayoristadetalle objects.
     * @throws PropelException
     */
    public function countPedidomayoristadetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPedidomayoristadetallesPartial && !$this->isNew();
        if (null === $this->collPedidomayoristadetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPedidomayoristadetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPedidomayoristadetalles());
            }
            $query = PedidomayoristadetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductovariante($this)
                ->count($con);
        }

        return count($this->collPedidomayoristadetalles);
    }

    /**
     * Method called to associate a Pedidomayoristadetalle object to this object
     * through the Pedidomayoristadetalle foreign key attribute.
     *
     * @param    Pedidomayoristadetalle $l Pedidomayoristadetalle
     * @return Productovariante The current object (for fluent API support)
     */
    public function addPedidomayoristadetalle(Pedidomayoristadetalle $l)
    {
        if ($this->collPedidomayoristadetalles === null) {
            $this->initPedidomayoristadetalles();
            $this->collPedidomayoristadetallesPartial = true;
        }

        if (!in_array($l, $this->collPedidomayoristadetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPedidomayoristadetalle($l);

            if ($this->pedidomayoristadetallesScheduledForDeletion and $this->pedidomayoristadetallesScheduledForDeletion->contains($l)) {
                $this->pedidomayoristadetallesScheduledForDeletion->remove($this->pedidomayoristadetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Pedidomayoristadetalle $pedidomayoristadetalle The pedidomayoristadetalle object to add.
     */
    protected function doAddPedidomayoristadetalle($pedidomayoristadetalle)
    {
        $this->collPedidomayoristadetalles[]= $pedidomayoristadetalle;
        $pedidomayoristadetalle->setProductovariante($this);
    }

    /**
     * @param	Pedidomayoristadetalle $pedidomayoristadetalle The pedidomayoristadetalle object to remove.
     * @return Productovariante The current object (for fluent API support)
     */
    public function removePedidomayoristadetalle($pedidomayoristadetalle)
    {
        if ($this->getPedidomayoristadetalles()->contains($pedidomayoristadetalle)) {
            $this->collPedidomayoristadetalles->remove($this->collPedidomayoristadetalles->search($pedidomayoristadetalle));
            if (null === $this->pedidomayoristadetallesScheduledForDeletion) {
                $this->pedidomayoristadetallesScheduledForDeletion = clone $this->collPedidomayoristadetalles;
                $this->pedidomayoristadetallesScheduledForDeletion->clear();
            }
            $this->pedidomayoristadetallesScheduledForDeletion[]= clone $pedidomayoristadetalle;
            $pedidomayoristadetalle->setProductovariante(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Pedidomayoristadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pedidomayoristadetalle[] List of Pedidomayoristadetalle objects
     */
    public function getPedidomayoristadetallesJoinPedidomayorista($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PedidomayoristadetalleQuery::create(null, $criteria);
        $query->joinWith('Pedidomayorista', $join_behavior);

        return $this->getPedidomayoristadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Pedidomayoristadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pedidomayoristadetalle[] List of Pedidomayoristadetalle objects
     */
    public function getPedidomayoristadetallesJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PedidomayoristadetalleQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getPedidomayoristadetalles($query, $con);
    }

    /**
     * Clears out the collProductosucursals collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Productovariante The current object (for fluent API support)
     * @see        addProductosucursals()
     */
    public function clearProductosucursals()
    {
        $this->collProductosucursals = null; // important to set this to null since that means it is uninitialized
        $this->collProductosucursalsPartial = null;

        return $this;
    }

    /**
     * reset is the collProductosucursals collection loaded partially
     *
     * @return void
     */
    public function resetPartialProductosucursals($v = true)
    {
        $this->collProductosucursalsPartial = $v;
    }

    /**
     * Initializes the collProductosucursals collection.
     *
     * By default this just sets the collProductosucursals collection to an empty array (like clearcollProductosucursals());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProductosucursals($overrideExisting = true)
    {
        if (null !== $this->collProductosucursals && !$overrideExisting) {
            return;
        }
        $this->collProductosucursals = new PropelObjectCollection();
        $this->collProductosucursals->setModel('Productosucursal');
    }

    /**
     * Gets an array of Productosucursal objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Productovariante is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Productosucursal[] List of Productosucursal objects
     * @throws PropelException
     */
    public function getProductosucursals($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProductosucursalsPartial && !$this->isNew();
        if (null === $this->collProductosucursals || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProductosucursals) {
                // return empty collection
                $this->initProductosucursals();
            } else {
                $collProductosucursals = ProductosucursalQuery::create(null, $criteria)
                    ->filterByProductovariante($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProductosucursalsPartial && count($collProductosucursals)) {
                      $this->initProductosucursals(false);

                      foreach ($collProductosucursals as $obj) {
                        if (false == $this->collProductosucursals->contains($obj)) {
                          $this->collProductosucursals->append($obj);
                        }
                      }

                      $this->collProductosucursalsPartial = true;
                    }

                    $collProductosucursals->getInternalIterator()->rewind();

                    return $collProductosucursals;
                }

                if ($partial && $this->collProductosucursals) {
                    foreach ($this->collProductosucursals as $obj) {
                        if ($obj->isNew()) {
                            $collProductosucursals[] = $obj;
                        }
                    }
                }

                $this->collProductosucursals = $collProductosucursals;
                $this->collProductosucursalsPartial = false;
            }
        }

        return $this->collProductosucursals;
    }

    /**
     * Sets a collection of Productosucursal objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $productosucursals A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Productovariante The current object (for fluent API support)
     */
    public function setProductosucursals(PropelCollection $productosucursals, PropelPDO $con = null)
    {
        $productosucursalsToDelete = $this->getProductosucursals(new Criteria(), $con)->diff($productosucursals);


        $this->productosucursalsScheduledForDeletion = $productosucursalsToDelete;

        foreach ($productosucursalsToDelete as $productosucursalRemoved) {
            $productosucursalRemoved->setProductovariante(null);
        }

        $this->collProductosucursals = null;
        foreach ($productosucursals as $productosucursal) {
            $this->addProductosucursal($productosucursal);
        }

        $this->collProductosucursals = $productosucursals;
        $this->collProductosucursalsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Productosucursal objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Productosucursal objects.
     * @throws PropelException
     */
    public function countProductosucursals(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProductosucursalsPartial && !$this->isNew();
        if (null === $this->collProductosucursals || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProductosucursals) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProductosucursals());
            }
            $query = ProductosucursalQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductovariante($this)
                ->count($con);
        }

        return count($this->collProductosucursals);
    }

    /**
     * Method called to associate a Productosucursal object to this object
     * through the Productosucursal foreign key attribute.
     *
     * @param    Productosucursal $l Productosucursal
     * @return Productovariante The current object (for fluent API support)
     */
    public function addProductosucursal(Productosucursal $l)
    {
        if ($this->collProductosucursals === null) {
            $this->initProductosucursals();
            $this->collProductosucursalsPartial = true;
        }

        if (!in_array($l, $this->collProductosucursals->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProductosucursal($l);

            if ($this->productosucursalsScheduledForDeletion and $this->productosucursalsScheduledForDeletion->contains($l)) {
                $this->productosucursalsScheduledForDeletion->remove($this->productosucursalsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Productosucursal $productosucursal The productosucursal object to add.
     */
    protected function doAddProductosucursal($productosucursal)
    {
        $this->collProductosucursals[]= $productosucursal;
        $productosucursal->setProductovariante($this);
    }

    /**
     * @param	Productosucursal $productosucursal The productosucursal object to remove.
     * @return Productovariante The current object (for fluent API support)
     */
    public function removeProductosucursal($productosucursal)
    {
        if ($this->getProductosucursals()->contains($productosucursal)) {
            $this->collProductosucursals->remove($this->collProductosucursals->search($productosucursal));
            if (null === $this->productosucursalsScheduledForDeletion) {
                $this->productosucursalsScheduledForDeletion = clone $this->collProductosucursals;
                $this->productosucursalsScheduledForDeletion->clear();
            }
            $this->productosucursalsScheduledForDeletion[]= clone $productosucursal;
            $productosucursal->setProductovariante(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Productosucursals from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productosucursal[] List of Productosucursal objects
     */
    public function getProductosucursalsJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductosucursalQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getProductosucursals($query, $con);
    }

    /**
     * Clears out the collPromociondetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Productovariante The current object (for fluent API support)
     * @see        addPromociondetalles()
     */
    public function clearPromociondetalles()
    {
        $this->collPromociondetalles = null; // important to set this to null since that means it is uninitialized
        $this->collPromociondetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collPromociondetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialPromociondetalles($v = true)
    {
        $this->collPromociondetallesPartial = $v;
    }

    /**
     * Initializes the collPromociondetalles collection.
     *
     * By default this just sets the collPromociondetalles collection to an empty array (like clearcollPromociondetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPromociondetalles($overrideExisting = true)
    {
        if (null !== $this->collPromociondetalles && !$overrideExisting) {
            return;
        }
        $this->collPromociondetalles = new PropelObjectCollection();
        $this->collPromociondetalles->setModel('Promociondetalle');
    }

    /**
     * Gets an array of Promociondetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Productovariante is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Promociondetalle[] List of Promociondetalle objects
     * @throws PropelException
     */
    public function getPromociondetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPromociondetallesPartial && !$this->isNew();
        if (null === $this->collPromociondetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPromociondetalles) {
                // return empty collection
                $this->initPromociondetalles();
            } else {
                $collPromociondetalles = PromociondetalleQuery::create(null, $criteria)
                    ->filterByProductovariante($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPromociondetallesPartial && count($collPromociondetalles)) {
                      $this->initPromociondetalles(false);

                      foreach ($collPromociondetalles as $obj) {
                        if (false == $this->collPromociondetalles->contains($obj)) {
                          $this->collPromociondetalles->append($obj);
                        }
                      }

                      $this->collPromociondetallesPartial = true;
                    }

                    $collPromociondetalles->getInternalIterator()->rewind();

                    return $collPromociondetalles;
                }

                if ($partial && $this->collPromociondetalles) {
                    foreach ($this->collPromociondetalles as $obj) {
                        if ($obj->isNew()) {
                            $collPromociondetalles[] = $obj;
                        }
                    }
                }

                $this->collPromociondetalles = $collPromociondetalles;
                $this->collPromociondetallesPartial = false;
            }
        }

        return $this->collPromociondetalles;
    }

    /**
     * Sets a collection of Promociondetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $promociondetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Productovariante The current object (for fluent API support)
     */
    public function setPromociondetalles(PropelCollection $promociondetalles, PropelPDO $con = null)
    {
        $promociondetallesToDelete = $this->getPromociondetalles(new Criteria(), $con)->diff($promociondetalles);


        $this->promociondetallesScheduledForDeletion = $promociondetallesToDelete;

        foreach ($promociondetallesToDelete as $promociondetalleRemoved) {
            $promociondetalleRemoved->setProductovariante(null);
        }

        $this->collPromociondetalles = null;
        foreach ($promociondetalles as $promociondetalle) {
            $this->addPromociondetalle($promociondetalle);
        }

        $this->collPromociondetalles = $promociondetalles;
        $this->collPromociondetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Promociondetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Promociondetalle objects.
     * @throws PropelException
     */
    public function countPromociondetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPromociondetallesPartial && !$this->isNew();
        if (null === $this->collPromociondetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPromociondetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPromociondetalles());
            }
            $query = PromociondetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductovariante($this)
                ->count($con);
        }

        return count($this->collPromociondetalles);
    }

    /**
     * Method called to associate a Promociondetalle object to this object
     * through the Promociondetalle foreign key attribute.
     *
     * @param    Promociondetalle $l Promociondetalle
     * @return Productovariante The current object (for fluent API support)
     */
    public function addPromociondetalle(Promociondetalle $l)
    {
        if ($this->collPromociondetalles === null) {
            $this->initPromociondetalles();
            $this->collPromociondetallesPartial = true;
        }

        if (!in_array($l, $this->collPromociondetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPromociondetalle($l);

            if ($this->promociondetallesScheduledForDeletion and $this->promociondetallesScheduledForDeletion->contains($l)) {
                $this->promociondetallesScheduledForDeletion->remove($this->promociondetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Promociondetalle $promociondetalle The promociondetalle object to add.
     */
    protected function doAddPromociondetalle($promociondetalle)
    {
        $this->collPromociondetalles[]= $promociondetalle;
        $promociondetalle->setProductovariante($this);
    }

    /**
     * @param	Promociondetalle $promociondetalle The promociondetalle object to remove.
     * @return Productovariante The current object (for fluent API support)
     */
    public function removePromociondetalle($promociondetalle)
    {
        if ($this->getPromociondetalles()->contains($promociondetalle)) {
            $this->collPromociondetalles->remove($this->collPromociondetalles->search($promociondetalle));
            if (null === $this->promociondetallesScheduledForDeletion) {
                $this->promociondetallesScheduledForDeletion = clone $this->collPromociondetalles;
                $this->promociondetallesScheduledForDeletion->clear();
            }
            $this->promociondetallesScheduledForDeletion[]= $promociondetalle;
            $promociondetalle->setProductovariante(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Promociondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Promociondetalle[] List of Promociondetalle objects
     */
    public function getPromociondetallesJoinMarca($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PromociondetalleQuery::create(null, $criteria);
        $query->joinWith('Marca', $join_behavior);

        return $this->getPromociondetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Promociondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Promociondetalle[] List of Promociondetalle objects
     */
    public function getPromociondetallesJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PromociondetalleQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getPromociondetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Promociondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Promociondetalle[] List of Promociondetalle objects
     */
    public function getPromociondetallesJoinPromocion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PromociondetalleQuery::create(null, $criteria);
        $query->joinWith('Promocion', $join_behavior);

        return $this->getPromociondetalles($query, $con);
    }

    /**
     * Clears out the collTransferenciadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Productovariante The current object (for fluent API support)
     * @see        addTransferenciadetalles()
     */
    public function clearTransferenciadetalles()
    {
        $this->collTransferenciadetalles = null; // important to set this to null since that means it is uninitialized
        $this->collTransferenciadetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collTransferenciadetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialTransferenciadetalles($v = true)
    {
        $this->collTransferenciadetallesPartial = $v;
    }

    /**
     * Initializes the collTransferenciadetalles collection.
     *
     * By default this just sets the collTransferenciadetalles collection to an empty array (like clearcollTransferenciadetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTransferenciadetalles($overrideExisting = true)
    {
        if (null !== $this->collTransferenciadetalles && !$overrideExisting) {
            return;
        }
        $this->collTransferenciadetalles = new PropelObjectCollection();
        $this->collTransferenciadetalles->setModel('Transferenciadetalle');
    }

    /**
     * Gets an array of Transferenciadetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Productovariante is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Transferenciadetalle[] List of Transferenciadetalle objects
     * @throws PropelException
     */
    public function getTransferenciadetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciadetallesPartial && !$this->isNew();
        if (null === $this->collTransferenciadetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTransferenciadetalles) {
                // return empty collection
                $this->initTransferenciadetalles();
            } else {
                $collTransferenciadetalles = TransferenciadetalleQuery::create(null, $criteria)
                    ->filterByProductovariante($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTransferenciadetallesPartial && count($collTransferenciadetalles)) {
                      $this->initTransferenciadetalles(false);

                      foreach ($collTransferenciadetalles as $obj) {
                        if (false == $this->collTransferenciadetalles->contains($obj)) {
                          $this->collTransferenciadetalles->append($obj);
                        }
                      }

                      $this->collTransferenciadetallesPartial = true;
                    }

                    $collTransferenciadetalles->getInternalIterator()->rewind();

                    return $collTransferenciadetalles;
                }

                if ($partial && $this->collTransferenciadetalles) {
                    foreach ($this->collTransferenciadetalles as $obj) {
                        if ($obj->isNew()) {
                            $collTransferenciadetalles[] = $obj;
                        }
                    }
                }

                $this->collTransferenciadetalles = $collTransferenciadetalles;
                $this->collTransferenciadetallesPartial = false;
            }
        }

        return $this->collTransferenciadetalles;
    }

    /**
     * Sets a collection of Transferenciadetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $transferenciadetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Productovariante The current object (for fluent API support)
     */
    public function setTransferenciadetalles(PropelCollection $transferenciadetalles, PropelPDO $con = null)
    {
        $transferenciadetallesToDelete = $this->getTransferenciadetalles(new Criteria(), $con)->diff($transferenciadetalles);


        $this->transferenciadetallesScheduledForDeletion = $transferenciadetallesToDelete;

        foreach ($transferenciadetallesToDelete as $transferenciadetalleRemoved) {
            $transferenciadetalleRemoved->setProductovariante(null);
        }

        $this->collTransferenciadetalles = null;
        foreach ($transferenciadetalles as $transferenciadetalle) {
            $this->addTransferenciadetalle($transferenciadetalle);
        }

        $this->collTransferenciadetalles = $transferenciadetalles;
        $this->collTransferenciadetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Transferenciadetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Transferenciadetalle objects.
     * @throws PropelException
     */
    public function countTransferenciadetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciadetallesPartial && !$this->isNew();
        if (null === $this->collTransferenciadetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTransferenciadetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTransferenciadetalles());
            }
            $query = TransferenciadetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductovariante($this)
                ->count($con);
        }

        return count($this->collTransferenciadetalles);
    }

    /**
     * Method called to associate a Transferenciadetalle object to this object
     * through the Transferenciadetalle foreign key attribute.
     *
     * @param    Transferenciadetalle $l Transferenciadetalle
     * @return Productovariante The current object (for fluent API support)
     */
    public function addTransferenciadetalle(Transferenciadetalle $l)
    {
        if ($this->collTransferenciadetalles === null) {
            $this->initTransferenciadetalles();
            $this->collTransferenciadetallesPartial = true;
        }

        if (!in_array($l, $this->collTransferenciadetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTransferenciadetalle($l);

            if ($this->transferenciadetallesScheduledForDeletion and $this->transferenciadetallesScheduledForDeletion->contains($l)) {
                $this->transferenciadetallesScheduledForDeletion->remove($this->transferenciadetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Transferenciadetalle $transferenciadetalle The transferenciadetalle object to add.
     */
    protected function doAddTransferenciadetalle($transferenciadetalle)
    {
        $this->collTransferenciadetalles[]= $transferenciadetalle;
        $transferenciadetalle->setProductovariante($this);
    }

    /**
     * @param	Transferenciadetalle $transferenciadetalle The transferenciadetalle object to remove.
     * @return Productovariante The current object (for fluent API support)
     */
    public function removeTransferenciadetalle($transferenciadetalle)
    {
        if ($this->getTransferenciadetalles()->contains($transferenciadetalle)) {
            $this->collTransferenciadetalles->remove($this->collTransferenciadetalles->search($transferenciadetalle));
            if (null === $this->transferenciadetallesScheduledForDeletion) {
                $this->transferenciadetallesScheduledForDeletion = clone $this->collTransferenciadetalles;
                $this->transferenciadetallesScheduledForDeletion->clear();
            }
            $this->transferenciadetallesScheduledForDeletion[]= clone $transferenciadetalle;
            $transferenciadetalle->setProductovariante(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Transferenciadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferenciadetalle[] List of Transferenciadetalle objects
     */
    public function getTransferenciadetallesJoinTransferencia($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciadetalleQuery::create(null, $criteria);
        $query->joinWith('Transferencia', $join_behavior);

        return $this->getTransferenciadetalles($query, $con);
    }

    /**
     * Clears out the collVentadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Productovariante The current object (for fluent API support)
     * @see        addVentadetalles()
     */
    public function clearVentadetalles()
    {
        $this->collVentadetalles = null; // important to set this to null since that means it is uninitialized
        $this->collVentadetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collVentadetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialVentadetalles($v = true)
    {
        $this->collVentadetallesPartial = $v;
    }

    /**
     * Initializes the collVentadetalles collection.
     *
     * By default this just sets the collVentadetalles collection to an empty array (like clearcollVentadetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVentadetalles($overrideExisting = true)
    {
        if (null !== $this->collVentadetalles && !$overrideExisting) {
            return;
        }
        $this->collVentadetalles = new PropelObjectCollection();
        $this->collVentadetalles->setModel('Ventadetalle');
    }

    /**
     * Gets an array of Ventadetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Productovariante is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     * @throws PropelException
     */
    public function getVentadetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVentadetallesPartial && !$this->isNew();
        if (null === $this->collVentadetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVentadetalles) {
                // return empty collection
                $this->initVentadetalles();
            } else {
                $collVentadetalles = VentadetalleQuery::create(null, $criteria)
                    ->filterByProductovariante($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVentadetallesPartial && count($collVentadetalles)) {
                      $this->initVentadetalles(false);

                      foreach ($collVentadetalles as $obj) {
                        if (false == $this->collVentadetalles->contains($obj)) {
                          $this->collVentadetalles->append($obj);
                        }
                      }

                      $this->collVentadetallesPartial = true;
                    }

                    $collVentadetalles->getInternalIterator()->rewind();

                    return $collVentadetalles;
                }

                if ($partial && $this->collVentadetalles) {
                    foreach ($this->collVentadetalles as $obj) {
                        if ($obj->isNew()) {
                            $collVentadetalles[] = $obj;
                        }
                    }
                }

                $this->collVentadetalles = $collVentadetalles;
                $this->collVentadetallesPartial = false;
            }
        }

        return $this->collVentadetalles;
    }

    /**
     * Sets a collection of Ventadetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ventadetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Productovariante The current object (for fluent API support)
     */
    public function setVentadetalles(PropelCollection $ventadetalles, PropelPDO $con = null)
    {
        $ventadetallesToDelete = $this->getVentadetalles(new Criteria(), $con)->diff($ventadetalles);


        $this->ventadetallesScheduledForDeletion = $ventadetallesToDelete;

        foreach ($ventadetallesToDelete as $ventadetalleRemoved) {
            $ventadetalleRemoved->setProductovariante(null);
        }

        $this->collVentadetalles = null;
        foreach ($ventadetalles as $ventadetalle) {
            $this->addVentadetalle($ventadetalle);
        }

        $this->collVentadetalles = $ventadetalles;
        $this->collVentadetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Ventadetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Ventadetalle objects.
     * @throws PropelException
     */
    public function countVentadetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVentadetallesPartial && !$this->isNew();
        if (null === $this->collVentadetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVentadetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVentadetalles());
            }
            $query = VentadetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProductovariante($this)
                ->count($con);
        }

        return count($this->collVentadetalles);
    }

    /**
     * Method called to associate a Ventadetalle object to this object
     * through the Ventadetalle foreign key attribute.
     *
     * @param    Ventadetalle $l Ventadetalle
     * @return Productovariante The current object (for fluent API support)
     */
    public function addVentadetalle(Ventadetalle $l)
    {
        if ($this->collVentadetalles === null) {
            $this->initVentadetalles();
            $this->collVentadetallesPartial = true;
        }

        if (!in_array($l, $this->collVentadetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVentadetalle($l);

            if ($this->ventadetallesScheduledForDeletion and $this->ventadetallesScheduledForDeletion->contains($l)) {
                $this->ventadetallesScheduledForDeletion->remove($this->ventadetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Ventadetalle $ventadetalle The ventadetalle object to add.
     */
    protected function doAddVentadetalle($ventadetalle)
    {
        $this->collVentadetalles[]= $ventadetalle;
        $ventadetalle->setProductovariante($this);
    }

    /**
     * @param	Ventadetalle $ventadetalle The ventadetalle object to remove.
     * @return Productovariante The current object (for fluent API support)
     */
    public function removeVentadetalle($ventadetalle)
    {
        if ($this->getVentadetalles()->contains($ventadetalle)) {
            $this->collVentadetalles->remove($this->collVentadetalles->search($ventadetalle));
            if (null === $this->ventadetallesScheduledForDeletion) {
                $this->ventadetallesScheduledForDeletion = clone $this->collVentadetalles;
                $this->ventadetallesScheduledForDeletion->clear();
            }
            $this->ventadetallesScheduledForDeletion[]= $ventadetalle;
            $ventadetalle->setProductovariante(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     */
    public function getVentadetallesJoinDescuento($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentadetalleQuery::create(null, $criteria);
        $query->joinWith('Descuento', $join_behavior);

        return $this->getVentadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     */
    public function getVentadetallesJoinPromocion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentadetalleQuery::create(null, $criteria);
        $query->joinWith('Promocion', $join_behavior);

        return $this->getVentadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     */
    public function getVentadetallesJoinVenta($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentadetalleQuery::create(null, $criteria);
        $query->joinWith('Venta', $join_behavior);

        return $this->getVentadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Productovariante is new, it will return
     * an empty collection; or if this Productovariante has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Productovariante.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     */
    public function getVentadetallesJoinVentadetalleRelatedByIdventadetallapadre($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentadetalleQuery::create(null, $criteria);
        $query->joinWith('VentadetalleRelatedByIdventadetallapadre', $join_behavior);

        return $this->getVentadetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idproductovariante = null;
        $this->idproducto = null;
        $this->idproductocolor = null;
        $this->idproductomaterial = null;
        $this->productovariante_codigobarras = null;
        $this->productovariante_talla = null;
        $this->productovariante_tallatipo = null;
        $this->productovariante_estatus = null;
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
            if ($this->collCompradetalles) {
                foreach ($this->collCompradetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collDescuentodetalles) {
                foreach ($this->collDescuentodetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collDevoluciondetalles) {
                foreach ($this->collDevoluciondetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPedidos) {
                foreach ($this->collPedidos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPedidomayoristadetalles) {
                foreach ($this->collPedidomayoristadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProductosucursals) {
                foreach ($this->collProductosucursals as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPromociondetalles) {
                foreach ($this->collPromociondetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTransferenciadetalles) {
                foreach ($this->collTransferenciadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVentadetalles) {
                foreach ($this->collVentadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aProducto instanceof Persistent) {
              $this->aProducto->clearAllReferences($deep);
            }
            if ($this->aProductocolor instanceof Persistent) {
              $this->aProductocolor->clearAllReferences($deep);
            }
            if ($this->aProductomaterial instanceof Persistent) {
              $this->aProductomaterial->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCompradetalles instanceof PropelCollection) {
            $this->collCompradetalles->clearIterator();
        }
        $this->collCompradetalles = null;
        if ($this->collDescuentodetalles instanceof PropelCollection) {
            $this->collDescuentodetalles->clearIterator();
        }
        $this->collDescuentodetalles = null;
        if ($this->collDevoluciondetalles instanceof PropelCollection) {
            $this->collDevoluciondetalles->clearIterator();
        }
        $this->collDevoluciondetalles = null;
        if ($this->collPedidos instanceof PropelCollection) {
            $this->collPedidos->clearIterator();
        }
        $this->collPedidos = null;
        if ($this->collPedidomayoristadetalles instanceof PropelCollection) {
            $this->collPedidomayoristadetalles->clearIterator();
        }
        $this->collPedidomayoristadetalles = null;
        if ($this->collProductosucursals instanceof PropelCollection) {
            $this->collProductosucursals->clearIterator();
        }
        $this->collProductosucursals = null;
        if ($this->collPromociondetalles instanceof PropelCollection) {
            $this->collPromociondetalles->clearIterator();
        }
        $this->collPromociondetalles = null;
        if ($this->collTransferenciadetalles instanceof PropelCollection) {
            $this->collTransferenciadetalles->clearIterator();
        }
        $this->collTransferenciadetalles = null;
        if ($this->collVentadetalles instanceof PropelCollection) {
            $this->collVentadetalles->clearIterator();
        }
        $this->collVentadetalles = null;
        $this->aProducto = null;
        $this->aProductocolor = null;
        $this->aProductomaterial = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProductovariantePeer::DEFAULT_STRING_FORMAT);
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
