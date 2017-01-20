<?php


/**
 * Base class that represents a query for the 'marcatallaje' table.
 *
 *
 *
 * @method MarcatallajeQuery orderByIdmarcatallaje($order = Criteria::ASC) Order by the idmarcatallaje column
 * @method MarcatallajeQuery orderByIdmarca($order = Criteria::ASC) Order by the idmarca column
 * @method MarcatallajeQuery orderByIdtallaje($order = Criteria::ASC) Order by the idtallaje column
 *
 * @method MarcatallajeQuery groupByIdmarcatallaje() Group by the idmarcatallaje column
 * @method MarcatallajeQuery groupByIdmarca() Group by the idmarca column
 * @method MarcatallajeQuery groupByIdtallaje() Group by the idtallaje column
 *
 * @method MarcatallajeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MarcatallajeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MarcatallajeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MarcatallajeQuery leftJoinMarca($relationAlias = null) Adds a LEFT JOIN clause to the query using the Marca relation
 * @method MarcatallajeQuery rightJoinMarca($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Marca relation
 * @method MarcatallajeQuery innerJoinMarca($relationAlias = null) Adds a INNER JOIN clause to the query using the Marca relation
 *
 * @method MarcatallajeQuery leftJoinTallaje($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tallaje relation
 * @method MarcatallajeQuery rightJoinTallaje($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tallaje relation
 * @method MarcatallajeQuery innerJoinTallaje($relationAlias = null) Adds a INNER JOIN clause to the query using the Tallaje relation
 *
 * @method Marcatallaje findOne(PropelPDO $con = null) Return the first Marcatallaje matching the query
 * @method Marcatallaje findOneOrCreate(PropelPDO $con = null) Return the first Marcatallaje matching the query, or a new Marcatallaje object populated from the query conditions when no match is found
 *
 * @method Marcatallaje findOneByIdmarca(int $idmarca) Return the first Marcatallaje filtered by the idmarca column
 * @method Marcatallaje findOneByIdtallaje(int $idtallaje) Return the first Marcatallaje filtered by the idtallaje column
 *
 * @method array findByIdmarcatallaje(int $idmarcatallaje) Return Marcatallaje objects filtered by the idmarcatallaje column
 * @method array findByIdmarca(int $idmarca) Return Marcatallaje objects filtered by the idmarca column
 * @method array findByIdtallaje(int $idtallaje) Return Marcatallaje objects filtered by the idtallaje column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseMarcatallajeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMarcatallajeQuery object.
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
            $modelName = 'Marcatallaje';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MarcatallajeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MarcatallajeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MarcatallajeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MarcatallajeQuery) {
            return $criteria;
        }
        $query = new MarcatallajeQuery(null, null, $modelAlias);

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
     * @return   Marcatallaje|Marcatallaje[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MarcatallajePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MarcatallajePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Marcatallaje A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdmarcatallaje($key, $con = null)
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
     * @return                 Marcatallaje A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idmarcatallaje`, `idmarca`, `idtallaje` FROM `marcatallaje` WHERE `idmarcatallaje` = :p0';
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
            $obj = new Marcatallaje();
            $obj->hydrate($row);
            MarcatallajePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Marcatallaje|Marcatallaje[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Marcatallaje[]|mixed the list of results, formatted by the current formatter
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
     * @return MarcatallajeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MarcatallajePeer::IDMARCATALLAJE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MarcatallajeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MarcatallajePeer::IDMARCATALLAJE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idmarcatallaje column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmarcatallaje(1234); // WHERE idmarcatallaje = 1234
     * $query->filterByIdmarcatallaje(array(12, 34)); // WHERE idmarcatallaje IN (12, 34)
     * $query->filterByIdmarcatallaje(array('min' => 12)); // WHERE idmarcatallaje >= 12
     * $query->filterByIdmarcatallaje(array('max' => 12)); // WHERE idmarcatallaje <= 12
     * </code>
     *
     * @param     mixed $idmarcatallaje The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MarcatallajeQuery The current query, for fluid interface
     */
    public function filterByIdmarcatallaje($idmarcatallaje = null, $comparison = null)
    {
        if (is_array($idmarcatallaje)) {
            $useMinMax = false;
            if (isset($idmarcatallaje['min'])) {
                $this->addUsingAlias(MarcatallajePeer::IDMARCATALLAJE, $idmarcatallaje['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmarcatallaje['max'])) {
                $this->addUsingAlias(MarcatallajePeer::IDMARCATALLAJE, $idmarcatallaje['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MarcatallajePeer::IDMARCATALLAJE, $idmarcatallaje, $comparison);
    }

    /**
     * Filter the query on the idmarca column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmarca(1234); // WHERE idmarca = 1234
     * $query->filterByIdmarca(array(12, 34)); // WHERE idmarca IN (12, 34)
     * $query->filterByIdmarca(array('min' => 12)); // WHERE idmarca >= 12
     * $query->filterByIdmarca(array('max' => 12)); // WHERE idmarca <= 12
     * </code>
     *
     * @see       filterByMarca()
     *
     * @param     mixed $idmarca The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MarcatallajeQuery The current query, for fluid interface
     */
    public function filterByIdmarca($idmarca = null, $comparison = null)
    {
        if (is_array($idmarca)) {
            $useMinMax = false;
            if (isset($idmarca['min'])) {
                $this->addUsingAlias(MarcatallajePeer::IDMARCA, $idmarca['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmarca['max'])) {
                $this->addUsingAlias(MarcatallajePeer::IDMARCA, $idmarca['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MarcatallajePeer::IDMARCA, $idmarca, $comparison);
    }

    /**
     * Filter the query on the idtallaje column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtallaje(1234); // WHERE idtallaje = 1234
     * $query->filterByIdtallaje(array(12, 34)); // WHERE idtallaje IN (12, 34)
     * $query->filterByIdtallaje(array('min' => 12)); // WHERE idtallaje >= 12
     * $query->filterByIdtallaje(array('max' => 12)); // WHERE idtallaje <= 12
     * </code>
     *
     * @see       filterByTallaje()
     *
     * @param     mixed $idtallaje The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MarcatallajeQuery The current query, for fluid interface
     */
    public function filterByIdtallaje($idtallaje = null, $comparison = null)
    {
        if (is_array($idtallaje)) {
            $useMinMax = false;
            if (isset($idtallaje['min'])) {
                $this->addUsingAlias(MarcatallajePeer::IDTALLAJE, $idtallaje['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtallaje['max'])) {
                $this->addUsingAlias(MarcatallajePeer::IDTALLAJE, $idtallaje['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MarcatallajePeer::IDTALLAJE, $idtallaje, $comparison);
    }

    /**
     * Filter the query by a related Marca object
     *
     * @param   Marca|PropelObjectCollection $marca The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MarcatallajeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMarca($marca, $comparison = null)
    {
        if ($marca instanceof Marca) {
            return $this
                ->addUsingAlias(MarcatallajePeer::IDMARCA, $marca->getIdmarca(), $comparison);
        } elseif ($marca instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MarcatallajePeer::IDMARCA, $marca->toKeyValue('PrimaryKey', 'Idmarca'), $comparison);
        } else {
            throw new PropelException('filterByMarca() only accepts arguments of type Marca or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Marca relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MarcatallajeQuery The current query, for fluid interface
     */
    public function joinMarca($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Marca');

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
            $this->addJoinObject($join, 'Marca');
        }

        return $this;
    }

    /**
     * Use the Marca relation Marca object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MarcaQuery A secondary query class using the current class as primary query
     */
    public function useMarcaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMarca($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Marca', 'MarcaQuery');
    }

    /**
     * Filter the query by a related Tallaje object
     *
     * @param   Tallaje|PropelObjectCollection $tallaje The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MarcatallajeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTallaje($tallaje, $comparison = null)
    {
        if ($tallaje instanceof Tallaje) {
            return $this
                ->addUsingAlias(MarcatallajePeer::IDTALLAJE, $tallaje->getIdtallaje(), $comparison);
        } elseif ($tallaje instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MarcatallajePeer::IDTALLAJE, $tallaje->toKeyValue('PrimaryKey', 'Idtallaje'), $comparison);
        } else {
            throw new PropelException('filterByTallaje() only accepts arguments of type Tallaje or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tallaje relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MarcatallajeQuery The current query, for fluid interface
     */
    public function joinTallaje($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tallaje');

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
            $this->addJoinObject($join, 'Tallaje');
        }

        return $this;
    }

    /**
     * Use the Tallaje relation Tallaje object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TallajeQuery A secondary query class using the current class as primary query
     */
    public function useTallajeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTallaje($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tallaje', 'TallajeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Marcatallaje $marcatallaje Object to remove from the list of results
     *
     * @return MarcatallajeQuery The current query, for fluid interface
     */
    public function prune($marcatallaje = null)
    {
        if ($marcatallaje) {
            $this->addUsingAlias(MarcatallajePeer::IDMARCATALLAJE, $marcatallaje->getIdmarcatallaje(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
