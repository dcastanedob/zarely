<?php


/**
 * Base class that represents a query for the 'ventapago' table.
 *
 *
 *
 * @method VentapagoQuery orderByIdventapago($order = Criteria::ASC) Order by the idventapago column
 * @method VentapagoQuery orderByIdventa($order = Criteria::ASC) Order by the idventa column
 * @method VentapagoQuery orderByVentaFecha($order = Criteria::ASC) Order by the venta_fecha column
 * @method VentapagoQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method VentapagoQuery orderByVentapagoMetododepago($order = Criteria::ASC) Order by the ventapago_metododepago column
 * @method VentapagoQuery orderByVentapagoCantidad($order = Criteria::ASC) Order by the ventapago_cantidad column
 * @method VentapagoQuery orderByVentapagoReferencia($order = Criteria::ASC) Order by the ventapago_referencia column
 * @method VentapagoQuery orderByVentapagoCuatrodigitos($order = Criteria::ASC) Order by the ventapago_cuatrodigitos column
 * @method VentapagoQuery orderByIdvale($order = Criteria::ASC) Order by the idvale column
 *
 * @method VentapagoQuery groupByIdventapago() Group by the idventapago column
 * @method VentapagoQuery groupByIdventa() Group by the idventa column
 * @method VentapagoQuery groupByVentaFecha() Group by the venta_fecha column
 * @method VentapagoQuery groupByIdempleado() Group by the idempleado column
 * @method VentapagoQuery groupByVentapagoMetododepago() Group by the ventapago_metododepago column
 * @method VentapagoQuery groupByVentapagoCantidad() Group by the ventapago_cantidad column
 * @method VentapagoQuery groupByVentapagoReferencia() Group by the ventapago_referencia column
 * @method VentapagoQuery groupByVentapagoCuatrodigitos() Group by the ventapago_cuatrodigitos column
 * @method VentapagoQuery groupByIdvale() Group by the idvale column
 *
 * @method VentapagoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VentapagoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VentapagoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method VentapagoQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method VentapagoQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method VentapagoQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method VentapagoQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method VentapagoQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method VentapagoQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method Ventapago findOne(PropelPDO $con = null) Return the first Ventapago matching the query
 * @method Ventapago findOneOrCreate(PropelPDO $con = null) Return the first Ventapago matching the query, or a new Ventapago object populated from the query conditions when no match is found
 *
 * @method Ventapago findOneByIdventa(int $idventa) Return the first Ventapago filtered by the idventa column
 * @method Ventapago findOneByVentaFecha(string $venta_fecha) Return the first Ventapago filtered by the venta_fecha column
 * @method Ventapago findOneByIdempleado(int $idempleado) Return the first Ventapago filtered by the idempleado column
 * @method Ventapago findOneByVentapagoMetododepago(string $ventapago_metododepago) Return the first Ventapago filtered by the ventapago_metododepago column
 * @method Ventapago findOneByVentapagoCantidad(string $ventapago_cantidad) Return the first Ventapago filtered by the ventapago_cantidad column
 * @method Ventapago findOneByVentapagoReferencia(string $ventapago_referencia) Return the first Ventapago filtered by the ventapago_referencia column
 * @method Ventapago findOneByVentapagoCuatrodigitos(string $ventapago_cuatrodigitos) Return the first Ventapago filtered by the ventapago_cuatrodigitos column
 * @method Ventapago findOneByIdvale(string $idvale) Return the first Ventapago filtered by the idvale column
 *
 * @method array findByIdventapago(int $idventapago) Return Ventapago objects filtered by the idventapago column
 * @method array findByIdventa(int $idventa) Return Ventapago objects filtered by the idventa column
 * @method array findByVentaFecha(string $venta_fecha) Return Ventapago objects filtered by the venta_fecha column
 * @method array findByIdempleado(int $idempleado) Return Ventapago objects filtered by the idempleado column
 * @method array findByVentapagoMetododepago(string $ventapago_metododepago) Return Ventapago objects filtered by the ventapago_metododepago column
 * @method array findByVentapagoCantidad(string $ventapago_cantidad) Return Ventapago objects filtered by the ventapago_cantidad column
 * @method array findByVentapagoReferencia(string $ventapago_referencia) Return Ventapago objects filtered by the ventapago_referencia column
 * @method array findByVentapagoCuatrodigitos(string $ventapago_cuatrodigitos) Return Ventapago objects filtered by the ventapago_cuatrodigitos column
 * @method array findByIdvale(string $idvale) Return Ventapago objects filtered by the idvale column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseVentapagoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVentapagoQuery object.
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
            $modelName = 'Ventapago';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VentapagoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VentapagoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VentapagoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VentapagoQuery) {
            return $criteria;
        }
        $query = new VentapagoQuery(null, null, $modelAlias);

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
     * @return   Ventapago|Ventapago[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VentapagoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VentapagoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ventapago A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdventapago($key, $con = null)
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
     * @return                 Ventapago A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idventapago`, `idventa`, `venta_fecha`, `idempleado`, `ventapago_metododepago`, `ventapago_cantidad`, `ventapago_referencia`, `ventapago_cuatrodigitos`, `idvale` FROM `ventapago` WHERE `idventapago` = :p0';
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
            $obj = new Ventapago();
            $obj->hydrate($row);
            VentapagoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ventapago|Ventapago[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ventapago[]|mixed the list of results, formatted by the current formatter
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
     * @return VentapagoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VentapagoPeer::IDVENTAPAGO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VentapagoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VentapagoPeer::IDVENTAPAGO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idventapago column
     *
     * Example usage:
     * <code>
     * $query->filterByIdventapago(1234); // WHERE idventapago = 1234
     * $query->filterByIdventapago(array(12, 34)); // WHERE idventapago IN (12, 34)
     * $query->filterByIdventapago(array('min' => 12)); // WHERE idventapago >= 12
     * $query->filterByIdventapago(array('max' => 12)); // WHERE idventapago <= 12
     * </code>
     *
     * @param     mixed $idventapago The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentapagoQuery The current query, for fluid interface
     */
    public function filterByIdventapago($idventapago = null, $comparison = null)
    {
        if (is_array($idventapago)) {
            $useMinMax = false;
            if (isset($idventapago['min'])) {
                $this->addUsingAlias(VentapagoPeer::IDVENTAPAGO, $idventapago['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventapago['max'])) {
                $this->addUsingAlias(VentapagoPeer::IDVENTAPAGO, $idventapago['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentapagoPeer::IDVENTAPAGO, $idventapago, $comparison);
    }

    /**
     * Filter the query on the idventa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdventa(1234); // WHERE idventa = 1234
     * $query->filterByIdventa(array(12, 34)); // WHERE idventa IN (12, 34)
     * $query->filterByIdventa(array('min' => 12)); // WHERE idventa >= 12
     * $query->filterByIdventa(array('max' => 12)); // WHERE idventa <= 12
     * </code>
     *
     * @see       filterByVenta()
     *
     * @param     mixed $idventa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentapagoQuery The current query, for fluid interface
     */
    public function filterByIdventa($idventa = null, $comparison = null)
    {
        if (is_array($idventa)) {
            $useMinMax = false;
            if (isset($idventa['min'])) {
                $this->addUsingAlias(VentapagoPeer::IDVENTA, $idventa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventa['max'])) {
                $this->addUsingAlias(VentapagoPeer::IDVENTA, $idventa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentapagoPeer::IDVENTA, $idventa, $comparison);
    }

    /**
     * Filter the query on the venta_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaFecha('2011-03-14'); // WHERE venta_fecha = '2011-03-14'
     * $query->filterByVentaFecha('now'); // WHERE venta_fecha = '2011-03-14'
     * $query->filterByVentaFecha(array('max' => 'yesterday')); // WHERE venta_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $ventaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentapagoQuery The current query, for fluid interface
     */
    public function filterByVentaFecha($ventaFecha = null, $comparison = null)
    {
        if (is_array($ventaFecha)) {
            $useMinMax = false;
            if (isset($ventaFecha['min'])) {
                $this->addUsingAlias(VentapagoPeer::VENTA_FECHA, $ventaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventaFecha['max'])) {
                $this->addUsingAlias(VentapagoPeer::VENTA_FECHA, $ventaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentapagoPeer::VENTA_FECHA, $ventaFecha, $comparison);
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
     * @return VentapagoQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(VentapagoPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(VentapagoPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentapagoPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the ventapago_metododepago column
     *
     * Example usage:
     * <code>
     * $query->filterByVentapagoMetododepago('fooValue');   // WHERE ventapago_metododepago = 'fooValue'
     * $query->filterByVentapagoMetododepago('%fooValue%'); // WHERE ventapago_metododepago LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ventapagoMetododepago The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentapagoQuery The current query, for fluid interface
     */
    public function filterByVentapagoMetododepago($ventapagoMetododepago = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ventapagoMetododepago)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ventapagoMetododepago)) {
                $ventapagoMetododepago = str_replace('*', '%', $ventapagoMetododepago);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VentapagoPeer::VENTAPAGO_METODODEPAGO, $ventapagoMetododepago, $comparison);
    }

    /**
     * Filter the query on the ventapago_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByVentapagoCantidad(1234); // WHERE ventapago_cantidad = 1234
     * $query->filterByVentapagoCantidad(array(12, 34)); // WHERE ventapago_cantidad IN (12, 34)
     * $query->filterByVentapagoCantidad(array('min' => 12)); // WHERE ventapago_cantidad >= 12
     * $query->filterByVentapagoCantidad(array('max' => 12)); // WHERE ventapago_cantidad <= 12
     * </code>
     *
     * @param     mixed $ventapagoCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentapagoQuery The current query, for fluid interface
     */
    public function filterByVentapagoCantidad($ventapagoCantidad = null, $comparison = null)
    {
        if (is_array($ventapagoCantidad)) {
            $useMinMax = false;
            if (isset($ventapagoCantidad['min'])) {
                $this->addUsingAlias(VentapagoPeer::VENTAPAGO_CANTIDAD, $ventapagoCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventapagoCantidad['max'])) {
                $this->addUsingAlias(VentapagoPeer::VENTAPAGO_CANTIDAD, $ventapagoCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentapagoPeer::VENTAPAGO_CANTIDAD, $ventapagoCantidad, $comparison);
    }

    /**
     * Filter the query on the ventapago_referencia column
     *
     * Example usage:
     * <code>
     * $query->filterByVentapagoReferencia('fooValue');   // WHERE ventapago_referencia = 'fooValue'
     * $query->filterByVentapagoReferencia('%fooValue%'); // WHERE ventapago_referencia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ventapagoReferencia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentapagoQuery The current query, for fluid interface
     */
    public function filterByVentapagoReferencia($ventapagoReferencia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ventapagoReferencia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ventapagoReferencia)) {
                $ventapagoReferencia = str_replace('*', '%', $ventapagoReferencia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VentapagoPeer::VENTAPAGO_REFERENCIA, $ventapagoReferencia, $comparison);
    }

    /**
     * Filter the query on the ventapago_cuatrodigitos column
     *
     * Example usage:
     * <code>
     * $query->filterByVentapagoCuatrodigitos('fooValue');   // WHERE ventapago_cuatrodigitos = 'fooValue'
     * $query->filterByVentapagoCuatrodigitos('%fooValue%'); // WHERE ventapago_cuatrodigitos LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ventapagoCuatrodigitos The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentapagoQuery The current query, for fluid interface
     */
    public function filterByVentapagoCuatrodigitos($ventapagoCuatrodigitos = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ventapagoCuatrodigitos)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ventapagoCuatrodigitos)) {
                $ventapagoCuatrodigitos = str_replace('*', '%', $ventapagoCuatrodigitos);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VentapagoPeer::VENTAPAGO_CUATRODIGITOS, $ventapagoCuatrodigitos, $comparison);
    }

    /**
     * Filter the query on the idvale column
     *
     * Example usage:
     * <code>
     * $query->filterByIdvale('fooValue');   // WHERE idvale = 'fooValue'
     * $query->filterByIdvale('%fooValue%'); // WHERE idvale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idvale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentapagoQuery The current query, for fluid interface
     */
    public function filterByIdvale($idvale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idvale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idvale)) {
                $idvale = str_replace('*', '%', $idvale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VentapagoPeer::IDVALE, $idvale, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentapagoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(VentapagoPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VentapagoPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return VentapagoQuery The current query, for fluid interface
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
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentapagoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVenta($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(VentapagoPeer::IDVENTA, $venta->getIdventa(), $comparison);
        } elseif ($venta instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VentapagoPeer::IDVENTA, $venta->toKeyValue('PrimaryKey', 'Idventa'), $comparison);
        } else {
            throw new PropelException('filterByVenta() only accepts arguments of type Venta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Venta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VentapagoQuery The current query, for fluid interface
     */
    public function joinVenta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Venta');

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
            $this->addJoinObject($join, 'Venta');
        }

        return $this;
    }

    /**
     * Use the Venta relation Venta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentaQuery A secondary query class using the current class as primary query
     */
    public function useVentaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVenta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Venta', 'VentaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Ventapago $ventapago Object to remove from the list of results
     *
     * @return VentapagoQuery The current query, for fluid interface
     */
    public function prune($ventapago = null)
    {
        if ($ventapago) {
            $this->addUsingAlias(VentapagoPeer::IDVENTAPAGO, $ventapago->getIdventapago(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
