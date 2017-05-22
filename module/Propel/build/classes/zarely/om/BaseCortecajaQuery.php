<?php


/**
 * Base class that represents a query for the 'cortecaja' table.
 *
 *
 *
 * @method CortecajaQuery orderByIdcortecaja($order = Criteria::ASC) Order by the idcortecaja column
 * @method CortecajaQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method CortecajaQuery orderByIdempleadoenvia($order = Criteria::ASC) Order by the idempleadoenvia column
 * @method CortecajaQuery orderByCortecajaFecha($order = Criteria::ASC) Order by the cortecaja_fecha column
 * @method CortecajaQuery orderByCortecajaTotal($order = Criteria::ASC) Order by the cortecaja_total column
 * @method CortecajaQuery orderByCortecajaEfectivo($order = Criteria::ASC) Order by the cortecaja_efectivo column
 * @method CortecajaQuery orderByCortecajaTarjetas($order = Criteria::ASC) Order by the cortecaja_tarjetas column
 * @method CortecajaQuery orderByCortecajaVales($order = Criteria::ASC) Order by the cortecaja_vales column
 * @method CortecajaQuery orderByCortecajaEnviado($order = Criteria::ASC) Order by the cortecaja_enviado column
 *
 * @method CortecajaQuery groupByIdcortecaja() Group by the idcortecaja column
 * @method CortecajaQuery groupByIdsucursal() Group by the idsucursal column
 * @method CortecajaQuery groupByIdempleadoenvia() Group by the idempleadoenvia column
 * @method CortecajaQuery groupByCortecajaFecha() Group by the cortecaja_fecha column
 * @method CortecajaQuery groupByCortecajaTotal() Group by the cortecaja_total column
 * @method CortecajaQuery groupByCortecajaEfectivo() Group by the cortecaja_efectivo column
 * @method CortecajaQuery groupByCortecajaTarjetas() Group by the cortecaja_tarjetas column
 * @method CortecajaQuery groupByCortecajaVales() Group by the cortecaja_vales column
 * @method CortecajaQuery groupByCortecajaEnviado() Group by the cortecaja_enviado column
 *
 * @method CortecajaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CortecajaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CortecajaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CortecajaQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method CortecajaQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method CortecajaQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method CortecajaQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method CortecajaQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method CortecajaQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method Cortecaja findOne(PropelPDO $con = null) Return the first Cortecaja matching the query
 * @method Cortecaja findOneOrCreate(PropelPDO $con = null) Return the first Cortecaja matching the query, or a new Cortecaja object populated from the query conditions when no match is found
 *
 * @method Cortecaja findOneByIdsucursal(int $idsucursal) Return the first Cortecaja filtered by the idsucursal column
 * @method Cortecaja findOneByIdempleadoenvia(int $idempleadoenvia) Return the first Cortecaja filtered by the idempleadoenvia column
 * @method Cortecaja findOneByCortecajaFecha(string $cortecaja_fecha) Return the first Cortecaja filtered by the cortecaja_fecha column
 * @method Cortecaja findOneByCortecajaTotal(string $cortecaja_total) Return the first Cortecaja filtered by the cortecaja_total column
 * @method Cortecaja findOneByCortecajaEfectivo(string $cortecaja_efectivo) Return the first Cortecaja filtered by the cortecaja_efectivo column
 * @method Cortecaja findOneByCortecajaTarjetas(string $cortecaja_tarjetas) Return the first Cortecaja filtered by the cortecaja_tarjetas column
 * @method Cortecaja findOneByCortecajaVales(string $cortecaja_vales) Return the first Cortecaja filtered by the cortecaja_vales column
 * @method Cortecaja findOneByCortecajaEnviado(boolean $cortecaja_enviado) Return the first Cortecaja filtered by the cortecaja_enviado column
 *
 * @method array findByIdcortecaja(int $idcortecaja) Return Cortecaja objects filtered by the idcortecaja column
 * @method array findByIdsucursal(int $idsucursal) Return Cortecaja objects filtered by the idsucursal column
 * @method array findByIdempleadoenvia(int $idempleadoenvia) Return Cortecaja objects filtered by the idempleadoenvia column
 * @method array findByCortecajaFecha(string $cortecaja_fecha) Return Cortecaja objects filtered by the cortecaja_fecha column
 * @method array findByCortecajaTotal(string $cortecaja_total) Return Cortecaja objects filtered by the cortecaja_total column
 * @method array findByCortecajaEfectivo(string $cortecaja_efectivo) Return Cortecaja objects filtered by the cortecaja_efectivo column
 * @method array findByCortecajaTarjetas(string $cortecaja_tarjetas) Return Cortecaja objects filtered by the cortecaja_tarjetas column
 * @method array findByCortecajaVales(string $cortecaja_vales) Return Cortecaja objects filtered by the cortecaja_vales column
 * @method array findByCortecajaEnviado(boolean $cortecaja_enviado) Return Cortecaja objects filtered by the cortecaja_enviado column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseCortecajaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCortecajaQuery object.
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
            $modelName = 'Cortecaja';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CortecajaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CortecajaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CortecajaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CortecajaQuery) {
            return $criteria;
        }
        $query = new CortecajaQuery(null, null, $modelAlias);

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
     * @return   Cortecaja|Cortecaja[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CortecajaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CortecajaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cortecaja A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcortecaja($key, $con = null)
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
     * @return                 Cortecaja A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcortecaja`, `idsucursal`, `idempleadoenvia`, `cortecaja_fecha`, `cortecaja_total`, `cortecaja_efectivo`, `cortecaja_tarjetas`, `cortecaja_vales`, `cortecaja_enviado` FROM `cortecaja` WHERE `idcortecaja` = :p0';
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
            $obj = new Cortecaja();
            $obj->hydrate($row);
            CortecajaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cortecaja|Cortecaja[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cortecaja[]|mixed the list of results, formatted by the current formatter
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
     * @return CortecajaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CortecajaPeer::IDCORTECAJA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CortecajaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CortecajaPeer::IDCORTECAJA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcortecaja column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcortecaja(1234); // WHERE idcortecaja = 1234
     * $query->filterByIdcortecaja(array(12, 34)); // WHERE idcortecaja IN (12, 34)
     * $query->filterByIdcortecaja(array('min' => 12)); // WHERE idcortecaja >= 12
     * $query->filterByIdcortecaja(array('max' => 12)); // WHERE idcortecaja <= 12
     * </code>
     *
     * @param     mixed $idcortecaja The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CortecajaQuery The current query, for fluid interface
     */
    public function filterByIdcortecaja($idcortecaja = null, $comparison = null)
    {
        if (is_array($idcortecaja)) {
            $useMinMax = false;
            if (isset($idcortecaja['min'])) {
                $this->addUsingAlias(CortecajaPeer::IDCORTECAJA, $idcortecaja['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcortecaja['max'])) {
                $this->addUsingAlias(CortecajaPeer::IDCORTECAJA, $idcortecaja['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CortecajaPeer::IDCORTECAJA, $idcortecaja, $comparison);
    }

    /**
     * Filter the query on the idsucursal column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsucursal(1234); // WHERE idsucursal = 1234
     * $query->filterByIdsucursal(array(12, 34)); // WHERE idsucursal IN (12, 34)
     * $query->filterByIdsucursal(array('min' => 12)); // WHERE idsucursal >= 12
     * $query->filterByIdsucursal(array('max' => 12)); // WHERE idsucursal <= 12
     * </code>
     *
     * @see       filterBySucursal()
     *
     * @param     mixed $idsucursal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CortecajaQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(CortecajaPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(CortecajaPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CortecajaPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the idempleadoenvia column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadoenvia(1234); // WHERE idempleadoenvia = 1234
     * $query->filterByIdempleadoenvia(array(12, 34)); // WHERE idempleadoenvia IN (12, 34)
     * $query->filterByIdempleadoenvia(array('min' => 12)); // WHERE idempleadoenvia >= 12
     * $query->filterByIdempleadoenvia(array('max' => 12)); // WHERE idempleadoenvia <= 12
     * </code>
     *
     * @see       filterByEmpleado()
     *
     * @param     mixed $idempleadoenvia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CortecajaQuery The current query, for fluid interface
     */
    public function filterByIdempleadoenvia($idempleadoenvia = null, $comparison = null)
    {
        if (is_array($idempleadoenvia)) {
            $useMinMax = false;
            if (isset($idempleadoenvia['min'])) {
                $this->addUsingAlias(CortecajaPeer::IDEMPLEADOENVIA, $idempleadoenvia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadoenvia['max'])) {
                $this->addUsingAlias(CortecajaPeer::IDEMPLEADOENVIA, $idempleadoenvia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CortecajaPeer::IDEMPLEADOENVIA, $idempleadoenvia, $comparison);
    }

    /**
     * Filter the query on the cortecaja_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByCortecajaFecha('2011-03-14'); // WHERE cortecaja_fecha = '2011-03-14'
     * $query->filterByCortecajaFecha('now'); // WHERE cortecaja_fecha = '2011-03-14'
     * $query->filterByCortecajaFecha(array('max' => 'yesterday')); // WHERE cortecaja_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $cortecajaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CortecajaQuery The current query, for fluid interface
     */
    public function filterByCortecajaFecha($cortecajaFecha = null, $comparison = null)
    {
        if (is_array($cortecajaFecha)) {
            $useMinMax = false;
            if (isset($cortecajaFecha['min'])) {
                $this->addUsingAlias(CortecajaPeer::CORTECAJA_FECHA, $cortecajaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cortecajaFecha['max'])) {
                $this->addUsingAlias(CortecajaPeer::CORTECAJA_FECHA, $cortecajaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CortecajaPeer::CORTECAJA_FECHA, $cortecajaFecha, $comparison);
    }

    /**
     * Filter the query on the cortecaja_total column
     *
     * Example usage:
     * <code>
     * $query->filterByCortecajaTotal(1234); // WHERE cortecaja_total = 1234
     * $query->filterByCortecajaTotal(array(12, 34)); // WHERE cortecaja_total IN (12, 34)
     * $query->filterByCortecajaTotal(array('min' => 12)); // WHERE cortecaja_total >= 12
     * $query->filterByCortecajaTotal(array('max' => 12)); // WHERE cortecaja_total <= 12
     * </code>
     *
     * @param     mixed $cortecajaTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CortecajaQuery The current query, for fluid interface
     */
    public function filterByCortecajaTotal($cortecajaTotal = null, $comparison = null)
    {
        if (is_array($cortecajaTotal)) {
            $useMinMax = false;
            if (isset($cortecajaTotal['min'])) {
                $this->addUsingAlias(CortecajaPeer::CORTECAJA_TOTAL, $cortecajaTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cortecajaTotal['max'])) {
                $this->addUsingAlias(CortecajaPeer::CORTECAJA_TOTAL, $cortecajaTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CortecajaPeer::CORTECAJA_TOTAL, $cortecajaTotal, $comparison);
    }

    /**
     * Filter the query on the cortecaja_efectivo column
     *
     * Example usage:
     * <code>
     * $query->filterByCortecajaEfectivo(1234); // WHERE cortecaja_efectivo = 1234
     * $query->filterByCortecajaEfectivo(array(12, 34)); // WHERE cortecaja_efectivo IN (12, 34)
     * $query->filterByCortecajaEfectivo(array('min' => 12)); // WHERE cortecaja_efectivo >= 12
     * $query->filterByCortecajaEfectivo(array('max' => 12)); // WHERE cortecaja_efectivo <= 12
     * </code>
     *
     * @param     mixed $cortecajaEfectivo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CortecajaQuery The current query, for fluid interface
     */
    public function filterByCortecajaEfectivo($cortecajaEfectivo = null, $comparison = null)
    {
        if (is_array($cortecajaEfectivo)) {
            $useMinMax = false;
            if (isset($cortecajaEfectivo['min'])) {
                $this->addUsingAlias(CortecajaPeer::CORTECAJA_EFECTIVO, $cortecajaEfectivo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cortecajaEfectivo['max'])) {
                $this->addUsingAlias(CortecajaPeer::CORTECAJA_EFECTIVO, $cortecajaEfectivo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CortecajaPeer::CORTECAJA_EFECTIVO, $cortecajaEfectivo, $comparison);
    }

    /**
     * Filter the query on the cortecaja_tarjetas column
     *
     * Example usage:
     * <code>
     * $query->filterByCortecajaTarjetas(1234); // WHERE cortecaja_tarjetas = 1234
     * $query->filterByCortecajaTarjetas(array(12, 34)); // WHERE cortecaja_tarjetas IN (12, 34)
     * $query->filterByCortecajaTarjetas(array('min' => 12)); // WHERE cortecaja_tarjetas >= 12
     * $query->filterByCortecajaTarjetas(array('max' => 12)); // WHERE cortecaja_tarjetas <= 12
     * </code>
     *
     * @param     mixed $cortecajaTarjetas The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CortecajaQuery The current query, for fluid interface
     */
    public function filterByCortecajaTarjetas($cortecajaTarjetas = null, $comparison = null)
    {
        if (is_array($cortecajaTarjetas)) {
            $useMinMax = false;
            if (isset($cortecajaTarjetas['min'])) {
                $this->addUsingAlias(CortecajaPeer::CORTECAJA_TARJETAS, $cortecajaTarjetas['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cortecajaTarjetas['max'])) {
                $this->addUsingAlias(CortecajaPeer::CORTECAJA_TARJETAS, $cortecajaTarjetas['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CortecajaPeer::CORTECAJA_TARJETAS, $cortecajaTarjetas, $comparison);
    }

    /**
     * Filter the query on the cortecaja_vales column
     *
     * Example usage:
     * <code>
     * $query->filterByCortecajaVales(1234); // WHERE cortecaja_vales = 1234
     * $query->filterByCortecajaVales(array(12, 34)); // WHERE cortecaja_vales IN (12, 34)
     * $query->filterByCortecajaVales(array('min' => 12)); // WHERE cortecaja_vales >= 12
     * $query->filterByCortecajaVales(array('max' => 12)); // WHERE cortecaja_vales <= 12
     * </code>
     *
     * @param     mixed $cortecajaVales The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CortecajaQuery The current query, for fluid interface
     */
    public function filterByCortecajaVales($cortecajaVales = null, $comparison = null)
    {
        if (is_array($cortecajaVales)) {
            $useMinMax = false;
            if (isset($cortecajaVales['min'])) {
                $this->addUsingAlias(CortecajaPeer::CORTECAJA_VALES, $cortecajaVales['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cortecajaVales['max'])) {
                $this->addUsingAlias(CortecajaPeer::CORTECAJA_VALES, $cortecajaVales['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CortecajaPeer::CORTECAJA_VALES, $cortecajaVales, $comparison);
    }

    /**
     * Filter the query on the cortecaja_enviado column
     *
     * Example usage:
     * <code>
     * $query->filterByCortecajaEnviado(true); // WHERE cortecaja_enviado = true
     * $query->filterByCortecajaEnviado('yes'); // WHERE cortecaja_enviado = true
     * </code>
     *
     * @param     boolean|string $cortecajaEnviado The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CortecajaQuery The current query, for fluid interface
     */
    public function filterByCortecajaEnviado($cortecajaEnviado = null, $comparison = null)
    {
        if (is_string($cortecajaEnviado)) {
            $cortecajaEnviado = in_array(strtolower($cortecajaEnviado), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CortecajaPeer::CORTECAJA_ENVIADO, $cortecajaEnviado, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CortecajaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(CortecajaPeer::IDEMPLEADOENVIA, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CortecajaPeer::IDEMPLEADOENVIA, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return CortecajaQuery The current query, for fluid interface
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
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CortecajaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(CortecajaPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CortecajaPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
        } else {
            throw new PropelException('filterBySucursal() only accepts arguments of type Sucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Sucursal relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CortecajaQuery The current query, for fluid interface
     */
    public function joinSucursal($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Sucursal');

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
            $this->addJoinObject($join, 'Sucursal');
        }

        return $this;
    }

    /**
     * Use the Sucursal relation Sucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SucursalQuery A secondary query class using the current class as primary query
     */
    public function useSucursalQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSucursal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sucursal', 'SucursalQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Cortecaja $cortecaja Object to remove from the list of results
     *
     * @return CortecajaQuery The current query, for fluid interface
     */
    public function prune($cortecaja = null)
    {
        if ($cortecaja) {
            $this->addUsingAlias(CortecajaPeer::IDCORTECAJA, $cortecaja->getIdcortecaja(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
