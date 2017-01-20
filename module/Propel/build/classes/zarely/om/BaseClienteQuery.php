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
 *
 * @method ClienteQuery groupByIdcliente() Group by the idcliente column
 * @method ClienteQuery groupByClienteNombre() Group by the cliente_nombre column
 * @method ClienteQuery groupByClienteApaterno() Group by the cliente_apaterno column
 * @method ClienteQuery groupByClienteAmaterno() Group by the cliente_amaterno column
 * @method ClienteQuery groupByClienteRfc() Group by the cliente_rfc column
 *
 * @method ClienteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ClienteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ClienteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Cliente findOne(PropelPDO $con = null) Return the first Cliente matching the query
 * @method Cliente findOneOrCreate(PropelPDO $con = null) Return the first Cliente matching the query, or a new Cliente object populated from the query conditions when no match is found
 *
 * @method Cliente findOneByClienteNombre(string $cliente_nombre) Return the first Cliente filtered by the cliente_nombre column
 * @method Cliente findOneByClienteApaterno(string $cliente_apaterno) Return the first Cliente filtered by the cliente_apaterno column
 * @method Cliente findOneByClienteAmaterno(string $cliente_amaterno) Return the first Cliente filtered by the cliente_amaterno column
 * @method Cliente findOneByClienteRfc(string $cliente_rfc) Return the first Cliente filtered by the cliente_rfc column
 *
 * @method array findByIdcliente(int $idcliente) Return Cliente objects filtered by the idcliente column
 * @method array findByClienteNombre(string $cliente_nombre) Return Cliente objects filtered by the cliente_nombre column
 * @method array findByClienteApaterno(string $cliente_apaterno) Return Cliente objects filtered by the cliente_apaterno column
 * @method array findByClienteAmaterno(string $cliente_amaterno) Return Cliente objects filtered by the cliente_amaterno column
 * @method array findByClienteRfc(string $cliente_rfc) Return Cliente objects filtered by the cliente_rfc column
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
        $sql = 'SELECT `idcliente`, `cliente_nombre`, `cliente_apaterno`, `cliente_amaterno`, `cliente_rfc` FROM `cliente` WHERE `idcliente` = :p0';
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
