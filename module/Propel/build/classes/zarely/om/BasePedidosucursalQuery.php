<?php


/**
 * Base class that represents a query for the 'pedidosucursal' table.
 *
 *
 *
 * @method PedidosucursalQuery orderByIdpedidosucursal($order = Criteria::ASC) Order by the idpedidosucursal column
 * @method PedidosucursalQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method PedidosucursalQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method PedidosucursalQuery orderByPedidosucursalFechasolicitud($order = Criteria::ASC) Order by the pedidosucursal_fechasolicitud column
 * @method PedidosucursalQuery orderByPedidosucursalFechaentrega($order = Criteria::ASC) Order by the pedidosucursal_fechaentrega column
 * @method PedidosucursalQuery orderByPedidosucursalEstatus($order = Criteria::ASC) Order by the pedidosucursal_estatus column
 * @method PedidosucursalQuery orderByPedidosucursalNota($order = Criteria::ASC) Order by the pedidosucursal_nota column
 *
 * @method PedidosucursalQuery groupByIdpedidosucursal() Group by the idpedidosucursal column
 * @method PedidosucursalQuery groupByIdsucursal() Group by the idsucursal column
 * @method PedidosucursalQuery groupByIdempleado() Group by the idempleado column
 * @method PedidosucursalQuery groupByPedidosucursalFechasolicitud() Group by the pedidosucursal_fechasolicitud column
 * @method PedidosucursalQuery groupByPedidosucursalFechaentrega() Group by the pedidosucursal_fechaentrega column
 * @method PedidosucursalQuery groupByPedidosucursalEstatus() Group by the pedidosucursal_estatus column
 * @method PedidosucursalQuery groupByPedidosucursalNota() Group by the pedidosucursal_nota column
 *
 * @method PedidosucursalQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PedidosucursalQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PedidosucursalQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PedidosucursalQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method PedidosucursalQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method PedidosucursalQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method PedidosucursalQuery leftJoinSucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursal relation
 * @method PedidosucursalQuery rightJoinSucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursal relation
 * @method PedidosucursalQuery innerJoinSucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursal relation
 *
 * @method PedidosucursalQuery leftJoinPedidosucursaldetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pedidosucursaldetalle relation
 * @method PedidosucursalQuery rightJoinPedidosucursaldetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pedidosucursaldetalle relation
 * @method PedidosucursalQuery innerJoinPedidosucursaldetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Pedidosucursaldetalle relation
 *
 * @method Pedidosucursal findOne(PropelPDO $con = null) Return the first Pedidosucursal matching the query
 * @method Pedidosucursal findOneOrCreate(PropelPDO $con = null) Return the first Pedidosucursal matching the query, or a new Pedidosucursal object populated from the query conditions when no match is found
 *
 * @method Pedidosucursal findOneByIdsucursal(int $idsucursal) Return the first Pedidosucursal filtered by the idsucursal column
 * @method Pedidosucursal findOneByIdempleado(int $idempleado) Return the first Pedidosucursal filtered by the idempleado column
 * @method Pedidosucursal findOneByPedidosucursalFechasolicitud(string $pedidosucursal_fechasolicitud) Return the first Pedidosucursal filtered by the pedidosucursal_fechasolicitud column
 * @method Pedidosucursal findOneByPedidosucursalFechaentrega(string $pedidosucursal_fechaentrega) Return the first Pedidosucursal filtered by the pedidosucursal_fechaentrega column
 * @method Pedidosucursal findOneByPedidosucursalEstatus(string $pedidosucursal_estatus) Return the first Pedidosucursal filtered by the pedidosucursal_estatus column
 * @method Pedidosucursal findOneByPedidosucursalNota(string $pedidosucursal_nota) Return the first Pedidosucursal filtered by the pedidosucursal_nota column
 *
 * @method array findByIdpedidosucursal(int $idpedidosucursal) Return Pedidosucursal objects filtered by the idpedidosucursal column
 * @method array findByIdsucursal(int $idsucursal) Return Pedidosucursal objects filtered by the idsucursal column
 * @method array findByIdempleado(int $idempleado) Return Pedidosucursal objects filtered by the idempleado column
 * @method array findByPedidosucursalFechasolicitud(string $pedidosucursal_fechasolicitud) Return Pedidosucursal objects filtered by the pedidosucursal_fechasolicitud column
 * @method array findByPedidosucursalFechaentrega(string $pedidosucursal_fechaentrega) Return Pedidosucursal objects filtered by the pedidosucursal_fechaentrega column
 * @method array findByPedidosucursalEstatus(string $pedidosucursal_estatus) Return Pedidosucursal objects filtered by the pedidosucursal_estatus column
 * @method array findByPedidosucursalNota(string $pedidosucursal_nota) Return Pedidosucursal objects filtered by the pedidosucursal_nota column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BasePedidosucursalQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePedidosucursalQuery object.
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
            $modelName = 'Pedidosucursal';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PedidosucursalQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PedidosucursalQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PedidosucursalQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PedidosucursalQuery) {
            return $criteria;
        }
        $query = new PedidosucursalQuery(null, null, $modelAlias);

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
     * @return   Pedidosucursal|Pedidosucursal[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PedidosucursalPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PedidosucursalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Pedidosucursal A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpedidosucursal($key, $con = null)
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
     * @return                 Pedidosucursal A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpedidosucursal`, `idsucursal`, `idempleado`, `pedidosucursal_fechasolicitud`, `pedidosucursal_fechaentrega`, `pedidosucursal_estatus`, `pedidosucursal_nota` FROM `pedidosucursal` WHERE `idpedidosucursal` = :p0';
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
            $obj = new Pedidosucursal();
            $obj->hydrate($row);
            PedidosucursalPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Pedidosucursal|Pedidosucursal[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Pedidosucursal[]|mixed the list of results, formatted by the current formatter
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
     * @return PedidosucursalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PedidosucursalPeer::IDPEDIDOSUCURSAL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PedidosucursalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PedidosucursalPeer::IDPEDIDOSUCURSAL, $keys, Criteria::IN);
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
     * @param     mixed $idpedidosucursal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidosucursalQuery The current query, for fluid interface
     */
    public function filterByIdpedidosucursal($idpedidosucursal = null, $comparison = null)
    {
        if (is_array($idpedidosucursal)) {
            $useMinMax = false;
            if (isset($idpedidosucursal['min'])) {
                $this->addUsingAlias(PedidosucursalPeer::IDPEDIDOSUCURSAL, $idpedidosucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpedidosucursal['max'])) {
                $this->addUsingAlias(PedidosucursalPeer::IDPEDIDOSUCURSAL, $idpedidosucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidosucursalPeer::IDPEDIDOSUCURSAL, $idpedidosucursal, $comparison);
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
     * @return PedidosucursalQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(PedidosucursalPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(PedidosucursalPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidosucursalPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the idempleado column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleado(1234); // WHERE idempleado = 1234
     * $query->filterByIdempleado(array(12, 34)); // WHERE idempleado IN (12, 34)
     * $query->filterByIdempleado(array('min' => 12)); // WHERE idempleado >= 12
     * $query->filterByIdempleado(array('max' => 12)); // WHERE idempleado <= 12
     * </code>
     *
     * @see       filterByEmpleado()
     *
     * @param     mixed $idempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidosucursalQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(PedidosucursalPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(PedidosucursalPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidosucursalPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the pedidosucursal_fechasolicitud column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidosucursalFechasolicitud('2011-03-14'); // WHERE pedidosucursal_fechasolicitud = '2011-03-14'
     * $query->filterByPedidosucursalFechasolicitud('now'); // WHERE pedidosucursal_fechasolicitud = '2011-03-14'
     * $query->filterByPedidosucursalFechasolicitud(array('max' => 'yesterday')); // WHERE pedidosucursal_fechasolicitud < '2011-03-13'
     * </code>
     *
     * @param     mixed $pedidosucursalFechasolicitud The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidosucursalQuery The current query, for fluid interface
     */
    public function filterByPedidosucursalFechasolicitud($pedidosucursalFechasolicitud = null, $comparison = null)
    {
        if (is_array($pedidosucursalFechasolicitud)) {
            $useMinMax = false;
            if (isset($pedidosucursalFechasolicitud['min'])) {
                $this->addUsingAlias(PedidosucursalPeer::PEDIDOSUCURSAL_FECHASOLICITUD, $pedidosucursalFechasolicitud['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pedidosucursalFechasolicitud['max'])) {
                $this->addUsingAlias(PedidosucursalPeer::PEDIDOSUCURSAL_FECHASOLICITUD, $pedidosucursalFechasolicitud['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidosucursalPeer::PEDIDOSUCURSAL_FECHASOLICITUD, $pedidosucursalFechasolicitud, $comparison);
    }

    /**
     * Filter the query on the pedidosucursal_fechaentrega column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidosucursalFechaentrega('2011-03-14'); // WHERE pedidosucursal_fechaentrega = '2011-03-14'
     * $query->filterByPedidosucursalFechaentrega('now'); // WHERE pedidosucursal_fechaentrega = '2011-03-14'
     * $query->filterByPedidosucursalFechaentrega(array('max' => 'yesterday')); // WHERE pedidosucursal_fechaentrega < '2011-03-13'
     * </code>
     *
     * @param     mixed $pedidosucursalFechaentrega The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidosucursalQuery The current query, for fluid interface
     */
    public function filterByPedidosucursalFechaentrega($pedidosucursalFechaentrega = null, $comparison = null)
    {
        if (is_array($pedidosucursalFechaentrega)) {
            $useMinMax = false;
            if (isset($pedidosucursalFechaentrega['min'])) {
                $this->addUsingAlias(PedidosucursalPeer::PEDIDOSUCURSAL_FECHAENTREGA, $pedidosucursalFechaentrega['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pedidosucursalFechaentrega['max'])) {
                $this->addUsingAlias(PedidosucursalPeer::PEDIDOSUCURSAL_FECHAENTREGA, $pedidosucursalFechaentrega['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidosucursalPeer::PEDIDOSUCURSAL_FECHAENTREGA, $pedidosucursalFechaentrega, $comparison);
    }

    /**
     * Filter the query on the pedidosucursal_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidosucursalEstatus('fooValue');   // WHERE pedidosucursal_estatus = 'fooValue'
     * $query->filterByPedidosucursalEstatus('%fooValue%'); // WHERE pedidosucursal_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pedidosucursalEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidosucursalQuery The current query, for fluid interface
     */
    public function filterByPedidosucursalEstatus($pedidosucursalEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pedidosucursalEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pedidosucursalEstatus)) {
                $pedidosucursalEstatus = str_replace('*', '%', $pedidosucursalEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PedidosucursalPeer::PEDIDOSUCURSAL_ESTATUS, $pedidosucursalEstatus, $comparison);
    }

    /**
     * Filter the query on the pedidosucursal_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidosucursalNota('fooValue');   // WHERE pedidosucursal_nota = 'fooValue'
     * $query->filterByPedidosucursalNota('%fooValue%'); // WHERE pedidosucursal_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pedidosucursalNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidosucursalQuery The current query, for fluid interface
     */
    public function filterByPedidosucursalNota($pedidosucursalNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pedidosucursalNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pedidosucursalNota)) {
                $pedidosucursalNota = str_replace('*', '%', $pedidosucursalNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PedidosucursalPeer::PEDIDOSUCURSAL_NOTA, $pedidosucursalNota, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PedidosucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(PedidosucursalPeer::IDEMPLEADO, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PedidosucursalPeer::IDEMPLEADO, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleado() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Empleado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PedidosucursalQuery The current query, for fluid interface
     */
    public function joinEmpleado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Empleado');

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
            $this->addJoinObject($join, 'Empleado');
        }

        return $this;
    }

    /**
     * Use the Empleado relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Empleado', 'EmpleadoQuery');
    }

    /**
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PedidosucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursal($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(PedidosucursalPeer::IDSUCURSAL, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PedidosucursalPeer::IDSUCURSAL, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
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
     * @return PedidosucursalQuery The current query, for fluid interface
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
     * Filter the query by a related Pedidosucursaldetalle object
     *
     * @param   Pedidosucursaldetalle|PropelObjectCollection $pedidosucursaldetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PedidosucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPedidosucursaldetalle($pedidosucursaldetalle, $comparison = null)
    {
        if ($pedidosucursaldetalle instanceof Pedidosucursaldetalle) {
            return $this
                ->addUsingAlias(PedidosucursalPeer::IDPEDIDOSUCURSAL, $pedidosucursaldetalle->getIdpedidosucursal(), $comparison);
        } elseif ($pedidosucursaldetalle instanceof PropelObjectCollection) {
            return $this
                ->usePedidosucursaldetalleQuery()
                ->filterByPrimaryKeys($pedidosucursaldetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPedidosucursaldetalle() only accepts arguments of type Pedidosucursaldetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pedidosucursaldetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PedidosucursalQuery The current query, for fluid interface
     */
    public function joinPedidosucursaldetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pedidosucursaldetalle');

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
            $this->addJoinObject($join, 'Pedidosucursaldetalle');
        }

        return $this;
    }

    /**
     * Use the Pedidosucursaldetalle relation Pedidosucursaldetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PedidosucursaldetalleQuery A secondary query class using the current class as primary query
     */
    public function usePedidosucursaldetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPedidosucursaldetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pedidosucursaldetalle', 'PedidosucursaldetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Pedidosucursal $pedidosucursal Object to remove from the list of results
     *
     * @return PedidosucursalQuery The current query, for fluid interface
     */
    public function prune($pedidosucursal = null)
    {
        if ($pedidosucursal) {
            $this->addUsingAlias(PedidosucursalPeer::IDPEDIDOSUCURSAL, $pedidosucursal->getIdpedidosucursal(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
