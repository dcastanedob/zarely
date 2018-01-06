<?php


/**
 * Base class that represents a query for the 'configuracion' table.
 *
 *
 *
 * @method ConfiguracionQuery orderByIdconfiguracion($order = Criteria::ASC) Order by the idconfiguracion column
 * @method ConfiguracionQuery orderByConfiguracionDescuentosat($order = Criteria::ASC) Order by the configuracion_descuentosat column
 *
 * @method ConfiguracionQuery groupByIdconfiguracion() Group by the idconfiguracion column
 * @method ConfiguracionQuery groupByConfiguracionDescuentosat() Group by the configuracion_descuentosat column
 *
 * @method ConfiguracionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConfiguracionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConfiguracionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Configuracion findOne(PropelPDO $con = null) Return the first Configuracion matching the query
 * @method Configuracion findOneOrCreate(PropelPDO $con = null) Return the first Configuracion matching the query, or a new Configuracion object populated from the query conditions when no match is found
 *
 * @method Configuracion findOneByConfiguracionDescuentosat(double $configuracion_descuentosat) Return the first Configuracion filtered by the configuracion_descuentosat column
 *
 * @method array findByIdconfiguracion(int $idconfiguracion) Return Configuracion objects filtered by the idconfiguracion column
 * @method array findByConfiguracionDescuentosat(double $configuracion_descuentosat) Return Configuracion objects filtered by the configuracion_descuentosat column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseConfiguracionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConfiguracionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = null, $modelName = null, $modelAlias = null)
    {
        if (null === $dbName) {
            $dbName = 'zarely';
        }
        if (null === $modelName) {
            $modelName = 'Configuracion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConfiguracionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ConfiguracionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConfiguracionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConfiguracionQuery) {
            return $criteria;
        }
        $query = new ConfiguracionQuery(null, null, $modelAlias);

        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Configuracion|Configuracion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConfiguracionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConfiguracionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Configuracion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdconfiguracion($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 Configuracion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idconfiguracion`, `configuracion_descuentosat` FROM `configuracion` WHERE `idconfiguracion` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new Configuracion();
            $obj->hydrate($row);
            ConfiguracionPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return Configuracion|Configuracion[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|Configuracion[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ConfiguracionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfiguracionPeer::IDCONFIGURACION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConfiguracionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfiguracionPeer::IDCONFIGURACION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idconfiguracion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdconfiguracion(1234); // WHERE idconfiguracion = 1234
     * $query->filterByIdconfiguracion(array(12, 34)); // WHERE idconfiguracion IN (12, 34)
     * $query->filterByIdconfiguracion(array('min' => 12)); // WHERE idconfiguracion >= 12
     * $query->filterByIdconfiguracion(array('max' => 12)); // WHERE idconfiguracion <= 12
     * </code>
     *
     * @param     mixed $idconfiguracion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfiguracionQuery The current query, for fluid interface
     */
    public function filterByIdconfiguracion($idconfiguracion = null, $comparison = null)
    {
        if (is_array($idconfiguracion)) {
            $useMinMax = false;
            if (isset($idconfiguracion['min'])) {
                $this->addUsingAlias(ConfiguracionPeer::IDCONFIGURACION, $idconfiguracion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idconfiguracion['max'])) {
                $this->addUsingAlias(ConfiguracionPeer::IDCONFIGURACION, $idconfiguracion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfiguracionPeer::IDCONFIGURACION, $idconfiguracion, $comparison);
    }

    /**
     * Filter the query on the configuracion_descuentosat column
     *
     * Example usage:
     * <code>
     * $query->filterByConfiguracionDescuentosat(1234); // WHERE configuracion_descuentosat = 1234
     * $query->filterByConfiguracionDescuentosat(array(12, 34)); // WHERE configuracion_descuentosat IN (12, 34)
     * $query->filterByConfiguracionDescuentosat(array('min' => 12)); // WHERE configuracion_descuentosat >= 12
     * $query->filterByConfiguracionDescuentosat(array('max' => 12)); // WHERE configuracion_descuentosat <= 12
     * </code>
     *
     * @param     mixed $configuracionDescuentosat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfiguracionQuery The current query, for fluid interface
     */
    public function filterByConfiguracionDescuentosat($configuracionDescuentosat = null, $comparison = null)
    {
        if (is_array($configuracionDescuentosat)) {
            $useMinMax = false;
            if (isset($configuracionDescuentosat['min'])) {
                $this->addUsingAlias(ConfiguracionPeer::CONFIGURACION_DESCUENTOSAT, $configuracionDescuentosat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($configuracionDescuentosat['max'])) {
                $this->addUsingAlias(ConfiguracionPeer::CONFIGURACION_DESCUENTOSAT, $configuracionDescuentosat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ConfiguracionPeer::CONFIGURACION_DESCUENTOSAT, $configuracionDescuentosat, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Configuracion $configuracion Object to remove from the list of results
     *
     * @return ConfiguracionQuery The current query, for fluid interface
     */
    public function prune($configuracion = null)
    {
        if ($configuracion) {
            $this->addUsingAlias(ConfiguracionPeer::IDCONFIGURACION, $configuracion->getIdconfiguracion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
