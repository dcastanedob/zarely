<?php


/**
 * Base class that represents a row from the 'promociondetalle' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BasePromociondetalle extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'PromociondetallePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PromociondetallePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idpromociondetalle field.
     * @var        int
     */
    protected $idpromociondetalle;

    /**
     * The value for the idpromocion field.
     * @var        int
     */
    protected $idpromocion;

    /**
     * The value for the idmarcaoperando field.
     * @var        int
     */
    protected $idmarcaoperando;

    /**
     * The value for the idproductooperando field.
     * @var        int
     */
    protected $idproductooperando;

    /**
     * The value for the promociondetalle_cantidadoperando field.
     * @var        string
     */
    protected $promociondetalle_cantidadoperando;

    /**
     * The value for the idmarcaresultado field.
     * @var        int
     */
    protected $idmarcaresultado;

    /**
     * The value for the idproductoresultado field.
     * @var        int
     */
    protected $idproductoresultado;

    /**
     * The value for the promociondetalle_cantidadresultado field.
     * @var        string
     */
    protected $promociondetalle_cantidadresultado;

    /**
     * @var        Marca
     */
    protected $aMarcaRelatedByIdmarcaoperando;

    /**
     * @var        Marca
     */
    protected $aMarcaRelatedByIdmarcaresultado;

    /**
     * @var        Producto
     */
    protected $aProductoRelatedByIdproductooperando;

    /**
     * @var        Producto
     */
    protected $aProductoRelatedByIdproductoresultado;

    /**
     * @var        Promocion
     */
    protected $aPromocion;

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
     * Get the [idpromociondetalle] column value.
     *
     * @return int
     */
    public function getIdpromociondetalle()
    {

        return $this->idpromociondetalle;
    }

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
     * Get the [idmarcaoperando] column value.
     *
     * @return int
     */
    public function getIdmarcaoperando()
    {

        return $this->idmarcaoperando;
    }

    /**
     * Get the [idproductooperando] column value.
     *
     * @return int
     */
    public function getIdproductooperando()
    {

        return $this->idproductooperando;
    }

    /**
     * Get the [promociondetalle_cantidadoperando] column value.
     *
     * @return string
     */
    public function getPromociondetalleCantidadoperando()
    {

        return $this->promociondetalle_cantidadoperando;
    }

    /**
     * Get the [idmarcaresultado] column value.
     *
     * @return int
     */
    public function getIdmarcaresultado()
    {

        return $this->idmarcaresultado;
    }

    /**
     * Get the [idproductoresultado] column value.
     *
     * @return int
     */
    public function getIdproductoresultado()
    {

        return $this->idproductoresultado;
    }

    /**
     * Get the [promociondetalle_cantidadresultado] column value.
     *
     * @return string
     */
    public function getPromociondetalleCantidadresultado()
    {

        return $this->promociondetalle_cantidadresultado;
    }

    /**
     * Set the value of [idpromociondetalle] column.
     *
     * @param  int $v new value
     * @return Promociondetalle The current object (for fluent API support)
     */
    public function setIdpromociondetalle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpromociondetalle !== $v) {
            $this->idpromociondetalle = $v;
            $this->modifiedColumns[] = PromociondetallePeer::IDPROMOCIONDETALLE;
        }


        return $this;
    } // setIdpromociondetalle()

    /**
     * Set the value of [idpromocion] column.
     *
     * @param  int $v new value
     * @return Promociondetalle The current object (for fluent API support)
     */
    public function setIdpromocion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idpromocion !== $v) {
            $this->idpromocion = $v;
            $this->modifiedColumns[] = PromociondetallePeer::IDPROMOCION;
        }

        if ($this->aPromocion !== null && $this->aPromocion->getIdpromocion() !== $v) {
            $this->aPromocion = null;
        }


        return $this;
    } // setIdpromocion()

    /**
     * Set the value of [idmarcaoperando] column.
     *
     * @param  int $v new value
     * @return Promociondetalle The current object (for fluent API support)
     */
    public function setIdmarcaoperando($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmarcaoperando !== $v) {
            $this->idmarcaoperando = $v;
            $this->modifiedColumns[] = PromociondetallePeer::IDMARCAOPERANDO;
        }

        if ($this->aMarcaRelatedByIdmarcaoperando !== null && $this->aMarcaRelatedByIdmarcaoperando->getIdmarca() !== $v) {
            $this->aMarcaRelatedByIdmarcaoperando = null;
        }


        return $this;
    } // setIdmarcaoperando()

    /**
     * Set the value of [idproductooperando] column.
     *
     * @param  int $v new value
     * @return Promociondetalle The current object (for fluent API support)
     */
    public function setIdproductooperando($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproductooperando !== $v) {
            $this->idproductooperando = $v;
            $this->modifiedColumns[] = PromociondetallePeer::IDPRODUCTOOPERANDO;
        }

        if ($this->aProductoRelatedByIdproductooperando !== null && $this->aProductoRelatedByIdproductooperando->getIdproducto() !== $v) {
            $this->aProductoRelatedByIdproductooperando = null;
        }


        return $this;
    } // setIdproductooperando()

    /**
     * Set the value of [promociondetalle_cantidadoperando] column.
     *
     * @param  string $v new value
     * @return Promociondetalle The current object (for fluent API support)
     */
    public function setPromociondetalleCantidadoperando($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->promociondetalle_cantidadoperando !== $v) {
            $this->promociondetalle_cantidadoperando = $v;
            $this->modifiedColumns[] = PromociondetallePeer::PROMOCIONDETALLE_CANTIDADOPERANDO;
        }


        return $this;
    } // setPromociondetalleCantidadoperando()

    /**
     * Set the value of [idmarcaresultado] column.
     *
     * @param  int $v new value
     * @return Promociondetalle The current object (for fluent API support)
     */
    public function setIdmarcaresultado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idmarcaresultado !== $v) {
            $this->idmarcaresultado = $v;
            $this->modifiedColumns[] = PromociondetallePeer::IDMARCARESULTADO;
        }

        if ($this->aMarcaRelatedByIdmarcaresultado !== null && $this->aMarcaRelatedByIdmarcaresultado->getIdmarca() !== $v) {
            $this->aMarcaRelatedByIdmarcaresultado = null;
        }


        return $this;
    } // setIdmarcaresultado()

    /**
     * Set the value of [idproductoresultado] column.
     *
     * @param  int $v new value
     * @return Promociondetalle The current object (for fluent API support)
     */
    public function setIdproductoresultado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idproductoresultado !== $v) {
            $this->idproductoresultado = $v;
            $this->modifiedColumns[] = PromociondetallePeer::IDPRODUCTORESULTADO;
        }

        if ($this->aProductoRelatedByIdproductoresultado !== null && $this->aProductoRelatedByIdproductoresultado->getIdproducto() !== $v) {
            $this->aProductoRelatedByIdproductoresultado = null;
        }


        return $this;
    } // setIdproductoresultado()

    /**
     * Set the value of [promociondetalle_cantidadresultado] column.
     *
     * @param  string $v new value
     * @return Promociondetalle The current object (for fluent API support)
     */
    public function setPromociondetalleCantidadresultado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->promociondetalle_cantidadresultado !== $v) {
            $this->promociondetalle_cantidadresultado = $v;
            $this->modifiedColumns[] = PromociondetallePeer::PROMOCIONDETALLE_CANTIDADRESULTADO;
        }


        return $this;
    } // setPromociondetalleCantidadresultado()

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

            $this->idpromociondetalle = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idpromocion = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idmarcaoperando = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idproductooperando = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->promociondetalle_cantidadoperando = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->idmarcaresultado = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->idproductoresultado = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->promociondetalle_cantidadresultado = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 8; // 8 = PromociondetallePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Promociondetalle object", $e);
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

        if ($this->aPromocion !== null && $this->idpromocion !== $this->aPromocion->getIdpromocion()) {
            $this->aPromocion = null;
        }
        if ($this->aMarcaRelatedByIdmarcaoperando !== null && $this->idmarcaoperando !== $this->aMarcaRelatedByIdmarcaoperando->getIdmarca()) {
            $this->aMarcaRelatedByIdmarcaoperando = null;
        }
        if ($this->aProductoRelatedByIdproductooperando !== null && $this->idproductooperando !== $this->aProductoRelatedByIdproductooperando->getIdproducto()) {
            $this->aProductoRelatedByIdproductooperando = null;
        }
        if ($this->aMarcaRelatedByIdmarcaresultado !== null && $this->idmarcaresultado !== $this->aMarcaRelatedByIdmarcaresultado->getIdmarca()) {
            $this->aMarcaRelatedByIdmarcaresultado = null;
        }
        if ($this->aProductoRelatedByIdproductoresultado !== null && $this->idproductoresultado !== $this->aProductoRelatedByIdproductoresultado->getIdproducto()) {
            $this->aProductoRelatedByIdproductoresultado = null;
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
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = PromociondetallePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aMarcaRelatedByIdmarcaoperando = null;
            $this->aMarcaRelatedByIdmarcaresultado = null;
            $this->aProductoRelatedByIdproductooperando = null;
            $this->aProductoRelatedByIdproductoresultado = null;
            $this->aPromocion = null;
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
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = PromociondetalleQuery::create()
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
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                PromociondetallePeer::addInstanceToPool($this);
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

            if ($this->aMarcaRelatedByIdmarcaoperando !== null) {
                if ($this->aMarcaRelatedByIdmarcaoperando->isModified() || $this->aMarcaRelatedByIdmarcaoperando->isNew()) {
                    $affectedRows += $this->aMarcaRelatedByIdmarcaoperando->save($con);
                }
                $this->setMarcaRelatedByIdmarcaoperando($this->aMarcaRelatedByIdmarcaoperando);
            }

            if ($this->aMarcaRelatedByIdmarcaresultado !== null) {
                if ($this->aMarcaRelatedByIdmarcaresultado->isModified() || $this->aMarcaRelatedByIdmarcaresultado->isNew()) {
                    $affectedRows += $this->aMarcaRelatedByIdmarcaresultado->save($con);
                }
                $this->setMarcaRelatedByIdmarcaresultado($this->aMarcaRelatedByIdmarcaresultado);
            }

            if ($this->aProductoRelatedByIdproductooperando !== null) {
                if ($this->aProductoRelatedByIdproductooperando->isModified() || $this->aProductoRelatedByIdproductooperando->isNew()) {
                    $affectedRows += $this->aProductoRelatedByIdproductooperando->save($con);
                }
                $this->setProductoRelatedByIdproductooperando($this->aProductoRelatedByIdproductooperando);
            }

            if ($this->aProductoRelatedByIdproductoresultado !== null) {
                if ($this->aProductoRelatedByIdproductoresultado->isModified() || $this->aProductoRelatedByIdproductoresultado->isNew()) {
                    $affectedRows += $this->aProductoRelatedByIdproductoresultado->save($con);
                }
                $this->setProductoRelatedByIdproductoresultado($this->aProductoRelatedByIdproductoresultado);
            }

            if ($this->aPromocion !== null) {
                if ($this->aPromocion->isModified() || $this->aPromocion->isNew()) {
                    $affectedRows += $this->aPromocion->save($con);
                }
                $this->setPromocion($this->aPromocion);
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

        $this->modifiedColumns[] = PromociondetallePeer::IDPROMOCIONDETALLE;
        if (null !== $this->idpromociondetalle) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . PromociondetallePeer::IDPROMOCIONDETALLE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(PromociondetallePeer::IDPROMOCIONDETALLE)) {
            $modifiedColumns[':p' . $index++]  = '`idpromociondetalle`';
        }
        if ($this->isColumnModified(PromociondetallePeer::IDPROMOCION)) {
            $modifiedColumns[':p' . $index++]  = '`idpromocion`';
        }
        if ($this->isColumnModified(PromociondetallePeer::IDMARCAOPERANDO)) {
            $modifiedColumns[':p' . $index++]  = '`idmarcaoperando`';
        }
        if ($this->isColumnModified(PromociondetallePeer::IDPRODUCTOOPERANDO)) {
            $modifiedColumns[':p' . $index++]  = '`idproductooperando`';
        }
        if ($this->isColumnModified(PromociondetallePeer::PROMOCIONDETALLE_CANTIDADOPERANDO)) {
            $modifiedColumns[':p' . $index++]  = '`promociondetalle_cantidadoperando`';
        }
        if ($this->isColumnModified(PromociondetallePeer::IDMARCARESULTADO)) {
            $modifiedColumns[':p' . $index++]  = '`idmarcaresultado`';
        }
        if ($this->isColumnModified(PromociondetallePeer::IDPRODUCTORESULTADO)) {
            $modifiedColumns[':p' . $index++]  = '`idproductoresultado`';
        }
        if ($this->isColumnModified(PromociondetallePeer::PROMOCIONDETALLE_CANTIDADRESULTADO)) {
            $modifiedColumns[':p' . $index++]  = '`promociondetalle_cantidadresultado`';
        }

        $sql = sprintf(
            'INSERT INTO `promociondetalle` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idpromociondetalle`':
                        $stmt->bindValue($identifier, $this->idpromociondetalle, PDO::PARAM_INT);
                        break;
                    case '`idpromocion`':
                        $stmt->bindValue($identifier, $this->idpromocion, PDO::PARAM_INT);
                        break;
                    case '`idmarcaoperando`':
                        $stmt->bindValue($identifier, $this->idmarcaoperando, PDO::PARAM_INT);
                        break;
                    case '`idproductooperando`':
                        $stmt->bindValue($identifier, $this->idproductooperando, PDO::PARAM_INT);
                        break;
                    case '`promociondetalle_cantidadoperando`':
                        $stmt->bindValue($identifier, $this->promociondetalle_cantidadoperando, PDO::PARAM_STR);
                        break;
                    case '`idmarcaresultado`':
                        $stmt->bindValue($identifier, $this->idmarcaresultado, PDO::PARAM_INT);
                        break;
                    case '`idproductoresultado`':
                        $stmt->bindValue($identifier, $this->idproductoresultado, PDO::PARAM_INT);
                        break;
                    case '`promociondetalle_cantidadresultado`':
                        $stmt->bindValue($identifier, $this->promociondetalle_cantidadresultado, PDO::PARAM_STR);
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
        $this->setIdpromociondetalle($pk);

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

            if ($this->aMarcaRelatedByIdmarcaoperando !== null) {
                if (!$this->aMarcaRelatedByIdmarcaoperando->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aMarcaRelatedByIdmarcaoperando->getValidationFailures());
                }
            }

            if ($this->aMarcaRelatedByIdmarcaresultado !== null) {
                if (!$this->aMarcaRelatedByIdmarcaresultado->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aMarcaRelatedByIdmarcaresultado->getValidationFailures());
                }
            }

            if ($this->aProductoRelatedByIdproductooperando !== null) {
                if (!$this->aProductoRelatedByIdproductooperando->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProductoRelatedByIdproductooperando->getValidationFailures());
                }
            }

            if ($this->aProductoRelatedByIdproductoresultado !== null) {
                if (!$this->aProductoRelatedByIdproductoresultado->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aProductoRelatedByIdproductoresultado->getValidationFailures());
                }
            }

            if ($this->aPromocion !== null) {
                if (!$this->aPromocion->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aPromocion->getValidationFailures());
                }
            }


            if (($retval = PromociondetallePeer::doValidate($this, $columns)) !== true) {
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
        $pos = PromociondetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdpromociondetalle();
                break;
            case 1:
                return $this->getIdpromocion();
                break;
            case 2:
                return $this->getIdmarcaoperando();
                break;
            case 3:
                return $this->getIdproductooperando();
                break;
            case 4:
                return $this->getPromociondetalleCantidadoperando();
                break;
            case 5:
                return $this->getIdmarcaresultado();
                break;
            case 6:
                return $this->getIdproductoresultado();
                break;
            case 7:
                return $this->getPromociondetalleCantidadresultado();
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
        if (isset($alreadyDumpedObjects['Promociondetalle'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Promociondetalle'][$this->getPrimaryKey()] = true;
        $keys = PromociondetallePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdpromociondetalle(),
            $keys[1] => $this->getIdpromocion(),
            $keys[2] => $this->getIdmarcaoperando(),
            $keys[3] => $this->getIdproductooperando(),
            $keys[4] => $this->getPromociondetalleCantidadoperando(),
            $keys[5] => $this->getIdmarcaresultado(),
            $keys[6] => $this->getIdproductoresultado(),
            $keys[7] => $this->getPromociondetalleCantidadresultado(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aMarcaRelatedByIdmarcaoperando) {
                $result['MarcaRelatedByIdmarcaoperando'] = $this->aMarcaRelatedByIdmarcaoperando->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aMarcaRelatedByIdmarcaresultado) {
                $result['MarcaRelatedByIdmarcaresultado'] = $this->aMarcaRelatedByIdmarcaresultado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProductoRelatedByIdproductooperando) {
                $result['ProductoRelatedByIdproductooperando'] = $this->aProductoRelatedByIdproductooperando->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aProductoRelatedByIdproductoresultado) {
                $result['ProductoRelatedByIdproductoresultado'] = $this->aProductoRelatedByIdproductoresultado->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aPromocion) {
                $result['Promocion'] = $this->aPromocion->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = PromociondetallePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdpromociondetalle($value);
                break;
            case 1:
                $this->setIdpromocion($value);
                break;
            case 2:
                $this->setIdmarcaoperando($value);
                break;
            case 3:
                $this->setIdproductooperando($value);
                break;
            case 4:
                $this->setPromociondetalleCantidadoperando($value);
                break;
            case 5:
                $this->setIdmarcaresultado($value);
                break;
            case 6:
                $this->setIdproductoresultado($value);
                break;
            case 7:
                $this->setPromociondetalleCantidadresultado($value);
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
        $keys = PromociondetallePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdpromociondetalle($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdpromocion($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdmarcaoperando($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdproductooperando($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setPromociondetalleCantidadoperando($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdmarcaresultado($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdproductoresultado($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setPromociondetalleCantidadresultado($arr[$keys[7]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PromociondetallePeer::DATABASE_NAME);

        if ($this->isColumnModified(PromociondetallePeer::IDPROMOCIONDETALLE)) $criteria->add(PromociondetallePeer::IDPROMOCIONDETALLE, $this->idpromociondetalle);
        if ($this->isColumnModified(PromociondetallePeer::IDPROMOCION)) $criteria->add(PromociondetallePeer::IDPROMOCION, $this->idpromocion);
        if ($this->isColumnModified(PromociondetallePeer::IDMARCAOPERANDO)) $criteria->add(PromociondetallePeer::IDMARCAOPERANDO, $this->idmarcaoperando);
        if ($this->isColumnModified(PromociondetallePeer::IDPRODUCTOOPERANDO)) $criteria->add(PromociondetallePeer::IDPRODUCTOOPERANDO, $this->idproductooperando);
        if ($this->isColumnModified(PromociondetallePeer::PROMOCIONDETALLE_CANTIDADOPERANDO)) $criteria->add(PromociondetallePeer::PROMOCIONDETALLE_CANTIDADOPERANDO, $this->promociondetalle_cantidadoperando);
        if ($this->isColumnModified(PromociondetallePeer::IDMARCARESULTADO)) $criteria->add(PromociondetallePeer::IDMARCARESULTADO, $this->idmarcaresultado);
        if ($this->isColumnModified(PromociondetallePeer::IDPRODUCTORESULTADO)) $criteria->add(PromociondetallePeer::IDPRODUCTORESULTADO, $this->idproductoresultado);
        if ($this->isColumnModified(PromociondetallePeer::PROMOCIONDETALLE_CANTIDADRESULTADO)) $criteria->add(PromociondetallePeer::PROMOCIONDETALLE_CANTIDADRESULTADO, $this->promociondetalle_cantidadresultado);

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
        $criteria = new Criteria(PromociondetallePeer::DATABASE_NAME);
        $criteria->add(PromociondetallePeer::IDPROMOCIONDETALLE, $this->idpromociondetalle);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdpromociondetalle();
    }

    /**
     * Generic method to set the primary key (idpromociondetalle column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdpromociondetalle($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdpromociondetalle();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Promociondetalle (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdpromocion($this->getIdpromocion());
        $copyObj->setIdmarcaoperando($this->getIdmarcaoperando());
        $copyObj->setIdproductooperando($this->getIdproductooperando());
        $copyObj->setPromociondetalleCantidadoperando($this->getPromociondetalleCantidadoperando());
        $copyObj->setIdmarcaresultado($this->getIdmarcaresultado());
        $copyObj->setIdproductoresultado($this->getIdproductoresultado());
        $copyObj->setPromociondetalleCantidadresultado($this->getPromociondetalleCantidadresultado());

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
            $copyObj->setIdpromociondetalle(NULL); // this is a auto-increment column, so set to default value
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
     * @return Promociondetalle Clone of current object.
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
     * @return PromociondetallePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PromociondetallePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Marca object.
     *
     * @param                  Marca $v
     * @return Promociondetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setMarcaRelatedByIdmarcaoperando(Marca $v = null)
    {
        if ($v === null) {
            $this->setIdmarcaoperando(NULL);
        } else {
            $this->setIdmarcaoperando($v->getIdmarca());
        }

        $this->aMarcaRelatedByIdmarcaoperando = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Marca object, it will not be re-added.
        if ($v !== null) {
            $v->addPromociondetalleRelatedByIdmarcaoperando($this);
        }


        return $this;
    }


    /**
     * Get the associated Marca object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Marca The associated Marca object.
     * @throws PropelException
     */
    public function getMarcaRelatedByIdmarcaoperando(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aMarcaRelatedByIdmarcaoperando === null && ($this->idmarcaoperando !== null) && $doQuery) {
            $this->aMarcaRelatedByIdmarcaoperando = MarcaQuery::create()->findPk($this->idmarcaoperando, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aMarcaRelatedByIdmarcaoperando->addPromociondetallesRelatedByIdmarcaoperando($this);
             */
        }

        return $this->aMarcaRelatedByIdmarcaoperando;
    }

    /**
     * Declares an association between this object and a Marca object.
     *
     * @param                  Marca $v
     * @return Promociondetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setMarcaRelatedByIdmarcaresultado(Marca $v = null)
    {
        if ($v === null) {
            $this->setIdmarcaresultado(NULL);
        } else {
            $this->setIdmarcaresultado($v->getIdmarca());
        }

        $this->aMarcaRelatedByIdmarcaresultado = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Marca object, it will not be re-added.
        if ($v !== null) {
            $v->addPromociondetalleRelatedByIdmarcaresultado($this);
        }


        return $this;
    }


    /**
     * Get the associated Marca object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Marca The associated Marca object.
     * @throws PropelException
     */
    public function getMarcaRelatedByIdmarcaresultado(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aMarcaRelatedByIdmarcaresultado === null && ($this->idmarcaresultado !== null) && $doQuery) {
            $this->aMarcaRelatedByIdmarcaresultado = MarcaQuery::create()->findPk($this->idmarcaresultado, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aMarcaRelatedByIdmarcaresultado->addPromociondetallesRelatedByIdmarcaresultado($this);
             */
        }

        return $this->aMarcaRelatedByIdmarcaresultado;
    }

    /**
     * Declares an association between this object and a Producto object.
     *
     * @param                  Producto $v
     * @return Promociondetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProductoRelatedByIdproductooperando(Producto $v = null)
    {
        if ($v === null) {
            $this->setIdproductooperando(NULL);
        } else {
            $this->setIdproductooperando($v->getIdproducto());
        }

        $this->aProductoRelatedByIdproductooperando = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Producto object, it will not be re-added.
        if ($v !== null) {
            $v->addPromociondetalleRelatedByIdproductooperando($this);
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
    public function getProductoRelatedByIdproductooperando(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProductoRelatedByIdproductooperando === null && ($this->idproductooperando !== null) && $doQuery) {
            $this->aProductoRelatedByIdproductooperando = ProductoQuery::create()->findPk($this->idproductooperando, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProductoRelatedByIdproductooperando->addPromociondetallesRelatedByIdproductooperando($this);
             */
        }

        return $this->aProductoRelatedByIdproductooperando;
    }

    /**
     * Declares an association between this object and a Producto object.
     *
     * @param                  Producto $v
     * @return Promociondetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setProductoRelatedByIdproductoresultado(Producto $v = null)
    {
        if ($v === null) {
            $this->setIdproductoresultado(NULL);
        } else {
            $this->setIdproductoresultado($v->getIdproducto());
        }

        $this->aProductoRelatedByIdproductoresultado = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Producto object, it will not be re-added.
        if ($v !== null) {
            $v->addPromociondetalleRelatedByIdproductoresultado($this);
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
    public function getProductoRelatedByIdproductoresultado(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aProductoRelatedByIdproductoresultado === null && ($this->idproductoresultado !== null) && $doQuery) {
            $this->aProductoRelatedByIdproductoresultado = ProductoQuery::create()->findPk($this->idproductoresultado, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aProductoRelatedByIdproductoresultado->addPromociondetallesRelatedByIdproductoresultado($this);
             */
        }

        return $this->aProductoRelatedByIdproductoresultado;
    }

    /**
     * Declares an association between this object and a Promocion object.
     *
     * @param                  Promocion $v
     * @return Promociondetalle The current object (for fluent API support)
     * @throws PropelException
     */
    public function setPromocion(Promocion $v = null)
    {
        if ($v === null) {
            $this->setIdpromocion(NULL);
        } else {
            $this->setIdpromocion($v->getIdpromocion());
        }

        $this->aPromocion = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Promocion object, it will not be re-added.
        if ($v !== null) {
            $v->addPromociondetalle($this);
        }


        return $this;
    }


    /**
     * Get the associated Promocion object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Promocion The associated Promocion object.
     * @throws PropelException
     */
    public function getPromocion(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aPromocion === null && ($this->idpromocion !== null) && $doQuery) {
            $this->aPromocion = PromocionQuery::create()->findPk($this->idpromocion, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aPromocion->addPromociondetalles($this);
             */
        }

        return $this->aPromocion;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idpromociondetalle = null;
        $this->idpromocion = null;
        $this->idmarcaoperando = null;
        $this->idproductooperando = null;
        $this->promociondetalle_cantidadoperando = null;
        $this->idmarcaresultado = null;
        $this->idproductoresultado = null;
        $this->promociondetalle_cantidadresultado = null;
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
            if ($this->aMarcaRelatedByIdmarcaoperando instanceof Persistent) {
              $this->aMarcaRelatedByIdmarcaoperando->clearAllReferences($deep);
            }
            if ($this->aMarcaRelatedByIdmarcaresultado instanceof Persistent) {
              $this->aMarcaRelatedByIdmarcaresultado->clearAllReferences($deep);
            }
            if ($this->aProductoRelatedByIdproductooperando instanceof Persistent) {
              $this->aProductoRelatedByIdproductooperando->clearAllReferences($deep);
            }
            if ($this->aProductoRelatedByIdproductoresultado instanceof Persistent) {
              $this->aProductoRelatedByIdproductoresultado->clearAllReferences($deep);
            }
            if ($this->aPromocion instanceof Persistent) {
              $this->aPromocion->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aMarcaRelatedByIdmarcaoperando = null;
        $this->aMarcaRelatedByIdmarcaresultado = null;
        $this->aProductoRelatedByIdproductooperando = null;
        $this->aProductoRelatedByIdproductoresultado = null;
        $this->aPromocion = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(PromociondetallePeer::DEFAULT_STRING_FORMAT);
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
