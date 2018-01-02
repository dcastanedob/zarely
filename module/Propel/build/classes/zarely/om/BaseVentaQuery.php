<?php


/**
 * Base class that represents a query for the 'venta' table.
 *
 *
 *
 * @method VentaQuery orderByIdventa($order = Criteria::ASC) Order by the idventa column
 * @method VentaQuery orderByIdempleadocajero($order = Criteria::ASC) Order by the idempleadocajero column
 * @method VentaQuery orderByIdempleadovendedor($order = Criteria::ASC) Order by the idempleadovendedor column
 * @method VentaQuery orderByIdcliente($order = Criteria::ASC) Order by the idcliente column
 * @method VentaQuery orderByVentaTotal($order = Criteria::ASC) Order by the venta_total column
 * @method VentaQuery orderByVentaFecha($order = Criteria::ASC) Order by the venta_fecha column
 * @method VentaQuery orderByVentaComprobante($order = Criteria::ASC) Order by the venta_comprobante column
 * @method VentaQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method VentaQuery orderByVentaEstatuspago($order = Criteria::ASC) Order by the venta_estatuspago column
 * @method VentaQuery orderByVentaTipo($order = Criteria::ASC) Order by the venta_tipo column
 * @method VentaQuery orderByVentaSubtotal($order = Criteria::ASC) Order by the venta_subtotal column
 * @method VentaQuery orderByVentaIva($order = Criteria::ASC) Order by the venta_iva column
 * @method VentaQuery orderByVentaEstatus($order = Criteria::ASC) Order by the venta_estatus column
 * @method VentaQuery orderByVentaFacturacion($order = Criteria::ASC) Order by the venta_facturacion column
 *
 * @method VentaQuery groupByIdventa() Group by the idventa column
 * @method VentaQuery groupByIdempleadocajero() Group by the idempleadocajero column
 * @method VentaQuery groupByIdempleadovendedor() Group by the idempleadovendedor column
 * @method VentaQuery groupByIdcliente() Group by the idcliente column
 * @method VentaQuery groupByVentaTotal() Group by the venta_total column
 * @method VentaQuery groupByVentaFecha() Group by the venta_fecha column
 * @method VentaQuery groupByVentaComprobante() Group by the venta_comprobante column
 * @method VentaQuery groupByIdsucursal() Group by the idsucursal column
 * @method VentaQuery groupByVentaEstatuspago() Group by the venta_estatuspago column
 * @method VentaQuery groupByVentaTipo() Group by the venta_tipo column
 * @method VentaQuery groupByVentaSubtotal() Group by the venta_subtotal column
 * @method VentaQuery groupByVentaIva() Group by the venta_iva column
 * @method VentaQuery groupByVentaEstatus() Group by the venta_estatus column
 * @method VentaQuery groupByVentaFacturacion() Group by the venta_facturacion column
 *
 * @method VentaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method VentaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method VentaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method VentaQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method VentaQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method VentaQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method VentaQuery leftJoinEmpleadoRelatedByIdempleadocajero($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdempleadocajero relation
 * @method VentaQuery rightJoinEmpleadoRelatedByIdempleadocajero($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdempleadocajero relation
 * @method VentaQuery innerJoinEmpleadoRelatedByIdempleadocajero($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdempleadocajero relation
 *
 * @method VentaQuery leftJoinEmpleadoRelatedByIdempleadovendedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdempleadovendedor relation
 * @method VentaQuery rightJoinEmpleadoRelatedByIdempleadovendedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdempleadovendedor relation
 * @method VentaQuery innerJoinEmpleadoRelatedByIdempleadovendedor($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdempleadovendedor relation
 *
 * @method VentaQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method VentaQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method VentaQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method VentaQuery leftJoinVentadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ventadetalle relation
 * @method VentaQuery rightJoinVentadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ventadetalle relation
 * @method VentaQuery innerJoinVentadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Ventadetalle relation
 *
 * @method VentaQuery leftJoinVentapago($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ventapago relation
 * @method VentaQuery rightJoinVentapago($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ventapago relation
 * @method VentaQuery innerJoinVentapago($relationAlias = null) Adds a INNER JOIN clause to the query using the Ventapago relation
 *
 * @method Venta findOne(PropelPDO $con = null) Return the first Venta matching the query
 * @method Venta findOneOrCreate(PropelPDO $con = null) Return the first Venta matching the query, or a new Venta object populated from the query conditions when no match is found
 *
 * @method Venta findOneByIdempleadocajero(int $idempleadocajero) Return the first Venta filtered by the idempleadocajero column
 * @method Venta findOneByIdempleadovendedor(int $idempleadovendedor) Return the first Venta filtered by the idempleadovendedor column
 * @method Venta findOneByIdcliente(int $idcliente) Return the first Venta filtered by the idcliente column
 * @method Venta findOneByVentaTotal(string $venta_total) Return the first Venta filtered by the venta_total column
 * @method Venta findOneByVentaFecha(string $venta_fecha) Return the first Venta filtered by the venta_fecha column
 * @method Venta findOneByVentaComprobante(string $venta_comprobante) Return the first Venta filtered by the venta_comprobante column
 * @method Venta findOneByIdsucursal(int $idsucursal) Return the first Venta filtered by the idsucursal column
 * @method Venta findOneByVentaEstatuspago(boolean $venta_estatuspago) Return the first Venta filtered by the venta_estatuspago column
 * @method Venta findOneByVentaTipo(string $venta_tipo) Return the first Venta filtered by the venta_tipo column
 * @method Venta findOneByVentaSubtotal(string $venta_subtotal) Return the first Venta filtered by the venta_subtotal column
 * @method Venta findOneByVentaIva(string $venta_iva) Return the first Venta filtered by the venta_iva column
 * @method Venta findOneByVentaEstatus(string $venta_estatus) Return the first Venta filtered by the venta_estatus column
 * @method Venta findOneByVentaFacturacion(boolean $venta_facturacion) Return the first Venta filtered by the venta_facturacion column
 *
 * @method array findByIdventa(int $idventa) Return Venta objects filtered by the idventa column
 * @method array findByIdempleadocajero(int $idempleadocajero) Return Venta objects filtered by the idempleadocajero column
 * @method array findByIdempleadovendedor(int $idempleadovendedor) Return Venta objects filtered by the idempleadovendedor column
 * @method array findByIdcliente(int $idcliente) Return Venta objects filtered by the idcliente column
 * @method array findByVentaTotal(string $venta_total) Return Venta objects filtered by the venta_total column
 * @method array findByVentaFecha(string $venta_fecha) Return Venta objects filtered by the venta_fecha column
 * @method array findByVentaComprobante(string $venta_comprobante) Return Venta objects filtered by the venta_comprobante column
 * @method array findByIdsucursal(int $idsucursal) Return Venta objects filtered by the idsucursal column
 * @method array findByVentaEstatuspago(boolean $venta_estatuspago) Return Venta objects filtered by the venta_estatuspago column
 * @method array findByVentaTipo(string $venta_tipo) Return Venta objects filtered by the venta_tipo column
 * @method array findByVentaSubtotal(string $venta_subtotal) Return Venta objects filtered by the venta_subtotal column
 * @method array findByVentaIva(string $venta_iva) Return Venta objects filtered by the venta_iva column
 * @method array findByVentaEstatus(string $venta_estatus) Return Venta objects filtered by the venta_estatus column
 * @method array findByVentaFacturacion(boolean $venta_facturacion) Return Venta objects filtered by the venta_facturacion column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseVentaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseVentaQuery object.
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
            $modelName = 'Venta';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new VentaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   VentaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return VentaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof VentaQuery) {
            return $criteria;
        }
        $query = new VentaQuery(null, null, $modelAlias);

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
     * @return   Venta|Venta[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = VentaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(VentaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Venta A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdventa($key, $con = null)
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
     * @return                 Venta A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idventa`, `idempleadocajero`, `idempleadovendedor`, `idcliente`, `venta_total`, `venta_fecha`, `venta_comprobante`, `idsucursal`, `venta_estatuspago`, `venta_tipo`, `venta_subtotal`, `venta_iva`, `venta_estatus`, `venta_facturacion` FROM `venta` WHERE `idventa` = :p0';
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
            $obj = new Venta();
            $obj->hydrate($row);
            VentaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Venta|Venta[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Venta[]|mixed the list of results, formatted by the current formatter
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
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(VentaPeer::IDVENTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(VentaPeer::IDVENTA, $keys, Criteria::IN);
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
     * @param     mixed $idventa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByIdventa($idventa = null, $comparison = null)
    {
        if (is_array($idventa)) {
            $useMinMax = false;
            if (isset($idventa['min'])) {
                $this->addUsingAlias(VentaPeer::IDVENTA, $idventa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idventa['max'])) {
                $this->addUsingAlias(VentaPeer::IDVENTA, $idventa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentaPeer::IDVENTA, $idventa, $comparison);
    }

    /**
     * Filter the query on the idempleadocajero column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadocajero(1234); // WHERE idempleadocajero = 1234
     * $query->filterByIdempleadocajero(array(12, 34)); // WHERE idempleadocajero IN (12, 34)
     * $query->filterByIdempleadocajero(array('min' => 12)); // WHERE idempleadocajero >= 12
     * $query->filterByIdempleadocajero(array('max' => 12)); // WHERE idempleadocajero <= 12
     * </code>
     *
     * @see       filterByEmpleadoRelatedByIdempleadocajero()
     *
     * @param     mixed $idempleadocajero The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByIdempleadocajero($idempleadocajero = null, $comparison = null)
    {
        if (is_array($idempleadocajero)) {
            $useMinMax = false;
            if (isset($idempleadocajero['min'])) {
                $this->addUsingAlias(VentaPeer::IDEMPLEADOCAJERO, $idempleadocajero['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadocajero['max'])) {
                $this->addUsingAlias(VentaPeer::IDEMPLEADOCAJERO, $idempleadocajero['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentaPeer::IDEMPLEADOCAJERO, $idempleadocajero, $comparison);
    }

    /**
     * Filter the query on the idempleadovendedor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadovendedor(1234); // WHERE idempleadovendedor = 1234
     * $query->filterByIdempleadovendedor(array(12, 34)); // WHERE idempleadovendedor IN (12, 34)
     * $query->filterByIdempleadovendedor(array('min' => 12)); // WHERE idempleadovendedor >= 12
     * $query->filterByIdempleadovendedor(array('max' => 12)); // WHERE idempleadovendedor <= 12
     * </code>
     *
     * @see       filterByEmpleadoRelatedByIdempleadovendedor()
     *
     * @param     mixed $idempleadovendedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByIdempleadovendedor($idempleadovendedor = null, $comparison = null)
    {
        if (is_array($idempleadovendedor)) {
            $useMinMax = false;
            if (isset($idempleadovendedor['min'])) {
                $this->addUsingAlias(VentaPeer::IDEMPLEADOVENDEDOR, $idempleadovendedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadovendedor['max'])) {
                $this->addUsingAlias(VentaPeer::IDEMPLEADOVENDEDOR, $idempleadovendedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentaPeer::IDEMPLEADOVENDEDOR, $idempleadovendedor, $comparison);
    }

    /**
     * Filter the query on the idcliente column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcliente(1234); // WHERE idcliente = 1234
     * $query->filterByIdcliente(array(12, 34)); // WHERE idcliente IN (12, 34)
     * $query->filterByIdcliente(array('min' => 12)); // WHERE idcliente >= 12
     * $query->filterByIdcliente(array('max' => 12)); // WHERE idcliente <= 12
     * </code>
     *
     * @see       filterByCliente()
     *
     * @param     mixed $idcliente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByIdcliente($idcliente = null, $comparison = null)
    {
        if (is_array($idcliente)) {
            $useMinMax = false;
            if (isset($idcliente['min'])) {
                $this->addUsingAlias(VentaPeer::IDCLIENTE, $idcliente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcliente['max'])) {
                $this->addUsingAlias(VentaPeer::IDCLIENTE, $idcliente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentaPeer::IDCLIENTE, $idcliente, $comparison);
    }

    /**
     * Filter the query on the venta_total column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaTotal(1234); // WHERE venta_total = 1234
     * $query->filterByVentaTotal(array(12, 34)); // WHERE venta_total IN (12, 34)
     * $query->filterByVentaTotal(array('min' => 12)); // WHERE venta_total >= 12
     * $query->filterByVentaTotal(array('max' => 12)); // WHERE venta_total <= 12
     * </code>
     *
     * @param     mixed $ventaTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaTotal($ventaTotal = null, $comparison = null)
    {
        if (is_array($ventaTotal)) {
            $useMinMax = false;
            if (isset($ventaTotal['min'])) {
                $this->addUsingAlias(VentaPeer::VENTA_TOTAL, $ventaTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventaTotal['max'])) {
                $this->addUsingAlias(VentaPeer::VENTA_TOTAL, $ventaTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentaPeer::VENTA_TOTAL, $ventaTotal, $comparison);
    }

    /**
     * Filter the query on the venta_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaFecha('2011-03-14'); // WHERE venta_fecha = '2011-03-14'
     * $query->filterByVentaFecha('now'); // WHERE venta_fecha = '2011-03-14'
     * $query->filterByVentaFecha(array('max' => 'yesterday')); // WHERE venta_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $ventaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaFecha($ventaFecha = null, $comparison = null)
    {
        if (is_array($ventaFecha)) {
            $useMinMax = false;
            if (isset($ventaFecha['min'])) {
                $this->addUsingAlias(VentaPeer::VENTA_FECHA, $ventaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventaFecha['max'])) {
                $this->addUsingAlias(VentaPeer::VENTA_FECHA, $ventaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentaPeer::VENTA_FECHA, $ventaFecha, $comparison);
    }

    /**
     * Filter the query on the venta_comprobante column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaComprobante('fooValue');   // WHERE venta_comprobante = 'fooValue'
     * $query->filterByVentaComprobante('%fooValue%'); // WHERE venta_comprobante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ventaComprobante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaComprobante($ventaComprobante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ventaComprobante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ventaComprobante)) {
                $ventaComprobante = str_replace('*', '%', $ventaComprobante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VentaPeer::VENTA_COMPROBANTE, $ventaComprobante, $comparison);
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
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(VentaPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(VentaPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentaPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the venta_estatuspago column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaEstatuspago(true); // WHERE venta_estatuspago = true
     * $query->filterByVentaEstatuspago('yes'); // WHERE venta_estatuspago = true
     * </code>
     *
     * @param     boolean|string $ventaEstatuspago The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaEstatuspago($ventaEstatuspago = null, $comparison = null)
    {
        if (is_string($ventaEstatuspago)) {
            $ventaEstatuspago = in_array(strtolower($ventaEstatuspago), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VentaPeer::VENTA_ESTATUSPAGO, $ventaEstatuspago, $comparison);
    }

    /**
     * Filter the query on the venta_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaTipo('fooValue');   // WHERE venta_tipo = 'fooValue'
     * $query->filterByVentaTipo('%fooValue%'); // WHERE venta_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ventaTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaTipo($ventaTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ventaTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ventaTipo)) {
                $ventaTipo = str_replace('*', '%', $ventaTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VentaPeer::VENTA_TIPO, $ventaTipo, $comparison);
    }

    /**
     * Filter the query on the venta_subtotal column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaSubtotal(1234); // WHERE venta_subtotal = 1234
     * $query->filterByVentaSubtotal(array(12, 34)); // WHERE venta_subtotal IN (12, 34)
     * $query->filterByVentaSubtotal(array('min' => 12)); // WHERE venta_subtotal >= 12
     * $query->filterByVentaSubtotal(array('max' => 12)); // WHERE venta_subtotal <= 12
     * </code>
     *
     * @param     mixed $ventaSubtotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaSubtotal($ventaSubtotal = null, $comparison = null)
    {
        if (is_array($ventaSubtotal)) {
            $useMinMax = false;
            if (isset($ventaSubtotal['min'])) {
                $this->addUsingAlias(VentaPeer::VENTA_SUBTOTAL, $ventaSubtotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventaSubtotal['max'])) {
                $this->addUsingAlias(VentaPeer::VENTA_SUBTOTAL, $ventaSubtotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentaPeer::VENTA_SUBTOTAL, $ventaSubtotal, $comparison);
    }

    /**
     * Filter the query on the venta_iva column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaIva(1234); // WHERE venta_iva = 1234
     * $query->filterByVentaIva(array(12, 34)); // WHERE venta_iva IN (12, 34)
     * $query->filterByVentaIva(array('min' => 12)); // WHERE venta_iva >= 12
     * $query->filterByVentaIva(array('max' => 12)); // WHERE venta_iva <= 12
     * </code>
     *
     * @param     mixed $ventaIva The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaIva($ventaIva = null, $comparison = null)
    {
        if (is_array($ventaIva)) {
            $useMinMax = false;
            if (isset($ventaIva['min'])) {
                $this->addUsingAlias(VentaPeer::VENTA_IVA, $ventaIva['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ventaIva['max'])) {
                $this->addUsingAlias(VentaPeer::VENTA_IVA, $ventaIva['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(VentaPeer::VENTA_IVA, $ventaIva, $comparison);
    }

    /**
     * Filter the query on the venta_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaEstatus('fooValue');   // WHERE venta_estatus = 'fooValue'
     * $query->filterByVentaEstatus('%fooValue%'); // WHERE venta_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ventaEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaEstatus($ventaEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ventaEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ventaEstatus)) {
                $ventaEstatus = str_replace('*', '%', $ventaEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(VentaPeer::VENTA_ESTATUS, $ventaEstatus, $comparison);
    }

    /**
     * Filter the query on the venta_facturacion column
     *
     * Example usage:
     * <code>
     * $query->filterByVentaFacturacion(true); // WHERE venta_facturacion = true
     * $query->filterByVentaFacturacion('yes'); // WHERE venta_facturacion = true
     * </code>
     *
     * @param     boolean|string $ventaFacturacion The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function filterByVentaFacturacion($ventaFacturacion = null, $comparison = null)
    {
        if (is_string($ventaFacturacion)) {
            $ventaFacturacion = in_array(strtolower($ventaFacturacion), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(VentaPeer::VENTA_FACTURACION, $ventaFacturacion, $comparison);
    }

    /**
     * Filter the query by a related Cliente object
     *
     * @param   Cliente|PropelObjectCollection $cliente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCliente($cliente, $comparison = null)
    {
        if ($cliente instanceof Cliente) {
            return $this
                ->addUsingAlias(VentaPeer::IDCLIENTE, $cliente->getIdcliente(), $comparison);
        } elseif ($cliente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VentaPeer::IDCLIENTE, $cliente->toKeyValue('PrimaryKey', 'Idcliente'), $comparison);
        } else {
            throw new PropelException('filterByCliente() only accepts arguments of type Cliente or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cliente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function joinCliente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cliente');

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
            $this->addJoinObject($join, 'Cliente');
        }

        return $this;
    }

    /**
     * Use the Cliente relation Cliente object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClienteQuery A secondary query class using the current class as primary query
     */
    public function useClienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCliente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cliente', 'ClienteQuery');
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoRelatedByIdempleadocajero($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(VentaPeer::IDEMPLEADOCAJERO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VentaPeer::IDEMPLEADOCAJERO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleadoRelatedByIdempleadocajero() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpleadoRelatedByIdempleadocajero relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function joinEmpleadoRelatedByIdempleadocajero($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpleadoRelatedByIdempleadocajero');

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
            $this->addJoinObject($join, 'EmpleadoRelatedByIdempleadocajero');
        }

        return $this;
    }

    /**
     * Use the EmpleadoRelatedByIdempleadocajero relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoRelatedByIdempleadocajeroQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoRelatedByIdempleadocajero($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpleadoRelatedByIdempleadocajero', 'EmpleadoQuery');
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoRelatedByIdempleadovendedor($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(VentaPeer::IDEMPLEADOVENDEDOR, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VentaPeer::IDEMPLEADOVENDEDOR, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleadoRelatedByIdempleadovendedor() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpleadoRelatedByIdempleadovendedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function joinEmpleadoRelatedByIdempleadovendedor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpleadoRelatedByIdempleadovendedor');

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
            $this->addJoinObject($join, 'EmpleadoRelatedByIdempleadovendedor');
        }

        return $this;
    }

    /**
     * Use the EmpleadoRelatedByIdempleadovendedor relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoRelatedByIdempleadovendedorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoRelatedByIdempleadovendedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpleadoRelatedByIdempleadovendedor', 'EmpleadoQuery');
    }

    /**
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(VentaPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(VentaPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return VentaQuery The current query, for fluid interface
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
     * Filter the query by a related Ventadetalle object
     *
     * @param   Ventadetalle|PropelObjectCollection $ventadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVentadetalle($ventadetalle, $comparison = null)
    {
        if ($ventadetalle instanceof Ventadetalle) {
            return $this
                ->addUsingAlias(VentaPeer::IDVENTA, $ventadetalle->getIdventa(), $comparison);
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
     * @return VentaQuery The current query, for fluid interface
     */
    public function joinVentadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useVentadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVentadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ventadetalle', 'VentadetalleQuery');
    }

    /**
     * Filter the query by a related Ventapago object
     *
     * @param   Ventapago|PropelObjectCollection $ventapago  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 VentaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVentapago($ventapago, $comparison = null)
    {
        if ($ventapago instanceof Ventapago) {
            return $this
                ->addUsingAlias(VentaPeer::IDVENTA, $ventapago->getIdventa(), $comparison);
        } elseif ($ventapago instanceof PropelObjectCollection) {
            return $this
                ->useVentapagoQuery()
                ->filterByPrimaryKeys($ventapago->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVentapago() only accepts arguments of type Ventapago or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ventapago relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function joinVentapago($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ventapago');

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
            $this->addJoinObject($join, 'Ventapago');
        }

        return $this;
    }

    /**
     * Use the Ventapago relation Ventapago object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentapagoQuery A secondary query class using the current class as primary query
     */
    public function useVentapagoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVentapago($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ventapago', 'VentapagoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Venta $venta Object to remove from the list of results
     *
     * @return VentaQuery The current query, for fluid interface
     */
    public function prune($venta = null)
    {
        if ($venta) {
            $this->addUsingAlias(VentaPeer::IDVENTA, $venta->getIdventa(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
