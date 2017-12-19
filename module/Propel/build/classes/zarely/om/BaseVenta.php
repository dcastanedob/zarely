<?php


/**
 * Base class that represents a row from the 'venta' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseVenta extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'VentaPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        VentaPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idventa field.
     * @var        int
     */
    protected $idventa;

    /**
     * The value for the idempleadocajero field.
     * @var        int
     */
    protected $idempleadocajero;

    /**
     * The value for the idempleadovendedor field.
     * @var        int
     */
    protected $idempleadovendedor;

    /**
     * The value for the idcliente field.
     * @var        int
     */
    protected $idcliente;

    /**
     * The value for the venta_total field.
     * @var        string
     */
    protected $venta_total;

    /**
     * The value for the venta_fecha field.
     * @var        string
     */
    protected $venta_fecha;

    /**
     * The value for the venta_comprobante field.
     * @var        string
     */
    protected $venta_comprobante;

    /**
     * The value for the idsucursal field.
     * @var        int
     */
    protected $idsucursal;

    /**
     * The value for the venta_estatuspago field.
     * @var        boolean
     */
    protected $venta_estatuspago;

    /**
     * The value for the venta_tipo field.
     * @var        string
     */
    protected $venta_tipo;

    /**
     * The value for the venta_subtotal field.
     * @var        string
     */
    protected $venta_subtotal;

    /**
     * The value for the venta_iva field.
     * @var        string
     */
    protected $venta_iva;

    /**
     * The value for the venta_estatus field.
     * @var        string
     */
    protected $venta_estatus;

    /**
     * The value for the venta_facturacion field.
     * @var        boolean
     */
    protected $venta_facturacion;

    /**
     * @var        Cliente
     */
    protected $aCliente;

    /**
     * @var        Empleado
     */
    protected $aEmpleadoRelatedByIdempleadocajero;

    /**
     * @var        Empleado
     */
    protected $aEmpleadoRelatedByIdempleadovendedor;

    /**
     * @var        Sucursal
     */
    protected $aSucursal;

    /**
     * @var        PropelObjectCollection|Tarjetapuntosdetalle[] Collection to store aggregation of Tarjetapuntosdetalle objects.
     */
    protected $collTarjetapuntosdetalles;
    protected $collTarjetapuntosdetallesPartial;

    /**
     * @var        PropelObjectCollection|Ventadetalle[] Collection to store aggregation of Ventadetalle objects.
     */
    protected $collVentadetalles;
    protected $collVentadetallesPartial;

    /**
     * @var        PropelObjectCollection|Ventapago[] Collection to store aggregation of Ventapago objects.
     */
    protected $collVentapagos;
    protected $collVentapagosPartial;

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
    protected $tarjetapuntosdetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ventadetallesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ventapagosScheduledForDeletion = null;

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
     * Get the [idempleadocajero] column value.
     *
     * @return int
     */
    public function getIdempleadocajero()
    {

        return $this->idempleadocajero;
    }

    /**
     * Get the [idempleadovendedor] column value.
     *
     * @return int
     */
    public function getIdempleadovendedor()
    {

        return $this->idempleadovendedor;
    }

    /**
     * Get the [idcliente] column value.
     *
     * @return int
     */
    public function getIdcliente()
    {

        return $this->idcliente;
    }

    /**
     * Get the [venta_total] column value.
     *
     * @return string
     */
    public function getVentaTotal()
    {

        return $this->venta_total;
    }

    /**
     * Get the [optionally formatted] temporal [venta_fecha] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getVentaFecha($format = 'Y-m-d H:i:s')
    {
        if ($this->venta_fecha === null) {
            return null;
        }

        if ($this->venta_fecha === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->venta_fecha);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->venta_fecha, true), $x);
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
     * Get the [venta_comprobante] column value.
     *
     * @return string
     */
    public function getVentaComprobante()
    {

        return $this->venta_comprobante;
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
     * Get the [venta_estatuspago] column value.
     *
     * @return boolean
     */
    public function getVentaEstatuspago()
    {

        return $this->venta_estatuspago;
    }

    /**
     * Get the [venta_tipo] column value.
     *
     * @return string
     */
    public function getVentaTipo()
    {

        return $this->venta_tipo;
    }

    /**
     * Get the [venta_subtotal] column value.
     *
     * @return string
     */
    public function getVentaSubtotal()
    {

        return $this->venta_subtotal;
    }

    /**
     * Get the [venta_iva] column value.
     *
     * @return string
     */
    public function getVentaIva()
    {

        return $this->venta_iva;
    }

    /**
     * Get the [venta_estatus] column value.
     *
     * @return string
     */
    public function getVentaEstatus()
    {

        return $this->venta_estatus;
    }

    /**
     * Get the [venta_facturacion] column value.
     *
     * @return boolean
     */
    public function getVentaFacturacion()
    {

        return $this->venta_facturacion;
    }

    /**
     * Set the value of [idventa] column.
     *
     * @param  int $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setIdventa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idventa !== $v) {
            $this->idventa = $v;
            $this->modifiedColumns[] = VentaPeer::IDVENTA;
        }


        return $this;
    } // setIdventa()

    /**
     * Set the value of [idempleadocajero] column.
     *
     * @param  int $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setIdempleadocajero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleadocajero !== $v) {
            $this->idempleadocajero = $v;
            $this->modifiedColumns[] = VentaPeer::IDEMPLEADOCAJERO;
        }

        if ($this->aEmpleadoRelatedByIdempleadocajero !== null && $this->aEmpleadoRelatedByIdempleadocajero->getIdempleado() !== $v) {
            $this->aEmpleadoRelatedByIdempleadocajero = null;
        }


        return $this;
    } // setIdempleadocajero()

    /**
     * Set the value of [idempleadovendedor] column.
     *
     * @param  int $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setIdempleadovendedor($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleadovendedor !== $v) {
            $this->idempleadovendedor = $v;
            $this->modifiedColumns[] = VentaPeer::IDEMPLEADOVENDEDOR;
        }

        if ($this->aEmpleadoRelatedByIdempleadovendedor !== null && $this->aEmpleadoRelatedByIdempleadovendedor->getIdempleado() !== $v) {
            $this->aEmpleadoRelatedByIdempleadovendedor = null;
        }


        return $this;
    } // setIdempleadovendedor()

    /**
     * Set the value of [idcliente] column.
     *
     * @param  int $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setIdcliente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcliente !== $v) {
            $this->idcliente = $v;
            $this->modifiedColumns[] = VentaPeer::IDCLIENTE;
        }

        if ($this->aCliente !== null && $this->aCliente->getIdcliente() !== $v) {
            $this->aCliente = null;
        }


        return $this;
    } // setIdcliente()

    /**
     * Set the value of [venta_total] column.
     *
     * @param  string $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaTotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->venta_total !== $v) {
            $this->venta_total = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_TOTAL;
        }


        return $this;
    } // setVentaTotal()

    /**
     * Sets the value of [venta_fecha] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaFecha($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->venta_fecha !== null || $dt !== null) {
            $currentDateAsString = ($this->venta_fecha !== null && $tmpDt = new DateTime($this->venta_fecha)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->venta_fecha = $newDateAsString;
                $this->modifiedColumns[] = VentaPeer::VENTA_FECHA;
            }
        } // if either are not null


        return $this;
    } // setVentaFecha()

    /**
     * Set the value of [venta_comprobante] column.
     *
     * @param  string $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaComprobante($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->venta_comprobante !== $v) {
            $this->venta_comprobante = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_COMPROBANTE;
        }


        return $this;
    } // setVentaComprobante()

    /**
     * Set the value of [idsucursal] column.
     *
     * @param  int $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setIdsucursal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idsucursal !== $v) {
            $this->idsucursal = $v;
            $this->modifiedColumns[] = VentaPeer::IDSUCURSAL;
        }

        if ($this->aSucursal !== null && $this->aSucursal->getIdsucursal() !== $v) {
            $this->aSucursal = null;
        }


        return $this;
    } // setIdsucursal()

    /**
     * Sets the value of the [venta_estatuspago] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaEstatuspago($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->venta_estatuspago !== $v) {
            $this->venta_estatuspago = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_ESTATUSPAGO;
        }


        return $this;
    } // setVentaEstatuspago()

    /**
     * Set the value of [venta_tipo] column.
     *
     * @param  string $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->venta_tipo !== $v) {
            $this->venta_tipo = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_TIPO;
        }


        return $this;
    } // setVentaTipo()

    /**
     * Set the value of [venta_subtotal] column.
     *
     * @param  string $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaSubtotal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->venta_subtotal !== $v) {
            $this->venta_subtotal = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_SUBTOTAL;
        }


        return $this;
    } // setVentaSubtotal()

    /**
     * Set the value of [venta_iva] column.
     *
     * @param  string $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaIva($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->venta_iva !== $v) {
            $this->venta_iva = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_IVA;
        }


        return $this;
    } // setVentaIva()

    /**
     * Set the value of [venta_estatus] column.
     *
     * @param  string $v new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaEstatus($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->venta_estatus !== $v) {
            $this->venta_estatus = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_ESTATUS;
        }


        return $this;
    } // setVentaEstatus()

    /**
     * Sets the value of the [venta_facturacion] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Venta The current object (for fluent API support)
     */
    public function setVentaFacturacion($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->venta_facturacion !== $v) {
            $this->venta_facturacion = $v;
            $this->modifiedColumns[] = VentaPeer::VENTA_FACTURACION;
        }


        return $this;
    } // setVentaFacturacion()

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

            $this->idventa = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->idempleadocajero = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->idempleadovendedor = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->idcliente = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->venta_total = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->venta_fecha = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->venta_comprobante = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->idsucursal = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->venta_estatuspago = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->venta_tipo = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->venta_subtotal = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->venta_iva = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->venta_estatus = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->venta_facturacion = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 14; // 14 = VentaPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Venta object", $e);
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

        if ($this->aEmpleadoRelatedByIdempleadocajero !== null && $this->idempleadocajero !== $this->aEmpleadoRelatedByIdempleadocajero->getIdempleado()) {
            $this->aEmpleadoRelatedByIdempleadocajero = null;
        }
        if ($this->aEmpleadoRelatedByIdempleadovendedor !== null && $this->idempleadovendedor !== $this->aEmpleadoRelatedByIdempleadovendedor->getIdempleado()) {
            $this->aEmpleadoRelatedByIdempleadovendedor = null;
        }
        if ($this->aCliente !== null && $this->idcliente !== $this->aCliente->getIdcliente()) {
            $this->aCliente = null;
        }
        if ($this->aSucursal !== null && $this->idsucursal !== $this->aSucursal->getIdsucursal()) {
            $this->aSucursal = null;
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
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = VentaPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCliente = null;
            $this->aEmpleadoRelatedByIdempleadocajero = null;
            $this->aEmpleadoRelatedByIdempleadovendedor = null;
            $this->aSucursal = null;
            $this->collTarjetapuntosdetalles = null;

            $this->collVentadetalles = null;

            $this->collVentapagos = null;

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
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = VentaQuery::create()
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
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                VentaPeer::addInstanceToPool($this);
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

            if ($this->aCliente !== null) {
                if ($this->aCliente->isModified() || $this->aCliente->isNew()) {
                    $affectedRows += $this->aCliente->save($con);
                }
                $this->setCliente($this->aCliente);
            }

            if ($this->aEmpleadoRelatedByIdempleadocajero !== null) {
                if ($this->aEmpleadoRelatedByIdempleadocajero->isModified() || $this->aEmpleadoRelatedByIdempleadocajero->isNew()) {
                    $affectedRows += $this->aEmpleadoRelatedByIdempleadocajero->save($con);
                }
                $this->setEmpleadoRelatedByIdempleadocajero($this->aEmpleadoRelatedByIdempleadocajero);
            }

            if ($this->aEmpleadoRelatedByIdempleadovendedor !== null) {
                if ($this->aEmpleadoRelatedByIdempleadovendedor->isModified() || $this->aEmpleadoRelatedByIdempleadovendedor->isNew()) {
                    $affectedRows += $this->aEmpleadoRelatedByIdempleadovendedor->save($con);
                }
                $this->setEmpleadoRelatedByIdempleadovendedor($this->aEmpleadoRelatedByIdempleadovendedor);
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

            if ($this->tarjetapuntosdetallesScheduledForDeletion !== null) {
                if (!$this->tarjetapuntosdetallesScheduledForDeletion->isEmpty()) {
                    TarjetapuntosdetalleQuery::create()
                        ->filterByPrimaryKeys($this->tarjetapuntosdetallesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->tarjetapuntosdetallesScheduledForDeletion = null;
                }
            }

            if ($this->collTarjetapuntosdetalles !== null) {
                foreach ($this->collTarjetapuntosdetalles as $referrerFK) {
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

            if ($this->ventapagosScheduledForDeletion !== null) {
                if (!$this->ventapagosScheduledForDeletion->isEmpty()) {
                    VentapagoQuery::create()
                        ->filterByPrimaryKeys($this->ventapagosScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ventapagosScheduledForDeletion = null;
                }
            }

            if ($this->collVentapagos !== null) {
                foreach ($this->collVentapagos as $referrerFK) {
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

        $this->modifiedColumns[] = VentaPeer::IDVENTA;
        if (null !== $this->idventa) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . VentaPeer::IDVENTA . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(VentaPeer::IDVENTA)) {
            $modifiedColumns[':p' . $index++]  = '`idventa`';
        }
        if ($this->isColumnModified(VentaPeer::IDEMPLEADOCAJERO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleadocajero`';
        }
        if ($this->isColumnModified(VentaPeer::IDEMPLEADOVENDEDOR)) {
            $modifiedColumns[':p' . $index++]  = '`idempleadovendedor`';
        }
        if ($this->isColumnModified(VentaPeer::IDCLIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idcliente`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_TOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`venta_total`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_FECHA)) {
            $modifiedColumns[':p' . $index++]  = '`venta_fecha`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_COMPROBANTE)) {
            $modifiedColumns[':p' . $index++]  = '`venta_comprobante`';
        }
        if ($this->isColumnModified(VentaPeer::IDSUCURSAL)) {
            $modifiedColumns[':p' . $index++]  = '`idsucursal`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_ESTATUSPAGO)) {
            $modifiedColumns[':p' . $index++]  = '`venta_estatuspago`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`venta_tipo`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_SUBTOTAL)) {
            $modifiedColumns[':p' . $index++]  = '`venta_subtotal`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_IVA)) {
            $modifiedColumns[':p' . $index++]  = '`venta_iva`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`venta_estatus`';
        }
        if ($this->isColumnModified(VentaPeer::VENTA_FACTURACION)) {
            $modifiedColumns[':p' . $index++]  = '`venta_facturacion`';
        }

        $sql = sprintf(
            'INSERT INTO `venta` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idventa`':
                        $stmt->bindValue($identifier, $this->idventa, PDO::PARAM_INT);
                        break;
                    case '`idempleadocajero`':
                        $stmt->bindValue($identifier, $this->idempleadocajero, PDO::PARAM_INT);
                        break;
                    case '`idempleadovendedor`':
                        $stmt->bindValue($identifier, $this->idempleadovendedor, PDO::PARAM_INT);
                        break;
                    case '`idcliente`':
                        $stmt->bindValue($identifier, $this->idcliente, PDO::PARAM_INT);
                        break;
                    case '`venta_total`':
                        $stmt->bindValue($identifier, $this->venta_total, PDO::PARAM_STR);
                        break;
                    case '`venta_fecha`':
                        $stmt->bindValue($identifier, $this->venta_fecha, PDO::PARAM_STR);
                        break;
                    case '`venta_comprobante`':
                        $stmt->bindValue($identifier, $this->venta_comprobante, PDO::PARAM_STR);
                        break;
                    case '`idsucursal`':
                        $stmt->bindValue($identifier, $this->idsucursal, PDO::PARAM_INT);
                        break;
                    case '`venta_estatuspago`':
                        $stmt->bindValue($identifier, (int) $this->venta_estatuspago, PDO::PARAM_INT);
                        break;
                    case '`venta_tipo`':
                        $stmt->bindValue($identifier, $this->venta_tipo, PDO::PARAM_STR);
                        break;
                    case '`venta_subtotal`':
                        $stmt->bindValue($identifier, $this->venta_subtotal, PDO::PARAM_STR);
                        break;
                    case '`venta_iva`':
                        $stmt->bindValue($identifier, $this->venta_iva, PDO::PARAM_STR);
                        break;
                    case '`venta_estatus`':
                        $stmt->bindValue($identifier, $this->venta_estatus, PDO::PARAM_STR);
                        break;
                    case '`venta_facturacion`':
                        $stmt->bindValue($identifier, (int) $this->venta_facturacion, PDO::PARAM_INT);
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
        $this->setIdventa($pk);

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

            if ($this->aCliente !== null) {
                if (!$this->aCliente->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCliente->getValidationFailures());
                }
            }

            if ($this->aEmpleadoRelatedByIdempleadocajero !== null) {
                if (!$this->aEmpleadoRelatedByIdempleadocajero->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleadoRelatedByIdempleadocajero->getValidationFailures());
                }
            }

            if ($this->aEmpleadoRelatedByIdempleadovendedor !== null) {
                if (!$this->aEmpleadoRelatedByIdempleadovendedor->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aEmpleadoRelatedByIdempleadovendedor->getValidationFailures());
                }
            }

            if ($this->aSucursal !== null) {
                if (!$this->aSucursal->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aSucursal->getValidationFailures());
                }
            }


            if (($retval = VentaPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collTarjetapuntosdetalles !== null) {
                    foreach ($this->collTarjetapuntosdetalles as $referrerFK) {
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

                if ($this->collVentapagos !== null) {
                    foreach ($this->collVentapagos as $referrerFK) {
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
        $pos = VentaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdventa();
                break;
            case 1:
                return $this->getIdempleadocajero();
                break;
            case 2:
                return $this->getIdempleadovendedor();
                break;
            case 3:
                return $this->getIdcliente();
                break;
            case 4:
                return $this->getVentaTotal();
                break;
            case 5:
                return $this->getVentaFecha();
                break;
            case 6:
                return $this->getVentaComprobante();
                break;
            case 7:
                return $this->getIdsucursal();
                break;
            case 8:
                return $this->getVentaEstatuspago();
                break;
            case 9:
                return $this->getVentaTipo();
                break;
            case 10:
                return $this->getVentaSubtotal();
                break;
            case 11:
                return $this->getVentaIva();
                break;
            case 12:
                return $this->getVentaEstatus();
                break;
            case 13:
                return $this->getVentaFacturacion();
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
        if (isset($alreadyDumpedObjects['Venta'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Venta'][$this->getPrimaryKey()] = true;
        $keys = VentaPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdventa(),
            $keys[1] => $this->getIdempleadocajero(),
            $keys[2] => $this->getIdempleadovendedor(),
            $keys[3] => $this->getIdcliente(),
            $keys[4] => $this->getVentaTotal(),
            $keys[5] => $this->getVentaFecha(),
            $keys[6] => $this->getVentaComprobante(),
            $keys[7] => $this->getIdsucursal(),
            $keys[8] => $this->getVentaEstatuspago(),
            $keys[9] => $this->getVentaTipo(),
            $keys[10] => $this->getVentaSubtotal(),
            $keys[11] => $this->getVentaIva(),
            $keys[12] => $this->getVentaEstatus(),
            $keys[13] => $this->getVentaFacturacion(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aCliente) {
                $result['Cliente'] = $this->aCliente->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpleadoRelatedByIdempleadocajero) {
                $result['EmpleadoRelatedByIdempleadocajero'] = $this->aEmpleadoRelatedByIdempleadocajero->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aEmpleadoRelatedByIdempleadovendedor) {
                $result['EmpleadoRelatedByIdempleadovendedor'] = $this->aEmpleadoRelatedByIdempleadovendedor->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aSucursal) {
                $result['Sucursal'] = $this->aSucursal->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collTarjetapuntosdetalles) {
                $result['Tarjetapuntosdetalles'] = $this->collTarjetapuntosdetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVentadetalles) {
                $result['Ventadetalles'] = $this->collVentadetalles->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVentapagos) {
                $result['Ventapagos'] = $this->collVentapagos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = VentaPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdventa($value);
                break;
            case 1:
                $this->setIdempleadocajero($value);
                break;
            case 2:
                $this->setIdempleadovendedor($value);
                break;
            case 3:
                $this->setIdcliente($value);
                break;
            case 4:
                $this->setVentaTotal($value);
                break;
            case 5:
                $this->setVentaFecha($value);
                break;
            case 6:
                $this->setVentaComprobante($value);
                break;
            case 7:
                $this->setIdsucursal($value);
                break;
            case 8:
                $this->setVentaEstatuspago($value);
                break;
            case 9:
                $this->setVentaTipo($value);
                break;
            case 10:
                $this->setVentaSubtotal($value);
                break;
            case 11:
                $this->setVentaIva($value);
                break;
            case 12:
                $this->setVentaEstatus($value);
                break;
            case 13:
                $this->setVentaFacturacion($value);
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
        $keys = VentaPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdventa($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdempleadocajero($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdempleadovendedor($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdcliente($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setVentaTotal($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setVentaFecha($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setVentaComprobante($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdsucursal($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVentaEstatuspago($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setVentaTipo($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setVentaSubtotal($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setVentaIva($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setVentaEstatus($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setVentaFacturacion($arr[$keys[13]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(VentaPeer::DATABASE_NAME);

        if ($this->isColumnModified(VentaPeer::IDVENTA)) $criteria->add(VentaPeer::IDVENTA, $this->idventa);
        if ($this->isColumnModified(VentaPeer::IDEMPLEADOCAJERO)) $criteria->add(VentaPeer::IDEMPLEADOCAJERO, $this->idempleadocajero);
        if ($this->isColumnModified(VentaPeer::IDEMPLEADOVENDEDOR)) $criteria->add(VentaPeer::IDEMPLEADOVENDEDOR, $this->idempleadovendedor);
        if ($this->isColumnModified(VentaPeer::IDCLIENTE)) $criteria->add(VentaPeer::IDCLIENTE, $this->idcliente);
        if ($this->isColumnModified(VentaPeer::VENTA_TOTAL)) $criteria->add(VentaPeer::VENTA_TOTAL, $this->venta_total);
        if ($this->isColumnModified(VentaPeer::VENTA_FECHA)) $criteria->add(VentaPeer::VENTA_FECHA, $this->venta_fecha);
        if ($this->isColumnModified(VentaPeer::VENTA_COMPROBANTE)) $criteria->add(VentaPeer::VENTA_COMPROBANTE, $this->venta_comprobante);
        if ($this->isColumnModified(VentaPeer::IDSUCURSAL)) $criteria->add(VentaPeer::IDSUCURSAL, $this->idsucursal);
        if ($this->isColumnModified(VentaPeer::VENTA_ESTATUSPAGO)) $criteria->add(VentaPeer::VENTA_ESTATUSPAGO, $this->venta_estatuspago);
        if ($this->isColumnModified(VentaPeer::VENTA_TIPO)) $criteria->add(VentaPeer::VENTA_TIPO, $this->venta_tipo);
        if ($this->isColumnModified(VentaPeer::VENTA_SUBTOTAL)) $criteria->add(VentaPeer::VENTA_SUBTOTAL, $this->venta_subtotal);
        if ($this->isColumnModified(VentaPeer::VENTA_IVA)) $criteria->add(VentaPeer::VENTA_IVA, $this->venta_iva);
        if ($this->isColumnModified(VentaPeer::VENTA_ESTATUS)) $criteria->add(VentaPeer::VENTA_ESTATUS, $this->venta_estatus);
        if ($this->isColumnModified(VentaPeer::VENTA_FACTURACION)) $criteria->add(VentaPeer::VENTA_FACTURACION, $this->venta_facturacion);

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
        $criteria = new Criteria(VentaPeer::DATABASE_NAME);
        $criteria->add(VentaPeer::IDVENTA, $this->idventa);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdventa();
    }

    /**
     * Generic method to set the primary key (idventa column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdventa($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdventa();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Venta (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdempleadocajero($this->getIdempleadocajero());
        $copyObj->setIdempleadovendedor($this->getIdempleadovendedor());
        $copyObj->setIdcliente($this->getIdcliente());
        $copyObj->setVentaTotal($this->getVentaTotal());
        $copyObj->setVentaFecha($this->getVentaFecha());
        $copyObj->setVentaComprobante($this->getVentaComprobante());
        $copyObj->setIdsucursal($this->getIdsucursal());
        $copyObj->setVentaEstatuspago($this->getVentaEstatuspago());
        $copyObj->setVentaTipo($this->getVentaTipo());
        $copyObj->setVentaSubtotal($this->getVentaSubtotal());
        $copyObj->setVentaIva($this->getVentaIva());
        $copyObj->setVentaEstatus($this->getVentaEstatus());
        $copyObj->setVentaFacturacion($this->getVentaFacturacion());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getTarjetapuntosdetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTarjetapuntosdetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVentadetalles() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVentadetalle($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVentapagos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVentapago($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdventa(NULL); // this is a auto-increment column, so set to default value
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
     * @return Venta Clone of current object.
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
     * @return VentaPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new VentaPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Cliente object.
     *
     * @param                  Cliente $v
     * @return Venta The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCliente(Cliente $v = null)
    {
        if ($v === null) {
            $this->setIdcliente(NULL);
        } else {
            $this->setIdcliente($v->getIdcliente());
        }

        $this->aCliente = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Cliente object, it will not be re-added.
        if ($v !== null) {
            $v->addVenta($this);
        }


        return $this;
    }


    /**
     * Get the associated Cliente object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Cliente The associated Cliente object.
     * @throws PropelException
     */
    public function getCliente(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCliente === null && ($this->idcliente !== null) && $doQuery) {
            $this->aCliente = ClienteQuery::create()->findPk($this->idcliente, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCliente->addVentas($this);
             */
        }

        return $this->aCliente;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Venta The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleadoRelatedByIdempleadocajero(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleadocajero(NULL);
        } else {
            $this->setIdempleadocajero($v->getIdempleado());
        }

        $this->aEmpleadoRelatedByIdempleadocajero = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addVentaRelatedByIdempleadocajero($this);
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
    public function getEmpleadoRelatedByIdempleadocajero(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpleadoRelatedByIdempleadocajero === null && ($this->idempleadocajero !== null) && $doQuery) {
            $this->aEmpleadoRelatedByIdempleadocajero = EmpleadoQuery::create()->findPk($this->idempleadocajero, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleadoRelatedByIdempleadocajero->addVentasRelatedByIdempleadocajero($this);
             */
        }

        return $this->aEmpleadoRelatedByIdempleadocajero;
    }

    /**
     * Declares an association between this object and a Empleado object.
     *
     * @param                  Empleado $v
     * @return Venta The current object (for fluent API support)
     * @throws PropelException
     */
    public function setEmpleadoRelatedByIdempleadovendedor(Empleado $v = null)
    {
        if ($v === null) {
            $this->setIdempleadovendedor(NULL);
        } else {
            $this->setIdempleadovendedor($v->getIdempleado());
        }

        $this->aEmpleadoRelatedByIdempleadovendedor = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Empleado object, it will not be re-added.
        if ($v !== null) {
            $v->addVentaRelatedByIdempleadovendedor($this);
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
    public function getEmpleadoRelatedByIdempleadovendedor(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aEmpleadoRelatedByIdempleadovendedor === null && ($this->idempleadovendedor !== null) && $doQuery) {
            $this->aEmpleadoRelatedByIdempleadovendedor = EmpleadoQuery::create()->findPk($this->idempleadovendedor, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aEmpleadoRelatedByIdempleadovendedor->addVentasRelatedByIdempleadovendedor($this);
             */
        }

        return $this->aEmpleadoRelatedByIdempleadovendedor;
    }

    /**
     * Declares an association between this object and a Sucursal object.
     *
     * @param                  Sucursal $v
     * @return Venta The current object (for fluent API support)
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
            $v->addVenta($this);
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
                $this->aSucursal->addVentas($this);
             */
        }

        return $this->aSucursal;
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
        if ('Tarjetapuntosdetalle' == $relationName) {
            $this->initTarjetapuntosdetalles();
        }
        if ('Ventadetalle' == $relationName) {
            $this->initVentadetalles();
        }
        if ('Ventapago' == $relationName) {
            $this->initVentapagos();
        }
    }

    /**
     * Clears out the collTarjetapuntosdetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Venta The current object (for fluent API support)
     * @see        addTarjetapuntosdetalles()
     */
    public function clearTarjetapuntosdetalles()
    {
        $this->collTarjetapuntosdetalles = null; // important to set this to null since that means it is uninitialized
        $this->collTarjetapuntosdetallesPartial = null;

        return $this;
    }

    /**
     * reset is the collTarjetapuntosdetalles collection loaded partially
     *
     * @return void
     */
    public function resetPartialTarjetapuntosdetalles($v = true)
    {
        $this->collTarjetapuntosdetallesPartial = $v;
    }

    /**
     * Initializes the collTarjetapuntosdetalles collection.
     *
     * By default this just sets the collTarjetapuntosdetalles collection to an empty array (like clearcollTarjetapuntosdetalles());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTarjetapuntosdetalles($overrideExisting = true)
    {
        if (null !== $this->collTarjetapuntosdetalles && !$overrideExisting) {
            return;
        }
        $this->collTarjetapuntosdetalles = new PropelObjectCollection();
        $this->collTarjetapuntosdetalles->setModel('Tarjetapuntosdetalle');
    }

    /**
     * Gets an array of Tarjetapuntosdetalle objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Venta is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Tarjetapuntosdetalle[] List of Tarjetapuntosdetalle objects
     * @throws PropelException
     */
    public function getTarjetapuntosdetalles($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTarjetapuntosdetallesPartial && !$this->isNew();
        if (null === $this->collTarjetapuntosdetalles || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTarjetapuntosdetalles) {
                // return empty collection
                $this->initTarjetapuntosdetalles();
            } else {
                $collTarjetapuntosdetalles = TarjetapuntosdetalleQuery::create(null, $criteria)
                    ->filterByVenta($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTarjetapuntosdetallesPartial && count($collTarjetapuntosdetalles)) {
                      $this->initTarjetapuntosdetalles(false);

                      foreach ($collTarjetapuntosdetalles as $obj) {
                        if (false == $this->collTarjetapuntosdetalles->contains($obj)) {
                          $this->collTarjetapuntosdetalles->append($obj);
                        }
                      }

                      $this->collTarjetapuntosdetallesPartial = true;
                    }

                    $collTarjetapuntosdetalles->getInternalIterator()->rewind();

                    return $collTarjetapuntosdetalles;
                }

                if ($partial && $this->collTarjetapuntosdetalles) {
                    foreach ($this->collTarjetapuntosdetalles as $obj) {
                        if ($obj->isNew()) {
                            $collTarjetapuntosdetalles[] = $obj;
                        }
                    }
                }

                $this->collTarjetapuntosdetalles = $collTarjetapuntosdetalles;
                $this->collTarjetapuntosdetallesPartial = false;
            }
        }

        return $this->collTarjetapuntosdetalles;
    }

    /**
     * Sets a collection of Tarjetapuntosdetalle objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $tarjetapuntosdetalles A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Venta The current object (for fluent API support)
     */
    public function setTarjetapuntosdetalles(PropelCollection $tarjetapuntosdetalles, PropelPDO $con = null)
    {
        $tarjetapuntosdetallesToDelete = $this->getTarjetapuntosdetalles(new Criteria(), $con)->diff($tarjetapuntosdetalles);


        $this->tarjetapuntosdetallesScheduledForDeletion = $tarjetapuntosdetallesToDelete;

        foreach ($tarjetapuntosdetallesToDelete as $tarjetapuntosdetalleRemoved) {
            $tarjetapuntosdetalleRemoved->setVenta(null);
        }

        $this->collTarjetapuntosdetalles = null;
        foreach ($tarjetapuntosdetalles as $tarjetapuntosdetalle) {
            $this->addTarjetapuntosdetalle($tarjetapuntosdetalle);
        }

        $this->collTarjetapuntosdetalles = $tarjetapuntosdetalles;
        $this->collTarjetapuntosdetallesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Tarjetapuntosdetalle objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Tarjetapuntosdetalle objects.
     * @throws PropelException
     */
    public function countTarjetapuntosdetalles(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTarjetapuntosdetallesPartial && !$this->isNew();
        if (null === $this->collTarjetapuntosdetalles || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTarjetapuntosdetalles) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTarjetapuntosdetalles());
            }
            $query = TarjetapuntosdetalleQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByVenta($this)
                ->count($con);
        }

        return count($this->collTarjetapuntosdetalles);
    }

    /**
     * Method called to associate a Tarjetapuntosdetalle object to this object
     * through the Tarjetapuntosdetalle foreign key attribute.
     *
     * @param    Tarjetapuntosdetalle $l Tarjetapuntosdetalle
     * @return Venta The current object (for fluent API support)
     */
    public function addTarjetapuntosdetalle(Tarjetapuntosdetalle $l)
    {
        if ($this->collTarjetapuntosdetalles === null) {
            $this->initTarjetapuntosdetalles();
            $this->collTarjetapuntosdetallesPartial = true;
        }

        if (!in_array($l, $this->collTarjetapuntosdetalles->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTarjetapuntosdetalle($l);

            if ($this->tarjetapuntosdetallesScheduledForDeletion and $this->tarjetapuntosdetallesScheduledForDeletion->contains($l)) {
                $this->tarjetapuntosdetallesScheduledForDeletion->remove($this->tarjetapuntosdetallesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Tarjetapuntosdetalle $tarjetapuntosdetalle The tarjetapuntosdetalle object to add.
     */
    protected function doAddTarjetapuntosdetalle($tarjetapuntosdetalle)
    {
        $this->collTarjetapuntosdetalles[]= $tarjetapuntosdetalle;
        $tarjetapuntosdetalle->setVenta($this);
    }

    /**
     * @param	Tarjetapuntosdetalle $tarjetapuntosdetalle The tarjetapuntosdetalle object to remove.
     * @return Venta The current object (for fluent API support)
     */
    public function removeTarjetapuntosdetalle($tarjetapuntosdetalle)
    {
        if ($this->getTarjetapuntosdetalles()->contains($tarjetapuntosdetalle)) {
            $this->collTarjetapuntosdetalles->remove($this->collTarjetapuntosdetalles->search($tarjetapuntosdetalle));
            if (null === $this->tarjetapuntosdetallesScheduledForDeletion) {
                $this->tarjetapuntosdetallesScheduledForDeletion = clone $this->collTarjetapuntosdetalles;
                $this->tarjetapuntosdetallesScheduledForDeletion->clear();
            }
            $this->tarjetapuntosdetallesScheduledForDeletion[]= clone $tarjetapuntosdetalle;
            $tarjetapuntosdetalle->setVenta(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Venta is new, it will return
     * an empty collection; or if this Venta has previously
     * been saved, it will retrieve related Tarjetapuntosdetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Venta.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Tarjetapuntosdetalle[] List of Tarjetapuntosdetalle objects
     */
    public function getTarjetapuntosdetallesJoinEmpleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TarjetapuntosdetalleQuery::create(null, $criteria);
        $query->joinWith('Empleado', $join_behavior);

        return $this->getTarjetapuntosdetalles($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Venta is new, it will return
     * an empty collection; or if this Venta has previously
     * been saved, it will retrieve related Tarjetapuntosdetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Venta.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Tarjetapuntosdetalle[] List of Tarjetapuntosdetalle objects
     */
    public function getTarjetapuntosdetallesJoinTarjetapuntos($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TarjetapuntosdetalleQuery::create(null, $criteria);
        $query->joinWith('Tarjetapuntos', $join_behavior);

        return $this->getTarjetapuntosdetalles($query, $con);
    }

    /**
     * Clears out the collVentadetalles collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Venta The current object (for fluent API support)
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
     * If this Venta is new, it will return
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
                    ->filterByVenta($this)
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
     * @return Venta The current object (for fluent API support)
     */
    public function setVentadetalles(PropelCollection $ventadetalles, PropelPDO $con = null)
    {
        $ventadetallesToDelete = $this->getVentadetalles(new Criteria(), $con)->diff($ventadetalles);


        $this->ventadetallesScheduledForDeletion = $ventadetallesToDelete;

        foreach ($ventadetallesToDelete as $ventadetalleRemoved) {
            $ventadetalleRemoved->setVenta(null);
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
                ->filterByVenta($this)
                ->count($con);
        }

        return count($this->collVentadetalles);
    }

    /**
     * Method called to associate a Ventadetalle object to this object
     * through the Ventadetalle foreign key attribute.
     *
     * @param    Ventadetalle $l Ventadetalle
     * @return Venta The current object (for fluent API support)
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
        $ventadetalle->setVenta($this);
    }

    /**
     * @param	Ventadetalle $ventadetalle The ventadetalle object to remove.
     * @return Venta The current object (for fluent API support)
     */
    public function removeVentadetalle($ventadetalle)
    {
        if ($this->getVentadetalles()->contains($ventadetalle)) {
            $this->collVentadetalles->remove($this->collVentadetalles->search($ventadetalle));
            if (null === $this->ventadetallesScheduledForDeletion) {
                $this->ventadetallesScheduledForDeletion = clone $this->collVentadetalles;
                $this->ventadetallesScheduledForDeletion->clear();
            }
            $this->ventadetallesScheduledForDeletion[]= clone $ventadetalle;
            $ventadetalle->setVenta(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Venta is new, it will return
     * an empty collection; or if this Venta has previously
     * been saved, it will retrieve related Ventadetalles from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Venta.
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
     * Clears out the collVentapagos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Venta The current object (for fluent API support)
     * @see        addVentapagos()
     */
    public function clearVentapagos()
    {
        $this->collVentapagos = null; // important to set this to null since that means it is uninitialized
        $this->collVentapagosPartial = null;

        return $this;
    }

    /**
     * reset is the collVentapagos collection loaded partially
     *
     * @return void
     */
    public function resetPartialVentapagos($v = true)
    {
        $this->collVentapagosPartial = $v;
    }

    /**
     * Initializes the collVentapagos collection.
     *
     * By default this just sets the collVentapagos collection to an empty array (like clearcollVentapagos());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVentapagos($overrideExisting = true)
    {
        if (null !== $this->collVentapagos && !$overrideExisting) {
            return;
        }
        $this->collVentapagos = new PropelObjectCollection();
        $this->collVentapagos->setModel('Ventapago');
    }

    /**
     * Gets an array of Ventapago objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Venta is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Ventapago[] List of Ventapago objects
     * @throws PropelException
     */
    public function getVentapagos($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVentapagosPartial && !$this->isNew();
        if (null === $this->collVentapagos || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVentapagos) {
                // return empty collection
                $this->initVentapagos();
            } else {
                $collVentapagos = VentapagoQuery::create(null, $criteria)
                    ->filterByVenta($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVentapagosPartial && count($collVentapagos)) {
                      $this->initVentapagos(false);

                      foreach ($collVentapagos as $obj) {
                        if (false == $this->collVentapagos->contains($obj)) {
                          $this->collVentapagos->append($obj);
                        }
                      }

                      $this->collVentapagosPartial = true;
                    }

                    $collVentapagos->getInternalIterator()->rewind();

                    return $collVentapagos;
                }

                if ($partial && $this->collVentapagos) {
                    foreach ($this->collVentapagos as $obj) {
                        if ($obj->isNew()) {
                            $collVentapagos[] = $obj;
                        }
                    }
                }

                $this->collVentapagos = $collVentapagos;
                $this->collVentapagosPartial = false;
            }
        }

        return $this->collVentapagos;
    }

    /**
     * Sets a collection of Ventapago objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ventapagos A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Venta The current object (for fluent API support)
     */
    public function setVentapagos(PropelCollection $ventapagos, PropelPDO $con = null)
    {
        $ventapagosToDelete = $this->getVentapagos(new Criteria(), $con)->diff($ventapagos);


        $this->ventapagosScheduledForDeletion = $ventapagosToDelete;

        foreach ($ventapagosToDelete as $ventapagoRemoved) {
            $ventapagoRemoved->setVenta(null);
        }

        $this->collVentapagos = null;
        foreach ($ventapagos as $ventapago) {
            $this->addVentapago($ventapago);
        }

        $this->collVentapagos = $ventapagos;
        $this->collVentapagosPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Ventapago objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Ventapago objects.
     * @throws PropelException
     */
    public function countVentapagos(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVentapagosPartial && !$this->isNew();
        if (null === $this->collVentapagos || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVentapagos) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVentapagos());
            }
            $query = VentapagoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByVenta($this)
                ->count($con);
        }

        return count($this->collVentapagos);
    }

    /**
     * Method called to associate a Ventapago object to this object
     * through the Ventapago foreign key attribute.
     *
     * @param    Ventapago $l Ventapago
     * @return Venta The current object (for fluent API support)
     */
    public function addVentapago(Ventapago $l)
    {
        if ($this->collVentapagos === null) {
            $this->initVentapagos();
            $this->collVentapagosPartial = true;
        }

        if (!in_array($l, $this->collVentapagos->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVentapago($l);

            if ($this->ventapagosScheduledForDeletion and $this->ventapagosScheduledForDeletion->contains($l)) {
                $this->ventapagosScheduledForDeletion->remove($this->ventapagosScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Ventapago $ventapago The ventapago object to add.
     */
    protected function doAddVentapago($ventapago)
    {
        $this->collVentapagos[]= $ventapago;
        $ventapago->setVenta($this);
    }

    /**
     * @param	Ventapago $ventapago The ventapago object to remove.
     * @return Venta The current object (for fluent API support)
     */
    public function removeVentapago($ventapago)
    {
        if ($this->getVentapagos()->contains($ventapago)) {
            $this->collVentapagos->remove($this->collVentapagos->search($ventapago));
            if (null === $this->ventapagosScheduledForDeletion) {
                $this->ventapagosScheduledForDeletion = clone $this->collVentapagos;
                $this->ventapagosScheduledForDeletion->clear();
            }
            $this->ventapagosScheduledForDeletion[]= clone $ventapago;
            $ventapago->setVenta(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Venta is new, it will return
     * an empty collection; or if this Venta has previously
     * been saved, it will retrieve related Ventapagos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Venta.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventapago[] List of Ventapago objects
     */
    public function getVentapagosJoinEmpleado($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentapagoQuery::create(null, $criteria);
        $query->joinWith('Empleado', $join_behavior);

        return $this->getVentapagos($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idventa = null;
        $this->idempleadocajero = null;
        $this->idempleadovendedor = null;
        $this->idcliente = null;
        $this->venta_total = null;
        $this->venta_fecha = null;
        $this->venta_comprobante = null;
        $this->idsucursal = null;
        $this->venta_estatuspago = null;
        $this->venta_tipo = null;
        $this->venta_subtotal = null;
        $this->venta_iva = null;
        $this->venta_estatus = null;
        $this->venta_facturacion = null;
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
            if ($this->collTarjetapuntosdetalles) {
                foreach ($this->collTarjetapuntosdetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVentadetalles) {
                foreach ($this->collVentadetalles as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVentapagos) {
                foreach ($this->collVentapagos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCliente instanceof Persistent) {
              $this->aCliente->clearAllReferences($deep);
            }
            if ($this->aEmpleadoRelatedByIdempleadocajero instanceof Persistent) {
              $this->aEmpleadoRelatedByIdempleadocajero->clearAllReferences($deep);
            }
            if ($this->aEmpleadoRelatedByIdempleadovendedor instanceof Persistent) {
              $this->aEmpleadoRelatedByIdempleadovendedor->clearAllReferences($deep);
            }
            if ($this->aSucursal instanceof Persistent) {
              $this->aSucursal->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collTarjetapuntosdetalles instanceof PropelCollection) {
            $this->collTarjetapuntosdetalles->clearIterator();
        }
        $this->collTarjetapuntosdetalles = null;
        if ($this->collVentadetalles instanceof PropelCollection) {
            $this->collVentadetalles->clearIterator();
        }
        $this->collVentadetalles = null;
        if ($this->collVentapagos instanceof PropelCollection) {
            $this->collVentapagos->clearIterator();
        }
        $this->collVentapagos = null;
        $this->aCliente = null;
        $this->aEmpleadoRelatedByIdempleadocajero = null;
        $this->aEmpleadoRelatedByIdempleadovendedor = null;
        $this->aSucursal = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(VentaPeer::DEFAULT_STRING_FORMAT);
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
