<?php


/**
 * Base class that represents a query for the 'comisiones' table.
 *
 *
 *
 * @method ComisionesQuery orderByIdcomisiones($order = Criteria::ASC) Order by the idcomisiones column
 * @method ComisionesQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method ComisionesQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method ComisionesQuery orderByComisionesCantidad($order = Criteria::ASC) Order by the comisiones_cantidad column
 * @method ComisionesQuery orderByComisionesFecha($order = Criteria::ASC) Order by the comisiones_fecha column
 *
 * @method ComisionesQuery groupByIdcomisiones() Group by the idcomisiones column
 * @method ComisionesQuery groupByIdsucursal() Group by the idsucursal column
 * @method ComisionesQuery groupByIdempleado() Group by the idempleado column
 * @method ComisionesQuery groupByComisionesCantidad() Group by the comisiones_cantidad column
 * @method ComisionesQuery groupByComisionesFecha() Group by the comisiones_fecha column
 *
 * @method ComisionesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ComisionesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ComisionesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Comisiones findOne(PropelPDO $con = null) Return the first Comisiones matching the query
 * @method Comisiones findOneOrCreate(PropelPDO $con = null) Return the first Comisiones matching the query, or a new Comisiones object populated from the query conditions when no match is found
 *
 * @method Comisiones findOneByIdsucursal(int $idsucursal) Return the first Comisiones filtered by the idsucursal column
 * @method Comisiones findOneByIdempleado(int $idempleado) Return the first Comisiones filtered by the idempleado column
 * @method Comisiones findOneByComisionesCantidad(int $comisiones_cantidad) Return the first Comisiones filtered by the comisiones_cantidad column
 * @method Comisiones findOneByComisionesFecha(string $comisiones_fecha) Return the first Comisiones filtered by the comisiones_fecha column
 *
 * @method array findByIdcomisiones(int $idcomisiones) Return Comisiones objects filtered by the idcomisiones column
 * @method array findByIdsucursal(int $idsucursal) Return Comisiones objects filtered by the idsucursal column
 * @method array findByIdempleado(int $idempleado) Return Comisiones objects filtered by the idempleado column
 * @method array findByComisionesCantidad(int $comisiones_cantidad) Return Comisiones objects filtered by the comisiones_cantidad column
 * @method array findByComisionesFecha(string $comisiones_fecha) Return Comisiones objects filtered by the comisiones_fecha column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseComisionesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseComisionesQuery object.
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
            $modelName = 'Comisiones';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ComisionesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ComisionesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ComisionesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ComisionesQuery) {
            return $criteria;
        }
        $query = new ComisionesQuery(null, null, $modelAlias);

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
     * @return   Comisiones|Comisiones[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ComisionesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ComisionesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Comisiones A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcomisiones($key, $con = null)
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
     * @return                 Comisiones A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcomisiones`, `idsucursal`, `idempleado`, `comisiones_cantidad`, `comisiones_fecha` FROM `comisiones` WHERE `idcomisiones` = :p0';
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
            $obj = new Comisiones();
            $obj->hydrate($row);
            ComisionesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Comisiones|Comisiones[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Comisiones[]|mixed the list of results, formatted by the current formatter
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
     * @return ComisionesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ComisionesPeer::IDCOMISIONES, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ComisionesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ComisionesPeer::IDCOMISIONES, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcomisiones column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcomisiones(1234); // WHERE idcomisiones = 1234
     * $query->filterByIdcomisiones(array(12, 34)); // WHERE idcomisiones IN (12, 34)
     * $query->filterByIdcomisiones(array('min' => 12)); // WHERE idcomisiones >= 12
     * $query->filterByIdcomisiones(array('max' => 12)); // WHERE idcomisiones <= 12
     * </code>
     *
     * @param     mixed $idcomisiones The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComisionesQuery The current query, for fluid interface
     */
    public function filterByIdcomisiones($idcomisiones = null, $comparison = null)
    {
        if (is_array($idcomisiones)) {
            $useMinMax = false;
            if (isset($idcomisiones['min'])) {
                $this->addUsingAlias(ComisionesPeer::IDCOMISIONES, $idcomisiones['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcomisiones['max'])) {
                $this->addUsingAlias(ComisionesPeer::IDCOMISIONES, $idcomisiones['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComisionesPeer::IDCOMISIONES, $idcomisiones, $comparison);
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
     * @param     mixed $idsucursal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComisionesQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(ComisionesPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(ComisionesPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComisionesPeer::IDSUCURSAL, $idsucursal, $comparison);
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
     * @param     mixed $idempleado The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComisionesQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(ComisionesPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(ComisionesPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComisionesPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the comisiones_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByComisionesCantidad(1234); // WHERE comisiones_cantidad = 1234
     * $query->filterByComisionesCantidad(array(12, 34)); // WHERE comisiones_cantidad IN (12, 34)
     * $query->filterByComisionesCantidad(array('min' => 12)); // WHERE comisiones_cantidad >= 12
     * $query->filterByComisionesCantidad(array('max' => 12)); // WHERE comisiones_cantidad <= 12
     * </code>
     *
     * @param     mixed $comisionesCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComisionesQuery The current query, for fluid interface
     */
    public function filterByComisionesCantidad($comisionesCantidad = null, $comparison = null)
    {
        if (is_array($comisionesCantidad)) {
            $useMinMax = false;
            if (isset($comisionesCantidad['min'])) {
                $this->addUsingAlias(ComisionesPeer::COMISIONES_CANTIDAD, $comisionesCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($comisionesCantidad['max'])) {
                $this->addUsingAlias(ComisionesPeer::COMISIONES_CANTIDAD, $comisionesCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComisionesPeer::COMISIONES_CANTIDAD, $comisionesCantidad, $comparison);
    }

    /**
     * Filter the query on the comisiones_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByComisionesFecha('2011-03-14'); // WHERE comisiones_fecha = '2011-03-14'
     * $query->filterByComisionesFecha('now'); // WHERE comisiones_fecha = '2011-03-14'
     * $query->filterByComisionesFecha(array('max' => 'yesterday')); // WHERE comisiones_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $comisionesFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ComisionesQuery The current query, for fluid interface
     */
    public function filterByComisionesFecha($comisionesFecha = null, $comparison = null)
    {
        if (is_array($comisionesFecha)) {
            $useMinMax = false;
            if (isset($comisionesFecha['min'])) {
                $this->addUsingAlias(ComisionesPeer::COMISIONES_FECHA, $comisionesFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($comisionesFecha['max'])) {
                $this->addUsingAlias(ComisionesPeer::COMISIONES_FECHA, $comisionesFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ComisionesPeer::COMISIONES_FECHA, $comisionesFecha, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Comisiones $comisiones Object to remove from the list of results
     *
     * @return ComisionesQuery The current query, for fluid interface
     */
    public function prune($comisiones = null)
    {
        if ($comisiones) {
            $this->addUsingAlias(ComisionesPeer::IDCOMISIONES, $comisiones->getIdcomisiones(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
