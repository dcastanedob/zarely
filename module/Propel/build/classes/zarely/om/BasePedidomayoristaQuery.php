<?php


/**
 * Base class that represents a query for the 'pedidomayorista' table.
 *
 *
 *
 * @method PedidomayoristaQuery orderByIdpedidomayorista($order = Criteria::ASC) Order by the idpedidomayorista column
 * @method PedidomayoristaQuery orderByIdcliente($order = Criteria::ASC) Order by the idcliente column
 * @method PedidomayoristaQuery orderByPedidomayoristaFechasolicitud($order = Criteria::ASC) Order by the pedidomayorista_fechasolicitud column
 * @method PedidomayoristaQuery orderByPedidomayoristaEstatus($order = Criteria::ASC) Order by the pedidomayorista_estatus column
 * @method PedidomayoristaQuery orderByPedidomayoristaFechaentrega($order = Criteria::ASC) Order by the pedidomayorista_fechaentrega column
 * @method PedidomayoristaQuery orderByPedidomayoristaNota($order = Criteria::ASC) Order by the pedidomayorista_nota column
 *
 * @method PedidomayoristaQuery groupByIdpedidomayorista() Group by the idpedidomayorista column
 * @method PedidomayoristaQuery groupByIdcliente() Group by the idcliente column
 * @method PedidomayoristaQuery groupByPedidomayoristaFechasolicitud() Group by the pedidomayorista_fechasolicitud column
 * @method PedidomayoristaQuery groupByPedidomayoristaEstatus() Group by the pedidomayorista_estatus column
 * @method PedidomayoristaQuery groupByPedidomayoristaFechaentrega() Group by the pedidomayorista_fechaentrega column
 * @method PedidomayoristaQuery groupByPedidomayoristaNota() Group by the pedidomayorista_nota column
 *
 * @method PedidomayoristaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PedidomayoristaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PedidomayoristaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PedidomayoristaQuery leftJoinCliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cliente relation
 * @method PedidomayoristaQuery rightJoinCliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cliente relation
 * @method PedidomayoristaQuery innerJoinCliente($relationAlias = null) Adds a INNER JOIN clause to the query using the Cliente relation
 *
 * @method PedidomayoristaQuery leftJoinPedidomayoristadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pedidomayoristadetalle relation
 * @method PedidomayoristaQuery rightJoinPedidomayoristadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pedidomayoristadetalle relation
 * @method PedidomayoristaQuery innerJoinPedidomayoristadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Pedidomayoristadetalle relation
 *
 * @method Pedidomayorista findOne(PropelPDO $con = null) Return the first Pedidomayorista matching the query
 * @method Pedidomayorista findOneOrCreate(PropelPDO $con = null) Return the first Pedidomayorista matching the query, or a new Pedidomayorista object populated from the query conditions when no match is found
 *
 * @method Pedidomayorista findOneByIdcliente(int $idcliente) Return the first Pedidomayorista filtered by the idcliente column
 * @method Pedidomayorista findOneByPedidomayoristaFechasolicitud(string $pedidomayorista_fechasolicitud) Return the first Pedidomayorista filtered by the pedidomayorista_fechasolicitud column
 * @method Pedidomayorista findOneByPedidomayoristaEstatus(string $pedidomayorista_estatus) Return the first Pedidomayorista filtered by the pedidomayorista_estatus column
 * @method Pedidomayorista findOneByPedidomayoristaFechaentrega(string $pedidomayorista_fechaentrega) Return the first Pedidomayorista filtered by the pedidomayorista_fechaentrega column
 * @method Pedidomayorista findOneByPedidomayoristaNota(string $pedidomayorista_nota) Return the first Pedidomayorista filtered by the pedidomayorista_nota column
 *
 * @method array findByIdpedidomayorista(int $idpedidomayorista) Return Pedidomayorista objects filtered by the idpedidomayorista column
 * @method array findByIdcliente(int $idcliente) Return Pedidomayorista objects filtered by the idcliente column
 * @method array findByPedidomayoristaFechasolicitud(string $pedidomayorista_fechasolicitud) Return Pedidomayorista objects filtered by the pedidomayorista_fechasolicitud column
 * @method array findByPedidomayoristaEstatus(string $pedidomayorista_estatus) Return Pedidomayorista objects filtered by the pedidomayorista_estatus column
 * @method array findByPedidomayoristaFechaentrega(string $pedidomayorista_fechaentrega) Return Pedidomayorista objects filtered by the pedidomayorista_fechaentrega column
 * @method array findByPedidomayoristaNota(string $pedidomayorista_nota) Return Pedidomayorista objects filtered by the pedidomayorista_nota column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BasePedidomayoristaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePedidomayoristaQuery object.
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
            $modelName = 'Pedidomayorista';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PedidomayoristaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PedidomayoristaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PedidomayoristaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PedidomayoristaQuery) {
            return $criteria;
        }
        $query = new PedidomayoristaQuery(null, null, $modelAlias);

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
     * @return   Pedidomayorista|Pedidomayorista[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PedidomayoristaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PedidomayoristaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Pedidomayorista A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpedidomayorista($key, $con = null)
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
     * @return                 Pedidomayorista A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpedidomayorista`, `idcliente`, `pedidomayorista_fechasolicitud`, `pedidomayorista_estatus`, `pedidomayorista_fechaentrega`, `pedidomayorista_nota` FROM `pedidomayorista` WHERE `idpedidomayorista` = :p0';
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
            $obj = new Pedidomayorista();
            $obj->hydrate($row);
            PedidomayoristaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Pedidomayorista|Pedidomayorista[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Pedidomayorista[]|mixed the list of results, formatted by the current formatter
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
     * @return PedidomayoristaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PedidomayoristaPeer::IDPEDIDOMAYORISTA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PedidomayoristaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PedidomayoristaPeer::IDPEDIDOMAYORISTA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idpedidomayorista column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpedidomayorista(1234); // WHERE idpedidomayorista = 1234
     * $query->filterByIdpedidomayorista(array(12, 34)); // WHERE idpedidomayorista IN (12, 34)
     * $query->filterByIdpedidomayorista(array('min' => 12)); // WHERE idpedidomayorista >= 12
     * $query->filterByIdpedidomayorista(array('max' => 12)); // WHERE idpedidomayorista <= 12
     * </code>
     *
     * @param     mixed $idpedidomayorista The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidomayoristaQuery The current query, for fluid interface
     */
    public function filterByIdpedidomayorista($idpedidomayorista = null, $comparison = null)
    {
        if (is_array($idpedidomayorista)) {
            $useMinMax = false;
            if (isset($idpedidomayorista['min'])) {
                $this->addUsingAlias(PedidomayoristaPeer::IDPEDIDOMAYORISTA, $idpedidomayorista['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpedidomayorista['max'])) {
                $this->addUsingAlias(PedidomayoristaPeer::IDPEDIDOMAYORISTA, $idpedidomayorista['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidomayoristaPeer::IDPEDIDOMAYORISTA, $idpedidomayorista, $comparison);
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
     * @return PedidomayoristaQuery The current query, for fluid interface
     */
    public function filterByIdcliente($idcliente = null, $comparison = null)
    {
        if (is_array($idcliente)) {
            $useMinMax = false;
            if (isset($idcliente['min'])) {
                $this->addUsingAlias(PedidomayoristaPeer::IDCLIENTE, $idcliente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcliente['max'])) {
                $this->addUsingAlias(PedidomayoristaPeer::IDCLIENTE, $idcliente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidomayoristaPeer::IDCLIENTE, $idcliente, $comparison);
    }

    /**
     * Filter the query on the pedidomayorista_fechasolicitud column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidomayoristaFechasolicitud('2011-03-14'); // WHERE pedidomayorista_fechasolicitud = '2011-03-14'
     * $query->filterByPedidomayoristaFechasolicitud('now'); // WHERE pedidomayorista_fechasolicitud = '2011-03-14'
     * $query->filterByPedidomayoristaFechasolicitud(array('max' => 'yesterday')); // WHERE pedidomayorista_fechasolicitud < '2011-03-13'
     * </code>
     *
     * @param     mixed $pedidomayoristaFechasolicitud The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidomayoristaQuery The current query, for fluid interface
     */
    public function filterByPedidomayoristaFechasolicitud($pedidomayoristaFechasolicitud = null, $comparison = null)
    {
        if (is_array($pedidomayoristaFechasolicitud)) {
            $useMinMax = false;
            if (isset($pedidomayoristaFechasolicitud['min'])) {
                $this->addUsingAlias(PedidomayoristaPeer::PEDIDOMAYORISTA_FECHASOLICITUD, $pedidomayoristaFechasolicitud['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pedidomayoristaFechasolicitud['max'])) {
                $this->addUsingAlias(PedidomayoristaPeer::PEDIDOMAYORISTA_FECHASOLICITUD, $pedidomayoristaFechasolicitud['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidomayoristaPeer::PEDIDOMAYORISTA_FECHASOLICITUD, $pedidomayoristaFechasolicitud, $comparison);
    }

    /**
     * Filter the query on the pedidomayorista_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidomayoristaEstatus('fooValue');   // WHERE pedidomayorista_estatus = 'fooValue'
     * $query->filterByPedidomayoristaEstatus('%fooValue%'); // WHERE pedidomayorista_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pedidomayoristaEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidomayoristaQuery The current query, for fluid interface
     */
    public function filterByPedidomayoristaEstatus($pedidomayoristaEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pedidomayoristaEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pedidomayoristaEstatus)) {
                $pedidomayoristaEstatus = str_replace('*', '%', $pedidomayoristaEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PedidomayoristaPeer::PEDIDOMAYORISTA_ESTATUS, $pedidomayoristaEstatus, $comparison);
    }

    /**
     * Filter the query on the pedidomayorista_fechaentrega column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidomayoristaFechaentrega('2011-03-14'); // WHERE pedidomayorista_fechaentrega = '2011-03-14'
     * $query->filterByPedidomayoristaFechaentrega('now'); // WHERE pedidomayorista_fechaentrega = '2011-03-14'
     * $query->filterByPedidomayoristaFechaentrega(array('max' => 'yesterday')); // WHERE pedidomayorista_fechaentrega < '2011-03-13'
     * </code>
     *
     * @param     mixed $pedidomayoristaFechaentrega The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidomayoristaQuery The current query, for fluid interface
     */
    public function filterByPedidomayoristaFechaentrega($pedidomayoristaFechaentrega = null, $comparison = null)
    {
        if (is_array($pedidomayoristaFechaentrega)) {
            $useMinMax = false;
            if (isset($pedidomayoristaFechaentrega['min'])) {
                $this->addUsingAlias(PedidomayoristaPeer::PEDIDOMAYORISTA_FECHAENTREGA, $pedidomayoristaFechaentrega['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pedidomayoristaFechaentrega['max'])) {
                $this->addUsingAlias(PedidomayoristaPeer::PEDIDOMAYORISTA_FECHAENTREGA, $pedidomayoristaFechaentrega['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidomayoristaPeer::PEDIDOMAYORISTA_FECHAENTREGA, $pedidomayoristaFechaentrega, $comparison);
    }

    /**
     * Filter the query on the pedidomayorista_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidomayoristaNota('fooValue');   // WHERE pedidomayorista_nota = 'fooValue'
     * $query->filterByPedidomayoristaNota('%fooValue%'); // WHERE pedidomayorista_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pedidomayoristaNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidomayoristaQuery The current query, for fluid interface
     */
    public function filterByPedidomayoristaNota($pedidomayoristaNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pedidomayoristaNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pedidomayoristaNota)) {
                $pedidomayoristaNota = str_replace('*', '%', $pedidomayoristaNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PedidomayoristaPeer::PEDIDOMAYORISTA_NOTA, $pedidomayoristaNota, $comparison);
    }

    /**
     * Filter the query by a related Cliente object
     *
     * @param   Cliente|PropelObjectCollection $cliente The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PedidomayoristaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCliente($cliente, $comparison = null)
    {
        if ($cliente instanceof Cliente) {
            return $this
                ->addUsingAlias(PedidomayoristaPeer::IDCLIENTE, $cliente->getIdcliente(), $comparison);
        } elseif ($cliente instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PedidomayoristaPeer::IDCLIENTE, $cliente->toKeyValue('PrimaryKey', 'Idcliente'), $comparison);
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
     * @return PedidomayoristaQuery The current query, for fluid interface
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
     * Filter the query by a related Pedidomayoristadetalle object
     *
     * @param   Pedidomayoristadetalle|PropelObjectCollection $pedidomayoristadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PedidomayoristaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPedidomayoristadetalle($pedidomayoristadetalle, $comparison = null)
    {
        if ($pedidomayoristadetalle instanceof Pedidomayoristadetalle) {
            return $this
                ->addUsingAlias(PedidomayoristaPeer::IDPEDIDOMAYORISTA, $pedidomayoristadetalle->getIdpedidomayorista(), $comparison);
        } elseif ($pedidomayoristadetalle instanceof PropelObjectCollection) {
            return $this
                ->usePedidomayoristadetalleQuery()
                ->filterByPrimaryKeys($pedidomayoristadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPedidomayoristadetalle() only accepts arguments of type Pedidomayoristadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pedidomayoristadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PedidomayoristaQuery The current query, for fluid interface
     */
    public function joinPedidomayoristadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pedidomayoristadetalle');

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
            $this->addJoinObject($join, 'Pedidomayoristadetalle');
        }

        return $this;
    }

    /**
     * Use the Pedidomayoristadetalle relation Pedidomayoristadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PedidomayoristadetalleQuery A secondary query class using the current class as primary query
     */
    public function usePedidomayoristadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPedidomayoristadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pedidomayoristadetalle', 'PedidomayoristadetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Pedidomayorista $pedidomayorista Object to remove from the list of results
     *
     * @return PedidomayoristaQuery The current query, for fluid interface
     */
    public function prune($pedidomayorista = null)
    {
        if ($pedidomayorista) {
            $this->addUsingAlias(PedidomayoristaPeer::IDPEDIDOMAYORISTA, $pedidomayorista->getIdpedidomayorista(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
