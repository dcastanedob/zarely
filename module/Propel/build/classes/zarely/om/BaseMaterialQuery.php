<?php


/**
 * Base class that represents a query for the 'material' table.
 *
 *
 *
 * @method MaterialQuery orderByIdmaterial($order = Criteria::ASC) Order by the idmaterial column
 * @method MaterialQuery orderByMaterialNombre($order = Criteria::ASC) Order by the material_nombre column
 *
 * @method MaterialQuery groupByIdmaterial() Group by the idmaterial column
 * @method MaterialQuery groupByMaterialNombre() Group by the material_nombre column
 *
 * @method MaterialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MaterialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MaterialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MaterialQuery leftJoinProductomaterial($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productomaterial relation
 * @method MaterialQuery rightJoinProductomaterial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productomaterial relation
 * @method MaterialQuery innerJoinProductomaterial($relationAlias = null) Adds a INNER JOIN clause to the query using the Productomaterial relation
 *
 * @method Material findOne(PropelPDO $con = null) Return the first Material matching the query
 * @method Material findOneOrCreate(PropelPDO $con = null) Return the first Material matching the query, or a new Material object populated from the query conditions when no match is found
 *
 * @method Material findOneByMaterialNombre(string $material_nombre) Return the first Material filtered by the material_nombre column
 *
 * @method array findByIdmaterial(int $idmaterial) Return Material objects filtered by the idmaterial column
 * @method array findByMaterialNombre(string $material_nombre) Return Material objects filtered by the material_nombre column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseMaterialQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMaterialQuery object.
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
            $modelName = 'Material';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MaterialQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MaterialQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MaterialQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MaterialQuery) {
            return $criteria;
        }
        $query = new MaterialQuery(null, null, $modelAlias);

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
     * @return   Material|Material[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MaterialPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Material A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdmaterial($key, $con = null)
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
     * @return                 Material A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idmaterial`, `material_nombre` FROM `material` WHERE `idmaterial` = :p0';
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
            $obj = new Material();
            $obj->hydrate($row);
            MaterialPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Material|Material[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Material[]|mixed the list of results, formatted by the current formatter
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
     * @return MaterialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MaterialPeer::IDMATERIAL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MaterialPeer::IDMATERIAL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idmaterial column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmaterial(1234); // WHERE idmaterial = 1234
     * $query->filterByIdmaterial(array(12, 34)); // WHERE idmaterial IN (12, 34)
     * $query->filterByIdmaterial(array('min' => 12)); // WHERE idmaterial >= 12
     * $query->filterByIdmaterial(array('max' => 12)); // WHERE idmaterial <= 12
     * </code>
     *
     * @param     mixed $idmaterial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function filterByIdmaterial($idmaterial = null, $comparison = null)
    {
        if (is_array($idmaterial)) {
            $useMinMax = false;
            if (isset($idmaterial['min'])) {
                $this->addUsingAlias(MaterialPeer::IDMATERIAL, $idmaterial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmaterial['max'])) {
                $this->addUsingAlias(MaterialPeer::IDMATERIAL, $idmaterial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MaterialPeer::IDMATERIAL, $idmaterial, $comparison);
    }

    /**
     * Filter the query on the material_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByMaterialNombre('fooValue');   // WHERE material_nombre = 'fooValue'
     * $query->filterByMaterialNombre('%fooValue%'); // WHERE material_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $materialNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function filterByMaterialNombre($materialNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($materialNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $materialNombre)) {
                $materialNombre = str_replace('*', '%', $materialNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MaterialPeer::MATERIAL_NOMBRE, $materialNombre, $comparison);
    }

    /**
     * Filter the query by a related Productomaterial object
     *
     * @param   Productomaterial|PropelObjectCollection $productomaterial  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MaterialQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductomaterial($productomaterial, $comparison = null)
    {
        if ($productomaterial instanceof Productomaterial) {
            return $this
                ->addUsingAlias(MaterialPeer::IDMATERIAL, $productomaterial->getIdmaterial(), $comparison);
        } elseif ($productomaterial instanceof PropelObjectCollection) {
            return $this
                ->useProductomaterialQuery()
                ->filterByPrimaryKeys($productomaterial->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductomaterial() only accepts arguments of type Productomaterial or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productomaterial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function joinProductomaterial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productomaterial');

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
            $this->addJoinObject($join, 'Productomaterial');
        }

        return $this;
    }

    /**
     * Use the Productomaterial relation Productomaterial object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductomaterialQuery A secondary query class using the current class as primary query
     */
    public function useProductomaterialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductomaterial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productomaterial', 'ProductomaterialQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Material $material Object to remove from the list of results
     *
     * @return MaterialQuery The current query, for fluid interface
     */
    public function prune($material = null)
    {
        if ($material) {
            $this->addUsingAlias(MaterialPeer::IDMATERIAL, $material->getIdmaterial(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
