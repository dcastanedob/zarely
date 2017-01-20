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
     * The value for the idtallaje field.
     * @var        int
     */
    protected $idtallaje;

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
     * @var        Marca
     */
    protected $aMarca;

    /**
     * @var        Proveedor
     */
    protected $aProveedor;

    /**
     * @var        Tallaje
     */
    protected $aTallaje;

    /**
     * @var        Temporada
     */
    protected $aTemporada;

    /**
     * @var        Tipocalzado
     */
    protected $aTipocalzado;

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
    protected $productocolorsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productomaterialsScheduledForDeletion = null;

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
     * Get the [idtallaje] column value.
     *
     * @return int
     */
    public function getIdtallaje()
    {

        return $this->idtallaje;
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
     * Set the value of [idtallaje] column.
     *
     * @param  int $v new value
     * @return Producto The current object (for fluent API support)
     */
    public function setIdtallaje($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtallaje !== $v) {
            $this->idtallaje = $v;
            $this->modifiedColumns[] = ProductoPeer::IDTALLAJE;
        }

        if ($this->aTallaje !== null && $this->aTallaje->getIdtallaje() !== $v) {
            $this->aTallaje = null;
        }


        return $this;
    } // setIdtallaje()

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
            $this->idtallaje = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->producto_comisionable = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->idproveedor = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->producto_dirigidoa = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->producto_precioventa = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->producto_preciomayoreo = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->producto_minimo = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->producto_reorden = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->producto_maximo = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->idtipocalzado = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->producto_descripcion = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
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
        if ($this->aTallaje !== null && $this->idtallaje !== $this->aTallaje->getIdtallaje()) {
            $this->aTallaje = null;
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
            $this->aTallaje = null;
            $this->aTemporada = null;
            $this->aTipocalzado = null;
            $this->collProductocolors = null;

            $this->collProductomaterials = null;

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

            if ($this->aTallaje !== null) {
                if ($this->aTallaje->isModified() || $this->aTallaje->isNew()) {
                    $affectedRows += $this->aTallaje->save($con);
                }
                $this->setTallaje($this->aTallaje);
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
        if ($this->isColumnModified(ProductoPeer::IDTALLAJE)) {
            $modifiedColumns[':p' . $index++]  = '`idtallaje`';
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
                    case '`idtallaje`':
                        $stmt->bindValue($identifier, $this->idtallaje, PDO::PARAM_INT);
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

            if ($this->aTallaje !== null) {
                if (!$this->aTallaje->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTallaje->getValidationFailures());
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
                return $this->getIdtallaje();
                break;
            case 5:
                return $this->getProductoComisionable();
                break;
            case 6:
                return $this->getIdproveedor();
                break;
            case 7:
                return $this->getProductoDirigidoa();
                break;
            case 8:
                return $this->getProductoPrecioventa();
                break;
            case 9:
                return $this->getProductoPreciomayoreo();
                break;
            case 10:
                return $this->getProductoMinimo();
                break;
            case 11:
                return $this->getProductoReorden();
                break;
            case 12:
                return $this->getProductoMaximo();
                break;
            case 13:
                return $this->getIdtipocalzado();
                break;
            case 14:
                return $this->getProductoDescripcion();
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
            $keys[4] => $this->getIdtallaje(),
            $keys[5] => $this->getProductoComisionable(),
            $keys[6] => $this->getIdproveedor(),
            $keys[7] => $this->getProductoDirigidoa(),
            $keys[8] => $this->getProductoPrecioventa(),
            $keys[9] => $this->getProductoPreciomayoreo(),
            $keys[10] => $this->getProductoMinimo(),
            $keys[11] => $this->getProductoReorden(),
            $keys[12] => $this->getProductoMaximo(),
            $keys[13] => $this->getIdtipocalzado(),
            $keys[14] => $this->getProductoDescripcion(),
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
            if (null !== $this->aTallaje) {
                $result['Tallaje'] = $this->aTallaje->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTemporada) {
                $result['Temporada'] = $this->aTemporada->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTipocalzado) {
                $result['Tipocalzado'] = $this->aTipocalzado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collProductocolors) {
                $result['Productocolors'] = $this->collProductocolors->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductomaterials) {
                $result['Productomaterials'] = $this->collProductomaterials->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
                $this->setIdtallaje($value);
                break;
            case 5:
                $this->setProductoComisionable($value);
                break;
            case 6:
                $this->setIdproveedor($value);
                break;
            case 7:
                $this->setProductoDirigidoa($value);
                break;
            case 8:
                $this->setProductoPrecioventa($value);
                break;
            case 9:
                $this->setProductoPreciomayoreo($value);
                break;
            case 10:
                $this->setProductoMinimo($value);
                break;
            case 11:
                $this->setProductoReorden($value);
                break;
            case 12:
                $this->setProductoMaximo($value);
                break;
            case 13:
                $this->setIdtipocalzado($value);
                break;
            case 14:
                $this->setProductoDescripcion($value);
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
        if (array_key_exists($keys[4], $arr)) $this->setIdtallaje($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setProductoComisionable($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdproveedor($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setProductoDirigidoa($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setProductoPrecioventa($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setProductoPreciomayoreo($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setProductoMinimo($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setProductoReorden($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setProductoMaximo($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdtipocalzado($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setProductoDescripcion($arr[$keys[14]]);
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
        if ($this->isColumnModified(ProductoPeer::IDTALLAJE)) $criteria->add(ProductoPeer::IDTALLAJE, $this->idtallaje);
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
        $copyObj->setIdtallaje($this->getIdtallaje());
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

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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
     * Declares an association between this object and a Tallaje object.
     *
     * @param                  Tallaje $v
     * @return Producto The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTallaje(Tallaje $v = null)
    {
        if ($v === null) {
            $this->setIdtallaje(NULL);
        } else {
            $this->setIdtallaje($v->getIdtallaje());
        }

        $this->aTallaje = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Tallaje object, it will not be re-added.
        if ($v !== null) {
            $v->addProducto($this);
        }


        return $this;
    }


    /**
     * Get the associated Tallaje object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Tallaje The associated Tallaje object.
     * @throws PropelException
     */
    public function getTallaje(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTallaje === null && ($this->idtallaje !== null) && $doQuery) {
            $this->aTallaje = TallajeQuery::create()->findPk($this->idtallaje, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTallaje->addProductos($this);
             */
        }

        return $this->aTallaje;
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
        if ('Productocolor' == $relationName) {
            $this->initProductocolors();
        }
        if ('Productomaterial' == $relationName) {
            $this->initProductomaterials();
        }
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idproducto = null;
        $this->producto_modelo = null;
        $this->idmarca = null;
        $this->idtemporada = null;
        $this->idtallaje = null;
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
            if ($this->aMarca instanceof Persistent) {
              $this->aMarca->clearAllReferences($deep);
            }
            if ($this->aProveedor instanceof Persistent) {
              $this->aProveedor->clearAllReferences($deep);
            }
            if ($this->aTallaje instanceof Persistent) {
              $this->aTallaje->clearAllReferences($deep);
            }
            if ($this->aTemporada instanceof Persistent) {
              $this->aTemporada->clearAllReferences($deep);
            }
            if ($this->aTipocalzado instanceof Persistent) {
              $this->aTipocalzado->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collProductocolors instanceof PropelCollection) {
            $this->collProductocolors->clearIterator();
        }
        $this->collProductocolors = null;
        if ($this->collProductomaterials instanceof PropelCollection) {
            $this->collProductomaterials->clearIterator();
        }
        $this->collProductomaterials = null;
        $this->aMarca = null;
        $this->aProveedor = null;
        $this->aTallaje = null;
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
