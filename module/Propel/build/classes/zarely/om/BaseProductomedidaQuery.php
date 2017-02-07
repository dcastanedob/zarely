<?php


/**
 * Base class that represents a query for the 'productomedida' table.
 *
 *
 *
 * @method ProductomedidaQuery orderByIdproductomedida($order = Criteria::ASC) Order by the idproductomedida column
 * @method ProductomedidaQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method ProductomedidaQuery orderByIdmedida($order = Criteria::ASC) Order by the idmedida column
 *
 * @method ProductomedidaQuery groupByIdproductomedida() Group by the idproductomedida column
 * @method ProductomedidaQuery groupByIdproducto() Group by the idproducto column
 * @method ProductomedidaQuery groupByIdmedida() Group by the idmedida column
 *
 * @method ProductomedidaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProductomedidaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProductomedidaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProductomedidaQuery leftJoinMedida($relationAlias = null) Adds a LEFT JOIN clause to the query using the Medida relation
 * @method ProductomedidaQuery rightJoinMedida($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Medida relation
 * @method ProductomedidaQuery innerJoinMedida($relationAlias = null) Adds a INNER JOIN clause to the query using the Medida relation
 *
 * @method ProductomedidaQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method ProductomedidaQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method ProductomedidaQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method Productomedida findOne(PropelPDO $con = null) Return the first Productomedida matching the query
 * @method Productomedida findOneOrCreate(PropelPDO $con = null) Return the first Productomedida matching the query, or a new Productomedida object populated from the query conditions when no match is found
 *
 * @method Productomedida findOneByIdproducto(int $idproducto) Return the first Productomedida filtered by the idproducto column
 * @method Productomedida findOneByIdmedida(int $idmedida) Return the first Productomedida filtered by the idmedida column
 *
 * @method array findByIdproductomedida(int $idproductomedida) Return Productomedida objects filtered by the idproductomedida column
 * @method array findByIdproducto(int $idproducto) Return Productomedida objects filtered by the idproducto column
 * @method array findByIdmedida(int $idmedida) Return Productomedida objects filtered by the idmedida column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseProductomedidaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProductomedidaQuery object.
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
            $modelName = 'Productomedida';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProductomedidaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProductomedidaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProductomedidaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProductomedidaQuery) {
            return $criteria;
        }
        $query = new ProductomedidaQuery(null, null, $modelAlias);

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
     * @return   Productomedida|Productomedida[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProductomedidaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProductomedidaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Productomedida A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproductomedida($key, $con = null)
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
     * @return                 Productomedida A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproductomedida`, `idproducto`, `idmedida` FROM `productomedida` WHERE `idproductomedida` = :p0';
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
            $obj = new Productomedida();
            $obj->hydrate($row);
            ProductomedidaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Productomedida|Productomedida[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Productomedida[]|mixed the list of results, formatted by the current formatter
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
     * @return ProductomedidaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProductomedidaPeer::IDPRODUCTOMEDIDA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProductomedidaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProductomedidaPeer::IDPRODUCTOMEDIDA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idproductomedida column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductomedida(1234); // WHERE idproductomedida = 1234
     * $query->filterByIdproductomedida(array(12, 34)); // WHERE idproductomedida IN (12, 34)
     * $query->filterByIdproductomedida(array('min' => 12)); // WHERE idproductomedida >= 12
     * $query->filterByIdproductomedida(array('max' => 12)); // WHERE idproductomedida <= 12
     * </code>
     *
     * @param     mixed $idproductomedida The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductomedidaQuery The current query, for fluid interface
     */
    public function filterByIdproductomedida($idproductomedida = null, $comparison = null)
    {
        if (is_array($idproductomedida)) {
            $useMinMax = false;
            if (isset($idproductomedida['min'])) {
                $this->addUsingAlias(ProductomedidaPeer::IDPRODUCTOMEDIDA, $idproductomedida['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductomedida['max'])) {
                $this->addUsingAlias(ProductomedidaPeer::IDPRODUCTOMEDIDA, $idproductomedida['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductomedidaPeer::IDPRODUCTOMEDIDA, $idproductomedida, $comparison);
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
     * @return ProductomedidaQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(ProductomedidaPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(ProductomedidaPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductomedidaPeer::IDPRODUCTO, $idproducto, $comparison);
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
     * @see       filterByMedida()
     *
     * @param     mixed $idmedida The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductomedidaQuery The current query, for fluid interface
     */
    public function filterByIdmedida($idmedida = null, $comparison = null)
    {
        if (is_array($idmedida)) {
            $useMinMax = false;
            if (isset($idmedida['min'])) {
                $this->addUsingAlias(ProductomedidaPeer::IDMEDIDA, $idmedida['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmedida['max'])) {
                $this->addUsingAlias(ProductomedidaPeer::IDMEDIDA, $idmedida['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductomedidaPeer::IDMEDIDA, $idmedida, $comparison);
    }

    /**
     * Filter the query by a related Medida object
     *
     * @param   Medida|PropelObjectCollection $medida The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductomedidaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMedida($medida, $comparison = null)
    {
        if ($medida instanceof Medida) {
            return $this
                ->addUsingAlias(ProductomedidaPeer::IDMEDIDA, $medida->getIdmedida(), $comparison);
        } elseif ($medida instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductomedidaPeer::IDMEDIDA, $medida->toKeyValue('PrimaryKey', 'Idmedida'), $comparison);
        } else {
            throw new PropelException('filterByMedida() only accepts arguments of type Medida or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Medida relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductomedidaQuery The current query, for fluid interface
     */
    public function joinMedida($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Medida');

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
            $this->addJoinObject($join, 'Medida');
        }

        return $this;
    }

    /**
     * Use the Medida relation Medida object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MedidaQuery A secondary query class using the current class as primary query
     */
    public function useMedidaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMedida($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Medida', 'MedidaQuery');
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductomedidaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(ProductomedidaPeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductomedidaPeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return ProductomedidaQuery The current query, for fluid interface
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
     * @param   Productomedida $productomedida Object to remove from the list of results
     *
     * @return ProductomedidaQuery The current query, for fluid interface
     */
    public function prune($productomedida = null)
    {
        if ($productomedida) {
            $this->addUsingAlias(ProductomedidaPeer::IDPRODUCTOMEDIDA, $productomedida->getIdproductomedida(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
