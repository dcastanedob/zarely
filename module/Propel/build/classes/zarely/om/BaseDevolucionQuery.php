<?php


/**
 * Base class that represents a query for the 'devolucion' table.
 *
 *
 *
 * @method DevolucionQuery orderByIddevolucion($order = Criteria::ASC) Order by the iddevolucion column
 * @method DevolucionQuery orderByIdproveedor($order = Criteria::ASC) Order by the idproveedor column
 * @method DevolucionQuery orderByDevolucionFecha($order = Criteria::ASC) Order by the devolucion_fecha column
 * @method DevolucionQuery orderByDevolucionTotal($order = Criteria::ASC) Order by the devolucion_total column
 * @method DevolucionQuery orderByDevolucionEstatus($order = Criteria::ASC) Order by the devolucion_estatus column
 * @method DevolucionQuery orderByDevolucionNota($order = Criteria::ASC) Order by the devolucion_nota column
 * @method DevolucionQuery orderByDevolucionComprobante($order = Criteria::ASC) Order by the devolucion_comprobante column
 *
 * @method DevolucionQuery groupByIddevolucion() Group by the iddevolucion column
 * @method DevolucionQuery groupByIdproveedor() Group by the idproveedor column
 * @method DevolucionQuery groupByDevolucionFecha() Group by the devolucion_fecha column
 * @method DevolucionQuery groupByDevolucionTotal() Group by the devolucion_total column
 * @method DevolucionQuery groupByDevolucionEstatus() Group by the devolucion_estatus column
 * @method DevolucionQuery groupByDevolucionNota() Group by the devolucion_nota column
 * @method DevolucionQuery groupByDevolucionComprobante() Group by the devolucion_comprobante column
 *
 * @method DevolucionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method DevolucionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method DevolucionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method DevolucionQuery leftJoinProveedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedor relation
 * @method DevolucionQuery rightJoinProveedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedor relation
 * @method DevolucionQuery innerJoinProveedor($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedor relation
 *
 * @method DevolucionQuery leftJoinDevoluciondetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Devoluciondetalle relation
 * @method DevolucionQuery rightJoinDevoluciondetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Devoluciondetalle relation
 * @method DevolucionQuery innerJoinDevoluciondetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Devoluciondetalle relation
 *
 * @method Devolucion findOne(PropelPDO $con = null) Return the first Devolucion matching the query
 * @method Devolucion findOneOrCreate(PropelPDO $con = null) Return the first Devolucion matching the query, or a new Devolucion object populated from the query conditions when no match is found
 *
 * @method Devolucion findOneByIdproveedor(int $idproveedor) Return the first Devolucion filtered by the idproveedor column
 * @method Devolucion findOneByDevolucionFecha(string $devolucion_fecha) Return the first Devolucion filtered by the devolucion_fecha column
 * @method Devolucion findOneByDevolucionTotal(string $devolucion_total) Return the first Devolucion filtered by the devolucion_total column
 * @method Devolucion findOneByDevolucionEstatus(string $devolucion_estatus) Return the first Devolucion filtered by the devolucion_estatus column
 * @method Devolucion findOneByDevolucionNota(string $devolucion_nota) Return the first Devolucion filtered by the devolucion_nota column
 * @method Devolucion findOneByDevolucionComprobante(string $devolucion_comprobante) Return the first Devolucion filtered by the devolucion_comprobante column
 *
 * @method array findByIddevolucion(int $iddevolucion) Return Devolucion objects filtered by the iddevolucion column
 * @method array findByIdproveedor(int $idproveedor) Return Devolucion objects filtered by the idproveedor column
 * @method array findByDevolucionFecha(string $devolucion_fecha) Return Devolucion objects filtered by the devolucion_fecha column
 * @method array findByDevolucionTotal(string $devolucion_total) Return Devolucion objects filtered by the devolucion_total column
 * @method array findByDevolucionEstatus(string $devolucion_estatus) Return Devolucion objects filtered by the devolucion_estatus column
 * @method array findByDevolucionNota(string $devolucion_nota) Return Devolucion objects filtered by the devolucion_nota column
 * @method array findByDevolucionComprobante(string $devolucion_comprobante) Return Devolucion objects filtered by the devolucion_comprobante column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseDevolucionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseDevolucionQuery object.
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
            $modelName = 'Devolucion';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new DevolucionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   DevolucionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return DevolucionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof DevolucionQuery) {
            return $criteria;
        }
        $query = new DevolucionQuery(null, null, $modelAlias);

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
     * @return   Devolucion|Devolucion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = DevolucionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(DevolucionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Devolucion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIddevolucion($key, $con = null)
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
     * @return                 Devolucion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `iddevolucion`, `idproveedor`, `devolucion_fecha`, `devolucion_total`, `devolucion_estatus`, `devolucion_nota`, `devolucion_comprobante` FROM `devolucion` WHERE `iddevolucion` = :p0';
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
            $obj = new Devolucion();
            $obj->hydrate($row);
            DevolucionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Devolucion|Devolucion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Devolucion[]|mixed the list of results, formatted by the current formatter
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
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(DevolucionPeer::IDDEVOLUCION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(DevolucionPeer::IDDEVOLUCION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the iddevolucion column
     *
     * Example usage:
     * <code>
     * $query->filterByIddevolucion(1234); // WHERE iddevolucion = 1234
     * $query->filterByIddevolucion(array(12, 34)); // WHERE iddevolucion IN (12, 34)
     * $query->filterByIddevolucion(array('min' => 12)); // WHERE iddevolucion >= 12
     * $query->filterByIddevolucion(array('max' => 12)); // WHERE iddevolucion <= 12
     * </code>
     *
     * @param     mixed $iddevolucion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByIddevolucion($iddevolucion = null, $comparison = null)
    {
        if (is_array($iddevolucion)) {
            $useMinMax = false;
            if (isset($iddevolucion['min'])) {
                $this->addUsingAlias(DevolucionPeer::IDDEVOLUCION, $iddevolucion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddevolucion['max'])) {
                $this->addUsingAlias(DevolucionPeer::IDDEVOLUCION, $iddevolucion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::IDDEVOLUCION, $iddevolucion, $comparison);
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
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByIdproveedor($idproveedor = null, $comparison = null)
    {
        if (is_array($idproveedor)) {
            $useMinMax = false;
            if (isset($idproveedor['min'])) {
                $this->addUsingAlias(DevolucionPeer::IDPROVEEDOR, $idproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedor['max'])) {
                $this->addUsingAlias(DevolucionPeer::IDPROVEEDOR, $idproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::IDPROVEEDOR, $idproveedor, $comparison);
    }

    /**
     * Filter the query on the devolucion_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucionFecha('2011-03-14'); // WHERE devolucion_fecha = '2011-03-14'
     * $query->filterByDevolucionFecha('now'); // WHERE devolucion_fecha = '2011-03-14'
     * $query->filterByDevolucionFecha(array('max' => 'yesterday')); // WHERE devolucion_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $devolucionFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByDevolucionFecha($devolucionFecha = null, $comparison = null)
    {
        if (is_array($devolucionFecha)) {
            $useMinMax = false;
            if (isset($devolucionFecha['min'])) {
                $this->addUsingAlias(DevolucionPeer::DEVOLUCION_FECHA, $devolucionFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devolucionFecha['max'])) {
                $this->addUsingAlias(DevolucionPeer::DEVOLUCION_FECHA, $devolucionFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::DEVOLUCION_FECHA, $devolucionFecha, $comparison);
    }

    /**
     * Filter the query on the devolucion_total column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucionTotal(1234); // WHERE devolucion_total = 1234
     * $query->filterByDevolucionTotal(array(12, 34)); // WHERE devolucion_total IN (12, 34)
     * $query->filterByDevolucionTotal(array('min' => 12)); // WHERE devolucion_total >= 12
     * $query->filterByDevolucionTotal(array('max' => 12)); // WHERE devolucion_total <= 12
     * </code>
     *
     * @param     mixed $devolucionTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByDevolucionTotal($devolucionTotal = null, $comparison = null)
    {
        if (is_array($devolucionTotal)) {
            $useMinMax = false;
            if (isset($devolucionTotal['min'])) {
                $this->addUsingAlias(DevolucionPeer::DEVOLUCION_TOTAL, $devolucionTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($devolucionTotal['max'])) {
                $this->addUsingAlias(DevolucionPeer::DEVOLUCION_TOTAL, $devolucionTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::DEVOLUCION_TOTAL, $devolucionTotal, $comparison);
    }

    /**
     * Filter the query on the devolucion_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucionEstatus('fooValue');   // WHERE devolucion_estatus = 'fooValue'
     * $query->filterByDevolucionEstatus('%fooValue%'); // WHERE devolucion_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devolucionEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByDevolucionEstatus($devolucionEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devolucionEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devolucionEstatus)) {
                $devolucionEstatus = str_replace('*', '%', $devolucionEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::DEVOLUCION_ESTATUS, $devolucionEstatus, $comparison);
    }

    /**
     * Filter the query on the devolucion_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucionNota('fooValue');   // WHERE devolucion_nota = 'fooValue'
     * $query->filterByDevolucionNota('%fooValue%'); // WHERE devolucion_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devolucionNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByDevolucionNota($devolucionNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devolucionNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devolucionNota)) {
                $devolucionNota = str_replace('*', '%', $devolucionNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::DEVOLUCION_NOTA, $devolucionNota, $comparison);
    }

    /**
     * Filter the query on the devolucion_comprobante column
     *
     * Example usage:
     * <code>
     * $query->filterByDevolucionComprobante('fooValue');   // WHERE devolucion_comprobante = 'fooValue'
     * $query->filterByDevolucionComprobante('%fooValue%'); // WHERE devolucion_comprobante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devolucionComprobante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function filterByDevolucionComprobante($devolucionComprobante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devolucionComprobante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devolucionComprobante)) {
                $devolucionComprobante = str_replace('*', '%', $devolucionComprobante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(DevolucionPeer::DEVOLUCION_COMPROBANTE, $devolucionComprobante, $comparison);
    }

    /**
     * Filter the query by a related Proveedor object
     *
     * @param   Proveedor|PropelObjectCollection $proveedor The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DevolucionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedor($proveedor, $comparison = null)
    {
        if ($proveedor instanceof Proveedor) {
            return $this
                ->addUsingAlias(DevolucionPeer::IDPROVEEDOR, $proveedor->getIdproveedor(), $comparison);
        } elseif ($proveedor instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(DevolucionPeer::IDPROVEEDOR, $proveedor->toKeyValue('PrimaryKey', 'Idproveedor'), $comparison);
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
     * @return DevolucionQuery The current query, for fluid interface
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
     * Filter the query by a related Devoluciondetalle object
     *
     * @param   Devoluciondetalle|PropelObjectCollection $devoluciondetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 DevolucionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDevoluciondetalle($devoluciondetalle, $comparison = null)
    {
        if ($devoluciondetalle instanceof Devoluciondetalle) {
            return $this
                ->addUsingAlias(DevolucionPeer::IDDEVOLUCION, $devoluciondetalle->getIddevolucion(), $comparison);
        } elseif ($devoluciondetalle instanceof PropelObjectCollection) {
            return $this
                ->useDevoluciondetalleQuery()
                ->filterByPrimaryKeys($devoluciondetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDevoluciondetalle() only accepts arguments of type Devoluciondetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Devoluciondetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function joinDevoluciondetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Devoluciondetalle');

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
            $this->addJoinObject($join, 'Devoluciondetalle');
        }

        return $this;
    }

    /**
     * Use the Devoluciondetalle relation Devoluciondetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DevoluciondetalleQuery A secondary query class using the current class as primary query
     */
    public function useDevoluciondetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDevoluciondetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Devoluciondetalle', 'DevoluciondetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Devolucion $devolucion Object to remove from the list of results
     *
     * @return DevolucionQuery The current query, for fluid interface
     */
    public function prune($devolucion = null)
    {
        if ($devolucion) {
            $this->addUsingAlias(DevolucionPeer::IDDEVOLUCION, $devolucion->getIddevolucion(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
