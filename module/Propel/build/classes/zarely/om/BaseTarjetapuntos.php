<?php


/**
 * Base class that represents a row from the 'tarjetapuntos' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseTarjetapuntos extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TarjetapuntosPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TarjetapuntosPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idtarjetapuntos field.
     * @var        int
     */
    protected $idtarjetapuntos;

    /**
     * The value for the tarjetapuntos_fechaactivacion field.
     * @var        string
     */
    protected $tarjetapuntos_fechaactivacion;

    /**
     * The value for the tarjetapuntos_estatus field.
     * @var        boolean
     */
    protected $tarjetapuntos_estatus;

    /**
     * The value for the tarjetapuntos_puntos field.
     * @var        int
     */
    protected $tarjetapuntos_puntos;

    /**
     * The value for the idempleadoactivador field.
     * @var        int
     */
    protected $idempleadoactivador;

    /**
     * @var        Empleado
     */
    protected $aEmpleado;

    /**
     * @var        PropelObjectCollection|Tarjetapuntosdetalle[] Collection to store aggregation of Tarjetapuntosdetalle objects.
     */
    protected $collTarjetapuntosdetalles;
    protected $collTarjetapuntosdetallesPartial;

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
    protected $tarjetapuntosdetallesScheduledForDeletion = null;

    /**
     * Get the [idtarjetapuntos] column value.
     *
     * @return int
     */
    public function getIdtarjetapuntos()
    {

        return $this->idtarjetapuntos;
    }

    /**
     * Get the [optionally formatted] temporal [tarjetapuntos_fechaactivacion] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getTarjetapuntosFechaactivacion($format = 'Y-m-d H:i:s')
    {
        if ($this->tarjetapuntos_fechaactivacion === null) {
            return null;
        }

        if ($this->tarjetapuntos_fechaactivacion === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->tarjetapuntos_fechaactivacion);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->tarjetapuntos_fechaactivacion, true), $x);
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
     * Get the [tarjetapuntos_estatus] column value.
     *
     * @return boolean
     */
    public function getTarjetapuntosEstatus()
    {

        return $this->tarjetapuntos_estatus;
    }

    /**
     * Get the [tarjetapuntos_puntos] column value.
     *
     * @return int
     */
    public function getTarjetapuntosPuntos()
    {

        return $this->tarjetapuntos_puntos;
    }

    /**
     * Get the [idempleadoactivador] column value.
     *
     * @return int
     */
    public function getIdempleadoactivador()
    {

        return $this->idempleadoactivador;
    }

    /**
     * Set the value of [idtarjetapuntos] column.
     *
     * @param  int $v new value
     * @return Tarjetapuntos The current object (for fluent API support)
     */
    public function setIdtarjetapuntos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtarjetapuntos !== $v) {
            $this->idtarjetapuntos = $v;
            $this->modifiedColumns[] = TarjetapuntosPeer::IDTARJETAPUNTOS;
        }


        return $this;
    } // setIdtarjetapuntos()

    /**
     * Sets the value of [tarjetapuntos_fechaactivacion] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Tarjetapuntos The current object (for fluent API support)
     */
    public function setTarjetapuntosFechaactivacion($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->tarjetapuntos_fechaactivacion !== null || $dt !== null) {
            $currentDateAsString = ($this->tarjetapuntos_fechaactivacion !== null && $tmpDt = new DateTime($this->tarjetapuntos_fechaactivacion)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->tarjetapuntos_fechaactivacion = $newDateAsString;
                $this->modifiedColumns[] = TarjetapuntosPeer::TARJETAPUNTOS_FECHAACTIVACION;
            }
        } // if either are not null


        return $this;
    } // setTarjetapuntosFechaactivacion()

    /**
     * Sets the value of the [tarjetapuntos_estatus] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tarjetapuntos The current object (for fluent API support)
     */
    public function setTarjetapuntosEstatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->tarjetapuntos_estatus !== $v) {
            $this->tarjetapuntos_estatus = $v;
            $this->modifiedColumns[] = TarjetapuntosPeer::TARJETAPUNTOS_ESTATUS;
        }


        return $this;
    } // setTarjetapuntosEstatus()

    /**
     * Set the value of [tarjetapuntos_puntos] column.
     *
     * @param  int $v new value
     * @return Tarjetapuntos The current object (for fluent API support)
     */
    public function setTarjetapuntosPuntos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tarjetapuntos_puntos !== $v) {
            $this->tarjetapuntos_puntos = $v;
            $this->modifiedColumns[] = TarjetapuntosPeer::TARJETAPUNTOS_PUNTOS;
        }


        return $this;
    } // setTarjetapuntosPuntos()

    /**
     * Set the value of [idempleadoactivador] column.
     *
     * @param  int $v new value
     * @return Tarjetapuntos The current object (for fluent API support)
     */
    public function setIdempleadoactivador($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleadoactivador !== $v) {
            $this->idempleadoactivador = $v;
            $this->modifiedColumns[] = TarjetapuntosPeer::IDEMPLEADOACTIVADOR;
        }

        if ($this->aEmpleado !== null && $this->aEmpleado->getIdempleado() !== $v) {
            $this->aEmpleado = null;
        }


        return $this;
    } // setIdempleadoactivador()

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

            $this->idtarjetapuntos = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->tarjetapuntos_fechaactivacion = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->tarjetapuntos_estatus = ($row[$startcol + 2] !== null) ? (boolean) $row[$startcol + 2] : null;
            $this->tarjetapuntos_puntos = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idempleadoactivador = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = TarjetapuntosPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Tarjetapuntos object", $e);
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

        if ($this->aEmpleado !== null && $this->idempleadoactivador !== $this->aEmpleado->getIdempleado()) {
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
            $con = Propel::getConnection(TarjetapuntosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TarjetapuntosPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpleado = null;
            $this->collTarjetapuntosdetalles = null;

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
            $con = Propel::getConnection(TarjetapuntosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TarjetapuntosQuery::create()
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
            $con = Propel::getConnection(TarjetapuntosPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TarjetapuntosPeer::addInstanceToPool($this);
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

            if ($this->tarjetapuntosdetallesScheduledForDeletion !== null) {
                if (!$this->tarjetapuntosdetallesScheduledForDeletion->isEmpty()) {
                    TarjetapuntosdetalleQuery::create()
                        ->filterByPrimaryKeys($this->tarjetapuntosdetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->tarjetapuntosdetallesScheduledForDeletion = null;
                }
            }

            if ($this->collTarjetapuntosdetalles !== null) {
                foreach ($this->collTarjetapuntosdetalles as $referrerFK) {
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

        $this->modifiedColumns[] = TarjetapuntosPeer::IDTARJETAPUNTOS;
        if (null !== $this->idtarjetapuntos) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TarjetapuntosPeer::IDTARJETAPUNTOS . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TarjetapuntosPeer::IDTARJETAPUNTOS)) {
            $modifiedColumns[':p' . $index++]  = '`idtarjetapuntos`';
        }
        if ($this->isColumnModified(TarjetapuntosPeer::TARJETAPUNTOS_FECHAACTIVACION)) {
            $modifiedColumns[':p' . $index++]  = '`tarjetapuntos_fechaactivacion`';
        }
        if ($this->isColumnModified(TarjetapuntosPeer::TARJETAPUNTOS_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`tarjetapuntos_estatus`';
        }
        if ($this->isColumnModified(TarjetapuntosPeer::TARJETAPUNTOS_PUNTOS)) {
            $modifiedColumns[':p' . $index++]  = '`tarjetapuntos_puntos`';
        }
        if ($this->isColumnModified(TarjetapuntosPeer::IDEMPLEADOACTIVADOR)) {
            $modifiedColumns[':p' . $index++]  = '`idempleadoactivador`';
        }

        $sql = sprintf(
            'INSERT INTO `tarjetapuntos` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idtarjetapuntos`':
                        $stmt->bindValue($identifier, $this->idtarjetapuntos, PDO::PARAM_INT);
                        break;
                    case '`tarjetapuntos_fechaactivacion`':
                        $stmt->bindValue($identifier, $this->tarjetapuntos_fechaactivacion, PDO::PARAM_STR);
                        break;
                    case '`tarjetapuntos_estatus`':
                        $stmt->bindValue($identifier, (int) $this->tarjetapuntos_estatus, PDO::PARAM_INT);
                        break;
                    case '`tarjetapuntos_puntos`':
                        $stmt->bindValue($identifier, $this->tarjetapuntos_puntos, PDO::PARAM_INT);
                        break;
                    case '`idempleadoactivador`':
                        $stmt->bindValue($identifier, $this->idempleadoactivador, PDO::PARAM_INT);
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
        $this->setIdtarjetapuntos($pk);

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


            if (($retval = TarjetapuntosPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collTarjetapuntosdetalles !== null) {
                    foreach ($this->collTarjetapuntosdetalles as $referrerFK) {
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
        $pos = TarjetapuntosPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdtarjetapuntos();
                break;
            case 1:
                return $this->getTarjetapuntosFechaactivacion();
                break;
            case 2:
                return $this->getTarjetapuntosEstatus();
                break;
            case 3:
                return $this->getTarjetapuntosPuntos();
                break;
            case 4:
                return $this->getIdempleadoactivador();
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
        if (isset($alreadyDumpedObjects['Tarjetapuntos'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Tarjetapuntos'][$this->getPrimaryKey()] = true;
        $keys = TarjetapuntosPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdtarjetapuntos(),
            $keys[1] => $this->getTarjetapuntosFechaactivacion(),
            $keys[2] => $this->getTarjetapuntosEstatus(),
            $keys[3] => $this->getTarjetapuntosPuntos(),
            $keys[4] => $this->getIdempleadoactivador(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpleado) {
                $result['Empleado'] = $this->aEmpleado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collTarjetapuntosdetalles) {
                $result['Tarjetapuntosdetalles'] = $this->collTarjetapuntosdetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = TarjetapuntosPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdtarjetapuntos($value);
                break;
            case 1:
                $this->setTarjetapuntosFechaactivacion($value);
                break;
            case 2:
                $this->setTarjetapuntosEstatus($value);
                break;
            case 3:
                $this->setTarjetapuntosPuntos($value);
                break;
            case 4:
                $this->setIdempleadoactivador($value);
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
        $keys = TarjetapuntosPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdtarjetapuntos($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTarjetapuntosFechaactivacion($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTarjetapuntosEstatus($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTarjetapuntosPuntos($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdempleadoactivador($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TarjetapuntosPeer::DATABASE_NAME);

        if ($this->isColumnModified(TarjetapuntosPeer::IDTARJETAPUNTOS)) $criteria->add(TarjetapuntosPeer::IDTARJETAPUNTOS, $this->idtarjetapuntos);
        if ($this->isColumnModified(TarjetapuntosPeer::TARJETAPUNTOS_FECHAACTIVACION)) $criteria->add(TarjetapuntosPeer::TARJETAPUNTOS_FECHAACTIVACION, $this->tarjetapuntos_fechaactivacion);
        if ($this->isColumnModified(TarjetapuntosPeer::TARJETAPUNTOS_ESTATUS)) $criteria->add(TarjetapuntosPeer::TARJETAPUNTOS_ESTATUS, $this->tarjetapuntos_estatus);
        if ($this->isColumnModified(TarjetapuntosPeer::TARJETAPUNTOS_PUNTOS)) $criteria->add(TarjetapuntosPeer::TARJETAPUNTOS_PUNTOS, $this->tarjetapuntos_puntos);
        if ($this->isColumnModified(TarjetapuntosPeer::IDEMPLEADOACTIVADOR)) $criteria->add(TarjetapuntosPeer::IDEMPLEADOACTIVADOR, $this->idempleadoactivador);

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
        $criteria = new Criteria(TarjetapuntosPeer::DATABASE_NAME);
        $criteria->add(TarjetapuntosPeer::IDTARJETAPUNTOS, $this->idtarjetapuntos);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdtarjetapuntos();
    }

    /**
     * Generic method to set the primary key (idtarjetapuntos column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdtarjetapuntos($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdtarjetapuntos();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Tarjetapuntos (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTarjetapuntosFechaactivacion($this->getTarjetapuntosFechaactivacion());
        $copyObj->setTarjetapuntosEstatus($this->getTarjetapuntosEstatus());
        $copyObj->setTarjetapuntosPuntos($this->getTarjetapuntosPuntos());
        $copyObj->setIdempleadoactivador($this->getIdempleadoactivador());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getTarjetapuntosdetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTarjetapuntosdetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdtarjetapuntos(NULL); // this is a auto-increment column, so set to default value
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
     * @return Tarjetapuntos Clone of current object.
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
     * @return TarjetapuntosPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TarjetapuntosPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Tarjetapuntos The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleado(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleadoactivador(NULL);
        } else {
            $this->setIdempleadoactivador($v->getIdempleado());
        }

        $this->aEmpleado = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addTarjetapuntos($this);
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
        if ($this->aEmpleado === null && ($this->idempleadoactivador !== null) && $doQuery) {
            $this->aEmpleado = EmpleadoQuery::create()->findPk($this->idempleadoactivador, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleado->addTarjetapuntoss($this);
             */
        }

        return $this->aEmpleado;
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
        if ('Tarjetapuntosdetalle' == $relationName) {
            $this->initTarjetapuntosdetalles();
        }
    }

    /**
     * Clears out the collTarjetapuntosdetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Tarjetapuntos The current object (for fluent API support)
     * @see        addTarjetapuntosdetalles()
     */
    public function clearTarjetapuntosdetalles()
    {
        $this->collTarjetapuntosdetalles = null; // important to set this to null since that means it is uninitialized
        $this->collTarjetapuntosdetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collTarjetapuntosdetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialTarjetapuntosdetalles($v = true)
    {
        $this->collTarjetapuntosdetallesPartial = $v;
    }

    /**
     * Initializes the collTarjetapuntosdetalles collection.
     *
     * By default this just sets the collTarjetapuntosdetalles collection to an empty array (like clearcollTarjetapuntosdetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTarjetapuntosdetalles($overrideExisting = true)
    {
        if (null !== $this->collTarjetapuntosdetalles && !$overrideExisting) {
            return;
        }
        $this->collTarjetapuntosdetalles = new PropelObjectCollection();
        $this->collTarjetapuntosdetalles->setModel('Tarjetapuntosdetalle');
    }

    /**
     * Gets an array of Tarjetapuntosdetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Tarjetapuntos is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Tarjetapuntosdetalle[] List of Tarjetapuntosdetalle objects
     * @throws PropelException
     */
    public function getTarjetapuntosdetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTarjetapuntosdetallesPartial && !$this->isNew();
        if (null === $this->collTarjetapuntosdetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTarjetapuntosdetalles) {
                // return empty collection
                $this->initTarjetapuntosdetalles();
            } else {
                $collTarjetapuntosdetalles = TarjetapuntosdetalleQuery::create(null, $criteria)
                    ->filterByTarjetapuntos($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTarjetapuntosdetallesPartial && count($collTarjetapuntosdetalles)) {
                      $this->initTarjetapuntosdetalles(false);

                      foreach ($collTarjetapuntosdetalles as $obj) {
                        if (false == $this->collTarjetapuntosdetalles->contains($obj)) {
                          $this->collTarjetapuntosdetalles->append($obj);
                        }
                      }

                      $this->collTarjetapuntosdetallesPartial = true;
                    }

                    $collTarjetapuntosdetalles->getInternalIterator()->rewind();

                    return $collTarjetapuntosdetalles;
                }

                if ($partial && $this->collTarjetapuntosdetalles) {
                    foreach ($this->collTarjetapuntosdetalles as $obj) {
                        if ($obj->isNew()) {
                            $collTarjetapuntosdetalles[] = $obj;
                        }
                    }
                }

                $this->collTarjetapuntosdetalles = $collTarjetapuntosdetalles;
                $this->collTarjetapuntosdetallesPartial = false;
            }
        }

        return $this->collTarjetapuntosdetalles;
    }

    /**
     * Sets a collection of Tarjetapuntosdetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $tarjetapuntosdetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Tarjetapuntos The current object (for fluent API support)
     */
    public function setTarjetapuntosdetalles(PropelCollection $tarjetapuntosdetalles, PropelPDO $con = null)
    {
        $tarjetapuntosdetallesToDelete = $this->getTarjetapuntosdetalles(new Criteria(), $con)->diff($tarjetapuntosdetalles);


        $this->tarjetapuntosdetallesScheduledForDeletion = $tarjetapuntosdetallesToDelete;

        foreach ($tarjetapuntosdetallesToDelete as $tarjetapuntosdetalleRemoved) {
            $tarjetapuntosdetalleRemoved->setTarjetapuntos(null);
        }

        $this->collTarjetapuntosdetalles = null;
        foreach ($tarjetapuntosdetalles as $tarjetapuntosdetalle) {
            $this->addTarjetapuntosdetalle($tarjetapuntosdetalle);
        }

        $this->collTarjetapuntosdetalles = $tarjetapuntosdetalles;
        $this->collTarjetapuntosdetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Tarjetapuntosdetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Tarjetapuntosdetalle objects.
     * @throws PropelException
     */
    public function countTarjetapuntosdetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTarjetapuntosdetallesPartial && !$this->isNew();
        if (null === $this->collTarjetapuntosdetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTarjetapuntosdetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTarjetapuntosdetalles());
            }
            $query = TarjetapuntosdetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByTarjetapuntos($this)
                ->count($con);
        }

        return count($this->collTarjetapuntosdetalles);
    }

    /**
     * Method called to associate a Tarjetapuntosdetalle object to this object
     * through the Tarjetapuntosdetalle foreign key attribute.
     *
     * @param    Tarjetapuntosdetalle $l Tarjetapuntosdetalle
     * @return Tarjetapuntos The current object (for fluent API support)
     */
    public function addTarjetapuntosdetalle(Tarjetapuntosdetalle $l)
    {
        if ($this->collTarjetapuntosdetalles === null) {
            $this->initTarjetapuntosdetalles();
            $this->collTarjetapuntosdetallesPartial = true;
        }

        if (!in_array($l, $this->collTarjetapuntosdetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTarjetapuntosdetalle($l);

            if ($this->tarjetapuntosdetallesScheduledForDeletion and $this->tarjetapuntosdetallesScheduledForDeletion->contains($l)) {
                $this->tarjetapuntosdetallesScheduledForDeletion->remove($this->tarjetapuntosdetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Tarjetapuntosdetalle $tarjetapuntosdetalle The tarjetapuntosdetalle object to add.
     */
    protected function doAddTarjetapuntosdetalle($tarjetapuntosdetalle)
    {
        $this->collTarjetapuntosdetalles[]= $tarjetapuntosdetalle;
        $tarjetapuntosdetalle->setTarjetapuntos($this);
    }

    /**
     * @param	Tarjetapuntosdetalle $tarjetapuntosdetalle The tarjetapuntosdetalle object to remove.
     * @return Tarjetapuntos The current object (for fluent API support)
     */
    public function removeTarjetapuntosdetalle($tarjetapuntosdetalle)
    {
        if ($this->getTarjetapuntosdetalles()->contains($tarjetapuntosdetalle)) {
            $this->collTarjetapuntosdetalles->remove($this->collTarjetapuntosdetalles->search($tarjetapuntosdetalle));
            if (null === $this->tarjetapuntosdetallesScheduledForDeletion) {
                $this->tarjetapuntosdetallesScheduledForDeletion = clone $this->collTarjetapuntosdetalles;
                $this->tarjetapuntosdetallesScheduledForDeletion->clear();
            }
            $this->tarjetapuntosdetallesScheduledForDeletion[]= clone $tarjetapuntosdetalle;
            $tarjetapuntosdetalle->setTarjetapuntos(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Tarjetapuntos is new, it will return
     * an empty collection; or if this Tarjetapuntos has previously
     * been saved, it will retrieve related Tarjetapuntosdetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Tarjetapuntos.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Tarjetapuntosdetalle[] List of Tarjetapuntosdetalle objects
     */
    public function getTarjetapuntosdetallesJoinEmpleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TarjetapuntosdetalleQuery::create(null, $criteria);
        $query->joinWith('Empleado', $join_behavior);

        return $this->getTarjetapuntosdetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Tarjetapuntos is new, it will return
     * an empty collection; or if this Tarjetapuntos has previously
     * been saved, it will retrieve related Tarjetapuntosdetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Tarjetapuntos.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Tarjetapuntosdetalle[] List of Tarjetapuntosdetalle objects
     */
    public function getTarjetapuntosdetallesJoinVenta($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TarjetapuntosdetalleQuery::create(null, $criteria);
        $query->joinWith('Venta', $join_behavior);

        return $this->getTarjetapuntosdetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idtarjetapuntos = null;
        $this->tarjetapuntos_fechaactivacion = null;
        $this->tarjetapuntos_estatus = null;
        $this->tarjetapuntos_puntos = null;
        $this->idempleadoactivador = null;
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
            if ($this->collTarjetapuntosdetalles) {
                foreach ($this->collTarjetapuntosdetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aEmpleado instanceof Persistent) {
              $this->aEmpleado->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collTarjetapuntosdetalles instanceof PropelCollection) {
            $this->collTarjetapuntosdetalles->clearIterator();
        }
        $this->collTarjetapuntosdetalles = null;
        $this->aEmpleado = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TarjetapuntosPeer::DEFAULT_STRING_FORMAT);
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
