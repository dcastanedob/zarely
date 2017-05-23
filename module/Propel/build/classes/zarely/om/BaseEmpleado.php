<?php


/**
 * Base class that represents a row from the 'empleado' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseEmpleado extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'EmpleadoPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        EmpleadoPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idempleado field.
     * @var        int
     */
    protected $idempleado;

    /**
     * The value for the empleado_nombre field.
     * @var        string
     */
    protected $empleado_nombre;

    /**
     * The value for the empleado_apaterno field.
     * @var        string
     */
    protected $empleado_apaterno;

    /**
     * The value for the empleado_amaterno field.
     * @var        string
     */
    protected $empleado_amaterno;

    /**
     * The value for the empleado_rfc field.
     * @var        string
     */
    protected $empleado_rfc;

    /**
     * The value for the empleado_nss field.
     * @var        string
     */
    protected $empleado_nss;

    /**
     * The value for the empleado_curp field.
     * @var        string
     */
    protected $empleado_curp;

    /**
     * The value for the empleado_telefono field.
     * @var        string
     */
    protected $empleado_telefono;

    /**
     * The value for the empleado_email field.
     * @var        string
     */
    protected $empleado_email;

    /**
     * The value for the empleado_estatus field.
     * @var        boolean
     */
    protected $empleado_estatus;

    /**
     * The value for the empleado_username field.
     * @var        string
     */
    protected $empleado_username;

    /**
     * The value for the empleado_password field.
     * @var        string
     */
    protected $empleado_password;

    /**
     * The value for the empleado_comision field.
     * @var        boolean
     */
    protected $empleado_comision;

    /**
     * The value for the empleado_fechaentrada field.
     * @var        string
     */
    protected $empleado_fechaentrada;

    /**
     * The value for the empleado_fechanacimiento field.
     * @var        string
     */
    protected $empleado_fechanacimiento;

    /**
     * The value for the empleado_calle field.
     * @var        string
     */
    protected $empleado_calle;

    /**
     * The value for the empleado_numexterno field.
     * @var        string
     */
    protected $empleado_numexterno;

    /**
     * The value for the empleado_numinterno field.
     * @var        string
     */
    protected $empleado_numinterno;

    /**
     * The value for the empleado_colonia field.
     * @var        string
     */
    protected $empleado_colonia;

    /**
     * The value for the empleado_codigopostal field.
     * @var        string
     */
    protected $empleado_codigopostal;

    /**
     * The value for the empleado_ciudad field.
     * @var        string
     */
    protected $empleado_ciudad;

    /**
     * The value for the empleado_estado field.
     * @var        string
     */
    protected $empleado_estado;

    /**
     * The value for the idrol field.
     * @var        int
     */
    protected $idrol;

    /**
     * @var        Rol
     */
    protected $aRol;

    /**
     * @var        PropelObjectCollection|Cortecaja[] Collection to store aggregation of Cortecaja objects.
     */
    protected $collCortecajas;
    protected $collCortecajasPartial;

    /**
     * @var        PropelObjectCollection|Cuentabancariamovimiento[] Collection to store aggregation of Cuentabancariamovimiento objects.
     */
    protected $collCuentabancariamovimientos;
    protected $collCuentabancariamovimientosPartial;

    /**
     * @var        PropelObjectCollection|Sucursalempleado[] Collection to store aggregation of Sucursalempleado objects.
     */
    protected $collSucursalempleados;
    protected $collSucursalempleadosPartial;

    /**
     * @var        PropelObjectCollection|Transferencia[] Collection to store aggregation of Transferencia objects.
     */
    protected $collTransferenciasRelatedByIdempleadocreador;
    protected $collTransferenciasRelatedByIdempleadocreadorPartial;

    /**
     * @var        PropelObjectCollection|Transferencia[] Collection to store aggregation of Transferencia objects.
     */
    protected $collTransferenciasRelatedByIdempleadoreceptor;
    protected $collTransferenciasRelatedByIdempleadoreceptorPartial;

    /**
     * @var        PropelObjectCollection|Venta[] Collection to store aggregation of Venta objects.
     */
    protected $collVentasRelatedByIdempleadocajero;
    protected $collVentasRelatedByIdempleadocajeroPartial;

    /**
     * @var        PropelObjectCollection|Venta[] Collection to store aggregation of Venta objects.
     */
    protected $collVentasRelatedByIdempleadovendedor;
    protected $collVentasRelatedByIdempleadovendedorPartial;

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
    protected $cortecajasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $cuentabancariamovimientosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $sucursalempleadosScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $transferenciasRelatedByIdempleadocreadorScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $transferenciasRelatedByIdempleadoreceptorScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ventasRelatedByIdempleadocajeroScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ventasRelatedByIdempleadovendedorScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ventapagosScheduledForDeletion = null;

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
     * Get the [empleado_nombre] column value.
     *
     * @return string
     */
    public function getEmpleadoNombre()
    {

        return $this->empleado_nombre;
    }

    /**
     * Get the [empleado_apaterno] column value.
     *
     * @return string
     */
    public function getEmpleadoApaterno()
    {

        return $this->empleado_apaterno;
    }

    /**
     * Get the [empleado_amaterno] column value.
     *
     * @return string
     */
    public function getEmpleadoAmaterno()
    {

        return $this->empleado_amaterno;
    }

    /**
     * Get the [empleado_rfc] column value.
     *
     * @return string
     */
    public function getEmpleadoRfc()
    {

        return $this->empleado_rfc;
    }

    /**
     * Get the [empleado_nss] column value.
     *
     * @return string
     */
    public function getEmpleadoNss()
    {

        return $this->empleado_nss;
    }

    /**
     * Get the [empleado_curp] column value.
     *
     * @return string
     */
    public function getEmpleadoCurp()
    {

        return $this->empleado_curp;
    }

    /**
     * Get the [empleado_telefono] column value.
     *
     * @return string
     */
    public function getEmpleadoTelefono()
    {

        return $this->empleado_telefono;
    }

    /**
     * Get the [empleado_email] column value.
     *
     * @return string
     */
    public function getEmpleadoEmail()
    {

        return $this->empleado_email;
    }

    /**
     * Get the [empleado_estatus] column value.
     *
     * @return boolean
     */
    public function getEmpleadoEstatus()
    {

        return $this->empleado_estatus;
    }

    /**
     * Get the [empleado_username] column value.
     *
     * @return string
     */
    public function getEmpleadoUsername()
    {

        return $this->empleado_username;
    }

    /**
     * Get the [empleado_password] column value.
     *
     * @return string
     */
    public function getEmpleadoPassword()
    {

        return $this->empleado_password;
    }

    /**
     * Get the [empleado_comision] column value.
     *
     * @return boolean
     */
    public function getEmpleadoComision()
    {

        return $this->empleado_comision;
    }

    /**
     * Get the [optionally formatted] temporal [empleado_fechaentrada] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEmpleadoFechaentrada($format = 'Y-m-d H:i:s')
    {
        if ($this->empleado_fechaentrada === null) {
            return null;
        }

        if ($this->empleado_fechaentrada === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->empleado_fechaentrada);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->empleado_fechaentrada, true), $x);
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
     * Get the [optionally formatted] temporal [empleado_fechanacimiento] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEmpleadoFechanacimiento($format = '%x')
    {
        if ($this->empleado_fechanacimiento === null) {
            return null;
        }

        if ($this->empleado_fechanacimiento === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->empleado_fechanacimiento);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->empleado_fechanacimiento, true), $x);
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
     * Get the [empleado_calle] column value.
     *
     * @return string
     */
    public function getEmpleadoCalle()
    {

        return $this->empleado_calle;
    }

    /**
     * Get the [empleado_numexterno] column value.
     *
     * @return string
     */
    public function getEmpleadoNumexterno()
    {

        return $this->empleado_numexterno;
    }

    /**
     * Get the [empleado_numinterno] column value.
     *
     * @return string
     */
    public function getEmpleadoNuminterno()
    {

        return $this->empleado_numinterno;
    }

    /**
     * Get the [empleado_colonia] column value.
     *
     * @return string
     */
    public function getEmpleadoColonia()
    {

        return $this->empleado_colonia;
    }

    /**
     * Get the [empleado_codigopostal] column value.
     *
     * @return string
     */
    public function getEmpleadoCodigopostal()
    {

        return $this->empleado_codigopostal;
    }

    /**
     * Get the [empleado_ciudad] column value.
     *
     * @return string
     */
    public function getEmpleadoCiudad()
    {

        return $this->empleado_ciudad;
    }

    /**
     * Get the [empleado_estado] column value.
     *
     * @return string
     */
    public function getEmpleadoEstado()
    {

        return $this->empleado_estado;
    }

    /**
     * Get the [idrol] column value.
     *
     * @return int
     */
    public function getIdrol()
    {

        return $this->idrol;
    }

    /**
     * Set the value of [idempleado] column.
     *
     * @param  int $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setIdempleado($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idempleado !== $v) {
            $this->idempleado = $v;
            $this->modifiedColumns[] = EmpleadoPeer::IDEMPLEADO;
        }


        return $this;
    } // setIdempleado()

    /**
     * Set the value of [empleado_nombre] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_nombre !== $v) {
            $this->empleado_nombre = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_NOMBRE;
        }


        return $this;
    } // setEmpleadoNombre()

    /**
     * Set the value of [empleado_apaterno] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoApaterno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_apaterno !== $v) {
            $this->empleado_apaterno = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_APATERNO;
        }


        return $this;
    } // setEmpleadoApaterno()

    /**
     * Set the value of [empleado_amaterno] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoAmaterno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_amaterno !== $v) {
            $this->empleado_amaterno = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_AMATERNO;
        }


        return $this;
    } // setEmpleadoAmaterno()

    /**
     * Set the value of [empleado_rfc] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_rfc !== $v) {
            $this->empleado_rfc = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_RFC;
        }


        return $this;
    } // setEmpleadoRfc()

    /**
     * Set the value of [empleado_nss] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoNss($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_nss !== $v) {
            $this->empleado_nss = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_NSS;
        }


        return $this;
    } // setEmpleadoNss()

    /**
     * Set the value of [empleado_curp] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoCurp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_curp !== $v) {
            $this->empleado_curp = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_CURP;
        }


        return $this;
    } // setEmpleadoCurp()

    /**
     * Set the value of [empleado_telefono] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoTelefono($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_telefono !== $v) {
            $this->empleado_telefono = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_TELEFONO;
        }


        return $this;
    } // setEmpleadoTelefono()

    /**
     * Set the value of [empleado_email] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoEmail($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_email !== $v) {
            $this->empleado_email = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_EMAIL;
        }


        return $this;
    } // setEmpleadoEmail()

    /**
     * Sets the value of the [empleado_estatus] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoEstatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->empleado_estatus !== $v) {
            $this->empleado_estatus = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_ESTATUS;
        }


        return $this;
    } // setEmpleadoEstatus()

    /**
     * Set the value of [empleado_username] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoUsername($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_username !== $v) {
            $this->empleado_username = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_USERNAME;
        }


        return $this;
    } // setEmpleadoUsername()

    /**
     * Set the value of [empleado_password] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoPassword($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_password !== $v) {
            $this->empleado_password = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_PASSWORD;
        }


        return $this;
    } // setEmpleadoPassword()

    /**
     * Sets the value of the [empleado_comision] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoComision($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->empleado_comision !== $v) {
            $this->empleado_comision = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_COMISION;
        }


        return $this;
    } // setEmpleadoComision()

    /**
     * Sets the value of [empleado_fechaentrada] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoFechaentrada($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->empleado_fechaentrada !== null || $dt !== null) {
            $currentDateAsString = ($this->empleado_fechaentrada !== null && $tmpDt = new DateTime($this->empleado_fechaentrada)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->empleado_fechaentrada = $newDateAsString;
                $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_FECHAENTRADA;
            }
        } // if either are not null


        return $this;
    } // setEmpleadoFechaentrada()

    /**
     * Sets the value of [empleado_fechanacimiento] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoFechanacimiento($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->empleado_fechanacimiento !== null || $dt !== null) {
            $currentDateAsString = ($this->empleado_fechanacimiento !== null && $tmpDt = new DateTime($this->empleado_fechanacimiento)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->empleado_fechanacimiento = $newDateAsString;
                $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_FECHANACIMIENTO;
            }
        } // if either are not null


        return $this;
    } // setEmpleadoFechanacimiento()

    /**
     * Set the value of [empleado_calle] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_calle !== $v) {
            $this->empleado_calle = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_CALLE;
        }


        return $this;
    } // setEmpleadoCalle()

    /**
     * Set the value of [empleado_numexterno] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoNumexterno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_numexterno !== $v) {
            $this->empleado_numexterno = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_NUMEXTERNO;
        }


        return $this;
    } // setEmpleadoNumexterno()

    /**
     * Set the value of [empleado_numinterno] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoNuminterno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_numinterno !== $v) {
            $this->empleado_numinterno = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_NUMINTERNO;
        }


        return $this;
    } // setEmpleadoNuminterno()

    /**
     * Set the value of [empleado_colonia] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_colonia !== $v) {
            $this->empleado_colonia = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_COLONIA;
        }


        return $this;
    } // setEmpleadoColonia()

    /**
     * Set the value of [empleado_codigopostal] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoCodigopostal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_codigopostal !== $v) {
            $this->empleado_codigopostal = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_CODIGOPOSTAL;
        }


        return $this;
    } // setEmpleadoCodigopostal()

    /**
     * Set the value of [empleado_ciudad] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_ciudad !== $v) {
            $this->empleado_ciudad = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_CIUDAD;
        }


        return $this;
    } // setEmpleadoCiudad()

    /**
     * Set the value of [empleado_estado] column.
     *
     * @param  string $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setEmpleadoEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->empleado_estado !== $v) {
            $this->empleado_estado = $v;
            $this->modifiedColumns[] = EmpleadoPeer::EMPLEADO_ESTADO;
        }


        return $this;
    } // setEmpleadoEstado()

    /**
     * Set the value of [idrol] column.
     *
     * @param  int $v new value
     * @return Empleado The current object (for fluent API support)
     */
    public function setIdrol($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idrol !== $v) {
            $this->idrol = $v;
            $this->modifiedColumns[] = EmpleadoPeer::IDROL;
        }

        if ($this->aRol !== null && $this->aRol->getIdrol() !== $v) {
            $this->aRol = null;
        }


        return $this;
    } // setIdrol()

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

            $this->idempleado = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->empleado_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->empleado_apaterno = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->empleado_amaterno = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->empleado_rfc = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->empleado_nss = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->empleado_curp = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->empleado_telefono = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->empleado_email = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->empleado_estatus = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
            $this->empleado_username = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->empleado_password = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->empleado_comision = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
            $this->empleado_fechaentrada = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->empleado_fechanacimiento = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->empleado_calle = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->empleado_numexterno = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->empleado_numinterno = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->empleado_colonia = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->empleado_codigopostal = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->empleado_ciudad = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->empleado_estado = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->idrol = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 23; // 23 = EmpleadoPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Empleado object", $e);
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

        if ($this->aRol !== null && $this->idrol !== $this->aRol->getIdrol()) {
            $this->aRol = null;
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
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = EmpleadoPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aRol = null;
            $this->collCortecajas = null;

            $this->collCuentabancariamovimientos = null;

            $this->collSucursalempleados = null;

            $this->collTransferenciasRelatedByIdempleadocreador = null;

            $this->collTransferenciasRelatedByIdempleadoreceptor = null;

            $this->collVentasRelatedByIdempleadocajero = null;

            $this->collVentasRelatedByIdempleadovendedor = null;

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
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = EmpleadoQuery::create()
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
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                EmpleadoPeer::addInstanceToPool($this);
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

            if ($this->aRol !== null) {
                if ($this->aRol->isModified() || $this->aRol->isNew()) {
                    $affectedRows += $this->aRol->save($con);
                }
                $this->setRol($this->aRol);
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

            if ($this->cortecajasScheduledForDeletion !== null) {
                if (!$this->cortecajasScheduledForDeletion->isEmpty()) {
                    CortecajaQuery::create()
                        ->filterByPrimaryKeys($this->cortecajasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->cortecajasScheduledForDeletion = null;
                }
            }

            if ($this->collCortecajas !== null) {
                foreach ($this->collCortecajas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

            if ($this->transferenciasRelatedByIdempleadocreadorScheduledForDeletion !== null) {
                if (!$this->transferenciasRelatedByIdempleadocreadorScheduledForDeletion->isEmpty()) {
                    TransferenciaQuery::create()
                        ->filterByPrimaryKeys($this->transferenciasRelatedByIdempleadocreadorScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->transferenciasRelatedByIdempleadocreadorScheduledForDeletion = null;
                }
            }

            if ($this->collTransferenciasRelatedByIdempleadocreador !== null) {
                foreach ($this->collTransferenciasRelatedByIdempleadocreador as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion !== null) {
                if (!$this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion->isEmpty()) {
                    TransferenciaQuery::create()
                        ->filterByPrimaryKeys($this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion = null;
                }
            }

            if ($this->collTransferenciasRelatedByIdempleadoreceptor !== null) {
                foreach ($this->collTransferenciasRelatedByIdempleadoreceptor as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ventasRelatedByIdempleadocajeroScheduledForDeletion !== null) {
                if (!$this->ventasRelatedByIdempleadocajeroScheduledForDeletion->isEmpty()) {
                    VentaQuery::create()
                        ->filterByPrimaryKeys($this->ventasRelatedByIdempleadocajeroScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ventasRelatedByIdempleadocajeroScheduledForDeletion = null;
                }
            }

            if ($this->collVentasRelatedByIdempleadocajero !== null) {
                foreach ($this->collVentasRelatedByIdempleadocajero as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ventasRelatedByIdempleadovendedorScheduledForDeletion !== null) {
                if (!$this->ventasRelatedByIdempleadovendedorScheduledForDeletion->isEmpty()) {
                    VentaQuery::create()
                        ->filterByPrimaryKeys($this->ventasRelatedByIdempleadovendedorScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ventasRelatedByIdempleadovendedorScheduledForDeletion = null;
                }
            }

            if ($this->collVentasRelatedByIdempleadovendedor !== null) {
                foreach ($this->collVentasRelatedByIdempleadovendedor as $referrerFK) {
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

        $this->modifiedColumns[] = EmpleadoPeer::IDEMPLEADO;
        if (null !== $this->idempleado) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . EmpleadoPeer::IDEMPLEADO . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(EmpleadoPeer::IDEMPLEADO)) {
            $modifiedColumns[':p' . $index++]  = '`idempleado`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_nombre`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_APATERNO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_apaterno`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_AMATERNO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_amaterno`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_RFC)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_rfc`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NSS)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_nss`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CURP)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_curp`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_TELEFONO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_telefono`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_email`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_estatus`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_USERNAME)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_username`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_password`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_COMISION)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_comision`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_FECHAENTRADA)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_fechaentrada`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_FECHANACIMIENTO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_fechanacimiento`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_calle`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NUMEXTERNO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_numexterno`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NUMINTERNO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_numinterno`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_colonia`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CODIGOPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_codigopostal`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_ciudad`';
        }
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`empleado_estado`';
        }
        if ($this->isColumnModified(EmpleadoPeer::IDROL)) {
            $modifiedColumns[':p' . $index++]  = '`idrol`';
        }

        $sql = sprintf(
            'INSERT INTO `empleado` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idempleado`':
                        $stmt->bindValue($identifier, $this->idempleado, PDO::PARAM_INT);
                        break;
                    case '`empleado_nombre`':
                        $stmt->bindValue($identifier, $this->empleado_nombre, PDO::PARAM_STR);
                        break;
                    case '`empleado_apaterno`':
                        $stmt->bindValue($identifier, $this->empleado_apaterno, PDO::PARAM_STR);
                        break;
                    case '`empleado_amaterno`':
                        $stmt->bindValue($identifier, $this->empleado_amaterno, PDO::PARAM_STR);
                        break;
                    case '`empleado_rfc`':
                        $stmt->bindValue($identifier, $this->empleado_rfc, PDO::PARAM_STR);
                        break;
                    case '`empleado_nss`':
                        $stmt->bindValue($identifier, $this->empleado_nss, PDO::PARAM_STR);
                        break;
                    case '`empleado_curp`':
                        $stmt->bindValue($identifier, $this->empleado_curp, PDO::PARAM_STR);
                        break;
                    case '`empleado_telefono`':
                        $stmt->bindValue($identifier, $this->empleado_telefono, PDO::PARAM_STR);
                        break;
                    case '`empleado_email`':
                        $stmt->bindValue($identifier, $this->empleado_email, PDO::PARAM_STR);
                        break;
                    case '`empleado_estatus`':
                        $stmt->bindValue($identifier, (int) $this->empleado_estatus, PDO::PARAM_INT);
                        break;
                    case '`empleado_username`':
                        $stmt->bindValue($identifier, $this->empleado_username, PDO::PARAM_STR);
                        break;
                    case '`empleado_password`':
                        $stmt->bindValue($identifier, $this->empleado_password, PDO::PARAM_STR);
                        break;
                    case '`empleado_comision`':
                        $stmt->bindValue($identifier, (int) $this->empleado_comision, PDO::PARAM_INT);
                        break;
                    case '`empleado_fechaentrada`':
                        $stmt->bindValue($identifier, $this->empleado_fechaentrada, PDO::PARAM_STR);
                        break;
                    case '`empleado_fechanacimiento`':
                        $stmt->bindValue($identifier, $this->empleado_fechanacimiento, PDO::PARAM_STR);
                        break;
                    case '`empleado_calle`':
                        $stmt->bindValue($identifier, $this->empleado_calle, PDO::PARAM_STR);
                        break;
                    case '`empleado_numexterno`':
                        $stmt->bindValue($identifier, $this->empleado_numexterno, PDO::PARAM_STR);
                        break;
                    case '`empleado_numinterno`':
                        $stmt->bindValue($identifier, $this->empleado_numinterno, PDO::PARAM_STR);
                        break;
                    case '`empleado_colonia`':
                        $stmt->bindValue($identifier, $this->empleado_colonia, PDO::PARAM_STR);
                        break;
                    case '`empleado_codigopostal`':
                        $stmt->bindValue($identifier, $this->empleado_codigopostal, PDO::PARAM_STR);
                        break;
                    case '`empleado_ciudad`':
                        $stmt->bindValue($identifier, $this->empleado_ciudad, PDO::PARAM_STR);
                        break;
                    case '`empleado_estado`':
                        $stmt->bindValue($identifier, $this->empleado_estado, PDO::PARAM_STR);
                        break;
                    case '`idrol`':
                        $stmt->bindValue($identifier, $this->idrol, PDO::PARAM_INT);
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
        $this->setIdempleado($pk);

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

            if ($this->aRol !== null) {
                if (!$this->aRol->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aRol->getValidationFailures());
                }
            }


            if (($retval = EmpleadoPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCortecajas !== null) {
                    foreach ($this->collCortecajas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCuentabancariamovimientos !== null) {
                    foreach ($this->collCuentabancariamovimientos as $referrerFK) {
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

                if ($this->collTransferenciasRelatedByIdempleadocreador !== null) {
                    foreach ($this->collTransferenciasRelatedByIdempleadocreador as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTransferenciasRelatedByIdempleadoreceptor !== null) {
                    foreach ($this->collTransferenciasRelatedByIdempleadoreceptor as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVentasRelatedByIdempleadocajero !== null) {
                    foreach ($this->collVentasRelatedByIdempleadocajero as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVentasRelatedByIdempleadovendedor !== null) {
                    foreach ($this->collVentasRelatedByIdempleadovendedor as $referrerFK) {
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
        $pos = EmpleadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdempleado();
                break;
            case 1:
                return $this->getEmpleadoNombre();
                break;
            case 2:
                return $this->getEmpleadoApaterno();
                break;
            case 3:
                return $this->getEmpleadoAmaterno();
                break;
            case 4:
                return $this->getEmpleadoRfc();
                break;
            case 5:
                return $this->getEmpleadoNss();
                break;
            case 6:
                return $this->getEmpleadoCurp();
                break;
            case 7:
                return $this->getEmpleadoTelefono();
                break;
            case 8:
                return $this->getEmpleadoEmail();
                break;
            case 9:
                return $this->getEmpleadoEstatus();
                break;
            case 10:
                return $this->getEmpleadoUsername();
                break;
            case 11:
                return $this->getEmpleadoPassword();
                break;
            case 12:
                return $this->getEmpleadoComision();
                break;
            case 13:
                return $this->getEmpleadoFechaentrada();
                break;
            case 14:
                return $this->getEmpleadoFechanacimiento();
                break;
            case 15:
                return $this->getEmpleadoCalle();
                break;
            case 16:
                return $this->getEmpleadoNumexterno();
                break;
            case 17:
                return $this->getEmpleadoNuminterno();
                break;
            case 18:
                return $this->getEmpleadoColonia();
                break;
            case 19:
                return $this->getEmpleadoCodigopostal();
                break;
            case 20:
                return $this->getEmpleadoCiudad();
                break;
            case 21:
                return $this->getEmpleadoEstado();
                break;
            case 22:
                return $this->getIdrol();
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
        if (isset($alreadyDumpedObjects['Empleado'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Empleado'][$this->getPrimaryKey()] = true;
        $keys = EmpleadoPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdempleado(),
            $keys[1] => $this->getEmpleadoNombre(),
            $keys[2] => $this->getEmpleadoApaterno(),
            $keys[3] => $this->getEmpleadoAmaterno(),
            $keys[4] => $this->getEmpleadoRfc(),
            $keys[5] => $this->getEmpleadoNss(),
            $keys[6] => $this->getEmpleadoCurp(),
            $keys[7] => $this->getEmpleadoTelefono(),
            $keys[8] => $this->getEmpleadoEmail(),
            $keys[9] => $this->getEmpleadoEstatus(),
            $keys[10] => $this->getEmpleadoUsername(),
            $keys[11] => $this->getEmpleadoPassword(),
            $keys[12] => $this->getEmpleadoComision(),
            $keys[13] => $this->getEmpleadoFechaentrada(),
            $keys[14] => $this->getEmpleadoFechanacimiento(),
            $keys[15] => $this->getEmpleadoCalle(),
            $keys[16] => $this->getEmpleadoNumexterno(),
            $keys[17] => $this->getEmpleadoNuminterno(),
            $keys[18] => $this->getEmpleadoColonia(),
            $keys[19] => $this->getEmpleadoCodigopostal(),
            $keys[20] => $this->getEmpleadoCiudad(),
            $keys[21] => $this->getEmpleadoEstado(),
            $keys[22] => $this->getIdrol(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aRol) {
                $result['Rol'] = $this->aRol->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCortecajas) {
                $result['Cortecajas'] = $this->collCortecajas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCuentabancariamovimientos) {
                $result['Cuentabancariamovimientos'] = $this->collCuentabancariamovimientos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSucursalempleados) {
                $result['Sucursalempleados'] = $this->collSucursalempleados->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTransferenciasRelatedByIdempleadocreador) {
                $result['TransferenciasRelatedByIdempleadocreador'] = $this->collTransferenciasRelatedByIdempleadocreador->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTransferenciasRelatedByIdempleadoreceptor) {
                $result['TransferenciasRelatedByIdempleadoreceptor'] = $this->collTransferenciasRelatedByIdempleadoreceptor->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVentasRelatedByIdempleadocajero) {
                $result['VentasRelatedByIdempleadocajero'] = $this->collVentasRelatedByIdempleadocajero->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVentasRelatedByIdempleadovendedor) {
                $result['VentasRelatedByIdempleadovendedor'] = $this->collVentasRelatedByIdempleadovendedor->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = EmpleadoPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdempleado($value);
                break;
            case 1:
                $this->setEmpleadoNombre($value);
                break;
            case 2:
                $this->setEmpleadoApaterno($value);
                break;
            case 3:
                $this->setEmpleadoAmaterno($value);
                break;
            case 4:
                $this->setEmpleadoRfc($value);
                break;
            case 5:
                $this->setEmpleadoNss($value);
                break;
            case 6:
                $this->setEmpleadoCurp($value);
                break;
            case 7:
                $this->setEmpleadoTelefono($value);
                break;
            case 8:
                $this->setEmpleadoEmail($value);
                break;
            case 9:
                $this->setEmpleadoEstatus($value);
                break;
            case 10:
                $this->setEmpleadoUsername($value);
                break;
            case 11:
                $this->setEmpleadoPassword($value);
                break;
            case 12:
                $this->setEmpleadoComision($value);
                break;
            case 13:
                $this->setEmpleadoFechaentrada($value);
                break;
            case 14:
                $this->setEmpleadoFechanacimiento($value);
                break;
            case 15:
                $this->setEmpleadoCalle($value);
                break;
            case 16:
                $this->setEmpleadoNumexterno($value);
                break;
            case 17:
                $this->setEmpleadoNuminterno($value);
                break;
            case 18:
                $this->setEmpleadoColonia($value);
                break;
            case 19:
                $this->setEmpleadoCodigopostal($value);
                break;
            case 20:
                $this->setEmpleadoCiudad($value);
                break;
            case 21:
                $this->setEmpleadoEstado($value);
                break;
            case 22:
                $this->setIdrol($value);
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
        $keys = EmpleadoPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdempleado($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEmpleadoNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEmpleadoApaterno($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEmpleadoAmaterno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEmpleadoRfc($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setEmpleadoNss($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEmpleadoCurp($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setEmpleadoTelefono($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setEmpleadoEmail($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEmpleadoEstatus($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEmpleadoUsername($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEmpleadoPassword($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setEmpleadoComision($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEmpleadoFechaentrada($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setEmpleadoFechanacimiento($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setEmpleadoCalle($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setEmpleadoNumexterno($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setEmpleadoNuminterno($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setEmpleadoColonia($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setEmpleadoCodigopostal($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setEmpleadoCiudad($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setEmpleadoEstado($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setIdrol($arr[$keys[22]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(EmpleadoPeer::DATABASE_NAME);

        if ($this->isColumnModified(EmpleadoPeer::IDEMPLEADO)) $criteria->add(EmpleadoPeer::IDEMPLEADO, $this->idempleado);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NOMBRE)) $criteria->add(EmpleadoPeer::EMPLEADO_NOMBRE, $this->empleado_nombre);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_APATERNO)) $criteria->add(EmpleadoPeer::EMPLEADO_APATERNO, $this->empleado_apaterno);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_AMATERNO)) $criteria->add(EmpleadoPeer::EMPLEADO_AMATERNO, $this->empleado_amaterno);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_RFC)) $criteria->add(EmpleadoPeer::EMPLEADO_RFC, $this->empleado_rfc);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NSS)) $criteria->add(EmpleadoPeer::EMPLEADO_NSS, $this->empleado_nss);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CURP)) $criteria->add(EmpleadoPeer::EMPLEADO_CURP, $this->empleado_curp);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_TELEFONO)) $criteria->add(EmpleadoPeer::EMPLEADO_TELEFONO, $this->empleado_telefono);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_EMAIL)) $criteria->add(EmpleadoPeer::EMPLEADO_EMAIL, $this->empleado_email);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_ESTATUS)) $criteria->add(EmpleadoPeer::EMPLEADO_ESTATUS, $this->empleado_estatus);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_USERNAME)) $criteria->add(EmpleadoPeer::EMPLEADO_USERNAME, $this->empleado_username);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_PASSWORD)) $criteria->add(EmpleadoPeer::EMPLEADO_PASSWORD, $this->empleado_password);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_COMISION)) $criteria->add(EmpleadoPeer::EMPLEADO_COMISION, $this->empleado_comision);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_FECHAENTRADA)) $criteria->add(EmpleadoPeer::EMPLEADO_FECHAENTRADA, $this->empleado_fechaentrada);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_FECHANACIMIENTO)) $criteria->add(EmpleadoPeer::EMPLEADO_FECHANACIMIENTO, $this->empleado_fechanacimiento);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CALLE)) $criteria->add(EmpleadoPeer::EMPLEADO_CALLE, $this->empleado_calle);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NUMEXTERNO)) $criteria->add(EmpleadoPeer::EMPLEADO_NUMEXTERNO, $this->empleado_numexterno);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_NUMINTERNO)) $criteria->add(EmpleadoPeer::EMPLEADO_NUMINTERNO, $this->empleado_numinterno);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_COLONIA)) $criteria->add(EmpleadoPeer::EMPLEADO_COLONIA, $this->empleado_colonia);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CODIGOPOSTAL)) $criteria->add(EmpleadoPeer::EMPLEADO_CODIGOPOSTAL, $this->empleado_codigopostal);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_CIUDAD)) $criteria->add(EmpleadoPeer::EMPLEADO_CIUDAD, $this->empleado_ciudad);
        if ($this->isColumnModified(EmpleadoPeer::EMPLEADO_ESTADO)) $criteria->add(EmpleadoPeer::EMPLEADO_ESTADO, $this->empleado_estado);
        if ($this->isColumnModified(EmpleadoPeer::IDROL)) $criteria->add(EmpleadoPeer::IDROL, $this->idrol);

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
        $criteria = new Criteria(EmpleadoPeer::DATABASE_NAME);
        $criteria->add(EmpleadoPeer::IDEMPLEADO, $this->idempleado);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdempleado();
    }

    /**
     * Generic method to set the primary key (idempleado column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdempleado($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdempleado();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Empleado (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEmpleadoNombre($this->getEmpleadoNombre());
        $copyObj->setEmpleadoApaterno($this->getEmpleadoApaterno());
        $copyObj->setEmpleadoAmaterno($this->getEmpleadoAmaterno());
        $copyObj->setEmpleadoRfc($this->getEmpleadoRfc());
        $copyObj->setEmpleadoNss($this->getEmpleadoNss());
        $copyObj->setEmpleadoCurp($this->getEmpleadoCurp());
        $copyObj->setEmpleadoTelefono($this->getEmpleadoTelefono());
        $copyObj->setEmpleadoEmail($this->getEmpleadoEmail());
        $copyObj->setEmpleadoEstatus($this->getEmpleadoEstatus());
        $copyObj->setEmpleadoUsername($this->getEmpleadoUsername());
        $copyObj->setEmpleadoPassword($this->getEmpleadoPassword());
        $copyObj->setEmpleadoComision($this->getEmpleadoComision());
        $copyObj->setEmpleadoFechaentrada($this->getEmpleadoFechaentrada());
        $copyObj->setEmpleadoFechanacimiento($this->getEmpleadoFechanacimiento());
        $copyObj->setEmpleadoCalle($this->getEmpleadoCalle());
        $copyObj->setEmpleadoNumexterno($this->getEmpleadoNumexterno());
        $copyObj->setEmpleadoNuminterno($this->getEmpleadoNuminterno());
        $copyObj->setEmpleadoColonia($this->getEmpleadoColonia());
        $copyObj->setEmpleadoCodigopostal($this->getEmpleadoCodigopostal());
        $copyObj->setEmpleadoCiudad($this->getEmpleadoCiudad());
        $copyObj->setEmpleadoEstado($this->getEmpleadoEstado());
        $copyObj->setIdrol($this->getIdrol());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCortecajas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCortecaja($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCuentabancariamovimientos() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCuentabancariamovimiento($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSucursalempleados() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSucursalempleado($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTransferenciasRelatedByIdempleadocreador() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTransferenciaRelatedByIdempleadocreador($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTransferenciasRelatedByIdempleadoreceptor() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTransferenciaRelatedByIdempleadoreceptor($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVentasRelatedByIdempleadocajero() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVentaRelatedByIdempleadocajero($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVentasRelatedByIdempleadovendedor() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVentaRelatedByIdempleadovendedor($relObj->copy($deepCopy));
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
            $copyObj->setIdempleado(NULL); // this is a auto-increment column, so set to default value
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
     * @return Empleado Clone of current object.
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
     * @return EmpleadoPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new EmpleadoPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a Rol object.
     *
     * @param                  Rol $v
     * @return Empleado The current object (for fluent API support)
     * @throws PropelException
     */
    public function setRol(Rol $v = null)
    {
        if ($v === null) {
            $this->setIdrol(NULL);
        } else {
            $this->setIdrol($v->getIdrol());
        }

        $this->aRol = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the Rol object, it will not be re-added.
        if ($v !== null) {
            $v->addEmpleado($this);
        }


        return $this;
    }


    /**
     * Get the associated Rol object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return Rol The associated Rol object.
     * @throws PropelException
     */
    public function getRol(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aRol === null && ($this->idrol !== null) && $doQuery) {
            $this->aRol = RolQuery::create()->findPk($this->idrol, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aRol->addEmpleados($this);
             */
        }

        return $this->aRol;
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
        if ('Cortecaja' == $relationName) {
            $this->initCortecajas();
        }
        if ('Cuentabancariamovimiento' == $relationName) {
            $this->initCuentabancariamovimientos();
        }
        if ('Sucursalempleado' == $relationName) {
            $this->initSucursalempleados();
        }
        if ('TransferenciaRelatedByIdempleadocreador' == $relationName) {
            $this->initTransferenciasRelatedByIdempleadocreador();
        }
        if ('TransferenciaRelatedByIdempleadoreceptor' == $relationName) {
            $this->initTransferenciasRelatedByIdempleadoreceptor();
        }
        if ('VentaRelatedByIdempleadocajero' == $relationName) {
            $this->initVentasRelatedByIdempleadocajero();
        }
        if ('VentaRelatedByIdempleadovendedor' == $relationName) {
            $this->initVentasRelatedByIdempleadovendedor();
        }
        if ('Ventapago' == $relationName) {
            $this->initVentapagos();
        }
    }

    /**
     * Clears out the collCortecajas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addCortecajas()
     */
    public function clearCortecajas()
    {
        $this->collCortecajas = null; // important to set this to null since that means it is uninitialized
        $this->collCortecajasPartial = null;

        return $this;
    }

    /**
     * reset is the collCortecajas collection loaded partially
     *
     * @return void
     */
    public function resetPartialCortecajas($v = true)
    {
        $this->collCortecajasPartial = $v;
    }

    /**
     * Initializes the collCortecajas collection.
     *
     * By default this just sets the collCortecajas collection to an empty array (like clearcollCortecajas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCortecajas($overrideExisting = true)
    {
        if (null !== $this->collCortecajas && !$overrideExisting) {
            return;
        }
        $this->collCortecajas = new PropelObjectCollection();
        $this->collCortecajas->setModel('Cortecaja');
    }

    /**
     * Gets an array of Cortecaja objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Cortecaja[] List of Cortecaja objects
     * @throws PropelException
     */
    public function getCortecajas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCortecajasPartial && !$this->isNew();
        if (null === $this->collCortecajas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCortecajas) {
                // return empty collection
                $this->initCortecajas();
            } else {
                $collCortecajas = CortecajaQuery::create(null, $criteria)
                    ->filterByEmpleado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCortecajasPartial && count($collCortecajas)) {
                      $this->initCortecajas(false);

                      foreach ($collCortecajas as $obj) {
                        if (false == $this->collCortecajas->contains($obj)) {
                          $this->collCortecajas->append($obj);
                        }
                      }

                      $this->collCortecajasPartial = true;
                    }

                    $collCortecajas->getInternalIterator()->rewind();

                    return $collCortecajas;
                }

                if ($partial && $this->collCortecajas) {
                    foreach ($this->collCortecajas as $obj) {
                        if ($obj->isNew()) {
                            $collCortecajas[] = $obj;
                        }
                    }
                }

                $this->collCortecajas = $collCortecajas;
                $this->collCortecajasPartial = false;
            }
        }

        return $this->collCortecajas;
    }

    /**
     * Sets a collection of Cortecaja objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $cortecajas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setCortecajas(PropelCollection $cortecajas, PropelPDO $con = null)
    {
        $cortecajasToDelete = $this->getCortecajas(new Criteria(), $con)->diff($cortecajas);


        $this->cortecajasScheduledForDeletion = $cortecajasToDelete;

        foreach ($cortecajasToDelete as $cortecajaRemoved) {
            $cortecajaRemoved->setEmpleado(null);
        }

        $this->collCortecajas = null;
        foreach ($cortecajas as $cortecaja) {
            $this->addCortecaja($cortecaja);
        }

        $this->collCortecajas = $cortecajas;
        $this->collCortecajasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Cortecaja objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Cortecaja objects.
     * @throws PropelException
     */
    public function countCortecajas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCortecajasPartial && !$this->isNew();
        if (null === $this->collCortecajas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCortecajas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCortecajas());
            }
            $query = CortecajaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collCortecajas);
    }

    /**
     * Method called to associate a Cortecaja object to this object
     * through the Cortecaja foreign key attribute.
     *
     * @param    Cortecaja $l Cortecaja
     * @return Empleado The current object (for fluent API support)
     */
    public function addCortecaja(Cortecaja $l)
    {
        if ($this->collCortecajas === null) {
            $this->initCortecajas();
            $this->collCortecajasPartial = true;
        }

        if (!in_array($l, $this->collCortecajas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCortecaja($l);

            if ($this->cortecajasScheduledForDeletion and $this->cortecajasScheduledForDeletion->contains($l)) {
                $this->cortecajasScheduledForDeletion->remove($this->cortecajasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Cortecaja $cortecaja The cortecaja object to add.
     */
    protected function doAddCortecaja($cortecaja)
    {
        $this->collCortecajas[]= $cortecaja;
        $cortecaja->setEmpleado($this);
    }

    /**
     * @param	Cortecaja $cortecaja The cortecaja object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeCortecaja($cortecaja)
    {
        if ($this->getCortecajas()->contains($cortecaja)) {
            $this->collCortecajas->remove($this->collCortecajas->search($cortecaja));
            if (null === $this->cortecajasScheduledForDeletion) {
                $this->cortecajasScheduledForDeletion = clone $this->collCortecajas;
                $this->cortecajasScheduledForDeletion->clear();
            }
            $this->cortecajasScheduledForDeletion[]= clone $cortecaja;
            $cortecaja->setEmpleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Cortecajas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cortecaja[] List of Cortecaja objects
     */
    public function getCortecajasJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CortecajaQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getCortecajas($query, $con);
    }

    /**
     * Clears out the collCuentabancariamovimientos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
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
     * If this Empleado is new, it will return
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
                    ->filterByEmpleado($this)
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
     * @return Empleado The current object (for fluent API support)
     */
    public function setCuentabancariamovimientos(PropelCollection $cuentabancariamovimientos, PropelPDO $con = null)
    {
        $cuentabancariamovimientosToDelete = $this->getCuentabancariamovimientos(new Criteria(), $con)->diff($cuentabancariamovimientos);


        $this->cuentabancariamovimientosScheduledForDeletion = $cuentabancariamovimientosToDelete;

        foreach ($cuentabancariamovimientosToDelete as $cuentabancariamovimientoRemoved) {
            $cuentabancariamovimientoRemoved->setEmpleado(null);
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
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collCuentabancariamovimientos);
    }

    /**
     * Method called to associate a Cuentabancariamovimiento object to this object
     * through the Cuentabancariamovimiento foreign key attribute.
     *
     * @param    Cuentabancariamovimiento $l Cuentabancariamovimiento
     * @return Empleado The current object (for fluent API support)
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
        $cuentabancariamovimiento->setEmpleado($this);
    }

    /**
     * @param	Cuentabancariamovimiento $cuentabancariamovimiento The cuentabancariamovimiento object to remove.
     * @return Empleado The current object (for fluent API support)
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
            $cuentabancariamovimiento->setEmpleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Cuentabancariamovimientos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Cuentabancariamovimiento[] List of Cuentabancariamovimiento objects
     */
    public function getCuentabancariamovimientosJoinCuentabancaria($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CuentabancariamovimientoQuery::create(null, $criteria);
        $query->joinWith('Cuentabancaria', $join_behavior);

        return $this->getCuentabancariamovimientos($query, $con);
    }

    /**
     * Clears out the collSucursalempleados collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
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
     * If this Empleado is new, it will return
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
                    ->filterByEmpleado($this)
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
     * @return Empleado The current object (for fluent API support)
     */
    public function setSucursalempleados(PropelCollection $sucursalempleados, PropelPDO $con = null)
    {
        $sucursalempleadosToDelete = $this->getSucursalempleados(new Criteria(), $con)->diff($sucursalempleados);


        $this->sucursalempleadosScheduledForDeletion = $sucursalempleadosToDelete;

        foreach ($sucursalempleadosToDelete as $sucursalempleadoRemoved) {
            $sucursalempleadoRemoved->setEmpleado(null);
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
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collSucursalempleados);
    }

    /**
     * Method called to associate a Sucursalempleado object to this object
     * through the Sucursalempleado foreign key attribute.
     *
     * @param    Sucursalempleado $l Sucursalempleado
     * @return Empleado The current object (for fluent API support)
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
        $sucursalempleado->setEmpleado($this);
    }

    /**
     * @param	Sucursalempleado $sucursalempleado The sucursalempleado object to remove.
     * @return Empleado The current object (for fluent API support)
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
            $sucursalempleado->setEmpleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Sucursalempleados from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Sucursalempleado[] List of Sucursalempleado objects
     */
    public function getSucursalempleadosJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = SucursalempleadoQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getSucursalempleados($query, $con);
    }

    /**
     * Clears out the collTransferenciasRelatedByIdempleadocreador collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addTransferenciasRelatedByIdempleadocreador()
     */
    public function clearTransferenciasRelatedByIdempleadocreador()
    {
        $this->collTransferenciasRelatedByIdempleadocreador = null; // important to set this to null since that means it is uninitialized
        $this->collTransferenciasRelatedByIdempleadocreadorPartial = null;

        return $this;
    }

    /**
     * reset is the collTransferenciasRelatedByIdempleadocreador collection loaded partially
     *
     * @return void
     */
    public function resetPartialTransferenciasRelatedByIdempleadocreador($v = true)
    {
        $this->collTransferenciasRelatedByIdempleadocreadorPartial = $v;
    }

    /**
     * Initializes the collTransferenciasRelatedByIdempleadocreador collection.
     *
     * By default this just sets the collTransferenciasRelatedByIdempleadocreador collection to an empty array (like clearcollTransferenciasRelatedByIdempleadocreador());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTransferenciasRelatedByIdempleadocreador($overrideExisting = true)
    {
        if (null !== $this->collTransferenciasRelatedByIdempleadocreador && !$overrideExisting) {
            return;
        }
        $this->collTransferenciasRelatedByIdempleadocreador = new PropelObjectCollection();
        $this->collTransferenciasRelatedByIdempleadocreador->setModel('Transferencia');
    }

    /**
     * Gets an array of Transferencia objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     * @throws PropelException
     */
    public function getTransferenciasRelatedByIdempleadocreador($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdempleadocreadorPartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdempleadocreador || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdempleadocreador) {
                // return empty collection
                $this->initTransferenciasRelatedByIdempleadocreador();
            } else {
                $collTransferenciasRelatedByIdempleadocreador = TransferenciaQuery::create(null, $criteria)
                    ->filterByEmpleadoRelatedByIdempleadocreador($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTransferenciasRelatedByIdempleadocreadorPartial && count($collTransferenciasRelatedByIdempleadocreador)) {
                      $this->initTransferenciasRelatedByIdempleadocreador(false);

                      foreach ($collTransferenciasRelatedByIdempleadocreador as $obj) {
                        if (false == $this->collTransferenciasRelatedByIdempleadocreador->contains($obj)) {
                          $this->collTransferenciasRelatedByIdempleadocreador->append($obj);
                        }
                      }

                      $this->collTransferenciasRelatedByIdempleadocreadorPartial = true;
                    }

                    $collTransferenciasRelatedByIdempleadocreador->getInternalIterator()->rewind();

                    return $collTransferenciasRelatedByIdempleadocreador;
                }

                if ($partial && $this->collTransferenciasRelatedByIdempleadocreador) {
                    foreach ($this->collTransferenciasRelatedByIdempleadocreador as $obj) {
                        if ($obj->isNew()) {
                            $collTransferenciasRelatedByIdempleadocreador[] = $obj;
                        }
                    }
                }

                $this->collTransferenciasRelatedByIdempleadocreador = $collTransferenciasRelatedByIdempleadocreador;
                $this->collTransferenciasRelatedByIdempleadocreadorPartial = false;
            }
        }

        return $this->collTransferenciasRelatedByIdempleadocreador;
    }

    /**
     * Sets a collection of TransferenciaRelatedByIdempleadocreador objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $transferenciasRelatedByIdempleadocreador A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setTransferenciasRelatedByIdempleadocreador(PropelCollection $transferenciasRelatedByIdempleadocreador, PropelPDO $con = null)
    {
        $transferenciasRelatedByIdempleadocreadorToDelete = $this->getTransferenciasRelatedByIdempleadocreador(new Criteria(), $con)->diff($transferenciasRelatedByIdempleadocreador);


        $this->transferenciasRelatedByIdempleadocreadorScheduledForDeletion = $transferenciasRelatedByIdempleadocreadorToDelete;

        foreach ($transferenciasRelatedByIdempleadocreadorToDelete as $transferenciaRelatedByIdempleadocreadorRemoved) {
            $transferenciaRelatedByIdempleadocreadorRemoved->setEmpleadoRelatedByIdempleadocreador(null);
        }

        $this->collTransferenciasRelatedByIdempleadocreador = null;
        foreach ($transferenciasRelatedByIdempleadocreador as $transferenciaRelatedByIdempleadocreador) {
            $this->addTransferenciaRelatedByIdempleadocreador($transferenciaRelatedByIdempleadocreador);
        }

        $this->collTransferenciasRelatedByIdempleadocreador = $transferenciasRelatedByIdempleadocreador;
        $this->collTransferenciasRelatedByIdempleadocreadorPartial = false;

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
    public function countTransferenciasRelatedByIdempleadocreador(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdempleadocreadorPartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdempleadocreador || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdempleadocreador) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTransferenciasRelatedByIdempleadocreador());
            }
            $query = TransferenciaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleadoRelatedByIdempleadocreador($this)
                ->count($con);
        }

        return count($this->collTransferenciasRelatedByIdempleadocreador);
    }

    /**
     * Method called to associate a Transferencia object to this object
     * through the Transferencia foreign key attribute.
     *
     * @param    Transferencia $l Transferencia
     * @return Empleado The current object (for fluent API support)
     */
    public function addTransferenciaRelatedByIdempleadocreador(Transferencia $l)
    {
        if ($this->collTransferenciasRelatedByIdempleadocreador === null) {
            $this->initTransferenciasRelatedByIdempleadocreador();
            $this->collTransferenciasRelatedByIdempleadocreadorPartial = true;
        }

        if (!in_array($l, $this->collTransferenciasRelatedByIdempleadocreador->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTransferenciaRelatedByIdempleadocreador($l);

            if ($this->transferenciasRelatedByIdempleadocreadorScheduledForDeletion and $this->transferenciasRelatedByIdempleadocreadorScheduledForDeletion->contains($l)) {
                $this->transferenciasRelatedByIdempleadocreadorScheduledForDeletion->remove($this->transferenciasRelatedByIdempleadocreadorScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	TransferenciaRelatedByIdempleadocreador $transferenciaRelatedByIdempleadocreador The transferenciaRelatedByIdempleadocreador object to add.
     */
    protected function doAddTransferenciaRelatedByIdempleadocreador($transferenciaRelatedByIdempleadocreador)
    {
        $this->collTransferenciasRelatedByIdempleadocreador[]= $transferenciaRelatedByIdempleadocreador;
        $transferenciaRelatedByIdempleadocreador->setEmpleadoRelatedByIdempleadocreador($this);
    }

    /**
     * @param	TransferenciaRelatedByIdempleadocreador $transferenciaRelatedByIdempleadocreador The transferenciaRelatedByIdempleadocreador object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeTransferenciaRelatedByIdempleadocreador($transferenciaRelatedByIdempleadocreador)
    {
        if ($this->getTransferenciasRelatedByIdempleadocreador()->contains($transferenciaRelatedByIdempleadocreador)) {
            $this->collTransferenciasRelatedByIdempleadocreador->remove($this->collTransferenciasRelatedByIdempleadocreador->search($transferenciaRelatedByIdempleadocreador));
            if (null === $this->transferenciasRelatedByIdempleadocreadorScheduledForDeletion) {
                $this->transferenciasRelatedByIdempleadocreadorScheduledForDeletion = clone $this->collTransferenciasRelatedByIdempleadocreador;
                $this->transferenciasRelatedByIdempleadocreadorScheduledForDeletion->clear();
            }
            $this->transferenciasRelatedByIdempleadocreadorScheduledForDeletion[]= clone $transferenciaRelatedByIdempleadocreador;
            $transferenciaRelatedByIdempleadocreador->setEmpleadoRelatedByIdempleadocreador(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdempleadocreador from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdempleadocreadorJoinSucursalRelatedByIdsucursaldestino($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('SucursalRelatedByIdsucursaldestino', $join_behavior);

        return $this->getTransferenciasRelatedByIdempleadocreador($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdempleadocreador from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdempleadocreadorJoinSucursalRelatedByIdsucursalorigen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('SucursalRelatedByIdsucursalorigen', $join_behavior);

        return $this->getTransferenciasRelatedByIdempleadocreador($query, $con);
    }

    /**
     * Clears out the collTransferenciasRelatedByIdempleadoreceptor collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addTransferenciasRelatedByIdempleadoreceptor()
     */
    public function clearTransferenciasRelatedByIdempleadoreceptor()
    {
        $this->collTransferenciasRelatedByIdempleadoreceptor = null; // important to set this to null since that means it is uninitialized
        $this->collTransferenciasRelatedByIdempleadoreceptorPartial = null;

        return $this;
    }

    /**
     * reset is the collTransferenciasRelatedByIdempleadoreceptor collection loaded partially
     *
     * @return void
     */
    public function resetPartialTransferenciasRelatedByIdempleadoreceptor($v = true)
    {
        $this->collTransferenciasRelatedByIdempleadoreceptorPartial = $v;
    }

    /**
     * Initializes the collTransferenciasRelatedByIdempleadoreceptor collection.
     *
     * By default this just sets the collTransferenciasRelatedByIdempleadoreceptor collection to an empty array (like clearcollTransferenciasRelatedByIdempleadoreceptor());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTransferenciasRelatedByIdempleadoreceptor($overrideExisting = true)
    {
        if (null !== $this->collTransferenciasRelatedByIdempleadoreceptor && !$overrideExisting) {
            return;
        }
        $this->collTransferenciasRelatedByIdempleadoreceptor = new PropelObjectCollection();
        $this->collTransferenciasRelatedByIdempleadoreceptor->setModel('Transferencia');
    }

    /**
     * Gets an array of Transferencia objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     * @throws PropelException
     */
    public function getTransferenciasRelatedByIdempleadoreceptor($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdempleadoreceptorPartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdempleadoreceptor || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdempleadoreceptor) {
                // return empty collection
                $this->initTransferenciasRelatedByIdempleadoreceptor();
            } else {
                $collTransferenciasRelatedByIdempleadoreceptor = TransferenciaQuery::create(null, $criteria)
                    ->filterByEmpleadoRelatedByIdempleadoreceptor($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTransferenciasRelatedByIdempleadoreceptorPartial && count($collTransferenciasRelatedByIdempleadoreceptor)) {
                      $this->initTransferenciasRelatedByIdempleadoreceptor(false);

                      foreach ($collTransferenciasRelatedByIdempleadoreceptor as $obj) {
                        if (false == $this->collTransferenciasRelatedByIdempleadoreceptor->contains($obj)) {
                          $this->collTransferenciasRelatedByIdempleadoreceptor->append($obj);
                        }
                      }

                      $this->collTransferenciasRelatedByIdempleadoreceptorPartial = true;
                    }

                    $collTransferenciasRelatedByIdempleadoreceptor->getInternalIterator()->rewind();

                    return $collTransferenciasRelatedByIdempleadoreceptor;
                }

                if ($partial && $this->collTransferenciasRelatedByIdempleadoreceptor) {
                    foreach ($this->collTransferenciasRelatedByIdempleadoreceptor as $obj) {
                        if ($obj->isNew()) {
                            $collTransferenciasRelatedByIdempleadoreceptor[] = $obj;
                        }
                    }
                }

                $this->collTransferenciasRelatedByIdempleadoreceptor = $collTransferenciasRelatedByIdempleadoreceptor;
                $this->collTransferenciasRelatedByIdempleadoreceptorPartial = false;
            }
        }

        return $this->collTransferenciasRelatedByIdempleadoreceptor;
    }

    /**
     * Sets a collection of TransferenciaRelatedByIdempleadoreceptor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $transferenciasRelatedByIdempleadoreceptor A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setTransferenciasRelatedByIdempleadoreceptor(PropelCollection $transferenciasRelatedByIdempleadoreceptor, PropelPDO $con = null)
    {
        $transferenciasRelatedByIdempleadoreceptorToDelete = $this->getTransferenciasRelatedByIdempleadoreceptor(new Criteria(), $con)->diff($transferenciasRelatedByIdempleadoreceptor);


        $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion = $transferenciasRelatedByIdempleadoreceptorToDelete;

        foreach ($transferenciasRelatedByIdempleadoreceptorToDelete as $transferenciaRelatedByIdempleadoreceptorRemoved) {
            $transferenciaRelatedByIdempleadoreceptorRemoved->setEmpleadoRelatedByIdempleadoreceptor(null);
        }

        $this->collTransferenciasRelatedByIdempleadoreceptor = null;
        foreach ($transferenciasRelatedByIdempleadoreceptor as $transferenciaRelatedByIdempleadoreceptor) {
            $this->addTransferenciaRelatedByIdempleadoreceptor($transferenciaRelatedByIdempleadoreceptor);
        }

        $this->collTransferenciasRelatedByIdempleadoreceptor = $transferenciasRelatedByIdempleadoreceptor;
        $this->collTransferenciasRelatedByIdempleadoreceptorPartial = false;

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
    public function countTransferenciasRelatedByIdempleadoreceptor(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTransferenciasRelatedByIdempleadoreceptorPartial && !$this->isNew();
        if (null === $this->collTransferenciasRelatedByIdempleadoreceptor || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTransferenciasRelatedByIdempleadoreceptor) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTransferenciasRelatedByIdempleadoreceptor());
            }
            $query = TransferenciaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleadoRelatedByIdempleadoreceptor($this)
                ->count($con);
        }

        return count($this->collTransferenciasRelatedByIdempleadoreceptor);
    }

    /**
     * Method called to associate a Transferencia object to this object
     * through the Transferencia foreign key attribute.
     *
     * @param    Transferencia $l Transferencia
     * @return Empleado The current object (for fluent API support)
     */
    public function addTransferenciaRelatedByIdempleadoreceptor(Transferencia $l)
    {
        if ($this->collTransferenciasRelatedByIdempleadoreceptor === null) {
            $this->initTransferenciasRelatedByIdempleadoreceptor();
            $this->collTransferenciasRelatedByIdempleadoreceptorPartial = true;
        }

        if (!in_array($l, $this->collTransferenciasRelatedByIdempleadoreceptor->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTransferenciaRelatedByIdempleadoreceptor($l);

            if ($this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion and $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion->contains($l)) {
                $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion->remove($this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	TransferenciaRelatedByIdempleadoreceptor $transferenciaRelatedByIdempleadoreceptor The transferenciaRelatedByIdempleadoreceptor object to add.
     */
    protected function doAddTransferenciaRelatedByIdempleadoreceptor($transferenciaRelatedByIdempleadoreceptor)
    {
        $this->collTransferenciasRelatedByIdempleadoreceptor[]= $transferenciaRelatedByIdempleadoreceptor;
        $transferenciaRelatedByIdempleadoreceptor->setEmpleadoRelatedByIdempleadoreceptor($this);
    }

    /**
     * @param	TransferenciaRelatedByIdempleadoreceptor $transferenciaRelatedByIdempleadoreceptor The transferenciaRelatedByIdempleadoreceptor object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeTransferenciaRelatedByIdempleadoreceptor($transferenciaRelatedByIdempleadoreceptor)
    {
        if ($this->getTransferenciasRelatedByIdempleadoreceptor()->contains($transferenciaRelatedByIdempleadoreceptor)) {
            $this->collTransferenciasRelatedByIdempleadoreceptor->remove($this->collTransferenciasRelatedByIdempleadoreceptor->search($transferenciaRelatedByIdempleadoreceptor));
            if (null === $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion) {
                $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion = clone $this->collTransferenciasRelatedByIdempleadoreceptor;
                $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion->clear();
            }
            $this->transferenciasRelatedByIdempleadoreceptorScheduledForDeletion[]= $transferenciaRelatedByIdempleadoreceptor;
            $transferenciaRelatedByIdempleadoreceptor->setEmpleadoRelatedByIdempleadoreceptor(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdempleadoreceptor from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdempleadoreceptorJoinSucursalRelatedByIdsucursaldestino($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('SucursalRelatedByIdsucursaldestino', $join_behavior);

        return $this->getTransferenciasRelatedByIdempleadoreceptor($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related TransferenciasRelatedByIdempleadoreceptor from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Transferencia[] List of Transferencia objects
     */
    public function getTransferenciasRelatedByIdempleadoreceptorJoinSucursalRelatedByIdsucursalorigen($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = TransferenciaQuery::create(null, $criteria);
        $query->joinWith('SucursalRelatedByIdsucursalorigen', $join_behavior);

        return $this->getTransferenciasRelatedByIdempleadoreceptor($query, $con);
    }

    /**
     * Clears out the collVentasRelatedByIdempleadocajero collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addVentasRelatedByIdempleadocajero()
     */
    public function clearVentasRelatedByIdempleadocajero()
    {
        $this->collVentasRelatedByIdempleadocajero = null; // important to set this to null since that means it is uninitialized
        $this->collVentasRelatedByIdempleadocajeroPartial = null;

        return $this;
    }

    /**
     * reset is the collVentasRelatedByIdempleadocajero collection loaded partially
     *
     * @return void
     */
    public function resetPartialVentasRelatedByIdempleadocajero($v = true)
    {
        $this->collVentasRelatedByIdempleadocajeroPartial = $v;
    }

    /**
     * Initializes the collVentasRelatedByIdempleadocajero collection.
     *
     * By default this just sets the collVentasRelatedByIdempleadocajero collection to an empty array (like clearcollVentasRelatedByIdempleadocajero());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVentasRelatedByIdempleadocajero($overrideExisting = true)
    {
        if (null !== $this->collVentasRelatedByIdempleadocajero && !$overrideExisting) {
            return;
        }
        $this->collVentasRelatedByIdempleadocajero = new PropelObjectCollection();
        $this->collVentasRelatedByIdempleadocajero->setModel('Venta');
    }

    /**
     * Gets an array of Venta objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Venta[] List of Venta objects
     * @throws PropelException
     */
    public function getVentasRelatedByIdempleadocajero($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVentasRelatedByIdempleadocajeroPartial && !$this->isNew();
        if (null === $this->collVentasRelatedByIdempleadocajero || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVentasRelatedByIdempleadocajero) {
                // return empty collection
                $this->initVentasRelatedByIdempleadocajero();
            } else {
                $collVentasRelatedByIdempleadocajero = VentaQuery::create(null, $criteria)
                    ->filterByEmpleadoRelatedByIdempleadocajero($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVentasRelatedByIdempleadocajeroPartial && count($collVentasRelatedByIdempleadocajero)) {
                      $this->initVentasRelatedByIdempleadocajero(false);

                      foreach ($collVentasRelatedByIdempleadocajero as $obj) {
                        if (false == $this->collVentasRelatedByIdempleadocajero->contains($obj)) {
                          $this->collVentasRelatedByIdempleadocajero->append($obj);
                        }
                      }

                      $this->collVentasRelatedByIdempleadocajeroPartial = true;
                    }

                    $collVentasRelatedByIdempleadocajero->getInternalIterator()->rewind();

                    return $collVentasRelatedByIdempleadocajero;
                }

                if ($partial && $this->collVentasRelatedByIdempleadocajero) {
                    foreach ($this->collVentasRelatedByIdempleadocajero as $obj) {
                        if ($obj->isNew()) {
                            $collVentasRelatedByIdempleadocajero[] = $obj;
                        }
                    }
                }

                $this->collVentasRelatedByIdempleadocajero = $collVentasRelatedByIdempleadocajero;
                $this->collVentasRelatedByIdempleadocajeroPartial = false;
            }
        }

        return $this->collVentasRelatedByIdempleadocajero;
    }

    /**
     * Sets a collection of VentaRelatedByIdempleadocajero objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ventasRelatedByIdempleadocajero A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setVentasRelatedByIdempleadocajero(PropelCollection $ventasRelatedByIdempleadocajero, PropelPDO $con = null)
    {
        $ventasRelatedByIdempleadocajeroToDelete = $this->getVentasRelatedByIdempleadocajero(new Criteria(), $con)->diff($ventasRelatedByIdempleadocajero);


        $this->ventasRelatedByIdempleadocajeroScheduledForDeletion = $ventasRelatedByIdempleadocajeroToDelete;

        foreach ($ventasRelatedByIdempleadocajeroToDelete as $ventaRelatedByIdempleadocajeroRemoved) {
            $ventaRelatedByIdempleadocajeroRemoved->setEmpleadoRelatedByIdempleadocajero(null);
        }

        $this->collVentasRelatedByIdempleadocajero = null;
        foreach ($ventasRelatedByIdempleadocajero as $ventaRelatedByIdempleadocajero) {
            $this->addVentaRelatedByIdempleadocajero($ventaRelatedByIdempleadocajero);
        }

        $this->collVentasRelatedByIdempleadocajero = $ventasRelatedByIdempleadocajero;
        $this->collVentasRelatedByIdempleadocajeroPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Venta objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Venta objects.
     * @throws PropelException
     */
    public function countVentasRelatedByIdempleadocajero(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVentasRelatedByIdempleadocajeroPartial && !$this->isNew();
        if (null === $this->collVentasRelatedByIdempleadocajero || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVentasRelatedByIdempleadocajero) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVentasRelatedByIdempleadocajero());
            }
            $query = VentaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleadoRelatedByIdempleadocajero($this)
                ->count($con);
        }

        return count($this->collVentasRelatedByIdempleadocajero);
    }

    /**
     * Method called to associate a Venta object to this object
     * through the Venta foreign key attribute.
     *
     * @param    Venta $l Venta
     * @return Empleado The current object (for fluent API support)
     */
    public function addVentaRelatedByIdempleadocajero(Venta $l)
    {
        if ($this->collVentasRelatedByIdempleadocajero === null) {
            $this->initVentasRelatedByIdempleadocajero();
            $this->collVentasRelatedByIdempleadocajeroPartial = true;
        }

        if (!in_array($l, $this->collVentasRelatedByIdempleadocajero->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVentaRelatedByIdempleadocajero($l);

            if ($this->ventasRelatedByIdempleadocajeroScheduledForDeletion and $this->ventasRelatedByIdempleadocajeroScheduledForDeletion->contains($l)) {
                $this->ventasRelatedByIdempleadocajeroScheduledForDeletion->remove($this->ventasRelatedByIdempleadocajeroScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	VentaRelatedByIdempleadocajero $ventaRelatedByIdempleadocajero The ventaRelatedByIdempleadocajero object to add.
     */
    protected function doAddVentaRelatedByIdempleadocajero($ventaRelatedByIdempleadocajero)
    {
        $this->collVentasRelatedByIdempleadocajero[]= $ventaRelatedByIdempleadocajero;
        $ventaRelatedByIdempleadocajero->setEmpleadoRelatedByIdempleadocajero($this);
    }

    /**
     * @param	VentaRelatedByIdempleadocajero $ventaRelatedByIdempleadocajero The ventaRelatedByIdempleadocajero object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeVentaRelatedByIdempleadocajero($ventaRelatedByIdempleadocajero)
    {
        if ($this->getVentasRelatedByIdempleadocajero()->contains($ventaRelatedByIdempleadocajero)) {
            $this->collVentasRelatedByIdempleadocajero->remove($this->collVentasRelatedByIdempleadocajero->search($ventaRelatedByIdempleadocajero));
            if (null === $this->ventasRelatedByIdempleadocajeroScheduledForDeletion) {
                $this->ventasRelatedByIdempleadocajeroScheduledForDeletion = clone $this->collVentasRelatedByIdempleadocajero;
                $this->ventasRelatedByIdempleadocajeroScheduledForDeletion->clear();
            }
            $this->ventasRelatedByIdempleadocajeroScheduledForDeletion[]= clone $ventaRelatedByIdempleadocajero;
            $ventaRelatedByIdempleadocajero->setEmpleadoRelatedByIdempleadocajero(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related VentasRelatedByIdempleadocajero from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Venta[] List of Venta objects
     */
    public function getVentasRelatedByIdempleadocajeroJoinCliente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentaQuery::create(null, $criteria);
        $query->joinWith('Cliente', $join_behavior);

        return $this->getVentasRelatedByIdempleadocajero($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related VentasRelatedByIdempleadocajero from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Venta[] List of Venta objects
     */
    public function getVentasRelatedByIdempleadocajeroJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentaQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getVentasRelatedByIdempleadocajero($query, $con);
    }

    /**
     * Clears out the collVentasRelatedByIdempleadovendedor collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
     * @see        addVentasRelatedByIdempleadovendedor()
     */
    public function clearVentasRelatedByIdempleadovendedor()
    {
        $this->collVentasRelatedByIdempleadovendedor = null; // important to set this to null since that means it is uninitialized
        $this->collVentasRelatedByIdempleadovendedorPartial = null;

        return $this;
    }

    /**
     * reset is the collVentasRelatedByIdempleadovendedor collection loaded partially
     *
     * @return void
     */
    public function resetPartialVentasRelatedByIdempleadovendedor($v = true)
    {
        $this->collVentasRelatedByIdempleadovendedorPartial = $v;
    }

    /**
     * Initializes the collVentasRelatedByIdempleadovendedor collection.
     *
     * By default this just sets the collVentasRelatedByIdempleadovendedor collection to an empty array (like clearcollVentasRelatedByIdempleadovendedor());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVentasRelatedByIdempleadovendedor($overrideExisting = true)
    {
        if (null !== $this->collVentasRelatedByIdempleadovendedor && !$overrideExisting) {
            return;
        }
        $this->collVentasRelatedByIdempleadovendedor = new PropelObjectCollection();
        $this->collVentasRelatedByIdempleadovendedor->setModel('Venta');
    }

    /**
     * Gets an array of Venta objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Empleado is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Venta[] List of Venta objects
     * @throws PropelException
     */
    public function getVentasRelatedByIdempleadovendedor($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVentasRelatedByIdempleadovendedorPartial && !$this->isNew();
        if (null === $this->collVentasRelatedByIdempleadovendedor || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVentasRelatedByIdempleadovendedor) {
                // return empty collection
                $this->initVentasRelatedByIdempleadovendedor();
            } else {
                $collVentasRelatedByIdempleadovendedor = VentaQuery::create(null, $criteria)
                    ->filterByEmpleadoRelatedByIdempleadovendedor($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVentasRelatedByIdempleadovendedorPartial && count($collVentasRelatedByIdempleadovendedor)) {
                      $this->initVentasRelatedByIdempleadovendedor(false);

                      foreach ($collVentasRelatedByIdempleadovendedor as $obj) {
                        if (false == $this->collVentasRelatedByIdempleadovendedor->contains($obj)) {
                          $this->collVentasRelatedByIdempleadovendedor->append($obj);
                        }
                      }

                      $this->collVentasRelatedByIdempleadovendedorPartial = true;
                    }

                    $collVentasRelatedByIdempleadovendedor->getInternalIterator()->rewind();

                    return $collVentasRelatedByIdempleadovendedor;
                }

                if ($partial && $this->collVentasRelatedByIdempleadovendedor) {
                    foreach ($this->collVentasRelatedByIdempleadovendedor as $obj) {
                        if ($obj->isNew()) {
                            $collVentasRelatedByIdempleadovendedor[] = $obj;
                        }
                    }
                }

                $this->collVentasRelatedByIdempleadovendedor = $collVentasRelatedByIdempleadovendedor;
                $this->collVentasRelatedByIdempleadovendedorPartial = false;
            }
        }

        return $this->collVentasRelatedByIdempleadovendedor;
    }

    /**
     * Sets a collection of VentaRelatedByIdempleadovendedor objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ventasRelatedByIdempleadovendedor A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Empleado The current object (for fluent API support)
     */
    public function setVentasRelatedByIdempleadovendedor(PropelCollection $ventasRelatedByIdempleadovendedor, PropelPDO $con = null)
    {
        $ventasRelatedByIdempleadovendedorToDelete = $this->getVentasRelatedByIdempleadovendedor(new Criteria(), $con)->diff($ventasRelatedByIdempleadovendedor);


        $this->ventasRelatedByIdempleadovendedorScheduledForDeletion = $ventasRelatedByIdempleadovendedorToDelete;

        foreach ($ventasRelatedByIdempleadovendedorToDelete as $ventaRelatedByIdempleadovendedorRemoved) {
            $ventaRelatedByIdempleadovendedorRemoved->setEmpleadoRelatedByIdempleadovendedor(null);
        }

        $this->collVentasRelatedByIdempleadovendedor = null;
        foreach ($ventasRelatedByIdempleadovendedor as $ventaRelatedByIdempleadovendedor) {
            $this->addVentaRelatedByIdempleadovendedor($ventaRelatedByIdempleadovendedor);
        }

        $this->collVentasRelatedByIdempleadovendedor = $ventasRelatedByIdempleadovendedor;
        $this->collVentasRelatedByIdempleadovendedorPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Venta objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Venta objects.
     * @throws PropelException
     */
    public function countVentasRelatedByIdempleadovendedor(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVentasRelatedByIdempleadovendedorPartial && !$this->isNew();
        if (null === $this->collVentasRelatedByIdempleadovendedor || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVentasRelatedByIdempleadovendedor) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVentasRelatedByIdempleadovendedor());
            }
            $query = VentaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByEmpleadoRelatedByIdempleadovendedor($this)
                ->count($con);
        }

        return count($this->collVentasRelatedByIdempleadovendedor);
    }

    /**
     * Method called to associate a Venta object to this object
     * through the Venta foreign key attribute.
     *
     * @param    Venta $l Venta
     * @return Empleado The current object (for fluent API support)
     */
    public function addVentaRelatedByIdempleadovendedor(Venta $l)
    {
        if ($this->collVentasRelatedByIdempleadovendedor === null) {
            $this->initVentasRelatedByIdempleadovendedor();
            $this->collVentasRelatedByIdempleadovendedorPartial = true;
        }

        if (!in_array($l, $this->collVentasRelatedByIdempleadovendedor->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVentaRelatedByIdempleadovendedor($l);

            if ($this->ventasRelatedByIdempleadovendedorScheduledForDeletion and $this->ventasRelatedByIdempleadovendedorScheduledForDeletion->contains($l)) {
                $this->ventasRelatedByIdempleadovendedorScheduledForDeletion->remove($this->ventasRelatedByIdempleadovendedorScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	VentaRelatedByIdempleadovendedor $ventaRelatedByIdempleadovendedor The ventaRelatedByIdempleadovendedor object to add.
     */
    protected function doAddVentaRelatedByIdempleadovendedor($ventaRelatedByIdempleadovendedor)
    {
        $this->collVentasRelatedByIdempleadovendedor[]= $ventaRelatedByIdempleadovendedor;
        $ventaRelatedByIdempleadovendedor->setEmpleadoRelatedByIdempleadovendedor($this);
    }

    /**
     * @param	VentaRelatedByIdempleadovendedor $ventaRelatedByIdempleadovendedor The ventaRelatedByIdempleadovendedor object to remove.
     * @return Empleado The current object (for fluent API support)
     */
    public function removeVentaRelatedByIdempleadovendedor($ventaRelatedByIdempleadovendedor)
    {
        if ($this->getVentasRelatedByIdempleadovendedor()->contains($ventaRelatedByIdempleadovendedor)) {
            $this->collVentasRelatedByIdempleadovendedor->remove($this->collVentasRelatedByIdempleadovendedor->search($ventaRelatedByIdempleadovendedor));
            if (null === $this->ventasRelatedByIdempleadovendedorScheduledForDeletion) {
                $this->ventasRelatedByIdempleadovendedorScheduledForDeletion = clone $this->collVentasRelatedByIdempleadovendedor;
                $this->ventasRelatedByIdempleadovendedorScheduledForDeletion->clear();
            }
            $this->ventasRelatedByIdempleadovendedorScheduledForDeletion[]= clone $ventaRelatedByIdempleadovendedor;
            $ventaRelatedByIdempleadovendedor->setEmpleadoRelatedByIdempleadovendedor(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related VentasRelatedByIdempleadovendedor from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Venta[] List of Venta objects
     */
    public function getVentasRelatedByIdempleadovendedorJoinCliente($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentaQuery::create(null, $criteria);
        $query->joinWith('Cliente', $join_behavior);

        return $this->getVentasRelatedByIdempleadovendedor($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related VentasRelatedByIdempleadovendedor from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Venta[] List of Venta objects
     */
    public function getVentasRelatedByIdempleadovendedorJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentaQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getVentasRelatedByIdempleadovendedor($query, $con);
    }

    /**
     * Clears out the collVentapagos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Empleado The current object (for fluent API support)
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
     * If this Empleado is new, it will return
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
                    ->filterByEmpleado($this)
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
     * @return Empleado The current object (for fluent API support)
     */
    public function setVentapagos(PropelCollection $ventapagos, PropelPDO $con = null)
    {
        $ventapagosToDelete = $this->getVentapagos(new Criteria(), $con)->diff($ventapagos);


        $this->ventapagosScheduledForDeletion = $ventapagosToDelete;

        foreach ($ventapagosToDelete as $ventapagoRemoved) {
            $ventapagoRemoved->setEmpleado(null);
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
                ->filterByEmpleado($this)
                ->count($con);
        }

        return count($this->collVentapagos);
    }

    /**
     * Method called to associate a Ventapago object to this object
     * through the Ventapago foreign key attribute.
     *
     * @param    Ventapago $l Ventapago
     * @return Empleado The current object (for fluent API support)
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
        $ventapago->setEmpleado($this);
    }

    /**
     * @param	Ventapago $ventapago The ventapago object to remove.
     * @return Empleado The current object (for fluent API support)
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
            $ventapago->setEmpleado(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Empleado is new, it will return
     * an empty collection; or if this Empleado has previously
     * been saved, it will retrieve related Ventapagos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Empleado.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Ventapago[] List of Ventapago objects
     */
    public function getVentapagosJoinVenta($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentapagoQuery::create(null, $criteria);
        $query->joinWith('Venta', $join_behavior);

        return $this->getVentapagos($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idempleado = null;
        $this->empleado_nombre = null;
        $this->empleado_apaterno = null;
        $this->empleado_amaterno = null;
        $this->empleado_rfc = null;
        $this->empleado_nss = null;
        $this->empleado_curp = null;
        $this->empleado_telefono = null;
        $this->empleado_email = null;
        $this->empleado_estatus = null;
        $this->empleado_username = null;
        $this->empleado_password = null;
        $this->empleado_comision = null;
        $this->empleado_fechaentrada = null;
        $this->empleado_fechanacimiento = null;
        $this->empleado_calle = null;
        $this->empleado_numexterno = null;
        $this->empleado_numinterno = null;
        $this->empleado_colonia = null;
        $this->empleado_codigopostal = null;
        $this->empleado_ciudad = null;
        $this->empleado_estado = null;
        $this->idrol = null;
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
            if ($this->collCortecajas) {
                foreach ($this->collCortecajas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCuentabancariamovimientos) {
                foreach ($this->collCuentabancariamovimientos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSucursalempleados) {
                foreach ($this->collSucursalempleados as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTransferenciasRelatedByIdempleadocreador) {
                foreach ($this->collTransferenciasRelatedByIdempleadocreador as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTransferenciasRelatedByIdempleadoreceptor) {
                foreach ($this->collTransferenciasRelatedByIdempleadoreceptor as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVentasRelatedByIdempleadocajero) {
                foreach ($this->collVentasRelatedByIdempleadocajero as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVentasRelatedByIdempleadovendedor) {
                foreach ($this->collVentasRelatedByIdempleadovendedor as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVentapagos) {
                foreach ($this->collVentapagos as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aRol instanceof Persistent) {
              $this->aRol->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCortecajas instanceof PropelCollection) {
            $this->collCortecajas->clearIterator();
        }
        $this->collCortecajas = null;
        if ($this->collCuentabancariamovimientos instanceof PropelCollection) {
            $this->collCuentabancariamovimientos->clearIterator();
        }
        $this->collCuentabancariamovimientos = null;
        if ($this->collSucursalempleados instanceof PropelCollection) {
            $this->collSucursalempleados->clearIterator();
        }
        $this->collSucursalempleados = null;
        if ($this->collTransferenciasRelatedByIdempleadocreador instanceof PropelCollection) {
            $this->collTransferenciasRelatedByIdempleadocreador->clearIterator();
        }
        $this->collTransferenciasRelatedByIdempleadocreador = null;
        if ($this->collTransferenciasRelatedByIdempleadoreceptor instanceof PropelCollection) {
            $this->collTransferenciasRelatedByIdempleadoreceptor->clearIterator();
        }
        $this->collTransferenciasRelatedByIdempleadoreceptor = null;
        if ($this->collVentasRelatedByIdempleadocajero instanceof PropelCollection) {
            $this->collVentasRelatedByIdempleadocajero->clearIterator();
        }
        $this->collVentasRelatedByIdempleadocajero = null;
        if ($this->collVentasRelatedByIdempleadovendedor instanceof PropelCollection) {
            $this->collVentasRelatedByIdempleadovendedor->clearIterator();
        }
        $this->collVentasRelatedByIdempleadovendedor = null;
        if ($this->collVentapagos instanceof PropelCollection) {
            $this->collVentapagos->clearIterator();
        }
        $this->collVentapagos = null;
        $this->aRol = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(EmpleadoPeer::DEFAULT_STRING_FORMAT);
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
