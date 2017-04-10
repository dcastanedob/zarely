<?php


/**
 * Base class that represents a query for the 'promociondetalle' table.
 *
 *
 *
 * @method PromociondetalleQuery orderByIdpromociondetalle($order = Criteria::ASC) Order by the idpromociondetalle column
 * @method PromociondetalleQuery orderByIdpromocion($order = Criteria::ASC) Order by the idpromocion column
 * @method PromociondetalleQuery orderByIdmarcaoperando($order = Criteria::ASC) Order by the idmarcaoperando column
 * @method PromociondetalleQuery orderByIdproductooperando($order = Criteria::ASC) Order by the idproductooperando column
 * @method PromociondetalleQuery orderByPromociondetalleCantidadoperando($order = Criteria::ASC) Order by the promociondetalle_cantidadoperando column
 * @method PromociondetalleQuery orderByIdmarcaresultado($order = Criteria::ASC) Order by the idmarcaresultado column
 * @method PromociondetalleQuery orderByIdproductoresultado($order = Criteria::ASC) Order by the idproductoresultado column
 * @method PromociondetalleQuery orderByPromociondetalleCantidadresultado($order = Criteria::ASC) Order by the promociondetalle_cantidadresultado column
 *
 * @method PromociondetalleQuery groupByIdpromociondetalle() Group by the idpromociondetalle column
 * @method PromociondetalleQuery groupByIdpromocion() Group by the idpromocion column
 * @method PromociondetalleQuery groupByIdmarcaoperando() Group by the idmarcaoperando column
 * @method PromociondetalleQuery groupByIdproductooperando() Group by the idproductooperando column
 * @method PromociondetalleQuery groupByPromociondetalleCantidadoperando() Group by the promociondetalle_cantidadoperando column
 * @method PromociondetalleQuery groupByIdmarcaresultado() Group by the idmarcaresultado column
 * @method PromociondetalleQuery groupByIdproductoresultado() Group by the idproductoresultado column
 * @method PromociondetalleQuery groupByPromociondetalleCantidadresultado() Group by the promociondetalle_cantidadresultado column
 *
 * @method PromociondetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PromociondetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PromociondetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PromociondetalleQuery leftJoinMarcaRelatedByIdmarcaoperando($relationAlias = null) Adds a LEFT JOIN clause to the query using the MarcaRelatedByIdmarcaoperando relation
 * @method PromociondetalleQuery rightJoinMarcaRelatedByIdmarcaoperando($relationAlias = null) Adds a RIGHT JOIN clause to the query using the MarcaRelatedByIdmarcaoperando relation
 * @method PromociondetalleQuery innerJoinMarcaRelatedByIdmarcaoperando($relationAlias = null) Adds a INNER JOIN clause to the query using the MarcaRelatedByIdmarcaoperando relation
 *
 * @method PromociondetalleQuery leftJoinMarcaRelatedByIdmarcaresultado($relationAlias = null) Adds a LEFT JOIN clause to the query using the MarcaRelatedByIdmarcaresultado relation
 * @method PromociondetalleQuery rightJoinMarcaRelatedByIdmarcaresultado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the MarcaRelatedByIdmarcaresultado relation
 * @method PromociondetalleQuery innerJoinMarcaRelatedByIdmarcaresultado($relationAlias = null) Adds a INNER JOIN clause to the query using the MarcaRelatedByIdmarcaresultado relation
 *
 * @method PromociondetalleQuery leftJoinProductoRelatedByIdproductooperando($relationAlias = null) Adds a LEFT JOIN clause to the query using the ProductoRelatedByIdproductooperando relation
 * @method PromociondetalleQuery rightJoinProductoRelatedByIdproductooperando($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ProductoRelatedByIdproductooperando relation
 * @method PromociondetalleQuery innerJoinProductoRelatedByIdproductooperando($relationAlias = null) Adds a INNER JOIN clause to the query using the ProductoRelatedByIdproductooperando relation
 *
 * @method PromociondetalleQuery leftJoinProductoRelatedByIdproductoresultado($relationAlias = null) Adds a LEFT JOIN clause to the query using the ProductoRelatedByIdproductoresultado relation
 * @method PromociondetalleQuery rightJoinProductoRelatedByIdproductoresultado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ProductoRelatedByIdproductoresultado relation
 * @method PromociondetalleQuery innerJoinProductoRelatedByIdproductoresultado($relationAlias = null) Adds a INNER JOIN clause to the query using the ProductoRelatedByIdproductoresultado relation
 *
 * @method PromociondetalleQuery leftJoinPromocion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Promocion relation
 * @method PromociondetalleQuery rightJoinPromocion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Promocion relation
 * @method PromociondetalleQuery innerJoinPromocion($relationAlias = null) Adds a INNER JOIN clause to the query using the Promocion relation
 *
 * @method Promociondetalle findOne(PropelPDO $con = null) Return the first Promociondetalle matching the query
 * @method Promociondetalle findOneOrCreate(PropelPDO $con = null) Return the first Promociondetalle matching the query, or a new Promociondetalle object populated from the query conditions when no match is found
 *
 * @method Promociondetalle findOneByIdpromocion(int $idpromocion) Return the first Promociondetalle filtered by the idpromocion column
 * @method Promociondetalle findOneByIdmarcaoperando(int $idmarcaoperando) Return the first Promociondetalle filtered by the idmarcaoperando column
 * @method Promociondetalle findOneByIdproductooperando(int $idproductooperando) Return the first Promociondetalle filtered by the idproductooperando column
 * @method Promociondetalle findOneByPromociondetalleCantidadoperando(string $promociondetalle_cantidadoperando) Return the first Promociondetalle filtered by the promociondetalle_cantidadoperando column
 * @method Promociondetalle findOneByIdmarcaresultado(int $idmarcaresultado) Return the first Promociondetalle filtered by the idmarcaresultado column
 * @method Promociondetalle findOneByIdproductoresultado(int $idproductoresultado) Return the first Promociondetalle filtered by the idproductoresultado column
 * @method Promociondetalle findOneByPromociondetalleCantidadresultado(string $promociondetalle_cantidadresultado) Return the first Promociondetalle filtered by the promociondetalle_cantidadresultado column
 *
 * @method array findByIdpromociondetalle(int $idpromociondetalle) Return Promociondetalle objects filtered by the idpromociondetalle column
 * @method array findByIdpromocion(int $idpromocion) Return Promociondetalle objects filtered by the idpromocion column
 * @method array findByIdmarcaoperando(int $idmarcaoperando) Return Promociondetalle objects filtered by the idmarcaoperando column
 * @method array findByIdproductooperando(int $idproductooperando) Return Promociondetalle objects filtered by the idproductooperando column
 * @method array findByPromociondetalleCantidadoperando(string $promociondetalle_cantidadoperando) Return Promociondetalle objects filtered by the promociondetalle_cantidadoperando column
 * @method array findByIdmarcaresultado(int $idmarcaresultado) Return Promociondetalle objects filtered by the idmarcaresultado column
 * @method array findByIdproductoresultado(int $idproductoresultado) Return Promociondetalle objects filtered by the idproductoresultado column
 * @method array findByPromociondetalleCantidadresultado(string $promociondetalle_cantidadresultado) Return Promociondetalle objects filtered by the promociondetalle_cantidadresultado column
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
        $sql = 'SELECT `idpromociondetalle`, `idpromocion`, `idmarcaoperando`, `idproductooperando`, `promociondetalle_cantidadoperando`, `idmarcaresultado`, `idproductoresultado`, `promociondetalle_cantidadresultado` FROM `promociondetalle` WHERE `idpromociondetalle` = :p0';
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
     * Filter the query on the idmarcaoperando column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmarcaoperando(1234); // WHERE idmarcaoperando = 1234
     * $query->filterByIdmarcaoperando(array(12, 34)); // WHERE idmarcaoperando IN (12, 34)
     * $query->filterByIdmarcaoperando(array('min' => 12)); // WHERE idmarcaoperando >= 12
     * $query->filterByIdmarcaoperando(array('max' => 12)); // WHERE idmarcaoperando <= 12
     * </code>
     *
     * @see       filterByMarcaRelatedByIdmarcaoperando()
     *
     * @param     mixed $idmarcaoperando The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function filterByIdmarcaoperando($idmarcaoperando = null, $comparison = null)
    {
        if (is_array($idmarcaoperando)) {
            $useMinMax = false;
            if (isset($idmarcaoperando['min'])) {
                $this->addUsingAlias(PromociondetallePeer::IDMARCAOPERANDO, $idmarcaoperando['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmarcaoperando['max'])) {
                $this->addUsingAlias(PromociondetallePeer::IDMARCAOPERANDO, $idmarcaoperando['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PromociondetallePeer::IDMARCAOPERANDO, $idmarcaoperando, $comparison);
    }

    /**
     * Filter the query on the idproductooperando column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductooperando(1234); // WHERE idproductooperando = 1234
     * $query->filterByIdproductooperando(array(12, 34)); // WHERE idproductooperando IN (12, 34)
     * $query->filterByIdproductooperando(array('min' => 12)); // WHERE idproductooperando >= 12
     * $query->filterByIdproductooperando(array('max' => 12)); // WHERE idproductooperando <= 12
     * </code>
     *
     * @see       filterByProductoRelatedByIdproductooperando()
     *
     * @param     mixed $idproductooperando The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function filterByIdproductooperando($idproductooperando = null, $comparison = null)
    {
        if (is_array($idproductooperando)) {
            $useMinMax = false;
            if (isset($idproductooperando['min'])) {
                $this->addUsingAlias(PromociondetallePeer::IDPRODUCTOOPERANDO, $idproductooperando['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductooperando['max'])) {
                $this->addUsingAlias(PromociondetallePeer::IDPRODUCTOOPERANDO, $idproductooperando['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PromociondetallePeer::IDPRODUCTOOPERANDO, $idproductooperando, $comparison);
    }

    /**
     * Filter the query on the promociondetalle_cantidadoperando column
     *
     * Example usage:
     * <code>
     * $query->filterByPromociondetalleCantidadoperando(1234); // WHERE promociondetalle_cantidadoperando = 1234
     * $query->filterByPromociondetalleCantidadoperando(array(12, 34)); // WHERE promociondetalle_cantidadoperando IN (12, 34)
     * $query->filterByPromociondetalleCantidadoperando(array('min' => 12)); // WHERE promociondetalle_cantidadoperando >= 12
     * $query->filterByPromociondetalleCantidadoperando(array('max' => 12)); // WHERE promociondetalle_cantidadoperando <= 12
     * </code>
     *
     * @param     mixed $promociondetalleCantidadoperando The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function filterByPromociondetalleCantidadoperando($promociondetalleCantidadoperando = null, $comparison = null)
    {
        if (is_array($promociondetalleCantidadoperando)) {
            $useMinMax = false;
            if (isset($promociondetalleCantidadoperando['min'])) {
                $this->addUsingAlias(PromociondetallePeer::PROMOCIONDETALLE_CANTIDADOPERANDO, $promociondetalleCantidadoperando['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($promociondetalleCantidadoperando['max'])) {
                $this->addUsingAlias(PromociondetallePeer::PROMOCIONDETALLE_CANTIDADOPERANDO, $promociondetalleCantidadoperando['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PromociondetallePeer::PROMOCIONDETALLE_CANTIDADOPERANDO, $promociondetalleCantidadoperando, $comparison);
    }

    /**
     * Filter the query on the idmarcaresultado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdmarcaresultado(1234); // WHERE idmarcaresultado = 1234
     * $query->filterByIdmarcaresultado(array(12, 34)); // WHERE idmarcaresultado IN (12, 34)
     * $query->filterByIdmarcaresultado(array('min' => 12)); // WHERE idmarcaresultado >= 12
     * $query->filterByIdmarcaresultado(array('max' => 12)); // WHERE idmarcaresultado <= 12
     * </code>
     *
     * @see       filterByMarcaRelatedByIdmarcaresultado()
     *
     * @param     mixed $idmarcaresultado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function filterByIdmarcaresultado($idmarcaresultado = null, $comparison = null)
    {
        if (is_array($idmarcaresultado)) {
            $useMinMax = false;
            if (isset($idmarcaresultado['min'])) {
                $this->addUsingAlias(PromociondetallePeer::IDMARCARESULTADO, $idmarcaresultado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idmarcaresultado['max'])) {
                $this->addUsingAlias(PromociondetallePeer::IDMARCARESULTADO, $idmarcaresultado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PromociondetallePeer::IDMARCARESULTADO, $idmarcaresultado, $comparison);
    }

    /**
     * Filter the query on the idproductoresultado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproductoresultado(1234); // WHERE idproductoresultado = 1234
     * $query->filterByIdproductoresultado(array(12, 34)); // WHERE idproductoresultado IN (12, 34)
     * $query->filterByIdproductoresultado(array('min' => 12)); // WHERE idproductoresultado >= 12
     * $query->filterByIdproductoresultado(array('max' => 12)); // WHERE idproductoresultado <= 12
     * </code>
     *
     * @see       filterByProductoRelatedByIdproductoresultado()
     *
     * @param     mixed $idproductoresultado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function filterByIdproductoresultado($idproductoresultado = null, $comparison = null)
    {
        if (is_array($idproductoresultado)) {
            $useMinMax = false;
            if (isset($idproductoresultado['min'])) {
                $this->addUsingAlias(PromociondetallePeer::IDPRODUCTORESULTADO, $idproductoresultado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductoresultado['max'])) {
                $this->addUsingAlias(PromociondetallePeer::IDPRODUCTORESULTADO, $idproductoresultado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PromociondetallePeer::IDPRODUCTORESULTADO, $idproductoresultado, $comparison);
    }

    /**
     * Filter the query on the promociondetalle_cantidadresultado column
     *
     * Example usage:
     * <code>
     * $query->filterByPromociondetalleCantidadresultado(1234); // WHERE promociondetalle_cantidadresultado = 1234
     * $query->filterByPromociondetalleCantidadresultado(array(12, 34)); // WHERE promociondetalle_cantidadresultado IN (12, 34)
     * $query->filterByPromociondetalleCantidadresultado(array('min' => 12)); // WHERE promociondetalle_cantidadresultado >= 12
     * $query->filterByPromociondetalleCantidadresultado(array('max' => 12)); // WHERE promociondetalle_cantidadresultado <= 12
     * </code>
     *
     * @param     mixed $promociondetalleCantidadresultado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function filterByPromociondetalleCantidadresultado($promociondetalleCantidadresultado = null, $comparison = null)
    {
        if (is_array($promociondetalleCantidadresultado)) {
            $useMinMax = false;
            if (isset($promociondetalleCantidadresultado['min'])) {
                $this->addUsingAlias(PromociondetallePeer::PROMOCIONDETALLE_CANTIDADRESULTADO, $promociondetalleCantidadresultado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($promociondetalleCantidadresultado['max'])) {
                $this->addUsingAlias(PromociondetallePeer::PROMOCIONDETALLE_CANTIDADRESULTADO, $promociondetalleCantidadresultado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PromociondetallePeer::PROMOCIONDETALLE_CANTIDADRESULTADO, $promociondetalleCantidadresultado, $comparison);
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
    public function filterByMarcaRelatedByIdmarcaoperando($marca, $comparison = null)
    {
        if ($marca instanceof Marca) {
            return $this
                ->addUsingAlias(PromociondetallePeer::IDMARCAOPERANDO, $marca->getIdmarca(), $comparison);
        } elseif ($marca instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PromociondetallePeer::IDMARCAOPERANDO, $marca->toKeyValue('PrimaryKey', 'Idmarca'), $comparison);
        } else {
            throw new PropelException('filterByMarcaRelatedByIdmarcaoperando() only accepts arguments of type Marca or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the MarcaRelatedByIdmarcaoperando relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function joinMarcaRelatedByIdmarcaoperando($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('MarcaRelatedByIdmarcaoperando');

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
            $this->addJoinObject($join, 'MarcaRelatedByIdmarcaoperando');
        }

        return $this;
    }

    /**
     * Use the MarcaRelatedByIdmarcaoperando relation Marca object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MarcaQuery A secondary query class using the current class as primary query
     */
    public function useMarcaRelatedByIdmarcaoperandoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMarcaRelatedByIdmarcaoperando($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'MarcaRelatedByIdmarcaoperando', 'MarcaQuery');
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
    public function filterByMarcaRelatedByIdmarcaresultado($marca, $comparison = null)
    {
        if ($marca instanceof Marca) {
            return $this
                ->addUsingAlias(PromociondetallePeer::IDMARCARESULTADO, $marca->getIdmarca(), $comparison);
        } elseif ($marca instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PromociondetallePeer::IDMARCARESULTADO, $marca->toKeyValue('PrimaryKey', 'Idmarca'), $comparison);
        } else {
            throw new PropelException('filterByMarcaRelatedByIdmarcaresultado() only accepts arguments of type Marca or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the MarcaRelatedByIdmarcaresultado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function joinMarcaRelatedByIdmarcaresultado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('MarcaRelatedByIdmarcaresultado');

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
            $this->addJoinObject($join, 'MarcaRelatedByIdmarcaresultado');
        }

        return $this;
    }

    /**
     * Use the MarcaRelatedByIdmarcaresultado relation Marca object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MarcaQuery A secondary query class using the current class as primary query
     */
    public function useMarcaRelatedByIdmarcaresultadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinMarcaRelatedByIdmarcaresultado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'MarcaRelatedByIdmarcaresultado', 'MarcaQuery');
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
    public function filterByProductoRelatedByIdproductooperando($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(PromociondetallePeer::IDPRODUCTOOPERANDO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PromociondetallePeer::IDPRODUCTOOPERANDO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
        } else {
            throw new PropelException('filterByProductoRelatedByIdproductooperando() only accepts arguments of type Producto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ProductoRelatedByIdproductooperando relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function joinProductoRelatedByIdproductooperando($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ProductoRelatedByIdproductooperando');

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
            $this->addJoinObject($join, 'ProductoRelatedByIdproductooperando');
        }

        return $this;
    }

    /**
     * Use the ProductoRelatedByIdproductooperando relation Producto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoQuery A secondary query class using the current class as primary query
     */
    public function useProductoRelatedByIdproductooperandoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductoRelatedByIdproductooperando($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ProductoRelatedByIdproductooperando', 'ProductoQuery');
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
    public function filterByProductoRelatedByIdproductoresultado($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(PromociondetallePeer::IDPRODUCTORESULTADO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PromociondetallePeer::IDPRODUCTORESULTADO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
        } else {
            throw new PropelException('filterByProductoRelatedByIdproductoresultado() only accepts arguments of type Producto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ProductoRelatedByIdproductoresultado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PromociondetalleQuery The current query, for fluid interface
     */
    public function joinProductoRelatedByIdproductoresultado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ProductoRelatedByIdproductoresultado');

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
            $this->addJoinObject($join, 'ProductoRelatedByIdproductoresultado');
        }

        return $this;
    }

    /**
     * Use the ProductoRelatedByIdproductoresultado relation Producto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoQuery A secondary query class using the current class as primary query
     */
    public function useProductoRelatedByIdproductoresultadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductoRelatedByIdproductoresultado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ProductoRelatedByIdproductoresultado', 'ProductoQuery');
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
