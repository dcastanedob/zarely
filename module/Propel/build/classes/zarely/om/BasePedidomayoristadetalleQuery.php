<?php


/**
 * Base class that represents a query for the 'pedidomayoristadetalle' table.
 *
 *
 *
 * @method PedidomayoristadetalleQuery orderByIdpedidomayoristadetalle($order = Criteria::ASC) Order by the idpedidomayoristadetalle column
 * @method PedidomayoristadetalleQuery orderByIdpedidomayorista($order = Criteria::ASC) Order by the idpedidomayorista column
 * @method PedidomayoristadetalleQuery orderByIdproductovariante($order = Criteria::ASC) Order by the idproductovariante column
 * @method PedidomayoristadetalleQuery orderByIdproducto($order = Criteria::ASC) Order by the idproducto column
 * @method PedidomayoristadetalleQuery orderByPedidomayoristadetalleCantidad($order = Criteria::ASC) Order by the pedidomayoristadetalle_cantidad column
 * @method PedidomayoristadetalleQuery orderByPedidomayoristadetalleEstatus($order = Criteria::ASC) Order by the pedidomayoristadetalle_estatus column
 * @method PedidomayoristadetalleQuery orderByPedidomayoristadetalleFecha($order = Criteria::ASC) Order by the pedidomayoristadetalle_fecha column
 *
 * @method PedidomayoristadetalleQuery groupByIdpedidomayoristadetalle() Group by the idpedidomayoristadetalle column
 * @method PedidomayoristadetalleQuery groupByIdpedidomayorista() Group by the idpedidomayorista column
 * @method PedidomayoristadetalleQuery groupByIdproductovariante() Group by the idproductovariante column
 * @method PedidomayoristadetalleQuery groupByIdproducto() Group by the idproducto column
 * @method PedidomayoristadetalleQuery groupByPedidomayoristadetalleCantidad() Group by the pedidomayoristadetalle_cantidad column
 * @method PedidomayoristadetalleQuery groupByPedidomayoristadetalleEstatus() Group by the pedidomayoristadetalle_estatus column
 * @method PedidomayoristadetalleQuery groupByPedidomayoristadetalleFecha() Group by the pedidomayoristadetalle_fecha column
 *
 * @method PedidomayoristadetalleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PedidomayoristadetalleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PedidomayoristadetalleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PedidomayoristadetalleQuery leftJoinPedidomayorista($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pedidomayorista relation
 * @method PedidomayoristadetalleQuery rightJoinPedidomayorista($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pedidomayorista relation
 * @method PedidomayoristadetalleQuery innerJoinPedidomayorista($relationAlias = null) Adds a INNER JOIN clause to the query using the Pedidomayorista relation
 *
 * @method PedidomayoristadetalleQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method PedidomayoristadetalleQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method PedidomayoristadetalleQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method PedidomayoristadetalleQuery leftJoinProductovariante($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productovariante relation
 * @method PedidomayoristadetalleQuery rightJoinProductovariante($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productovariante relation
 * @method PedidomayoristadetalleQuery innerJoinProductovariante($relationAlias = null) Adds a INNER JOIN clause to the query using the Productovariante relation
 *
 * @method Pedidomayoristadetalle findOne(PropelPDO $con = null) Return the first Pedidomayoristadetalle matching the query
 * @method Pedidomayoristadetalle findOneOrCreate(PropelPDO $con = null) Return the first Pedidomayoristadetalle matching the query, or a new Pedidomayoristadetalle object populated from the query conditions when no match is found
 *
 * @method Pedidomayoristadetalle findOneByIdpedidomayorista(int $idpedidomayorista) Return the first Pedidomayoristadetalle filtered by the idpedidomayorista column
 * @method Pedidomayoristadetalle findOneByIdproductovariante(int $idproductovariante) Return the first Pedidomayoristadetalle filtered by the idproductovariante column
 * @method Pedidomayoristadetalle findOneByIdproducto(int $idproducto) Return the first Pedidomayoristadetalle filtered by the idproducto column
 * @method Pedidomayoristadetalle findOneByPedidomayoristadetalleCantidad(int $pedidomayoristadetalle_cantidad) Return the first Pedidomayoristadetalle filtered by the pedidomayoristadetalle_cantidad column
 * @method Pedidomayoristadetalle findOneByPedidomayoristadetalleEstatus(string $pedidomayoristadetalle_estatus) Return the first Pedidomayoristadetalle filtered by the pedidomayoristadetalle_estatus column
 * @method Pedidomayoristadetalle findOneByPedidomayoristadetalleFecha(string $pedidomayoristadetalle_fecha) Return the first Pedidomayoristadetalle filtered by the pedidomayoristadetalle_fecha column
 *
 * @method array findByIdpedidomayoristadetalle(int $idpedidomayoristadetalle) Return Pedidomayoristadetalle objects filtered by the idpedidomayoristadetalle column
 * @method array findByIdpedidomayorista(int $idpedidomayorista) Return Pedidomayoristadetalle objects filtered by the idpedidomayorista column
 * @method array findByIdproductovariante(int $idproductovariante) Return Pedidomayoristadetalle objects filtered by the idproductovariante column
 * @method array findByIdproducto(int $idproducto) Return Pedidomayoristadetalle objects filtered by the idproducto column
 * @method array findByPedidomayoristadetalleCantidad(int $pedidomayoristadetalle_cantidad) Return Pedidomayoristadetalle objects filtered by the pedidomayoristadetalle_cantidad column
 * @method array findByPedidomayoristadetalleEstatus(string $pedidomayoristadetalle_estatus) Return Pedidomayoristadetalle objects filtered by the pedidomayoristadetalle_estatus column
 * @method array findByPedidomayoristadetalleFecha(string $pedidomayoristadetalle_fecha) Return Pedidomayoristadetalle objects filtered by the pedidomayoristadetalle_fecha column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BasePedidomayoristadetalleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePedidomayoristadetalleQuery object.
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
            $modelName = 'Pedidomayoristadetalle';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PedidomayoristadetalleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PedidomayoristadetalleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PedidomayoristadetalleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PedidomayoristadetalleQuery) {
            return $criteria;
        }
        $query = new PedidomayoristadetalleQuery(null, null, $modelAlias);

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
     * @return   Pedidomayoristadetalle|Pedidomayoristadetalle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PedidomayoristadetallePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PedidomayoristadetallePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Pedidomayoristadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdpedidomayoristadetalle($key, $con = null)
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
     * @return                 Pedidomayoristadetalle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idpedidomayoristadetalle`, `idpedidomayorista`, `idproductovariante`, `idproducto`, `pedidomayoristadetalle_cantidad`, `pedidomayoristadetalle_estatus`, `pedidomayoristadetalle_fecha` FROM `pedidomayoristadetalle` WHERE `idpedidomayoristadetalle` = :p0';
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
            $obj = new Pedidomayoristadetalle();
            $obj->hydrate($row);
            PedidomayoristadetallePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Pedidomayoristadetalle|Pedidomayoristadetalle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Pedidomayoristadetalle[]|mixed the list of results, formatted by the current formatter
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
     * @return PedidomayoristadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PedidomayoristadetallePeer::IDPEDIDOMAYORISTADETALLE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PedidomayoristadetalleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PedidomayoristadetallePeer::IDPEDIDOMAYORISTADETALLE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idpedidomayoristadetalle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpedidomayoristadetalle(1234); // WHERE idpedidomayoristadetalle = 1234
     * $query->filterByIdpedidomayoristadetalle(array(12, 34)); // WHERE idpedidomayoristadetalle IN (12, 34)
     * $query->filterByIdpedidomayoristadetalle(array('min' => 12)); // WHERE idpedidomayoristadetalle >= 12
     * $query->filterByIdpedidomayoristadetalle(array('max' => 12)); // WHERE idpedidomayoristadetalle <= 12
     * </code>
     *
     * @param     mixed $idpedidomayoristadetalle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidomayoristadetalleQuery The current query, for fluid interface
     */
    public function filterByIdpedidomayoristadetalle($idpedidomayoristadetalle = null, $comparison = null)
    {
        if (is_array($idpedidomayoristadetalle)) {
            $useMinMax = false;
            if (isset($idpedidomayoristadetalle['min'])) {
                $this->addUsingAlias(PedidomayoristadetallePeer::IDPEDIDOMAYORISTADETALLE, $idpedidomayoristadetalle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpedidomayoristadetalle['max'])) {
                $this->addUsingAlias(PedidomayoristadetallePeer::IDPEDIDOMAYORISTADETALLE, $idpedidomayoristadetalle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidomayoristadetallePeer::IDPEDIDOMAYORISTADETALLE, $idpedidomayoristadetalle, $comparison);
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
     * @see       filterByPedidomayorista()
     *
     * @param     mixed $idpedidomayorista The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidomayoristadetalleQuery The current query, for fluid interface
     */
    public function filterByIdpedidomayorista($idpedidomayorista = null, $comparison = null)
    {
        if (is_array($idpedidomayorista)) {
            $useMinMax = false;
            if (isset($idpedidomayorista['min'])) {
                $this->addUsingAlias(PedidomayoristadetallePeer::IDPEDIDOMAYORISTA, $idpedidomayorista['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpedidomayorista['max'])) {
                $this->addUsingAlias(PedidomayoristadetallePeer::IDPEDIDOMAYORISTA, $idpedidomayorista['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidomayoristadetallePeer::IDPEDIDOMAYORISTA, $idpedidomayorista, $comparison);
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
     * @return PedidomayoristadetalleQuery The current query, for fluid interface
     */
    public function filterByIdproductovariante($idproductovariante = null, $comparison = null)
    {
        if (is_array($idproductovariante)) {
            $useMinMax = false;
            if (isset($idproductovariante['min'])) {
                $this->addUsingAlias(PedidomayoristadetallePeer::IDPRODUCTOVARIANTE, $idproductovariante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproductovariante['max'])) {
                $this->addUsingAlias(PedidomayoristadetallePeer::IDPRODUCTOVARIANTE, $idproductovariante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidomayoristadetallePeer::IDPRODUCTOVARIANTE, $idproductovariante, $comparison);
    }

    /**
     * Filter the query on the idproducto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdproducto(1234); // WHERE idproducto = 1234
     * $query->filterByIdproducto(array(12, 34)); // WHERE idproducto IN (12, 34)
     * $query->filterByIdproducto(array('min' => 12)); // WHERE idproducto >= 12
     * $query->filterByIdproducto(array('max' => 12)); // WHERE idproducto <= 12
     * </code>
     *
     * @see       filterByProducto()
     *
     * @param     mixed $idproducto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidomayoristadetalleQuery The current query, for fluid interface
     */
    public function filterByIdproducto($idproducto = null, $comparison = null)
    {
        if (is_array($idproducto)) {
            $useMinMax = false;
            if (isset($idproducto['min'])) {
                $this->addUsingAlias(PedidomayoristadetallePeer::IDPRODUCTO, $idproducto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproducto['max'])) {
                $this->addUsingAlias(PedidomayoristadetallePeer::IDPRODUCTO, $idproducto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidomayoristadetallePeer::IDPRODUCTO, $idproducto, $comparison);
    }

    /**
     * Filter the query on the pedidomayoristadetalle_cantidad column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidomayoristadetalleCantidad(1234); // WHERE pedidomayoristadetalle_cantidad = 1234
     * $query->filterByPedidomayoristadetalleCantidad(array(12, 34)); // WHERE pedidomayoristadetalle_cantidad IN (12, 34)
     * $query->filterByPedidomayoristadetalleCantidad(array('min' => 12)); // WHERE pedidomayoristadetalle_cantidad >= 12
     * $query->filterByPedidomayoristadetalleCantidad(array('max' => 12)); // WHERE pedidomayoristadetalle_cantidad <= 12
     * </code>
     *
     * @param     mixed $pedidomayoristadetalleCantidad The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidomayoristadetalleQuery The current query, for fluid interface
     */
    public function filterByPedidomayoristadetalleCantidad($pedidomayoristadetalleCantidad = null, $comparison = null)
    {
        if (is_array($pedidomayoristadetalleCantidad)) {
            $useMinMax = false;
            if (isset($pedidomayoristadetalleCantidad['min'])) {
                $this->addUsingAlias(PedidomayoristadetallePeer::PEDIDOMAYORISTADETALLE_CANTIDAD, $pedidomayoristadetalleCantidad['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pedidomayoristadetalleCantidad['max'])) {
                $this->addUsingAlias(PedidomayoristadetallePeer::PEDIDOMAYORISTADETALLE_CANTIDAD, $pedidomayoristadetalleCantidad['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidomayoristadetallePeer::PEDIDOMAYORISTADETALLE_CANTIDAD, $pedidomayoristadetalleCantidad, $comparison);
    }

    /**
     * Filter the query on the pedidomayoristadetalle_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidomayoristadetalleEstatus('fooValue');   // WHERE pedidomayoristadetalle_estatus = 'fooValue'
     * $query->filterByPedidomayoristadetalleEstatus('%fooValue%'); // WHERE pedidomayoristadetalle_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pedidomayoristadetalleEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidomayoristadetalleQuery The current query, for fluid interface
     */
    public function filterByPedidomayoristadetalleEstatus($pedidomayoristadetalleEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pedidomayoristadetalleEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pedidomayoristadetalleEstatus)) {
                $pedidomayoristadetalleEstatus = str_replace('*', '%', $pedidomayoristadetalleEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PedidomayoristadetallePeer::PEDIDOMAYORISTADETALLE_ESTATUS, $pedidomayoristadetalleEstatus, $comparison);
    }

    /**
     * Filter the query on the pedidomayoristadetalle_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByPedidomayoristadetalleFecha('2011-03-14'); // WHERE pedidomayoristadetalle_fecha = '2011-03-14'
     * $query->filterByPedidomayoristadetalleFecha('now'); // WHERE pedidomayoristadetalle_fecha = '2011-03-14'
     * $query->filterByPedidomayoristadetalleFecha(array('max' => 'yesterday')); // WHERE pedidomayoristadetalle_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $pedidomayoristadetalleFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PedidomayoristadetalleQuery The current query, for fluid interface
     */
    public function filterByPedidomayoristadetalleFecha($pedidomayoristadetalleFecha = null, $comparison = null)
    {
        if (is_array($pedidomayoristadetalleFecha)) {
            $useMinMax = false;
            if (isset($pedidomayoristadetalleFecha['min'])) {
                $this->addUsingAlias(PedidomayoristadetallePeer::PEDIDOMAYORISTADETALLE_FECHA, $pedidomayoristadetalleFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pedidomayoristadetalleFecha['max'])) {
                $this->addUsingAlias(PedidomayoristadetallePeer::PEDIDOMAYORISTADETALLE_FECHA, $pedidomayoristadetalleFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PedidomayoristadetallePeer::PEDIDOMAYORISTADETALLE_FECHA, $pedidomayoristadetalleFecha, $comparison);
    }

    /**
     * Filter the query by a related Pedidomayorista object
     *
     * @param   Pedidomayorista|PropelObjectCollection $pedidomayorista The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PedidomayoristadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPedidomayorista($pedidomayorista, $comparison = null)
    {
        if ($pedidomayorista instanceof Pedidomayorista) {
            return $this
                ->addUsingAlias(PedidomayoristadetallePeer::IDPEDIDOMAYORISTA, $pedidomayorista->getIdpedidomayorista(), $comparison);
        } elseif ($pedidomayorista instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PedidomayoristadetallePeer::IDPEDIDOMAYORISTA, $pedidomayorista->toKeyValue('PrimaryKey', 'Idpedidomayorista'), $comparison);
        } else {
            throw new PropelException('filterByPedidomayorista() only accepts arguments of type Pedidomayorista or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pedidomayorista relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PedidomayoristadetalleQuery The current query, for fluid interface
     */
    public function joinPedidomayorista($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pedidomayorista');

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
            $this->addJoinObject($join, 'Pedidomayorista');
        }

        return $this;
    }

    /**
     * Use the Pedidomayorista relation Pedidomayorista object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PedidomayoristaQuery A secondary query class using the current class as primary query
     */
    public function usePedidomayoristaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPedidomayorista($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pedidomayorista', 'PedidomayoristaQuery');
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PedidomayoristadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(PedidomayoristadetallePeer::IDPRODUCTO, $producto->getIdproducto(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PedidomayoristadetallePeer::IDPRODUCTO, $producto->toKeyValue('PrimaryKey', 'Idproducto'), $comparison);
        } else {
            throw new PropelException('filterByProducto() only accepts arguments of type Producto or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Producto relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return PedidomayoristadetalleQuery The current query, for fluid interface
     */
    public function joinProducto($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Producto');

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
            $this->addJoinObject($join, 'Producto');
        }

        return $this;
    }

    /**
     * Use the Producto relation Producto object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductoQuery A secondary query class using the current class as primary query
     */
    public function useProductoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProducto($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Producto', 'ProductoQuery');
    }

    /**
     * Filter the query by a related Productovariante object
     *
     * @param   Productovariante|PropelObjectCollection $productovariante The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 PedidomayoristadetalleQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductovariante($productovariante, $comparison = null)
    {
        if ($productovariante instanceof Productovariante) {
            return $this
                ->addUsingAlias(PedidomayoristadetallePeer::IDPRODUCTOVARIANTE, $productovariante->getIdproductovariante(), $comparison);
        } elseif ($productovariante instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(PedidomayoristadetallePeer::IDPRODUCTOVARIANTE, $productovariante->toKeyValue('PrimaryKey', 'Idproductovariante'), $comparison);
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
     * @return PedidomayoristadetalleQuery The current query, for fluid interface
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
     * @param   Pedidomayoristadetalle $pedidomayoristadetalle Object to remove from the list of results
     *
     * @return PedidomayoristadetalleQuery The current query, for fluid interface
     */
    public function prune($pedidomayoristadetalle = null)
    {
        if ($pedidomayoristadetalle) {
            $this->addUsingAlias(PedidomayoristadetallePeer::IDPEDIDOMAYORISTADETALLE, $pedidomayoristadetalle->getIdpedidomayoristadetalle(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
