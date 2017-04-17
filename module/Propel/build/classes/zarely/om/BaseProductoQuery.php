<?php


/**
 * Base class that represents a query for the 'producto' table.
 *
 *
 *
 * @method ProductoQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method ProductoQuery orderByProductoModelo($order = Criteria::ASC) Order by the producto_modelo column
 * @method ProductoQuery orderByIdmarca($order = Criteria::ASC) Order by the idmarca column
 * @method ProductoQuery orderByIdtemporada($order = Criteria::ASC) Order by the idtemporada column
 * @method ProductoQuery orderByProductoComisionable($order = Criteria::ASC) Order by the producto_comisionable column
 * @method ProductoQuery orderByIdproveedor($order = Criteria::ASC) Order by the idproveedor column
 * @method ProductoQuery orderByProductoDirigidoa($order = Criteria::ASC) Order by the producto_dirigidoa column
 * @method ProductoQuery orderByProductoPrecioventa($order = Criteria::ASC) Order by the producto_precioventa column
 * @method ProductoQuery orderByProductoPreciomayoreo($order = Criteria::ASC) Order by the producto_preciomayoreo column
 * @method ProductoQuery orderByProductoMinimo($order = Criteria::ASC) Order by the producto_minimo column
 * @method ProductoQuery orderByProductoReorden($order = Criteria::ASC) Order by the producto_reorden column
 * @method ProductoQuery orderByProductoMaximo($order = Criteria::ASC) Order by the producto_maximo column
 * @method ProductoQuery orderByIdtipocalzado($order = Criteria::ASC) Order by the idtipocalzado column
 * @method ProductoQuery orderByProductoDescripcion($order = Criteria::ASC) Order by the producto_descripcion column
 * @method ProductoQuery orderByProductoCosto($order = Criteria::ASC) Order by the producto_costo column
 *
 * @method ProductoQuery groupByIdproducto() Group by the idproducto column
 * @method ProductoQuery groupByProductoModelo() Group by the producto_modelo column
 * @method ProductoQuery groupByIdmarca() Group by the idmarca column
 * @method ProductoQuery groupByIdtemporada() Group by the idtemporada column
 * @method ProductoQuery groupByProductoComisionable() Group by the producto_comisionable column
 * @method ProductoQuery groupByIdproveedor() Group by the idproveedor column
 * @method ProductoQuery groupByProductoDirigidoa() Group by the producto_dirigidoa column
 * @method ProductoQuery groupByProductoPrecioventa() Group by the producto_precioventa column
 * @method ProductoQuery groupByProductoPreciomayoreo() Group by the producto_preciomayoreo column
 * @method ProductoQuery groupByProductoMinimo() Group by the producto_minimo column
 * @method ProductoQuery groupByProductoReorden() Group by the producto_reorden column
 * @method ProductoQuery groupByProductoMaximo() Group by the producto_maximo column
 * @method ProductoQuery groupByIdtipocalzado() Group by the idtipocalzado column
 * @method ProductoQuery groupByProductoDescripcion() Group by the producto_descripcion column
 * @method ProductoQuery groupByProductoCosto() Group by the producto_costo column
 *
 * @method ProductoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProductoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProductoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProductoQuery leftJoinMarca($relationAlias = null) Adds a LEFT JOIN clause to the query using the Marca relation
 * @method ProductoQuery rightJoinMarca($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Marca relation
 * @method ProductoQuery innerJoinMarca($relationAlias = null) Adds a INNER JOIN clause to the query using the Marca relation
 *
 * @method ProductoQuery leftJoinProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedor relation
 * @method ProductoQuery rightJoinProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedor relation
 * @method ProductoQuery innerJoinProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedor relation
 *
 * @method ProductoQuery leftJoinTemporada($relationAlias = null) Adds a LEFT JOIN clause to the query using the Temporada relation
 * @method ProductoQuery rightJoinTemporada($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Temporada relation
 * @method ProductoQuery innerJoinTemporada($relationAlias = null) Adds a INNER JOIN clause to the query using the Temporada relation
 *
 * @method ProductoQuery leftJoinTipocalzado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tipocalzado relation
 * @method ProductoQuery rightJoinTipocalzado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tipocalzado relation
 * @method ProductoQuery innerJoinTipocalzado($relationAlias = null) Adds a INNER JOIN clause to the query using the Tipocalzado relation
 *
 * @method ProductoQuery leftJoinDescuentodetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Descuentodetalle relation
 * @method ProductoQuery rightJoinDescuentodetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Descuentodetalle relation
 * @method ProductoQuery innerJoinDescuentodetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Descuentodetalle relation
 *
 * @method ProductoQuery leftJoinPedido($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pedido relation
 * @method ProductoQuery rightJoinPedido($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pedido relation
 * @method ProductoQuery innerJoinPedido($relationAlias = null) Adds a INNER JOIN clause to the query using the Pedido relation
 *
 * @method ProductoQuery leftJoinPedidomayoristadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pedidomayoristadetalle relation
 * @method ProductoQuery rightJoinPedidomayoristadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pedidomayoristadetalle relation
 * @method ProductoQuery innerJoinPedidomayoristadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Pedidomayoristadetalle relation
 *
 * @method ProductoQuery leftJoinProductocolor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productocolor relation
 * @method ProductoQuery rightJoinProductocolor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productocolor relation
 * @method ProductoQuery innerJoinProductocolor($relationAlias = null) Adds a INNER JOIN clause to the query using the Productocolor relation
 *
 * @method ProductoQuery leftJoinProductomaterial($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productomaterial relation
 * @method ProductoQuery rightJoinProductomaterial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productomaterial relation
 * @method ProductoQuery innerJoinProductomaterial($relationAlias = null) Adds a INNER JOIN clause to the query using the Productomaterial relation
 *
 * @method ProductoQuery leftJoinProductomedida($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productomedida relation
 * @method ProductoQuery rightJoinProductomedida($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productomedida relation
 * @method ProductoQuery innerJoinProductomedida($relationAlias = null) Adds a INNER JOIN clause to the query using the Productomedida relation
 *
 * @method ProductoQuery leftJoinProductotallaje($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productotallaje relation
 * @method ProductoQuery rightJoinProductotallaje($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productotallaje relation
 * @method ProductoQuery innerJoinProductotallaje($relationAlias = null) Adds a INNER JOIN clause to the query using the Productotallaje relation
 *
 * @method ProductoQuery leftJoinProductovariante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productovariante relation
 * @method ProductoQuery rightJoinProductovariante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productovariante relation
 * @method ProductoQuery innerJoinProductovariante($relationAlias = null) Adds a INNER JOIN clause to the query using the Productovariante relation
 *
 * @method ProductoQuery leftJoinPromociondetalleRelatedByIdproductooperando($relationAlias = null) Adds a LEFT JOIN clause to the query using the PromociondetalleRelatedByIdproductooperando relation
 * @method ProductoQuery rightJoinPromociondetalleRelatedByIdproductooperando($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PromociondetalleRelatedByIdproductooperando relation
 * @method ProductoQuery innerJoinPromociondetalleRelatedByIdproductooperando($relationAlias = null) Adds a INNER JOIN clause to the query using the PromociondetalleRelatedByIdproductooperando relation
 *
 * @method ProductoQuery leftJoinPromociondetalleRelatedByIdproductoresultado($relationAlias = null) Adds a LEFT JOIN clause to the query using the PromociondetalleRelatedByIdproductoresultado relation
 * @method ProductoQuery rightJoinPromociondetalleRelatedByIdproductoresultado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the PromociondetalleRelatedByIdproductoresultado relation
 * @method ProductoQuery innerJoinPromociondetalleRelatedByIdproductoresultado($relationAlias = null) Adds a INNER JOIN clause to the query using the PromociondetalleRelatedByIdproductoresultado relation
 *
 * @method Producto findOne(PropelPDO $con = null) Return the first Producto matching the query
 * @method Producto findOneOrCreate(PropelPDO $con = null) Return the first Producto matching the query, or a new Producto object populated from the query conditions when no match is found
 *
 * @method Producto findOneByProductoModelo(string $producto_modelo) Return the first Producto filtered by the producto_modelo column
 * @method Producto findOneByIdmarca(int $idmarca) Return the first Producto filtered by the idmarca column
 * @method Producto findOneByIdtemporada(int $idtemporada) Return the first Producto filtered by the idtemporada column
 * @method Producto findOneByProductoComisionable(int $producto_comisionable) Return the first Producto filtered by the producto_comisionable column
 * @method Producto findOneByIdproveedor(int $idproveedor) Return the first Producto filtered by the idproveedor column
 * @method Producto findOneByProductoDirigidoa(string $producto_dirigidoa) Return the first Producto filtered by the producto_dirigidoa column
 * @method Producto findOneByProductoPrecioventa(string $producto_precioventa) Return the first Producto filtered by the producto_precioventa column
 * @method Producto findOneByProductoPreciomayoreo(string $producto_preciomayoreo) Return the first Producto filtered by the producto_preciomayoreo column
 * @method Producto findOneByProductoMinimo(int $producto_minimo) Return the first Producto filtered by the producto_minimo column
 * @method Producto findOneByProductoReorden(int $producto_reorden) Return the first Producto filtered by the producto_reorden column
 * @method Producto findOneByProductoMaximo(int $producto_maximo) Return the first Producto filtered by the producto_maximo column
 * @method Producto findOneByIdtipocalzado(int $idtipocalzado) Return the first Producto filtered by the idtipocalzado column
 * @method Producto findOneByProductoDescripcion(string $producto_descripcion) Return the first Producto filtered by the producto_descripcion column
 * @method Producto findOneByProductoCosto(string $producto_costo) Return the first Producto filtered by the producto_costo column
 *
 * @method array findByIdproducto(int $idproducto) Return Producto objects filtered by the idproducto column
 * @method array findByProductoModelo(string $producto_modelo) Return Producto objects filtered by the producto_modelo column
 * @method array findByIdmarca(int $idmarca) Return Producto objects filtered by the idmarca column
 * @method array findByIdtemporada(int $idtemporada) Return Producto objects filtered by the idtemporada column
 * @method array findByProductoComisionable(int $producto_comisionable) Return Producto objects filtered by the producto_comisionable column
 * @method array findByIdproveedor(int $idproveedor) Return Producto objects filtered by the idproveedor column
 * @method array findByProductoDirigidoa(string $producto_dirigidoa) Return Producto objects filtered by the producto_dirigidoa column
 * @method array findByProductoPrecioventa(string $producto_precioventa) Return Producto objects filtered by the producto_precioventa column
 * @method array findByProductoPreciomayoreo(string $producto_preciomayoreo) Return Producto objects filtered by the producto_preciomayoreo column
 * @method array findByProductoMinimo(int $producto_minimo) Return Producto objects filtered by the producto_minimo column
 * @method array findByProductoReorden(int $producto_reorden) Return Producto objects filtered by the producto_reorden column
 * @method array findByProductoMaximo(int $producto_maximo) Return Producto objects filtered by the producto_maximo column
 * @method array findByIdtipocalzado(int $idtipocalzado) Return Producto objects filtered by the idtipocalzado column
 * @method array findByProductoDescripcion(string $producto_descripcion) Return Producto objects filtered by the producto_descripcion column
 * @method array findByProductoCosto(string $producto_costo) Return Producto objects filtered by the producto_costo column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseProductoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProductoQuery object.
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
            $modelName = 'Producto';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProductoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProductoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProductoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProductoQuery) {
            return $criteria;
        }
        $query = new ProductoQuery(null, null, $modelAlias);

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
     * @return   Producto|Producto[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProductoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProductoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Producto A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproducto($key, $con = null)
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
     * @return                 Producto A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproducto`, `producto_modelo`, `idmarca`, `idtemporada`, `producto_comisionable`, `idproveedor`, `producto_dirigidoa`, `producto_precioventa`, `producto_preciomayoreo`, `producto_minimo`, `producto_reorden`, `producto_maximo`, `idtipocalzado`, `producto_descripcion`, `producto_costo` FROM `producto` WHERE `idproducto` = :p0';
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
            $obj = new Producto();
            $obj->hydrate($row);
            ProductoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Producto|Producto[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Producto[]|mixed the list of results, formatted by the current formatter
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
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $keys, Criteria::IN);
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
     * @param     mixed $idproducto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the producto_modelo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoModelo('fooValue');   // WHERE producto_modelo = 'fooValue'
     * $query->filterByProductoModelo('%fooValue%'); // WHERE producto_modelo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productoModelo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoModelo($productoModelo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productoModelo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productoModelo)) {
                $productoModelo = str_replace('*', '%', $productoModelo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_MODELO, $productoModelo, $comparison);
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
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByIdmarca($idmarca = null, $comparison = null)
    {
        if (is_array($idmarca)) {
            $useMinMax = false;
            if (isset($idmarca['min'])) {
                $this->addUsingAlias(ProductoPeer::IDMARCA, $idmarca['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmarca['max'])) {
                $this->addUsingAlias(ProductoPeer::IDMARCA, $idmarca['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::IDMARCA, $idmarca, $comparison);
    }

    /**
     * Filter the query on the idtemporada column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtemporada(1234); // WHERE idtemporada = 1234
     * $query->filterByIdtemporada(array(12, 34)); // WHERE idtemporada IN (12, 34)
     * $query->filterByIdtemporada(array('min' => 12)); // WHERE idtemporada >= 12
     * $query->filterByIdtemporada(array('max' => 12)); // WHERE idtemporada <= 12
     * </code>
     *
     * @see       filterByTemporada()
     *
     * @param     mixed $idtemporada The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByIdtemporada($idtemporada = null, $comparison = null)
    {
        if (is_array($idtemporada)) {
            $useMinMax = false;
            if (isset($idtemporada['min'])) {
                $this->addUsingAlias(ProductoPeer::IDTEMPORADA, $idtemporada['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtemporada['max'])) {
                $this->addUsingAlias(ProductoPeer::IDTEMPORADA, $idtemporada['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::IDTEMPORADA, $idtemporada, $comparison);
    }

    /**
     * Filter the query on the producto_comisionable column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoComisionable(1234); // WHERE producto_comisionable = 1234
     * $query->filterByProductoComisionable(array(12, 34)); // WHERE producto_comisionable IN (12, 34)
     * $query->filterByProductoComisionable(array('min' => 12)); // WHERE producto_comisionable >= 12
     * $query->filterByProductoComisionable(array('max' => 12)); // WHERE producto_comisionable <= 12
     * </code>
     *
     * @param     mixed $productoComisionable The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoComisionable($productoComisionable = null, $comparison = null)
    {
        if (is_array($productoComisionable)) {
            $useMinMax = false;
            if (isset($productoComisionable['min'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_COMISIONABLE, $productoComisionable['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoComisionable['max'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_COMISIONABLE, $productoComisionable['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_COMISIONABLE, $productoComisionable, $comparison);
    }

    /**
     * Filter the query on the idproveedor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproveedor(1234); // WHERE idproveedor = 1234
     * $query->filterByIdproveedor(array(12, 34)); // WHERE idproveedor IN (12, 34)
     * $query->filterByIdproveedor(array('min' => 12)); // WHERE idproveedor >= 12
     * $query->filterByIdproveedor(array('max' => 12)); // WHERE idproveedor <= 12
     * </code>
     *
     * @see       filterByProveedor()
     *
     * @param     mixed $idproveedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByIdproveedor($idproveedor = null, $comparison = null)
    {
        if (is_array($idproveedor)) {
            $useMinMax = false;
            if (isset($idproveedor['min'])) {
                $this->addUsingAlias(ProductoPeer::IDPROVEEDOR, $idproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedor['max'])) {
                $this->addUsingAlias(ProductoPeer::IDPROVEEDOR, $idproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::IDPROVEEDOR, $idproveedor, $comparison);
    }

    /**
     * Filter the query on the producto_dirigidoa column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoDirigidoa('fooValue');   // WHERE producto_dirigidoa = 'fooValue'
     * $query->filterByProductoDirigidoa('%fooValue%'); // WHERE producto_dirigidoa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productoDirigidoa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoDirigidoa($productoDirigidoa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productoDirigidoa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productoDirigidoa)) {
                $productoDirigidoa = str_replace('*', '%', $productoDirigidoa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_DIRIGIDOA, $productoDirigidoa, $comparison);
    }

    /**
     * Filter the query on the producto_precioventa column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoPrecioventa(1234); // WHERE producto_precioventa = 1234
     * $query->filterByProductoPrecioventa(array(12, 34)); // WHERE producto_precioventa IN (12, 34)
     * $query->filterByProductoPrecioventa(array('min' => 12)); // WHERE producto_precioventa >= 12
     * $query->filterByProductoPrecioventa(array('max' => 12)); // WHERE producto_precioventa <= 12
     * </code>
     *
     * @param     mixed $productoPrecioventa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoPrecioventa($productoPrecioventa = null, $comparison = null)
    {
        if (is_array($productoPrecioventa)) {
            $useMinMax = false;
            if (isset($productoPrecioventa['min'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_PRECIOVENTA, $productoPrecioventa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoPrecioventa['max'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_PRECIOVENTA, $productoPrecioventa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_PRECIOVENTA, $productoPrecioventa, $comparison);
    }

    /**
     * Filter the query on the producto_preciomayoreo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoPreciomayoreo(1234); // WHERE producto_preciomayoreo = 1234
     * $query->filterByProductoPreciomayoreo(array(12, 34)); // WHERE producto_preciomayoreo IN (12, 34)
     * $query->filterByProductoPreciomayoreo(array('min' => 12)); // WHERE producto_preciomayoreo >= 12
     * $query->filterByProductoPreciomayoreo(array('max' => 12)); // WHERE producto_preciomayoreo <= 12
     * </code>
     *
     * @param     mixed $productoPreciomayoreo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoPreciomayoreo($productoPreciomayoreo = null, $comparison = null)
    {
        if (is_array($productoPreciomayoreo)) {
            $useMinMax = false;
            if (isset($productoPreciomayoreo['min'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_PRECIOMAYOREO, $productoPreciomayoreo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoPreciomayoreo['max'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_PRECIOMAYOREO, $productoPreciomayoreo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_PRECIOMAYOREO, $productoPreciomayoreo, $comparison);
    }

    /**
     * Filter the query on the producto_minimo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoMinimo(1234); // WHERE producto_minimo = 1234
     * $query->filterByProductoMinimo(array(12, 34)); // WHERE producto_minimo IN (12, 34)
     * $query->filterByProductoMinimo(array('min' => 12)); // WHERE producto_minimo >= 12
     * $query->filterByProductoMinimo(array('max' => 12)); // WHERE producto_minimo <= 12
     * </code>
     *
     * @param     mixed $productoMinimo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoMinimo($productoMinimo = null, $comparison = null)
    {
        if (is_array($productoMinimo)) {
            $useMinMax = false;
            if (isset($productoMinimo['min'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_MINIMO, $productoMinimo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoMinimo['max'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_MINIMO, $productoMinimo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_MINIMO, $productoMinimo, $comparison);
    }

    /**
     * Filter the query on the producto_reorden column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoReorden(1234); // WHERE producto_reorden = 1234
     * $query->filterByProductoReorden(array(12, 34)); // WHERE producto_reorden IN (12, 34)
     * $query->filterByProductoReorden(array('min' => 12)); // WHERE producto_reorden >= 12
     * $query->filterByProductoReorden(array('max' => 12)); // WHERE producto_reorden <= 12
     * </code>
     *
     * @param     mixed $productoReorden The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoReorden($productoReorden = null, $comparison = null)
    {
        if (is_array($productoReorden)) {
            $useMinMax = false;
            if (isset($productoReorden['min'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_REORDEN, $productoReorden['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoReorden['max'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_REORDEN, $productoReorden['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_REORDEN, $productoReorden, $comparison);
    }

    /**
     * Filter the query on the producto_maximo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoMaximo(1234); // WHERE producto_maximo = 1234
     * $query->filterByProductoMaximo(array(12, 34)); // WHERE producto_maximo IN (12, 34)
     * $query->filterByProductoMaximo(array('min' => 12)); // WHERE producto_maximo >= 12
     * $query->filterByProductoMaximo(array('max' => 12)); // WHERE producto_maximo <= 12
     * </code>
     *
     * @param     mixed $productoMaximo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoMaximo($productoMaximo = null, $comparison = null)
    {
        if (is_array($productoMaximo)) {
            $useMinMax = false;
            if (isset($productoMaximo['min'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_MAXIMO, $productoMaximo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoMaximo['max'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_MAXIMO, $productoMaximo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_MAXIMO, $productoMaximo, $comparison);
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
     * @see       filterByTipocalzado()
     *
     * @param     mixed $idtipocalzado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByIdtipocalzado($idtipocalzado = null, $comparison = null)
    {
        if (is_array($idtipocalzado)) {
            $useMinMax = false;
            if (isset($idtipocalzado['min'])) {
                $this->addUsingAlias(ProductoPeer::IDTIPOCALZADO, $idtipocalzado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtipocalzado['max'])) {
                $this->addUsingAlias(ProductoPeer::IDTIPOCALZADO, $idtipocalzado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::IDTIPOCALZADO, $idtipocalzado, $comparison);
    }

    /**
     * Filter the query on the producto_descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoDescripcion('fooValue');   // WHERE producto_descripcion = 'fooValue'
     * $query->filterByProductoDescripcion('%fooValue%'); // WHERE producto_descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productoDescripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoDescripcion($productoDescripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productoDescripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productoDescripcion)) {
                $productoDescripcion = str_replace('*', '%', $productoDescripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_DESCRIPCION, $productoDescripcion, $comparison);
    }

    /**
     * Filter the query on the producto_costo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductoCosto(1234); // WHERE producto_costo = 1234
     * $query->filterByProductoCosto(array(12, 34)); // WHERE producto_costo IN (12, 34)
     * $query->filterByProductoCosto(array('min' => 12)); // WHERE producto_costo >= 12
     * $query->filterByProductoCosto(array('max' => 12)); // WHERE producto_costo <= 12
     * </code>
     *
     * @param     mixed $productoCosto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function filterByProductoCosto($productoCosto = null, $comparison = null)
    {
        if (is_array($productoCosto)) {
            $useMinMax = false;
            if (isset($productoCosto['min'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_COSTO, $productoCosto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productoCosto['max'])) {
                $this->addUsingAlias(ProductoPeer::PRODUCTO_COSTO, $productoCosto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductoPeer::PRODUCTO_COSTO, $productoCosto, $comparison);
    }

    /**
     * Filter the query by a related Marca object
     *
     * @param   Marca|PropelObjectCollection $marca The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByMarca($marca, $comparison = null)
    {
        if ($marca instanceof Marca) {
            return $this
                ->addUsingAlias(ProductoPeer::IDMARCA, $marca->getIdmarca(), $comparison);
        } elseif ($marca instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductoPeer::IDMARCA, $marca->toKeyValue('PrimaryKey', 'Idmarca'), $comparison);
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
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinMarca($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useMarcaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMarca($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Marca', 'MarcaQuery');
    }

    /**
     * Filter the query by a related Proveedor object
     *
     * @param   Proveedor|PropelObjectCollection $proveedor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedor($proveedor, $comparison = null)
    {
        if ($proveedor instanceof Proveedor) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPROVEEDOR, $proveedor->getIdproveedor(), $comparison);
        } elseif ($proveedor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductoPeer::IDPROVEEDOR, $proveedor->toKeyValue('PrimaryKey', 'Idproveedor'), $comparison);
        } else {
            throw new PropelException('filterByProveedor() only accepts arguments of type Proveedor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Proveedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinProveedor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Proveedor');

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
            $this->addJoinObject($join, 'Proveedor');
        }

        return $this;
    }

    /**
     * Use the Proveedor relation Proveedor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProveedorQuery A secondary query class using the current class as primary query
     */
    public function useProveedorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProveedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Proveedor', 'ProveedorQuery');
    }

    /**
     * Filter the query by a related Temporada object
     *
     * @param   Temporada|PropelObjectCollection $temporada The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTemporada($temporada, $comparison = null)
    {
        if ($temporada instanceof Temporada) {
            return $this
                ->addUsingAlias(ProductoPeer::IDTEMPORADA, $temporada->getIdtemporada(), $comparison);
        } elseif ($temporada instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductoPeer::IDTEMPORADA, $temporada->toKeyValue('PrimaryKey', 'Idtemporada'), $comparison);
        } else {
            throw new PropelException('filterByTemporada() only accepts arguments of type Temporada or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Temporada relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinTemporada($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Temporada');

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
            $this->addJoinObject($join, 'Temporada');
        }

        return $this;
    }

    /**
     * Use the Temporada relation Temporada object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TemporadaQuery A secondary query class using the current class as primary query
     */
    public function useTemporadaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTemporada($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Temporada', 'TemporadaQuery');
    }

    /**
     * Filter the query by a related Tipocalzado object
     *
     * @param   Tipocalzado|PropelObjectCollection $tipocalzado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTipocalzado($tipocalzado, $comparison = null)
    {
        if ($tipocalzado instanceof Tipocalzado) {
            return $this
                ->addUsingAlias(ProductoPeer::IDTIPOCALZADO, $tipocalzado->getIdtipocalzado(), $comparison);
        } elseif ($tipocalzado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductoPeer::IDTIPOCALZADO, $tipocalzado->toKeyValue('PrimaryKey', 'Idtipocalzado'), $comparison);
        } else {
            throw new PropelException('filterByTipocalzado() only accepts arguments of type Tipocalzado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tipocalzado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinTipocalzado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tipocalzado');

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
            $this->addJoinObject($join, 'Tipocalzado');
        }

        return $this;
    }

    /**
     * Use the Tipocalzado relation Tipocalzado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TipocalzadoQuery A secondary query class using the current class as primary query
     */
    public function useTipocalzadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTipocalzado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tipocalzado', 'TipocalzadoQuery');
    }

    /**
     * Filter the query by a related Descuentodetalle object
     *
     * @param   Descuentodetalle|PropelObjectCollection $descuentodetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDescuentodetalle($descuentodetalle, $comparison = null)
    {
        if ($descuentodetalle instanceof Descuentodetalle) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $descuentodetalle->getIdproducto(), $comparison);
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
     * @return ProductoQuery The current query, for fluid interface
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
     * Filter the query by a related Pedido object
     *
     * @param   Pedido|PropelObjectCollection $pedido  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPedido($pedido, $comparison = null)
    {
        if ($pedido instanceof Pedido) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $pedido->getIdproducto(), $comparison);
        } elseif ($pedido instanceof PropelObjectCollection) {
            return $this
                ->usePedidoQuery()
                ->filterByPrimaryKeys($pedido->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPedido() only accepts arguments of type Pedido or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pedido relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinPedido($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pedido');

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
            $this->addJoinObject($join, 'Pedido');
        }

        return $this;
    }

    /**
     * Use the Pedido relation Pedido object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PedidoQuery A secondary query class using the current class as primary query
     */
    public function usePedidoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPedido($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pedido', 'PedidoQuery');
    }

    /**
     * Filter the query by a related Pedidomayoristadetalle object
     *
     * @param   Pedidomayoristadetalle|PropelObjectCollection $pedidomayoristadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPedidomayoristadetalle($pedidomayoristadetalle, $comparison = null)
    {
        if ($pedidomayoristadetalle instanceof Pedidomayoristadetalle) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $pedidomayoristadetalle->getIdproducto(), $comparison);
        } elseif ($pedidomayoristadetalle instanceof PropelObjectCollection) {
            return $this
                ->usePedidomayoristadetalleQuery()
                ->filterByPrimaryKeys($pedidomayoristadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPedidomayoristadetalle() only accepts arguments of type Pedidomayoristadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pedidomayoristadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinPedidomayoristadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pedidomayoristadetalle');

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
            $this->addJoinObject($join, 'Pedidomayoristadetalle');
        }

        return $this;
    }

    /**
     * Use the Pedidomayoristadetalle relation Pedidomayoristadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PedidomayoristadetalleQuery A secondary query class using the current class as primary query
     */
    public function usePedidomayoristadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPedidomayoristadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pedidomayoristadetalle', 'PedidomayoristadetalleQuery');
    }

    /**
     * Filter the query by a related Productocolor object
     *
     * @param   Productocolor|PropelObjectCollection $productocolor  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductocolor($productocolor, $comparison = null)
    {
        if ($productocolor instanceof Productocolor) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $productocolor->getIdproducto(), $comparison);
        } elseif ($productocolor instanceof PropelObjectCollection) {
            return $this
                ->useProductocolorQuery()
                ->filterByPrimaryKeys($productocolor->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductocolor() only accepts arguments of type Productocolor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productocolor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinProductocolor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productocolor');

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
            $this->addJoinObject($join, 'Productocolor');
        }

        return $this;
    }

    /**
     * Use the Productocolor relation Productocolor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductocolorQuery A secondary query class using the current class as primary query
     */
    public function useProductocolorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductocolor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productocolor', 'ProductocolorQuery');
    }

    /**
     * Filter the query by a related Productomaterial object
     *
     * @param   Productomaterial|PropelObjectCollection $productomaterial  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductomaterial($productomaterial, $comparison = null)
    {
        if ($productomaterial instanceof Productomaterial) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $productomaterial->getIdproducto(), $comparison);
        } elseif ($productomaterial instanceof PropelObjectCollection) {
            return $this
                ->useProductomaterialQuery()
                ->filterByPrimaryKeys($productomaterial->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductomaterial() only accepts arguments of type Productomaterial or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productomaterial relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinProductomaterial($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productomaterial');

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
            $this->addJoinObject($join, 'Productomaterial');
        }

        return $this;
    }

    /**
     * Use the Productomaterial relation Productomaterial object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductomaterialQuery A secondary query class using the current class as primary query
     */
    public function useProductomaterialQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductomaterial($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productomaterial', 'ProductomaterialQuery');
    }

    /**
     * Filter the query by a related Productomedida object
     *
     * @param   Productomedida|PropelObjectCollection $productomedida  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductomedida($productomedida, $comparison = null)
    {
        if ($productomedida instanceof Productomedida) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $productomedida->getIdproducto(), $comparison);
        } elseif ($productomedida instanceof PropelObjectCollection) {
            return $this
                ->useProductomedidaQuery()
                ->filterByPrimaryKeys($productomedida->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductomedida() only accepts arguments of type Productomedida or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productomedida relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinProductomedida($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productomedida');

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
            $this->addJoinObject($join, 'Productomedida');
        }

        return $this;
    }

    /**
     * Use the Productomedida relation Productomedida object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductomedidaQuery A secondary query class using the current class as primary query
     */
    public function useProductomedidaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductomedida($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productomedida', 'ProductomedidaQuery');
    }

    /**
     * Filter the query by a related Productotallaje object
     *
     * @param   Productotallaje|PropelObjectCollection $productotallaje  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductotallaje($productotallaje, $comparison = null)
    {
        if ($productotallaje instanceof Productotallaje) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $productotallaje->getIdproducto(), $comparison);
        } elseif ($productotallaje instanceof PropelObjectCollection) {
            return $this
                ->useProductotallajeQuery()
                ->filterByPrimaryKeys($productotallaje->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductotallaje() only accepts arguments of type Productotallaje or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productotallaje relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinProductotallaje($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productotallaje');

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
            $this->addJoinObject($join, 'Productotallaje');
        }

        return $this;
    }

    /**
     * Use the Productotallaje relation Productotallaje object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductotallajeQuery A secondary query class using the current class as primary query
     */
    public function useProductotallajeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductotallaje($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productotallaje', 'ProductotallajeQuery');
    }

    /**
     * Filter the query by a related Productovariante object
     *
     * @param   Productovariante|PropelObjectCollection $productovariante  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductovariante($productovariante, $comparison = null)
    {
        if ($productovariante instanceof Productovariante) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $productovariante->getIdproducto(), $comparison);
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
     * @return ProductoQuery The current query, for fluid interface
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
     * Filter the query by a related Promociondetalle object
     *
     * @param   Promociondetalle|PropelObjectCollection $promociondetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPromociondetalleRelatedByIdproductooperando($promociondetalle, $comparison = null)
    {
        if ($promociondetalle instanceof Promociondetalle) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $promociondetalle->getIdproductooperando(), $comparison);
        } elseif ($promociondetalle instanceof PropelObjectCollection) {
            return $this
                ->usePromociondetalleRelatedByIdproductooperandoQuery()
                ->filterByPrimaryKeys($promociondetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPromociondetalleRelatedByIdproductooperando() only accepts arguments of type Promociondetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PromociondetalleRelatedByIdproductooperando relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinPromociondetalleRelatedByIdproductooperando($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PromociondetalleRelatedByIdproductooperando');

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
            $this->addJoinObject($join, 'PromociondetalleRelatedByIdproductooperando');
        }

        return $this;
    }

    /**
     * Use the PromociondetalleRelatedByIdproductooperando relation Promociondetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PromociondetalleQuery A secondary query class using the current class as primary query
     */
    public function usePromociondetalleRelatedByIdproductooperandoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPromociondetalleRelatedByIdproductooperando($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PromociondetalleRelatedByIdproductooperando', 'PromociondetalleQuery');
    }

    /**
     * Filter the query by a related Promociondetalle object
     *
     * @param   Promociondetalle|PropelObjectCollection $promociondetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPromociondetalleRelatedByIdproductoresultado($promociondetalle, $comparison = null)
    {
        if ($promociondetalle instanceof Promociondetalle) {
            return $this
                ->addUsingAlias(ProductoPeer::IDPRODUCTO, $promociondetalle->getIdproductoresultado(), $comparison);
        } elseif ($promociondetalle instanceof PropelObjectCollection) {
            return $this
                ->usePromociondetalleRelatedByIdproductoresultadoQuery()
                ->filterByPrimaryKeys($promociondetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPromociondetalleRelatedByIdproductoresultado() only accepts arguments of type Promociondetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the PromociondetalleRelatedByIdproductoresultado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function joinPromociondetalleRelatedByIdproductoresultado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('PromociondetalleRelatedByIdproductoresultado');

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
            $this->addJoinObject($join, 'PromociondetalleRelatedByIdproductoresultado');
        }

        return $this;
    }

    /**
     * Use the PromociondetalleRelatedByIdproductoresultado relation Promociondetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PromociondetalleQuery A secondary query class using the current class as primary query
     */
    public function usePromociondetalleRelatedByIdproductoresultadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPromociondetalleRelatedByIdproductoresultado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'PromociondetalleRelatedByIdproductoresultado', 'PromociondetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Producto $producto Object to remove from the list of results
     *
     * @return ProductoQuery The current query, for fluid interface
     */
    public function prune($producto = null)
    {
        if ($producto) {
            $this->addUsingAlias(ProductoPeer::IDPRODUCTO, $producto->getIdproducto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
