<?php


/**
 * Base class that represents a query for the 'productomaterial' table.
 *
 *
 *
 * @method ProductomaterialQuery orderByIdproductomaterial($order = Criteria::ASC) Order by the idproductomaterial column
 * @method ProductomaterialQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method ProductomaterialQuery orderByIdmaterial($order = Criteria::ASC) Order by the idmaterial column
 *
 * @method ProductomaterialQuery groupByIdproductomaterial() Group by the idproductomaterial column
 * @method ProductomaterialQuery groupByIdproducto() Group by the idproducto column
 * @method ProductomaterialQuery groupByIdmaterial() Group by the idmaterial column
 *
 * @method ProductomaterialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProductomaterialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProductomaterialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProductomaterialQuery leftJoinMaterial($relationAlias = null) Adds a LEFT JOIN clause to the query using the Material relation
 * @method ProductomaterialQuery rightJoinMaterial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Material relation
 * @method ProductomaterialQuery innerJoinMaterial($relationAlias = null) Adds a INNER JOIN clause to the query using the Material relation
 *
 * @method ProductomaterialQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method ProductomaterialQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method ProductomaterialQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method Productomaterial findOne(PropelPDO $con = null) Return the first Productomaterial matching the query
 * @method Productomaterial findOneOrCreate(PropelPDO $con = null) Return the first Productomaterial matching the query, or a new Productomaterial object populated from the query conditions when no match is found
 *
 * @method Productomaterial findOneByIdproducto(int $idproducto) Return the first Productomaterial filtered by the idproducto column
 * @method Productomaterial findOneByIdmaterial(int $idmaterial) Return the first Productomaterial filtered by the idmaterial column
 *
 * @method array findByIdproductomaterial(int $idproductomaterial) Return Productomaterial objects filtered by the idproductomaterial column
 * @method array findByIdproducto(int $idproducto) Return Productomaterial objects filtered by the idproducto column
 * @method array findByIdmaterial(int $idmaterial) Return Productomaterial objects filtered by the idmaterial column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseProductomaterialQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProductomaterialQuery object.
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
            $modelName = 'Productomaterial';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProductomaterialQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProductomaterialQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProductomaterialQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProductomaterialQuery) {
            return $criteria;
        }
        $query = new ProductomaterialQuery(null, null, $modelAlias);

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
     * @return   Productomaterial|Productomaterial[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProductomaterialPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProductomaterialPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Productomaterial A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproductomaterial($key, $con = null)
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
     * @return                 Productomaterial A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproductomaterial`, `idproducto`, `idmaterial` FROM `productomaterial` WHERE `idproductomaterial` = :p0';
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
            $obj = new Productomaterial();
            $obj->hydrate($row);
            ProductomaterialPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Productomaterial|Productomaterial[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Productomaterial[]|mixed the list of results, formatted by the current formatter
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
     * @return ProductomaterialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProductomaterialPeer::IDPRODUCTOMATERIAL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProductomaterialQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProductomaterialPeer::IDPRODUCTOMATERIAL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idproductomaterial column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductomaterial(1234); // WHERE idproductomaterial = 1234
     * $query->filterByIdproductomaterial(array(12, 34)); // WHERE idproductomaterial IN (12, 34)
     * $query->filterByIdproductomaterial(array('min' => 12)); // WHERE idproductomaterial >= 12
     * $query->filterByIdproductomaterial(array('max' => 12)); // WHERE idproductomaterial <= 12
     * </code>
     *
     * @param     mixed $idproductomaterial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductomaterialQuery The current query, for fluid interface
     */
    public function filterByIdproductomaterial($idproductomaterial = null, $comparison = null)
    {
        if (is_array($idproductomaterial)) {
            $useMinMax = false;
            if (isset($idproductomaterial['min'])) {
                $this->addUsingAlias(ProductomaterialPeer::IDPRODUCTOMATERIAL, $idproductomaterial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductomaterial['max'])) {
                $this->addUsingAlias(ProductomaterialPeer::IDPRODUCTOMATERIAL, $idproductomaterial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductomaterialPeer::IDPRODUCTOMATERIAL, $idproductomaterial, $comparison);
    }

    /**
     * Filter the query on the idproducto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproducto(1234); // WHERE idproducto = 1234
     * $query->filterByIdproducto(array(12, 34)); // WHERE idproducto IN (12, 34)
     * $query->filterByIdproducto(array('min' => 12)); // WHERE idproducto >= 12
     * $query->filterByIdproducto(array('max' => 12)); // WHERE idproducto <= 12
     * </code>
     *
     * @see       filterByProducto()
     *
     * @param     mixed $idproducto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductomaterialQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(ProductomaterialPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(ProductomaterialPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductomaterialPeer::IDPRODUCTO, $idproducto, $comparison);
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
     * @see       filterByMaterial()
     *
     * @param     mixed $idmaterial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductomaterialQuery The current query, for fluid interface
     */
    public function filterByIdmaterial($idmaterial = null, $comparison = null)
    {
        if (is_array($idmaterial)) {
            $useMinMax = false;
            if (isset($idmaterial['min'])) {
                $this->addUsingAlias(ProductomaterialPeer::IDMATERIAL, $idmaterial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmaterial['max'])) {
                $this->addUsingAlias(ProductomaterialPeer::IDMATERIAL, $idmaterial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductomaterialPeer::IDMATERIAL, $idmaterial, $comparison);
    }

    /**
     * Filter the query by a related Material object
     *
     * @param   Material|PropelObjectCollection $material The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductomaterialQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMaterial($material, $comparison = null)
    {
        if ($material instanceof Material) {
            return $this
                ->addUsingAlias(ProductomaterialPeer::IDMATERIAL, $material->getIdmaterial(), $comparison);
        } elseif ($material instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductomaterialPeer::IDMATERIAL, $material->toKeyValue('PrimaryKey', 'Idmaterial'), $comparison);
        } else {
            throw new PropelException('filterByMaterial() only accepts arguments of type Material or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Material relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductomaterialQuery The current query, for fluid interface
     */
    public function joinMaterial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Material');

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
            $this->addJoinObject($join, 'Material');
        }

        return $this;
    }

    /**
     * Use the Material relation Material object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MaterialQuery A secondary query class using the current class as primary query
     */
    public function useMaterialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMaterial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Material', 'MaterialQuery');
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductomaterialQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(ProductomaterialPeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductomaterialPeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return ProductomaterialQuery The current query, for fluid interface
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
     * @param   Productomaterial $productomaterial Object to remove from the list of results
     *
     * @return ProductomaterialQuery The current query, for fluid interface
     */
    public function prune($productomaterial = null)
    {
        if ($productomaterial) {
            $this->addUsingAlias(ProductomaterialPeer::IDPRODUCTOMATERIAL, $productomaterial->getIdproductomaterial(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
