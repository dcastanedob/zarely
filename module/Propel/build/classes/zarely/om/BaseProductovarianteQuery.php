<?php


/**
 * Base class that represents a query for the 'productovariante' table.
 *
 *
 *
 * @method ProductovarianteQuery orderByIdproductovariante($order = Criteria::ASC) Order by the idproductovariante column
 * @method ProductovarianteQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method ProductovarianteQuery orderByIdproductocolor($order = Criteria::ASC) Order by the idproductocolor column
 * @method ProductovarianteQuery orderByIdproductomaterial($order = Criteria::ASC) Order by the idproductomaterial column
 * @method ProductovarianteQuery orderByProductovarianteCodigobarras($order = Criteria::ASC) Order by the productovariante_codigobarras column
 * @method ProductovarianteQuery orderByProductovarianteTalla($order = Criteria::ASC) Order by the productovariante_talla column
 * @method ProductovarianteQuery orderByProductovarianteTallatipo($order = Criteria::ASC) Order by the productovariante_tallatipo column
 * @method ProductovarianteQuery orderByProductovarianteEstatus($order = Criteria::ASC) Order by the productovariante_estatus column
 *
 * @method ProductovarianteQuery groupByIdproductovariante() Group by the idproductovariante column
 * @method ProductovarianteQuery groupByIdproducto() Group by the idproducto column
 * @method ProductovarianteQuery groupByIdproductocolor() Group by the idproductocolor column
 * @method ProductovarianteQuery groupByIdproductomaterial() Group by the idproductomaterial column
 * @method ProductovarianteQuery groupByProductovarianteCodigobarras() Group by the productovariante_codigobarras column
 * @method ProductovarianteQuery groupByProductovarianteTalla() Group by the productovariante_talla column
 * @method ProductovarianteQuery groupByProductovarianteTallatipo() Group by the productovariante_tallatipo column
 * @method ProductovarianteQuery groupByProductovarianteEstatus() Group by the productovariante_estatus column
 *
 * @method ProductovarianteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProductovarianteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProductovarianteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProductovarianteQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method ProductovarianteQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method ProductovarianteQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method ProductovarianteQuery leftJoinProductocolor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productocolor relation
 * @method ProductovarianteQuery rightJoinProductocolor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productocolor relation
 * @method ProductovarianteQuery innerJoinProductocolor($relationAlias = null) Adds a INNER JOIN clause to the query using the Productocolor relation
 *
 * @method ProductovarianteQuery leftJoinProductomaterial($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productomaterial relation
 * @method ProductovarianteQuery rightJoinProductomaterial($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productomaterial relation
 * @method ProductovarianteQuery innerJoinProductomaterial($relationAlias = null) Adds a INNER JOIN clause to the query using the Productomaterial relation
 *
 * @method ProductovarianteQuery leftJoinPedido($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pedido relation
 * @method ProductovarianteQuery rightJoinPedido($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pedido relation
 * @method ProductovarianteQuery innerJoinPedido($relationAlias = null) Adds a INNER JOIN clause to the query using the Pedido relation
 *
 * @method ProductovarianteQuery leftJoinProductosucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productosucursal relation
 * @method ProductovarianteQuery rightJoinProductosucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productosucursal relation
 * @method ProductovarianteQuery innerJoinProductosucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Productosucursal relation
 *
 * @method Productovariante findOne(PropelPDO $con = null) Return the first Productovariante matching the query
 * @method Productovariante findOneOrCreate(PropelPDO $con = null) Return the first Productovariante matching the query, or a new Productovariante object populated from the query conditions when no match is found
 *
 * @method Productovariante findOneByIdproducto(int $idproducto) Return the first Productovariante filtered by the idproducto column
 * @method Productovariante findOneByIdproductocolor(int $idproductocolor) Return the first Productovariante filtered by the idproductocolor column
 * @method Productovariante findOneByIdproductomaterial(int $idproductomaterial) Return the first Productovariante filtered by the idproductomaterial column
 * @method Productovariante findOneByProductovarianteCodigobarras(string $productovariante_codigobarras) Return the first Productovariante filtered by the productovariante_codigobarras column
 * @method Productovariante findOneByProductovarianteTalla(string $productovariante_talla) Return the first Productovariante filtered by the productovariante_talla column
 * @method Productovariante findOneByProductovarianteTallatipo(string $productovariante_tallatipo) Return the first Productovariante filtered by the productovariante_tallatipo column
 * @method Productovariante findOneByProductovarianteEstatus(boolean $productovariante_estatus) Return the first Productovariante filtered by the productovariante_estatus column
 *
 * @method array findByIdproductovariante(int $idproductovariante) Return Productovariante objects filtered by the idproductovariante column
 * @method array findByIdproducto(int $idproducto) Return Productovariante objects filtered by the idproducto column
 * @method array findByIdproductocolor(int $idproductocolor) Return Productovariante objects filtered by the idproductocolor column
 * @method array findByIdproductomaterial(int $idproductomaterial) Return Productovariante objects filtered by the idproductomaterial column
 * @method array findByProductovarianteCodigobarras(string $productovariante_codigobarras) Return Productovariante objects filtered by the productovariante_codigobarras column
 * @method array findByProductovarianteTalla(string $productovariante_talla) Return Productovariante objects filtered by the productovariante_talla column
 * @method array findByProductovarianteTallatipo(string $productovariante_tallatipo) Return Productovariante objects filtered by the productovariante_tallatipo column
 * @method array findByProductovarianteEstatus(boolean $productovariante_estatus) Return Productovariante objects filtered by the productovariante_estatus column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseProductovarianteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProductovarianteQuery object.
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
            $modelName = 'Productovariante';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProductovarianteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProductovarianteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProductovarianteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProductovarianteQuery) {
            return $criteria;
        }
        $query = new ProductovarianteQuery(null, null, $modelAlias);

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
     * @return   Productovariante|Productovariante[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProductovariantePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProductovariantePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Productovariante A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproductovariante($key, $con = null)
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
     * @return                 Productovariante A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproductovariante`, `idproducto`, `idproductocolor`, `idproductomaterial`, `productovariante_codigobarras`, `productovariante_talla`, `productovariante_tallatipo`, `productovariante_estatus` FROM `productovariante` WHERE `idproductovariante` = :p0';
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
            $obj = new Productovariante();
            $obj->hydrate($row);
            ProductovariantePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Productovariante|Productovariante[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Productovariante[]|mixed the list of results, formatted by the current formatter
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
     * @return ProductovarianteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProductovariantePeer::IDPRODUCTOVARIANTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProductovarianteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProductovariantePeer::IDPRODUCTOVARIANTE, $keys, Criteria::IN);
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
     * @param     mixed $idproductovariante The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductovarianteQuery The current query, for fluid interface
     */
    public function filterByIdproductovariante($idproductovariante = null, $comparison = null)
    {
        if (is_array($idproductovariante)) {
            $useMinMax = false;
            if (isset($idproductovariante['min'])) {
                $this->addUsingAlias(ProductovariantePeer::IDPRODUCTOVARIANTE, $idproductovariante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductovariante['max'])) {
                $this->addUsingAlias(ProductovariantePeer::IDPRODUCTOVARIANTE, $idproductovariante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductovariantePeer::IDPRODUCTOVARIANTE, $idproductovariante, $comparison);
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
     * @return ProductovarianteQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(ProductovariantePeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(ProductovariantePeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductovariantePeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the idproductocolor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductocolor(1234); // WHERE idproductocolor = 1234
     * $query->filterByIdproductocolor(array(12, 34)); // WHERE idproductocolor IN (12, 34)
     * $query->filterByIdproductocolor(array('min' => 12)); // WHERE idproductocolor >= 12
     * $query->filterByIdproductocolor(array('max' => 12)); // WHERE idproductocolor <= 12
     * </code>
     *
     * @see       filterByProductocolor()
     *
     * @param     mixed $idproductocolor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductovarianteQuery The current query, for fluid interface
     */
    public function filterByIdproductocolor($idproductocolor = null, $comparison = null)
    {
        if (is_array($idproductocolor)) {
            $useMinMax = false;
            if (isset($idproductocolor['min'])) {
                $this->addUsingAlias(ProductovariantePeer::IDPRODUCTOCOLOR, $idproductocolor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductocolor['max'])) {
                $this->addUsingAlias(ProductovariantePeer::IDPRODUCTOCOLOR, $idproductocolor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductovariantePeer::IDPRODUCTOCOLOR, $idproductocolor, $comparison);
    }

    /**
     * Filter the query on the idproductomaterial column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductomaterial(1234); // WHERE idproductomaterial = 1234
     * $query->filterByIdproductomaterial(array(12, 34)); // WHERE idproductomaterial IN (12, 34)
     * $query->filterByIdproductomaterial(array('min' => 12)); // WHERE idproductomaterial >= 12
     * $query->filterByIdproductomaterial(array('max' => 12)); // WHERE idproductomaterial <= 12
     * </code>
     *
     * @see       filterByProductomaterial()
     *
     * @param     mixed $idproductomaterial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductovarianteQuery The current query, for fluid interface
     */
    public function filterByIdproductomaterial($idproductomaterial = null, $comparison = null)
    {
        if (is_array($idproductomaterial)) {
            $useMinMax = false;
            if (isset($idproductomaterial['min'])) {
                $this->addUsingAlias(ProductovariantePeer::IDPRODUCTOMATERIAL, $idproductomaterial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductomaterial['max'])) {
                $this->addUsingAlias(ProductovariantePeer::IDPRODUCTOMATERIAL, $idproductomaterial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductovariantePeer::IDPRODUCTOMATERIAL, $idproductomaterial, $comparison);
    }

    /**
     * Filter the query on the productovariante_codigobarras column
     *
     * Example usage:
     * <code>
     * $query->filterByProductovarianteCodigobarras('fooValue');   // WHERE productovariante_codigobarras = 'fooValue'
     * $query->filterByProductovarianteCodigobarras('%fooValue%'); // WHERE productovariante_codigobarras LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productovarianteCodigobarras The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductovarianteQuery The current query, for fluid interface
     */
    public function filterByProductovarianteCodigobarras($productovarianteCodigobarras = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productovarianteCodigobarras)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productovarianteCodigobarras)) {
                $productovarianteCodigobarras = str_replace('*', '%', $productovarianteCodigobarras);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductovariantePeer::PRODUCTOVARIANTE_CODIGOBARRAS, $productovarianteCodigobarras, $comparison);
    }

    /**
     * Filter the query on the productovariante_talla column
     *
     * Example usage:
     * <code>
     * $query->filterByProductovarianteTalla('fooValue');   // WHERE productovariante_talla = 'fooValue'
     * $query->filterByProductovarianteTalla('%fooValue%'); // WHERE productovariante_talla LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productovarianteTalla The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductovarianteQuery The current query, for fluid interface
     */
    public function filterByProductovarianteTalla($productovarianteTalla = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productovarianteTalla)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productovarianteTalla)) {
                $productovarianteTalla = str_replace('*', '%', $productovarianteTalla);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductovariantePeer::PRODUCTOVARIANTE_TALLA, $productovarianteTalla, $comparison);
    }

    /**
     * Filter the query on the productovariante_tallatipo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductovarianteTallatipo('fooValue');   // WHERE productovariante_tallatipo = 'fooValue'
     * $query->filterByProductovarianteTallatipo('%fooValue%'); // WHERE productovariante_tallatipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $productovarianteTallatipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductovarianteQuery The current query, for fluid interface
     */
    public function filterByProductovarianteTallatipo($productovarianteTallatipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($productovarianteTallatipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $productovarianteTallatipo)) {
                $productovarianteTallatipo = str_replace('*', '%', $productovarianteTallatipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProductovariantePeer::PRODUCTOVARIANTE_TALLATIPO, $productovarianteTallatipo, $comparison);
    }

    /**
     * Filter the query on the productovariante_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByProductovarianteEstatus(true); // WHERE productovariante_estatus = true
     * $query->filterByProductovarianteEstatus('yes'); // WHERE productovariante_estatus = true
     * </code>
     *
     * @param     boolean|string $productovarianteEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductovarianteQuery The current query, for fluid interface
     */
    public function filterByProductovarianteEstatus($productovarianteEstatus = null, $comparison = null)
    {
        if (is_string($productovarianteEstatus)) {
            $productovarianteEstatus = in_array(strtolower($productovarianteEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ProductovariantePeer::PRODUCTOVARIANTE_ESTATUS, $productovarianteEstatus, $comparison);
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductovarianteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(ProductovariantePeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductovariantePeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
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
     * @return ProductovarianteQuery The current query, for fluid interface
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
     * Filter the query by a related Productocolor object
     *
     * @param   Productocolor|PropelObjectCollection $productocolor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductovarianteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductocolor($productocolor, $comparison = null)
    {
        if ($productocolor instanceof Productocolor) {
            return $this
                ->addUsingAlias(ProductovariantePeer::IDPRODUCTOCOLOR, $productocolor->getIdproductocolor(), $comparison);
        } elseif ($productocolor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductovariantePeer::IDPRODUCTOCOLOR, $productocolor->toKeyValue('PrimaryKey', 'Idproductocolor'), $comparison);
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
     * @return ProductovarianteQuery The current query, for fluid interface
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
     * @param   Productomaterial|PropelObjectCollection $productomaterial The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductovarianteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductomaterial($productomaterial, $comparison = null)
    {
        if ($productomaterial instanceof Productomaterial) {
            return $this
                ->addUsingAlias(ProductovariantePeer::IDPRODUCTOMATERIAL, $productomaterial->getIdproductomaterial(), $comparison);
        } elseif ($productomaterial instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductovariantePeer::IDPRODUCTOMATERIAL, $productomaterial->toKeyValue('PrimaryKey', 'Idproductomaterial'), $comparison);
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
     * @return ProductovarianteQuery The current query, for fluid interface
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
     * Filter the query by a related Pedido object
     *
     * @param   Pedido|PropelObjectCollection $pedido  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductovarianteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPedido($pedido, $comparison = null)
    {
        if ($pedido instanceof Pedido) {
            return $this
                ->addUsingAlias(ProductovariantePeer::IDPRODUCTOVARIANTE, $pedido->getIdproductovariante(), $comparison);
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
     * @return ProductovarianteQuery The current query, for fluid interface
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
     * Filter the query by a related Productosucursal object
     *
     * @param   Productosucursal|PropelObjectCollection $productosucursal  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductovarianteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductosucursal($productosucursal, $comparison = null)
    {
        if ($productosucursal instanceof Productosucursal) {
            return $this
                ->addUsingAlias(ProductovariantePeer::IDPRODUCTOVARIANTE, $productosucursal->getIdproductovariante(), $comparison);
        } elseif ($productosucursal instanceof PropelObjectCollection) {
            return $this
                ->useProductosucursalQuery()
                ->filterByPrimaryKeys($productosucursal->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductosucursal() only accepts arguments of type Productosucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productosucursal relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProductovarianteQuery The current query, for fluid interface
     */
    public function joinProductosucursal($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productosucursal');

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
            $this->addJoinObject($join, 'Productosucursal');
        }

        return $this;
    }

    /**
     * Use the Productosucursal relation Productosucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductosucursalQuery A secondary query class using the current class as primary query
     */
    public function useProductosucursalQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductosucursal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productosucursal', 'ProductosucursalQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Productovariante $productovariante Object to remove from the list of results
     *
     * @return ProductovarianteQuery The current query, for fluid interface
     */
    public function prune($productovariante = null)
    {
        if ($productovariante) {
            $this->addUsingAlias(ProductovariantePeer::IDPRODUCTOVARIANTE, $productovariante->getIdproductovariante(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
