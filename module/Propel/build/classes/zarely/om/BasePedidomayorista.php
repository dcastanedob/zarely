<?php


/**
 * Base class that represents a row from the 'pedidomayorista' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BasePedidomayorista extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PedidomayoristaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PedidomayoristaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idpedidomayorista field.
     * @var        int
     */
    protected $idpedidomayorista;

    /**
     * The value for the idcliente field.
     * @var        int
     */
    protected $idcliente;

    /**
     * The value for the pedidomayorista_fechasolicitud field.
     * @var        string
     */
    protected $pedidomayorista_fechasolicitud;

    /**
     * The value for the pedidomayorista_estatus field.
     * @var        string
     */
    protected $pedidomayorista_estatus;

    /**
     * The value for the pedidomayorista_fechaentrega field.
     * @var        string
     */
    protected $pedidomayorista_fechaentrega;

    /**
     * The value for the pedidomayorista_nota field.
     * @var        string
     */
    protected $pedidomayorista_nota;

    /**
     * @var        Cliente
     */
    protected $aCliente;

    /**
     * @var        PropelObjectCollection|Pedidomayoristadetalle[] Collection to store aggregation of Pedidomayoristadetalle objects.
     */
    protected $collPedidomayoristadetalles;
    protected $collPedidomayoristadetallesPartial;

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
    protected $pedidomayoristadetallesScheduledForDeletion = null;

    /**
     * Get the [idpedidomayorista] column value.
     *
     * @return int
     */
    public function getIdpedidomayorista()
    {

        return $this->idpedidomayorista;
    }

    /**
     * Get the [idcliente] column value.
     *
     * @return int
     */
    public function getIdcliente()
    {

        return $this->idcliente;
    }

    /**
     * Get the [optionally formatted] temporal [pedidomayorista_fechasolicitud] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPedidomayoristaFechasolicitud($format = '%x')
    {
        if ($this->pedidomayorista_fechasolicitud === null) {
            return null;
        }

        if ($this->pedidomayorista_fechasolicitud === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->pedidomayorista_fechasolicitud);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->pedidomayorista_fechasolicitud, true), $x);
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
     * Get the [pedidomayorista_estatus] column value.
     *
     * @return string
     */
    public function getPedidomayoristaEstatus()
    {

        return $this->pedidomayorista_estatus;
    }

    /**
     * Get the [optionally formatted] temporal [pedidomayorista_fechaentrega] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPedidomayoristaFechaentrega($format = '%x')
    {
        if ($this->pedidomayorista_fechaentrega === null) {
            return null;
        }

        if ($this->pedidomayorista_fechaentrega === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->pedidomayorista_fechaentrega);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->pedidomayorista_fechaentrega, true), $x);
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
     * Get the [pedidomayorista_nota] column value.
     *
     * @return string
     */
    public function getPedidomayoristaNota()
    {

        return $this->pedidomayorista_nota;
    }

    /**
     * Set the value of [idpedidomayorista] column.
     *
     * @param  int $v new value
     * @return Pedidomayorista The current object (for fluent API support)
     */
    public function setIdpedidomayorista($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpedidomayorista !== $v) {
            $this->idpedidomayorista = $v;
            $this->modifiedColumns[] = PedidomayoristaPeer::IDPEDIDOMAYORISTA;
        }


        return $this;
    } // setIdpedidomayorista()

    /**
     * Set the value of [idcliente] column.
     *
     * @param  int $v new value
     * @return Pedidomayorista The current object (for fluent API support)
     */
    public function setIdcliente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcliente !== $v) {
            $this->idcliente = $v;
            $this->modifiedColumns[] = PedidomayoristaPeer::IDCLIENTE;
        }

        if ($this->aCliente !== null && $this->aCliente->getIdcliente() !== $v) {
            $this->aCliente = null;
        }


        return $this;
    } // setIdcliente()

    /**
     * Sets the value of [pedidomayorista_fechasolicitud] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Pedidomayorista The current object (for fluent API support)
     */
    public function setPedidomayoristaFechasolicitud($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->pedidomayorista_fechasolicitud !== null || $dt !== null) {
            $currentDateAsString = ($this->pedidomayorista_fechasolicitud !== null && $tmpDt = new DateTime($this->pedidomayorista_fechasolicitud)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->pedidomayorista_fechasolicitud = $newDateAsString;
                $this->modifiedColumns[] = PedidomayoristaPeer::PEDIDOMAYORISTA_FECHASOLICITUD;
            }
        } // if either are not null


        return $this;
    } // setPedidomayoristaFechasolicitud()

    /**
     * Set the value of [pedidomayorista_estatus] column.
     *
     * @param  string $v new value
     * @return Pedidomayorista The current object (for fluent API support)
     */
    public function setPedidomayoristaEstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pedidomayorista_estatus !== $v) {
            $this->pedidomayorista_estatus = $v;
            $this->modifiedColumns[] = PedidomayoristaPeer::PEDIDOMAYORISTA_ESTATUS;
        }


        return $this;
    } // setPedidomayoristaEstatus()

    /**
     * Sets the value of [pedidomayorista_fechaentrega] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Pedidomayorista The current object (for fluent API support)
     */
    public function setPedidomayoristaFechaentrega($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->pedidomayorista_fechaentrega !== null || $dt !== null) {
            $currentDateAsString = ($this->pedidomayorista_fechaentrega !== null && $tmpDt = new DateTime($this->pedidomayorista_fechaentrega)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->pedidomayorista_fechaentrega = $newDateAsString;
                $this->modifiedColumns[] = PedidomayoristaPeer::PEDIDOMAYORISTA_FECHAENTREGA;
            }
        } // if either are not null


        return $this;
    } // setPedidomayoristaFechaentrega()

    /**
     * Set the value of [pedidomayorista_nota] column.
     *
     * @param  string $v new value
     * @return Pedidomayorista The current object (for fluent API support)
     */
    public function setPedidomayoristaNota($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pedidomayorista_nota !== $v) {
            $this->pedidomayorista_nota = $v;
            $this->modifiedColumns[] = PedidomayoristaPeer::PEDIDOMAYORISTA_NOTA;
        }


        return $this;
    } // setPedidomayoristaNota()

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

            $this->idpedidomayorista = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idcliente = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->pedidomayorista_fechasolicitud = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->pedidomayorista_estatus = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->pedidomayorista_fechaentrega = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->pedidomayorista_nota = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = PedidomayoristaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Pedidomayorista object", $e);
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

        if ($this->aCliente !== null && $this->idcliente !== $this->aCliente->getIdcliente()) {
            $this->aCliente = null;
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
            $con = Propel::getConnection(PedidomayoristaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PedidomayoristaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCliente = null;
            $this->collPedidomayoristadetalles = null;

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
            $con = Propel::getConnection(PedidomayoristaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PedidomayoristaQuery::create()
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
            $con = Propel::getConnection(PedidomayoristaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PedidomayoristaPeer::addInstanceToPool($this);
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

            if ($this->aCliente !== null) {
                if ($this->aCliente->isModified() || $this->aCliente->isNew()) {
                    $affectedRows += $this->aCliente->save($con);
                }
                $this->setCliente($this->aCliente);
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

        $this->modifiedColumns[] = PedidomayoristaPeer::IDPEDIDOMAYORISTA;
        if (null !== $this->idpedidomayorista) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PedidomayoristaPeer::IDPEDIDOMAYORISTA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PedidomayoristaPeer::IDPEDIDOMAYORISTA)) {
            $modifiedColumns[':p' . $index++]  = '`idpedidomayorista`';
        }
        if ($this->isColumnModified(PedidomayoristaPeer::IDCLIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idcliente`';
        }
        if ($this->isColumnModified(PedidomayoristaPeer::PEDIDOMAYORISTA_FECHASOLICITUD)) {
            $modifiedColumns[':p' . $index++]  = '`pedidomayorista_fechasolicitud`';
        }
        if ($this->isColumnModified(PedidomayoristaPeer::PEDIDOMAYORISTA_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`pedidomayorista_estatus`';
        }
        if ($this->isColumnModified(PedidomayoristaPeer::PEDIDOMAYORISTA_FECHAENTREGA)) {
            $modifiedColumns[':p' . $index++]  = '`pedidomayorista_fechaentrega`';
        }
        if ($this->isColumnModified(PedidomayoristaPeer::PEDIDOMAYORISTA_NOTA)) {
            $modifiedColumns[':p' . $index++]  = '`pedidomayorista_nota`';
        }

        $sql = sprintf(
            'INSERT INTO `pedidomayorista` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idpedidomayorista`':
                        $stmt->bindValue($identifier, $this->idpedidomayorista, PDO::PARAM_INT);
                        break;
                    case '`idcliente`':
                        $stmt->bindValue($identifier, $this->idcliente, PDO::PARAM_INT);
                        break;
                    case '`pedidomayorista_fechasolicitud`':
                        $stmt->bindValue($identifier, $this->pedidomayorista_fechasolicitud, PDO::PARAM_STR);
                        break;
                    case '`pedidomayorista_estatus`':
                        $stmt->bindValue($identifier, $this->pedidomayorista_estatus, PDO::PARAM_STR);
                        break;
                    case '`pedidomayorista_fechaentrega`':
                        $stmt->bindValue($identifier, $this->pedidomayorista_fechaentrega, PDO::PARAM_STR);
                        break;
                    case '`pedidomayorista_nota`':
                        $stmt->bindValue($identifier, $this->pedidomayorista_nota, PDO::PARAM_STR);
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
        $this->setIdpedidomayorista($pk);

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

            if ($this->aCliente !== null) {
                if (!$this->aCliente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCliente->getValidationFailures());
                }
            }


            if (($retval = PedidomayoristaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collPedidomayoristadetalles !== null) {
                    foreach ($this->collPedidomayoristadetalles as $referrerFK) {
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
        $pos = PedidomayoristaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdpedidomayorista();
                break;
            case 1:
                return $this->getIdcliente();
                break;
            case 2:
                return $this->getPedidomayoristaFechasolicitud();
                break;
            case 3:
                return $this->getPedidomayoristaEstatus();
                break;
            case 4:
                return $this->getPedidomayoristaFechaentrega();
                break;
            case 5:
                return $this->getPedidomayoristaNota();
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
        if (isset($alreadyDumpedObjects['Pedidomayorista'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Pedidomayorista'][$this->getPrimaryKey()] = true;
        $keys = PedidomayoristaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdpedidomayorista(),
            $keys[1] => $this->getIdcliente(),
            $keys[2] => $this->getPedidomayoristaFechasolicitud(),
            $keys[3] => $this->getPedidomayoristaEstatus(),
            $keys[4] => $this->getPedidomayoristaFechaentrega(),
            $keys[5] => $this->getPedidomayoristaNota(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCliente) {
                $result['Cliente'] = $this->aCliente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collPedidomayoristadetalles) {
                $result['Pedidomayoristadetalles'] = $this->collPedidomayoristadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = PedidomayoristaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdpedidomayorista($value);
                break;
            case 1:
                $this->setIdcliente($value);
                break;
            case 2:
                $this->setPedidomayoristaFechasolicitud($value);
                break;
            case 3:
                $this->setPedidomayoristaEstatus($value);
                break;
            case 4:
                $this->setPedidomayoristaFechaentrega($value);
                break;
            case 5:
                $this->setPedidomayoristaNota($value);
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
        $keys = PedidomayoristaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdpedidomayorista($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdcliente($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPedidomayoristaFechasolicitud($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPedidomayoristaEstatus($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPedidomayoristaFechaentrega($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPedidomayoristaNota($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PedidomayoristaPeer::DATABASE_NAME);

        if ($this->isColumnModified(PedidomayoristaPeer::IDPEDIDOMAYORISTA)) $criteria->add(PedidomayoristaPeer::IDPEDIDOMAYORISTA, $this->idpedidomayorista);
        if ($this->isColumnModified(PedidomayoristaPeer::IDCLIENTE)) $criteria->add(PedidomayoristaPeer::IDCLIENTE, $this->idcliente);
        if ($this->isColumnModified(PedidomayoristaPeer::PEDIDOMAYORISTA_FECHASOLICITUD)) $criteria->add(PedidomayoristaPeer::PEDIDOMAYORISTA_FECHASOLICITUD, $this->pedidomayorista_fechasolicitud);
        if ($this->isColumnModified(PedidomayoristaPeer::PEDIDOMAYORISTA_ESTATUS)) $criteria->add(PedidomayoristaPeer::PEDIDOMAYORISTA_ESTATUS, $this->pedidomayorista_estatus);
        if ($this->isColumnModified(PedidomayoristaPeer::PEDIDOMAYORISTA_FECHAENTREGA)) $criteria->add(PedidomayoristaPeer::PEDIDOMAYORISTA_FECHAENTREGA, $this->pedidomayorista_fechaentrega);
        if ($this->isColumnModified(PedidomayoristaPeer::PEDIDOMAYORISTA_NOTA)) $criteria->add(PedidomayoristaPeer::PEDIDOMAYORISTA_NOTA, $this->pedidomayorista_nota);

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
        $criteria = new Criteria(PedidomayoristaPeer::DATABASE_NAME);
        $criteria->add(PedidomayoristaPeer::IDPEDIDOMAYORISTA, $this->idpedidomayorista);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdpedidomayorista();
    }

    /**
     * Generic method to set the primary key (idpedidomayorista column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdpedidomayorista($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdpedidomayorista();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Pedidomayorista (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdcliente($this->getIdcliente());
        $copyObj->setPedidomayoristaFechasolicitud($this->getPedidomayoristaFechasolicitud());
        $copyObj->setPedidomayoristaEstatus($this->getPedidomayoristaEstatus());
        $copyObj->setPedidomayoristaFechaentrega($this->getPedidomayoristaFechaentrega());
        $copyObj->setPedidomayoristaNota($this->getPedidomayoristaNota());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getPedidomayoristadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPedidomayoristadetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdpedidomayorista(NULL); // this is a auto-increment column, so set to default value
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
     * @return Pedidomayorista Clone of current object.
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
     * @return PedidomayoristaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PedidomayoristaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Cliente object.
     *
     * @param                  Cliente $v
     * @return Pedidomayorista The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCliente(Cliente $v = null)
    {
        if ($v === null) {
            $this->setIdcliente(NULL);
        } else {
            $this->setIdcliente($v->getIdcliente());
        }

        $this->aCliente = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Cliente object, it will not be re-added.
        if ($v !== null) {
            $v->addPedidomayorista($this);
        }


        return $this;
    }


    /**
     * Get the associated Cliente object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Cliente The associated Cliente object.
     * @throws PropelException
     */
    public function getCliente(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCliente === null && ($this->idcliente !== null) && $doQuery) {
            $this->aCliente = ClienteQuery::create()->findPk($this->idcliente, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCliente->addPedidomayoristas($this);
             */
        }

        return $this->aCliente;
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
        if ('Pedidomayoristadetalle' == $relationName) {
            $this->initPedidomayoristadetalles();
        }
    }

    /**
     * Clears out the collPedidomayoristadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Pedidomayorista The current object (for fluent API support)
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
     * If this Pedidomayorista is new, it will return
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
                    ->filterByPedidomayorista($this)
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
     * @return Pedidomayorista The current object (for fluent API support)
     */
    public function setPedidomayoristadetalles(PropelCollection $pedidomayoristadetalles, PropelPDO $con = null)
    {
        $pedidomayoristadetallesToDelete = $this->getPedidomayoristadetalles(new Criteria(), $con)->diff($pedidomayoristadetalles);


        $this->pedidomayoristadetallesScheduledForDeletion = $pedidomayoristadetallesToDelete;

        foreach ($pedidomayoristadetallesToDelete as $pedidomayoristadetalleRemoved) {
            $pedidomayoristadetalleRemoved->setPedidomayorista(null);
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
                ->filterByPedidomayorista($this)
                ->count($con);
        }

        return count($this->collPedidomayoristadetalles);
    }

    /**
     * Method called to associate a Pedidomayoristadetalle object to this object
     * through the Pedidomayoristadetalle foreign key attribute.
     *
     * @param    Pedidomayoristadetalle $l Pedidomayoristadetalle
     * @return Pedidomayorista The current object (for fluent API support)
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
        $pedidomayoristadetalle->setPedidomayorista($this);
    }

    /**
     * @param	Pedidomayoristadetalle $pedidomayoristadetalle The pedidomayoristadetalle object to remove.
     * @return Pedidomayorista The current object (for fluent API support)
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
            $pedidomayoristadetalle->setPedidomayorista(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Pedidomayorista is new, it will return
     * an empty collection; or if this Pedidomayorista has previously
     * been saved, it will retrieve related Pedidomayoristadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Pedidomayorista.
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
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Pedidomayorista is new, it will return
     * an empty collection; or if this Pedidomayorista has previously
     * been saved, it will retrieve related Pedidomayoristadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Pedidomayorista.
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idpedidomayorista = null;
        $this->idcliente = null;
        $this->pedidomayorista_fechasolicitud = null;
        $this->pedidomayorista_estatus = null;
        $this->pedidomayorista_fechaentrega = null;
        $this->pedidomayorista_nota = null;
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
            if ($this->collPedidomayoristadetalles) {
                foreach ($this->collPedidomayoristadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCliente instanceof Persistent) {
              $this->aCliente->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collPedidomayoristadetalles instanceof PropelCollection) {
            $this->collPedidomayoristadetalles->clearIterator();
        }
        $this->collPedidomayoristadetalles = null;
        $this->aCliente = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PedidomayoristaPeer::DEFAULT_STRING_FORMAT);
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
