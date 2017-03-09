<?php


/**
 * Base class that represents a row from the 'pedido' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BasePedido extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PedidoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PedidoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idpedido field.
     * @var        int
     */
    protected $idpedido;

    /**
     * The value for the idsucursal field.
     * @var        int
     */
    protected $idsucursal;

    /**
     * The value for the pedido_fecha field.
     * @var        string
     */
    protected $pedido_fecha;

    /**
     * The value for the idproducto field.
     * @var        int
     */
    protected $idproducto;

    /**
     * The value for the pedido_cantidad field.
     * @var        int
     */
    protected $pedido_cantidad;

    /**
     * The value for the idproductovariante field.
     * @var        int
     */
    protected $idproductovariante;

    /**
     * The value for the pedido_nota field.
     * @var        string
     */
    protected $pedido_nota;

    /**
     * The value for the pedido_estatus field.
     * Note: this column has a database default value of: 'pendiente'
     * @var        string
     */
    protected $pedido_estatus;

    /**
     * @var        Producto
     */
    protected $aProducto;

    /**
     * @var        Productovariante
     */
    protected $aProductovariante;

    /**
     * @var        Sucursal
     */
    protected $aSucursal;

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
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->pedido_estatus = 'pendiente';
    }

    /**
     * Initializes internal state of BasePedido object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [idpedido] column value.
     *
     * @return int
     */
    public function getIdpedido()
    {

        return $this->idpedido;
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
     * Get the [optionally formatted] temporal [pedido_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getPedidoFecha($format = '%x')
    {
        if ($this->pedido_fecha === null) {
            return null;
        }

        if ($this->pedido_fecha === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->pedido_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->pedido_fecha, true), $x);
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
     * Get the [idproducto] column value.
     *
     * @return int
     */
    public function getIdproducto()
    {

        return $this->idproducto;
    }

    /**
     * Get the [pedido_cantidad] column value.
     *
     * @return int
     */
    public function getPedidoCantidad()
    {

        return $this->pedido_cantidad;
    }

    /**
     * Get the [idproductovariante] column value.
     *
     * @return int
     */
    public function getIdproductovariante()
    {

        return $this->idproductovariante;
    }

    /**
     * Get the [pedido_nota] column value.
     *
     * @return string
     */
    public function getPedidoNota()
    {

        return $this->pedido_nota;
    }

    /**
     * Get the [pedido_estatus] column value.
     *
     * @return string
     */
    public function getPedidoEstatus()
    {

        return $this->pedido_estatus;
    }

    /**
     * Set the value of [idpedido] column.
     *
     * @param  int $v new value
     * @return Pedido The current object (for fluent API support)
     */
    public function setIdpedido($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpedido !== $v) {
            $this->idpedido = $v;
            $this->modifiedColumns[] = PedidoPeer::IDPEDIDO;
        }


        return $this;
    } // setIdpedido()

    /**
     * Set the value of [idsucursal] column.
     *
     * @param  int $v new value
     * @return Pedido The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = PedidoPeer::IDSUCURSAL;
        }

        if ($this->aSucursal !== null && $this->aSucursal->getIdsucursal() !== $v) {
            $this->aSucursal = null;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Sets the value of [pedido_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Pedido The current object (for fluent API support)
     */
    public function setPedidoFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->pedido_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->pedido_fecha !== null && $tmpDt = new DateTime($this->pedido_fecha)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->pedido_fecha = $newDateAsString;
                $this->modifiedColumns[] = PedidoPeer::PEDIDO_FECHA;
            }
        } // if either are not null


        return $this;
    } // setPedidoFecha()

    /**
     * Set the value of [idproducto] column.
     *
     * @param  int $v new value
     * @return Pedido The current object (for fluent API support)
     */
    public function setIdproducto($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproducto !== $v) {
            $this->idproducto = $v;
            $this->modifiedColumns[] = PedidoPeer::IDPRODUCTO;
        }

        if ($this->aProducto !== null && $this->aProducto->getIdproducto() !== $v) {
            $this->aProducto = null;
        }


        return $this;
    } // setIdproducto()

    /**
     * Set the value of [pedido_cantidad] column.
     *
     * @param  int $v new value
     * @return Pedido The current object (for fluent API support)
     */
    public function setPedidoCantidad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->pedido_cantidad !== $v) {
            $this->pedido_cantidad = $v;
            $this->modifiedColumns[] = PedidoPeer::PEDIDO_CANTIDAD;
        }


        return $this;
    } // setPedidoCantidad()

    /**
     * Set the value of [idproductovariante] column.
     *
     * @param  int $v new value
     * @return Pedido The current object (for fluent API support)
     */
    public function setIdproductovariante($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproductovariante !== $v) {
            $this->idproductovariante = $v;
            $this->modifiedColumns[] = PedidoPeer::IDPRODUCTOVARIANTE;
        }

        if ($this->aProductovariante !== null && $this->aProductovariante->getIdproductovariante() !== $v) {
            $this->aProductovariante = null;
        }


        return $this;
    } // setIdproductovariante()

    /**
     * Set the value of [pedido_nota] column.
     *
     * @param  string $v new value
     * @return Pedido The current object (for fluent API support)
     */
    public function setPedidoNota($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pedido_nota !== $v) {
            $this->pedido_nota = $v;
            $this->modifiedColumns[] = PedidoPeer::PEDIDO_NOTA;
        }


        return $this;
    } // setPedidoNota()

    /**
     * Set the value of [pedido_estatus] column.
     *
     * @param  string $v new value
     * @return Pedido The current object (for fluent API support)
     */
    public function setPedidoEstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->pedido_estatus !== $v) {
            $this->pedido_estatus = $v;
            $this->modifiedColumns[] = PedidoPeer::PEDIDO_ESTATUS;
        }


        return $this;
    } // setPedidoEstatus()

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
            if ($this->pedido_estatus !== 'pendiente') {
                return false;
            }

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

            $this->idpedido = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idsucursal = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->pedido_fecha = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->idproducto = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->pedido_cantidad = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->idproductovariante = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->pedido_nota = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->pedido_estatus = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = PedidoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Pedido object", $e);
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
        if ($this->aProducto !== null && $this->idproducto !== $this->aProducto->getIdproducto()) {
            $this->aProducto = null;
        }
        if ($this->aProductovariante !== null && $this->idproductovariante !== $this->aProductovariante->getIdproductovariante()) {
            $this->aProductovariante = null;
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
            $con = Propel::getConnection(PedidoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PedidoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aProducto = null;
            $this->aProductovariante = null;
            $this->aSucursal = null;
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
            $con = Propel::getConnection(PedidoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PedidoQuery::create()
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
            $con = Propel::getConnection(PedidoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PedidoPeer::addInstanceToPool($this);
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

            if ($this->aProducto !== null) {
                if ($this->aProducto->isModified() || $this->aProducto->isNew()) {
                    $affectedRows += $this->aProducto->save($con);
                }
                $this->setProducto($this->aProducto);
            }

            if ($this->aProductovariante !== null) {
                if ($this->aProductovariante->isModified() || $this->aProductovariante->isNew()) {
                    $affectedRows += $this->aProductovariante->save($con);
                }
                $this->setProductovariante($this->aProductovariante);
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

        $this->modifiedColumns[] = PedidoPeer::IDPEDIDO;
        if (null !== $this->idpedido) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PedidoPeer::IDPEDIDO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PedidoPeer::IDPEDIDO)) {
            $modifiedColumns[':p' . $index++]  = '`idpedido`';
        }
        if ($this->isColumnModified(PedidoPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(PedidoPeer::PEDIDO_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`pedido_fecha`';
        }
        if ($this->isColumnModified(PedidoPeer::IDPRODUCTO)) {
            $modifiedColumns[':p' . $index++]  = '`idproducto`';
        }
        if ($this->isColumnModified(PedidoPeer::PEDIDO_CANTIDAD)) {
            $modifiedColumns[':p' . $index++]  = '`pedido_cantidad`';
        }
        if ($this->isColumnModified(PedidoPeer::IDPRODUCTOVARIANTE)) {
            $modifiedColumns[':p' . $index++]  = '`idproductovariante`';
        }
        if ($this->isColumnModified(PedidoPeer::PEDIDO_NOTA)) {
            $modifiedColumns[':p' . $index++]  = '`pedido_nota`';
        }
        if ($this->isColumnModified(PedidoPeer::PEDIDO_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`pedido_estatus`';
        }

        $sql = sprintf(
            'INSERT INTO `pedido` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idpedido`':
                        $stmt->bindValue($identifier, $this->idpedido, PDO::PARAM_INT);
                        break;
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`pedido_fecha`':
                        $stmt->bindValue($identifier, $this->pedido_fecha, PDO::PARAM_STR);
                        break;
                    case '`idproducto`':
                        $stmt->bindValue($identifier, $this->idproducto, PDO::PARAM_INT);
                        break;
                    case '`pedido_cantidad`':
                        $stmt->bindValue($identifier, $this->pedido_cantidad, PDO::PARAM_INT);
                        break;
                    case '`idproductovariante`':
                        $stmt->bindValue($identifier, $this->idproductovariante, PDO::PARAM_INT);
                        break;
                    case '`pedido_nota`':
                        $stmt->bindValue($identifier, $this->pedido_nota, PDO::PARAM_STR);
                        break;
                    case '`pedido_estatus`':
                        $stmt->bindValue($identifier, $this->pedido_estatus, PDO::PARAM_STR);
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
        $this->setIdpedido($pk);

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

            if ($this->aProducto !== null) {
                if (!$this->aProducto->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProducto->getValidationFailures());
                }
            }

            if ($this->aProductovariante !== null) {
                if (!$this->aProductovariante->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProductovariante->getValidationFailures());
                }
            }

            if ($this->aSucursal !== null) {
                if (!$this->aSucursal->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSucursal->getValidationFailures());
                }
            }


            if (($retval = PedidoPeer::doValidate($this, $columns)) !== true) {
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
        $pos = PedidoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdpedido();
                break;
            case 1:
                return $this->getIdsucursal();
                break;
            case 2:
                return $this->getPedidoFecha();
                break;
            case 3:
                return $this->getIdproducto();
                break;
            case 4:
                return $this->getPedidoCantidad();
                break;
            case 5:
                return $this->getIdproductovariante();
                break;
            case 6:
                return $this->getPedidoNota();
                break;
            case 7:
                return $this->getPedidoEstatus();
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
        if (isset($alreadyDumpedObjects['Pedido'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Pedido'][$this->getPrimaryKey()] = true;
        $keys = PedidoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdpedido(),
            $keys[1] => $this->getIdsucursal(),
            $keys[2] => $this->getPedidoFecha(),
            $keys[3] => $this->getIdproducto(),
            $keys[4] => $this->getPedidoCantidad(),
            $keys[5] => $this->getIdproductovariante(),
            $keys[6] => $this->getPedidoNota(),
            $keys[7] => $this->getPedidoEstatus(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aProducto) {
                $result['Producto'] = $this->aProducto->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProductovariante) {
                $result['Productovariante'] = $this->aProductovariante->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSucursal) {
                $result['Sucursal'] = $this->aSucursal->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = PedidoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdpedido($value);
                break;
            case 1:
                $this->setIdsucursal($value);
                break;
            case 2:
                $this->setPedidoFecha($value);
                break;
            case 3:
                $this->setIdproducto($value);
                break;
            case 4:
                $this->setPedidoCantidad($value);
                break;
            case 5:
                $this->setIdproductovariante($value);
                break;
            case 6:
                $this->setPedidoNota($value);
                break;
            case 7:
                $this->setPedidoEstatus($value);
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
        $keys = PedidoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdpedido($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdsucursal($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setPedidoFecha($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdproducto($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPedidoCantidad($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdproductovariante($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPedidoNota($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPedidoEstatus($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PedidoPeer::DATABASE_NAME);

        if ($this->isColumnModified(PedidoPeer::IDPEDIDO)) $criteria->add(PedidoPeer::IDPEDIDO, $this->idpedido);
        if ($this->isColumnModified(PedidoPeer::IDSUCURSAL)) $criteria->add(PedidoPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(PedidoPeer::PEDIDO_FECHA)) $criteria->add(PedidoPeer::PEDIDO_FECHA, $this->pedido_fecha);
        if ($this->isColumnModified(PedidoPeer::IDPRODUCTO)) $criteria->add(PedidoPeer::IDPRODUCTO, $this->idproducto);
        if ($this->isColumnModified(PedidoPeer::PEDIDO_CANTIDAD)) $criteria->add(PedidoPeer::PEDIDO_CANTIDAD, $this->pedido_cantidad);
        if ($this->isColumnModified(PedidoPeer::IDPRODUCTOVARIANTE)) $criteria->add(PedidoPeer::IDPRODUCTOVARIANTE, $this->idproductovariante);
        if ($this->isColumnModified(PedidoPeer::PEDIDO_NOTA)) $criteria->add(PedidoPeer::PEDIDO_NOTA, $this->pedido_nota);
        if ($this->isColumnModified(PedidoPeer::PEDIDO_ESTATUS)) $criteria->add(PedidoPeer::PEDIDO_ESTATUS, $this->pedido_estatus);

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
        $criteria = new Criteria(PedidoPeer::DATABASE_NAME);
        $criteria->add(PedidoPeer::IDPEDIDO, $this->idpedido);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdpedido();
    }

    /**
     * Generic method to set the primary key (idpedido column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdpedido($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdpedido();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Pedido (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdsucursal($this->getIdsucursal());
        $copyObj->setPedidoFecha($this->getPedidoFecha());
        $copyObj->setIdproducto($this->getIdproducto());
        $copyObj->setPedidoCantidad($this->getPedidoCantidad());
        $copyObj->setIdproductovariante($this->getIdproductovariante());
        $copyObj->setPedidoNota($this->getPedidoNota());
        $copyObj->setPedidoEstatus($this->getPedidoEstatus());

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
            $copyObj->setIdpedido(NULL); // this is a auto-increment column, so set to default value
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
     * @return Pedido Clone of current object.
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
     * @return PedidoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PedidoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Producto object.
     *
     * @param                  Producto $v
     * @return Pedido The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProducto(Producto $v = null)
    {
        if ($v === null) {
            $this->setIdproducto(NULL);
        } else {
            $this->setIdproducto($v->getIdproducto());
        }

        $this->aProducto = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Producto object, it will not be re-added.
        if ($v !== null) {
            $v->addPedido($this);
        }


        return $this;
    }


    /**
     * Get the associated Producto object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Producto The associated Producto object.
     * @throws PropelException
     */
    public function getProducto(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProducto === null && ($this->idproducto !== null) && $doQuery) {
            $this->aProducto = ProductoQuery::create()->findPk($this->idproducto, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProducto->addPedidos($this);
             */
        }

        return $this->aProducto;
    }

    /**
     * Declares an association between this object and a Productovariante object.
     *
     * @param                  Productovariante $v
     * @return Pedido The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProductovariante(Productovariante $v = null)
    {
        if ($v === null) {
            $this->setIdproductovariante(NULL);
        } else {
            $this->setIdproductovariante($v->getIdproductovariante());
        }

        $this->aProductovariante = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Productovariante object, it will not be re-added.
        if ($v !== null) {
            $v->addPedido($this);
        }


        return $this;
    }


    /**
     * Get the associated Productovariante object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Productovariante The associated Productovariante object.
     * @throws PropelException
     */
    public function getProductovariante(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProductovariante === null && ($this->idproductovariante !== null) && $doQuery) {
            $this->aProductovariante = ProductovarianteQuery::create()->findPk($this->idproductovariante, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProductovariante->addPedidos($this);
             */
        }

        return $this->aProductovariante;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Pedido The current object (for fluent API support)
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
            $v->addPedido($this);
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
                $this->aSucursal->addPedidos($this);
             */
        }

        return $this->aSucursal;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idpedido = null;
        $this->idsucursal = null;
        $this->pedido_fecha = null;
        $this->idproducto = null;
        $this->pedido_cantidad = null;
        $this->idproductovariante = null;
        $this->pedido_nota = null;
        $this->pedido_estatus = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
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
            if ($this->aProducto instanceof Persistent) {
              $this->aProducto->clearAllReferences($deep);
            }
            if ($this->aProductovariante instanceof Persistent) {
              $this->aProductovariante->clearAllReferences($deep);
            }
            if ($this->aSucursal instanceof Persistent) {
              $this->aSucursal->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aProducto = null;
        $this->aProductovariante = null;
        $this->aSucursal = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PedidoPeer::DEFAULT_STRING_FORMAT);
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
