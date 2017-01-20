<?php


/**
 * Base class that represents a query for the 'temporada' table.
 *
 *
 *
 * @method TemporadaQuery orderByIdtemporada($order = Criteria::ASC) Order by the idtemporada column
 * @method TemporadaQuery orderByTemporadaNombre($order = Criteria::ASC) Order by the temporada_nombre column
 *
 * @method TemporadaQuery groupByIdtemporada() Group by the idtemporada column
 * @method TemporadaQuery groupByTemporadaNombre() Group by the temporada_nombre column
 *
 * @method TemporadaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TemporadaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TemporadaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TemporadaQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method TemporadaQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method TemporadaQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method Temporada findOne(PropelPDO $con = null) Return the first Temporada matching the query
 * @method Temporada findOneOrCreate(PropelPDO $con = null) Return the first Temporada matching the query, or a new Temporada object populated from the query conditions when no match is found
 *
 * @method Temporada findOneByTemporadaNombre(string $temporada_nombre) Return the first Temporada filtered by the temporada_nombre column
 *
 * @method array findByIdtemporada(int $idtemporada) Return Temporada objects filtered by the idtemporada column
 * @method array findByTemporadaNombre(string $temporada_nombre) Return Temporada objects filtered by the temporada_nombre column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseTemporadaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTemporadaQuery object.
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
            $modelName = 'Temporada';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TemporadaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TemporadaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TemporadaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TemporadaQuery) {
            return $criteria;
        }
        $query = new TemporadaQuery(null, null, $modelAlias);

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
     * @return   Temporada|Temporada[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TemporadaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TemporadaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Temporada A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdtemporada($key, $con = null)
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
     * @return                 Temporada A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idtemporada`, `temporada_nombre` FROM `temporada` WHERE `idtemporada` = :p0';
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
            $obj = new Temporada();
            $obj->hydrate($row);
            TemporadaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Temporada|Temporada[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Temporada[]|mixed the list of results, formatted by the current formatter
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
     * @return TemporadaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TemporadaPeer::IDTEMPORADA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TemporadaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TemporadaPeer::IDTEMPORADA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idtemporada column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtemporada(1234); // WHERE idtemporada = 1234
     * $query->filterByIdtemporada(array(12, 34)); // WHERE idtemporada IN (12, 34)
     * $query->filterByIdtemporada(array('min' => 12)); // WHERE idtemporada >= 12
     * $query->filterByIdtemporada(array('max' => 12)); // WHERE idtemporada <= 12
     * </code>
     *
     * @param     mixed $idtemporada The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TemporadaQuery The current query, for fluid interface
     */
    public function filterByIdtemporada($idtemporada = null, $comparison = null)
    {
        if (is_array($idtemporada)) {
            $useMinMax = false;
            if (isset($idtemporada['min'])) {
                $this->addUsingAlias(TemporadaPeer::IDTEMPORADA, $idtemporada['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtemporada['max'])) {
                $this->addUsingAlias(TemporadaPeer::IDTEMPORADA, $idtemporada['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TemporadaPeer::IDTEMPORADA, $idtemporada, $comparison);
    }

    /**
     * Filter the query on the temporada_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByTemporadaNombre('fooValue');   // WHERE temporada_nombre = 'fooValue'
     * $query->filterByTemporadaNombre('%fooValue%'); // WHERE temporada_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $temporadaNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TemporadaQuery The current query, for fluid interface
     */
    public function filterByTemporadaNombre($temporadaNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($temporadaNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $temporadaNombre)) {
                $temporadaNombre = str_replace('*', '%', $temporadaNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TemporadaPeer::TEMPORADA_NOMBRE, $temporadaNombre, $comparison);
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TemporadaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(TemporadaPeer::IDTEMPORADA, $producto->getIdtemporada(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            return $this
                ->useProductoQuery()
                ->filterByPrimaryKeys($producto->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProducto() only accepts arguments of type Producto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Producto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TemporadaQuery The current query, for fluid interface
     */
    public function joinProducto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Producto');

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
            $this->addJoinObject($join, 'Producto');
        }

        return $this;
    }

    /**
     * Use the Producto relation Producto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoQuery A secondary query class using the current class as primary query
     */
    public function useProductoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProducto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Producto', 'ProductoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Temporada $temporada Object to remove from the list of results
     *
     * @return TemporadaQuery The current query, for fluid interface
     */
    public function prune($temporada = null)
    {
        if ($temporada) {
            $this->addUsingAlias(TemporadaPeer::IDTEMPORADA, $temporada->getIdtemporada(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
