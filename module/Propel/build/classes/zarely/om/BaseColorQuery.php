<?php


/**
 * Base class that represents a query for the 'color' table.
 *
 *
 *
 * @method ColorQuery orderByIdcolor($order = Criteria::ASC) Order by the idcolor column
 * @method ColorQuery orderByColorNombre($order = Criteria::ASC) Order by the color_nombre column
 *
 * @method ColorQuery groupByIdcolor() Group by the idcolor column
 * @method ColorQuery groupByColorNombre() Group by the color_nombre column
 *
 * @method ColorQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ColorQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ColorQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ColorQuery leftJoinProductocolor($relationAlias = null) Adds a LEFT JOIN clause to the query using the Productocolor relation
 * @method ColorQuery rightJoinProductocolor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Productocolor relation
 * @method ColorQuery innerJoinProductocolor($relationAlias = null) Adds a INNER JOIN clause to the query using the Productocolor relation
 *
 * @method Color findOne(PropelPDO $con = null) Return the first Color matching the query
 * @method Color findOneOrCreate(PropelPDO $con = null) Return the first Color matching the query, or a new Color object populated from the query conditions when no match is found
 *
 * @method Color findOneByColorNombre(string $color_nombre) Return the first Color filtered by the color_nombre column
 *
 * @method array findByIdcolor(int $idcolor) Return Color objects filtered by the idcolor column
 * @method array findByColorNombre(string $color_nombre) Return Color objects filtered by the color_nombre column
 *
 * @package    propel.generator.zarely.om
 */
abstract class BaseColorQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseColorQuery object.
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
            $modelName = 'Color';
        }
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ColorQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ColorQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ColorQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ColorQuery) {
            return $criteria;
        }
        $query = new ColorQuery(null, null, $modelAlias);

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
     * @return   Color|Color[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ColorPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ColorPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Color A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdcolor($key, $con = null)
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
     * @return                 Color A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `idcolor`, `color_nombre` FROM `color` WHERE `idcolor` = :p0';
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
            $obj = new Color();
            $obj->hydrate($row);
            ColorPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Color|Color[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Color[]|mixed the list of results, formatted by the current formatter
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
     * @return ColorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ColorPeer::IDCOLOR, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ColorQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ColorPeer::IDCOLOR, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the idcolor column
     *
     * Example usage:
     * <code>
     * $query->filterByIdcolor(1234); // WHERE idcolor = 1234
     * $query->filterByIdcolor(array(12, 34)); // WHERE idcolor IN (12, 34)
     * $query->filterByIdcolor(array('min' => 12)); // WHERE idcolor >= 12
     * $query->filterByIdcolor(array('max' => 12)); // WHERE idcolor <= 12
     * </code>
     *
     * @param     mixed $idcolor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ColorQuery The current query, for fluid interface
     */
    public function filterByIdcolor($idcolor = null, $comparison = null)
    {
        if (is_array($idcolor)) {
            $useMinMax = false;
            if (isset($idcolor['min'])) {
                $this->addUsingAlias(ColorPeer::IDCOLOR, $idcolor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idcolor['max'])) {
                $this->addUsingAlias(ColorPeer::IDCOLOR, $idcolor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ColorPeer::IDCOLOR, $idcolor, $comparison);
    }

    /**
     * Filter the query on the color_nombre column
     *
     * Example usage:
     * <code>
     * $query->filterByColorNombre('fooValue');   // WHERE color_nombre = 'fooValue'
     * $query->filterByColorNombre('%fooValue%'); // WHERE color_nombre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $colorNombre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ColorQuery The current query, for fluid interface
     */
    public function filterByColorNombre($colorNombre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($colorNombre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $colorNombre)) {
                $colorNombre = str_replace('*', '%', $colorNombre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ColorPeer::COLOR_NOMBRE, $colorNombre, $comparison);
    }

    /**
     * Filter the query by a related Productocolor object
     *
     * @param   Productocolor|PropelObjectCollection $productocolor  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ColorQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByProductocolor($productocolor, $comparison = null)
    {
        if ($productocolor instanceof Productocolor) {
            return $this
                ->addUsingAlias(ColorPeer::IDCOLOR, $productocolor->getIdcolor(), $comparison);
        } elseif ($productocolor instanceof PropelObjectCollection) {
            return $this
                ->useProductocolorQuery()
                ->filterByPrimaryKeys($productocolor->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByProductocolor() only accepts arguments of type Productocolor or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Productocolor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ColorQuery The current query, for fluid interface
     */
    public function joinProductocolor($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Productocolor');

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
            $this->addJoinObject($join, 'Productocolor');
        }

        return $this;
    }

    /**
     * Use the Productocolor relation Productocolor object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ProductocolorQuery A secondary query class using the current class as primary query
     */
    public function useProductocolorQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinProductocolor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Productocolor', 'ProductocolorQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Color $color Object to remove from the list of results
     *
     * @return ColorQuery The current query, for fluid interface
     */
    public function prune($color = null)
    {
        if ($color) {
            $this->addUsingAlias(ColorPeer::IDCOLOR, $color->getIdcolor(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
