<?php


/**
 * Base class that represents a row from the 'descuento' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseDescuento extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DescuentoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DescuentoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the iddescuento field.
     * @var        int
     */
    protected $iddescuento;

    /**
     * The value for the descuento_nombre field.
     * @var        string
     */
    protected $descuento_nombre;

    /**
     * The value for the descuento_fechainicio field.
     * @var        string
     */
    protected $descuento_fechainicio;

    /**
     * The value for the descuento_fechafin field.
     * @var        string
     */
    protected $descuento_fechafin;

    /**
     * The value for the descuento_estatus field.
     * @var        boolean
     */
    protected $descuento_estatus;

    /**
     * The value for the descuento_tipo field.
     * @var        string
     */
    protected $descuento_tipo;

    /**
     * The value for the descuento_descripcion field.
     * @var        string
     */
    protected $descuento_descripcion;

    /**
     * The value for the descuento_cantidad field.
     * @var        string
     */
    protected $descuento_cantidad;

    /**
     * @var        PropelObjectCollection|Descuentodetalle[] Collection to store aggregation of Descuentodetalle objects.
     */
    protected $collDescuentodetalles;
    protected $collDescuentodetallesPartial;

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
    protected $descuentodetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ventadetallesScheduledForDeletion = null;

    /**
     * Get the [iddescuento] column value.
     *
     * @return int
     */
    public function getIddescuento()
    {

        return $this->iddescuento;
    }

    /**
     * Get the [descuento_nombre] column value.
     *
     * @return string
     */
    public function getDescuentoNombre()
    {

        return $this->descuento_nombre;
    }

    /**
     * Get the [optionally formatted] temporal [descuento_fechainicio] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDescuentoFechainicio($format = '%x')
    {
        if ($this->descuento_fechainicio === null) {
            return null;
        }

        if ($this->descuento_fechainicio === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->descuento_fechainicio);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->descuento_fechainicio, true), $x);
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
     * Get the [optionally formatted] temporal [descuento_fechafin] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDescuentoFechafin($format = '%x')
    {
        if ($this->descuento_fechafin === null) {
            return null;
        }

        if ($this->descuento_fechafin === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->descuento_fechafin);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->descuento_fechafin, true), $x);
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
     * Get the [descuento_estatus] column value.
     *
     * @return boolean
     */
    public function getDescuentoEstatus()
    {

        return $this->descuento_estatus;
    }

    /**
     * Get the [descuento_tipo] column value.
     *
     * @return string
     */
    public function getDescuentoTipo()
    {

        return $this->descuento_tipo;
    }

    /**
     * Get the [descuento_descripcion] column value.
     *
     * @return string
     */
    public function getDescuentoDescripcion()
    {

        return $this->descuento_descripcion;
    }

    /**
     * Get the [descuento_cantidad] column value.
     *
     * @return string
     */
    public function getDescuentoCantidad()
    {

        return $this->descuento_cantidad;
    }

    /**
     * Set the value of [iddescuento] column.
     *
     * @param  int $v new value
     * @return Descuento The current object (for fluent API support)
     */
    public function setIddescuento($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->iddescuento !== $v) {
            $this->iddescuento = $v;
            $this->modifiedColumns[] = DescuentoPeer::IDDESCUENTO;
        }


        return $this;
    } // setIddescuento()

    /**
     * Set the value of [descuento_nombre] column.
     *
     * @param  string $v new value
     * @return Descuento The current object (for fluent API support)
     */
    public function setDescuentoNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->descuento_nombre !== $v) {
            $this->descuento_nombre = $v;
            $this->modifiedColumns[] = DescuentoPeer::DESCUENTO_NOMBRE;
        }


        return $this;
    } // setDescuentoNombre()

    /**
     * Sets the value of [descuento_fechainicio] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Descuento The current object (for fluent API support)
     */
    public function setDescuentoFechainicio($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->descuento_fechainicio !== null || $dt !== null) {
            $currentDateAsString = ($this->descuento_fechainicio !== null && $tmpDt = new DateTime($this->descuento_fechainicio)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->descuento_fechainicio = $newDateAsString;
                $this->modifiedColumns[] = DescuentoPeer::DESCUENTO_FECHAINICIO;
            }
        } // if either are not null


        return $this;
    } // setDescuentoFechainicio()

    /**
     * Sets the value of [descuento_fechafin] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Descuento The current object (for fluent API support)
     */
    public function setDescuentoFechafin($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->descuento_fechafin !== null || $dt !== null) {
            $currentDateAsString = ($this->descuento_fechafin !== null && $tmpDt = new DateTime($this->descuento_fechafin)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->descuento_fechafin = $newDateAsString;
                $this->modifiedColumns[] = DescuentoPeer::DESCUENTO_FECHAFIN;
            }
        } // if either are not null


        return $this;
    } // setDescuentoFechafin()

    /**
     * Sets the value of the [descuento_estatus] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Descuento The current object (for fluent API support)
     */
    public function setDescuentoEstatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->descuento_estatus !== $v) {
            $this->descuento_estatus = $v;
            $this->modifiedColumns[] = DescuentoPeer::DESCUENTO_ESTATUS;
        }


        return $this;
    } // setDescuentoEstatus()

    /**
     * Set the value of [descuento_tipo] column.
     *
     * @param  string $v new value
     * @return Descuento The current object (for fluent API support)
     */
    public function setDescuentoTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->descuento_tipo !== $v) {
            $this->descuento_tipo = $v;
            $this->modifiedColumns[] = DescuentoPeer::DESCUENTO_TIPO;
        }


        return $this;
    } // setDescuentoTipo()

    /**
     * Set the value of [descuento_descripcion] column.
     *
     * @param  string $v new value
     * @return Descuento The current object (for fluent API support)
     */
    public function setDescuentoDescripcion($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->descuento_descripcion !== $v) {
            $this->descuento_descripcion = $v;
            $this->modifiedColumns[] = DescuentoPeer::DESCUENTO_DESCRIPCION;
        }


        return $this;
    } // setDescuentoDescripcion()

    /**
     * Set the value of [descuento_cantidad] column.
     *
     * @param  string $v new value
     * @return Descuento The current object (for fluent API support)
     */
    public function setDescuentoCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->descuento_cantidad !== $v) {
            $this->descuento_cantidad = $v;
            $this->modifiedColumns[] = DescuentoPeer::DESCUENTO_CANTIDAD;
        }


        return $this;
    } // setDescuentoCantidad()

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

            $this->iddescuento = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->descuento_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->descuento_fechainicio = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->descuento_fechafin = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->descuento_estatus = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->descuento_tipo = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->descuento_descripcion = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->descuento_cantidad = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = DescuentoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Descuento object", $e);
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
            $con = Propel::getConnection(DescuentoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DescuentoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collDescuentodetalles = null;

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
            $con = Propel::getConnection(DescuentoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DescuentoQuery::create()
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
            $con = Propel::getConnection(DescuentoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DescuentoPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = DescuentoPeer::IDDESCUENTO;
        if (null !== $this->iddescuento) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . DescuentoPeer::IDDESCUENTO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DescuentoPeer::IDDESCUENTO)) {
            $modifiedColumns[':p' . $index++]  = '`iddescuento`';
        }
        if ($this->isColumnModified(DescuentoPeer::DESCUENTO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`descuento_nombre`';
        }
        if ($this->isColumnModified(DescuentoPeer::DESCUENTO_FECHAINICIO)) {
            $modifiedColumns[':p' . $index++]  = '`descuento_fechainicio`';
        }
        if ($this->isColumnModified(DescuentoPeer::DESCUENTO_FECHAFIN)) {
            $modifiedColumns[':p' . $index++]  = '`descuento_fechafin`';
        }
        if ($this->isColumnModified(DescuentoPeer::DESCUENTO_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`descuento_estatus`';
        }
        if ($this->isColumnModified(DescuentoPeer::DESCUENTO_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`descuento_tipo`';
        }
        if ($this->isColumnModified(DescuentoPeer::DESCUENTO_DESCRIPCION)) {
            $modifiedColumns[':p' . $index++]  = '`descuento_descripcion`';
        }
        if ($this->isColumnModified(DescuentoPeer::DESCUENTO_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`descuento_cantidad`';
        }

        $sql = sprintf(
            'INSERT INTO `descuento` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`iddescuento`':
                        $stmt->bindValue($identifier, $this->iddescuento, PDO::PARAM_INT);
                        break;
                    case '`descuento_nombre`':
                        $stmt->bindValue($identifier, $this->descuento_nombre, PDO::PARAM_STR);
                        break;
                    case '`descuento_fechainicio`':
                        $stmt->bindValue($identifier, $this->descuento_fechainicio, PDO::PARAM_STR);
                        break;
                    case '`descuento_fechafin`':
                        $stmt->bindValue($identifier, $this->descuento_fechafin, PDO::PARAM_STR);
                        break;
                    case '`descuento_estatus`':
                        $stmt->bindValue($identifier, (int) $this->descuento_estatus, PDO::PARAM_INT);
                        break;
                    case '`descuento_tipo`':
                        $stmt->bindValue($identifier, $this->descuento_tipo, PDO::PARAM_STR);
                        break;
                    case '`descuento_descripcion`':
                        $stmt->bindValue($identifier, $this->descuento_descripcion, PDO::PARAM_STR);
                        break;
                    case '`descuento_cantidad`':
                        $stmt->bindValue($identifier, $this->descuento_cantidad, PDO::PARAM_STR);
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
        $this->setIddescuento($pk);

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


            if (($retval = DescuentoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collDescuentodetalles !== null) {
                    foreach ($this->collDescuentodetalles as $referrerFK) {
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
        $pos = DescuentoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIddescuento();
                break;
            case 1:
                return $this->getDescuentoNombre();
                break;
            case 2:
                return $this->getDescuentoFechainicio();
                break;
            case 3:
                return $this->getDescuentoFechafin();
                break;
            case 4:
                return $this->getDescuentoEstatus();
                break;
            case 5:
                return $this->getDescuentoTipo();
                break;
            case 6:
                return $this->getDescuentoDescripcion();
                break;
            case 7:
                return $this->getDescuentoCantidad();
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
        if (isset($alreadyDumpedObjects['Descuento'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Descuento'][$this->getPrimaryKey()] = true;
        $keys = DescuentoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIddescuento(),
            $keys[1] => $this->getDescuentoNombre(),
            $keys[2] => $this->getDescuentoFechainicio(),
            $keys[3] => $this->getDescuentoFechafin(),
            $keys[4] => $this->getDescuentoEstatus(),
            $keys[5] => $this->getDescuentoTipo(),
            $keys[6] => $this->getDescuentoDescripcion(),
            $keys[7] => $this->getDescuentoCantidad(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collDescuentodetalles) {
                $result['Descuentodetalles'] = $this->collDescuentodetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = DescuentoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIddescuento($value);
                break;
            case 1:
                $this->setDescuentoNombre($value);
                break;
            case 2:
                $this->setDescuentoFechainicio($value);
                break;
            case 3:
                $this->setDescuentoFechafin($value);
                break;
            case 4:
                $this->setDescuentoEstatus($value);
                break;
            case 5:
                $this->setDescuentoTipo($value);
                break;
            case 6:
                $this->setDescuentoDescripcion($value);
                break;
            case 7:
                $this->setDescuentoCantidad($value);
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
        $keys = DescuentoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIddescuento($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setDescuentoNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDescuentoFechainicio($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDescuentoFechafin($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDescuentoEstatus($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDescuentoTipo($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDescuentoDescripcion($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDescuentoCantidad($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DescuentoPeer::DATABASE_NAME);

        if ($this->isColumnModified(DescuentoPeer::IDDESCUENTO)) $criteria->add(DescuentoPeer::IDDESCUENTO, $this->iddescuento);
        if ($this->isColumnModified(DescuentoPeer::DESCUENTO_NOMBRE)) $criteria->add(DescuentoPeer::DESCUENTO_NOMBRE, $this->descuento_nombre);
        if ($this->isColumnModified(DescuentoPeer::DESCUENTO_FECHAINICIO)) $criteria->add(DescuentoPeer::DESCUENTO_FECHAINICIO, $this->descuento_fechainicio);
        if ($this->isColumnModified(DescuentoPeer::DESCUENTO_FECHAFIN)) $criteria->add(DescuentoPeer::DESCUENTO_FECHAFIN, $this->descuento_fechafin);
        if ($this->isColumnModified(DescuentoPeer::DESCUENTO_ESTATUS)) $criteria->add(DescuentoPeer::DESCUENTO_ESTATUS, $this->descuento_estatus);
        if ($this->isColumnModified(DescuentoPeer::DESCUENTO_TIPO)) $criteria->add(DescuentoPeer::DESCUENTO_TIPO, $this->descuento_tipo);
        if ($this->isColumnModified(DescuentoPeer::DESCUENTO_DESCRIPCION)) $criteria->add(DescuentoPeer::DESCUENTO_DESCRIPCION, $this->descuento_descripcion);
        if ($this->isColumnModified(DescuentoPeer::DESCUENTO_CANTIDAD)) $criteria->add(DescuentoPeer::DESCUENTO_CANTIDAD, $this->descuento_cantidad);

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
        $criteria = new Criteria(DescuentoPeer::DATABASE_NAME);
        $criteria->add(DescuentoPeer::IDDESCUENTO, $this->iddescuento);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIddescuento();
    }

    /**
     * Generic method to set the primary key (iddescuento column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIddescuento($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIddescuento();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Descuento (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDescuentoNombre($this->getDescuentoNombre());
        $copyObj->setDescuentoFechainicio($this->getDescuentoFechainicio());
        $copyObj->setDescuentoFechafin($this->getDescuentoFechafin());
        $copyObj->setDescuentoEstatus($this->getDescuentoEstatus());
        $copyObj->setDescuentoTipo($this->getDescuentoTipo());
        $copyObj->setDescuentoDescripcion($this->getDescuentoDescripcion());
        $copyObj->setDescuentoCantidad($this->getDescuentoCantidad());

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
            $copyObj->setIddescuento(NULL); // this is a auto-increment column, so set to default value
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
     * @return Descuento Clone of current object.
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
     * @return DescuentoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DescuentoPeer();
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
        if ('Ventadetalle' == $relationName) {
            $this->initVentadetalles();
        }
    }

    /**
     * Clears out the collDescuentodetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Descuento The current object (for fluent API support)
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
     * If this Descuento is new, it will return
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
                    ->filterByDescuento($this)
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
     * @return Descuento The current object (for fluent API support)
     */
    public function setDescuentodetalles(PropelCollection $descuentodetalles, PropelPDO $con = null)
    {
        $descuentodetallesToDelete = $this->getDescuentodetalles(new Criteria(), $con)->diff($descuentodetalles);


        $this->descuentodetallesScheduledForDeletion = $descuentodetallesToDelete;

        foreach ($descuentodetallesToDelete as $descuentodetalleRemoved) {
            $descuentodetalleRemoved->setDescuento(null);
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
                ->filterByDescuento($this)
                ->count($con);
        }

        return count($this->collDescuentodetalles);
    }

    /**
     * Method called to associate a Descuentodetalle object to this object
     * through the Descuentodetalle foreign key attribute.
     *
     * @param    Descuentodetalle $l Descuentodetalle
     * @return Descuento The current object (for fluent API support)
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
        $descuentodetalle->setDescuento($this);
    }

    /**
     * @param	Descuentodetalle $descuentodetalle The descuentodetalle object to remove.
     * @return Descuento The current object (for fluent API support)
     */
    public function removeDescuentodetalle($descuentodetalle)
    {
        if ($this->getDescuentodetalles()->contains($descuentodetalle)) {
            $this->collDescuentodetalles->remove($this->collDescuentodetalles->search($descuentodetalle));
            if (null === $this->descuentodetallesScheduledForDeletion) {
                $this->descuentodetallesScheduledForDeletion = clone $this->collDescuentodetalles;
                $this->descuentodetallesScheduledForDeletion->clear();
            }
            $this->descuentodetallesScheduledForDeletion[]= clone $descuentodetalle;
            $descuentodetalle->setDescuento(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Descuento is new, it will return
     * an empty collection; or if this Descuento has previously
     * been saved, it will retrieve related Descuentodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Descuento.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Descuentodetalle[] List of Descuentodetalle objects
     */
    public function getDescuentodetallesJoinMarca($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = DescuentodetalleQuery::create(null, $criteria);
        $query->joinWith('Marca', $join_behavior);

        return $this->getDescuentodetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Descuento is new, it will return
     * an empty collection; or if this Descuento has previously
     * been saved, it will retrieve related Descuentodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Descuento.
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
     * Otherwise if this Descuento is new, it will return
     * an empty collection; or if this Descuento has previously
     * been saved, it will retrieve related Descuentodetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Descuento.
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
     * Clears out the collVentadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Descuento The current object (for fluent API support)
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
     * If this Descuento is new, it will return
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
                    ->filterByDescuento($this)
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
     * @return Descuento The current object (for fluent API support)
     */
    public function setVentadetalles(PropelCollection $ventadetalles, PropelPDO $con = null)
    {
        $ventadetallesToDelete = $this->getVentadetalles(new Criteria(), $con)->diff($ventadetalles);


        $this->ventadetallesScheduledForDeletion = $ventadetallesToDelete;

        foreach ($ventadetallesToDelete as $ventadetalleRemoved) {
            $ventadetalleRemoved->setDescuento(null);
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
                ->filterByDescuento($this)
                ->count($con);
        }

        return count($this->collVentadetalles);
    }

    /**
     * Method called to associate a Ventadetalle object to this object
     * through the Ventadetalle foreign key attribute.
     *
     * @param    Ventadetalle $l Ventadetalle
     * @return Descuento The current object (for fluent API support)
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
        $ventadetalle->setDescuento($this);
    }

    /**
     * @param	Ventadetalle $ventadetalle The ventadetalle object to remove.
     * @return Descuento The current object (for fluent API support)
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
            $ventadetalle->setDescuento(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Descuento is new, it will return
     * an empty collection; or if this Descuento has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Descuento.
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
     * Otherwise if this Descuento is new, it will return
     * an empty collection; or if this Descuento has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Descuento.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventadetalle[] List of Ventadetalle objects
     */
    public function getVentadetallesJoinPromocion($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentadetalleQuery::create(null, $criteria);
        $query->joinWith('Promocion', $join_behavior);

        return $this->getVentadetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Descuento is new, it will return
     * an empty collection; or if this Descuento has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Descuento.
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
     * Otherwise if this Descuento is new, it will return
     * an empty collection; or if this Descuento has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Descuento.
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
        $this->iddescuento = null;
        $this->descuento_nombre = null;
        $this->descuento_fechainicio = null;
        $this->descuento_fechafin = null;
        $this->descuento_estatus = null;
        $this->descuento_tipo = null;
        $this->descuento_descripcion = null;
        $this->descuento_cantidad = null;
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
            if ($this->collVentadetalles) {
                foreach ($this->collVentadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collDescuentodetalles instanceof PropelCollection) {
            $this->collDescuentodetalles->clearIterator();
        }
        $this->collDescuentodetalles = null;
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
        return (string) $this->exportTo(DescuentoPeer::DEFAULT_STRING_FORMAT);
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
