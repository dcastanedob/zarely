<?php


/**
 * Base class that represents a query for the 'empleado' table.
 *
 *
 *
 * @method EmpleadoQuery orderByIdempleado($order = Criteria::ASC) Order by the idempleado column
 * @method EmpleadoQuery orderByEmpleadoNombre($order = Criteria::ASC) Order by the empleado_nombre column
 * @method EmpleadoQuery orderByEmpleadoApaterno($order = Criteria::ASC) Order by the empleado_apaterno column
 * @method EmpleadoQuery orderByEmpleadoAmaterno($order = Criteria::ASC) Order by the empleado_amaterno column
 * @method EmpleadoQuery orderByEmpleadoRfc($order = Criteria::ASC) Order by the empleado_rfc column
 * @method EmpleadoQuery orderByEmpleadoNss($order = Criteria::ASC) Order by the empleado_nss column
 * @method EmpleadoQuery orderByEmpleadoCurp($order = Criteria::ASC) Order by the empleado_curp column
 * @method EmpleadoQuery orderByEmpleadoTelefono($order = Criteria::ASC) Order by the empleado_telefono column
 * @method EmpleadoQuery orderByEmpleadoEmail($order = Criteria::ASC) Order by the empleado_email column
 * @method EmpleadoQuery orderByEmpleadoEstatus($order = Criteria::ASC) Order by the empleado_estatus column
 * @method EmpleadoQuery orderByEmpleadoUsername($order = Criteria::ASC) Order by the empleado_username column
 * @method EmpleadoQuery orderByEmpleadoPassword($order = Criteria::ASC) Order by the empleado_password column
 * @method EmpleadoQuery orderByEmpleadoComision($order = Criteria::ASC) Order by the empleado_comision column
 * @method EmpleadoQuery orderByEmpleadoFechaentrada($order = Criteria::ASC) Order by the empleado_fechaentrada column
 * @method EmpleadoQuery orderByEmpleadoFechanacimiento($order = Criteria::ASC) Order by the empleado_fechanacimiento column
 * @method EmpleadoQuery orderByEmpleadoCalle($order = Criteria::ASC) Order by the empleado_calle column
 * @method EmpleadoQuery orderByEmpleadoNumexterno($order = Criteria::ASC) Order by the empleado_numexterno column
 * @method EmpleadoQuery orderByEmpleadoNuminterno($order = Criteria::ASC) Order by the empleado_numinterno column
 * @method EmpleadoQuery orderByEmpleadoColonia($order = Criteria::ASC) Order by the empleado_colonia column
 * @method EmpleadoQuery orderByEmpleadoCodigopostal($order = Criteria::ASC) Order by the empleado_codigopostal column
 * @method EmpleadoQuery orderByEmpleadoCiudad($order = Criteria::ASC) Order by the empleado_ciudad column
 * @method EmpleadoQuery orderByEmpleadoEstado($order = Criteria::ASC) Order by the empleado_estado column
 * @method EmpleadoQuery orderByIdrol($order = Criteria::ASC) Order by the idrol column
 *
 * @method EmpleadoQuery groupByIdempleado() Group by the idempleado column
 * @method EmpleadoQuery groupByEmpleadoNombre() Group by the empleado_nombre column
 * @method EmpleadoQuery groupByEmpleadoApaterno() Group by the empleado_apaterno column
 * @method EmpleadoQuery groupByEmpleadoAmaterno() Group by the empleado_amaterno column
 * @method EmpleadoQuery groupByEmpleadoRfc() Group by the empleado_rfc column
 * @method EmpleadoQuery groupByEmpleadoNss() Group by the empleado_nss column
 * @method EmpleadoQuery groupByEmpleadoCurp() Group by the empleado_curp column
 * @method EmpleadoQuery groupByEmpleadoTelefono() Group by the empleado_telefono column
 * @method EmpleadoQuery groupByEmpleadoEmail() Group by the empleado_email column
 * @method EmpleadoQuery groupByEmpleadoEstatus() Group by the empleado_estatus column
 * @method EmpleadoQuery groupByEmpleadoUsername() Group by the empleado_username column
 * @method EmpleadoQuery groupByEmpleadoPassword() Group by the empleado_password column
 * @method EmpleadoQuery groupByEmpleadoComision() Group by the empleado_comision column
 * @method EmpleadoQuery groupByEmpleadoFechaentrada() Group by the empleado_fechaentrada column
 * @method EmpleadoQuery groupByEmpleadoFechanacimiento() Group by the empleado_fechanacimiento column
 * @method EmpleadoQuery groupByEmpleadoCalle() Group by the empleado_calle column
 * @method EmpleadoQuery groupByEmpleadoNumexterno() Group by the empleado_numexterno column
 * @method EmpleadoQuery groupByEmpleadoNuminterno() Group by the empleado_numinterno column
 * @method EmpleadoQuery groupByEmpleadoColonia() Group by the empleado_colonia column
 * @method EmpleadoQuery groupByEmpleadoCodigopostal() Group by the empleado_codigopostal column
 * @method EmpleadoQuery groupByEmpleadoCiudad() Group by the empleado_ciudad column
 * @method EmpleadoQuery groupByEmpleadoEstado() Group by the empleado_estado column
 * @method EmpleadoQuery groupByIdrol() Group by the idrol column
 *
 * @method EmpleadoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method EmpleadoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method EmpleadoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method EmpleadoQuery leftJoinRol($relationAlias = null) Adds a LEFT JOIN clause to the query using the Rol relation
 * @method EmpleadoQuery rightJoinRol($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Rol relation
 * @method EmpleadoQuery innerJoinRol($relationAlias = null) Adds a INNER JOIN clause to the query using the Rol relation
 *
 * @method EmpleadoQuery leftJoinCortecaja($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cortecaja relation
 * @method EmpleadoQuery rightJoinCortecaja($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cortecaja relation
 * @method EmpleadoQuery innerJoinCortecaja($relationAlias = null) Adds a INNER JOIN clause to the query using the Cortecaja relation
 *
 * @method EmpleadoQuery leftJoinCuentabancariamovimiento($relationAlias = null) Adds a LEFT JOIN clause to the query using the Cuentabancariamovimiento relation
 * @method EmpleadoQuery rightJoinCuentabancariamovimiento($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Cuentabancariamovimiento relation
 * @method EmpleadoQuery innerJoinCuentabancariamovimiento($relationAlias = null) Adds a INNER JOIN clause to the query using the Cuentabancariamovimiento relation
 *
 * @method EmpleadoQuery leftJoinNotificacion($relationAlias = null) Adds a LEFT JOIN clause to the query using the Notificacion relation
 * @method EmpleadoQuery rightJoinNotificacion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Notificacion relation
 * @method EmpleadoQuery innerJoinNotificacion($relationAlias = null) Adds a INNER JOIN clause to the query using the Notificacion relation
 *
 * @method EmpleadoQuery leftJoinSucursalempleado($relationAlias = null) Adds a LEFT JOIN clause to the query using the Sucursalempleado relation
 * @method EmpleadoQuery rightJoinSucursalempleado($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Sucursalempleado relation
 * @method EmpleadoQuery innerJoinSucursalempleado($relationAlias = null) Adds a INNER JOIN clause to the query using the Sucursalempleado relation
 *
 * @method EmpleadoQuery leftJoinTransferenciaRelatedByIdempleadocreador($relationAlias = null) Adds a LEFT JOIN clause to the query using the TransferenciaRelatedByIdempleadocreador relation
 * @method EmpleadoQuery rightJoinTransferenciaRelatedByIdempleadocreador($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TransferenciaRelatedByIdempleadocreador relation
 * @method EmpleadoQuery innerJoinTransferenciaRelatedByIdempleadocreador($relationAlias = null) Adds a INNER JOIN clause to the query using the TransferenciaRelatedByIdempleadocreador relation
 *
 * @method EmpleadoQuery leftJoinTransferenciaRelatedByIdempleadoreceptor($relationAlias = null) Adds a LEFT JOIN clause to the query using the TransferenciaRelatedByIdempleadoreceptor relation
 * @method EmpleadoQuery rightJoinTransferenciaRelatedByIdempleadoreceptor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TransferenciaRelatedByIdempleadoreceptor relation
 * @method EmpleadoQuery innerJoinTransferenciaRelatedByIdempleadoreceptor($relationAlias = null) Adds a INNER JOIN clause to the query using the TransferenciaRelatedByIdempleadoreceptor relation
 *
 * @method EmpleadoQuery leftJoinVentaRelatedByIdempleadocajero($relationAlias = null) Adds a LEFT JOIN clause to the query using the VentaRelatedByIdempleadocajero relation
 * @method EmpleadoQuery rightJoinVentaRelatedByIdempleadocajero($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VentaRelatedByIdempleadocajero relation
 * @method EmpleadoQuery innerJoinVentaRelatedByIdempleadocajero($relationAlias = null) Adds a INNER JOIN clause to the query using the VentaRelatedByIdempleadocajero relation
 *
 * @method EmpleadoQuery leftJoinVentaRelatedByIdempleadovendedor($relationAlias = null) Adds a LEFT JOIN clause to the query using the VentaRelatedByIdempleadovendedor relation
 * @method EmpleadoQuery rightJoinVentaRelatedByIdempleadovendedor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the VentaRelatedByIdempleadovendedor relation
 * @method EmpleadoQuery innerJoinVentaRelatedByIdempleadovendedor($relationAlias = null) Adds a INNER JOIN clause to the query using the VentaRelatedByIdempleadovendedor relation
 *
 * @method EmpleadoQuery leftJoinVentapago($relationAlias = null) Adds a LEFT JOIN clause to the query using the Ventapago relation
 * @method EmpleadoQuery rightJoinVentapago($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Ventapago relation
 * @method EmpleadoQuery innerJoinVentapago($relationAlias = null) Adds a INNER JOIN clause to the query using the Ventapago relation
 *
 * @method Empleado findOne(PropelPDO $con = null) Return the first Empleado matching the query
 * @method Empleado findOneOrCreate(PropelPDO $con = null) Return the first Empleado matching the query, or a new Empleado object populated from the query conditions when no match is found
 *
 * @method Empleado findOneByEmpleadoNombre(string $empleado_nombre) Return the first Empleado filtered by the empleado_nombre column
 * @method Empleado findOneByEmpleadoApaterno(string $empleado_apaterno) Return the first Empleado filtered by the empleado_apaterno column
 * @method Empleado findOneByEmpleadoAmaterno(string $empleado_amaterno) Return the first Empleado filtered by the empleado_amaterno column
 * @method Empleado findOneByEmpleadoRfc(string $empleado_rfc) Return the first Empleado filtered by the empleado_rfc column
 * @method Empleado findOneByEmpleadoNss(string $empleado_nss) Return the first Empleado filtered by the empleado_nss column
 * @method Empleado findOneByEmpleadoCurp(string $empleado_curp) Return the first Empleado filtered by the empleado_curp column
 * @method Empleado findOneByEmpleadoTelefono(string $empleado_telefono) Return the first Empleado filtered by the empleado_telefono column
 * @method Empleado findOneByEmpleadoEmail(string $empleado_email) Return the first Empleado filtered by the empleado_email column
 * @method Empleado findOneByEmpleadoEstatus(boolean $empleado_estatus) Return the first Empleado filtered by the empleado_estatus column
 * @method Empleado findOneByEmpleadoUsername(string $empleado_username) Return the first Empleado filtered by the empleado_username column
 * @method Empleado findOneByEmpleadoPassword(string $empleado_password) Return the first Empleado filtered by the empleado_password column
 * @method Empleado findOneByEmpleadoComision(boolean $empleado_comision) Return the first Empleado filtered by the empleado_comision column
 * @method Empleado findOneByEmpleadoFechaentrada(string $empleado_fechaentrada) Return the first Empleado filtered by the empleado_fechaentrada column
 * @method Empleado findOneByEmpleadoFechanacimiento(string $empleado_fechanacimiento) Return the first Empleado filtered by the empleado_fechanacimiento column
 * @method Empleado findOneByEmpleadoCalle(string $empleado_calle) Return the first Empleado filtered by the empleado_calle column
 * @method Empleado findOneByEmpleadoNumexterno(string $empleado_numexterno) Return the first Empleado filtered by the empleado_numexterno column
 * @method Empleado findOneByEmpleadoNuminterno(string $empleado_numinterno) Return the first Empleado filtered by the empleado_numinterno column
 * @method Empleado findOneByEmpleadoColonia(string $empleado_colonia) Return the first Empleado filtered by the empleado_colonia column
 * @method Empleado findOneByEmpleadoCodigopostal(string $empleado_codigopostal) Return the first Empleado filtered by the empleado_codigopostal column
 * @method Empleado findOneByEmpleadoCiudad(string $empleado_ciudad) Return the first Empleado filtered by the empleado_ciudad column
 * @method Empleado findOneByEmpleadoEstado(string $empleado_estado) Return the first Empleado filtered by the empleado_estado column
 * @method Empleado findOneByIdrol(int $idrol) Return the first Empleado filtered by the idrol column
 *
 * @method array findByIdempleado(int $idempleado) Return Empleado objects filtered by the idempleado column
 * @method array findByEmpleadoNombre(string $empleado_nombre) Return Empleado objects filtered by the empleado_nombre column
 * @method array findByEmpleadoApaterno(string $empleado_apaterno) Return Empleado objects filtered by the empleado_apaterno column
 * @method array findByEmpleadoAmaterno(string $empleado_amaterno) Return Empleado objects filtered by the empleado_amaterno column
 * @method array findByEmpleadoRfc(string $empleado_rfc) Return Empleado objects filtered by the empleado_rfc column
 * @method array findByEmpleadoNss(string $empleado_nss) Return Empleado objects filtered by the empleado_nss column
 * @method array findByEmpleadoCurp(string $empleado_curp) Return Empleado objects filtered by the empleado_curp column
 * @method array findByEmpleadoTelefono(string $empleado_telefono) Return Empleado objects filtered by the empleado_telefono column
 * @method array findByEmpleadoEmail(string $empleado_email) Return Empleado objects filtered by the empleado_email column
 * @method array findByEmpleadoEstatus(boolean $empleado_estatus) Return Empleado objects filtered by the empleado_estatus column
 * @method array findByEmpleadoUsername(string $empleado_username) Return Empleado objects filtered by the empleado_username column
 * @method array findByEmpleadoPassword(string $empleado_password) Return Empleado objects filtered by the empleado_password column
 * @method array findByEmpleadoComision(boolean $empleado_comision) Return Empleado objects filtered by the empleado_comision column
 * @method array findByEmpleadoFechaentrada(string $empleado_fechaentrada) Return Empleado objects filtered by the empleado_fechaentrada column
 * @method array findByEmpleadoFechanacimiento(string $empleado_fechanacimiento) Return Empleado objects filtered by the empleado_fechanacimiento column
 * @method array findByEmpleadoCalle(string $empleado_calle) Return Empleado objects filtered by the empleado_calle column
 * @method array findByEmpleadoNumexterno(string $empleado_numexterno) Return Empleado objects filtered by the empleado_numexterno column
 * @method array findByEmpleadoNuminterno(string $empleado_numinterno) Return Empleado objects filtered by the empleado_numinterno column
 * @method array findByEmpleadoColonia(string $empleado_colonia) Return Empleado objects filtered by the empleado_colonia column
 * @method array findByEmpleadoCodigopostal(string $empleado_codigopostal) Return Empleado objects filtered by the empleado_codigopostal column
 * @method array findByEmpleadoCiudad(string $empleado_ciudad) Return Empleado objects filtered by the empleado_ciudad column
 * @method array findByEmpleadoEstado(string $empleado_estado) Return Empleado objects filtered by the empleado_estado column
 * @method array findByIdrol(int $idrol) Return Empleado objects filtered by the idrol column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseEmpleadoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseEmpleadoQuery object.
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
            $modelName = 'Empleado';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new EmpleadoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   EmpleadoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return EmpleadoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof EmpleadoQuery) {
            return $criteria;
        }
        $query = new EmpleadoQuery(null, null, $modelAlias);

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
     * @return   Empleado|Empleado[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = EmpleadoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(EmpleadoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Empleado A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdempleado($key, $con = null)
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
     * @return                 Empleado A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idempleado`, `empleado_nombre`, `empleado_apaterno`, `empleado_amaterno`, `empleado_rfc`, `empleado_nss`, `empleado_curp`, `empleado_telefono`, `empleado_email`, `empleado_estatus`, `empleado_username`, `empleado_password`, `empleado_comision`, `empleado_fechaentrada`, `empleado_fechanacimiento`, `empleado_calle`, `empleado_numexterno`, `empleado_numinterno`, `empleado_colonia`, `empleado_codigopostal`, `empleado_ciudad`, `empleado_estado`, `idrol` FROM `empleado` WHERE `idempleado` = :p0';
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
            $obj = new Empleado();
            $obj->hydrate($row);
            EmpleadoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Empleado|Empleado[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Empleado[]|mixed the list of results, formatted by the current formatter
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
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $keys, Criteria::IN);
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
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByIdempleado($idempleado = null, $comparison = null)
    {
        if (is_array($idempleado)) {
            $useMinMax = false;
            if (isset($idempleado['min'])) {
                $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $idempleado['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idempleado['max'])) {
                $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $idempleado['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $idempleado, $comparison);
    }

    /**
     * Filter the query on the empleado_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoNombre('fooValue');   // WHERE empleado_nombre = 'fooValue'
     * $query->filterByEmpleadoNombre('%fooValue%'); // WHERE empleado_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoNombre($empleadoNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoNombre)) {
                $empleadoNombre = str_replace('*', '%', $empleadoNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_NOMBRE, $empleadoNombre, $comparison);
    }

    /**
     * Filter the query on the empleado_apaterno column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoApaterno('fooValue');   // WHERE empleado_apaterno = 'fooValue'
     * $query->filterByEmpleadoApaterno('%fooValue%'); // WHERE empleado_apaterno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoApaterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoApaterno($empleadoApaterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoApaterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoApaterno)) {
                $empleadoApaterno = str_replace('*', '%', $empleadoApaterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_APATERNO, $empleadoApaterno, $comparison);
    }

    /**
     * Filter the query on the empleado_amaterno column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoAmaterno('fooValue');   // WHERE empleado_amaterno = 'fooValue'
     * $query->filterByEmpleadoAmaterno('%fooValue%'); // WHERE empleado_amaterno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoAmaterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoAmaterno($empleadoAmaterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoAmaterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoAmaterno)) {
                $empleadoAmaterno = str_replace('*', '%', $empleadoAmaterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_AMATERNO, $empleadoAmaterno, $comparison);
    }

    /**
     * Filter the query on the empleado_rfc column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoRfc('fooValue');   // WHERE empleado_rfc = 'fooValue'
     * $query->filterByEmpleadoRfc('%fooValue%'); // WHERE empleado_rfc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoRfc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoRfc($empleadoRfc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoRfc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoRfc)) {
                $empleadoRfc = str_replace('*', '%', $empleadoRfc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_RFC, $empleadoRfc, $comparison);
    }

    /**
     * Filter the query on the empleado_nss column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoNss('fooValue');   // WHERE empleado_nss = 'fooValue'
     * $query->filterByEmpleadoNss('%fooValue%'); // WHERE empleado_nss LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoNss The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoNss($empleadoNss = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoNss)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoNss)) {
                $empleadoNss = str_replace('*', '%', $empleadoNss);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_NSS, $empleadoNss, $comparison);
    }

    /**
     * Filter the query on the empleado_curp column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoCurp('fooValue');   // WHERE empleado_curp = 'fooValue'
     * $query->filterByEmpleadoCurp('%fooValue%'); // WHERE empleado_curp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoCurp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoCurp($empleadoCurp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoCurp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoCurp)) {
                $empleadoCurp = str_replace('*', '%', $empleadoCurp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_CURP, $empleadoCurp, $comparison);
    }

    /**
     * Filter the query on the empleado_telefono column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoTelefono('fooValue');   // WHERE empleado_telefono = 'fooValue'
     * $query->filterByEmpleadoTelefono('%fooValue%'); // WHERE empleado_telefono LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoTelefono The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoTelefono($empleadoTelefono = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoTelefono)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoTelefono)) {
                $empleadoTelefono = str_replace('*', '%', $empleadoTelefono);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_TELEFONO, $empleadoTelefono, $comparison);
    }

    /**
     * Filter the query on the empleado_email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoEmail('fooValue');   // WHERE empleado_email = 'fooValue'
     * $query->filterByEmpleadoEmail('%fooValue%'); // WHERE empleado_email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoEmail($empleadoEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoEmail)) {
                $empleadoEmail = str_replace('*', '%', $empleadoEmail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_EMAIL, $empleadoEmail, $comparison);
    }

    /**
     * Filter the query on the empleado_estatus column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoEstatus(true); // WHERE empleado_estatus = true
     * $query->filterByEmpleadoEstatus('yes'); // WHERE empleado_estatus = true
     * </code>
     *
     * @param     boolean|string $empleadoEstatus The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoEstatus($empleadoEstatus = null, $comparison = null)
    {
        if (is_string($empleadoEstatus)) {
            $empleadoEstatus = in_array(strtolower($empleadoEstatus), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_ESTATUS, $empleadoEstatus, $comparison);
    }

    /**
     * Filter the query on the empleado_username column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoUsername('fooValue');   // WHERE empleado_username = 'fooValue'
     * $query->filterByEmpleadoUsername('%fooValue%'); // WHERE empleado_username LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoUsername The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoUsername($empleadoUsername = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoUsername)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoUsername)) {
                $empleadoUsername = str_replace('*', '%', $empleadoUsername);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_USERNAME, $empleadoUsername, $comparison);
    }

    /**
     * Filter the query on the empleado_password column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoPassword('fooValue');   // WHERE empleado_password = 'fooValue'
     * $query->filterByEmpleadoPassword('%fooValue%'); // WHERE empleado_password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoPassword The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoPassword($empleadoPassword = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoPassword)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoPassword)) {
                $empleadoPassword = str_replace('*', '%', $empleadoPassword);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_PASSWORD, $empleadoPassword, $comparison);
    }

    /**
     * Filter the query on the empleado_comision column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoComision(true); // WHERE empleado_comision = true
     * $query->filterByEmpleadoComision('yes'); // WHERE empleado_comision = true
     * </code>
     *
     * @param     boolean|string $empleadoComision The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoComision($empleadoComision = null, $comparison = null)
    {
        if (is_string($empleadoComision)) {
            $empleadoComision = in_array(strtolower($empleadoComision), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_COMISION, $empleadoComision, $comparison);
    }

    /**
     * Filter the query on the empleado_fechaentrada column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoFechaentrada('2011-03-14'); // WHERE empleado_fechaentrada = '2011-03-14'
     * $query->filterByEmpleadoFechaentrada('now'); // WHERE empleado_fechaentrada = '2011-03-14'
     * $query->filterByEmpleadoFechaentrada(array('max' => 'yesterday')); // WHERE empleado_fechaentrada < '2011-03-13'
     * </code>
     *
     * @param     mixed $empleadoFechaentrada The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoFechaentrada($empleadoFechaentrada = null, $comparison = null)
    {
        if (is_array($empleadoFechaentrada)) {
            $useMinMax = false;
            if (isset($empleadoFechaentrada['min'])) {
                $this->addUsingAlias(EmpleadoPeer::EMPLEADO_FECHAENTRADA, $empleadoFechaentrada['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadoFechaentrada['max'])) {
                $this->addUsingAlias(EmpleadoPeer::EMPLEADO_FECHAENTRADA, $empleadoFechaentrada['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_FECHAENTRADA, $empleadoFechaentrada, $comparison);
    }

    /**
     * Filter the query on the empleado_fechanacimiento column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoFechanacimiento('2011-03-14'); // WHERE empleado_fechanacimiento = '2011-03-14'
     * $query->filterByEmpleadoFechanacimiento('now'); // WHERE empleado_fechanacimiento = '2011-03-14'
     * $query->filterByEmpleadoFechanacimiento(array('max' => 'yesterday')); // WHERE empleado_fechanacimiento < '2011-03-13'
     * </code>
     *
     * @param     mixed $empleadoFechanacimiento The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoFechanacimiento($empleadoFechanacimiento = null, $comparison = null)
    {
        if (is_array($empleadoFechanacimiento)) {
            $useMinMax = false;
            if (isset($empleadoFechanacimiento['min'])) {
                $this->addUsingAlias(EmpleadoPeer::EMPLEADO_FECHANACIMIENTO, $empleadoFechanacimiento['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($empleadoFechanacimiento['max'])) {
                $this->addUsingAlias(EmpleadoPeer::EMPLEADO_FECHANACIMIENTO, $empleadoFechanacimiento['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_FECHANACIMIENTO, $empleadoFechanacimiento, $comparison);
    }

    /**
     * Filter the query on the empleado_calle column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoCalle('fooValue');   // WHERE empleado_calle = 'fooValue'
     * $query->filterByEmpleadoCalle('%fooValue%'); // WHERE empleado_calle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoCalle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoCalle($empleadoCalle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoCalle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoCalle)) {
                $empleadoCalle = str_replace('*', '%', $empleadoCalle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_CALLE, $empleadoCalle, $comparison);
    }

    /**
     * Filter the query on the empleado_numexterno column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoNumexterno('fooValue');   // WHERE empleado_numexterno = 'fooValue'
     * $query->filterByEmpleadoNumexterno('%fooValue%'); // WHERE empleado_numexterno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoNumexterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoNumexterno($empleadoNumexterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoNumexterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoNumexterno)) {
                $empleadoNumexterno = str_replace('*', '%', $empleadoNumexterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_NUMEXTERNO, $empleadoNumexterno, $comparison);
    }

    /**
     * Filter the query on the empleado_numinterno column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoNuminterno('fooValue');   // WHERE empleado_numinterno = 'fooValue'
     * $query->filterByEmpleadoNuminterno('%fooValue%'); // WHERE empleado_numinterno LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoNuminterno The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoNuminterno($empleadoNuminterno = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoNuminterno)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoNuminterno)) {
                $empleadoNuminterno = str_replace('*', '%', $empleadoNuminterno);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_NUMINTERNO, $empleadoNuminterno, $comparison);
    }

    /**
     * Filter the query on the empleado_colonia column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoColonia('fooValue');   // WHERE empleado_colonia = 'fooValue'
     * $query->filterByEmpleadoColonia('%fooValue%'); // WHERE empleado_colonia LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoColonia The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoColonia($empleadoColonia = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoColonia)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoColonia)) {
                $empleadoColonia = str_replace('*', '%', $empleadoColonia);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_COLONIA, $empleadoColonia, $comparison);
    }

    /**
     * Filter the query on the empleado_codigopostal column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoCodigopostal('fooValue');   // WHERE empleado_codigopostal = 'fooValue'
     * $query->filterByEmpleadoCodigopostal('%fooValue%'); // WHERE empleado_codigopostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoCodigopostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoCodigopostal($empleadoCodigopostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoCodigopostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoCodigopostal)) {
                $empleadoCodigopostal = str_replace('*', '%', $empleadoCodigopostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_CODIGOPOSTAL, $empleadoCodigopostal, $comparison);
    }

    /**
     * Filter the query on the empleado_ciudad column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoCiudad('fooValue');   // WHERE empleado_ciudad = 'fooValue'
     * $query->filterByEmpleadoCiudad('%fooValue%'); // WHERE empleado_ciudad LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoCiudad The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoCiudad($empleadoCiudad = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoCiudad)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoCiudad)) {
                $empleadoCiudad = str_replace('*', '%', $empleadoCiudad);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_CIUDAD, $empleadoCiudad, $comparison);
    }

    /**
     * Filter the query on the empleado_estado column
     *
     * Example usage:
     * <code>
     * $query->filterByEmpleadoEstado('fooValue');   // WHERE empleado_estado = 'fooValue'
     * $query->filterByEmpleadoEstado('%fooValue%'); // WHERE empleado_estado LIKE '%fooValue%'
     * </code>
     *
     * @param     string $empleadoEstado The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByEmpleadoEstado($empleadoEstado = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($empleadoEstado)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $empleadoEstado)) {
                $empleadoEstado = str_replace('*', '%', $empleadoEstado);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::EMPLEADO_ESTADO, $empleadoEstado, $comparison);
    }

    /**
     * Filter the query on the idrol column
     *
     * Example usage:
     * <code>
     * $query->filterByIdrol(1234); // WHERE idrol = 1234
     * $query->filterByIdrol(array(12, 34)); // WHERE idrol IN (12, 34)
     * $query->filterByIdrol(array('min' => 12)); // WHERE idrol >= 12
     * $query->filterByIdrol(array('max' => 12)); // WHERE idrol <= 12
     * </code>
     *
     * @see       filterByRol()
     *
     * @param     mixed $idrol The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function filterByIdrol($idrol = null, $comparison = null)
    {
        if (is_array($idrol)) {
            $useMinMax = false;
            if (isset($idrol['min'])) {
                $this->addUsingAlias(EmpleadoPeer::IDROL, $idrol['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idrol['max'])) {
                $this->addUsingAlias(EmpleadoPeer::IDROL, $idrol['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(EmpleadoPeer::IDROL, $idrol, $comparison);
    }

    /**
     * Filter the query by a related Rol object
     *
     * @param   Rol|PropelObjectCollection $rol The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByRol($rol, $comparison = null)
    {
        if ($rol instanceof Rol) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDROL, $rol->getIdrol(), $comparison);
        } elseif ($rol instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(EmpleadoPeer::IDROL, $rol->toKeyValue('PrimaryKey', 'Idrol'), $comparison);
        } else {
            throw new PropelException('filterByRol() only accepts arguments of type Rol or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Rol relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinRol($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Rol');

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
            $this->addJoinObject($join, 'Rol');
        }

        return $this;
    }

    /**
     * Use the Rol relation Rol object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   RolQuery A secondary query class using the current class as primary query
     */
    public function useRolQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinRol($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Rol', 'RolQuery');
    }

    /**
     * Filter the query by a related Cortecaja object
     *
     * @param   Cortecaja|PropelObjectCollection $cortecaja  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCortecaja($cortecaja, $comparison = null)
    {
        if ($cortecaja instanceof Cortecaja) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $cortecaja->getIdempleadoenvia(), $comparison);
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
     * @return EmpleadoQuery The current query, for fluid interface
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
     * Filter the query by a related Cuentabancariamovimiento object
     *
     * @param   Cuentabancariamovimiento|PropelObjectCollection $cuentabancariamovimiento  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCuentabancariamovimiento($cuentabancariamovimiento, $comparison = null)
    {
        if ($cuentabancariamovimiento instanceof Cuentabancariamovimiento) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $cuentabancariamovimiento->getIdempleado(), $comparison);
        } elseif ($cuentabancariamovimiento instanceof PropelObjectCollection) {
            return $this
                ->useCuentabancariamovimientoQuery()
                ->filterByPrimaryKeys($cuentabancariamovimiento->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCuentabancariamovimiento() only accepts arguments of type Cuentabancariamovimiento or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Cuentabancariamovimiento relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinCuentabancariamovimiento($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Cuentabancariamovimiento');

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
            $this->addJoinObject($join, 'Cuentabancariamovimiento');
        }

        return $this;
    }

    /**
     * Use the Cuentabancariamovimiento relation Cuentabancariamovimiento object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CuentabancariamovimientoQuery A secondary query class using the current class as primary query
     */
    public function useCuentabancariamovimientoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCuentabancariamovimiento($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Cuentabancariamovimiento', 'CuentabancariamovimientoQuery');
    }

    /**
     * Filter the query by a related Notificacion object
     *
     * @param   Notificacion|PropelObjectCollection $notificacion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByNotificacion($notificacion, $comparison = null)
    {
        if ($notificacion instanceof Notificacion) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $notificacion->getIdempleado(), $comparison);
        } elseif ($notificacion instanceof PropelObjectCollection) {
            return $this
                ->useNotificacionQuery()
                ->filterByPrimaryKeys($notificacion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByNotificacion() only accepts arguments of type Notificacion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Notificacion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinNotificacion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Notificacion');

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
            $this->addJoinObject($join, 'Notificacion');
        }

        return $this;
    }

    /**
     * Use the Notificacion relation Notificacion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   NotificacionQuery A secondary query class using the current class as primary query
     */
    public function useNotificacionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinNotificacion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Notificacion', 'NotificacionQuery');
    }

    /**
     * Filter the query by a related Sucursalempleado object
     *
     * @param   Sucursalempleado|PropelObjectCollection $sucursalempleado  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterBySucursalempleado($sucursalempleado, $comparison = null)
    {
        if ($sucursalempleado instanceof Sucursalempleado) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $sucursalempleado->getIdempleado(), $comparison);
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
     * @return EmpleadoQuery The current query, for fluid interface
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
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTransferenciaRelatedByIdempleadocreador($transferencia, $comparison = null)
    {
        if ($transferencia instanceof Transferencia) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $transferencia->getIdempleadocreador(), $comparison);
        } elseif ($transferencia instanceof PropelObjectCollection) {
            return $this
                ->useTransferenciaRelatedByIdempleadocreadorQuery()
                ->filterByPrimaryKeys($transferencia->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTransferenciaRelatedByIdempleadocreador() only accepts arguments of type Transferencia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TransferenciaRelatedByIdempleadocreador relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinTransferenciaRelatedByIdempleadocreador($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TransferenciaRelatedByIdempleadocreador');

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
            $this->addJoinObject($join, 'TransferenciaRelatedByIdempleadocreador');
        }

        return $this;
    }

    /**
     * Use the TransferenciaRelatedByIdempleadocreador relation Transferencia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TransferenciaQuery A secondary query class using the current class as primary query
     */
    public function useTransferenciaRelatedByIdempleadocreadorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTransferenciaRelatedByIdempleadocreador($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TransferenciaRelatedByIdempleadocreador', 'TransferenciaQuery');
    }

    /**
     * Filter the query by a related Transferencia object
     *
     * @param   Transferencia|PropelObjectCollection $transferencia  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTransferenciaRelatedByIdempleadoreceptor($transferencia, $comparison = null)
    {
        if ($transferencia instanceof Transferencia) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $transferencia->getIdempleadoreceptor(), $comparison);
        } elseif ($transferencia instanceof PropelObjectCollection) {
            return $this
                ->useTransferenciaRelatedByIdempleadoreceptorQuery()
                ->filterByPrimaryKeys($transferencia->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTransferenciaRelatedByIdempleadoreceptor() only accepts arguments of type Transferencia or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TransferenciaRelatedByIdempleadoreceptor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinTransferenciaRelatedByIdempleadoreceptor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TransferenciaRelatedByIdempleadoreceptor');

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
            $this->addJoinObject($join, 'TransferenciaRelatedByIdempleadoreceptor');
        }

        return $this;
    }

    /**
     * Use the TransferenciaRelatedByIdempleadoreceptor relation Transferencia object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TransferenciaQuery A secondary query class using the current class as primary query
     */
    public function useTransferenciaRelatedByIdempleadoreceptorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTransferenciaRelatedByIdempleadoreceptor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TransferenciaRelatedByIdempleadoreceptor', 'TransferenciaQuery');
    }

    /**
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVentaRelatedByIdempleadocajero($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $venta->getIdempleadocajero(), $comparison);
        } elseif ($venta instanceof PropelObjectCollection) {
            return $this
                ->useVentaRelatedByIdempleadocajeroQuery()
                ->filterByPrimaryKeys($venta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVentaRelatedByIdempleadocajero() only accepts arguments of type Venta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the VentaRelatedByIdempleadocajero relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinVentaRelatedByIdempleadocajero($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('VentaRelatedByIdempleadocajero');

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
            $this->addJoinObject($join, 'VentaRelatedByIdempleadocajero');
        }

        return $this;
    }

    /**
     * Use the VentaRelatedByIdempleadocajero relation Venta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentaQuery A secondary query class using the current class as primary query
     */
    public function useVentaRelatedByIdempleadocajeroQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVentaRelatedByIdempleadocajero($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'VentaRelatedByIdempleadocajero', 'VentaQuery');
    }

    /**
     * Filter the query by a related Venta object
     *
     * @param   Venta|PropelObjectCollection $venta  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVentaRelatedByIdempleadovendedor($venta, $comparison = null)
    {
        if ($venta instanceof Venta) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $venta->getIdempleadovendedor(), $comparison);
        } elseif ($venta instanceof PropelObjectCollection) {
            return $this
                ->useVentaRelatedByIdempleadovendedorQuery()
                ->filterByPrimaryKeys($venta->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVentaRelatedByIdempleadovendedor() only accepts arguments of type Venta or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the VentaRelatedByIdempleadovendedor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinVentaRelatedByIdempleadovendedor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('VentaRelatedByIdempleadovendedor');

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
            $this->addJoinObject($join, 'VentaRelatedByIdempleadovendedor');
        }

        return $this;
    }

    /**
     * Use the VentaRelatedByIdempleadovendedor relation Venta object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentaQuery A secondary query class using the current class as primary query
     */
    public function useVentaRelatedByIdempleadovendedorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVentaRelatedByIdempleadovendedor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'VentaRelatedByIdempleadovendedor', 'VentaQuery');
    }

    /**
     * Filter the query by a related Ventapago object
     *
     * @param   Ventapago|PropelObjectCollection $ventapago  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 EmpleadoQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByVentapago($ventapago, $comparison = null)
    {
        if ($ventapago instanceof Ventapago) {
            return $this
                ->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $ventapago->getIdempleado(), $comparison);
        } elseif ($ventapago instanceof PropelObjectCollection) {
            return $this
                ->useVentapagoQuery()
                ->filterByPrimaryKeys($ventapago->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByVentapago() only accepts arguments of type Ventapago or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Ventapago relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function joinVentapago($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Ventapago');

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
            $this->addJoinObject($join, 'Ventapago');
        }

        return $this;
    }

    /**
     * Use the Ventapago relation Ventapago object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   VentapagoQuery A secondary query class using the current class as primary query
     */
    public function useVentapagoQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinVentapago($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Ventapago', 'VentapagoQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Empleado $empleado Object to remove from the list of results
     *
     * @return EmpleadoQuery The current query, for fluid interface
     */
    public function prune($empleado = null)
    {
        if ($empleado) {
            $this->addUsingAlias(EmpleadoPeer::IDEMPLEADO, $empleado->getIdempleado(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
