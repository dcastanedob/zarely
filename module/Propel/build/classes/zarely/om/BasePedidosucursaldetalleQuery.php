<?php


/**
 * Base class that represents a query for the 'pedidosucursaldetalle' table.
 *
 *
 *
 * @method PedidosucursaldetalleQuery orderByIdpedidosucursaldetalle($order = Criteria::ASC) Order by the idpedidosucursaldetalle column
 * @method PedidosucursaldetalleQuery orderByIdpedidosucursal($order = Criteria::ASC) Order by the idpedidosucursal column
 * @method PedidosucursaldetalleQuery orderByIdproductovariante($order = Criteria::ASC) Order by the idproductovariante column
 * @method PedidosucursaldetalleQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method PedidosucursaldetalleQuery orderByPedidosucursaldetalleCantidad($order = Criteria::ASC) Order by the pedidosucursaldetalle_cantidad column
 * @method PedidosucursaldetalleQuery orderByPedidosucursaldetalleEstatus($order = Criteria::ASC) Order by the pedidosucursaldetalle_estatus column
 *
 * @method PedidosucursaldetalleQuery groupByIdpedidosucursaldetalle() Group by the idpedidosucursaldetalle column
 * @method PedidosucursaldetalleQuery groupByIdpedidosucursal() Group by the idpedidosucursal column
 * @method PedidosucursaldetalleQuery groupByIdproductovariante() Group by the idproductovariante column
 * @method PedidosucursaldetalleQuery groupByIdproducto() Group by the idproducto column
 * @method PedidosucursaldetalleQuery groupByPedidosucursaldetalleCantidad() Group by the pedidosucursaldetalle_cantidad column
 * @method PedidosucursaldetalleQuery groupByPedidosucursaldetalleEstatus() Group by the pedidosucursaldetalle_estatus column
 *
 * @method PedidosucursaldetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PedidosucursaldetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PedidosucursaldetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PedidosucursaldetalleQuery leftJoinPedidosucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pedidosucursal relation
 * @method PedidosucursaldetalleQuery rightJoinPedidosucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pedidosucursal relation
 * @method PedidosucursaldetalleQuery innerJoinPedidosucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Pedidosucursal relation
 *
 * @method PedidosucursaldetalleQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method PedidosucursaldetalleQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method PedidosucursaldetalleQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method PedidosucursaldetalleQuery leftJoinProductovariante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productovariante relation
 * @method PedidosucursaldetalleQuery rightJoinProductovariante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productovariante relation
 * @method PedidosucursaldetalleQuery innerJoinProductovariante($relationAlias = null) Adds a INNER JOIN clause to the query using the Productovariante relation
 *
 * @method Pedidosucursaldetalle findOne(PropelPDO $con = null) Return the first Pedidosucursaldetalle matching the query
 * @method Pedidosucursaldetalle findOneOrCreate(PropelPDO $con = null) Return the first Pedidosucursaldetalle matching the query, or a new Pedidosucursaldetalle object populated from the query conditions when no match is found
 *
 * @method Pedidosucursaldetalle findOneByIdpedidosucursal(int $idpedidosucursal) Return the first Pedidosucursaldetalle filtered by the idpedidosucursal column
 * @method Pedidosucursaldetalle findOneByIdproductovariante(int $idproductovariante) Return the first Pedidosucursaldetalle filtered by the idproductovariante column
 * @method Pedidosucursaldetalle findOneByIdproducto(int $idproducto) Return the first Pedidosucursaldetalle filtered by the idproducto column
 * @method Pedidosucursaldetalle findOneByPedidosucursaldetalleCantidad(int $pedidosucursaldetalle_cantidad) Return the first Pedidosucursaldetalle filtered by the pedidosucursaldetalle_cantidad column
 * @method Pedidosucursaldetalle findOneByPedidosucursaldetalleEstatus(string $pedidosucursaldetalle_estatus) Return the first Pedidosucursaldetalle filtered by the pedidosucursaldetalle_estatus column
 *
 * @method array findByIdpedidosucursaldetalle(int $idpedidosucursaldetalle) Return Pedidosucursaldetalle objects filtered by the idpedidosucursaldetalle column
 * @method array findByIdpedidosucursal(int $idpedidosucursal) Return Pedidosucursaldetalle objects filtered by the idpedidosucursal column
 * @method array findByIdproductovariante(int $idproductovariante) Return Pedidosucursaldetalle objects filtered by the idproductovariante column
 * @method array findByIdproducto(int $idproducto) Return Pedidosucursaldetalle objects filtered by the idproducto column
 * @method array findByPedidosucursaldetalleCantidad(int $pedidosucursaldetalle_cantidad) Return Pedidosucursaldetalle objects filtered by the pedidosucursaldetalle_cantidad column
 * @method array findByPedidosucursaldetalleEstatus(string $pedidosucursaldetalle_estatus) Return Pedidosucursaldetalle objects filtered by the pedidosucursaldetalle_estatus column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BasePedidosucursaldetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePedidosucursaldetalleQuery object.
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
            $modelName = 'Pedidosucursaldetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PedidosucursaldetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PedidosucursaldetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PedidosucursaldetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PedidosucursaldetalleQuery) {
            return $criteria;
        }
        $query = new PedidosucursaldetalleQuery(null, null, $modelAlias);

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
     * @return   Pedidosucursaldetalle|Pedidosucursaldetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PedidosucursaldetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PedidosucursaldetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Pedidosucursaldetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpedidosucursaldetalle($key, $con = null)
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
     * @return                 Pedidosucursaldetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpedidosucursaldetalle`, `idpedidosucursal`, `idproductovariante`, `idproducto`, `pedidosucursaldetalle_cantidad`, `pedidosucursaldetalle_estatus` FROM `pedidosucursaldetalle` WHERE `idpedidosucursaldetalle` = :p0';
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
            $obj = new Pedidosucursaldetalle();
            $obj->hydrate($row);
            PedidosucursaldetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Pedidosucursaldetalle|Pedidosucursaldetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Pedidosucursaldetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return PedidosucursaldetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PedidosucursaldetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idpedidosucursaldetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpedidosucursaldetalle(1234); // WHERE idpedidosucursaldetalle = 1234
     * $query->filterByIdpedidosucursaldetalle(array(12, 34)); // WHERE idpedidosucursaldetalle IN (12, 34)
     * $query->filterByIdpedidosucursaldetalle(array('min' => 12)); // WHERE idpedidosucursaldetalle >= 12
     * $query->filterByIdpedidosucursaldetalle(array('max' => 12)); // WHERE idpedidosucursaldetalle <= 12
     * </code>
     *
     * @param     mixed $idpedidosucursaldetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidosucursaldetalleQuery The current query, for fluid interface
     */
    public function filterByIdpedidosucursaldetalle($idpedidosucursaldetalle = null, $comparison = null)
    {
        if (is_array($idpedidosucursaldetalle)) {
            $useMinMax = false;
            if (isset($idpedidosucursaldetalle['min'])) {
                $this->addUsingAlias(PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE, $idpedidosucursaldetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpedidosucursaldetalle['max'])) {
                $this->addUsingAlias(PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE, $idpedidosucursaldetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE, $idpedidosucursaldetalle, $comparison);
    }

    /**
     * Filter the query on the idpedidosucursal column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpedidosucursal(1234); // WHERE idpedidosucursal = 1234
     * $query->filterByIdpedidosucursal(array(12, 34)); // WHERE idpedidosucursal IN (12, 34)
     * $query->filterByIdpedidosucursal(array('min' => 12)); // WHERE idpedidosucursal >= 12
     * $query->filterByIdpedidosucursal(array('max' => 12)); // WHERE idpedidosucursal <= 12
     * </code>
     *
     * @see       filterByPedidosucursal()
     *
     * @param     mixed $idpedidosucursal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidosucursaldetalleQuery The current query, for fluid interface
     */
    public function filterByIdpedidosucursal($idpedidosucursal = null, $comparison = null)
    {
        if (is_array($idpedidosucursal)) {
            $useMinMax = false;
            if (isset($idpedidosucursal['min'])) {
                $this->addUsingAlias(PedidosucursaldetallePeer::IDPEDIDOSUCURSAL, $idpedidosucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpedidosucursal['max'])) {
                $this->addUsingAlias(PedidosucursaldetallePeer::IDPEDIDOSUCURSAL, $idpedidosucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidosucursaldetallePeer::IDPEDIDOSUCURSAL, $idpedidosucursal, $comparison);
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
     * @return PedidosucursaldetalleQuery The current query, for fluid interface
     */
    public function filterByIdproductovariante($idproductovariante = null, $comparison = null)
    {
        if (is_array($idproductovariante)) {
            $useMinMax = false;
            if (isset($idproductovariante['min'])) {
                $this->addUsingAlias(PedidosucursaldetallePeer::IDPRODUCTOVARIANTE, $idproductovariante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductovariante['max'])) {
                $this->addUsingAlias(PedidosucursaldetallePeer::IDPRODUCTOVARIANTE, $idproductovariante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidosucursaldetallePeer::IDPRODUCTOVARIANTE, $idproductovariante, $comparison);
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
     * @return PedidosucursaldetalleQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(PedidosucursaldetallePeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(PedidosucursaldetallePeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidosucursaldetallePeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the pedidosucursaldetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidosucursaldetalleCantidad(1234); // WHERE pedidosucursaldetalle_cantidad = 1234
     * $query->filterByPedidosucursaldetalleCantidad(array(12, 34)); // WHERE pedidosucursaldetalle_cantidad IN (12, 34)
     * $query->filterByPedidosucursaldetalleCantidad(array('min' => 12)); // WHERE pedidosucursaldetalle_cantidad >= 12
     * $query->filterByPedidosucursaldetalleCantidad(array('max' => 12)); // WHERE pedidosucursaldetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $pedidosucursaldetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidosucursaldetalleQuery The current query, for fluid interface
     */
    public function filterByPedidosucursaldetalleCantidad($pedidosucursaldetalleCantidad = null, $comparison = null)
    {
        if (is_array($pedidosucursaldetalleCantidad)) {
            $useMinMax = false;
            if (isset($pedidosucursaldetalleCantidad['min'])) {
                $this->addUsingAlias(PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_CANTIDAD, $pedidosucursaldetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pedidosucursaldetalleCantidad['max'])) {
                $this->addUsingAlias(PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_CANTIDAD, $pedidosucursaldetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_CANTIDAD, $pedidosucursaldetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the pedidosucursaldetalle_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidosucursaldetalleEstatus('fooValue');   // WHERE pedidosucursaldetalle_estatus = 'fooValue'
     * $query->filterByPedidosucursaldetalleEstatus('%fooValue%'); // WHERE pedidosucursaldetalle_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pedidosucursaldetalleEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidosucursaldetalleQuery The current query, for fluid interface
     */
    public function filterByPedidosucursaldetalleEstatus($pedidosucursaldetalleEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pedidosucursaldetalleEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pedidosucursaldetalleEstatus)) {
                $pedidosucursaldetalleEstatus = str_replace('*', '%', $pedidosucursaldetalleEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PedidosucursaldetallePeer::PEDIDOSUCURSALDETALLE_ESTATUS, $pedidosucursaldetalleEstatus, $comparison);
    }

    /**
     * Filter the query by a related Pedidosucursal object
     *
     * @param   Pedidosucursal|PropelObjectCollection $pedidosucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PedidosucursaldetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPedidosucursal($pedidosucursal, $comparison = null)
    {
        if ($pedidosucursal instanceof Pedidosucursal) {
            return $this
                ->addUsingAlias(PedidosucursaldetallePeer::IDPEDIDOSUCURSAL, $pedidosucursal->getIdpedidosucursal(), $comparison);
        } elseif ($pedidosucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PedidosucursaldetallePeer::IDPEDIDOSUCURSAL, $pedidosucursal->toKeyValue('PrimaryKey', 'Idpedidosucursal'), $comparison);
        } else {
            throw new PropelException('filterByPedidosucursal() only accepts arguments of type Pedidosucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pedidosucursal relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PedidosucursaldetalleQuery The current query, for fluid interface
     */
    public function joinPedidosucursal($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pedidosucursal');

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
            $this->addJoinObject($join, 'Pedidosucursal');
        }

        return $this;
    }

    /**
     * Use the Pedidosucursal relation Pedidosucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PedidosucursalQuery A secondary query class using the current class as primary query
     */
    public function usePedidosucursalQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPedidosucursal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pedidosucursal', 'PedidosucursalQuery');
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PedidosucursaldetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(PedidosucursaldetallePeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PedidosucursaldetallePeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return PedidosucursaldetalleQuery The current query, for fluid interface
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
     * @return                 PedidosucursaldetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductovariante($productovariante, $comparison = null)
    {
        if ($productovariante instanceof Productovariante) {
            return $this
                ->addUsingAlias(PedidosucursaldetallePeer::IDPRODUCTOVARIANTE, $productovariante->getIdproductovariante(), $comparison);
        } elseif ($productovariante instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PedidosucursaldetallePeer::IDPRODUCTOVARIANTE, $productovariante->toKeyValue('PrimaryKey', 'Idproductovariante'), $comparison);
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
     * @return PedidosucursaldetalleQuery The current query, for fluid interface
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
     * @param   Pedidosucursaldetalle $pedidosucursaldetalle Object to remove from the list of results
     *
     * @return PedidosucursaldetalleQuery The current query, for fluid interface
     */
    public function prune($pedidosucursaldetalle = null)
    {
        if ($pedidosucursaldetalle) {
            $this->addUsingAlias(PedidosucursaldetallePeer::IDPEDIDOSUCURSALDETALLE, $pedidosucursaldetalle->getIdpedidosucursaldetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
