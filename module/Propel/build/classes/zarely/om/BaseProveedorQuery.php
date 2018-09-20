<?php


/**
 * Base class that represents a query for the 'proveedor' table.
 *
 *
 *
 * @method ProveedorQuery orderByIdproveedor($order = Criteria::ASC) Order by the idproveedor column
 * @method ProveedorQuery orderByProveedorNombrecomercial($order = Criteria::ASC) Order by the proveedor_nombrecomercial column
 * @method ProveedorQuery orderByProveedorTelefono($order = Criteria::ASC) Order by the proveedor_telefono column
 * @method ProveedorQuery orderByProveedorCelular($order = Criteria::ASC) Order by the proveedor_celular column
 * @method ProveedorQuery orderByProveedorFechainicio($order = Criteria::ASC) Order by the proveedor_fechainicio column
 * @method ProveedorQuery orderByProveedorEmail($order = Criteria::ASC) Order by the proveedor_email column
 * @method ProveedorQuery orderByProveedorRazonsocial($order = Criteria::ASC) Order by the proveedor_razonsocial column
 * @method ProveedorQuery orderByProveedorRfc($order = Criteria::ASC) Order by the proveedor_rfc column
 * @method ProveedorQuery orderByProveedorDireccion($order = Criteria::ASC) Order by the proveedor_direccion column
 * @method ProveedorQuery orderByProveedorColonia($order = Criteria::ASC) Order by the proveedor_colonia column
 * @method ProveedorQuery orderByProveedorCp($order = Criteria::ASC) Order by the proveedor_cp column
 * @method ProveedorQuery orderByProveedorCiudad($order = Criteria::ASC) Order by the proveedor_ciudad column
 * @method ProveedorQuery orderByProveedorEstado($order = Criteria::ASC) Order by the proveedor_estado column
 * @method ProveedorQuery orderByProveedorContactonombre($order = Criteria::ASC) Order by the proveedor_contactonombre column
 * @method ProveedorQuery orderByProveedorContactotelefono($order = Criteria::ASC) Order by the proveedor_contactotelefono column
 * @method ProveedorQuery orderByProveedorContactoemail($order = Criteria::ASC) Order by the proveedor_contactoemail column
 *
 * @method ProveedorQuery groupByIdproveedor() Group by the idproveedor column
 * @method ProveedorQuery groupByProveedorNombrecomercial() Group by the proveedor_nombrecomercial column
 * @method ProveedorQuery groupByProveedorTelefono() Group by the proveedor_telefono column
 * @method ProveedorQuery groupByProveedorCelular() Group by the proveedor_celular column
 * @method ProveedorQuery groupByProveedorFechainicio() Group by the proveedor_fechainicio column
 * @method ProveedorQuery groupByProveedorEmail() Group by the proveedor_email column
 * @method ProveedorQuery groupByProveedorRazonsocial() Group by the proveedor_razonsocial column
 * @method ProveedorQuery groupByProveedorRfc() Group by the proveedor_rfc column
 * @method ProveedorQuery groupByProveedorDireccion() Group by the proveedor_direccion column
 * @method ProveedorQuery groupByProveedorColonia() Group by the proveedor_colonia column
 * @method ProveedorQuery groupByProveedorCp() Group by the proveedor_cp column
 * @method ProveedorQuery groupByProveedorCiudad() Group by the proveedor_ciudad column
 * @method ProveedorQuery groupByProveedorEstado() Group by the proveedor_estado column
 * @method ProveedorQuery groupByProveedorContactonombre() Group by the proveedor_contactonombre column
 * @method ProveedorQuery groupByProveedorContactotelefono() Group by the proveedor_contactotelefono column
 * @method ProveedorQuery groupByProveedorContactoemail() Group by the proveedor_contactoemail column
 *
 * @method ProveedorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProveedorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProveedorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProveedorQuery leftJoinCompra($relationAlias = null) Adds a LEFT JOIN clause to the query using the Compra relation
 * @method ProveedorQuery rightJoinCompra($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Compra relation
 * @method ProveedorQuery innerJoinCompra($relationAlias = null) Adds a INNER JOIN clause to the query using the Compra relation
 *
 * @method ProveedorQuery leftJoinDevolucion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Devolucion relation
 * @method ProveedorQuery rightJoinDevolucion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Devolucion relation
 * @method ProveedorQuery innerJoinDevolucion($relationAlias = null) Adds a INNER JOIN clause to the query using the Devolucion relation
 *
 * @method ProveedorQuery leftJoinProducto($relationAlias = null) Adds a LEFT JOIN clause to the query using the Producto relation
 * @method ProveedorQuery rightJoinProducto($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Producto relation
 * @method ProveedorQuery innerJoinProducto($relationAlias = null) Adds a INNER JOIN clause to the query using the Producto relation
 *
 * @method ProveedorQuery leftJoinProveedormarca($relationAlias = null) Adds a LEFT JOIN clause to the query using the Proveedormarca relation
 * @method ProveedorQuery rightJoinProveedormarca($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Proveedormarca relation
 * @method ProveedorQuery innerJoinProveedormarca($relationAlias = null) Adds a INNER JOIN clause to the query using the Proveedormarca relation
 *
 * @method Proveedor findOne(PropelPDO $con = null) Return the first Proveedor matching the query
 * @method Proveedor findOneOrCreate(PropelPDO $con = null) Return the first Proveedor matching the query, or a new Proveedor object populated from the query conditions when no match is found
 *
 * @method Proveedor findOneByProveedorNombrecomercial(string $proveedor_nombrecomercial) Return the first Proveedor filtered by the proveedor_nombrecomercial column
 * @method Proveedor findOneByProveedorTelefono(string $proveedor_telefono) Return the first Proveedor filtered by the proveedor_telefono column
 * @method Proveedor findOneByProveedorCelular(string $proveedor_celular) Return the first Proveedor filtered by the proveedor_celular column
 * @method Proveedor findOneByProveedorFechainicio(string $proveedor_fechainicio) Return the first Proveedor filtered by the proveedor_fechainicio column
 * @method Proveedor findOneByProveedorEmail(string $proveedor_email) Return the first Proveedor filtered by the proveedor_email column
 * @method Proveedor findOneByProveedorRazonsocial(string $proveedor_razonsocial) Return the first Proveedor filtered by the proveedor_razonsocial column
 * @method Proveedor findOneByProveedorRfc(string $proveedor_rfc) Return the first Proveedor filtered by the proveedor_rfc column
 * @method Proveedor findOneByProveedorDireccion(string $proveedor_direccion) Return the first Proveedor filtered by the proveedor_direccion column
 * @method Proveedor findOneByProveedorColonia(string $proveedor_colonia) Return the first Proveedor filtered by the proveedor_colonia column
 * @method Proveedor findOneByProveedorCp(string $proveedor_cp) Return the first Proveedor filtered by the proveedor_cp column
 * @method Proveedor findOneByProveedorCiudad(string $proveedor_ciudad) Return the first Proveedor filtered by the proveedor_ciudad column
 * @method Proveedor findOneByProveedorEstado(string $proveedor_estado) Return the first Proveedor filtered by the proveedor_estado column
 * @method Proveedor findOneByProveedorContactonombre(string $proveedor_contactonombre) Return the first Proveedor filtered by the proveedor_contactonombre column
 * @method Proveedor findOneByProveedorContactotelefono(string $proveedor_contactotelefono) Return the first Proveedor filtered by the proveedor_contactotelefono column
 * @method Proveedor findOneByProveedorContactoemail(string $proveedor_contactoemail) Return the first Proveedor filtered by the proveedor_contactoemail column
 *
 * @method array findByIdproveedor(int $idproveedor) Return Proveedor objects filtered by the idproveedor column
 * @method array findByProveedorNombrecomercial(string $proveedor_nombrecomercial) Return Proveedor objects filtered by the proveedor_nombrecomercial column
 * @method array findByProveedorTelefono(string $proveedor_telefono) Return Proveedor objects filtered by the proveedor_telefono column
 * @method array findByProveedorCelular(string $proveedor_celular) Return Proveedor objects filtered by the proveedor_celular column
 * @method array findByProveedorFechainicio(string $proveedor_fechainicio) Return Proveedor objects filtered by the proveedor_fechainicio column
 * @method array findByProveedorEmail(string $proveedor_email) Return Proveedor objects filtered by the proveedor_email column
 * @method array findByProveedorRazonsocial(string $proveedor_razonsocial) Return Proveedor objects filtered by the proveedor_razonsocial column
 * @method array findByProveedorRfc(string $proveedor_rfc) Return Proveedor objects filtered by the proveedor_rfc column
 * @method array findByProveedorDireccion(string $proveedor_direccion) Return Proveedor objects filtered by the proveedor_direccion column
 * @method array findByProveedorColonia(string $proveedor_colonia) Return Proveedor objects filtered by the proveedor_colonia column
 * @method array findByProveedorCp(string $proveedor_cp) Return Proveedor objects filtered by the proveedor_cp column
 * @method array findByProveedorCiudad(string $proveedor_ciudad) Return Proveedor objects filtered by the proveedor_ciudad column
 * @method array findByProveedorEstado(string $proveedor_estado) Return Proveedor objects filtered by the proveedor_estado column
 * @method array findByProveedorContactonombre(string $proveedor_contactonombre) Return Proveedor objects filtered by the proveedor_contactonombre column
 * @method array findByProveedorContactotelefono(string $proveedor_contactotelefono) Return Proveedor objects filtered by the proveedor_contactotelefono column
 * @method array findByProveedorContactoemail(string $proveedor_contactoemail) Return Proveedor objects filtered by the proveedor_contactoemail column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseProveedorQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProveedorQuery object.
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
            $modelName = 'Proveedor';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProveedorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProveedorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProveedorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProveedorQuery) {
            return $criteria;
        }
        $query = new ProveedorQuery(null, null, $modelAlias);

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
     * @return   Proveedor|Proveedor[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProveedorPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProveedorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Proveedor A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdproveedor($key, $con = null)
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
     * @return                 Proveedor A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idproveedor`, `proveedor_nombrecomercial`, `proveedor_telefono`, `proveedor_celular`, `proveedor_fechainicio`, `proveedor_email`, `proveedor_razonsocial`, `proveedor_rfc`, `proveedor_direccion`, `proveedor_colonia`, `proveedor_cp`, `proveedor_ciudad`, `proveedor_estado`, `proveedor_contactonombre`, `proveedor_contactotelefono`, `proveedor_contactoemail` FROM `proveedor` WHERE `idproveedor` = :p0';
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
            $obj = new Proveedor();
            $obj->hydrate($row);
            ProveedorPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Proveedor|Proveedor[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Proveedor[]|mixed the list of results, formatted by the current formatter
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
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $keys, Criteria::IN);
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
     * @param     mixed $idproveedor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByIdproveedor($idproveedor = null, $comparison = null)
    {
        if (is_array($idproveedor)) {
            $useMinMax = false;
            if (isset($idproveedor['min'])) {
                $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $idproveedor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idproveedor['max'])) {
                $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $idproveedor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $idproveedor, $comparison);
    }

    /**
     * Filter the query on the proveedor_nombrecomercial column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorNombrecomercial('fooValue');   // WHERE proveedor_nombrecomercial = 'fooValue'
     * $query->filterByProveedorNombrecomercial('%fooValue%'); // WHERE proveedor_nombrecomercial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorNombrecomercial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorNombrecomercial($proveedorNombrecomercial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorNombrecomercial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorNombrecomercial)) {
                $proveedorNombrecomercial = str_replace('*', '%', $proveedorNombrecomercial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_NOMBRECOMERCIAL, $proveedorNombrecomercial, $comparison);
    }

    /**
     * Filter the query on the proveedor_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorTelefono('fooValue');   // WHERE proveedor_telefono = 'fooValue'
     * $query->filterByProveedorTelefono('%fooValue%'); // WHERE proveedor_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorTelefono($proveedorTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorTelefono)) {
                $proveedorTelefono = str_replace('*', '%', $proveedorTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_TELEFONO, $proveedorTelefono, $comparison);
    }

    /**
     * Filter the query on the proveedor_celular column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorCelular('fooValue');   // WHERE proveedor_celular = 'fooValue'
     * $query->filterByProveedorCelular('%fooValue%'); // WHERE proveedor_celular LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorCelular The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorCelular($proveedorCelular = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorCelular)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorCelular)) {
                $proveedorCelular = str_replace('*', '%', $proveedorCelular);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_CELULAR, $proveedorCelular, $comparison);
    }

    /**
     * Filter the query on the proveedor_fechainicio column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorFechainicio('2011-03-14'); // WHERE proveedor_fechainicio = '2011-03-14'
     * $query->filterByProveedorFechainicio('now'); // WHERE proveedor_fechainicio = '2011-03-14'
     * $query->filterByProveedorFechainicio(array('max' => 'yesterday')); // WHERE proveedor_fechainicio < '2011-03-13'
     * </code>
     *
     * @param     mixed $proveedorFechainicio The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorFechainicio($proveedorFechainicio = null, $comparison = null)
    {
        if (is_array($proveedorFechainicio)) {
            $useMinMax = false;
            if (isset($proveedorFechainicio['min'])) {
                $this->addUsingAlias(ProveedorPeer::PROVEEDOR_FECHAINICIO, $proveedorFechainicio['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($proveedorFechainicio['max'])) {
                $this->addUsingAlias(ProveedorPeer::PROVEEDOR_FECHAINICIO, $proveedorFechainicio['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_FECHAINICIO, $proveedorFechainicio, $comparison);
    }

    /**
     * Filter the query on the proveedor_email column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorEmail('fooValue');   // WHERE proveedor_email = 'fooValue'
     * $query->filterByProveedorEmail('%fooValue%'); // WHERE proveedor_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorEmail($proveedorEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorEmail)) {
                $proveedorEmail = str_replace('*', '%', $proveedorEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_EMAIL, $proveedorEmail, $comparison);
    }

    /**
     * Filter the query on the proveedor_razonsocial column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorRazonsocial('fooValue');   // WHERE proveedor_razonsocial = 'fooValue'
     * $query->filterByProveedorRazonsocial('%fooValue%'); // WHERE proveedor_razonsocial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorRazonsocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorRazonsocial($proveedorRazonsocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorRazonsocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorRazonsocial)) {
                $proveedorRazonsocial = str_replace('*', '%', $proveedorRazonsocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_RAZONSOCIAL, $proveedorRazonsocial, $comparison);
    }

    /**
     * Filter the query on the proveedor_rfc column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorRfc('fooValue');   // WHERE proveedor_rfc = 'fooValue'
     * $query->filterByProveedorRfc('%fooValue%'); // WHERE proveedor_rfc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorRfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorRfc($proveedorRfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorRfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorRfc)) {
                $proveedorRfc = str_replace('*', '%', $proveedorRfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_RFC, $proveedorRfc, $comparison);
    }

    /**
     * Filter the query on the proveedor_direccion column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorDireccion('fooValue');   // WHERE proveedor_direccion = 'fooValue'
     * $query->filterByProveedorDireccion('%fooValue%'); // WHERE proveedor_direccion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorDireccion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorDireccion($proveedorDireccion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorDireccion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorDireccion)) {
                $proveedorDireccion = str_replace('*', '%', $proveedorDireccion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_DIRECCION, $proveedorDireccion, $comparison);
    }

    /**
     * Filter the query on the proveedor_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorColonia('fooValue');   // WHERE proveedor_colonia = 'fooValue'
     * $query->filterByProveedorColonia('%fooValue%'); // WHERE proveedor_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorColonia($proveedorColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorColonia)) {
                $proveedorColonia = str_replace('*', '%', $proveedorColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_COLONIA, $proveedorColonia, $comparison);
    }

    /**
     * Filter the query on the proveedor_cp column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorCp('fooValue');   // WHERE proveedor_cp = 'fooValue'
     * $query->filterByProveedorCp('%fooValue%'); // WHERE proveedor_cp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorCp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorCp($proveedorCp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorCp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorCp)) {
                $proveedorCp = str_replace('*', '%', $proveedorCp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_CP, $proveedorCp, $comparison);
    }

    /**
     * Filter the query on the proveedor_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorCiudad('fooValue');   // WHERE proveedor_ciudad = 'fooValue'
     * $query->filterByProveedorCiudad('%fooValue%'); // WHERE proveedor_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorCiudad($proveedorCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorCiudad)) {
                $proveedorCiudad = str_replace('*', '%', $proveedorCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_CIUDAD, $proveedorCiudad, $comparison);
    }

    /**
     * Filter the query on the proveedor_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorEstado('fooValue');   // WHERE proveedor_estado = 'fooValue'
     * $query->filterByProveedorEstado('%fooValue%'); // WHERE proveedor_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorEstado($proveedorEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorEstado)) {
                $proveedorEstado = str_replace('*', '%', $proveedorEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_ESTADO, $proveedorEstado, $comparison);
    }

    /**
     * Filter the query on the proveedor_contactonombre column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorContactonombre('fooValue');   // WHERE proveedor_contactonombre = 'fooValue'
     * $query->filterByProveedorContactonombre('%fooValue%'); // WHERE proveedor_contactonombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorContactonombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorContactonombre($proveedorContactonombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorContactonombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorContactonombre)) {
                $proveedorContactonombre = str_replace('*', '%', $proveedorContactonombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_CONTACTONOMBRE, $proveedorContactonombre, $comparison);
    }

    /**
     * Filter the query on the proveedor_contactotelefono column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorContactotelefono('fooValue');   // WHERE proveedor_contactotelefono = 'fooValue'
     * $query->filterByProveedorContactotelefono('%fooValue%'); // WHERE proveedor_contactotelefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorContactotelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorContactotelefono($proveedorContactotelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorContactotelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorContactotelefono)) {
                $proveedorContactotelefono = str_replace('*', '%', $proveedorContactotelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_CONTACTOTELEFONO, $proveedorContactotelefono, $comparison);
    }

    /**
     * Filter the query on the proveedor_contactoemail column
     *
     * Example usage:
     * <code>
     * $query->filterByProveedorContactoemail('fooValue');   // WHERE proveedor_contactoemail = 'fooValue'
     * $query->filterByProveedorContactoemail('%fooValue%'); // WHERE proveedor_contactoemail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proveedorContactoemail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function filterByProveedorContactoemail($proveedorContactoemail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proveedorContactoemail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proveedorContactoemail)) {
                $proveedorContactoemail = str_replace('*', '%', $proveedorContactoemail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProveedorPeer::PROVEEDOR_CONTACTOEMAIL, $proveedorContactoemail, $comparison);
    }

    /**
     * Filter the query by a related Compra object
     *
     * @param   Compra|PropelObjectCollection $compra  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCompra($compra, $comparison = null)
    {
        if ($compra instanceof Compra) {
            return $this
                ->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $compra->getIdproveedor(), $comparison);
        } elseif ($compra instanceof PropelObjectCollection) {
            return $this
                ->useCompraQuery()
                ->filterByPrimaryKeys($compra->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCompra() only accepts arguments of type Compra or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Compra relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function joinCompra($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Compra');

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
            $this->addJoinObject($join, 'Compra');
        }

        return $this;
    }

    /**
     * Use the Compra relation Compra object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CompraQuery A secondary query class using the current class as primary query
     */
    public function useCompraQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCompra($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Compra', 'CompraQuery');
    }

    /**
     * Filter the query by a related Devolucion object
     *
     * @param   Devolucion|PropelObjectCollection $devolucion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDevolucion($devolucion, $comparison = null)
    {
        if ($devolucion instanceof Devolucion) {
            return $this
                ->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $devolucion->getIdproveedor(), $comparison);
        } elseif ($devolucion instanceof PropelObjectCollection) {
            return $this
                ->useDevolucionQuery()
                ->filterByPrimaryKeys($devolucion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByDevolucion() only accepts arguments of type Devolucion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Devolucion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function joinDevolucion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Devolucion');

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
            $this->addJoinObject($join, 'Devolucion');
        }

        return $this;
    }

    /**
     * Use the Devolucion relation Devolucion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DevolucionQuery A secondary query class using the current class as primary query
     */
    public function useDevolucionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDevolucion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Devolucion', 'DevolucionQuery');
    }

    /**
     * Filter the query by a related Producto object
     *
     * @param   Producto|PropelObjectCollection $producto  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProducto($producto, $comparison = null)
    {
        if ($producto instanceof Producto) {
            return $this
                ->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $producto->getIdproveedor(), $comparison);
        } elseif ($producto instanceof PropelObjectCollection) {
            return $this
                ->useProductoQuery()
                ->filterByPrimaryKeys($producto->getPrimaryKeys())
                ->endUse();
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
     * @return ProveedorQuery The current query, for fluid interface
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
     * Filter the query by a related Proveedormarca object
     *
     * @param   Proveedormarca|PropelObjectCollection $proveedormarca  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ProveedorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProveedormarca($proveedormarca, $comparison = null)
    {
        if ($proveedormarca instanceof Proveedormarca) {
            return $this
                ->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $proveedormarca->getIdproveedor(), $comparison);
        } elseif ($proveedormarca instanceof PropelObjectCollection) {
            return $this
                ->useProveedormarcaQuery()
                ->filterByPrimaryKeys($proveedormarca->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProveedormarca() only accepts arguments of type Proveedormarca or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Proveedormarca relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function joinProveedormarca($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Proveedormarca');

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
            $this->addJoinObject($join, 'Proveedormarca');
        }

        return $this;
    }

    /**
     * Use the Proveedormarca relation Proveedormarca object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProveedormarcaQuery A secondary query class using the current class as primary query
     */
    public function useProveedormarcaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProveedormarca($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Proveedormarca', 'ProveedormarcaQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Proveedor $proveedor Object to remove from the list of results
     *
     * @return ProveedorQuery The current query, for fluid interface
     */
    public function prune($proveedor = null)
    {
        if ($proveedor) {
            $this->addUsingAlias(ProveedorPeer::IDPROVEEDOR, $proveedor->getIdproveedor(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
