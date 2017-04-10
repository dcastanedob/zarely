<?php


/**
 * Base class that represents a query for the 'transferencia' table.
 *
 *
 *
 * @method TransferenciaQuery orderByIdtransferencia($order = Criteria::ASC) Order by the idtransferencia column
 * @method TransferenciaQuery orderByIdsucursalorigen($order = Criteria::ASC) Order by the idsucursalorigen column
 * @method TransferenciaQuery orderByIdsucursaldestino($order = Criteria::ASC) Order by the idsucursaldestino column
 * @method TransferenciaQuery orderByTransferenciaFecha($order = Criteria::ASC) Order by the transferencia_fecha column
 * @method TransferenciaQuery orderByTransferenciaEstatus($order = Criteria::ASC) Order by the transferencia_estatus column
 * @method TransferenciaQuery orderByIdempleadocreador($order = Criteria::ASC) Order by the idempleadocreador column
 * @method TransferenciaQuery orderByIdempleadoreceptor($order = Criteria::ASC) Order by the idempleadoreceptor column
 * @method TransferenciaQuery orderByTransferenciaNota($order = Criteria::ASC) Order by the transferencia_nota column
 * @method TransferenciaQuery orderByTransferenciaFecharecepcion($order = Criteria::ASC) Order by the transferencia_fecharecepcion column
 *
 * @method TransferenciaQuery groupByIdtransferencia() Group by the idtransferencia column
 * @method TransferenciaQuery groupByIdsucursalorigen() Group by the idsucursalorigen column
 * @method TransferenciaQuery groupByIdsucursaldestino() Group by the idsucursaldestino column
 * @method TransferenciaQuery groupByTransferenciaFecha() Group by the transferencia_fecha column
 * @method TransferenciaQuery groupByTransferenciaEstatus() Group by the transferencia_estatus column
 * @method TransferenciaQuery groupByIdempleadocreador() Group by the idempleadocreador column
 * @method TransferenciaQuery groupByIdempleadoreceptor() Group by the idempleadoreceptor column
 * @method TransferenciaQuery groupByTransferenciaNota() Group by the transferencia_nota column
 * @method TransferenciaQuery groupByTransferenciaFecharecepcion() Group by the transferencia_fecharecepcion column
 *
 * @method TransferenciaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TransferenciaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TransferenciaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TransferenciaQuery leftJoinEmpleadoRelatedByIdempleadocreador($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdempleadocreador relation
 * @method TransferenciaQuery rightJoinEmpleadoRelatedByIdempleadocreador($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdempleadocreador relation
 * @method TransferenciaQuery innerJoinEmpleadoRelatedByIdempleadocreador($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdempleadocreador relation
 *
 * @method TransferenciaQuery leftJoinEmpleadoRelatedByIdempleadoreceptor($relationAlias = null) Adds a LEFT JOIN clause to the query using the EmpleadoRelatedByIdempleadoreceptor relation
 * @method TransferenciaQuery rightJoinEmpleadoRelatedByIdempleadoreceptor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the EmpleadoRelatedByIdempleadoreceptor relation
 * @method TransferenciaQuery innerJoinEmpleadoRelatedByIdempleadoreceptor($relationAlias = null) Adds a INNER JOIN clause to the query using the EmpleadoRelatedByIdempleadoreceptor relation
 *
 * @method TransferenciaQuery leftJoinSucursalRelatedByIdsucursaldestino($relationAlias = null) Adds a LEFT JOIN clause to the query using the SucursalRelatedByIdsucursaldestino relation
 * @method TransferenciaQuery rightJoinSucursalRelatedByIdsucursaldestino($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SucursalRelatedByIdsucursaldestino relation
 * @method TransferenciaQuery innerJoinSucursalRelatedByIdsucursaldestino($relationAlias = null) Adds a INNER JOIN clause to the query using the SucursalRelatedByIdsucursaldestino relation
 *
 * @method TransferenciaQuery leftJoinSucursalRelatedByIdsucursalorigen($relationAlias = null) Adds a LEFT JOIN clause to the query using the SucursalRelatedByIdsucursalorigen relation
 * @method TransferenciaQuery rightJoinSucursalRelatedByIdsucursalorigen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SucursalRelatedByIdsucursalorigen relation
 * @method TransferenciaQuery innerJoinSucursalRelatedByIdsucursalorigen($relationAlias = null) Adds a INNER JOIN clause to the query using the SucursalRelatedByIdsucursalorigen relation
 *
 * @method TransferenciaQuery leftJoinTransferenciadetalle($relationAlias = null) Adds a LEFT JOIN clause to the query using the Transferenciadetalle relation
 * @method TransferenciaQuery rightJoinTransferenciadetalle($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Transferenciadetalle relation
 * @method TransferenciaQuery innerJoinTransferenciadetalle($relationAlias = null) Adds a INNER JOIN clause to the query using the Transferenciadetalle relation
 *
 * @method Transferencia findOne(PropelPDO $con = null) Return the first Transferencia matching the query
 * @method Transferencia findOneOrCreate(PropelPDO $con = null) Return the first Transferencia matching the query, or a new Transferencia object populated from the query conditions when no match is found
 *
 * @method Transferencia findOneByIdsucursalorigen(int $idsucursalorigen) Return the first Transferencia filtered by the idsucursalorigen column
 * @method Transferencia findOneByIdsucursaldestino(int $idsucursaldestino) Return the first Transferencia filtered by the idsucursaldestino column
 * @method Transferencia findOneByTransferenciaFecha(string $transferencia_fecha) Return the first Transferencia filtered by the transferencia_fecha column
 * @method Transferencia findOneByTransferenciaEstatus(string $transferencia_estatus) Return the first Transferencia filtered by the transferencia_estatus column
 * @method Transferencia findOneByIdempleadocreador(int $idempleadocreador) Return the first Transferencia filtered by the idempleadocreador column
 * @method Transferencia findOneByIdempleadoreceptor(int $idempleadoreceptor) Return the first Transferencia filtered by the idempleadoreceptor column
 * @method Transferencia findOneByTransferenciaNota(string $transferencia_nota) Return the first Transferencia filtered by the transferencia_nota column
 * @method Transferencia findOneByTransferenciaFecharecepcion(string $transferencia_fecharecepcion) Return the first Transferencia filtered by the transferencia_fecharecepcion column
 *
 * @method array findByIdtransferencia(int $idtransferencia) Return Transferencia objects filtered by the idtransferencia column
 * @method array findByIdsucursalorigen(int $idsucursalorigen) Return Transferencia objects filtered by the idsucursalorigen column
 * @method array findByIdsucursaldestino(int $idsucursaldestino) Return Transferencia objects filtered by the idsucursaldestino column
 * @method array findByTransferenciaFecha(string $transferencia_fecha) Return Transferencia objects filtered by the transferencia_fecha column
 * @method array findByTransferenciaEstatus(string $transferencia_estatus) Return Transferencia objects filtered by the transferencia_estatus column
 * @method array findByIdempleadocreador(int $idempleadocreador) Return Transferencia objects filtered by the idempleadocreador column
 * @method array findByIdempleadoreceptor(int $idempleadoreceptor) Return Transferencia objects filtered by the idempleadoreceptor column
 * @method array findByTransferenciaNota(string $transferencia_nota) Return Transferencia objects filtered by the transferencia_nota column
 * @method array findByTransferenciaFecharecepcion(string $transferencia_fecharecepcion) Return Transferencia objects filtered by the transferencia_fecharecepcion column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseTransferenciaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTransferenciaQuery object.
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
            $modelName = 'Transferencia';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TransferenciaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TransferenciaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TransferenciaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TransferenciaQuery) {
            return $criteria;
        }
        $query = new TransferenciaQuery(null, null, $modelAlias);

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
     * @return   Transferencia|Transferencia[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TransferenciaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TransferenciaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Transferencia A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdtransferencia($key, $con = null)
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
     * @return                 Transferencia A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idtransferencia`, `idsucursalorigen`, `idsucursaldestino`, `transferencia_fecha`, `transferencia_estatus`, `idempleadocreador`, `idempleadoreceptor`, `transferencia_nota`, `transferencia_fecharecepcion` FROM `transferencia` WHERE `idtransferencia` = :p0';
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
            $obj = new Transferencia();
            $obj->hydrate($row);
            TransferenciaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Transferencia|Transferencia[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Transferencia[]|mixed the list of results, formatted by the current formatter
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
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TransferenciaPeer::IDTRANSFERENCIA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TransferenciaPeer::IDTRANSFERENCIA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idtransferencia column
     *
     * Example usage:
     * <code>
     * $query->filterByIdtransferencia(1234); // WHERE idtransferencia = 1234
     * $query->filterByIdtransferencia(array(12, 34)); // WHERE idtransferencia IN (12, 34)
     * $query->filterByIdtransferencia(array('min' => 12)); // WHERE idtransferencia >= 12
     * $query->filterByIdtransferencia(array('max' => 12)); // WHERE idtransferencia <= 12
     * </code>
     *
     * @param     mixed $idtransferencia The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByIdtransferencia($idtransferencia = null, $comparison = null)
    {
        if (is_array($idtransferencia)) {
            $useMinMax = false;
            if (isset($idtransferencia['min'])) {
                $this->addUsingAlias(TransferenciaPeer::IDTRANSFERENCIA, $idtransferencia['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idtransferencia['max'])) {
                $this->addUsingAlias(TransferenciaPeer::IDTRANSFERENCIA, $idtransferencia['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::IDTRANSFERENCIA, $idtransferencia, $comparison);
    }

    /**
     * Filter the query on the idsucursalorigen column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsucursalorigen(1234); // WHERE idsucursalorigen = 1234
     * $query->filterByIdsucursalorigen(array(12, 34)); // WHERE idsucursalorigen IN (12, 34)
     * $query->filterByIdsucursalorigen(array('min' => 12)); // WHERE idsucursalorigen >= 12
     * $query->filterByIdsucursalorigen(array('max' => 12)); // WHERE idsucursalorigen <= 12
     * </code>
     *
     * @see       filterBySucursalRelatedByIdsucursalorigen()
     *
     * @param     mixed $idsucursalorigen The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByIdsucursalorigen($idsucursalorigen = null, $comparison = null)
    {
        if (is_array($idsucursalorigen)) {
            $useMinMax = false;
            if (isset($idsucursalorigen['min'])) {
                $this->addUsingAlias(TransferenciaPeer::IDSUCURSALORIGEN, $idsucursalorigen['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursalorigen['max'])) {
                $this->addUsingAlias(TransferenciaPeer::IDSUCURSALORIGEN, $idsucursalorigen['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::IDSUCURSALORIGEN, $idsucursalorigen, $comparison);
    }

    /**
     * Filter the query on the idsucursaldestino column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsucursaldestino(1234); // WHERE idsucursaldestino = 1234
     * $query->filterByIdsucursaldestino(array(12, 34)); // WHERE idsucursaldestino IN (12, 34)
     * $query->filterByIdsucursaldestino(array('min' => 12)); // WHERE idsucursaldestino >= 12
     * $query->filterByIdsucursaldestino(array('max' => 12)); // WHERE idsucursaldestino <= 12
     * </code>
     *
     * @see       filterBySucursalRelatedByIdsucursaldestino()
     *
     * @param     mixed $idsucursaldestino The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByIdsucursaldestino($idsucursaldestino = null, $comparison = null)
    {
        if (is_array($idsucursaldestino)) {
            $useMinMax = false;
            if (isset($idsucursaldestino['min'])) {
                $this->addUsingAlias(TransferenciaPeer::IDSUCURSALDESTINO, $idsucursaldestino['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursaldestino['max'])) {
                $this->addUsingAlias(TransferenciaPeer::IDSUCURSALDESTINO, $idsucursaldestino['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::IDSUCURSALDESTINO, $idsucursaldestino, $comparison);
    }

    /**
     * Filter the query on the transferencia_fecha column
     *
     * Example usage:
     * <code>
     * $query->filterByTransferenciaFecha('2011-03-14'); // WHERE transferencia_fecha = '2011-03-14'
     * $query->filterByTransferenciaFecha('now'); // WHERE transferencia_fecha = '2011-03-14'
     * $query->filterByTransferenciaFecha(array('max' => 'yesterday')); // WHERE transferencia_fecha < '2011-03-13'
     * </code>
     *
     * @param     mixed $transferenciaFecha The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByTransferenciaFecha($transferenciaFecha = null, $comparison = null)
    {
        if (is_array($transferenciaFecha)) {
            $useMinMax = false;
            if (isset($transferenciaFecha['min'])) {
                $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_FECHA, $transferenciaFecha['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($transferenciaFecha['max'])) {
                $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_FECHA, $transferenciaFecha['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_FECHA, $transferenciaFecha, $comparison);
    }

    /**
     * Filter the query on the transferencia_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByTransferenciaEstatus('fooValue');   // WHERE transferencia_estatus = 'fooValue'
     * $query->filterByTransferenciaEstatus('%fooValue%'); // WHERE transferencia_estatus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $transferenciaEstatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByTransferenciaEstatus($transferenciaEstatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($transferenciaEstatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $transferenciaEstatus)) {
                $transferenciaEstatus = str_replace('*', '%', $transferenciaEstatus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_ESTATUS, $transferenciaEstatus, $comparison);
    }

    /**
     * Filter the query on the idempleadocreador column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadocreador(1234); // WHERE idempleadocreador = 1234
     * $query->filterByIdempleadocreador(array(12, 34)); // WHERE idempleadocreador IN (12, 34)
     * $query->filterByIdempleadocreador(array('min' => 12)); // WHERE idempleadocreador >= 12
     * $query->filterByIdempleadocreador(array('max' => 12)); // WHERE idempleadocreador <= 12
     * </code>
     *
     * @see       filterByEmpleadoRelatedByIdempleadocreador()
     *
     * @param     mixed $idempleadocreador The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByIdempleadocreador($idempleadocreador = null, $comparison = null)
    {
        if (is_array($idempleadocreador)) {
            $useMinMax = false;
            if (isset($idempleadocreador['min'])) {
                $this->addUsingAlias(TransferenciaPeer::IDEMPLEADOCREADOR, $idempleadocreador['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadocreador['max'])) {
                $this->addUsingAlias(TransferenciaPeer::IDEMPLEADOCREADOR, $idempleadocreador['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::IDEMPLEADOCREADOR, $idempleadocreador, $comparison);
    }

    /**
     * Filter the query on the idempleadoreceptor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdempleadoreceptor(1234); // WHERE idempleadoreceptor = 1234
     * $query->filterByIdempleadoreceptor(array(12, 34)); // WHERE idempleadoreceptor IN (12, 34)
     * $query->filterByIdempleadoreceptor(array('min' => 12)); // WHERE idempleadoreceptor >= 12
     * $query->filterByIdempleadoreceptor(array('max' => 12)); // WHERE idempleadoreceptor <= 12
     * </code>
     *
     * @see       filterByEmpleadoRelatedByIdempleadoreceptor()
     *
     * @param     mixed $idempleadoreceptor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByIdempleadoreceptor($idempleadoreceptor = null, $comparison = null)
    {
        if (is_array($idempleadoreceptor)) {
            $useMinMax = false;
            if (isset($idempleadoreceptor['min'])) {
                $this->addUsingAlias(TransferenciaPeer::IDEMPLEADORECEPTOR, $idempleadoreceptor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleadoreceptor['max'])) {
                $this->addUsingAlias(TransferenciaPeer::IDEMPLEADORECEPTOR, $idempleadoreceptor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::IDEMPLEADORECEPTOR, $idempleadoreceptor, $comparison);
    }

    /**
     * Filter the query on the transferencia_nota column
     *
     * Example usage:
     * <code>
     * $query->filterByTransferenciaNota('fooValue');   // WHERE transferencia_nota = 'fooValue'
     * $query->filterByTransferenciaNota('%fooValue%'); // WHERE transferencia_nota LIKE '%fooValue%'
     * </code>
     *
     * @param     string $transferenciaNota The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByTransferenciaNota($transferenciaNota = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($transferenciaNota)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $transferenciaNota)) {
                $transferenciaNota = str_replace('*', '%', $transferenciaNota);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_NOTA, $transferenciaNota, $comparison);
    }

    /**
     * Filter the query on the transferencia_fecharecepcion column
     *
     * Example usage:
     * <code>
     * $query->filterByTransferenciaFecharecepcion('2011-03-14'); // WHERE transferencia_fecharecepcion = '2011-03-14'
     * $query->filterByTransferenciaFecharecepcion('now'); // WHERE transferencia_fecharecepcion = '2011-03-14'
     * $query->filterByTransferenciaFecharecepcion(array('max' => 'yesterday')); // WHERE transferencia_fecharecepcion < '2011-03-13'
     * </code>
     *
     * @param     mixed $transferenciaFecharecepcion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function filterByTransferenciaFecharecepcion($transferenciaFecharecepcion = null, $comparison = null)
    {
        if (is_array($transferenciaFecharecepcion)) {
            $useMinMax = false;
            if (isset($transferenciaFecharecepcion['min'])) {
                $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_FECHARECEPCION, $transferenciaFecharecepcion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($transferenciaFecharecepcion['max'])) {
                $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_FECHARECEPCION, $transferenciaFecharecepcion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TransferenciaPeer::TRANSFERENCIA_FECHARECEPCION, $transferenciaFecharecepcion, $comparison);
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TransferenciaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoRelatedByIdempleadocreador($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(TransferenciaPeer::IDEMPLEADOCREADOR, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TransferenciaPeer::IDEMPLEADOCREADOR, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleadoRelatedByIdempleadocreador() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpleadoRelatedByIdempleadocreador relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function joinEmpleadoRelatedByIdempleadocreador($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpleadoRelatedByIdempleadocreador');

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
            $this->addJoinObject($join, 'EmpleadoRelatedByIdempleadocreador');
        }

        return $this;
    }

    /**
     * Use the EmpleadoRelatedByIdempleadocreador relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoRelatedByIdempleadocreadorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoRelatedByIdempleadocreador($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpleadoRelatedByIdempleadocreador', 'EmpleadoQuery');
    }

    /**
     * Filter the query by a related Empleado object
     *
     * @param   Empleado|PropelObjectCollection $empleado The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TransferenciaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByEmpleadoRelatedByIdempleadoreceptor($empleado, $comparison = null)
    {
        if ($empleado instanceof Empleado) {
            return $this
                ->addUsingAlias(TransferenciaPeer::IDEMPLEADORECEPTOR, $empleado->getIdempleado(), $comparison);
        } elseif ($empleado instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TransferenciaPeer::IDEMPLEADORECEPTOR, $empleado->toKeyValue('PrimaryKey', 'Idempleado'), $comparison);
        } else {
            throw new PropelException('filterByEmpleadoRelatedByIdempleadoreceptor() only accepts arguments of type Empleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the EmpleadoRelatedByIdempleadoreceptor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function joinEmpleadoRelatedByIdempleadoreceptor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('EmpleadoRelatedByIdempleadoreceptor');

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
            $this->addJoinObject($join, 'EmpleadoRelatedByIdempleadoreceptor');
        }

        return $this;
    }

    /**
     * Use the EmpleadoRelatedByIdempleadoreceptor relation Empleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   EmpleadoQuery A secondary query class using the current class as primary query
     */
    public function useEmpleadoRelatedByIdempleadoreceptorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinEmpleadoRelatedByIdempleadoreceptor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'EmpleadoRelatedByIdempleadoreceptor', 'EmpleadoQuery');
    }

    /**
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TransferenciaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursalRelatedByIdsucursaldestino($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(TransferenciaPeer::IDSUCURSALDESTINO, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TransferenciaPeer::IDSUCURSALDESTINO, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
        } else {
            throw new PropelException('filterBySucursalRelatedByIdsucursaldestino() only accepts arguments of type Sucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SucursalRelatedByIdsucursaldestino relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function joinSucursalRelatedByIdsucursaldestino($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SucursalRelatedByIdsucursaldestino');

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
            $this->addJoinObject($join, 'SucursalRelatedByIdsucursaldestino');
        }

        return $this;
    }

    /**
     * Use the SucursalRelatedByIdsucursaldestino relation Sucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SucursalQuery A secondary query class using the current class as primary query
     */
    public function useSucursalRelatedByIdsucursaldestinoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSucursalRelatedByIdsucursaldestino($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SucursalRelatedByIdsucursaldestino', 'SucursalQuery');
    }

    /**
     * Filter the query by a related Sucursal object
     *
     * @param   Sucursal|PropelObjectCollection $sucursal The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TransferenciaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursalRelatedByIdsucursalorigen($sucursal, $comparison = null)
    {
        if ($sucursal instanceof Sucursal) {
            return $this
                ->addUsingAlias(TransferenciaPeer::IDSUCURSALORIGEN, $sucursal->getIdsucursal(), $comparison);
        } elseif ($sucursal instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TransferenciaPeer::IDSUCURSALORIGEN, $sucursal->toKeyValue('PrimaryKey', 'Idsucursal'), $comparison);
        } else {
            throw new PropelException('filterBySucursalRelatedByIdsucursalorigen() only accepts arguments of type Sucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SucursalRelatedByIdsucursalorigen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function joinSucursalRelatedByIdsucursalorigen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SucursalRelatedByIdsucursalorigen');

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
            $this->addJoinObject($join, 'SucursalRelatedByIdsucursalorigen');
        }

        return $this;
    }

    /**
     * Use the SucursalRelatedByIdsucursalorigen relation Sucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SucursalQuery A secondary query class using the current class as primary query
     */
    public function useSucursalRelatedByIdsucursalorigenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSucursalRelatedByIdsucursalorigen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SucursalRelatedByIdsucursalorigen', 'SucursalQuery');
    }

    /**
     * Filter the query by a related Transferenciadetalle object
     *
     * @param   Transferenciadetalle|PropelObjectCollection $transferenciadetalle  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TransferenciaQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTransferenciadetalle($transferenciadetalle, $comparison = null)
    {
        if ($transferenciadetalle instanceof Transferenciadetalle) {
            return $this
                ->addUsingAlias(TransferenciaPeer::IDTRANSFERENCIA, $transferenciadetalle->getIdtransferencia(), $comparison);
        } elseif ($transferenciadetalle instanceof PropelObjectCollection) {
            return $this
                ->useTransferenciadetalleQuery()
                ->filterByPrimaryKeys($transferenciadetalle->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTransferenciadetalle() only accepts arguments of type Transferenciadetalle or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Transferenciadetalle relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function joinTransferenciadetalle($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Transferenciadetalle');

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
            $this->addJoinObject($join, 'Transferenciadetalle');
        }

        return $this;
    }

    /**
     * Use the Transferenciadetalle relation Transferenciadetalle object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TransferenciadetalleQuery A secondary query class using the current class as primary query
     */
    public function useTransferenciadetalleQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTransferenciadetalle($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Transferenciadetalle', 'TransferenciadetalleQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Transferencia $transferencia Object to remove from the list of results
     *
     * @return TransferenciaQuery The current query, for fluid interface
     */
    public function prune($transferencia = null)
    {
        if ($transferencia) {
            $this->addUsingAlias(TransferenciaPeer::IDTRANSFERENCIA, $transferencia->getIdtransferencia(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
