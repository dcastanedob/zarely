<?php


/**
 * Base class that represents a query for the 'devoluciondetalle' table.
 *
 *
 *
 * @method DevoluciondetalleQuery orderByIddevoluciondetalle($order = Criteria::ASC) Order by the iddevoluciondetalle column
 * @method DevoluciondetalleQuery orderByIddevolucion($order = Criteria::ASC) Order by the iddevolucion column
 * @method DevoluciondetalleQuery orderByIdproductovariante($order = Criteria::ASC) Order by the idproductovariante column
 * @method DevoluciondetalleQuery orderByDevoluciondetalleCantidad($order = Criteria::ASC) Order by the devoluciondetalle_cantidad column
 * @method DevoluciondetalleQuery orderByDevoluciondetallePreciounitario($order = Criteria::ASC) Order by the devoluciondetalle_preciounitario column
 * @method DevoluciondetalleQuery orderByDevoluciondetalleSubtotal($order = Criteria::ASC) Order by the devoluciondetalle_subtotal column
 *
 * @method DevoluciondetalleQuery groupByIddevoluciondetalle() Group by the iddevoluciondetalle column
 * @method DevoluciondetalleQuery groupByIddevolucion() Group by the iddevolucion column
 * @method DevoluciondetalleQuery groupByIdproductovariante() Group by the idproductovariante column
 * @method DevoluciondetalleQuery groupByDevoluciondetalleCantidad() Group by the devoluciondetalle_cantidad column
 * @method DevoluciondetalleQuery groupByDevoluciondetallePreciounitario() Group by the devoluciondetalle_preciounitario column
 * @method DevoluciondetalleQuery groupByDevoluciondetalleSubtotal() Group by the devoluciondetalle_subtotal column
 *
 * @method DevoluciondetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DevoluciondetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DevoluciondetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DevoluciondetalleQuery leftJoinDevolucion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Devolucion relation
 * @method DevoluciondetalleQuery rightJoinDevolucion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Devolucion relation
 * @method DevoluciondetalleQuery innerJoinDevolucion($relationAlias = null) Adds a INNER JOIN clause to the query using the Devolucion relation
 *
 * @method DevoluciondetalleQuery leftJoinProductovariante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productovariante relation
 * @method DevoluciondetalleQuery rightJoinProductovariante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productovariante relation
 * @method DevoluciondetalleQuery innerJoinProductovariante($relationAlias = null) Adds a INNER JOIN clause to the query using the Productovariante relation
 *
 * @method Devoluciondetalle findOne(PropelPDO $con = null) Return the first Devoluciondetalle matching the query
 * @method Devoluciondetalle findOneOrCreate(PropelPDO $con = null) Return the first Devoluciondetalle matching the query, or a new Devoluciondetalle object populated from the query conditions when no match is found
 *
 * @method Devoluciondetalle findOneByIddevolucion(int $iddevolucion) Return the first Devoluciondetalle filtered by the iddevolucion column
 * @method Devoluciondetalle findOneByIdproductovariante(int $idproductovariante) Return the first Devoluciondetalle filtered by the idproductovariante column
 * @method Devoluciondetalle findOneByDevoluciondetalleCantidad(string $devoluciondetalle_cantidad) Return the first Devoluciondetalle filtered by the devoluciondetalle_cantidad column
 * @method Devoluciondetalle findOneByDevoluciondetallePreciounitario(string $devoluciondetalle_preciounitario) Return the first Devoluciondetalle filtered by the devoluciondetalle_preciounitario column
 * @method Devoluciondetalle findOneByDevoluciondetalleSubtotal(string $devoluciondetalle_subtotal) Return the first Devoluciondetalle filtered by the devoluciondetalle_subtotal column
 *
 * @method array findByIddevoluciondetalle(int $iddevoluciondetalle) Return Devoluciondetalle objects filtered by the iddevoluciondetalle column
 * @method array findByIddevolucion(int $iddevolucion) Return Devoluciondetalle objects filtered by the iddevolucion column
 * @method array findByIdproductovariante(int $idproductovariante) Return Devoluciondetalle objects filtered by the idproductovariante column
 * @method array findByDevoluciondetalleCantidad(string $devoluciondetalle_cantidad) Return Devoluciondetalle objects filtered by the devoluciondetalle_cantidad column
 * @method array findByDevoluciondetallePreciounitario(string $devoluciondetalle_preciounitario) Return Devoluciondetalle objects filtered by the devoluciondetalle_preciounitario column
 * @method array findByDevoluciondetalleSubtotal(string $devoluciondetalle_subtotal) Return Devoluciondetalle objects filtered by the devoluciondetalle_subtotal column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseDevoluciondetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDevoluciondetalleQuery object.
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
            $modelName = 'Devoluciondetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DevoluciondetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DevoluciondetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DevoluciondetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DevoluciondetalleQuery) {
            return $criteria;
        }
        $query = new DevoluciondetalleQuery(null, null, $modelAlias);

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
     * @return   Devoluciondetalle|Devoluciondetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DevoluciondetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DevoluciondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Devoluciondetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIddevoluciondetalle($key, $con = null)
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
     * @return                 Devoluciondetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `iddevoluciondetalle`, `iddevolucion`, `idproductovariante`, `devoluciondetalle_cantidad`, `devoluciondetalle_preciounitario`, `devoluciondetalle_subtotal` FROM `devoluciondetalle` WHERE `iddevoluciondetalle` = :p0';
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
            $obj = new Devoluciondetalle();
            $obj->hydrate($row);
            DevoluciondetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Devoluciondetalle|Devoluciondetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Devoluciondetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the iddevoluciondetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIddevoluciondetalle(1234); // WHERE iddevoluciondetalle = 1234
     * $query->filterByIddevoluciondetalle(array(12, 34)); // WHERE iddevoluciondetalle IN (12, 34)
     * $query->filterByIddevoluciondetalle(array('min' => 12)); // WHERE iddevoluciondetalle >= 12
     * $query->filterByIddevoluciondetalle(array('max' => 12)); // WHERE iddevoluciondetalle <= 12
     * </code>
     *
     * @param     mixed $iddevoluciondetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByIddevoluciondetalle($iddevoluciondetalle = null, $comparison = null)
    {
        if (is_array($iddevoluciondetalle)) {
            $useMinMax = false;
            if (isset($iddevoluciondetalle['min'])) {
                $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, $iddevoluciondetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddevoluciondetalle['max'])) {
                $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, $iddevoluciondetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, $iddevoluciondetalle, $comparison);
    }

    /**
     * Filter the query on the iddevolucion column
     *
     * Example usage:
     * <code>
     * $query->filterByIddevolucion(1234); // WHERE iddevolucion = 1234
     * $query->filterByIddevolucion(array(12, 34)); // WHERE iddevolucion IN (12, 34)
     * $query->filterByIddevolucion(array('min' => 12)); // WHERE iddevolucion >= 12
     * $query->filterByIddevolucion(array('max' => 12)); // WHERE iddevolucion <= 12
     * </code>
     *
     * @see       filterByDevolucion()
     *
     * @param     mixed $iddevolucion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByIddevolucion($iddevolucion = null, $comparison = null)
    {
        if (is_array($iddevolucion)) {
            $useMinMax = false;
            if (isset($iddevolucion['min'])) {
                $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCION, $iddevolucion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddevolucion['max'])) {
                $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCION, $iddevolucion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCION, $iddevolucion, $comparison);
    }

    /**
     * Filter the query on the idproductovariante column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductovariante(1234); // WHERE idproductovariante = 1234
     * $query->filterByIdproductovariante(array(12, 34)); // WHERE idproductovariante IN (12, 34)
     * $query->filterByIdproductovariante(array('min' => 12)); // WHERE idproductovariante >= 12
     * $query->filterByIdproductovariante(array('max' => 12)); // WHERE idproductovariante <= 12
     * </code>
     *
     * @see       filterByProductovariante()
     *
     * @param     mixed $idproductovariante The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByIdproductovariante($idproductovariante = null, $comparison = null)
    {
        if (is_array($idproductovariante)) {
            $useMinMax = false;
            if (isset($idproductovariante['min'])) {
                $this->addUsingAlias(DevoluciondetallePeer::IDPRODUCTOVARIANTE, $idproductovariante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductovariante['max'])) {
                $this->addUsingAlias(DevoluciondetallePeer::IDPRODUCTOVARIANTE, $idproductovariante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevoluciondetallePeer::IDPRODUCTOVARIANTE, $idproductovariante, $comparison);
    }

    /**
     * Filter the query on the devoluciondetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByDevoluciondetalleCantidad(1234); // WHERE devoluciondetalle_cantidad = 1234
     * $query->filterByDevoluciondetalleCantidad(array(12, 34)); // WHERE devoluciondetalle_cantidad IN (12, 34)
     * $query->filterByDevoluciondetalleCantidad(array('min' => 12)); // WHERE devoluciondetalle_cantidad >= 12
     * $query->filterByDevoluciondetalleCantidad(array('max' => 12)); // WHERE devoluciondetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $devoluciondetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByDevoluciondetalleCantidad($devoluciondetalleCantidad = null, $comparison = null)
    {
        if (is_array($devoluciondetalleCantidad)) {
            $useMinMax = false;
            if (isset($devoluciondetalleCantidad['min'])) {
                $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_CANTIDAD, $devoluciondetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devoluciondetalleCantidad['max'])) {
                $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_CANTIDAD, $devoluciondetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_CANTIDAD, $devoluciondetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the devoluciondetalle_preciounitario column
     *
     * Example usage:
     * <code>
     * $query->filterByDevoluciondetallePreciounitario(1234); // WHERE devoluciondetalle_preciounitario = 1234
     * $query->filterByDevoluciondetallePreciounitario(array(12, 34)); // WHERE devoluciondetalle_preciounitario IN (12, 34)
     * $query->filterByDevoluciondetallePreciounitario(array('min' => 12)); // WHERE devoluciondetalle_preciounitario >= 12
     * $query->filterByDevoluciondetallePreciounitario(array('max' => 12)); // WHERE devoluciondetalle_preciounitario <= 12
     * </code>
     *
     * @param     mixed $devoluciondetallePreciounitario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByDevoluciondetallePreciounitario($devoluciondetallePreciounitario = null, $comparison = null)
    {
        if (is_array($devoluciondetallePreciounitario)) {
            $useMinMax = false;
            if (isset($devoluciondetallePreciounitario['min'])) {
                $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_PRECIOUNITARIO, $devoluciondetallePreciounitario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devoluciondetallePreciounitario['max'])) {
                $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_PRECIOUNITARIO, $devoluciondetallePreciounitario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_PRECIOUNITARIO, $devoluciondetallePreciounitario, $comparison);
    }

    /**
     * Filter the query on the devoluciondetalle_subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterByDevoluciondetalleSubtotal(1234); // WHERE devoluciondetalle_subtotal = 1234
     * $query->filterByDevoluciondetalleSubtotal(array(12, 34)); // WHERE devoluciondetalle_subtotal IN (12, 34)
     * $query->filterByDevoluciondetalleSubtotal(array('min' => 12)); // WHERE devoluciondetalle_subtotal >= 12
     * $query->filterByDevoluciondetalleSubtotal(array('max' => 12)); // WHERE devoluciondetalle_subtotal <= 12
     * </code>
     *
     * @param     mixed $devoluciondetalleSubtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function filterByDevoluciondetalleSubtotal($devoluciondetalleSubtotal = null, $comparison = null)
    {
        if (is_array($devoluciondetalleSubtotal)) {
            $useMinMax = false;
            if (isset($devoluciondetalleSubtotal['min'])) {
                $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_SUBTOTAL, $devoluciondetalleSubtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devoluciondetalleSubtotal['max'])) {
                $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_SUBTOTAL, $devoluciondetalleSubtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevoluciondetallePeer::DEVOLUCIONDETALLE_SUBTOTAL, $devoluciondetalleSubtotal, $comparison);
    }

    /**
     * Filter the query by a related Devolucion object
     *
     * @param   Devolucion|PropelObjectCollection $devolucion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DevoluciondetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDevolucion($devolucion, $comparison = null)
    {
        if ($devolucion instanceof Devolucion) {
            return $this
                ->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCION, $devolucion->getIddevolucion(), $comparison);
        } elseif ($devolucion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCION, $devolucion->toKeyValue('PrimaryKey', 'Iddevolucion'), $comparison);
        } else {
            throw new PropelException('filterByDevolucion() only accepts arguments of type Devolucion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Devolucion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function joinDevolucion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Devolucion');

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
            $this->addJoinObject($join, 'Devolucion');
        }

        return $this;
    }

    /**
     * Use the Devolucion relation Devolucion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DevolucionQuery A secondary query class using the current class as primary query
     */
    public function useDevolucionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDevolucion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Devolucion', 'DevolucionQuery');
    }

    /**
     * Filter the query by a related Productovariante object
     *
     * @param   Productovariante|PropelObjectCollection $productovariante The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DevoluciondetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductovariante($productovariante, $comparison = null)
    {
        if ($productovariante instanceof Productovariante) {
            return $this
                ->addUsingAlias(DevoluciondetallePeer::IDPRODUCTOVARIANTE, $productovariante->getIdproductovariante(), $comparison);
        } elseif ($productovariante instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DevoluciondetallePeer::IDPRODUCTOVARIANTE, $productovariante->toKeyValue('PrimaryKey', 'Idproductovariante'), $comparison);
        } else {
            throw new PropelException('filterByProductovariante() only accepts arguments of type Productovariante or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productovariante relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function joinProductovariante($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productovariante');

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
            $this->addJoinObject($join, 'Productovariante');
        }

        return $this;
    }

    /**
     * Use the Productovariante relation Productovariante object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductovarianteQuery A secondary query class using the current class as primary query
     */
    public function useProductovarianteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductovariante($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productovariante', 'ProductovarianteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Devoluciondetalle $devoluciondetalle Object to remove from the list of results
     *
     * @return DevoluciondetalleQuery The current query, for fluid interface
     */
    public function prune($devoluciondetalle = null)
    {
        if ($devoluciondetalle) {
            $this->addUsingAlias(DevoluciondetallePeer::IDDEVOLUCIONDETALLE, $devoluciondetalle->getIddevoluciondetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
