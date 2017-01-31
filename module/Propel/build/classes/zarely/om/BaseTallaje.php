<?php


/**
 * Base class that represents a row from the 'tallaje' table.
 *
 *
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseTallaje extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'TallajePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        TallajePeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the idtallaje field.
     * @var        int
     */
    protected $idtallaje;

    /**
     * The value for the tallaje_nombre field.
     * @var        string
     */
    protected $tallaje_nombre;

    /**
     * The value for the talla_70 field.
     * @var        boolean
     */
    protected $talla_70;

    /**
     * The value for the talla_75 field.
     * @var        boolean
     */
    protected $talla_75;

    /**
     * The value for the talla_80 field.
     * @var        boolean
     */
    protected $talla_80;

    /**
     * The value for the talla_85 field.
     * @var        boolean
     */
    protected $talla_85;

    /**
     * The value for the talla_90 field.
     * @var        boolean
     */
    protected $talla_90;

    /**
     * The value for the talla_95 field.
     * @var        boolean
     */
    protected $talla_95;

    /**
     * The value for the talla_100 field.
     * @var        boolean
     */
    protected $talla_100;

    /**
     * The value for the talla_105 field.
     * @var        boolean
     */
    protected $talla_105;

    /**
     * The value for the talla_110 field.
     * @var        boolean
     */
    protected $talla_110;

    /**
     * The value for the talla_115 field.
     * @var        boolean
     */
    protected $talla_115;

    /**
     * The value for the talla_120 field.
     * @var        boolean
     */
    protected $talla_120;

    /**
     * The value for the talla_125 field.
     * @var        boolean
     */
    protected $talla_125;

    /**
     * The value for the talla_130 field.
     * @var        boolean
     */
    protected $talla_130;

    /**
     * The value for the talla_135 field.
     * @var        boolean
     */
    protected $talla_135;

    /**
     * The value for the talla_140 field.
     * @var        boolean
     */
    protected $talla_140;

    /**
     * The value for the talla_145 field.
     * @var        boolean
     */
    protected $talla_145;

    /**
     * The value for the talla_150 field.
     * @var        boolean
     */
    protected $talla_150;

    /**
     * The value for the talla_155 field.
     * @var        boolean
     */
    protected $talla_155;

    /**
     * The value for the talla_160 field.
     * @var        boolean
     */
    protected $talla_160;

    /**
     * The value for the talla_165 field.
     * @var        boolean
     */
    protected $talla_165;

    /**
     * The value for the talla_170 field.
     * @var        boolean
     */
    protected $talla_170;

    /**
     * The value for the talla_175 field.
     * @var        boolean
     */
    protected $talla_175;

    /**
     * The value for the talla_180 field.
     * @var        boolean
     */
    protected $talla_180;

    /**
     * The value for the talla_185 field.
     * @var        boolean
     */
    protected $talla_185;

    /**
     * The value for the talla_190 field.
     * @var        boolean
     */
    protected $talla_190;

    /**
     * The value for the talla_195 field.
     * @var        boolean
     */
    protected $talla_195;

    /**
     * The value for the talla_200 field.
     * @var        boolean
     */
    protected $talla_200;

    /**
     * The value for the talla_205 field.
     * @var        boolean
     */
    protected $talla_205;

    /**
     * The value for the talla_210 field.
     * @var        boolean
     */
    protected $talla_210;

    /**
     * The value for the talla_215 field.
     * @var        boolean
     */
    protected $talla_215;

    /**
     * The value for the talla_220 field.
     * @var        boolean
     */
    protected $talla_220;

    /**
     * The value for the talla_225 field.
     * @var        boolean
     */
    protected $talla_225;

    /**
     * The value for the talla_230 field.
     * @var        boolean
     */
    protected $talla_230;

    /**
     * The value for the talla_235 field.
     * @var        boolean
     */
    protected $talla_235;

    /**
     * The value for the talla_240 field.
     * @var        boolean
     */
    protected $talla_240;

    /**
     * The value for the talla_245 field.
     * @var        boolean
     */
    protected $talla_245;

    /**
     * The value for the talla_250 field.
     * @var        boolean
     */
    protected $talla_250;

    /**
     * The value for the talla_255 field.
     * @var        boolean
     */
    protected $talla_255;

    /**
     * The value for the talla_260 field.
     * @var        boolean
     */
    protected $talla_260;

    /**
     * The value for the talla_265 field.
     * @var        boolean
     */
    protected $talla_265;

    /**
     * The value for the talla_270 field.
     * @var        boolean
     */
    protected $talla_270;

    /**
     * The value for the talla_275 field.
     * @var        boolean
     */
    protected $talla_275;

    /**
     * The value for the talla_280 field.
     * @var        boolean
     */
    protected $talla_280;

    /**
     * The value for the talla_285 field.
     * @var        boolean
     */
    protected $talla_285;

    /**
     * The value for the talla_290 field.
     * @var        boolean
     */
    protected $talla_290;

    /**
     * The value for the talla_295 field.
     * @var        boolean
     */
    protected $talla_295;

    /**
     * The value for the talla_300 field.
     * @var        boolean
     */
    protected $talla_300;

    /**
     * The value for the talla_305 field.
     * @var        boolean
     */
    protected $talla_305;

    /**
     * The value for the talla_310 field.
     * @var        boolean
     */
    protected $talla_310;

    /**
     * The value for the talla_315 field.
     * @var        boolean
     */
    protected $talla_315;

    /**
     * The value for the talla_320 field.
     * @var        boolean
     */
    protected $talla_320;

    /**
     * The value for the talla_325 field.
     * @var        boolean
     */
    protected $talla_325;

    /**
     * The value for the talla_330 field.
     * @var        boolean
     */
    protected $talla_330;

    /**
     * The value for the talla_335 field.
     * @var        boolean
     */
    protected $talla_335;

    /**
     * The value for the talla_340 field.
     * @var        boolean
     */
    protected $talla_340;

    /**
     * The value for the talla_345 field.
     * @var        boolean
     */
    protected $talla_345;

    /**
     * The value for the talla_350 field.
     * @var        boolean
     */
    protected $talla_350;

    /**
     * The value for the tallajerango field.
     * @var        string
     */
    protected $tallajerango;

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
    protected $marcatallajesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $productosScheduledForDeletion = null;

    /**
     * Get the [idtallaje] column value.
     *
     * @return int
     */
    public function getIdtallaje()
    {

        return $this->idtallaje;
    }

    /**
     * Get the [tallaje_nombre] column value.
     *
     * @return string
     */
    public function getTallajeNombre()
    {

        return $this->tallaje_nombre;
    }

    /**
     * Get the [talla_70] column value.
     *
     * @return boolean
     */
    public function getTalla70()
    {

        return $this->talla_70;
    }

    /**
     * Get the [talla_75] column value.
     *
     * @return boolean
     */
    public function getTalla75()
    {

        return $this->talla_75;
    }

    /**
     * Get the [talla_80] column value.
     *
     * @return boolean
     */
    public function getTalla80()
    {

        return $this->talla_80;
    }

    /**
     * Get the [talla_85] column value.
     *
     * @return boolean
     */
    public function getTalla85()
    {

        return $this->talla_85;
    }

    /**
     * Get the [talla_90] column value.
     *
     * @return boolean
     */
    public function getTalla90()
    {

        return $this->talla_90;
    }

    /**
     * Get the [talla_95] column value.
     *
     * @return boolean
     */
    public function getTalla95()
    {

        return $this->talla_95;
    }

    /**
     * Get the [talla_100] column value.
     *
     * @return boolean
     */
    public function getTalla100()
    {

        return $this->talla_100;
    }

    /**
     * Get the [talla_105] column value.
     *
     * @return boolean
     */
    public function getTalla105()
    {

        return $this->talla_105;
    }

    /**
     * Get the [talla_110] column value.
     *
     * @return boolean
     */
    public function getTalla110()
    {

        return $this->talla_110;
    }

    /**
     * Get the [talla_115] column value.
     *
     * @return boolean
     */
    public function getTalla115()
    {

        return $this->talla_115;
    }

    /**
     * Get the [talla_120] column value.
     *
     * @return boolean
     */
    public function getTalla120()
    {

        return $this->talla_120;
    }

    /**
     * Get the [talla_125] column value.
     *
     * @return boolean
     */
    public function getTalla125()
    {

        return $this->talla_125;
    }

    /**
     * Get the [talla_130] column value.
     *
     * @return boolean
     */
    public function getTalla130()
    {

        return $this->talla_130;
    }

    /**
     * Get the [talla_135] column value.
     *
     * @return boolean
     */
    public function getTalla135()
    {

        return $this->talla_135;
    }

    /**
     * Get the [talla_140] column value.
     *
     * @return boolean
     */
    public function getTalla140()
    {

        return $this->talla_140;
    }

    /**
     * Get the [talla_145] column value.
     *
     * @return boolean
     */
    public function getTalla145()
    {

        return $this->talla_145;
    }

    /**
     * Get the [talla_150] column value.
     *
     * @return boolean
     */
    public function getTalla150()
    {

        return $this->talla_150;
    }

    /**
     * Get the [talla_155] column value.
     *
     * @return boolean
     */
    public function getTalla155()
    {

        return $this->talla_155;
    }

    /**
     * Get the [talla_160] column value.
     *
     * @return boolean
     */
    public function getTalla160()
    {

        return $this->talla_160;
    }

    /**
     * Get the [talla_165] column value.
     *
     * @return boolean
     */
    public function getTalla165()
    {

        return $this->talla_165;
    }

    /**
     * Get the [talla_170] column value.
     *
     * @return boolean
     */
    public function getTalla170()
    {

        return $this->talla_170;
    }

    /**
     * Get the [talla_175] column value.
     *
     * @return boolean
     */
    public function getTalla175()
    {

        return $this->talla_175;
    }

    /**
     * Get the [talla_180] column value.
     *
     * @return boolean
     */
    public function getTalla180()
    {

        return $this->talla_180;
    }

    /**
     * Get the [talla_185] column value.
     *
     * @return boolean
     */
    public function getTalla185()
    {

        return $this->talla_185;
    }

    /**
     * Get the [talla_190] column value.
     *
     * @return boolean
     */
    public function getTalla190()
    {

        return $this->talla_190;
    }

    /**
     * Get the [talla_195] column value.
     *
     * @return boolean
     */
    public function getTalla195()
    {

        return $this->talla_195;
    }

    /**
     * Get the [talla_200] column value.
     *
     * @return boolean
     */
    public function getTalla200()
    {

        return $this->talla_200;
    }

    /**
     * Get the [talla_205] column value.
     *
     * @return boolean
     */
    public function getTalla205()
    {

        return $this->talla_205;
    }

    /**
     * Get the [talla_210] column value.
     *
     * @return boolean
     */
    public function getTalla210()
    {

        return $this->talla_210;
    }

    /**
     * Get the [talla_215] column value.
     *
     * @return boolean
     */
    public function getTalla215()
    {

        return $this->talla_215;
    }

    /**
     * Get the [talla_220] column value.
     *
     * @return boolean
     */
    public function getTalla220()
    {

        return $this->talla_220;
    }

    /**
     * Get the [talla_225] column value.
     *
     * @return boolean
     */
    public function getTalla225()
    {

        return $this->talla_225;
    }

    /**
     * Get the [talla_230] column value.
     *
     * @return boolean
     */
    public function getTalla230()
    {

        return $this->talla_230;
    }

    /**
     * Get the [talla_235] column value.
     *
     * @return boolean
     */
    public function getTalla235()
    {

        return $this->talla_235;
    }

    /**
     * Get the [talla_240] column value.
     *
     * @return boolean
     */
    public function getTalla240()
    {

        return $this->talla_240;
    }

    /**
     * Get the [talla_245] column value.
     *
     * @return boolean
     */
    public function getTalla245()
    {

        return $this->talla_245;
    }

    /**
     * Get the [talla_250] column value.
     *
     * @return boolean
     */
    public function getTalla250()
    {

        return $this->talla_250;
    }

    /**
     * Get the [talla_255] column value.
     *
     * @return boolean
     */
    public function getTalla255()
    {

        return $this->talla_255;
    }

    /**
     * Get the [talla_260] column value.
     *
     * @return boolean
     */
    public function getTalla260()
    {

        return $this->talla_260;
    }

    /**
     * Get the [talla_265] column value.
     *
     * @return boolean
     */
    public function getTalla265()
    {

        return $this->talla_265;
    }

    /**
     * Get the [talla_270] column value.
     *
     * @return boolean
     */
    public function getTalla270()
    {

        return $this->talla_270;
    }

    /**
     * Get the [talla_275] column value.
     *
     * @return boolean
     */
    public function getTalla275()
    {

        return $this->talla_275;
    }

    /**
     * Get the [talla_280] column value.
     *
     * @return boolean
     */
    public function getTalla280()
    {

        return $this->talla_280;
    }

    /**
     * Get the [talla_285] column value.
     *
     * @return boolean
     */
    public function getTalla285()
    {

        return $this->talla_285;
    }

    /**
     * Get the [talla_290] column value.
     *
     * @return boolean
     */
    public function getTalla290()
    {

        return $this->talla_290;
    }

    /**
     * Get the [talla_295] column value.
     *
     * @return boolean
     */
    public function getTalla295()
    {

        return $this->talla_295;
    }

    /**
     * Get the [talla_300] column value.
     *
     * @return boolean
     */
    public function getTalla300()
    {

        return $this->talla_300;
    }

    /**
     * Get the [talla_305] column value.
     *
     * @return boolean
     */
    public function getTalla305()
    {

        return $this->talla_305;
    }

    /**
     * Get the [talla_310] column value.
     *
     * @return boolean
     */
    public function getTalla310()
    {

        return $this->talla_310;
    }

    /**
     * Get the [talla_315] column value.
     *
     * @return boolean
     */
    public function getTalla315()
    {

        return $this->talla_315;
    }

    /**
     * Get the [talla_320] column value.
     *
     * @return boolean
     */
    public function getTalla320()
    {

        return $this->talla_320;
    }

    /**
     * Get the [talla_325] column value.
     *
     * @return boolean
     */
    public function getTalla325()
    {

        return $this->talla_325;
    }

    /**
     * Get the [talla_330] column value.
     *
     * @return boolean
     */
    public function getTalla330()
    {

        return $this->talla_330;
    }

    /**
     * Get the [talla_335] column value.
     *
     * @return boolean
     */
    public function getTalla335()
    {

        return $this->talla_335;
    }

    /**
     * Get the [talla_340] column value.
     *
     * @return boolean
     */
    public function getTalla340()
    {

        return $this->talla_340;
    }

    /**
     * Get the [talla_345] column value.
     *
     * @return boolean
     */
    public function getTalla345()
    {

        return $this->talla_345;
    }

    /**
     * Get the [talla_350] column value.
     *
     * @return boolean
     */
    public function getTalla350()
    {

        return $this->talla_350;
    }

    /**
     * Get the [tallajerango] column value.
     *
     * @return string
     */
    public function getTallajerango()
    {

        return $this->tallajerango;
    }

    /**
     * Set the value of [idtallaje] column.
     *
     * @param  int $v new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setIdtallaje($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->idtallaje !== $v) {
            $this->idtallaje = $v;
            $this->modifiedColumns[] = TallajePeer::IDTALLAJE;
        }


        return $this;
    } // setIdtallaje()

    /**
     * Set the value of [tallaje_nombre] column.
     *
     * @param  string $v new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTallajeNombre($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tallaje_nombre !== $v) {
            $this->tallaje_nombre = $v;
            $this->modifiedColumns[] = TallajePeer::TALLAJE_NOMBRE;
        }


        return $this;
    } // setTallajeNombre()

    /**
     * Sets the value of the [talla_70] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla70($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_70 !== $v) {
            $this->talla_70 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_70;
        }


        return $this;
    } // setTalla70()

    /**
     * Sets the value of the [talla_75] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla75($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_75 !== $v) {
            $this->talla_75 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_75;
        }


        return $this;
    } // setTalla75()

    /**
     * Sets the value of the [talla_80] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla80($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_80 !== $v) {
            $this->talla_80 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_80;
        }


        return $this;
    } // setTalla80()

    /**
     * Sets the value of the [talla_85] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla85($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_85 !== $v) {
            $this->talla_85 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_85;
        }


        return $this;
    } // setTalla85()

    /**
     * Sets the value of the [talla_90] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla90($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_90 !== $v) {
            $this->talla_90 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_90;
        }


        return $this;
    } // setTalla90()

    /**
     * Sets the value of the [talla_95] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla95($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_95 !== $v) {
            $this->talla_95 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_95;
        }


        return $this;
    } // setTalla95()

    /**
     * Sets the value of the [talla_100] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla100($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_100 !== $v) {
            $this->talla_100 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_100;
        }


        return $this;
    } // setTalla100()

    /**
     * Sets the value of the [talla_105] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla105($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_105 !== $v) {
            $this->talla_105 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_105;
        }


        return $this;
    } // setTalla105()

    /**
     * Sets the value of the [talla_110] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla110($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_110 !== $v) {
            $this->talla_110 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_110;
        }


        return $this;
    } // setTalla110()

    /**
     * Sets the value of the [talla_115] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla115($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_115 !== $v) {
            $this->talla_115 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_115;
        }


        return $this;
    } // setTalla115()

    /**
     * Sets the value of the [talla_120] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla120($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_120 !== $v) {
            $this->talla_120 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_120;
        }


        return $this;
    } // setTalla120()

    /**
     * Sets the value of the [talla_125] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla125($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_125 !== $v) {
            $this->talla_125 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_125;
        }


        return $this;
    } // setTalla125()

    /**
     * Sets the value of the [talla_130] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla130($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_130 !== $v) {
            $this->talla_130 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_130;
        }


        return $this;
    } // setTalla130()

    /**
     * Sets the value of the [talla_135] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla135($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_135 !== $v) {
            $this->talla_135 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_135;
        }


        return $this;
    } // setTalla135()

    /**
     * Sets the value of the [talla_140] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla140($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_140 !== $v) {
            $this->talla_140 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_140;
        }


        return $this;
    } // setTalla140()

    /**
     * Sets the value of the [talla_145] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla145($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_145 !== $v) {
            $this->talla_145 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_145;
        }


        return $this;
    } // setTalla145()

    /**
     * Sets the value of the [talla_150] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla150($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_150 !== $v) {
            $this->talla_150 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_150;
        }


        return $this;
    } // setTalla150()

    /**
     * Sets the value of the [talla_155] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla155($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_155 !== $v) {
            $this->talla_155 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_155;
        }


        return $this;
    } // setTalla155()

    /**
     * Sets the value of the [talla_160] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla160($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_160 !== $v) {
            $this->talla_160 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_160;
        }


        return $this;
    } // setTalla160()

    /**
     * Sets the value of the [talla_165] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla165($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_165 !== $v) {
            $this->talla_165 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_165;
        }


        return $this;
    } // setTalla165()

    /**
     * Sets the value of the [talla_170] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla170($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_170 !== $v) {
            $this->talla_170 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_170;
        }


        return $this;
    } // setTalla170()

    /**
     * Sets the value of the [talla_175] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla175($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_175 !== $v) {
            $this->talla_175 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_175;
        }


        return $this;
    } // setTalla175()

    /**
     * Sets the value of the [talla_180] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla180($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_180 !== $v) {
            $this->talla_180 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_180;
        }


        return $this;
    } // setTalla180()

    /**
     * Sets the value of the [talla_185] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla185($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_185 !== $v) {
            $this->talla_185 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_185;
        }


        return $this;
    } // setTalla185()

    /**
     * Sets the value of the [talla_190] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla190($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_190 !== $v) {
            $this->talla_190 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_190;
        }


        return $this;
    } // setTalla190()

    /**
     * Sets the value of the [talla_195] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla195($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_195 !== $v) {
            $this->talla_195 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_195;
        }


        return $this;
    } // setTalla195()

    /**
     * Sets the value of the [talla_200] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla200($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_200 !== $v) {
            $this->talla_200 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_200;
        }


        return $this;
    } // setTalla200()

    /**
     * Sets the value of the [talla_205] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla205($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_205 !== $v) {
            $this->talla_205 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_205;
        }


        return $this;
    } // setTalla205()

    /**
     * Sets the value of the [talla_210] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla210($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_210 !== $v) {
            $this->talla_210 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_210;
        }


        return $this;
    } // setTalla210()

    /**
     * Sets the value of the [talla_215] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla215($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_215 !== $v) {
            $this->talla_215 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_215;
        }


        return $this;
    } // setTalla215()

    /**
     * Sets the value of the [talla_220] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla220($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_220 !== $v) {
            $this->talla_220 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_220;
        }


        return $this;
    } // setTalla220()

    /**
     * Sets the value of the [talla_225] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla225($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_225 !== $v) {
            $this->talla_225 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_225;
        }


        return $this;
    } // setTalla225()

    /**
     * Sets the value of the [talla_230] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla230($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_230 !== $v) {
            $this->talla_230 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_230;
        }


        return $this;
    } // setTalla230()

    /**
     * Sets the value of the [talla_235] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla235($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_235 !== $v) {
            $this->talla_235 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_235;
        }


        return $this;
    } // setTalla235()

    /**
     * Sets the value of the [talla_240] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla240($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_240 !== $v) {
            $this->talla_240 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_240;
        }


        return $this;
    } // setTalla240()

    /**
     * Sets the value of the [talla_245] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla245($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_245 !== $v) {
            $this->talla_245 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_245;
        }


        return $this;
    } // setTalla245()

    /**
     * Sets the value of the [talla_250] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla250($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_250 !== $v) {
            $this->talla_250 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_250;
        }


        return $this;
    } // setTalla250()

    /**
     * Sets the value of the [talla_255] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla255($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_255 !== $v) {
            $this->talla_255 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_255;
        }


        return $this;
    } // setTalla255()

    /**
     * Sets the value of the [talla_260] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla260($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_260 !== $v) {
            $this->talla_260 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_260;
        }


        return $this;
    } // setTalla260()

    /**
     * Sets the value of the [talla_265] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla265($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_265 !== $v) {
            $this->talla_265 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_265;
        }


        return $this;
    } // setTalla265()

    /**
     * Sets the value of the [talla_270] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla270($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_270 !== $v) {
            $this->talla_270 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_270;
        }


        return $this;
    } // setTalla270()

    /**
     * Sets the value of the [talla_275] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla275($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_275 !== $v) {
            $this->talla_275 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_275;
        }


        return $this;
    } // setTalla275()

    /**
     * Sets the value of the [talla_280] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla280($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_280 !== $v) {
            $this->talla_280 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_280;
        }


        return $this;
    } // setTalla280()

    /**
     * Sets the value of the [talla_285] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla285($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_285 !== $v) {
            $this->talla_285 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_285;
        }


        return $this;
    } // setTalla285()

    /**
     * Sets the value of the [talla_290] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla290($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_290 !== $v) {
            $this->talla_290 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_290;
        }


        return $this;
    } // setTalla290()

    /**
     * Sets the value of the [talla_295] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla295($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_295 !== $v) {
            $this->talla_295 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_295;
        }


        return $this;
    } // setTalla295()

    /**
     * Sets the value of the [talla_300] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla300($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_300 !== $v) {
            $this->talla_300 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_300;
        }


        return $this;
    } // setTalla300()

    /**
     * Sets the value of the [talla_305] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla305($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_305 !== $v) {
            $this->talla_305 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_305;
        }


        return $this;
    } // setTalla305()

    /**
     * Sets the value of the [talla_310] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla310($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_310 !== $v) {
            $this->talla_310 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_310;
        }


        return $this;
    } // setTalla310()

    /**
     * Sets the value of the [talla_315] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla315($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_315 !== $v) {
            $this->talla_315 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_315;
        }


        return $this;
    } // setTalla315()

    /**
     * Sets the value of the [talla_320] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla320($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_320 !== $v) {
            $this->talla_320 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_320;
        }


        return $this;
    } // setTalla320()

    /**
     * Sets the value of the [talla_325] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla325($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_325 !== $v) {
            $this->talla_325 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_325;
        }


        return $this;
    } // setTalla325()

    /**
     * Sets the value of the [talla_330] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla330($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_330 !== $v) {
            $this->talla_330 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_330;
        }


        return $this;
    } // setTalla330()

    /**
     * Sets the value of the [talla_335] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla335($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_335 !== $v) {
            $this->talla_335 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_335;
        }


        return $this;
    } // setTalla335()

    /**
     * Sets the value of the [talla_340] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla340($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_340 !== $v) {
            $this->talla_340 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_340;
        }


        return $this;
    } // setTalla340()

    /**
     * Sets the value of the [talla_345] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla345($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_345 !== $v) {
            $this->talla_345 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_345;
        }


        return $this;
    } // setTalla345()

    /**
     * Sets the value of the [talla_350] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param boolean|integer|string $v The new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTalla350($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->talla_350 !== $v) {
            $this->talla_350 = $v;
            $this->modifiedColumns[] = TallajePeer::TALLA_350;
        }


        return $this;
    } // setTalla350()

    /**
     * Set the value of [tallajerango] column.
     *
     * @param  string $v new value
     * @return Tallaje The current object (for fluent API support)
     */
    public function setTallajerango($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        if ($this->tallajerango !== $v) {
            $this->tallajerango = $v;
            $this->modifiedColumns[] = TallajePeer::TALLAJERANGO;
        }


        return $this;
    } // setTallajerango()

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

            $this->idtallaje = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->tallaje_nombre = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->talla_70 = ($row[$startcol + 2] !== null) ? (boolean) $row[$startcol + 2] : null;
            $this->talla_75 = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
            $this->talla_80 = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->talla_85 = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
            $this->talla_90 = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->talla_95 = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->talla_100 = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->talla_105 = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
            $this->talla_110 = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
            $this->talla_115 = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
            $this->talla_120 = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
            $this->talla_125 = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
            $this->talla_130 = ($row[$startcol + 14] !== null) ? (boolean) $row[$startcol + 14] : null;
            $this->talla_135 = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
            $this->talla_140 = ($row[$startcol + 16] !== null) ? (boolean) $row[$startcol + 16] : null;
            $this->talla_145 = ($row[$startcol + 17] !== null) ? (boolean) $row[$startcol + 17] : null;
            $this->talla_150 = ($row[$startcol + 18] !== null) ? (boolean) $row[$startcol + 18] : null;
            $this->talla_155 = ($row[$startcol + 19] !== null) ? (boolean) $row[$startcol + 19] : null;
            $this->talla_160 = ($row[$startcol + 20] !== null) ? (boolean) $row[$startcol + 20] : null;
            $this->talla_165 = ($row[$startcol + 21] !== null) ? (boolean) $row[$startcol + 21] : null;
            $this->talla_170 = ($row[$startcol + 22] !== null) ? (boolean) $row[$startcol + 22] : null;
            $this->talla_175 = ($row[$startcol + 23] !== null) ? (boolean) $row[$startcol + 23] : null;
            $this->talla_180 = ($row[$startcol + 24] !== null) ? (boolean) $row[$startcol + 24] : null;
            $this->talla_185 = ($row[$startcol + 25] !== null) ? (boolean) $row[$startcol + 25] : null;
            $this->talla_190 = ($row[$startcol + 26] !== null) ? (boolean) $row[$startcol + 26] : null;
            $this->talla_195 = ($row[$startcol + 27] !== null) ? (boolean) $row[$startcol + 27] : null;
            $this->talla_200 = ($row[$startcol + 28] !== null) ? (boolean) $row[$startcol + 28] : null;
            $this->talla_205 = ($row[$startcol + 29] !== null) ? (boolean) $row[$startcol + 29] : null;
            $this->talla_210 = ($row[$startcol + 30] !== null) ? (boolean) $row[$startcol + 30] : null;
            $this->talla_215 = ($row[$startcol + 31] !== null) ? (boolean) $row[$startcol + 31] : null;
            $this->talla_220 = ($row[$startcol + 32] !== null) ? (boolean) $row[$startcol + 32] : null;
            $this->talla_225 = ($row[$startcol + 33] !== null) ? (boolean) $row[$startcol + 33] : null;
            $this->talla_230 = ($row[$startcol + 34] !== null) ? (boolean) $row[$startcol + 34] : null;
            $this->talla_235 = ($row[$startcol + 35] !== null) ? (boolean) $row[$startcol + 35] : null;
            $this->talla_240 = ($row[$startcol + 36] !== null) ? (boolean) $row[$startcol + 36] : null;
            $this->talla_245 = ($row[$startcol + 37] !== null) ? (boolean) $row[$startcol + 37] : null;
            $this->talla_250 = ($row[$startcol + 38] !== null) ? (boolean) $row[$startcol + 38] : null;
            $this->talla_255 = ($row[$startcol + 39] !== null) ? (boolean) $row[$startcol + 39] : null;
            $this->talla_260 = ($row[$startcol + 40] !== null) ? (boolean) $row[$startcol + 40] : null;
            $this->talla_265 = ($row[$startcol + 41] !== null) ? (boolean) $row[$startcol + 41] : null;
            $this->talla_270 = ($row[$startcol + 42] !== null) ? (boolean) $row[$startcol + 42] : null;
            $this->talla_275 = ($row[$startcol + 43] !== null) ? (boolean) $row[$startcol + 43] : null;
            $this->talla_280 = ($row[$startcol + 44] !== null) ? (boolean) $row[$startcol + 44] : null;
            $this->talla_285 = ($row[$startcol + 45] !== null) ? (boolean) $row[$startcol + 45] : null;
            $this->talla_290 = ($row[$startcol + 46] !== null) ? (boolean) $row[$startcol + 46] : null;
            $this->talla_295 = ($row[$startcol + 47] !== null) ? (boolean) $row[$startcol + 47] : null;
            $this->talla_300 = ($row[$startcol + 48] !== null) ? (boolean) $row[$startcol + 48] : null;
            $this->talla_305 = ($row[$startcol + 49] !== null) ? (boolean) $row[$startcol + 49] : null;
            $this->talla_310 = ($row[$startcol + 50] !== null) ? (boolean) $row[$startcol + 50] : null;
            $this->talla_315 = ($row[$startcol + 51] !== null) ? (boolean) $row[$startcol + 51] : null;
            $this->talla_320 = ($row[$startcol + 52] !== null) ? (boolean) $row[$startcol + 52] : null;
            $this->talla_325 = ($row[$startcol + 53] !== null) ? (boolean) $row[$startcol + 53] : null;
            $this->talla_330 = ($row[$startcol + 54] !== null) ? (boolean) $row[$startcol + 54] : null;
            $this->talla_335 = ($row[$startcol + 55] !== null) ? (boolean) $row[$startcol + 55] : null;
            $this->talla_340 = ($row[$startcol + 56] !== null) ? (boolean) $row[$startcol + 56] : null;
            $this->talla_345 = ($row[$startcol + 57] !== null) ? (boolean) $row[$startcol + 57] : null;
            $this->talla_350 = ($row[$startcol + 58] !== null) ? (boolean) $row[$startcol + 58] : null;
            $this->tallajerango = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 60; // 60 = TallajePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Tallaje object", $e);
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
            $con = Propel::getConnection(TallajePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = TallajePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collMarcatallajes = null;

            $this->collProductos = null;

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
            $con = Propel::getConnection(TallajePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = TallajeQuery::create()
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
            $con = Propel::getConnection(TallajePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                TallajePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = TallajePeer::IDTALLAJE;
        if (null !== $this->idtallaje) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . TallajePeer::IDTALLAJE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(TallajePeer::IDTALLAJE)) {
            $modifiedColumns[':p' . $index++]  = '`idtallaje`';
        }
        if ($this->isColumnModified(TallajePeer::TALLAJE_NOMBRE)) {
            $modifiedColumns[':p' . $index++]  = '`tallaje_nombre`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_70)) {
            $modifiedColumns[':p' . $index++]  = '`talla_70`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_75)) {
            $modifiedColumns[':p' . $index++]  = '`talla_75`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_80)) {
            $modifiedColumns[':p' . $index++]  = '`talla_80`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_85)) {
            $modifiedColumns[':p' . $index++]  = '`talla_85`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_90)) {
            $modifiedColumns[':p' . $index++]  = '`talla_90`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_95)) {
            $modifiedColumns[':p' . $index++]  = '`talla_95`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_100)) {
            $modifiedColumns[':p' . $index++]  = '`talla_100`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_105)) {
            $modifiedColumns[':p' . $index++]  = '`talla_105`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_110)) {
            $modifiedColumns[':p' . $index++]  = '`talla_110`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_115)) {
            $modifiedColumns[':p' . $index++]  = '`talla_115`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_120)) {
            $modifiedColumns[':p' . $index++]  = '`talla_120`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_125)) {
            $modifiedColumns[':p' . $index++]  = '`talla_125`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_130)) {
            $modifiedColumns[':p' . $index++]  = '`talla_130`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_135)) {
            $modifiedColumns[':p' . $index++]  = '`talla_135`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_140)) {
            $modifiedColumns[':p' . $index++]  = '`talla_140`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_145)) {
            $modifiedColumns[':p' . $index++]  = '`talla_145`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_150)) {
            $modifiedColumns[':p' . $index++]  = '`talla_150`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_155)) {
            $modifiedColumns[':p' . $index++]  = '`talla_155`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_160)) {
            $modifiedColumns[':p' . $index++]  = '`talla_160`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_165)) {
            $modifiedColumns[':p' . $index++]  = '`talla_165`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_170)) {
            $modifiedColumns[':p' . $index++]  = '`talla_170`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_175)) {
            $modifiedColumns[':p' . $index++]  = '`talla_175`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_180)) {
            $modifiedColumns[':p' . $index++]  = '`talla_180`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_185)) {
            $modifiedColumns[':p' . $index++]  = '`talla_185`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_190)) {
            $modifiedColumns[':p' . $index++]  = '`talla_190`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_195)) {
            $modifiedColumns[':p' . $index++]  = '`talla_195`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_200)) {
            $modifiedColumns[':p' . $index++]  = '`talla_200`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_205)) {
            $modifiedColumns[':p' . $index++]  = '`talla_205`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_210)) {
            $modifiedColumns[':p' . $index++]  = '`talla_210`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_215)) {
            $modifiedColumns[':p' . $index++]  = '`talla_215`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_220)) {
            $modifiedColumns[':p' . $index++]  = '`talla_220`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_225)) {
            $modifiedColumns[':p' . $index++]  = '`talla_225`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_230)) {
            $modifiedColumns[':p' . $index++]  = '`talla_230`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_235)) {
            $modifiedColumns[':p' . $index++]  = '`talla_235`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_240)) {
            $modifiedColumns[':p' . $index++]  = '`talla_240`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_245)) {
            $modifiedColumns[':p' . $index++]  = '`talla_245`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_250)) {
            $modifiedColumns[':p' . $index++]  = '`talla_250`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_255)) {
            $modifiedColumns[':p' . $index++]  = '`talla_255`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_260)) {
            $modifiedColumns[':p' . $index++]  = '`talla_260`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_265)) {
            $modifiedColumns[':p' . $index++]  = '`talla_265`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_270)) {
            $modifiedColumns[':p' . $index++]  = '`talla_270`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_275)) {
            $modifiedColumns[':p' . $index++]  = '`talla_275`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_280)) {
            $modifiedColumns[':p' . $index++]  = '`talla_280`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_285)) {
            $modifiedColumns[':p' . $index++]  = '`talla_285`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_290)) {
            $modifiedColumns[':p' . $index++]  = '`talla_290`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_295)) {
            $modifiedColumns[':p' . $index++]  = '`talla_295`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_300)) {
            $modifiedColumns[':p' . $index++]  = '`talla_300`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_305)) {
            $modifiedColumns[':p' . $index++]  = '`talla_305`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_310)) {
            $modifiedColumns[':p' . $index++]  = '`talla_310`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_315)) {
            $modifiedColumns[':p' . $index++]  = '`talla_315`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_320)) {
            $modifiedColumns[':p' . $index++]  = '`talla_320`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_325)) {
            $modifiedColumns[':p' . $index++]  = '`talla_325`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_330)) {
            $modifiedColumns[':p' . $index++]  = '`talla_330`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_335)) {
            $modifiedColumns[':p' . $index++]  = '`talla_335`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_340)) {
            $modifiedColumns[':p' . $index++]  = '`talla_340`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_345)) {
            $modifiedColumns[':p' . $index++]  = '`talla_345`';
        }
        if ($this->isColumnModified(TallajePeer::TALLA_350)) {
            $modifiedColumns[':p' . $index++]  = '`talla_350`';
        }
        if ($this->isColumnModified(TallajePeer::TALLAJERANGO)) {
            $modifiedColumns[':p' . $index++]  = '`tallajerango`';
        }

        $sql = sprintf(
            'INSERT INTO `tallaje` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`idtallaje`':
                        $stmt->bindValue($identifier, $this->idtallaje, PDO::PARAM_INT);
                        break;
                    case '`tallaje_nombre`':
                        $stmt->bindValue($identifier, $this->tallaje_nombre, PDO::PARAM_STR);
                        break;
                    case '`talla_70`':
                        $stmt->bindValue($identifier, (int) $this->talla_70, PDO::PARAM_INT);
                        break;
                    case '`talla_75`':
                        $stmt->bindValue($identifier, (int) $this->talla_75, PDO::PARAM_INT);
                        break;
                    case '`talla_80`':
                        $stmt->bindValue($identifier, (int) $this->talla_80, PDO::PARAM_INT);
                        break;
                    case '`talla_85`':
                        $stmt->bindValue($identifier, (int) $this->talla_85, PDO::PARAM_INT);
                        break;
                    case '`talla_90`':
                        $stmt->bindValue($identifier, (int) $this->talla_90, PDO::PARAM_INT);
                        break;
                    case '`talla_95`':
                        $stmt->bindValue($identifier, (int) $this->talla_95, PDO::PARAM_INT);
                        break;
                    case '`talla_100`':
                        $stmt->bindValue($identifier, (int) $this->talla_100, PDO::PARAM_INT);
                        break;
                    case '`talla_105`':
                        $stmt->bindValue($identifier, (int) $this->talla_105, PDO::PARAM_INT);
                        break;
                    case '`talla_110`':
                        $stmt->bindValue($identifier, (int) $this->talla_110, PDO::PARAM_INT);
                        break;
                    case '`talla_115`':
                        $stmt->bindValue($identifier, (int) $this->talla_115, PDO::PARAM_INT);
                        break;
                    case '`talla_120`':
                        $stmt->bindValue($identifier, (int) $this->talla_120, PDO::PARAM_INT);
                        break;
                    case '`talla_125`':
                        $stmt->bindValue($identifier, (int) $this->talla_125, PDO::PARAM_INT);
                        break;
                    case '`talla_130`':
                        $stmt->bindValue($identifier, (int) $this->talla_130, PDO::PARAM_INT);
                        break;
                    case '`talla_135`':
                        $stmt->bindValue($identifier, (int) $this->talla_135, PDO::PARAM_INT);
                        break;
                    case '`talla_140`':
                        $stmt->bindValue($identifier, (int) $this->talla_140, PDO::PARAM_INT);
                        break;
                    case '`talla_145`':
                        $stmt->bindValue($identifier, (int) $this->talla_145, PDO::PARAM_INT);
                        break;
                    case '`talla_150`':
                        $stmt->bindValue($identifier, (int) $this->talla_150, PDO::PARAM_INT);
                        break;
                    case '`talla_155`':
                        $stmt->bindValue($identifier, (int) $this->talla_155, PDO::PARAM_INT);
                        break;
                    case '`talla_160`':
                        $stmt->bindValue($identifier, (int) $this->talla_160, PDO::PARAM_INT);
                        break;
                    case '`talla_165`':
                        $stmt->bindValue($identifier, (int) $this->talla_165, PDO::PARAM_INT);
                        break;
                    case '`talla_170`':
                        $stmt->bindValue($identifier, (int) $this->talla_170, PDO::PARAM_INT);
                        break;
                    case '`talla_175`':
                        $stmt->bindValue($identifier, (int) $this->talla_175, PDO::PARAM_INT);
                        break;
                    case '`talla_180`':
                        $stmt->bindValue($identifier, (int) $this->talla_180, PDO::PARAM_INT);
                        break;
                    case '`talla_185`':
                        $stmt->bindValue($identifier, (int) $this->talla_185, PDO::PARAM_INT);
                        break;
                    case '`talla_190`':
                        $stmt->bindValue($identifier, (int) $this->talla_190, PDO::PARAM_INT);
                        break;
                    case '`talla_195`':
                        $stmt->bindValue($identifier, (int) $this->talla_195, PDO::PARAM_INT);
                        break;
                    case '`talla_200`':
                        $stmt->bindValue($identifier, (int) $this->talla_200, PDO::PARAM_INT);
                        break;
                    case '`talla_205`':
                        $stmt->bindValue($identifier, (int) $this->talla_205, PDO::PARAM_INT);
                        break;
                    case '`talla_210`':
                        $stmt->bindValue($identifier, (int) $this->talla_210, PDO::PARAM_INT);
                        break;
                    case '`talla_215`':
                        $stmt->bindValue($identifier, (int) $this->talla_215, PDO::PARAM_INT);
                        break;
                    case '`talla_220`':
                        $stmt->bindValue($identifier, (int) $this->talla_220, PDO::PARAM_INT);
                        break;
                    case '`talla_225`':
                        $stmt->bindValue($identifier, (int) $this->talla_225, PDO::PARAM_INT);
                        break;
                    case '`talla_230`':
                        $stmt->bindValue($identifier, (int) $this->talla_230, PDO::PARAM_INT);
                        break;
                    case '`talla_235`':
                        $stmt->bindValue($identifier, (int) $this->talla_235, PDO::PARAM_INT);
                        break;
                    case '`talla_240`':
                        $stmt->bindValue($identifier, (int) $this->talla_240, PDO::PARAM_INT);
                        break;
                    case '`talla_245`':
                        $stmt->bindValue($identifier, (int) $this->talla_245, PDO::PARAM_INT);
                        break;
                    case '`talla_250`':
                        $stmt->bindValue($identifier, (int) $this->talla_250, PDO::PARAM_INT);
                        break;
                    case '`talla_255`':
                        $stmt->bindValue($identifier, (int) $this->talla_255, PDO::PARAM_INT);
                        break;
                    case '`talla_260`':
                        $stmt->bindValue($identifier, (int) $this->talla_260, PDO::PARAM_INT);
                        break;
                    case '`talla_265`':
                        $stmt->bindValue($identifier, (int) $this->talla_265, PDO::PARAM_INT);
                        break;
                    case '`talla_270`':
                        $stmt->bindValue($identifier, (int) $this->talla_270, PDO::PARAM_INT);
                        break;
                    case '`talla_275`':
                        $stmt->bindValue($identifier, (int) $this->talla_275, PDO::PARAM_INT);
                        break;
                    case '`talla_280`':
                        $stmt->bindValue($identifier, (int) $this->talla_280, PDO::PARAM_INT);
                        break;
                    case '`talla_285`':
                        $stmt->bindValue($identifier, (int) $this->talla_285, PDO::PARAM_INT);
                        break;
                    case '`talla_290`':
                        $stmt->bindValue($identifier, (int) $this->talla_290, PDO::PARAM_INT);
                        break;
                    case '`talla_295`':
                        $stmt->bindValue($identifier, (int) $this->talla_295, PDO::PARAM_INT);
                        break;
                    case '`talla_300`':
                        $stmt->bindValue($identifier, (int) $this->talla_300, PDO::PARAM_INT);
                        break;
                    case '`talla_305`':
                        $stmt->bindValue($identifier, (int) $this->talla_305, PDO::PARAM_INT);
                        break;
                    case '`talla_310`':
                        $stmt->bindValue($identifier, (int) $this->talla_310, PDO::PARAM_INT);
                        break;
                    case '`talla_315`':
                        $stmt->bindValue($identifier, (int) $this->talla_315, PDO::PARAM_INT);
                        break;
                    case '`talla_320`':
                        $stmt->bindValue($identifier, (int) $this->talla_320, PDO::PARAM_INT);
                        break;
                    case '`talla_325`':
                        $stmt->bindValue($identifier, (int) $this->talla_325, PDO::PARAM_INT);
                        break;
                    case '`talla_330`':
                        $stmt->bindValue($identifier, (int) $this->talla_330, PDO::PARAM_INT);
                        break;
                    case '`talla_335`':
                        $stmt->bindValue($identifier, (int) $this->talla_335, PDO::PARAM_INT);
                        break;
                    case '`talla_340`':
                        $stmt->bindValue($identifier, (int) $this->talla_340, PDO::PARAM_INT);
                        break;
                    case '`talla_345`':
                        $stmt->bindValue($identifier, (int) $this->talla_345, PDO::PARAM_INT);
                        break;
                    case '`talla_350`':
                        $stmt->bindValue($identifier, (int) $this->talla_350, PDO::PARAM_INT);
                        break;
                    case '`tallajerango`':
                        $stmt->bindValue($identifier, $this->tallajerango, PDO::PARAM_STR);
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
        $this->setIdtallaje($pk);

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


            if (($retval = TallajePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = TallajePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdtallaje();
                break;
            case 1:
                return $this->getTallajeNombre();
                break;
            case 2:
                return $this->getTalla70();
                break;
            case 3:
                return $this->getTalla75();
                break;
            case 4:
                return $this->getTalla80();
                break;
            case 5:
                return $this->getTalla85();
                break;
            case 6:
                return $this->getTalla90();
                break;
            case 7:
                return $this->getTalla95();
                break;
            case 8:
                return $this->getTalla100();
                break;
            case 9:
                return $this->getTalla105();
                break;
            case 10:
                return $this->getTalla110();
                break;
            case 11:
                return $this->getTalla115();
                break;
            case 12:
                return $this->getTalla120();
                break;
            case 13:
                return $this->getTalla125();
                break;
            case 14:
                return $this->getTalla130();
                break;
            case 15:
                return $this->getTalla135();
                break;
            case 16:
                return $this->getTalla140();
                break;
            case 17:
                return $this->getTalla145();
                break;
            case 18:
                return $this->getTalla150();
                break;
            case 19:
                return $this->getTalla155();
                break;
            case 20:
                return $this->getTalla160();
                break;
            case 21:
                return $this->getTalla165();
                break;
            case 22:
                return $this->getTalla170();
                break;
            case 23:
                return $this->getTalla175();
                break;
            case 24:
                return $this->getTalla180();
                break;
            case 25:
                return $this->getTalla185();
                break;
            case 26:
                return $this->getTalla190();
                break;
            case 27:
                return $this->getTalla195();
                break;
            case 28:
                return $this->getTalla200();
                break;
            case 29:
                return $this->getTalla205();
                break;
            case 30:
                return $this->getTalla210();
                break;
            case 31:
                return $this->getTalla215();
                break;
            case 32:
                return $this->getTalla220();
                break;
            case 33:
                return $this->getTalla225();
                break;
            case 34:
                return $this->getTalla230();
                break;
            case 35:
                return $this->getTalla235();
                break;
            case 36:
                return $this->getTalla240();
                break;
            case 37:
                return $this->getTalla245();
                break;
            case 38:
                return $this->getTalla250();
                break;
            case 39:
                return $this->getTalla255();
                break;
            case 40:
                return $this->getTalla260();
                break;
            case 41:
                return $this->getTalla265();
                break;
            case 42:
                return $this->getTalla270();
                break;
            case 43:
                return $this->getTalla275();
                break;
            case 44:
                return $this->getTalla280();
                break;
            case 45:
                return $this->getTalla285();
                break;
            case 46:
                return $this->getTalla290();
                break;
            case 47:
                return $this->getTalla295();
                break;
            case 48:
                return $this->getTalla300();
                break;
            case 49:
                return $this->getTalla305();
                break;
            case 50:
                return $this->getTalla310();
                break;
            case 51:
                return $this->getTalla315();
                break;
            case 52:
                return $this->getTalla320();
                break;
            case 53:
                return $this->getTalla325();
                break;
            case 54:
                return $this->getTalla330();
                break;
            case 55:
                return $this->getTalla335();
                break;
            case 56:
                return $this->getTalla340();
                break;
            case 57:
                return $this->getTalla345();
                break;
            case 58:
                return $this->getTalla350();
                break;
            case 59:
                return $this->getTallajerango();
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
        if (isset($alreadyDumpedObjects['Tallaje'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Tallaje'][$this->getPrimaryKey()] = true;
        $keys = TallajePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdtallaje(),
            $keys[1] => $this->getTallajeNombre(),
            $keys[2] => $this->getTalla70(),
            $keys[3] => $this->getTalla75(),
            $keys[4] => $this->getTalla80(),
            $keys[5] => $this->getTalla85(),
            $keys[6] => $this->getTalla90(),
            $keys[7] => $this->getTalla95(),
            $keys[8] => $this->getTalla100(),
            $keys[9] => $this->getTalla105(),
            $keys[10] => $this->getTalla110(),
            $keys[11] => $this->getTalla115(),
            $keys[12] => $this->getTalla120(),
            $keys[13] => $this->getTalla125(),
            $keys[14] => $this->getTalla130(),
            $keys[15] => $this->getTalla135(),
            $keys[16] => $this->getTalla140(),
            $keys[17] => $this->getTalla145(),
            $keys[18] => $this->getTalla150(),
            $keys[19] => $this->getTalla155(),
            $keys[20] => $this->getTalla160(),
            $keys[21] => $this->getTalla165(),
            $keys[22] => $this->getTalla170(),
            $keys[23] => $this->getTalla175(),
            $keys[24] => $this->getTalla180(),
            $keys[25] => $this->getTalla185(),
            $keys[26] => $this->getTalla190(),
            $keys[27] => $this->getTalla195(),
            $keys[28] => $this->getTalla200(),
            $keys[29] => $this->getTalla205(),
            $keys[30] => $this->getTalla210(),
            $keys[31] => $this->getTalla215(),
            $keys[32] => $this->getTalla220(),
            $keys[33] => $this->getTalla225(),
            $keys[34] => $this->getTalla230(),
            $keys[35] => $this->getTalla235(),
            $keys[36] => $this->getTalla240(),
            $keys[37] => $this->getTalla245(),
            $keys[38] => $this->getTalla250(),
            $keys[39] => $this->getTalla255(),
            $keys[40] => $this->getTalla260(),
            $keys[41] => $this->getTalla265(),
            $keys[42] => $this->getTalla270(),
            $keys[43] => $this->getTalla275(),
            $keys[44] => $this->getTalla280(),
            $keys[45] => $this->getTalla285(),
            $keys[46] => $this->getTalla290(),
            $keys[47] => $this->getTalla295(),
            $keys[48] => $this->getTalla300(),
            $keys[49] => $this->getTalla305(),
            $keys[50] => $this->getTalla310(),
            $keys[51] => $this->getTalla315(),
            $keys[52] => $this->getTalla320(),
            $keys[53] => $this->getTalla325(),
            $keys[54] => $this->getTalla330(),
            $keys[55] => $this->getTalla335(),
            $keys[56] => $this->getTalla340(),
            $keys[57] => $this->getTalla345(),
            $keys[58] => $this->getTalla350(),
            $keys[59] => $this->getTallajerango(),
        );
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collMarcatallajes) {
                $result['Marcatallajes'] = $this->collMarcatallajes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collProductos) {
                $result['Productos'] = $this->collProductos->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = TallajePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdtallaje($value);
                break;
            case 1:
                $this->setTallajeNombre($value);
                break;
            case 2:
                $this->setTalla70($value);
                break;
            case 3:
                $this->setTalla75($value);
                break;
            case 4:
                $this->setTalla80($value);
                break;
            case 5:
                $this->setTalla85($value);
                break;
            case 6:
                $this->setTalla90($value);
                break;
            case 7:
                $this->setTalla95($value);
                break;
            case 8:
                $this->setTalla100($value);
                break;
            case 9:
                $this->setTalla105($value);
                break;
            case 10:
                $this->setTalla110($value);
                break;
            case 11:
                $this->setTalla115($value);
                break;
            case 12:
                $this->setTalla120($value);
                break;
            case 13:
                $this->setTalla125($value);
                break;
            case 14:
                $this->setTalla130($value);
                break;
            case 15:
                $this->setTalla135($value);
                break;
            case 16:
                $this->setTalla140($value);
                break;
            case 17:
                $this->setTalla145($value);
                break;
            case 18:
                $this->setTalla150($value);
                break;
            case 19:
                $this->setTalla155($value);
                break;
            case 20:
                $this->setTalla160($value);
                break;
            case 21:
                $this->setTalla165($value);
                break;
            case 22:
                $this->setTalla170($value);
                break;
            case 23:
                $this->setTalla175($value);
                break;
            case 24:
                $this->setTalla180($value);
                break;
            case 25:
                $this->setTalla185($value);
                break;
            case 26:
                $this->setTalla190($value);
                break;
            case 27:
                $this->setTalla195($value);
                break;
            case 28:
                $this->setTalla200($value);
                break;
            case 29:
                $this->setTalla205($value);
                break;
            case 30:
                $this->setTalla210($value);
                break;
            case 31:
                $this->setTalla215($value);
                break;
            case 32:
                $this->setTalla220($value);
                break;
            case 33:
                $this->setTalla225($value);
                break;
            case 34:
                $this->setTalla230($value);
                break;
            case 35:
                $this->setTalla235($value);
                break;
            case 36:
                $this->setTalla240($value);
                break;
            case 37:
                $this->setTalla245($value);
                break;
            case 38:
                $this->setTalla250($value);
                break;
            case 39:
                $this->setTalla255($value);
                break;
            case 40:
                $this->setTalla260($value);
                break;
            case 41:
                $this->setTalla265($value);
                break;
            case 42:
                $this->setTalla270($value);
                break;
            case 43:
                $this->setTalla275($value);
                break;
            case 44:
                $this->setTalla280($value);
                break;
            case 45:
                $this->setTalla285($value);
                break;
            case 46:
                $this->setTalla290($value);
                break;
            case 47:
                $this->setTalla295($value);
                break;
            case 48:
                $this->setTalla300($value);
                break;
            case 49:
                $this->setTalla305($value);
                break;
            case 50:
                $this->setTalla310($value);
                break;
            case 51:
                $this->setTalla315($value);
                break;
            case 52:
                $this->setTalla320($value);
                break;
            case 53:
                $this->setTalla325($value);
                break;
            case 54:
                $this->setTalla330($value);
                break;
            case 55:
                $this->setTalla335($value);
                break;
            case 56:
                $this->setTalla340($value);
                break;
            case 57:
                $this->setTalla345($value);
                break;
            case 58:
                $this->setTalla350($value);
                break;
            case 59:
                $this->setTallajerango($value);
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
        $keys = TallajePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdtallaje($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setTallajeNombre($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTalla70($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTalla75($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTalla80($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setTalla85($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setTalla90($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTalla95($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTalla100($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTalla105($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTalla110($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTalla115($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTalla120($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setTalla125($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setTalla130($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTalla135($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTalla140($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTalla145($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setTalla150($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setTalla155($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTalla160($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTalla165($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setTalla170($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTalla175($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setTalla180($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setTalla185($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setTalla190($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setTalla195($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setTalla200($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setTalla205($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setTalla210($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setTalla215($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setTalla220($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setTalla225($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setTalla230($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setTalla235($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setTalla240($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setTalla245($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setTalla250($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setTalla255($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setTalla260($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setTalla265($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setTalla270($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setTalla275($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setTalla280($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setTalla285($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setTalla290($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setTalla295($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setTalla300($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setTalla305($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setTalla310($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setTalla315($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setTalla320($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setTalla325($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setTalla330($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setTalla335($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setTalla340($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setTalla345($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setTalla350($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setTallajerango($arr[$keys[59]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(TallajePeer::DATABASE_NAME);

        if ($this->isColumnModified(TallajePeer::IDTALLAJE)) $criteria->add(TallajePeer::IDTALLAJE, $this->idtallaje);
        if ($this->isColumnModified(TallajePeer::TALLAJE_NOMBRE)) $criteria->add(TallajePeer::TALLAJE_NOMBRE, $this->tallaje_nombre);
        if ($this->isColumnModified(TallajePeer::TALLA_70)) $criteria->add(TallajePeer::TALLA_70, $this->talla_70);
        if ($this->isColumnModified(TallajePeer::TALLA_75)) $criteria->add(TallajePeer::TALLA_75, $this->talla_75);
        if ($this->isColumnModified(TallajePeer::TALLA_80)) $criteria->add(TallajePeer::TALLA_80, $this->talla_80);
        if ($this->isColumnModified(TallajePeer::TALLA_85)) $criteria->add(TallajePeer::TALLA_85, $this->talla_85);
        if ($this->isColumnModified(TallajePeer::TALLA_90)) $criteria->add(TallajePeer::TALLA_90, $this->talla_90);
        if ($this->isColumnModified(TallajePeer::TALLA_95)) $criteria->add(TallajePeer::TALLA_95, $this->talla_95);
        if ($this->isColumnModified(TallajePeer::TALLA_100)) $criteria->add(TallajePeer::TALLA_100, $this->talla_100);
        if ($this->isColumnModified(TallajePeer::TALLA_105)) $criteria->add(TallajePeer::TALLA_105, $this->talla_105);
        if ($this->isColumnModified(TallajePeer::TALLA_110)) $criteria->add(TallajePeer::TALLA_110, $this->talla_110);
        if ($this->isColumnModified(TallajePeer::TALLA_115)) $criteria->add(TallajePeer::TALLA_115, $this->talla_115);
        if ($this->isColumnModified(TallajePeer::TALLA_120)) $criteria->add(TallajePeer::TALLA_120, $this->talla_120);
        if ($this->isColumnModified(TallajePeer::TALLA_125)) $criteria->add(TallajePeer::TALLA_125, $this->talla_125);
        if ($this->isColumnModified(TallajePeer::TALLA_130)) $criteria->add(TallajePeer::TALLA_130, $this->talla_130);
        if ($this->isColumnModified(TallajePeer::TALLA_135)) $criteria->add(TallajePeer::TALLA_135, $this->talla_135);
        if ($this->isColumnModified(TallajePeer::TALLA_140)) $criteria->add(TallajePeer::TALLA_140, $this->talla_140);
        if ($this->isColumnModified(TallajePeer::TALLA_145)) $criteria->add(TallajePeer::TALLA_145, $this->talla_145);
        if ($this->isColumnModified(TallajePeer::TALLA_150)) $criteria->add(TallajePeer::TALLA_150, $this->talla_150);
        if ($this->isColumnModified(TallajePeer::TALLA_155)) $criteria->add(TallajePeer::TALLA_155, $this->talla_155);
        if ($this->isColumnModified(TallajePeer::TALLA_160)) $criteria->add(TallajePeer::TALLA_160, $this->talla_160);
        if ($this->isColumnModified(TallajePeer::TALLA_165)) $criteria->add(TallajePeer::TALLA_165, $this->talla_165);
        if ($this->isColumnModified(TallajePeer::TALLA_170)) $criteria->add(TallajePeer::TALLA_170, $this->talla_170);
        if ($this->isColumnModified(TallajePeer::TALLA_175)) $criteria->add(TallajePeer::TALLA_175, $this->talla_175);
        if ($this->isColumnModified(TallajePeer::TALLA_180)) $criteria->add(TallajePeer::TALLA_180, $this->talla_180);
        if ($this->isColumnModified(TallajePeer::TALLA_185)) $criteria->add(TallajePeer::TALLA_185, $this->talla_185);
        if ($this->isColumnModified(TallajePeer::TALLA_190)) $criteria->add(TallajePeer::TALLA_190, $this->talla_190);
        if ($this->isColumnModified(TallajePeer::TALLA_195)) $criteria->add(TallajePeer::TALLA_195, $this->talla_195);
        if ($this->isColumnModified(TallajePeer::TALLA_200)) $criteria->add(TallajePeer::TALLA_200, $this->talla_200);
        if ($this->isColumnModified(TallajePeer::TALLA_205)) $criteria->add(TallajePeer::TALLA_205, $this->talla_205);
        if ($this->isColumnModified(TallajePeer::TALLA_210)) $criteria->add(TallajePeer::TALLA_210, $this->talla_210);
        if ($this->isColumnModified(TallajePeer::TALLA_215)) $criteria->add(TallajePeer::TALLA_215, $this->talla_215);
        if ($this->isColumnModified(TallajePeer::TALLA_220)) $criteria->add(TallajePeer::TALLA_220, $this->talla_220);
        if ($this->isColumnModified(TallajePeer::TALLA_225)) $criteria->add(TallajePeer::TALLA_225, $this->talla_225);
        if ($this->isColumnModified(TallajePeer::TALLA_230)) $criteria->add(TallajePeer::TALLA_230, $this->talla_230);
        if ($this->isColumnModified(TallajePeer::TALLA_235)) $criteria->add(TallajePeer::TALLA_235, $this->talla_235);
        if ($this->isColumnModified(TallajePeer::TALLA_240)) $criteria->add(TallajePeer::TALLA_240, $this->talla_240);
        if ($this->isColumnModified(TallajePeer::TALLA_245)) $criteria->add(TallajePeer::TALLA_245, $this->talla_245);
        if ($this->isColumnModified(TallajePeer::TALLA_250)) $criteria->add(TallajePeer::TALLA_250, $this->talla_250);
        if ($this->isColumnModified(TallajePeer::TALLA_255)) $criteria->add(TallajePeer::TALLA_255, $this->talla_255);
        if ($this->isColumnModified(TallajePeer::TALLA_260)) $criteria->add(TallajePeer::TALLA_260, $this->talla_260);
        if ($this->isColumnModified(TallajePeer::TALLA_265)) $criteria->add(TallajePeer::TALLA_265, $this->talla_265);
        if ($this->isColumnModified(TallajePeer::TALLA_270)) $criteria->add(TallajePeer::TALLA_270, $this->talla_270);
        if ($this->isColumnModified(TallajePeer::TALLA_275)) $criteria->add(TallajePeer::TALLA_275, $this->talla_275);
        if ($this->isColumnModified(TallajePeer::TALLA_280)) $criteria->add(TallajePeer::TALLA_280, $this->talla_280);
        if ($this->isColumnModified(TallajePeer::TALLA_285)) $criteria->add(TallajePeer::TALLA_285, $this->talla_285);
        if ($this->isColumnModified(TallajePeer::TALLA_290)) $criteria->add(TallajePeer::TALLA_290, $this->talla_290);
        if ($this->isColumnModified(TallajePeer::TALLA_295)) $criteria->add(TallajePeer::TALLA_295, $this->talla_295);
        if ($this->isColumnModified(TallajePeer::TALLA_300)) $criteria->add(TallajePeer::TALLA_300, $this->talla_300);
        if ($this->isColumnModified(TallajePeer::TALLA_305)) $criteria->add(TallajePeer::TALLA_305, $this->talla_305);
        if ($this->isColumnModified(TallajePeer::TALLA_310)) $criteria->add(TallajePeer::TALLA_310, $this->talla_310);
        if ($this->isColumnModified(TallajePeer::TALLA_315)) $criteria->add(TallajePeer::TALLA_315, $this->talla_315);
        if ($this->isColumnModified(TallajePeer::TALLA_320)) $criteria->add(TallajePeer::TALLA_320, $this->talla_320);
        if ($this->isColumnModified(TallajePeer::TALLA_325)) $criteria->add(TallajePeer::TALLA_325, $this->talla_325);
        if ($this->isColumnModified(TallajePeer::TALLA_330)) $criteria->add(TallajePeer::TALLA_330, $this->talla_330);
        if ($this->isColumnModified(TallajePeer::TALLA_335)) $criteria->add(TallajePeer::TALLA_335, $this->talla_335);
        if ($this->isColumnModified(TallajePeer::TALLA_340)) $criteria->add(TallajePeer::TALLA_340, $this->talla_340);
        if ($this->isColumnModified(TallajePeer::TALLA_345)) $criteria->add(TallajePeer::TALLA_345, $this->talla_345);
        if ($this->isColumnModified(TallajePeer::TALLA_350)) $criteria->add(TallajePeer::TALLA_350, $this->talla_350);
        if ($this->isColumnModified(TallajePeer::TALLAJERANGO)) $criteria->add(TallajePeer::TALLAJERANGO, $this->tallajerango);

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
        $criteria = new Criteria(TallajePeer::DATABASE_NAME);
        $criteria->add(TallajePeer::IDTALLAJE, $this->idtallaje);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdtallaje();
    }

    /**
     * Generic method to set the primary key (idtallaje column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdtallaje($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdtallaje();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Tallaje (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setTallajeNombre($this->getTallajeNombre());
        $copyObj->setTalla70($this->getTalla70());
        $copyObj->setTalla75($this->getTalla75());
        $copyObj->setTalla80($this->getTalla80());
        $copyObj->setTalla85($this->getTalla85());
        $copyObj->setTalla90($this->getTalla90());
        $copyObj->setTalla95($this->getTalla95());
        $copyObj->setTalla100($this->getTalla100());
        $copyObj->setTalla105($this->getTalla105());
        $copyObj->setTalla110($this->getTalla110());
        $copyObj->setTalla115($this->getTalla115());
        $copyObj->setTalla120($this->getTalla120());
        $copyObj->setTalla125($this->getTalla125());
        $copyObj->setTalla130($this->getTalla130());
        $copyObj->setTalla135($this->getTalla135());
        $copyObj->setTalla140($this->getTalla140());
        $copyObj->setTalla145($this->getTalla145());
        $copyObj->setTalla150($this->getTalla150());
        $copyObj->setTalla155($this->getTalla155());
        $copyObj->setTalla160($this->getTalla160());
        $copyObj->setTalla165($this->getTalla165());
        $copyObj->setTalla170($this->getTalla170());
        $copyObj->setTalla175($this->getTalla175());
        $copyObj->setTalla180($this->getTalla180());
        $copyObj->setTalla185($this->getTalla185());
        $copyObj->setTalla190($this->getTalla190());
        $copyObj->setTalla195($this->getTalla195());
        $copyObj->setTalla200($this->getTalla200());
        $copyObj->setTalla205($this->getTalla205());
        $copyObj->setTalla210($this->getTalla210());
        $copyObj->setTalla215($this->getTalla215());
        $copyObj->setTalla220($this->getTalla220());
        $copyObj->setTalla225($this->getTalla225());
        $copyObj->setTalla230($this->getTalla230());
        $copyObj->setTalla235($this->getTalla235());
        $copyObj->setTalla240($this->getTalla240());
        $copyObj->setTalla245($this->getTalla245());
        $copyObj->setTalla250($this->getTalla250());
        $copyObj->setTalla255($this->getTalla255());
        $copyObj->setTalla260($this->getTalla260());
        $copyObj->setTalla265($this->getTalla265());
        $copyObj->setTalla270($this->getTalla270());
        $copyObj->setTalla275($this->getTalla275());
        $copyObj->setTalla280($this->getTalla280());
        $copyObj->setTalla285($this->getTalla285());
        $copyObj->setTalla290($this->getTalla290());
        $copyObj->setTalla295($this->getTalla295());
        $copyObj->setTalla300($this->getTalla300());
        $copyObj->setTalla305($this->getTalla305());
        $copyObj->setTalla310($this->getTalla310());
        $copyObj->setTalla315($this->getTalla315());
        $copyObj->setTalla320($this->getTalla320());
        $copyObj->setTalla325($this->getTalla325());
        $copyObj->setTalla330($this->getTalla330());
        $copyObj->setTalla335($this->getTalla335());
        $copyObj->setTalla340($this->getTalla340());
        $copyObj->setTalla345($this->getTalla345());
        $copyObj->setTalla350($this->getTalla350());
        $copyObj->setTallajerango($this->getTallajerango());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdtallaje(NULL); // this is a auto-increment column, so set to default value
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
     * @return Tallaje Clone of current object.
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
     * @return TallajePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new TallajePeer();
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
        if ('Marcatallaje' == $relationName) {
            $this->initMarcatallajes();
        }
        if ('Producto' == $relationName) {
            $this->initProductos();
        }
    }

    /**
     * Clears out the collMarcatallajes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Tallaje The current object (for fluent API support)
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
     * If this Tallaje is new, it will return
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
                    ->filterByTallaje($this)
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
     * @return Tallaje The current object (for fluent API support)
     */
    public function setMarcatallajes(PropelCollection $marcatallajes, PropelPDO $con = null)
    {
        $marcatallajesToDelete = $this->getMarcatallajes(new Criteria(), $con)->diff($marcatallajes);


        $this->marcatallajesScheduledForDeletion = $marcatallajesToDelete;

        foreach ($marcatallajesToDelete as $marcatallajeRemoved) {
            $marcatallajeRemoved->setTallaje(null);
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
                ->filterByTallaje($this)
                ->count($con);
        }

        return count($this->collMarcatallajes);
    }

    /**
     * Method called to associate a Marcatallaje object to this object
     * through the Marcatallaje foreign key attribute.
     *
     * @param    Marcatallaje $l Marcatallaje
     * @return Tallaje The current object (for fluent API support)
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
        $marcatallaje->setTallaje($this);
    }

    /**
     * @param	Marcatallaje $marcatallaje The marcatallaje object to remove.
     * @return Tallaje The current object (for fluent API support)
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
            $marcatallaje->setTallaje(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Tallaje is new, it will return
     * an empty collection; or if this Tallaje has previously
     * been saved, it will retrieve related Marcatallajes from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Tallaje.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Marcatallaje[] List of Marcatallaje objects
     */
    public function getMarcatallajesJoinMarca($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = MarcatallajeQuery::create(null, $criteria);
        $query->joinWith('Marca', $join_behavior);

        return $this->getMarcatallajes($query, $con);
    }

    /**
     * Clears out the collProductos collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Tallaje The current object (for fluent API support)
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
     * If this Tallaje is new, it will return
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
                    ->filterByTallaje($this)
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
     * @return Tallaje The current object (for fluent API support)
     */
    public function setProductos(PropelCollection $productos, PropelPDO $con = null)
    {
        $productosToDelete = $this->getProductos(new Criteria(), $con)->diff($productos);


        $this->productosScheduledForDeletion = $productosToDelete;

        foreach ($productosToDelete as $productoRemoved) {
            $productoRemoved->setTallaje(null);
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
                ->filterByTallaje($this)
                ->count($con);
        }

        return count($this->collProductos);
    }

    /**
     * Method called to associate a Producto object to this object
     * through the Producto foreign key attribute.
     *
     * @param    Producto $l Producto
     * @return Tallaje The current object (for fluent API support)
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
        $producto->setTallaje($this);
    }

    /**
     * @param	Producto $producto The producto object to remove.
     * @return Tallaje The current object (for fluent API support)
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
            $producto->setTallaje(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Tallaje is new, it will return
     * an empty collection; or if this Tallaje has previously
     * been saved, it will retrieve related Productos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Tallaje.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|Producto[] List of Producto objects
     */
    public function getProductosJoinMarca($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = ProductoQuery::create(null, $criteria);
        $query->joinWith('Marca', $join_behavior);

        return $this->getProductos($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Tallaje is new, it will return
     * an empty collection; or if this Tallaje has previously
     * been saved, it will retrieve related Productos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Tallaje.
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
     * Otherwise if this Tallaje is new, it will return
     * an empty collection; or if this Tallaje has previously
     * been saved, it will retrieve related Productos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Tallaje.
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
     * Otherwise if this Tallaje is new, it will return
     * an empty collection; or if this Tallaje has previously
     * been saved, it will retrieve related Productos from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Tallaje.
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
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->idtallaje = null;
        $this->tallaje_nombre = null;
        $this->talla_70 = null;
        $this->talla_75 = null;
        $this->talla_80 = null;
        $this->talla_85 = null;
        $this->talla_90 = null;
        $this->talla_95 = null;
        $this->talla_100 = null;
        $this->talla_105 = null;
        $this->talla_110 = null;
        $this->talla_115 = null;
        $this->talla_120 = null;
        $this->talla_125 = null;
        $this->talla_130 = null;
        $this->talla_135 = null;
        $this->talla_140 = null;
        $this->talla_145 = null;
        $this->talla_150 = null;
        $this->talla_155 = null;
        $this->talla_160 = null;
        $this->talla_165 = null;
        $this->talla_170 = null;
        $this->talla_175 = null;
        $this->talla_180 = null;
        $this->talla_185 = null;
        $this->talla_190 = null;
        $this->talla_195 = null;
        $this->talla_200 = null;
        $this->talla_205 = null;
        $this->talla_210 = null;
        $this->talla_215 = null;
        $this->talla_220 = null;
        $this->talla_225 = null;
        $this->talla_230 = null;
        $this->talla_235 = null;
        $this->talla_240 = null;
        $this->talla_245 = null;
        $this->talla_250 = null;
        $this->talla_255 = null;
        $this->talla_260 = null;
        $this->talla_265 = null;
        $this->talla_270 = null;
        $this->talla_275 = null;
        $this->talla_280 = null;
        $this->talla_285 = null;
        $this->talla_290 = null;
        $this->talla_295 = null;
        $this->talla_300 = null;
        $this->talla_305 = null;
        $this->talla_310 = null;
        $this->talla_315 = null;
        $this->talla_320 = null;
        $this->talla_325 = null;
        $this->talla_330 = null;
        $this->talla_335 = null;
        $this->talla_340 = null;
        $this->talla_345 = null;
        $this->talla_350 = null;
        $this->tallajerango = null;
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

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collMarcatallajes instanceof PropelCollection) {
            $this->collMarcatallajes->clearIterator();
        }
        $this->collMarcatallajes = null;
        if ($this->collProductos instanceof PropelCollection) {
            $this->collProductos->clearIterator();
        }
        $this->collProductos = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(TallajePeer::DEFAULT_STRING_FORMAT);
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
