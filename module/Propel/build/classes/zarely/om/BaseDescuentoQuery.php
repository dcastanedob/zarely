<?php


/**
 * Base class that represents a query for the 'descuento' table.
 *
 *
 *
 * @method DescuentoQuery orderByIddescuento($order = Criteria::ASC) Order by the iddescuento column
 * @method DescuentoQuery orderByDescuentoNombre($order = Criteria::ASC) Order by the descuento_nombre column
 * @method DescuentoQuery orderByDescuentoFechainicio($order = Criteria::ASC) Order by the descuento_fechainicio column
 * @method DescuentoQuery orderByDescuentoFechafin($order = Criteria::ASC) Order by the descuento_fechafin column
 * @method DescuentoQuery orderByDescuentoEstatus($order = Criteria::ASC) Order by the descuento_estatus column
 * @method DescuentoQuery orderByDescuentoTipo($order = Criteria::ASC) Order by the descuento_tipo column
 * @method DescuentoQuery orderByDescuentoDescripcion($order = Criteria::ASC) Order by the descuento_descripcion column
 * @method DescuentoQuery orderByDescuentoCantidad($order = Criteria::ASC) Order by the descuento_cantidad column
 *
 * @method DescuentoQuery groupByIddescuento() Group by the iddescuento column
 * @method DescuentoQuery groupByDescuentoNombre() Group by the descuento_nombre column
 * @method DescuentoQuery groupByDescuentoFechainicio() Group by the descuento_fechainicio column
 * @method DescuentoQuery groupByDescuentoFechafin() Group by the descuento_fechafin column
 * @method DescuentoQuery groupByDescuentoEstatus() Group by the descuento_estatus column
 * @method DescuentoQuery groupByDescuentoTipo() Group by the descuento_tipo column
 * @method DescuentoQuery groupByDescuentoDescripcion() Group by the descuento_descripcion column
 * @method DescuentoQuery groupByDescuentoCantidad() Group by the descuento_cantidad column
 *
 * @method DescuentoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DescuentoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DescuentoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DescuentoQuery leftJoinDescuentodetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Descuentodetalle relation
 * @method DescuentoQuery rightJoinDescuentodetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Descuentodetalle relation
 * @method DescuentoQuery innerJoinDescuentodetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Descuentodetalle relation
 *
 * @method DescuentoQuery leftJoinVentadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ventadetalle relation
 * @method DescuentoQuery rightJoinVentadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ventadetalle relation
 * @method DescuentoQuery innerJoinVentadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Ventadetalle relation
 *
 * @method Descuento findOne(PropelPDO $con = null) Return the first Descuento matching the query
 * @method Descuento findOneOrCreate(PropelPDO $con = null) Return the first Descuento matching the query, or a new Descuento object populated from the query conditions when no match is found
 *
 * @method Descuento findOneByDescuentoNombre(string $descuento_nombre) Return the first Descuento filtered by the descuento_nombre column
 * @method Descuento findOneByDescuentoFechainicio(string $descuento_fechainicio) Return the first Descuento filtered by the descuento_fechainicio column
 * @method Descuento findOneByDescuentoFechafin(string $descuento_fechafin) Return the first Descuento filtered by the descuento_fechafin column
 * @method Descuento findOneByDescuentoEstatus(boolean $descuento_estatus) Return the first Descuento filtered by the descuento_estatus column
 * @method Descuento findOneByDescuentoTipo(string $descuento_tipo) Return the first Descuento filtered by the descuento_tipo column
 * @method Descuento findOneByDescuentoDescripcion(string $descuento_descripcion) Return the first Descuento filtered by the descuento_descripcion column
 * @method Descuento findOneByDescuentoCantidad(string $descuento_cantidad) Return the first Descuento filtered by the descuento_cantidad column
 *
 * @method array findByIddescuento(int $iddescuento) Return Descuento objects filtered by the iddescuento column
 * @method array findByDescuentoNombre(string $descuento_nombre) Return Descuento objects filtered by the descuento_nombre column
 * @method array findByDescuentoFechainicio(string $descuento_fechainicio) Return Descuento objects filtered by the descuento_fechainicio column
 * @method array findByDescuentoFechafin(string $descuento_fechafin) Return Descuento objects filtered by the descuento_fechafin column
 * @method array findByDescuentoEstatus(boolean $descuento_estatus) Return Descuento objects filtered by the descuento_estatus column
 * @method array findByDescuentoTipo(string $descuento_tipo) Return Descuento objects filtered by the descuento_tipo column
 * @method array findByDescuentoDescripcion(string $descuento_descripcion) Return Descuento objects filtered by the descuento_descripcion column
 * @method array findByDescuentoCantidad(string $descuento_cantidad) Return Descuento objects filtered by the descuento_cantidad column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseDescuentoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDescuentoQuery object.
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
            $modelName = 'Descuento';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DescuentoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DescuentoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DescuentoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DescuentoQuery) {
            return $criteria;
        }
        $query = new DescuentoQuery(null, null, $modelAlias);

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
     * @return   Descuento|Descuento[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DescuentoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DescuentoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Descuento A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIddescuento($key, $con = null)
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
     * @return                 Descuento A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `iddescuento`, `descuento_nombre`, `descuento_fechainicio`, `descuento_fechafin`, `descuento_estatus`, `descuento_tipo`, `descuento_descripcion`, `descuento_cantidad` FROM `descuento` WHERE `iddescuento` = :p0';
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
            $obj = new Descuento();
            $obj->hydrate($row);
            DescuentoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Descuento|Descuento[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Descuento[]|mixed the list of results, formatted by the current formatter
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
     * @return DescuentoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DescuentoPeer::IDDESCUENTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DescuentoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DescuentoPeer::IDDESCUENTO, $keys, Criteria::IN);
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
     * @param     mixed $iddescuento The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DescuentoQuery The current query, for fluid interface
     */
    public function filterByIddescuento($iddescuento = null, $comparison = null)
    {
        if (is_array($iddescuento)) {
            $useMinMax = false;
            if (isset($iddescuento['min'])) {
                $this->addUsingAlias(DescuentoPeer::IDDESCUENTO, $iddescuento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddescuento['max'])) {
                $this->addUsingAlias(DescuentoPeer::IDDESCUENTO, $iddescuento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DescuentoPeer::IDDESCUENTO, $iddescuento, $comparison);
    }

    /**
     * Filter the query on the descuento_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByDescuentoNombre('fooValue');   // WHERE descuento_nombre = 'fooValue'
     * $query->filterByDescuentoNombre('%fooValue%'); // WHERE descuento_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descuentoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DescuentoQuery The current query, for fluid interface
     */
    public function filterByDescuentoNombre($descuentoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descuentoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descuentoNombre)) {
                $descuentoNombre = str_replace('*', '%', $descuentoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DescuentoPeer::DESCUENTO_NOMBRE, $descuentoNombre, $comparison);
    }

    /**
     * Filter the query on the descuento_fechainicio column
     *
     * Example usage:
     * <code>
     * $query->filterByDescuentoFechainicio('2011-03-14'); // WHERE descuento_fechainicio = '2011-03-14'
     * $query->filterByDescuentoFechainicio('now'); // WHERE descuento_fechainicio = '2011-03-14'
     * $query->filterByDescuentoFechainicio(array('max' => 'yesterday')); // WHERE descuento_fechainicio < '2011-03-13'
     * </code>
     *
     * @param     mixed $descuentoFechainicio The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DescuentoQuery The current query, for fluid interface
     */
    public function filterByDescuentoFechainicio($descuentoFechainicio = null, $comparison = null)
    {
        if (is_array($descuentoFechainicio)) {
            $useMinMax = false;
            if (isset($descuentoFechainicio['min'])) {
                $this->addUsingAlias(DescuentoPeer::DESCUENTO_FECHAINICIO, $descuentoFechainicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($descuentoFechainicio['max'])) {
                $this->addUsingAlias(DescuentoPeer::DESCUENTO_FECHAINICIO, $descuentoFechainicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DescuentoPeer::DESCUENTO_FECHAINICIO, $descuentoFechainicio, $comparison);
    }

    /**
     * Filter the query on the descuento_fechafin column
     *
     * Example usage:
     * <code>
     * $query->filterByDescuentoFechafin('2011-03-14'); // WHERE descuento_fechafin = '2011-03-14'
     * $query->filterByDescuentoFechafin('now'); // WHERE descuento_fechafin = '2011-03-14'
     * $query->filterByDescuentoFechafin(array('max' => 'yesterday')); // WHERE descuento_fechafin < '2011-03-13'
     * </code>
     *
     * @param     mixed $descuentoFechafin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DescuentoQuery The current query, for fluid interface
     */
    public function filterByDescuentoFechafin($descuentoFechafin = null, $comparison = null)
    {
        if (is_array($descuentoFechafin)) {
            $useMinMax = false;
            if (isset($descuentoFechafin['min'])) {
                $this->addUsingAlias(DescuentoPeer::DESCUENTO_FECHAFIN, $descuentoFechafin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($descuentoFechafin['max'])) {
                $this->addUsingAlias(DescuentoPeer::DESCUENTO_FECHAFIN, $descuentoFechafin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DescuentoPeer::DESCUENTO_FECHAFIN, $descuentoFechafin, $comparison);
    }

    /**
     * Filter the query on the descuento_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByDescuentoEstatus(true); // WHERE descuento_estatus = true
     * $query->filterByDescuentoEstatus('yes'); // WHERE descuento_estatus = true
     * </code>
     *
     * @param     boolean|string $descuentoEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DescuentoQuery The current query, for fluid interface
     */
    public function filterByDescuentoEstatus($descuentoEstatus = null, $comparison = null)
    {
        if (is_string($descuentoEstatus)) {
            $descuentoEstatus = in_array(strtolower($descuentoEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(DescuentoPeer::DESCUENTO_ESTATUS, $descuentoEstatus, $comparison);
    }

    /**
     * Filter the query on the descuento_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByDescuentoTipo('fooValue');   // WHERE descuento_tipo = 'fooValue'
     * $query->filterByDescuentoTipo('%fooValue%'); // WHERE descuento_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descuentoTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DescuentoQuery The current query, for fluid interface
     */
    public function filterByDescuentoTipo($descuentoTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descuentoTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descuentoTipo)) {
                $descuentoTipo = str_replace('*', '%', $descuentoTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DescuentoPeer::DESCUENTO_TIPO, $descuentoTipo, $comparison);
    }

    /**
     * Filter the query on the descuento_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByDescuentoDescripcion('fooValue');   // WHERE descuento_descripcion = 'fooValue'
     * $query->filterByDescuentoDescripcion('%fooValue%'); // WHERE descuento_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descuentoDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DescuentoQuery The current query, for fluid interface
     */
    public function filterByDescuentoDescripcion($descuentoDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descuentoDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descuentoDescripcion)) {
                $descuentoDescripcion = str_replace('*', '%', $descuentoDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DescuentoPeer::DESCUENTO_DESCRIPCION, $descuentoDescripcion, $comparison);
    }

    /**
     * Filter the query on the descuento_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByDescuentoCantidad(1234); // WHERE descuento_cantidad = 1234
     * $query->filterByDescuentoCantidad(array(12, 34)); // WHERE descuento_cantidad IN (12, 34)
     * $query->filterByDescuentoCantidad(array('min' => 12)); // WHERE descuento_cantidad >= 12
     * $query->filterByDescuentoCantidad(array('max' => 12)); // WHERE descuento_cantidad <= 12
     * </code>
     *
     * @param     mixed $descuentoCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DescuentoQuery The current query, for fluid interface
     */
    public function filterByDescuentoCantidad($descuentoCantidad = null, $comparison = null)
    {
        if (is_array($descuentoCantidad)) {
            $useMinMax = false;
            if (isset($descuentoCantidad['min'])) {
                $this->addUsingAlias(DescuentoPeer::DESCUENTO_CANTIDAD, $descuentoCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($descuentoCantidad['max'])) {
                $this->addUsingAlias(DescuentoPeer::DESCUENTO_CANTIDAD, $descuentoCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DescuentoPeer::DESCUENTO_CANTIDAD, $descuentoCantidad, $comparison);
    }

    /**
     * Filter the query by a related Descuentodetalle object
     *
     * @param   Descuentodetalle|PropelObjectCollection $descuentodetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DescuentoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDescuentodetalle($descuentodetalle, $comparison = null)
    {
        if ($descuentodetalle instanceof Descuentodetalle) {
            return $this
                ->addUsingAlias(DescuentoPeer::IDDESCUENTO, $descuentodetalle->getIddescuento(), $comparison);
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
     * @return DescuentoQuery The current query, for fluid interface
     */
    public function joinDescuentodetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useDescuentodetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDescuentodetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Descuentodetalle', 'DescuentodetalleQuery');
    }

    /**
     * Filter the query by a related Ventadetalle object
     *
     * @param   Ventadetalle|PropelObjectCollection $ventadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DescuentoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVentadetalle($ventadetalle, $comparison = null)
    {
        if ($ventadetalle instanceof Ventadetalle) {
            return $this
                ->addUsingAlias(DescuentoPeer::IDDESCUENTO, $ventadetalle->getIddescuento(), $comparison);
        } elseif ($ventadetalle instanceof PropelObjectCollection) {
            return $this
                ->useVentadetalleQuery()
                ->filterByPrimaryKeys($ventadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVentadetalle() only accepts arguments of type Ventadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ventadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DescuentoQuery The current query, for fluid interface
     */
    public function joinVentadetalle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ventadetalle');

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
            $this->addJoinObject($join, 'Ventadetalle');
        }

        return $this;
    }

    /**
     * Use the Ventadetalle relation Ventadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentadetalleQuery A secondary query class using the current class as primary query
     */
    public function useVentadetalleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinVentadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ventadetalle', 'VentadetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Descuento $descuento Object to remove from the list of results
     *
     * @return DescuentoQuery The current query, for fluid interface
     */
    public function prune($descuento = null)
    {
        if ($descuento) {
            $this->addUsingAlias(DescuentoPeer::IDDESCUENTO, $descuento->getIddescuento(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
