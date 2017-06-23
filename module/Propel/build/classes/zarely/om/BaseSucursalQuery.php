<?php


/**
 * Base class that represents a query for the 'sucursal' table.
 *
 *
 *
 * @method SucursalQuery orderByIdsucursal($order = Criteria::ASC) Order by the idsucursal column
 * @method SucursalQuery orderBySucursalNombrecomercial($order = Criteria::ASC) Order by the sucursal_nombrecomercial column
 * @method SucursalQuery orderBySucursalRazonsocial($order = Criteria::ASC) Order by the sucursal_razonsocial column
 * @method SucursalQuery orderBySucursalCalle($order = Criteria::ASC) Order by the sucursal_calle column
 * @method SucursalQuery orderBySucursalNumexterno($order = Criteria::ASC) Order by the sucursal_numexterno column
 * @method SucursalQuery orderBySucursalNuminterior($order = Criteria::ASC) Order by the sucursal_numinterior column
 * @method SucursalQuery orderBySucursalColonia($order = Criteria::ASC) Order by the sucursal_colonia column
 * @method SucursalQuery orderBySucursalCodigopostal($order = Criteria::ASC) Order by the sucursal_codigopostal column
 * @method SucursalQuery orderBySucursalCiudad($order = Criteria::ASC) Order by the sucursal_ciudad column
 * @method SucursalQuery orderBySucursalEstado($order = Criteria::ASC) Order by the sucursal_estado column
 *
 * @method SucursalQuery groupByIdsucursal() Group by the idsucursal column
 * @method SucursalQuery groupBySucursalNombrecomercial() Group by the sucursal_nombrecomercial column
 * @method SucursalQuery groupBySucursalRazonsocial() Group by the sucursal_razonsocial column
 * @method SucursalQuery groupBySucursalCalle() Group by the sucursal_calle column
 * @method SucursalQuery groupBySucursalNumexterno() Group by the sucursal_numexterno column
 * @method SucursalQuery groupBySucursalNuminterior() Group by the sucursal_numinterior column
 * @method SucursalQuery groupBySucursalColonia() Group by the sucursal_colonia column
 * @method SucursalQuery groupBySucursalCodigopostal() Group by the sucursal_codigopostal column
 * @method SucursalQuery groupBySucursalCiudad() Group by the sucursal_ciudad column
 * @method SucursalQuery groupBySucursalEstado() Group by the sucursal_estado column
 *
 * @method SucursalQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method SucursalQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method SucursalQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method SucursalQuery leftJoinCortecaja($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cortecaja relation
 * @method SucursalQuery rightJoinCortecaja($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cortecaja relation
 * @method SucursalQuery innerJoinCortecaja($relationAlias = null) Adds a INNER JOIN clause to the query using the Cortecaja relation
 *
 * @method SucursalQuery leftJoinPedido($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pedido relation
 * @method SucursalQuery rightJoinPedido($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pedido relation
 * @method SucursalQuery innerJoinPedido($relationAlias = null) Adds a INNER JOIN clause to the query using the Pedido relation
 *
 * @method SucursalQuery leftJoinProductosucursal($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productosucursal relation
 * @method SucursalQuery rightJoinProductosucursal($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productosucursal relation
 * @method SucursalQuery innerJoinProductosucursal($relationAlias = null) Adds a INNER JOIN clause to the query using the Productosucursal relation
 *
 * @method SucursalQuery leftJoinSucursalempleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursalempleado relation
 * @method SucursalQuery rightJoinSucursalempleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursalempleado relation
 * @method SucursalQuery innerJoinSucursalempleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursalempleado relation
 *
 * @method SucursalQuery leftJoinTransferenciaRelatedByIdsucursaldestino($relationAlias = null) Adds a LEFT JOIN clause to the query using the TransferenciaRelatedByIdsucursaldestino relation
 * @method SucursalQuery rightJoinTransferenciaRelatedByIdsucursaldestino($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TransferenciaRelatedByIdsucursaldestino relation
 * @method SucursalQuery innerJoinTransferenciaRelatedByIdsucursaldestino($relationAlias = null) Adds a INNER JOIN clause to the query using the TransferenciaRelatedByIdsucursaldestino relation
 *
 * @method SucursalQuery leftJoinTransferenciaRelatedByIdsucursalorigen($relationAlias = null) Adds a LEFT JOIN clause to the query using the TransferenciaRelatedByIdsucursalorigen relation
 * @method SucursalQuery rightJoinTransferenciaRelatedByIdsucursalorigen($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TransferenciaRelatedByIdsucursalorigen relation
 * @method SucursalQuery innerJoinTransferenciaRelatedByIdsucursalorigen($relationAlias = null) Adds a INNER JOIN clause to the query using the TransferenciaRelatedByIdsucursalorigen relation
 *
 * @method SucursalQuery leftJoinVale($relationAlias = null) Adds a LEFT JOIN clause to the query using the Vale relation
 * @method SucursalQuery rightJoinVale($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Vale relation
 * @method SucursalQuery innerJoinVale($relationAlias = null) Adds a INNER JOIN clause to the query using the Vale relation
 *
 * @method SucursalQuery leftJoinVenta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Venta relation
 * @method SucursalQuery rightJoinVenta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Venta relation
 * @method SucursalQuery innerJoinVenta($relationAlias = null) Adds a INNER JOIN clause to the query using the Venta relation
 *
 * @method Sucursal findOne(PropelPDO $con = null) Return the first Sucursal matching the query
 * @method Sucursal findOneOrCreate(PropelPDO $con = null) Return the first Sucursal matching the query, or a new Sucursal object populated from the query conditions when no match is found
 *
 * @method Sucursal findOneBySucursalNombrecomercial(string $sucursal_nombrecomercial) Return the first Sucursal filtered by the sucursal_nombrecomercial column
 * @method Sucursal findOneBySucursalRazonsocial(string $sucursal_razonsocial) Return the first Sucursal filtered by the sucursal_razonsocial column
 * @method Sucursal findOneBySucursalCalle(string $sucursal_calle) Return the first Sucursal filtered by the sucursal_calle column
 * @method Sucursal findOneBySucursalNumexterno(string $sucursal_numexterno) Return the first Sucursal filtered by the sucursal_numexterno column
 * @method Sucursal findOneBySucursalNuminterior(string $sucursal_numinterior) Return the first Sucursal filtered by the sucursal_numinterior column
 * @method Sucursal findOneBySucursalColonia(string $sucursal_colonia) Return the first Sucursal filtered by the sucursal_colonia column
 * @method Sucursal findOneBySucursalCodigopostal(string $sucursal_codigopostal) Return the first Sucursal filtered by the sucursal_codigopostal column
 * @method Sucursal findOneBySucursalCiudad(string $sucursal_ciudad) Return the first Sucursal filtered by the sucursal_ciudad column
 * @method Sucursal findOneBySucursalEstado(string $sucursal_estado) Return the first Sucursal filtered by the sucursal_estado column
 *
 * @method array findByIdsucursal(int $idsucursal) Return Sucursal objects filtered by the idsucursal column
 * @method array findBySucursalNombrecomercial(string $sucursal_nombrecomercial) Return Sucursal objects filtered by the sucursal_nombrecomercial column
 * @method array findBySucursalRazonsocial(string $sucursal_razonsocial) Return Sucursal objects filtered by the sucursal_razonsocial column
 * @method array findBySucursalCalle(string $sucursal_calle) Return Sucursal objects filtered by the sucursal_calle column
 * @method array findBySucursalNumexterno(string $sucursal_numexterno) Return Sucursal objects filtered by the sucursal_numexterno column
 * @method array findBySucursalNuminterior(string $sucursal_numinterior) Return Sucursal objects filtered by the sucursal_numinterior column
 * @method array findBySucursalColonia(string $sucursal_colonia) Return Sucursal objects filtered by the sucursal_colonia column
 * @method array findBySucursalCodigopostal(string $sucursal_codigopostal) Return Sucursal objects filtered by the sucursal_codigopostal column
 * @method array findBySucursalCiudad(string $sucursal_ciudad) Return Sucursal objects filtered by the sucursal_ciudad column
 * @method array findBySucursalEstado(string $sucursal_estado) Return Sucursal objects filtered by the sucursal_estado column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseSucursalQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseSucursalQuery object.
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
            $modelName = 'Sucursal';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new SucursalQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   SucursalQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return SucursalQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof SucursalQuery) {
            return $criteria;
        }
        $query = new SucursalQuery(null, null, $modelAlias);

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
     * @return   Sucursal|Sucursal[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = SucursalPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(SucursalPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Sucursal A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdsucursal($key, $con = null)
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
     * @return                 Sucursal A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idsucursal`, `sucursal_nombrecomercial`, `sucursal_razonsocial`, `sucursal_calle`, `sucursal_numexterno`, `sucursal_numinterior`, `sucursal_colonia`, `sucursal_codigopostal`, `sucursal_ciudad`, `sucursal_estado` FROM `sucursal` WHERE `idsucursal` = :p0';
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
            $obj = new Sucursal();
            $obj->hydrate($row);
            SucursalPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Sucursal|Sucursal[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Sucursal[]|mixed the list of results, formatted by the current formatter
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
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $keys, Criteria::IN);
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
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterByIdsucursal($idsucursal = null, $comparison = null)
    {
        if (is_array($idsucursal)) {
            $useMinMax = false;
            if (isset($idsucursal['min'])) {
                $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $idsucursal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idsucursal['max'])) {
                $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $idsucursal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $idsucursal, $comparison);
    }

    /**
     * Filter the query on the sucursal_nombrecomercial column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalNombrecomercial('fooValue');   // WHERE sucursal_nombrecomercial = 'fooValue'
     * $query->filterBySucursalNombrecomercial('%fooValue%'); // WHERE sucursal_nombrecomercial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sucursalNombrecomercial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalNombrecomercial($sucursalNombrecomercial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sucursalNombrecomercial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sucursalNombrecomercial)) {
                $sucursalNombrecomercial = str_replace('*', '%', $sucursalNombrecomercial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_NOMBRECOMERCIAL, $sucursalNombrecomercial, $comparison);
    }

    /**
     * Filter the query on the sucursal_razonsocial column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalRazonsocial('fooValue');   // WHERE sucursal_razonsocial = 'fooValue'
     * $query->filterBySucursalRazonsocial('%fooValue%'); // WHERE sucursal_razonsocial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sucursalRazonsocial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalRazonsocial($sucursalRazonsocial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sucursalRazonsocial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sucursalRazonsocial)) {
                $sucursalRazonsocial = str_replace('*', '%', $sucursalRazonsocial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_RAZONSOCIAL, $sucursalRazonsocial, $comparison);
    }

    /**
     * Filter the query on the sucursal_calle column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalCalle('fooValue');   // WHERE sucursal_calle = 'fooValue'
     * $query->filterBySucursalCalle('%fooValue%'); // WHERE sucursal_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sucursalCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalCalle($sucursalCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sucursalCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sucursalCalle)) {
                $sucursalCalle = str_replace('*', '%', $sucursalCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_CALLE, $sucursalCalle, $comparison);
    }

    /**
     * Filter the query on the sucursal_numexterno column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalNumexterno('fooValue');   // WHERE sucursal_numexterno = 'fooValue'
     * $query->filterBySucursalNumexterno('%fooValue%'); // WHERE sucursal_numexterno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sucursalNumexterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalNumexterno($sucursalNumexterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sucursalNumexterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sucursalNumexterno)) {
                $sucursalNumexterno = str_replace('*', '%', $sucursalNumexterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_NUMEXTERNO, $sucursalNumexterno, $comparison);
    }

    /**
     * Filter the query on the sucursal_numinterior column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalNuminterior('fooValue');   // WHERE sucursal_numinterior = 'fooValue'
     * $query->filterBySucursalNuminterior('%fooValue%'); // WHERE sucursal_numinterior LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sucursalNuminterior The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalNuminterior($sucursalNuminterior = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sucursalNuminterior)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sucursalNuminterior)) {
                $sucursalNuminterior = str_replace('*', '%', $sucursalNuminterior);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_NUMINTERIOR, $sucursalNuminterior, $comparison);
    }

    /**
     * Filter the query on the sucursal_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalColonia('fooValue');   // WHERE sucursal_colonia = 'fooValue'
     * $query->filterBySucursalColonia('%fooValue%'); // WHERE sucursal_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sucursalColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalColonia($sucursalColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sucursalColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sucursalColonia)) {
                $sucursalColonia = str_replace('*', '%', $sucursalColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_COLONIA, $sucursalColonia, $comparison);
    }

    /**
     * Filter the query on the sucursal_codigopostal column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalCodigopostal('fooValue');   // WHERE sucursal_codigopostal = 'fooValue'
     * $query->filterBySucursalCodigopostal('%fooValue%'); // WHERE sucursal_codigopostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sucursalCodigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalCodigopostal($sucursalCodigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sucursalCodigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sucursalCodigopostal)) {
                $sucursalCodigopostal = str_replace('*', '%', $sucursalCodigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_CODIGOPOSTAL, $sucursalCodigopostal, $comparison);
    }

    /**
     * Filter the query on the sucursal_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalCiudad('fooValue');   // WHERE sucursal_ciudad = 'fooValue'
     * $query->filterBySucursalCiudad('%fooValue%'); // WHERE sucursal_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sucursalCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalCiudad($sucursalCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sucursalCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sucursalCiudad)) {
                $sucursalCiudad = str_replace('*', '%', $sucursalCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_CIUDAD, $sucursalCiudad, $comparison);
    }

    /**
     * Filter the query on the sucursal_estado column
     *
     * Example usage:
     * <code>
     * $query->filterBySucursalEstado('fooValue');   // WHERE sucursal_estado = 'fooValue'
     * $query->filterBySucursalEstado('%fooValue%'); // WHERE sucursal_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sucursalEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function filterBySucursalEstado($sucursalEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sucursalEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sucursalEstado)) {
                $sucursalEstado = str_replace('*', '%', $sucursalEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(SucursalPeer::SUCURSAL_ESTADO, $sucursalEstado, $comparison);
    }

    /**
     * Filter the query by a related Cortecaja object
     *
     * @param   Cortecaja|PropelObjectCollection $cortecaja  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCortecaja($cortecaja, $comparison = null)
    {
        if ($cortecaja instanceof Cortecaja) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $cortecaja->getIdsucursal(), $comparison);
        } elseif ($cortecaja instanceof PropelObjectCollection) {
            return $this
                ->useCortecajaQuery()
                ->filterByPrimaryKeys($cortecaja->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCortecaja() only accepts arguments of type Cortecaja or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cortecaja relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinCortecaja($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cortecaja');

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
            $this->addJoinObject($join, 'Cortecaja');
        }

        return $this;
    }

    /**
     * Use the Cortecaja relation Cortecaja object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CortecajaQuery A secondary query class using the current class as primary query
     */
    public function useCortecajaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCortecaja($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cortecaja', 'CortecajaQuery');
    }

    /**
     * Filter the query by a related Pedido object
     *
     * @param   Pedido|PropelObjectCollection $pedido  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByPedido($pedido, $comparison = null)
    {
        if ($pedido instanceof Pedido) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $pedido->getIdsucursal(), $comparison);
        } elseif ($pedido instanceof PropelObjectCollection) {
            return $this
                ->usePedidoQuery()
                ->filterByPrimaryKeys($pedido->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByPedido() only accepts arguments of type Pedido or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pedido relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinPedido($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pedido');

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
            $this->addJoinObject($join, 'Pedido');
        }

        return $this;
    }

    /**
     * Use the Pedido relation Pedido object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PedidoQuery A secondary query class using the current class as primary query
     */
    public function usePedidoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPedido($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pedido', 'PedidoQuery');
    }

    /**
     * Filter the query by a related Productosucursal object
     *
     * @param   Productosucursal|PropelObjectCollection $productosucursal  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductosucursal($productosucursal, $comparison = null)
    {
        if ($productosucursal instanceof Productosucursal) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $productosucursal->getIdsucursal(), $comparison);
        } elseif ($productosucursal instanceof PropelObjectCollection) {
            return $this
                ->useProductosucursalQuery()
                ->filterByPrimaryKeys($productosucursal->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductosucursal() only accepts arguments of type Productosucursal or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productosucursal relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinProductosucursal($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productosucursal');

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
            $this->addJoinObject($join, 'Productosucursal');
        }

        return $this;
    }

    /**
     * Use the Productosucursal relation Productosucursal object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductosucursalQuery A secondary query class using the current class as primary query
     */
    public function useProductosucursalQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductosucursal($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productosucursal', 'ProductosucursalQuery');
    }

    /**
     * Filter the query by a related Sucursalempleado object
     *
     * @param   Sucursalempleado|PropelObjectCollection $sucursalempleado  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursalempleado($sucursalempleado, $comparison = null)
    {
        if ($sucursalempleado instanceof Sucursalempleado) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $sucursalempleado->getIdsucursal(), $comparison);
        } elseif ($sucursalempleado instanceof PropelObjectCollection) {
            return $this
                ->useSucursalempleadoQuery()
                ->filterByPrimaryKeys($sucursalempleado->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterBySucursalempleado() only accepts arguments of type Sucursalempleado or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Sucursalempleado relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinSucursalempleado($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Sucursalempleado');

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
            $this->addJoinObject($join, 'Sucursalempleado');
        }

        return $this;
    }

    /**
     * Use the Sucursalempleado relation Sucursalempleado object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   SucursalempleadoQuery A secondary query class using the current class as primary query
     */
    public function useSucursalempleadoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSucursalempleado($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Sucursalempleado', 'SucursalempleadoQuery');
    }

    /**
     * Filter the query by a related Transferencia object
     *
     * @param   Transferencia|PropelObjectCollection $transferencia  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTransferenciaRelatedByIdsucursaldestino($transferencia, $comparison = null)
    {
        if ($transferencia instanceof Transferencia) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $transferencia->getIdsucursaldestino(), $comparison);
        } elseif ($transferencia instanceof PropelObjectCollection) {
            return $this
                ->useTransferenciaRelatedByIdsucursaldestinoQuery()
                ->filterByPrimaryKeys($transferencia->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTransferenciaRelatedByIdsucursaldestino() only accepts arguments of type Transferencia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TransferenciaRelatedByIdsucursaldestino relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinTransferenciaRelatedByIdsucursaldestino($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TransferenciaRelatedByIdsucursaldestino');

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
            $this->addJoinObject($join, 'TransferenciaRelatedByIdsucursaldestino');
        }

        return $this;
    }

    /**
     * Use the TransferenciaRelatedByIdsucursaldestino relation Transferencia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TransferenciaQuery A secondary query class using the current class as primary query
     */
    public function useTransferenciaRelatedByIdsucursaldestinoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTransferenciaRelatedByIdsucursaldestino($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TransferenciaRelatedByIdsucursaldestino', 'TransferenciaQuery');
    }

    /**
     * Filter the query by a related Transferencia object
     *
     * @param   Transferencia|PropelObjectCollection $transferencia  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTransferenciaRelatedByIdsucursalorigen($transferencia, $comparison = null)
    {
        if ($transferencia instanceof Transferencia) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $transferencia->getIdsucursalorigen(), $comparison);
        } elseif ($transferencia instanceof PropelObjectCollection) {
            return $this
                ->useTransferenciaRelatedByIdsucursalorigenQuery()
                ->filterByPrimaryKeys($transferencia->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTransferenciaRelatedByIdsucursalorigen() only accepts arguments of type Transferencia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TransferenciaRelatedByIdsucursalorigen relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinTransferenciaRelatedByIdsucursalorigen($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TransferenciaRelatedByIdsucursalorigen');

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
            $this->addJoinObject($join, 'TransferenciaRelatedByIdsucursalorigen');
        }

        return $this;
    }

    /**
     * Use the TransferenciaRelatedByIdsucursalorigen relation Transferencia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TransferenciaQuery A secondary query class using the current class as primary query
     */
    public function useTransferenciaRelatedByIdsucursalorigenQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTransferenciaRelatedByIdsucursalorigen($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TransferenciaRelatedByIdsucursalorigen', 'TransferenciaQuery');
    }

    /**
     * Filter the query by a related Vale object
     *
     * @param   Vale|PropelObjectCollection $vale  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVale($vale, $comparison = null)
    {
        if ($vale instanceof Vale) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $vale->getIdsucursal(), $comparison);
        } elseif ($vale instanceof PropelObjectCollection) {
            return $this
                ->useValeQuery()
                ->filterByPrimaryKeys($vale->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVale() only accepts arguments of type Vale or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Vale relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function joinVale($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Vale');

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
            $this->addJoinObject($join, 'Vale');
        }

        return $this;
    }

    /**
     * Use the Vale relation Vale object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ValeQuery A secondary query class using the current class as primary query
     */
    public function useValeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVale($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Vale', 'ValeQuery');
    }

    /**
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 SucursalQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVenta($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(SucursalPeer::IDSUCURSAL, $venta->getIdsucursal(), $comparison);
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
     * @return SucursalQuery The current query, for fluid interface
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
     * @param   Sucursal $sucursal Object to remove from the list of results
     *
     * @return SucursalQuery The current query, for fluid interface
     */
    public function prune($sucursal = null)
    {
        if ($sucursal) {
            $this->addUsingAlias(SucursalPeer::IDSUCURSAL, $sucursal->getIdsucursal(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
