<?php


/**
 * Base class that represents a query for the 'productocolor' table.
 *
 *
 *
 * @method ProductocolorQuery orderByIdproductocolor($order = Criteria::ASC) Order by the idproductocolor column
 * @method ProductocolorQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method ProductocolorQuery orderByIdcolor($order = Criteria::ASC) Order by the idcolor column
 *
 * @method ProductocolorQuery groupByIdproductocolor() Group by the idproductocolor column
 * @method ProductocolorQuery groupByIdproducto() Group by the idproducto column
 * @method ProductocolorQuery groupByIdcolor() Group by the idcolor column
 *
 * @method ProductocolorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProductocolorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProductocolorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProductocolorQuery leftJoinColor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Color relation
 * @method ProductocolorQuery rightJoinColor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Color relation
 * @method ProductocolorQuery innerJoinColor($relationAlias = null) Adds a INNER JOIN clause to the query using the Color relation
 *
 * @method ProductocolorQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method ProductocolorQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method ProductocolorQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method ProductocolorQuery leftJoinProductovariante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productovariante relation
 * @method ProductocolorQuery rightJoinProductovariante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productovariante relation
 * @method ProductocolorQuery innerJoinProductovariante($relationAlias = null) Adds a INNER JOIN clause to the query using the Productovariante relation
 *
 * @method Productocolor findOne(PropelPDO $con = null) Return the first Productocolor matching the query
 * @method Productocolor findOneOrCreate(PropelPDO $con = null) Return the first Productocolor matching the query, or a new Productocolor object populated from the query conditions when no match is found
 *
 * @method Productocolor findOneByIdproducto(int $idproducto) Return the first Productocolor filtered by the idproducto column
 * @method Productocolor findOneByIdcolor(int $idcolor) Return the first Productocolor filtered by the idcolor column
 *
 * @method array findByIdproductocolor(int $idproductocolor) Return Productocolor objects filtered by the idproductocolor column
 * @method array findByIdproducto(int $idproducto) Return Productocolor objects filtered by the idproducto column
 * @method array findByIdcolor(int $idcolor) Return Productocolor objects filtered by the idcolor column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseProductocolorQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProductocolorQuery object.
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
            $modelName = 'Productocolor';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProductocolorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProductocolorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProductocolorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProductocolorQuery) {
            return $criteria;
        }
        $query = new ProductocolorQuery(null, null, $modelAlias);

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
     * @return   Productocolor|Productocolor[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProductocolorPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProductocolorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Productocolor A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproductocolor($key, $con = null)
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
     * @return                 Productocolor A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproductocolor`, `idproducto`, `idcolor` FROM `productocolor` WHERE `idproductocolor` = :p0';
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
            $obj = new Productocolor();
            $obj->hydrate($row);
            ProductocolorPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Productocolor|Productocolor[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Productocolor[]|mixed the list of results, formatted by the current formatter
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
     * @return ProductocolorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProductocolorPeer::IDPRODUCTOCOLOR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProductocolorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProductocolorPeer::IDPRODUCTOCOLOR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idproductocolor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductocolor(1234); // WHERE idproductocolor = 1234
     * $query->filterByIdproductocolor(array(12, 34)); // WHERE idproductocolor IN (12, 34)
     * $query->filterByIdproductocolor(array('min' => 12)); // WHERE idproductocolor >= 12
     * $query->filterByIdproductocolor(array('max' => 12)); // WHERE idproductocolor <= 12
     * </code>
     *
     * @param     mixed $idproductocolor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductocolorQuery The current query, for fluid interface
     */
    public function filterByIdproductocolor($idproductocolor = null, $comparison = null)
    {
        if (is_array($idproductocolor)) {
            $useMinMax = false;
            if (isset($idproductocolor['min'])) {
                $this->addUsingAlias(ProductocolorPeer::IDPRODUCTOCOLOR, $idproductocolor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductocolor['max'])) {
                $this->addUsingAlias(ProductocolorPeer::IDPRODUCTOCOLOR, $idproductocolor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductocolorPeer::IDPRODUCTOCOLOR, $idproductocolor, $comparison);
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
     * @return ProductocolorQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(ProductocolorPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(ProductocolorPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductocolorPeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the idcolor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcolor(1234); // WHERE idcolor = 1234
     * $query->filterByIdcolor(array(12, 34)); // WHERE idcolor IN (12, 34)
     * $query->filterByIdcolor(array('min' => 12)); // WHERE idcolor >= 12
     * $query->filterByIdcolor(array('max' => 12)); // WHERE idcolor <= 12
     * </code>
     *
     * @see       filterByColor()
     *
     * @param     mixed $idcolor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductocolorQuery The current query, for fluid interface
     */
    public function filterByIdcolor($idcolor = null, $comparison = null)
    {
        if (is_array($idcolor)) {
            $useMinMax = false;
            if (isset($idcolor['min'])) {
                $this->addUsingAlias(ProductocolorPeer::IDCOLOR, $idcolor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcolor['max'])) {
                $this->addUsingAlias(ProductocolorPeer::IDCOLOR, $idcolor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductocolorPeer::IDCOLOR, $idcolor, $comparison);
    }

    /**
     * Filter the query by a related Color object
     *
     * @param   Color|PropelObjectCollection $color The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductocolorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByColor($color, $comparison = null)
    {
        if ($color instanceof Color) {
            return $this
                ->addUsingAlias(ProductocolorPeer::IDCOLOR, $color->getIdcolor(), $comparison);
        } elseif ($color instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductocolorPeer::IDCOLOR, $color->toKeyValue('PrimaryKey', 'Idcolor'), $comparison);
        } else {
            throw new PropelException('filterByColor() only accepts arguments of type Color or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Color relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductocolorQuery The current query, for fluid interface
     */
    public function joinColor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Color');

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
            $this->addJoinObject($join, 'Color');
        }

        return $this;
    }

    /**
     * Use the Color relation Color object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ColorQuery A secondary query class using the current class as primary query
     */
    public function useColorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinColor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Color', 'ColorQuery');
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductocolorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(ProductocolorPeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductocolorPeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return ProductocolorQuery The current query, for fluid interface
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
     * Filter the query by a related Productovariante object
     *
     * @param   Productovariante|PropelObjectCollection $productovariante  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductocolorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductovariante($productovariante, $comparison = null)
    {
        if ($productovariante instanceof Productovariante) {
            return $this
                ->addUsingAlias(ProductocolorPeer::IDPRODUCTOCOLOR, $productovariante->getIdproductocolor(), $comparison);
        } elseif ($productovariante instanceof PropelObjectCollection) {
            return $this
                ->useProductovarianteQuery()
                ->filterByPrimaryKeys($productovariante->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductovariante() only accepts arguments of type Productovariante or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productovariante relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductocolorQuery The current query, for fluid interface
     */
    public function joinProductovariante($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productovariante');

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
            $this->addJoinObject($join, 'Productovariante');
        }

        return $this;
    }

    /**
     * Use the Productovariante relation Productovariante object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductovarianteQuery A secondary query class using the current class as primary query
     */
    public function useProductovarianteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductovariante($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productovariante', 'ProductovarianteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Productocolor $productocolor Object to remove from the list of results
     *
     * @return ProductocolorQuery The current query, for fluid interface
     */
    public function prune($productocolor = null)
    {
        if ($productocolor) {
            $this->addUsingAlias(ProductocolorPeer::IDPRODUCTOCOLOR, $productocolor->getIdproductocolor(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
