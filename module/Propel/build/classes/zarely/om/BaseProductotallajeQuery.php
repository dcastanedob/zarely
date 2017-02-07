<?php


/**
 * Base class that represents a query for the 'productotallaje' table.
 *
 *
 *
 * @method ProductotallajeQuery orderByIdproductotallaje($order = Criteria::ASC) Order by the idproductotallaje column
 * @method ProductotallajeQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method ProductotallajeQuery orderByIdtallaje($order = Criteria::ASC) Order by the idtallaje column
 *
 * @method ProductotallajeQuery groupByIdproductotallaje() Group by the idproductotallaje column
 * @method ProductotallajeQuery groupByIdproducto() Group by the idproducto column
 * @method ProductotallajeQuery groupByIdtallaje() Group by the idtallaje column
 *
 * @method ProductotallajeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProductotallajeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProductotallajeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProductotallajeQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method ProductotallajeQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method ProductotallajeQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method ProductotallajeQuery leftJoinTallaje($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tallaje relation
 * @method ProductotallajeQuery rightJoinTallaje($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tallaje relation
 * @method ProductotallajeQuery innerJoinTallaje($relationAlias = null) Adds a INNER JOIN clause to the query using the Tallaje relation
 *
 * @method Productotallaje findOne(PropelPDO $con = null) Return the first Productotallaje matching the query
 * @method Productotallaje findOneOrCreate(PropelPDO $con = null) Return the first Productotallaje matching the query, or a new Productotallaje object populated from the query conditions when no match is found
 *
 * @method Productotallaje findOneByIdproducto(int $idproducto) Return the first Productotallaje filtered by the idproducto column
 * @method Productotallaje findOneByIdtallaje(int $idtallaje) Return the first Productotallaje filtered by the idtallaje column
 *
 * @method array findByIdproductotallaje(int $idproductotallaje) Return Productotallaje objects filtered by the idproductotallaje column
 * @method array findByIdproducto(int $idproducto) Return Productotallaje objects filtered by the idproducto column
 * @method array findByIdtallaje(int $idtallaje) Return Productotallaje objects filtered by the idtallaje column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseProductotallajeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProductotallajeQuery object.
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
            $modelName = 'Productotallaje';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProductotallajeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProductotallajeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProductotallajeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProductotallajeQuery) {
            return $criteria;
        }
        $query = new ProductotallajeQuery(null, null, $modelAlias);

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
     * @return   Productotallaje|Productotallaje[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProductotallajePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProductotallajePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Productotallaje A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproductotallaje($key, $con = null)
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
     * @return                 Productotallaje A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproductotallaje`, `idproducto`, `idtallaje` FROM `productotallaje` WHERE `idproductotallaje` = :p0';
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
            $obj = new Productotallaje();
            $obj->hydrate($row);
            ProductotallajePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Productotallaje|Productotallaje[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Productotallaje[]|mixed the list of results, formatted by the current formatter
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
     * @return ProductotallajeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProductotallajePeer::IDPRODUCTOTALLAJE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProductotallajeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProductotallajePeer::IDPRODUCTOTALLAJE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idproductotallaje column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductotallaje(1234); // WHERE idproductotallaje = 1234
     * $query->filterByIdproductotallaje(array(12, 34)); // WHERE idproductotallaje IN (12, 34)
     * $query->filterByIdproductotallaje(array('min' => 12)); // WHERE idproductotallaje >= 12
     * $query->filterByIdproductotallaje(array('max' => 12)); // WHERE idproductotallaje <= 12
     * </code>
     *
     * @param     mixed $idproductotallaje The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductotallajeQuery The current query, for fluid interface
     */
    public function filterByIdproductotallaje($idproductotallaje = null, $comparison = null)
    {
        if (is_array($idproductotallaje)) {
            $useMinMax = false;
            if (isset($idproductotallaje['min'])) {
                $this->addUsingAlias(ProductotallajePeer::IDPRODUCTOTALLAJE, $idproductotallaje['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductotallaje['max'])) {
                $this->addUsingAlias(ProductotallajePeer::IDPRODUCTOTALLAJE, $idproductotallaje['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductotallajePeer::IDPRODUCTOTALLAJE, $idproductotallaje, $comparison);
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
     * @return ProductotallajeQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(ProductotallajePeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(ProductotallajePeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductotallajePeer::IDPRODUCTO, $idproducto, $comparison);
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
     * @return ProductotallajeQuery The current query, for fluid interface
     */
    public function filterByIdtallaje($idtallaje = null, $comparison = null)
    {
        if (is_array($idtallaje)) {
            $useMinMax = false;
            if (isset($idtallaje['min'])) {
                $this->addUsingAlias(ProductotallajePeer::IDTALLAJE, $idtallaje['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtallaje['max'])) {
                $this->addUsingAlias(ProductotallajePeer::IDTALLAJE, $idtallaje['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductotallajePeer::IDTALLAJE, $idtallaje, $comparison);
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductotallajeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(ProductotallajePeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductotallajePeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return ProductotallajeQuery The current query, for fluid interface
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
     * Filter the query by a related Tallaje object
     *
     * @param   Tallaje|PropelObjectCollection $tallaje The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductotallajeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTallaje($tallaje, $comparison = null)
    {
        if ($tallaje instanceof Tallaje) {
            return $this
                ->addUsingAlias(ProductotallajePeer::IDTALLAJE, $tallaje->getIdtallaje(), $comparison);
        } elseif ($tallaje instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductotallajePeer::IDTALLAJE, $tallaje->toKeyValue('PrimaryKey', 'Idtallaje'), $comparison);
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
     * @return ProductotallajeQuery The current query, for fluid interface
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
     * @param   Productotallaje $productotallaje Object to remove from the list of results
     *
     * @return ProductotallajeQuery The current query, for fluid interface
     */
    public function prune($productotallaje = null)
    {
        if ($productotallaje) {
            $this->addUsingAlias(ProductotallajePeer::IDPRODUCTOTALLAJE, $productotallaje->getIdproductotallaje(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
