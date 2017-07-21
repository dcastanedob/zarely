<?php


/**
 * Base class that represents a query for the 'tarjetapuntos' table.
 *
 *
 *
 * @method TarjetapuntosQuery orderByIdtarjetapuntos($order = Criteria::ASC) Order by the idtarjetapuntos column
 * @method TarjetapuntosQuery orderByTarjetapuntosFechaactivacion($order = Criteria::ASC) Order by the tarjetapuntos_fechaactivacion column
 * @method TarjetapuntosQuery orderByTarjetapuntosEstatus($order = Criteria::ASC) Order by the tarjetapuntos_estatus column
 * @method TarjetapuntosQuery orderByTarjetapuntosPuntos($order = Criteria::ASC) Order by the tarjetapuntos_puntos column
 * @method TarjetapuntosQuery orderByIdempleadoactivador($order = Criteria::ASC) Order by the idempleadoactivador column
 *
 * @method TarjetapuntosQuery groupByIdtarjetapuntos() Group by the idtarjetapuntos column
 * @method TarjetapuntosQuery groupByTarjetapuntosFechaactivacion() Group by the tarjetapuntos_fechaactivacion column
 * @method TarjetapuntosQuery groupByTarjetapuntosEstatus() Group by the tarjetapuntos_estatus column
 * @method TarjetapuntosQuery groupByTarjetapuntosPuntos() Group by the tarjetapuntos_puntos column
 * @method TarjetapuntosQuery groupByIdempleadoactivador() Group by the idempleadoactivador column
 *
 * @method TarjetapuntosQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TarjetapuntosQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TarjetapuntosQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TarjetapuntosQuery leftJoinEmpleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Empleado relation
 * @method TarjetapuntosQuery rightJoinEmpleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Empleado relation
 * @method TarjetapuntosQuery innerJoinEmpleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Empleado relation
 *
 * @method TarjetapuntosQuery leftJoinTarjetapuntosdetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Tarjetapuntosdetalle relation
 * @method TarjetapuntosQuery rightJoinTarjetapuntosdetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Tarjetapuntosdetalle relation
 * @method TarjetapuntosQuery innerJoinTarjetapuntosdetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Tarjetapuntosdetalle relation
 *
 * @method Tarjetapuntos findOne(PropelPDO $con = null) Return the first Tarjetapuntos matching the query
 * @method Tarjetapuntos findOneOrCreate(PropelPDO $con = null) Return the first Tarjetapuntos matching the query, or a new Tarjetapuntos object populated from the query conditions when no match is found
 *
 * @method Tarjetapuntos findOneByTarjetapuntosFechaactivacion(string $tarjetapuntos_fechaactivacion) Return the first Tarjetapuntos filtered by the tarjetapuntos_fechaactivacion column
 * @method Tarjetapuntos findOneByTarjetapuntosEstatus(boolean $tarjetapuntos_estatus) Return the first Tarjetapuntos filtered by the tarjetapuntos_estatus column
 * @method Tarjetapuntos findOneByTarjetapuntosPuntos(int $tarjetapuntos_puntos) Return the first Tarjetapuntos filtered by the tarjetapuntos_puntos column
 * @method Tarjetapuntos findOneByIdempleadoactivador(int $idempleadoactivador) Return the first Tarjetapuntos filtered by the idempleadoactivador column
 *
 * @method array findByIdtarjetapuntos(int $idtarjetapuntos) Return Tarjetapuntos objects filtered by the idtarjetapuntos column
 * @method array findByTarjetapuntosFechaactivacion(string $tarjetapuntos_fechaactivacion) Return Tarjetapuntos objects filtered by the tarjetapuntos_fechaactivacion column
 * @method array findByTarjetapuntosEstatus(boolean $tarjetapuntos_estatus) Return Tarjetapuntos objects filtered by the tarjetapuntos_estatus column
 * @method array findByTarjetapuntosPuntos(int $tarjetapuntos_puntos) Return Tarjetapuntos objects filtered by the tarjetapuntos_puntos column
 * @method array findByIdempleadoactivador(int $idempleadoactivador) Return Tarjetapuntos objects filtered by the idempleadoactivador column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseTarjetapuntosQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTarjetapuntosQuery object.
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
            $modelName = 'Tarjetapuntos';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TarjetapuntosQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TarjetapuntosQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TarjetapuntosQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TarjetapuntosQuery) {
            return $criteria;
        }
        $query = new TarjetapuntosQuery(null, null, $modelAlias);

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
     * @return   Tarjetapuntos|Tarjetapuntos[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TarjetapuntosPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TarjetapuntosPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Tarjetapuntos A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdtarjetapuntos($key, $con = null)
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
     * @return                 Tarjetapuntos A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idtarjetapuntos`, `tarjetapuntos_fechaactivacion`, `tarjetapuntos_estatus`, `tarjetapuntos_puntos`, `idempleadoactivador` FROM `tarjetapuntos` WHERE `idtarjetapuntos` = :p0';
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
            $obj = new Tarjetapuntos();
            $obj->hydrate($row);
            TarjetapuntosPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Tarjetapuntos|Tarjetapuntos[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Tarjetapuntos[]|mixed the list of results, formatted by the current formatter
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
     * @return TarjetapuntosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TarjetapuntosPeer::IDTARJETAPUNTOS, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TarjetapuntosQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TarjetapuntosPeer::IDTARJETAPUNTOS, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idtarjetapuntos column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtarjetapuntos(1234); // WHERE idtarjetapuntos = 1234
     * $query->filterByIdtarjetapuntos(array(12, 34)); // WHERE idtarjetapuntos IN (12, 34)
     * $query->filterByIdtarjetapuntos(array('min' => 12)); // WHERE idtarjetapuntos >= 12
     * $query->filterByIdtarjetapuntos(array('max' => 12)); // WHERE idtarjetapuntos <= 12
     * </code>
     *
     * @param     mixed $idtarjetapuntos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TarjetapuntosQuery The current query, for fluid interface
     */
    public function filterByIdtarjetapuntos($idtarjetapuntos = null, $comparison = null)
    {
        if (is_array($idtarjetapuntos)) {
            $useMinMax = false;
            if (isset($idtarjetapuntos['min'])) {
                $this->addUsingAlias(TarjetapuntosPeer::IDTARJETAPUNTOS, $idtarjetapuntos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtarjetapuntos['max'])) {
                $this->addUsingAlias(TarjetapuntosPeer::IDTARJETAPUNTOS, $idtarjetapuntos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TarjetapuntosPeer::IDTARJETAPUNTOS, $idtarjetapuntos, $comparison);
    }

    /**
     * Filter the query on the tarjetapuntos_fechaactivacion column
     *
     * Example usage:
     * <code>
     * $query->filterByTarjetapuntosFechaactivacion('2011-03-14'); // WHERE tarjetapuntos_fechaactivacion = '2011-03-14'
     * $query->filterByTarjetapuntosFechaactivacion('now'); // WHERE tarjetapuntos_fechaactivacion = '2011-03-14'
     * $query->filterByTarjetapuntosFechaactivacion(array('max' => 'yesterday')); // WHERE tarjetapuntos_fechaactivacion < '2011-03-13'
     * </code>
     *
     * @param     mixed $tarjetapuntosFechaactivacion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TarjetapuntosQuery The current query, for fluid interface
     */
    public function filterByTarjetapuntosFechaactivacion($tarjetapuntosFechaactivacion = null, $comparison = null)
    {
        if (is_array($tarjetapuntosFechaactivacion)) {
            $useMinMax = false;
            if (isset($tarjetapuntosFechaactivacion['min'])) {
                $this->addUsingAlias(TarjetapuntosPeer::TARJETAPUNTOS_FECHAACTIVACION, $tarjetapuntosFechaactivacion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tarjetapuntosFechaactivacion['max'])) {
                $this->addUsingAlias(TarjetapuntosPeer::TARJETAPUNTOS_FECHAACTIVACION, $tarjetapuntosFechaactivacion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TarjetapuntosPeer::TARJETAPUNTOS_FECHAACTIVACION, $tarjetapuntosFechaactivacion, $comparison);
    }

    /**
     * Filter the query on the tarjetapuntos_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByTarjetapuntosEstatus(true); // WHERE tarjetapuntos_estatus = true
     * $query->filterByTarjetapuntosEstatus('yes'); // WHERE tarjetapuntos_estatus = true
     * </code>
     *
     * @param     boolean|string $tarjetapuntosEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TarjetapuntosQuery The current query, for fluid interface
     */
    public function filterByTarjetapuntosEstatus($tarjetapuntosEstatus = null, $comparison = null)
    {
        if (is_string($tarjetapuntosEstatus)) {
            $tarjetapuntosEstatus = in_array(strtolower($tarjetapuntosEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(TarjetapuntosPeer::TARJETAPUNTOS_ESTATUS, $tarjetapuntosEstatus, $comparison);
    }

    /**
     * Filter the query on the tarjetapuntos_puntos column
     *
     * Example usage:
     * <code>
     * $query->filterByTarjetapuntosPuntos(1234); // WHERE tarjetapuntos_puntos = 1234
     * $query->filterByTarjetapuntosPuntos(array(12, 34)); // WHERE tarjetapuntos_puntos IN (12, 34)
     * $query->filterByTarjetapuntosPuntos(array('min' => 12)); // WHERE tarjetapuntos_puntos >= 12
     * $query->filterByTarjetapuntosPuntos(array('max' => 12)); // WHERE tarjetapuntos_puntos <= 12
     * </code>
     *
     * @param     mixed $tarjetapuntosPuntos The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TarjetapuntosQuery The current query, for fluid interface
     */
    public function filterByTarjetapuntosPuntos($tarjetapuntosPuntos = null, $comparison = null)
    {
        if (is_array($tarjetapuntosPuntos)) {
            $useMinMax = false;
            if (isset($tarjetapuntosPuntos['min'])) {
                $this->addUsingAlias(TarjetapuntosPeer::TARJETAPUNTOS_PUNTOS, $tarjetapuntosPuntos['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tarjetapuntosPuntos['max'])) {
                $this->addUsingAlias(TarjetapuntosPeer::TARJETAPUNTOS_PUNTOS, $tarjetapuntosPuntos['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TarjetapuntosPeer::TARJETAPUNTOS_PUNTOS, $tarjetapuntosPuntos, $comparison);
    }

    /**
     * Filter the query on the idempleadoactivador column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadoactivador(1234); // WHERE idempleadoactivador = 1234
     * $query->filterByIdempleadoactivador(array(12, 34)); // WHERE idempleadoactivador IN (12, 34)
     * $query->filterByIdempleadoactivador(array('min' => 12)); // WHERE idempleadoactivador >= 12
     * $query->filterByIdempleadoactivador(array('max' => 12)); // WHERE idempleadoactivador <= 12
     * </code>
     *
     * @see       filterByEmpleado()
     *
     * @param     mixed $idempleadoactivador The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TarjetapuntosQuery The current query, for fluid interface
     */
    public function filterByIdempleadoactivador($idempleadoactivador = null, $comparison = null)
    {
        if (is_array($idempleadoactivador)) {
            $useMinMax = false;
            if (isset($idempleadoactivador['min'])) {
                $this->addUsingAlias(TarjetapuntosPeer::IDEMPLEADOACTIVADOR, $idempleadoactivador['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadoactivador['max'])) {
                $this->addUsingAlias(TarjetapuntosPeer::IDEMPLEADOACTIVADOR, $idempleadoactivador['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TarjetapuntosPeer::IDEMPLEADOACTIVADOR, $idempleadoactivador, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TarjetapuntosQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleado($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(TarjetapuntosPeer::IDEMPLEADOACTIVADOR, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TarjetapuntosPeer::IDEMPLEADOACTIVADOR, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
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
     * @return TarjetapuntosQuery The current query, for fluid interface
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
     * Filter the query by a related Tarjetapuntosdetalle object
     *
     * @param   Tarjetapuntosdetalle|PropelObjectCollection $tarjetapuntosdetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TarjetapuntosQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTarjetapuntosdetalle($tarjetapuntosdetalle, $comparison = null)
    {
        if ($tarjetapuntosdetalle instanceof Tarjetapuntosdetalle) {
            return $this
                ->addUsingAlias(TarjetapuntosPeer::IDTARJETAPUNTOS, $tarjetapuntosdetalle->getIdtarjetapuntos(), $comparison);
        } elseif ($tarjetapuntosdetalle instanceof PropelObjectCollection) {
            return $this
                ->useTarjetapuntosdetalleQuery()
                ->filterByPrimaryKeys($tarjetapuntosdetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTarjetapuntosdetalle() only accepts arguments of type Tarjetapuntosdetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Tarjetapuntosdetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TarjetapuntosQuery The current query, for fluid interface
     */
    public function joinTarjetapuntosdetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Tarjetapuntosdetalle');

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
            $this->addJoinObject($join, 'Tarjetapuntosdetalle');
        }

        return $this;
    }

    /**
     * Use the Tarjetapuntosdetalle relation Tarjetapuntosdetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TarjetapuntosdetalleQuery A secondary query class using the current class as primary query
     */
    public function useTarjetapuntosdetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTarjetapuntosdetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Tarjetapuntosdetalle', 'TarjetapuntosdetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Tarjetapuntos $tarjetapuntos Object to remove from the list of results
     *
     * @return TarjetapuntosQuery The current query, for fluid interface
     */
    public function prune($tarjetapuntos = null)
    {
        if ($tarjetapuntos) {
            $this->addUsingAlias(TarjetapuntosPeer::IDTARJETAPUNTOS, $tarjetapuntos->getIdtarjetapuntos(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
