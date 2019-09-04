<?php


/**
 * Base class that represents a row from the 'cuentabancaria' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseCuentabancaria extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CuentabancariaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CuentabancariaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcuentabancaria field.
     * @var        int
     */
    protected $idcuentabancaria;

    /**
     * The value for the cuentabancaria_banco field.
     * @var        string
     */
    protected $cuentabancaria_banco;

    /**
     * The value for the cuentabancaria_cuenta field.
     * @var        string
     */
    protected $cuentabancaria_cuenta;

    /**
     * The value for the cuentabancaria_saldo field.
     * @var        string
     */
    protected $cuentabancaria_saldo;

    /**
     * The value for the cuentabancaria_propietario field.
     * @var        string
     */
    protected $cuentabancaria_propietario;

    /**
     * @var        PropelObjectCollection|Cuentabancariamovimiento[] Collection to store aggregation of Cuentabancariamovimiento objects.
     */
    protected $collCuentabancariamovimientos;
    protected $collCuentabancariamovimientosPartial;

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
    protected $cuentabancariamovimientosScheduledForDeletion = null;

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
     * Get the [cuentabancaria_banco] column value.
     *
     * @return string
     */
    public function getCuentabancariaBanco()
    {

        return $this->cuentabancaria_banco;
    }

    /**
     * Get the [cuentabancaria_cuenta] column value.
     *
     * @return string
     */
    public function getCuentabancariaCuenta()
    {

        return $this->cuentabancaria_cuenta;
    }

    /**
     * Get the [cuentabancaria_saldo] column value.
     *
     * @return string
     */
    public function getCuentabancariaSaldo()
    {

        return $this->cuentabancaria_saldo;
    }

    /**
     * Get the [cuentabancaria_propietario] column value.
     *
     * @return string
     */
    public function getCuentabancariaPropietario()
    {

        return $this->cuentabancaria_propietario;
    }

    /**
     * Set the value of [idcuentabancaria] column.
     *
     * @param  int $v new value
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setIdcuentabancaria($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcuentabancaria !== $v) {
            $this->idcuentabancaria = $v;
            $this->modifiedColumns[] = CuentabancariaPeer::IDCUENTABANCARIA;
        }


        return $this;
    } // setIdcuentabancaria()

    /**
     * Set the value of [cuentabancaria_banco] column.
     *
     * @param  string $v new value
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setCuentabancariaBanco($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cuentabancaria_banco !== $v) {
            $this->cuentabancaria_banco = $v;
            $this->modifiedColumns[] = CuentabancariaPeer::CUENTABANCARIA_BANCO;
        }


        return $this;
    } // setCuentabancariaBanco()

    /**
     * Set the value of [cuentabancaria_cuenta] column.
     *
     * @param  string $v new value
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setCuentabancariaCuenta($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cuentabancaria_cuenta !== $v) {
            $this->cuentabancaria_cuenta = $v;
            $this->modifiedColumns[] = CuentabancariaPeer::CUENTABANCARIA_CUENTA;
        }


        return $this;
    } // setCuentabancariaCuenta()

    /**
     * Set the value of [cuentabancaria_saldo] column.
     *
     * @param  string $v new value
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setCuentabancariaSaldo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cuentabancaria_saldo !== $v) {
            $this->cuentabancaria_saldo = $v;
            $this->modifiedColumns[] = CuentabancariaPeer::CUENTABANCARIA_SALDO;
        }


        return $this;
    } // setCuentabancariaSaldo()

    /**
     * Set the value of [cuentabancaria_propietario] column.
     *
     * @param  string $v new value
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setCuentabancariaPropietario($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cuentabancaria_propietario !== $v) {
            $this->cuentabancaria_propietario = $v;
            $this->modifiedColumns[] = CuentabancariaPeer::CUENTABANCARIA_PROPIETARIO;
        }


        return $this;
    } // setCuentabancariaPropietario()

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

            $this->idcuentabancaria = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->cuentabancaria_banco = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->cuentabancaria_cuenta = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->cuentabancaria_saldo = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->cuentabancaria_propietario = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 5; // 5 = CuentabancariaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Cuentabancaria object", $e);
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
            $con = Propel::getConnection(CuentabancariaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CuentabancariaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCuentabancariamovimientos = null;

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
            $con = Propel::getConnection(CuentabancariaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CuentabancariaQuery::create()
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
            $con = Propel::getConnection(CuentabancariaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CuentabancariaPeer::addInstanceToPool($this);
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

            if ($this->cuentabancariamovimientosScheduledForDeletion !== null) {
                if (!$this->cuentabancariamovimientosScheduledForDeletion->isEmpty()) {
                    CuentabancariamovimientoQuery::create()
                        ->filterByPrimaryKeys($this->cuentabancariamovimientosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->cuentabancariamovimientosScheduledForDeletion = null;
                }
            }

            if ($this->collCuentabancariamovimientos !== null) {
                foreach ($this->collCuentabancariamovimientos as $referrerFK) {
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

        $this->modifiedColumns[] = CuentabancariaPeer::IDCUENTABANCARIA;
        if (null !== $this->idcuentabancaria) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CuentabancariaPeer::IDCUENTABANCARIA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CuentabancariaPeer::IDCUENTABANCARIA)) {
            $modifiedColumns[':p' . $index++]  = '`idcuentabancaria`';
        }
        if ($this->isColumnModified(CuentabancariaPeer::CUENTABANCARIA_BANCO)) {
            $modifiedColumns[':p' . $index++]  = '`cuentabancaria_banco`';
        }
        if ($this->isColumnModified(CuentabancariaPeer::CUENTABANCARIA_CUENTA)) {
            $modifiedColumns[':p' . $index++]  = '`cuentabancaria_cuenta`';
        }
        if ($this->isColumnModified(CuentabancariaPeer::CUENTABANCARIA_SALDO)) {
            $modifiedColumns[':p' . $index++]  = '`cuentabancaria_saldo`';
        }
        if ($this->isColumnModified(CuentabancariaPeer::CUENTABANCARIA_PROPIETARIO)) {
            $modifiedColumns[':p' . $index++]  = '`cuentabancaria_propietario`';
        }

        $sql = sprintf(
            'INSERT INTO `cuentabancaria` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcuentabancaria`':
                        $stmt->bindValue($identifier, $this->idcuentabancaria, PDO::PARAM_INT);
                        break;
                    case '`cuentabancaria_banco`':
                        $stmt->bindValue($identifier, $this->cuentabancaria_banco, PDO::PARAM_STR);
                        break;
                    case '`cuentabancaria_cuenta`':
                        $stmt->bindValue($identifier, $this->cuentabancaria_cuenta, PDO::PARAM_STR);
                        break;
                    case '`cuentabancaria_saldo`':
                        $stmt->bindValue($identifier, $this->cuentabancaria_saldo, PDO::PARAM_STR);
                        break;
                    case '`cuentabancaria_propietario`':
                        $stmt->bindValue($identifier, $this->cuentabancaria_propietario, PDO::PARAM_STR);
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
        $this->setIdcuentabancaria($pk);

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


            if (($retval = CuentabancariaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCuentabancariamovimientos !== null) {
                    foreach ($this->collCuentabancariamovimientos as $referrerFK) {
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
        $pos = CuentabancariaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcuentabancaria();
                break;
            case 1:
                return $this->getCuentabancariaBanco();
                break;
            case 2:
                return $this->getCuentabancariaCuenta();
                break;
            case 3:
                return $this->getCuentabancariaSaldo();
                break;
            case 4:
                return $this->getCuentabancariaPropietario();
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
        if (isset($alreadyDumpedObjects['Cuentabancaria'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Cuentabancaria'][$this->getPrimaryKey()] = true;
        $keys = CuentabancariaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcuentabancaria(),
            $keys[1] => $this->getCuentabancariaBanco(),
            $keys[2] => $this->getCuentabancariaCuenta(),
            $keys[3] => $this->getCuentabancariaSaldo(),
            $keys[4] => $this->getCuentabancariaPropietario(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collCuentabancariamovimientos) {
                $result['Cuentabancariamovimientos'] = $this->collCuentabancariamovimientos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CuentabancariaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcuentabancaria($value);
                break;
            case 1:
                $this->setCuentabancariaBanco($value);
                break;
            case 2:
                $this->setCuentabancariaCuenta($value);
                break;
            case 3:
                $this->setCuentabancariaSaldo($value);
                break;
            case 4:
                $this->setCuentabancariaPropietario($value);
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
        $keys = CuentabancariaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcuentabancaria($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setCuentabancariaBanco($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setCuentabancariaCuenta($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCuentabancariaSaldo($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCuentabancariaPropietario($arr[$keys[4]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CuentabancariaPeer::DATABASE_NAME);

        if ($this->isColumnModified(CuentabancariaPeer::IDCUENTABANCARIA)) $criteria->add(CuentabancariaPeer::IDCUENTABANCARIA, $this->idcuentabancaria);
        if ($this->isColumnModified(CuentabancariaPeer::CUENTABANCARIA_BANCO)) $criteria->add(CuentabancariaPeer::CUENTABANCARIA_BANCO, $this->cuentabancaria_banco);
        if ($this->isColumnModified(CuentabancariaPeer::CUENTABANCARIA_CUENTA)) $criteria->add(CuentabancariaPeer::CUENTABANCARIA_CUENTA, $this->cuentabancaria_cuenta);
        if ($this->isColumnModified(CuentabancariaPeer::CUENTABANCARIA_SALDO)) $criteria->add(CuentabancariaPeer::CUENTABANCARIA_SALDO, $this->cuentabancaria_saldo);
        if ($this->isColumnModified(CuentabancariaPeer::CUENTABANCARIA_PROPIETARIO)) $criteria->add(CuentabancariaPeer::CUENTABANCARIA_PROPIETARIO, $this->cuentabancaria_propietario);

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
        $criteria = new Criteria(CuentabancariaPeer::DATABASE_NAME);
        $criteria->add(CuentabancariaPeer::IDCUENTABANCARIA, $this->idcuentabancaria);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcuentabancaria();
    }

    /**
     * Generic method to set the primary key (idcuentabancaria column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcuentabancaria($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcuentabancaria();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Cuentabancaria (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setCuentabancariaBanco($this->getCuentabancariaBanco());
        $copyObj->setCuentabancariaCuenta($this->getCuentabancariaCuenta());
        $copyObj->setCuentabancariaSaldo($this->getCuentabancariaSaldo());
        $copyObj->setCuentabancariaPropietario($this->getCuentabancariaPropietario());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCuentabancariamovimientos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCuentabancariamovimiento($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdcuentabancaria(NULL); // this is a auto-increment column, so set to default value
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
     * @return Cuentabancaria Clone of current object.
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
     * @return CuentabancariaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CuentabancariaPeer();
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
        if ('Cuentabancariamovimiento' == $relationName) {
            $this->initCuentabancariamovimientos();
        }
    }

    /**
     * Clears out the collCuentabancariamovimientos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cuentabancaria The current object (for fluent API support)
     * @see        addCuentabancariamovimientos()
     */
    public function clearCuentabancariamovimientos()
    {
        $this->collCuentabancariamovimientos = null; // important to set this to null since that means it is uninitialized
        $this->collCuentabancariamovimientosPartial = null;

        return $this;
    }

    /**
     * reset is the collCuentabancariamovimientos collection loaded partially
     *
     * @return void
     */
    public function resetPartialCuentabancariamovimientos($v = true)
    {
        $this->collCuentabancariamovimientosPartial = $v;
    }

    /**
     * Initializes the collCuentabancariamovimientos collection.
     *
     * By default this just sets the collCuentabancariamovimientos collection to an empty array (like clearcollCuentabancariamovimientos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCuentabancariamovimientos($overrideExisting = true)
    {
        if (null !== $this->collCuentabancariamovimientos && !$overrideExisting) {
            return;
        }
        $this->collCuentabancariamovimientos = new PropelObjectCollection();
        $this->collCuentabancariamovimientos->setModel('Cuentabancariamovimiento');
    }

    /**
     * Gets an array of Cuentabancariamovimiento objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cuentabancaria is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Cuentabancariamovimiento[] List of Cuentabancariamovimiento objects
     * @throws PropelException
     */
    public function getCuentabancariamovimientos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCuentabancariamovimientosPartial && !$this->isNew();
        if (null === $this->collCuentabancariamovimientos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCuentabancariamovimientos) {
                // return empty collection
                $this->initCuentabancariamovimientos();
            } else {
                $collCuentabancariamovimientos = CuentabancariamovimientoQuery::create(null, $criteria)
                    ->filterByCuentabancaria($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCuentabancariamovimientosPartial && count($collCuentabancariamovimientos)) {
                      $this->initCuentabancariamovimientos(false);

                      foreach ($collCuentabancariamovimientos as $obj) {
                        if (false == $this->collCuentabancariamovimientos->contains($obj)) {
                          $this->collCuentabancariamovimientos->append($obj);
                        }
                      }

                      $this->collCuentabancariamovimientosPartial = true;
                    }

                    $collCuentabancariamovimientos->getInternalIterator()->rewind();

                    return $collCuentabancariamovimientos;
                }

                if ($partial && $this->collCuentabancariamovimientos) {
                    foreach ($this->collCuentabancariamovimientos as $obj) {
                        if ($obj->isNew()) {
                            $collCuentabancariamovimientos[] = $obj;
                        }
                    }
                }

                $this->collCuentabancariamovimientos = $collCuentabancariamovimientos;
                $this->collCuentabancariamovimientosPartial = false;
            }
        }

        return $this->collCuentabancariamovimientos;
    }

    /**
     * Sets a collection of Cuentabancariamovimiento objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $cuentabancariamovimientos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function setCuentabancariamovimientos(PropelCollection $cuentabancariamovimientos, PropelPDO $con = null)
    {
        $cuentabancariamovimientosToDelete = $this->getCuentabancariamovimientos(new Criteria(), $con)->diff($cuentabancariamovimientos);


        $this->cuentabancariamovimientosScheduledForDeletion = $cuentabancariamovimientosToDelete;

        foreach ($cuentabancariamovimientosToDelete as $cuentabancariamovimientoRemoved) {
            $cuentabancariamovimientoRemoved->setCuentabancaria(null);
        }

        $this->collCuentabancariamovimientos = null;
        foreach ($cuentabancariamovimientos as $cuentabancariamovimiento) {
            $this->addCuentabancariamovimiento($cuentabancariamovimiento);
        }

        $this->collCuentabancariamovimientos = $cuentabancariamovimientos;
        $this->collCuentabancariamovimientosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Cuentabancariamovimiento objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Cuentabancariamovimiento objects.
     * @throws PropelException
     */
    public function countCuentabancariamovimientos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCuentabancariamovimientosPartial && !$this->isNew();
        if (null === $this->collCuentabancariamovimientos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCuentabancariamovimientos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCuentabancariamovimientos());
            }
            $query = CuentabancariamovimientoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCuentabancaria($this)
                ->count($con);
        }

        return count($this->collCuentabancariamovimientos);
    }

    /**
     * Method called to associate a Cuentabancariamovimiento object to this object
     * through the Cuentabancariamovimiento foreign key attribute.
     *
     * @param    Cuentabancariamovimiento $l Cuentabancariamovimiento
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function addCuentabancariamovimiento(Cuentabancariamovimiento $l)
    {
        if ($this->collCuentabancariamovimientos === null) {
            $this->initCuentabancariamovimientos();
            $this->collCuentabancariamovimientosPartial = true;
        }

        if (!in_array($l, $this->collCuentabancariamovimientos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCuentabancariamovimiento($l);

            if ($this->cuentabancariamovimientosScheduledForDeletion and $this->cuentabancariamovimientosScheduledForDeletion->contains($l)) {
                $this->cuentabancariamovimientosScheduledForDeletion->remove($this->cuentabancariamovimientosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Cuentabancariamovimiento $cuentabancariamovimiento The cuentabancariamovimiento object to add.
     */
    protected function doAddCuentabancariamovimiento($cuentabancariamovimiento)
    {
        $this->collCuentabancariamovimientos[]= $cuentabancariamovimiento;
        $cuentabancariamovimiento->setCuentabancaria($this);
    }

    /**
     * @param	Cuentabancariamovimiento $cuentabancariamovimiento The cuentabancariamovimiento object to remove.
     * @return Cuentabancaria The current object (for fluent API support)
     */
    public function removeCuentabancariamovimiento($cuentabancariamovimiento)
    {
        if ($this->getCuentabancariamovimientos()->contains($cuentabancariamovimiento)) {
            $this->collCuentabancariamovimientos->remove($this->collCuentabancariamovimientos->search($cuentabancariamovimiento));
            if (null === $this->cuentabancariamovimientosScheduledForDeletion) {
                $this->cuentabancariamovimientosScheduledForDeletion = clone $this->collCuentabancariamovimientos;
                $this->cuentabancariamovimientosScheduledForDeletion->clear();
            }
            $this->cuentabancariamovimientosScheduledForDeletion[]= clone $cuentabancariamovimiento;
            $cuentabancariamovimiento->setCuentabancaria(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cuentabancaria is new, it will return
     * an empty collection; or if this Cuentabancaria has previously
     * been saved, it will retrieve related Cuentabancariamovimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cuentabancaria.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cuentabancariamovimiento[] List of Cuentabancariamovimiento objects
     */
    public function getCuentabancariamovimientosJoinEmpleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CuentabancariamovimientoQuery::create(null, $criteria);
        $query->joinWith('Empleado', $join_behavior);

        return $this->getCuentabancariamovimientos($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idcuentabancaria = null;
        $this->cuentabancaria_banco = null;
        $this->cuentabancaria_cuenta = null;
        $this->cuentabancaria_saldo = null;
        $this->cuentabancaria_propietario = null;
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
            if ($this->collCuentabancariamovimientos) {
                foreach ($this->collCuentabancariamovimientos as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCuentabancariamovimientos instanceof PropelCollection) {
            $this->collCuentabancariamovimientos->clearIterator();
        }
        $this->collCuentabancariamovimientos = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CuentabancariaPeer::DEFAULT_STRING_FORMAT);
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
