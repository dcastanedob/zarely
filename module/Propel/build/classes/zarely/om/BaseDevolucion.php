<?php


/**
 * Base class that represents a row from the 'devolucion' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseDevolucion extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DevolucionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DevolucionPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the iddevolucion field.
     * @var        int
     */
    protected $iddevolucion;

    /**
     * The value for the idproveedor field.
     * @var        int
     */
    protected $idproveedor;

    /**
     * The value for the devolucion_fecha field.
     * @var        string
     */
    protected $devolucion_fecha;

    /**
     * The value for the devolucion_total field.
     * @var        string
     */
    protected $devolucion_total;

    /**
     * The value for the devolucion_estatus field.
     * @var        string
     */
    protected $devolucion_estatus;

    /**
     * The value for the devolucion_nota field.
     * @var        string
     */
    protected $devolucion_nota;

    /**
     * The value for the devolucion_comprobante field.
     * @var        string
     */
    protected $devolucion_comprobante;

    /**
     * @var        Proveedor
     */
    protected $aProveedor;

    /**
     * @var        PropelObjectCollection|Devoluciondetalle[] Collection to store aggregation of Devoluciondetalle objects.
     */
    protected $collDevoluciondetalles;
    protected $collDevoluciondetallesPartial;

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
    protected $devoluciondetallesScheduledForDeletion = null;

    /**
     * Get the [iddevolucion] column value.
     *
     * @return int
     */
    public function getIddevolucion()
    {

        return $this->iddevolucion;
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
     * Get the [optionally formatted] temporal [devolucion_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDevolucionFecha($format = '%x')
    {
        if ($this->devolucion_fecha === null) {
            return null;
        }

        if ($this->devolucion_fecha === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->devolucion_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->devolucion_fecha, true), $x);
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
     * Get the [devolucion_total] column value.
     *
     * @return string
     */
    public function getDevolucionTotal()
    {

        return $this->devolucion_total;
    }

    /**
     * Get the [devolucion_estatus] column value.
     *
     * @return string
     */
    public function getDevolucionEstatus()
    {

        return $this->devolucion_estatus;
    }

    /**
     * Get the [devolucion_nota] column value.
     *
     * @return string
     */
    public function getDevolucionNota()
    {

        return $this->devolucion_nota;
    }

    /**
     * Get the [devolucion_comprobante] column value.
     *
     * @return string
     */
    public function getDevolucionComprobante()
    {

        return $this->devolucion_comprobante;
    }

    /**
     * Set the value of [iddevolucion] column.
     *
     * @param  int $v new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setIddevolucion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->iddevolucion !== $v) {
            $this->iddevolucion = $v;
            $this->modifiedColumns[] = DevolucionPeer::IDDEVOLUCION;
        }


        return $this;
    } // setIddevolucion()

    /**
     * Set the value of [idproveedor] column.
     *
     * @param  int $v new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setIdproveedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproveedor !== $v) {
            $this->idproveedor = $v;
            $this->modifiedColumns[] = DevolucionPeer::IDPROVEEDOR;
        }

        if ($this->aProveedor !== null && $this->aProveedor->getIdproveedor() !== $v) {
            $this->aProveedor = null;
        }


        return $this;
    } // setIdproveedor()

    /**
     * Sets the value of [devolucion_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevolucionFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->devolucion_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->devolucion_fecha !== null && $tmpDt = new DateTime($this->devolucion_fecha)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->devolucion_fecha = $newDateAsString;
                $this->modifiedColumns[] = DevolucionPeer::DEVOLUCION_FECHA;
            }
        } // if either are not null


        return $this;
    } // setDevolucionFecha()

    /**
     * Set the value of [devolucion_total] column.
     *
     * @param  string $v new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevolucionTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->devolucion_total !== $v) {
            $this->devolucion_total = $v;
            $this->modifiedColumns[] = DevolucionPeer::DEVOLUCION_TOTAL;
        }


        return $this;
    } // setDevolucionTotal()

    /**
     * Set the value of [devolucion_estatus] column.
     *
     * @param  string $v new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevolucionEstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->devolucion_estatus !== $v) {
            $this->devolucion_estatus = $v;
            $this->modifiedColumns[] = DevolucionPeer::DEVOLUCION_ESTATUS;
        }


        return $this;
    } // setDevolucionEstatus()

    /**
     * Set the value of [devolucion_nota] column.
     *
     * @param  string $v new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevolucionNota($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->devolucion_nota !== $v) {
            $this->devolucion_nota = $v;
            $this->modifiedColumns[] = DevolucionPeer::DEVOLUCION_NOTA;
        }


        return $this;
    } // setDevolucionNota()

    /**
     * Set the value of [devolucion_comprobante] column.
     *
     * @param  string $v new value
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevolucionComprobante($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->devolucion_comprobante !== $v) {
            $this->devolucion_comprobante = $v;
            $this->modifiedColumns[] = DevolucionPeer::DEVOLUCION_COMPROBANTE;
        }


        return $this;
    } // setDevolucionComprobante()

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

            $this->iddevolucion = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idproveedor = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->devolucion_fecha = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->devolucion_total = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->devolucion_estatus = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->devolucion_nota = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->devolucion_comprobante = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 7; // 7 = DevolucionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Devolucion object", $e);
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
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DevolucionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aProveedor = null;
            $this->collDevoluciondetalles = null;

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
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DevolucionQuery::create()
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
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DevolucionPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = DevolucionPeer::IDDEVOLUCION;
        if (null !== $this->iddevolucion) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . DevolucionPeer::IDDEVOLUCION . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DevolucionPeer::IDDEVOLUCION)) {
            $modifiedColumns[':p' . $index++]  = '`iddevolucion`';
        }
        if ($this->isColumnModified(DevolucionPeer::IDPROVEEDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idproveedor`';
        }
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`devolucion_fecha`';
        }
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`devolucion_total`';
        }
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`devolucion_estatus`';
        }
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_NOTA)) {
            $modifiedColumns[':p' . $index++]  = '`devolucion_nota`';
        }
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_COMPROBANTE)) {
            $modifiedColumns[':p' . $index++]  = '`devolucion_comprobante`';
        }

        $sql = sprintf(
            'INSERT INTO `devolucion` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`iddevolucion`':
                        $stmt->bindValue($identifier, $this->iddevolucion, PDO::PARAM_INT);
                        break;
                    case '`idproveedor`':
                        $stmt->bindValue($identifier, $this->idproveedor, PDO::PARAM_INT);
                        break;
                    case '`devolucion_fecha`':
                        $stmt->bindValue($identifier, $this->devolucion_fecha, PDO::PARAM_STR);
                        break;
                    case '`devolucion_total`':
                        $stmt->bindValue($identifier, $this->devolucion_total, PDO::PARAM_STR);
                        break;
                    case '`devolucion_estatus`':
                        $stmt->bindValue($identifier, $this->devolucion_estatus, PDO::PARAM_STR);
                        break;
                    case '`devolucion_nota`':
                        $stmt->bindValue($identifier, $this->devolucion_nota, PDO::PARAM_STR);
                        break;
                    case '`devolucion_comprobante`':
                        $stmt->bindValue($identifier, $this->devolucion_comprobante, PDO::PARAM_STR);
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
        $this->setIddevolucion($pk);

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


            if (($retval = DevolucionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collDevoluciondetalles !== null) {
                    foreach ($this->collDevoluciondetalles as $referrerFK) {
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
        $pos = DevolucionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIddevolucion();
                break;
            case 1:
                return $this->getIdproveedor();
                break;
            case 2:
                return $this->getDevolucionFecha();
                break;
            case 3:
                return $this->getDevolucionTotal();
                break;
            case 4:
                return $this->getDevolucionEstatus();
                break;
            case 5:
                return $this->getDevolucionNota();
                break;
            case 6:
                return $this->getDevolucionComprobante();
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
        if (isset($alreadyDumpedObjects['Devolucion'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Devolucion'][$this->getPrimaryKey()] = true;
        $keys = DevolucionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIddevolucion(),
            $keys[1] => $this->getIdproveedor(),
            $keys[2] => $this->getDevolucionFecha(),
            $keys[3] => $this->getDevolucionTotal(),
            $keys[4] => $this->getDevolucionEstatus(),
            $keys[5] => $this->getDevolucionNota(),
            $keys[6] => $this->getDevolucionComprobante(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aProveedor) {
                $result['Proveedor'] = $this->aProveedor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collDevoluciondetalles) {
                $result['Devoluciondetalles'] = $this->collDevoluciondetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = DevolucionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIddevolucion($value);
                break;
            case 1:
                $this->setIdproveedor($value);
                break;
            case 2:
                $this->setDevolucionFecha($value);
                break;
            case 3:
                $this->setDevolucionTotal($value);
                break;
            case 4:
                $this->setDevolucionEstatus($value);
                break;
            case 5:
                $this->setDevolucionNota($value);
                break;
            case 6:
                $this->setDevolucionComprobante($value);
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
        $keys = DevolucionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIddevolucion($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdproveedor($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDevolucionFecha($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDevolucionTotal($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDevolucionEstatus($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDevolucionNota($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDevolucionComprobante($arr[$keys[6]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DevolucionPeer::DATABASE_NAME);

        if ($this->isColumnModified(DevolucionPeer::IDDEVOLUCION)) $criteria->add(DevolucionPeer::IDDEVOLUCION, $this->iddevolucion);
        if ($this->isColumnModified(DevolucionPeer::IDPROVEEDOR)) $criteria->add(DevolucionPeer::IDPROVEEDOR, $this->idproveedor);
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_FECHA)) $criteria->add(DevolucionPeer::DEVOLUCION_FECHA, $this->devolucion_fecha);
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_TOTAL)) $criteria->add(DevolucionPeer::DEVOLUCION_TOTAL, $this->devolucion_total);
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_ESTATUS)) $criteria->add(DevolucionPeer::DEVOLUCION_ESTATUS, $this->devolucion_estatus);
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_NOTA)) $criteria->add(DevolucionPeer::DEVOLUCION_NOTA, $this->devolucion_nota);
        if ($this->isColumnModified(DevolucionPeer::DEVOLUCION_COMPROBANTE)) $criteria->add(DevolucionPeer::DEVOLUCION_COMPROBANTE, $this->devolucion_comprobante);

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
        $criteria = new Criteria(DevolucionPeer::DATABASE_NAME);
        $criteria->add(DevolucionPeer::IDDEVOLUCION, $this->iddevolucion);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIddevolucion();
    }

    /**
     * Generic method to set the primary key (iddevolucion column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIddevolucion($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIddevolucion();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Devolucion (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdproveedor($this->getIdproveedor());
        $copyObj->setDevolucionFecha($this->getDevolucionFecha());
        $copyObj->setDevolucionTotal($this->getDevolucionTotal());
        $copyObj->setDevolucionEstatus($this->getDevolucionEstatus());
        $copyObj->setDevolucionNota($this->getDevolucionNota());
        $copyObj->setDevolucionComprobante($this->getDevolucionComprobante());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getDevoluciondetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDevoluciondetalle($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIddevolucion(NULL); // this is a auto-increment column, so set to default value
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
     * @return Devolucion Clone of current object.
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
     * @return DevolucionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DevolucionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Proveedor object.
     *
     * @param                  Proveedor $v
     * @return Devolucion The current object (for fluent API support)
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
            $v->addDevolucion($this);
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
                $this->aProveedor->addDevolucions($this);
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
        if ('Devoluciondetalle' == $relationName) {
            $this->initDevoluciondetalles();
        }
    }

    /**
     * Clears out the collDevoluciondetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Devolucion The current object (for fluent API support)
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
     * If this Devolucion is new, it will return
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
                    ->filterByDevolucion($this)
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
     * @return Devolucion The current object (for fluent API support)
     */
    public function setDevoluciondetalles(PropelCollection $devoluciondetalles, PropelPDO $con = null)
    {
        $devoluciondetallesToDelete = $this->getDevoluciondetalles(new Criteria(), $con)->diff($devoluciondetalles);


        $this->devoluciondetallesScheduledForDeletion = $devoluciondetallesToDelete;

        foreach ($devoluciondetallesToDelete as $devoluciondetalleRemoved) {
            $devoluciondetalleRemoved->setDevolucion(null);
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
                ->filterByDevolucion($this)
                ->count($con);
        }

        return count($this->collDevoluciondetalles);
    }

    /**
     * Method called to associate a Devoluciondetalle object to this object
     * through the Devoluciondetalle foreign key attribute.
     *
     * @param    Devoluciondetalle $l Devoluciondetalle
     * @return Devolucion The current object (for fluent API support)
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
        $devoluciondetalle->setDevolucion($this);
    }

    /**
     * @param	Devoluciondetalle $devoluciondetalle The devoluciondetalle object to remove.
     * @return Devolucion The current object (for fluent API support)
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
            $devoluciondetalle->setDevolucion(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Devolucion is new, it will return
     * an empty collection; or if this Devolucion has previously
     * been saved, it will retrieve related Devoluciondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Devolucion.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Devoluciondetalle[] List of Devoluciondetalle objects
     */
    public function getDevoluciondetallesJoinProductovariante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DevoluciondetalleQuery::create(null, $criteria);
        $query->joinWith('Productovariante', $join_behavior);

        return $this->getDevoluciondetalles($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->iddevolucion = null;
        $this->idproveedor = null;
        $this->devolucion_fecha = null;
        $this->devolucion_total = null;
        $this->devolucion_estatus = null;
        $this->devolucion_nota = null;
        $this->devolucion_comprobante = null;
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
            if ($this->collDevoluciondetalles) {
                foreach ($this->collDevoluciondetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aProveedor instanceof Persistent) {
              $this->aProveedor->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collDevoluciondetalles instanceof PropelCollection) {
            $this->collDevoluciondetalles->clearIterator();
        }
        $this->collDevoluciondetalles = null;
        $this->aProveedor = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(DevolucionPeer::DEFAULT_STRING_FORMAT);
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
