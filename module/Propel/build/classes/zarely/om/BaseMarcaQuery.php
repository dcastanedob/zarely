<?php


/**
 * Base class that represents a query for the 'marca' table.
 *
 *
 *
 * @method MarcaQuery orderByIdmarca($order = Criteria::ASC) Order by the idmarca column
 * @method MarcaQuery orderByMarcaNombre($order = Criteria::ASC) Order by the marca_nombre column
 *
 * @method MarcaQuery groupByIdmarca() Group by the idmarca column
 * @method MarcaQuery groupByMarcaNombre() Group by the marca_nombre column
 *
 * @method MarcaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MarcaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MarcaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MarcaQuery leftJoinDescuentodetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Descuentodetalle relation
 * @method MarcaQuery rightJoinDescuentodetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Descuentodetalle relation
 * @method MarcaQuery innerJoinDescuentodetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Descuentodetalle relation
 *
 * @method MarcaQuery leftJoinMarcatallaje($relationAlias = null) Adds a LEFT JOIN clause to the query using the Marcatallaje relation
 * @method MarcaQuery rightJoinMarcatallaje($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Marcatallaje relation
 * @method MarcaQuery innerJoinMarcatallaje($relationAlias = null) Adds a INNER JOIN clause to the query using the Marcatallaje relation
 *
 * @method MarcaQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method MarcaQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method MarcaQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method MarcaQuery leftJoinPromociondetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Promociondetalle relation
 * @method MarcaQuery rightJoinPromociondetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Promociondetalle relation
 * @method MarcaQuery innerJoinPromociondetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Promociondetalle relation
 *
 * @method MarcaQuery leftJoinProveedormarca($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedormarca relation
 * @method MarcaQuery rightJoinProveedormarca($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedormarca relation
 * @method MarcaQuery innerJoinProveedormarca($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedormarca relation
 *
 * @method Marca findOne(PropelPDO $con = null) Return the first Marca matching the query
 * @method Marca findOneOrCreate(PropelPDO $con = null) Return the first Marca matching the query, or a new Marca object populated from the query conditions when no match is found
 *
 * @method Marca findOneByMarcaNombre(string $marca_nombre) Return the first Marca filtered by the marca_nombre column
 *
 * @method array findByIdmarca(int $idmarca) Return Marca objects filtered by the idmarca column
 * @method array findByMarcaNombre(string $marca_nombre) Return Marca objects filtered by the marca_nombre column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseMarcaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMarcaQuery object.
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
            $modelName = 'Marca';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MarcaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   MarcaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MarcaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MarcaQuery) {
            return $criteria;
        }
        $query = new MarcaQuery(null, null, $modelAlias);

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
     * @return   Marca|Marca[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MarcaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MarcaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Marca A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdmarca($key, $con = null)
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
     * @return                 Marca A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idmarca`, `marca_nombre` FROM `marca` WHERE `idmarca` = :p0';
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
            $obj = new Marca();
            $obj->hydrate($row);
            MarcaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Marca|Marca[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Marca[]|mixed the list of results, formatted by the current formatter
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
     * @return MarcaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MarcaPeer::IDMARCA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MarcaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MarcaPeer::IDMARCA, $keys, Criteria::IN);
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
     * @param     mixed $idmarca The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MarcaQuery The current query, for fluid interface
     */
    public function filterByIdmarca($idmarca = null, $comparison = null)
    {
        if (is_array($idmarca)) {
            $useMinMax = false;
            if (isset($idmarca['min'])) {
                $this->addUsingAlias(MarcaPeer::IDMARCA, $idmarca['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmarca['max'])) {
                $this->addUsingAlias(MarcaPeer::IDMARCA, $idmarca['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MarcaPeer::IDMARCA, $idmarca, $comparison);
    }

    /**
     * Filter the query on the marca_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByMarcaNombre('fooValue');   // WHERE marca_nombre = 'fooValue'
     * $query->filterByMarcaNombre('%fooValue%'); // WHERE marca_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $marcaNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MarcaQuery The current query, for fluid interface
     */
    public function filterByMarcaNombre($marcaNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($marcaNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $marcaNombre)) {
                $marcaNombre = str_replace('*', '%', $marcaNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MarcaPeer::MARCA_NOMBRE, $marcaNombre, $comparison);
    }

    /**
     * Filter the query by a related Descuentodetalle object
     *
     * @param   Descuentodetalle|PropelObjectCollection $descuentodetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MarcaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDescuentodetalle($descuentodetalle, $comparison = null)
    {
        if ($descuentodetalle instanceof Descuentodetalle) {
            return $this
                ->addUsingAlias(MarcaPeer::IDMARCA, $descuentodetalle->getIdmarca(), $comparison);
        } elseif ($descuentodetalle instanceof PropelObjectCollection) {
            return $this
                ->useDescuentodetalleQuery()
                ->filterByPrimaryKeys($descuentodetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDescuentodetalle() only accepts arguments of type Descuentodetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Descuentodetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MarcaQuery The current query, for fluid interface
     */
    public function joinDescuentodetalle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Descuentodetalle');

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
            $this->addJoinObject($join, 'Descuentodetalle');
        }

        return $this;
    }

    /**
     * Use the Descuentodetalle relation Descuentodetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DescuentodetalleQuery A secondary query class using the current class as primary query
     */
    public function useDescuentodetalleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinDescuentodetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Descuentodetalle', 'DescuentodetalleQuery');
    }

    /**
     * Filter the query by a related Marcatallaje object
     *
     * @param   Marcatallaje|PropelObjectCollection $marcatallaje  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MarcaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMarcatallaje($marcatallaje, $comparison = null)
    {
        if ($marcatallaje instanceof Marcatallaje) {
            return $this
                ->addUsingAlias(MarcaPeer::IDMARCA, $marcatallaje->getIdmarca(), $comparison);
        } elseif ($marcatallaje instanceof PropelObjectCollection) {
            return $this
                ->useMarcatallajeQuery()
                ->filterByPrimaryKeys($marcatallaje->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByMarcatallaje() only accepts arguments of type Marcatallaje or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Marcatallaje relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MarcaQuery The current query, for fluid interface
     */
    public function joinMarcatallaje($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Marcatallaje');

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
            $this->addJoinObject($join, 'Marcatallaje');
        }

        return $this;
    }

    /**
     * Use the Marcatallaje relation Marcatallaje object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MarcatallajeQuery A secondary query class using the current class as primary query
     */
    public function useMarcatallajeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMarcatallaje($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Marcatallaje', 'MarcatallajeQuery');
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MarcaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(MarcaPeer::IDMARCA, $producto->getIdmarca(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            return $this
                ->useProductoQuery()
                ->filterByPrimaryKeys($producto->getPrimaryKeys())
                ->endUse();
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
     * @return MarcaQuery The current query, for fluid interface
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
     * Filter the query by a related Promociondetalle object
     *
     * @param   Promociondetalle|PropelObjectCollection $promociondetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MarcaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPromociondetalle($promociondetalle, $comparison = null)
    {
        if ($promociondetalle instanceof Promociondetalle) {
            return $this
                ->addUsingAlias(MarcaPeer::IDMARCA, $promociondetalle->getIdmarca(), $comparison);
        } elseif ($promociondetalle instanceof PropelObjectCollection) {
            return $this
                ->usePromociondetalleQuery()
                ->filterByPrimaryKeys($promociondetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPromociondetalle() only accepts arguments of type Promociondetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Promociondetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MarcaQuery The current query, for fluid interface
     */
    public function joinPromociondetalle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Promociondetalle');

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
            $this->addJoinObject($join, 'Promociondetalle');
        }

        return $this;
    }

    /**
     * Use the Promociondetalle relation Promociondetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PromociondetalleQuery A secondary query class using the current class as primary query
     */
    public function usePromociondetalleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPromociondetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Promociondetalle', 'PromociondetalleQuery');
    }

    /**
     * Filter the query by a related Proveedormarca object
     *
     * @param   Proveedormarca|PropelObjectCollection $proveedormarca  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 MarcaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedormarca($proveedormarca, $comparison = null)
    {
        if ($proveedormarca instanceof Proveedormarca) {
            return $this
                ->addUsingAlias(MarcaPeer::IDMARCA, $proveedormarca->getIdmarca(), $comparison);
        } elseif ($proveedormarca instanceof PropelObjectCollection) {
            return $this
                ->useProveedormarcaQuery()
                ->filterByPrimaryKeys($proveedormarca->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProveedormarca() only accepts arguments of type Proveedormarca or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Proveedormarca relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MarcaQuery The current query, for fluid interface
     */
    public function joinProveedormarca($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Proveedormarca');

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
            $this->addJoinObject($join, 'Proveedormarca');
        }

        return $this;
    }

    /**
     * Use the Proveedormarca relation Proveedormarca object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProveedormarcaQuery A secondary query class using the current class as primary query
     */
    public function useProveedormarcaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProveedormarca($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Proveedormarca', 'ProveedormarcaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Marca $marca Object to remove from the list of results
     *
     * @return MarcaQuery The current query, for fluid interface
     */
    public function prune($marca = null)
    {
        if ($marca) {
            $this->addUsingAlias(MarcaPeer::IDMARCA, $marca->getIdmarca(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
