<?php


/**
 * Base class that represents a row from the 'medida' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseMedida extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'MedidaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        MedidaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idmedida field.
     * @var        int
     */
    protected $idmedida;

    /**
     * The value for the medida_nombre field.
     * @var        boolean
     */
    protected $medida_nombre;

    /**
     * The value for the medida_xs field.
     * @var        boolean
     */
    protected $medida_xs;

    /**
     * The value for the medida_s field.
     * @var        boolean
     */
    protected $medida_s;

    /**
     * The value for the medida_m field.
     * @var        boolean
     */
    protected $medida_m;

    /**
     * The value for the medida_l field.
     * @var        boolean
     */
    protected $medida_l;

    /**
     * The value for the medida_xl field.
     * @var        boolean
     */
    protected $medida_xl;

    /**
     * The value for the medida_xxl field.
     * @var        boolean
     */
    protected $medida_xxl;

    /**
     * The value for the medida_unitalla field.
     * @var        string
     */
    protected $medida_unitalla;

    /**
     * @var        PropelObjectCollection|Productomedida[] Collection to store aggregation of Productomedida objects.
     */
    protected $collProductomedidas;
    protected $collProductomedidasPartial;

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
    protected $productomedidasScheduledForDeletion = null;

    /**
     * Get the [idmedida] column value.
     *
     * @return int
     */
    public function getIdmedida()
    {

        return $this->idmedida;
    }

    /**
     * Get the [medida_nombre] column value.
     *
     * @return boolean
     */
    public function getMedidaNombre()
    {

        return $this->medida_nombre;
    }

    /**
     * Get the [medida_xs] column value.
     *
     * @return boolean
     */
    public function getMedidaXs()
    {

        return $this->medida_xs;
    }

    /**
     * Get the [medida_s] column value.
     *
     * @return boolean
     */
    public function getMedidaS()
    {

        return $this->medida_s;
    }

    /**
     * Get the [medida_m] column value.
     *
     * @return boolean
     */
    public function getMedidaM()
    {

        return $this->medida_m;
    }

    /**
     * Get the [medida_l] column value.
     *
     * @return boolean
     */
    public function getMedidaL()
    {

        return $this->medida_l;
    }

    /**
     * Get the [medida_xl] column value.
     *
     * @return boolean
     */
    public function getMedidaXl()
    {

        return $this->medida_xl;
    }

    /**
     * Get the [medida_xxl] column value.
     *
     * @return boolean
     */
    public function getMedidaXxl()
    {

        return $this->medida_xxl;
    }

    /**
     * Get the [medida_unitalla] column value.
     *
     * @return string
     */
    public function getMedidaUnitalla()
    {

        return $this->medida_unitalla;
    }

    /**
     * Set the value of [idmedida] column.
     *
     * @param  int $v new value
     * @return Medida The current object (for fluent API support)
     */
    public function setIdmedida($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmedida !== $v) {
            $this->idmedida = $v;
            $this->modifiedColumns[] = MedidaPeer::IDMEDIDA;
        }


        return $this;
    } // setIdmedida()

    /**
     * Sets the value of the [medida_nombre] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Medida The current object (for fluent API support)
     */
    public function setMedidaNombre($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->medida_nombre !== $v) {
            $this->medida_nombre = $v;
            $this->modifiedColumns[] = MedidaPeer::MEDIDA_NOMBRE;
        }


        return $this;
    } // setMedidaNombre()

    /**
     * Sets the value of the [medida_xs] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Medida The current object (for fluent API support)
     */
    public function setMedidaXs($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->medida_xs !== $v) {
            $this->medida_xs = $v;
            $this->modifiedColumns[] = MedidaPeer::MEDIDA_XS;
        }


        return $this;
    } // setMedidaXs()

    /**
     * Sets the value of the [medida_s] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Medida The current object (for fluent API support)
     */
    public function setMedidaS($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->medida_s !== $v) {
            $this->medida_s = $v;
            $this->modifiedColumns[] = MedidaPeer::MEDIDA_S;
        }


        return $this;
    } // setMedidaS()

    /**
     * Sets the value of the [medida_m] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Medida The current object (for fluent API support)
     */
    public function setMedidaM($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->medida_m !== $v) {
            $this->medida_m = $v;
            $this->modifiedColumns[] = MedidaPeer::MEDIDA_M;
        }


        return $this;
    } // setMedidaM()

    /**
     * Sets the value of the [medida_l] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Medida The current object (for fluent API support)
     */
    public function setMedidaL($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->medida_l !== $v) {
            $this->medida_l = $v;
            $this->modifiedColumns[] = MedidaPeer::MEDIDA_L;
        }


        return $this;
    } // setMedidaL()

    /**
     * Sets the value of the [medida_xl] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Medida The current object (for fluent API support)
     */
    public function setMedidaXl($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->medida_xl !== $v) {
            $this->medida_xl = $v;
            $this->modifiedColumns[] = MedidaPeer::MEDIDA_XL;
        }


        return $this;
    } // setMedidaXl()

    /**
     * Sets the value of the [medida_xxl] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Medida The current object (for fluent API support)
     */
    public function setMedidaXxl($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->medida_xxl !== $v) {
            $this->medida_xxl = $v;
            $this->modifiedColumns[] = MedidaPeer::MEDIDA_XXL;
        }


        return $this;
    } // setMedidaXxl()

    /**
     * Set the value of [medida_unitalla] column.
     *
     * @param  string $v new value
     * @return Medida The current object (for fluent API support)
     */
    public function setMedidaUnitalla($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->medida_unitalla !== $v) {
            $this->medida_unitalla = $v;
            $this->modifiedColumns[] = MedidaPeer::MEDIDA_UNITALLA;
        }


        return $this;
    } // setMedidaUnitalla()

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

            $this->idmedida = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->medida_nombre = ($row[$startcol + 1] !== null) ? (boolean) $row[$startcol + 1] : null;
            $this->medida_xs = ($row[$startcol + 2] !== null) ? (boolean) $row[$startcol + 2] : null;
            $this->medida_s = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->medida_m = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->medida_l = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
            $this->medida_xl = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->medida_xxl = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->medida_unitalla = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 9; // 9 = MedidaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Medida object", $e);
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
            $con = Propel::getConnection(MedidaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = MedidaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collProductomedidas = null;

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
            $con = Propel::getConnection(MedidaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = MedidaQuery::create()
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
            $con = Propel::getConnection(MedidaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                MedidaPeer::addInstanceToPool($this);
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

            if ($this->productomedidasScheduledForDeletion !== null) {
                if (!$this->productomedidasScheduledForDeletion->isEmpty()) {
                    ProductomedidaQuery::create()
                        ->filterByPrimaryKeys($this->productomedidasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->productomedidasScheduledForDeletion = null;
                }
            }

            if ($this->collProductomedidas !== null) {
                foreach ($this->collProductomedidas as $referrerFK) {
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

        $this->modifiedColumns[] = MedidaPeer::IDMEDIDA;
        if (null !== $this->idmedida) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . MedidaPeer::IDMEDIDA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(MedidaPeer::IDMEDIDA)) {
            $modifiedColumns[':p' . $index++]  = '`idmedida`';
        }
        if ($this->isColumnModified(MedidaPeer::MEDIDA_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`medida_nombre`';
        }
        if ($this->isColumnModified(MedidaPeer::MEDIDA_XS)) {
            $modifiedColumns[':p' . $index++]  = '`medida_xs`';
        }
        if ($this->isColumnModified(MedidaPeer::MEDIDA_S)) {
            $modifiedColumns[':p' . $index++]  = '`medida_s`';
        }
        if ($this->isColumnModified(MedidaPeer::MEDIDA_M)) {
            $modifiedColumns[':p' . $index++]  = '`medida_m`';
        }
        if ($this->isColumnModified(MedidaPeer::MEDIDA_L)) {
            $modifiedColumns[':p' . $index++]  = '`medida_l`';
        }
        if ($this->isColumnModified(MedidaPeer::MEDIDA_XL)) {
            $modifiedColumns[':p' . $index++]  = '`medida_xl`';
        }
        if ($this->isColumnModified(MedidaPeer::MEDIDA_XXL)) {
            $modifiedColumns[':p' . $index++]  = '`medida_xxl`';
        }
        if ($this->isColumnModified(MedidaPeer::MEDIDA_UNITALLA)) {
            $modifiedColumns[':p' . $index++]  = '`medida_unitalla`';
        }

        $sql = sprintf(
            'INSERT INTO `medida` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idmedida`':
                        $stmt->bindValue($identifier, $this->idmedida, PDO::PARAM_INT);
                        break;
                    case '`medida_nombre`':
                        $stmt->bindValue($identifier, (int) $this->medida_nombre, PDO::PARAM_INT);
                        break;
                    case '`medida_xs`':
                        $stmt->bindValue($identifier, (int) $this->medida_xs, PDO::PARAM_INT);
                        break;
                    case '`medida_s`':
                        $stmt->bindValue($identifier, (int) $this->medida_s, PDO::PARAM_INT);
                        break;
                    case '`medida_m`':
                        $stmt->bindValue($identifier, (int) $this->medida_m, PDO::PARAM_INT);
                        break;
                    case '`medida_l`':
                        $stmt->bindValue($identifier, (int) $this->medida_l, PDO::PARAM_INT);
                        break;
                    case '`medida_xl`':
                        $stmt->bindValue($identifier, (int) $this->medida_xl, PDO::PARAM_INT);
                        break;
                    case '`medida_xxl`':
                        $stmt->bindValue($identifier, (int) $this->medida_xxl, PDO::PARAM_INT);
                        break;
                    case '`medida_unitalla`':
                        $stmt->bindValue($identifier, $this->medida_unitalla, PDO::PARAM_STR);
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
        $this->setIdmedida($pk);

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


            if (($retval = MedidaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collProductomedidas !== null) {
                    foreach ($this->collProductomedidas as $referrerFK) {
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
        $pos = MedidaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdmedida();
                break;
            case 1:
                return $this->getMedidaNombre();
                break;
            case 2:
                return $this->getMedidaXs();
                break;
            case 3:
                return $this->getMedidaS();
                break;
            case 4:
                return $this->getMedidaM();
                break;
            case 5:
                return $this->getMedidaL();
                break;
            case 6:
                return $this->getMedidaXl();
                break;
            case 7:
                return $this->getMedidaXxl();
                break;
            case 8:
                return $this->getMedidaUnitalla();
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
        if (isset($alreadyDumpedObjects['Medida'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Medida'][$this->getPrimaryKey()] = true;
        $keys = MedidaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdmedida(),
            $keys[1] => $this->getMedidaNombre(),
            $keys[2] => $this->getMedidaXs(),
            $keys[3] => $this->getMedidaS(),
            $keys[4] => $this->getMedidaM(),
            $keys[5] => $this->getMedidaL(),
            $keys[6] => $this->getMedidaXl(),
            $keys[7] => $this->getMedidaXxl(),
            $keys[8] => $this->getMedidaUnitalla(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collProductomedidas) {
                $result['Productomedidas'] = $this->collProductomedidas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = MedidaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdmedida($value);
                break;
            case 1:
                $this->setMedidaNombre($value);
                break;
            case 2:
                $this->setMedidaXs($value);
                break;
            case 3:
                $this->setMedidaS($value);
                break;
            case 4:
                $this->setMedidaM($value);
                break;
            case 5:
                $this->setMedidaL($value);
                break;
            case 6:
                $this->setMedidaXl($value);
                break;
            case 7:
                $this->setMedidaXxl($value);
                break;
            case 8:
                $this->setMedidaUnitalla($value);
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
        $keys = MedidaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdmedida($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setMedidaNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMedidaXs($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMedidaS($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMedidaM($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMedidaL($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setMedidaXl($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setMedidaXxl($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setMedidaUnitalla($arr[$keys[8]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(MedidaPeer::DATABASE_NAME);

        if ($this->isColumnModified(MedidaPeer::IDMEDIDA)) $criteria->add(MedidaPeer::IDMEDIDA, $this->idmedida);
        if ($this->isColumnModified(MedidaPeer::MEDIDA_NOMBRE)) $criteria->add(MedidaPeer::MEDIDA_NOMBRE, $this->medida_nombre);
        if ($this->isColumnModified(MedidaPeer::MEDIDA_XS)) $criteria->add(MedidaPeer::MEDIDA_XS, $this->medida_xs);
        if ($this->isColumnModified(MedidaPeer::MEDIDA_S)) $criteria->add(MedidaPeer::MEDIDA_S, $this->medida_s);
        if ($this->isColumnModified(MedidaPeer::MEDIDA_M)) $criteria->add(MedidaPeer::MEDIDA_M, $this->medida_m);
        if ($this->isColumnModified(MedidaPeer::MEDIDA_L)) $criteria->add(MedidaPeer::MEDIDA_L, $this->medida_l);
        if ($this->isColumnModified(MedidaPeer::MEDIDA_XL)) $criteria->add(MedidaPeer::MEDIDA_XL, $this->medida_xl);
        if ($this->isColumnModified(MedidaPeer::MEDIDA_XXL)) $criteria->add(MedidaPeer::MEDIDA_XXL, $this->medida_xxl);
        if ($this->isColumnModified(MedidaPeer::MEDIDA_UNITALLA)) $criteria->add(MedidaPeer::MEDIDA_UNITALLA, $this->medida_unitalla);

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
        $criteria = new Criteria(MedidaPeer::DATABASE_NAME);
        $criteria->add(MedidaPeer::IDMEDIDA, $this->idmedida);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdmedida();
    }

    /**
     * Generic method to set the primary key (idmedida column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdmedida($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdmedida();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Medida (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setMedidaNombre($this->getMedidaNombre());
        $copyObj->setMedidaXs($this->getMedidaXs());
        $copyObj->setMedidaS($this->getMedidaS());
        $copyObj->setMedidaM($this->getMedidaM());
        $copyObj->setMedidaL($this->getMedidaL());
        $copyObj->setMedidaXl($this->getMedidaXl());
        $copyObj->setMedidaXxl($this->getMedidaXxl());
        $copyObj->setMedidaUnitalla($this->getMedidaUnitalla());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getProductomedidas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProductomedida($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdmedida(NULL); // this is a auto-increment column, so set to default value
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
     * @return Medida Clone of current object.
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
     * @return MedidaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new MedidaPeer();
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
        if ('Productomedida' == $relationName) {
            $this->initProductomedidas();
        }
    }

    /**
     * Clears out the collProductomedidas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Medida The current object (for fluent API support)
     * @see        addProductomedidas()
     */
    public function clearProductomedidas()
    {
        $this->collProductomedidas = null; // important to set this to null since that means it is uninitialized
        $this->collProductomedidasPartial = null;

        return $this;
    }

    /**
     * reset is the collProductomedidas collection loaded partially
     *
     * @return void
     */
    public function resetPartialProductomedidas($v = true)
    {
        $this->collProductomedidasPartial = $v;
    }

    /**
     * Initializes the collProductomedidas collection.
     *
     * By default this just sets the collProductomedidas collection to an empty array (like clearcollProductomedidas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProductomedidas($overrideExisting = true)
    {
        if (null !== $this->collProductomedidas && !$overrideExisting) {
            return;
        }
        $this->collProductomedidas = new PropelObjectCollection();
        $this->collProductomedidas->setModel('Productomedida');
    }

    /**
     * Gets an array of Productomedida objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Medida is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Productomedida[] List of Productomedida objects
     * @throws PropelException
     */
    public function getProductomedidas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProductomedidasPartial && !$this->isNew();
        if (null === $this->collProductomedidas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProductomedidas) {
                // return empty collection
                $this->initProductomedidas();
            } else {
                $collProductomedidas = ProductomedidaQuery::create(null, $criteria)
                    ->filterByMedida($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProductomedidasPartial && count($collProductomedidas)) {
                      $this->initProductomedidas(false);

                      foreach ($collProductomedidas as $obj) {
                        if (false == $this->collProductomedidas->contains($obj)) {
                          $this->collProductomedidas->append($obj);
                        }
                      }

                      $this->collProductomedidasPartial = true;
                    }

                    $collProductomedidas->getInternalIterator()->rewind();

                    return $collProductomedidas;
                }

                if ($partial && $this->collProductomedidas) {
                    foreach ($this->collProductomedidas as $obj) {
                        if ($obj->isNew()) {
                            $collProductomedidas[] = $obj;
                        }
                    }
                }

                $this->collProductomedidas = $collProductomedidas;
                $this->collProductomedidasPartial = false;
            }
        }

        return $this->collProductomedidas;
    }

    /**
     * Sets a collection of Productomedida objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $productomedidas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Medida The current object (for fluent API support)
     */
    public function setProductomedidas(PropelCollection $productomedidas, PropelPDO $con = null)
    {
        $productomedidasToDelete = $this->getProductomedidas(new Criteria(), $con)->diff($productomedidas);


        $this->productomedidasScheduledForDeletion = $productomedidasToDelete;

        foreach ($productomedidasToDelete as $productomedidaRemoved) {
            $productomedidaRemoved->setMedida(null);
        }

        $this->collProductomedidas = null;
        foreach ($productomedidas as $productomedida) {
            $this->addProductomedida($productomedida);
        }

        $this->collProductomedidas = $productomedidas;
        $this->collProductomedidasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Productomedida objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Productomedida objects.
     * @throws PropelException
     */
    public function countProductomedidas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProductomedidasPartial && !$this->isNew();
        if (null === $this->collProductomedidas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProductomedidas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProductomedidas());
            }
            $query = ProductomedidaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByMedida($this)
                ->count($con);
        }

        return count($this->collProductomedidas);
    }

    /**
     * Method called to associate a Productomedida object to this object
     * through the Productomedida foreign key attribute.
     *
     * @param    Productomedida $l Productomedida
     * @return Medida The current object (for fluent API support)
     */
    public function addProductomedida(Productomedida $l)
    {
        if ($this->collProductomedidas === null) {
            $this->initProductomedidas();
            $this->collProductomedidasPartial = true;
        }

        if (!in_array($l, $this->collProductomedidas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProductomedida($l);

            if ($this->productomedidasScheduledForDeletion and $this->productomedidasScheduledForDeletion->contains($l)) {
                $this->productomedidasScheduledForDeletion->remove($this->productomedidasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Productomedida $productomedida The productomedida object to add.
     */
    protected function doAddProductomedida($productomedida)
    {
        $this->collProductomedidas[]= $productomedida;
        $productomedida->setMedida($this);
    }

    /**
     * @param	Productomedida $productomedida The productomedida object to remove.
     * @return Medida The current object (for fluent API support)
     */
    public function removeProductomedida($productomedida)
    {
        if ($this->getProductomedidas()->contains($productomedida)) {
            $this->collProductomedidas->remove($this->collProductomedidas->search($productomedida));
            if (null === $this->productomedidasScheduledForDeletion) {
                $this->productomedidasScheduledForDeletion = clone $this->collProductomedidas;
                $this->productomedidasScheduledForDeletion->clear();
            }
            $this->productomedidasScheduledForDeletion[]= clone $productomedida;
            $productomedida->setMedida(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Medida is new, it will return
     * an empty collection; or if this Medida has previously
     * been saved, it will retrieve related Productomedidas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Medida.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productomedida[] List of Productomedida objects
     */
    public function getProductomedidasJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductomedidaQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getProductomedidas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idmedida = null;
        $this->medida_nombre = null;
        $this->medida_xs = null;
        $this->medida_s = null;
        $this->medida_m = null;
        $this->medida_l = null;
        $this->medida_xl = null;
        $this->medida_xxl = null;
        $this->medida_unitalla = null;
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
            if ($this->collProductomedidas) {
                foreach ($this->collProductomedidas as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collProductomedidas instanceof PropelCollection) {
            $this->collProductomedidas->clearIterator();
        }
        $this->collProductomedidas = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(MedidaPeer::DEFAULT_STRING_FORMAT);
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
