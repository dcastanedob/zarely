<?php


/**
 * Base class that represents a query for the 'cliente' table.
 *
 *
 *
 * @method ClienteQuery orderByIdcliente($order = Criteria::ASC) Order by the idcliente column
 * @method ClienteQuery orderByClienteNombre($order = Criteria::ASC) Order by the cliente_nombre column
 * @method ClienteQuery orderByClienteApaterno($order = Criteria::ASC) Order by the cliente_apaterno column
 * @method ClienteQuery orderByClienteAmaterno($order = Criteria::ASC) Order by the cliente_amaterno column
 * @method ClienteQuery orderByClienteRfc($order = Criteria::ASC) Order by the cliente_rfc column
 * @method ClienteQuery orderByClienteRazonsocial($order = Criteria::ASC) Order by the cliente_razonsocial column
 * @method ClienteQuery orderByClienteCallefiscal($order = Criteria::ASC) Order by the cliente_callefiscal column
 * @method ClienteQuery orderByClienteNumerofiscal($order = Criteria::ASC) Order by the cliente_numerofiscal column
 * @method ClienteQuery orderByClienteInteriorfiscal($order = Criteria::ASC) Order by the cliente_interiorfiscal column
 * @method ClienteQuery orderByClienteColoniafiscal($order = Criteria::ASC) Order by the cliente_coloniafiscal column
 * @method ClienteQuery orderByClienteCiudadfiscal($order = Criteria::ASC) Order by the cliente_ciudadfiscal column
 * @method ClienteQuery orderByClienteCpfiscal($order = Criteria::ASC) Order by the cliente_cpfiscal column
 * @method ClienteQuery orderByClienteEstadofiscal($order = Criteria::ASC) Order by the cliente_estadofiscal column
 * @method ClienteQuery orderByClienteCalle($order = Criteria::ASC) Order by the cliente_calle column
 * @method ClienteQuery orderByClienteNumero($order = Criteria::ASC) Order by the cliente_numero column
 * @method ClienteQuery orderByClienteInterior($order = Criteria::ASC) Order by the cliente_interior column
 * @method ClienteQuery orderByClienteColonia($order = Criteria::ASC) Order by the cliente_colonia column
 * @method ClienteQuery orderByClienteCp($order = Criteria::ASC) Order by the cliente_cp column
 * @method ClienteQuery orderByClienteCiudad($order = Criteria::ASC) Order by the cliente_ciudad column
 * @method ClienteQuery orderByClienteEstado($order = Criteria::ASC) Order by the cliente_estado column
 * @method ClienteQuery orderByClienteTipo($order = Criteria::ASC) Order by the cliente_tipo column
 * @method ClienteQuery orderByClienteFecharegistro($order = Criteria::ASC) Order by the cliente_fecharegistro column
 * @method ClienteQuery orderByClienteEstatus($order = Criteria::ASC) Order by the cliente_estatus column
 * @method ClienteQuery orderByClienteCredito($order = Criteria::ASC) Order by the cliente_credito column
 * @method ClienteQuery orderByClienteLimitecredito($order = Criteria::ASC) Order by the cliente_limitecredito column
 * @method ClienteQuery orderByClienteCreditorestante($order = Criteria::ASC) Order by the cliente_creditorestante column
 *
 * @method ClienteQuery groupByIdcliente() Group by the idcliente column
 * @method ClienteQuery groupByClienteNombre() Group by the cliente_nombre column
 * @method ClienteQuery groupByClienteApaterno() Group by the cliente_apaterno column
 * @method ClienteQuery groupByClienteAmaterno() Group by the cliente_amaterno column
 * @method ClienteQuery groupByClienteRfc() Group by the cliente_rfc column
 * @method ClienteQuery groupByClienteRazonsocial() Group by the cliente_razonsocial column
 * @method ClienteQuery groupByClienteCallefiscal() Group by the cliente_callefiscal column
 * @method ClienteQuery groupByClienteNumerofiscal() Group by the cliente_numerofiscal column
 * @method ClienteQuery groupByClienteInteriorfiscal() Group by the cliente_interiorfiscal column
 * @method ClienteQuery groupByClienteColoniafiscal() Group by the cliente_coloniafiscal column
 * @method ClienteQuery groupByClienteCiudadfiscal() Group by the cliente_ciudadfiscal column
 * @method ClienteQuery groupByClienteCpfiscal() Group by the cliente_cpfiscal column
 * @method ClienteQuery groupByClienteEstadofiscal() Group by the cliente_estadofiscal column
 * @method ClienteQuery groupByClienteCalle() Group by the cliente_calle column
 * @method ClienteQuery groupByClienteNumero() Group by the cliente_numero column
 * @method ClienteQuery groupByClienteInterior() Group by the cliente_interior column
 * @method ClienteQuery groupByClienteColonia() Group by the cliente_colonia column
 * @method ClienteQuery groupByClienteCp() Group by the cliente_cp column
 * @method ClienteQuery groupByClienteCiudad() Group by the cliente_ciudad column
 * @method ClienteQuery groupByClienteEstado() Group by the cliente_estado column
 * @method ClienteQuery groupByClienteTipo() Group by the cliente_tipo column
 * @method ClienteQuery groupByClienteFecharegistro() Group by the cliente_fecharegistro column
 * @method ClienteQuery groupByClienteEstatus() Group by the cliente_estatus column
 * @method ClienteQuery groupByClienteCredito() Group by the cliente_credito column
 * @method ClienteQuery groupByClienteLimitecredito() Group by the cliente_limitecredito column
 * @method ClienteQuery groupByClienteCreditorestante() Group by the cliente_creditorestante column
 *
 * @method ClienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ClienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ClienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ClienteQuery leftJoinClienterelacionadoRelatedByIdcliente($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClienterelacionadoRelatedByIdcliente relation
 * @method ClienteQuery rightJoinClienterelacionadoRelatedByIdcliente($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClienterelacionadoRelatedByIdcliente relation
 * @method ClienteQuery innerJoinClienterelacionadoRelatedByIdcliente($relationAlias = null) Adds a INNER JOIN clause to the query using the ClienterelacionadoRelatedByIdcliente relation
 *
 * @method ClienteQuery leftJoinClienterelacionadoRelatedByIdclienteasociado($relationAlias = null) Adds a LEFT JOIN clause to the query using the ClienterelacionadoRelatedByIdclienteasociado relation
 * @method ClienteQuery rightJoinClienterelacionadoRelatedByIdclienteasociado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ClienterelacionadoRelatedByIdclienteasociado relation
 * @method ClienteQuery innerJoinClienterelacionadoRelatedByIdclienteasociado($relationAlias = null) Adds a INNER JOIN clause to the query using the ClienterelacionadoRelatedByIdclienteasociado relation
 *
 * @method ClienteQuery leftJoinPedidomayorista($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pedidomayorista relation
 * @method ClienteQuery rightJoinPedidomayorista($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pedidomayorista relation
 * @method ClienteQuery innerJoinPedidomayorista($relationAlias = null) Adds a INNER JOIN clause to the query using the Pedidomayorista relation
 *
 * @method ClienteQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method ClienteQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method ClienteQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method Cliente findOne(PropelPDO $con = null) Return the first Cliente matching the query
 * @method Cliente findOneOrCreate(PropelPDO $con = null) Return the first Cliente matching the query, or a new Cliente object populated from the query conditions when no match is found
 *
 * @method Cliente findOneByClienteNombre(string $cliente_nombre) Return the first Cliente filtered by the cliente_nombre column
 * @method Cliente findOneByClienteApaterno(string $cliente_apaterno) Return the first Cliente filtered by the cliente_apaterno column
 * @method Cliente findOneByClienteAmaterno(string $cliente_amaterno) Return the first Cliente filtered by the cliente_amaterno column
 * @method Cliente findOneByClienteRfc(string $cliente_rfc) Return the first Cliente filtered by the cliente_rfc column
 * @method Cliente findOneByClienteRazonsocial(string $cliente_razonsocial) Return the first Cliente filtered by the cliente_razonsocial column
 * @method Cliente findOneByClienteCallefiscal(string $cliente_callefiscal) Return the first Cliente filtered by the cliente_callefiscal column
 * @method Cliente findOneByClienteNumerofiscal(string $cliente_numerofiscal) Return the first Cliente filtered by the cliente_numerofiscal column
 * @method Cliente findOneByClienteInteriorfiscal(string $cliente_interiorfiscal) Return the first Cliente filtered by the cliente_interiorfiscal column
 * @method Cliente findOneByClienteColoniafiscal(string $cliente_coloniafiscal) Return the first Cliente filtered by the cliente_coloniafiscal column
 * @method Cliente findOneByClienteCiudadfiscal(string $cliente_ciudadfiscal) Return the first Cliente filtered by the cliente_ciudadfiscal column
 * @method Cliente findOneByClienteCpfiscal(string $cliente_cpfiscal) Return the first Cliente filtered by the cliente_cpfiscal column
 * @method Cliente findOneByClienteEstadofiscal(string $cliente_estadofiscal) Return the first Cliente filtered by the cliente_estadofiscal column
 * @method Cliente findOneByClienteCalle(string $cliente_calle) Return the first Cliente filtered by the cliente_calle column
 * @method Cliente findOneByClienteNumero(string $cliente_numero) Return the first Cliente filtered by the cliente_numero column
 * @method Cliente findOneByClienteInterior(string $cliente_interior) Return the first Cliente filtered by the cliente_interior column
 * @method Cliente findOneByClienteColonia(string $cliente_colonia) Return the first Cliente filtered by the cliente_colonia column
 * @method Cliente findOneByClienteCp(string $cliente_cp) Return the first Cliente filtered by the cliente_cp column
 * @method Cliente findOneByClienteCiudad(string $cliente_ciudad) Return the first Cliente filtered by the cliente_ciudad column
 * @method Cliente findOneByClienteEstado(string $cliente_estado) Return the first Cliente filtered by the cliente_estado column
 * @method Cliente findOneByClienteTipo(string $cliente_tipo) Return the first Cliente filtered by the cliente_tipo column
 * @method Cliente findOneByClienteFecharegistro(string $cliente_fecharegistro) Return the first Cliente filtered by the cliente_fecharegistro column
 * @method Cliente findOneByClienteEstatus(boolean $cliente_estatus) Return the first Cliente filtered by the cliente_estatus column
 * @method Cliente findOneByClienteCredito(boolean $cliente_credito) Return the first Cliente filtered by the cliente_credito column
 * @method Cliente findOneByClienteLimitecredito(string $cliente_limitecredito) Return the first Cliente filtered by the cliente_limitecredito column
 * @method Cliente findOneByClienteCreditorestante(string $cliente_creditorestante) Return the first Cliente filtered by the cliente_creditorestante column
 *
 * @method array findByIdcliente(int $idcliente) Return Cliente objects filtered by the idcliente column
 * @method array findByClienteNombre(string $cliente_nombre) Return Cliente objects filtered by the cliente_nombre column
 * @method array findByClienteApaterno(string $cliente_apaterno) Return Cliente objects filtered by the cliente_apaterno column
 * @method array findByClienteAmaterno(string $cliente_amaterno) Return Cliente objects filtered by the cliente_amaterno column
 * @method array findByClienteRfc(string $cliente_rfc) Return Cliente objects filtered by the cliente_rfc column
 * @method array findByClienteRazonsocial(string $cliente_razonsocial) Return Cliente objects filtered by the cliente_razonsocial column
 * @method array findByClienteCallefiscal(string $cliente_callefiscal) Return Cliente objects filtered by the cliente_callefiscal column
 * @method array findByClienteNumerofiscal(string $cliente_numerofiscal) Return Cliente objects filtered by the cliente_numerofiscal column
 * @method array findByClienteInteriorfiscal(string $cliente_interiorfiscal) Return Cliente objects filtered by the cliente_interiorfiscal column
 * @method array findByClienteColoniafiscal(string $cliente_coloniafiscal) Return Cliente objects filtered by the cliente_coloniafiscal column
 * @method array findByClienteCiudadfiscal(string $cliente_ciudadfiscal) Return Cliente objects filtered by the cliente_ciudadfiscal column
 * @method array findByClienteCpfiscal(string $cliente_cpfiscal) Return Cliente objects filtered by the cliente_cpfiscal column
 * @method array findByClienteEstadofiscal(string $cliente_estadofiscal) Return Cliente objects filtered by the cliente_estadofiscal column
 * @method array findByClienteCalle(string $cliente_calle) Return Cliente objects filtered by the cliente_calle column
 * @method array findByClienteNumero(string $cliente_numero) Return Cliente objects filtered by the cliente_numero column
 * @method array findByClienteInterior(string $cliente_interior) Return Cliente objects filtered by the cliente_interior column
 * @method array findByClienteColonia(string $cliente_colonia) Return Cliente objects filtered by the cliente_colonia column
 * @method array findByClienteCp(string $cliente_cp) Return Cliente objects filtered by the cliente_cp column
 * @method array findByClienteCiudad(string $cliente_ciudad) Return Cliente objects filtered by the cliente_ciudad column
 * @method array findByClienteEstado(string $cliente_estado) Return Cliente objects filtered by the cliente_estado column
 * @method array findByClienteTipo(string $cliente_tipo) Return Cliente objects filtered by the cliente_tipo column
 * @method array findByClienteFecharegistro(string $cliente_fecharegistro) Return Cliente objects filtered by the cliente_fecharegistro column
 * @method array findByClienteEstatus(boolean $cliente_estatus) Return Cliente objects filtered by the cliente_estatus column
 * @method array findByClienteCredito(boolean $cliente_credito) Return Cliente objects filtered by the cliente_credito column
 * @method array findByClienteLimitecredito(string $cliente_limitecredito) Return Cliente objects filtered by the cliente_limitecredito column
 * @method array findByClienteCreditorestante(string $cliente_creditorestante) Return Cliente objects filtered by the cliente_creditorestante column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseClienteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseClienteQuery object.
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
            $modelName = 'Cliente';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ClienteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ClienteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ClienteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ClienteQuery) {
            return $criteria;
        }
        $query = new ClienteQuery(null, null, $modelAlias);

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
     * @return   Cliente|Cliente[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ClientePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ClientePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Cliente A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcliente($key, $con = null)
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
     * @return                 Cliente A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcliente`, `cliente_nombre`, `cliente_apaterno`, `cliente_amaterno`, `cliente_rfc`, `cliente_razonsocial`, `cliente_callefiscal`, `cliente_numerofiscal`, `cliente_interiorfiscal`, `cliente_coloniafiscal`, `cliente_ciudadfiscal`, `cliente_cpfiscal`, `cliente_estadofiscal`, `cliente_calle`, `cliente_numero`, `cliente_interior`, `cliente_colonia`, `cliente_cp`, `cliente_ciudad`, `cliente_estado`, `cliente_tipo`, `cliente_fecharegistro`, `cliente_estatus`, `cliente_credito`, `cliente_limitecredito`, `cliente_creditorestante` FROM `cliente` WHERE `idcliente` = :p0';
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
            $obj = new Cliente();
            $obj->hydrate($row);
            ClientePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Cliente|Cliente[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Cliente[]|mixed the list of results, formatted by the current formatter
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
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ClientePeer::IDCLIENTE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ClientePeer::IDCLIENTE, $keys, Criteria::IN);
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
     * @param     mixed $idcliente The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByIdcliente($idcliente = null, $comparison = null)
    {
        if (is_array($idcliente)) {
            $useMinMax = false;
            if (isset($idcliente['min'])) {
                $this->addUsingAlias(ClientePeer::IDCLIENTE, $idcliente['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcliente['max'])) {
                $this->addUsingAlias(ClientePeer::IDCLIENTE, $idcliente['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientePeer::IDCLIENTE, $idcliente, $comparison);
    }

    /**
     * Filter the query on the cliente_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteNombre('fooValue');   // WHERE cliente_nombre = 'fooValue'
     * $query->filterByClienteNombre('%fooValue%'); // WHERE cliente_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteNombre($clienteNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteNombre)) {
                $clienteNombre = str_replace('*', '%', $clienteNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_NOMBRE, $clienteNombre, $comparison);
    }

    /**
     * Filter the query on the cliente_apaterno column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteApaterno('fooValue');   // WHERE cliente_apaterno = 'fooValue'
     * $query->filterByClienteApaterno('%fooValue%'); // WHERE cliente_apaterno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteApaterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteApaterno($clienteApaterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteApaterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteApaterno)) {
                $clienteApaterno = str_replace('*', '%', $clienteApaterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_APATERNO, $clienteApaterno, $comparison);
    }

    /**
     * Filter the query on the cliente_amaterno column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteAmaterno('fooValue');   // WHERE cliente_amaterno = 'fooValue'
     * $query->filterByClienteAmaterno('%fooValue%'); // WHERE cliente_amaterno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteAmaterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteAmaterno($clienteAmaterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteAmaterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteAmaterno)) {
                $clienteAmaterno = str_replace('*', '%', $clienteAmaterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_AMATERNO, $clienteAmaterno, $comparison);
    }

    /**
     * Filter the query on the cliente_rfc column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteRfc('fooValue');   // WHERE cliente_rfc = 'fooValue'
     * $query->filterByClienteRfc('%fooValue%'); // WHERE cliente_rfc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteRfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteRfc($clienteRfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteRfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteRfc)) {
                $clienteRfc = str_replace('*', '%', $clienteRfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_RFC, $clienteRfc, $comparison);
    }

    /**
     * Filter the query on the cliente_razonsocial column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteRazonsocial('fooValue');   // WHERE cliente_razonsocial = 'fooValue'
     * $query->filterByClienteRazonsocial('%fooValue%'); // WHERE cliente_razonsocial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteRazonsocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteRazonsocial($clienteRazonsocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteRazonsocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteRazonsocial)) {
                $clienteRazonsocial = str_replace('*', '%', $clienteRazonsocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_RAZONSOCIAL, $clienteRazonsocial, $comparison);
    }

    /**
     * Filter the query on the cliente_callefiscal column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteCallefiscal('fooValue');   // WHERE cliente_callefiscal = 'fooValue'
     * $query->filterByClienteCallefiscal('%fooValue%'); // WHERE cliente_callefiscal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteCallefiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteCallefiscal($clienteCallefiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteCallefiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteCallefiscal)) {
                $clienteCallefiscal = str_replace('*', '%', $clienteCallefiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_CALLEFISCAL, $clienteCallefiscal, $comparison);
    }

    /**
     * Filter the query on the cliente_numerofiscal column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteNumerofiscal('fooValue');   // WHERE cliente_numerofiscal = 'fooValue'
     * $query->filterByClienteNumerofiscal('%fooValue%'); // WHERE cliente_numerofiscal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteNumerofiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteNumerofiscal($clienteNumerofiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteNumerofiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteNumerofiscal)) {
                $clienteNumerofiscal = str_replace('*', '%', $clienteNumerofiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_NUMEROFISCAL, $clienteNumerofiscal, $comparison);
    }

    /**
     * Filter the query on the cliente_interiorfiscal column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteInteriorfiscal('fooValue');   // WHERE cliente_interiorfiscal = 'fooValue'
     * $query->filterByClienteInteriorfiscal('%fooValue%'); // WHERE cliente_interiorfiscal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteInteriorfiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteInteriorfiscal($clienteInteriorfiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteInteriorfiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteInteriorfiscal)) {
                $clienteInteriorfiscal = str_replace('*', '%', $clienteInteriorfiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_INTERIORFISCAL, $clienteInteriorfiscal, $comparison);
    }

    /**
     * Filter the query on the cliente_coloniafiscal column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteColoniafiscal('fooValue');   // WHERE cliente_coloniafiscal = 'fooValue'
     * $query->filterByClienteColoniafiscal('%fooValue%'); // WHERE cliente_coloniafiscal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteColoniafiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteColoniafiscal($clienteColoniafiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteColoniafiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteColoniafiscal)) {
                $clienteColoniafiscal = str_replace('*', '%', $clienteColoniafiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_COLONIAFISCAL, $clienteColoniafiscal, $comparison);
    }

    /**
     * Filter the query on the cliente_ciudadfiscal column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteCiudadfiscal('fooValue');   // WHERE cliente_ciudadfiscal = 'fooValue'
     * $query->filterByClienteCiudadfiscal('%fooValue%'); // WHERE cliente_ciudadfiscal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteCiudadfiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteCiudadfiscal($clienteCiudadfiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteCiudadfiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteCiudadfiscal)) {
                $clienteCiudadfiscal = str_replace('*', '%', $clienteCiudadfiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_CIUDADFISCAL, $clienteCiudadfiscal, $comparison);
    }

    /**
     * Filter the query on the cliente_cpfiscal column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteCpfiscal('fooValue');   // WHERE cliente_cpfiscal = 'fooValue'
     * $query->filterByClienteCpfiscal('%fooValue%'); // WHERE cliente_cpfiscal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteCpfiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteCpfiscal($clienteCpfiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteCpfiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteCpfiscal)) {
                $clienteCpfiscal = str_replace('*', '%', $clienteCpfiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_CPFISCAL, $clienteCpfiscal, $comparison);
    }

    /**
     * Filter the query on the cliente_estadofiscal column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteEstadofiscal('fooValue');   // WHERE cliente_estadofiscal = 'fooValue'
     * $query->filterByClienteEstadofiscal('%fooValue%'); // WHERE cliente_estadofiscal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteEstadofiscal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteEstadofiscal($clienteEstadofiscal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteEstadofiscal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteEstadofiscal)) {
                $clienteEstadofiscal = str_replace('*', '%', $clienteEstadofiscal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_ESTADOFISCAL, $clienteEstadofiscal, $comparison);
    }

    /**
     * Filter the query on the cliente_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteCalle('fooValue');   // WHERE cliente_calle = 'fooValue'
     * $query->filterByClienteCalle('%fooValue%'); // WHERE cliente_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteCalle($clienteCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteCalle)) {
                $clienteCalle = str_replace('*', '%', $clienteCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_CALLE, $clienteCalle, $comparison);
    }

    /**
     * Filter the query on the cliente_numero column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteNumero('fooValue');   // WHERE cliente_numero = 'fooValue'
     * $query->filterByClienteNumero('%fooValue%'); // WHERE cliente_numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteNumero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteNumero($clienteNumero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteNumero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteNumero)) {
                $clienteNumero = str_replace('*', '%', $clienteNumero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_NUMERO, $clienteNumero, $comparison);
    }

    /**
     * Filter the query on the cliente_interior column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteInterior('fooValue');   // WHERE cliente_interior = 'fooValue'
     * $query->filterByClienteInterior('%fooValue%'); // WHERE cliente_interior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteInterior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteInterior($clienteInterior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteInterior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteInterior)) {
                $clienteInterior = str_replace('*', '%', $clienteInterior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_INTERIOR, $clienteInterior, $comparison);
    }

    /**
     * Filter the query on the cliente_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteColonia('fooValue');   // WHERE cliente_colonia = 'fooValue'
     * $query->filterByClienteColonia('%fooValue%'); // WHERE cliente_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteColonia($clienteColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteColonia)) {
                $clienteColonia = str_replace('*', '%', $clienteColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_COLONIA, $clienteColonia, $comparison);
    }

    /**
     * Filter the query on the cliente_cp column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteCp('fooValue');   // WHERE cliente_cp = 'fooValue'
     * $query->filterByClienteCp('%fooValue%'); // WHERE cliente_cp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteCp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteCp($clienteCp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteCp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteCp)) {
                $clienteCp = str_replace('*', '%', $clienteCp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_CP, $clienteCp, $comparison);
    }

    /**
     * Filter the query on the cliente_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteCiudad('fooValue');   // WHERE cliente_ciudad = 'fooValue'
     * $query->filterByClienteCiudad('%fooValue%'); // WHERE cliente_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteCiudad($clienteCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteCiudad)) {
                $clienteCiudad = str_replace('*', '%', $clienteCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_CIUDAD, $clienteCiudad, $comparison);
    }

    /**
     * Filter the query on the cliente_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteEstado('fooValue');   // WHERE cliente_estado = 'fooValue'
     * $query->filterByClienteEstado('%fooValue%'); // WHERE cliente_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteEstado($clienteEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteEstado)) {
                $clienteEstado = str_replace('*', '%', $clienteEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_ESTADO, $clienteEstado, $comparison);
    }

    /**
     * Filter the query on the cliente_tipo column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteTipo('fooValue');   // WHERE cliente_tipo = 'fooValue'
     * $query->filterByClienteTipo('%fooValue%'); // WHERE cliente_tipo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clienteTipo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteTipo($clienteTipo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clienteTipo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clienteTipo)) {
                $clienteTipo = str_replace('*', '%', $clienteTipo);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_TIPO, $clienteTipo, $comparison);
    }

    /**
     * Filter the query on the cliente_fecharegistro column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteFecharegistro('2011-03-14'); // WHERE cliente_fecharegistro = '2011-03-14'
     * $query->filterByClienteFecharegistro('now'); // WHERE cliente_fecharegistro = '2011-03-14'
     * $query->filterByClienteFecharegistro(array('max' => 'yesterday')); // WHERE cliente_fecharegistro < '2011-03-13'
     * </code>
     *
     * @param     mixed $clienteFecharegistro The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteFecharegistro($clienteFecharegistro = null, $comparison = null)
    {
        if (is_array($clienteFecharegistro)) {
            $useMinMax = false;
            if (isset($clienteFecharegistro['min'])) {
                $this->addUsingAlias(ClientePeer::CLIENTE_FECHAREGISTRO, $clienteFecharegistro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clienteFecharegistro['max'])) {
                $this->addUsingAlias(ClientePeer::CLIENTE_FECHAREGISTRO, $clienteFecharegistro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_FECHAREGISTRO, $clienteFecharegistro, $comparison);
    }

    /**
     * Filter the query on the cliente_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteEstatus(true); // WHERE cliente_estatus = true
     * $query->filterByClienteEstatus('yes'); // WHERE cliente_estatus = true
     * </code>
     *
     * @param     boolean|string $clienteEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteEstatus($clienteEstatus = null, $comparison = null)
    {
        if (is_string($clienteEstatus)) {
            $clienteEstatus = in_array(strtolower($clienteEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_ESTATUS, $clienteEstatus, $comparison);
    }

    /**
     * Filter the query on the cliente_credito column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteCredito(true); // WHERE cliente_credito = true
     * $query->filterByClienteCredito('yes'); // WHERE cliente_credito = true
     * </code>
     *
     * @param     boolean|string $clienteCredito The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteCredito($clienteCredito = null, $comparison = null)
    {
        if (is_string($clienteCredito)) {
            $clienteCredito = in_array(strtolower($clienteCredito), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_CREDITO, $clienteCredito, $comparison);
    }

    /**
     * Filter the query on the cliente_limitecredito column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteLimitecredito(1234); // WHERE cliente_limitecredito = 1234
     * $query->filterByClienteLimitecredito(array(12, 34)); // WHERE cliente_limitecredito IN (12, 34)
     * $query->filterByClienteLimitecredito(array('min' => 12)); // WHERE cliente_limitecredito >= 12
     * $query->filterByClienteLimitecredito(array('max' => 12)); // WHERE cliente_limitecredito <= 12
     * </code>
     *
     * @param     mixed $clienteLimitecredito The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteLimitecredito($clienteLimitecredito = null, $comparison = null)
    {
        if (is_array($clienteLimitecredito)) {
            $useMinMax = false;
            if (isset($clienteLimitecredito['min'])) {
                $this->addUsingAlias(ClientePeer::CLIENTE_LIMITECREDITO, $clienteLimitecredito['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clienteLimitecredito['max'])) {
                $this->addUsingAlias(ClientePeer::CLIENTE_LIMITECREDITO, $clienteLimitecredito['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_LIMITECREDITO, $clienteLimitecredito, $comparison);
    }

    /**
     * Filter the query on the cliente_creditorestante column
     *
     * Example usage:
     * <code>
     * $query->filterByClienteCreditorestante(1234); // WHERE cliente_creditorestante = 1234
     * $query->filterByClienteCreditorestante(array(12, 34)); // WHERE cliente_creditorestante IN (12, 34)
     * $query->filterByClienteCreditorestante(array('min' => 12)); // WHERE cliente_creditorestante >= 12
     * $query->filterByClienteCreditorestante(array('max' => 12)); // WHERE cliente_creditorestante <= 12
     * </code>
     *
     * @param     mixed $clienteCreditorestante The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function filterByClienteCreditorestante($clienteCreditorestante = null, $comparison = null)
    {
        if (is_array($clienteCreditorestante)) {
            $useMinMax = false;
            if (isset($clienteCreditorestante['min'])) {
                $this->addUsingAlias(ClientePeer::CLIENTE_CREDITORESTANTE, $clienteCreditorestante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($clienteCreditorestante['max'])) {
                $this->addUsingAlias(ClientePeer::CLIENTE_CREDITORESTANTE, $clienteCreditorestante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ClientePeer::CLIENTE_CREDITORESTANTE, $clienteCreditorestante, $comparison);
    }

    /**
     * Filter the query by a related Clienterelacionado object
     *
     * @param   Clienterelacionado|PropelObjectCollection $clienterelacionado  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClienterelacionadoRelatedByIdcliente($clienterelacionado, $comparison = null)
    {
        if ($clienterelacionado instanceof Clienterelacionado) {
            return $this
                ->addUsingAlias(ClientePeer::IDCLIENTE, $clienterelacionado->getIdcliente(), $comparison);
        } elseif ($clienterelacionado instanceof PropelObjectCollection) {
            return $this
                ->useClienterelacionadoRelatedByIdclienteQuery()
                ->filterByPrimaryKeys($clienterelacionado->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByClienterelacionadoRelatedByIdcliente() only accepts arguments of type Clienterelacionado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClienterelacionadoRelatedByIdcliente relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function joinClienterelacionadoRelatedByIdcliente($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClienterelacionadoRelatedByIdcliente');

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
            $this->addJoinObject($join, 'ClienterelacionadoRelatedByIdcliente');
        }

        return $this;
    }

    /**
     * Use the ClienterelacionadoRelatedByIdcliente relation Clienterelacionado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClienterelacionadoQuery A secondary query class using the current class as primary query
     */
    public function useClienterelacionadoRelatedByIdclienteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinClienterelacionadoRelatedByIdcliente($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClienterelacionadoRelatedByIdcliente', 'ClienterelacionadoQuery');
    }

    /**
     * Filter the query by a related Clienterelacionado object
     *
     * @param   Clienterelacionado|PropelObjectCollection $clienterelacionado  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByClienterelacionadoRelatedByIdclienteasociado($clienterelacionado, $comparison = null)
    {
        if ($clienterelacionado instanceof Clienterelacionado) {
            return $this
                ->addUsingAlias(ClientePeer::IDCLIENTE, $clienterelacionado->getIdclienteasociado(), $comparison);
        } elseif ($clienterelacionado instanceof PropelObjectCollection) {
            return $this
                ->useClienterelacionadoRelatedByIdclienteasociadoQuery()
                ->filterByPrimaryKeys($clienterelacionado->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByClienterelacionadoRelatedByIdclienteasociado() only accepts arguments of type Clienterelacionado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ClienterelacionadoRelatedByIdclienteasociado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function joinClienterelacionadoRelatedByIdclienteasociado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ClienterelacionadoRelatedByIdclienteasociado');

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
            $this->addJoinObject($join, 'ClienterelacionadoRelatedByIdclienteasociado');
        }

        return $this;
    }

    /**
     * Use the ClienterelacionadoRelatedByIdclienteasociado relation Clienterelacionado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ClienterelacionadoQuery A secondary query class using the current class as primary query
     */
    public function useClienterelacionadoRelatedByIdclienteasociadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinClienterelacionadoRelatedByIdclienteasociado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ClienterelacionadoRelatedByIdclienteasociado', 'ClienterelacionadoQuery');
    }

    /**
     * Filter the query by a related Pedidomayorista object
     *
     * @param   Pedidomayorista|PropelObjectCollection $pedidomayorista  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPedidomayorista($pedidomayorista, $comparison = null)
    {
        if ($pedidomayorista instanceof Pedidomayorista) {
            return $this
                ->addUsingAlias(ClientePeer::IDCLIENTE, $pedidomayorista->getIdcliente(), $comparison);
        } elseif ($pedidomayorista instanceof PropelObjectCollection) {
            return $this
                ->usePedidomayoristaQuery()
                ->filterByPrimaryKeys($pedidomayorista->getPrimaryKeys())
                ->endUse();
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
     * @return ClienteQuery The current query, for fluid interface
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
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ClienteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVenta($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(ClientePeer::IDCLIENTE, $venta->getIdcliente(), $comparison);
        } elseif ($venta instanceof PropelObjectCollection) {
            return $this
                ->useVentaQuery()
                ->filterByPrimaryKeys($venta->getPrimaryKeys())
                ->endUse();
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
     * @return ClienteQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Cliente $cliente Object to remove from the list of results
     *
     * @return ClienteQuery The current query, for fluid interface
     */
    public function prune($cliente = null)
    {
        if ($cliente) {
            $this->addUsingAlias(ClientePeer::IDCLIENTE, $cliente->getIdcliente(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
