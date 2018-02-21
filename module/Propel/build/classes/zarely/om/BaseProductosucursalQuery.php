<?php


/**
 * Base class that represents a query for the 'productosucursal' table.
 *
 *
 *
 * @method ProductosucursalQuery orderByIdproductosucursal($order = Criteria::ASC) Order by the idproductosucursal column
 * @method ProductosucursalQuery orderByIdproductovariante($order = Criteria::ASC) Order by the idproductovariante column
 * @method ProductosucursalQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method ProductosucursalQuery orderByProductosucursalExistencia($order = Criteria::ASC) Order by the productosucursal_existencia column
 * @method ProductosucursalQuery orderByProductosucursalMinimo($order = Criteria::ASC) Order by the productosucursal_minimo column
 * @method ProductosucursalQuery orderByProductosucursalReorden($order = Criteria::ASC) Order by the productosucursal_reorden column
 * @method ProductosucursalQuery orderByProductosucursalPrecioventa($order = Criteria::ASC) Order by the productosucursal_precioventa column
 * @method ProductosucursalQuery orderByProductosucursalPreciomayoreo($order = Criteria::ASC) Order by the productosucursal_preciomayoreo column
 * @method ProductosucursalQuery orderByProductosucursalEstatus($order = Criteria::ASC) Order by the productosucursal_estatus column
 * @method ProductosucursalQuery orderByProductosucursalCosto($order = Criteria::ASC) Order by the productosucursal_costo column
 * @method ProductosucursalQuery orderByProductosucursalPrecioventamayoreonuevo($order = Criteria::ASC) Order by the productosucursal_precioventamayoreonuevo column
 * @method ProductosucursalQuery orderByProductosucursalPrecioventanuevo($order = Criteria::ASC) Order by the productosucursal_precioventanuevo column
 * @method ProductosucursalQuery orderByProductosucursalPrecioaplicado($order = Criteria::ASC) Order by the productosucursal_precioaplicado column
 *
 * @method ProductosucursalQuery groupByIdproductosucursal() Group by the idproductosucursal column
 * @method ProductosucursalQuery groupByIdproductovariante() Group by the idproductovariante column
 * @method ProductosucursalQuery groupByIdsucursal() Group by the idsucursal column
 * @method ProductosucursalQuery groupByProductosucursalExistencia() Group by the productosucursal_existencia column
 * @method ProductosucursalQuery groupByProductosucursalMinimo() Group by the productosucursal_minimo column
 * @method ProductosucursalQuery groupByProductosucursalReorden() Group by the productosucursal_reorden column
 * @method ProductosucursalQuery groupByProductosucursalPrecioventa() Group by the productosucursal_precioventa column
 * @method ProductosucursalQuery groupByProductosucursalPreciomayoreo() Group by the productosucursal_preciomayoreo column
 * @method ProductosucursalQuery groupByProductosucursalEstatus() Group by the productosucursal_estatus column
 * @method ProductosucursalQuery groupByProductosucursalCosto() Group by the productosucursal_costo column
 * @method ProductosucursalQuery groupByProductosucursalPrecioventamayoreonuevo() Group by the productosucursal_precioventamayoreonuevo column
 * @method ProductosucursalQuery groupByProductosucursalPrecioventanuevo() Group by the productosucursal_precioventanuevo column
 * @method ProductosucursalQuery groupByProductosucursalPrecioaplicado() Group by the productosucursal_precioaplicado column
 *
 * @method ProductosucursalQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProductosucursalQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProductosucursalQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProductosucursalQuery leftJoinProductovariante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productovariante relation
 * @method ProductosucursalQuery rightJoinProductovariante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productovariante relation
 * @method ProductosucursalQuery innerJoinProductovariante($relationAlias = null) Adds a INNER JOIN clause to the query using the Productovariante relation
 *
 * @method ProductosucursalQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method ProductosucursalQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method ProductosucursalQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method Productosucursal findOne(PropelPDO $con = null) Return the first Productosucursal matching the query
 * @method Productosucursal findOneOrCreate(PropelPDO $con = null) Return the first Productosucursal matching the query, or a new Productosucursal object populated from the query conditions when no match is found
 *
 * @method Productosucursal findOneByIdproductovariante(int $idproductovariante) Return the first Productosucursal filtered by the idproductovariante column
 * @method Productosucursal findOneByIdsucursal(int $idsucursal) Return the first Productosucursal filtered by the idsucursal column
 * @method Productosucursal findOneByProductosucursalExistencia(int $productosucursal_existencia) Return the first Productosucursal filtered by the productosucursal_existencia column
 * @method Productosucursal findOneByProductosucursalMinimo(int $productosucursal_minimo) Return the first Productosucursal filtered by the productosucursal_minimo column
 * @method Productosucursal findOneByProductosucursalReorden(int $productosucursal_reorden) Return the first Productosucursal filtered by the productosucursal_reorden column
 * @method Productosucursal findOneByProductosucursalPrecioventa(string $productosucursal_precioventa) Return the first Productosucursal filtered by the productosucursal_precioventa column
 * @method Productosucursal findOneByProductosucursalPreciomayoreo(string $productosucursal_preciomayoreo) Return the first Productosucursal filtered by the productosucursal_preciomayoreo column
 * @method Productosucursal findOneByProductosucursalEstatus(boolean $productosucursal_estatus) Return the first Productosucursal filtered by the productosucursal_estatus column
 * @method Productosucursal findOneByProductosucursalCosto(string $productosucursal_costo) Return the first Productosucursal filtered by the productosucursal_costo column
 * @method Productosucursal findOneByProductosucursalPrecioventamayoreonuevo(string $productosucursal_precioventamayoreonuevo) Return the first Productosucursal filtered by the productosucursal_precioventamayoreonuevo column
 * @method Productosucursal findOneByProductosucursalPrecioventanuevo(string $productosucursal_precioventanuevo) Return the first Productosucursal filtered by the productosucursal_precioventanuevo column
 * @method Productosucursal findOneByProductosucursalPrecioaplicado(boolean $productosucursal_precioaplicado) Return the first Productosucursal filtered by the productosucursal_precioaplicado column
 *
 * @method array findByIdproductosucursal(int $idproductosucursal) Return Productosucursal objects filtered by the idproductosucursal column
 * @method array findByIdproductovariante(int $idproductovariante) Return Productosucursal objects filtered by the idproductovariante column
 * @method array findByIdsucursal(int $idsucursal) Return Productosucursal objects filtered by the idsucursal column
 * @method array findByProductosucursalExistencia(int $productosucursal_existencia) Return Productosucursal objects filtered by the productosucursal_existencia column
 * @method array findByProductosucursalMinimo(int $productosucursal_minimo) Return Productosucursal objects filtered by the productosucursal_minimo column
 * @method array findByProductosucursalReorden(int $productosucursal_reorden) Return Productosucursal objects filtered by the productosucursal_reorden column
 * @method array findByProductosucursalPrecioventa(string $productosucursal_precioventa) Return Productosucursal objects filtered by the productosucursal_precioventa column
 * @method array findByProductosucursalPreciomayoreo(string $productosucursal_preciomayoreo) Return Productosucursal objects filtered by the productosucursal_preciomayoreo column
 * @method array findByProductosucursalEstatus(boolean $productosucursal_estatus) Return Productosucursal objects filtered by the productosucursal_estatus column
 * @method array findByProductosucursalCosto(string $productosucursal_costo) Return Productosucursal objects filtered by the productosucursal_costo column
 * @method array findByProductosucursalPrecioventamayoreonuevo(string $productosucursal_precioventamayoreonuevo) Return Productosucursal objects filtered by the productosucursal_precioventamayoreonuevo column
 * @method array findByProductosucursalPrecioventanuevo(string $productosucursal_precioventanuevo) Return Productosucursal objects filtered by the productosucursal_precioventanuevo column
 * @method array findByProductosucursalPrecioaplicado(boolean $productosucursal_precioaplicado) Return Productosucursal objects filtered by the productosucursal_precioaplicado column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseProductosucursalQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProductosucursalQuery object.
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
            $modelName = 'Productosucursal';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProductosucursalQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProductosucursalQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProductosucursalQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProductosucursalQuery) {
            return $criteria;
        }
        $query = new ProductosucursalQuery(null, null, $modelAlias);

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
     * @return   Productosucursal|Productosucursal[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProductosucursalPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProductosucursalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Productosucursal A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproductosucursal($key, $con = null)
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
     * @return                 Productosucursal A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproductosucursal`, `idproductovariante`, `idsucursal`, `productosucursal_existencia`, `productosucursal_minimo`, `productosucursal_reorden`, `productosucursal_precioventa`, `productosucursal_preciomayoreo`, `productosucursal_estatus`, `productosucursal_costo`, `productosucursal_precioventamayoreonuevo`, `productosucursal_precioventanuevo`, `productosucursal_precioaplicado` FROM `productosucursal` WHERE `idproductosucursal` = :p0';
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
            $obj = new Productosucursal();
            $obj->hydrate($row);
            ProductosucursalPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Productosucursal|Productosucursal[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Productosucursal[]|mixed the list of results, formatted by the current formatter
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
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProductosucursalPeer::IDPRODUCTOSUCURSAL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProductosucursalPeer::IDPRODUCTOSUCURSAL, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idproductosucursal column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductosucursal(1234); // WHERE idproductosucursal = 1234
     * $query->filterByIdproductosucursal(array(12, 34)); // WHERE idproductosucursal IN (12, 34)
     * $query->filterByIdproductosucursal(array('min' => 12)); // WHERE idproductosucursal >= 12
     * $query->filterByIdproductosucursal(array('max' => 12)); // WHERE idproductosucursal <= 12
     * </code>
     *
     * @param     mixed $idproductosucursal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function filterByIdproductosucursal($idproductosucursal = null, $comparison = null)
    {
        if (is_array($idproductosucursal)) {
            $useMinMax = false;
            if (isset($idproductosucursal['min'])) {
                $this->addUsingAlias(ProductosucursalPeer::IDPRODUCTOSUCURSAL, $idproductosucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductosucursal['max'])) {
                $this->addUsingAlias(ProductosucursalPeer::IDPRODUCTOSUCURSAL, $idproductosucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductosucursalPeer::IDPRODUCTOSUCURSAL, $idproductosucursal, $comparison);
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
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function filterByIdproductovariante($idproductovariante = null, $comparison = null)
    {
        if (is_array($idproductovariante)) {
            $useMinMax = false;
            if (isset($idproductovariante['min'])) {
                $this->addUsingAlias(ProductosucursalPeer::IDPRODUCTOVARIANTE, $idproductovariante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductovariante['max'])) {
                $this->addUsingAlias(ProductosucursalPeer::IDPRODUCTOVARIANTE, $idproductovariante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductosucursalPeer::IDPRODUCTOVARIANTE, $idproductovariante, $comparison);
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
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(ProductosucursalPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(ProductosucursalPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductosucursalPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the productosucursal_existencia column
     *
     * Example usage:
     * <code>
     * $query->filterByProductosucursalExistencia(1234); // WHERE productosucursal_existencia = 1234
     * $query->filterByProductosucursalExistencia(array(12, 34)); // WHERE productosucursal_existencia IN (12, 34)
     * $query->filterByProductosucursalExistencia(array('min' => 12)); // WHERE productosucursal_existencia >= 12
     * $query->filterByProductosucursalExistencia(array('max' => 12)); // WHERE productosucursal_existencia <= 12
     * </code>
     *
     * @param     mixed $productosucursalExistencia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function filterByProductosucursalExistencia($productosucursalExistencia = null, $comparison = null)
    {
        if (is_array($productosucursalExistencia)) {
            $useMinMax = false;
            if (isset($productosucursalExistencia['min'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_EXISTENCIA, $productosucursalExistencia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productosucursalExistencia['max'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_EXISTENCIA, $productosucursalExistencia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_EXISTENCIA, $productosucursalExistencia, $comparison);
    }

    /**
     * Filter the query on the productosucursal_minimo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductosucursalMinimo(1234); // WHERE productosucursal_minimo = 1234
     * $query->filterByProductosucursalMinimo(array(12, 34)); // WHERE productosucursal_minimo IN (12, 34)
     * $query->filterByProductosucursalMinimo(array('min' => 12)); // WHERE productosucursal_minimo >= 12
     * $query->filterByProductosucursalMinimo(array('max' => 12)); // WHERE productosucursal_minimo <= 12
     * </code>
     *
     * @param     mixed $productosucursalMinimo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function filterByProductosucursalMinimo($productosucursalMinimo = null, $comparison = null)
    {
        if (is_array($productosucursalMinimo)) {
            $useMinMax = false;
            if (isset($productosucursalMinimo['min'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_MINIMO, $productosucursalMinimo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productosucursalMinimo['max'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_MINIMO, $productosucursalMinimo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_MINIMO, $productosucursalMinimo, $comparison);
    }

    /**
     * Filter the query on the productosucursal_reorden column
     *
     * Example usage:
     * <code>
     * $query->filterByProductosucursalReorden(1234); // WHERE productosucursal_reorden = 1234
     * $query->filterByProductosucursalReorden(array(12, 34)); // WHERE productosucursal_reorden IN (12, 34)
     * $query->filterByProductosucursalReorden(array('min' => 12)); // WHERE productosucursal_reorden >= 12
     * $query->filterByProductosucursalReorden(array('max' => 12)); // WHERE productosucursal_reorden <= 12
     * </code>
     *
     * @param     mixed $productosucursalReorden The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function filterByProductosucursalReorden($productosucursalReorden = null, $comparison = null)
    {
        if (is_array($productosucursalReorden)) {
            $useMinMax = false;
            if (isset($productosucursalReorden['min'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_REORDEN, $productosucursalReorden['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productosucursalReorden['max'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_REORDEN, $productosucursalReorden['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_REORDEN, $productosucursalReorden, $comparison);
    }

    /**
     * Filter the query on the productosucursal_precioventa column
     *
     * Example usage:
     * <code>
     * $query->filterByProductosucursalPrecioventa(1234); // WHERE productosucursal_precioventa = 1234
     * $query->filterByProductosucursalPrecioventa(array(12, 34)); // WHERE productosucursal_precioventa IN (12, 34)
     * $query->filterByProductosucursalPrecioventa(array('min' => 12)); // WHERE productosucursal_precioventa >= 12
     * $query->filterByProductosucursalPrecioventa(array('max' => 12)); // WHERE productosucursal_precioventa <= 12
     * </code>
     *
     * @param     mixed $productosucursalPrecioventa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function filterByProductosucursalPrecioventa($productosucursalPrecioventa = null, $comparison = null)
    {
        if (is_array($productosucursalPrecioventa)) {
            $useMinMax = false;
            if (isset($productosucursalPrecioventa['min'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTA, $productosucursalPrecioventa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productosucursalPrecioventa['max'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTA, $productosucursalPrecioventa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTA, $productosucursalPrecioventa, $comparison);
    }

    /**
     * Filter the query on the productosucursal_preciomayoreo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductosucursalPreciomayoreo(1234); // WHERE productosucursal_preciomayoreo = 1234
     * $query->filterByProductosucursalPreciomayoreo(array(12, 34)); // WHERE productosucursal_preciomayoreo IN (12, 34)
     * $query->filterByProductosucursalPreciomayoreo(array('min' => 12)); // WHERE productosucursal_preciomayoreo >= 12
     * $query->filterByProductosucursalPreciomayoreo(array('max' => 12)); // WHERE productosucursal_preciomayoreo <= 12
     * </code>
     *
     * @param     mixed $productosucursalPreciomayoreo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function filterByProductosucursalPreciomayoreo($productosucursalPreciomayoreo = null, $comparison = null)
    {
        if (is_array($productosucursalPreciomayoreo)) {
            $useMinMax = false;
            if (isset($productosucursalPreciomayoreo['min'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOMAYOREO, $productosucursalPreciomayoreo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productosucursalPreciomayoreo['max'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOMAYOREO, $productosucursalPreciomayoreo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOMAYOREO, $productosucursalPreciomayoreo, $comparison);
    }

    /**
     * Filter the query on the productosucursal_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByProductosucursalEstatus(true); // WHERE productosucursal_estatus = true
     * $query->filterByProductosucursalEstatus('yes'); // WHERE productosucursal_estatus = true
     * </code>
     *
     * @param     boolean|string $productosucursalEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function filterByProductosucursalEstatus($productosucursalEstatus = null, $comparison = null)
    {
        if (is_string($productosucursalEstatus)) {
            $productosucursalEstatus = in_array(strtolower($productosucursalEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_ESTATUS, $productosucursalEstatus, $comparison);
    }

    /**
     * Filter the query on the productosucursal_costo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductosucursalCosto(1234); // WHERE productosucursal_costo = 1234
     * $query->filterByProductosucursalCosto(array(12, 34)); // WHERE productosucursal_costo IN (12, 34)
     * $query->filterByProductosucursalCosto(array('min' => 12)); // WHERE productosucursal_costo >= 12
     * $query->filterByProductosucursalCosto(array('max' => 12)); // WHERE productosucursal_costo <= 12
     * </code>
     *
     * @param     mixed $productosucursalCosto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function filterByProductosucursalCosto($productosucursalCosto = null, $comparison = null)
    {
        if (is_array($productosucursalCosto)) {
            $useMinMax = false;
            if (isset($productosucursalCosto['min'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_COSTO, $productosucursalCosto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productosucursalCosto['max'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_COSTO, $productosucursalCosto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_COSTO, $productosucursalCosto, $comparison);
    }

    /**
     * Filter the query on the productosucursal_precioventamayoreonuevo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductosucursalPrecioventamayoreonuevo(1234); // WHERE productosucursal_precioventamayoreonuevo = 1234
     * $query->filterByProductosucursalPrecioventamayoreonuevo(array(12, 34)); // WHERE productosucursal_precioventamayoreonuevo IN (12, 34)
     * $query->filterByProductosucursalPrecioventamayoreonuevo(array('min' => 12)); // WHERE productosucursal_precioventamayoreonuevo >= 12
     * $query->filterByProductosucursalPrecioventamayoreonuevo(array('max' => 12)); // WHERE productosucursal_precioventamayoreonuevo <= 12
     * </code>
     *
     * @param     mixed $productosucursalPrecioventamayoreonuevo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function filterByProductosucursalPrecioventamayoreonuevo($productosucursalPrecioventamayoreonuevo = null, $comparison = null)
    {
        if (is_array($productosucursalPrecioventamayoreonuevo)) {
            $useMinMax = false;
            if (isset($productosucursalPrecioventamayoreonuevo['min'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTAMAYOREONUEVO, $productosucursalPrecioventamayoreonuevo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productosucursalPrecioventamayoreonuevo['max'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTAMAYOREONUEVO, $productosucursalPrecioventamayoreonuevo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTAMAYOREONUEVO, $productosucursalPrecioventamayoreonuevo, $comparison);
    }

    /**
     * Filter the query on the productosucursal_precioventanuevo column
     *
     * Example usage:
     * <code>
     * $query->filterByProductosucursalPrecioventanuevo(1234); // WHERE productosucursal_precioventanuevo = 1234
     * $query->filterByProductosucursalPrecioventanuevo(array(12, 34)); // WHERE productosucursal_precioventanuevo IN (12, 34)
     * $query->filterByProductosucursalPrecioventanuevo(array('min' => 12)); // WHERE productosucursal_precioventanuevo >= 12
     * $query->filterByProductosucursalPrecioventanuevo(array('max' => 12)); // WHERE productosucursal_precioventanuevo <= 12
     * </code>
     *
     * @param     mixed $productosucursalPrecioventanuevo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function filterByProductosucursalPrecioventanuevo($productosucursalPrecioventanuevo = null, $comparison = null)
    {
        if (is_array($productosucursalPrecioventanuevo)) {
            $useMinMax = false;
            if (isset($productosucursalPrecioventanuevo['min'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTANUEVO, $productosucursalPrecioventanuevo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($productosucursalPrecioventanuevo['max'])) {
                $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTANUEVO, $productosucursalPrecioventanuevo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOVENTANUEVO, $productosucursalPrecioventanuevo, $comparison);
    }

    /**
     * Filter the query on the productosucursal_precioaplicado column
     *
     * Example usage:
     * <code>
     * $query->filterByProductosucursalPrecioaplicado(true); // WHERE productosucursal_precioaplicado = true
     * $query->filterByProductosucursalPrecioaplicado('yes'); // WHERE productosucursal_precioaplicado = true
     * </code>
     *
     * @param     boolean|string $productosucursalPrecioaplicado The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function filterByProductosucursalPrecioaplicado($productosucursalPrecioaplicado = null, $comparison = null)
    {
        if (is_string($productosucursalPrecioaplicado)) {
            $productosucursalPrecioaplicado = in_array(strtolower($productosucursalPrecioaplicado), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ProductosucursalPeer::PRODUCTOSUCURSAL_PRECIOAPLICADO, $productosucursalPrecioaplicado, $comparison);
    }

    /**
     * Filter the query by a related Productovariante object
     *
     * @param   Productovariante|PropelObjectCollection $productovariante The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProductosucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductovariante($productovariante, $comparison = null)
    {
        if ($productovariante instanceof Productovariante) {
            return $this
                ->addUsingAlias(ProductosucursalPeer::IDPRODUCTOVARIANTE, $productovariante->getIdproductovariante(), $comparison);
        } elseif ($productovariante instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductosucursalPeer::IDPRODUCTOVARIANTE, $productovariante->toKeyValue('PrimaryKey', 'Idproductovariante'), $comparison);
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
     * @return ProductosucursalQuery The current query, for fluid interface
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
     * @return                 ProductosucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(ProductosucursalPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ProductosucursalPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return ProductosucursalQuery The current query, for fluid interface
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
     * @param   Productosucursal $productosucursal Object to remove from the list of results
     *
     * @return ProductosucursalQuery The current query, for fluid interface
     */
    public function prune($productosucursal = null)
    {
        if ($productosucursal) {
            $this->addUsingAlias(ProductosucursalPeer::IDPRODUCTOSUCURSAL, $productosucursal->getIdproductosucursal(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
