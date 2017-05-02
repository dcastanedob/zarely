<?php


/**
 * Base class that represents a row from the 'cuentabancariamovimiento' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseCuentabancariamovimiento extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CuentabancariamovimientoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CuentabancariamovimientoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcuentabancariamovimiento field.
     * @var        int
     */
    protected $idcuentabancariamovimiento;

    /**
     * The value for the idcuentabancaria field.
     * @var        int
     */
    protected $idcuentabancaria;

    /**
     * The value for the idempleado field.
     * @var        int
     */
    protected $idempleado;

    /**
     * The value for the cuentabancariamovimiento_proceso field.
     * @var        string
     */
    protected $cuentabancariamovimiento_proceso;

    /**
     * The value for the idproceso field.
     * @var        int
     */
    protected $idproceso;

    /**
     * The value for the cuentabancariamovimiento_cantidad field.
     * @var        string
     */
    protected $cuentabancariamovimiento_cantidad;

    /**
     * The value for the cuentabancariamovimiento_comprobante field.
     * @var        string
     */
    protected $cuentabancariamovimiento_comprobante;

    /**
     * The value for the cuentabancariamovimiento_fechamovimiento field.
     * @var        string
     */
    protected $cuentabancariamovimiento_fechamovimiento;

    /**
     * The value for the cuentabancariamovimiento_fechacreacion field.
     * @var        string
     */
    protected $cuentabancariamovimiento_fechacreacion;

    /**
     * The value for the cuentabancariamovimiento_balance field.
     * @var        string
     */
    protected $cuentabancariamovimiento_balance;

    /**
     * The value for the cuentabancariamovimiento_referencia field.
     * @var        string
     */
    protected $cuentabancariamovimiento_referencia;

    /**
     * The value for the cuentabancariamovimiento_medio field.
     * @var        string
     */
    protected $cuentabancariamovimiento_medio;

    /**
     * @var        Cuentabancaria
     */
    protected $aCuentabancaria;

    /**
     * @var        Empleado
     */
    protected $aEmpleado;

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
     * Get the [idcuentabancariamovimiento] column value.
     *
     * @return int
     */
    public function getIdcuentabancariamovimiento()
    {

        return $this->idcuentabancariamovimiento;
    }

    /**
     * Get the [idcuentabancaria] column value.
     *
     * @return int
     */
    public function getIdcuentabancaria()
    {

        return $this->idcuentabancaria;
    }

    /**
     * Get the [idempleado] column value.
     *
     * @return int
     */
    public function getIdempleado()
    {

        return $this->idempleado;
    }

    /**
     * Get the [cuentabancariamovimiento_proceso] column value.
     *
     * @return string
     */
    public function getCuentabancariamovimientoProceso()
    {

        return $this->cuentabancariamovimiento_proceso;
    }

    /**
     * Get the [idproceso] column value.
     *
     * @return int
     */
    public function getIdproceso()
    {

        return $this->idproceso;
    }

    /**
     * Get the [cuentabancariamovimiento_cantidad] column value.
     *
     * @return string
     */
    public function getCuentabancariamovimientoCantidad()
    {

        return $this->cuentabancariamovimiento_cantidad;
    }

    /**
     * Get the [cuentabancariamovimiento_comprobante] column value.
     *
     * @return string
     */
    public function getCuentabancariamovimientoComprobante()
    {

        return $this->cuentabancariamovimiento_comprobante;
    }

    /**
     * Get the [optionally formatted] temporal [cuentabancariamovimiento_fechamovimiento] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCuentabancariamovimientoFechamovimiento($format = 'Y-m-d H:i:s')
    {
        if ($this->cuentabancariamovimiento_fechamovimiento === null) {
            return null;
        }

        if ($this->cuentabancariamovimiento_fechamovimiento === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->cuentabancariamovimiento_fechamovimiento);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->cuentabancariamovimiento_fechamovimiento, true), $x);
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
     * Get the [optionally formatted] temporal [cuentabancariamovimiento_fechacreacion] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCuentabancariamovimientoFechacreacion($format = 'Y-m-d H:i:s')
    {
        if ($this->cuentabancariamovimiento_fechacreacion === null) {
            return null;
        }

        if ($this->cuentabancariamovimiento_fechacreacion === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->cuentabancariamovimiento_fechacreacion);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->cuentabancariamovimiento_fechacreacion, true), $x);
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
     * Get the [cuentabancariamovimiento_balance] column value.
     *
     * @return string
     */
    public function getCuentabancariamovimientoBalance()
    {

        return $this->cuentabancariamovimiento_balance;
    }

    /**
     * Get the [cuentabancariamovimiento_referencia] column value.
     *
     * @return string
     */
    public function getCuentabancariamovimientoReferencia()
    {

        return $this->cuentabancariamovimiento_referencia;
    }

    /**
     * Get the [cuentabancariamovimiento_medio] column value.
     *
     * @return string
     */
    public function getCuentabancariamovimientoMedio()
    {

        return $this->cuentabancariamovimiento_medio;
    }

    /**
     * Set the value of [idcuentabancariamovimiento] column.
     *
     * @param  int $v new value
     * @return Cuentabancariamovimiento The current object (for fluent API support)
     */
    public function setIdcuentabancariamovimiento($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcuentabancariamovimiento !== $v) {
            $this->idcuentabancariamovimiento = $v;
            $this->modifiedColumns[] = CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO;
        }


        return $this;
    } // setIdcuentabancariamovimiento()

    /**
     * Set the value of [idcuentabancaria] column.
     *
     * @param  int $v new value
     * @return Cuentabancariamovimiento The current object (for fluent API support)
     */
    public function setIdcuentabancaria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcuentabancaria !== $v) {
            $this->idcuentabancaria = $v;
            $this->modifiedColumns[] = CuentabancariamovimientoPeer::IDCUENTABANCARIA;
        }

        if ($this->aCuentabancaria !== null && $this->aCuentabancaria->getIdcuentabancaria() !== $v) {
            $this->aCuentabancaria = null;
        }


        return $this;
    } // setIdcuentabancaria()

    /**
     * Set the value of [idempleado] column.
     *
     * @param  int $v new value
     * @return Cuentabancariamovimiento The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = CuentabancariamovimientoPeer::IDEMPLEADO;
        }

        if ($this->aEmpleado !== null && $this->aEmpleado->getIdempleado() !== $v) {
            $this->aEmpleado = null;
        }


        return $this;
    } // setIdempleado()

    /**
     * Set the value of [cuentabancariamovimiento_proceso] column.
     *
     * @param  string $v new value
     * @return Cuentabancariamovimiento The current object (for fluent API support)
     */
    public function setCuentabancariamovimientoProceso($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cuentabancariamovimiento_proceso !== $v) {
            $this->cuentabancariamovimiento_proceso = $v;
            $this->modifiedColumns[] = CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_PROCESO;
        }


        return $this;
    } // setCuentabancariamovimientoProceso()

    /**
     * Set the value of [idproceso] column.
     *
     * @param  int $v new value
     * @return Cuentabancariamovimiento The current object (for fluent API support)
     */
    public function setIdproceso($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproceso !== $v) {
            $this->idproceso = $v;
            $this->modifiedColumns[] = CuentabancariamovimientoPeer::IDPROCESO;
        }


        return $this;
    } // setIdproceso()

    /**
     * Set the value of [cuentabancariamovimiento_cantidad] column.
     *
     * @param  string $v new value
     * @return Cuentabancariamovimiento The current object (for fluent API support)
     */
    public function setCuentabancariamovimientoCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cuentabancariamovimiento_cantidad !== $v) {
            $this->cuentabancariamovimiento_cantidad = $v;
            $this->modifiedColumns[] = CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_CANTIDAD;
        }


        return $this;
    } // setCuentabancariamovimientoCantidad()

    /**
     * Set the value of [cuentabancariamovimiento_comprobante] column.
     *
     * @param  string $v new value
     * @return Cuentabancariamovimiento The current object (for fluent API support)
     */
    public function setCuentabancariamovimientoComprobante($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cuentabancariamovimiento_comprobante !== $v) {
            $this->cuentabancariamovimiento_comprobante = $v;
            $this->modifiedColumns[] = CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_COMPROBANTE;
        }


        return $this;
    } // setCuentabancariamovimientoComprobante()

    /**
     * Sets the value of [cuentabancariamovimiento_fechamovimiento] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cuentabancariamovimiento The current object (for fluent API support)
     */
    public function setCuentabancariamovimientoFechamovimiento($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->cuentabancariamovimiento_fechamovimiento !== null || $dt !== null) {
            $currentDateAsString = ($this->cuentabancariamovimiento_fechamovimiento !== null && $tmpDt = new DateTime($this->cuentabancariamovimiento_fechamovimiento)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->cuentabancariamovimiento_fechamovimiento = $newDateAsString;
                $this->modifiedColumns[] = CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHAMOVIMIENTO;
            }
        } // if either are not null


        return $this;
    } // setCuentabancariamovimientoFechamovimiento()

    /**
     * Sets the value of [cuentabancariamovimiento_fechacreacion] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cuentabancariamovimiento The current object (for fluent API support)
     */
    public function setCuentabancariamovimientoFechacreacion($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->cuentabancariamovimiento_fechacreacion !== null || $dt !== null) {
            $currentDateAsString = ($this->cuentabancariamovimiento_fechacreacion !== null && $tmpDt = new DateTime($this->cuentabancariamovimiento_fechacreacion)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->cuentabancariamovimiento_fechacreacion = $newDateAsString;
                $this->modifiedColumns[] = CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHACREACION;
            }
        } // if either are not null


        return $this;
    } // setCuentabancariamovimientoFechacreacion()

    /**
     * Set the value of [cuentabancariamovimiento_balance] column.
     *
     * @param  string $v new value
     * @return Cuentabancariamovimiento The current object (for fluent API support)
     */
    public function setCuentabancariamovimientoBalance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cuentabancariamovimiento_balance !== $v) {
            $this->cuentabancariamovimiento_balance = $v;
            $this->modifiedColumns[] = CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_BALANCE;
        }


        return $this;
    } // setCuentabancariamovimientoBalance()

    /**
     * Set the value of [cuentabancariamovimiento_referencia] column.
     *
     * @param  string $v new value
     * @return Cuentabancariamovimiento The current object (for fluent API support)
     */
    public function setCuentabancariamovimientoReferencia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cuentabancariamovimiento_referencia !== $v) {
            $this->cuentabancariamovimiento_referencia = $v;
            $this->modifiedColumns[] = CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_REFERENCIA;
        }


        return $this;
    } // setCuentabancariamovimientoReferencia()

    /**
     * Set the value of [cuentabancariamovimiento_medio] column.
     *
     * @param  string $v new value
     * @return Cuentabancariamovimiento The current object (for fluent API support)
     */
    public function setCuentabancariamovimientoMedio($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cuentabancariamovimiento_medio !== $v) {
            $this->cuentabancariamovimiento_medio = $v;
            $this->modifiedColumns[] = CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_MEDIO;
        }


        return $this;
    } // setCuentabancariamovimientoMedio()

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

            $this->idcuentabancariamovimiento = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idcuentabancaria = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idempleado = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->cuentabancariamovimiento_proceso = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->idproceso = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->cuentabancariamovimiento_cantidad = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->cuentabancariamovimiento_comprobante = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->cuentabancariamovimiento_fechamovimiento = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->cuentabancariamovimiento_fechacreacion = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->cuentabancariamovimiento_balance = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->cuentabancariamovimiento_referencia = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->cuentabancariamovimiento_medio = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 12; // 12 = CuentabancariamovimientoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Cuentabancariamovimiento object", $e);
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

        if ($this->aCuentabancaria !== null && $this->idcuentabancaria !== $this->aCuentabancaria->getIdcuentabancaria()) {
            $this->aCuentabancaria = null;
        }
        if ($this->aEmpleado !== null && $this->idempleado !== $this->aEmpleado->getIdempleado()) {
            $this->aEmpleado = null;
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
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CuentabancariamovimientoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCuentabancaria = null;
            $this->aEmpleado = null;
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
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CuentabancariamovimientoQuery::create()
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
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CuentabancariamovimientoPeer::addInstanceToPool($this);
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

            if ($this->aCuentabancaria !== null) {
                if ($this->aCuentabancaria->isModified() || $this->aCuentabancaria->isNew()) {
                    $affectedRows += $this->aCuentabancaria->save($con);
                }
                $this->setCuentabancaria($this->aCuentabancaria);
            }

            if ($this->aEmpleado !== null) {
                if ($this->aEmpleado->isModified() || $this->aEmpleado->isNew()) {
                    $affectedRows += $this->aEmpleado->save($con);
                }
                $this->setEmpleado($this->aEmpleado);
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

        $this->modifiedColumns[] = CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO;
        if (null !== $this->idcuentabancariamovimiento) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO)) {
            $modifiedColumns[':p' . $index++]  = '`idcuentabancariamovimiento`';
        }
        if ($this->isColumnModified(CuentabancariamovimientoPeer::IDCUENTABANCARIA)) {
            $modifiedColumns[':p' . $index++]  = '`idcuentabancaria`';
        }
        if ($this->isColumnModified(CuentabancariamovimientoPeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_PROCESO)) {
            $modifiedColumns[':p' . $index++]  = '`cuentabancariamovimiento_proceso`';
        }
        if ($this->isColumnModified(CuentabancariamovimientoPeer::IDPROCESO)) {
            $modifiedColumns[':p' . $index++]  = '`idproceso`';
        }
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`cuentabancariamovimiento_cantidad`';
        }
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_COMPROBANTE)) {
            $modifiedColumns[':p' . $index++]  = '`cuentabancariamovimiento_comprobante`';
        }
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHAMOVIMIENTO)) {
            $modifiedColumns[':p' . $index++]  = '`cuentabancariamovimiento_fechamovimiento`';
        }
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHACREACION)) {
            $modifiedColumns[':p' . $index++]  = '`cuentabancariamovimiento_fechacreacion`';
        }
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_BALANCE)) {
            $modifiedColumns[':p' . $index++]  = '`cuentabancariamovimiento_balance`';
        }
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_REFERENCIA)) {
            $modifiedColumns[':p' . $index++]  = '`cuentabancariamovimiento_referencia`';
        }
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_MEDIO)) {
            $modifiedColumns[':p' . $index++]  = '`cuentabancariamovimiento_medio`';
        }

        $sql = sprintf(
            'INSERT INTO `cuentabancariamovimiento` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcuentabancariamovimiento`':
                        $stmt->bindValue($identifier, $this->idcuentabancariamovimiento, PDO::PARAM_INT);
                        break;
                    case '`idcuentabancaria`':
                        $stmt->bindValue($identifier, $this->idcuentabancaria, PDO::PARAM_INT);
                        break;
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
                        break;
                    case '`cuentabancariamovimiento_proceso`':
                        $stmt->bindValue($identifier, $this->cuentabancariamovimiento_proceso, PDO::PARAM_STR);
                        break;
                    case '`idproceso`':
                        $stmt->bindValue($identifier, $this->idproceso, PDO::PARAM_INT);
                        break;
                    case '`cuentabancariamovimiento_cantidad`':
                        $stmt->bindValue($identifier, $this->cuentabancariamovimiento_cantidad, PDO::PARAM_STR);
                        break;
                    case '`cuentabancariamovimiento_comprobante`':
                        $stmt->bindValue($identifier, $this->cuentabancariamovimiento_comprobante, PDO::PARAM_STR);
                        break;
                    case '`cuentabancariamovimiento_fechamovimiento`':
                        $stmt->bindValue($identifier, $this->cuentabancariamovimiento_fechamovimiento, PDO::PARAM_STR);
                        break;
                    case '`cuentabancariamovimiento_fechacreacion`':
                        $stmt->bindValue($identifier, $this->cuentabancariamovimiento_fechacreacion, PDO::PARAM_STR);
                        break;
                    case '`cuentabancariamovimiento_balance`':
                        $stmt->bindValue($identifier, $this->cuentabancariamovimiento_balance, PDO::PARAM_STR);
                        break;
                    case '`cuentabancariamovimiento_referencia`':
                        $stmt->bindValue($identifier, $this->cuentabancariamovimiento_referencia, PDO::PARAM_STR);
                        break;
                    case '`cuentabancariamovimiento_medio`':
                        $stmt->bindValue($identifier, $this->cuentabancariamovimiento_medio, PDO::PARAM_STR);
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
        $this->setIdcuentabancariamovimiento($pk);

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

            if ($this->aCuentabancaria !== null) {
                if (!$this->aCuentabancaria->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCuentabancaria->getValidationFailures());
                }
            }

            if ($this->aEmpleado !== null) {
                if (!$this->aEmpleado->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleado->getValidationFailures());
                }
            }


            if (($retval = CuentabancariamovimientoPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CuentabancariamovimientoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcuentabancariamovimiento();
                break;
            case 1:
                return $this->getIdcuentabancaria();
                break;
            case 2:
                return $this->getIdempleado();
                break;
            case 3:
                return $this->getCuentabancariamovimientoProceso();
                break;
            case 4:
                return $this->getIdproceso();
                break;
            case 5:
                return $this->getCuentabancariamovimientoCantidad();
                break;
            case 6:
                return $this->getCuentabancariamovimientoComprobante();
                break;
            case 7:
                return $this->getCuentabancariamovimientoFechamovimiento();
                break;
            case 8:
                return $this->getCuentabancariamovimientoFechacreacion();
                break;
            case 9:
                return $this->getCuentabancariamovimientoBalance();
                break;
            case 10:
                return $this->getCuentabancariamovimientoReferencia();
                break;
            case 11:
                return $this->getCuentabancariamovimientoMedio();
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
        if (isset($alreadyDumpedObjects['Cuentabancariamovimiento'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Cuentabancariamovimiento'][$this->getPrimaryKey()] = true;
        $keys = CuentabancariamovimientoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcuentabancariamovimiento(),
            $keys[1] => $this->getIdcuentabancaria(),
            $keys[2] => $this->getIdempleado(),
            $keys[3] => $this->getCuentabancariamovimientoProceso(),
            $keys[4] => $this->getIdproceso(),
            $keys[5] => $this->getCuentabancariamovimientoCantidad(),
            $keys[6] => $this->getCuentabancariamovimientoComprobante(),
            $keys[7] => $this->getCuentabancariamovimientoFechamovimiento(),
            $keys[8] => $this->getCuentabancariamovimientoFechacreacion(),
            $keys[9] => $this->getCuentabancariamovimientoBalance(),
            $keys[10] => $this->getCuentabancariamovimientoReferencia(),
            $keys[11] => $this->getCuentabancariamovimientoMedio(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCuentabancaria) {
                $result['Cuentabancaria'] = $this->aCuentabancaria->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpleado) {
                $result['Empleado'] = $this->aEmpleado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CuentabancariamovimientoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcuentabancariamovimiento($value);
                break;
            case 1:
                $this->setIdcuentabancaria($value);
                break;
            case 2:
                $this->setIdempleado($value);
                break;
            case 3:
                $this->setCuentabancariamovimientoProceso($value);
                break;
            case 4:
                $this->setIdproceso($value);
                break;
            case 5:
                $this->setCuentabancariamovimientoCantidad($value);
                break;
            case 6:
                $this->setCuentabancariamovimientoComprobante($value);
                break;
            case 7:
                $this->setCuentabancariamovimientoFechamovimiento($value);
                break;
            case 8:
                $this->setCuentabancariamovimientoFechacreacion($value);
                break;
            case 9:
                $this->setCuentabancariamovimientoBalance($value);
                break;
            case 10:
                $this->setCuentabancariamovimientoReferencia($value);
                break;
            case 11:
                $this->setCuentabancariamovimientoMedio($value);
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
        $keys = CuentabancariamovimientoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcuentabancariamovimiento($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdcuentabancaria($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdempleado($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCuentabancariamovimientoProceso($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdproceso($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCuentabancariamovimientoCantidad($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCuentabancariamovimientoComprobante($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCuentabancariamovimientoFechamovimiento($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCuentabancariamovimientoFechacreacion($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCuentabancariamovimientoBalance($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCuentabancariamovimientoReferencia($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCuentabancariamovimientoMedio($arr[$keys[11]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CuentabancariamovimientoPeer::DATABASE_NAME);

        if ($this->isColumnModified(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO)) $criteria->add(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO, $this->idcuentabancariamovimiento);
        if ($this->isColumnModified(CuentabancariamovimientoPeer::IDCUENTABANCARIA)) $criteria->add(CuentabancariamovimientoPeer::IDCUENTABANCARIA, $this->idcuentabancaria);
        if ($this->isColumnModified(CuentabancariamovimientoPeer::IDEMPLEADO)) $criteria->add(CuentabancariamovimientoPeer::IDEMPLEADO, $this->idempleado);
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_PROCESO)) $criteria->add(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_PROCESO, $this->cuentabancariamovimiento_proceso);
        if ($this->isColumnModified(CuentabancariamovimientoPeer::IDPROCESO)) $criteria->add(CuentabancariamovimientoPeer::IDPROCESO, $this->idproceso);
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_CANTIDAD)) $criteria->add(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_CANTIDAD, $this->cuentabancariamovimiento_cantidad);
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_COMPROBANTE)) $criteria->add(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_COMPROBANTE, $this->cuentabancariamovimiento_comprobante);
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHAMOVIMIENTO)) $criteria->add(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHAMOVIMIENTO, $this->cuentabancariamovimiento_fechamovimiento);
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHACREACION)) $criteria->add(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHACREACION, $this->cuentabancariamovimiento_fechacreacion);
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_BALANCE)) $criteria->add(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_BALANCE, $this->cuentabancariamovimiento_balance);
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_REFERENCIA)) $criteria->add(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_REFERENCIA, $this->cuentabancariamovimiento_referencia);
        if ($this->isColumnModified(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_MEDIO)) $criteria->add(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_MEDIO, $this->cuentabancariamovimiento_medio);

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
        $criteria = new Criteria(CuentabancariamovimientoPeer::DATABASE_NAME);
        $criteria->add(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO, $this->idcuentabancariamovimiento);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcuentabancariamovimiento();
    }

    /**
     * Generic method to set the primary key (idcuentabancariamovimiento column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcuentabancariamovimiento($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcuentabancariamovimiento();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Cuentabancariamovimiento (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdcuentabancaria($this->getIdcuentabancaria());
        $copyObj->setIdempleado($this->getIdempleado());
        $copyObj->setCuentabancariamovimientoProceso($this->getCuentabancariamovimientoProceso());
        $copyObj->setIdproceso($this->getIdproceso());
        $copyObj->setCuentabancariamovimientoCantidad($this->getCuentabancariamovimientoCantidad());
        $copyObj->setCuentabancariamovimientoComprobante($this->getCuentabancariamovimientoComprobante());
        $copyObj->setCuentabancariamovimientoFechamovimiento($this->getCuentabancariamovimientoFechamovimiento());
        $copyObj->setCuentabancariamovimientoFechacreacion($this->getCuentabancariamovimientoFechacreacion());
        $copyObj->setCuentabancariamovimientoBalance($this->getCuentabancariamovimientoBalance());
        $copyObj->setCuentabancariamovimientoReferencia($this->getCuentabancariamovimientoReferencia());
        $copyObj->setCuentabancariamovimientoMedio($this->getCuentabancariamovimientoMedio());

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
            $copyObj->setIdcuentabancariamovimiento(NULL); // this is a auto-increment column, so set to default value
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
     * @return Cuentabancariamovimiento Clone of current object.
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
     * @return CuentabancariamovimientoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CuentabancariamovimientoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Cuentabancaria object.
     *
     * @param                  Cuentabancaria $v
     * @return Cuentabancariamovimiento The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCuentabancaria(Cuentabancaria $v = null)
    {
        if ($v === null) {
            $this->setIdcuentabancaria(NULL);
        } else {
            $this->setIdcuentabancaria($v->getIdcuentabancaria());
        }

        $this->aCuentabancaria = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Cuentabancaria object, it will not be re-added.
        if ($v !== null) {
            $v->addCuentabancariamovimiento($this);
        }


        return $this;
    }


    /**
     * Get the associated Cuentabancaria object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Cuentabancaria The associated Cuentabancaria object.
     * @throws PropelException
     */
    public function getCuentabancaria(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCuentabancaria === null && ($this->idcuentabancaria !== null) && $doQuery) {
            $this->aCuentabancaria = CuentabancariaQuery::create()->findPk($this->idcuentabancaria, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCuentabancaria->addCuentabancariamovimientos($this);
             */
        }

        return $this->aCuentabancaria;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Cuentabancariamovimiento The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleado(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleado(NULL);
        } else {
            $this->setIdempleado($v->getIdempleado());
        }

        $this->aEmpleado = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addCuentabancariamovimiento($this);
        }


        return $this;
    }


    /**
     * Get the associated Empleado object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Empleado The associated Empleado object.
     * @throws PropelException
     */
    public function getEmpleado(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpleado === null && ($this->idempleado !== null) && $doQuery) {
            $this->aEmpleado = EmpleadoQuery::create()->findPk($this->idempleado, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleado->addCuentabancariamovimientos($this);
             */
        }

        return $this->aEmpleado;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idcuentabancariamovimiento = null;
        $this->idcuentabancaria = null;
        $this->idempleado = null;
        $this->cuentabancariamovimiento_proceso = null;
        $this->idproceso = null;
        $this->cuentabancariamovimiento_cantidad = null;
        $this->cuentabancariamovimiento_comprobante = null;
        $this->cuentabancariamovimiento_fechamovimiento = null;
        $this->cuentabancariamovimiento_fechacreacion = null;
        $this->cuentabancariamovimiento_balance = null;
        $this->cuentabancariamovimiento_referencia = null;
        $this->cuentabancariamovimiento_medio = null;
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
            if ($this->aCuentabancaria instanceof Persistent) {
              $this->aCuentabancaria->clearAllReferences($deep);
            }
            if ($this->aEmpleado instanceof Persistent) {
              $this->aEmpleado->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCuentabancaria = null;
        $this->aEmpleado = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CuentabancariamovimientoPeer::DEFAULT_STRING_FORMAT);
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
