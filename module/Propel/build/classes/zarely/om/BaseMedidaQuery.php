<?php


/**
 * Base class that represents a query for the 'medida' table.
 *
 *
 *
 * @method MedidaQuery orderByIdmedida($order = Criteria::ASC) Order by the idmedida column
 * @method MedidaQuery orderByMedidaNombre($order = Criteria::ASC) Order by the medida_nombre column
 * @method MedidaQuery orderByMedidaXs($order = Criteria::ASC) Order by the medida_xs column
 * @method MedidaQuery orderByMedidaS($order = Criteria::ASC) Order by the medida_s column
 * @method MedidaQuery orderByMedidaM($order = Criteria::ASC) Order by the medida_m column
 * @method MedidaQuery orderByMedidaL($order = Criteria::ASC) Order by the medida_l column
 * @method MedidaQuery orderByMedidaXl($order = Criteria::ASC) Order by the medida_xl column
 * @method MedidaQuery orderByMedidaXxl($order = Criteria::ASC) Order by the medida_xxl column
 * @method MedidaQuery orderByMedidaUnitalla($order = Criteria::ASC) Order by the medida_unitalla column
 *
 * @method MedidaQuery groupByIdmedida() Group by the idmedida column
 * @method MedidaQuery groupByMedidaNombre() Group by the medida_nombre column
 * @method MedidaQuery groupByMedidaXs() Group by the medida_xs column
 * @method MedidaQuery groupByMedidaS() Group by the medida_s column
 * @method MedidaQuery groupByMedidaM() Group by the medida_m column
 * @method MedidaQuery groupByMedidaL() Group by the medida_l column
 * @method MedidaQuery groupByMedidaXl() Group by the medida_xl column
 * @method MedidaQuery groupByMedidaXxl() Group by the medida_xxl column
 * @method MedidaQuery groupByMedidaUnitalla() Group by the medida_unitalla column
 *
 * @method MedidaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MedidaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MedidaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MedidaQuery leftJoinProductomedida($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productomedida relation
 * @method MedidaQuery rightJoinProductomedida($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productomedida relation
 * @method MedidaQuery innerJoinProductomedida($relationAlias = null) Adds a INNER JOIN clause to the query using the Productomedida relation
 *
 * @method Medida findOne(PropelPDO $con = null) Return the first Medida matching the query
 * @method Medida findOneOrCreate(PropelPDO $con = null) Return the first Medida matching the query, or a new Medida object populated from the query conditions when no match is found
 *
 * @method Medida findOneByMedidaNombre(string $medida_nombre) Return the first Medida filtered by the medida_nombre column
 * @method Medida findOneByMedidaXs(boolean $medida_xs) Return the first Medida filtered by the medida_xs column
 * @method Medida findOneByMedidaS(boolean $medida_s) Return the first Medida filtered by the medida_s column
 * @method Medida findOneByMedidaM(boolean $medida_m) Return the first Medida filtered by the medida_m column
 * @method Medida findOneByMedidaL(boolean $medida_l) Return the first Medida filtered by the medida_l column
 * @method Medida findOneByMedidaXl(boolean $medida_xl) Return the first Medida filtered by the medida_xl column
 * @method Medida findOneByMedidaXxl(boolean $medida_xxl) Return the first Medida filtered by the medida_xxl column
 * @method Medida findOneByMedidaUnitalla(boolean $medida_unitalla) Return the first Medida filtered by the medida_unitalla column
 *
 * @method array findByIdmedida(int $idmedida) Return Medida objects filtered by the idmedida column
 * @method array findByMedidaNombre(string $medida_nombre) Return Medida objects filtered by the medida_nombre column
 * @method array findByMedidaXs(boolean $medida_xs) Return Medida objects filtered by the medida_xs column
 * @method array findByMedidaS(boolean $medida_s) Return Medida objects filtered by the medida_s column
 * @method array findByMedidaM(boolean $medida_m) Return Medida objects filtered by the medida_m column
 * @method array findByMedidaL(boolean $medida_l) Return Medida objects filtered by the medida_l column
 * @method array findByMedidaXl(boolean $medida_xl) Return Medida objects filtered by the medida_xl column
 * @method array findByMedidaXxl(boolean $medida_xxl) Return Medida objects filtered by the medida_xxl column
 * @method array findByMedidaUnitalla(boolean $medida_unitalla) Return Medida objects filtered by the medida_unitalla column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseMedidaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMedidaQuery object.
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
            $modelName = 'Medida';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MedidaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MedidaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MedidaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MedidaQuery) {
            return $criteria;
        }
        $query = new MedidaQuery(null, null, $modelAlias);

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
     * @return   Medida|Medida[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MedidaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MedidaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Medida A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdmedida($key, $con = null)
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
     * @return                 Medida A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idmedida`, `medida_nombre`, `medida_xs`, `medida_s`, `medida_m`, `medida_l`, `medida_xl`, `medida_xxl`, `medida_unitalla` FROM `medida` WHERE `idmedida` = :p0';
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
            $obj = new Medida();
            $obj->hydrate($row);
            MedidaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Medida|Medida[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Medida[]|mixed the list of results, formatted by the current formatter
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
     * @return MedidaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MedidaPeer::IDMEDIDA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MedidaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MedidaPeer::IDMEDIDA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idmedida column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmedida(1234); // WHERE idmedida = 1234
     * $query->filterByIdmedida(array(12, 34)); // WHERE idmedida IN (12, 34)
     * $query->filterByIdmedida(array('min' => 12)); // WHERE idmedida >= 12
     * $query->filterByIdmedida(array('max' => 12)); // WHERE idmedida <= 12
     * </code>
     *
     * @param     mixed $idmedida The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedidaQuery The current query, for fluid interface
     */
    public function filterByIdmedida($idmedida = null, $comparison = null)
    {
        if (is_array($idmedida)) {
            $useMinMax = false;
            if (isset($idmedida['min'])) {
                $this->addUsingAlias(MedidaPeer::IDMEDIDA, $idmedida['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmedida['max'])) {
                $this->addUsingAlias(MedidaPeer::IDMEDIDA, $idmedida['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MedidaPeer::IDMEDIDA, $idmedida, $comparison);
    }

    /**
     * Filter the query on the medida_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByMedidaNombre('fooValue');   // WHERE medida_nombre = 'fooValue'
     * $query->filterByMedidaNombre('%fooValue%'); // WHERE medida_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $medidaNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedidaQuery The current query, for fluid interface
     */
    public function filterByMedidaNombre($medidaNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($medidaNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $medidaNombre)) {
                $medidaNombre = str_replace('*', '%', $medidaNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MedidaPeer::MEDIDA_NOMBRE, $medidaNombre, $comparison);
    }

    /**
     * Filter the query on the medida_xs column
     *
     * Example usage:
     * <code>
     * $query->filterByMedidaXs(true); // WHERE medida_xs = true
     * $query->filterByMedidaXs('yes'); // WHERE medida_xs = true
     * </code>
     *
     * @param     boolean|string $medidaXs The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedidaQuery The current query, for fluid interface
     */
    public function filterByMedidaXs($medidaXs = null, $comparison = null)
    {
        if (is_string($medidaXs)) {
            $medidaXs = in_array(strtolower($medidaXs), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(MedidaPeer::MEDIDA_XS, $medidaXs, $comparison);
    }

    /**
     * Filter the query on the medida_s column
     *
     * Example usage:
     * <code>
     * $query->filterByMedidaS(true); // WHERE medida_s = true
     * $query->filterByMedidaS('yes'); // WHERE medida_s = true
     * </code>
     *
     * @param     boolean|string $medidaS The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedidaQuery The current query, for fluid interface
     */
    public function filterByMedidaS($medidaS = null, $comparison = null)
    {
        if (is_string($medidaS)) {
            $medidaS = in_array(strtolower($medidaS), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(MedidaPeer::MEDIDA_S, $medidaS, $comparison);
    }

    /**
     * Filter the query on the medida_m column
     *
     * Example usage:
     * <code>
     * $query->filterByMedidaM(true); // WHERE medida_m = true
     * $query->filterByMedidaM('yes'); // WHERE medida_m = true
     * </code>
     *
     * @param     boolean|string $medidaM The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedidaQuery The current query, for fluid interface
     */
    public function filterByMedidaM($medidaM = null, $comparison = null)
    {
        if (is_string($medidaM)) {
            $medidaM = in_array(strtolower($medidaM), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(MedidaPeer::MEDIDA_M, $medidaM, $comparison);
    }

    /**
     * Filter the query on the medida_l column
     *
     * Example usage:
     * <code>
     * $query->filterByMedidaL(true); // WHERE medida_l = true
     * $query->filterByMedidaL('yes'); // WHERE medida_l = true
     * </code>
     *
     * @param     boolean|string $medidaL The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedidaQuery The current query, for fluid interface
     */
    public function filterByMedidaL($medidaL = null, $comparison = null)
    {
        if (is_string($medidaL)) {
            $medidaL = in_array(strtolower($medidaL), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(MedidaPeer::MEDIDA_L, $medidaL, $comparison);
    }

    /**
     * Filter the query on the medida_xl column
     *
     * Example usage:
     * <code>
     * $query->filterByMedidaXl(true); // WHERE medida_xl = true
     * $query->filterByMedidaXl('yes'); // WHERE medida_xl = true
     * </code>
     *
     * @param     boolean|string $medidaXl The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedidaQuery The current query, for fluid interface
     */
    public function filterByMedidaXl($medidaXl = null, $comparison = null)
    {
        if (is_string($medidaXl)) {
            $medidaXl = in_array(strtolower($medidaXl), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(MedidaPeer::MEDIDA_XL, $medidaXl, $comparison);
    }

    /**
     * Filter the query on the medida_xxl column
     *
     * Example usage:
     * <code>
     * $query->filterByMedidaXxl(true); // WHERE medida_xxl = true
     * $query->filterByMedidaXxl('yes'); // WHERE medida_xxl = true
     * </code>
     *
     * @param     boolean|string $medidaXxl The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedidaQuery The current query, for fluid interface
     */
    public function filterByMedidaXxl($medidaXxl = null, $comparison = null)
    {
        if (is_string($medidaXxl)) {
            $medidaXxl = in_array(strtolower($medidaXxl), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(MedidaPeer::MEDIDA_XXL, $medidaXxl, $comparison);
    }

    /**
     * Filter the query on the medida_unitalla column
     *
     * Example usage:
     * <code>
     * $query->filterByMedidaUnitalla(true); // WHERE medida_unitalla = true
     * $query->filterByMedidaUnitalla('yes'); // WHERE medida_unitalla = true
     * </code>
     *
     * @param     boolean|string $medidaUnitalla The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MedidaQuery The current query, for fluid interface
     */
    public function filterByMedidaUnitalla($medidaUnitalla = null, $comparison = null)
    {
        if (is_string($medidaUnitalla)) {
            $medidaUnitalla = in_array(strtolower($medidaUnitalla), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(MedidaPeer::MEDIDA_UNITALLA, $medidaUnitalla, $comparison);
    }

    /**
     * Filter the query by a related Productomedida object
     *
     * @param   Productomedida|PropelObjectCollection $productomedida  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MedidaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductomedida($productomedida, $comparison = null)
    {
        if ($productomedida instanceof Productomedida) {
            return $this
                ->addUsingAlias(MedidaPeer::IDMEDIDA, $productomedida->getIdmedida(), $comparison);
        } elseif ($productomedida instanceof PropelObjectCollection) {
            return $this
                ->useProductomedidaQuery()
                ->filterByPrimaryKeys($productomedida->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductomedida() only accepts arguments of type Productomedida or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productomedida relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MedidaQuery The current query, for fluid interface
     */
    public function joinProductomedida($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productomedida');

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
            $this->addJoinObject($join, 'Productomedida');
        }

        return $this;
    }

    /**
     * Use the Productomedida relation Productomedida object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductomedidaQuery A secondary query class using the current class as primary query
     */
    public function useProductomedidaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductomedida($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productomedida', 'ProductomedidaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Medida $medida Object to remove from the list of results
     *
     * @return MedidaQuery The current query, for fluid interface
     */
    public function prune($medida = null)
    {
        if ($medida) {
            $this->addUsingAlias(MedidaPeer::IDMEDIDA, $medida->getIdmedida(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
