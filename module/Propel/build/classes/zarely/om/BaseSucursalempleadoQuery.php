<?php


/**
 * Base class that represents a query for the 'sucursalempleado' table.
 *
 *
 *
 * @method SucursalempleadoQuery orderByIdsucursalempleado($order = Criteria::ASC) Order by the idsucursalempleado column
 * @method SucursalempleadoQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method SucursalempleadoQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method SucursalempleadoQuery orderBySucursalempleadoEstatus($order = Criteria::ASC) Order by the sucursalempleado_estatus column
 *
 * @method SucursalempleadoQuery groupByIdsucursalempleado() Group by the idsucursalempleado column
 * @method SucursalempleadoQuery groupByIdsucursal() Group by the idsucursal column
 * @method SucursalempleadoQuery groupByIdempleado() Group by the idempleado column
 * @method SucursalempleadoQuery groupBySucursalempleadoEstatus() Group by the sucursalempleado_estatus column
 *
 * @method SucursalempleadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SucursalempleadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SucursalempleadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SucursalempleadoQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method SucursalempleadoQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method SucursalempleadoQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method SucursalempleadoQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method SucursalempleadoQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method SucursalempleadoQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method Sucursalempleado findOne(PropelPDO $con = null) Return the first Sucursalempleado matching the query
 * @method Sucursalempleado findOneOrCreate(PropelPDO $con = null) Return the first Sucursalempleado matching the query, or a new Sucursalempleado object populated from the query conditions when no match is found
 *
 * @method Sucursalempleado findOneByIdsucursal(int $idsucursal) Return the first Sucursalempleado filtered by the idsucursal column
 * @method Sucursalempleado findOneByIdempleado(int $idempleado) Return the first Sucursalempleado filtered by the idempleado column
 * @method Sucursalempleado findOneBySucursalempleadoEstatus(boolean $sucursalempleado_estatus) Return the first Sucursalempleado filtered by the sucursalempleado_estatus column
 *
 * @method array findByIdsucursalempleado(int $idsucursalempleado) Return Sucursalempleado objects filtered by the idsucursalempleado column
 * @method array findByIdsucursal(int $idsucursal) Return Sucursalempleado objects filtered by the idsucursal column
 * @method array findByIdempleado(int $idempleado) Return Sucursalempleado objects filtered by the idempleado column
 * @method array findBySucursalempleadoEstatus(boolean $sucursalempleado_estatus) Return Sucursalempleado objects filtered by the sucursalempleado_estatus column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseSucursalempleadoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSucursalempleadoQuery object.
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
            $modelName = 'Sucursalempleado';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SucursalempleadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SucursalempleadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SucursalempleadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SucursalempleadoQuery) {
            return $criteria;
        }
        $query = new SucursalempleadoQuery(null, null, $modelAlias);

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
     * @return   Sucursalempleado|Sucursalempleado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SucursalempleadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SucursalempleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Sucursalempleado A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdsucursalempleado($key, $con = null)
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
     * @return                 Sucursalempleado A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idsucursalempleado`, `idsucursal`, `idempleado`, `sucursalempleado_estatus` FROM `sucursalempleado` WHERE `idsucursalempleado` = :p0';
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
            $obj = new Sucursalempleado();
            $obj->hydrate($row);
            SucursalempleadoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Sucursalempleado|Sucursalempleado[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Sucursalempleado[]|mixed the list of results, formatted by the current formatter
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
     * @return SucursalempleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SucursalempleadoPeer::IDSUCURSALEMPLEADO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SucursalempleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SucursalempleadoPeer::IDSUCURSALEMPLEADO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idsucursalempleado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsucursalempleado(1234); // WHERE idsucursalempleado = 1234
     * $query->filterByIdsucursalempleado(array(12, 34)); // WHERE idsucursalempleado IN (12, 34)
     * $query->filterByIdsucursalempleado(array('min' => 12)); // WHERE idsucursalempleado >= 12
     * $query->filterByIdsucursalempleado(array('max' => 12)); // WHERE idsucursalempleado <= 12
     * </code>
     *
     * @param     mixed $idsucursalempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalempleadoQuery The current query, for fluid interface
     */
    public function filterByIdsucursalempleado($idsucursalempleado = null, $comparison = null)
    {
        if (is_array($idsucursalempleado)) {
            $useMinMax = false;
            if (isset($idsucursalempleado['min'])) {
                $this->addUsingAlias(SucursalempleadoPeer::IDSUCURSALEMPLEADO, $idsucursalempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursalempleado['max'])) {
                $this->addUsingAlias(SucursalempleadoPeer::IDSUCURSALEMPLEADO, $idsucursalempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalempleadoPeer::IDSUCURSALEMPLEADO, $idsucursalempleado, $comparison);
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
     * @return SucursalempleadoQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(SucursalempleadoPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(SucursalempleadoPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalempleadoPeer::IDSUCURSAL, $idsucursal, $comparison);
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
     * @return SucursalempleadoQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(SucursalempleadoPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(SucursalempleadoPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalempleadoPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the sucursalempleado_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalempleadoEstatus(true); // WHERE sucursalempleado_estatus = true
     * $query->filterBySucursalempleadoEstatus('yes'); // WHERE sucursalempleado_estatus = true
     * </code>
     *
     * @param     boolean|string $sucursalempleadoEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalempleadoQuery The current query, for fluid interface
     */
    public function filterBySucursalempleadoEstatus($sucursalempleadoEstatus = null, $comparison = null)
    {
        if (is_string($sucursalempleadoEstatus)) {
            $sucursalempleadoEstatus = in_array(strtolower($sucursalempleadoEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(SucursalempleadoPeer::SUCURSALEMPLEADO_ESTATUS, $sucursalempleadoEstatus, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalempleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(SucursalempleadoPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SucursalempleadoPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return SucursalempleadoQuery The current query, for fluid interface
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
     * @return                 SucursalempleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(SucursalempleadoPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(SucursalempleadoPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return SucursalempleadoQuery The current query, for fluid interface
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
     * @param   Sucursalempleado $sucursalempleado Object to remove from the list of results
     *
     * @return SucursalempleadoQuery The current query, for fluid interface
     */
    public function prune($sucursalempleado = null)
    {
        if ($sucursalempleado) {
            $this->addUsingAlias(SucursalempleadoPeer::IDSUCURSALEMPLEADO, $sucursalempleado->getIdsucursalempleado(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
