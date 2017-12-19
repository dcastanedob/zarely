<?php


/**
 * Base class that represents a query for the 'promociondetalle' table.
 *
 *
 *
 * @method PromociondetalleQuery orderByIdpromociondetalle($order = Criteria::ASC) Order by the idpromociondetalle column
 * @method PromociondetalleQuery orderByIdpromocion($order = Criteria::ASC) Order by the idpromocion column
 * @method PromociondetalleQuery orderByIdmarca($order = Criteria::ASC) Order by the idmarca column
 * @method PromociondetalleQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method PromociondetalleQuery orderByIdproductovariante($order = Criteria::ASC) Order by the idproductovariante column
 *
 * @method PromociondetalleQuery groupByIdpromociondetalle() Group by the idpromociondetalle column
 * @method PromociondetalleQuery groupByIdpromocion() Group by the idpromocion column
 * @method PromociondetalleQuery groupByIdmarca() Group by the idmarca column
 * @method PromociondetalleQuery groupByIdproducto() Group by the idproducto column
 * @method PromociondetalleQuery groupByIdproductovariante() Group by the idproductovariante column
 *
 * @method PromociondetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PromociondetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PromociondetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PromociondetalleQuery leftJoinMarca($relationAlias = null) Adds a LEFT JOIN clause to the query using the Marca relation
 * @method PromociondetalleQuery rightJoinMarca($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Marca relation
 * @method PromociondetalleQuery innerJoinMarca($relationAlias = null) Adds a INNER JOIN clause to the query using the Marca relation
 *
 * @method PromociondetalleQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method PromociondetalleQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method PromociondetalleQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method PromociondetalleQuery leftJoinProductovariante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productovariante relation
 * @method PromociondetalleQuery rightJoinProductovariante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productovariante relation
 * @method PromociondetalleQuery innerJoinProductovariante($relationAlias = null) Adds a INNER JOIN clause to the query using the Productovariante relation
 *
 * @method PromociondetalleQuery leftJoinPromocion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Promocion relation
 * @method PromociondetalleQuery rightJoinPromocion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Promocion relation
 * @method PromociondetalleQuery innerJoinPromocion($relationAlias = null) Adds a INNER JOIN clause to the query using the Promocion relation
 *
 * @method Promociondetalle findOne(PropelPDO $con = null) Return the first Promociondetalle matching the query
 * @method Promociondetalle findOneOrCreate(PropelPDO $con = null) Return the first Promociondetalle matching the query, or a new Promociondetalle object populated from the query conditions when no match is found
 *
 * @method Promociondetalle findOneByIdpromocion(int $idpromocion) Return the first Promociondetalle filtered by the idpromocion column
 * @method Promociondetalle findOneByIdmarca(int $idmarca) Return the first Promociondetalle filtered by the idmarca column
 * @method Promociondetalle findOneByIdproducto(int $idproducto) Return the first Promociondetalle filtered by the idproducto column
 * @method Promociondetalle findOneByIdproductovariante(int $idproductovariante) Return the first Promociondetalle filtered by the idproductovariante column
 *
 * @method array findByIdpromociondetalle(int $idpromociondetalle) Return Promociondetalle objects filtered by the idpromociondetalle column
 * @method array findByIdpromocion(int $idpromocion) Return Promociondetalle objects filtered by the idpromocion column
 * @method array findByIdmarca(int $idmarca) Return Promociondetalle objects filtered by the idmarca column
 * @method array findByIdproducto(int $idproducto) Return Promociondetalle objects filtered by the idproducto column
 * @method array findByIdproductovariante(int $idproductovariante) Return Promociondetalle objects filtered by the idproductovariante column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BasePromociondetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePromociondetalleQuery object.
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
            $modelName = 'Promociondetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PromociondetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PromociondetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PromociondetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PromociondetalleQuery) {
            return $criteria;
        }
        $query = new PromociondetalleQuery(null, null, $modelAlias);

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
     * @return   Promociondetalle|Promociondetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PromociondetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PromociondetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Promociondetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpromociondetalle($key, $con = null)
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
     * @return                 Promociondetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpromociondetalle`, `idpromocion`, `idmarca`, `idproducto`, `idproductovariante` FROM `promociondetalle` WHERE `idpromociondetalle` = :p0';
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
            $obj = new Promociondetalle();
            $obj->hydrate($row);
            PromociondetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Promociondetalle|Promociondetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Promociondetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PromociondetallePeer::IDPROMOCIONDETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PromociondetallePeer::IDPROMOCIONDETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idpromociondetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpromociondetalle(1234); // WHERE idpromociondetalle = 1234
     * $query->filterByIdpromociondetalle(array(12, 34)); // WHERE idpromociondetalle IN (12, 34)
     * $query->filterByIdpromociondetalle(array('min' => 12)); // WHERE idpromociondetalle >= 12
     * $query->filterByIdpromociondetalle(array('max' => 12)); // WHERE idpromociondetalle <= 12
     * </code>
     *
     * @param     mixed $idpromociondetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function filterByIdpromociondetalle($idpromociondetalle = null, $comparison = null)
    {
        if (is_array($idpromociondetalle)) {
            $useMinMax = false;
            if (isset($idpromociondetalle['min'])) {
                $this->addUsingAlias(PromociondetallePeer::IDPROMOCIONDETALLE, $idpromociondetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpromociondetalle['max'])) {
                $this->addUsingAlias(PromociondetallePeer::IDPROMOCIONDETALLE, $idpromociondetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PromociondetallePeer::IDPROMOCIONDETALLE, $idpromociondetalle, $comparison);
    }

    /**
     * Filter the query on the idpromocion column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpromocion(1234); // WHERE idpromocion = 1234
     * $query->filterByIdpromocion(array(12, 34)); // WHERE idpromocion IN (12, 34)
     * $query->filterByIdpromocion(array('min' => 12)); // WHERE idpromocion >= 12
     * $query->filterByIdpromocion(array('max' => 12)); // WHERE idpromocion <= 12
     * </code>
     *
     * @see       filterByPromocion()
     *
     * @param     mixed $idpromocion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function filterByIdpromocion($idpromocion = null, $comparison = null)
    {
        if (is_array($idpromocion)) {
            $useMinMax = false;
            if (isset($idpromocion['min'])) {
                $this->addUsingAlias(PromociondetallePeer::IDPROMOCION, $idpromocion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpromocion['max'])) {
                $this->addUsingAlias(PromociondetallePeer::IDPROMOCION, $idpromocion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PromociondetallePeer::IDPROMOCION, $idpromocion, $comparison);
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
     * @see       filterByMarca()
     *
     * @param     mixed $idmarca The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function filterByIdmarca($idmarca = null, $comparison = null)
    {
        if (is_array($idmarca)) {
            $useMinMax = false;
            if (isset($idmarca['min'])) {
                $this->addUsingAlias(PromociondetallePeer::IDMARCA, $idmarca['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmarca['max'])) {
                $this->addUsingAlias(PromociondetallePeer::IDMARCA, $idmarca['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PromociondetallePeer::IDMARCA, $idmarca, $comparison);
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
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(PromociondetallePeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(PromociondetallePeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PromociondetallePeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the idproductovariante column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductovariante(1234); // WHERE idproductovariante = 1234
     * $query->filterByIdproductovariante(array(12, 34)); // WHERE idproductovariante IN (12, 34)
     * $query->filterByIdproductovariante(array('min' => 12)); // WHERE idproductovariante >= 12
     * $query->filterByIdproductovariante(array('max' => 12)); // WHERE idproductovariante <= 12
     * </code>
     *
     * @see       filterByProductovariante()
     *
     * @param     mixed $idproductovariante The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function filterByIdproductovariante($idproductovariante = null, $comparison = null)
    {
        if (is_array($idproductovariante)) {
            $useMinMax = false;
            if (isset($idproductovariante['min'])) {
                $this->addUsingAlias(PromociondetallePeer::IDPRODUCTOVARIANTE, $idproductovariante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductovariante['max'])) {
                $this->addUsingAlias(PromociondetallePeer::IDPRODUCTOVARIANTE, $idproductovariante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PromociondetallePeer::IDPRODUCTOVARIANTE, $idproductovariante, $comparison);
    }

    /**
     * Filter the query by a related Marca object
     *
     * @param   Marca|PropelObjectCollection $marca The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PromociondetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMarca($marca, $comparison = null)
    {
        if ($marca instanceof Marca) {
            return $this
                ->addUsingAlias(PromociondetallePeer::IDMARCA, $marca->getIdmarca(), $comparison);
        } elseif ($marca instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PromociondetallePeer::IDMARCA, $marca->toKeyValue('PrimaryKey', 'Idmarca'), $comparison);
        } else {
            throw new PropelException('filterByMarca() only accepts arguments of type Marca or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Marca relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function joinMarca($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Marca');

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
            $this->addJoinObject($join, 'Marca');
        }

        return $this;
    }

    /**
     * Use the Marca relation Marca object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MarcaQuery A secondary query class using the current class as primary query
     */
    public function useMarcaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinMarca($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Marca', 'MarcaQuery');
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PromociondetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(PromociondetallePeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PromociondetallePeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function joinProducto($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useProductoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinProducto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Producto', 'ProductoQuery');
    }

    /**
     * Filter the query by a related Productovariante object
     *
     * @param   Productovariante|PropelObjectCollection $productovariante The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PromociondetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductovariante($productovariante, $comparison = null)
    {
        if ($productovariante instanceof Productovariante) {
            return $this
                ->addUsingAlias(PromociondetallePeer::IDPRODUCTOVARIANTE, $productovariante->getIdproductovariante(), $comparison);
        } elseif ($productovariante instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PromociondetallePeer::IDPRODUCTOVARIANTE, $productovariante->toKeyValue('PrimaryKey', 'Idproductovariante'), $comparison);
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
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function joinProductovariante($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useProductovarianteQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinProductovariante($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productovariante', 'ProductovarianteQuery');
    }

    /**
     * Filter the query by a related Promocion object
     *
     * @param   Promocion|PropelObjectCollection $promocion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PromociondetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPromocion($promocion, $comparison = null)
    {
        if ($promocion instanceof Promocion) {
            return $this
                ->addUsingAlias(PromociondetallePeer::IDPROMOCION, $promocion->getIdpromocion(), $comparison);
        } elseif ($promocion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PromociondetallePeer::IDPROMOCION, $promocion->toKeyValue('PrimaryKey', 'Idpromocion'), $comparison);
        } else {
            throw new PropelException('filterByPromocion() only accepts arguments of type Promocion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Promocion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function joinPromocion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Promocion');

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
            $this->addJoinObject($join, 'Promocion');
        }

        return $this;
    }

    /**
     * Use the Promocion relation Promocion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PromocionQuery A secondary query class using the current class as primary query
     */
    public function usePromocionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPromocion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Promocion', 'PromocionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Promociondetalle $promociondetalle Object to remove from the list of results
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function prune($promociondetalle = null)
    {
        if ($promociondetalle) {
            $this->addUsingAlias(PromociondetallePeer::IDPROMOCIONDETALLE, $promociondetalle->getIdpromociondetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
