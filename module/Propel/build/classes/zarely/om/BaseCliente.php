<?php


/**
 * Base class that represents a row from the 'cliente' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseCliente extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'ClientePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        ClientePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idcliente field.
     * @var        int
     */
    protected $idcliente;

    /**
     * The value for the cliente_nombre field.
     * @var        string
     */
    protected $cliente_nombre;

    /**
     * The value for the cliente_apaterno field.
     * @var        string
     */
    protected $cliente_apaterno;

    /**
     * The value for the cliente_amaterno field.
     * @var        string
     */
    protected $cliente_amaterno;

    /**
     * The value for the cliente_rfc field.
     * @var        string
     */
    protected $cliente_rfc;

    /**
     * The value for the cliente_razonsocial field.
     * @var        string
     */
    protected $cliente_razonsocial;

    /**
     * The value for the cliente_callefiscal field.
     * @var        string
     */
    protected $cliente_callefiscal;

    /**
     * The value for the cliente_numerofiscal field.
     * @var        string
     */
    protected $cliente_numerofiscal;

    /**
     * The value for the cliente_interiorfiscal field.
     * @var        string
     */
    protected $cliente_interiorfiscal;

    /**
     * The value for the cliente_coloniafiscal field.
     * @var        string
     */
    protected $cliente_coloniafiscal;

    /**
     * The value for the cliente_ciudadfiscal field.
     * @var        string
     */
    protected $cliente_ciudadfiscal;

    /**
     * The value for the cliente_cpfiscal field.
     * @var        string
     */
    protected $cliente_cpfiscal;

    /**
     * The value for the cliente_estadofiscal field.
     * @var        string
     */
    protected $cliente_estadofiscal;

    /**
     * The value for the cliente_calle field.
     * @var        string
     */
    protected $cliente_calle;

    /**
     * The value for the cliente_numero field.
     * @var        string
     */
    protected $cliente_numero;

    /**
     * The value for the cliente_interior field.
     * @var        string
     */
    protected $cliente_interior;

    /**
     * The value for the cliente_colonia field.
     * @var        string
     */
    protected $cliente_colonia;

    /**
     * The value for the cliente_cp field.
     * @var        string
     */
    protected $cliente_cp;

    /**
     * The value for the cliente_ciudad field.
     * @var        string
     */
    protected $cliente_ciudad;

    /**
     * The value for the cliente_estado field.
     * @var        string
     */
    protected $cliente_estado;

    /**
     * The value for the cliente_tipo field.
     * @var        string
     */
    protected $cliente_tipo;

    /**
     * The value for the cliente_fecharegistro field.
     * @var        string
     */
    protected $cliente_fecharegistro;

    /**
     * The value for the cliente_estatus field.
     * @var        boolean
     */
    protected $cliente_estatus;

    /**
     * The value for the cliente_credito field.
     * @var        boolean
     */
    protected $cliente_credito;

    /**
     * The value for the cliente_limitecredito field.
     * @var        string
     */
    protected $cliente_limitecredito;

    /**
     * The value for the cliente_creditorestante field.
     * @var        string
     */
    protected $cliente_creditorestante;

    /**
     * @var        PropelObjectCollection|Clienterelacionado[] Collection to store aggregation of Clienterelacionado objects.
     */
    protected $collClienterelacionadosRelatedByIdcliente;
    protected $collClienterelacionadosRelatedByIdclientePartial;

    /**
     * @var        PropelObjectCollection|Clienterelacionado[] Collection to store aggregation of Clienterelacionado objects.
     */
    protected $collClienterelacionadosRelatedByIdclienteasociado;
    protected $collClienterelacionadosRelatedByIdclienteasociadoPartial;

    /**
     * @var        PropelObjectCollection|Pedidomayorista[] Collection to store aggregation of Pedidomayorista objects.
     */
    protected $collPedidomayoristas;
    protected $collPedidomayoristasPartial;

    /**
     * @var        PropelObjectCollection|Venta[] Collection to store aggregation of Venta objects.
     */
    protected $collVentas;
    protected $collVentasPartial;

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
    protected $clienterelacionadosRelatedByIdclienteScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $clienterelacionadosRelatedByIdclienteasociadoScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $pedidomayoristasScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $ventasScheduledForDeletion = null;

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
     * Get the [cliente_nombre] column value.
     *
     * @return string
     */
    public function getClienteNombre()
    {

        return $this->cliente_nombre;
    }

    /**
     * Get the [cliente_apaterno] column value.
     *
     * @return string
     */
    public function getClienteApaterno()
    {

        return $this->cliente_apaterno;
    }

    /**
     * Get the [cliente_amaterno] column value.
     *
     * @return string
     */
    public function getClienteAmaterno()
    {

        return $this->cliente_amaterno;
    }

    /**
     * Get the [cliente_rfc] column value.
     *
     * @return string
     */
    public function getClienteRfc()
    {

        return $this->cliente_rfc;
    }

    /**
     * Get the [cliente_razonsocial] column value.
     *
     * @return string
     */
    public function getClienteRazonsocial()
    {

        return $this->cliente_razonsocial;
    }

    /**
     * Get the [cliente_callefiscal] column value.
     *
     * @return string
     */
    public function getClienteCallefiscal()
    {

        return $this->cliente_callefiscal;
    }

    /**
     * Get the [cliente_numerofiscal] column value.
     *
     * @return string
     */
    public function getClienteNumerofiscal()
    {

        return $this->cliente_numerofiscal;
    }

    /**
     * Get the [cliente_interiorfiscal] column value.
     *
     * @return string
     */
    public function getClienteInteriorfiscal()
    {

        return $this->cliente_interiorfiscal;
    }

    /**
     * Get the [cliente_coloniafiscal] column value.
     *
     * @return string
     */
    public function getClienteColoniafiscal()
    {

        return $this->cliente_coloniafiscal;
    }

    /**
     * Get the [cliente_ciudadfiscal] column value.
     *
     * @return string
     */
    public function getClienteCiudadfiscal()
    {

        return $this->cliente_ciudadfiscal;
    }

    /**
     * Get the [cliente_cpfiscal] column value.
     *
     * @return string
     */
    public function getClienteCpfiscal()
    {

        return $this->cliente_cpfiscal;
    }

    /**
     * Get the [cliente_estadofiscal] column value.
     *
     * @return string
     */
    public function getClienteEstadofiscal()
    {

        return $this->cliente_estadofiscal;
    }

    /**
     * Get the [cliente_calle] column value.
     *
     * @return string
     */
    public function getClienteCalle()
    {

        return $this->cliente_calle;
    }

    /**
     * Get the [cliente_numero] column value.
     *
     * @return string
     */
    public function getClienteNumero()
    {

        return $this->cliente_numero;
    }

    /**
     * Get the [cliente_interior] column value.
     *
     * @return string
     */
    public function getClienteInterior()
    {

        return $this->cliente_interior;
    }

    /**
     * Get the [cliente_colonia] column value.
     *
     * @return string
     */
    public function getClienteColonia()
    {

        return $this->cliente_colonia;
    }

    /**
     * Get the [cliente_cp] column value.
     *
     * @return string
     */
    public function getClienteCp()
    {

        return $this->cliente_cp;
    }

    /**
     * Get the [cliente_ciudad] column value.
     *
     * @return string
     */
    public function getClienteCiudad()
    {

        return $this->cliente_ciudad;
    }

    /**
     * Get the [cliente_estado] column value.
     *
     * @return string
     */
    public function getClienteEstado()
    {

        return $this->cliente_estado;
    }

    /**
     * Get the [cliente_tipo] column value.
     *
     * @return string
     */
    public function getClienteTipo()
    {

        return $this->cliente_tipo;
    }

    /**
     * Get the [optionally formatted] temporal [cliente_fecharegistro] column value.
     *
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getClienteFecharegistro($format = '%x')
    {
        if ($this->cliente_fecharegistro === null) {
            return null;
        }

        if ($this->cliente_fecharegistro === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->cliente_fecharegistro);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->cliente_fecharegistro, true), $x);
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
     * Get the [cliente_estatus] column value.
     *
     * @return boolean
     */
    public function getClienteEstatus()
    {

        return $this->cliente_estatus;
    }

    /**
     * Get the [cliente_credito] column value.
     *
     * @return boolean
     */
    public function getClienteCredito()
    {

        return $this->cliente_credito;
    }

    /**
     * Get the [cliente_limitecredito] column value.
     *
     * @return string
     */
    public function getClienteLimitecredito()
    {

        return $this->cliente_limitecredito;
    }

    /**
     * Get the [cliente_creditorestante] column value.
     *
     * @return string
     */
    public function getClienteCreditorestante()
    {

        return $this->cliente_creditorestante;
    }

    /**
     * Set the value of [idcliente] column.
     *
     * @param  int $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setIdcliente($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idcliente !== $v) {
            $this->idcliente = $v;
            $this->modifiedColumns[] = ClientePeer::IDCLIENTE;
        }


        return $this;
    } // setIdcliente()

    /**
     * Set the value of [cliente_nombre] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_nombre !== $v) {
            $this->cliente_nombre = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_NOMBRE;
        }


        return $this;
    } // setClienteNombre()

    /**
     * Set the value of [cliente_apaterno] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteApaterno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_apaterno !== $v) {
            $this->cliente_apaterno = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_APATERNO;
        }


        return $this;
    } // setClienteApaterno()

    /**
     * Set the value of [cliente_amaterno] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteAmaterno($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_amaterno !== $v) {
            $this->cliente_amaterno = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_AMATERNO;
        }


        return $this;
    } // setClienteAmaterno()

    /**
     * Set the value of [cliente_rfc] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteRfc($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_rfc !== $v) {
            $this->cliente_rfc = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_RFC;
        }


        return $this;
    } // setClienteRfc()

    /**
     * Set the value of [cliente_razonsocial] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteRazonsocial($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_razonsocial !== $v) {
            $this->cliente_razonsocial = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_RAZONSOCIAL;
        }


        return $this;
    } // setClienteRazonsocial()

    /**
     * Set the value of [cliente_callefiscal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCallefiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_callefiscal !== $v) {
            $this->cliente_callefiscal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CALLEFISCAL;
        }


        return $this;
    } // setClienteCallefiscal()

    /**
     * Set the value of [cliente_numerofiscal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteNumerofiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_numerofiscal !== $v) {
            $this->cliente_numerofiscal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_NUMEROFISCAL;
        }


        return $this;
    } // setClienteNumerofiscal()

    /**
     * Set the value of [cliente_interiorfiscal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteInteriorfiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_interiorfiscal !== $v) {
            $this->cliente_interiorfiscal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_INTERIORFISCAL;
        }


        return $this;
    } // setClienteInteriorfiscal()

    /**
     * Set the value of [cliente_coloniafiscal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteColoniafiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_coloniafiscal !== $v) {
            $this->cliente_coloniafiscal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_COLONIAFISCAL;
        }


        return $this;
    } // setClienteColoniafiscal()

    /**
     * Set the value of [cliente_ciudadfiscal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCiudadfiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_ciudadfiscal !== $v) {
            $this->cliente_ciudadfiscal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CIUDADFISCAL;
        }


        return $this;
    } // setClienteCiudadfiscal()

    /**
     * Set the value of [cliente_cpfiscal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCpfiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_cpfiscal !== $v) {
            $this->cliente_cpfiscal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CPFISCAL;
        }


        return $this;
    } // setClienteCpfiscal()

    /**
     * Set the value of [cliente_estadofiscal] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteEstadofiscal($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_estadofiscal !== $v) {
            $this->cliente_estadofiscal = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_ESTADOFISCAL;
        }


        return $this;
    } // setClienteEstadofiscal()

    /**
     * Set the value of [cliente_calle] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCalle($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_calle !== $v) {
            $this->cliente_calle = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CALLE;
        }


        return $this;
    } // setClienteCalle()

    /**
     * Set the value of [cliente_numero] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteNumero($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_numero !== $v) {
            $this->cliente_numero = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_NUMERO;
        }


        return $this;
    } // setClienteNumero()

    /**
     * Set the value of [cliente_interior] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteInterior($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_interior !== $v) {
            $this->cliente_interior = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_INTERIOR;
        }


        return $this;
    } // setClienteInterior()

    /**
     * Set the value of [cliente_colonia] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteColonia($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_colonia !== $v) {
            $this->cliente_colonia = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_COLONIA;
        }


        return $this;
    } // setClienteColonia()

    /**
     * Set the value of [cliente_cp] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCp($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_cp !== $v) {
            $this->cliente_cp = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CP;
        }


        return $this;
    } // setClienteCp()

    /**
     * Set the value of [cliente_ciudad] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCiudad($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_ciudad !== $v) {
            $this->cliente_ciudad = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CIUDAD;
        }


        return $this;
    } // setClienteCiudad()

    /**
     * Set the value of [cliente_estado] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteEstado($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_estado !== $v) {
            $this->cliente_estado = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_ESTADO;
        }


        return $this;
    } // setClienteEstado()

    /**
     * Set the value of [cliente_tipo] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteTipo($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->cliente_tipo !== $v) {
            $this->cliente_tipo = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_TIPO;
        }


        return $this;
    } // setClienteTipo()

    /**
     * Sets the value of [cliente_fecharegistro] column to a normalized version of the date/time value specified.
     *
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteFecharegistro($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->cliente_fecharegistro !== null || $dt !== null) {
            $currentDateAsString = ($this->cliente_fecharegistro !== null && $tmpDt = new DateTime($this->cliente_fecharegistro)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->cliente_fecharegistro = $newDateAsString;
                $this->modifiedColumns[] = ClientePeer::CLIENTE_FECHAREGISTRO;
            }
        } // if either are not null


        return $this;
    } // setClienteFecharegistro()

    /**
     * Sets the value of the [cliente_estatus] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteEstatus($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->cliente_estatus !== $v) {
            $this->cliente_estatus = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_ESTATUS;
        }


        return $this;
    } // setClienteEstatus()

    /**
     * Sets the value of the [cliente_credito] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCredito($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->cliente_credito !== $v) {
            $this->cliente_credito = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CREDITO;
        }


        return $this;
    } // setClienteCredito()

    /**
     * Set the value of [cliente_limitecredito] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteLimitecredito($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cliente_limitecredito !== $v) {
            $this->cliente_limitecredito = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_LIMITECREDITO;
        }


        return $this;
    } // setClienteLimitecredito()

    /**
     * Set the value of [cliente_creditorestante] column.
     *
     * @param  string $v new value
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienteCreditorestante($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cliente_creditorestante !== $v) {
            $this->cliente_creditorestante = $v;
            $this->modifiedColumns[] = ClientePeer::CLIENTE_CREDITORESTANTE;
        }


        return $this;
    } // setClienteCreditorestante()

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

            $this->idcliente = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->cliente_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->cliente_apaterno = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->cliente_amaterno = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->cliente_rfc = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->cliente_razonsocial = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->cliente_callefiscal = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->cliente_numerofiscal = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->cliente_interiorfiscal = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->cliente_coloniafiscal = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->cliente_ciudadfiscal = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->cliente_cpfiscal = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->cliente_estadofiscal = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->cliente_calle = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->cliente_numero = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->cliente_interior = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->cliente_colonia = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->cliente_cp = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->cliente_ciudad = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->cliente_estado = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->cliente_tipo = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->cliente_fecharegistro = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->cliente_estatus = ($row[$startcol + 22] !== null) ? (boolean) $row[$startcol + 22] : null;
            $this->cliente_credito = ($row[$startcol + 23] !== null) ? (boolean) $row[$startcol + 23] : null;
            $this->cliente_limitecredito = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->cliente_creditorestante = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 26; // 26 = ClientePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Cliente object", $e);
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
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = ClientePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collClienterelacionadosRelatedByIdcliente = null;

            $this->collClienterelacionadosRelatedByIdclienteasociado = null;

            $this->collPedidomayoristas = null;

            $this->collVentas = null;

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
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = ClienteQuery::create()
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
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                ClientePeer::addInstanceToPool($this);
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

            if ($this->clienterelacionadosRelatedByIdclienteScheduledForDeletion !== null) {
                if (!$this->clienterelacionadosRelatedByIdclienteScheduledForDeletion->isEmpty()) {
                    ClienterelacionadoQuery::create()
                        ->filterByPrimaryKeys($this->clienterelacionadosRelatedByIdclienteScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->clienterelacionadosRelatedByIdclienteScheduledForDeletion = null;
                }
            }

            if ($this->collClienterelacionadosRelatedByIdcliente !== null) {
                foreach ($this->collClienterelacionadosRelatedByIdcliente as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->clienterelacionadosRelatedByIdclienteasociadoScheduledForDeletion !== null) {
                if (!$this->clienterelacionadosRelatedByIdclienteasociadoScheduledForDeletion->isEmpty()) {
                    ClienterelacionadoQuery::create()
                        ->filterByPrimaryKeys($this->clienterelacionadosRelatedByIdclienteasociadoScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->clienterelacionadosRelatedByIdclienteasociadoScheduledForDeletion = null;
                }
            }

            if ($this->collClienterelacionadosRelatedByIdclienteasociado !== null) {
                foreach ($this->collClienterelacionadosRelatedByIdclienteasociado as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->pedidomayoristasScheduledForDeletion !== null) {
                if (!$this->pedidomayoristasScheduledForDeletion->isEmpty()) {
                    PedidomayoristaQuery::create()
                        ->filterByPrimaryKeys($this->pedidomayoristasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->pedidomayoristasScheduledForDeletion = null;
                }
            }

            if ($this->collPedidomayoristas !== null) {
                foreach ($this->collPedidomayoristas as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->ventasScheduledForDeletion !== null) {
                if (!$this->ventasScheduledForDeletion->isEmpty()) {
                    VentaQuery::create()
                        ->filterByPrimaryKeys($this->ventasScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->ventasScheduledForDeletion = null;
                }
            }

            if ($this->collVentas !== null) {
                foreach ($this->collVentas as $referrerFK) {
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

        $this->modifiedColumns[] = ClientePeer::IDCLIENTE;
        if (null !== $this->idcliente) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . ClientePeer::IDCLIENTE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(ClientePeer::IDCLIENTE)) {
            $modifiedColumns[':p' . $index++]  = '`idcliente`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_nombre`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_APATERNO)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_apaterno`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_AMATERNO)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_amaterno`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_RFC)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_rfc`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_RAZONSOCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_razonsocial`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CALLEFISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_callefiscal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_NUMEROFISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_numerofiscal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_INTERIORFISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_interiorfiscal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_COLONIAFISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_coloniafiscal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CIUDADFISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_ciudadfiscal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CPFISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_cpfiscal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_ESTADOFISCAL)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_estadofiscal`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CALLE)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_calle`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_numero`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_INTERIOR)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_interior`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_COLONIA)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_colonia`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CP)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_cp`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CIUDAD)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_ciudad`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_ESTADO)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_estado`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_TIPO)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_tipo`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_FECHAREGISTRO)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_fecharegistro`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_ESTATUS)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_estatus`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CREDITO)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_credito`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_LIMITECREDITO)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_limitecredito`';
        }
        if ($this->isColumnModified(ClientePeer::CLIENTE_CREDITORESTANTE)) {
            $modifiedColumns[':p' . $index++]  = '`cliente_creditorestante`';
        }

        $sql = sprintf(
            'INSERT INTO `cliente` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idcliente`':
                        $stmt->bindValue($identifier, $this->idcliente, PDO::PARAM_INT);
                        break;
                    case '`cliente_nombre`':
                        $stmt->bindValue($identifier, $this->cliente_nombre, PDO::PARAM_STR);
                        break;
                    case '`cliente_apaterno`':
                        $stmt->bindValue($identifier, $this->cliente_apaterno, PDO::PARAM_STR);
                        break;
                    case '`cliente_amaterno`':
                        $stmt->bindValue($identifier, $this->cliente_amaterno, PDO::PARAM_STR);
                        break;
                    case '`cliente_rfc`':
                        $stmt->bindValue($identifier, $this->cliente_rfc, PDO::PARAM_STR);
                        break;
                    case '`cliente_razonsocial`':
                        $stmt->bindValue($identifier, $this->cliente_razonsocial, PDO::PARAM_STR);
                        break;
                    case '`cliente_callefiscal`':
                        $stmt->bindValue($identifier, $this->cliente_callefiscal, PDO::PARAM_STR);
                        break;
                    case '`cliente_numerofiscal`':
                        $stmt->bindValue($identifier, $this->cliente_numerofiscal, PDO::PARAM_STR);
                        break;
                    case '`cliente_interiorfiscal`':
                        $stmt->bindValue($identifier, $this->cliente_interiorfiscal, PDO::PARAM_STR);
                        break;
                    case '`cliente_coloniafiscal`':
                        $stmt->bindValue($identifier, $this->cliente_coloniafiscal, PDO::PARAM_STR);
                        break;
                    case '`cliente_ciudadfiscal`':
                        $stmt->bindValue($identifier, $this->cliente_ciudadfiscal, PDO::PARAM_STR);
                        break;
                    case '`cliente_cpfiscal`':
                        $stmt->bindValue($identifier, $this->cliente_cpfiscal, PDO::PARAM_STR);
                        break;
                    case '`cliente_estadofiscal`':
                        $stmt->bindValue($identifier, $this->cliente_estadofiscal, PDO::PARAM_STR);
                        break;
                    case '`cliente_calle`':
                        $stmt->bindValue($identifier, $this->cliente_calle, PDO::PARAM_STR);
                        break;
                    case '`cliente_numero`':
                        $stmt->bindValue($identifier, $this->cliente_numero, PDO::PARAM_STR);
                        break;
                    case '`cliente_interior`':
                        $stmt->bindValue($identifier, $this->cliente_interior, PDO::PARAM_STR);
                        break;
                    case '`cliente_colonia`':
                        $stmt->bindValue($identifier, $this->cliente_colonia, PDO::PARAM_STR);
                        break;
                    case '`cliente_cp`':
                        $stmt->bindValue($identifier, $this->cliente_cp, PDO::PARAM_STR);
                        break;
                    case '`cliente_ciudad`':
                        $stmt->bindValue($identifier, $this->cliente_ciudad, PDO::PARAM_STR);
                        break;
                    case '`cliente_estado`':
                        $stmt->bindValue($identifier, $this->cliente_estado, PDO::PARAM_STR);
                        break;
                    case '`cliente_tipo`':
                        $stmt->bindValue($identifier, $this->cliente_tipo, PDO::PARAM_STR);
                        break;
                    case '`cliente_fecharegistro`':
                        $stmt->bindValue($identifier, $this->cliente_fecharegistro, PDO::PARAM_STR);
                        break;
                    case '`cliente_estatus`':
                        $stmt->bindValue($identifier, (int) $this->cliente_estatus, PDO::PARAM_INT);
                        break;
                    case '`cliente_credito`':
                        $stmt->bindValue($identifier, (int) $this->cliente_credito, PDO::PARAM_INT);
                        break;
                    case '`cliente_limitecredito`':
                        $stmt->bindValue($identifier, $this->cliente_limitecredito, PDO::PARAM_STR);
                        break;
                    case '`cliente_creditorestante`':
                        $stmt->bindValue($identifier, $this->cliente_creditorestante, PDO::PARAM_STR);
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
        $this->setIdcliente($pk);

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


            if (($retval = ClientePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collClienterelacionadosRelatedByIdcliente !== null) {
                    foreach ($this->collClienterelacionadosRelatedByIdcliente as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collClienterelacionadosRelatedByIdclienteasociado !== null) {
                    foreach ($this->collClienterelacionadosRelatedByIdclienteasociado as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collPedidomayoristas !== null) {
                    foreach ($this->collPedidomayoristas as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collVentas !== null) {
                    foreach ($this->collVentas as $referrerFK) {
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
        $pos = ClientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdcliente();
                break;
            case 1:
                return $this->getClienteNombre();
                break;
            case 2:
                return $this->getClienteApaterno();
                break;
            case 3:
                return $this->getClienteAmaterno();
                break;
            case 4:
                return $this->getClienteRfc();
                break;
            case 5:
                return $this->getClienteRazonsocial();
                break;
            case 6:
                return $this->getClienteCallefiscal();
                break;
            case 7:
                return $this->getClienteNumerofiscal();
                break;
            case 8:
                return $this->getClienteInteriorfiscal();
                break;
            case 9:
                return $this->getClienteColoniafiscal();
                break;
            case 10:
                return $this->getClienteCiudadfiscal();
                break;
            case 11:
                return $this->getClienteCpfiscal();
                break;
            case 12:
                return $this->getClienteEstadofiscal();
                break;
            case 13:
                return $this->getClienteCalle();
                break;
            case 14:
                return $this->getClienteNumero();
                break;
            case 15:
                return $this->getClienteInterior();
                break;
            case 16:
                return $this->getClienteColonia();
                break;
            case 17:
                return $this->getClienteCp();
                break;
            case 18:
                return $this->getClienteCiudad();
                break;
            case 19:
                return $this->getClienteEstado();
                break;
            case 20:
                return $this->getClienteTipo();
                break;
            case 21:
                return $this->getClienteFecharegistro();
                break;
            case 22:
                return $this->getClienteEstatus();
                break;
            case 23:
                return $this->getClienteCredito();
                break;
            case 24:
                return $this->getClienteLimitecredito();
                break;
            case 25:
                return $this->getClienteCreditorestante();
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
        if (isset($alreadyDumpedObjects['Cliente'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Cliente'][$this->getPrimaryKey()] = true;
        $keys = ClientePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdcliente(),
            $keys[1] => $this->getClienteNombre(),
            $keys[2] => $this->getClienteApaterno(),
            $keys[3] => $this->getClienteAmaterno(),
            $keys[4] => $this->getClienteRfc(),
            $keys[5] => $this->getClienteRazonsocial(),
            $keys[6] => $this->getClienteCallefiscal(),
            $keys[7] => $this->getClienteNumerofiscal(),
            $keys[8] => $this->getClienteInteriorfiscal(),
            $keys[9] => $this->getClienteColoniafiscal(),
            $keys[10] => $this->getClienteCiudadfiscal(),
            $keys[11] => $this->getClienteCpfiscal(),
            $keys[12] => $this->getClienteEstadofiscal(),
            $keys[13] => $this->getClienteCalle(),
            $keys[14] => $this->getClienteNumero(),
            $keys[15] => $this->getClienteInterior(),
            $keys[16] => $this->getClienteColonia(),
            $keys[17] => $this->getClienteCp(),
            $keys[18] => $this->getClienteCiudad(),
            $keys[19] => $this->getClienteEstado(),
            $keys[20] => $this->getClienteTipo(),
            $keys[21] => $this->getClienteFecharegistro(),
            $keys[22] => $this->getClienteEstatus(),
            $keys[23] => $this->getClienteCredito(),
            $keys[24] => $this->getClienteLimitecredito(),
            $keys[25] => $this->getClienteCreditorestante(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collClienterelacionadosRelatedByIdcliente) {
                $result['ClienterelacionadosRelatedByIdcliente'] = $this->collClienterelacionadosRelatedByIdcliente->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collClienterelacionadosRelatedByIdclienteasociado) {
                $result['ClienterelacionadosRelatedByIdclienteasociado'] = $this->collClienterelacionadosRelatedByIdclienteasociado->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collPedidomayoristas) {
                $result['Pedidomayoristas'] = $this->collPedidomayoristas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collVentas) {
                $result['Ventas'] = $this->collVentas->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = ClientePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdcliente($value);
                break;
            case 1:
                $this->setClienteNombre($value);
                break;
            case 2:
                $this->setClienteApaterno($value);
                break;
            case 3:
                $this->setClienteAmaterno($value);
                break;
            case 4:
                $this->setClienteRfc($value);
                break;
            case 5:
                $this->setClienteRazonsocial($value);
                break;
            case 6:
                $this->setClienteCallefiscal($value);
                break;
            case 7:
                $this->setClienteNumerofiscal($value);
                break;
            case 8:
                $this->setClienteInteriorfiscal($value);
                break;
            case 9:
                $this->setClienteColoniafiscal($value);
                break;
            case 10:
                $this->setClienteCiudadfiscal($value);
                break;
            case 11:
                $this->setClienteCpfiscal($value);
                break;
            case 12:
                $this->setClienteEstadofiscal($value);
                break;
            case 13:
                $this->setClienteCalle($value);
                break;
            case 14:
                $this->setClienteNumero($value);
                break;
            case 15:
                $this->setClienteInterior($value);
                break;
            case 16:
                $this->setClienteColonia($value);
                break;
            case 17:
                $this->setClienteCp($value);
                break;
            case 18:
                $this->setClienteCiudad($value);
                break;
            case 19:
                $this->setClienteEstado($value);
                break;
            case 20:
                $this->setClienteTipo($value);
                break;
            case 21:
                $this->setClienteFecharegistro($value);
                break;
            case 22:
                $this->setClienteEstatus($value);
                break;
            case 23:
                $this->setClienteCredito($value);
                break;
            case 24:
                $this->setClienteLimitecredito($value);
                break;
            case 25:
                $this->setClienteCreditorestante($value);
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
        $keys = ClientePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdcliente($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setClienteNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setClienteApaterno($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setClienteAmaterno($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setClienteRfc($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setClienteRazonsocial($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setClienteCallefiscal($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setClienteNumerofiscal($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setClienteInteriorfiscal($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setClienteColoniafiscal($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setClienteCiudadfiscal($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setClienteCpfiscal($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setClienteEstadofiscal($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setClienteCalle($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setClienteNumero($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setClienteInterior($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setClienteColonia($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setClienteCp($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setClienteCiudad($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setClienteEstado($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setClienteTipo($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setClienteFecharegistro($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setClienteEstatus($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setClienteCredito($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setClienteLimitecredito($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setClienteCreditorestante($arr[$keys[25]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(ClientePeer::DATABASE_NAME);

        if ($this->isColumnModified(ClientePeer::IDCLIENTE)) $criteria->add(ClientePeer::IDCLIENTE, $this->idcliente);
        if ($this->isColumnModified(ClientePeer::CLIENTE_NOMBRE)) $criteria->add(ClientePeer::CLIENTE_NOMBRE, $this->cliente_nombre);
        if ($this->isColumnModified(ClientePeer::CLIENTE_APATERNO)) $criteria->add(ClientePeer::CLIENTE_APATERNO, $this->cliente_apaterno);
        if ($this->isColumnModified(ClientePeer::CLIENTE_AMATERNO)) $criteria->add(ClientePeer::CLIENTE_AMATERNO, $this->cliente_amaterno);
        if ($this->isColumnModified(ClientePeer::CLIENTE_RFC)) $criteria->add(ClientePeer::CLIENTE_RFC, $this->cliente_rfc);
        if ($this->isColumnModified(ClientePeer::CLIENTE_RAZONSOCIAL)) $criteria->add(ClientePeer::CLIENTE_RAZONSOCIAL, $this->cliente_razonsocial);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CALLEFISCAL)) $criteria->add(ClientePeer::CLIENTE_CALLEFISCAL, $this->cliente_callefiscal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_NUMEROFISCAL)) $criteria->add(ClientePeer::CLIENTE_NUMEROFISCAL, $this->cliente_numerofiscal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_INTERIORFISCAL)) $criteria->add(ClientePeer::CLIENTE_INTERIORFISCAL, $this->cliente_interiorfiscal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_COLONIAFISCAL)) $criteria->add(ClientePeer::CLIENTE_COLONIAFISCAL, $this->cliente_coloniafiscal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CIUDADFISCAL)) $criteria->add(ClientePeer::CLIENTE_CIUDADFISCAL, $this->cliente_ciudadfiscal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CPFISCAL)) $criteria->add(ClientePeer::CLIENTE_CPFISCAL, $this->cliente_cpfiscal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_ESTADOFISCAL)) $criteria->add(ClientePeer::CLIENTE_ESTADOFISCAL, $this->cliente_estadofiscal);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CALLE)) $criteria->add(ClientePeer::CLIENTE_CALLE, $this->cliente_calle);
        if ($this->isColumnModified(ClientePeer::CLIENTE_NUMERO)) $criteria->add(ClientePeer::CLIENTE_NUMERO, $this->cliente_numero);
        if ($this->isColumnModified(ClientePeer::CLIENTE_INTERIOR)) $criteria->add(ClientePeer::CLIENTE_INTERIOR, $this->cliente_interior);
        if ($this->isColumnModified(ClientePeer::CLIENTE_COLONIA)) $criteria->add(ClientePeer::CLIENTE_COLONIA, $this->cliente_colonia);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CP)) $criteria->add(ClientePeer::CLIENTE_CP, $this->cliente_cp);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CIUDAD)) $criteria->add(ClientePeer::CLIENTE_CIUDAD, $this->cliente_ciudad);
        if ($this->isColumnModified(ClientePeer::CLIENTE_ESTADO)) $criteria->add(ClientePeer::CLIENTE_ESTADO, $this->cliente_estado);
        if ($this->isColumnModified(ClientePeer::CLIENTE_TIPO)) $criteria->add(ClientePeer::CLIENTE_TIPO, $this->cliente_tipo);
        if ($this->isColumnModified(ClientePeer::CLIENTE_FECHAREGISTRO)) $criteria->add(ClientePeer::CLIENTE_FECHAREGISTRO, $this->cliente_fecharegistro);
        if ($this->isColumnModified(ClientePeer::CLIENTE_ESTATUS)) $criteria->add(ClientePeer::CLIENTE_ESTATUS, $this->cliente_estatus);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CREDITO)) $criteria->add(ClientePeer::CLIENTE_CREDITO, $this->cliente_credito);
        if ($this->isColumnModified(ClientePeer::CLIENTE_LIMITECREDITO)) $criteria->add(ClientePeer::CLIENTE_LIMITECREDITO, $this->cliente_limitecredito);
        if ($this->isColumnModified(ClientePeer::CLIENTE_CREDITORESTANTE)) $criteria->add(ClientePeer::CLIENTE_CREDITORESTANTE, $this->cliente_creditorestante);

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
        $criteria = new Criteria(ClientePeer::DATABASE_NAME);
        $criteria->add(ClientePeer::IDCLIENTE, $this->idcliente);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdcliente();
    }

    /**
     * Generic method to set the primary key (idcliente column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdcliente($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdcliente();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Cliente (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setClienteNombre($this->getClienteNombre());
        $copyObj->setClienteApaterno($this->getClienteApaterno());
        $copyObj->setClienteAmaterno($this->getClienteAmaterno());
        $copyObj->setClienteRfc($this->getClienteRfc());
        $copyObj->setClienteRazonsocial($this->getClienteRazonsocial());
        $copyObj->setClienteCallefiscal($this->getClienteCallefiscal());
        $copyObj->setClienteNumerofiscal($this->getClienteNumerofiscal());
        $copyObj->setClienteInteriorfiscal($this->getClienteInteriorfiscal());
        $copyObj->setClienteColoniafiscal($this->getClienteColoniafiscal());
        $copyObj->setClienteCiudadfiscal($this->getClienteCiudadfiscal());
        $copyObj->setClienteCpfiscal($this->getClienteCpfiscal());
        $copyObj->setClienteEstadofiscal($this->getClienteEstadofiscal());
        $copyObj->setClienteCalle($this->getClienteCalle());
        $copyObj->setClienteNumero($this->getClienteNumero());
        $copyObj->setClienteInterior($this->getClienteInterior());
        $copyObj->setClienteColonia($this->getClienteColonia());
        $copyObj->setClienteCp($this->getClienteCp());
        $copyObj->setClienteCiudad($this->getClienteCiudad());
        $copyObj->setClienteEstado($this->getClienteEstado());
        $copyObj->setClienteTipo($this->getClienteTipo());
        $copyObj->setClienteFecharegistro($this->getClienteFecharegistro());
        $copyObj->setClienteEstatus($this->getClienteEstatus());
        $copyObj->setClienteCredito($this->getClienteCredito());
        $copyObj->setClienteLimitecredito($this->getClienteLimitecredito());
        $copyObj->setClienteCreditorestante($this->getClienteCreditorestante());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getClienterelacionadosRelatedByIdcliente() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addClienterelacionadoRelatedByIdcliente($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getClienterelacionadosRelatedByIdclienteasociado() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addClienterelacionadoRelatedByIdclienteasociado($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getPedidomayoristas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addPedidomayorista($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getVentas() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addVenta($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdcliente(NULL); // this is a auto-increment column, so set to default value
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
     * @return Cliente Clone of current object.
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
     * @return ClientePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new ClientePeer();
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
        if ('ClienterelacionadoRelatedByIdcliente' == $relationName) {
            $this->initClienterelacionadosRelatedByIdcliente();
        }
        if ('ClienterelacionadoRelatedByIdclienteasociado' == $relationName) {
            $this->initClienterelacionadosRelatedByIdclienteasociado();
        }
        if ('Pedidomayorista' == $relationName) {
            $this->initPedidomayoristas();
        }
        if ('Venta' == $relationName) {
            $this->initVentas();
        }
    }

    /**
     * Clears out the collClienterelacionadosRelatedByIdcliente collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cliente The current object (for fluent API support)
     * @see        addClienterelacionadosRelatedByIdcliente()
     */
    public function clearClienterelacionadosRelatedByIdcliente()
    {
        $this->collClienterelacionadosRelatedByIdcliente = null; // important to set this to null since that means it is uninitialized
        $this->collClienterelacionadosRelatedByIdclientePartial = null;

        return $this;
    }

    /**
     * reset is the collClienterelacionadosRelatedByIdcliente collection loaded partially
     *
     * @return void
     */
    public function resetPartialClienterelacionadosRelatedByIdcliente($v = true)
    {
        $this->collClienterelacionadosRelatedByIdclientePartial = $v;
    }

    /**
     * Initializes the collClienterelacionadosRelatedByIdcliente collection.
     *
     * By default this just sets the collClienterelacionadosRelatedByIdcliente collection to an empty array (like clearcollClienterelacionadosRelatedByIdcliente());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initClienterelacionadosRelatedByIdcliente($overrideExisting = true)
    {
        if (null !== $this->collClienterelacionadosRelatedByIdcliente && !$overrideExisting) {
            return;
        }
        $this->collClienterelacionadosRelatedByIdcliente = new PropelObjectCollection();
        $this->collClienterelacionadosRelatedByIdcliente->setModel('Clienterelacionado');
    }

    /**
     * Gets an array of Clienterelacionado objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cliente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Clienterelacionado[] List of Clienterelacionado objects
     * @throws PropelException
     */
    public function getClienterelacionadosRelatedByIdcliente($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collClienterelacionadosRelatedByIdclientePartial && !$this->isNew();
        if (null === $this->collClienterelacionadosRelatedByIdcliente || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collClienterelacionadosRelatedByIdcliente) {
                // return empty collection
                $this->initClienterelacionadosRelatedByIdcliente();
            } else {
                $collClienterelacionadosRelatedByIdcliente = ClienterelacionadoQuery::create(null, $criteria)
                    ->filterByClienteRelatedByIdcliente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collClienterelacionadosRelatedByIdclientePartial && count($collClienterelacionadosRelatedByIdcliente)) {
                      $this->initClienterelacionadosRelatedByIdcliente(false);

                      foreach ($collClienterelacionadosRelatedByIdcliente as $obj) {
                        if (false == $this->collClienterelacionadosRelatedByIdcliente->contains($obj)) {
                          $this->collClienterelacionadosRelatedByIdcliente->append($obj);
                        }
                      }

                      $this->collClienterelacionadosRelatedByIdclientePartial = true;
                    }

                    $collClienterelacionadosRelatedByIdcliente->getInternalIterator()->rewind();

                    return $collClienterelacionadosRelatedByIdcliente;
                }

                if ($partial && $this->collClienterelacionadosRelatedByIdcliente) {
                    foreach ($this->collClienterelacionadosRelatedByIdcliente as $obj) {
                        if ($obj->isNew()) {
                            $collClienterelacionadosRelatedByIdcliente[] = $obj;
                        }
                    }
                }

                $this->collClienterelacionadosRelatedByIdcliente = $collClienterelacionadosRelatedByIdcliente;
                $this->collClienterelacionadosRelatedByIdclientePartial = false;
            }
        }

        return $this->collClienterelacionadosRelatedByIdcliente;
    }

    /**
     * Sets a collection of ClienterelacionadoRelatedByIdcliente objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $clienterelacionadosRelatedByIdcliente A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienterelacionadosRelatedByIdcliente(PropelCollection $clienterelacionadosRelatedByIdcliente, PropelPDO $con = null)
    {
        $clienterelacionadosRelatedByIdclienteToDelete = $this->getClienterelacionadosRelatedByIdcliente(new Criteria(), $con)->diff($clienterelacionadosRelatedByIdcliente);


        $this->clienterelacionadosRelatedByIdclienteScheduledForDeletion = $clienterelacionadosRelatedByIdclienteToDelete;

        foreach ($clienterelacionadosRelatedByIdclienteToDelete as $clienterelacionadoRelatedByIdclienteRemoved) {
            $clienterelacionadoRelatedByIdclienteRemoved->setClienteRelatedByIdcliente(null);
        }

        $this->collClienterelacionadosRelatedByIdcliente = null;
        foreach ($clienterelacionadosRelatedByIdcliente as $clienterelacionadoRelatedByIdcliente) {
            $this->addClienterelacionadoRelatedByIdcliente($clienterelacionadoRelatedByIdcliente);
        }

        $this->collClienterelacionadosRelatedByIdcliente = $clienterelacionadosRelatedByIdcliente;
        $this->collClienterelacionadosRelatedByIdclientePartial = false;

        return $this;
    }

    /**
     * Returns the number of related Clienterelacionado objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Clienterelacionado objects.
     * @throws PropelException
     */
    public function countClienterelacionadosRelatedByIdcliente(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collClienterelacionadosRelatedByIdclientePartial && !$this->isNew();
        if (null === $this->collClienterelacionadosRelatedByIdcliente || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collClienterelacionadosRelatedByIdcliente) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getClienterelacionadosRelatedByIdcliente());
            }
            $query = ClienterelacionadoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClienteRelatedByIdcliente($this)
                ->count($con);
        }

        return count($this->collClienterelacionadosRelatedByIdcliente);
    }

    /**
     * Method called to associate a Clienterelacionado object to this object
     * through the Clienterelacionado foreign key attribute.
     *
     * @param    Clienterelacionado $l Clienterelacionado
     * @return Cliente The current object (for fluent API support)
     */
    public function addClienterelacionadoRelatedByIdcliente(Clienterelacionado $l)
    {
        if ($this->collClienterelacionadosRelatedByIdcliente === null) {
            $this->initClienterelacionadosRelatedByIdcliente();
            $this->collClienterelacionadosRelatedByIdclientePartial = true;
        }

        if (!in_array($l, $this->collClienterelacionadosRelatedByIdcliente->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddClienterelacionadoRelatedByIdcliente($l);

            if ($this->clienterelacionadosRelatedByIdclienteScheduledForDeletion and $this->clienterelacionadosRelatedByIdclienteScheduledForDeletion->contains($l)) {
                $this->clienterelacionadosRelatedByIdclienteScheduledForDeletion->remove($this->clienterelacionadosRelatedByIdclienteScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ClienterelacionadoRelatedByIdcliente $clienterelacionadoRelatedByIdcliente The clienterelacionadoRelatedByIdcliente object to add.
     */
    protected function doAddClienterelacionadoRelatedByIdcliente($clienterelacionadoRelatedByIdcliente)
    {
        $this->collClienterelacionadosRelatedByIdcliente[]= $clienterelacionadoRelatedByIdcliente;
        $clienterelacionadoRelatedByIdcliente->setClienteRelatedByIdcliente($this);
    }

    /**
     * @param	ClienterelacionadoRelatedByIdcliente $clienterelacionadoRelatedByIdcliente The clienterelacionadoRelatedByIdcliente object to remove.
     * @return Cliente The current object (for fluent API support)
     */
    public function removeClienterelacionadoRelatedByIdcliente($clienterelacionadoRelatedByIdcliente)
    {
        if ($this->getClienterelacionadosRelatedByIdcliente()->contains($clienterelacionadoRelatedByIdcliente)) {
            $this->collClienterelacionadosRelatedByIdcliente->remove($this->collClienterelacionadosRelatedByIdcliente->search($clienterelacionadoRelatedByIdcliente));
            if (null === $this->clienterelacionadosRelatedByIdclienteScheduledForDeletion) {
                $this->clienterelacionadosRelatedByIdclienteScheduledForDeletion = clone $this->collClienterelacionadosRelatedByIdcliente;
                $this->clienterelacionadosRelatedByIdclienteScheduledForDeletion->clear();
            }
            $this->clienterelacionadosRelatedByIdclienteScheduledForDeletion[]= clone $clienterelacionadoRelatedByIdcliente;
            $clienterelacionadoRelatedByIdcliente->setClienteRelatedByIdcliente(null);
        }

        return $this;
    }

    /**
     * Clears out the collClienterelacionadosRelatedByIdclienteasociado collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cliente The current object (for fluent API support)
     * @see        addClienterelacionadosRelatedByIdclienteasociado()
     */
    public function clearClienterelacionadosRelatedByIdclienteasociado()
    {
        $this->collClienterelacionadosRelatedByIdclienteasociado = null; // important to set this to null since that means it is uninitialized
        $this->collClienterelacionadosRelatedByIdclienteasociadoPartial = null;

        return $this;
    }

    /**
     * reset is the collClienterelacionadosRelatedByIdclienteasociado collection loaded partially
     *
     * @return void
     */
    public function resetPartialClienterelacionadosRelatedByIdclienteasociado($v = true)
    {
        $this->collClienterelacionadosRelatedByIdclienteasociadoPartial = $v;
    }

    /**
     * Initializes the collClienterelacionadosRelatedByIdclienteasociado collection.
     *
     * By default this just sets the collClienterelacionadosRelatedByIdclienteasociado collection to an empty array (like clearcollClienterelacionadosRelatedByIdclienteasociado());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initClienterelacionadosRelatedByIdclienteasociado($overrideExisting = true)
    {
        if (null !== $this->collClienterelacionadosRelatedByIdclienteasociado && !$overrideExisting) {
            return;
        }
        $this->collClienterelacionadosRelatedByIdclienteasociado = new PropelObjectCollection();
        $this->collClienterelacionadosRelatedByIdclienteasociado->setModel('Clienterelacionado');
    }

    /**
     * Gets an array of Clienterelacionado objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cliente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Clienterelacionado[] List of Clienterelacionado objects
     * @throws PropelException
     */
    public function getClienterelacionadosRelatedByIdclienteasociado($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collClienterelacionadosRelatedByIdclienteasociadoPartial && !$this->isNew();
        if (null === $this->collClienterelacionadosRelatedByIdclienteasociado || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collClienterelacionadosRelatedByIdclienteasociado) {
                // return empty collection
                $this->initClienterelacionadosRelatedByIdclienteasociado();
            } else {
                $collClienterelacionadosRelatedByIdclienteasociado = ClienterelacionadoQuery::create(null, $criteria)
                    ->filterByClienteRelatedByIdclienteasociado($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collClienterelacionadosRelatedByIdclienteasociadoPartial && count($collClienterelacionadosRelatedByIdclienteasociado)) {
                      $this->initClienterelacionadosRelatedByIdclienteasociado(false);

                      foreach ($collClienterelacionadosRelatedByIdclienteasociado as $obj) {
                        if (false == $this->collClienterelacionadosRelatedByIdclienteasociado->contains($obj)) {
                          $this->collClienterelacionadosRelatedByIdclienteasociado->append($obj);
                        }
                      }

                      $this->collClienterelacionadosRelatedByIdclienteasociadoPartial = true;
                    }

                    $collClienterelacionadosRelatedByIdclienteasociado->getInternalIterator()->rewind();

                    return $collClienterelacionadosRelatedByIdclienteasociado;
                }

                if ($partial && $this->collClienterelacionadosRelatedByIdclienteasociado) {
                    foreach ($this->collClienterelacionadosRelatedByIdclienteasociado as $obj) {
                        if ($obj->isNew()) {
                            $collClienterelacionadosRelatedByIdclienteasociado[] = $obj;
                        }
                    }
                }

                $this->collClienterelacionadosRelatedByIdclienteasociado = $collClienterelacionadosRelatedByIdclienteasociado;
                $this->collClienterelacionadosRelatedByIdclienteasociadoPartial = false;
            }
        }

        return $this->collClienterelacionadosRelatedByIdclienteasociado;
    }

    /**
     * Sets a collection of ClienterelacionadoRelatedByIdclienteasociado objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $clienterelacionadosRelatedByIdclienteasociado A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cliente The current object (for fluent API support)
     */
    public function setClienterelacionadosRelatedByIdclienteasociado(PropelCollection $clienterelacionadosRelatedByIdclienteasociado, PropelPDO $con = null)
    {
        $clienterelacionadosRelatedByIdclienteasociadoToDelete = $this->getClienterelacionadosRelatedByIdclienteasociado(new Criteria(), $con)->diff($clienterelacionadosRelatedByIdclienteasociado);


        $this->clienterelacionadosRelatedByIdclienteasociadoScheduledForDeletion = $clienterelacionadosRelatedByIdclienteasociadoToDelete;

        foreach ($clienterelacionadosRelatedByIdclienteasociadoToDelete as $clienterelacionadoRelatedByIdclienteasociadoRemoved) {
            $clienterelacionadoRelatedByIdclienteasociadoRemoved->setClienteRelatedByIdclienteasociado(null);
        }

        $this->collClienterelacionadosRelatedByIdclienteasociado = null;
        foreach ($clienterelacionadosRelatedByIdclienteasociado as $clienterelacionadoRelatedByIdclienteasociado) {
            $this->addClienterelacionadoRelatedByIdclienteasociado($clienterelacionadoRelatedByIdclienteasociado);
        }

        $this->collClienterelacionadosRelatedByIdclienteasociado = $clienterelacionadosRelatedByIdclienteasociado;
        $this->collClienterelacionadosRelatedByIdclienteasociadoPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Clienterelacionado objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Clienterelacionado objects.
     * @throws PropelException
     */
    public function countClienterelacionadosRelatedByIdclienteasociado(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collClienterelacionadosRelatedByIdclienteasociadoPartial && !$this->isNew();
        if (null === $this->collClienterelacionadosRelatedByIdclienteasociado || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collClienterelacionadosRelatedByIdclienteasociado) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getClienterelacionadosRelatedByIdclienteasociado());
            }
            $query = ClienterelacionadoQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByClienteRelatedByIdclienteasociado($this)
                ->count($con);
        }

        return count($this->collClienterelacionadosRelatedByIdclienteasociado);
    }

    /**
     * Method called to associate a Clienterelacionado object to this object
     * through the Clienterelacionado foreign key attribute.
     *
     * @param    Clienterelacionado $l Clienterelacionado
     * @return Cliente The current object (for fluent API support)
     */
    public function addClienterelacionadoRelatedByIdclienteasociado(Clienterelacionado $l)
    {
        if ($this->collClienterelacionadosRelatedByIdclienteasociado === null) {
            $this->initClienterelacionadosRelatedByIdclienteasociado();
            $this->collClienterelacionadosRelatedByIdclienteasociadoPartial = true;
        }

        if (!in_array($l, $this->collClienterelacionadosRelatedByIdclienteasociado->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddClienterelacionadoRelatedByIdclienteasociado($l);

            if ($this->clienterelacionadosRelatedByIdclienteasociadoScheduledForDeletion and $this->clienterelacionadosRelatedByIdclienteasociadoScheduledForDeletion->contains($l)) {
                $this->clienterelacionadosRelatedByIdclienteasociadoScheduledForDeletion->remove($this->clienterelacionadosRelatedByIdclienteasociadoScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	ClienterelacionadoRelatedByIdclienteasociado $clienterelacionadoRelatedByIdclienteasociado The clienterelacionadoRelatedByIdclienteasociado object to add.
     */
    protected function doAddClienterelacionadoRelatedByIdclienteasociado($clienterelacionadoRelatedByIdclienteasociado)
    {
        $this->collClienterelacionadosRelatedByIdclienteasociado[]= $clienterelacionadoRelatedByIdclienteasociado;
        $clienterelacionadoRelatedByIdclienteasociado->setClienteRelatedByIdclienteasociado($this);
    }

    /**
     * @param	ClienterelacionadoRelatedByIdclienteasociado $clienterelacionadoRelatedByIdclienteasociado The clienterelacionadoRelatedByIdclienteasociado object to remove.
     * @return Cliente The current object (for fluent API support)
     */
    public function removeClienterelacionadoRelatedByIdclienteasociado($clienterelacionadoRelatedByIdclienteasociado)
    {
        if ($this->getClienterelacionadosRelatedByIdclienteasociado()->contains($clienterelacionadoRelatedByIdclienteasociado)) {
            $this->collClienterelacionadosRelatedByIdclienteasociado->remove($this->collClienterelacionadosRelatedByIdclienteasociado->search($clienterelacionadoRelatedByIdclienteasociado));
            if (null === $this->clienterelacionadosRelatedByIdclienteasociadoScheduledForDeletion) {
                $this->clienterelacionadosRelatedByIdclienteasociadoScheduledForDeletion = clone $this->collClienterelacionadosRelatedByIdclienteasociado;
                $this->clienterelacionadosRelatedByIdclienteasociadoScheduledForDeletion->clear();
            }
            $this->clienterelacionadosRelatedByIdclienteasociadoScheduledForDeletion[]= clone $clienterelacionadoRelatedByIdclienteasociado;
            $clienterelacionadoRelatedByIdclienteasociado->setClienteRelatedByIdclienteasociado(null);
        }

        return $this;
    }

    /**
     * Clears out the collPedidomayoristas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cliente The current object (for fluent API support)
     * @see        addPedidomayoristas()
     */
    public function clearPedidomayoristas()
    {
        $this->collPedidomayoristas = null; // important to set this to null since that means it is uninitialized
        $this->collPedidomayoristasPartial = null;

        return $this;
    }

    /**
     * reset is the collPedidomayoristas collection loaded partially
     *
     * @return void
     */
    public function resetPartialPedidomayoristas($v = true)
    {
        $this->collPedidomayoristasPartial = $v;
    }

    /**
     * Initializes the collPedidomayoristas collection.
     *
     * By default this just sets the collPedidomayoristas collection to an empty array (like clearcollPedidomayoristas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initPedidomayoristas($overrideExisting = true)
    {
        if (null !== $this->collPedidomayoristas && !$overrideExisting) {
            return;
        }
        $this->collPedidomayoristas = new PropelObjectCollection();
        $this->collPedidomayoristas->setModel('Pedidomayorista');
    }

    /**
     * Gets an array of Pedidomayorista objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cliente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Pedidomayorista[] List of Pedidomayorista objects
     * @throws PropelException
     */
    public function getPedidomayoristas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collPedidomayoristasPartial && !$this->isNew();
        if (null === $this->collPedidomayoristas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collPedidomayoristas) {
                // return empty collection
                $this->initPedidomayoristas();
            } else {
                $collPedidomayoristas = PedidomayoristaQuery::create(null, $criteria)
                    ->filterByCliente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collPedidomayoristasPartial && count($collPedidomayoristas)) {
                      $this->initPedidomayoristas(false);

                      foreach ($collPedidomayoristas as $obj) {
                        if (false == $this->collPedidomayoristas->contains($obj)) {
                          $this->collPedidomayoristas->append($obj);
                        }
                      }

                      $this->collPedidomayoristasPartial = true;
                    }

                    $collPedidomayoristas->getInternalIterator()->rewind();

                    return $collPedidomayoristas;
                }

                if ($partial && $this->collPedidomayoristas) {
                    foreach ($this->collPedidomayoristas as $obj) {
                        if ($obj->isNew()) {
                            $collPedidomayoristas[] = $obj;
                        }
                    }
                }

                $this->collPedidomayoristas = $collPedidomayoristas;
                $this->collPedidomayoristasPartial = false;
            }
        }

        return $this->collPedidomayoristas;
    }

    /**
     * Sets a collection of Pedidomayorista objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $pedidomayoristas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cliente The current object (for fluent API support)
     */
    public function setPedidomayoristas(PropelCollection $pedidomayoristas, PropelPDO $con = null)
    {
        $pedidomayoristasToDelete = $this->getPedidomayoristas(new Criteria(), $con)->diff($pedidomayoristas);


        $this->pedidomayoristasScheduledForDeletion = $pedidomayoristasToDelete;

        foreach ($pedidomayoristasToDelete as $pedidomayoristaRemoved) {
            $pedidomayoristaRemoved->setCliente(null);
        }

        $this->collPedidomayoristas = null;
        foreach ($pedidomayoristas as $pedidomayorista) {
            $this->addPedidomayorista($pedidomayorista);
        }

        $this->collPedidomayoristas = $pedidomayoristas;
        $this->collPedidomayoristasPartial = false;

        return $this;
    }

    /**
     * Returns the number of related Pedidomayorista objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related Pedidomayorista objects.
     * @throws PropelException
     */
    public function countPedidomayoristas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collPedidomayoristasPartial && !$this->isNew();
        if (null === $this->collPedidomayoristas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collPedidomayoristas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getPedidomayoristas());
            }
            $query = PedidomayoristaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCliente($this)
                ->count($con);
        }

        return count($this->collPedidomayoristas);
    }

    /**
     * Method called to associate a Pedidomayorista object to this object
     * through the Pedidomayorista foreign key attribute.
     *
     * @param    Pedidomayorista $l Pedidomayorista
     * @return Cliente The current object (for fluent API support)
     */
    public function addPedidomayorista(Pedidomayorista $l)
    {
        if ($this->collPedidomayoristas === null) {
            $this->initPedidomayoristas();
            $this->collPedidomayoristasPartial = true;
        }

        if (!in_array($l, $this->collPedidomayoristas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddPedidomayorista($l);

            if ($this->pedidomayoristasScheduledForDeletion and $this->pedidomayoristasScheduledForDeletion->contains($l)) {
                $this->pedidomayoristasScheduledForDeletion->remove($this->pedidomayoristasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Pedidomayorista $pedidomayorista The pedidomayorista object to add.
     */
    protected function doAddPedidomayorista($pedidomayorista)
    {
        $this->collPedidomayoristas[]= $pedidomayorista;
        $pedidomayorista->setCliente($this);
    }

    /**
     * @param	Pedidomayorista $pedidomayorista The pedidomayorista object to remove.
     * @return Cliente The current object (for fluent API support)
     */
    public function removePedidomayorista($pedidomayorista)
    {
        if ($this->getPedidomayoristas()->contains($pedidomayorista)) {
            $this->collPedidomayoristas->remove($this->collPedidomayoristas->search($pedidomayorista));
            if (null === $this->pedidomayoristasScheduledForDeletion) {
                $this->pedidomayoristasScheduledForDeletion = clone $this->collPedidomayoristas;
                $this->pedidomayoristasScheduledForDeletion->clear();
            }
            $this->pedidomayoristasScheduledForDeletion[]= clone $pedidomayorista;
            $pedidomayorista->setCliente(null);
        }

        return $this;
    }

    /**
     * Clears out the collVentas collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Cliente The current object (for fluent API support)
     * @see        addVentas()
     */
    public function clearVentas()
    {
        $this->collVentas = null; // important to set this to null since that means it is uninitialized
        $this->collVentasPartial = null;

        return $this;
    }

    /**
     * reset is the collVentas collection loaded partially
     *
     * @return void
     */
    public function resetPartialVentas($v = true)
    {
        $this->collVentasPartial = $v;
    }

    /**
     * Initializes the collVentas collection.
     *
     * By default this just sets the collVentas collection to an empty array (like clearcollVentas());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initVentas($overrideExisting = true)
    {
        if (null !== $this->collVentas && !$overrideExisting) {
            return;
        }
        $this->collVentas = new PropelObjectCollection();
        $this->collVentas->setModel('Venta');
    }

    /**
     * Gets an array of Venta objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Cliente is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|Venta[] List of Venta objects
     * @throws PropelException
     */
    public function getVentas($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collVentasPartial && !$this->isNew();
        if (null === $this->collVentas || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collVentas) {
                // return empty collection
                $this->initVentas();
            } else {
                $collVentas = VentaQuery::create(null, $criteria)
                    ->filterByCliente($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collVentasPartial && count($collVentas)) {
                      $this->initVentas(false);

                      foreach ($collVentas as $obj) {
                        if (false == $this->collVentas->contains($obj)) {
                          $this->collVentas->append($obj);
                        }
                      }

                      $this->collVentasPartial = true;
                    }

                    $collVentas->getInternalIterator()->rewind();

                    return $collVentas;
                }

                if ($partial && $this->collVentas) {
                    foreach ($this->collVentas as $obj) {
                        if ($obj->isNew()) {
                            $collVentas[] = $obj;
                        }
                    }
                }

                $this->collVentas = $collVentas;
                $this->collVentasPartial = false;
            }
        }

        return $this->collVentas;
    }

    /**
     * Sets a collection of Venta objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $ventas A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Cliente The current object (for fluent API support)
     */
    public function setVentas(PropelCollection $ventas, PropelPDO $con = null)
    {
        $ventasToDelete = $this->getVentas(new Criteria(), $con)->diff($ventas);


        $this->ventasScheduledForDeletion = $ventasToDelete;

        foreach ($ventasToDelete as $ventaRemoved) {
            $ventaRemoved->setCliente(null);
        }

        $this->collVentas = null;
        foreach ($ventas as $venta) {
            $this->addVenta($venta);
        }

        $this->collVentas = $ventas;
        $this->collVentasPartial = false;

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
    public function countVentas(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collVentasPartial && !$this->isNew();
        if (null === $this->collVentas || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collVentas) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getVentas());
            }
            $query = VentaQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCliente($this)
                ->count($con);
        }

        return count($this->collVentas);
    }

    /**
     * Method called to associate a Venta object to this object
     * through the Venta foreign key attribute.
     *
     * @param    Venta $l Venta
     * @return Cliente The current object (for fluent API support)
     */
    public function addVenta(Venta $l)
    {
        if ($this->collVentas === null) {
            $this->initVentas();
            $this->collVentasPartial = true;
        }

        if (!in_array($l, $this->collVentas->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddVenta($l);

            if ($this->ventasScheduledForDeletion and $this->ventasScheduledForDeletion->contains($l)) {
                $this->ventasScheduledForDeletion->remove($this->ventasScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param	Venta $venta The venta object to add.
     */
    protected function doAddVenta($venta)
    {
        $this->collVentas[]= $venta;
        $venta->setCliente($this);
    }

    /**
     * @param	Venta $venta The venta object to remove.
     * @return Cliente The current object (for fluent API support)
     */
    public function removeVenta($venta)
    {
        if ($this->getVentas()->contains($venta)) {
            $this->collVentas->remove($this->collVentas->search($venta));
            if (null === $this->ventasScheduledForDeletion) {
                $this->ventasScheduledForDeletion = clone $this->collVentas;
                $this->ventasScheduledForDeletion->clear();
            }
            $this->ventasScheduledForDeletion[]= clone $venta;
            $venta->setCliente(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cliente is new, it will return
     * an empty collection; or if this Cliente has previously
     * been saved, it will retrieve related Ventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cliente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Venta[] List of Venta objects
     */
    public function getVentasJoinEmpleadoRelatedByIdempleadocajero($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentaQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleadocajero', $join_behavior);

        return $this->getVentas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cliente is new, it will return
     * an empty collection; or if this Cliente has previously
     * been saved, it will retrieve related Ventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cliente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Venta[] List of Venta objects
     */
    public function getVentasJoinEmpleadoRelatedByIdempleadovendedor($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentaQuery::create(null, $criteria);
        $query->joinWith('EmpleadoRelatedByIdempleadovendedor', $join_behavior);

        return $this->getVentas($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Cliente is new, it will return
     * an empty collection; or if this Cliente has previously
     * been saved, it will retrieve related Ventas from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Cliente.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Venta[] List of Venta objects
     */
    public function getVentasJoinSucursal($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = VentaQuery::create(null, $criteria);
        $query->joinWith('Sucursal', $join_behavior);

        return $this->getVentas($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idcliente = null;
        $this->cliente_nombre = null;
        $this->cliente_apaterno = null;
        $this->cliente_amaterno = null;
        $this->cliente_rfc = null;
        $this->cliente_razonsocial = null;
        $this->cliente_callefiscal = null;
        $this->cliente_numerofiscal = null;
        $this->cliente_interiorfiscal = null;
        $this->cliente_coloniafiscal = null;
        $this->cliente_ciudadfiscal = null;
        $this->cliente_cpfiscal = null;
        $this->cliente_estadofiscal = null;
        $this->cliente_calle = null;
        $this->cliente_numero = null;
        $this->cliente_interior = null;
        $this->cliente_colonia = null;
        $this->cliente_cp = null;
        $this->cliente_ciudad = null;
        $this->cliente_estado = null;
        $this->cliente_tipo = null;
        $this->cliente_fecharegistro = null;
        $this->cliente_estatus = null;
        $this->cliente_credito = null;
        $this->cliente_limitecredito = null;
        $this->cliente_creditorestante = null;
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
            if ($this->collClienterelacionadosRelatedByIdcliente) {
                foreach ($this->collClienterelacionadosRelatedByIdcliente as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collClienterelacionadosRelatedByIdclienteasociado) {
                foreach ($this->collClienterelacionadosRelatedByIdclienteasociado as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collPedidomayoristas) {
                foreach ($this->collPedidomayoristas as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collVentas) {
                foreach ($this->collVentas as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collClienterelacionadosRelatedByIdcliente instanceof PropelCollection) {
            $this->collClienterelacionadosRelatedByIdcliente->clearIterator();
        }
        $this->collClienterelacionadosRelatedByIdcliente = null;
        if ($this->collClienterelacionadosRelatedByIdclienteasociado instanceof PropelCollection) {
            $this->collClienterelacionadosRelatedByIdclienteasociado->clearIterator();
        }
        $this->collClienterelacionadosRelatedByIdclienteasociado = null;
        if ($this->collPedidomayoristas instanceof PropelCollection) {
            $this->collPedidomayoristas->clearIterator();
        }
        $this->collPedidomayoristas = null;
        if ($this->collVentas instanceof PropelCollection) {
            $this->collVentas->clearIterator();
        }
        $this->collVentas = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(ClientePeer::DEFAULT_STRING_FORMAT);
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
