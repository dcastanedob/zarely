<?php


/**
 * Base class that represents a query for the 'ventadetalle' table.
 *
 *
 *
 * @method VentadetalleQuery orderByIdventadetalle($order = Criteria::ASC) Order by the idventadetalle column
 * @method VentadetalleQuery orderByIdventa($order = Criteria::ASC) Order by the idventa column
 * @method VentadetalleQuery orderByIddescuento($order = Criteria::ASC) Order by the iddescuento column
 * @method VentadetalleQuery orderByIdpromocion($order = Criteria::ASC) Order by the idpromocion column
 * @method VentadetalleQuery orderByIdproductovariante($order = Criteria::ASC) Order by the idproductovariante column
 * @method VentadetalleQuery orderByVentadetalleCantidad($order = Criteria::ASC) Order by the ventadetalle_cantidad column
 * @method VentadetalleQuery orderByVentadetalleSubtotal($order = Criteria::ASC) Order by the ventadetalle_subtotal column
 * @method VentadetalleQuery orderByVentadetallePreciounitario($order = Criteria::ASC) Order by the ventadetalle_preciounitario column
 * @method VentadetalleQuery orderByVentadetalleEstatus($order = Criteria::ASC) Order by the ventadetalle_estatus column
 * @method VentadetalleQuery orderByVentadetalleDescuento($order = Criteria::ASC) Order by the ventadetalle_descuento column
 * @method VentadetalleQuery orderByIdventadetallapadre($order = Criteria::ASC) Order by the idventadetallapadre column
 *
 * @method VentadetalleQuery groupByIdventadetalle() Group by the idventadetalle column
 * @method VentadetalleQuery groupByIdventa() Group by the idventa column
 * @method VentadetalleQuery groupByIddescuento() Group by the iddescuento column
 * @method VentadetalleQuery groupByIdpromocion() Group by the idpromocion column
 * @method VentadetalleQuery groupByIdproductovariante() Group by the idproductovariante column
 * @method VentadetalleQuery groupByVentadetalleCantidad() Group by the ventadetalle_cantidad column
 * @method VentadetalleQuery groupByVentadetalleSubtotal() Group by the ventadetalle_subtotal column
 * @method VentadetalleQuery groupByVentadetallePreciounitario() Group by the ventadetalle_preciounitario column
 * @method VentadetalleQuery groupByVentadetalleEstatus() Group by the ventadetalle_estatus column
 * @method VentadetalleQuery groupByVentadetalleDescuento() Group by the ventadetalle_descuento column
 * @method VentadetalleQuery groupByIdventadetallapadre() Group by the idventadetallapadre column
 *
 * @method VentadetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VentadetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VentadetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method VentadetalleQuery leftJoinDescuento($relationAlias = null) Adds a LEFT JOIN clause to the query using the Descuento relation
 * @method VentadetalleQuery rightJoinDescuento($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Descuento relation
 * @method VentadetalleQuery innerJoinDescuento($relationAlias = null) Adds a INNER JOIN clause to the query using the Descuento relation
 *
 * @method VentadetalleQuery leftJoinProductovariante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productovariante relation
 * @method VentadetalleQuery rightJoinProductovariante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productovariante relation
 * @method VentadetalleQuery innerJoinProductovariante($relationAlias = null) Adds a INNER JOIN clause to the query using the Productovariante relation
 *
 * @method VentadetalleQuery leftJoinPromocion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Promocion relation
 * @method VentadetalleQuery rightJoinPromocion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Promocion relation
 * @method VentadetalleQuery innerJoinPromocion($relationAlias = null) Adds a INNER JOIN clause to the query using the Promocion relation
 *
 * @method VentadetalleQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method VentadetalleQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method VentadetalleQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method VentadetalleQuery leftJoinVentadetalleRelatedByIdventadetallapadre($relationAlias = null) Adds a LEFT JOIN clause to the query using the VentadetalleRelatedByIdventadetallapadre relation
 * @method VentadetalleQuery rightJoinVentadetalleRelatedByIdventadetallapadre($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VentadetalleRelatedByIdventadetallapadre relation
 * @method VentadetalleQuery innerJoinVentadetalleRelatedByIdventadetallapadre($relationAlias = null) Adds a INNER JOIN clause to the query using the VentadetalleRelatedByIdventadetallapadre relation
 *
 * @method VentadetalleQuery leftJoinVentadetalleRelatedByIdventadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the VentadetalleRelatedByIdventadetalle relation
 * @method VentadetalleQuery rightJoinVentadetalleRelatedByIdventadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VentadetalleRelatedByIdventadetalle relation
 * @method VentadetalleQuery innerJoinVentadetalleRelatedByIdventadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the VentadetalleRelatedByIdventadetalle relation
 *
 * @method Ventadetalle findOne(PropelPDO $con = null) Return the first Ventadetalle matching the query
 * @method Ventadetalle findOneOrCreate(PropelPDO $con = null) Return the first Ventadetalle matching the query, or a new Ventadetalle object populated from the query conditions when no match is found
 *
 * @method Ventadetalle findOneByIdventa(int $idventa) Return the first Ventadetalle filtered by the idventa column
 * @method Ventadetalle findOneByIddescuento(int $iddescuento) Return the first Ventadetalle filtered by the iddescuento column
 * @method Ventadetalle findOneByIdpromocion(int $idpromocion) Return the first Ventadetalle filtered by the idpromocion column
 * @method Ventadetalle findOneByIdproductovariante(int $idproductovariante) Return the first Ventadetalle filtered by the idproductovariante column
 * @method Ventadetalle findOneByVentadetalleCantidad(int $ventadetalle_cantidad) Return the first Ventadetalle filtered by the ventadetalle_cantidad column
 * @method Ventadetalle findOneByVentadetalleSubtotal(string $ventadetalle_subtotal) Return the first Ventadetalle filtered by the ventadetalle_subtotal column
 * @method Ventadetalle findOneByVentadetallePreciounitario(string $ventadetalle_preciounitario) Return the first Ventadetalle filtered by the ventadetalle_preciounitario column
 * @method Ventadetalle findOneByVentadetalleEstatus(string $ventadetalle_estatus) Return the first Ventadetalle filtered by the ventadetalle_estatus column
 * @method Ventadetalle findOneByVentadetalleDescuento(double $ventadetalle_descuento) Return the first Ventadetalle filtered by the ventadetalle_descuento column
 * @method Ventadetalle findOneByIdventadetallapadre(int $idventadetallapadre) Return the first Ventadetalle filtered by the idventadetallapadre column
 *
 * @method array findByIdventadetalle(int $idventadetalle) Return Ventadetalle objects filtered by the idventadetalle column
 * @method array findByIdventa(int $idventa) Return Ventadetalle objects filtered by the idventa column
 * @method array findByIddescuento(int $iddescuento) Return Ventadetalle objects filtered by the iddescuento column
 * @method array findByIdpromocion(int $idpromocion) Return Ventadetalle objects filtered by the idpromocion column
 * @method array findByIdproductovariante(int $idproductovariante) Return Ventadetalle objects filtered by the idproductovariante column
 * @method array findByVentadetalleCantidad(int $ventadetalle_cantidad) Return Ventadetalle objects filtered by the ventadetalle_cantidad column
 * @method array findByVentadetalleSubtotal(string $ventadetalle_subtotal) Return Ventadetalle objects filtered by the ventadetalle_subtotal column
 * @method array findByVentadetallePreciounitario(string $ventadetalle_preciounitario) Return Ventadetalle objects filtered by the ventadetalle_preciounitario column
 * @method array findByVentadetalleEstatus(string $ventadetalle_estatus) Return Ventadetalle objects filtered by the ventadetalle_estatus column
 * @method array findByVentadetalleDescuento(double $ventadetalle_descuento) Return Ventadetalle objects filtered by the ventadetalle_descuento column
 * @method array findByIdventadetallapadre(int $idventadetallapadre) Return Ventadetalle objects filtered by the idventadetallapadre column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseVentadetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVentadetalleQuery object.
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
            $modelName = 'Ventadetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VentadetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VentadetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VentadetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VentadetalleQuery) {
            return $criteria;
        }
        $query = new VentadetalleQuery(null, null, $modelAlias);

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
     * @return   Ventadetalle|Ventadetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VentadetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VentadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Ventadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdventadetalle($key, $con = null)
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
     * @return                 Ventadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idventadetalle`, `idventa`, `iddescuento`, `idpromocion`, `idproductovariante`, `ventadetalle_cantidad`, `ventadetalle_subtotal`, `ventadetalle_preciounitario`, `ventadetalle_estatus`, `ventadetalle_descuento`, `idventadetallapadre` FROM `ventadetalle` WHERE `idventadetalle` = :p0';
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
            $obj = new Ventadetalle();
            $obj->hydrate($row);
            VentadetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Ventadetalle|Ventadetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Ventadetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idventadetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdventadetalle(1234); // WHERE idventadetalle = 1234
     * $query->filterByIdventadetalle(array(12, 34)); // WHERE idventadetalle IN (12, 34)
     * $query->filterByIdventadetalle(array('min' => 12)); // WHERE idventadetalle >= 12
     * $query->filterByIdventadetalle(array('max' => 12)); // WHERE idventadetalle <= 12
     * </code>
     *
     * @param     mixed $idventadetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByIdventadetalle($idventadetalle = null, $comparison = null)
    {
        if (is_array($idventadetalle)) {
            $useMinMax = false;
            if (isset($idventadetalle['min'])) {
                $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $idventadetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventadetalle['max'])) {
                $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $idventadetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $idventadetalle, $comparison);
    }

    /**
     * Filter the query on the idventa column
     *
     * Example usage:
     * <code>
     * $query->filterByIdventa(1234); // WHERE idventa = 1234
     * $query->filterByIdventa(array(12, 34)); // WHERE idventa IN (12, 34)
     * $query->filterByIdventa(array('min' => 12)); // WHERE idventa >= 12
     * $query->filterByIdventa(array('max' => 12)); // WHERE idventa <= 12
     * </code>
     *
     * @see       filterByVenta()
     *
     * @param     mixed $idventa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByIdventa($idventa = null, $comparison = null)
    {
        if (is_array($idventa)) {
            $useMinMax = false;
            if (isset($idventa['min'])) {
                $this->addUsingAlias(VentadetallePeer::IDVENTA, $idventa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventa['max'])) {
                $this->addUsingAlias(VentadetallePeer::IDVENTA, $idventa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::IDVENTA, $idventa, $comparison);
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
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByIddescuento($iddescuento = null, $comparison = null)
    {
        if (is_array($iddescuento)) {
            $useMinMax = false;
            if (isset($iddescuento['min'])) {
                $this->addUsingAlias(VentadetallePeer::IDDESCUENTO, $iddescuento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddescuento['max'])) {
                $this->addUsingAlias(VentadetallePeer::IDDESCUENTO, $iddescuento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::IDDESCUENTO, $iddescuento, $comparison);
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
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByIdpromocion($idpromocion = null, $comparison = null)
    {
        if (is_array($idpromocion)) {
            $useMinMax = false;
            if (isset($idpromocion['min'])) {
                $this->addUsingAlias(VentadetallePeer::IDPROMOCION, $idpromocion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpromocion['max'])) {
                $this->addUsingAlias(VentadetallePeer::IDPROMOCION, $idpromocion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::IDPROMOCION, $idpromocion, $comparison);
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
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByIdproductovariante($idproductovariante = null, $comparison = null)
    {
        if (is_array($idproductovariante)) {
            $useMinMax = false;
            if (isset($idproductovariante['min'])) {
                $this->addUsingAlias(VentadetallePeer::IDPRODUCTOVARIANTE, $idproductovariante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductovariante['max'])) {
                $this->addUsingAlias(VentadetallePeer::IDPRODUCTOVARIANTE, $idproductovariante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::IDPRODUCTOVARIANTE, $idproductovariante, $comparison);
    }

    /**
     * Filter the query on the ventadetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByVentadetalleCantidad(1234); // WHERE ventadetalle_cantidad = 1234
     * $query->filterByVentadetalleCantidad(array(12, 34)); // WHERE ventadetalle_cantidad IN (12, 34)
     * $query->filterByVentadetalleCantidad(array('min' => 12)); // WHERE ventadetalle_cantidad >= 12
     * $query->filterByVentadetalleCantidad(array('max' => 12)); // WHERE ventadetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $ventadetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByVentadetalleCantidad($ventadetalleCantidad = null, $comparison = null)
    {
        if (is_array($ventadetalleCantidad)) {
            $useMinMax = false;
            if (isset($ventadetalleCantidad['min'])) {
                $this->addUsingAlias(VentadetallePeer::VENTADETALLE_CANTIDAD, $ventadetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventadetalleCantidad['max'])) {
                $this->addUsingAlias(VentadetallePeer::VENTADETALLE_CANTIDAD, $ventadetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::VENTADETALLE_CANTIDAD, $ventadetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the ventadetalle_subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterByVentadetalleSubtotal(1234); // WHERE ventadetalle_subtotal = 1234
     * $query->filterByVentadetalleSubtotal(array(12, 34)); // WHERE ventadetalle_subtotal IN (12, 34)
     * $query->filterByVentadetalleSubtotal(array('min' => 12)); // WHERE ventadetalle_subtotal >= 12
     * $query->filterByVentadetalleSubtotal(array('max' => 12)); // WHERE ventadetalle_subtotal <= 12
     * </code>
     *
     * @param     mixed $ventadetalleSubtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByVentadetalleSubtotal($ventadetalleSubtotal = null, $comparison = null)
    {
        if (is_array($ventadetalleSubtotal)) {
            $useMinMax = false;
            if (isset($ventadetalleSubtotal['min'])) {
                $this->addUsingAlias(VentadetallePeer::VENTADETALLE_SUBTOTAL, $ventadetalleSubtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventadetalleSubtotal['max'])) {
                $this->addUsingAlias(VentadetallePeer::VENTADETALLE_SUBTOTAL, $ventadetalleSubtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::VENTADETALLE_SUBTOTAL, $ventadetalleSubtotal, $comparison);
    }

    /**
     * Filter the query on the ventadetalle_preciounitario column
     *
     * Example usage:
     * <code>
     * $query->filterByVentadetallePreciounitario(1234); // WHERE ventadetalle_preciounitario = 1234
     * $query->filterByVentadetallePreciounitario(array(12, 34)); // WHERE ventadetalle_preciounitario IN (12, 34)
     * $query->filterByVentadetallePreciounitario(array('min' => 12)); // WHERE ventadetalle_preciounitario >= 12
     * $query->filterByVentadetallePreciounitario(array('max' => 12)); // WHERE ventadetalle_preciounitario <= 12
     * </code>
     *
     * @param     mixed $ventadetallePreciounitario The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByVentadetallePreciounitario($ventadetallePreciounitario = null, $comparison = null)
    {
        if (is_array($ventadetallePreciounitario)) {
            $useMinMax = false;
            if (isset($ventadetallePreciounitario['min'])) {
                $this->addUsingAlias(VentadetallePeer::VENTADETALLE_PRECIOUNITARIO, $ventadetallePreciounitario['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventadetallePreciounitario['max'])) {
                $this->addUsingAlias(VentadetallePeer::VENTADETALLE_PRECIOUNITARIO, $ventadetallePreciounitario['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::VENTADETALLE_PRECIOUNITARIO, $ventadetallePreciounitario, $comparison);
    }

    /**
     * Filter the query on the ventadetalle_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByVentadetalleEstatus('fooValue');   // WHERE ventadetalle_estatus = 'fooValue'
     * $query->filterByVentadetalleEstatus('%fooValue%'); // WHERE ventadetalle_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ventadetalleEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByVentadetalleEstatus($ventadetalleEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ventadetalleEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ventadetalleEstatus)) {
                $ventadetalleEstatus = str_replace('*', '%', $ventadetalleEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::VENTADETALLE_ESTATUS, $ventadetalleEstatus, $comparison);
    }

    /**
     * Filter the query on the ventadetalle_descuento column
     *
     * Example usage:
     * <code>
     * $query->filterByVentadetalleDescuento(1234); // WHERE ventadetalle_descuento = 1234
     * $query->filterByVentadetalleDescuento(array(12, 34)); // WHERE ventadetalle_descuento IN (12, 34)
     * $query->filterByVentadetalleDescuento(array('min' => 12)); // WHERE ventadetalle_descuento >= 12
     * $query->filterByVentadetalleDescuento(array('max' => 12)); // WHERE ventadetalle_descuento <= 12
     * </code>
     *
     * @param     mixed $ventadetalleDescuento The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByVentadetalleDescuento($ventadetalleDescuento = null, $comparison = null)
    {
        if (is_array($ventadetalleDescuento)) {
            $useMinMax = false;
            if (isset($ventadetalleDescuento['min'])) {
                $this->addUsingAlias(VentadetallePeer::VENTADETALLE_DESCUENTO, $ventadetalleDescuento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventadetalleDescuento['max'])) {
                $this->addUsingAlias(VentadetallePeer::VENTADETALLE_DESCUENTO, $ventadetalleDescuento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::VENTADETALLE_DESCUENTO, $ventadetalleDescuento, $comparison);
    }

    /**
     * Filter the query on the idventadetallapadre column
     *
     * Example usage:
     * <code>
     * $query->filterByIdventadetallapadre(1234); // WHERE idventadetallapadre = 1234
     * $query->filterByIdventadetallapadre(array(12, 34)); // WHERE idventadetallapadre IN (12, 34)
     * $query->filterByIdventadetallapadre(array('min' => 12)); // WHERE idventadetallapadre >= 12
     * $query->filterByIdventadetallapadre(array('max' => 12)); // WHERE idventadetallapadre <= 12
     * </code>
     *
     * @see       filterByVentadetalleRelatedByIdventadetallapadre()
     *
     * @param     mixed $idventadetallapadre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function filterByIdventadetallapadre($idventadetallapadre = null, $comparison = null)
    {
        if (is_array($idventadetallapadre)) {
            $useMinMax = false;
            if (isset($idventadetallapadre['min'])) {
                $this->addUsingAlias(VentadetallePeer::IDVENTADETALLAPADRE, $idventadetallapadre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventadetallapadre['max'])) {
                $this->addUsingAlias(VentadetallePeer::IDVENTADETALLAPADRE, $idventadetallapadre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentadetallePeer::IDVENTADETALLAPADRE, $idventadetallapadre, $comparison);
    }

    /**
     * Filter the query by a related Descuento object
     *
     * @param   Descuento|PropelObjectCollection $descuento The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDescuento($descuento, $comparison = null)
    {
        if ($descuento instanceof Descuento) {
            return $this
                ->addUsingAlias(VentadetallePeer::IDDESCUENTO, $descuento->getIddescuento(), $comparison);
        } elseif ($descuento instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VentadetallePeer::IDDESCUENTO, $descuento->toKeyValue('PrimaryKey', 'Iddescuento'), $comparison);
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
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function joinDescuento($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function useDescuentoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinDescuento($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Descuento', 'DescuentoQuery');
    }

    /**
     * Filter the query by a related Productovariante object
     *
     * @param   Productovariante|PropelObjectCollection $productovariante The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductovariante($productovariante, $comparison = null)
    {
        if ($productovariante instanceof Productovariante) {
            return $this
                ->addUsingAlias(VentadetallePeer::IDPRODUCTOVARIANTE, $productovariante->getIdproductovariante(), $comparison);
        } elseif ($productovariante instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VentadetallePeer::IDPRODUCTOVARIANTE, $productovariante->toKeyValue('PrimaryKey', 'Idproductovariante'), $comparison);
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
     * @return VentadetalleQuery The current query, for fluid interface
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
     * Filter the query by a related Promocion object
     *
     * @param   Promocion|PropelObjectCollection $promocion The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPromocion($promocion, $comparison = null)
    {
        if ($promocion instanceof Promocion) {
            return $this
                ->addUsingAlias(VentadetallePeer::IDPROMOCION, $promocion->getIdpromocion(), $comparison);
        } elseif ($promocion instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VentadetallePeer::IDPROMOCION, $promocion->toKeyValue('PrimaryKey', 'Idpromocion'), $comparison);
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
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function joinPromocion($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
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
    public function usePromocionQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPromocion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Promocion', 'PromocionQuery');
    }

    /**
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVenta($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(VentadetallePeer::IDVENTA, $venta->getIdventa(), $comparison);
        } elseif ($venta instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VentadetallePeer::IDVENTA, $venta->toKeyValue('PrimaryKey', 'Idventa'), $comparison);
        } else {
            throw new PropelException('filterByVenta() only accepts arguments of type Venta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Venta relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function joinVenta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Venta');

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
            $this->addJoinObject($join, 'Venta');
        }

        return $this;
    }

    /**
     * Use the Venta relation Venta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentaQuery A secondary query class using the current class as primary query
     */
    public function useVentaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVenta($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Venta', 'VentaQuery');
    }

    /**
     * Filter the query by a related Ventadetalle object
     *
     * @param   Ventadetalle|PropelObjectCollection $ventadetalle The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVentadetalleRelatedByIdventadetallapadre($ventadetalle, $comparison = null)
    {
        if ($ventadetalle instanceof Ventadetalle) {
            return $this
                ->addUsingAlias(VentadetallePeer::IDVENTADETALLAPADRE, $ventadetalle->getIdventadetalle(), $comparison);
        } elseif ($ventadetalle instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VentadetallePeer::IDVENTADETALLAPADRE, $ventadetalle->toKeyValue('PrimaryKey', 'Idventadetalle'), $comparison);
        } else {
            throw new PropelException('filterByVentadetalleRelatedByIdventadetallapadre() only accepts arguments of type Ventadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the VentadetalleRelatedByIdventadetallapadre relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function joinVentadetalleRelatedByIdventadetallapadre($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('VentadetalleRelatedByIdventadetallapadre');

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
            $this->addJoinObject($join, 'VentadetalleRelatedByIdventadetallapadre');
        }

        return $this;
    }

    /**
     * Use the VentadetalleRelatedByIdventadetallapadre relation Ventadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentadetalleQuery A secondary query class using the current class as primary query
     */
    public function useVentadetalleRelatedByIdventadetallapadreQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinVentadetalleRelatedByIdventadetallapadre($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'VentadetalleRelatedByIdventadetallapadre', 'VentadetalleQuery');
    }

    /**
     * Filter the query by a related Ventadetalle object
     *
     * @param   Ventadetalle|PropelObjectCollection $ventadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVentadetalleRelatedByIdventadetalle($ventadetalle, $comparison = null)
    {
        if ($ventadetalle instanceof Ventadetalle) {
            return $this
                ->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $ventadetalle->getIdventadetallapadre(), $comparison);
        } elseif ($ventadetalle instanceof PropelObjectCollection) {
            return $this
                ->useVentadetalleRelatedByIdventadetalleQuery()
                ->filterByPrimaryKeys($ventadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVentadetalleRelatedByIdventadetalle() only accepts arguments of type Ventadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the VentadetalleRelatedByIdventadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function joinVentadetalleRelatedByIdventadetalle($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('VentadetalleRelatedByIdventadetalle');

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
            $this->addJoinObject($join, 'VentadetalleRelatedByIdventadetalle');
        }

        return $this;
    }

    /**
     * Use the VentadetalleRelatedByIdventadetalle relation Ventadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentadetalleQuery A secondary query class using the current class as primary query
     */
    public function useVentadetalleRelatedByIdventadetalleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinVentadetalleRelatedByIdventadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'VentadetalleRelatedByIdventadetalle', 'VentadetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Ventadetalle $ventadetalle Object to remove from the list of results
     *
     * @return VentadetalleQuery The current query, for fluid interface
     */
    public function prune($ventadetalle = null)
    {
        if ($ventadetalle) {
            $this->addUsingAlias(VentadetallePeer::IDVENTADETALLE, $ventadetalle->getIdventadetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
