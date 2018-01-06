<?php


/**
 * Base class that represents a row from the 'promocion' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BasePromocion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PromocionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PromocionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idpromocion field.
     * @var        int
     */
    protected $idpromocion;

    /**
     * The value for the promocion_nombre field.
     * @var        string
     */
    protected $promocion_nombre;

    /**
     * The value for the promocion_fechainicio field.
     * @var        string
     */
    protected $promocion_fechainicio;

    /**
     * The value for the promocion_fechafin field.
     * @var        string
     */
    protected $promocion_fechafin;

    /**
     * The value for the promocion_estatus field.
     * @var        boolean
     */
    protected $promocion_estatus;

    /**
     * The value for the promocion_descripcion field.
     * @var        string
     */
    protected $promocion_descripcion;

    /**
     * @var        PropelObjectCollection|Promociondetalle[] Collection to store aggregation of Promociondetalle objects.
     */
    protected $collPromociondetalles;
    protected $collPromociondetallesPartial;

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
    protected $promociondetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ventadetallesScheduledForDeletion = null;

    /**
     * Get the [idpromocion] column value.
     *
     * @return int
     */
    public function getIdpromocion()
    {

        return $this->idpromocion;
    }

    /**
     * Get the [promocion_nombre] column value.
     *
     * @return string
     */
    public function getPromocionNombre()
    {

        return $this->promocion_nombre;
    }

    /**
     * Get the [optionally formatted] temporal [promocion_fechainicio] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPromocionFechainicio($format = '%x')
    {
        if ($this->promocion_fechainicio === null) {
            return null;
        }

        if ($this->promocion_fechainicio === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->promocion_fechainicio);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->promocion_fechainicio, true), $x);
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
     * Get the [optionally formatted] temporal [promocion_fechafin] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPromocionFechafin($format = '%x')
    {
        if ($this->promocion_fechafin === null) {
            return null;
        }

        if ($this->promocion_fechafin === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->promocion_fechafin);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->promocion_fechafin, true), $x);
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
     * Get the [promocion_estatus] column value.
     *
     * @return boolean
     */
    public function getPromocionEstatus()
    {

        return $this->promocion_estatus;
    }

    /**
     * Get the [promocion_descripcion] column value.
     *
     * @return string
     */
    public function getPromocionDescripcion()
    {

        return $this->promocion_descripcion;
    }

    /**
     * Set the value of [idpromocion] column.
     *
     * @param  int $v new value
     * @return Promocion The current object (for fluent API support)
     */
    public function setIdpromocion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpromocion !== $v) {
            $this->idpromocion = $v;
            $this->modifiedColumns[] = PromocionPeer::IDPROMOCION;
        }


        return $this;
    } // setIdpromocion()

    /**
     * Set the value of [promocion_nombre] column.
     *
     * @param  string $v new value
     * @return Promocion The current object (for fluent API support)
     */
    public function setPromocionNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->promocion_nombre !== $v) {
            $this->promocion_nombre = $v;
            $this->modifiedColumns[] = PromocionPeer::PROMOCION_NOMBRE;
        }


        return $this;
    } // setPromocionNombre()

    /**
     * Sets the value of [promocion_fechainicio] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Promocion The current object (for fluent API support)
     */
    public function setPromocionFechainicio($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->promocion_fechainicio !== null || $dt !== null) {
            $currentDateAsString = ($this->promocion_fechainicio !== null && $tmpDt = new DateTime($this->promocion_fechainicio)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->promocion_fechainicio = $newDateAsString;
                $this->modifiedColumns[] = PromocionPeer::PROMOCION_FECHAINICIO;
            }
        } // if either are not null


        return $this;
    } // setPromocionFechainicio()

    /**
     * Sets the value of [promocion_fechafin] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Promocion The current object (for fluent API support)
     */
    public function setPromocionFechafin($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->promocion_fechafin !== null || $dt !== null) {
            $currentDateAsString = ($this->promocion_fechafin !== null && $tmpDt = new DateTime($this->promocion_fechafin)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->promocion_fechafin = $newDateAsString;
                $this->modifiedColumns[] = PromocionPeer::PROMOCION_FECHAFIN;
            }
        } // if either are not null


        return $this;
    } // setPromocionFechafin()

    /**
     * Sets the value of the [promocion_estatus] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Promocion The current object (for fluent API support)
     */
    public function setPromocionEstatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->promocion_estatus !== $v) {
            $this->promocion_estatus = $v;
            $this->modifiedColumns[] = PromocionPeer::PROMOCION_ESTATUS;
        }


        return $this;
    } // setPromocionEstatus()

    /**
     * Set the value of [promocion_descripcion] column.
     *
     * @param  string $v new value
     * @return Promocion The current object (for fluent API support)
     */
    public function setPromocionDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->promocion_descripcion !== $v) {
            $this->promocion_descripcion = $v;
            $this->modifiedColumns[] = PromocionPeer::PROMOCION_DESCRIPCION;
        }


        return $this;
    } // setPromocionDescripcion()

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

            $this->idpromocion = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->promocion_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->promocion_fechainicio = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->promocion_fechafin = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->promocion_estatus = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->promocion_descripcion = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = PromocionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Promocion object", $e);
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
            $con = Propel::getConnection(PromocionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PromocionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collPromociondetalles = null;

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
            $con = Propel::getConnection(PromocionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PromocionQuery::create()
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
            $con = Propel::getConnection(PromocionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PromocionPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = PromocionPeer::IDPROMOCION;
        if (null !== $this->idpromocion) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PromocionPeer::IDPROMOCION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PromocionPeer::IDPROMOCION)) {
            $modifiedColumns[':p' . $index++]  = '`idpromocion`';
        }
        if ($this->isColumnModified(PromocionPeer::PROMOCION_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`promocion_nombre`';
        }
        if ($this->isColumnModified(PromocionPeer::PROMOCION_FECHAINICIO)) {
            $modifiedColumns[':p' . $index++]  = '`promocion_fechainicio`';
        }
        if ($this->isColumnModified(PromocionPeer::PROMOCION_FECHAFIN)) {
            $modifiedColumns[':p' . $index++]  = '`promocion_fechafin`';
        }
        if ($this->isColumnModified(PromocionPeer::PROMOCION_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`promocion_estatus`';
        }
        if ($this->isColumnModified(PromocionPeer::PROMOCION_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`promocion_descripcion`';
        }

        $sql = sprintf(
            'INSERT INTO `promocion` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idpromocion`':
                        $stmt->bindValue($identifier, $this->idpromocion, PDO::PARAM_INT);
                        break;
                    case '`promocion_nombre`':
                        $stmt->bindValue($identifier, $this->promocion_nombre, PDO::PARAM_STR);
                        break;
                    case '`promocion_fechainicio`':
                        $stmt->bindValue($identifier, $this->promocion_fechainicio, PDO::PARAM_STR);
                        break;
                    case '`promocion_fechafin`':
                        $stmt->bindValue($identifier, $this->promocion_fechafin, PDO::PARAM_STR);
                        break;
                    case '`promocion_estatus`':
                        $stmt->bindValue($identifier, (int) $this->promocion_estatus, PDO::PARAM_INT);
                        break;
                    case '`promocion_descripcion`':
                        $stmt->bindValue($identifier, $this->promocion_descripcion, PDO::PARAM_STR);
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
        $this->setIdpromocion($pk);

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


            if (($retval = PromocionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collPromociondetalles !== null) {
                    foreach ($this->collPromociondetalles as $referrerFK) {
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
        $pos = PromocionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdpromocion();
                break;
            case 1:
                return $this->getPromocionNombre();
                break;
            case 2:
                return $this->getPromocionFechainicio();
                break;
            case 3:
                return $this->getPromocionFechafin();
                break;
            case 4:
                return $this->getPromocionEstatus();
                break;
            case 5:
                return $this->getPromocionDescripcion();
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
        if (isset($alreadyDumpedObjects['Promocion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Promocion'][$this->getPrimaryKey()] = true;
        $keys = PromocionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdpromocion(),
            $keys[1] => $this->getPromocionNombre(),
            $keys[2] => $this->getPromocionFechainicio(),
            $keys[3] => $this->getPromocionFechafin(),
            $keys[4] => $this->getPromocionEstatus(),
            $keys[5] => $this->getPromocionDescripcion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collPromociondetalles) {
                $result['Promociondetalles'] = $this->collPromociondetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = PromocionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdpromocion($value);
                break;
            case 1:
                $this->setPromocionNombre($value);
                break;
            case 2:
                $this->setPromocionFechainicio($value);
                break;
            case 3:
                $this->setPromocionFechafin($value);
                break;
            case 4:
                $this->setPromocionEstatus($value);
                break;
            case 5:
                $this->setPromocionDescripcion($value);
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
        $keys = PromocionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdpromocion($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setPromocionNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPromocionFechainicio($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPromocionFechafin($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPromocionEstatus($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPromocionDescripcion($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PromocionPeer::DATABASE_NAME);

        if ($this->isColumnModified(PromocionPeer::IDPROMOCION)) $criteria->add(PromocionPeer::IDPROMOCION, $this->idpromocion);
        if ($this->isColumnModified(PromocionPeer::PROMOCION_NOMBRE)) $criteria->add(PromocionPeer::PROMOCION_NOMBRE, $this->promocion_nombre);
        if ($this->isColumnModified(PromocionPeer::PROMOCION_FECHAINICIO)) $criteria->add(PromocionPeer::PROMOCION_FECHAINICIO, $this->promocion_fechainicio);
        if ($this->isColumnModified(PromocionPeer::PROMOCION_FECHAFIN)) $criteria->add(PromocionPeer::PROMOCION_FECHAFIN, $this->promocion_fechafin);
        if ($this->isColumnModified(PromocionPeer::PROMOCION_ESTATUS)) $criteria->add(PromocionPeer::PROMOCION_ESTATUS, $this->promocion_estatus);
        if ($this->isColumnModified(PromocionPeer::PROMOCION_DESCRIPCION)) $criteria->add(PromocionPeer::PROMOCION_DESCRIPCION, $this->promocion_descripcion);

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
        $criteria = new Criteria(PromocionPeer::DATABASE_NAME);
        $criteria->add(PromocionPeer::IDPROMOCION, $this->idpromocion);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdpromocion();
    }

    /**
     * Generic method to set the primary key (idpromocion column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdpromocion($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdpromocion();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Promocion (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setPromocionNombre($this->getPromocionNombre());
        $copyObj->setPromocionFechainicio($this->getPromocionFechainicio());
        $copyObj->setPromocionFechafin($this->getPromocionFechafin());
        $copyObj->setPromocionEstatus($this->getPromocionEstatus());
        $copyObj->setPromocionDescripcion($this->getPromocionDescripcion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getPromociondetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPromociondetalle($relObj->copy($deepCopy));
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
            $copyObj->setIdpromocion(NULL); // this is a auto-increment column, so set to default value
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
     * @return Promocion Clone of current object.
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
     * @return PromocionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PromocionPeer();
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
        if ('Promociondetalle' == $relationName) {
            $this->initPromociondetalles();
        }
        if ('Ventadetalle' == $relationName) {
            $this->initVentadetalles();
        }
    }

    /**
     * Clears out the collPromociondetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Promocion The current object (for fluent API support)
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
     * If this Promocion is new, it will return
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
                    ->filterByPromocion($this)
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
     * @return Promocion The current object (for fluent API support)
     */
    public function setPromociondetalles(PropelCollection $promociondetalles, PropelPDO $con = null)
    {
        $promociondetallesToDelete = $this->getPromociondetalles(new Criteria(), $con)->diff($promociondetalles);


        $this->promociondetallesScheduledForDeletion = $promociondetallesToDelete;

        foreach ($promociondetallesToDelete as $promociondetalleRemoved) {
            $promociondetalleRemoved->setPromocion(null);
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
                ->filterByPromocion($this)
                ->count($con);
        }

        return count($this->collPromociondetalles);
    }

    /**
     * Method called to associate a Promociondetalle object to this object
     * through the Promociondetalle foreign key attribute.
     *
     * @param    Promociondetalle $l Promociondetalle
     * @return Promocion The current object (for fluent API support)
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
        $promociondetalle->setPromocion($this);
    }

    /**
     * @param	Promociondetalle $promociondetalle The promociondetalle object to remove.
     * @return Promocion The current object (for fluent API support)
     */
    public function removePromociondetalle($promociondetalle)
    {
        if ($this->getPromociondetalles()->contains($promociondetalle)) {
            $this->collPromociondetalles->remove($this->collPromociondetalles->search($promociondetalle));
            if (null === $this->promociondetallesScheduledForDeletion) {
                $this->promociondetallesScheduledForDeletion = clone $this->collPromociondetalles;
                $this->promociondetallesScheduledForDeletion->clear();
            }
            $this->promociondetallesScheduledForDeletion[]= clone $promociondetalle;
            $promociondetalle->setPromocion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Promocion is new, it will return
     * an empty collection; or if this Promocion has previously
     * been saved, it will retrieve related Promociondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Promocion.
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
     * Otherwise if this Promocion is new, it will return
     * an empty collection; or if this Promocion has previously
     * been saved, it will retrieve related Promociondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Promocion.
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
     * Otherwise if this Promocion is new, it will return
     * an empty collection; or if this Promocion has previously
     * been saved, it will retrieve related Promociondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Promocion.
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
     * Clears out the collVentadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Promocion The current object (for fluent API support)
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
     * If this Promocion is new, it will return
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
                    ->filterByPromocion($this)
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
     * @return Promocion The current object (for fluent API support)
     */
    public function setVentadetalles(PropelCollection $ventadetalles, PropelPDO $con = null)
    {
        $ventadetallesToDelete = $this->getVentadetalles(new Criteria(), $con)->diff($ventadetalles);


        $this->ventadetallesScheduledForDeletion = $ventadetallesToDelete;

        foreach ($ventadetallesToDelete as $ventadetalleRemoved) {
            $ventadetalleRemoved->setPromocion(null);
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
                ->filterByPromocion($this)
                ->count($con);
        }

        return count($this->collVentadetalles);
    }

    /**
     * Method called to associate a Ventadetalle object to this object
     * through the Ventadetalle foreign key attribute.
     *
     * @param    Ventadetalle $l Ventadetalle
     * @return Promocion The current object (for fluent API support)
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
        $ventadetalle->setPromocion($this);
    }

    /**
     * @param	Ventadetalle $ventadetalle The ventadetalle object to remove.
     * @return Promocion The current object (for fluent API support)
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
            $ventadetalle->setPromocion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Promocion is new, it will return
     * an empty collection; or if this Promocion has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Promocion.
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
     * Otherwise if this Promocion is new, it will return
     * an empty collection; or if this Promocion has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Promocion.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     */
    public function getVentadetallesJoinProductovariante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentadetalleQuery::create(null, $criteria);
        $query->joinWith('Productovariante', $join_behavior);

        return $this->getVentadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Promocion is new, it will return
     * an empty collection; or if this Promocion has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Promocion.
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
     * Otherwise if this Promocion is new, it will return
     * an empty collection; or if this Promocion has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Promocion.
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
        $this->idpromocion = null;
        $this->promocion_nombre = null;
        $this->promocion_fechainicio = null;
        $this->promocion_fechafin = null;
        $this->promocion_estatus = null;
        $this->promocion_descripcion = null;
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
            if ($this->collPromociondetalles) {
                foreach ($this->collPromociondetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVentadetalles) {
                foreach ($this->collVentadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collPromociondetalles instanceof PropelCollection) {
            $this->collPromociondetalles->clearIterator();
        }
        $this->collPromociondetalles = null;
        if ($this->collVentadetalles instanceof PropelCollection) {
            $this->collVentadetalles->clearIterator();
        }
        $this->collVentadetalles = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PromocionPeer::DEFAULT_STRING_FORMAT);
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
