<?php


/**
 * Base class that represents a row from the 'marca' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseMarca extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MarcaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MarcaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idmarca field.
     * @var        int
     */
    protected $idmarca;

    /**
     * The value for the marca_nombre field.
     * @var        string
     */
    protected $marca_nombre;

    /**
     * @var        PropelObjectCollection|Descuentodetalle[] Collection to store aggregation of Descuentodetalle objects.
     */
    protected $collDescuentodetalles;
    protected $collDescuentodetallesPartial;

    /**
     * @var        PropelObjectCollection|Marcatallaje[] Collection to store aggregation of Marcatallaje objects.
     */
    protected $collMarcatallajes;
    protected $collMarcatallajesPartial;

    /**
     * @var        PropelObjectCollection|Producto[] Collection to store aggregation of Producto objects.
     */
    protected $collProductos;
    protected $collProductosPartial;

    /**
     * @var        PropelObjectCollection|Promociondetalle[] Collection to store aggregation of Promociondetalle objects.
     */
    protected $collPromociondetalles;
    protected $collPromociondetallesPartial;

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
    protected $descuentodetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $marcatallajesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $promociondetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $proveedormarcasScheduledForDeletion = null;

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
     * Get the [marca_nombre] column value.
     *
     * @return string
     */
    public function getMarcaNombre()
    {

        return $this->marca_nombre;
    }

    /**
     * Set the value of [idmarca] column.
     *
     * @param  int $v new value
     * @return Marca The current object (for fluent API support)
     */
    public function setIdmarca($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmarca !== $v) {
            $this->idmarca = $v;
            $this->modifiedColumns[] = MarcaPeer::IDMARCA;
        }


        return $this;
    } // setIdmarca()

    /**
     * Set the value of [marca_nombre] column.
     *
     * @param  string $v new value
     * @return Marca The current object (for fluent API support)
     */
    public function setMarcaNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->marca_nombre !== $v) {
            $this->marca_nombre = $v;
            $this->modifiedColumns[] = MarcaPeer::MARCA_NOMBRE;
        }


        return $this;
    } // setMarcaNombre()

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

            $this->idmarca = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->marca_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 2; // 2 = MarcaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Marca object", $e);
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
            $con = Propel::getConnection(MarcaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MarcaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collDescuentodetalles = null;

            $this->collMarcatallajes = null;

            $this->collProductos = null;

            $this->collPromociondetalles = null;

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
            $con = Propel::getConnection(MarcaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MarcaQuery::create()
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
            $con = Propel::getConnection(MarcaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MarcaPeer::addInstanceToPool($this);
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

            if ($this->descuentodetallesScheduledForDeletion !== null) {
                if (!$this->descuentodetallesScheduledForDeletion->isEmpty()) {
                    DescuentodetalleQuery::create()
                        ->filterByPrimaryKeys($this->descuentodetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->descuentodetallesScheduledForDeletion = null;
                }
            }

            if ($this->collDescuentodetalles !== null) {
                foreach ($this->collDescuentodetalles as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->marcatallajesScheduledForDeletion !== null) {
                if (!$this->marcatallajesScheduledForDeletion->isEmpty()) {
                    MarcatallajeQuery::create()
                        ->filterByPrimaryKeys($this->marcatallajesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->marcatallajesScheduledForDeletion = null;
                }
            }

            if ($this->collMarcatallajes !== null) {
                foreach ($this->collMarcatallajes as $referrerFK) {
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

        $this->modifiedColumns[] = MarcaPeer::IDMARCA;
        if (null !== $this->idmarca) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . MarcaPeer::IDMARCA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(MarcaPeer::IDMARCA)) {
            $modifiedColumns[':p' . $index++]  = '`idmarca`';
        }
        if ($this->isColumnModified(MarcaPeer::MARCA_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`marca_nombre`';
        }

        $sql = sprintf(
            'INSERT INTO `marca` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idmarca`':
                        $stmt->bindValue($identifier, $this->idmarca, PDO::PARAM_INT);
                        break;
                    case '`marca_nombre`':
                        $stmt->bindValue($identifier, $this->marca_nombre, PDO::PARAM_STR);
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
        $this->setIdmarca($pk);

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


            if (($retval = MarcaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collDescuentodetalles !== null) {
                    foreach ($this->collDescuentodetalles as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collMarcatallajes !== null) {
                    foreach ($this->collMarcatallajes as $referrerFK) {
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

                if ($this->collPromociondetalles !== null) {
                    foreach ($this->collPromociondetalles as $referrerFK) {
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
        $pos = MarcaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdmarca();
                break;
            case 1:
                return $this->getMarcaNombre();
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
        if (isset($alreadyDumpedObjects['Marca'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Marca'][$this->getPrimaryKey()] = true;
        $keys = MarcaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdmarca(),
            $keys[1] => $this->getMarcaNombre(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collDescuentodetalles) {
                $result['Descuentodetalles'] = $this->collDescuentodetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collMarcatallajes) {
                $result['Marcatallajes'] = $this->collMarcatallajes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductos) {
                $result['Productos'] = $this->collProductos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPromociondetalles) {
                $result['Promociondetalles'] = $this->collPromociondetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = MarcaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdmarca($value);
                break;
            case 1:
                $this->setMarcaNombre($value);
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
        $keys = MarcaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdmarca($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMarcaNombre($arr[$keys[1]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MarcaPeer::DATABASE_NAME);

        if ($this->isColumnModified(MarcaPeer::IDMARCA)) $criteria->add(MarcaPeer::IDMARCA, $this->idmarca);
        if ($this->isColumnModified(MarcaPeer::MARCA_NOMBRE)) $criteria->add(MarcaPeer::MARCA_NOMBRE, $this->marca_nombre);

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
        $criteria = new Criteria(MarcaPeer::DATABASE_NAME);
        $criteria->add(MarcaPeer::IDMARCA, $this->idmarca);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdmarca();
    }

    /**
     * Generic method to set the primary key (idmarca column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdmarca($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdmarca();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Marca (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setMarcaNombre($this->getMarcaNombre());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getDescuentodetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addDescuentodetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getMarcatallajes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addMarcatallaje($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProductos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProducto($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPromociondetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPromociondetalle($relObj->copy($deepCopy));
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
            $copyObj->setIdmarca(NULL); // this is a auto-increment column, so set to default value
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
     * @return Marca Clone of current object.
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
     * @return MarcaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MarcaPeer();
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
        if ('Descuentodetalle' == $relationName) {
            $this->initDescuentodetalles();
        }
        if ('Marcatallaje' == $relationName) {
            $this->initMarcatallajes();
        }
        if ('Producto' == $relationName) {
            $this->initProductos();
        }
        if ('Promociondetalle' == $relationName) {
            $this->initPromociondetalles();
        }
        if ('Proveedormarca' == $relationName) {
            $this->initProveedormarcas();
        }
    }

    /**
     * Clears out the collDescuentodetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Marca The current object (for fluent API support)
     * @see        addDescuentodetalles()
     */
    public function clearDescuentodetalles()
    {
        $this->collDescuentodetalles = null; // important to set this to null since that means it is uninitialized
        $this->collDescuentodetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collDescuentodetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialDescuentodetalles($v = true)
    {
        $this->collDescuentodetallesPartial = $v;
    }

    /**
     * Initializes the collDescuentodetalles collection.
     *
     * By default this just sets the collDescuentodetalles collection to an empty array (like clearcollDescuentodetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initDescuentodetalles($overrideExisting = true)
    {
        if (null !== $this->collDescuentodetalles && !$overrideExisting) {
            return;
        }
        $this->collDescuentodetalles = new PropelObjectCollection();
        $this->collDescuentodetalles->setModel('Descuentodetalle');
    }

    /**
     * Gets an array of Descuentodetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Marca is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Descuentodetalle[] List of Descuentodetalle objects
     * @throws PropelException
     */
    public function getDescuentodetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collDescuentodetallesPartial && !$this->isNew();
        if (null === $this->collDescuentodetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collDescuentodetalles) {
                // return empty collection
                $this->initDescuentodetalles();
            } else {
                $collDescuentodetalles = DescuentodetalleQuery::create(null, $criteria)
                    ->filterByMarca($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collDescuentodetallesPartial && count($collDescuentodetalles)) {
                      $this->initDescuentodetalles(false);

                      foreach ($collDescuentodetalles as $obj) {
                        if (false == $this->collDescuentodetalles->contains($obj)) {
                          $this->collDescuentodetalles->append($obj);
                        }
                      }

                      $this->collDescuentodetallesPartial = true;
                    }

                    $collDescuentodetalles->getInternalIterator()->rewind();

                    return $collDescuentodetalles;
                }

                if ($partial && $this->collDescuentodetalles) {
                    foreach ($this->collDescuentodetalles as $obj) {
                        if ($obj->isNew()) {
                            $collDescuentodetalles[] = $obj;
                        }
                    }
                }

                $this->collDescuentodetalles = $collDescuentodetalles;
                $this->collDescuentodetallesPartial = false;
            }
        }

        return $this->collDescuentodetalles;
    }

    /**
     * Sets a collection of Descuentodetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $descuentodetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Marca The current object (for fluent API support)
     */
    public function setDescuentodetalles(PropelCollection $descuentodetalles, PropelPDO $con = null)
    {
        $descuentodetallesToDelete = $this->getDescuentodetalles(new Criteria(), $con)->diff($descuentodetalles);


        $this->descuentodetallesScheduledForDeletion = $descuentodetallesToDelete;

        foreach ($descuentodetallesToDelete as $descuentodetalleRemoved) {
            $descuentodetalleRemoved->setMarca(null);
        }

        $this->collDescuentodetalles = null;
        foreach ($descuentodetalles as $descuentodetalle) {
            $this->addDescuentodetalle($descuentodetalle);
        }

        $this->collDescuentodetalles = $descuentodetalles;
        $this->collDescuentodetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Descuentodetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Descuentodetalle objects.
     * @throws PropelException
     */
    public function countDescuentodetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collDescuentodetallesPartial && !$this->isNew();
        if (null === $this->collDescuentodetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collDescuentodetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getDescuentodetalles());
            }
            $query = DescuentodetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByMarca($this)
                ->count($con);
        }

        return count($this->collDescuentodetalles);
    }

    /**
     * Method called to associate a Descuentodetalle object to this object
     * through the Descuentodetalle foreign key attribute.
     *
     * @param    Descuentodetalle $l Descuentodetalle
     * @return Marca The current object (for fluent API support)
     */
    public function addDescuentodetalle(Descuentodetalle $l)
    {
        if ($this->collDescuentodetalles === null) {
            $this->initDescuentodetalles();
            $this->collDescuentodetallesPartial = true;
        }

        if (!in_array($l, $this->collDescuentodetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddDescuentodetalle($l);

            if ($this->descuentodetallesScheduledForDeletion and $this->descuentodetallesScheduledForDeletion->contains($l)) {
                $this->descuentodetallesScheduledForDeletion->remove($this->descuentodetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Descuentodetalle $descuentodetalle The descuentodetalle object to add.
     */
    protected function doAddDescuentodetalle($descuentodetalle)
    {
        $this->collDescuentodetalles[]= $descuentodetalle;
        $descuentodetalle->setMarca($this);
    }

    /**
     * @param	Descuentodetalle $descuentodetalle The descuentodetalle object to remove.
     * @return Marca The current object (for fluent API support)
     */
    public function removeDescuentodetalle($descuentodetalle)
    {
        if ($this->getDescuentodetalles()->contains($descuentodetalle)) {
            $this->collDescuentodetalles->remove($this->collDescuentodetalles->search($descuentodetalle));
            if (null === $this->descuentodetallesScheduledForDeletion) {
                $this->descuentodetallesScheduledForDeletion = clone $this->collDescuentodetalles;
                $this->descuentodetallesScheduledForDeletion->clear();
            }
            $this->descuentodetallesScheduledForDeletion[]= $descuentodetalle;
            $descuentodetalle->setMarca(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Marca is new, it will return
     * an empty collection; or if this Marca has previously
     * been saved, it will retrieve related Descuentodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Marca.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Descuentodetalle[] List of Descuentodetalle objects
     */
    public function getDescuentodetallesJoinDescuento($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DescuentodetalleQuery::create(null, $criteria);
        $query->joinWith('Descuento', $join_behavior);

        return $this->getDescuentodetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Marca is new, it will return
     * an empty collection; or if this Marca has previously
     * been saved, it will retrieve related Descuentodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Marca.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Descuentodetalle[] List of Descuentodetalle objects
     */
    public function getDescuentodetallesJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DescuentodetalleQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getDescuentodetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Marca is new, it will return
     * an empty collection; or if this Marca has previously
     * been saved, it will retrieve related Descuentodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Marca.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Descuentodetalle[] List of Descuentodetalle objects
     */
    public function getDescuentodetallesJoinProductovariante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DescuentodetalleQuery::create(null, $criteria);
        $query->joinWith('Productovariante', $join_behavior);

        return $this->getDescuentodetalles($query, $con);
    }

    /**
     * Clears out the collMarcatallajes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Marca The current object (for fluent API support)
     * @see        addMarcatallajes()
     */
    public function clearMarcatallajes()
    {
        $this->collMarcatallajes = null; // important to set this to null since that means it is uninitialized
        $this->collMarcatallajesPartial = null;

        return $this;
    }

    /**
     * reset is the collMarcatallajes collection loaded partially
     *
     * @return void
     */
    public function resetPartialMarcatallajes($v = true)
    {
        $this->collMarcatallajesPartial = $v;
    }

    /**
     * Initializes the collMarcatallajes collection.
     *
     * By default this just sets the collMarcatallajes collection to an empty array (like clearcollMarcatallajes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initMarcatallajes($overrideExisting = true)
    {
        if (null !== $this->collMarcatallajes && !$overrideExisting) {
            return;
        }
        $this->collMarcatallajes = new PropelObjectCollection();
        $this->collMarcatallajes->setModel('Marcatallaje');
    }

    /**
     * Gets an array of Marcatallaje objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Marca is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Marcatallaje[] List of Marcatallaje objects
     * @throws PropelException
     */
    public function getMarcatallajes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collMarcatallajesPartial && !$this->isNew();
        if (null === $this->collMarcatallajes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collMarcatallajes) {
                // return empty collection
                $this->initMarcatallajes();
            } else {
                $collMarcatallajes = MarcatallajeQuery::create(null, $criteria)
                    ->filterByMarca($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collMarcatallajesPartial && count($collMarcatallajes)) {
                      $this->initMarcatallajes(false);

                      foreach ($collMarcatallajes as $obj) {
                        if (false == $this->collMarcatallajes->contains($obj)) {
                          $this->collMarcatallajes->append($obj);
                        }
                      }

                      $this->collMarcatallajesPartial = true;
                    }

                    $collMarcatallajes->getInternalIterator()->rewind();

                    return $collMarcatallajes;
                }

                if ($partial && $this->collMarcatallajes) {
                    foreach ($this->collMarcatallajes as $obj) {
                        if ($obj->isNew()) {
                            $collMarcatallajes[] = $obj;
                        }
                    }
                }

                $this->collMarcatallajes = $collMarcatallajes;
                $this->collMarcatallajesPartial = false;
            }
        }

        return $this->collMarcatallajes;
    }

    /**
     * Sets a collection of Marcatallaje objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $marcatallajes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Marca The current object (for fluent API support)
     */
    public function setMarcatallajes(PropelCollection $marcatallajes, PropelPDO $con = null)
    {
        $marcatallajesToDelete = $this->getMarcatallajes(new Criteria(), $con)->diff($marcatallajes);


        $this->marcatallajesScheduledForDeletion = $marcatallajesToDelete;

        foreach ($marcatallajesToDelete as $marcatallajeRemoved) {
            $marcatallajeRemoved->setMarca(null);
        }

        $this->collMarcatallajes = null;
        foreach ($marcatallajes as $marcatallaje) {
            $this->addMarcatallaje($marcatallaje);
        }

        $this->collMarcatallajes = $marcatallajes;
        $this->collMarcatallajesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Marcatallaje objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Marcatallaje objects.
     * @throws PropelException
     */
    public function countMarcatallajes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collMarcatallajesPartial && !$this->isNew();
        if (null === $this->collMarcatallajes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collMarcatallajes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getMarcatallajes());
            }
            $query = MarcatallajeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByMarca($this)
                ->count($con);
        }

        return count($this->collMarcatallajes);
    }

    /**
     * Method called to associate a Marcatallaje object to this object
     * through the Marcatallaje foreign key attribute.
     *
     * @param    Marcatallaje $l Marcatallaje
     * @return Marca The current object (for fluent API support)
     */
    public function addMarcatallaje(Marcatallaje $l)
    {
        if ($this->collMarcatallajes === null) {
            $this->initMarcatallajes();
            $this->collMarcatallajesPartial = true;
        }

        if (!in_array($l, $this->collMarcatallajes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddMarcatallaje($l);

            if ($this->marcatallajesScheduledForDeletion and $this->marcatallajesScheduledForDeletion->contains($l)) {
                $this->marcatallajesScheduledForDeletion->remove($this->marcatallajesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Marcatallaje $marcatallaje The marcatallaje object to add.
     */
    protected function doAddMarcatallaje($marcatallaje)
    {
        $this->collMarcatallajes[]= $marcatallaje;
        $marcatallaje->setMarca($this);
    }

    /**
     * @param	Marcatallaje $marcatallaje The marcatallaje object to remove.
     * @return Marca The current object (for fluent API support)
     */
    public function removeMarcatallaje($marcatallaje)
    {
        if ($this->getMarcatallajes()->contains($marcatallaje)) {
            $this->collMarcatallajes->remove($this->collMarcatallajes->search($marcatallaje));
            if (null === $this->marcatallajesScheduledForDeletion) {
                $this->marcatallajesScheduledForDeletion = clone $this->collMarcatallajes;
                $this->marcatallajesScheduledForDeletion->clear();
            }
            $this->marcatallajesScheduledForDeletion[]= clone $marcatallaje;
            $marcatallaje->setMarca(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Marca is new, it will return
     * an empty collection; or if this Marca has previously
     * been saved, it will retrieve related Marcatallajes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Marca.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Marcatallaje[] List of Marcatallaje objects
     */
    public function getMarcatallajesJoinTallaje($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = MarcatallajeQuery::create(null, $criteria);
        $query->joinWith('Tallaje', $join_behavior);

        return $this->getMarcatallajes($query, $con);
    }

    /**
     * Clears out the collProductos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Marca The current object (for fluent API support)
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
     * If this Marca is new, it will return
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
                    ->filterByMarca($this)
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
     * @return Marca The current object (for fluent API support)
     */
    public function setProductos(PropelCollection $productos, PropelPDO $con = null)
    {
        $productosToDelete = $this->getProductos(new Criteria(), $con)->diff($productos);


        $this->productosScheduledForDeletion = $productosToDelete;

        foreach ($productosToDelete as $productoRemoved) {
            $productoRemoved->setMarca(null);
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
                ->filterByMarca($this)
                ->count($con);
        }

        return count($this->collProductos);
    }

    /**
     * Method called to associate a Producto object to this object
     * through the Producto foreign key attribute.
     *
     * @param    Producto $l Producto
     * @return Marca The current object (for fluent API support)
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
        $producto->setMarca($this);
    }

    /**
     * @param	Producto $producto The producto object to remove.
     * @return Marca The current object (for fluent API support)
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
            $producto->setMarca(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Marca is new, it will return
     * an empty collection; or if this Marca has previously
     * been saved, it will retrieve related Productos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Marca.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Producto[] List of Producto objects
     */
    public function getProductosJoinProveedor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductoQuery::create(null, $criteria);
        $query->joinWith('Proveedor', $join_behavior);

        return $this->getProductos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Marca is new, it will return
     * an empty collection; or if this Marca has previously
     * been saved, it will retrieve related Productos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Marca.
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
     * Otherwise if this Marca is new, it will return
     * an empty collection; or if this Marca has previously
     * been saved, it will retrieve related Productos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Marca.
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
     * Clears out the collPromociondetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Marca The current object (for fluent API support)
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
     * If this Marca is new, it will return
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
                    ->filterByMarca($this)
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
     * @return Marca The current object (for fluent API support)
     */
    public function setPromociondetalles(PropelCollection $promociondetalles, PropelPDO $con = null)
    {
        $promociondetallesToDelete = $this->getPromociondetalles(new Criteria(), $con)->diff($promociondetalles);


        $this->promociondetallesScheduledForDeletion = $promociondetallesToDelete;

        foreach ($promociondetallesToDelete as $promociondetalleRemoved) {
            $promociondetalleRemoved->setMarca(null);
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
                ->filterByMarca($this)
                ->count($con);
        }

        return count($this->collPromociondetalles);
    }

    /**
     * Method called to associate a Promociondetalle object to this object
     * through the Promociondetalle foreign key attribute.
     *
     * @param    Promociondetalle $l Promociondetalle
     * @return Marca The current object (for fluent API support)
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
        $promociondetalle->setMarca($this);
    }

    /**
     * @param	Promociondetalle $promociondetalle The promociondetalle object to remove.
     * @return Marca The current object (for fluent API support)
     */
    public function removePromociondetalle($promociondetalle)
    {
        if ($this->getPromociondetalles()->contains($promociondetalle)) {
            $this->collPromociondetalles->remove($this->collPromociondetalles->search($promociondetalle));
            if (null === $this->promociondetallesScheduledForDeletion) {
                $this->promociondetallesScheduledForDeletion = clone $this->collPromociondetalles;
                $this->promociondetallesScheduledForDeletion->clear();
            }
            $this->promociondetallesScheduledForDeletion[]= $promociondetalle;
            $promociondetalle->setMarca(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Marca is new, it will return
     * an empty collection; or if this Marca has previously
     * been saved, it will retrieve related Promociondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Marca.
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
     * Otherwise if this Marca is new, it will return
     * an empty collection; or if this Marca has previously
     * been saved, it will retrieve related Promociondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Marca.
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
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Marca is new, it will return
     * an empty collection; or if this Marca has previously
     * been saved, it will retrieve related Promociondetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Marca.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Promociondetalle[] List of Promociondetalle objects
     */
    public function getPromociondetallesJoinPromocion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PromociondetalleQuery::create(null, $criteria);
        $query->joinWith('Promocion', $join_behavior);

        return $this->getPromociondetalles($query, $con);
    }

    /**
     * Clears out the collProveedormarcas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Marca The current object (for fluent API support)
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
     * If this Marca is new, it will return
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
                    ->filterByMarca($this)
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
     * @return Marca The current object (for fluent API support)
     */
    public function setProveedormarcas(PropelCollection $proveedormarcas, PropelPDO $con = null)
    {
        $proveedormarcasToDelete = $this->getProveedormarcas(new Criteria(), $con)->diff($proveedormarcas);


        $this->proveedormarcasScheduledForDeletion = $proveedormarcasToDelete;

        foreach ($proveedormarcasToDelete as $proveedormarcaRemoved) {
            $proveedormarcaRemoved->setMarca(null);
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
                ->filterByMarca($this)
                ->count($con);
        }

        return count($this->collProveedormarcas);
    }

    /**
     * Method called to associate a Proveedormarca object to this object
     * through the Proveedormarca foreign key attribute.
     *
     * @param    Proveedormarca $l Proveedormarca
     * @return Marca The current object (for fluent API support)
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
        $proveedormarca->setMarca($this);
    }

    /**
     * @param	Proveedormarca $proveedormarca The proveedormarca object to remove.
     * @return Marca The current object (for fluent API support)
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
            $proveedormarca->setMarca(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Marca is new, it will return
     * an empty collection; or if this Marca has previously
     * been saved, it will retrieve related Proveedormarcas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Marca.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Proveedormarca[] List of Proveedormarca objects
     */
    public function getProveedormarcasJoinProveedor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProveedormarcaQuery::create(null, $criteria);
        $query->joinWith('Proveedor', $join_behavior);

        return $this->getProveedormarcas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idmarca = null;
        $this->marca_nombre = null;
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
            if ($this->collDescuentodetalles) {
                foreach ($this->collDescuentodetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collMarcatallajes) {
                foreach ($this->collMarcatallajes as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProductos) {
                foreach ($this->collProductos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPromociondetalles) {
                foreach ($this->collPromociondetalles as $o) {
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

        if ($this->collDescuentodetalles instanceof PropelCollection) {
            $this->collDescuentodetalles->clearIterator();
        }
        $this->collDescuentodetalles = null;
        if ($this->collMarcatallajes instanceof PropelCollection) {
            $this->collMarcatallajes->clearIterator();
        }
        $this->collMarcatallajes = null;
        if ($this->collProductos instanceof PropelCollection) {
            $this->collProductos->clearIterator();
        }
        $this->collProductos = null;
        if ($this->collPromociondetalles instanceof PropelCollection) {
            $this->collPromociondetalles->clearIterator();
        }
        $this->collPromociondetalles = null;
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
        return (string) $this->exportTo(MarcaPeer::DEFAULT_STRING_FORMAT);
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
