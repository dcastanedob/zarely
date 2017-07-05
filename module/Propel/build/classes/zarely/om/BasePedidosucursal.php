<?php


/**
 * Base class that represents a row from the 'pedidosucursal' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BasePedidosucursal extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PedidosucursalPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PedidosucursalPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idpedidosucursal field.
     * @var        int
     */
    protected $idpedidosucursal;

    /**
     * The value for the idsucursal field.
     * @var        int
     */
    protected $idsucursal;

    /**
     * The value for the idempleado field.
     * @var        int
     */
    protected $idempleado;

    /**
     * The value for the pedidosucursal_fechasolicitud field.
     * @var        string
     */
    protected $pedidosucursal_fechasolicitud;

    /**
     * The value for the pedidosucursal_fechaentrega field.
     * @var        string
     */
    protected $pedidosucursal_fechaentrega;

    /**
     * The value for the pedidosucursal_estatus field.
     * @var        string
     */
    protected $pedidosucursal_estatus;

    /**
     * The value for the pedidosucursal_nota field.
     * @var        string
     */
    protected $pedidosucursal_nota;

    /**
     * @var        Empleado
     */
    protected $aEmpleado;

    /**
     * @var        Sucursal
     */
    protected $aSucursal;

    /**
     * @var        PropelObjectCollection|Pedidosucursaldetalle[] Collection to store aggregation of Pedidosucursaldetalle objects.
     */
    protected $collPedidosucursaldetalles;
    protected $collPedidosucursaldetallesPartial;

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
    protected $pedidosucursaldetallesScheduledForDeletion = null;

    /**
     * Get the [idpedidosucursal] column value.
     *
     * @return int
     */
    public function getIdpedidosucursal()
    {

        return $this->idpedidosucursal;
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
     * Get the [idempleado] column value.
     *
     * @return int
     */
    public function getIdempleado()
    {

        return $this->idempleado;
    }

    /**
     * Get the [optionally formatted] temporal [pedidosucursal_fechasolicitud] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPedidosucursalFechasolicitud($format = '%x')
    {
        if ($this->pedidosucursal_fechasolicitud === null) {
            return null;
        }

        if ($this->pedidosucursal_fechasolicitud === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->pedidosucursal_fechasolicitud);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->pedidosucursal_fechasolicitud, true), $x);
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
     * Get the [optionally formatted] temporal [pedidosucursal_fechaentrega] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPedidosucursalFechaentrega($format = '%x')
    {
        if ($this->pedidosucursal_fechaentrega === null) {
            return null;
        }

        if ($this->pedidosucursal_fechaentrega === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->pedidosucursal_fechaentrega);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->pedidosucursal_fechaentrega, true), $x);
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
     * Get the [pedidosucursal_estatus] column value.
     *
     * @return string
     */
    public function getPedidosucursalEstatus()
    {

        return $this->pedidosucursal_estatus;
    }

    /**
     * Get the [pedidosucursal_nota] column value.
     *
     * @return string
     */
    public function getPedidosucursalNota()
    {

        return $this->pedidosucursal_nota;
    }

    /**
     * Set the value of [idpedidosucursal] column.
     *
     * @param  int $v new value
     * @return Pedidosucursal The current object (for fluent API support)
     */
    public function setIdpedidosucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpedidosucursal !== $v) {
            $this->idpedidosucursal = $v;
            $this->modifiedColumns[] = PedidosucursalPeer::IDPEDIDOSUCURSAL;
        }


        return $this;
    } // setIdpedidosucursal()

    /**
     * Set the value of [idsucursal] column.
     *
     * @param  int $v new value
     * @return Pedidosucursal The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = PedidosucursalPeer::IDSUCURSAL;
        }

        if ($this->aSucursal !== null && $this->aSucursal->getIdsucursal() !== $v) {
            $this->aSucursal = null;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Set the value of [idempleado] column.
     *
     * @param  int $v new value
     * @return Pedidosucursal The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = PedidosucursalPeer::IDEMPLEADO;
        }

        if ($this->aEmpleado !== null && $this->aEmpleado->getIdempleado() !== $v) {
            $this->aEmpleado = null;
        }


        return $this;
    } // setIdempleado()

    /**
     * Sets the value of [pedidosucursal_fechasolicitud] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Pedidosucursal The current object (for fluent API support)
     */
    public function setPedidosucursalFechasolicitud($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->pedidosucursal_fechasolicitud !== null || $dt !== null) {
            $currentDateAsString = ($this->pedidosucursal_fechasolicitud !== null && $tmpDt = new DateTime($this->pedidosucursal_fechasolicitud)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->pedidosucursal_fechasolicitud = $newDateAsString;
                $this->modifiedColumns[] = PedidosucursalPeer::PEDIDOSUCURSAL_FECHASOLICITUD;
            }
        } // if either are not null


        return $this;
    } // setPedidosucursalFechasolicitud()

    /**
     * Sets the value of [pedidosucursal_fechaentrega] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Pedidosucursal The current object (for fluent API support)
     */
    public function setPedidosucursalFechaentrega($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->pedidosucursal_fechaentrega !== null || $dt !== null) {
            $currentDateAsString = ($this->pedidosucursal_fechaentrega !== null && $tmpDt = new DateTime($this->pedidosucursal_fechaentrega)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->pedidosucursal_fechaentrega = $newDateAsString;
                $this->modifiedColumns[] = PedidosucursalPeer::PEDIDOSUCURSAL_FECHAENTREGA;
            }
        } // if either are not null


        return $this;
    } // setPedidosucursalFechaentrega()

    /**
     * Set the value of [pedidosucursal_estatus] column.
     *
     * @param  string $v new value
     * @return Pedidosucursal The current object (for fluent API support)
     */
    public function setPedidosucursalEstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pedidosucursal_estatus !== $v) {
            $this->pedidosucursal_estatus = $v;
            $this->modifiedColumns[] = PedidosucursalPeer::PEDIDOSUCURSAL_ESTATUS;
        }


        return $this;
    } // setPedidosucursalEstatus()

    /**
     * Set the value of [pedidosucursal_nota] column.
     *
     * @param  string $v new value
     * @return Pedidosucursal The current object (for fluent API support)
     */
    public function setPedidosucursalNota($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pedidosucursal_nota !== $v) {
            $this->pedidosucursal_nota = $v;
            $this->modifiedColumns[] = PedidosucursalPeer::PEDIDOSUCURSAL_NOTA;
        }


        return $this;
    } // setPedidosucursalNota()

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

            $this->idpedidosucursal = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idsucursal = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idempleado = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->pedidosucursal_fechasolicitud = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->pedidosucursal_fechaentrega = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->pedidosucursal_estatus = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->pedidosucursal_nota = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = PedidosucursalPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Pedidosucursal object", $e);
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

        if ($this->aSucursal !== null && $this->idsucursal !== $this->aSucursal->getIdsucursal()) {
            $this->aSucursal = null;
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
            $con = Propel::getConnection(PedidosucursalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PedidosucursalPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpleado = null;
            $this->aSucursal = null;
            $this->collPedidosucursaldetalles = null;

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
            $con = Propel::getConnection(PedidosucursalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PedidosucursalQuery::create()
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
            $con = Propel::getConnection(PedidosucursalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PedidosucursalPeer::addInstanceToPool($this);
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

            if ($this->aEmpleado !== null) {
                if ($this->aEmpleado->isModified() || $this->aEmpleado->isNew()) {
                    $affectedRows += $this->aEmpleado->save($con);
                }
                $this->setEmpleado($this->aEmpleado);
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

        $this->modifiedColumns[] = PedidosucursalPeer::IDPEDIDOSUCURSAL;
        if (null !== $this->idpedidosucursal) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PedidosucursalPeer::IDPEDIDOSUCURSAL . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PedidosucursalPeer::IDPEDIDOSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idpedidosucursal`';
        }
        if ($this->isColumnModified(PedidosucursalPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(PedidosucursalPeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }
        if ($this->isColumnModified(PedidosucursalPeer::PEDIDOSUCURSAL_FECHASOLICITUD)) {
            $modifiedColumns[':p' . $index++]  = '`pedidosucursal_fechasolicitud`';
        }
        if ($this->isColumnModified(PedidosucursalPeer::PEDIDOSUCURSAL_FECHAENTREGA)) {
            $modifiedColumns[':p' . $index++]  = '`pedidosucursal_fechaentrega`';
        }
        if ($this->isColumnModified(PedidosucursalPeer::PEDIDOSUCURSAL_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`pedidosucursal_estatus`';
        }
        if ($this->isColumnModified(PedidosucursalPeer::PEDIDOSUCURSAL_NOTA)) {
            $modifiedColumns[':p' . $index++]  = '`pedidosucursal_nota`';
        }

        $sql = sprintf(
            'INSERT INTO `pedidosucursal` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idpedidosucursal`':
                        $stmt->bindValue($identifier, $this->idpedidosucursal, PDO::PARAM_INT);
                        break;
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
                        break;
                    case '`pedidosucursal_fechasolicitud`':
                        $stmt->bindValue($identifier, $this->pedidosucursal_fechasolicitud, PDO::PARAM_STR);
                        break;
                    case '`pedidosucursal_fechaentrega`':
                        $stmt->bindValue($identifier, $this->pedidosucursal_fechaentrega, PDO::PARAM_STR);
                        break;
                    case '`pedidosucursal_estatus`':
                        $stmt->bindValue($identifier, $this->pedidosucursal_estatus, PDO::PARAM_STR);
                        break;
                    case '`pedidosucursal_nota`':
                        $stmt->bindValue($identifier, $this->pedidosucursal_nota, PDO::PARAM_STR);
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
        $this->setIdpedidosucursal($pk);

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

            if ($this->aEmpleado !== null) {
                if (!$this->aEmpleado->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleado->getValidationFailures());
                }
            }

            if ($this->aSucursal !== null) {
                if (!$this->aSucursal->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSucursal->getValidationFailures());
                }
            }


            if (($retval = PedidosucursalPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collPedidosucursaldetalles !== null) {
                    foreach ($this->collPedidosucursaldetalles as $referrerFK) {
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
        $pos = PedidosucursalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdpedidosucursal();
                break;
            case 1:
                return $this->getIdsucursal();
                break;
            case 2:
                return $this->getIdempleado();
                break;
            case 3:
                return $this->getPedidosucursalFechasolicitud();
                break;
            case 4:
                return $this->getPedidosucursalFechaentrega();
                break;
            case 5:
                return $this->getPedidosucursalEstatus();
                break;
            case 6:
                return $this->getPedidosucursalNota();
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
        if (isset($alreadyDumpedObjects['Pedidosucursal'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Pedidosucursal'][$this->getPrimaryKey()] = true;
        $keys = PedidosucursalPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdpedidosucursal(),
            $keys[1] => $this->getIdsucursal(),
            $keys[2] => $this->getIdempleado(),
            $keys[3] => $this->getPedidosucursalFechasolicitud(),
            $keys[4] => $this->getPedidosucursalFechaentrega(),
            $keys[5] => $this->getPedidosucursalEstatus(),
            $keys[6] => $this->getPedidosucursalNota(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpleado) {
                $result['Empleado'] = $this->aEmpleado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSucursal) {
                $result['Sucursal'] = $this->aSucursal->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collPedidosucursaldetalles) {
                $result['Pedidosucursaldetalles'] = $this->collPedidosucursaldetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = PedidosucursalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdpedidosucursal($value);
                break;
            case 1:
                $this->setIdsucursal($value);
                break;
            case 2:
                $this->setIdempleado($value);
                break;
            case 3:
                $this->setPedidosucursalFechasolicitud($value);
                break;
            case 4:
                $this->setPedidosucursalFechaentrega($value);
                break;
            case 5:
                $this->setPedidosucursalEstatus($value);
                break;
            case 6:
                $this->setPedidosucursalNota($value);
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
        $keys = PedidosucursalPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdpedidosucursal($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdsucursal($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdempleado($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPedidosucursalFechasolicitud($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPedidosucursalFechaentrega($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPedidosucursalEstatus($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPedidosucursalNota($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PedidosucursalPeer::DATABASE_NAME);

        if ($this->isColumnModified(PedidosucursalPeer::IDPEDIDOSUCURSAL)) $criteria->add(PedidosucursalPeer::IDPEDIDOSUCURSAL, $this->idpedidosucursal);
        if ($this->isColumnModified(PedidosucursalPeer::IDSUCURSAL)) $criteria->add(PedidosucursalPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(PedidosucursalPeer::IDEMPLEADO)) $criteria->add(PedidosucursalPeer::IDEMPLEADO, $this->idempleado);
        if ($this->isColumnModified(PedidosucursalPeer::PEDIDOSUCURSAL_FECHASOLICITUD)) $criteria->add(PedidosucursalPeer::PEDIDOSUCURSAL_FECHASOLICITUD, $this->pedidosucursal_fechasolicitud);
        if ($this->isColumnModified(PedidosucursalPeer::PEDIDOSUCURSAL_FECHAENTREGA)) $criteria->add(PedidosucursalPeer::PEDIDOSUCURSAL_FECHAENTREGA, $this->pedidosucursal_fechaentrega);
        if ($this->isColumnModified(PedidosucursalPeer::PEDIDOSUCURSAL_ESTATUS)) $criteria->add(PedidosucursalPeer::PEDIDOSUCURSAL_ESTATUS, $this->pedidosucursal_estatus);
        if ($this->isColumnModified(PedidosucursalPeer::PEDIDOSUCURSAL_NOTA)) $criteria->add(PedidosucursalPeer::PEDIDOSUCURSAL_NOTA, $this->pedidosucursal_nota);

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
        $criteria = new Criteria(PedidosucursalPeer::DATABASE_NAME);
        $criteria->add(PedidosucursalPeer::IDPEDIDOSUCURSAL, $this->idpedidosucursal);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdpedidosucursal();
    }

    /**
     * Generic method to set the primary key (idpedidosucursal column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdpedidosucursal($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdpedidosucursal();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Pedidosucursal (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdsucursal($this->getIdsucursal());
        $copyObj->setIdempleado($this->getIdempleado());
        $copyObj->setPedidosucursalFechasolicitud($this->getPedidosucursalFechasolicitud());
        $copyObj->setPedidosucursalFechaentrega($this->getPedidosucursalFechaentrega());
        $copyObj->setPedidosucursalEstatus($this->getPedidosucursalEstatus());
        $copyObj->setPedidosucursalNota($this->getPedidosucursalNota());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getPedidosucursaldetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPedidosucursaldetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdpedidosucursal(NULL); // this is a auto-increment column, so set to default value
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
     * @return Pedidosucursal Clone of current object.
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
     * @return PedidosucursalPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PedidosucursalPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Pedidosucursal The current object (for fluent API support)
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
            $v->addPedidosucursal($this);
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
                $this->aEmpleado->addPedidosucursals($this);
             */
        }

        return $this->aEmpleado;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Pedidosucursal The current object (for fluent API support)
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
            $v->addPedidosucursal($this);
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
                $this->aSucursal->addPedidosucursals($this);
             */
        }

        return $this->aSucursal;
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
        if ('Pedidosucursaldetalle' == $relationName) {
            $this->initPedidosucursaldetalles();
        }
    }

    /**
     * Clears out the collPedidosucursaldetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Pedidosucursal The current object (for fluent API support)
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
     * If this Pedidosucursal is new, it will return
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
                    ->filterByPedidosucursal($this)
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
     * @return Pedidosucursal The current object (for fluent API support)
     */
    public function setPedidosucursaldetalles(PropelCollection $pedidosucursaldetalles, PropelPDO $con = null)
    {
        $pedidosucursaldetallesToDelete = $this->getPedidosucursaldetalles(new Criteria(), $con)->diff($pedidosucursaldetalles);


        $this->pedidosucursaldetallesScheduledForDeletion = $pedidosucursaldetallesToDelete;

        foreach ($pedidosucursaldetallesToDelete as $pedidosucursaldetalleRemoved) {
            $pedidosucursaldetalleRemoved->setPedidosucursal(null);
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
                ->filterByPedidosucursal($this)
                ->count($con);
        }

        return count($this->collPedidosucursaldetalles);
    }

    /**
     * Method called to associate a Pedidosucursaldetalle object to this object
     * through the Pedidosucursaldetalle foreign key attribute.
     *
     * @param    Pedidosucursaldetalle $l Pedidosucursaldetalle
     * @return Pedidosucursal The current object (for fluent API support)
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
        $pedidosucursaldetalle->setPedidosucursal($this);
    }

    /**
     * @param	Pedidosucursaldetalle $pedidosucursaldetalle The pedidosucursaldetalle object to remove.
     * @return Pedidosucursal The current object (for fluent API support)
     */
    public function removePedidosucursaldetalle($pedidosucursaldetalle)
    {
        if ($this->getPedidosucursaldetalles()->contains($pedidosucursaldetalle)) {
            $this->collPedidosucursaldetalles->remove($this->collPedidosucursaldetalles->search($pedidosucursaldetalle));
            if (null === $this->pedidosucursaldetallesScheduledForDeletion) {
                $this->pedidosucursaldetallesScheduledForDeletion = clone $this->collPedidosucursaldetalles;
                $this->pedidosucursaldetallesScheduledForDeletion->clear();
            }
            $this->pedidosucursaldetallesScheduledForDeletion[]= clone $pedidosucursaldetalle;
            $pedidosucursaldetalle->setPedidosucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Pedidosucursal is new, it will return
     * an empty collection; or if this Pedidosucursal has previously
     * been saved, it will retrieve related Pedidosucursaldetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Pedidosucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pedidosucursaldetalle[] List of Pedidosucursaldetalle objects
     */
    public function getPedidosucursaldetallesJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PedidosucursaldetalleQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getPedidosucursaldetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Pedidosucursal is new, it will return
     * an empty collection; or if this Pedidosucursal has previously
     * been saved, it will retrieve related Pedidosucursaldetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Pedidosucursal.
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idpedidosucursal = null;
        $this->idsucursal = null;
        $this->idempleado = null;
        $this->pedidosucursal_fechasolicitud = null;
        $this->pedidosucursal_fechaentrega = null;
        $this->pedidosucursal_estatus = null;
        $this->pedidosucursal_nota = null;
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
            if ($this->collPedidosucursaldetalles) {
                foreach ($this->collPedidosucursaldetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aEmpleado instanceof Persistent) {
              $this->aEmpleado->clearAllReferences($deep);
            }
            if ($this->aSucursal instanceof Persistent) {
              $this->aSucursal->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collPedidosucursaldetalles instanceof PropelCollection) {
            $this->collPedidosucursaldetalles->clearIterator();
        }
        $this->collPedidosucursaldetalles = null;
        $this->aEmpleado = null;
        $this->aSucursal = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PedidosucursalPeer::DEFAULT_STRING_FORMAT);
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
