<?php


/**
 * Base class that represents a query for the 'tipocalzado' table.
 *
 *
 *
 * @method TipocalzadoQuery orderByIdtipocalzado($order = Criteria::ASC) Order by the idtipocalzado column
 * @method TipocalzadoQuery orderByTipocalzadoNombre($order = Criteria::ASC) Order by the tipocalzado_nombre column
 * @method TipocalzadoQuery orderByTipocalzadoDescripcion($order = Criteria::ASC) Order by the tipocalzado_descripcion column
 *
 * @method TipocalzadoQuery groupByIdtipocalzado() Group by the idtipocalzado column
 * @method TipocalzadoQuery groupByTipocalzadoNombre() Group by the tipocalzado_nombre column
 * @method TipocalzadoQuery groupByTipocalzadoDescripcion() Group by the tipocalzado_descripcion column
 *
 * @method TipocalzadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TipocalzadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TipocalzadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TipocalzadoQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method TipocalzadoQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method TipocalzadoQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method Tipocalzado findOne(PropelPDO $con = null) Return the first Tipocalzado matching the query
 * @method Tipocalzado findOneOrCreate(PropelPDO $con = null) Return the first Tipocalzado matching the query, or a new Tipocalzado object populated from the query conditions when no match is found
 *
 * @method Tipocalzado findOneByTipocalzadoNombre(string $tipocalzado_nombre) Return the first Tipocalzado filtered by the tipocalzado_nombre column
 * @method Tipocalzado findOneByTipocalzadoDescripcion(string $tipocalzado_descripcion) Return the first Tipocalzado filtered by the tipocalzado_descripcion column
 *
 * @method array findByIdtipocalzado(int $idtipocalzado) Return Tipocalzado objects filtered by the idtipocalzado column
 * @method array findByTipocalzadoNombre(string $tipocalzado_nombre) Return Tipocalzado objects filtered by the tipocalzado_nombre column
 * @method array findByTipocalzadoDescripcion(string $tipocalzado_descripcion) Return Tipocalzado objects filtered by the tipocalzado_descripcion column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseTipocalzadoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTipocalzadoQuery object.
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
            $modelName = 'Tipocalzado';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TipocalzadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TipocalzadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TipocalzadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TipocalzadoQuery) {
            return $criteria;
        }
        $query = new TipocalzadoQuery(null, null, $modelAlias);

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
     * @return   Tipocalzado|Tipocalzado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TipocalzadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TipocalzadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Tipocalzado A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdtipocalzado($key, $con = null)
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
     * @return                 Tipocalzado A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idtipocalzado`, `tipocalzado_nombre`, `tipocalzado_descripcion` FROM `tipocalzado` WHERE `idtipocalzado` = :p0';
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
            $obj = new Tipocalzado();
            $obj->hydrate($row);
            TipocalzadoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Tipocalzado|Tipocalzado[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Tipocalzado[]|mixed the list of results, formatted by the current formatter
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
     * @return TipocalzadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TipocalzadoPeer::IDTIPOCALZADO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TipocalzadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TipocalzadoPeer::IDTIPOCALZADO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idtipocalzado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtipocalzado(1234); // WHERE idtipocalzado = 1234
     * $query->filterByIdtipocalzado(array(12, 34)); // WHERE idtipocalzado IN (12, 34)
     * $query->filterByIdtipocalzado(array('min' => 12)); // WHERE idtipocalzado >= 12
     * $query->filterByIdtipocalzado(array('max' => 12)); // WHERE idtipocalzado <= 12
     * </code>
     *
     * @param     mixed $idtipocalzado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipocalzadoQuery The current query, for fluid interface
     */
    public function filterByIdtipocalzado($idtipocalzado = null, $comparison = null)
    {
        if (is_array($idtipocalzado)) {
            $useMinMax = false;
            if (isset($idtipocalzado['min'])) {
                $this->addUsingAlias(TipocalzadoPeer::IDTIPOCALZADO, $idtipocalzado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtipocalzado['max'])) {
                $this->addUsingAlias(TipocalzadoPeer::IDTIPOCALZADO, $idtipocalzado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TipocalzadoPeer::IDTIPOCALZADO, $idtipocalzado, $comparison);
    }

    /**
     * Filter the query on the tipocalzado_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByTipocalzadoNombre('fooValue');   // WHERE tipocalzado_nombre = 'fooValue'
     * $query->filterByTipocalzadoNombre('%fooValue%'); // WHERE tipocalzado_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tipocalzadoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipocalzadoQuery The current query, for fluid interface
     */
    public function filterByTipocalzadoNombre($tipocalzadoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tipocalzadoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tipocalzadoNombre)) {
                $tipocalzadoNombre = str_replace('*', '%', $tipocalzadoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TipocalzadoPeer::TIPOCALZADO_NOMBRE, $tipocalzadoNombre, $comparison);
    }

    /**
     * Filter the query on the tipocalzado_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByTipocalzadoDescripcion('fooValue');   // WHERE tipocalzado_descripcion = 'fooValue'
     * $query->filterByTipocalzadoDescripcion('%fooValue%'); // WHERE tipocalzado_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tipocalzadoDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TipocalzadoQuery The current query, for fluid interface
     */
    public function filterByTipocalzadoDescripcion($tipocalzadoDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tipocalzadoDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tipocalzadoDescripcion)) {
                $tipocalzadoDescripcion = str_replace('*', '%', $tipocalzadoDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TipocalzadoPeer::TIPOCALZADO_DESCRIPCION, $tipocalzadoDescripcion, $comparison);
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TipocalzadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(TipocalzadoPeer::IDTIPOCALZADO, $producto->getIdtipocalzado(), $comparison);
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
     * @return TipocalzadoQuery The current query, for fluid interface
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
     * @param   Tipocalzado $tipocalzado Object to remove from the list of results
     *
     * @return TipocalzadoQuery The current query, for fluid interface
     */
    public function prune($tipocalzado = null)
    {
        if ($tipocalzado) {
            $this->addUsingAlias(TipocalzadoPeer::IDTIPOCALZADO, $tipocalzado->getIdtipocalzado(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
