<?php


/**
 * Base class that represents a row from the 'proveedor' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseProveedor extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ProveedorPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ProveedorPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idproveedor field.
     * @var        int
     */
    protected $idproveedor;

    /**
     * The value for the proveedor_nombrecomercial field.
     * @var        string
     */
    protected $proveedor_nombrecomercial;

    /**
     * The value for the proveedor_telefono field.
     * @var        string
     */
    protected $proveedor_telefono;

    /**
     * The value for the proveedor_celular field.
     * @var        string
     */
    protected $proveedor_celular;

    /**
     * The value for the proveedor_fechainicio field.
     * @var        string
     */
    protected $proveedor_fechainicio;

    /**
     * The value for the proveedor_email field.
     * @var        string
     */
    protected $proveedor_email;

    /**
     * The value for the proveedor_razonsocial field.
     * @var        string
     */
    protected $proveedor_razonsocial;

    /**
     * The value for the proveedor_rfc field.
     * @var        string
     */
    protected $proveedor_rfc;

    /**
     * The value for the proveedor_direccion field.
     * @var        string
     */
    protected $proveedor_direccion;

    /**
     * The value for the proveedor_colonia field.
     * @var        string
     */
    protected $proveedor_colonia;

    /**
     * The value for the proveedor_cp field.
     * @var        string
     */
    protected $proveedor_cp;

    /**
     * The value for the proveedor_ciudad field.
     * @var        string
     */
    protected $proveedor_ciudad;

    /**
     * The value for the proveedor_estado field.
     * @var        string
     */
    protected $proveedor_estado;

    /**
     * The value for the proveedor_contactonombre field.
     * @var        string
     */
    protected $proveedor_contactonombre;

    /**
     * The value for the proveedor_contactotelefono field.
     * @var        string
     */
    protected $proveedor_contactotelefono;

    /**
     * The value for the proveedor_contactoemail field.
     * @var        string
     */
    protected $proveedor_contactoemail;

    /**
     * @var        PropelObjectCollection|Compra[] Collection to store aggregation of Compra objects.
     */
    protected $collCompras;
    protected $collComprasPartial;

    /**
     * @var        PropelObjectCollection|Devolucion[] Collection to store aggregation of Devolucion objects.
     */
    protected $collDevolucions;
    protected $collDevolucionsPartial;

    /**
     * @var        PropelObjectCollection|Producto[] Collection to store aggregation of Producto objects.
     */
    protected $collProductos;
    protected $collProductosPartial;

    /**
     * @var        PropelObjectCollection|Proveedormarca[] Collection to store aggregation of Proveedormarca objects.
     */
    protected $collProveedormarcas;
    protected $collProveedormarcasPartial;

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
    protected $comprasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $devolucionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $proveedormarcasScheduledForDeletion = null;

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
     * Get the [proveedor_nombrecomercial] column value.
     *
     * @return string
     */
    public function getProveedorNombrecomercial()
    {

        return $this->proveedor_nombrecomercial;
    }

    /**
     * Get the [proveedor_telefono] column value.
     *
     * @return string
     */
    public function getProveedorTelefono()
    {

        return $this->proveedor_telefono;
    }

    /**
     * Get the [proveedor_celular] column value.
     *
     * @return string
     */
    public function getProveedorCelular()
    {

        return $this->proveedor_celular;
    }

    /**
     * Get the [optionally formatted] temporal [proveedor_fechainicio] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getProveedorFechainicio($format = '%x')
    {
        if ($this->proveedor_fechainicio === null) {
            return null;
        }

        if ($this->proveedor_fechainicio === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->proveedor_fechainicio);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->proveedor_fechainicio, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);

    }

    /**
     * Get the [proveedor_email] column value.
     *
     * @return string
     */
    public function getProveedorEmail()
    {

        return $this->proveedor_email;
    }

    /**
     * Get the [proveedor_razonsocial] column value.
     *
     * @return string
     */
    public function getProveedorRazonsocial()
    {

        return $this->proveedor_razonsocial;
    }

    /**
     * Get the [proveedor_rfc] column value.
     *
     * @return string
     */
    public function getProveedorRfc()
    {

        return $this->proveedor_rfc;
    }

    /**
     * Get the [proveedor_direccion] column value.
     *
     * @return string
     */
    public function getProveedorDireccion()
    {

        return $this->proveedor_direccion;
    }

    /**
     * Get the [proveedor_colonia] column value.
     *
     * @return string
     */
    public function getProveedorColonia()
    {

        return $this->proveedor_colonia;
    }

    /**
     * Get the [proveedor_cp] column value.
     *
     * @return string
     */
    public function getProveedorCp()
    {

        return $this->proveedor_cp;
    }

    /**
     * Get the [proveedor_ciudad] column value.
     *
     * @return string
     */
    public function getProveedorCiudad()
    {

        return $this->proveedor_ciudad;
    }

    /**
     * Get the [proveedor_estado] column value.
     *
     * @return string
     */
    public function getProveedorEstado()
    {

        return $this->proveedor_estado;
    }

    /**
     * Get the [proveedor_contactonombre] column value.
     *
     * @return string
     */
    public function getProveedorContactonombre()
    {

        return $this->proveedor_contactonombre;
    }

    /**
     * Get the [proveedor_contactotelefono] column value.
     *
     * @return string
     */
    public function getProveedorContactotelefono()
    {

        return $this->proveedor_contactotelefono;
    }

    /**
     * Get the [proveedor_contactoemail] column value.
     *
     * @return string
     */
    public function getProveedorContactoemail()
    {

        return $this->proveedor_contactoemail;
    }

    /**
     * Set the value of [idproveedor] column.
     *
     * @param  int $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setIdproveedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproveedor !== $v) {
            $this->idproveedor = $v;
            $this->modifiedColumns[] = ProveedorPeer::IDPROVEEDOR;
        }


        return $this;
    } // setIdproveedor()

    /**
     * Set the value of [proveedor_nombrecomercial] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorNombrecomercial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_nombrecomercial !== $v) {
            $this->proveedor_nombrecomercial = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_NOMBRECOMERCIAL;
        }


        return $this;
    } // setProveedorNombrecomercial()

    /**
     * Set the value of [proveedor_telefono] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_telefono !== $v) {
            $this->proveedor_telefono = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_TELEFONO;
        }


        return $this;
    } // setProveedorTelefono()

    /**
     * Set the value of [proveedor_celular] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorCelular($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_celular !== $v) {
            $this->proveedor_celular = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_CELULAR;
        }


        return $this;
    } // setProveedorCelular()

    /**
     * Sets the value of [proveedor_fechainicio] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorFechainicio($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->proveedor_fechainicio !== null || $dt !== null) {
            $currentDateAsString = ($this->proveedor_fechainicio !== null && $tmpDt = new DateTime($this->proveedor_fechainicio)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->proveedor_fechainicio = $newDateAsString;
                $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_FECHAINICIO;
            }
        } // if either are not null


        return $this;
    } // setProveedorFechainicio()

    /**
     * Set the value of [proveedor_email] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_email !== $v) {
            $this->proveedor_email = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_EMAIL;
        }


        return $this;
    } // setProveedorEmail()

    /**
     * Set the value of [proveedor_razonsocial] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorRazonsocial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_razonsocial !== $v) {
            $this->proveedor_razonsocial = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_RAZONSOCIAL;
        }


        return $this;
    } // setProveedorRazonsocial()

    /**
     * Set the value of [proveedor_rfc] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_rfc !== $v) {
            $this->proveedor_rfc = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_RFC;
        }


        return $this;
    } // setProveedorRfc()

    /**
     * Set the value of [proveedor_direccion] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorDireccion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_direccion !== $v) {
            $this->proveedor_direccion = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_DIRECCION;
        }


        return $this;
    } // setProveedorDireccion()

    /**
     * Set the value of [proveedor_colonia] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_colonia !== $v) {
            $this->proveedor_colonia = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_COLONIA;
        }


        return $this;
    } // setProveedorColonia()

    /**
     * Set the value of [proveedor_cp] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorCp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_cp !== $v) {
            $this->proveedor_cp = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_CP;
        }


        return $this;
    } // setProveedorCp()

    /**
     * Set the value of [proveedor_ciudad] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_ciudad !== $v) {
            $this->proveedor_ciudad = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_CIUDAD;
        }


        return $this;
    } // setProveedorCiudad()

    /**
     * Set the value of [proveedor_estado] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_estado !== $v) {
            $this->proveedor_estado = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_ESTADO;
        }


        return $this;
    } // setProveedorEstado()

    /**
     * Set the value of [proveedor_contactonombre] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorContactonombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_contactonombre !== $v) {
            $this->proveedor_contactonombre = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_CONTACTONOMBRE;
        }


        return $this;
    } // setProveedorContactonombre()

    /**
     * Set the value of [proveedor_contactotelefono] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorContactotelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_contactotelefono !== $v) {
            $this->proveedor_contactotelefono = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_CONTACTOTELEFONO;
        }


        return $this;
    } // setProveedorContactotelefono()

    /**
     * Set the value of [proveedor_contactoemail] column.
     *
     * @param  string $v new value
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedorContactoemail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->proveedor_contactoemail !== $v) {
            $this->proveedor_contactoemail = $v;
            $this->modifiedColumns[] = ProveedorPeer::PROVEEDOR_CONTACTOEMAIL;
        }


        return $this;
    } // setProveedorContactoemail()

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

            $this->idproveedor = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->proveedor_nombrecomercial = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->proveedor_telefono = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->proveedor_celular = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->proveedor_fechainicio = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->proveedor_email = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->proveedor_razonsocial = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->proveedor_rfc = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->proveedor_direccion = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->proveedor_colonia = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->proveedor_cp = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->proveedor_ciudad = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->proveedor_estado = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->proveedor_contactonombre = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->proveedor_contactotelefono = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->proveedor_contactoemail = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 16; // 16 = ProveedorPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Proveedor object", $e);
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
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ProveedorPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCompras = null;

            $this->collDevolucions = null;

            $this->collProductos = null;

            $this->collProveedormarcas = null;

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
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ProveedorQuery::create()
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
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ProveedorPeer::addInstanceToPool($this);
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

            if ($this->comprasScheduledForDeletion !== null) {
                if (!$this->comprasScheduledForDeletion->isEmpty()) {
                    CompraQuery::create()
                        ->filterByPrimaryKeys($this->comprasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->comprasScheduledForDeletion = null;
                }
            }

            if ($this->collCompras !== null) {
                foreach ($this->collCompras as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->devolucionsScheduledForDeletion !== null) {
                if (!$this->devolucionsScheduledForDeletion->isEmpty()) {
                    DevolucionQuery::create()
                        ->filterByPrimaryKeys($this->devolucionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->devolucionsScheduledForDeletion = null;
                }
            }

            if ($this->collDevolucions !== null) {
                foreach ($this->collDevolucions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->productosScheduledForDeletion !== null) {
                if (!$this->productosScheduledForDeletion->isEmpty()) {
                    ProductoQuery::create()
                        ->filterByPrimaryKeys($this->productosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->productosScheduledForDeletion = null;
                }
            }

            if ($this->collProductos !== null) {
                foreach ($this->collProductos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->proveedormarcasScheduledForDeletion !== null) {
                if (!$this->proveedormarcasScheduledForDeletion->isEmpty()) {
                    ProveedormarcaQuery::create()
                        ->filterByPrimaryKeys($this->proveedormarcasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->proveedormarcasScheduledForDeletion = null;
                }
            }

            if ($this->collProveedormarcas !== null) {
                foreach ($this->collProveedormarcas as $referrerFK) {
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

        $this->modifiedColumns[] = ProveedorPeer::IDPROVEEDOR;
        if (null !== $this->idproveedor) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ProveedorPeer::IDPROVEEDOR . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ProveedorPeer::IDPROVEEDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idproveedor`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_NOMBRECOMERCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_nombrecomercial`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_telefono`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CELULAR)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_celular`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_FECHAINICIO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_fechainicio`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_email`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_RAZONSOCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_razonsocial`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_RFC)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_rfc`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_DIRECCION)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_direccion`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_colonia`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CP)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_cp`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_ciudad`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_estado`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CONTACTONOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_contactonombre`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CONTACTOTELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_contactotelefono`';
        }
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CONTACTOEMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`proveedor_contactoemail`';
        }

        $sql = sprintf(
            'INSERT INTO `proveedor` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idproveedor`':
                        $stmt->bindValue($identifier, $this->idproveedor, PDO::PARAM_INT);
                        break;
                    case '`proveedor_nombrecomercial`':
                        $stmt->bindValue($identifier, $this->proveedor_nombrecomercial, PDO::PARAM_STR);
                        break;
                    case '`proveedor_telefono`':
                        $stmt->bindValue($identifier, $this->proveedor_telefono, PDO::PARAM_STR);
                        break;
                    case '`proveedor_celular`':
                        $stmt->bindValue($identifier, $this->proveedor_celular, PDO::PARAM_STR);
                        break;
                    case '`proveedor_fechainicio`':
                        $stmt->bindValue($identifier, $this->proveedor_fechainicio, PDO::PARAM_STR);
                        break;
                    case '`proveedor_email`':
                        $stmt->bindValue($identifier, $this->proveedor_email, PDO::PARAM_STR);
                        break;
                    case '`proveedor_razonsocial`':
                        $stmt->bindValue($identifier, $this->proveedor_razonsocial, PDO::PARAM_STR);
                        break;
                    case '`proveedor_rfc`':
                        $stmt->bindValue($identifier, $this->proveedor_rfc, PDO::PARAM_STR);
                        break;
                    case '`proveedor_direccion`':
                        $stmt->bindValue($identifier, $this->proveedor_direccion, PDO::PARAM_STR);
                        break;
                    case '`proveedor_colonia`':
                        $stmt->bindValue($identifier, $this->proveedor_colonia, PDO::PARAM_STR);
                        break;
                    case '`proveedor_cp`':
                        $stmt->bindValue($identifier, $this->proveedor_cp, PDO::PARAM_STR);
                        break;
                    case '`proveedor_ciudad`':
                        $stmt->bindValue($identifier, $this->proveedor_ciudad, PDO::PARAM_STR);
                        break;
                    case '`proveedor_estado`':
                        $stmt->bindValue($identifier, $this->proveedor_estado, PDO::PARAM_STR);
                        break;
                    case '`proveedor_contactonombre`':
                        $stmt->bindValue($identifier, $this->proveedor_contactonombre, PDO::PARAM_STR);
                        break;
                    case '`proveedor_contactotelefono`':
                        $stmt->bindValue($identifier, $this->proveedor_contactotelefono, PDO::PARAM_STR);
                        break;
                    case '`proveedor_contactoemail`':
                        $stmt->bindValue($identifier, $this->proveedor_contactoemail, PDO::PARAM_STR);
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
        $this->setIdproveedor($pk);

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


            if (($retval = ProveedorPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCompras !== null) {
                    foreach ($this->collCompras as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collDevolucions !== null) {
                    foreach ($this->collDevolucions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProductos !== null) {
                    foreach ($this->collProductos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProveedormarcas !== null) {
                    foreach ($this->collProveedormarcas as $referrerFK) {
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
        $pos = ProveedorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdproveedor();
                break;
            case 1:
                return $this->getProveedorNombrecomercial();
                break;
            case 2:
                return $this->getProveedorTelefono();
                break;
            case 3:
                return $this->getProveedorCelular();
                break;
            case 4:
                return $this->getProveedorFechainicio();
                break;
            case 5:
                return $this->getProveedorEmail();
                break;
            case 6:
                return $this->getProveedorRazonsocial();
                break;
            case 7:
                return $this->getProveedorRfc();
                break;
            case 8:
                return $this->getProveedorDireccion();
                break;
            case 9:
                return $this->getProveedorColonia();
                break;
            case 10:
                return $this->getProveedorCp();
                break;
            case 11:
                return $this->getProveedorCiudad();
                break;
            case 12:
                return $this->getProveedorEstado();
                break;
            case 13:
                return $this->getProveedorContactonombre();
                break;
            case 14:
                return $this->getProveedorContactotelefono();
                break;
            case 15:
                return $this->getProveedorContactoemail();
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
        if (isset($alreadyDumpedObjects['Proveedor'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Proveedor'][$this->getPrimaryKey()] = true;
        $keys = ProveedorPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdproveedor(),
            $keys[1] => $this->getProveedorNombrecomercial(),
            $keys[2] => $this->getProveedorTelefono(),
            $keys[3] => $this->getProveedorCelular(),
            $keys[4] => $this->getProveedorFechainicio(),
            $keys[5] => $this->getProveedorEmail(),
            $keys[6] => $this->getProveedorRazonsocial(),
            $keys[7] => $this->getProveedorRfc(),
            $keys[8] => $this->getProveedorDireccion(),
            $keys[9] => $this->getProveedorColonia(),
            $keys[10] => $this->getProveedorCp(),
            $keys[11] => $this->getProveedorCiudad(),
            $keys[12] => $this->getProveedorEstado(),
            $keys[13] => $this->getProveedorContactonombre(),
            $keys[14] => $this->getProveedorContactotelefono(),
            $keys[15] => $this->getProveedorContactoemail(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collCompras) {
                $result['Compras'] = $this->collCompras->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collDevolucions) {
                $result['Devolucions'] = $this->collDevolucions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductos) {
                $result['Productos'] = $this->collProductos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProveedormarcas) {
                $result['Proveedormarcas'] = $this->collProveedormarcas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ProveedorPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdproveedor($value);
                break;
            case 1:
                $this->setProveedorNombrecomercial($value);
                break;
            case 2:
                $this->setProveedorTelefono($value);
                break;
            case 3:
                $this->setProveedorCelular($value);
                break;
            case 4:
                $this->setProveedorFechainicio($value);
                break;
            case 5:
                $this->setProveedorEmail($value);
                break;
            case 6:
                $this->setProveedorRazonsocial($value);
                break;
            case 7:
                $this->setProveedorRfc($value);
                break;
            case 8:
                $this->setProveedorDireccion($value);
                break;
            case 9:
                $this->setProveedorColonia($value);
                break;
            case 10:
                $this->setProveedorCp($value);
                break;
            case 11:
                $this->setProveedorCiudad($value);
                break;
            case 12:
                $this->setProveedorEstado($value);
                break;
            case 13:
                $this->setProveedorContactonombre($value);
                break;
            case 14:
                $this->setProveedorContactotelefono($value);
                break;
            case 15:
                $this->setProveedorContactoemail($value);
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
        $keys = ProveedorPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdproveedor($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setProveedorNombrecomercial($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setProveedorTelefono($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setProveedorCelular($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setProveedorFechainicio($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setProveedorEmail($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setProveedorRazonsocial($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setProveedorRfc($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setProveedorDireccion($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setProveedorColonia($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setProveedorCp($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setProveedorCiudad($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setProveedorEstado($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setProveedorContactonombre($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setProveedorContactotelefono($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setProveedorContactoemail($arr[$keys[15]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ProveedorPeer::DATABASE_NAME);

        if ($this->isColumnModified(ProveedorPeer::IDPROVEEDOR)) $criteria->add(ProveedorPeer::IDPROVEEDOR, $this->idproveedor);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_NOMBRECOMERCIAL)) $criteria->add(ProveedorPeer::PROVEEDOR_NOMBRECOMERCIAL, $this->proveedor_nombrecomercial);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_TELEFONO)) $criteria->add(ProveedorPeer::PROVEEDOR_TELEFONO, $this->proveedor_telefono);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CELULAR)) $criteria->add(ProveedorPeer::PROVEEDOR_CELULAR, $this->proveedor_celular);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_FECHAINICIO)) $criteria->add(ProveedorPeer::PROVEEDOR_FECHAINICIO, $this->proveedor_fechainicio);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_EMAIL)) $criteria->add(ProveedorPeer::PROVEEDOR_EMAIL, $this->proveedor_email);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_RAZONSOCIAL)) $criteria->add(ProveedorPeer::PROVEEDOR_RAZONSOCIAL, $this->proveedor_razonsocial);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_RFC)) $criteria->add(ProveedorPeer::PROVEEDOR_RFC, $this->proveedor_rfc);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_DIRECCION)) $criteria->add(ProveedorPeer::PROVEEDOR_DIRECCION, $this->proveedor_direccion);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_COLONIA)) $criteria->add(ProveedorPeer::PROVEEDOR_COLONIA, $this->proveedor_colonia);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CP)) $criteria->add(ProveedorPeer::PROVEEDOR_CP, $this->proveedor_cp);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CIUDAD)) $criteria->add(ProveedorPeer::PROVEEDOR_CIUDAD, $this->proveedor_ciudad);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_ESTADO)) $criteria->add(ProveedorPeer::PROVEEDOR_ESTADO, $this->proveedor_estado);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CONTACTONOMBRE)) $criteria->add(ProveedorPeer::PROVEEDOR_CONTACTONOMBRE, $this->proveedor_contactonombre);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CONTACTOTELEFONO)) $criteria->add(ProveedorPeer::PROVEEDOR_CONTACTOTELEFONO, $this->proveedor_contactotelefono);
        if ($this->isColumnModified(ProveedorPeer::PROVEEDOR_CONTACTOEMAIL)) $criteria->add(ProveedorPeer::PROVEEDOR_CONTACTOEMAIL, $this->proveedor_contactoemail);

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
        $criteria = new Criteria(ProveedorPeer::DATABASE_NAME);
        $criteria->add(ProveedorPeer::IDPROVEEDOR, $this->idproveedor);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdproveedor();
    }

    /**
     * Generic method to set the primary key (idproveedor column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdproveedor($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdproveedor();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Proveedor (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setProveedorNombrecomercial($this->getProveedorNombrecomercial());
        $copyObj->setProveedorTelefono($this->getProveedorTelefono());
        $copyObj->setProveedorCelular($this->getProveedorCelular());
        $copyObj->setProveedorFechainicio($this->getProveedorFechainicio());
        $copyObj->setProveedorEmail($this->getProveedorEmail());
        $copyObj->setProveedorRazonsocial($this->getProveedorRazonsocial());
        $copyObj->setProveedorRfc($this->getProveedorRfc());
        $copyObj->setProveedorDireccion($this->getProveedorDireccion());
        $copyObj->setProveedorColonia($this->getProveedorColonia());
        $copyObj->setProveedorCp($this->getProveedorCp());
        $copyObj->setProveedorCiudad($this->getProveedorCiudad());
        $copyObj->setProveedorEstado($this->getProveedorEstado());
        $copyObj->setProveedorContactonombre($this->getProveedorContactonombre());
        $copyObj->setProveedorContactotelefono($this->getProveedorContactotelefono());
        $copyObj->setProveedorContactoemail($this->getProveedorContactoemail());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCompras() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCompra($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getDevolucions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDevolucion($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProductos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProducto($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProveedormarcas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProveedormarca($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdproveedor(NULL); // this is a auto-increment column, so set to default value
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
     * @return Proveedor Clone of current object.
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
     * @return ProveedorPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ProveedorPeer();
        }

        return self::$peer;
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
        if ('Compra' == $relationName) {
            $this->initCompras();
        }
        if ('Devolucion' == $relationName) {
            $this->initDevolucions();
        }
        if ('Producto' == $relationName) {
            $this->initProductos();
        }
        if ('Proveedormarca' == $relationName) {
            $this->initProveedormarcas();
        }
    }

    /**
     * Clears out the collCompras collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Proveedor The current object (for fluent API support)
     * @see        addCompras()
     */
    public function clearCompras()
    {
        $this->collCompras = null; // important to set this to null since that means it is uninitialized
        $this->collComprasPartial = null;

        return $this;
    }

    /**
     * reset is the collCompras collection loaded partially
     *
     * @return void
     */
    public function resetPartialCompras($v = true)
    {
        $this->collComprasPartial = $v;
    }

    /**
     * Initializes the collCompras collection.
     *
     * By default this just sets the collCompras collection to an empty array (like clearcollCompras());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCompras($overrideExisting = true)
    {
        if (null !== $this->collCompras && !$overrideExisting) {
            return;
        }
        $this->collCompras = new PropelObjectCollection();
        $this->collCompras->setModel('Compra');
    }

    /**
     * Gets an array of Compra objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Proveedor is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Compra[] List of Compra objects
     * @throws PropelException
     */
    public function getCompras($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collComprasPartial && !$this->isNew();
        if (null === $this->collCompras || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCompras) {
                // return empty collection
                $this->initCompras();
            } else {
                $collCompras = CompraQuery::create(null, $criteria)
                    ->filterByProveedor($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collComprasPartial && count($collCompras)) {
                      $this->initCompras(false);

                      foreach ($collCompras as $obj) {
                        if (false == $this->collCompras->contains($obj)) {
                          $this->collCompras->append($obj);
                        }
                      }

                      $this->collComprasPartial = true;
                    }

                    $collCompras->getInternalIterator()->rewind();

                    return $collCompras;
                }

                if ($partial && $this->collCompras) {
                    foreach ($this->collCompras as $obj) {
                        if ($obj->isNew()) {
                            $collCompras[] = $obj;
                        }
                    }
                }

                $this->collCompras = $collCompras;
                $this->collComprasPartial = false;
            }
        }

        return $this->collCompras;
    }

    /**
     * Sets a collection of Compra objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $compras A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Proveedor The current object (for fluent API support)
     */
    public function setCompras(PropelCollection $compras, PropelPDO $con = null)
    {
        $comprasToDelete = $this->getCompras(new Criteria(), $con)->diff($compras);


        $this->comprasScheduledForDeletion = $comprasToDelete;

        foreach ($comprasToDelete as $compraRemoved) {
            $compraRemoved->setProveedor(null);
        }

        $this->collCompras = null;
        foreach ($compras as $compra) {
            $this->addCompra($compra);
        }

        $this->collCompras = $compras;
        $this->collComprasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Compra objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Compra objects.
     * @throws PropelException
     */
    public function countCompras(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collComprasPartial && !$this->isNew();
        if (null === $this->collCompras || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCompras) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCompras());
            }
            $query = CompraQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProveedor($this)
                ->count($con);
        }

        return count($this->collCompras);
    }

    /**
     * Method called to associate a Compra object to this object
     * through the Compra foreign key attribute.
     *
     * @param    Compra $l Compra
     * @return Proveedor The current object (for fluent API support)
     */
    public function addCompra(Compra $l)
    {
        if ($this->collCompras === null) {
            $this->initCompras();
            $this->collComprasPartial = true;
        }

        if (!in_array($l, $this->collCompras->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCompra($l);

            if ($this->comprasScheduledForDeletion and $this->comprasScheduledForDeletion->contains($l)) {
                $this->comprasScheduledForDeletion->remove($this->comprasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Compra $compra The compra object to add.
     */
    protected function doAddCompra($compra)
    {
        $this->collCompras[]= $compra;
        $compra->setProveedor($this);
    }

    /**
     * @param	Compra $compra The compra object to remove.
     * @return Proveedor The current object (for fluent API support)
     */
    public function removeCompra($compra)
    {
        if ($this->getCompras()->contains($compra)) {
            $this->collCompras->remove($this->collCompras->search($compra));
            if (null === $this->comprasScheduledForDeletion) {
                $this->comprasScheduledForDeletion = clone $this->collCompras;
                $this->comprasScheduledForDeletion->clear();
            }
            $this->comprasScheduledForDeletion[]= clone $compra;
            $compra->setProveedor(null);
        }

        return $this;
    }

    /**
     * Clears out the collDevolucions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Proveedor The current object (for fluent API support)
     * @see        addDevolucions()
     */
    public function clearDevolucions()
    {
        $this->collDevolucions = null; // important to set this to null since that means it is uninitialized
        $this->collDevolucionsPartial = null;

        return $this;
    }

    /**
     * reset is the collDevolucions collection loaded partially
     *
     * @return void
     */
    public function resetPartialDevolucions($v = true)
    {
        $this->collDevolucionsPartial = $v;
    }

    /**
     * Initializes the collDevolucions collection.
     *
     * By default this just sets the collDevolucions collection to an empty array (like clearcollDevolucions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDevolucions($overrideExisting = true)
    {
        if (null !== $this->collDevolucions && !$overrideExisting) {
            return;
        }
        $this->collDevolucions = new PropelObjectCollection();
        $this->collDevolucions->setModel('Devolucion');
    }

    /**
     * Gets an array of Devolucion objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Proveedor is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Devolucion[] List of Devolucion objects
     * @throws PropelException
     */
    public function getDevolucions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collDevolucionsPartial && !$this->isNew();
        if (null === $this->collDevolucions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collDevolucions) {
                // return empty collection
                $this->initDevolucions();
            } else {
                $collDevolucions = DevolucionQuery::create(null, $criteria)
                    ->filterByProveedor($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collDevolucionsPartial && count($collDevolucions)) {
                      $this->initDevolucions(false);

                      foreach ($collDevolucions as $obj) {
                        if (false == $this->collDevolucions->contains($obj)) {
                          $this->collDevolucions->append($obj);
                        }
                      }

                      $this->collDevolucionsPartial = true;
                    }

                    $collDevolucions->getInternalIterator()->rewind();

                    return $collDevolucions;
                }

                if ($partial && $this->collDevolucions) {
                    foreach ($this->collDevolucions as $obj) {
                        if ($obj->isNew()) {
                            $collDevolucions[] = $obj;
                        }
                    }
                }

                $this->collDevolucions = $collDevolucions;
                $this->collDevolucionsPartial = false;
            }
        }

        return $this->collDevolucions;
    }

    /**
     * Sets a collection of Devolucion objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $devolucions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Proveedor The current object (for fluent API support)
     */
    public function setDevolucions(PropelCollection $devolucions, PropelPDO $con = null)
    {
        $devolucionsToDelete = $this->getDevolucions(new Criteria(), $con)->diff($devolucions);


        $this->devolucionsScheduledForDeletion = $devolucionsToDelete;

        foreach ($devolucionsToDelete as $devolucionRemoved) {
            $devolucionRemoved->setProveedor(null);
        }

        $this->collDevolucions = null;
        foreach ($devolucions as $devolucion) {
            $this->addDevolucion($devolucion);
        }

        $this->collDevolucions = $devolucions;
        $this->collDevolucionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Devolucion objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Devolucion objects.
     * @throws PropelException
     */
    public function countDevolucions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collDevolucionsPartial && !$this->isNew();
        if (null === $this->collDevolucions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDevolucions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDevolucions());
            }
            $query = DevolucionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProveedor($this)
                ->count($con);
        }

        return count($this->collDevolucions);
    }

    /**
     * Method called to associate a Devolucion object to this object
     * through the Devolucion foreign key attribute.
     *
     * @param    Devolucion $l Devolucion
     * @return Proveedor The current object (for fluent API support)
     */
    public function addDevolucion(Devolucion $l)
    {
        if ($this->collDevolucions === null) {
            $this->initDevolucions();
            $this->collDevolucionsPartial = true;
        }

        if (!in_array($l, $this->collDevolucions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddDevolucion($l);

            if ($this->devolucionsScheduledForDeletion and $this->devolucionsScheduledForDeletion->contains($l)) {
                $this->devolucionsScheduledForDeletion->remove($this->devolucionsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Devolucion $devolucion The devolucion object to add.
     */
    protected function doAddDevolucion($devolucion)
    {
        $this->collDevolucions[]= $devolucion;
        $devolucion->setProveedor($this);
    }

    /**
     * @param	Devolucion $devolucion The devolucion object to remove.
     * @return Proveedor The current object (for fluent API support)
     */
    public function removeDevolucion($devolucion)
    {
        if ($this->getDevolucions()->contains($devolucion)) {
            $this->collDevolucions->remove($this->collDevolucions->search($devolucion));
            if (null === $this->devolucionsScheduledForDeletion) {
                $this->devolucionsScheduledForDeletion = clone $this->collDevolucions;
                $this->devolucionsScheduledForDeletion->clear();
            }
            $this->devolucionsScheduledForDeletion[]= clone $devolucion;
            $devolucion->setProveedor(null);
        }

        return $this;
    }

    /**
     * Clears out the collProductos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Proveedor The current object (for fluent API support)
     * @see        addProductos()
     */
    public function clearProductos()
    {
        $this->collProductos = null; // important to set this to null since that means it is uninitialized
        $this->collProductosPartial = null;

        return $this;
    }

    /**
     * reset is the collProductos collection loaded partially
     *
     * @return void
     */
    public function resetPartialProductos($v = true)
    {
        $this->collProductosPartial = $v;
    }

    /**
     * Initializes the collProductos collection.
     *
     * By default this just sets the collProductos collection to an empty array (like clearcollProductos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProductos($overrideExisting = true)
    {
        if (null !== $this->collProductos && !$overrideExisting) {
            return;
        }
        $this->collProductos = new PropelObjectCollection();
        $this->collProductos->setModel('Producto');
    }

    /**
     * Gets an array of Producto objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Proveedor is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Producto[] List of Producto objects
     * @throws PropelException
     */
    public function getProductos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProductosPartial && !$this->isNew();
        if (null === $this->collProductos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProductos) {
                // return empty collection
                $this->initProductos();
            } else {
                $collProductos = ProductoQuery::create(null, $criteria)
                    ->filterByProveedor($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProductosPartial && count($collProductos)) {
                      $this->initProductos(false);

                      foreach ($collProductos as $obj) {
                        if (false == $this->collProductos->contains($obj)) {
                          $this->collProductos->append($obj);
                        }
                      }

                      $this->collProductosPartial = true;
                    }

                    $collProductos->getInternalIterator()->rewind();

                    return $collProductos;
                }

                if ($partial && $this->collProductos) {
                    foreach ($this->collProductos as $obj) {
                        if ($obj->isNew()) {
                            $collProductos[] = $obj;
                        }
                    }
                }

                $this->collProductos = $collProductos;
                $this->collProductosPartial = false;
            }
        }

        return $this->collProductos;
    }

    /**
     * Sets a collection of Producto objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $productos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProductos(PropelCollection $productos, PropelPDO $con = null)
    {
        $productosToDelete = $this->getProductos(new Criteria(), $con)->diff($productos);


        $this->productosScheduledForDeletion = $productosToDelete;

        foreach ($productosToDelete as $productoRemoved) {
            $productoRemoved->setProveedor(null);
        }

        $this->collProductos = null;
        foreach ($productos as $producto) {
            $this->addProducto($producto);
        }

        $this->collProductos = $productos;
        $this->collProductosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Producto objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Producto objects.
     * @throws PropelException
     */
    public function countProductos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProductosPartial && !$this->isNew();
        if (null === $this->collProductos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProductos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProductos());
            }
            $query = ProductoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProveedor($this)
                ->count($con);
        }

        return count($this->collProductos);
    }

    /**
     * Method called to associate a Producto object to this object
     * through the Producto foreign key attribute.
     *
     * @param    Producto $l Producto
     * @return Proveedor The current object (for fluent API support)
     */
    public function addProducto(Producto $l)
    {
        if ($this->collProductos === null) {
            $this->initProductos();
            $this->collProductosPartial = true;
        }

        if (!in_array($l, $this->collProductos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProducto($l);

            if ($this->productosScheduledForDeletion and $this->productosScheduledForDeletion->contains($l)) {
                $this->productosScheduledForDeletion->remove($this->productosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Producto $producto The producto object to add.
     */
    protected function doAddProducto($producto)
    {
        $this->collProductos[]= $producto;
        $producto->setProveedor($this);
    }

    /**
     * @param	Producto $producto The producto object to remove.
     * @return Proveedor The current object (for fluent API support)
     */
    public function removeProducto($producto)
    {
        if ($this->getProductos()->contains($producto)) {
            $this->collProductos->remove($this->collProductos->search($producto));
            if (null === $this->productosScheduledForDeletion) {
                $this->productosScheduledForDeletion = clone $this->collProductos;
                $this->productosScheduledForDeletion->clear();
            }
            $this->productosScheduledForDeletion[]= clone $producto;
            $producto->setProveedor(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Proveedor is new, it will return
     * an empty collection; or if this Proveedor has previously
     * been saved, it will retrieve related Productos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Proveedor.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Producto[] List of Producto objects
     */
    public function getProductosJoinMarca($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductoQuery::create(null, $criteria);
        $query->joinWith('Marca', $join_behavior);

        return $this->getProductos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Proveedor is new, it will return
     * an empty collection; or if this Proveedor has previously
     * been saved, it will retrieve related Productos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Proveedor.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Producto[] List of Producto objects
     */
    public function getProductosJoinTemporada($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductoQuery::create(null, $criteria);
        $query->joinWith('Temporada', $join_behavior);

        return $this->getProductos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Proveedor is new, it will return
     * an empty collection; or if this Proveedor has previously
     * been saved, it will retrieve related Productos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Proveedor.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Producto[] List of Producto objects
     */
    public function getProductosJoinTipocalzado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductoQuery::create(null, $criteria);
        $query->joinWith('Tipocalzado', $join_behavior);

        return $this->getProductos($query, $con);
    }

    /**
     * Clears out the collProveedormarcas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Proveedor The current object (for fluent API support)
     * @see        addProveedormarcas()
     */
    public function clearProveedormarcas()
    {
        $this->collProveedormarcas = null; // important to set this to null since that means it is uninitialized
        $this->collProveedormarcasPartial = null;

        return $this;
    }

    /**
     * reset is the collProveedormarcas collection loaded partially
     *
     * @return void
     */
    public function resetPartialProveedormarcas($v = true)
    {
        $this->collProveedormarcasPartial = $v;
    }

    /**
     * Initializes the collProveedormarcas collection.
     *
     * By default this just sets the collProveedormarcas collection to an empty array (like clearcollProveedormarcas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProveedormarcas($overrideExisting = true)
    {
        if (null !== $this->collProveedormarcas && !$overrideExisting) {
            return;
        }
        $this->collProveedormarcas = new PropelObjectCollection();
        $this->collProveedormarcas->setModel('Proveedormarca');
    }

    /**
     * Gets an array of Proveedormarca objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Proveedor is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Proveedormarca[] List of Proveedormarca objects
     * @throws PropelException
     */
    public function getProveedormarcas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProveedormarcasPartial && !$this->isNew();
        if (null === $this->collProveedormarcas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProveedormarcas) {
                // return empty collection
                $this->initProveedormarcas();
            } else {
                $collProveedormarcas = ProveedormarcaQuery::create(null, $criteria)
                    ->filterByProveedor($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProveedormarcasPartial && count($collProveedormarcas)) {
                      $this->initProveedormarcas(false);

                      foreach ($collProveedormarcas as $obj) {
                        if (false == $this->collProveedormarcas->contains($obj)) {
                          $this->collProveedormarcas->append($obj);
                        }
                      }

                      $this->collProveedormarcasPartial = true;
                    }

                    $collProveedormarcas->getInternalIterator()->rewind();

                    return $collProveedormarcas;
                }

                if ($partial && $this->collProveedormarcas) {
                    foreach ($this->collProveedormarcas as $obj) {
                        if ($obj->isNew()) {
                            $collProveedormarcas[] = $obj;
                        }
                    }
                }

                $this->collProveedormarcas = $collProveedormarcas;
                $this->collProveedormarcasPartial = false;
            }
        }

        return $this->collProveedormarcas;
    }

    /**
     * Sets a collection of Proveedormarca objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $proveedormarcas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Proveedor The current object (for fluent API support)
     */
    public function setProveedormarcas(PropelCollection $proveedormarcas, PropelPDO $con = null)
    {
        $proveedormarcasToDelete = $this->getProveedormarcas(new Criteria(), $con)->diff($proveedormarcas);


        $this->proveedormarcasScheduledForDeletion = $proveedormarcasToDelete;

        foreach ($proveedormarcasToDelete as $proveedormarcaRemoved) {
            $proveedormarcaRemoved->setProveedor(null);
        }

        $this->collProveedormarcas = null;
        foreach ($proveedormarcas as $proveedormarca) {
            $this->addProveedormarca($proveedormarca);
        }

        $this->collProveedormarcas = $proveedormarcas;
        $this->collProveedormarcasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Proveedormarca objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Proveedormarca objects.
     * @throws PropelException
     */
    public function countProveedormarcas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProveedormarcasPartial && !$this->isNew();
        if (null === $this->collProveedormarcas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProveedormarcas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProveedormarcas());
            }
            $query = ProveedormarcaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByProveedor($this)
                ->count($con);
        }

        return count($this->collProveedormarcas);
    }

    /**
     * Method called to associate a Proveedormarca object to this object
     * through the Proveedormarca foreign key attribute.
     *
     * @param    Proveedormarca $l Proveedormarca
     * @return Proveedor The current object (for fluent API support)
     */
    public function addProveedormarca(Proveedormarca $l)
    {
        if ($this->collProveedormarcas === null) {
            $this->initProveedormarcas();
            $this->collProveedormarcasPartial = true;
        }

        if (!in_array($l, $this->collProveedormarcas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProveedormarca($l);

            if ($this->proveedormarcasScheduledForDeletion and $this->proveedormarcasScheduledForDeletion->contains($l)) {
                $this->proveedormarcasScheduledForDeletion->remove($this->proveedormarcasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Proveedormarca $proveedormarca The proveedormarca object to add.
     */
    protected function doAddProveedormarca($proveedormarca)
    {
        $this->collProveedormarcas[]= $proveedormarca;
        $proveedormarca->setProveedor($this);
    }

    /**
     * @param	Proveedormarca $proveedormarca The proveedormarca object to remove.
     * @return Proveedor The current object (for fluent API support)
     */
    public function removeProveedormarca($proveedormarca)
    {
        if ($this->getProveedormarcas()->contains($proveedormarca)) {
            $this->collProveedormarcas->remove($this->collProveedormarcas->search($proveedormarca));
            if (null === $this->proveedormarcasScheduledForDeletion) {
                $this->proveedormarcasScheduledForDeletion = clone $this->collProveedormarcas;
                $this->proveedormarcasScheduledForDeletion->clear();
            }
            $this->proveedormarcasScheduledForDeletion[]= clone $proveedormarca;
            $proveedormarca->setProveedor(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Proveedor is new, it will return
     * an empty collection; or if this Proveedor has previously
     * been saved, it will retrieve related Proveedormarcas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Proveedor.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Proveedormarca[] List of Proveedormarca objects
     */
    public function getProveedormarcasJoinMarca($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProveedormarcaQuery::create(null, $criteria);
        $query->joinWith('Marca', $join_behavior);

        return $this->getProveedormarcas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idproveedor = null;
        $this->proveedor_nombrecomercial = null;
        $this->proveedor_telefono = null;
        $this->proveedor_celular = null;
        $this->proveedor_fechainicio = null;
        $this->proveedor_email = null;
        $this->proveedor_razonsocial = null;
        $this->proveedor_rfc = null;
        $this->proveedor_direccion = null;
        $this->proveedor_colonia = null;
        $this->proveedor_cp = null;
        $this->proveedor_ciudad = null;
        $this->proveedor_estado = null;
        $this->proveedor_contactonombre = null;
        $this->proveedor_contactotelefono = null;
        $this->proveedor_contactoemail = null;
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
            if ($this->collCompras) {
                foreach ($this->collCompras as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collDevolucions) {
                foreach ($this->collDevolucions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProductos) {
                foreach ($this->collProductos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProveedormarcas) {
                foreach ($this->collProveedormarcas as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCompras instanceof PropelCollection) {
            $this->collCompras->clearIterator();
        }
        $this->collCompras = null;
        if ($this->collDevolucions instanceof PropelCollection) {
            $this->collDevolucions->clearIterator();
        }
        $this->collDevolucions = null;
        if ($this->collProductos instanceof PropelCollection) {
            $this->collProductos->clearIterator();
        }
        $this->collProductos = null;
        if ($this->collProveedormarcas instanceof PropelCollection) {
            $this->collProveedormarcas->clearIterator();
        }
        $this->collProveedormarcas = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ProveedorPeer::DEFAULT_STRING_FORMAT);
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
