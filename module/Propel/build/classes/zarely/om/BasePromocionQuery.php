<?php


/**
 * Base class that represents a query for the 'promocion' table.
 *
 *
 *
 * @method PromocionQuery orderByIdpromocion($order = Criteria::ASC) Order by the idpromocion column
 * @method PromocionQuery orderByPromocionNombre($order = Criteria::ASC) Order by the promocion_nombre column
 * @method PromocionQuery orderByPromocionFechainicio($order = Criteria::ASC) Order by the promocion_fechainicio column
 * @method PromocionQuery orderByPromocionFechafin($order = Criteria::ASC) Order by the promocion_fechafin column
 * @method PromocionQuery orderByPromocionEstatus($order = Criteria::ASC) Order by the promocion_estatus column
 * @method PromocionQuery orderByPromocionDescripcion($order = Criteria::ASC) Order by the promocion_descripcion column
 *
 * @method PromocionQuery groupByIdpromocion() Group by the idpromocion column
 * @method PromocionQuery groupByPromocionNombre() Group by the promocion_nombre column
 * @method PromocionQuery groupByPromocionFechainicio() Group by the promocion_fechainicio column
 * @method PromocionQuery groupByPromocionFechafin() Group by the promocion_fechafin column
 * @method PromocionQuery groupByPromocionEstatus() Group by the promocion_estatus column
 * @method PromocionQuery groupByPromocionDescripcion() Group by the promocion_descripcion column
 *
 * @method PromocionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PromocionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PromocionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PromocionQuery leftJoinPromociondetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Promociondetalle relation
 * @method PromocionQuery rightJoinPromociondetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Promociondetalle relation
 * @method PromocionQuery innerJoinPromociondetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Promociondetalle relation
 *
 * @method Promocion findOne(PropelPDO $con = null) Return the first Promocion matching the query
 * @method Promocion findOneOrCreate(PropelPDO $con = null) Return the first Promocion matching the query, or a new Promocion object populated from the query conditions when no match is found
 *
 * @method Promocion findOneByPromocionNombre(string $promocion_nombre) Return the first Promocion filtered by the promocion_nombre column
 * @method Promocion findOneByPromocionFechainicio(string $promocion_fechainicio) Return the first Promocion filtered by the promocion_fechainicio column
 * @method Promocion findOneByPromocionFechafin(string $promocion_fechafin) Return the first Promocion filtered by the promocion_fechafin column
 * @method Promocion findOneByPromocionEstatus(boolean $promocion_estatus) Return the first Promocion filtered by the promocion_estatus column
 * @method Promocion findOneByPromocionDescripcion(string $promocion_descripcion) Return the first Promocion filtered by the promocion_descripcion column
 *
 * @method array findByIdpromocion(int $idpromocion) Return Promocion objects filtered by the idpromocion column
 * @method array findByPromocionNombre(string $promocion_nombre) Return Promocion objects filtered by the promocion_nombre column
 * @method array findByPromocionFechainicio(string $promocion_fechainicio) Return Promocion objects filtered by the promocion_fechainicio column
 * @method array findByPromocionFechafin(string $promocion_fechafin) Return Promocion objects filtered by the promocion_fechafin column
 * @method array findByPromocionEstatus(boolean $promocion_estatus) Return Promocion objects filtered by the promocion_estatus column
 * @method array findByPromocionDescripcion(string $promocion_descripcion) Return Promocion objects filtered by the promocion_descripcion column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BasePromocionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePromocionQuery object.
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
            $modelName = 'Promocion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PromocionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PromocionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PromocionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PromocionQuery) {
            return $criteria;
        }
        $query = new PromocionQuery(null, null, $modelAlias);

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
     * @return   Promocion|Promocion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PromocionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PromocionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Promocion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpromocion($key, $con = null)
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
     * @return                 Promocion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpromocion`, `promocion_nombre`, `promocion_fechainicio`, `promocion_fechafin`, `promocion_estatus`, `promocion_descripcion` FROM `promocion` WHERE `idpromocion` = :p0';
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
            $obj = new Promocion();
            $obj->hydrate($row);
            PromocionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Promocion|Promocion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Promocion[]|mixed the list of results, formatted by the current formatter
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
     * @return PromocionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PromocionPeer::IDPROMOCION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PromocionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PromocionPeer::IDPROMOCION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idpromocion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpromocion(1234); // WHERE idpromocion = 1234
     * $query->filterByIdpromocion(array(12, 34)); // WHERE idpromocion IN (12, 34)
     * $query->filterByIdpromocion(array('min' => 12)); // WHERE idpromocion >= 12
     * $query->filterByIdpromocion(array('max' => 12)); // WHERE idpromocion <= 12
     * </code>
     *
     * @param     mixed $idpromocion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromocionQuery The current query, for fluid interface
     */
    public function filterByIdpromocion($idpromocion = null, $comparison = null)
    {
        if (is_array($idpromocion)) {
            $useMinMax = false;
            if (isset($idpromocion['min'])) {
                $this->addUsingAlias(PromocionPeer::IDPROMOCION, $idpromocion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpromocion['max'])) {
                $this->addUsingAlias(PromocionPeer::IDPROMOCION, $idpromocion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PromocionPeer::IDPROMOCION, $idpromocion, $comparison);
    }

    /**
     * Filter the query on the promocion_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByPromocionNombre('fooValue');   // WHERE promocion_nombre = 'fooValue'
     * $query->filterByPromocionNombre('%fooValue%'); // WHERE promocion_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $promocionNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromocionQuery The current query, for fluid interface
     */
    public function filterByPromocionNombre($promocionNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($promocionNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $promocionNombre)) {
                $promocionNombre = str_replace('*', '%', $promocionNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PromocionPeer::PROMOCION_NOMBRE, $promocionNombre, $comparison);
    }

    /**
     * Filter the query on the promocion_fechainicio column
     *
     * Example usage:
     * <code>
     * $query->filterByPromocionFechainicio('2011-03-14'); // WHERE promocion_fechainicio = '2011-03-14'
     * $query->filterByPromocionFechainicio('now'); // WHERE promocion_fechainicio = '2011-03-14'
     * $query->filterByPromocionFechainicio(array('max' => 'yesterday')); // WHERE promocion_fechainicio < '2011-03-13'
     * </code>
     *
     * @param     mixed $promocionFechainicio The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromocionQuery The current query, for fluid interface
     */
    public function filterByPromocionFechainicio($promocionFechainicio = null, $comparison = null)
    {
        if (is_array($promocionFechainicio)) {
            $useMinMax = false;
            if (isset($promocionFechainicio['min'])) {
                $this->addUsingAlias(PromocionPeer::PROMOCION_FECHAINICIO, $promocionFechainicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($promocionFechainicio['max'])) {
                $this->addUsingAlias(PromocionPeer::PROMOCION_FECHAINICIO, $promocionFechainicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PromocionPeer::PROMOCION_FECHAINICIO, $promocionFechainicio, $comparison);
    }

    /**
     * Filter the query on the promocion_fechafin column
     *
     * Example usage:
     * <code>
     * $query->filterByPromocionFechafin('2011-03-14'); // WHERE promocion_fechafin = '2011-03-14'
     * $query->filterByPromocionFechafin('now'); // WHERE promocion_fechafin = '2011-03-14'
     * $query->filterByPromocionFechafin(array('max' => 'yesterday')); // WHERE promocion_fechafin < '2011-03-13'
     * </code>
     *
     * @param     mixed $promocionFechafin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromocionQuery The current query, for fluid interface
     */
    public function filterByPromocionFechafin($promocionFechafin = null, $comparison = null)
    {
        if (is_array($promocionFechafin)) {
            $useMinMax = false;
            if (isset($promocionFechafin['min'])) {
                $this->addUsingAlias(PromocionPeer::PROMOCION_FECHAFIN, $promocionFechafin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($promocionFechafin['max'])) {
                $this->addUsingAlias(PromocionPeer::PROMOCION_FECHAFIN, $promocionFechafin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PromocionPeer::PROMOCION_FECHAFIN, $promocionFechafin, $comparison);
    }

    /**
     * Filter the query on the promocion_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByPromocionEstatus(true); // WHERE promocion_estatus = true
     * $query->filterByPromocionEstatus('yes'); // WHERE promocion_estatus = true
     * </code>
     *
     * @param     boolean|string $promocionEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromocionQuery The current query, for fluid interface
     */
    public function filterByPromocionEstatus($promocionEstatus = null, $comparison = null)
    {
        if (is_string($promocionEstatus)) {
            $promocionEstatus = in_array(strtolower($promocionEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(PromocionPeer::PROMOCION_ESTATUS, $promocionEstatus, $comparison);
    }

    /**
     * Filter the query on the promocion_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByPromocionDescripcion('fooValue');   // WHERE promocion_descripcion = 'fooValue'
     * $query->filterByPromocionDescripcion('%fooValue%'); // WHERE promocion_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $promocionDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromocionQuery The current query, for fluid interface
     */
    public function filterByPromocionDescripcion($promocionDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($promocionDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $promocionDescripcion)) {
                $promocionDescripcion = str_replace('*', '%', $promocionDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PromocionPeer::PROMOCION_DESCRIPCION, $promocionDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Promociondetalle object
     *
     * @param   Promociondetalle|PropelObjectCollection $promociondetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PromocionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPromociondetalle($promociondetalle, $comparison = null)
    {
        if ($promociondetalle instanceof Promociondetalle) {
            return $this
                ->addUsingAlias(PromocionPeer::IDPROMOCION, $promociondetalle->getIdpromocion(), $comparison);
        } elseif ($promociondetalle instanceof PropelObjectCollection) {
            return $this
                ->usePromociondetalleQuery()
                ->filterByPrimaryKeys($promociondetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPromociondetalle() only accepts arguments of type Promociondetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Promociondetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PromocionQuery The current query, for fluid interface
     */
    public function joinPromociondetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Promociondetalle');

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
            $this->addJoinObject($join, 'Promociondetalle');
        }

        return $this;
    }

    /**
     * Use the Promociondetalle relation Promociondetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PromociondetalleQuery A secondary query class using the current class as primary query
     */
    public function usePromociondetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPromociondetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Promociondetalle', 'PromociondetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Promocion $promocion Object to remove from the list of results
     *
     * @return PromocionQuery The current query, for fluid interface
     */
    public function prune($promocion = null)
    {
        if ($promocion) {
            $this->addUsingAlias(PromocionPeer::IDPROMOCION, $promocion->getIdpromocion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
