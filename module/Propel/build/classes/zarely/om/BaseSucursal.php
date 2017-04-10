<?php


/**
 * Base class that represents a row from the 'sucursal' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseSucursal extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'SucursalPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        SucursalPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idsucursal field.
     * @var        int
     */
    protected $idsucursal;

    /**
     * The value for the sucursal_nombrecomercial field.
     * @var        string
     */
    protected $sucursal_nombrecomercial;

    /**
     * The value for the sucursal_razonsocial field.
     * @var        string
     */
    protected $sucursal_razonsocial;

    /**
     * The value for the sucursal_calle field.
     * @var        string
     */
    protected $sucursal_calle;

    /**
     * The value for the sucursal_numexterno field.
     * @var        string
     */
    protected $sucursal_numexterno;

    /**
     * The value for the sucursal_numinterior field.
     * @var        string
     */
    protected $sucursal_numinterior;

    /**
     * The value for the sucursal_colonia field.
     * @var        string
     */
    protected $sucursal_colonia;

    /**
     * The value for the sucursal_codigopostal field.
     * @var        string
     */
    protected $sucursal_codigopostal;

    /**
     * The value for the sucursal_ciudad field.
     * @var        string
     */
    protected $sucursal_ciudad;

    /**
     * The value for the sucursal_estado field.
     * @var        string
     */
    protected $sucursal_estado;

    /**
     * @var        PropelObjectCollection|Pedido[] Collection to store aggregation of Pedido objects.
     */
    protected $collPedidos;
    protected $collPedidosPartial;

    /**
     * @var        PropelObjectCollection|Productosucursal[] Collection to store aggregation of Productosucursal objects.
     */
    protected $collProductosucursals;
    protected $collProductosucursalsPartial;

    /**
     * @var        PropelObjectCollection|Sucursalempleado[] Collection to store aggregation of Sucursalempleado objects.
     */
    protected $collSucursalempleados;
    protected $collSucursalempleadosPartial;

    /**
     * @var        PropelObjectCollection|Transferencia[] Collection to store aggregation of Transferencia objects.
     */
    protected $collTransferenciasRelatedByIdsucursaldestino;
    protected $collTransferenciasRelatedByIdsucursaldestinoPartial;

    /**
     * @var        PropelObjectCollection|Transferencia[] Collection to store aggregation of Transferencia objects.
     */
    protected $collTransferenciasRelatedByIdsucursalorigen;
    protected $collTransferenciasRelatedByIdsucursalorigenPartial;

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
    protected $pedidosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productosucursalsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $sucursalempleadosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $transferenciasRelatedByIdsucursaldestinoScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $transferenciasRelatedByIdsucursalorigenScheduledForDeletion = null;

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
     * Get the [sucursal_nombrecomercial] column value.
     *
     * @return string
     */
    public function getSucursalNombrecomercial()
    {

        return $this->sucursal_nombrecomercial;
    }

    /**
     * Get the [sucursal_razonsocial] column value.
     *
     * @return string
     */
    public function getSucursalRazonsocial()
    {

        return $this->sucursal_razonsocial;
    }

    /**
     * Get the [sucursal_calle] column value.
     *
     * @return string
     */
    public function getSucursalCalle()
    {

        return $this->sucursal_calle;
    }

    /**
     * Get the [sucursal_numexterno] column value.
     *
     * @return string
     */
    public function getSucursalNumexterno()
    {

        return $this->sucursal_numexterno;
    }

    /**
     * Get the [sucursal_numinterior] column value.
     *
     * @return string
     */
    public function getSucursalNuminterior()
    {

        return $this->sucursal_numinterior;
    }

    /**
     * Get the [sucursal_colonia] column value.
     *
     * @return string
     */
    public function getSucursalColonia()
    {

        return $this->sucursal_colonia;
    }

    /**
     * Get the [sucursal_codigopostal] column value.
     *
     * @return string
     */
    public function getSucursalCodigopostal()
    {

        return $this->sucursal_codigopostal;
    }

    /**
     * Get the [sucursal_ciudad] column value.
     *
     * @return string
     */
    public function getSucursalCiudad()
    {

        return $this->sucursal_ciudad;
    }

    /**
     * Get the [sucursal_estado] column value.
     *
     * @return string
     */
    public function getSucursalEstado()
    {

        return $this->sucursal_estado;
    }

    /**
     * Set the value of [idsucursal] column.
     *
     * @param  int $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = SucursalPeer::IDSUCURSAL;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Set the value of [sucursal_nombrecomercial] column.
     *
     * @param  string $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalNombrecomercial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sucursal_nombrecomercial !== $v) {
            $this->sucursal_nombrecomercial = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_NOMBRECOMERCIAL;
        }


        return $this;
    } // setSucursalNombrecomercial()

    /**
     * Set the value of [sucursal_razonsocial] column.
     *
     * @param  string $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalRazonsocial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sucursal_razonsocial !== $v) {
            $this->sucursal_razonsocial = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_RAZONSOCIAL;
        }


        return $this;
    } // setSucursalRazonsocial()

    /**
     * Set the value of [sucursal_calle] column.
     *
     * @param  string $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sucursal_calle !== $v) {
            $this->sucursal_calle = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_CALLE;
        }


        return $this;
    } // setSucursalCalle()

    /**
     * Set the value of [sucursal_numexterno] column.
     *
     * @param  string $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalNumexterno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sucursal_numexterno !== $v) {
            $this->sucursal_numexterno = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_NUMEXTERNO;
        }


        return $this;
    } // setSucursalNumexterno()

    /**
     * Set the value of [sucursal_numinterior] column.
     *
     * @param  string $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalNuminterior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sucursal_numinterior !== $v) {
            $this->sucursal_numinterior = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_NUMINTERIOR;
        }


        return $this;
    } // setSucursalNuminterior()

    /**
     * Set the value of [sucursal_colonia] column.
     *
     * @param  string $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sucursal_colonia !== $v) {
            $this->sucursal_colonia = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_COLONIA;
        }


        return $this;
    } // setSucursalColonia()

    /**
     * Set the value of [sucursal_codigopostal] column.
     *
     * @param  string $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalCodigopostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sucursal_codigopostal !== $v) {
            $this->sucursal_codigopostal = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_CODIGOPOSTAL;
        }


        return $this;
    } // setSucursalCodigopostal()

    /**
     * Set the value of [sucursal_ciudad] column.
     *
     * @param  string $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sucursal_ciudad !== $v) {
            $this->sucursal_ciudad = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_CIUDAD;
        }


        return $this;
    } // setSucursalCiudad()

    /**
     * Set the value of [sucursal_estado] column.
     *
     * @param  string $v new value
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->sucursal_estado !== $v) {
            $this->sucursal_estado = $v;
            $this->modifiedColumns[] = SucursalPeer::SUCURSAL_ESTADO;
        }


        return $this;
    } // setSucursalEstado()

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

            $this->idsucursal = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->sucursal_nombrecomercial = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->sucursal_razonsocial = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->sucursal_calle = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->sucursal_numexterno = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->sucursal_numinterior = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->sucursal_colonia = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->sucursal_codigopostal = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->sucursal_ciudad = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->sucursal_estado = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 10; // 10 = SucursalPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Sucursal object", $e);
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
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = SucursalPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collPedidos = null;

            $this->collProductosucursals = null;

            $this->collSucursalempleados = null;

            $this->collTransferenciasRelatedByIdsucursaldestino = null;

            $this->collTransferenciasRelatedByIdsucursalorigen = null;

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
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = SucursalQuery::create()
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
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                SucursalPeer::addInstanceToPool($this);
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

            if ($this->pedidosScheduledForDeletion !== null) {
                if (!$this->pedidosScheduledForDeletion->isEmpty()) {
                    PedidoQuery::create()
                        ->filterByPrimaryKeys($this->pedidosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->pedidosScheduledForDeletion = null;
                }
            }

            if ($this->collPedidos !== null) {
                foreach ($this->collPedidos as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->productosucursalsScheduledForDeletion !== null) {
                if (!$this->productosucursalsScheduledForDeletion->isEmpty()) {
                    ProductosucursalQuery::create()
                        ->filterByPrimaryKeys($this->productosucursalsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->productosucursalsScheduledForDeletion = null;
                }
            }

            if ($this->collProductosucursals !== null) {
                foreach ($this->collProductosucursals as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->sucursalempleadosScheduledForDeletion !== null) {
                if (!$this->sucursalempleadosScheduledForDeletion->isEmpty()) {
                    SucursalempleadoQuery::create()
                        ->filterByPrimaryKeys($this->sucursalempleadosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->sucursalempleadosScheduledForDeletion = null;
                }
            }

            if ($this->collSucursalempleados !== null) {
                foreach ($this->collSucursalempleados as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->transferenciasRelatedByIdsucursaldestinoScheduledForDeletion !== null) {
                if (!$this->transferenciasRelatedByIdsucursaldestinoScheduledForDeletion->isEmpty()) {
                    TransferenciaQuery::create()
                        ->filterByPrimaryKeys($this->transferenciasRelatedByIdsucursaldestinoScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->transferenciasRelatedByIdsucursaldestinoScheduledForDeletion = null;
                }
            }

            if ($this->collTransferenciasRelatedByIdsucursaldestino !== null) {
                foreach ($this->collTransferenciasRelatedByIdsucursaldestino as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->transferenciasRelatedByIdsucursalorigenScheduledForDeletion !== null) {
                if (!$this->transferenciasRelatedByIdsucursalorigenScheduledForDeletion->isEmpty()) {
                    TransferenciaQuery::create()
                        ->filterByPrimaryKeys($this->transferenciasRelatedByIdsucursalorigenScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->transferenciasRelatedByIdsucursalorigenScheduledForDeletion = null;
                }
            }

            if ($this->collTransferenciasRelatedByIdsucursalorigen !== null) {
                foreach ($this->collTransferenciasRelatedByIdsucursalorigen as $referrerFK) {
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

        $this->modifiedColumns[] = SucursalPeer::IDSUCURSAL;
        if (null !== $this->idsucursal) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SucursalPeer::IDSUCURSAL . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SucursalPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_NOMBRECOMERCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_nombrecomercial`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_RAZONSOCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_razonsocial`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_calle`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_NUMEXTERNO)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_numexterno`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_NUMINTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_numinterior`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_colonia`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_CODIGOPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_codigopostal`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_ciudad`';
        }
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`sucursal_estado`';
        }

        $sql = sprintf(
            'INSERT INTO `sucursal` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`sucursal_nombrecomercial`':
                        $stmt->bindValue($identifier, $this->sucursal_nombrecomercial, PDO::PARAM_STR);
                        break;
                    case '`sucursal_razonsocial`':
                        $stmt->bindValue($identifier, $this->sucursal_razonsocial, PDO::PARAM_STR);
                        break;
                    case '`sucursal_calle`':
                        $stmt->bindValue($identifier, $this->sucursal_calle, PDO::PARAM_STR);
                        break;
                    case '`sucursal_numexterno`':
                        $stmt->bindValue($identifier, $this->sucursal_numexterno, PDO::PARAM_STR);
                        break;
                    case '`sucursal_numinterior`':
                        $stmt->bindValue($identifier, $this->sucursal_numinterior, PDO::PARAM_STR);
                        break;
                    case '`sucursal_colonia`':
                        $stmt->bindValue($identifier, $this->sucursal_colonia, PDO::PARAM_STR);
                        break;
                    case '`sucursal_codigopostal`':
                        $stmt->bindValue($identifier, $this->sucursal_codigopostal, PDO::PARAM_STR);
                        break;
                    case '`sucursal_ciudad`':
                        $stmt->bindValue($identifier, $this->sucursal_ciudad, PDO::PARAM_STR);
                        break;
                    case '`sucursal_estado`':
                        $stmt->bindValue($identifier, $this->sucursal_estado, PDO::PARAM_STR);
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
        $this->setIdsucursal($pk);

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


            if (($retval = SucursalPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collPedidos !== null) {
                    foreach ($this->collPedidos as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collProductosucursals !== null) {
                    foreach ($this->collProductosucursals as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collSucursalempleados !== null) {
                    foreach ($this->collSucursalempleados as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTransferenciasRelatedByIdsucursaldestino !== null) {
                    foreach ($this->collTransferenciasRelatedByIdsucursaldestino as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTransferenciasRelatedByIdsucursalorigen !== null) {
                    foreach ($this->collTransferenciasRelatedByIdsucursalorigen as $referrerFK) {
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
        $pos = SucursalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdsucursal();
                break;
            case 1:
                return $this->getSucursalNombrecomercial();
                break;
            case 2:
                return $this->getSucursalRazonsocial();
                break;
            case 3:
                return $this->getSucursalCalle();
                break;
            case 4:
                return $this->getSucursalNumexterno();
                break;
            case 5:
                return $this->getSucursalNuminterior();
                break;
            case 6:
                return $this->getSucursalColonia();
                break;
            case 7:
                return $this->getSucursalCodigopostal();
                break;
            case 8:
                return $this->getSucursalCiudad();
                break;
            case 9:
                return $this->getSucursalEstado();
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
        if (isset($alreadyDumpedObjects['Sucursal'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Sucursal'][$this->getPrimaryKey()] = true;
        $keys = SucursalPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdsucursal(),
            $keys[1] => $this->getSucursalNombrecomercial(),
            $keys[2] => $this->getSucursalRazonsocial(),
            $keys[3] => $this->getSucursalCalle(),
            $keys[4] => $this->getSucursalNumexterno(),
            $keys[5] => $this->getSucursalNuminterior(),
            $keys[6] => $this->getSucursalColonia(),
            $keys[7] => $this->getSucursalCodigopostal(),
            $keys[8] => $this->getSucursalCiudad(),
            $keys[9] => $this->getSucursalEstado(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collPedidos) {
                $result['Pedidos'] = $this->collPedidos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductosucursals) {
                $result['Productosucursals'] = $this->collProductosucursals->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSucursalempleados) {
                $result['Sucursalempleados'] = $this->collSucursalempleados->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTransferenciasRelatedByIdsucursaldestino) {
                $result['TransferenciasRelatedByIdsucursaldestino'] = $this->collTransferenciasRelatedByIdsucursaldestino->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTransferenciasRelatedByIdsucursalorigen) {
                $result['TransferenciasRelatedByIdsucursalorigen'] = $this->collTransferenciasRelatedByIdsucursalorigen->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = SucursalPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdsucursal($value);
                break;
            case 1:
                $this->setSucursalNombrecomercial($value);
                break;
            case 2:
                $this->setSucursalRazonsocial($value);
                break;
            case 3:
                $this->setSucursalCalle($value);
                break;
            case 4:
                $this->setSucursalNumexterno($value);
                break;
            case 5:
                $this->setSucursalNuminterior($value);
                break;
            case 6:
                $this->setSucursalColonia($value);
                break;
            case 7:
                $this->setSucursalCodigopostal($value);
                break;
            case 8:
                $this->setSucursalCiudad($value);
                break;
            case 9:
                $this->setSucursalEstado($value);
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
        $keys = SucursalPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdsucursal($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setSucursalNombrecomercial($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSucursalRazonsocial($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setSucursalCalle($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSucursalNumexterno($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setSucursalNuminterior($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSucursalColonia($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSucursalCodigopostal($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setSucursalCiudad($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setSucursalEstado($arr[$keys[9]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(SucursalPeer::DATABASE_NAME);

        if ($this->isColumnModified(SucursalPeer::IDSUCURSAL)) $criteria->add(SucursalPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_NOMBRECOMERCIAL)) $criteria->add(SucursalPeer::SUCURSAL_NOMBRECOMERCIAL, $this->sucursal_nombrecomercial);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_RAZONSOCIAL)) $criteria->add(SucursalPeer::SUCURSAL_RAZONSOCIAL, $this->sucursal_razonsocial);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_CALLE)) $criteria->add(SucursalPeer::SUCURSAL_CALLE, $this->sucursal_calle);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_NUMEXTERNO)) $criteria->add(SucursalPeer::SUCURSAL_NUMEXTERNO, $this->sucursal_numexterno);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_NUMINTERIOR)) $criteria->add(SucursalPeer::SUCURSAL_NUMINTERIOR, $this->sucursal_numinterior);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_COLONIA)) $criteria->add(SucursalPeer::SUCURSAL_COLONIA, $this->sucursal_colonia);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_CODIGOPOSTAL)) $criteria->add(SucursalPeer::SUCURSAL_CODIGOPOSTAL, $this->sucursal_codigopostal);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_CIUDAD)) $criteria->add(SucursalPeer::SUCURSAL_CIUDAD, $this->sucursal_ciudad);
        if ($this->isColumnModified(SucursalPeer::SUCURSAL_ESTADO)) $criteria->add(SucursalPeer::SUCURSAL_ESTADO, $this->sucursal_estado);

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
        $criteria = new Criteria(SucursalPeer::DATABASE_NAME);
        $criteria->add(SucursalPeer::IDSUCURSAL, $this->idsucursal);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdsucursal();
    }

    /**
     * Generic method to set the primary key (idsucursal column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdsucursal($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdsucursal();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Sucursal (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setSucursalNombrecomercial($this->getSucursalNombrecomercial());
        $copyObj->setSucursalRazonsocial($this->getSucursalRazonsocial());
        $copyObj->setSucursalCalle($this->getSucursalCalle());
        $copyObj->setSucursalNumexterno($this->getSucursalNumexterno());
        $copyObj->setSucursalNuminterior($this->getSucursalNuminterior());
        $copyObj->setSucursalColonia($this->getSucursalColonia());
        $copyObj->setSucursalCodigopostal($this->getSucursalCodigopostal());
        $copyObj->setSucursalCiudad($this->getSucursalCiudad());
        $copyObj->setSucursalEstado($this->getSucursalEstado());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getPedidos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPedido($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getProductosucursals() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addProductosucursal($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSucursalempleados() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSucursalempleado($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTransferenciasRelatedByIdsucursaldestino() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTransferenciaRelatedByIdsucursaldestino($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTransferenciasRelatedByIdsucursalorigen() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTransferenciaRelatedByIdsucursalorigen($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdsucursal(NULL); // this is a auto-increment column, so set to default value
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
     * @return Sucursal Clone of current object.
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
     * @return SucursalPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new SucursalPeer();
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
        if ('Pedido' == $relationName) {
            $this->initPedidos();
        }
        if ('Productosucursal' == $relationName) {
            $this->initProductosucursals();
        }
        if ('Sucursalempleado' == $relationName) {
            $this->initSucursalempleados();
        }
        if ('TransferenciaRelatedByIdsucursaldestino' == $relationName) {
            $this->initTransferenciasRelatedByIdsucursaldestino();
        }
        if ('TransferenciaRelatedByIdsucursalorigen' == $relationName) {
            $this->initTransferenciasRelatedByIdsucursalorigen();
        }
    }

    /**
     * Clears out the collPedidos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addPedidos()
     */
    public function clearPedidos()
    {
        $this->collPedidos = null; // important to set this to null since that means it is uninitialized
        $this->collPedidosPartial = null;

        return $this;
    }

    /**
     * reset is the collPedidos collection loaded partially
     *
     * @return void
     */
    public function resetPartialPedidos($v = true)
    {
        $this->collPedidosPartial = $v;
    }

    /**
     * Initializes the collPedidos collection.
     *
     * By default this just sets the collPedidos collection to an empty array (like clearcollPedidos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPedidos($overrideExisting = true)
    {
        if (null !== $this->collPedidos && !$overrideExisting) {
            return;
        }
        $this->collPedidos = new PropelObjectCollection();
        $this->collPedidos->setModel('Pedido');
    }

    /**
     * Gets an array of Pedido objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Pedido[] List of Pedido objects
     * @throws PropelException
     */
    public function getPedidos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPedidosPartial && !$this->isNew();
        if (null === $this->collPedidos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPedidos) {
                // return empty collection
                $this->initPedidos();
            } else {
                $collPedidos = PedidoQuery::create(null, $criteria)
                    ->filterBySucursal($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPedidosPartial && count($collPedidos)) {
                      $this->initPedidos(false);

                      foreach ($collPedidos as $obj) {
                        if (false == $this->collPedidos->contains($obj)) {
                          $this->collPedidos->append($obj);
                        }
                      }

                      $this->collPedidosPartial = true;
                    }

                    $collPedidos->getInternalIterator()->rewind();

                    return $collPedidos;
                }

                if ($partial && $this->collPedidos) {
                    foreach ($this->collPedidos as $obj) {
                        if ($obj->isNew()) {
                            $collPedidos[] = $obj;
                        }
                    }
                }

                $this->collPedidos = $collPedidos;
                $this->collPedidosPartial = false;
            }
        }

        return $this->collPedidos;
    }

    /**
     * Sets a collection of Pedido objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $pedidos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setPedidos(PropelCollection $pedidos, PropelPDO $con = null)
    {
        $pedidosToDelete = $this->getPedidos(new Criteria(), $con)->diff($pedidos);


        $this->pedidosScheduledForDeletion = $pedidosToDelete;

        foreach ($pedidosToDelete as $pedidoRemoved) {
            $pedidoRemoved->setSucursal(null);
        }

        $this->collPedidos = null;
        foreach ($pedidos as $pedido) {
            $this->addPedido($pedido);
        }

        $this->collPedidos = $pedidos;
        $this->collPedidosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Pedido objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Pedido objects.
     * @throws PropelException
     */
    public function countPedidos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPedidosPartial && !$this->isNew();
        if (null === $this->collPedidos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPedidos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPedidos());
            }
            $query = PedidoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collPedidos);
    }

    /**
     * Method called to associate a Pedido object to this object
     * through the Pedido foreign key attribute.
     *
     * @param    Pedido $l Pedido
     * @return Sucursal The current object (for fluent API support)
     */
    public function addPedido(Pedido $l)
    {
        if ($this->collPedidos === null) {
            $this->initPedidos();
            $this->collPedidosPartial = true;
        }

        if (!in_array($l, $this->collPedidos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPedido($l);

            if ($this->pedidosScheduledForDeletion and $this->pedidosScheduledForDeletion->contains($l)) {
                $this->pedidosScheduledForDeletion->remove($this->pedidosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Pedido $pedido The pedido object to add.
     */
    protected function doAddPedido($pedido)
    {
        $this->collPedidos[]= $pedido;
        $pedido->setSucursal($this);
    }

    /**
     * @param	Pedido $pedido The pedido object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removePedido($pedido)
    {
        if ($this->getPedidos()->contains($pedido)) {
            $this->collPedidos->remove($this->collPedidos->search($pedido));
            if (null === $this->pedidosScheduledForDeletion) {
                $this->pedidosScheduledForDeletion = clone $this->collPedidos;
                $this->pedidosScheduledForDeletion->clear();
            }
            $this->pedidosScheduledForDeletion[]= clone $pedido;
            $pedido->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Pedidos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pedido[] List of Pedido objects
     */
    public function getPedidosJoinProducto($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PedidoQuery::create(null, $criteria);
        $query->joinWith('Producto', $join_behavior);

        return $this->getPedidos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Pedidos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Pedido[] List of Pedido objects
     */
    public function getPedidosJoinProductovariante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = PedidoQuery::create(null, $criteria);
        $query->joinWith('Productovariante', $join_behavior);

        return $this->getPedidos($query, $con);
    }

    /**
     * Clears out the collProductosucursals collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addProductosucursals()
     */
    public function clearProductosucursals()
    {
        $this->collProductosucursals = null; // important to set this to null since that means it is uninitialized
        $this->collProductosucursalsPartial = null;

        return $this;
    }

    /**
     * reset is the collProductosucursals collection loaded partially
     *
     * @return void
     */
    public function resetPartialProductosucursals($v = true)
    {
        $this->collProductosucursalsPartial = $v;
    }

    /**
     * Initializes the collProductosucursals collection.
     *
     * By default this just sets the collProductosucursals collection to an empty array (like clearcollProductosucursals());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initProductosucursals($overrideExisting = true)
    {
        if (null !== $this->collProductosucursals && !$overrideExisting) {
            return;
        }
        $this->collProductosucursals = new PropelObjectCollection();
        $this->collProductosucursals->setModel('Productosucursal');
    }

    /**
     * Gets an array of Productosucursal objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Productosucursal[] List of Productosucursal objects
     * @throws PropelException
     */
    public function getProductosucursals($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collProductosucursalsPartial && !$this->isNew();
        if (null === $this->collProductosucursals || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collProductosucursals) {
                // return empty collection
                $this->initProductosucursals();
            } else {
                $collProductosucursals = ProductosucursalQuery::create(null, $criteria)
                    ->filterBySucursal($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collProductosucursalsPartial && count($collProductosucursals)) {
                      $this->initProductosucursals(false);

                      foreach ($collProductosucursals as $obj) {
                        if (false == $this->collProductosucursals->contains($obj)) {
                          $this->collProductosucursals->append($obj);
                        }
                      }

                      $this->collProductosucursalsPartial = true;
                    }

                    $collProductosucursals->getInternalIterator()->rewind();

                    return $collProductosucursals;
                }

                if ($partial && $this->collProductosucursals) {
                    foreach ($this->collProductosucursals as $obj) {
                        if ($obj->isNew()) {
                            $collProductosucursals[] = $obj;
                        }
                    }
                }

                $this->collProductosucursals = $collProductosucursals;
                $this->collProductosucursalsPartial = false;
            }
        }

        return $this->collProductosucursals;
    }

    /**
     * Sets a collection of Productosucursal objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $productosucursals A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setProductosucursals(PropelCollection $productosucursals, PropelPDO $con = null)
    {
        $productosucursalsToDelete = $this->getProductosucursals(new Criteria(), $con)->diff($productosucursals);


        $this->productosucursalsScheduledForDeletion = $productosucursalsToDelete;

        foreach ($productosucursalsToDelete as $productosucursalRemoved) {
            $productosucursalRemoved->setSucursal(null);
        }

        $this->collProductosucursals = null;
        foreach ($productosucursals as $productosucursal) {
            $this->addProductosucursal($productosucursal);
        }

        $this->collProductosucursals = $productosucursals;
        $this->collProductosucursalsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Productosucursal objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Productosucursal objects.
     * @throws PropelException
     */
    public function countProductosucursals(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collProductosucursalsPartial && !$this->isNew();
        if (null === $this->collProductosucursals || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collProductosucursals) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getProductosucursals());
            }
            $query = ProductosucursalQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collProductosucursals);
    }

    /**
     * Method called to associate a Productosucursal object to this object
     * through the Productosucursal foreign key attribute.
     *
     * @param    Productosucursal $l Productosucursal
     * @return Sucursal The current object (for fluent API support)
     */
    public function addProductosucursal(Productosucursal $l)
    {
        if ($this->collProductosucursals === null) {
            $this->initProductosucursals();
            $this->collProductosucursalsPartial = true;
        }

        if (!in_array($l, $this->collProductosucursals->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddProductosucursal($l);

            if ($this->productosucursalsScheduledForDeletion and $this->productosucursalsScheduledForDeletion->contains($l)) {
                $this->productosucursalsScheduledForDeletion->remove($this->productosucursalsScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Productosucursal $productosucursal The productosucursal object to add.
     */
    protected function doAddProductosucursal($productosucursal)
    {
        $this->collProductosucursals[]= $productosucursal;
        $productosucursal->setSucursal($this);
    }

    /**
     * @param	Productosucursal $productosucursal The productosucursal object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removeProductosucursal($productosucursal)
    {
        if ($this->getProductosucursals()->contains($productosucursal)) {
            $this->collProductosucursals->remove($this->collProductosucursals->search($productosucursal));
            if (null === $this->productosucursalsScheduledForDeletion) {
                $this->productosucursalsScheduledForDeletion = clone $this->collProductosucursals;
                $this->productosucursalsScheduledForDeletion->clear();
            }
            $this->productosucursalsScheduledForDeletion[]= clone $productosucursal;
            $productosucursal->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Productosucursals from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Productosucursal[] List of Productosucursal objects
     */
    public function getProductosucursalsJoinProductovariante($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductosucursalQuery::create(null, $criteria);
        $query->joinWith('Productovariante', $join_behavior);

        return $this->getProductosucursals($query, $con);
    }

    /**
     * Clears out the collSucursalempleados collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addSucursalempleados()
     */
    public function clearSucursalempleados()
    {
        $this->collSucursalempleados = null; // important to set this to null since that means it is uninitialized
        $this->collSucursalempleadosPartial = null;

        return $this;
    }

    /**
     * reset is the collSucursalempleados collection loaded partially
     *
     * @return void
     */
    public function resetPartialSucursalempleados($v = true)
    {
        $this->collSucursalempleadosPartial = $v;
    }

    /**
     * Initializes the collSucursalempleados collection.
     *
     * By default this just sets the collSucursalempleados collection to an empty array (like clearcollSucursalempleados());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSucursalempleados($overrideExisting = true)
    {
        if (null !== $this->collSucursalempleados && !$overrideExisting) {
            return;
        }
        $this->collSucursalempleados = new PropelObjectCollection();
        $this->collSucursalempleados->setModel('Sucursalempleado');
    }

    /**
     * Gets an array of Sucursalempleado objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Sucursalempleado[] List of Sucursalempleado objects
     * @throws PropelException
     */
    public function getSucursalempleados($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collSucursalempleadosPartial && !$this->isNew();
        if (null === $this->collSucursalempleados || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collSucursalempleados) {
                // return empty collection
                $this->initSucursalempleados();
            } else {
                $collSucursalempleados = SucursalempleadoQuery::create(null, $criteria)
                    ->filterBySucursal($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collSucursalempleadosPartial && count($collSucursalempleados)) {
                      $this->initSucursalempleados(false);

                      foreach ($collSucursalempleados as $obj) {
                        if (false == $this->collSucursalempleados->contains($obj)) {
                          $this->collSucursalempleados->append($obj);
                        }
                      }

                      $this->collSucursalempleadosPartial = true;
                    }

                    $collSucursalempleados->getInternalIterator()->rewind();

                    return $collSucursalempleados;
                }

                if ($partial && $this->collSucursalempleados) {
                    foreach ($this->collSucursalempleados as $obj) {
                        if ($obj->isNew()) {
                            $collSucursalempleados[] = $obj;
                        }
                    }
                }

                $this->collSucursalempleados = $collSucursalempleados;
                $this->collSucursalempleadosPartial = false;
            }
        }

        return $this->collSucursalempleados;
    }

    /**
     * Sets a collection of Sucursalempleado objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $sucursalempleados A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setSucursalempleados(PropelCollection $sucursalempleados, PropelPDO $con = null)
    {
        $sucursalempleadosToDelete = $this->getSucursalempleados(new Criteria(), $con)->diff($sucursalempleados);


        $this->sucursalempleadosScheduledForDeletion = $sucursalempleadosToDelete;

        foreach ($sucursalempleadosToDelete as $sucursalempleadoRemoved) {
            $sucursalempleadoRemoved->setSucursal(null);
        }

        $this->collSucursalempleados = null;
        foreach ($sucursalempleados as $sucursalempleado) {
            $this->addSucursalempleado($sucursalempleado);
        }

        $this->collSucursalempleados = $sucursalempleados;
        $this->collSucursalempleadosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Sucursalempleado objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Sucursalempleado objects.
     * @throws PropelException
     */
    public function countSucursalempleados(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collSucursalempleadosPartial && !$this->isNew();
        if (null === $this->collSucursalempleados || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSucursalempleados) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSucursalempleados());
            }
            $query = SucursalempleadoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursal($this)
                ->count($con);
        }

        return count($this->collSucursalempleados);
    }

    /**
     * Method called to associate a Sucursalempleado object to this object
     * through the Sucursalempleado foreign key attribute.
     *
     * @param    Sucursalempleado $l Sucursalempleado
     * @return Sucursal The current object (for fluent API support)
     */
    public function addSucursalempleado(Sucursalempleado $l)
    {
        if ($this->collSucursalempleados === null) {
            $this->initSucursalempleados();
            $this->collSucursalempleadosPartial = true;
        }

        if (!in_array($l, $this->collSucursalempleados->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddSucursalempleado($l);

            if ($this->sucursalempleadosScheduledForDeletion and $this->sucursalempleadosScheduledForDeletion->contains($l)) {
                $this->sucursalempleadosScheduledForDeletion->remove($this->sucursalempleadosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Sucursalempleado $sucursalempleado The sucursalempleado object to add.
     */
    protected function doAddSucursalempleado($sucursalempleado)
    {
        $this->collSucursalempleados[]= $sucursalempleado;
        $sucursalempleado->setSucursal($this);
    }

    /**
     * @param	Sucursalempleado $sucursalempleado The sucursalempleado object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removeSucursalempleado($sucursalempleado)
    {
        if ($this->getSucursalempleados()->contains($sucursalempleado)) {
            $this->collSucursalempleados->remove($this->collSucursalempleados->search($sucursalempleado));
            if (null === $this->sucursalempleadosScheduledForDeletion) {
                $this->sucursalempleadosScheduledForDeletion = clone $this->collSucursalempleados;
                $this->sucursalempleadosScheduledForDeletion->clear();
            }
            $this->sucursalempleadosScheduledForDeletion[]= clone $sucursalempleado;
            $sucursalempleado->setSucursal(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related Sucursalempleados from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Sucursalempleado[] List of Sucursalempleado objects
     */
    public function getSucursalempleadosJoinEmpleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SucursalempleadoQuery::create(null, $criteria);
        $query->joinWith('Empleado', $join_behavior);

        return $this->getSucursalempleados($query, $con);
    }

    /**
     * Clears out the collTransferenciasRelatedByIdsucursaldestino collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addTransferenciasRelatedByIdsucursaldestino()
     */
    public function clearTransferenciasRelatedByIdsucursaldestino()
    {
        $this->collTransferenciasRelatedByIdsucursaldestino = null; // important to set this to null since that means it is uninitialized
        $this->collTransferenciasRelatedByIdsucursaldestinoPartial = null;

        return $this;
    }

    /**
     * reset is the collTransferenciasRelatedByIdsucursaldestino collection loaded partially
     *
     * @return void
     */
    public function resetPartialTransferenciasRelatedByIdsucursaldestino($v = true)
    {
        $this->collTransferenciasRelatedByIdsucursaldestinoPartial = $v;
    }

    /**
     * Initializes the collTransferenciasRelatedByIdsucursaldestino collection.
     *
     * By default this just sets the collTransferenciasRelatedByIdsucursaldestino collection to an empty array (like clearcollTransferenciasRelatedByIdsucursaldestino());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTransferenciasRelatedByIdsucursaldestino($overrideExisting = true)
    {
        if (null !== $this->collTransferenciasRelatedByIdsucursaldestino && !$overrideExisting) {
            return;
        }
        $this->collTransferenciasRelatedByIdsucursaldestino = new PropelObjectCollection();
        $this->collTransferenciasRelatedByIdsucursaldestino->setModel('Transferencia');
    }

    /**
     * Gets an array of Transferencia objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     * @throws PropelException
     */
    public function getTransferenciasRelatedByIdsucursaldestino($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdsucursaldestinoPartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdsucursaldestino || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdsucursaldestino) {
                // return empty collection
                $this->initTransferenciasRelatedByIdsucursaldestino();
            } else {
                $collTransferenciasRelatedByIdsucursaldestino = TransferenciaQuery::create(null, $criteria)
                    ->filterBySucursalRelatedByIdsucursaldestino($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTransferenciasRelatedByIdsucursaldestinoPartial && count($collTransferenciasRelatedByIdsucursaldestino)) {
                      $this->initTransferenciasRelatedByIdsucursaldestino(false);

                      foreach ($collTransferenciasRelatedByIdsucursaldestino as $obj) {
                        if (false == $this->collTransferenciasRelatedByIdsucursaldestino->contains($obj)) {
                          $this->collTransferenciasRelatedByIdsucursaldestino->append($obj);
                        }
                      }

                      $this->collTransferenciasRelatedByIdsucursaldestinoPartial = true;
                    }

                    $collTransferenciasRelatedByIdsucursaldestino->getInternalIterator()->rewind();

                    return $collTransferenciasRelatedByIdsucursaldestino;
                }

                if ($partial && $this->collTransferenciasRelatedByIdsucursaldestino) {
                    foreach ($this->collTransferenciasRelatedByIdsucursaldestino as $obj) {
                        if ($obj->isNew()) {
                            $collTransferenciasRelatedByIdsucursaldestino[] = $obj;
                        }
                    }
                }

                $this->collTransferenciasRelatedByIdsucursaldestino = $collTransferenciasRelatedByIdsucursaldestino;
                $this->collTransferenciasRelatedByIdsucursaldestinoPartial = false;
            }
        }

        return $this->collTransferenciasRelatedByIdsucursaldestino;
    }

    /**
     * Sets a collection of TransferenciaRelatedByIdsucursaldestino objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $transferenciasRelatedByIdsucursaldestino A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setTransferenciasRelatedByIdsucursaldestino(PropelCollection $transferenciasRelatedByIdsucursaldestino, PropelPDO $con = null)
    {
        $transferenciasRelatedByIdsucursaldestinoToDelete = $this->getTransferenciasRelatedByIdsucursaldestino(new Criteria(), $con)->diff($transferenciasRelatedByIdsucursaldestino);


        $this->transferenciasRelatedByIdsucursaldestinoScheduledForDeletion = $transferenciasRelatedByIdsucursaldestinoToDelete;

        foreach ($transferenciasRelatedByIdsucursaldestinoToDelete as $transferenciaRelatedByIdsucursaldestinoRemoved) {
            $transferenciaRelatedByIdsucursaldestinoRemoved->setSucursalRelatedByIdsucursaldestino(null);
        }

        $this->collTransferenciasRelatedByIdsucursaldestino = null;
        foreach ($transferenciasRelatedByIdsucursaldestino as $transferenciaRelatedByIdsucursaldestino) {
            $this->addTransferenciaRelatedByIdsucursaldestino($transferenciaRelatedByIdsucursaldestino);
        }

        $this->collTransferenciasRelatedByIdsucursaldestino = $transferenciasRelatedByIdsucursaldestino;
        $this->collTransferenciasRelatedByIdsucursaldestinoPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Transferencia objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Transferencia objects.
     * @throws PropelException
     */
    public function countTransferenciasRelatedByIdsucursaldestino(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdsucursaldestinoPartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdsucursaldestino || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdsucursaldestino) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTransferenciasRelatedByIdsucursaldestino());
            }
            $query = TransferenciaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursalRelatedByIdsucursaldestino($this)
                ->count($con);
        }

        return count($this->collTransferenciasRelatedByIdsucursaldestino);
    }

    /**
     * Method called to associate a Transferencia object to this object
     * through the Transferencia foreign key attribute.
     *
     * @param    Transferencia $l Transferencia
     * @return Sucursal The current object (for fluent API support)
     */
    public function addTransferenciaRelatedByIdsucursaldestino(Transferencia $l)
    {
        if ($this->collTransferenciasRelatedByIdsucursaldestino === null) {
            $this->initTransferenciasRelatedByIdsucursaldestino();
            $this->collTransferenciasRelatedByIdsucursaldestinoPartial = true;
        }

        if (!in_array($l, $this->collTransferenciasRelatedByIdsucursaldestino->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTransferenciaRelatedByIdsucursaldestino($l);

            if ($this->transferenciasRelatedByIdsucursaldestinoScheduledForDeletion and $this->transferenciasRelatedByIdsucursaldestinoScheduledForDeletion->contains($l)) {
                $this->transferenciasRelatedByIdsucursaldestinoScheduledForDeletion->remove($this->transferenciasRelatedByIdsucursaldestinoScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	TransferenciaRelatedByIdsucursaldestino $transferenciaRelatedByIdsucursaldestino The transferenciaRelatedByIdsucursaldestino object to add.
     */
    protected function doAddTransferenciaRelatedByIdsucursaldestino($transferenciaRelatedByIdsucursaldestino)
    {
        $this->collTransferenciasRelatedByIdsucursaldestino[]= $transferenciaRelatedByIdsucursaldestino;
        $transferenciaRelatedByIdsucursaldestino->setSucursalRelatedByIdsucursaldestino($this);
    }

    /**
     * @param	TransferenciaRelatedByIdsucursaldestino $transferenciaRelatedByIdsucursaldestino The transferenciaRelatedByIdsucursaldestino object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removeTransferenciaRelatedByIdsucursaldestino($transferenciaRelatedByIdsucursaldestino)
    {
        if ($this->getTransferenciasRelatedByIdsucursaldestino()->contains($transferenciaRelatedByIdsucursaldestino)) {
            $this->collTransferenciasRelatedByIdsucursaldestino->remove($this->collTransferenciasRelatedByIdsucursaldestino->search($transferenciaRelatedByIdsucursaldestino));
            if (null === $this->transferenciasRelatedByIdsucursaldestinoScheduledForDeletion) {
                $this->transferenciasRelatedByIdsucursaldestinoScheduledForDeletion = clone $this->collTransferenciasRelatedByIdsucursaldestino;
                $this->transferenciasRelatedByIdsucursaldestinoScheduledForDeletion->clear();
            }
            $this->transferenciasRelatedByIdsucursaldestinoScheduledForDeletion[]= clone $transferenciaRelatedByIdsucursaldestino;
            $transferenciaRelatedByIdsucursaldestino->setSucursalRelatedByIdsucursaldestino(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdsucursaldestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdsucursaldestinoJoinEmpleadoRelatedByIdempleadocreador($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleadocreador', $join_behavior);

        return $this->getTransferenciasRelatedByIdsucursaldestino($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdsucursaldestino from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdsucursaldestinoJoinEmpleadoRelatedByIdempleadoreceptor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleadoreceptor', $join_behavior);

        return $this->getTransferenciasRelatedByIdsucursaldestino($query, $con);
    }

    /**
     * Clears out the collTransferenciasRelatedByIdsucursalorigen collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Sucursal The current object (for fluent API support)
     * @see        addTransferenciasRelatedByIdsucursalorigen()
     */
    public function clearTransferenciasRelatedByIdsucursalorigen()
    {
        $this->collTransferenciasRelatedByIdsucursalorigen = null; // important to set this to null since that means it is uninitialized
        $this->collTransferenciasRelatedByIdsucursalorigenPartial = null;

        return $this;
    }

    /**
     * reset is the collTransferenciasRelatedByIdsucursalorigen collection loaded partially
     *
     * @return void
     */
    public function resetPartialTransferenciasRelatedByIdsucursalorigen($v = true)
    {
        $this->collTransferenciasRelatedByIdsucursalorigenPartial = $v;
    }

    /**
     * Initializes the collTransferenciasRelatedByIdsucursalorigen collection.
     *
     * By default this just sets the collTransferenciasRelatedByIdsucursalorigen collection to an empty array (like clearcollTransferenciasRelatedByIdsucursalorigen());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTransferenciasRelatedByIdsucursalorigen($overrideExisting = true)
    {
        if (null !== $this->collTransferenciasRelatedByIdsucursalorigen && !$overrideExisting) {
            return;
        }
        $this->collTransferenciasRelatedByIdsucursalorigen = new PropelObjectCollection();
        $this->collTransferenciasRelatedByIdsucursalorigen->setModel('Transferencia');
    }

    /**
     * Gets an array of Transferencia objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Sucursal is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     * @throws PropelException
     */
    public function getTransferenciasRelatedByIdsucursalorigen($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdsucursalorigenPartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdsucursalorigen || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdsucursalorigen) {
                // return empty collection
                $this->initTransferenciasRelatedByIdsucursalorigen();
            } else {
                $collTransferenciasRelatedByIdsucursalorigen = TransferenciaQuery::create(null, $criteria)
                    ->filterBySucursalRelatedByIdsucursalorigen($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTransferenciasRelatedByIdsucursalorigenPartial && count($collTransferenciasRelatedByIdsucursalorigen)) {
                      $this->initTransferenciasRelatedByIdsucursalorigen(false);

                      foreach ($collTransferenciasRelatedByIdsucursalorigen as $obj) {
                        if (false == $this->collTransferenciasRelatedByIdsucursalorigen->contains($obj)) {
                          $this->collTransferenciasRelatedByIdsucursalorigen->append($obj);
                        }
                      }

                      $this->collTransferenciasRelatedByIdsucursalorigenPartial = true;
                    }

                    $collTransferenciasRelatedByIdsucursalorigen->getInternalIterator()->rewind();

                    return $collTransferenciasRelatedByIdsucursalorigen;
                }

                if ($partial && $this->collTransferenciasRelatedByIdsucursalorigen) {
                    foreach ($this->collTransferenciasRelatedByIdsucursalorigen as $obj) {
                        if ($obj->isNew()) {
                            $collTransferenciasRelatedByIdsucursalorigen[] = $obj;
                        }
                    }
                }

                $this->collTransferenciasRelatedByIdsucursalorigen = $collTransferenciasRelatedByIdsucursalorigen;
                $this->collTransferenciasRelatedByIdsucursalorigenPartial = false;
            }
        }

        return $this->collTransferenciasRelatedByIdsucursalorigen;
    }

    /**
     * Sets a collection of TransferenciaRelatedByIdsucursalorigen objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $transferenciasRelatedByIdsucursalorigen A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Sucursal The current object (for fluent API support)
     */
    public function setTransferenciasRelatedByIdsucursalorigen(PropelCollection $transferenciasRelatedByIdsucursalorigen, PropelPDO $con = null)
    {
        $transferenciasRelatedByIdsucursalorigenToDelete = $this->getTransferenciasRelatedByIdsucursalorigen(new Criteria(), $con)->diff($transferenciasRelatedByIdsucursalorigen);


        $this->transferenciasRelatedByIdsucursalorigenScheduledForDeletion = $transferenciasRelatedByIdsucursalorigenToDelete;

        foreach ($transferenciasRelatedByIdsucursalorigenToDelete as $transferenciaRelatedByIdsucursalorigenRemoved) {
            $transferenciaRelatedByIdsucursalorigenRemoved->setSucursalRelatedByIdsucursalorigen(null);
        }

        $this->collTransferenciasRelatedByIdsucursalorigen = null;
        foreach ($transferenciasRelatedByIdsucursalorigen as $transferenciaRelatedByIdsucursalorigen) {
            $this->addTransferenciaRelatedByIdsucursalorigen($transferenciaRelatedByIdsucursalorigen);
        }

        $this->collTransferenciasRelatedByIdsucursalorigen = $transferenciasRelatedByIdsucursalorigen;
        $this->collTransferenciasRelatedByIdsucursalorigenPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Transferencia objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Transferencia objects.
     * @throws PropelException
     */
    public function countTransferenciasRelatedByIdsucursalorigen(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdsucursalorigenPartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdsucursalorigen || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdsucursalorigen) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTransferenciasRelatedByIdsucursalorigen());
            }
            $query = TransferenciaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySucursalRelatedByIdsucursalorigen($this)
                ->count($con);
        }

        return count($this->collTransferenciasRelatedByIdsucursalorigen);
    }

    /**
     * Method called to associate a Transferencia object to this object
     * through the Transferencia foreign key attribute.
     *
     * @param    Transferencia $l Transferencia
     * @return Sucursal The current object (for fluent API support)
     */
    public function addTransferenciaRelatedByIdsucursalorigen(Transferencia $l)
    {
        if ($this->collTransferenciasRelatedByIdsucursalorigen === null) {
            $this->initTransferenciasRelatedByIdsucursalorigen();
            $this->collTransferenciasRelatedByIdsucursalorigenPartial = true;
        }

        if (!in_array($l, $this->collTransferenciasRelatedByIdsucursalorigen->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTransferenciaRelatedByIdsucursalorigen($l);

            if ($this->transferenciasRelatedByIdsucursalorigenScheduledForDeletion and $this->transferenciasRelatedByIdsucursalorigenScheduledForDeletion->contains($l)) {
                $this->transferenciasRelatedByIdsucursalorigenScheduledForDeletion->remove($this->transferenciasRelatedByIdsucursalorigenScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	TransferenciaRelatedByIdsucursalorigen $transferenciaRelatedByIdsucursalorigen The transferenciaRelatedByIdsucursalorigen object to add.
     */
    protected function doAddTransferenciaRelatedByIdsucursalorigen($transferenciaRelatedByIdsucursalorigen)
    {
        $this->collTransferenciasRelatedByIdsucursalorigen[]= $transferenciaRelatedByIdsucursalorigen;
        $transferenciaRelatedByIdsucursalorigen->setSucursalRelatedByIdsucursalorigen($this);
    }

    /**
     * @param	TransferenciaRelatedByIdsucursalorigen $transferenciaRelatedByIdsucursalorigen The transferenciaRelatedByIdsucursalorigen object to remove.
     * @return Sucursal The current object (for fluent API support)
     */
    public function removeTransferenciaRelatedByIdsucursalorigen($transferenciaRelatedByIdsucursalorigen)
    {
        if ($this->getTransferenciasRelatedByIdsucursalorigen()->contains($transferenciaRelatedByIdsucursalorigen)) {
            $this->collTransferenciasRelatedByIdsucursalorigen->remove($this->collTransferenciasRelatedByIdsucursalorigen->search($transferenciaRelatedByIdsucursalorigen));
            if (null === $this->transferenciasRelatedByIdsucursalorigenScheduledForDeletion) {
                $this->transferenciasRelatedByIdsucursalorigenScheduledForDeletion = clone $this->collTransferenciasRelatedByIdsucursalorigen;
                $this->transferenciasRelatedByIdsucursalorigenScheduledForDeletion->clear();
            }
            $this->transferenciasRelatedByIdsucursalorigenScheduledForDeletion[]= clone $transferenciaRelatedByIdsucursalorigen;
            $transferenciaRelatedByIdsucursalorigen->setSucursalRelatedByIdsucursalorigen(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdsucursalorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdsucursalorigenJoinEmpleadoRelatedByIdempleadocreador($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleadocreador', $join_behavior);

        return $this->getTransferenciasRelatedByIdsucursalorigen($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Sucursal is new, it will return
     * an empty collection; or if this Sucursal has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdsucursalorigen from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Sucursal.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdsucursalorigenJoinEmpleadoRelatedByIdempleadoreceptor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleadoreceptor', $join_behavior);

        return $this->getTransferenciasRelatedByIdsucursalorigen($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idsucursal = null;
        $this->sucursal_nombrecomercial = null;
        $this->sucursal_razonsocial = null;
        $this->sucursal_calle = null;
        $this->sucursal_numexterno = null;
        $this->sucursal_numinterior = null;
        $this->sucursal_colonia = null;
        $this->sucursal_codigopostal = null;
        $this->sucursal_ciudad = null;
        $this->sucursal_estado = null;
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
            if ($this->collPedidos) {
                foreach ($this->collPedidos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collProductosucursals) {
                foreach ($this->collProductosucursals as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSucursalempleados) {
                foreach ($this->collSucursalempleados as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTransferenciasRelatedByIdsucursaldestino) {
                foreach ($this->collTransferenciasRelatedByIdsucursaldestino as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTransferenciasRelatedByIdsucursalorigen) {
                foreach ($this->collTransferenciasRelatedByIdsucursalorigen as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collPedidos instanceof PropelCollection) {
            $this->collPedidos->clearIterator();
        }
        $this->collPedidos = null;
        if ($this->collProductosucursals instanceof PropelCollection) {
            $this->collProductosucursals->clearIterator();
        }
        $this->collProductosucursals = null;
        if ($this->collSucursalempleados instanceof PropelCollection) {
            $this->collSucursalempleados->clearIterator();
        }
        $this->collSucursalempleados = null;
        if ($this->collTransferenciasRelatedByIdsucursaldestino instanceof PropelCollection) {
            $this->collTransferenciasRelatedByIdsucursaldestino->clearIterator();
        }
        $this->collTransferenciasRelatedByIdsucursaldestino = null;
        if ($this->collTransferenciasRelatedByIdsucursalorigen instanceof PropelCollection) {
            $this->collTransferenciasRelatedByIdsucursalorigen->clearIterator();
        }
        $this->collTransferenciasRelatedByIdsucursalorigen = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SucursalPeer::DEFAULT_STRING_FORMAT);
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
