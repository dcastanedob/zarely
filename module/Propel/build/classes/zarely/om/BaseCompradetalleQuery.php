<?php


/**
 * Base class that represents a query for the 'compradetalle' table.
 *
 *
 *
 * @method CompradetalleQuery orderByIdcompradetalle($order = Criteria::ASC) Order by the idcompradetalle column
 * @method CompradetalleQuery orderByIdcompra($order = Criteria::ASC) Order by the idcompra column
 * @method CompradetalleQuery orderByIdproductovariante($order = Criteria::ASC) Order by the idproductovariante column
 * @method CompradetalleQuery orderByCompradetalleCantidad($order = Criteria::ASC) Order by the compradetalle_cantidad column
 * @method CompradetalleQuery orderByCompradetallePreciounitario($order = Criteria::ASC) Order by the compradetalle_preciounitario column
 * @method CompradetalleQuery orderByCompradetalleSubtotal($order = Criteria::ASC) Order by the compradetalle_subtotal column
 * @method CompradetalleQuery orderByCompradetalleCosto($order = Criteria::ASC) Order by the compradetalle_costo column
 *
 * @method CompradetalleQuery groupByIdcompradetalle() Group by the idcompradetalle column
 * @method CompradetalleQuery groupByIdcompra() Group by the idcompra column
 * @method CompradetalleQuery groupByIdproductovariante() Group by the idproductovariante column
 * @method CompradetalleQuery groupByCompradetalleCantidad() Group by the compradetalle_cantidad column
 * @method CompradetalleQuery groupByCompradetallePreciounitario() Group by the compradetalle_preciounitario column
 * @method CompradetalleQuery groupByCompradetalleSubtotal() Group by the compradetalle_subtotal column
 * @method CompradetalleQuery groupByCompradetalleCosto() Group by the compradetalle_costo column
 *
 * @method CompradetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CompradetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CompradetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CompradetalleQuery leftJoinCompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compra relation
 * @method CompradetalleQuery rightJoinCompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compra relation
 * @method CompradetalleQuery innerJoinCompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Compra relation
 *
 * @method CompradetalleQuery leftJoinProductovariante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productovariante relation
 * @method CompradetalleQuery rightJoinProductovariante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productovariante relation
 * @method CompradetalleQuery innerJoinProductovariante($relationAlias = null) Adds a INNER JOIN clause to the query using the Productovariante relation
 *
 * @method Compradetalle findOne(PropelPDO $con = null) Return the first Compradetalle matching the query
 * @method Compradetalle findOneOrCreate(PropelPDO $con = null) Return the first Compradetalle matching the query, or a new Compradetalle object populated from the query conditions when no match is found
 *
 * @method Compradetalle findOneByIdcompra(int $idcompra) Return the first Compradetalle filtered by the idcompra column
 * @method Compradetalle findOneByIdproductovariante(int $idproductovariante) Return the first Compradetalle filtered by the idproductovariante column
 * @method Compradetalle findOneByCompradetalleCantidad(string $compradetalle_cantidad) Return the first Compradetalle filtered by the compradetalle_cantidad column
 * @method Compradetalle findOneByCompradetallePreciounitario(string $compradetalle_preciounitario) Return the first Compradetalle filtered by the compradetalle_preciounitario column
 * @method Compradetalle findOneByCompradetalleSubtotal(string $compradetalle_subtotal) Return the first Compradetalle filtered by the compradetalle_subtotal column
 * @method Compradetalle findOneByCompradetalleCosto(string $compradetalle_costo) Return the first Compradetalle filtered by the compradetalle_costo column
 *
 * @method array findByIdcompradetalle(int $idcompradetalle) Return Compradetalle objects filtered by the idcompradetalle column
 * @method array findByIdcompra(int $idcompra) Return Compradetalle objects filtered by the idcompra column
 * @method array findByIdproductovariante(int $idproductovariante) Return Compradetalle objects filtered by the idproductovariante column
 * @method array findByCompradetalleCantidad(string $compradetalle_cantidad) Return Compradetalle objects filtered by the compradetalle_cantidad column
 * @method array findByCompradetallePreciounitario(string $compradetalle_preciounitario) Return Compradetalle objects filtered by the compradetalle_preciounitario column
 * @method array findByCompradetalleSubtotal(string $compradetalle_subtotal) Return Compradetalle objects filtered by the compradetalle_subtotal column
 * @method array findByCompradetalleCosto(string $compradetalle_costo) Return Compradetalle objects filtered by the compradetalle_costo column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseCompradetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCompradetalleQuery object.
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
            $modelName = 'Compradetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CompradetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CompradetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CompradetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CompradetalleQuery) {
            return $criteria;
        }
        $query = new CompradetalleQuery(null, null, $modelAlias);

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
     * @return   Compradetalle|Compradetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CompradetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CompradetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Compradetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcompradetalle($key, $con = null)
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
     * @return                 Compradetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcompradetalle`, `idcompra`, `idproductovariante`, `compradetalle_cantidad`, `compradetalle_preciounitario`, `compradetalle_subtotal`, `compradetalle_costo` FROM `compradetalle` WHERE `idcompradetalle` = :p0';
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
            $obj = new Compradetalle();
            $obj->hydrate($row);
            CompradetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Compradetalle|Compradetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Compradetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CompradetallePeer::IDCOMPRADETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CompradetallePeer::IDCOMPRADETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcompradetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcompradetalle(1234); // WHERE idcompradetalle = 1234
     * $query->filterByIdcompradetalle(array(12, 34)); // WHERE idcompradetalle IN (12, 34)
     * $query->filterByIdcompradetalle(array('min' => 12)); // WHERE idcompradetalle >= 12
     * $query->filterByIdcompradetalle(array('max' => 12)); // WHERE idcompradetalle <= 12
     * </code>
     *
     * @param     mixed $idcompradetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByIdcompradetalle($idcompradetalle = null, $comparison = null)
    {
        if (is_array($idcompradetalle)) {
            $useMinMax = false;
            if (isset($idcompradetalle['min'])) {
                $this->addUsingAlias(CompradetallePeer::IDCOMPRADETALLE, $idcompradetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcompradetalle['max'])) {
                $this->addUsingAlias(CompradetallePeer::IDCOMPRADETALLE, $idcompradetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::IDCOMPRADETALLE, $idcompradetalle, $comparison);
    }

    /**
     * Filter the query on the idcompra column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcompra(1234); // WHERE idcompra = 1234
     * $query->filterByIdcompra(array(12, 34)); // WHERE idcompra IN (12, 34)
     * $query->filterByIdcompra(array('min' => 12)); // WHERE idcompra >= 12
     * $query->filterByIdcompra(array('max' => 12)); // WHERE idcompra <= 12
     * </code>
     *
     * @see       filterByCompra()
     *
     * @param     mixed $idcompra The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByIdcompra($idcompra = null, $comparison = null)
    {
        if (is_array($idcompra)) {
            $useMinMax = false;
            if (isset($idcompra['min'])) {
                $this->addUsingAlias(CompradetallePeer::IDCOMPRA, $idcompra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcompra['max'])) {
                $this->addUsingAlias(CompradetallePeer::IDCOMPRA, $idcompra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::IDCOMPRA, $idcompra, $comparison);
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
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByIdproductovariante($idproductovariante = null, $comparison = null)
    {
        if (is_array($idproductovariante)) {
            $useMinMax = false;
            if (isset($idproductovariante['min'])) {
                $this->addUsingAlias(CompradetallePeer::IDPRODUCTOVARIANTE, $idproductovariante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductovariante['max'])) {
                $this->addUsingAlias(CompradetallePeer::IDPRODUCTOVARIANTE, $idproductovariante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::IDPRODUCTOVARIANTE, $idproductovariante, $comparison);
    }

    /**
     * Filter the query on the compradetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByCompradetalleCantidad(1234); // WHERE compradetalle_cantidad = 1234
     * $query->filterByCompradetalleCantidad(array(12, 34)); // WHERE compradetalle_cantidad IN (12, 34)
     * $query->filterByCompradetalleCantidad(array('min' => 12)); // WHERE compradetalle_cantidad >= 12
     * $query->filterByCompradetalleCantidad(array('max' => 12)); // WHERE compradetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $compradetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByCompradetalleCantidad($compradetalleCantidad = null, $comparison = null)
    {
        if (is_array($compradetalleCantidad)) {
            $useMinMax = false;
            if (isset($compradetalleCantidad['min'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_CANTIDAD, $compradetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compradetalleCantidad['max'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_CANTIDAD, $compradetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_CANTIDAD, $compradetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the compradetalle_preciounitario column
     *
     * Example usage:
     * <code>
     * $query->filterByCompradetallePreciounitario(1234); // WHERE compradetalle_preciounitario = 1234
     * $query->filterByCompradetallePreciounitario(array(12, 34)); // WHERE compradetalle_preciounitario IN (12, 34)
     * $query->filterByCompradetallePreciounitario(array('min' => 12)); // WHERE compradetalle_preciounitario >= 12
     * $query->filterByCompradetallePreciounitario(array('max' => 12)); // WHERE compradetalle_preciounitario <= 12
     * </code>
     *
     * @param     mixed $compradetallePreciounitario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByCompradetallePreciounitario($compradetallePreciounitario = null, $comparison = null)
    {
        if (is_array($compradetallePreciounitario)) {
            $useMinMax = false;
            if (isset($compradetallePreciounitario['min'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_PRECIOUNITARIO, $compradetallePreciounitario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compradetallePreciounitario['max'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_PRECIOUNITARIO, $compradetallePreciounitario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_PRECIOUNITARIO, $compradetallePreciounitario, $comparison);
    }

    /**
     * Filter the query on the compradetalle_subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterByCompradetalleSubtotal(1234); // WHERE compradetalle_subtotal = 1234
     * $query->filterByCompradetalleSubtotal(array(12, 34)); // WHERE compradetalle_subtotal IN (12, 34)
     * $query->filterByCompradetalleSubtotal(array('min' => 12)); // WHERE compradetalle_subtotal >= 12
     * $query->filterByCompradetalleSubtotal(array('max' => 12)); // WHERE compradetalle_subtotal <= 12
     * </code>
     *
     * @param     mixed $compradetalleSubtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByCompradetalleSubtotal($compradetalleSubtotal = null, $comparison = null)
    {
        if (is_array($compradetalleSubtotal)) {
            $useMinMax = false;
            if (isset($compradetalleSubtotal['min'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_SUBTOTAL, $compradetalleSubtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compradetalleSubtotal['max'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_SUBTOTAL, $compradetalleSubtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_SUBTOTAL, $compradetalleSubtotal, $comparison);
    }

    /**
     * Filter the query on the compradetalle_costo column
     *
     * Example usage:
     * <code>
     * $query->filterByCompradetalleCosto(1234); // WHERE compradetalle_costo = 1234
     * $query->filterByCompradetalleCosto(array(12, 34)); // WHERE compradetalle_costo IN (12, 34)
     * $query->filterByCompradetalleCosto(array('min' => 12)); // WHERE compradetalle_costo >= 12
     * $query->filterByCompradetalleCosto(array('max' => 12)); // WHERE compradetalle_costo <= 12
     * </code>
     *
     * @param     mixed $compradetalleCosto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function filterByCompradetalleCosto($compradetalleCosto = null, $comparison = null)
    {
        if (is_array($compradetalleCosto)) {
            $useMinMax = false;
            if (isset($compradetalleCosto['min'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_COSTO, $compradetalleCosto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compradetalleCosto['max'])) {
                $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_COSTO, $compradetalleCosto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompradetallePeer::COMPRADETALLE_COSTO, $compradetalleCosto, $comparison);
    }

    /**
     * Filter the query by a related Compra object
     *
     * @param   Compra|PropelObjectCollection $compra The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompradetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompra($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(CompradetallePeer::IDCOMPRA, $compra->getIdcompra(), $comparison);
        } elseif ($compra instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompradetallePeer::IDCOMPRA, $compra->toKeyValue('PrimaryKey', 'Idcompra'), $comparison);
        } else {
            throw new PropelException('filterByCompra() only accepts arguments of type Compra or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Compra relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function joinCompra($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Compra');

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
            $this->addJoinObject($join, 'Compra');
        }

        return $this;
    }

    /**
     * Use the Compra relation Compra object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompraQuery A secondary query class using the current class as primary query
     */
    public function useCompraQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompra($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compra', 'CompraQuery');
    }

    /**
     * Filter the query by a related Productovariante object
     *
     * @param   Productovariante|PropelObjectCollection $productovariante The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompradetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductovariante($productovariante, $comparison = null)
    {
        if ($productovariante instanceof Productovariante) {
            return $this
                ->addUsingAlias(CompradetallePeer::IDPRODUCTOVARIANTE, $productovariante->getIdproductovariante(), $comparison);
        } elseif ($productovariante instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompradetallePeer::IDPRODUCTOVARIANTE, $productovariante->toKeyValue('PrimaryKey', 'Idproductovariante'), $comparison);
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
     * @return CompradetalleQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Compradetalle $compradetalle Object to remove from the list of results
     *
     * @return CompradetalleQuery The current query, for fluid interface
     */
    public function prune($compradetalle = null)
    {
        if ($compradetalle) {
            $this->addUsingAlias(CompradetallePeer::IDCOMPRADETALLE, $compradetalle->getIdcompradetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
