<?php


/**
 * Base class that represents a query for the 'tarjetapuntosdetalle' table.
 *
 *
 *
 * @method TarjetapuntosdetalleQuery orderByIdtarjetapuntosdetalle($order = Criteria::ASC) Order by the idtarjetapuntosdetalle column
 * @method TarjetapuntosdetalleQuery orderByIdtarjetapuntos($order = Criteria::ASC) Order by the idtarjetapuntos column
 * @method TarjetapuntosdetalleQuery orderByTarjetapuntosdetalleTipo($order = Criteria::ASC) Order by the tarjetapuntosdetalle_tipo column
 * @method TarjetapuntosdetalleQuery orderByTarjetapuntosdetalleCantidad($order = Criteria::ASC) Order by the tarjetapuntosdetalle_cantidad column
 * @method TarjetapuntosdetalleQuery orderByIdventa($order = Criteria::ASC) Order by the idventa column
 * @method TarjetapuntosdetalleQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 *
 * @method TarjetapuntosdetalleQuery groupByIdtarjetapuntosdetalle() Group by the idtarjetapuntosdetalle column
 * @method TarjetapuntosdetalleQuery groupByIdtarjetapuntos() Group by the idtarjetapuntos column
 * @method TarjetapuntosdetalleQuery groupByTarjetapuntosdetalleTipo() Group by the tarjetapuntosdetalle_tipo column
 * @method TarjetapuntosdetalleQuery groupByTarjetapuntosdetalleCantidad() Group by the tarjetapuntosdetalle_cantidad column
 * @method TarjetapuntosdetalleQuery groupByIdventa() Group by the idventa column
 * @method TarjetapuntosdetalleQuery groupByIdempleado() Group by the idempleado column
 *
 * @method TarjetapuntosdetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TarjetapuntosdetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TarjetapuntosdetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TarjetapuntosdetalleQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method TarjetapuntosdetalleQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method TarjetapuntosdetalleQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method TarjetapuntosdetalleQuery leftJoinTarjetapuntos($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tarjetapuntos relation
 * @method TarjetapuntosdetalleQuery rightJoinTarjetapuntos($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tarjetapuntos relation
 * @method TarjetapuntosdetalleQuery innerJoinTarjetapuntos($relationAlias = null) Adds a INNER JOIN clause to the query using the Tarjetapuntos relation
 *
 * @method TarjetapuntosdetalleQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method TarjetapuntosdetalleQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method TarjetapuntosdetalleQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method Tarjetapuntosdetalle findOne(PropelPDO $con = null) Return the first Tarjetapuntosdetalle matching the query
 * @method Tarjetapuntosdetalle findOneOrCreate(PropelPDO $con = null) Return the first Tarjetapuntosdetalle matching the query, or a new Tarjetapuntosdetalle object populated from the query conditions when no match is found
 *
 * @method Tarjetapuntosdetalle findOneByIdtarjetapuntos(int $idtarjetapuntos) Return the first Tarjetapuntosdetalle filtered by the idtarjetapuntos column
 * @method Tarjetapuntosdetalle findOneByTarjetapuntosdetalleTipo(string $tarjetapuntosdetalle_tipo) Return the first Tarjetapuntosdetalle filtered by the tarjetapuntosdetalle_tipo column
 * @method Tarjetapuntosdetalle findOneByTarjetapuntosdetalleCantidad(int $tarjetapuntosdetalle_cantidad) Return the first Tarjetapuntosdetalle filtered by the tarjetapuntosdetalle_cantidad column
 * @method Tarjetapuntosdetalle findOneByIdventa(int $idventa) Return the first Tarjetapuntosdetalle filtered by the idventa column
 * @method Tarjetapuntosdetalle findOneByIdempleado(int $idempleado) Return the first Tarjetapuntosdetalle filtered by the idempleado column
 *
 * @method array findByIdtarjetapuntosdetalle(int $idtarjetapuntosdetalle) Return Tarjetapuntosdetalle objects filtered by the idtarjetapuntosdetalle column
 * @method array findByIdtarjetapuntos(int $idtarjetapuntos) Return Tarjetapuntosdetalle objects filtered by the idtarjetapuntos column
 * @method array findByTarjetapuntosdetalleTipo(string $tarjetapuntosdetalle_tipo) Return Tarjetapuntosdetalle objects filtered by the tarjetapuntosdetalle_tipo column
 * @method array findByTarjetapuntosdetalleCantidad(int $tarjetapuntosdetalle_cantidad) Return Tarjetapuntosdetalle objects filtered by the tarjetapuntosdetalle_cantidad column
 * @method array findByIdventa(int $idventa) Return Tarjetapuntosdetalle objects filtered by the idventa column
 * @method array findByIdempleado(int $idempleado) Return Tarjetapuntosdetalle objects filtered by the idempleado column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseTarjetapuntosdetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTarjetapuntosdetalleQuery object.
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
            $modelName = 'Tarjetapuntosdetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TarjetapuntosdetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TarjetapuntosdetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TarjetapuntosdetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TarjetapuntosdetalleQuery) {
            return $criteria;
        }
        $query = new TarjetapuntosdetalleQuery(null, null, $modelAlias);

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
     * @return   Tarjetapuntosdetalle|Tarjetapuntosdetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TarjetapuntosdetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TarjetapuntosdetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Tarjetapuntosdetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdtarjetapuntosdetalle($key, $con = null)
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
     * @return                 Tarjetapuntosdetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idtarjetapuntosdetalle`, `idtarjetapuntos`, `tarjetapuntosdetalle_tipo`, `tarjetapuntosdetalle_cantidad`, `idventa`, `idempleado` FROM `tarjetapuntosdetalle` WHERE `idtarjetapuntosdetalle` = :p0';
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
            $obj = new Tarjetapuntosdetalle();
            $obj->hydrate($row);
            TarjetapuntosdetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Tarjetapuntosdetalle|Tarjetapuntosdetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Tarjetapuntosdetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return TarjetapuntosdetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TarjetapuntosdetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idtarjetapuntosdetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtarjetapuntosdetalle(1234); // WHERE idtarjetapuntosdetalle = 1234
     * $query->filterByIdtarjetapuntosdetalle(array(12, 34)); // WHERE idtarjetapuntosdetalle IN (12, 34)
     * $query->filterByIdtarjetapuntosdetalle(array('min' => 12)); // WHERE idtarjetapuntosdetalle >= 12
     * $query->filterByIdtarjetapuntosdetalle(array('max' => 12)); // WHERE idtarjetapuntosdetalle <= 12
     * </code>
     *
     * @param     mixed $idtarjetapuntosdetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TarjetapuntosdetalleQuery The current query, for fluid interface
     */
    public function filterByIdtarjetapuntosdetalle($idtarjetapuntosdetalle = null, $comparison = null)
    {
        if (is_array($idtarjetapuntosdetalle)) {
            $useMinMax = false;
            if (isset($idtarjetapuntosdetalle['min'])) {
                $this->addUsingAlias(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE, $idtarjetapuntosdetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtarjetapuntosdetalle['max'])) {
                $this->addUsingAlias(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE, $idtarjetapuntosdetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE, $idtarjetapuntosdetalle, $comparison);
    }

    /**
     * Filter the query on the idtarjetapuntos column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtarjetapuntos(1234); // WHERE idtarjetapuntos = 1234
     * $query->filterByIdtarjetapuntos(array(12, 34)); // WHERE idtarjetapuntos IN (12, 34)
     * $query->filterByIdtarjetapuntos(array('min' => 12)); // WHERE idtarjetapuntos >= 12
     * $query->filterByIdtarjetapuntos(array('max' => 12)); // WHERE idtarjetapuntos <= 12
     * </code>
     *
     * @see       filterByTarjetapuntos()
     *
     * @param     mixed $idtarjetapuntos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TarjetapuntosdetalleQuery The current query, for fluid interface
     */
    public function filterByIdtarjetapuntos($idtarjetapuntos = null, $comparison = null)
    {
        if (is_array($idtarjetapuntos)) {
            $useMinMax = false;
            if (isset($idtarjetapuntos['min'])) {
                $this->addUsingAlias(TarjetapuntosdetallePeer::IDTARJETAPUNTOS, $idtarjetapuntos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtarjetapuntos['max'])) {
                $this->addUsingAlias(TarjetapuntosdetallePeer::IDTARJETAPUNTOS, $idtarjetapuntos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TarjetapuntosdetallePeer::IDTARJETAPUNTOS, $idtarjetapuntos, $comparison);
    }

    /**
     * Filter the query on the tarjetapuntosdetalle_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByTarjetapuntosdetalleTipo('fooValue');   // WHERE tarjetapuntosdetalle_tipo = 'fooValue'
     * $query->filterByTarjetapuntosdetalleTipo('%fooValue%'); // WHERE tarjetapuntosdetalle_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tarjetapuntosdetalleTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TarjetapuntosdetalleQuery The current query, for fluid interface
     */
    public function filterByTarjetapuntosdetalleTipo($tarjetapuntosdetalleTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tarjetapuntosdetalleTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tarjetapuntosdetalleTipo)) {
                $tarjetapuntosdetalleTipo = str_replace('*', '%', $tarjetapuntosdetalleTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_TIPO, $tarjetapuntosdetalleTipo, $comparison);
    }

    /**
     * Filter the query on the tarjetapuntosdetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByTarjetapuntosdetalleCantidad(1234); // WHERE tarjetapuntosdetalle_cantidad = 1234
     * $query->filterByTarjetapuntosdetalleCantidad(array(12, 34)); // WHERE tarjetapuntosdetalle_cantidad IN (12, 34)
     * $query->filterByTarjetapuntosdetalleCantidad(array('min' => 12)); // WHERE tarjetapuntosdetalle_cantidad >= 12
     * $query->filterByTarjetapuntosdetalleCantidad(array('max' => 12)); // WHERE tarjetapuntosdetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $tarjetapuntosdetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TarjetapuntosdetalleQuery The current query, for fluid interface
     */
    public function filterByTarjetapuntosdetalleCantidad($tarjetapuntosdetalleCantidad = null, $comparison = null)
    {
        if (is_array($tarjetapuntosdetalleCantidad)) {
            $useMinMax = false;
            if (isset($tarjetapuntosdetalleCantidad['min'])) {
                $this->addUsingAlias(TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_CANTIDAD, $tarjetapuntosdetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tarjetapuntosdetalleCantidad['max'])) {
                $this->addUsingAlias(TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_CANTIDAD, $tarjetapuntosdetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TarjetapuntosdetallePeer::TARJETAPUNTOSDETALLE_CANTIDAD, $tarjetapuntosdetalleCantidad, $comparison);
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
     * @return TarjetapuntosdetalleQuery The current query, for fluid interface
     */
    public function filterByIdventa($idventa = null, $comparison = null)
    {
        if (is_array($idventa)) {
            $useMinMax = false;
            if (isset($idventa['min'])) {
                $this->addUsingAlias(TarjetapuntosdetallePeer::IDVENTA, $idventa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventa['max'])) {
                $this->addUsingAlias(TarjetapuntosdetallePeer::IDVENTA, $idventa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TarjetapuntosdetallePeer::IDVENTA, $idventa, $comparison);
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
     * @return TarjetapuntosdetalleQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(TarjetapuntosdetallePeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(TarjetapuntosdetallePeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TarjetapuntosdetallePeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TarjetapuntosdetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(TarjetapuntosdetallePeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TarjetapuntosdetallePeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return TarjetapuntosdetalleQuery The current query, for fluid interface
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
     * Filter the query by a related Tarjetapuntos object
     *
     * @param   Tarjetapuntos|PropelObjectCollection $tarjetapuntos The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TarjetapuntosdetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTarjetapuntos($tarjetapuntos, $comparison = null)
    {
        if ($tarjetapuntos instanceof Tarjetapuntos) {
            return $this
                ->addUsingAlias(TarjetapuntosdetallePeer::IDTARJETAPUNTOS, $tarjetapuntos->getIdtarjetapuntos(), $comparison);
        } elseif ($tarjetapuntos instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TarjetapuntosdetallePeer::IDTARJETAPUNTOS, $tarjetapuntos->toKeyValue('PrimaryKey', 'Idtarjetapuntos'), $comparison);
        } else {
            throw new PropelException('filterByTarjetapuntos() only accepts arguments of type Tarjetapuntos or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tarjetapuntos relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TarjetapuntosdetalleQuery The current query, for fluid interface
     */
    public function joinTarjetapuntos($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tarjetapuntos');

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
            $this->addJoinObject($join, 'Tarjetapuntos');
        }

        return $this;
    }

    /**
     * Use the Tarjetapuntos relation Tarjetapuntos object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TarjetapuntosQuery A secondary query class using the current class as primary query
     */
    public function useTarjetapuntosQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTarjetapuntos($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tarjetapuntos', 'TarjetapuntosQuery');
    }

    /**
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TarjetapuntosdetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVenta($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(TarjetapuntosdetallePeer::IDVENTA, $venta->getIdventa(), $comparison);
        } elseif ($venta instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TarjetapuntosdetallePeer::IDVENTA, $venta->toKeyValue('PrimaryKey', 'Idventa'), $comparison);
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
     * @return TarjetapuntosdetalleQuery The current query, for fluid interface
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
     * @param   Tarjetapuntosdetalle $tarjetapuntosdetalle Object to remove from the list of results
     *
     * @return TarjetapuntosdetalleQuery The current query, for fluid interface
     */
    public function prune($tarjetapuntosdetalle = null)
    {
        if ($tarjetapuntosdetalle) {
            $this->addUsingAlias(TarjetapuntosdetallePeer::IDTARJETAPUNTOSDETALLE, $tarjetapuntosdetalle->getIdtarjetapuntosdetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
