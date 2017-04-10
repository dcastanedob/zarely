<?php


/**
 * Base class that represents a query for the 'cuentabancariamovimiento' table.
 *
 *
 *
 * @method CuentabancariamovimientoQuery orderByIdcuentabancariamovimiento($order = Criteria::ASC) Order by the idcuentabancariamovimiento column
 * @method CuentabancariamovimientoQuery orderByIdcuentabancaria($order = Criteria::ASC) Order by the idcuentabancaria column
 * @method CuentabancariamovimientoQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method CuentabancariamovimientoQuery orderByCuentabancariamovimientoProceso($order = Criteria::ASC) Order by the cuentabancariamovimiento_proceso column
 * @method CuentabancariamovimientoQuery orderByIdproceso($order = Criteria::ASC) Order by the idproceso column
 * @method CuentabancariamovimientoQuery orderByCuentabancariamovimientoCantidad($order = Criteria::ASC) Order by the cuentabancariamovimiento_cantidad column
 * @method CuentabancariamovimientoQuery orderByCuentabancariamovimientoComprobante($order = Criteria::ASC) Order by the cuentabancariamovimiento_comprobante column
 * @method CuentabancariamovimientoQuery orderByCuentabancariamovimientoFechamovimiento($order = Criteria::ASC) Order by the cuentabancariamovimiento_fechamovimiento column
 * @method CuentabancariamovimientoQuery orderByCuentabancariamovimientoFechacreacion($order = Criteria::ASC) Order by the cuentabancariamovimiento_fechacreacion column
 * @method CuentabancariamovimientoQuery orderByCuentabancariamovimientoBalance($order = Criteria::ASC) Order by the cuentabancariamovimiento_balance column
 *
 * @method CuentabancariamovimientoQuery groupByIdcuentabancariamovimiento() Group by the idcuentabancariamovimiento column
 * @method CuentabancariamovimientoQuery groupByIdcuentabancaria() Group by the idcuentabancaria column
 * @method CuentabancariamovimientoQuery groupByIdempleado() Group by the idempleado column
 * @method CuentabancariamovimientoQuery groupByCuentabancariamovimientoProceso() Group by the cuentabancariamovimiento_proceso column
 * @method CuentabancariamovimientoQuery groupByIdproceso() Group by the idproceso column
 * @method CuentabancariamovimientoQuery groupByCuentabancariamovimientoCantidad() Group by the cuentabancariamovimiento_cantidad column
 * @method CuentabancariamovimientoQuery groupByCuentabancariamovimientoComprobante() Group by the cuentabancariamovimiento_comprobante column
 * @method CuentabancariamovimientoQuery groupByCuentabancariamovimientoFechamovimiento() Group by the cuentabancariamovimiento_fechamovimiento column
 * @method CuentabancariamovimientoQuery groupByCuentabancariamovimientoFechacreacion() Group by the cuentabancariamovimiento_fechacreacion column
 * @method CuentabancariamovimientoQuery groupByCuentabancariamovimientoBalance() Group by the cuentabancariamovimiento_balance column
 *
 * @method CuentabancariamovimientoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CuentabancariamovimientoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CuentabancariamovimientoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CuentabancariamovimientoQuery leftJoinCuentabancaria($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cuentabancaria relation
 * @method CuentabancariamovimientoQuery rightJoinCuentabancaria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cuentabancaria relation
 * @method CuentabancariamovimientoQuery innerJoinCuentabancaria($relationAlias = null) Adds a INNER JOIN clause to the query using the Cuentabancaria relation
 *
 * @method CuentabancariamovimientoQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method CuentabancariamovimientoQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method CuentabancariamovimientoQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method Cuentabancariamovimiento findOne(PropelPDO $con = null) Return the first Cuentabancariamovimiento matching the query
 * @method Cuentabancariamovimiento findOneOrCreate(PropelPDO $con = null) Return the first Cuentabancariamovimiento matching the query, or a new Cuentabancariamovimiento object populated from the query conditions when no match is found
 *
 * @method Cuentabancariamovimiento findOneByIdcuentabancaria(int $idcuentabancaria) Return the first Cuentabancariamovimiento filtered by the idcuentabancaria column
 * @method Cuentabancariamovimiento findOneByIdempleado(int $idempleado) Return the first Cuentabancariamovimiento filtered by the idempleado column
 * @method Cuentabancariamovimiento findOneByCuentabancariamovimientoProceso(string $cuentabancariamovimiento_proceso) Return the first Cuentabancariamovimiento filtered by the cuentabancariamovimiento_proceso column
 * @method Cuentabancariamovimiento findOneByIdproceso(int $idproceso) Return the first Cuentabancariamovimiento filtered by the idproceso column
 * @method Cuentabancariamovimiento findOneByCuentabancariamovimientoCantidad(string $cuentabancariamovimiento_cantidad) Return the first Cuentabancariamovimiento filtered by the cuentabancariamovimiento_cantidad column
 * @method Cuentabancariamovimiento findOneByCuentabancariamovimientoComprobante(string $cuentabancariamovimiento_comprobante) Return the first Cuentabancariamovimiento filtered by the cuentabancariamovimiento_comprobante column
 * @method Cuentabancariamovimiento findOneByCuentabancariamovimientoFechamovimiento(string $cuentabancariamovimiento_fechamovimiento) Return the first Cuentabancariamovimiento filtered by the cuentabancariamovimiento_fechamovimiento column
 * @method Cuentabancariamovimiento findOneByCuentabancariamovimientoFechacreacion(string $cuentabancariamovimiento_fechacreacion) Return the first Cuentabancariamovimiento filtered by the cuentabancariamovimiento_fechacreacion column
 * @method Cuentabancariamovimiento findOneByCuentabancariamovimientoBalance(string $cuentabancariamovimiento_balance) Return the first Cuentabancariamovimiento filtered by the cuentabancariamovimiento_balance column
 *
 * @method array findByIdcuentabancariamovimiento(int $idcuentabancariamovimiento) Return Cuentabancariamovimiento objects filtered by the idcuentabancariamovimiento column
 * @method array findByIdcuentabancaria(int $idcuentabancaria) Return Cuentabancariamovimiento objects filtered by the idcuentabancaria column
 * @method array findByIdempleado(int $idempleado) Return Cuentabancariamovimiento objects filtered by the idempleado column
 * @method array findByCuentabancariamovimientoProceso(string $cuentabancariamovimiento_proceso) Return Cuentabancariamovimiento objects filtered by the cuentabancariamovimiento_proceso column
 * @method array findByIdproceso(int $idproceso) Return Cuentabancariamovimiento objects filtered by the idproceso column
 * @method array findByCuentabancariamovimientoCantidad(string $cuentabancariamovimiento_cantidad) Return Cuentabancariamovimiento objects filtered by the cuentabancariamovimiento_cantidad column
 * @method array findByCuentabancariamovimientoComprobante(string $cuentabancariamovimiento_comprobante) Return Cuentabancariamovimiento objects filtered by the cuentabancariamovimiento_comprobante column
 * @method array findByCuentabancariamovimientoFechamovimiento(string $cuentabancariamovimiento_fechamovimiento) Return Cuentabancariamovimiento objects filtered by the cuentabancariamovimiento_fechamovimiento column
 * @method array findByCuentabancariamovimientoFechacreacion(string $cuentabancariamovimiento_fechacreacion) Return Cuentabancariamovimiento objects filtered by the cuentabancariamovimiento_fechacreacion column
 * @method array findByCuentabancariamovimientoBalance(string $cuentabancariamovimiento_balance) Return Cuentabancariamovimiento objects filtered by the cuentabancariamovimiento_balance column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseCuentabancariamovimientoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCuentabancariamovimientoQuery object.
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
            $modelName = 'Cuentabancariamovimiento';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CuentabancariamovimientoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CuentabancariamovimientoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CuentabancariamovimientoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CuentabancariamovimientoQuery) {
            return $criteria;
        }
        $query = new CuentabancariamovimientoQuery(null, null, $modelAlias);

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
     * @return   Cuentabancariamovimiento|Cuentabancariamovimiento[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CuentabancariamovimientoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CuentabancariamovimientoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cuentabancariamovimiento A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcuentabancariamovimiento($key, $con = null)
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
     * @return                 Cuentabancariamovimiento A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcuentabancariamovimiento`, `idcuentabancaria`, `idempleado`, `cuentabancariamovimiento_proceso`, `idproceso`, `cuentabancariamovimiento_cantidad`, `cuentabancariamovimiento_comprobante`, `cuentabancariamovimiento_fechamovimiento`, `cuentabancariamovimiento_fechacreacion`, `cuentabancariamovimiento_balance` FROM `cuentabancariamovimiento` WHERE `idcuentabancariamovimiento` = :p0';
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
            $obj = new Cuentabancariamovimiento();
            $obj->hydrate($row);
            CuentabancariamovimientoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cuentabancariamovimiento|Cuentabancariamovimiento[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cuentabancariamovimiento[]|mixed the list of results, formatted by the current formatter
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
     * @return CuentabancariamovimientoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CuentabancariamovimientoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcuentabancariamovimiento column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcuentabancariamovimiento(1234); // WHERE idcuentabancariamovimiento = 1234
     * $query->filterByIdcuentabancariamovimiento(array(12, 34)); // WHERE idcuentabancariamovimiento IN (12, 34)
     * $query->filterByIdcuentabancariamovimiento(array('min' => 12)); // WHERE idcuentabancariamovimiento >= 12
     * $query->filterByIdcuentabancariamovimiento(array('max' => 12)); // WHERE idcuentabancariamovimiento <= 12
     * </code>
     *
     * @param     mixed $idcuentabancariamovimiento The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariamovimientoQuery The current query, for fluid interface
     */
    public function filterByIdcuentabancariamovimiento($idcuentabancariamovimiento = null, $comparison = null)
    {
        if (is_array($idcuentabancariamovimiento)) {
            $useMinMax = false;
            if (isset($idcuentabancariamovimiento['min'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO, $idcuentabancariamovimiento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcuentabancariamovimiento['max'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO, $idcuentabancariamovimiento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO, $idcuentabancariamovimiento, $comparison);
    }

    /**
     * Filter the query on the idcuentabancaria column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcuentabancaria(1234); // WHERE idcuentabancaria = 1234
     * $query->filterByIdcuentabancaria(array(12, 34)); // WHERE idcuentabancaria IN (12, 34)
     * $query->filterByIdcuentabancaria(array('min' => 12)); // WHERE idcuentabancaria >= 12
     * $query->filterByIdcuentabancaria(array('max' => 12)); // WHERE idcuentabancaria <= 12
     * </code>
     *
     * @see       filterByCuentabancaria()
     *
     * @param     mixed $idcuentabancaria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariamovimientoQuery The current query, for fluid interface
     */
    public function filterByIdcuentabancaria($idcuentabancaria = null, $comparison = null)
    {
        if (is_array($idcuentabancaria)) {
            $useMinMax = false;
            if (isset($idcuentabancaria['min'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::IDCUENTABANCARIA, $idcuentabancaria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcuentabancaria['max'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::IDCUENTABANCARIA, $idcuentabancaria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentabancariamovimientoPeer::IDCUENTABANCARIA, $idcuentabancaria, $comparison);
    }

    /**
     * Filter the query on the idempleado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleado(1234); // WHERE idempleado = 1234
     * $query->filterByIdempleado(array(12, 34)); // WHERE idempleado IN (12, 34)
     * $query->filterByIdempleado(array('min' => 12)); // WHERE idempleado >= 12
     * $query->filterByIdempleado(array('max' => 12)); // WHERE idempleado <= 12
     * </code>
     *
     * @see       filterByEmpleado()
     *
     * @param     mixed $idempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariamovimientoQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentabancariamovimientoPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the cuentabancariamovimiento_proceso column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentabancariamovimientoProceso('fooValue');   // WHERE cuentabancariamovimiento_proceso = 'fooValue'
     * $query->filterByCuentabancariamovimientoProceso('%fooValue%'); // WHERE cuentabancariamovimiento_proceso LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cuentabancariamovimientoProceso The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariamovimientoQuery The current query, for fluid interface
     */
    public function filterByCuentabancariamovimientoProceso($cuentabancariamovimientoProceso = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cuentabancariamovimientoProceso)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cuentabancariamovimientoProceso)) {
                $cuentabancariamovimientoProceso = str_replace('*', '%', $cuentabancariamovimientoProceso);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_PROCESO, $cuentabancariamovimientoProceso, $comparison);
    }

    /**
     * Filter the query on the idproceso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproceso(1234); // WHERE idproceso = 1234
     * $query->filterByIdproceso(array(12, 34)); // WHERE idproceso IN (12, 34)
     * $query->filterByIdproceso(array('min' => 12)); // WHERE idproceso >= 12
     * $query->filterByIdproceso(array('max' => 12)); // WHERE idproceso <= 12
     * </code>
     *
     * @param     mixed $idproceso The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariamovimientoQuery The current query, for fluid interface
     */
    public function filterByIdproceso($idproceso = null, $comparison = null)
    {
        if (is_array($idproceso)) {
            $useMinMax = false;
            if (isset($idproceso['min'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::IDPROCESO, $idproceso['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproceso['max'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::IDPROCESO, $idproceso['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentabancariamovimientoPeer::IDPROCESO, $idproceso, $comparison);
    }

    /**
     * Filter the query on the cuentabancariamovimiento_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentabancariamovimientoCantidad(1234); // WHERE cuentabancariamovimiento_cantidad = 1234
     * $query->filterByCuentabancariamovimientoCantidad(array(12, 34)); // WHERE cuentabancariamovimiento_cantidad IN (12, 34)
     * $query->filterByCuentabancariamovimientoCantidad(array('min' => 12)); // WHERE cuentabancariamovimiento_cantidad >= 12
     * $query->filterByCuentabancariamovimientoCantidad(array('max' => 12)); // WHERE cuentabancariamovimiento_cantidad <= 12
     * </code>
     *
     * @param     mixed $cuentabancariamovimientoCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariamovimientoQuery The current query, for fluid interface
     */
    public function filterByCuentabancariamovimientoCantidad($cuentabancariamovimientoCantidad = null, $comparison = null)
    {
        if (is_array($cuentabancariamovimientoCantidad)) {
            $useMinMax = false;
            if (isset($cuentabancariamovimientoCantidad['min'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_CANTIDAD, $cuentabancariamovimientoCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cuentabancariamovimientoCantidad['max'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_CANTIDAD, $cuentabancariamovimientoCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_CANTIDAD, $cuentabancariamovimientoCantidad, $comparison);
    }

    /**
     * Filter the query on the cuentabancariamovimiento_comprobante column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentabancariamovimientoComprobante('fooValue');   // WHERE cuentabancariamovimiento_comprobante = 'fooValue'
     * $query->filterByCuentabancariamovimientoComprobante('%fooValue%'); // WHERE cuentabancariamovimiento_comprobante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cuentabancariamovimientoComprobante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariamovimientoQuery The current query, for fluid interface
     */
    public function filterByCuentabancariamovimientoComprobante($cuentabancariamovimientoComprobante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cuentabancariamovimientoComprobante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cuentabancariamovimientoComprobante)) {
                $cuentabancariamovimientoComprobante = str_replace('*', '%', $cuentabancariamovimientoComprobante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_COMPROBANTE, $cuentabancariamovimientoComprobante, $comparison);
    }

    /**
     * Filter the query on the cuentabancariamovimiento_fechamovimiento column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentabancariamovimientoFechamovimiento('2011-03-14'); // WHERE cuentabancariamovimiento_fechamovimiento = '2011-03-14'
     * $query->filterByCuentabancariamovimientoFechamovimiento('now'); // WHERE cuentabancariamovimiento_fechamovimiento = '2011-03-14'
     * $query->filterByCuentabancariamovimientoFechamovimiento(array('max' => 'yesterday')); // WHERE cuentabancariamovimiento_fechamovimiento < '2011-03-13'
     * </code>
     *
     * @param     mixed $cuentabancariamovimientoFechamovimiento The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariamovimientoQuery The current query, for fluid interface
     */
    public function filterByCuentabancariamovimientoFechamovimiento($cuentabancariamovimientoFechamovimiento = null, $comparison = null)
    {
        if (is_array($cuentabancariamovimientoFechamovimiento)) {
            $useMinMax = false;
            if (isset($cuentabancariamovimientoFechamovimiento['min'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHAMOVIMIENTO, $cuentabancariamovimientoFechamovimiento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cuentabancariamovimientoFechamovimiento['max'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHAMOVIMIENTO, $cuentabancariamovimientoFechamovimiento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHAMOVIMIENTO, $cuentabancariamovimientoFechamovimiento, $comparison);
    }

    /**
     * Filter the query on the cuentabancariamovimiento_fechacreacion column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentabancariamovimientoFechacreacion('2011-03-14'); // WHERE cuentabancariamovimiento_fechacreacion = '2011-03-14'
     * $query->filterByCuentabancariamovimientoFechacreacion('now'); // WHERE cuentabancariamovimiento_fechacreacion = '2011-03-14'
     * $query->filterByCuentabancariamovimientoFechacreacion(array('max' => 'yesterday')); // WHERE cuentabancariamovimiento_fechacreacion < '2011-03-13'
     * </code>
     *
     * @param     mixed $cuentabancariamovimientoFechacreacion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariamovimientoQuery The current query, for fluid interface
     */
    public function filterByCuentabancariamovimientoFechacreacion($cuentabancariamovimientoFechacreacion = null, $comparison = null)
    {
        if (is_array($cuentabancariamovimientoFechacreacion)) {
            $useMinMax = false;
            if (isset($cuentabancariamovimientoFechacreacion['min'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHACREACION, $cuentabancariamovimientoFechacreacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cuentabancariamovimientoFechacreacion['max'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHACREACION, $cuentabancariamovimientoFechacreacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_FECHACREACION, $cuentabancariamovimientoFechacreacion, $comparison);
    }

    /**
     * Filter the query on the cuentabancariamovimiento_balance column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentabancariamovimientoBalance(1234); // WHERE cuentabancariamovimiento_balance = 1234
     * $query->filterByCuentabancariamovimientoBalance(array(12, 34)); // WHERE cuentabancariamovimiento_balance IN (12, 34)
     * $query->filterByCuentabancariamovimientoBalance(array('min' => 12)); // WHERE cuentabancariamovimiento_balance >= 12
     * $query->filterByCuentabancariamovimientoBalance(array('max' => 12)); // WHERE cuentabancariamovimiento_balance <= 12
     * </code>
     *
     * @param     mixed $cuentabancariamovimientoBalance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariamovimientoQuery The current query, for fluid interface
     */
    public function filterByCuentabancariamovimientoBalance($cuentabancariamovimientoBalance = null, $comparison = null)
    {
        if (is_array($cuentabancariamovimientoBalance)) {
            $useMinMax = false;
            if (isset($cuentabancariamovimientoBalance['min'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_BALANCE, $cuentabancariamovimientoBalance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cuentabancariamovimientoBalance['max'])) {
                $this->addUsingAlias(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_BALANCE, $cuentabancariamovimientoBalance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentabancariamovimientoPeer::CUENTABANCARIAMOVIMIENTO_BALANCE, $cuentabancariamovimientoBalance, $comparison);
    }

    /**
     * Filter the query by a related Cuentabancaria object
     *
     * @param   Cuentabancaria|PropelObjectCollection $cuentabancaria The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentabancariamovimientoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentabancaria($cuentabancaria, $comparison = null)
    {
        if ($cuentabancaria instanceof Cuentabancaria) {
            return $this
                ->addUsingAlias(CuentabancariamovimientoPeer::IDCUENTABANCARIA, $cuentabancaria->getIdcuentabancaria(), $comparison);
        } elseif ($cuentabancaria instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CuentabancariamovimientoPeer::IDCUENTABANCARIA, $cuentabancaria->toKeyValue('PrimaryKey', 'Idcuentabancaria'), $comparison);
        } else {
            throw new PropelException('filterByCuentabancaria() only accepts arguments of type Cuentabancaria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cuentabancaria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CuentabancariamovimientoQuery The current query, for fluid interface
     */
    public function joinCuentabancaria($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cuentabancaria');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Cuentabancaria');
        }

        return $this;
    }

    /**
     * Use the Cuentabancaria relation Cuentabancaria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CuentabancariaQuery A secondary query class using the current class as primary query
     */
    public function useCuentabancariaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCuentabancaria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cuentabancaria', 'CuentabancariaQuery');
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentabancariamovimientoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(CuentabancariamovimientoPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CuentabancariamovimientoPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleado() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empleado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CuentabancariamovimientoQuery The current query, for fluid interface
     */
    public function joinEmpleado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empleado');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'Empleado');
        }

        return $this;
    }

    /**
     * Use the Empleado relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empleado', 'EmpleadoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Cuentabancariamovimiento $cuentabancariamovimiento Object to remove from the list of results
     *
     * @return CuentabancariamovimientoQuery The current query, for fluid interface
     */
    public function prune($cuentabancariamovimiento = null)
    {
        if ($cuentabancariamovimiento) {
            $this->addUsingAlias(CuentabancariamovimientoPeer::IDCUENTABANCARIAMOVIMIENTO, $cuentabancariamovimiento->getIdcuentabancariamovimiento(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
