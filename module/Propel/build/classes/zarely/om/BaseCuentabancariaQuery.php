<?php


/**
 * Base class that represents a query for the 'cuentabancaria' table.
 *
 *
 *
 * @method CuentabancariaQuery orderByIdcuentabancaria($order = Criteria::ASC) Order by the idcuentabancaria column
 * @method CuentabancariaQuery orderByCuentabancariaBanco($order = Criteria::ASC) Order by the cuentabancaria_banco column
 * @method CuentabancariaQuery orderByCuentabancariaCuenta($order = Criteria::ASC) Order by the cuentabancaria_cuenta column
 * @method CuentabancariaQuery orderByCuentabancariaSaldo($order = Criteria::ASC) Order by the cuentabancaria_saldo column
 *
 * @method CuentabancariaQuery groupByIdcuentabancaria() Group by the idcuentabancaria column
 * @method CuentabancariaQuery groupByCuentabancariaBanco() Group by the cuentabancaria_banco column
 * @method CuentabancariaQuery groupByCuentabancariaCuenta() Group by the cuentabancaria_cuenta column
 * @method CuentabancariaQuery groupByCuentabancariaSaldo() Group by the cuentabancaria_saldo column
 *
 * @method CuentabancariaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CuentabancariaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CuentabancariaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CuentabancariaQuery leftJoinCuentabancariamovimiento($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cuentabancariamovimiento relation
 * @method CuentabancariaQuery rightJoinCuentabancariamovimiento($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cuentabancariamovimiento relation
 * @method CuentabancariaQuery innerJoinCuentabancariamovimiento($relationAlias = null) Adds a INNER JOIN clause to the query using the Cuentabancariamovimiento relation
 *
 * @method Cuentabancaria findOne(PropelPDO $con = null) Return the first Cuentabancaria matching the query
 * @method Cuentabancaria findOneOrCreate(PropelPDO $con = null) Return the first Cuentabancaria matching the query, or a new Cuentabancaria object populated from the query conditions when no match is found
 *
 * @method Cuentabancaria findOneByCuentabancariaBanco(string $cuentabancaria_banco) Return the first Cuentabancaria filtered by the cuentabancaria_banco column
 * @method Cuentabancaria findOneByCuentabancariaCuenta(string $cuentabancaria_cuenta) Return the first Cuentabancaria filtered by the cuentabancaria_cuenta column
 * @method Cuentabancaria findOneByCuentabancariaSaldo(string $cuentabancaria_saldo) Return the first Cuentabancaria filtered by the cuentabancaria_saldo column
 *
 * @method array findByIdcuentabancaria(int $idcuentabancaria) Return Cuentabancaria objects filtered by the idcuentabancaria column
 * @method array findByCuentabancariaBanco(string $cuentabancaria_banco) Return Cuentabancaria objects filtered by the cuentabancaria_banco column
 * @method array findByCuentabancariaCuenta(string $cuentabancaria_cuenta) Return Cuentabancaria objects filtered by the cuentabancaria_cuenta column
 * @method array findByCuentabancariaSaldo(string $cuentabancaria_saldo) Return Cuentabancaria objects filtered by the cuentabancaria_saldo column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseCuentabancariaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCuentabancariaQuery object.
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
            $modelName = 'Cuentabancaria';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CuentabancariaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CuentabancariaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CuentabancariaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CuentabancariaQuery) {
            return $criteria;
        }
        $query = new CuentabancariaQuery(null, null, $modelAlias);

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
     * @return   Cuentabancaria|Cuentabancaria[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CuentabancariaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CuentabancariaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cuentabancaria A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcuentabancaria($key, $con = null)
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
     * @return                 Cuentabancaria A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcuentabancaria`, `cuentabancaria_banco`, `cuentabancaria_cuenta`, `cuentabancaria_saldo` FROM `cuentabancaria` WHERE `idcuentabancaria` = :p0';
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
            $obj = new Cuentabancaria();
            $obj->hydrate($row);
            CuentabancariaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cuentabancaria|Cuentabancaria[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cuentabancaria[]|mixed the list of results, formatted by the current formatter
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
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $keys, Criteria::IN);
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
     * @param     mixed $idcuentabancaria The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function filterByIdcuentabancaria($idcuentabancaria = null, $comparison = null)
    {
        if (is_array($idcuentabancaria)) {
            $useMinMax = false;
            if (isset($idcuentabancaria['min'])) {
                $this->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $idcuentabancaria['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcuentabancaria['max'])) {
                $this->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $idcuentabancaria['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $idcuentabancaria, $comparison);
    }

    /**
     * Filter the query on the cuentabancaria_banco column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentabancariaBanco('fooValue');   // WHERE cuentabancaria_banco = 'fooValue'
     * $query->filterByCuentabancariaBanco('%fooValue%'); // WHERE cuentabancaria_banco LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cuentabancariaBanco The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function filterByCuentabancariaBanco($cuentabancariaBanco = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cuentabancariaBanco)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cuentabancariaBanco)) {
                $cuentabancariaBanco = str_replace('*', '%', $cuentabancariaBanco);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CuentabancariaPeer::CUENTABANCARIA_BANCO, $cuentabancariaBanco, $comparison);
    }

    /**
     * Filter the query on the cuentabancaria_cuenta column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentabancariaCuenta('fooValue');   // WHERE cuentabancaria_cuenta = 'fooValue'
     * $query->filterByCuentabancariaCuenta('%fooValue%'); // WHERE cuentabancaria_cuenta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cuentabancariaCuenta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function filterByCuentabancariaCuenta($cuentabancariaCuenta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cuentabancariaCuenta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cuentabancariaCuenta)) {
                $cuentabancariaCuenta = str_replace('*', '%', $cuentabancariaCuenta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CuentabancariaPeer::CUENTABANCARIA_CUENTA, $cuentabancariaCuenta, $comparison);
    }

    /**
     * Filter the query on the cuentabancaria_saldo column
     *
     * Example usage:
     * <code>
     * $query->filterByCuentabancariaSaldo(1234); // WHERE cuentabancaria_saldo = 1234
     * $query->filterByCuentabancariaSaldo(array(12, 34)); // WHERE cuentabancaria_saldo IN (12, 34)
     * $query->filterByCuentabancariaSaldo(array('min' => 12)); // WHERE cuentabancaria_saldo >= 12
     * $query->filterByCuentabancariaSaldo(array('max' => 12)); // WHERE cuentabancaria_saldo <= 12
     * </code>
     *
     * @param     mixed $cuentabancariaSaldo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function filterByCuentabancariaSaldo($cuentabancariaSaldo = null, $comparison = null)
    {
        if (is_array($cuentabancariaSaldo)) {
            $useMinMax = false;
            if (isset($cuentabancariaSaldo['min'])) {
                $this->addUsingAlias(CuentabancariaPeer::CUENTABANCARIA_SALDO, $cuentabancariaSaldo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cuentabancariaSaldo['max'])) {
                $this->addUsingAlias(CuentabancariaPeer::CUENTABANCARIA_SALDO, $cuentabancariaSaldo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CuentabancariaPeer::CUENTABANCARIA_SALDO, $cuentabancariaSaldo, $comparison);
    }

    /**
     * Filter the query by a related Cuentabancariamovimiento object
     *
     * @param   Cuentabancariamovimiento|PropelObjectCollection $cuentabancariamovimiento  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CuentabancariaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentabancariamovimiento($cuentabancariamovimiento, $comparison = null)
    {
        if ($cuentabancariamovimiento instanceof Cuentabancariamovimiento) {
            return $this
                ->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $cuentabancariamovimiento->getIdcuentabancaria(), $comparison);
        } elseif ($cuentabancariamovimiento instanceof PropelObjectCollection) {
            return $this
                ->useCuentabancariamovimientoQuery()
                ->filterByPrimaryKeys($cuentabancariamovimiento->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCuentabancariamovimiento() only accepts arguments of type Cuentabancariamovimiento or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cuentabancariamovimiento relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function joinCuentabancariamovimiento($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cuentabancariamovimiento');

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
            $this->addJoinObject($join, 'Cuentabancariamovimiento');
        }

        return $this;
    }

    /**
     * Use the Cuentabancariamovimiento relation Cuentabancariamovimiento object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CuentabancariamovimientoQuery A secondary query class using the current class as primary query
     */
    public function useCuentabancariamovimientoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCuentabancariamovimiento($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cuentabancariamovimiento', 'CuentabancariamovimientoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Cuentabancaria $cuentabancaria Object to remove from the list of results
     *
     * @return CuentabancariaQuery The current query, for fluid interface
     */
    public function prune($cuentabancaria = null)
    {
        if ($cuentabancaria) {
            $this->addUsingAlias(CuentabancariaPeer::IDCUENTABANCARIA, $cuentabancaria->getIdcuentabancaria(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
