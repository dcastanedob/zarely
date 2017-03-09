<?php


/**
 * Base class that represents a query for the 'pedido' table.
 *
 *
 *
 * @method PedidoQuery orderByIdpedido($order = Criteria::ASC) Order by the idpedido column
 * @method PedidoQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method PedidoQuery orderByPedidoFecha($order = Criteria::ASC) Order by the pedido_fecha column
 * @method PedidoQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method PedidoQuery orderByPedidoCantidad($order = Criteria::ASC) Order by the pedido_cantidad column
 * @method PedidoQuery orderByIdproductovariante($order = Criteria::ASC) Order by the idproductovariante column
 * @method PedidoQuery orderByPedidoNota($order = Criteria::ASC) Order by the pedido_nota column
 * @method PedidoQuery orderByPedidoEstatus($order = Criteria::ASC) Order by the pedido_estatus column
 *
 * @method PedidoQuery groupByIdpedido() Group by the idpedido column
 * @method PedidoQuery groupByIdsucursal() Group by the idsucursal column
 * @method PedidoQuery groupByPedidoFecha() Group by the pedido_fecha column
 * @method PedidoQuery groupByIdproducto() Group by the idproducto column
 * @method PedidoQuery groupByPedidoCantidad() Group by the pedido_cantidad column
 * @method PedidoQuery groupByIdproductovariante() Group by the idproductovariante column
 * @method PedidoQuery groupByPedidoNota() Group by the pedido_nota column
 * @method PedidoQuery groupByPedidoEstatus() Group by the pedido_estatus column
 *
 * @method PedidoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PedidoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PedidoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PedidoQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method PedidoQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method PedidoQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method PedidoQuery leftJoinProductovariante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productovariante relation
 * @method PedidoQuery rightJoinProductovariante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productovariante relation
 * @method PedidoQuery innerJoinProductovariante($relationAlias = null) Adds a INNER JOIN clause to the query using the Productovariante relation
 *
 * @method PedidoQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method PedidoQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method PedidoQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method Pedido findOne(PropelPDO $con = null) Return the first Pedido matching the query
 * @method Pedido findOneOrCreate(PropelPDO $con = null) Return the first Pedido matching the query, or a new Pedido object populated from the query conditions when no match is found
 *
 * @method Pedido findOneByIdsucursal(int $idsucursal) Return the first Pedido filtered by the idsucursal column
 * @method Pedido findOneByPedidoFecha(string $pedido_fecha) Return the first Pedido filtered by the pedido_fecha column
 * @method Pedido findOneByIdproducto(int $idproducto) Return the first Pedido filtered by the idproducto column
 * @method Pedido findOneByPedidoCantidad(int $pedido_cantidad) Return the first Pedido filtered by the pedido_cantidad column
 * @method Pedido findOneByIdproductovariante(int $idproductovariante) Return the first Pedido filtered by the idproductovariante column
 * @method Pedido findOneByPedidoNota(string $pedido_nota) Return the first Pedido filtered by the pedido_nota column
 * @method Pedido findOneByPedidoEstatus(string $pedido_estatus) Return the first Pedido filtered by the pedido_estatus column
 *
 * @method array findByIdpedido(int $idpedido) Return Pedido objects filtered by the idpedido column
 * @method array findByIdsucursal(int $idsucursal) Return Pedido objects filtered by the idsucursal column
 * @method array findByPedidoFecha(string $pedido_fecha) Return Pedido objects filtered by the pedido_fecha column
 * @method array findByIdproducto(int $idproducto) Return Pedido objects filtered by the idproducto column
 * @method array findByPedidoCantidad(int $pedido_cantidad) Return Pedido objects filtered by the pedido_cantidad column
 * @method array findByIdproductovariante(int $idproductovariante) Return Pedido objects filtered by the idproductovariante column
 * @method array findByPedidoNota(string $pedido_nota) Return Pedido objects filtered by the pedido_nota column
 * @method array findByPedidoEstatus(string $pedido_estatus) Return Pedido objects filtered by the pedido_estatus column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BasePedidoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePedidoQuery object.
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
            $modelName = 'Pedido';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PedidoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PedidoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PedidoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PedidoQuery) {
            return $criteria;
        }
        $query = new PedidoQuery(null, null, $modelAlias);

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
     * @return   Pedido|Pedido[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PedidoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PedidoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Pedido A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpedido($key, $con = null)
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
     * @return                 Pedido A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpedido`, `idsucursal`, `pedido_fecha`, `idproducto`, `pedido_cantidad`, `idproductovariante`, `pedido_nota`, `pedido_estatus` FROM `pedido` WHERE `idpedido` = :p0';
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
            $obj = new Pedido();
            $obj->hydrate($row);
            PedidoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Pedido|Pedido[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Pedido[]|mixed the list of results, formatted by the current formatter
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
     * @return PedidoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PedidoPeer::IDPEDIDO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PedidoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PedidoPeer::IDPEDIDO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idpedido column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpedido(1234); // WHERE idpedido = 1234
     * $query->filterByIdpedido(array(12, 34)); // WHERE idpedido IN (12, 34)
     * $query->filterByIdpedido(array('min' => 12)); // WHERE idpedido >= 12
     * $query->filterByIdpedido(array('max' => 12)); // WHERE idpedido <= 12
     * </code>
     *
     * @param     mixed $idpedido The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidoQuery The current query, for fluid interface
     */
    public function filterByIdpedido($idpedido = null, $comparison = null)
    {
        if (is_array($idpedido)) {
            $useMinMax = false;
            if (isset($idpedido['min'])) {
                $this->addUsingAlias(PedidoPeer::IDPEDIDO, $idpedido['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpedido['max'])) {
                $this->addUsingAlias(PedidoPeer::IDPEDIDO, $idpedido['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidoPeer::IDPEDIDO, $idpedido, $comparison);
    }

    /**
     * Filter the query on the idsucursal column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsucursal(1234); // WHERE idsucursal = 1234
     * $query->filterByIdsucursal(array(12, 34)); // WHERE idsucursal IN (12, 34)
     * $query->filterByIdsucursal(array('min' => 12)); // WHERE idsucursal >= 12
     * $query->filterByIdsucursal(array('max' => 12)); // WHERE idsucursal <= 12
     * </code>
     *
     * @see       filterBySucursal()
     *
     * @param     mixed $idsucursal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidoQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(PedidoPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(PedidoPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidoPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the pedido_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidoFecha('2011-03-14'); // WHERE pedido_fecha = '2011-03-14'
     * $query->filterByPedidoFecha('now'); // WHERE pedido_fecha = '2011-03-14'
     * $query->filterByPedidoFecha(array('max' => 'yesterday')); // WHERE pedido_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $pedidoFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidoQuery The current query, for fluid interface
     */
    public function filterByPedidoFecha($pedidoFecha = null, $comparison = null)
    {
        if (is_array($pedidoFecha)) {
            $useMinMax = false;
            if (isset($pedidoFecha['min'])) {
                $this->addUsingAlias(PedidoPeer::PEDIDO_FECHA, $pedidoFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pedidoFecha['max'])) {
                $this->addUsingAlias(PedidoPeer::PEDIDO_FECHA, $pedidoFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidoPeer::PEDIDO_FECHA, $pedidoFecha, $comparison);
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
     * @return PedidoQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(PedidoPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(PedidoPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidoPeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the pedido_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidoCantidad(1234); // WHERE pedido_cantidad = 1234
     * $query->filterByPedidoCantidad(array(12, 34)); // WHERE pedido_cantidad IN (12, 34)
     * $query->filterByPedidoCantidad(array('min' => 12)); // WHERE pedido_cantidad >= 12
     * $query->filterByPedidoCantidad(array('max' => 12)); // WHERE pedido_cantidad <= 12
     * </code>
     *
     * @param     mixed $pedidoCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidoQuery The current query, for fluid interface
     */
    public function filterByPedidoCantidad($pedidoCantidad = null, $comparison = null)
    {
        if (is_array($pedidoCantidad)) {
            $useMinMax = false;
            if (isset($pedidoCantidad['min'])) {
                $this->addUsingAlias(PedidoPeer::PEDIDO_CANTIDAD, $pedidoCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pedidoCantidad['max'])) {
                $this->addUsingAlias(PedidoPeer::PEDIDO_CANTIDAD, $pedidoCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidoPeer::PEDIDO_CANTIDAD, $pedidoCantidad, $comparison);
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
     * @return PedidoQuery The current query, for fluid interface
     */
    public function filterByIdproductovariante($idproductovariante = null, $comparison = null)
    {
        if (is_array($idproductovariante)) {
            $useMinMax = false;
            if (isset($idproductovariante['min'])) {
                $this->addUsingAlias(PedidoPeer::IDPRODUCTOVARIANTE, $idproductovariante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductovariante['max'])) {
                $this->addUsingAlias(PedidoPeer::IDPRODUCTOVARIANTE, $idproductovariante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidoPeer::IDPRODUCTOVARIANTE, $idproductovariante, $comparison);
    }

    /**
     * Filter the query on the pedido_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidoNota('fooValue');   // WHERE pedido_nota = 'fooValue'
     * $query->filterByPedidoNota('%fooValue%'); // WHERE pedido_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pedidoNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidoQuery The current query, for fluid interface
     */
    public function filterByPedidoNota($pedidoNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pedidoNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pedidoNota)) {
                $pedidoNota = str_replace('*', '%', $pedidoNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PedidoPeer::PEDIDO_NOTA, $pedidoNota, $comparison);
    }

    /**
     * Filter the query on the pedido_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidoEstatus('fooValue');   // WHERE pedido_estatus = 'fooValue'
     * $query->filterByPedidoEstatus('%fooValue%'); // WHERE pedido_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pedidoEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidoQuery The current query, for fluid interface
     */
    public function filterByPedidoEstatus($pedidoEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pedidoEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pedidoEstatus)) {
                $pedidoEstatus = str_replace('*', '%', $pedidoEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PedidoPeer::PEDIDO_ESTATUS, $pedidoEstatus, $comparison);
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PedidoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(PedidoPeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PedidoPeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return PedidoQuery The current query, for fluid interface
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
     * @param   Productovariante|PropelObjectCollection $productovariante The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PedidoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductovariante($productovariante, $comparison = null)
    {
        if ($productovariante instanceof Productovariante) {
            return $this
                ->addUsingAlias(PedidoPeer::IDPRODUCTOVARIANTE, $productovariante->getIdproductovariante(), $comparison);
        } elseif ($productovariante instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PedidoPeer::IDPRODUCTOVARIANTE, $productovariante->toKeyValue('PrimaryKey', 'Idproductovariante'), $comparison);
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
     * @return PedidoQuery The current query, for fluid interface
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
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PedidoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(PedidoPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PedidoPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
        } else {
            throw new PropelException('filterBySucursal() only accepts arguments of type Sucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Sucursal relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PedidoQuery The current query, for fluid interface
     */
    public function joinSucursal($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Sucursal');

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
            $this->addJoinObject($join, 'Sucursal');
        }

        return $this;
    }

    /**
     * Use the Sucursal relation Sucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SucursalQuery A secondary query class using the current class as primary query
     */
    public function useSucursalQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSucursal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sucursal', 'SucursalQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Pedido $pedido Object to remove from the list of results
     *
     * @return PedidoQuery The current query, for fluid interface
     */
    public function prune($pedido = null)
    {
        if ($pedido) {
            $this->addUsingAlias(PedidoPeer::IDPEDIDO, $pedido->getIdpedido(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
