<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

use Phalcon\Di\DiInterface;
use Phalcon\Mvc\Model\Query\BuilderInterface;

/**
 * Phalcon\Mvc\Model\Criteria
 *
 * This class is used to build the array parameter required by
 * Phalcon\Mvc\Model::find() and Phalcon\Mvc\Model::findFirst() using an
 * object-oriented interface.
 *
 * ```php
 * $robots = Robots::query()
 *     ->where("type = :type:")
 *     ->andWhere("year < 2000")
 *     ->bind(["type" => "mechanical"])
 *     ->limit(5, 10)
 *     ->orderBy("name")
 *     ->execute();
 * ```
 */
class Criteria implements \Phalcon\Mvc\Model\CriteriaInterface, \Phalcon\Di\InjectionAwareInterface
{

    protected $bindParams;


    protected $bindTypes;


    protected $hiddenParamNumber = 0;


    protected $model;


    protected $params = array();


    /**
     * Appends a condition to the current conditions using an AND operator
     *
     * @param string $conditions
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @return CriteriaInterface
     */
    public function andWhere(string $conditions, $bindParams = null, $bindTypes = null): CriteriaInterface
    {
    }

    /**
     * Appends a BETWEEN condition to the current conditions
     *
     * ```php
     * $criteria->betweenWhere("price", 100.25, 200.50);
     * ```
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @return CriteriaInterface
     */
    public function betweenWhere(string $expr, $minimum, $maximum): CriteriaInterface
    {
    }

    /**
     * Sets the bound parameters in the criteria
     * This method replaces all previously set bound parameters
     *
     * @param array $bindParams
     * @param bool $merge
     * @return CriteriaInterface
     */
    public function bind(array $bindParams, bool $merge = false): CriteriaInterface
    {
    }

    /**
     * Sets the bind types in the criteria
     * This method replaces all previously set bound parameters
     *
     * @param array $bindTypes
     * @return CriteriaInterface
     */
    public function bindTypes(array $bindTypes): CriteriaInterface
    {
    }

    /**
     * Sets the cache options in the criteria
     * This method replaces all previously set cache options
     *
     * @param array $cache
     * @return CriteriaInterface
     */
    public function cache(array $cache): CriteriaInterface
    {
    }

    /**
     * Sets the columns to be queried
     *
     * ```php
     * $criteria->columns(
     *     [
     *         "id",
     *         "name",
     *     ]
     * );
     * ```
     *
     * @param string|array $columns
     * @return CriteriaInterface
     */
    public function columns($columns): CriteriaInterface
    {
    }

    /**
     * Adds the conditions parameter to the criteria
     *
     * @param string $conditions
     * @return CriteriaInterface
     */
    public function conditions(string $conditions): CriteriaInterface
    {
    }

    /**
     * Creates a query builder from criteria.
     *
     * ```php
     * $builder = Robots::query()
     *     ->where("type = :type:")
     *     ->bind(["type" => "mechanical"])
     *     ->createBuilder();
     * ```
     *
     * @return BuilderInterface
     */
    public function createBuilder(): BuilderInterface
    {
    }

    /**
     * Sets SELECT DISTINCT / SELECT ALL flag
     *
     * @param mixed $distinct
     * @return CriteriaInterface
     */
    public function distinct($distinct): CriteriaInterface
    {
    }

    /**
     * Executes a find using the parameters built with the criteria
     *
     * @return ResultsetInterface
     */
    public function execute(): ResultsetInterface
    {
    }

    /**
     * Adds the "for_update" parameter to the criteria
     *
     * @param bool $forUpdate
     * @return CriteriaInterface
     */
    public function forUpdate(bool $forUpdate = true): CriteriaInterface
    {
    }

    /**
     * Builds a Phalcon\Mvc\Model\Criteria based on an input array like $_POST
     *
     * @param \Phalcon\Di\DiInterface $container
     * @param string $modelName
     * @param array $data
     * @param string $operator
     * @return CriteriaInterface
     */
    public static function fromInput(\Phalcon\Di\DiInterface $container, string $modelName, array $data, string $operator = 'AND'): CriteriaInterface
    {
    }

    /**
     * Returns the columns to be queried
     *
     * @return string|array|null
     */
    public function getColumns()
    {
    }

    /**
     * Returns the conditions parameter in the criteria
     *
     * @return string|null
     */
    public function getConditions(): ?string
    {
    }

    /**
     * Returns the DependencyInjector container
     *
     * @return DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Returns the group clause in the criteria
     */
    public function getGroupBy()
    {
    }

    /**
     * Returns the having clause in the criteria
     */
    public function getHaving()
    {
    }

    /**
     * Returns the limit parameter in the criteria, which will be
     *
     * - An integer if 'limit' was set without an 'offset'
     * - An array with 'number' and 'offset' keys if an offset was set with the limit
     * - NULL if limit has not been set
     *
     * @return int|array|null
     */
    public function getLimit()
    {
    }

    /**
     * Returns an internal model name on which the criteria will be applied
     *
     * @return string
     */
    public function getModelName(): string
    {
    }

    /**
     * Returns the order clause in the criteria
     *
     * @return string|null
     */
    public function getOrderBy(): ?string
    {
    }

    /**
     * Returns all the parameters defined in the criteria
     *
     * @return array
     */
    public function getParams(): array
    {
    }

    /**
     * Returns the conditions parameter in the criteria
     *
     * @return string|null
     */
    public function getWhere(): ?string
    {
    }

    /**
     * Adds the group-by clause to the criteria
     *
     * @param mixed $group
     * @return CriteriaInterface
     */
    public function groupBy($group): CriteriaInterface
    {
    }

    /**
     * Adds the having clause to the criteria
     *
     * @param mixed $having
     * @return CriteriaInterface
     */
    public function having($having): CriteriaInterface
    {
    }

    /**
     * Adds an INNER join to the query
     *
     * ```php
     * $criteria->innerJoin(
     *     Robots::class
     * );
     *
     * $criteria->innerJoin(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id"
     * );
     *
     * $criteria->innerJoin(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id",
     *     "r"
     * );
     * ```
     *
     * @param string $model
     * @param mixed $conditions
     * @param mixed $alias
     * @return CriteriaInterface
     */
    public function innerJoin(string $model, $conditions = null, $alias = null): CriteriaInterface
    {
    }

    /**
     * Appends an IN condition to the current conditions
     *
     * ```php
     * $criteria->inWhere("id", [1, 2, 3]);
     * ```
     *
     * @param string $expr
     * @param array $values
     * @return CriteriaInterface
     */
    public function inWhere(string $expr, array $values): CriteriaInterface
    {
    }

    /**
     * Adds an INNER join to the query
     *
     * ```php
     * $criteria->join(
     *     Robots::class
     * );
     *
     * $criteria->join(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id"
     * );
     *
     * $criteria->join(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id",
     *     "r"
     * );
     *
     * $criteria->join(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id",
     *     "r",
     *     "LEFT"
     * );
     * ```
     *
     * @param string $model
     * @param mixed $conditions
     * @param mixed $alias
     * @param mixed $type
     * @return CriteriaInterface
     */
    public function join(string $model, $conditions = null, $alias = null, $type = null): CriteriaInterface
    {
    }

    /**
     * Adds a LEFT join to the query
     *
     * ```php
     * $criteria->leftJoin(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id",
     *     "r"
     * );
     * ```
     *
     * @param string $model
     * @param mixed $conditions
     * @param mixed $alias
     * @return CriteriaInterface
     */
    public function leftJoin(string $model, $conditions = null, $alias = null): CriteriaInterface
    {
    }

    /**
     * Adds the limit parameter to the criteria.
     *
     * ```php
     * $criteria->limit(100);
     * $criteria->limit(100, 200);
     * $criteria->limit("100", "200");
     * ```
     *
     * @param int $limit
     * @param int $offset
     * @return CriteriaInterface
     */
    public function limit(int $limit, int $offset = 0): CriteriaInterface
    {
    }

    /**
     * Appends a NOT BETWEEN condition to the current conditions
     *
     * ```php
     * $criteria->notBetweenWhere("price", 100.25, 200.50);
     * ```
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @return CriteriaInterface
     */
    public function notBetweenWhere(string $expr, $minimum, $maximum): CriteriaInterface
    {
    }

    /**
     * Appends a NOT IN condition to the current conditions
     *
     * ```php
     * $criteria->notInWhere("id", [1, 2, 3]);
     * ```
     *
     * @param string $expr
     * @param array $values
     * @return CriteriaInterface
     */
    public function notInWhere(string $expr, array $values): CriteriaInterface
    {
    }

    /**
     * Adds the order-by clause to the criteria
     *
     * @param string $orderColumns
     * @return CriteriaInterface
     */
    public function orderBy(string $orderColumns): CriteriaInterface
    {
    }

    /**
     * Appends a condition to the current conditions using an OR operator
     *
     * @param string $conditions
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @return CriteriaInterface
     */
    public function orWhere(string $conditions, $bindParams = null, $bindTypes = null): CriteriaInterface
    {
    }

    /**
     * Adds a RIGHT join to the query
     *
     * ```php
     * $criteria->rightJoin(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id",
     *     "r"
     * );
     * ```
     *
     * @param string $model
     * @param mixed $conditions
     * @param mixed $alias
     * @return CriteriaInterface
     */
    public function rightJoin(string $model, $conditions = null, $alias = null): CriteriaInterface
    {
    }

    /**
     * Sets the DependencyInjector container
     *
     * @param \Phalcon\Di\DiInterface $container
     * @return void
     */
    public function setDI(\Phalcon\Di\DiInterface $container)
    {
    }

    /**
     * Set a model on which the query will be executed
     *
     * @param string $modelName
     * @return CriteriaInterface
     */
    public function setModelName(string $modelName): CriteriaInterface
    {
    }

    /**
     * Adds the "shared_lock" parameter to the criteria
     *
     * @param bool $sharedLock
     * @return CriteriaInterface
     */
    public function sharedLock(bool $sharedLock = true): CriteriaInterface
    {
    }

    /**
     * Sets the conditions parameter in the criteria
     *
     * @param string $conditions
     * @param mixed $bindParams
     * @param mixed $bindTypes
     * @return CriteriaInterface
     */
    public function where(string $conditions, $bindParams = null, $bindTypes = null): CriteriaInterface
    {
    }
}
