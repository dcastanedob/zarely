<?php


/**
 * Base class that represents a query for the 'descuentodetalle' table.
 *
 *
 *
 * @method DescuentodetalleQuery orderByIddescuentodetalle($order = Criteria::ASC) Order by the iddescuentodetalle column
 * @method DescuentodetalleQuery orderByIddescuento($order = Criteria::ASC) Order by the iddescuento column
 * @method DescuentodetalleQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method DescuentodetalleQuery orderByIdmarca($order = Criteria::ASC) Order by the idmarca column
 * @method DescuentodetalleQuery orderByIdproductovariante($order = Criteria::ASC) Order by the idproductovariante column
 *
 * @method DescuentodetalleQuery groupByIddescuentodetalle() Group by the iddescuentodetalle column
 * @method DescuentodetalleQuery groupByIddescuento() Group by the iddescuento column
 * @method DescuentodetalleQuery groupByIdproducto() Group by the idproducto column
 * @method DescuentodetalleQuery groupByIdmarca() Group by the idmarca column
 * @method DescuentodetalleQuery groupByIdproductovariante() Group by the idproductovariante column
 *
 * @method DescuentodetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DescuentodetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DescuentodetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DescuentodetalleQuery leftJoinDescuento($relationAlias = null) Adds a LEFT JOIN clause to the query using the Descuento relation
 * @method DescuentodetalleQuery rightJoinDescuento($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Descuento relation
 * @method DescuentodetalleQuery innerJoinDescuento($relationAlias = null) Adds a INNER JOIN clause to the query using the Descuento relation
 *
 * @method DescuentodetalleQuery leftJoinMarca($relationAlias = null) Adds a LEFT JOIN clause to the query using the Marca relation
 * @method DescuentodetalleQuery rightJoinMarca($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Marca relation
 * @method DescuentodetalleQuery innerJoinMarca($relationAlias = null) Adds a INNER JOIN clause to the query using the Marca relation
 *
 * @method DescuentodetalleQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method DescuentodetalleQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method DescuentodetalleQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method DescuentodetalleQuery leftJoinProductovariante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productovariante relation
 * @method DescuentodetalleQuery rightJoinProductovariante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productovariante relation
 * @method DescuentodetalleQuery innerJoinProductovariante($relationAlias = null) Adds a INNER JOIN clause to the query using the Productovariante relation
 *
 * @method Descuentodetalle findOne(PropelPDO $con = null) Return the first Descuentodetalle matching the query
 * @method Descuentodetalle findOneOrCreate(PropelPDO $con = null) Return the first Descuentodetalle matching the query, or a new Descuentodetalle object populated from the query conditions when no match is found
 *
 * @method Descuentodetalle findOneByIddescuento(int $iddescuento) Return the first Descuentodetalle filtered by the iddescuento column
 * @method Descuentodetalle findOneByIdproducto(int $idproducto) Return the first Descuentodetalle filtered by the idproducto column
 * @method Descuentodetalle findOneByIdmarca(int $idmarca) Return the first Descuentodetalle filtered by the idmarca column
 * @method Descuentodetalle findOneByIdproductovariante(int $idproductovariante) Return the first Descuentodetalle filtered by the idproductovariante column
 *
 * @method array findByIddescuentodetalle(int $iddescuentodetalle) Return Descuentodetalle objects filtered by the iddescuentodetalle column
 * @method array findByIddescuento(int $iddescuento) Return Descuentodetalle objects filtered by the iddescuento column
 * @method array findByIdproducto(int $idproducto) Return Descuentodetalle objects filtered by the idproducto column
 * @method array findByIdmarca(int $idmarca) Return Descuentodetalle objects filtered by the idmarca column
 * @method array findByIdproductovariante(int $idproductovariante) Return Descuentodetalle objects filtered by the idproductovariante column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseDescuentodetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDescuentodetalleQuery object.
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
            $modelName = 'Descuentodetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DescuentodetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DescuentodetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DescuentodetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DescuentodetalleQuery) {
            return $criteria;
        }
        $query = new DescuentodetalleQuery(null, null, $modelAlias);

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
     * @return   Descuentodetalle|Descuentodetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DescuentodetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DescuentodetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Descuentodetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIddescuentodetalle($key, $con = null)
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
     * @return                 Descuentodetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `iddescuentodetalle`, `iddescuento`, `idproducto`, `idmarca`, `idproductovariante` FROM `descuentodetalle` WHERE `iddescuentodetalle` = :p0';
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
            $obj = new Descuentodetalle();
            $obj->hydrate($row);
            DescuentodetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Descuentodetalle|Descuentodetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Descuentodetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return DescuentodetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DescuentodetallePeer::IDDESCUENTODETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DescuentodetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DescuentodetallePeer::IDDESCUENTODETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the iddescuentodetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIddescuentodetalle(1234); // WHERE iddescuentodetalle = 1234
     * $query->filterByIddescuentodetalle(array(12, 34)); // WHERE iddescuentodetalle IN (12, 34)
     * $query->filterByIddescuentodetalle(array('min' => 12)); // WHERE iddescuentodetalle >= 12
     * $query->filterByIddescuentodetalle(array('max' => 12)); // WHERE iddescuentodetalle <= 12
     * </code>
     *
     * @param     mixed $iddescuentodetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DescuentodetalleQuery The current query, for fluid interface
     */
    public function filterByIddescuentodetalle($iddescuentodetalle = null, $comparison = null)
    {
        if (is_array($iddescuentodetalle)) {
            $useMinMax = false;
            if (isset($iddescuentodetalle['min'])) {
                $this->addUsingAlias(DescuentodetallePeer::IDDESCUENTODETALLE, $iddescuentodetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddescuentodetalle['max'])) {
                $this->addUsingAlias(DescuentodetallePeer::IDDESCUENTODETALLE, $iddescuentodetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DescuentodetallePeer::IDDESCUENTODETALLE, $iddescuentodetalle, $comparison);
    }

    /**
     * Filter the query on the iddescuento column
     *
     * Example usage:
     * <code>
     * $query->filterByIddescuento(1234); // WHERE iddescuento = 1234
     * $query->filterByIddescuento(array(12, 34)); // WHERE iddescuento IN (12, 34)
     * $query->filterByIddescuento(array('min' => 12)); // WHERE iddescuento >= 12
     * $query->filterByIddescuento(array('max' => 12)); // WHERE iddescuento <= 12
     * </code>
     *
     * @see       filterByDescuento()
     *
     * @param     mixed $iddescuento The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DescuentodetalleQuery The current query, for fluid interface
     */
    public function filterByIddescuento($iddescuento = null, $comparison = null)
    {
        if (is_array($iddescuento)) {
            $useMinMax = false;
            if (isset($iddescuento['min'])) {
                $this->addUsingAlias(DescuentodetallePeer::IDDESCUENTO, $iddescuento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddescuento['max'])) {
                $this->addUsingAlias(DescuentodetallePeer::IDDESCUENTO, $iddescuento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DescuentodetallePeer::IDDESCUENTO, $iddescuento, $comparison);
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
     * @return DescuentodetalleQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(DescuentodetallePeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(DescuentodetallePeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DescuentodetallePeer::IDPRODUCTO, $idproducto, $comparison);
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
     * @return DescuentodetalleQuery The current query, for fluid interface
     */
    public function filterByIdmarca($idmarca = null, $comparison = null)
    {
        if (is_array($idmarca)) {
            $useMinMax = false;
            if (isset($idmarca['min'])) {
                $this->addUsingAlias(DescuentodetallePeer::IDMARCA, $idmarca['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmarca['max'])) {
                $this->addUsingAlias(DescuentodetallePeer::IDMARCA, $idmarca['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DescuentodetallePeer::IDMARCA, $idmarca, $comparison);
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
     * @return DescuentodetalleQuery The current query, for fluid interface
     */
    public function filterByIdproductovariante($idproductovariante = null, $comparison = null)
    {
        if (is_array($idproductovariante)) {
            $useMinMax = false;
            if (isset($idproductovariante['min'])) {
                $this->addUsingAlias(DescuentodetallePeer::IDPRODUCTOVARIANTE, $idproductovariante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductovariante['max'])) {
                $this->addUsingAlias(DescuentodetallePeer::IDPRODUCTOVARIANTE, $idproductovariante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DescuentodetallePeer::IDPRODUCTOVARIANTE, $idproductovariante, $comparison);
    }

    /**
     * Filter the query by a related Descuento object
     *
     * @param   Descuento|PropelObjectCollection $descuento The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DescuentodetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDescuento($descuento, $comparison = null)
    {
        if ($descuento instanceof Descuento) {
            return $this
                ->addUsingAlias(DescuentodetallePeer::IDDESCUENTO, $descuento->getIddescuento(), $comparison);
        } elseif ($descuento instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DescuentodetallePeer::IDDESCUENTO, $descuento->toKeyValue('PrimaryKey', 'Iddescuento'), $comparison);
        } else {
            throw new PropelException('filterByDescuento() only accepts arguments of type Descuento or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Descuento relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DescuentodetalleQuery The current query, for fluid interface
     */
    public function joinDescuento($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Descuento');

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
            $this->addJoinObject($join, 'Descuento');
        }

        return $this;
    }

    /**
     * Use the Descuento relation Descuento object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DescuentoQuery A secondary query class using the current class as primary query
     */
    public function useDescuentoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDescuento($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Descuento', 'DescuentoQuery');
    }

    /**
     * Filter the query by a related Marca object
     *
     * @param   Marca|PropelObjectCollection $marca The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DescuentodetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMarca($marca, $comparison = null)
    {
        if ($marca instanceof Marca) {
            return $this
                ->addUsingAlias(DescuentodetallePeer::IDMARCA, $marca->getIdmarca(), $comparison);
        } elseif ($marca instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DescuentodetallePeer::IDMARCA, $marca->toKeyValue('PrimaryKey', 'Idmarca'), $comparison);
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
     * @return DescuentodetalleQuery The current query, for fluid interface
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
     * @return                 DescuentodetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(DescuentodetallePeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DescuentodetallePeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return DescuentodetalleQuery The current query, for fluid interface
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
     * @return                 DescuentodetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductovariante($productovariante, $comparison = null)
    {
        if ($productovariante instanceof Productovariante) {
            return $this
                ->addUsingAlias(DescuentodetallePeer::IDPRODUCTOVARIANTE, $productovariante->getIdproductovariante(), $comparison);
        } elseif ($productovariante instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DescuentodetallePeer::IDPRODUCTOVARIANTE, $productovariante->toKeyValue('PrimaryKey', 'Idproductovariante'), $comparison);
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
     * @return DescuentodetalleQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Descuentodetalle $descuentodetalle Object to remove from the list of results
     *
     * @return DescuentodetalleQuery The current query, for fluid interface
     */
    public function prune($descuentodetalle = null)
    {
        if ($descuentodetalle) {
            $this->addUsingAlias(DescuentodetallePeer::IDDESCUENTODETALLE, $descuentodetalle->getIddescuentodetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
