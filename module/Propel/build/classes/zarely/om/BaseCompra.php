<?php


/**
 * Base class that represents a row from the 'compra' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseCompra extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CompraPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CompraPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcompra field.
     * @var        int
     */
    protected $idcompra;

    /**
     * The value for the idproveedor field.
     * @var        int
     */
    protected $idproveedor;

    /**
     * The value for the compra_fechacreacion field.
     * @var        string
     */
    protected $compra_fechacreacion;

    /**
     * The value for the compra_fechacompra field.
     * @var        string
     */
    protected $compra_fechacompra;

    /**
     * The value for the compra_total field.
     * @var        string
     */
    protected $compra_total;

    /**
     * The value for the compra_estatuspago field.
     * @var        boolean
     */
    protected $compra_estatuspago;

    /**
     * The value for the compra_estatus field.
     * @var        string
     */
    protected $compra_estatus;

    /**
     * The value for the compra_nota field.
     * @var        string
     */
    protected $compra_nota;

    /**
     * The value for the compra_comprobante field.
     * @var        string
     */
    protected $compra_comprobante;

    /**
     * The value for the compra_fechaentrega field.
     * @var        string
     */
    protected $compra_fechaentrega;

    /**
     * @var        Proveedor
     */
    protected $aProveedor;

    /**
     * @var        PropelObjectCollection|Compradetalle[] Collection to store aggregation of Compradetalle objects.
     */
    protected $collCompradetalles;
    protected $collCompradetallesPartial;

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
     * Get the [idcompra] column value.
     *
     * @return int
     */
    public function getIdcompra()
    {

        return $this->idcompra;
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
     * Get the [optionally formatted] temporal [compra_fechacreacion] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCompraFechacreacion($format = '%x')
    {
        if ($this->compra_fechacreacion === null) {
            return null;
        }

        if ($this->compra_fechacreacion === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->compra_fechacreacion);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->compra_fechacreacion, true), $x);
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
     * Get the [optionally formatted] temporal [compra_fechacompra] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCompraFechacompra($format = '%x')
    {
        if ($this->compra_fechacompra === null) {
            return null;
        }

        if ($this->compra_fechacompra === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->compra_fechacompra);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->compra_fechacompra, true), $x);
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
     * Get the [compra_total] column value.
     *
     * @return string
     */
    public function getCompraTotal()
    {

        return $this->compra_total;
    }

    /**
     * Get the [compra_estatuspago] column value.
     *
     * @return boolean
     */
    public function getCompraEstatuspago()
    {

        return $this->compra_estatuspago;
    }

    /**
     * Get the [compra_estatus] column value.
     *
     * @return string
     */
    public function getCompraEstatus()
    {

        return $this->compra_estatus;
    }

    /**
     * Get the [compra_nota] column value.
     *
     * @return string
     */
    public function getCompraNota()
    {

        return $this->compra_nota;
    }

    /**
     * Get the [compra_comprobante] column value.
     *
     * @return string
     */
    public function getCompraComprobante()
    {

        return $this->compra_comprobante;
    }

    /**
     * Get the [optionally formatted] temporal [compra_fechaentrega] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getCompraFechaentrega($format = '%x')
    {
        if ($this->compra_fechaentrega === null) {
            return null;
        }

        if ($this->compra_fechaentrega === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->compra_fechaentrega);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->compra_fechaentrega, true), $x);
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
     * Set the value of [idcompra] column.
     *
     * @param  int $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setIdcompra($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcompra !== $v) {
            $this->idcompra = $v;
            $this->modifiedColumns[] = CompraPeer::IDCOMPRA;
        }


        return $this;
    } // setIdcompra()

    /**
     * Set the value of [idproveedor] column.
     *
     * @param  int $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setIdproveedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproveedor !== $v) {
            $this->idproveedor = $v;
            $this->modifiedColumns[] = CompraPeer::IDPROVEEDOR;
        }

        if ($this->aProveedor !== null && $this->aProveedor->getIdproveedor() !== $v) {
            $this->aProveedor = null;
        }


        return $this;
    } // setIdproveedor()

    /**
     * Sets the value of [compra_fechacreacion] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraFechacreacion($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->compra_fechacreacion !== null || $dt !== null) {
            $currentDateAsString = ($this->compra_fechacreacion !== null && $tmpDt = new DateTime($this->compra_fechacreacion)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->compra_fechacreacion = $newDateAsString;
                $this->modifiedColumns[] = CompraPeer::COMPRA_FECHACREACION;
            }
        } // if either are not null


        return $this;
    } // setCompraFechacreacion()

    /**
     * Sets the value of [compra_fechacompra] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraFechacompra($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->compra_fechacompra !== null || $dt !== null) {
            $currentDateAsString = ($this->compra_fechacompra !== null && $tmpDt = new DateTime($this->compra_fechacompra)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->compra_fechacompra = $newDateAsString;
                $this->modifiedColumns[] = CompraPeer::COMPRA_FECHACOMPRA;
            }
        } // if either are not null


        return $this;
    } // setCompraFechacompra()

    /**
     * Set the value of [compra_total] column.
     *
     * @param  string $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->compra_total !== $v) {
            $this->compra_total = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_TOTAL;
        }


        return $this;
    } // setCompraTotal()

    /**
     * Sets the value of the [compra_estatuspago] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraEstatuspago($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->compra_estatuspago !== $v) {
            $this->compra_estatuspago = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_ESTATUSPAGO;
        }


        return $this;
    } // setCompraEstatuspago()

    /**
     * Set the value of [compra_estatus] column.
     *
     * @param  string $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraEstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->compra_estatus !== $v) {
            $this->compra_estatus = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_ESTATUS;
        }


        return $this;
    } // setCompraEstatus()

    /**
     * Set the value of [compra_nota] column.
     *
     * @param  string $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraNota($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->compra_nota !== $v) {
            $this->compra_nota = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_NOTA;
        }


        return $this;
    } // setCompraNota()

    /**
     * Set the value of [compra_comprobante] column.
     *
     * @param  string $v new value
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraComprobante($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->compra_comprobante !== $v) {
            $this->compra_comprobante = $v;
            $this->modifiedColumns[] = CompraPeer::COMPRA_COMPROBANTE;
        }


        return $this;
    } // setCompraComprobante()

    /**
     * Sets the value of [compra_fechaentrega] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Compra The current object (for fluent API support)
     */
    public function setCompraFechaentrega($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->compra_fechaentrega !== null || $dt !== null) {
            $currentDateAsString = ($this->compra_fechaentrega !== null && $tmpDt = new DateTime($this->compra_fechaentrega)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->compra_fechaentrega = $newDateAsString;
                $this->modifiedColumns[] = CompraPeer::COMPRA_FECHAENTREGA;
            }
        } // if either are not null


        return $this;
    } // setCompraFechaentrega()

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

            $this->idcompra = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idproveedor = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->compra_fechacreacion = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->compra_fechacompra = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->compra_total = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->compra_estatuspago = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
            $this->compra_estatus = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->compra_nota = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->compra_comprobante = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->compra_fechaentrega = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = CompraPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Compra object", $e);
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

        if ($this->aProveedor !== null && $this->idproveedor !== $this->aProveedor->getIdproveedor()) {
            $this->aProveedor = null;
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
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CompraPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aProveedor = null;
            $this->collCompradetalles = null;

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
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CompraQuery::create()
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
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CompraPeer::addInstanceToPool($this);
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

            if ($this->aProveedor !== null) {
                if ($this->aProveedor->isModified() || $this->aProveedor->isNew()) {
                    $affectedRows += $this->aProveedor->save($con);
                }
                $this->setProveedor($this->aProveedor);
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

        $this->modifiedColumns[] = CompraPeer::IDCOMPRA;
        if (null !== $this->idcompra) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CompraPeer::IDCOMPRA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CompraPeer::IDCOMPRA)) {
            $modifiedColumns[':p' . $index++]  = '`idcompra`';
        }
        if ($this->isColumnModified(CompraPeer::IDPROVEEDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idproveedor`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_FECHACREACION)) {
            $modifiedColumns[':p' . $index++]  = '`compra_fechacreacion`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_FECHACOMPRA)) {
            $modifiedColumns[':p' . $index++]  = '`compra_fechacompra`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`compra_total`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_ESTATUSPAGO)) {
            $modifiedColumns[':p' . $index++]  = '`compra_estatuspago`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`compra_estatus`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_NOTA)) {
            $modifiedColumns[':p' . $index++]  = '`compra_nota`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_COMPROBANTE)) {
            $modifiedColumns[':p' . $index++]  = '`compra_comprobante`';
        }
        if ($this->isColumnModified(CompraPeer::COMPRA_FECHAENTREGA)) {
            $modifiedColumns[':p' . $index++]  = '`compra_fechaentrega`';
        }

        $sql = sprintf(
            'INSERT INTO `compra` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcompra`':
                        $stmt->bindValue($identifier, $this->idcompra, PDO::PARAM_INT);
                        break;
                    case '`idproveedor`':
                        $stmt->bindValue($identifier, $this->idproveedor, PDO::PARAM_INT);
                        break;
                    case '`compra_fechacreacion`':
                        $stmt->bindValue($identifier, $this->compra_fechacreacion, PDO::PARAM_STR);
                        break;
                    case '`compra_fechacompra`':
                        $stmt->bindValue($identifier, $this->compra_fechacompra, PDO::PARAM_STR);
                        break;
                    case '`compra_total`':
                        $stmt->bindValue($identifier, $this->compra_total, PDO::PARAM_STR);
                        break;
                    case '`compra_estatuspago`':
                        $stmt->bindValue($identifier, (int) $this->compra_estatuspago, PDO::PARAM_INT);
                        break;
                    case '`compra_estatus`':
                        $stmt->bindValue($identifier, $this->compra_estatus, PDO::PARAM_STR);
                        break;
                    case '`compra_nota`':
                        $stmt->bindValue($identifier, $this->compra_nota, PDO::PARAM_STR);
                        break;
                    case '`compra_comprobante`':
                        $stmt->bindValue($identifier, $this->compra_comprobante, PDO::PARAM_STR);
                        break;
                    case '`compra_fechaentrega`':
                        $stmt->bindValue($identifier, $this->compra_fechaentrega, PDO::PARAM_STR);
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
        $this->setIdcompra($pk);

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

            if ($this->aProveedor !== null) {
                if (!$this->aProveedor->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProveedor->getValidationFailures());
                }
            }


            if (($retval = CompraPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCompradetalles !== null) {
                    foreach ($this->collCompradetalles as $referrerFK) {
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
        $pos = CompraPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcompra();
                break;
            case 1:
                return $this->getIdproveedor();
                break;
            case 2:
                return $this->getCompraFechacreacion();
                break;
            case 3:
                return $this->getCompraFechacompra();
                break;
            case 4:
                return $this->getCompraTotal();
                break;
            case 5:
                return $this->getCompraEstatuspago();
                break;
            case 6:
                return $this->getCompraEstatus();
                break;
            case 7:
                return $this->getCompraNota();
                break;
            case 8:
                return $this->getCompraComprobante();
                break;
            case 9:
                return $this->getCompraFechaentrega();
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
        if (isset($alreadyDumpedObjects['Compra'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Compra'][$this->getPrimaryKey()] = true;
        $keys = CompraPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcompra(),
            $keys[1] => $this->getIdproveedor(),
            $keys[2] => $this->getCompraFechacreacion(),
            $keys[3] => $this->getCompraFechacompra(),
            $keys[4] => $this->getCompraTotal(),
            $keys[5] => $this->getCompraEstatuspago(),
            $keys[6] => $this->getCompraEstatus(),
            $keys[7] => $this->getCompraNota(),
            $keys[8] => $this->getCompraComprobante(),
            $keys[9] => $this->getCompraFechaentrega(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aProveedor) {
                $result['Proveedor'] = $this->aProveedor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCompradetalles) {
                $result['Compradetalles'] = $this->collCompradetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CompraPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcompra($value);
                break;
            case 1:
                $this->setIdproveedor($value);
                break;
            case 2:
                $this->setCompraFechacreacion($value);
                break;
            case 3:
                $this->setCompraFechacompra($value);
                break;
            case 4:
                $this->setCompraTotal($value);
                break;
            case 5:
                $this->setCompraEstatuspago($value);
                break;
            case 6:
                $this->setCompraEstatus($value);
                break;
            case 7:
                $this->setCompraNota($value);
                break;
            case 8:
                $this->setCompraComprobante($value);
                break;
            case 9:
                $this->setCompraFechaentrega($value);
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
        $keys = CompraPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcompra($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdproveedor($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCompraFechacreacion($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCompraFechacompra($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCompraTotal($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCompraEstatuspago($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCompraEstatus($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCompraNota($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCompraComprobante($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setCompraFechaentrega($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CompraPeer::DATABASE_NAME);

        if ($this->isColumnModified(CompraPeer::IDCOMPRA)) $criteria->add(CompraPeer::IDCOMPRA, $this->idcompra);
        if ($this->isColumnModified(CompraPeer::IDPROVEEDOR)) $criteria->add(CompraPeer::IDPROVEEDOR, $this->idproveedor);
        if ($this->isColumnModified(CompraPeer::COMPRA_FECHACREACION)) $criteria->add(CompraPeer::COMPRA_FECHACREACION, $this->compra_fechacreacion);
        if ($this->isColumnModified(CompraPeer::COMPRA_FECHACOMPRA)) $criteria->add(CompraPeer::COMPRA_FECHACOMPRA, $this->compra_fechacompra);
        if ($this->isColumnModified(CompraPeer::COMPRA_TOTAL)) $criteria->add(CompraPeer::COMPRA_TOTAL, $this->compra_total);
        if ($this->isColumnModified(CompraPeer::COMPRA_ESTATUSPAGO)) $criteria->add(CompraPeer::COMPRA_ESTATUSPAGO, $this->compra_estatuspago);
        if ($this->isColumnModified(CompraPeer::COMPRA_ESTATUS)) $criteria->add(CompraPeer::COMPRA_ESTATUS, $this->compra_estatus);
        if ($this->isColumnModified(CompraPeer::COMPRA_NOTA)) $criteria->add(CompraPeer::COMPRA_NOTA, $this->compra_nota);
        if ($this->isColumnModified(CompraPeer::COMPRA_COMPROBANTE)) $criteria->add(CompraPeer::COMPRA_COMPROBANTE, $this->compra_comprobante);
        if ($this->isColumnModified(CompraPeer::COMPRA_FECHAENTREGA)) $criteria->add(CompraPeer::COMPRA_FECHAENTREGA, $this->compra_fechaentrega);

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
        $criteria = new Criteria(CompraPeer::DATABASE_NAME);
        $criteria->add(CompraPeer::IDCOMPRA, $this->idcompra);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcompra();
    }

    /**
     * Generic method to set the primary key (idcompra column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcompra($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcompra();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Compra (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdproveedor($this->getIdproveedor());
        $copyObj->setCompraFechacreacion($this->getCompraFechacreacion());
        $copyObj->setCompraFechacompra($this->getCompraFechacompra());
        $copyObj->setCompraTotal($this->getCompraTotal());
        $copyObj->setCompraEstatuspago($this->getCompraEstatuspago());
        $copyObj->setCompraEstatus($this->getCompraEstatus());
        $copyObj->setCompraNota($this->getCompraNota());
        $copyObj->setCompraComprobante($this->getCompraComprobante());
        $copyObj->setCompraFechaentrega($this->getCompraFechaentrega());

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

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdcompra(NULL); // this is a auto-increment column, so set to default value
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
     * @return Compra Clone of current object.
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
     * @return CompraPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CompraPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Proveedor object.
     *
     * @param                  Proveedor $v
     * @return Compra The current object (for fluent API support)
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
            $v->addCompra($this);
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
                $this->aProveedor->addCompras($this);
             */
        }

        return $this->aProveedor;
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
    }

    /**
     * Clears out the collCompradetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Compra The current object (for fluent API support)
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
     * If this Compra is new, it will return
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
                    ->filterByCompra($this)
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
     * @return Compra The current object (for fluent API support)
     */
    public function setCompradetalles(PropelCollection $compradetalles, PropelPDO $con = null)
    {
        $compradetallesToDelete = $this->getCompradetalles(new Criteria(), $con)->diff($compradetalles);


        $this->compradetallesScheduledForDeletion = $compradetallesToDelete;

        foreach ($compradetallesToDelete as $compradetalleRemoved) {
            $compradetalleRemoved->setCompra(null);
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
                ->filterByCompra($this)
                ->count($con);
        }

        return count($this->collCompradetalles);
    }

    /**
     * Method called to associate a Compradetalle object to this object
     * through the Compradetalle foreign key attribute.
     *
     * @param    Compradetalle $l Compradetalle
     * @return Compra The current object (for fluent API support)
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
        $compradetalle->setCompra($this);
    }

    /**
     * @param	Compradetalle $compradetalle The compradetalle object to remove.
     * @return Compra The current object (for fluent API support)
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
            $compradetalle->setCompra(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Compra is new, it will return
     * an empty collection; or if this Compra has previously
     * been saved, it will retrieve related Compradetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Compra.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Compradetalle[] List of Compradetalle objects
     */
    public function getCompradetallesJoinProductovariante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CompradetalleQuery::create(null, $criteria);
        $query->joinWith('Productovariante', $join_behavior);

        return $this->getCompradetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idcompra = null;
        $this->idproveedor = null;
        $this->compra_fechacreacion = null;
        $this->compra_fechacompra = null;
        $this->compra_total = null;
        $this->compra_estatuspago = null;
        $this->compra_estatus = null;
        $this->compra_nota = null;
        $this->compra_comprobante = null;
        $this->compra_fechaentrega = null;
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
            if ($this->collCompradetalles) {
                foreach ($this->collCompradetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aProveedor instanceof Persistent) {
              $this->aProveedor->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCompradetalles instanceof PropelCollection) {
            $this->collCompradetalles->clearIterator();
        }
        $this->collCompradetalles = null;
        $this->aProveedor = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CompraPeer::DEFAULT_STRING_FORMAT);
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
