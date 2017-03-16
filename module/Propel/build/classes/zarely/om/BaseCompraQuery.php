<?php


/**
 * Base class that represents a query for the 'compra' table.
 *
 *
 *
 * @method CompraQuery orderByIdcompra($order = Criteria::ASC) Order by the idcompra column
 * @method CompraQuery orderByIdproveedor($order = Criteria::ASC) Order by the idproveedor column
 * @method CompraQuery orderByCompraFechacreacion($order = Criteria::ASC) Order by the compra_fechacreacion column
 * @method CompraQuery orderByCompraFechacompra($order = Criteria::ASC) Order by the compra_fechacompra column
 * @method CompraQuery orderByCompraTotal($order = Criteria::ASC) Order by the compra_total column
 * @method CompraQuery orderByCompraEstatuspago($order = Criteria::ASC) Order by the compra_estatuspago column
 * @method CompraQuery orderByCompraEstatus($order = Criteria::ASC) Order by the compra_estatus column
 * @method CompraQuery orderByCompraNota($order = Criteria::ASC) Order by the compra_nota column
 * @method CompraQuery orderByCompraComprobante($order = Criteria::ASC) Order by the compra_comprobante column
 * @method CompraQuery orderByCompraFechaentrega($order = Criteria::ASC) Order by the compra_fechaentrega column
 *
 * @method CompraQuery groupByIdcompra() Group by the idcompra column
 * @method CompraQuery groupByIdproveedor() Group by the idproveedor column
 * @method CompraQuery groupByCompraFechacreacion() Group by the compra_fechacreacion column
 * @method CompraQuery groupByCompraFechacompra() Group by the compra_fechacompra column
 * @method CompraQuery groupByCompraTotal() Group by the compra_total column
 * @method CompraQuery groupByCompraEstatuspago() Group by the compra_estatuspago column
 * @method CompraQuery groupByCompraEstatus() Group by the compra_estatus column
 * @method CompraQuery groupByCompraNota() Group by the compra_nota column
 * @method CompraQuery groupByCompraComprobante() Group by the compra_comprobante column
 * @method CompraQuery groupByCompraFechaentrega() Group by the compra_fechaentrega column
 *
 * @method CompraQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CompraQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CompraQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CompraQuery leftJoinProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedor relation
 * @method CompraQuery rightJoinProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedor relation
 * @method CompraQuery innerJoinProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedor relation
 *
 * @method CompraQuery leftJoinCompradetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compradetalle relation
 * @method CompraQuery rightJoinCompradetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compradetalle relation
 * @method CompraQuery innerJoinCompradetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Compradetalle relation
 *
 * @method Compra findOne(PropelPDO $con = null) Return the first Compra matching the query
 * @method Compra findOneOrCreate(PropelPDO $con = null) Return the first Compra matching the query, or a new Compra object populated from the query conditions when no match is found
 *
 * @method Compra findOneByIdproveedor(int $idproveedor) Return the first Compra filtered by the idproveedor column
 * @method Compra findOneByCompraFechacreacion(string $compra_fechacreacion) Return the first Compra filtered by the compra_fechacreacion column
 * @method Compra findOneByCompraFechacompra(string $compra_fechacompra) Return the first Compra filtered by the compra_fechacompra column
 * @method Compra findOneByCompraTotal(string $compra_total) Return the first Compra filtered by the compra_total column
 * @method Compra findOneByCompraEstatuspago(boolean $compra_estatuspago) Return the first Compra filtered by the compra_estatuspago column
 * @method Compra findOneByCompraEstatus(string $compra_estatus) Return the first Compra filtered by the compra_estatus column
 * @method Compra findOneByCompraNota(string $compra_nota) Return the first Compra filtered by the compra_nota column
 * @method Compra findOneByCompraComprobante(string $compra_comprobante) Return the first Compra filtered by the compra_comprobante column
 * @method Compra findOneByCompraFechaentrega(string $compra_fechaentrega) Return the first Compra filtered by the compra_fechaentrega column
 *
 * @method array findByIdcompra(int $idcompra) Return Compra objects filtered by the idcompra column
 * @method array findByIdproveedor(int $idproveedor) Return Compra objects filtered by the idproveedor column
 * @method array findByCompraFechacreacion(string $compra_fechacreacion) Return Compra objects filtered by the compra_fechacreacion column
 * @method array findByCompraFechacompra(string $compra_fechacompra) Return Compra objects filtered by the compra_fechacompra column
 * @method array findByCompraTotal(string $compra_total) Return Compra objects filtered by the compra_total column
 * @method array findByCompraEstatuspago(boolean $compra_estatuspago) Return Compra objects filtered by the compra_estatuspago column
 * @method array findByCompraEstatus(string $compra_estatus) Return Compra objects filtered by the compra_estatus column
 * @method array findByCompraNota(string $compra_nota) Return Compra objects filtered by the compra_nota column
 * @method array findByCompraComprobante(string $compra_comprobante) Return Compra objects filtered by the compra_comprobante column
 * @method array findByCompraFechaentrega(string $compra_fechaentrega) Return Compra objects filtered by the compra_fechaentrega column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseCompraQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCompraQuery object.
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
            $modelName = 'Compra';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CompraQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CompraQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CompraQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CompraQuery) {
            return $criteria;
        }
        $query = new CompraQuery(null, null, $modelAlias);

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
     * @return   Compra|Compra[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CompraPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CompraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Compra A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcompra($key, $con = null)
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
     * @return                 Compra A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcompra`, `idproveedor`, `compra_fechacreacion`, `compra_fechacompra`, `compra_total`, `compra_estatuspago`, `compra_estatus`, `compra_nota`, `compra_comprobante`, `compra_fechaentrega` FROM `compra` WHERE `idcompra` = :p0';
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
            $obj = new Compra();
            $obj->hydrate($row);
            CompraPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Compra|Compra[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Compra[]|mixed the list of results, formatted by the current formatter
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
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CompraPeer::IDCOMPRA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CompraPeer::IDCOMPRA, $keys, Criteria::IN);
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
     * @param     mixed $idcompra The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByIdcompra($idcompra = null, $comparison = null)
    {
        if (is_array($idcompra)) {
            $useMinMax = false;
            if (isset($idcompra['min'])) {
                $this->addUsingAlias(CompraPeer::IDCOMPRA, $idcompra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcompra['max'])) {
                $this->addUsingAlias(CompraPeer::IDCOMPRA, $idcompra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::IDCOMPRA, $idcompra, $comparison);
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
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByIdproveedor($idproveedor = null, $comparison = null)
    {
        if (is_array($idproveedor)) {
            $useMinMax = false;
            if (isset($idproveedor['min'])) {
                $this->addUsingAlias(CompraPeer::IDPROVEEDOR, $idproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedor['max'])) {
                $this->addUsingAlias(CompraPeer::IDPROVEEDOR, $idproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::IDPROVEEDOR, $idproveedor, $comparison);
    }

    /**
     * Filter the query on the compra_fechacreacion column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraFechacreacion('2011-03-14'); // WHERE compra_fechacreacion = '2011-03-14'
     * $query->filterByCompraFechacreacion('now'); // WHERE compra_fechacreacion = '2011-03-14'
     * $query->filterByCompraFechacreacion(array('max' => 'yesterday')); // WHERE compra_fechacreacion < '2011-03-13'
     * </code>
     *
     * @param     mixed $compraFechacreacion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraFechacreacion($compraFechacreacion = null, $comparison = null)
    {
        if (is_array($compraFechacreacion)) {
            $useMinMax = false;
            if (isset($compraFechacreacion['min'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_FECHACREACION, $compraFechacreacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compraFechacreacion['max'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_FECHACREACION, $compraFechacreacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_FECHACREACION, $compraFechacreacion, $comparison);
    }

    /**
     * Filter the query on the compra_fechacompra column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraFechacompra('2011-03-14'); // WHERE compra_fechacompra = '2011-03-14'
     * $query->filterByCompraFechacompra('now'); // WHERE compra_fechacompra = '2011-03-14'
     * $query->filterByCompraFechacompra(array('max' => 'yesterday')); // WHERE compra_fechacompra < '2011-03-13'
     * </code>
     *
     * @param     mixed $compraFechacompra The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraFechacompra($compraFechacompra = null, $comparison = null)
    {
        if (is_array($compraFechacompra)) {
            $useMinMax = false;
            if (isset($compraFechacompra['min'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_FECHACOMPRA, $compraFechacompra['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compraFechacompra['max'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_FECHACOMPRA, $compraFechacompra['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_FECHACOMPRA, $compraFechacompra, $comparison);
    }

    /**
     * Filter the query on the compra_total column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraTotal(1234); // WHERE compra_total = 1234
     * $query->filterByCompraTotal(array(12, 34)); // WHERE compra_total IN (12, 34)
     * $query->filterByCompraTotal(array('min' => 12)); // WHERE compra_total >= 12
     * $query->filterByCompraTotal(array('max' => 12)); // WHERE compra_total <= 12
     * </code>
     *
     * @param     mixed $compraTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraTotal($compraTotal = null, $comparison = null)
    {
        if (is_array($compraTotal)) {
            $useMinMax = false;
            if (isset($compraTotal['min'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_TOTAL, $compraTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compraTotal['max'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_TOTAL, $compraTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_TOTAL, $compraTotal, $comparison);
    }

    /**
     * Filter the query on the compra_estatuspago column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraEstatuspago(true); // WHERE compra_estatuspago = true
     * $query->filterByCompraEstatuspago('yes'); // WHERE compra_estatuspago = true
     * </code>
     *
     * @param     boolean|string $compraEstatuspago The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraEstatuspago($compraEstatuspago = null, $comparison = null)
    {
        if (is_string($compraEstatuspago)) {
            $compraEstatuspago = in_array(strtolower($compraEstatuspago), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_ESTATUSPAGO, $compraEstatuspago, $comparison);
    }

    /**
     * Filter the query on the compra_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraEstatus('fooValue');   // WHERE compra_estatus = 'fooValue'
     * $query->filterByCompraEstatus('%fooValue%'); // WHERE compra_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compraEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraEstatus($compraEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compraEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compraEstatus)) {
                $compraEstatus = str_replace('*', '%', $compraEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_ESTATUS, $compraEstatus, $comparison);
    }

    /**
     * Filter the query on the compra_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraNota('fooValue');   // WHERE compra_nota = 'fooValue'
     * $query->filterByCompraNota('%fooValue%'); // WHERE compra_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compraNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraNota($compraNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compraNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compraNota)) {
                $compraNota = str_replace('*', '%', $compraNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_NOTA, $compraNota, $comparison);
    }

    /**
     * Filter the query on the compra_comprobante column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraComprobante('fooValue');   // WHERE compra_comprobante = 'fooValue'
     * $query->filterByCompraComprobante('%fooValue%'); // WHERE compra_comprobante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $compraComprobante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraComprobante($compraComprobante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($compraComprobante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $compraComprobante)) {
                $compraComprobante = str_replace('*', '%', $compraComprobante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_COMPROBANTE, $compraComprobante, $comparison);
    }

    /**
     * Filter the query on the compra_fechaentrega column
     *
     * Example usage:
     * <code>
     * $query->filterByCompraFechaentrega('2011-03-14'); // WHERE compra_fechaentrega = '2011-03-14'
     * $query->filterByCompraFechaentrega('now'); // WHERE compra_fechaentrega = '2011-03-14'
     * $query->filterByCompraFechaentrega(array('max' => 'yesterday')); // WHERE compra_fechaentrega < '2011-03-13'
     * </code>
     *
     * @param     mixed $compraFechaentrega The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function filterByCompraFechaentrega($compraFechaentrega = null, $comparison = null)
    {
        if (is_array($compraFechaentrega)) {
            $useMinMax = false;
            if (isset($compraFechaentrega['min'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_FECHAENTREGA, $compraFechaentrega['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compraFechaentrega['max'])) {
                $this->addUsingAlias(CompraPeer::COMPRA_FECHAENTREGA, $compraFechaentrega['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CompraPeer::COMPRA_FECHAENTREGA, $compraFechaentrega, $comparison);
    }

    /**
     * Filter the query by a related Proveedor object
     *
     * @param   Proveedor|PropelObjectCollection $proveedor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedor($proveedor, $comparison = null)
    {
        if ($proveedor instanceof Proveedor) {
            return $this
                ->addUsingAlias(CompraPeer::IDPROVEEDOR, $proveedor->getIdproveedor(), $comparison);
        } elseif ($proveedor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CompraPeer::IDPROVEEDOR, $proveedor->toKeyValue('PrimaryKey', 'Idproveedor'), $comparison);
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
     * @return CompraQuery The current query, for fluid interface
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
     * Filter the query by a related Compradetalle object
     *
     * @param   Compradetalle|PropelObjectCollection $compradetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CompraQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompradetalle($compradetalle, $comparison = null)
    {
        if ($compradetalle instanceof Compradetalle) {
            return $this
                ->addUsingAlias(CompraPeer::IDCOMPRA, $compradetalle->getIdcompra(), $comparison);
        } elseif ($compradetalle instanceof PropelObjectCollection) {
            return $this
                ->useCompradetalleQuery()
                ->filterByPrimaryKeys($compradetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCompradetalle() only accepts arguments of type Compradetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Compradetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function joinCompradetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Compradetalle');

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
            $this->addJoinObject($join, 'Compradetalle');
        }

        return $this;
    }

    /**
     * Use the Compradetalle relation Compradetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompradetalleQuery A secondary query class using the current class as primary query
     */
    public function useCompradetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompradetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compradetalle', 'CompradetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Compra $compra Object to remove from the list of results
     *
     * @return CompraQuery The current query, for fluid interface
     */
    public function prune($compra = null)
    {
        if ($compra) {
            $this->addUsingAlias(CompraPeer::IDCOMPRA, $compra->getIdcompra(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
