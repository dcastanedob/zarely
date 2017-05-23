<?php


/**
 * Base class that represents a query for the 'clienterelacionado' table.
 *
 *
 *
 * @method ClienterelacionadoQuery orderByIdclienterelacionado($order = Criteria::ASC) Order by the idclienterelacionado column
 * @method ClienterelacionadoQuery orderByIdcliente($order = Criteria::ASC) Order by the idcliente column
 * @method ClienterelacionadoQuery orderByIdclienteasociado($order = Criteria::ASC) Order by the idclienteasociado column
 *
 * @method ClienterelacionadoQuery groupByIdclienterelacionado() Group by the idclienterelacionado column
 * @method ClienterelacionadoQuery groupByIdcliente() Group by the idcliente column
 * @method ClienterelacionadoQuery groupByIdclienteasociado() Group by the idclienteasociado column
 *
 * @method ClienterelacionadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ClienterelacionadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ClienterelacionadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ClienterelacionadoQuery leftJoinClienteRelatedByIdcliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClienteRelatedByIdcliente relation
 * @method ClienterelacionadoQuery rightJoinClienteRelatedByIdcliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClienteRelatedByIdcliente relation
 * @method ClienterelacionadoQuery innerJoinClienteRelatedByIdcliente($relationAlias = null) Adds a INNER JOIN clause to the query using the ClienteRelatedByIdcliente relation
 *
 * @method ClienterelacionadoQuery leftJoinClienteRelatedByIdclienteasociado($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClienteRelatedByIdclienteasociado relation
 * @method ClienterelacionadoQuery rightJoinClienteRelatedByIdclienteasociado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClienteRelatedByIdclienteasociado relation
 * @method ClienterelacionadoQuery innerJoinClienteRelatedByIdclienteasociado($relationAlias = null) Adds a INNER JOIN clause to the query using the ClienteRelatedByIdclienteasociado relation
 *
 * @method Clienterelacionado findOne(PropelPDO $con = null) Return the first Clienterelacionado matching the query
 * @method Clienterelacionado findOneOrCreate(PropelPDO $con = null) Return the first Clienterelacionado matching the query, or a new Clienterelacionado object populated from the query conditions when no match is found
 *
 * @method Clienterelacionado findOneByIdcliente(int $idcliente) Return the first Clienterelacionado filtered by the idcliente column
 * @method Clienterelacionado findOneByIdclienteasociado(int $idclienteasociado) Return the first Clienterelacionado filtered by the idclienteasociado column
 *
 * @method array findByIdclienterelacionado(int $idclienterelacionado) Return Clienterelacionado objects filtered by the idclienterelacionado column
 * @method array findByIdcliente(int $idcliente) Return Clienterelacionado objects filtered by the idcliente column
 * @method array findByIdclienteasociado(int $idclienteasociado) Return Clienterelacionado objects filtered by the idclienteasociado column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseClienterelacionadoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseClienterelacionadoQuery object.
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
            $modelName = 'Clienterelacionado';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ClienterelacionadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ClienterelacionadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ClienterelacionadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ClienterelacionadoQuery) {
            return $criteria;
        }
        $query = new ClienterelacionadoQuery(null, null, $modelAlias);

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
     * @return   Clienterelacionado|Clienterelacionado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ClienterelacionadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ClienterelacionadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Clienterelacionado A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdclienterelacionado($key, $con = null)
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
     * @return                 Clienterelacionado A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idclienterelacionado`, `idcliente`, `idclienteasociado` FROM `clienterelacionado` WHERE `idclienterelacionado` = :p0';
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
            $obj = new Clienterelacionado();
            $obj->hydrate($row);
            ClienterelacionadoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Clienterelacionado|Clienterelacionado[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Clienterelacionado[]|mixed the list of results, formatted by the current formatter
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
     * @return ClienterelacionadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ClienterelacionadoPeer::IDCLIENTERELACIONADO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ClienterelacionadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ClienterelacionadoPeer::IDCLIENTERELACIONADO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idclienterelacionado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdclienterelacionado(1234); // WHERE idclienterelacionado = 1234
     * $query->filterByIdclienterelacionado(array(12, 34)); // WHERE idclienterelacionado IN (12, 34)
     * $query->filterByIdclienterelacionado(array('min' => 12)); // WHERE idclienterelacionado >= 12
     * $query->filterByIdclienterelacionado(array('max' => 12)); // WHERE idclienterelacionado <= 12
     * </code>
     *
     * @param     mixed $idclienterelacionado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienterelacionadoQuery The current query, for fluid interface
     */
    public function filterByIdclienterelacionado($idclienterelacionado = null, $comparison = null)
    {
        if (is_array($idclienterelacionado)) {
            $useMinMax = false;
            if (isset($idclienterelacionado['min'])) {
                $this->addUsingAlias(ClienterelacionadoPeer::IDCLIENTERELACIONADO, $idclienterelacionado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclienterelacionado['max'])) {
                $this->addUsingAlias(ClienterelacionadoPeer::IDCLIENTERELACIONADO, $idclienterelacionado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClienterelacionadoPeer::IDCLIENTERELACIONADO, $idclienterelacionado, $comparison);
    }

    /**
     * Filter the query on the idcliente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcliente(1234); // WHERE idcliente = 1234
     * $query->filterByIdcliente(array(12, 34)); // WHERE idcliente IN (12, 34)
     * $query->filterByIdcliente(array('min' => 12)); // WHERE idcliente >= 12
     * $query->filterByIdcliente(array('max' => 12)); // WHERE idcliente <= 12
     * </code>
     *
     * @see       filterByClienteRelatedByIdcliente()
     *
     * @param     mixed $idcliente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienterelacionadoQuery The current query, for fluid interface
     */
    public function filterByIdcliente($idcliente = null, $comparison = null)
    {
        if (is_array($idcliente)) {
            $useMinMax = false;
            if (isset($idcliente['min'])) {
                $this->addUsingAlias(ClienterelacionadoPeer::IDCLIENTE, $idcliente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcliente['max'])) {
                $this->addUsingAlias(ClienterelacionadoPeer::IDCLIENTE, $idcliente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClienterelacionadoPeer::IDCLIENTE, $idcliente, $comparison);
    }

    /**
     * Filter the query on the idclienteasociado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdclienteasociado(1234); // WHERE idclienteasociado = 1234
     * $query->filterByIdclienteasociado(array(12, 34)); // WHERE idclienteasociado IN (12, 34)
     * $query->filterByIdclienteasociado(array('min' => 12)); // WHERE idclienteasociado >= 12
     * $query->filterByIdclienteasociado(array('max' => 12)); // WHERE idclienteasociado <= 12
     * </code>
     *
     * @see       filterByClienteRelatedByIdclienteasociado()
     *
     * @param     mixed $idclienteasociado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienterelacionadoQuery The current query, for fluid interface
     */
    public function filterByIdclienteasociado($idclienteasociado = null, $comparison = null)
    {
        if (is_array($idclienteasociado)) {
            $useMinMax = false;
            if (isset($idclienteasociado['min'])) {
                $this->addUsingAlias(ClienterelacionadoPeer::IDCLIENTEASOCIADO, $idclienteasociado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idclienteasociado['max'])) {
                $this->addUsingAlias(ClienterelacionadoPeer::IDCLIENTEASOCIADO, $idclienteasociado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClienterelacionadoPeer::IDCLIENTEASOCIADO, $idclienteasociado, $comparison);
    }

    /**
     * Filter the query by a related Cliente object
     *
     * @param   Cliente|PropelObjectCollection $cliente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClienterelacionadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClienteRelatedByIdcliente($cliente, $comparison = null)
    {
        if ($cliente instanceof Cliente) {
            return $this
                ->addUsingAlias(ClienterelacionadoPeer::IDCLIENTE, $cliente->getIdcliente(), $comparison);
        } elseif ($cliente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ClienterelacionadoPeer::IDCLIENTE, $cliente->toKeyValue('PrimaryKey', 'Idcliente'), $comparison);
        } else {
            throw new PropelException('filterByClienteRelatedByIdcliente() only accepts arguments of type Cliente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClienteRelatedByIdcliente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClienterelacionadoQuery The current query, for fluid interface
     */
    public function joinClienteRelatedByIdcliente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClienteRelatedByIdcliente');

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
            $this->addJoinObject($join, 'ClienteRelatedByIdcliente');
        }

        return $this;
    }

    /**
     * Use the ClienteRelatedByIdcliente relation Cliente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClienteQuery A secondary query class using the current class as primary query
     */
    public function useClienteRelatedByIdclienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinClienteRelatedByIdcliente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClienteRelatedByIdcliente', 'ClienteQuery');
    }

    /**
     * Filter the query by a related Cliente object
     *
     * @param   Cliente|PropelObjectCollection $cliente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClienterelacionadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClienteRelatedByIdclienteasociado($cliente, $comparison = null)
    {
        if ($cliente instanceof Cliente) {
            return $this
                ->addUsingAlias(ClienterelacionadoPeer::IDCLIENTEASOCIADO, $cliente->getIdcliente(), $comparison);
        } elseif ($cliente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ClienterelacionadoPeer::IDCLIENTEASOCIADO, $cliente->toKeyValue('PrimaryKey', 'Idcliente'), $comparison);
        } else {
            throw new PropelException('filterByClienteRelatedByIdclienteasociado() only accepts arguments of type Cliente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClienteRelatedByIdclienteasociado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClienterelacionadoQuery The current query, for fluid interface
     */
    public function joinClienteRelatedByIdclienteasociado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClienteRelatedByIdclienteasociado');

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
            $this->addJoinObject($join, 'ClienteRelatedByIdclienteasociado');
        }

        return $this;
    }

    /**
     * Use the ClienteRelatedByIdclienteasociado relation Cliente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClienteQuery A secondary query class using the current class as primary query
     */
    public function useClienteRelatedByIdclienteasociadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinClienteRelatedByIdclienteasociado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClienteRelatedByIdclienteasociado', 'ClienteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Clienterelacionado $clienterelacionado Object to remove from the list of results
     *
     * @return ClienterelacionadoQuery The current query, for fluid interface
     */
    public function prune($clienterelacionado = null)
    {
        if ($clienterelacionado) {
            $this->addUsingAlias(ClienterelacionadoPeer::IDCLIENTERELACIONADO, $clienterelacionado->getIdclienterelacionado(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
