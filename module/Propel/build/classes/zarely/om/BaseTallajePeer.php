<?php


/**
 * Base static class for performing query and update operations on the 'tallaje' table.
 *
 *
 *
 * @package propel.generator.zarely.om
 */
abstract class BaseTallajePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'zarely';

    /** the table name for this class */
    const TABLE_NAME = 'tallaje';

    /** the related Propel class for this table */
    const OM_CLASS = 'Tallaje';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TallajeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 60;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 60;

    /** the column name for the idtallaje field */
    const IDTALLAJE = 'tallaje.idtallaje';

    /** the column name for the tallaje_nombre field */
    const TALLAJE_NOMBRE = 'tallaje.tallaje_nombre';

    /** the column name for the talla_70 field */
    const TALLA_70 = 'tallaje.talla_70';

    /** the column name for the talla_75 field */
    const TALLA_75 = 'tallaje.talla_75';

    /** the column name for the talla_80 field */
    const TALLA_80 = 'tallaje.talla_80';

    /** the column name for the talla_85 field */
    const TALLA_85 = 'tallaje.talla_85';

    /** the column name for the talla_90 field */
    const TALLA_90 = 'tallaje.talla_90';

    /** the column name for the talla_95 field */
    const TALLA_95 = 'tallaje.talla_95';

    /** the column name for the talla_100 field */
    const TALLA_100 = 'tallaje.talla_100';

    /** the column name for the talla_105 field */
    const TALLA_105 = 'tallaje.talla_105';

    /** the column name for the talla_110 field */
    const TALLA_110 = 'tallaje.talla_110';

    /** the column name for the talla_115 field */
    const TALLA_115 = 'tallaje.talla_115';

    /** the column name for the talla_120 field */
    const TALLA_120 = 'tallaje.talla_120';

    /** the column name for the talla_125 field */
    const TALLA_125 = 'tallaje.talla_125';

    /** the column name for the talla_130 field */
    const TALLA_130 = 'tallaje.talla_130';

    /** the column name for the talla_135 field */
    const TALLA_135 = 'tallaje.talla_135';

    /** the column name for the talla_140 field */
    const TALLA_140 = 'tallaje.talla_140';

    /** the column name for the talla_145 field */
    const TALLA_145 = 'tallaje.talla_145';

    /** the column name for the talla_150 field */
    const TALLA_150 = 'tallaje.talla_150';

    /** the column name for the talla_155 field */
    const TALLA_155 = 'tallaje.talla_155';

    /** the column name for the talla_160 field */
    const TALLA_160 = 'tallaje.talla_160';

    /** the column name for the talla_165 field */
    const TALLA_165 = 'tallaje.talla_165';

    /** the column name for the talla_170 field */
    const TALLA_170 = 'tallaje.talla_170';

    /** the column name for the talla_175 field */
    const TALLA_175 = 'tallaje.talla_175';

    /** the column name for the talla_180 field */
    const TALLA_180 = 'tallaje.talla_180';

    /** the column name for the talla_185 field */
    const TALLA_185 = 'tallaje.talla_185';

    /** the column name for the talla_190 field */
    const TALLA_190 = 'tallaje.talla_190';

    /** the column name for the talla_195 field */
    const TALLA_195 = 'tallaje.talla_195';

    /** the column name for the talla_200 field */
    const TALLA_200 = 'tallaje.talla_200';

    /** the column name for the talla_205 field */
    const TALLA_205 = 'tallaje.talla_205';

    /** the column name for the talla_210 field */
    const TALLA_210 = 'tallaje.talla_210';

    /** the column name for the talla_215 field */
    const TALLA_215 = 'tallaje.talla_215';

    /** the column name for the talla_220 field */
    const TALLA_220 = 'tallaje.talla_220';

    /** the column name for the talla_225 field */
    const TALLA_225 = 'tallaje.talla_225';

    /** the column name for the talla_230 field */
    const TALLA_230 = 'tallaje.talla_230';

    /** the column name for the talla_235 field */
    const TALLA_235 = 'tallaje.talla_235';

    /** the column name for the talla_240 field */
    const TALLA_240 = 'tallaje.talla_240';

    /** the column name for the talla_245 field */
    const TALLA_245 = 'tallaje.talla_245';

    /** the column name for the talla_250 field */
    const TALLA_250 = 'tallaje.talla_250';

    /** the column name for the talla_255 field */
    const TALLA_255 = 'tallaje.talla_255';

    /** the column name for the talla_260 field */
    const TALLA_260 = 'tallaje.talla_260';

    /** the column name for the talla_265 field */
    const TALLA_265 = 'tallaje.talla_265';

    /** the column name for the talla_270 field */
    const TALLA_270 = 'tallaje.talla_270';

    /** the column name for the talla_275 field */
    const TALLA_275 = 'tallaje.talla_275';

    /** the column name for the talla_280 field */
    const TALLA_280 = 'tallaje.talla_280';

    /** the column name for the talla_285 field */
    const TALLA_285 = 'tallaje.talla_285';

    /** the column name for the talla_290 field */
    const TALLA_290 = 'tallaje.talla_290';

    /** the column name for the talla_295 field */
    const TALLA_295 = 'tallaje.talla_295';

    /** the column name for the talla_300 field */
    const TALLA_300 = 'tallaje.talla_300';

    /** the column name for the talla_305 field */
    const TALLA_305 = 'tallaje.talla_305';

    /** the column name for the talla_310 field */
    const TALLA_310 = 'tallaje.talla_310';

    /** the column name for the talla_315 field */
    const TALLA_315 = 'tallaje.talla_315';

    /** the column name for the talla_320 field */
    const TALLA_320 = 'tallaje.talla_320';

    /** the column name for the talla_325 field */
    const TALLA_325 = 'tallaje.talla_325';

    /** the column name for the talla_330 field */
    const TALLA_330 = 'tallaje.talla_330';

    /** the column name for the talla_335 field */
    const TALLA_335 = 'tallaje.talla_335';

    /** the column name for the talla_340 field */
    const TALLA_340 = 'tallaje.talla_340';

    /** the column name for the talla_345 field */
    const TALLA_345 = 'tallaje.talla_345';

    /** the column name for the talla_350 field */
    const TALLA_350 = 'tallaje.talla_350';

    /** the column name for the tallajerango field */
    const TALLAJERANGO = 'tallaje.tallajerango';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Tallaje objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Tallaje[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TallajePeer::$fieldNames[TallajePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Idtallaje', 'TallajeNombre', 'Talla70', 'Talla75', 'Talla80', 'Talla85', 'Talla90', 'Talla95', 'Talla100', 'Talla105', 'Talla110', 'Talla115', 'Talla120', 'Talla125', 'Talla130', 'Talla135', 'Talla140', 'Talla145', 'Talla150', 'Talla155', 'Talla160', 'Talla165', 'Talla170', 'Talla175', 'Talla180', 'Talla185', 'Talla190', 'Talla195', 'Talla200', 'Talla205', 'Talla210', 'Talla215', 'Talla220', 'Talla225', 'Talla230', 'Talla235', 'Talla240', 'Talla245', 'Talla250', 'Talla255', 'Talla260', 'Talla265', 'Talla270', 'Talla275', 'Talla280', 'Talla285', 'Talla290', 'Talla295', 'Talla300', 'Talla305', 'Talla310', 'Talla315', 'Talla320', 'Talla325', 'Talla330', 'Talla335', 'Talla340', 'Talla345', 'Talla350', 'Tallajerango', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idtallaje', 'tallajeNombre', 'talla70', 'talla75', 'talla80', 'talla85', 'talla90', 'talla95', 'talla100', 'talla105', 'talla110', 'talla115', 'talla120', 'talla125', 'talla130', 'talla135', 'talla140', 'talla145', 'talla150', 'talla155', 'talla160', 'talla165', 'talla170', 'talla175', 'talla180', 'talla185', 'talla190', 'talla195', 'talla200', 'talla205', 'talla210', 'talla215', 'talla220', 'talla225', 'talla230', 'talla235', 'talla240', 'talla245', 'talla250', 'talla255', 'talla260', 'talla265', 'talla270', 'talla275', 'talla280', 'talla285', 'talla290', 'talla295', 'talla300', 'talla305', 'talla310', 'talla315', 'talla320', 'talla325', 'talla330', 'talla335', 'talla340', 'talla345', 'talla350', 'tallajerango', ),
        BasePeer::TYPE_COLNAME => array (TallajePeer::IDTALLAJE, TallajePeer::TALLAJE_NOMBRE, TallajePeer::TALLA_70, TallajePeer::TALLA_75, TallajePeer::TALLA_80, TallajePeer::TALLA_85, TallajePeer::TALLA_90, TallajePeer::TALLA_95, TallajePeer::TALLA_100, TallajePeer::TALLA_105, TallajePeer::TALLA_110, TallajePeer::TALLA_115, TallajePeer::TALLA_120, TallajePeer::TALLA_125, TallajePeer::TALLA_130, TallajePeer::TALLA_135, TallajePeer::TALLA_140, TallajePeer::TALLA_145, TallajePeer::TALLA_150, TallajePeer::TALLA_155, TallajePeer::TALLA_160, TallajePeer::TALLA_165, TallajePeer::TALLA_170, TallajePeer::TALLA_175, TallajePeer::TALLA_180, TallajePeer::TALLA_185, TallajePeer::TALLA_190, TallajePeer::TALLA_195, TallajePeer::TALLA_200, TallajePeer::TALLA_205, TallajePeer::TALLA_210, TallajePeer::TALLA_215, TallajePeer::TALLA_220, TallajePeer::TALLA_225, TallajePeer::TALLA_230, TallajePeer::TALLA_235, TallajePeer::TALLA_240, TallajePeer::TALLA_245, TallajePeer::TALLA_250, TallajePeer::TALLA_255, TallajePeer::TALLA_260, TallajePeer::TALLA_265, TallajePeer::TALLA_270, TallajePeer::TALLA_275, TallajePeer::TALLA_280, TallajePeer::TALLA_285, TallajePeer::TALLA_290, TallajePeer::TALLA_295, TallajePeer::TALLA_300, TallajePeer::TALLA_305, TallajePeer::TALLA_310, TallajePeer::TALLA_315, TallajePeer::TALLA_320, TallajePeer::TALLA_325, TallajePeer::TALLA_330, TallajePeer::TALLA_335, TallajePeer::TALLA_340, TallajePeer::TALLA_345, TallajePeer::TALLA_350, TallajePeer::TALLAJERANGO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDTALLAJE', 'TALLAJE_NOMBRE', 'TALLA_70', 'TALLA_75', 'TALLA_80', 'TALLA_85', 'TALLA_90', 'TALLA_95', 'TALLA_100', 'TALLA_105', 'TALLA_110', 'TALLA_115', 'TALLA_120', 'TALLA_125', 'TALLA_130', 'TALLA_135', 'TALLA_140', 'TALLA_145', 'TALLA_150', 'TALLA_155', 'TALLA_160', 'TALLA_165', 'TALLA_170', 'TALLA_175', 'TALLA_180', 'TALLA_185', 'TALLA_190', 'TALLA_195', 'TALLA_200', 'TALLA_205', 'TALLA_210', 'TALLA_215', 'TALLA_220', 'TALLA_225', 'TALLA_230', 'TALLA_235', 'TALLA_240', 'TALLA_245', 'TALLA_250', 'TALLA_255', 'TALLA_260', 'TALLA_265', 'TALLA_270', 'TALLA_275', 'TALLA_280', 'TALLA_285', 'TALLA_290', 'TALLA_295', 'TALLA_300', 'TALLA_305', 'TALLA_310', 'TALLA_315', 'TALLA_320', 'TALLA_325', 'TALLA_330', 'TALLA_335', 'TALLA_340', 'TALLA_345', 'TALLA_350', 'TALLAJERANGO', ),
        BasePeer::TYPE_FIELDNAME => array ('idtallaje', 'tallaje_nombre', 'talla_70', 'talla_75', 'talla_80', 'talla_85', 'talla_90', 'talla_95', 'talla_100', 'talla_105', 'talla_110', 'talla_115', 'talla_120', 'talla_125', 'talla_130', 'talla_135', 'talla_140', 'talla_145', 'talla_150', 'talla_155', 'talla_160', 'talla_165', 'talla_170', 'talla_175', 'talla_180', 'talla_185', 'talla_190', 'talla_195', 'talla_200', 'talla_205', 'talla_210', 'talla_215', 'talla_220', 'talla_225', 'talla_230', 'talla_235', 'talla_240', 'talla_245', 'talla_250', 'talla_255', 'talla_260', 'talla_265', 'talla_270', 'talla_275', 'talla_280', 'talla_285', 'talla_290', 'talla_295', 'talla_300', 'talla_305', 'talla_310', 'talla_315', 'talla_320', 'talla_325', 'talla_330', 'talla_335', 'talla_340', 'talla_345', 'talla_350', 'tallajerango', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TallajePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Idtallaje' => 0, 'TallajeNombre' => 1, 'Talla70' => 2, 'Talla75' => 3, 'Talla80' => 4, 'Talla85' => 5, 'Talla90' => 6, 'Talla95' => 7, 'Talla100' => 8, 'Talla105' => 9, 'Talla110' => 10, 'Talla115' => 11, 'Talla120' => 12, 'Talla125' => 13, 'Talla130' => 14, 'Talla135' => 15, 'Talla140' => 16, 'Talla145' => 17, 'Talla150' => 18, 'Talla155' => 19, 'Talla160' => 20, 'Talla165' => 21, 'Talla170' => 22, 'Talla175' => 23, 'Talla180' => 24, 'Talla185' => 25, 'Talla190' => 26, 'Talla195' => 27, 'Talla200' => 28, 'Talla205' => 29, 'Talla210' => 30, 'Talla215' => 31, 'Talla220' => 32, 'Talla225' => 33, 'Talla230' => 34, 'Talla235' => 35, 'Talla240' => 36, 'Talla245' => 37, 'Talla250' => 38, 'Talla255' => 39, 'Talla260' => 40, 'Talla265' => 41, 'Talla270' => 42, 'Talla275' => 43, 'Talla280' => 44, 'Talla285' => 45, 'Talla290' => 46, 'Talla295' => 47, 'Talla300' => 48, 'Talla305' => 49, 'Talla310' => 50, 'Talla315' => 51, 'Talla320' => 52, 'Talla325' => 53, 'Talla330' => 54, 'Talla335' => 55, 'Talla340' => 56, 'Talla345' => 57, 'Talla350' => 58, 'Tallajerango' => 59, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idtallaje' => 0, 'tallajeNombre' => 1, 'talla70' => 2, 'talla75' => 3, 'talla80' => 4, 'talla85' => 5, 'talla90' => 6, 'talla95' => 7, 'talla100' => 8, 'talla105' => 9, 'talla110' => 10, 'talla115' => 11, 'talla120' => 12, 'talla125' => 13, 'talla130' => 14, 'talla135' => 15, 'talla140' => 16, 'talla145' => 17, 'talla150' => 18, 'talla155' => 19, 'talla160' => 20, 'talla165' => 21, 'talla170' => 22, 'talla175' => 23, 'talla180' => 24, 'talla185' => 25, 'talla190' => 26, 'talla195' => 27, 'talla200' => 28, 'talla205' => 29, 'talla210' => 30, 'talla215' => 31, 'talla220' => 32, 'talla225' => 33, 'talla230' => 34, 'talla235' => 35, 'talla240' => 36, 'talla245' => 37, 'talla250' => 38, 'talla255' => 39, 'talla260' => 40, 'talla265' => 41, 'talla270' => 42, 'talla275' => 43, 'talla280' => 44, 'talla285' => 45, 'talla290' => 46, 'talla295' => 47, 'talla300' => 48, 'talla305' => 49, 'talla310' => 50, 'talla315' => 51, 'talla320' => 52, 'talla325' => 53, 'talla330' => 54, 'talla335' => 55, 'talla340' => 56, 'talla345' => 57, 'talla350' => 58, 'tallajerango' => 59, ),
        BasePeer::TYPE_COLNAME => array (TallajePeer::IDTALLAJE => 0, TallajePeer::TALLAJE_NOMBRE => 1, TallajePeer::TALLA_70 => 2, TallajePeer::TALLA_75 => 3, TallajePeer::TALLA_80 => 4, TallajePeer::TALLA_85 => 5, TallajePeer::TALLA_90 => 6, TallajePeer::TALLA_95 => 7, TallajePeer::TALLA_100 => 8, TallajePeer::TALLA_105 => 9, TallajePeer::TALLA_110 => 10, TallajePeer::TALLA_115 => 11, TallajePeer::TALLA_120 => 12, TallajePeer::TALLA_125 => 13, TallajePeer::TALLA_130 => 14, TallajePeer::TALLA_135 => 15, TallajePeer::TALLA_140 => 16, TallajePeer::TALLA_145 => 17, TallajePeer::TALLA_150 => 18, TallajePeer::TALLA_155 => 19, TallajePeer::TALLA_160 => 20, TallajePeer::TALLA_165 => 21, TallajePeer::TALLA_170 => 22, TallajePeer::TALLA_175 => 23, TallajePeer::TALLA_180 => 24, TallajePeer::TALLA_185 => 25, TallajePeer::TALLA_190 => 26, TallajePeer::TALLA_195 => 27, TallajePeer::TALLA_200 => 28, TallajePeer::TALLA_205 => 29, TallajePeer::TALLA_210 => 30, TallajePeer::TALLA_215 => 31, TallajePeer::TALLA_220 => 32, TallajePeer::TALLA_225 => 33, TallajePeer::TALLA_230 => 34, TallajePeer::TALLA_235 => 35, TallajePeer::TALLA_240 => 36, TallajePeer::TALLA_245 => 37, TallajePeer::TALLA_250 => 38, TallajePeer::TALLA_255 => 39, TallajePeer::TALLA_260 => 40, TallajePeer::TALLA_265 => 41, TallajePeer::TALLA_270 => 42, TallajePeer::TALLA_275 => 43, TallajePeer::TALLA_280 => 44, TallajePeer::TALLA_285 => 45, TallajePeer::TALLA_290 => 46, TallajePeer::TALLA_295 => 47, TallajePeer::TALLA_300 => 48, TallajePeer::TALLA_305 => 49, TallajePeer::TALLA_310 => 50, TallajePeer::TALLA_315 => 51, TallajePeer::TALLA_320 => 52, TallajePeer::TALLA_325 => 53, TallajePeer::TALLA_330 => 54, TallajePeer::TALLA_335 => 55, TallajePeer::TALLA_340 => 56, TallajePeer::TALLA_345 => 57, TallajePeer::TALLA_350 => 58, TallajePeer::TALLAJERANGO => 59, ),
        BasePeer::TYPE_RAW_COLNAME => array ('IDTALLAJE' => 0, 'TALLAJE_NOMBRE' => 1, 'TALLA_70' => 2, 'TALLA_75' => 3, 'TALLA_80' => 4, 'TALLA_85' => 5, 'TALLA_90' => 6, 'TALLA_95' => 7, 'TALLA_100' => 8, 'TALLA_105' => 9, 'TALLA_110' => 10, 'TALLA_115' => 11, 'TALLA_120' => 12, 'TALLA_125' => 13, 'TALLA_130' => 14, 'TALLA_135' => 15, 'TALLA_140' => 16, 'TALLA_145' => 17, 'TALLA_150' => 18, 'TALLA_155' => 19, 'TALLA_160' => 20, 'TALLA_165' => 21, 'TALLA_170' => 22, 'TALLA_175' => 23, 'TALLA_180' => 24, 'TALLA_185' => 25, 'TALLA_190' => 26, 'TALLA_195' => 27, 'TALLA_200' => 28, 'TALLA_205' => 29, 'TALLA_210' => 30, 'TALLA_215' => 31, 'TALLA_220' => 32, 'TALLA_225' => 33, 'TALLA_230' => 34, 'TALLA_235' => 35, 'TALLA_240' => 36, 'TALLA_245' => 37, 'TALLA_250' => 38, 'TALLA_255' => 39, 'TALLA_260' => 40, 'TALLA_265' => 41, 'TALLA_270' => 42, 'TALLA_275' => 43, 'TALLA_280' => 44, 'TALLA_285' => 45, 'TALLA_290' => 46, 'TALLA_295' => 47, 'TALLA_300' => 48, 'TALLA_305' => 49, 'TALLA_310' => 50, 'TALLA_315' => 51, 'TALLA_320' => 52, 'TALLA_325' => 53, 'TALLA_330' => 54, 'TALLA_335' => 55, 'TALLA_340' => 56, 'TALLA_345' => 57, 'TALLA_350' => 58, 'TALLAJERANGO' => 59, ),
        BasePeer::TYPE_FIELDNAME => array ('idtallaje' => 0, 'tallaje_nombre' => 1, 'talla_70' => 2, 'talla_75' => 3, 'talla_80' => 4, 'talla_85' => 5, 'talla_90' => 6, 'talla_95' => 7, 'talla_100' => 8, 'talla_105' => 9, 'talla_110' => 10, 'talla_115' => 11, 'talla_120' => 12, 'talla_125' => 13, 'talla_130' => 14, 'talla_135' => 15, 'talla_140' => 16, 'talla_145' => 17, 'talla_150' => 18, 'talla_155' => 19, 'talla_160' => 20, 'talla_165' => 21, 'talla_170' => 22, 'talla_175' => 23, 'talla_180' => 24, 'talla_185' => 25, 'talla_190' => 26, 'talla_195' => 27, 'talla_200' => 28, 'talla_205' => 29, 'talla_210' => 30, 'talla_215' => 31, 'talla_220' => 32, 'talla_225' => 33, 'talla_230' => 34, 'talla_235' => 35, 'talla_240' => 36, 'talla_245' => 37, 'talla_250' => 38, 'talla_255' => 39, 'talla_260' => 40, 'talla_265' => 41, 'talla_270' => 42, 'talla_275' => 43, 'talla_280' => 44, 'talla_285' => 45, 'talla_290' => 46, 'talla_295' => 47, 'talla_300' => 48, 'talla_305' => 49, 'talla_310' => 50, 'talla_315' => 51, 'talla_320' => 52, 'talla_325' => 53, 'talla_330' => 54, 'talla_335' => 55, 'talla_340' => 56, 'talla_345' => 57, 'talla_350' => 58, 'tallajerango' => 59, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = TallajePeer::getFieldNames($toType);
        $key = isset(TallajePeer::$fieldKeys[$fromType][$name]) ? TallajePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TallajePeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, TallajePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TallajePeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. TallajePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TallajePeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(TallajePeer::IDTALLAJE);
            $criteria->addSelectColumn(TallajePeer::TALLAJE_NOMBRE);
            $criteria->addSelectColumn(TallajePeer::TALLA_70);
            $criteria->addSelectColumn(TallajePeer::TALLA_75);
            $criteria->addSelectColumn(TallajePeer::TALLA_80);
            $criteria->addSelectColumn(TallajePeer::TALLA_85);
            $criteria->addSelectColumn(TallajePeer::TALLA_90);
            $criteria->addSelectColumn(TallajePeer::TALLA_95);
            $criteria->addSelectColumn(TallajePeer::TALLA_100);
            $criteria->addSelectColumn(TallajePeer::TALLA_105);
            $criteria->addSelectColumn(TallajePeer::TALLA_110);
            $criteria->addSelectColumn(TallajePeer::TALLA_115);
            $criteria->addSelectColumn(TallajePeer::TALLA_120);
            $criteria->addSelectColumn(TallajePeer::TALLA_125);
            $criteria->addSelectColumn(TallajePeer::TALLA_130);
            $criteria->addSelectColumn(TallajePeer::TALLA_135);
            $criteria->addSelectColumn(TallajePeer::TALLA_140);
            $criteria->addSelectColumn(TallajePeer::TALLA_145);
            $criteria->addSelectColumn(TallajePeer::TALLA_150);
            $criteria->addSelectColumn(TallajePeer::TALLA_155);
            $criteria->addSelectColumn(TallajePeer::TALLA_160);
            $criteria->addSelectColumn(TallajePeer::TALLA_165);
            $criteria->addSelectColumn(TallajePeer::TALLA_170);
            $criteria->addSelectColumn(TallajePeer::TALLA_175);
            $criteria->addSelectColumn(TallajePeer::TALLA_180);
            $criteria->addSelectColumn(TallajePeer::TALLA_185);
            $criteria->addSelectColumn(TallajePeer::TALLA_190);
            $criteria->addSelectColumn(TallajePeer::TALLA_195);
            $criteria->addSelectColumn(TallajePeer::TALLA_200);
            $criteria->addSelectColumn(TallajePeer::TALLA_205);
            $criteria->addSelectColumn(TallajePeer::TALLA_210);
            $criteria->addSelectColumn(TallajePeer::TALLA_215);
            $criteria->addSelectColumn(TallajePeer::TALLA_220);
            $criteria->addSelectColumn(TallajePeer::TALLA_225);
            $criteria->addSelectColumn(TallajePeer::TALLA_230);
            $criteria->addSelectColumn(TallajePeer::TALLA_235);
            $criteria->addSelectColumn(TallajePeer::TALLA_240);
            $criteria->addSelectColumn(TallajePeer::TALLA_245);
            $criteria->addSelectColumn(TallajePeer::TALLA_250);
            $criteria->addSelectColumn(TallajePeer::TALLA_255);
            $criteria->addSelectColumn(TallajePeer::TALLA_260);
            $criteria->addSelectColumn(TallajePeer::TALLA_265);
            $criteria->addSelectColumn(TallajePeer::TALLA_270);
            $criteria->addSelectColumn(TallajePeer::TALLA_275);
            $criteria->addSelectColumn(TallajePeer::TALLA_280);
            $criteria->addSelectColumn(TallajePeer::TALLA_285);
            $criteria->addSelectColumn(TallajePeer::TALLA_290);
            $criteria->addSelectColumn(TallajePeer::TALLA_295);
            $criteria->addSelectColumn(TallajePeer::TALLA_300);
            $criteria->addSelectColumn(TallajePeer::TALLA_305);
            $criteria->addSelectColumn(TallajePeer::TALLA_310);
            $criteria->addSelectColumn(TallajePeer::TALLA_315);
            $criteria->addSelectColumn(TallajePeer::TALLA_320);
            $criteria->addSelectColumn(TallajePeer::TALLA_325);
            $criteria->addSelectColumn(TallajePeer::TALLA_330);
            $criteria->addSelectColumn(TallajePeer::TALLA_335);
            $criteria->addSelectColumn(TallajePeer::TALLA_340);
            $criteria->addSelectColumn(TallajePeer::TALLA_345);
            $criteria->addSelectColumn(TallajePeer::TALLA_350);
            $criteria->addSelectColumn(TallajePeer::TALLAJERANGO);
        } else {
            $criteria->addSelectColumn($alias . '.idtallaje');
            $criteria->addSelectColumn($alias . '.tallaje_nombre');
            $criteria->addSelectColumn($alias . '.talla_70');
            $criteria->addSelectColumn($alias . '.talla_75');
            $criteria->addSelectColumn($alias . '.talla_80');
            $criteria->addSelectColumn($alias . '.talla_85');
            $criteria->addSelectColumn($alias . '.talla_90');
            $criteria->addSelectColumn($alias . '.talla_95');
            $criteria->addSelectColumn($alias . '.talla_100');
            $criteria->addSelectColumn($alias . '.talla_105');
            $criteria->addSelectColumn($alias . '.talla_110');
            $criteria->addSelectColumn($alias . '.talla_115');
            $criteria->addSelectColumn($alias . '.talla_120');
            $criteria->addSelectColumn($alias . '.talla_125');
            $criteria->addSelectColumn($alias . '.talla_130');
            $criteria->addSelectColumn($alias . '.talla_135');
            $criteria->addSelectColumn($alias . '.talla_140');
            $criteria->addSelectColumn($alias . '.talla_145');
            $criteria->addSelectColumn($alias . '.talla_150');
            $criteria->addSelectColumn($alias . '.talla_155');
            $criteria->addSelectColumn($alias . '.talla_160');
            $criteria->addSelectColumn($alias . '.talla_165');
            $criteria->addSelectColumn($alias . '.talla_170');
            $criteria->addSelectColumn($alias . '.talla_175');
            $criteria->addSelectColumn($alias . '.talla_180');
            $criteria->addSelectColumn($alias . '.talla_185');
            $criteria->addSelectColumn($alias . '.talla_190');
            $criteria->addSelectColumn($alias . '.talla_195');
            $criteria->addSelectColumn($alias . '.talla_200');
            $criteria->addSelectColumn($alias . '.talla_205');
            $criteria->addSelectColumn($alias . '.talla_210');
            $criteria->addSelectColumn($alias . '.talla_215');
            $criteria->addSelectColumn($alias . '.talla_220');
            $criteria->addSelectColumn($alias . '.talla_225');
            $criteria->addSelectColumn($alias . '.talla_230');
            $criteria->addSelectColumn($alias . '.talla_235');
            $criteria->addSelectColumn($alias . '.talla_240');
            $criteria->addSelectColumn($alias . '.talla_245');
            $criteria->addSelectColumn($alias . '.talla_250');
            $criteria->addSelectColumn($alias . '.talla_255');
            $criteria->addSelectColumn($alias . '.talla_260');
            $criteria->addSelectColumn($alias . '.talla_265');
            $criteria->addSelectColumn($alias . '.talla_270');
            $criteria->addSelectColumn($alias . '.talla_275');
            $criteria->addSelectColumn($alias . '.talla_280');
            $criteria->addSelectColumn($alias . '.talla_285');
            $criteria->addSelectColumn($alias . '.talla_290');
            $criteria->addSelectColumn($alias . '.talla_295');
            $criteria->addSelectColumn($alias . '.talla_300');
            $criteria->addSelectColumn($alias . '.talla_305');
            $criteria->addSelectColumn($alias . '.talla_310');
            $criteria->addSelectColumn($alias . '.talla_315');
            $criteria->addSelectColumn($alias . '.talla_320');
            $criteria->addSelectColumn($alias . '.talla_325');
            $criteria->addSelectColumn($alias . '.talla_330');
            $criteria->addSelectColumn($alias . '.talla_335');
            $criteria->addSelectColumn($alias . '.talla_340');
            $criteria->addSelectColumn($alias . '.talla_345');
            $criteria->addSelectColumn($alias . '.talla_350');
            $criteria->addSelectColumn($alias . '.tallajerango');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TallajePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TallajePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TallajePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TallajePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return Tallaje
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TallajePeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return TallajePeer::populateObjects(TallajePeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TallajePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TallajePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TallajePeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param Tallaje $obj A Tallaje object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdtallaje();
            } // if key === null
            TallajePeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Tallaje object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Tallaje) {
                $key = (string) $value->getIdtallaje();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Tallaje object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TallajePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return Tallaje Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TallajePeer::$instances[$key])) {
                return TallajePeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (TallajePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TallajePeer::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to tallaje
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in MarcatallajePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        MarcatallajePeer::clearInstancePool();
        // Invalidate objects in ProductotallajePeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        ProductotallajePeer::clearInstancePool();
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = TallajePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TallajePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TallajePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TallajePeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (Tallaje object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TallajePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TallajePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TallajePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TallajePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TallajePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(TallajePeer::DATABASE_NAME)->getTable(TallajePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTallajePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTallajePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new \TallajeTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return TallajePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Tallaje or Criteria object.
     *
     * @param      mixed $values Criteria or Tallaje object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TallajePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Tallaje object
        }

        if ($criteria->containsKey(TallajePeer::IDTALLAJE) && $criteria->keyContainsValue(TallajePeer::IDTALLAJE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TallajePeer::IDTALLAJE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TallajePeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Tallaje or Criteria object.
     *
     * @param      mixed $values Criteria or Tallaje object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TallajePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TallajePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TallajePeer::IDTALLAJE);
            $value = $criteria->remove(TallajePeer::IDTALLAJE);
            if ($value) {
                $selectCriteria->add(TallajePeer::IDTALLAJE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TallajePeer::TABLE_NAME);
            }

        } else { // $values is Tallaje object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TallajePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the tallaje table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TallajePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += TallajePeer::doOnDeleteCascade(new Criteria(TallajePeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(TallajePeer::TABLE_NAME, $con, TallajePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TallajePeer::clearInstancePool();
            TallajePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Tallaje or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Tallaje object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(TallajePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Tallaje) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TallajePeer::DATABASE_NAME);
            $criteria->add(TallajePeer::IDTALLAJE, (array) $values, Criteria::IN);
        }

        // Set the correct dbName
        $criteria->setDbName(TallajePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += TallajePeer::doOnDeleteCascade($c, $con);

            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                TallajePeer::clearInstancePool();
            } elseif ($values instanceof Tallaje) { // it's a model object
                TallajePeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    TallajePeer::removeInstanceFromPool($singleval);
                }
            }

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TallajePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = TallajePeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related Marcatallaje objects
            $criteria = new Criteria(MarcatallajePeer::DATABASE_NAME);

            $criteria->add(MarcatallajePeer::IDTALLAJE, $obj->getIdtallaje());
            $affectedRows += MarcatallajePeer::doDelete($criteria, $con);

            // delete related Productotallaje objects
            $criteria = new Criteria(ProductotallajePeer::DATABASE_NAME);

            $criteria->add(ProductotallajePeer::IDTALLAJE, $obj->getIdtallaje());
            $affectedRows += ProductotallajePeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given Tallaje object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param Tallaje $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TallajePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TallajePeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(TallajePeer::DATABASE_NAME, TallajePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Tallaje
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TallajePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TallajePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TallajePeer::DATABASE_NAME);
        $criteria->add(TallajePeer::IDTALLAJE, $pk);

        $v = TallajePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Tallaje[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TallajePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TallajePeer::DATABASE_NAME);
            $criteria->add(TallajePeer::IDTALLAJE, $pks, Criteria::IN);
            $objs = TallajePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTallajePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTallajePeer::buildTableMap();

