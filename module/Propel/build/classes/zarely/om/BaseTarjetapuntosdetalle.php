<?php


/**
 * Base class that represents a row from the 'tarjetapuntosdetalle' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseTarjetapuntosdetalle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TarjetapuntosdetallePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TarjetapuntosdetallePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idtarjetapuntosdetalle field.
     * @var        int
     */
    protected $idtarjetapuntosdetalle;

    /**
     * The value for the idtarjetapuntos field.
     * @var        int
     */
    protected $idtarjetapuntos;

    /**
     * The value for the tarjetapuntosdetalle_tipo field.
     * @var        string
     */
    protected $tarjetapuntosdetalle_tipo;

    /**
     * The value for the tarjetapuntosdetalle_cantidad field.
     * @var        int
     */
    protected $tarjetapuntosdetalle_cantidad;

    /**
     * The value for the idventa field.
     * @var        int
     */
    protected $idventa;

    /**
     * The value for the idempleado field.
     * @var        int
     */
    protected $idempleado;

    /**
     * @var        Empleado
     */
    protected $aEmpleado;

    /**
     * @var        Tarjetapuntos
     */
    protected $aTarjetapuntos;

    /**
     * @var        Venta
     */
    protected $aVenta;

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
     * Get the [idtarjetapuntosdetalle] column value.
     *
     * @return int
     */
    public function getIdtarjetapuntosdetalle()
    {

        return $this->idtarjetapuntosdetalle;
    }

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
     * Get the [tarjetapuntosdetalle_tipo] column value.
     *
     * @return string
     */
    public function getTarjetapuntosdetalleTipo()
    {

        return $this->tarjetapuntosdetalle_tipo;
    }

    /**
     * Get the [tarjetapuntosdetalle_cantidad] column value.
     *
     * @return int
     */
    public function getTarjetapuntosdetalleCantidad()
    {

        return $this->tarjetapuntosdetalle_cantidad;
    }

    /**
     * Get the [idventa] column value.
     *
     * @return int
     */
    public function getIdventa()
    {

        return $this->idventa;
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
     * Set the value of [idtarjetapuntosdetalle] column.
     *
     * @param  int $v new value
     * @return Tarjetapuntosdetalle The current object (for fluent API support)
     */
    public function setIdtarjetapuntosdetalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtarjetapuntosdetalle !== $v) {
            $this->idtarjetapuntosdetalle = $v;
            $this->modifiedColumns[] = TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE;
        }


        return $this;
    } // setIdtarjetapuntosdetalle()

    /**
     * Set the value of [idtarjetapuntos] column.
     *
     * @param  int $v new value
     * @return Tarjetapuntosdetalle The current object (for fluent API support)
     */
    public function setIdtarjetapuntos($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtarjetapuntos !== $v) {
            $this->idtarjetapuntos = $v;
            $this->modifiedColumns[] = TarjetapuntosdetallePeer::IDTARJETAPUNTOS;
        }

        if ($this->aTarjetapuntos !== null && $this->aTarjetapuntos->getIdtarjetapuntos() !== $v) {
            $this->aTarjetapuntos = null;
        }


        return $this;
    } // setIdtarjetapuntos()

    /**
     * Set the value of [tarjetapuntosdetalle_tipo] column.
     *
     * @param  string $v new value
     * @return Tarjetapuntosdetalle The current object (for fluent API support)
     */
    public function setTarjetapuntosdetalleTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tarjetapuntosdetalle_tipo !== $v) {
            $this->tarjetapuntosdetalle_tipo = $v;
            $this->modifiedColumns[] = TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_TIPO;
        }


        return $this;
    } // setTarjetapuntosdetalleTipo()

    /**
     * Set the value of [tarjetapuntosdetalle_cantidad] column.
     *
     * @param  int $v new value
     * @return Tarjetapuntosdetalle The current object (for fluent API support)
     */
    public function setTarjetapuntosdetalleCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tarjetapuntosdetalle_cantidad !== $v) {
            $this->tarjetapuntosdetalle_cantidad = $v;
            $this->modifiedColumns[] = TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_CANTIDAD;
        }


        return $this;
    } // setTarjetapuntosdetalleCantidad()

    /**
     * Set the value of [idventa] column.
     *
     * @param  int $v new value
     * @return Tarjetapuntosdetalle The current object (for fluent API support)
     */
    public function setIdventa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idventa !== $v) {
            $this->idventa = $v;
            $this->modifiedColumns[] = TarjetapuntosdetallePeer::IDVENTA;
        }

        if ($this->aVenta !== null && $this->aVenta->getIdventa() !== $v) {
            $this->aVenta = null;
        }


        return $this;
    } // setIdventa()

    /**
     * Set the value of [idempleado] column.
     *
     * @param  int $v new value
     * @return Tarjetapuntosdetalle The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = TarjetapuntosdetallePeer::IDEMPLEADO;
        }

        if ($this->aEmpleado !== null && $this->aEmpleado->getIdempleado() !== $v) {
            $this->aEmpleado = null;
        }


        return $this;
    } // setIdempleado()

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

            $this->idtarjetapuntosdetalle = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idtarjetapuntos = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->tarjetapuntosdetalle_tipo = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->tarjetapuntosdetalle_cantidad = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->idventa = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->idempleado = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 6; // 6 = TarjetapuntosdetallePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Tarjetapuntosdetalle object", $e);
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

        if ($this->aTarjetapuntos !== null && $this->idtarjetapuntos !== $this->aTarjetapuntos->getIdtarjetapuntos()) {
            $this->aTarjetapuntos = null;
        }
        if ($this->aVenta !== null && $this->idventa !== $this->aVenta->getIdventa()) {
            $this->aVenta = null;
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
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TarjetapuntosdetallePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aEmpleado = null;
            $this->aTarjetapuntos = null;
            $this->aVenta = null;
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
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TarjetapuntosdetalleQuery::create()
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
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TarjetapuntosdetallePeer::addInstanceToPool($this);
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

            if ($this->aTarjetapuntos !== null) {
                if ($this->aTarjetapuntos->isModified() || $this->aTarjetapuntos->isNew()) {
                    $affectedRows += $this->aTarjetapuntos->save($con);
                }
                $this->setTarjetapuntos($this->aTarjetapuntos);
            }

            if ($this->aVenta !== null) {
                if ($this->aVenta->isModified() || $this->aVenta->isNew()) {
                    $affectedRows += $this->aVenta->save($con);
                }
                $this->setVenta($this->aVenta);
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

        $this->modifiedColumns[] = TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE;
        if (null !== $this->idtarjetapuntosdetalle) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE)) {
            $modifiedColumns[':p' . $index++]  = '`idtarjetapuntosdetalle`';
        }
        if ($this->isColumnModified(TarjetapuntosdetallePeer::IDTARJETAPUNTOS)) {
            $modifiedColumns[':p' . $index++]  = '`idtarjetapuntos`';
        }
        if ($this->isColumnModified(TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`tarjetapuntosdetalle_tipo`';
        }
        if ($this->isColumnModified(TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`tarjetapuntosdetalle_cantidad`';
        }
        if ($this->isColumnModified(TarjetapuntosdetallePeer::IDVENTA)) {
            $modifiedColumns[':p' . $index++]  = '`idventa`';
        }
        if ($this->isColumnModified(TarjetapuntosdetallePeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }

        $sql = sprintf(
            'INSERT INTO `tarjetapuntosdetalle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idtarjetapuntosdetalle`':
                        $stmt->bindValue($identifier, $this->idtarjetapuntosdetalle, PDO::PARAM_INT);
                        break;
                    case '`idtarjetapuntos`':
                        $stmt->bindValue($identifier, $this->idtarjetapuntos, PDO::PARAM_INT);
                        break;
                    case '`tarjetapuntosdetalle_tipo`':
                        $stmt->bindValue($identifier, $this->tarjetapuntosdetalle_tipo, PDO::PARAM_STR);
                        break;
                    case '`tarjetapuntosdetalle_cantidad`':
                        $stmt->bindValue($identifier, $this->tarjetapuntosdetalle_cantidad, PDO::PARAM_INT);
                        break;
                    case '`idventa`':
                        $stmt->bindValue($identifier, $this->idventa, PDO::PARAM_INT);
                        break;
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
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
        $this->setIdtarjetapuntosdetalle($pk);

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

            if ($this->aTarjetapuntos !== null) {
                if (!$this->aTarjetapuntos->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aTarjetapuntos->getValidationFailures());
                }
            }

            if ($this->aVenta !== null) {
                if (!$this->aVenta->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aVenta->getValidationFailures());
                }
            }


            if (($retval = TarjetapuntosdetallePeer::doValidate($this, $columns)) !== true) {
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
        $pos = TarjetapuntosdetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdtarjetapuntosdetalle();
                break;
            case 1:
                return $this->getIdtarjetapuntos();
                break;
            case 2:
                return $this->getTarjetapuntosdetalleTipo();
                break;
            case 3:
                return $this->getTarjetapuntosdetalleCantidad();
                break;
            case 4:
                return $this->getIdventa();
                break;
            case 5:
                return $this->getIdempleado();
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
        if (isset($alreadyDumpedObjects['Tarjetapuntosdetalle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Tarjetapuntosdetalle'][$this->getPrimaryKey()] = true;
        $keys = TarjetapuntosdetallePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdtarjetapuntosdetalle(),
            $keys[1] => $this->getIdtarjetapuntos(),
            $keys[2] => $this->getTarjetapuntosdetalleTipo(),
            $keys[3] => $this->getTarjetapuntosdetalleCantidad(),
            $keys[4] => $this->getIdventa(),
            $keys[5] => $this->getIdempleado(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aEmpleado) {
                $result['Empleado'] = $this->aEmpleado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aTarjetapuntos) {
                $result['Tarjetapuntos'] = $this->aTarjetapuntos->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aVenta) {
                $result['Venta'] = $this->aVenta->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = TarjetapuntosdetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdtarjetapuntosdetalle($value);
                break;
            case 1:
                $this->setIdtarjetapuntos($value);
                break;
            case 2:
                $this->setTarjetapuntosdetalleTipo($value);
                break;
            case 3:
                $this->setTarjetapuntosdetalleCantidad($value);
                break;
            case 4:
                $this->setIdventa($value);
                break;
            case 5:
                $this->setIdempleado($value);
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
        $keys = TarjetapuntosdetallePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdtarjetapuntosdetalle($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdtarjetapuntos($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTarjetapuntosdetalleTipo($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTarjetapuntosdetalleCantidad($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdventa($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdempleado($arr[$keys[5]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TarjetapuntosdetallePeer::DATABASE_NAME);

        if ($this->isColumnModified(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE)) $criteria->add(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE, $this->idtarjetapuntosdetalle);
        if ($this->isColumnModified(TarjetapuntosdetallePeer::IDTARJETAPUNTOS)) $criteria->add(TarjetapuntosdetallePeer::IDTARJETAPUNTOS, $this->idtarjetapuntos);
        if ($this->isColumnModified(TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_TIPO)) $criteria->add(TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_TIPO, $this->tarjetapuntosdetalle_tipo);
        if ($this->isColumnModified(TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_CANTIDAD)) $criteria->add(TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_CANTIDAD, $this->tarjetapuntosdetalle_cantidad);
        if ($this->isColumnModified(TarjetapuntosdetallePeer::IDVENTA)) $criteria->add(TarjetapuntosdetallePeer::IDVENTA, $this->idventa);
        if ($this->isColumnModified(TarjetapuntosdetallePeer::IDEMPLEADO)) $criteria->add(TarjetapuntosdetallePeer::IDEMPLEADO, $this->idempleado);

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
        $criteria = new Criteria(TarjetapuntosdetallePeer::DATABASE_NAME);
        $criteria->add(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE, $this->idtarjetapuntosdetalle);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdtarjetapuntosdetalle();
    }

    /**
     * Generic method to set the primary key (idtarjetapuntosdetalle column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdtarjetapuntosdetalle($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdtarjetapuntosdetalle();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Tarjetapuntosdetalle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdtarjetapuntos($this->getIdtarjetapuntos());
        $copyObj->setTarjetapuntosdetalleTipo($this->getTarjetapuntosdetalleTipo());
        $copyObj->setTarjetapuntosdetalleCantidad($this->getTarjetapuntosdetalleCantidad());
        $copyObj->setIdventa($this->getIdventa());
        $copyObj->setIdempleado($this->getIdempleado());

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
            $copyObj->setIdtarjetapuntosdetalle(NULL); // this is a auto-increment column, so set to default value
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
     * @return Tarjetapuntosdetalle Clone of current object.
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
     * @return TarjetapuntosdetallePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TarjetapuntosdetallePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Tarjetapuntosdetalle The current object (for fluent API support)
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
            $v->addTarjetapuntosdetalle($this);
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
                $this->aEmpleado->addTarjetapuntosdetalles($this);
             */
        }

        return $this->aEmpleado;
    }

    /**
     * Declares an association between this object and a Tarjetapuntos object.
     *
     * @param                  Tarjetapuntos $v
     * @return Tarjetapuntosdetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setTarjetapuntos(Tarjetapuntos $v = null)
    {
        if ($v === null) {
            $this->setIdtarjetapuntos(NULL);
        } else {
            $this->setIdtarjetapuntos($v->getIdtarjetapuntos());
        }

        $this->aTarjetapuntos = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Tarjetapuntos object, it will not be re-added.
        if ($v !== null) {
            $v->addTarjetapuntosdetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Tarjetapuntos object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Tarjetapuntos The associated Tarjetapuntos object.
     * @throws PropelException
     */
    public function getTarjetapuntos(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aTarjetapuntos === null && ($this->idtarjetapuntos !== null) && $doQuery) {
            $this->aTarjetapuntos = TarjetapuntosQuery::create()->findPk($this->idtarjetapuntos, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aTarjetapuntos->addTarjetapuntosdetalles($this);
             */
        }

        return $this->aTarjetapuntos;
    }

    /**
     * Declares an association between this object and a Venta object.
     *
     * @param                  Venta $v
     * @return Tarjetapuntosdetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setVenta(Venta $v = null)
    {
        if ($v === null) {
            $this->setIdventa(NULL);
        } else {
            $this->setIdventa($v->getIdventa());
        }

        $this->aVenta = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Venta object, it will not be re-added.
        if ($v !== null) {
            $v->addTarjetapuntosdetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Venta object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Venta The associated Venta object.
     * @throws PropelException
     */
    public function getVenta(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aVenta === null && ($this->idventa !== null) && $doQuery) {
            $this->aVenta = VentaQuery::create()->findPk($this->idventa, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aVenta->addTarjetapuntosdetalles($this);
             */
        }

        return $this->aVenta;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idtarjetapuntosdetalle = null;
        $this->idtarjetapuntos = null;
        $this->tarjetapuntosdetalle_tipo = null;
        $this->tarjetapuntosdetalle_cantidad = null;
        $this->idventa = null;
        $this->idempleado = null;
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
            if ($this->aEmpleado instanceof Persistent) {
              $this->aEmpleado->clearAllReferences($deep);
            }
            if ($this->aTarjetapuntos instanceof Persistent) {
              $this->aTarjetapuntos->clearAllReferences($deep);
            }
            if ($this->aVenta instanceof Persistent) {
              $this->aVenta->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aEmpleado = null;
        $this->aTarjetapuntos = null;
        $this->aVenta = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TarjetapuntosdetallePeer::DEFAULT_STRING_FORMAT);
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
