<?php


/**
 * Base class that represents a query for the 'proveedormarca' table.
 *
 *
 *
 * @method ProveedormarcaQuery orderByIdproveedormarca($order = Criteria::ASC) Order by the idproveedormarca column
 * @method ProveedormarcaQuery orderByIdproveedor($order = Criteria::ASC) Order by the idproveedor column
 * @method ProveedormarcaQuery orderByIdmarca($order = Criteria::ASC) Order by the idmarca column
 *
 * @method ProveedormarcaQuery groupByIdproveedormarca() Group by the idproveedormarca column
 * @method ProveedormarcaQuery groupByIdproveedor() Group by the idproveedor column
 * @method ProveedormarcaQuery groupByIdmarca() Group by the idmarca column
 *
 * @method ProveedormarcaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProveedormarcaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProveedormarcaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProveedormarcaQuery leftJoinMarca($relationAlias = null) Adds a LEFT JOIN clause to the query using the Marca relation
 * @method ProveedormarcaQuery rightJoinMarca($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Marca relation
 * @method ProveedormarcaQuery innerJoinMarca($relationAlias = null) Adds a INNER JOIN clause to the query using the Marca relation
 *
 * @method ProveedormarcaQuery leftJoinProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedor relation
 * @method ProveedormarcaQuery rightJoinProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedor relation
 * @method ProveedormarcaQuery innerJoinProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedor relation
 *
 * @method Proveedormarca findOne(PropelPDO $con = null) Return the first Proveedormarca matching the query
 * @method Proveedormarca findOneOrCreate(PropelPDO $con = null) Return the first Proveedormarca matching the query, or a new Proveedormarca object populated from the query conditions when no match is found
 *
 * @method Proveedormarca findOneByIdproveedor(int $idproveedor) Return the first Proveedormarca filtered by the idproveedor column
 * @method Proveedormarca findOneByIdmarca(int $idmarca) Return the first Proveedormarca filtered by the idmarca column
 *
 * @method array findByIdproveedormarca(int $idproveedormarca) Return Proveedormarca objects filtered by the idproveedormarca column
 * @method array findByIdproveedor(int $idproveedor) Return Proveedormarca objects filtered by the idproveedor column
 * @method array findByIdmarca(int $idmarca) Return Proveedormarca objects filtered by the idmarca column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseProveedormarcaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProveedormarcaQuery object.
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
            $modelName = 'Proveedormarca';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProveedormarcaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProveedormarcaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProveedormarcaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProveedormarcaQuery) {
            return $criteria;
        }
        $query = new ProveedormarcaQuery(null, null, $modelAlias);

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
     * @return   Proveedormarca|Proveedormarca[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProveedormarcaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProveedormarcaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Proveedormarca A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproveedormarca($key, $con = null)
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
     * @return                 Proveedormarca A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproveedormarca`, `idproveedor`, `idmarca` FROM `proveedormarca` WHERE `idproveedormarca` = :p0';
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
            $obj = new Proveedormarca();
            $obj->hydrate($row);
            ProveedormarcaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Proveedormarca|Proveedormarca[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Proveedormarca[]|mixed the list of results, formatted by the current formatter
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
     * @return ProveedormarcaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProveedormarcaPeer::IDPROVEEDORMARCA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProveedormarcaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProveedormarcaPeer::IDPROVEEDORMARCA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idproveedormarca column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproveedormarca(1234); // WHERE idproveedormarca = 1234
     * $query->filterByIdproveedormarca(array(12, 34)); // WHERE idproveedormarca IN (12, 34)
     * $query->filterByIdproveedormarca(array('min' => 12)); // WHERE idproveedormarca >= 12
     * $query->filterByIdproveedormarca(array('max' => 12)); // WHERE idproveedormarca <= 12
     * </code>
     *
     * @param     mixed $idproveedormarca The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedormarcaQuery The current query, for fluid interface
     */
    public function filterByIdproveedormarca($idproveedormarca = null, $comparison = null)
    {
        if (is_array($idproveedormarca)) {
            $useMinMax = false;
            if (isset($idproveedormarca['min'])) {
                $this->addUsingAlias(ProveedormarcaPeer::IDPROVEEDORMARCA, $idproveedormarca['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedormarca['max'])) {
                $this->addUsingAlias(ProveedormarcaPeer::IDPROVEEDORMARCA, $idproveedormarca['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedormarcaPeer::IDPROVEEDORMARCA, $idproveedormarca, $comparison);
    }

    /**
     * Filter the query on the idproveedor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproveedor(1234); // WHERE idproveedor = 1234
     * $query->filterByIdproveedor(array(12, 34)); // WHERE idproveedor IN (12, 34)
     * $query->filterByIdproveedor(array('min' => 12)); // WHERE idproveedor >= 12
     * $query->filterByIdproveedor(array('max' => 12)); // WHERE idproveedor <= 12
     * </code>
     *
     * @see       filterByProveedor()
     *
     * @param     mixed $idproveedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedormarcaQuery The current query, for fluid interface
     */
    public function filterByIdproveedor($idproveedor = null, $comparison = null)
    {
        if (is_array($idproveedor)) {
            $useMinMax = false;
            if (isset($idproveedor['min'])) {
                $this->addUsingAlias(ProveedormarcaPeer::IDPROVEEDOR, $idproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedor['max'])) {
                $this->addUsingAlias(ProveedormarcaPeer::IDPROVEEDOR, $idproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedormarcaPeer::IDPROVEEDOR, $idproveedor, $comparison);
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
     * @return ProveedormarcaQuery The current query, for fluid interface
     */
    public function filterByIdmarca($idmarca = null, $comparison = null)
    {
        if (is_array($idmarca)) {
            $useMinMax = false;
            if (isset($idmarca['min'])) {
                $this->addUsingAlias(ProveedormarcaPeer::IDMARCA, $idmarca['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmarca['max'])) {
                $this->addUsingAlias(ProveedormarcaPeer::IDMARCA, $idmarca['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedormarcaPeer::IDMARCA, $idmarca, $comparison);
    }

    /**
     * Filter the query by a related Marca object
     *
     * @param   Marca|PropelObjectCollection $marca The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedormarcaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMarca($marca, $comparison = null)
    {
        if ($marca instanceof Marca) {
            return $this
                ->addUsingAlias(ProveedormarcaPeer::IDMARCA, $marca->getIdmarca(), $comparison);
        } elseif ($marca instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProveedormarcaPeer::IDMARCA, $marca->toKeyValue('PrimaryKey', 'Idmarca'), $comparison);
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
     * @return ProveedormarcaQuery The current query, for fluid interface
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
     * Filter the query by a related Proveedor object
     *
     * @param   Proveedor|PropelObjectCollection $proveedor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedormarcaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedor($proveedor, $comparison = null)
    {
        if ($proveedor instanceof Proveedor) {
            return $this
                ->addUsingAlias(ProveedormarcaPeer::IDPROVEEDOR, $proveedor->getIdproveedor(), $comparison);
        } elseif ($proveedor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProveedormarcaPeer::IDPROVEEDOR, $proveedor->toKeyValue('PrimaryKey', 'Idproveedor'), $comparison);
        } else {
            throw new PropelException('filterByProveedor() only accepts arguments of type Proveedor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Proveedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProveedormarcaQuery The current query, for fluid interface
     */
    public function joinProveedor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Proveedor');

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
            $this->addJoinObject($join, 'Proveedor');
        }

        return $this;
    }

    /**
     * Use the Proveedor relation Proveedor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProveedorQuery A secondary query class using the current class as primary query
     */
    public function useProveedorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProveedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Proveedor', 'ProveedorQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Proveedormarca $proveedormarca Object to remove from the list of results
     *
     * @return ProveedormarcaQuery The current query, for fluid interface
     */
    public function prune($proveedormarca = null)
    {
        if ($proveedormarca) {
            $this->addUsingAlias(ProveedormarcaPeer::IDPROVEEDORMARCA, $proveedormarca->getIdproveedormarca(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
