<?php


/**
 * Base class that represents a query for the 'vale' table.
 *
 *
 *
 * @method ValeQuery orderByIdvale($order = Criteria::ASC) Order by the idvale column
 * @method ValeQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method ValeQuery orderByValeCantidad($order = Criteria::ASC) Order by the vale_cantidad column
 * @method ValeQuery orderByValeEstatus($order = Criteria::ASC) Order by the vale_estatus column
 * @method ValeQuery orderByValeVigenciadesde($order = Criteria::ASC) Order by the vale_vigenciadesde column
 * @method ValeQuery orderByValeVigenciahasta($order = Criteria::ASC) Order by the vale_vigenciahasta column
 * @method ValeQuery orderByValeCantidadutilizada($order = Criteria::ASC) Order by the vale_cantidadutilizada column
 *
 * @method ValeQuery groupByIdvale() Group by the idvale column
 * @method ValeQuery groupByIdsucursal() Group by the idsucursal column
 * @method ValeQuery groupByValeCantidad() Group by the vale_cantidad column
 * @method ValeQuery groupByValeEstatus() Group by the vale_estatus column
 * @method ValeQuery groupByValeVigenciadesde() Group by the vale_vigenciadesde column
 * @method ValeQuery groupByValeVigenciahasta() Group by the vale_vigenciahasta column
 * @method ValeQuery groupByValeCantidadutilizada() Group by the vale_cantidadutilizada column
 *
 * @method ValeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ValeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ValeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ValeQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method ValeQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method ValeQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method Vale findOne(PropelPDO $con = null) Return the first Vale matching the query
 * @method Vale findOneOrCreate(PropelPDO $con = null) Return the first Vale matching the query, or a new Vale object populated from the query conditions when no match is found
 *
 * @method Vale findOneByIdsucursal(int $idsucursal) Return the first Vale filtered by the idsucursal column
 * @method Vale findOneByValeCantidad(string $vale_cantidad) Return the first Vale filtered by the vale_cantidad column
 * @method Vale findOneByValeEstatus(boolean $vale_estatus) Return the first Vale filtered by the vale_estatus column
 * @method Vale findOneByValeVigenciadesde(string $vale_vigenciadesde) Return the first Vale filtered by the vale_vigenciadesde column
 * @method Vale findOneByValeVigenciahasta(string $vale_vigenciahasta) Return the first Vale filtered by the vale_vigenciahasta column
 * @method Vale findOneByValeCantidadutilizada(string $vale_cantidadutilizada) Return the first Vale filtered by the vale_cantidadutilizada column
 *
 * @method array findByIdvale(int $idvale) Return Vale objects filtered by the idvale column
 * @method array findByIdsucursal(int $idsucursal) Return Vale objects filtered by the idsucursal column
 * @method array findByValeCantidad(string $vale_cantidad) Return Vale objects filtered by the vale_cantidad column
 * @method array findByValeEstatus(boolean $vale_estatus) Return Vale objects filtered by the vale_estatus column
 * @method array findByValeVigenciadesde(string $vale_vigenciadesde) Return Vale objects filtered by the vale_vigenciadesde column
 * @method array findByValeVigenciahasta(string $vale_vigenciahasta) Return Vale objects filtered by the vale_vigenciahasta column
 * @method array findByValeCantidadutilizada(string $vale_cantidadutilizada) Return Vale objects filtered by the vale_cantidadutilizada column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseValeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseValeQuery object.
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
            $modelName = 'Vale';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ValeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ValeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ValeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ValeQuery) {
            return $criteria;
        }
        $query = new ValeQuery(null, null, $modelAlias);

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
     * @return   Vale|Vale[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ValePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ValePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Vale A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdvale($key, $con = null)
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
     * @return                 Vale A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idvale`, `idsucursal`, `vale_cantidad`, `vale_estatus`, `vale_vigenciadesde`, `vale_vigenciahasta`, `vale_cantidadutilizada` FROM `vale` WHERE `idvale` = :p0';
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
            $obj = new Vale();
            $obj->hydrate($row);
            ValePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Vale|Vale[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Vale[]|mixed the list of results, formatted by the current formatter
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
     * @return ValeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ValePeer::IDVALE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ValeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ValePeer::IDVALE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idvale column
     *
     * Example usage:
     * <code>
     * $query->filterByIdvale(1234); // WHERE idvale = 1234
     * $query->filterByIdvale(array(12, 34)); // WHERE idvale IN (12, 34)
     * $query->filterByIdvale(array('min' => 12)); // WHERE idvale >= 12
     * $query->filterByIdvale(array('max' => 12)); // WHERE idvale <= 12
     * </code>
     *
     * @param     mixed $idvale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ValeQuery The current query, for fluid interface
     */
    public function filterByIdvale($idvale = null, $comparison = null)
    {
        if (is_array($idvale)) {
            $useMinMax = false;
            if (isset($idvale['min'])) {
                $this->addUsingAlias(ValePeer::IDVALE, $idvale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idvale['max'])) {
                $this->addUsingAlias(ValePeer::IDVALE, $idvale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ValePeer::IDVALE, $idvale, $comparison);
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
     * @return ValeQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(ValePeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(ValePeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ValePeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the vale_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByValeCantidad(1234); // WHERE vale_cantidad = 1234
     * $query->filterByValeCantidad(array(12, 34)); // WHERE vale_cantidad IN (12, 34)
     * $query->filterByValeCantidad(array('min' => 12)); // WHERE vale_cantidad >= 12
     * $query->filterByValeCantidad(array('max' => 12)); // WHERE vale_cantidad <= 12
     * </code>
     *
     * @param     mixed $valeCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ValeQuery The current query, for fluid interface
     */
    public function filterByValeCantidad($valeCantidad = null, $comparison = null)
    {
        if (is_array($valeCantidad)) {
            $useMinMax = false;
            if (isset($valeCantidad['min'])) {
                $this->addUsingAlias(ValePeer::VALE_CANTIDAD, $valeCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeCantidad['max'])) {
                $this->addUsingAlias(ValePeer::VALE_CANTIDAD, $valeCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ValePeer::VALE_CANTIDAD, $valeCantidad, $comparison);
    }

    /**
     * Filter the query on the vale_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByValeEstatus(true); // WHERE vale_estatus = true
     * $query->filterByValeEstatus('yes'); // WHERE vale_estatus = true
     * </code>
     *
     * @param     boolean|string $valeEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ValeQuery The current query, for fluid interface
     */
    public function filterByValeEstatus($valeEstatus = null, $comparison = null)
    {
        if (is_string($valeEstatus)) {
            $valeEstatus = in_array(strtolower($valeEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ValePeer::VALE_ESTATUS, $valeEstatus, $comparison);
    }

    /**
     * Filter the query on the vale_vigenciadesde column
     *
     * Example usage:
     * <code>
     * $query->filterByValeVigenciadesde('2011-03-14'); // WHERE vale_vigenciadesde = '2011-03-14'
     * $query->filterByValeVigenciadesde('now'); // WHERE vale_vigenciadesde = '2011-03-14'
     * $query->filterByValeVigenciadesde(array('max' => 'yesterday')); // WHERE vale_vigenciadesde < '2011-03-13'
     * </code>
     *
     * @param     mixed $valeVigenciadesde The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ValeQuery The current query, for fluid interface
     */
    public function filterByValeVigenciadesde($valeVigenciadesde = null, $comparison = null)
    {
        if (is_array($valeVigenciadesde)) {
            $useMinMax = false;
            if (isset($valeVigenciadesde['min'])) {
                $this->addUsingAlias(ValePeer::VALE_VIGENCIADESDE, $valeVigenciadesde['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeVigenciadesde['max'])) {
                $this->addUsingAlias(ValePeer::VALE_VIGENCIADESDE, $valeVigenciadesde['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ValePeer::VALE_VIGENCIADESDE, $valeVigenciadesde, $comparison);
    }

    /**
     * Filter the query on the vale_vigenciahasta column
     *
     * Example usage:
     * <code>
     * $query->filterByValeVigenciahasta('2011-03-14'); // WHERE vale_vigenciahasta = '2011-03-14'
     * $query->filterByValeVigenciahasta('now'); // WHERE vale_vigenciahasta = '2011-03-14'
     * $query->filterByValeVigenciahasta(array('max' => 'yesterday')); // WHERE vale_vigenciahasta < '2011-03-13'
     * </code>
     *
     * @param     mixed $valeVigenciahasta The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ValeQuery The current query, for fluid interface
     */
    public function filterByValeVigenciahasta($valeVigenciahasta = null, $comparison = null)
    {
        if (is_array($valeVigenciahasta)) {
            $useMinMax = false;
            if (isset($valeVigenciahasta['min'])) {
                $this->addUsingAlias(ValePeer::VALE_VIGENCIAHASTA, $valeVigenciahasta['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeVigenciahasta['max'])) {
                $this->addUsingAlias(ValePeer::VALE_VIGENCIAHASTA, $valeVigenciahasta['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ValePeer::VALE_VIGENCIAHASTA, $valeVigenciahasta, $comparison);
    }

    /**
     * Filter the query on the vale_cantidadutilizada column
     *
     * Example usage:
     * <code>
     * $query->filterByValeCantidadutilizada(1234); // WHERE vale_cantidadutilizada = 1234
     * $query->filterByValeCantidadutilizada(array(12, 34)); // WHERE vale_cantidadutilizada IN (12, 34)
     * $query->filterByValeCantidadutilizada(array('min' => 12)); // WHERE vale_cantidadutilizada >= 12
     * $query->filterByValeCantidadutilizada(array('max' => 12)); // WHERE vale_cantidadutilizada <= 12
     * </code>
     *
     * @param     mixed $valeCantidadutilizada The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ValeQuery The current query, for fluid interface
     */
    public function filterByValeCantidadutilizada($valeCantidadutilizada = null, $comparison = null)
    {
        if (is_array($valeCantidadutilizada)) {
            $useMinMax = false;
            if (isset($valeCantidadutilizada['min'])) {
                $this->addUsingAlias(ValePeer::VALE_CANTIDADUTILIZADA, $valeCantidadutilizada['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeCantidadutilizada['max'])) {
                $this->addUsingAlias(ValePeer::VALE_CANTIDADUTILIZADA, $valeCantidadutilizada['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ValePeer::VALE_CANTIDADUTILIZADA, $valeCantidadutilizada, $comparison);
    }

    /**
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ValeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(ValePeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ValePeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return ValeQuery The current query, for fluid interface
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
     * @param   Vale $vale Object to remove from the list of results
     *
     * @return ValeQuery The current query, for fluid interface
     */
    public function prune($vale = null)
    {
        if ($vale) {
            $this->addUsingAlias(ValePeer::IDVALE, $vale->getIdvale(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
