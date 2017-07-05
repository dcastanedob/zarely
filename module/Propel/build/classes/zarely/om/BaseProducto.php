<?php


/**
 * Base class that represents a row from the 'producto' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseProducto extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProductoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProductoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idproducto field.
     * @var        int
     */
    protected $idproducto;

    /**
     * The value for the producto_modelo field.
     * @var        string
     */
    protected $producto_modelo;

    /**
     * The value for the idmarca field.
     * @var        int
     */
    protected $idmarca;

    /**
     * The value for the idtemporada field.
     * @var        int
     */
    protected $idtemporada;

    /**
     * The value for the producto_comisionable field.
     * @var        int
     */
    protected $producto_comisionable;

    /**
     * The value for the idproveedor field.
     * @var        int
     */
    protected $idproveedor;

    /**
     * The value for the producto_dirigidoa field.
     * @var        string
     */
    protected $producto_dirigidoa;

    /**
     * The value for the producto_precioventa field.
     * @var        string
     */
    protected $producto_precioventa;

    /**
     * The value for the producto_preciomayoreo field.
     * @var        string
     */
    protected $producto_preciomayoreo;

    /**
     * The value for the producto_minimo field.
     * @var        int
     */
    protected $producto_minimo;

    /**
     * The value for the producto_reorden field.
     * @var        int
     */
    protected $producto_reorden;

    /**
     * The value for the producto_maximo field.
     * @var        int
     */
    protected $producto_maximo;

    /**
     * The value for the idtipocalzado field.
     * @var        int
     */
    protected $idtipocalzado;

    /**
     * The value for the producto_descripcion field.
     * @var        string
     */
    protected $producto_descripcion;

    /**
     * The value for the producto_costo field.
     * @var        string
     */
    protected $producto_costo;

    /**
     * @var        Marca
     */
    protected $aMarca;

    /**
     * @var        Proveedor
     */
    protected $aProveedor;

    /**
     * @var        Temporada
     */
    protected $aTemporada;

    /**
     * @var        Tipocalzado
     */
    protected $aTipocalzado;

    /**
     * @var        PropelObjectCollection|Descuentodetalle[] Collection to store aggregation of Descuentodetalle objects.
     */
    protected $collDescuentodetalles;
    protected $collDescuentodetallesPartial;

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
     * @var        PropelObjectCollection|Pedidosucursaldetalle[] Collection to store aggregation of Pedidosucursaldetalle objects.
     */
    protected $collPedidosucursaldetalles;
    protected $collPedidosucursaldetallesPartial;

    /**
     * @var        PropelObjectCollection|Productocolor[] Collection to store aggregation of Productocolor objects.
     */
    protected $collProductocolors;
    protected $collProductocolorsPartial;

    /**
     * @var        PropelObjectCollection|Productomaterial[] Collection to store aggregation of Productomaterial objects.
     */
    protected $collProductomaterials;
    protected $collProductomaterialsPartial;

    /**
     * @var        PropelObjectCollection|Productomedida[] Collection to store aggregation of Productomedida objects.
     */
    protected $collProductomedidas;
    protected $collProductomedidasPartial;

    /**
     * @var        PropelObjectCollection|Productotallaje[] Collection to store aggregation of Productotallaje objects.
     */
    protected $collProductotallajes;
    protected $collProductotallajesPartial;

    /**
     * @var        PropelObjectCollection|Productovariante[] Collection to store aggregation of Productovariante objects.
     */
    protected $collProductovariantes;
    protected $collProductovariantesPartial;

    /**
     * @var        PropelObjectCollection|Promociondetalle[] Collection to store aggregation of Promociondetalle objects.
     */
    protected $collPromociondetalles;
    protected $collPromociondetallesPartial;

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
    protected $descuentodetallesScheduledForDeletion = null;

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
    protected $pedidosucursaldetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productocolorsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productomaterialsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productomedidasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productotallajesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productovariantesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $promociondetallesScheduledForDeletion = null;

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
     * Get the [producto_modelo] column value.
     *
     * @return string
     */
    public function getProductoModelo()
    {

        return $this->producto_modelo;
    }

    /**
     * Get the [idmarca] column value.
     *
     * @return int
     */
    public function getIdmarca()
    {

        return $this->idmarca;
    }

    /**
     * Get the [idtemporada] column value.
     *
     * @return int
     */
    public function getIdtemporada()
    {

        return $this->idtemporada;
    }

    /**
     * Get the [producto_comisionable] column value.
     *
     * @return int
     */
    public function getProductoComisionable()
    {

        return $this->producto_comisionable;
    }

    /**
     * Get the [idproveedor] column value.
     *
     * @return int
     */
    public function getIdproveedor()
    {

        return $this->idproveedor;
    }

    /**
     * Get the [producto_dirigidoa] column value.
     *
     * @return string
     */
    public function getProductoDirigidoa()
    {

        return $this->producto_dirigidoa;
    }

    /**
     * Get the [producto_precioventa] column value.
     *
     * @return string
     */
    public function getProductoPrecioventa()
    {

        return $this->producto_precioventa;
    }

    /**
     * Get the [producto_preciomayoreo] column value.
     *
     * @return string
     */
    public function getProductoPreciomayoreo()
    {

        return $this->producto_preciomayoreo;
    }

    /**
     * Get the [producto_minimo] column value.
     *
     * @return int
     */
    public function getProductoMinimo()
    {

        return $this->producto_minimo;
    }

    /**
     * Get the [producto_reorden] column value.
     *
     * @return int
     */
    public function getProductoReorden()
    {

        return $this->producto_reorden;
    }

    /**
     * Get the [producto_maximo] column value.
     *
     * @return int
     */
    public function getProductoMaximo()
    {

        return $this->producto_maximo;
    }

    /**
     * Get the [idtipocalzado] column value.
     *
     * @return int
     */
    public function getIdtipocalzado()
    {

        return $this->idtipocalzado;
    }

    /**
     * Get the [producto_descripcion] column value.
     *
     * @return string
     */
    public function getProductoDescripcion()
    {

        return $this->producto_descripcion;
    }

    /**
     * Get the [producto_costo] column value.
     *
     * @return string
     */
    public function getProductoCosto()
    {

        return $this->producto_costo;
    }

    /**
     * Set the value of [idproducto] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setIdproducto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproducto !== $v) {
            $this->idproducto = $v;
            $this->modifiedColumns[] = ProductoPeer::IDPRODUCTO;
        }


        return $this;
    } // setIdproducto()

    /**
     * Set the value of [producto_modelo] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoModelo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->producto_modelo !== $v) {
            $this->producto_modelo = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_MODELO;
        }


        return $this;
    } // setProductoModelo()

    /**
     * Set the value of [idmarca] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setIdmarca($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmarca !== $v) {
            $this->idmarca = $v;
            $this->modifiedColumns[] = ProductoPeer::IDMARCA;
        }

        if ($this->aMarca !== null && $this->aMarca->getIdmarca() !== $v) {
            $this->aMarca = null;
        }


        return $this;
    } // setIdmarca()

    /**
     * Set the value of [idtemporada] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setIdtemporada($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtemporada !== $v) {
            $this->idtemporada = $v;
            $this->modifiedColumns[] = ProductoPeer::IDTEMPORADA;
        }

        if ($this->aTemporada !== null && $this->aTemporada->getIdtemporada() !== $v) {
            $this->aTemporada = null;
        }


        return $this;
    } // setIdtemporada()

    /**
     * Set the value of [producto_comisionable] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoComisionable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->producto_comisionable !== $v) {
            $this->producto_comisionable = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_COMISIONABLE;
        }


        return $this;
    } // setProductoComisionable()

    /**
     * Set the value of [idproveedor] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setIdproveedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproveedor !== $v) {
            $this->idproveedor = $v;
            $this->modifiedColumns[] = ProductoPeer::IDPROVEEDOR;
        }

        if ($this->aProveedor !== null && $this->aProveedor->getIdproveedor() !== $v) {
            $this->aProveedor = null;
        }


        return $this;
    } // setIdproveedor()

    /**
     * Set the value of [producto_dirigidoa] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoDirigidoa($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->producto_dirigidoa !== $v) {
            $this->producto_dirigidoa = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_DIRIGIDOA;
        }


        return $this;
    } // setProductoDirigidoa()

    /**
     * Set the value of [producto_precioventa] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoPrecioventa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->producto_precioventa !== $v) {
            $this->producto_precioventa = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_PRECIOVENTA;
        }


        return $this;
    } // setProductoPrecioventa()

    /**
     * Set the value of [producto_preciomayoreo] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoPreciomayoreo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->producto_preciomayoreo !== $v) {
            $this->producto_preciomayoreo = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_PRECIOMAYOREO;
        }


        return $this;
    } // setProductoPreciomayoreo()

    /**
     * Set the value of [producto_minimo] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoMinimo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->producto_minimo !== $v) {
            $this->producto_minimo = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_MINIMO;
        }


        return $this;
    } // setProductoMinimo()

    /**
     * Set the value of [producto_reorden] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoReorden($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->producto_reorden !== $v) {
            $this->producto_reorden = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_REORDEN;
        }


        return $this;
    } // setProductoReorden()

    /**
     * Set the value of [producto_maximo] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoMaximo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->producto_maximo !== $v) {
            $this->producto_maximo = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_MAXIMO;
        }


        return $this;
    } // setProductoMaximo()

    /**
     * Set the value of [idtipocalzado] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setIdtipocalzado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtipocalzado !== $v) {
            $this->idtipocalzado = $v;
            $this->modifiedColumns[] = ProductoPeer::IDTIPOCALZADO;
        }

        if ($this->aTipocalzado !== null && $this->aTipocalzado->getIdtipocalzado() !== $v) {
            $this->aTipocalzado = null;
        }


        return $this;
    } // setIdtipocalzado()

    /**
     * Set the value of [producto_descripcion] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->producto_descripcion !== $v) {
            $this->producto_descripcion = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_DESCRIPCION;
        }


        return $this;
    } // setProductoDescripcion()

    /**
     * Set the value of [producto_costo] column.
     *
     * @param  string $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setProductoCosto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->producto_costo !== $v) {
            $this->producto_costo = $v;
            $this->modifiedColumns[] = ProductoPeer::PRODUCTO_COSTO;
        }


        return $this;
    } // setProductoCosto()

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

            $this->idproducto = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->producto_modelo = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->idmarca = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idtemporada = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->producto_comisionable = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->idproveedor = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->producto_dirigidoa = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->producto_precioventa = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->producto_preciomayoreo = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->producto_minimo = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->producto_reorden = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->producto_maximo = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->idtipocalzado = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->producto_descripcion = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->producto_costo = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 15; // 15 = ProductoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Producto object", $e);
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

        if ($this->aMarca !== null && $this->idmarca !== $this->aMarca->getIdmarca()) {
            $this->aMarca = null;
        }
        if ($this->aTemporada !== null && $this->idtemporada !== $this->aTemporada->getIdtemporada()) {
            $this->aTemporada = null;
        }
        if ($this->aProveedor !== null && $this->idproveedor !== $this->aProveedor->getIdproveedor()) {
            $this->aProveedor = null;
        }
        if ($this->aTipocalzado !== null && $this->idtipocalzado !== $this->aTipocalzado->getIdtipocalzado()) {
            $this->aTipocalzado = null;
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
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProductoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aMarca = null;
            $this->aProveedor = null;
            $this->aTemporada = null;
            $this->aTipocalzado = null;
            $this->collDescuentodetalles = null;

            $this->collPedidos = null;

            $this->collPedidomayoristadetalles = null;

            $this->collPedidosucursaldetalles = null;

            $this->collProductocolors = null;

            $this->collProductomaterials = null;

            $this->collProductomedidas = null;

            $this->collProductotallajes = null;

            $this->collProductovariantes = null;

            $this->collPromociondetalles = null;

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
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProductoQuery::create()
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
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ProductoPeer::addInstanceToPool($this);
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

            if ($this->aMarca !== null) {
                if ($this->aMarca->isModified() || $this->aMarca->isNew()) {
                    $affectedRows += $this->aMarca->save($con);
                }
                $this->setMarca($this->aMarca);
            }

            if ($this->aProveedor !== null) {
                if ($this->aProveedor->isModified() || $this->aProveedor->isNew()) {
                    $affectedRows += $this->aProveedor->save($con);
                }
                $this->setProveedor($this->aProveedor);
            }

            if ($this->aTemporada !== null) {
                if ($this->aTemporada->isModified() || $this->aTemporada->isNew()) {
                    $affectedRows += $this->aTemporada->save($con);
                }
                $this->setTemporada($this->aTemporada);
            }

            if ($this->aTipocalzado !== null) {
                if ($this->aTipocalzado->isModified() || $this->aTipocalzado->isNew()) {
                    $affectedRows += $this->aTipocalzado->save($con);
                }
                $this->setTipocalzado($this->aTipocalzado);
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

            if ($this->pedidosucursaldetallesScheduledForDeletion !== null) {
                if (!$this->pedidosucursaldetallesScheduledForDeletion->isEmpty()) {
                    PedidosucursaldetalleQuery::create()
                        ->filterByPrimaryKeys($this->pedidosucursaldetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->pedidosucursaldetallesScheduledForDeletion = null;
                }
            }

            if ($this->collPedidosucursaldetalles !== null) {
                foreach ($this->collPedidosucursaldetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->productocolorsScheduledForDeletion !== null) {
                if (!$this->productocolorsScheduledForDeletion->isEmpty()) {
                    ProductocolorQuery::create()
                        ->filterByPrimaryKeys($this->productocolorsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->productocolorsScheduledForDeletion = null;
                }
            }

            if ($this->collProductocolors !== null) {
                foreach ($this->collProductocolors as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->productomaterialsScheduledForDeletion !== null) {
                if (!$this->productomaterialsScheduledForDeletion->isEmpty()) {
                    ProductomaterialQuery::create()
                        ->filterByPrimaryKeys($this->productomaterialsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->productomaterialsScheduledForDeletion = null;
                }
            }

            if ($this->collProductomaterials !== null) {
                foreach ($this->collProductomaterials as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->productomedidasScheduledForDeletion !== null) {
                if (!$this->productomedidasScheduledForDeletion->isEmpty()) {
                    ProductomedidaQuery::create()
                        ->filterByPrimaryKeys($this->productomedidasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->productomedidasScheduledForDeletion = null;
                }
            }

            if ($this->collProductomedidas !== null) {
                foreach ($this->collProductomedidas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->productotallajesScheduledForDeletion !== null) {
                if (!$this->productotallajesScheduledForDeletion->isEmpty()) {
                    ProductotallajeQuery::create()
                        ->filterByPrimaryKeys($this->productotallajesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->productotallajesScheduledForDeletion = null;
                }
            }

            if ($this->collProductotallajes !== null) {
                foreach ($this->collProductotallajes as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->productovariantesScheduledForDeletion !== null) {
                if (!$this->productovariantesScheduledForDeletion->isEmpty()) {
                    ProductovarianteQuery::create()
                        ->filterByPrimaryKeys($this->productovariantesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->productovariantesScheduledForDeletion = null;
                }
            }

            if ($this->collProductovariantes !== null) {
                foreach ($this->collProductovariantes as $referrerFK) {
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

        $this->modifiedColumns[] = ProductoPeer::IDPRODUCTO;
        if (null !== $this->idproducto) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProductoPeer::IDPRODUCTO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProductoPeer::IDPRODUCTO)) {
            $modifiedColumns[':p' . $index++]  = '`idproducto`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_MODELO)) {
            $modifiedColumns[':p' . $index++]  = '`producto_modelo`';
        }
        if ($this->isColumnModified(ProductoPeer::IDMARCA)) {
            $modifiedColumns[':p' . $index++]  = '`idmarca`';
        }
        if ($this->isColumnModified(ProductoPeer::IDTEMPORADA)) {
            $modifiedColumns[':p' . $index++]  = '`idtemporada`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_COMISIONABLE)) {
            $modifiedColumns[':p' . $index++]  = '`producto_comisionable`';
        }
        if ($this->isColumnModified(ProductoPeer::IDPROVEEDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idproveedor`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_DIRIGIDOA)) {
            $modifiedColumns[':p' . $index++]  = '`producto_dirigidoa`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_PRECIOVENTA)) {
            $modifiedColumns[':p' . $index++]  = '`producto_precioventa`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_PRECIOMAYOREO)) {
            $modifiedColumns[':p' . $index++]  = '`producto_preciomayoreo`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_MINIMO)) {
            $modifiedColumns[':p' . $index++]  = '`producto_minimo`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_REORDEN)) {
            $modifiedColumns[':p' . $index++]  = '`producto_reorden`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_MAXIMO)) {
            $modifiedColumns[':p' . $index++]  = '`producto_maximo`';
        }
        if ($this->isColumnModified(ProductoPeer::IDTIPOCALZADO)) {
            $modifiedColumns[':p' . $index++]  = '`idtipocalzado`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`producto_descripcion`';
        }
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_COSTO)) {
            $modifiedColumns[':p' . $index++]  = '`producto_costo`';
        }

        $sql = sprintf(
            'INSERT INTO `producto` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idproducto`':
                        $stmt->bindValue($identifier, $this->idproducto, PDO::PARAM_INT);
                        break;
                    case '`producto_modelo`':
                        $stmt->bindValue($identifier, $this->producto_modelo, PDO::PARAM_STR);
                        break;
                    case '`idmarca`':
                        $stmt->bindValue($identifier, $this->idmarca, PDO::PARAM_INT);
                        break;
                    case '`idtemporada`':
                        $stmt->bindValue($identifier, $this->idtemporada, PDO::PARAM_INT);
                        break;
                    case '`producto_comisionable`':
                        $stmt->bindValue($identifier, $this->producto_comisionable, PDO::PARAM_INT);
                        break;
                    case '`idproveedor`':
                        $stmt->bindValue($identifier, $this->idproveedor, PDO::PARAM_INT);
                        break;
                    case '`producto_dirigidoa`':
                        $stmt->bindValue($identifier, $this->producto_dirigidoa, PDO::PARAM_STR);
                        break;
                    case '`producto_precioventa`':
                        $stmt->bindValue($identifier, $this->producto_precioventa, PDO::PARAM_STR);
                        break;
                    case '`producto_preciomayoreo`':
                        $stmt->bindValue($identifier, $this->producto_preciomayoreo, PDO::PARAM_STR);
                        break;
                    case '`producto_minimo`':
                        $stmt->bindValue($identifier, $this->producto_minimo, PDO::PARAM_INT);
                        break;
                    case '`producto_reorden`':
                        $stmt->bindValue($identifier, $this->producto_reorden, PDO::PARAM_INT);
                        break;
                    case '`producto_maximo`':
                        $stmt->bindValue($identifier, $this->producto_maximo, PDO::PARAM_INT);
                        break;
                    case '`idtipocalzado`':
                        $stmt->bindValue($identifier, $this->idtipocalzado, PDO::PARAM_INT);
                        break;
                    case '`producto_descripcion`':
                        $stmt->bindValue($identifier, $this->producto_descripcion, PDO::PARAM_STR);
                        break;
                    case '`producto_costo`':
                        $stmt->bindValue($identifier, $this->producto_costo, PDO::PARAM_STR);
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
        $this->setIdproducto($pk);

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

            if ($this->aMarca !== null) {
                if (!$this->aMarca->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aMarca->getValidationFailures());
                }
            }

            if ($this->aProveedor !== null) {
                if (!$this->aProveedor->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProveedor->getValidationFailures());
                }
            }

            if ($this->aTemporada !== null) {
                if (!$this->aTemporada->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTemporada->getValidationFailures());
                }
            }

            if ($this->aTipocalzado !== null) {
                if (!$this->aTipocalzado->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTipocalzado->getValidationFailures());
                }
            }


            if (($retval = ProductoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collDescuentodetalles !== null) {
                    foreach ($this->collDescuentodetalles as $referrerFK) {
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

                if ($this->collPedidosucursaldetalles !== null) {
                    foreach ($this->collPedidosucursaldetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProductocolors !== null) {
                    foreach ($this->collProductocolors as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProductomaterials !== null) {
                    foreach ($this->collProductomaterials as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProductomedidas !== null) {
                    foreach ($this->collProductomedidas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProductotallajes !== null) {
                    foreach ($this->collProductotallajes as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProductovariantes !== null) {
                    foreach ($this->collProductovariantes as $referrerFK) {
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
        $pos = ProductoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdproducto();
                break;
            case 1:
                return $this->getProductoModelo();
                break;
            case 2:
                return $this->getIdmarca();
                break;
            case 3:
                return $this->getIdtemporada();
                break;
            case 4:
                return $this->getProductoComisionable();
                break;
            case 5:
                return $this->getIdproveedor();
                break;
            case 6:
                return $this->getProductoDirigidoa();
                break;
            case 7:
                return $this->getProductoPrecioventa();
                break;
            case 8:
                return $this->getProductoPreciomayoreo();
                break;
            case 9:
                return $this->getProductoMinimo();
                break;
            case 10:
                return $this->getProductoReorden();
                break;
            case 11:
                return $this->getProductoMaximo();
                break;
            case 12:
                return $this->getIdtipocalzado();
                break;
            case 13:
                return $this->getProductoDescripcion();
                break;
            case 14:
                return $this->getProductoCosto();
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
        if (isset($alreadyDumpedObjects['Producto'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Producto'][$this->getPrimaryKey()] = true;
        $keys = ProductoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdproducto(),
            $keys[1] => $this->getProductoModelo(),
            $keys[2] => $this->getIdmarca(),
            $keys[3] => $this->getIdtemporada(),
            $keys[4] => $this->getProductoComisionable(),
            $keys[5] => $this->getIdproveedor(),
            $keys[6] => $this->getProductoDirigidoa(),
            $keys[7] => $this->getProductoPrecioventa(),
            $keys[8] => $this->getProductoPreciomayoreo(),
            $keys[9] => $this->getProductoMinimo(),
            $keys[10] => $this->getProductoReorden(),
            $keys[11] => $this->getProductoMaximo(),
            $keys[12] => $this->getIdtipocalzado(),
            $keys[13] => $this->getProductoDescripcion(),
            $keys[14] => $this->getProductoCosto(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aMarca) {
                $result['Marca'] = $this->aMarca->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProveedor) {
                $result['Proveedor'] = $this->aProveedor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTemporada) {
                $result['Temporada'] = $this->aTemporada->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTipocalzado) {
                $result['Tipocalzado'] = $this->aTipocalzado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collDescuentodetalles) {
                $result['Descuentodetalles'] = $this->collDescuentodetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPedidos) {
                $result['Pedidos'] = $this->collPedidos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPedidomayoristadetalles) {
                $result['Pedidomayoristadetalles'] = $this->collPedidomayoristadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPedidosucursaldetalles) {
                $result['Pedidosucursaldetalles'] = $this->collPedidosucursaldetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductocolors) {
                $result['Productocolors'] = $this->collProductocolors->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductomaterials) {
                $result['Productomaterials'] = $this->collProductomaterials->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductomedidas) {
                $result['Productomedidas'] = $this->collProductomedidas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductotallajes) {
                $result['Productotallajes'] = $this->collProductotallajes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductovariantes) {
                $result['Productovariantes'] = $this->collProductovariantes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPromociondetalles) {
                $result['Promociondetalles'] = $this->collPromociondetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ProductoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdproducto($value);
                break;
            case 1:
                $this->setProductoModelo($value);
                break;
            case 2:
                $this->setIdmarca($value);
                break;
            case 3:
                $this->setIdtemporada($value);
                break;
            case 4:
                $this->setProductoComisionable($value);
                break;
            case 5:
                $this->setIdproveedor($value);
                break;
            case 6:
                $this->setProductoDirigidoa($value);
                break;
            case 7:
                $this->setProductoPrecioventa($value);
                break;
            case 8:
                $this->setProductoPreciomayoreo($value);
                break;
            case 9:
                $this->setProductoMinimo($value);
                break;
            case 10:
                $this->setProductoReorden($value);
                break;
            case 11:
                $this->setProductoMaximo($value);
                break;
            case 12:
                $this->setIdtipocalzado($value);
                break;
            case 13:
                $this->setProductoDescripcion($value);
                break;
            case 14:
                $this->setProductoCosto($value);
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
        $keys = ProductoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdproducto($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setProductoModelo($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdmarca($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdtemporada($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setProductoComisionable($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdproveedor($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setProductoDirigidoa($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setProductoPrecioventa($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setProductoPreciomayoreo($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setProductoMinimo($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setProductoReorden($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setProductoMaximo($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIdtipocalzado($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setProductoDescripcion($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setProductoCosto($arr[$keys[14]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProductoPeer::DATABASE_NAME);

        if ($this->isColumnModified(ProductoPeer::IDPRODUCTO)) $criteria->add(ProductoPeer::IDPRODUCTO, $this->idproducto);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_MODELO)) $criteria->add(ProductoPeer::PRODUCTO_MODELO, $this->producto_modelo);
        if ($this->isColumnModified(ProductoPeer::IDMARCA)) $criteria->add(ProductoPeer::IDMARCA, $this->idmarca);
        if ($this->isColumnModified(ProductoPeer::IDTEMPORADA)) $criteria->add(ProductoPeer::IDTEMPORADA, $this->idtemporada);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_COMISIONABLE)) $criteria->add(ProductoPeer::PRODUCTO_COMISIONABLE, $this->producto_comisionable);
        if ($this->isColumnModified(ProductoPeer::IDPROVEEDOR)) $criteria->add(ProductoPeer::IDPROVEEDOR, $this->idproveedor);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_DIRIGIDOA)) $criteria->add(ProductoPeer::PRODUCTO_DIRIGIDOA, $this->producto_dirigidoa);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_PRECIOVENTA)) $criteria->add(ProductoPeer::PRODUCTO_PRECIOVENTA, $this->producto_precioventa);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_PRECIOMAYOREO)) $criteria->add(ProductoPeer::PRODUCTO_PRECIOMAYOREO, $this->producto_preciomayoreo);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_MINIMO)) $criteria->add(ProductoPeer::PRODUCTO_MINIMO, $this->producto_minimo);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_REORDEN)) $criteria->add(ProductoPeer::PRODUCTO_REORDEN, $this->producto_reorden);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_MAXIMO)) $criteria->add(ProductoPeer::PRODUCTO_MAXIMO, $this->producto_maximo);
        if ($this->isColumnModified(ProductoPeer::IDTIPOCALZADO)) $criteria->add(ProductoPeer::IDTIPOCALZADO, $this->idtipocalzado);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_DESCRIPCION)) $criteria->add(ProductoPeer::PRODUCTO_DESCRIPCION, $this->producto_descripcion);
        if ($this->isColumnModified(ProductoPeer::PRODUCTO_COSTO)) $criteria->add(ProductoPeer::PRODUCTO_COSTO, $this->producto_costo);

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
        $criteria = new Criteria(ProductoPeer::DATABASE_NAME);
        $criteria->add(ProductoPeer::IDPRODUCTO, $this->idproducto);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdproducto();
    }

    /**
     * Generic method to set the primary key (idproducto column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdproducto($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdproducto();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Producto (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setProductoModelo($this->getProductoModelo());
        $copyObj->setIdmarca($this->getIdmarca());
        $copyObj->setIdtemporada($this->getIdtemporada());
        $copyObj->setProductoComisionable($this->getProductoComisionable());
        $copyObj->setIdproveedor($this->getIdproveedor());
        $copyObj->setProductoDirigidoa($this->getProductoDirigidoa());
        $copyObj->setProductoPrecioventa($this->getProductoPrecioventa());
        $copyObj->setProductoPreciomayoreo($this->getProductoPreciomayoreo());
        $copyObj->setProductoMinimo($this->getProductoMinimo());
        $copyObj->setProductoReorden($this->getProductoReorden());
        $copyObj->setProductoMaximo($this->getProductoMaximo());
        $copyObj->setIdtipocalzado($this->getIdtipocalzado());
        $copyObj->setProductoDescripcion($this->getProductoDescripcion());
        $copyObj->setProductoCosto($this->getProductoCosto());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getDescuentodetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDescuentodetalle($relObj->copy($deepCopy));
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

            foreach ($this->getPedidosucursaldetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPedidosucursaldetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProductocolors() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProductocolor($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProductomaterials() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProductomaterial($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProductomedidas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProductomedida($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProductotallajes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProductotallaje($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProductovariantes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProductovariante($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPromociondetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPromociondetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdproducto(NULL); // this is a auto-increment column, so set to default value
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
     * @return Producto Clone of current object.
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
     * @return ProductoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProductoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Marca object.
     *
     * @param                  Marca $v
     * @return Producto The current object (for fluent API support)
     * @throws PropelException
     */
    public function setMarca(Marca $v = null)
    {
        if ($v === null) {
            $this->setIdmarca(NULL);
        } else {
            $this->setIdmarca($v->getIdmarca());
        }

        $this->aMarca = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Marca object, it will not be re-added.
        if ($v !== null) {
            $v->addProducto($this);
        }


        return $this;
    }


    /**
     * Get the associated Marca object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Marca The associated Marca object.
     * @throws PropelException
     */
    public function getMarca(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aMarca === null && ($this->idmarca !== null) && $doQuery) {
            $this->aMarca = MarcaQuery::create()->findPk($this->idmarca, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aMarca->addProductos($this);
             */
        }

        return $this->aMarca;
    }

    /**
     * Declares an association between this object and a Proveedor object.
     *
     * @param                  Proveedor $v
     * @return Producto The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProveedor(Proveedor $v = null)
    {
        if ($v === null) {
            $this->setIdproveedor(NULL);
        } else {
            $this->setIdproveedor($v->getIdproveedor());
        }

        $this->aProveedor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Proveedor object, it will not be re-added.
        if ($v !== null) {
            $v->addProducto($this);
        }


        return $this;
    }


    /**
     * Get the associated Proveedor object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Proveedor The associated Proveedor object.
     * @throws PropelException
     */
    public function getProveedor(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProveedor === null && ($this->idproveedor !== null) && $doQuery) {
            $this->aProveedor = ProveedorQuery::create()->findPk($this->idproveedor, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProveedor->addProductos($this);
             */
        }

        return $this->aProveedor;
    }

    /**
     * Declares an association between this object and a Temporada object.
     *
     * @param                  Temporada $v
     * @return Producto The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTemporada(Temporada $v = null)
    {
        if ($v === null) {
            $this->setIdtemporada(NULL);
        } else {
            $this->setIdtemporada($v->getIdtemporada());
        }

        $this->aTemporada = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Temporada object, it will not be re-added.
        if ($v !== null) {
            $v->addProducto($this);
        }


        return $this;
    }


    /**
     * Get the associated Temporada object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Temporada The associated Temporada object.
     * @throws PropelException
     */
    public function getTemporada(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTemporada === null && ($this->idtemporada !== null) && $doQuery) {
            $this->aTemporada = TemporadaQuery::create()->findPk($this->idtemporada, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTemporada->addProductos($this);
             */
        }

        return $this->aTemporada;
    }

    /**
     * Declares an association between this object and a Tipocalzado object.
     *
     * @param                  Tipocalzado $v
     * @return Producto The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTipocalzado(Tipocalzado $v = null)
    {
        if ($v === null) {
            $this->setIdtipocalzado(NULL);
        } else {
            $this->setIdtipocalzado($v->getIdtipocalzado());
        }

        $this->aTipocalzado = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Tipocalzado object, it will not be re-added.
        if ($v !== null) {
            $v->addProducto($this);
        }


        return $this;
    }


    /**
     * Get the associated Tipocalzado object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Tipocalzado The associated Tipocalzado object.
     * @throws PropelException
     */
    public function getTipocalzado(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTipocalzado === null && ($this->idtipocalzado !== null) && $doQuery) {
            $this->aTipocalzado = TipocalzadoQuery::create()->findPk($this->idtipocalzado, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTipocalzado->addProductos($this);
             */
        }

        return $this->aTipocalzado;
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
        if ('Descuentodetalle' == $relationName) {
            $this->initDescuentodetalles();
        }
        if ('Pedido' == $relationName) {
            $this->initPedidos();
        }
        if ('Pedidomayoristadetalle' == $relationName) {
            $this->initPedidomayoristadetalles();
        }
        if ('Pedidosucursaldetalle' == $relationName) {
            $this->initPedidosucursaldetalles();
        }
        if ('Productocolor' == $relationName) {
            $this->initProductocolors();
        }
        if ('Productomaterial' == $relationName) {
            $this->initProductomaterials();
        }
        if ('Productomedida' == $relationName) {
            $this->initProductomedidas();
        }
        if ('Productotallaje' == $relationName) {
            $this->initProductotallajes();
        }
        if ('Productovariante' == $relationName) {
            $this->initProductovariantes();
        }
        if ('Promociondetalle' == $relationName) {
            $this->initPromociondetalles();
        }
    }

    /**
     * Clears out the collDescuentodetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
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
     * If this Producto is new, it will return
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
                    ->filterByProducto($this)
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
     * @return Producto The current object (for fluent API support)
     */
    public function setDescuentodetalles(PropelCollection $descuentodetalles, PropelPDO $con = null)
    {
        $descuentodetallesToDelete = $this->getDescuentodetalles(new Criteria(), $con)->diff($descuentodetalles);


        $this->descuentodetallesScheduledForDeletion = $descuentodetallesToDelete;

        foreach ($descuentodetallesToDelete as $descuentodetalleRemoved) {
            $descuentodetalleRemoved->setProducto(null);
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
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collDescuentodetalles);
    }

    /**
     * Method called to associate a Descuentodetalle object to this object
     * through the Descuentodetalle foreign key attribute.
     *
     * @param    Descuentodetalle $l Descuentodetalle
     * @return Producto The current object (for fluent API support)
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
        $descuentodetalle->setProducto($this);
    }

    /**
     * @param	Descuentodetalle $descuentodetalle The descuentodetalle object to remove.
     * @return Producto The current object (for fluent API support)
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
            $descuentodetalle->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Descuentodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Descuentodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Descuentodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Descuentodetalle[] List of Descuentodetalle objects
     */
    public function getDescuentodetallesJoinProductovariante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DescuentodetalleQuery::create(null, $criteria);
        $query->joinWith('Productovariante', $join_behavior);

        return $this->getDescuentodetalles($query, $con);
    }

    /**
     * Clears out the collPedidos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
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
     * If this Producto is new, it will return
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
                    ->filterByProducto($this)
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
     * @return Producto The current object (for fluent API support)
     */
    public function setPedidos(PropelCollection $pedidos, PropelPDO $con = null)
    {
        $pedidosToDelete = $this->getPedidos(new Criteria(), $con)->diff($pedidos);


        $this->pedidosScheduledForDeletion = $pedidosToDelete;

        foreach ($pedidosToDelete as $pedidoRemoved) {
            $pedidoRemoved->setProducto(null);
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
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collPedidos);
    }

    /**
     * Method called to associate a Pedido object to this object
     * through the Pedido foreign key attribute.
     *
     * @param    Pedido $l Pedido
     * @return Producto The current object (for fluent API support)
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
        $pedido->setProducto($this);
    }

    /**
     * @param	Pedido $pedido The pedido object to remove.
     * @return Producto The current object (for fluent API support)
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
            $pedido->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Pedidos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pedido[] List of Pedido objects
     */
    public function getPedidosJoinProductovariante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PedidoQuery::create(null, $criteria);
        $query->joinWith('Productovariante', $join_behavior);

        return $this->getPedidos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Pedidos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * @return Producto The current object (for fluent API support)
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
     * If this Producto is new, it will return
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
                    ->filterByProducto($this)
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
     * @return Producto The current object (for fluent API support)
     */
    public function setPedidomayoristadetalles(PropelCollection $pedidomayoristadetalles, PropelPDO $con = null)
    {
        $pedidomayoristadetallesToDelete = $this->getPedidomayoristadetalles(new Criteria(), $con)->diff($pedidomayoristadetalles);


        $this->pedidomayoristadetallesScheduledForDeletion = $pedidomayoristadetallesToDelete;

        foreach ($pedidomayoristadetallesToDelete as $pedidomayoristadetalleRemoved) {
            $pedidomayoristadetalleRemoved->setProducto(null);
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
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collPedidomayoristadetalles);
    }

    /**
     * Method called to associate a Pedidomayoristadetalle object to this object
     * through the Pedidomayoristadetalle foreign key attribute.
     *
     * @param    Pedidomayoristadetalle $l Pedidomayoristadetalle
     * @return Producto The current object (for fluent API support)
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
        $pedidomayoristadetalle->setProducto($this);
    }

    /**
     * @param	Pedidomayoristadetalle $pedidomayoristadetalle The pedidomayoristadetalle object to remove.
     * @return Producto The current object (for fluent API support)
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
            $pedidomayoristadetalle->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Pedidomayoristadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Pedidomayoristadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pedidomayoristadetalle[] List of Pedidomayoristadetalle objects
     */
    public function getPedidomayoristadetallesJoinProductovariante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PedidomayoristadetalleQuery::create(null, $criteria);
        $query->joinWith('Productovariante', $join_behavior);

        return $this->getPedidomayoristadetalles($query, $con);
    }

    /**
     * Clears out the collPedidosucursaldetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
     * @see        addPedidosucursaldetalles()
     */
    public function clearPedidosucursaldetalles()
    {
        $this->collPedidosucursaldetalles = null; // important to set this to null since that means it is uninitialized
        $this->collPedidosucursaldetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collPedidosucursaldetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialPedidosucursaldetalles($v = true)
    {
        $this->collPedidosucursaldetallesPartial = $v;
    }

    /**
     * Initializes the collPedidosucursaldetalles collection.
     *
     * By default this just sets the collPedidosucursaldetalles collection to an empty array (like clearcollPedidosucursaldetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPedidosucursaldetalles($overrideExisting = true)
    {
        if (null !== $this->collPedidosucursaldetalles && !$overrideExisting) {
            return;
        }
        $this->collPedidosucursaldetalles = new PropelObjectCollection();
        $this->collPedidosucursaldetalles->setModel('Pedidosucursaldetalle');
    }

    /**
     * Gets an array of Pedidosucursaldetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Producto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Pedidosucursaldetalle[] List of Pedidosucursaldetalle objects
     * @throws PropelException
     */
    public function getPedidosucursaldetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPedidosucursaldetallesPartial && !$this->isNew();
        if (null === $this->collPedidosucursaldetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPedidosucursaldetalles) {
                // return empty collection
                $this->initPedidosucursaldetalles();
            } else {
                $collPedidosucursaldetalles = PedidosucursaldetalleQuery::create(null, $criteria)
                    ->filterByProducto($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPedidosucursaldetallesPartial && count($collPedidosucursaldetalles)) {
                      $this->initPedidosucursaldetalles(false);

                      foreach ($collPedidosucursaldetalles as $obj) {
                        if (false == $this->collPedidosucursaldetalles->contains($obj)) {
                          $this->collPedidosucursaldetalles->append($obj);
                        }
                      }

                      $this->collPedidosucursaldetallesPartial = true;
                    }

                    $collPedidosucursaldetalles->getInternalIterator()->rewind();

                    return $collPedidosucursaldetalles;
                }

                if ($partial && $this->collPedidosucursaldetalles) {
                    foreach ($this->collPedidosucursaldetalles as $obj) {
                        if ($obj->isNew()) {
                            $collPedidosucursaldetalles[] = $obj;
                        }
                    }
                }

                $this->collPedidosucursaldetalles = $collPedidosucursaldetalles;
                $this->collPedidosucursaldetallesPartial = false;
            }
        }

        return $this->collPedidosucursaldetalles;
    }

    /**
     * Sets a collection of Pedidosucursaldetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $pedidosucursaldetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Producto The current object (for fluent API support)
     */
    public function setPedidosucursaldetalles(PropelCollection $pedidosucursaldetalles, PropelPDO $con = null)
    {
        $pedidosucursaldetallesToDelete = $this->getPedidosucursaldetalles(new Criteria(), $con)->diff($pedidosucursaldetalles);


        $this->pedidosucursaldetallesScheduledForDeletion = $pedidosucursaldetallesToDelete;

        foreach ($pedidosucursaldetallesToDelete as $pedidosucursaldetalleRemoved) {
            $pedidosucursaldetalleRemoved->setProducto(null);
        }

        $this->collPedidosucursaldetalles = null;
        foreach ($pedidosucursaldetalles as $pedidosucursaldetalle) {
            $this->addPedidosucursaldetalle($pedidosucursaldetalle);
        }

        $this->collPedidosucursaldetalles = $pedidosucursaldetalles;
        $this->collPedidosucursaldetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Pedidosucursaldetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Pedidosucursaldetalle objects.
     * @throws PropelException
     */
    public function countPedidosucursaldetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPedidosucursaldetallesPartial && !$this->isNew();
        if (null === $this->collPedidosucursaldetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPedidosucursaldetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPedidosucursaldetalles());
            }
            $query = PedidosucursaldetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collPedidosucursaldetalles);
    }

    /**
     * Method called to associate a Pedidosucursaldetalle object to this object
     * through the Pedidosucursaldetalle foreign key attribute.
     *
     * @param    Pedidosucursaldetalle $l Pedidosucursaldetalle
     * @return Producto The current object (for fluent API support)
     */
    public function addPedidosucursaldetalle(Pedidosucursaldetalle $l)
    {
        if ($this->collPedidosucursaldetalles === null) {
            $this->initPedidosucursaldetalles();
            $this->collPedidosucursaldetallesPartial = true;
        }

        if (!in_array($l, $this->collPedidosucursaldetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPedidosucursaldetalle($l);

            if ($this->pedidosucursaldetallesScheduledForDeletion and $this->pedidosucursaldetallesScheduledForDeletion->contains($l)) {
                $this->pedidosucursaldetallesScheduledForDeletion->remove($this->pedidosucursaldetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Pedidosucursaldetalle $pedidosucursaldetalle The pedidosucursaldetalle object to add.
     */
    protected function doAddPedidosucursaldetalle($pedidosucursaldetalle)
    {
        $this->collPedidosucursaldetalles[]= $pedidosucursaldetalle;
        $pedidosucursaldetalle->setProducto($this);
    }

    /**
     * @param	Pedidosucursaldetalle $pedidosucursaldetalle The pedidosucursaldetalle object to remove.
     * @return Producto The current object (for fluent API support)
     */
    public function removePedidosucursaldetalle($pedidosucursaldetalle)
    {
        if ($this->getPedidosucursaldetalles()->contains($pedidosucursaldetalle)) {
            $this->collPedidosucursaldetalles->remove($this->collPedidosucursaldetalles->search($pedidosucursaldetalle));
            if (null === $this->pedidosucursaldetallesScheduledForDeletion) {
                $this->pedidosucursaldetallesScheduledForDeletion = clone $this->collPedidosucursaldetalles;
                $this->pedidosucursaldetallesScheduledForDeletion->clear();
            }
            $this->pedidosucursaldetallesScheduledForDeletion[]= $pedidosucursaldetalle;
            $pedidosucursaldetalle->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Pedidosucursaldetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pedidosucursaldetalle[] List of Pedidosucursaldetalle objects
     */
    public function getPedidosucursaldetallesJoinPedidosucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PedidosucursaldetalleQuery::create(null, $criteria);
        $query->joinWith('Pedidosucursal', $join_behavior);

        return $this->getPedidosucursaldetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Pedidosucursaldetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pedidosucursaldetalle[] List of Pedidosucursaldetalle objects
     */
    public function getPedidosucursaldetallesJoinProductovariante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PedidosucursaldetalleQuery::create(null, $criteria);
        $query->joinWith('Productovariante', $join_behavior);

        return $this->getPedidosucursaldetalles($query, $con);
    }

    /**
     * Clears out the collProductocolors collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
     * @see        addProductocolors()
     */
    public function clearProductocolors()
    {
        $this->collProductocolors = null; // important to set this to null since that means it is uninitialized
        $this->collProductocolorsPartial = null;

        return $this;
    }

    /**
     * reset is the collProductocolors collection loaded partially
     *
     * @return void
     */
    public function resetPartialProductocolors($v = true)
    {
        $this->collProductocolorsPartial = $v;
    }

    /**
     * Initializes the collProductocolors collection.
     *
     * By default this just sets the collProductocolors collection to an empty array (like clearcollProductocolors());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProductocolors($overrideExisting = true)
    {
        if (null !== $this->collProductocolors && !$overrideExisting) {
            return;
        }
        $this->collProductocolors = new PropelObjectCollection();
        $this->collProductocolors->setModel('Productocolor');
    }

    /**
     * Gets an array of Productocolor objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Producto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Productocolor[] List of Productocolor objects
     * @throws PropelException
     */
    public function getProductocolors($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProductocolorsPartial && !$this->isNew();
        if (null === $this->collProductocolors || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProductocolors) {
                // return empty collection
                $this->initProductocolors();
            } else {
                $collProductocolors = ProductocolorQuery::create(null, $criteria)
                    ->filterByProducto($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProductocolorsPartial && count($collProductocolors)) {
                      $this->initProductocolors(false);

                      foreach ($collProductocolors as $obj) {
                        if (false == $this->collProductocolors->contains($obj)) {
                          $this->collProductocolors->append($obj);
                        }
                      }

                      $this->collProductocolorsPartial = true;
                    }

                    $collProductocolors->getInternalIterator()->rewind();

                    return $collProductocolors;
                }

                if ($partial && $this->collProductocolors) {
                    foreach ($this->collProductocolors as $obj) {
                        if ($obj->isNew()) {
                            $collProductocolors[] = $obj;
                        }
                    }
                }

                $this->collProductocolors = $collProductocolors;
                $this->collProductocolorsPartial = false;
            }
        }

        return $this->collProductocolors;
    }

    /**
     * Sets a collection of Productocolor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $productocolors A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Producto The current object (for fluent API support)
     */
    public function setProductocolors(PropelCollection $productocolors, PropelPDO $con = null)
    {
        $productocolorsToDelete = $this->getProductocolors(new Criteria(), $con)->diff($productocolors);


        $this->productocolorsScheduledForDeletion = $productocolorsToDelete;

        foreach ($productocolorsToDelete as $productocolorRemoved) {
            $productocolorRemoved->setProducto(null);
        }

        $this->collProductocolors = null;
        foreach ($productocolors as $productocolor) {
            $this->addProductocolor($productocolor);
        }

        $this->collProductocolors = $productocolors;
        $this->collProductocolorsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Productocolor objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Productocolor objects.
     * @throws PropelException
     */
    public function countProductocolors(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProductocolorsPartial && !$this->isNew();
        if (null === $this->collProductocolors || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProductocolors) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProductocolors());
            }
            $query = ProductocolorQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collProductocolors);
    }

    /**
     * Method called to associate a Productocolor object to this object
     * through the Productocolor foreign key attribute.
     *
     * @param    Productocolor $l Productocolor
     * @return Producto The current object (for fluent API support)
     */
    public function addProductocolor(Productocolor $l)
    {
        if ($this->collProductocolors === null) {
            $this->initProductocolors();
            $this->collProductocolorsPartial = true;
        }

        if (!in_array($l, $this->collProductocolors->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProductocolor($l);

            if ($this->productocolorsScheduledForDeletion and $this->productocolorsScheduledForDeletion->contains($l)) {
                $this->productocolorsScheduledForDeletion->remove($this->productocolorsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Productocolor $productocolor The productocolor object to add.
     */
    protected function doAddProductocolor($productocolor)
    {
        $this->collProductocolors[]= $productocolor;
        $productocolor->setProducto($this);
    }

    /**
     * @param	Productocolor $productocolor The productocolor object to remove.
     * @return Producto The current object (for fluent API support)
     */
    public function removeProductocolor($productocolor)
    {
        if ($this->getProductocolors()->contains($productocolor)) {
            $this->collProductocolors->remove($this->collProductocolors->search($productocolor));
            if (null === $this->productocolorsScheduledForDeletion) {
                $this->productocolorsScheduledForDeletion = clone $this->collProductocolors;
                $this->productocolorsScheduledForDeletion->clear();
            }
            $this->productocolorsScheduledForDeletion[]= clone $productocolor;
            $productocolor->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Productocolors from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productocolor[] List of Productocolor objects
     */
    public function getProductocolorsJoinColor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductocolorQuery::create(null, $criteria);
        $query->joinWith('Color', $join_behavior);

        return $this->getProductocolors($query, $con);
    }

    /**
     * Clears out the collProductomaterials collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
     * @see        addProductomaterials()
     */
    public function clearProductomaterials()
    {
        $this->collProductomaterials = null; // important to set this to null since that means it is uninitialized
        $this->collProductomaterialsPartial = null;

        return $this;
    }

    /**
     * reset is the collProductomaterials collection loaded partially
     *
     * @return void
     */
    public function resetPartialProductomaterials($v = true)
    {
        $this->collProductomaterialsPartial = $v;
    }

    /**
     * Initializes the collProductomaterials collection.
     *
     * By default this just sets the collProductomaterials collection to an empty array (like clearcollProductomaterials());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProductomaterials($overrideExisting = true)
    {
        if (null !== $this->collProductomaterials && !$overrideExisting) {
            return;
        }
        $this->collProductomaterials = new PropelObjectCollection();
        $this->collProductomaterials->setModel('Productomaterial');
    }

    /**
     * Gets an array of Productomaterial objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Producto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Productomaterial[] List of Productomaterial objects
     * @throws PropelException
     */
    public function getProductomaterials($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProductomaterialsPartial && !$this->isNew();
        if (null === $this->collProductomaterials || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProductomaterials) {
                // return empty collection
                $this->initProductomaterials();
            } else {
                $collProductomaterials = ProductomaterialQuery::create(null, $criteria)
                    ->filterByProducto($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProductomaterialsPartial && count($collProductomaterials)) {
                      $this->initProductomaterials(false);

                      foreach ($collProductomaterials as $obj) {
                        if (false == $this->collProductomaterials->contains($obj)) {
                          $this->collProductomaterials->append($obj);
                        }
                      }

                      $this->collProductomaterialsPartial = true;
                    }

                    $collProductomaterials->getInternalIterator()->rewind();

                    return $collProductomaterials;
                }

                if ($partial && $this->collProductomaterials) {
                    foreach ($this->collProductomaterials as $obj) {
                        if ($obj->isNew()) {
                            $collProductomaterials[] = $obj;
                        }
                    }
                }

                $this->collProductomaterials = $collProductomaterials;
                $this->collProductomaterialsPartial = false;
            }
        }

        return $this->collProductomaterials;
    }

    /**
     * Sets a collection of Productomaterial objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $productomaterials A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Producto The current object (for fluent API support)
     */
    public function setProductomaterials(PropelCollection $productomaterials, PropelPDO $con = null)
    {
        $productomaterialsToDelete = $this->getProductomaterials(new Criteria(), $con)->diff($productomaterials);


        $this->productomaterialsScheduledForDeletion = $productomaterialsToDelete;

        foreach ($productomaterialsToDelete as $productomaterialRemoved) {
            $productomaterialRemoved->setProducto(null);
        }

        $this->collProductomaterials = null;
        foreach ($productomaterials as $productomaterial) {
            $this->addProductomaterial($productomaterial);
        }

        $this->collProductomaterials = $productomaterials;
        $this->collProductomaterialsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Productomaterial objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Productomaterial objects.
     * @throws PropelException
     */
    public function countProductomaterials(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProductomaterialsPartial && !$this->isNew();
        if (null === $this->collProductomaterials || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProductomaterials) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProductomaterials());
            }
            $query = ProductomaterialQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collProductomaterials);
    }

    /**
     * Method called to associate a Productomaterial object to this object
     * through the Productomaterial foreign key attribute.
     *
     * @param    Productomaterial $l Productomaterial
     * @return Producto The current object (for fluent API support)
     */
    public function addProductomaterial(Productomaterial $l)
    {
        if ($this->collProductomaterials === null) {
            $this->initProductomaterials();
            $this->collProductomaterialsPartial = true;
        }

        if (!in_array($l, $this->collProductomaterials->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProductomaterial($l);

            if ($this->productomaterialsScheduledForDeletion and $this->productomaterialsScheduledForDeletion->contains($l)) {
                $this->productomaterialsScheduledForDeletion->remove($this->productomaterialsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Productomaterial $productomaterial The productomaterial object to add.
     */
    protected function doAddProductomaterial($productomaterial)
    {
        $this->collProductomaterials[]= $productomaterial;
        $productomaterial->setProducto($this);
    }

    /**
     * @param	Productomaterial $productomaterial The productomaterial object to remove.
     * @return Producto The current object (for fluent API support)
     */
    public function removeProductomaterial($productomaterial)
    {
        if ($this->getProductomaterials()->contains($productomaterial)) {
            $this->collProductomaterials->remove($this->collProductomaterials->search($productomaterial));
            if (null === $this->productomaterialsScheduledForDeletion) {
                $this->productomaterialsScheduledForDeletion = clone $this->collProductomaterials;
                $this->productomaterialsScheduledForDeletion->clear();
            }
            $this->productomaterialsScheduledForDeletion[]= clone $productomaterial;
            $productomaterial->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Productomaterials from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productomaterial[] List of Productomaterial objects
     */
    public function getProductomaterialsJoinMaterial($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductomaterialQuery::create(null, $criteria);
        $query->joinWith('Material', $join_behavior);

        return $this->getProductomaterials($query, $con);
    }

    /**
     * Clears out the collProductomedidas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
     * @see        addProductomedidas()
     */
    public function clearProductomedidas()
    {
        $this->collProductomedidas = null; // important to set this to null since that means it is uninitialized
        $this->collProductomedidasPartial = null;

        return $this;
    }

    /**
     * reset is the collProductomedidas collection loaded partially
     *
     * @return void
     */
    public function resetPartialProductomedidas($v = true)
    {
        $this->collProductomedidasPartial = $v;
    }

    /**
     * Initializes the collProductomedidas collection.
     *
     * By default this just sets the collProductomedidas collection to an empty array (like clearcollProductomedidas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProductomedidas($overrideExisting = true)
    {
        if (null !== $this->collProductomedidas && !$overrideExisting) {
            return;
        }
        $this->collProductomedidas = new PropelObjectCollection();
        $this->collProductomedidas->setModel('Productomedida');
    }

    /**
     * Gets an array of Productomedida objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Producto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Productomedida[] List of Productomedida objects
     * @throws PropelException
     */
    public function getProductomedidas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProductomedidasPartial && !$this->isNew();
        if (null === $this->collProductomedidas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProductomedidas) {
                // return empty collection
                $this->initProductomedidas();
            } else {
                $collProductomedidas = ProductomedidaQuery::create(null, $criteria)
                    ->filterByProducto($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProductomedidasPartial && count($collProductomedidas)) {
                      $this->initProductomedidas(false);

                      foreach ($collProductomedidas as $obj) {
                        if (false == $this->collProductomedidas->contains($obj)) {
                          $this->collProductomedidas->append($obj);
                        }
                      }

                      $this->collProductomedidasPartial = true;
                    }

                    $collProductomedidas->getInternalIterator()->rewind();

                    return $collProductomedidas;
                }

                if ($partial && $this->collProductomedidas) {
                    foreach ($this->collProductomedidas as $obj) {
                        if ($obj->isNew()) {
                            $collProductomedidas[] = $obj;
                        }
                    }
                }

                $this->collProductomedidas = $collProductomedidas;
                $this->collProductomedidasPartial = false;
            }
        }

        return $this->collProductomedidas;
    }

    /**
     * Sets a collection of Productomedida objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $productomedidas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Producto The current object (for fluent API support)
     */
    public function setProductomedidas(PropelCollection $productomedidas, PropelPDO $con = null)
    {
        $productomedidasToDelete = $this->getProductomedidas(new Criteria(), $con)->diff($productomedidas);


        $this->productomedidasScheduledForDeletion = $productomedidasToDelete;

        foreach ($productomedidasToDelete as $productomedidaRemoved) {
            $productomedidaRemoved->setProducto(null);
        }

        $this->collProductomedidas = null;
        foreach ($productomedidas as $productomedida) {
            $this->addProductomedida($productomedida);
        }

        $this->collProductomedidas = $productomedidas;
        $this->collProductomedidasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Productomedida objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Productomedida objects.
     * @throws PropelException
     */
    public function countProductomedidas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProductomedidasPartial && !$this->isNew();
        if (null === $this->collProductomedidas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProductomedidas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProductomedidas());
            }
            $query = ProductomedidaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collProductomedidas);
    }

    /**
     * Method called to associate a Productomedida object to this object
     * through the Productomedida foreign key attribute.
     *
     * @param    Productomedida $l Productomedida
     * @return Producto The current object (for fluent API support)
     */
    public function addProductomedida(Productomedida $l)
    {
        if ($this->collProductomedidas === null) {
            $this->initProductomedidas();
            $this->collProductomedidasPartial = true;
        }

        if (!in_array($l, $this->collProductomedidas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProductomedida($l);

            if ($this->productomedidasScheduledForDeletion and $this->productomedidasScheduledForDeletion->contains($l)) {
                $this->productomedidasScheduledForDeletion->remove($this->productomedidasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Productomedida $productomedida The productomedida object to add.
     */
    protected function doAddProductomedida($productomedida)
    {
        $this->collProductomedidas[]= $productomedida;
        $productomedida->setProducto($this);
    }

    /**
     * @param	Productomedida $productomedida The productomedida object to remove.
     * @return Producto The current object (for fluent API support)
     */
    public function removeProductomedida($productomedida)
    {
        if ($this->getProductomedidas()->contains($productomedida)) {
            $this->collProductomedidas->remove($this->collProductomedidas->search($productomedida));
            if (null === $this->productomedidasScheduledForDeletion) {
                $this->productomedidasScheduledForDeletion = clone $this->collProductomedidas;
                $this->productomedidasScheduledForDeletion->clear();
            }
            $this->productomedidasScheduledForDeletion[]= clone $productomedida;
            $productomedida->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Productomedidas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productomedida[] List of Productomedida objects
     */
    public function getProductomedidasJoinMedida($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductomedidaQuery::create(null, $criteria);
        $query->joinWith('Medida', $join_behavior);

        return $this->getProductomedidas($query, $con);
    }

    /**
     * Clears out the collProductotallajes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
     * @see        addProductotallajes()
     */
    public function clearProductotallajes()
    {
        $this->collProductotallajes = null; // important to set this to null since that means it is uninitialized
        $this->collProductotallajesPartial = null;

        return $this;
    }

    /**
     * reset is the collProductotallajes collection loaded partially
     *
     * @return void
     */
    public function resetPartialProductotallajes($v = true)
    {
        $this->collProductotallajesPartial = $v;
    }

    /**
     * Initializes the collProductotallajes collection.
     *
     * By default this just sets the collProductotallajes collection to an empty array (like clearcollProductotallajes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProductotallajes($overrideExisting = true)
    {
        if (null !== $this->collProductotallajes && !$overrideExisting) {
            return;
        }
        $this->collProductotallajes = new PropelObjectCollection();
        $this->collProductotallajes->setModel('Productotallaje');
    }

    /**
     * Gets an array of Productotallaje objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Producto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Productotallaje[] List of Productotallaje objects
     * @throws PropelException
     */
    public function getProductotallajes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProductotallajesPartial && !$this->isNew();
        if (null === $this->collProductotallajes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProductotallajes) {
                // return empty collection
                $this->initProductotallajes();
            } else {
                $collProductotallajes = ProductotallajeQuery::create(null, $criteria)
                    ->filterByProducto($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProductotallajesPartial && count($collProductotallajes)) {
                      $this->initProductotallajes(false);

                      foreach ($collProductotallajes as $obj) {
                        if (false == $this->collProductotallajes->contains($obj)) {
                          $this->collProductotallajes->append($obj);
                        }
                      }

                      $this->collProductotallajesPartial = true;
                    }

                    $collProductotallajes->getInternalIterator()->rewind();

                    return $collProductotallajes;
                }

                if ($partial && $this->collProductotallajes) {
                    foreach ($this->collProductotallajes as $obj) {
                        if ($obj->isNew()) {
                            $collProductotallajes[] = $obj;
                        }
                    }
                }

                $this->collProductotallajes = $collProductotallajes;
                $this->collProductotallajesPartial = false;
            }
        }

        return $this->collProductotallajes;
    }

    /**
     * Sets a collection of Productotallaje objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $productotallajes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Producto The current object (for fluent API support)
     */
    public function setProductotallajes(PropelCollection $productotallajes, PropelPDO $con = null)
    {
        $productotallajesToDelete = $this->getProductotallajes(new Criteria(), $con)->diff($productotallajes);


        $this->productotallajesScheduledForDeletion = $productotallajesToDelete;

        foreach ($productotallajesToDelete as $productotallajeRemoved) {
            $productotallajeRemoved->setProducto(null);
        }

        $this->collProductotallajes = null;
        foreach ($productotallajes as $productotallaje) {
            $this->addProductotallaje($productotallaje);
        }

        $this->collProductotallajes = $productotallajes;
        $this->collProductotallajesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Productotallaje objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Productotallaje objects.
     * @throws PropelException
     */
    public function countProductotallajes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProductotallajesPartial && !$this->isNew();
        if (null === $this->collProductotallajes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProductotallajes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProductotallajes());
            }
            $query = ProductotallajeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collProductotallajes);
    }

    /**
     * Method called to associate a Productotallaje object to this object
     * through the Productotallaje foreign key attribute.
     *
     * @param    Productotallaje $l Productotallaje
     * @return Producto The current object (for fluent API support)
     */
    public function addProductotallaje(Productotallaje $l)
    {
        if ($this->collProductotallajes === null) {
            $this->initProductotallajes();
            $this->collProductotallajesPartial = true;
        }

        if (!in_array($l, $this->collProductotallajes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProductotallaje($l);

            if ($this->productotallajesScheduledForDeletion and $this->productotallajesScheduledForDeletion->contains($l)) {
                $this->productotallajesScheduledForDeletion->remove($this->productotallajesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Productotallaje $productotallaje The productotallaje object to add.
     */
    protected function doAddProductotallaje($productotallaje)
    {
        $this->collProductotallajes[]= $productotallaje;
        $productotallaje->setProducto($this);
    }

    /**
     * @param	Productotallaje $productotallaje The productotallaje object to remove.
     * @return Producto The current object (for fluent API support)
     */
    public function removeProductotallaje($productotallaje)
    {
        if ($this->getProductotallajes()->contains($productotallaje)) {
            $this->collProductotallajes->remove($this->collProductotallajes->search($productotallaje));
            if (null === $this->productotallajesScheduledForDeletion) {
                $this->productotallajesScheduledForDeletion = clone $this->collProductotallajes;
                $this->productotallajesScheduledForDeletion->clear();
            }
            $this->productotallajesScheduledForDeletion[]= clone $productotallaje;
            $productotallaje->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Productotallajes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productotallaje[] List of Productotallaje objects
     */
    public function getProductotallajesJoinTallaje($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductotallajeQuery::create(null, $criteria);
        $query->joinWith('Tallaje', $join_behavior);

        return $this->getProductotallajes($query, $con);
    }

    /**
     * Clears out the collProductovariantes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
     * @see        addProductovariantes()
     */
    public function clearProductovariantes()
    {
        $this->collProductovariantes = null; // important to set this to null since that means it is uninitialized
        $this->collProductovariantesPartial = null;

        return $this;
    }

    /**
     * reset is the collProductovariantes collection loaded partially
     *
     * @return void
     */
    public function resetPartialProductovariantes($v = true)
    {
        $this->collProductovariantesPartial = $v;
    }

    /**
     * Initializes the collProductovariantes collection.
     *
     * By default this just sets the collProductovariantes collection to an empty array (like clearcollProductovariantes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProductovariantes($overrideExisting = true)
    {
        if (null !== $this->collProductovariantes && !$overrideExisting) {
            return;
        }
        $this->collProductovariantes = new PropelObjectCollection();
        $this->collProductovariantes->setModel('Productovariante');
    }

    /**
     * Gets an array of Productovariante objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Producto is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Productovariante[] List of Productovariante objects
     * @throws PropelException
     */
    public function getProductovariantes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProductovariantesPartial && !$this->isNew();
        if (null === $this->collProductovariantes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProductovariantes) {
                // return empty collection
                $this->initProductovariantes();
            } else {
                $collProductovariantes = ProductovarianteQuery::create(null, $criteria)
                    ->filterByProducto($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProductovariantesPartial && count($collProductovariantes)) {
                      $this->initProductovariantes(false);

                      foreach ($collProductovariantes as $obj) {
                        if (false == $this->collProductovariantes->contains($obj)) {
                          $this->collProductovariantes->append($obj);
                        }
                      }

                      $this->collProductovariantesPartial = true;
                    }

                    $collProductovariantes->getInternalIterator()->rewind();

                    return $collProductovariantes;
                }

                if ($partial && $this->collProductovariantes) {
                    foreach ($this->collProductovariantes as $obj) {
                        if ($obj->isNew()) {
                            $collProductovariantes[] = $obj;
                        }
                    }
                }

                $this->collProductovariantes = $collProductovariantes;
                $this->collProductovariantesPartial = false;
            }
        }

        return $this->collProductovariantes;
    }

    /**
     * Sets a collection of Productovariante objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $productovariantes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Producto The current object (for fluent API support)
     */
    public function setProductovariantes(PropelCollection $productovariantes, PropelPDO $con = null)
    {
        $productovariantesToDelete = $this->getProductovariantes(new Criteria(), $con)->diff($productovariantes);


        $this->productovariantesScheduledForDeletion = $productovariantesToDelete;

        foreach ($productovariantesToDelete as $productovarianteRemoved) {
            $productovarianteRemoved->setProducto(null);
        }

        $this->collProductovariantes = null;
        foreach ($productovariantes as $productovariante) {
            $this->addProductovariante($productovariante);
        }

        $this->collProductovariantes = $productovariantes;
        $this->collProductovariantesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Productovariante objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Productovariante objects.
     * @throws PropelException
     */
    public function countProductovariantes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProductovariantesPartial && !$this->isNew();
        if (null === $this->collProductovariantes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProductovariantes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProductovariantes());
            }
            $query = ProductovarianteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collProductovariantes);
    }

    /**
     * Method called to associate a Productovariante object to this object
     * through the Productovariante foreign key attribute.
     *
     * @param    Productovariante $l Productovariante
     * @return Producto The current object (for fluent API support)
     */
    public function addProductovariante(Productovariante $l)
    {
        if ($this->collProductovariantes === null) {
            $this->initProductovariantes();
            $this->collProductovariantesPartial = true;
        }

        if (!in_array($l, $this->collProductovariantes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProductovariante($l);

            if ($this->productovariantesScheduledForDeletion and $this->productovariantesScheduledForDeletion->contains($l)) {
                $this->productovariantesScheduledForDeletion->remove($this->productovariantesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Productovariante $productovariante The productovariante object to add.
     */
    protected function doAddProductovariante($productovariante)
    {
        $this->collProductovariantes[]= $productovariante;
        $productovariante->setProducto($this);
    }

    /**
     * @param	Productovariante $productovariante The productovariante object to remove.
     * @return Producto The current object (for fluent API support)
     */
    public function removeProductovariante($productovariante)
    {
        if ($this->getProductovariantes()->contains($productovariante)) {
            $this->collProductovariantes->remove($this->collProductovariantes->search($productovariante));
            if (null === $this->productovariantesScheduledForDeletion) {
                $this->productovariantesScheduledForDeletion = clone $this->collProductovariantes;
                $this->productovariantesScheduledForDeletion->clear();
            }
            $this->productovariantesScheduledForDeletion[]= clone $productovariante;
            $productovariante->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Productovariantes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productovariante[] List of Productovariante objects
     */
    public function getProductovariantesJoinProductocolor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductovarianteQuery::create(null, $criteria);
        $query->joinWith('Productocolor', $join_behavior);

        return $this->getProductovariantes($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Productovariantes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productovariante[] List of Productovariante objects
     */
    public function getProductovariantesJoinProductomaterial($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductovarianteQuery::create(null, $criteria);
        $query->joinWith('Productomaterial', $join_behavior);

        return $this->getProductovariantes($query, $con);
    }

    /**
     * Clears out the collPromociondetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Producto The current object (for fluent API support)
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
     * If this Producto is new, it will return
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
                    ->filterByProducto($this)
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
     * @return Producto The current object (for fluent API support)
     */
    public function setPromociondetalles(PropelCollection $promociondetalles, PropelPDO $con = null)
    {
        $promociondetallesToDelete = $this->getPromociondetalles(new Criteria(), $con)->diff($promociondetalles);


        $this->promociondetallesScheduledForDeletion = $promociondetallesToDelete;

        foreach ($promociondetallesToDelete as $promociondetalleRemoved) {
            $promociondetalleRemoved->setProducto(null);
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
                ->filterByProducto($this)
                ->count($con);
        }

        return count($this->collPromociondetalles);
    }

    /**
     * Method called to associate a Promociondetalle object to this object
     * through the Promociondetalle foreign key attribute.
     *
     * @param    Promociondetalle $l Promociondetalle
     * @return Producto The current object (for fluent API support)
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
        $promociondetalle->setProducto($this);
    }

    /**
     * @param	Promociondetalle $promociondetalle The promociondetalle object to remove.
     * @return Producto The current object (for fluent API support)
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
            $promociondetalle->setProducto(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Promociondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Promociondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Promociondetalle[] List of Promociondetalle objects
     */
    public function getPromociondetallesJoinProductovariante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PromociondetalleQuery::create(null, $criteria);
        $query->joinWith('Productovariante', $join_behavior);

        return $this->getPromociondetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Producto is new, it will return
     * an empty collection; or if this Producto has previously
     * been saved, it will retrieve related Promociondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Producto.
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idproducto = null;
        $this->producto_modelo = null;
        $this->idmarca = null;
        $this->idtemporada = null;
        $this->producto_comisionable = null;
        $this->idproveedor = null;
        $this->producto_dirigidoa = null;
        $this->producto_precioventa = null;
        $this->producto_preciomayoreo = null;
        $this->producto_minimo = null;
        $this->producto_reorden = null;
        $this->producto_maximo = null;
        $this->idtipocalzado = null;
        $this->producto_descripcion = null;
        $this->producto_costo = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
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
            if ($this->collDescuentodetalles) {
                foreach ($this->collDescuentodetalles as $o) {
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
            if ($this->collPedidosucursaldetalles) {
                foreach ($this->collPedidosucursaldetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProductocolors) {
                foreach ($this->collProductocolors as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProductomaterials) {
                foreach ($this->collProductomaterials as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProductomedidas) {
                foreach ($this->collProductomedidas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProductotallajes) {
                foreach ($this->collProductotallajes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProductovariantes) {
                foreach ($this->collProductovariantes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPromociondetalles) {
                foreach ($this->collPromociondetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aMarca instanceof Persistent) {
              $this->aMarca->clearAllReferences($deep);
            }
            if ($this->aProveedor instanceof Persistent) {
              $this->aProveedor->clearAllReferences($deep);
            }
            if ($this->aTemporada instanceof Persistent) {
              $this->aTemporada->clearAllReferences($deep);
            }
            if ($this->aTipocalzado instanceof Persistent) {
              $this->aTipocalzado->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collDescuentodetalles instanceof PropelCollection) {
            $this->collDescuentodetalles->clearIterator();
        }
        $this->collDescuentodetalles = null;
        if ($this->collPedidos instanceof PropelCollection) {
            $this->collPedidos->clearIterator();
        }
        $this->collPedidos = null;
        if ($this->collPedidomayoristadetalles instanceof PropelCollection) {
            $this->collPedidomayoristadetalles->clearIterator();
        }
        $this->collPedidomayoristadetalles = null;
        if ($this->collPedidosucursaldetalles instanceof PropelCollection) {
            $this->collPedidosucursaldetalles->clearIterator();
        }
        $this->collPedidosucursaldetalles = null;
        if ($this->collProductocolors instanceof PropelCollection) {
            $this->collProductocolors->clearIterator();
        }
        $this->collProductocolors = null;
        if ($this->collProductomaterials instanceof PropelCollection) {
            $this->collProductomaterials->clearIterator();
        }
        $this->collProductomaterials = null;
        if ($this->collProductomedidas instanceof PropelCollection) {
            $this->collProductomedidas->clearIterator();
        }
        $this->collProductomedidas = null;
        if ($this->collProductotallajes instanceof PropelCollection) {
            $this->collProductotallajes->clearIterator();
        }
        $this->collProductotallajes = null;
        if ($this->collProductovariantes instanceof PropelCollection) {
            $this->collProductovariantes->clearIterator();
        }
        $this->collProductovariantes = null;
        if ($this->collPromociondetalles instanceof PropelCollection) {
            $this->collPromociondetalles->clearIterator();
        }
        $this->collPromociondetalles = null;
        $this->aMarca = null;
        $this->aProveedor = null;
        $this->aTemporada = null;
        $this->aTipocalzado = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProductoPeer::DEFAULT_STRING_FORMAT);
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
