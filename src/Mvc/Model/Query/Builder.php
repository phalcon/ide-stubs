<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\Query;

use Phalcon\Di\Di;
use Phalcon\Db\Column;
use Phalcon\Di\DiInterface;
use Phalcon\Mvc\Model\Exception;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Mvc\Model\QueryInterface;

/**
 * Phalcon\Mvc\Model\Query\Builder
 *
 * Helps to create PHQL queries using an OO interface
 *
 * ```php
 * $params = [
 *     "models"     => [
 *         Users::class,
 *     ],
 *     "columns"    => ["id", "name", "status"],
 *     "conditions" => [
 *         [
 *             "created > :min: AND created < :max:",
 *             [
 *                 "min" => "2013-01-01",
 *                 "max" => "2014-01-01",
 *             ],
 *             [
 *                 "min" => PDO::PARAM_STR,
 *                 "max" => PDO::PARAM_STR,
 *             ],
 *         ],
 *     ],
 *     // or "conditions" => "created > '2013-01-01' AND created < '2014-01-01'",
 *     "group"      => ["id", "name"],
 *     "having"     => "name = 'Kamil'",
 *     "order"      => ["name", "id"],
 *     "limit"      => 20,
 *     "offset"     => 20,
 *     // or "limit" => [20, 20],
 * ];
 *
 * $queryBuilder = new \Phalcon\Mvc\Model\Query\Builder($params);
 * ```
 */
class Builder implements \Phalcon\Mvc\Model\Query\BuilderInterface, \Phalcon\Di\InjectionAwareInterface
{
    /**
     * @var array
     */
    protected $bindParams = [];

    /**
     * @var array
     */
    protected $bindTypes = [];

    /**
     * @var array|string|null
     */
    protected $columns = null;

    /**
     * @var array|string|null
     */
    protected $conditions = null;

    /**
     * @var DiInterface|null
     */
    protected $container;

    /**
     * @var mixed
     */
    protected $distinct = null;

    /**
     * @var bool
     */
    protected $forUpdate = false;

    /**
     * @var array
     */
    protected $group = [];

    /**
     * @var string|null
     */
    protected $having = null;

    /**
     * @var int
     */
    protected $hiddenParamNumber = 0;

    /**
     * @var array
     */
    protected $joins = [];

    /**
     * @var array|string
     */
    protected $limit;

    /**
     * @var array|string
     */
    protected $models;

    /**
     * @var int
     */
    protected $offset = 0;

    /**
     * @var array|string
     */
    protected $order;

    /**
     * @var bool
     */
    protected $sharedLock = false;

    /**
     * Phalcon\Mvc\Model\Query\Builder constructor
     *
     * @param array|string|null $params
     * @param DiInterface|null $container
     */
    public function __construct($params = null, \Phalcon\Di\DiInterface $container = null)
    {
    }

    /**
     * Add a model to take part of the query
     *
     * ```php
     * // Load data from models Robots
     * $builder->addFrom(
     *     Robots::class
     * );
     *
     * // Load data from model 'Robots' using 'r' as alias in PHQL
     * $builder->addFrom(
     *     Robots::class,
     *     "r"
     * );
     * ```
     *
     * @param string $model
     * @param string $alias
     * @return BuilderInterface
     */
    public function addFrom(string $model, string $alias = null): BuilderInterface
    {
    }

    /**
     * Appends a condition to the current HAVING conditions clause using a AND operator
     *
     * ```php
     * $builder->andHaving("SUM(Robots.price) > 0");
     *
     * $builder->andHaving(
     *     "SUM(Robots.price) > :sum:",
     *     [
     *         "sum" => 100,
     *     ]
     * );
     * ```
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return BuilderInterface
     */
    public function andHaving(string $conditions, array $bindParams = [], array $bindTypes = []): BuilderInterface
    {
    }

    /**
     * Appends a condition to the current WHERE conditions using a AND operator
     *
     * ```php
     * $builder->andWhere("name = 'Peter'");
     *
     * $builder->andWhere(
     *     "name = :name: AND id > :id:",
     *     [
     *         "name" => "Peter",
     *         "id"   => 100,
     *     ]
     * );
     * ```
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return BuilderInterface
     */
    public function andWhere(string $conditions, array $bindParams = [], array $bindTypes = []): BuilderInterface
    {
    }

    /**
     * Automatically escapes identifiers but only if they need to be escaped.
     *
     * @param string $identifier
     * @return string
     */
    final public function autoescape(string $identifier): string
    {
    }

    /**
     * Appends a BETWEEN condition to the current HAVING conditions clause
     *
     * ```php
     * $builder->betweenHaving("SUM(Robots.price)", 100.25, 200.50);
     * ```
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @param string $operator
     * @return BuilderInterface
     */
    public function betweenHaving(string $expr, $minimum, $maximum, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface
    {
    }

    /**
     * Appends a BETWEEN condition to the current WHERE conditions
     *
     * ```php
     * $builder->betweenWhere("price", 100.25, 200.50);
     * ```
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @param string $operator
     * @return BuilderInterface
     */
    public function betweenWhere(string $expr, $minimum, $maximum, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface
    {
    }

    /**
     * Sets the columns to be queried. The columns can be either a `string` or
     * an `array` of strings. If the argument is a (single, non-embedded) string,
     * its content can specify one or more columns, separated by commas, the same
     * way that one uses the SQL select statement. You can use aliases, aggregate
     * functions, etc. If you need to reference other models you will need to
     * reference them with their namespaces.
     *
     * When using an array as a parameter, you will need to specify one field
     * per array element. If a non-numeric key is defined in the array, it will
     * be used as the alias in the query
     *
     * ```php
     * <?php
     *
     * // String, comma separated values
     * $builder->columns("id, category");
     *
     * // Array, one column per element
     * $builder->columns(
     *     [
     *         "inv_id",
     *         "inv_total",
     *     ]
     * );
     *
     * // Array with named key. The name of the key acts as an
     * // alias (`AS` clause)
     * $builder->columns(
     *     [
     *         "inv_cst_id",
     *         "total_invoices" => "COUNT()",
     *     ]
     * );
     *
     * // Different models
     * $builder->columns(
     *     [
     *         "\Phalcon\Models\Invoices.",
     *         "\Phalcon\Models\Customers.cst_name_first",
     *         "\Phalcon\Models\Customers.cst_name_last",
     *     ]
     * );
     * ```
     *
     * @param string|array $columns
     * @return BuilderInterface
     */
    public function columns($columns): BuilderInterface
    {
    }

    /**
     * Sets SELECT DISTINCT / SELECT ALL flag
     *
     * ```php
     * $builder->distinct("status");
     * $builder->distinct(null);
     * ```
     *
     * @param mixed $distinct
     * @return BuilderInterface
     */
    public function distinct($distinct): BuilderInterface
    {
    }

    /**
     * Sets a FOR UPDATE clause
     *
     * ```php
     * $builder->forUpdate(true);
     * ```
     *
     * @param bool $forUpdate
     * @return BuilderInterface
     */
    public function forUpdate(bool $forUpdate): BuilderInterface
    {
    }

    /**
     * Sets the models who makes part of the query
     *
     * ```php
     * $builder->from(
     *     Robots::class
     * );
     *
     * $builder->from(
     *     [
     *         Robots::class,
     *         RobotsParts::class,
     *     ]
     * );
     *
     * $builder->from(
     *     [
     *         "r"  => Robots::class,
     *         "rp" => RobotsParts::class,
     *     ]
     * );
     * ```
     *
     * @param mixed $models
     * @return BuilderInterface
     */
    public function from($models): BuilderInterface
    {
    }

    /**
     * Returns default bind params
     *
     * @return array
     */
    public function getBindParams(): array
    {
    }

    /**
     * Returns default bind types
     *
     * @return array
     */
    public function getBindTypes(): array
    {
    }

    /**
     * Return the columns to be queried
     *
     * @return array|string
     */
    public function getColumns()
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
     * Returns SELECT DISTINCT / SELECT ALL flag
     *
     * @return bool
     */
    public function getDistinct(): bool
    {
    }

    /**
     * Return the models who makes part of the query
     *
     * @return array|string
     */
    public function getFrom()
    {
    }

    /**
     * Returns the GROUP BY clause
     *
     * @return array
     */
    public function getGroupBy(): array
    {
    }

    /**
     * Return the current having clause
     *
     * @return string
     */
    public function getHaving(): string
    {
    }

    /**
     * Return join parts of the query
     *
     * @return array
     */
    public function getJoins(): array
    {
    }

    /**
     * Returns the current LIMIT clause
     *
     * @return array|string
     */
    public function getLimit()
    {
    }

    /**
     * Returns the models involved in the query
     *
     * @return string|array|null
     */
    public function getModels(): string|array|null
    {
    }

    /**
     * Returns the current OFFSET clause
     *
     * @return int
     */
    public function getOffset(): int
    {
    }

    /**
     * Returns the set ORDER BY clause
     *
     * @return array|string
     */
    public function getOrderBy()
    {
    }

    /**
     * Returns a PHQL statement built based on the builder parameters
     *
     * @return string
     */
    final public function getPhql(): string
    {
    }

    /**
     * Returns the query built
     *
     * @return QueryInterface
     */
    public function getQuery(): QueryInterface
    {
    }

    /**
     * Return the conditions for the query
     *
     * @return array|string
     */
    public function getWhere()
    {
    }

    /**
     * Sets a GROUP BY clause
     *
     * ```php
     * $builder->groupBy(
     *     [
     *         "Robots.name",
     *     ]
     * );
     * ```
     *
     * @param array|string $group
     * @return BuilderInterface
     */
    public function groupBy($group): BuilderInterface
    {
    }

    /**
     * Sets the HAVING condition clause
     *
     * ```php
     * $builder->having("SUM(Robots.price) > 0");
     *
     * $builder->having(
     *     "SUM(Robots.price) > :sum:",
     *     [
     *         "sum" => 100,
     *     ]
     * );
     * ```
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return BuilderInterface
     */
    public function having(string $conditions, array $bindParams = [], array $bindTypes = []): BuilderInterface
    {
    }

    /**
     * Appends an IN condition to the current HAVING conditions clause
     *
     * ```php
     * $builder->inHaving("SUM(Robots.price)", [100, 200]);
     * ```
     *
     * @param string $expr
     * @param array $values
     * @param string $operator
     * @return BuilderInterface
     */
    public function inHaving(string $expr, array $values, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface
    {
    }

    /**
     * Adds an INNER join to the query
     *
     * ```php
     * // Inner Join model 'Robots' with automatic conditions and alias
     * $builder->innerJoin(
     *     Robots::class
     * );
     *
     * // Inner Join model 'Robots' specifying conditions
     * $builder->innerJoin(
     *     Robots::class,
     *     "Robots.id = RobotsParts.robots_id"
     * );
     *
     * // Inner Join model 'Robots' specifying conditions and alias
     * $builder->innerJoin(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id",
     *     "r"
     * );
     * ```
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @return BuilderInterface
     */
    public function innerJoin(string $model, string $conditions = null, string $alias = null): BuilderInterface
    {
    }

    /**
     * Appends an IN condition to the current WHERE conditions
     *
     * ```php
     * $builder->inWhere(
     *     "id",
     *     [1, 2, 3]
     * );
     * ```
     *
     * @param string $expr
     * @param array $values
     * @param string $operator
     * @return BuilderInterface
     */
    public function inWhere(string $expr, array $values, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface
    {
    }

    /**
     * Adds an :type: join (by default type - INNER) to the query
     *
     * ```php
     * // Inner Join model 'Robots' with automatic conditions and alias
     * $builder->join(
     *     Robots::class
     * );
     *
     * // Inner Join model 'Robots' specifying conditions
     * $builder->join(
     *     Robots::class,
     *     "Robots.id = RobotsParts.robots_id"
     * );
     *
     * // Inner Join model 'Robots' specifying conditions and alias
     * $builder->join(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id",
     *     "r"
     * );
     *
     * // Left Join model 'Robots' specifying conditions, alias and type of join
     * $builder->join(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id",
     *     "r",
     *     "LEFT"
     * );
     * ```
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @param string $type
     * @return BuilderInterface
     */
    public function join(string $model, string $conditions = null, string $alias = null, string $type = null): BuilderInterface
    {
    }

    /**
     * Adds a LEFT join to the query
     *
     * ```php
     * $builder->leftJoin(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id",
     *     "r"
     * );
     * ```
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @return BuilderInterface
     */
    public function leftJoin(string $model, string $conditions = null, string $alias = null): BuilderInterface
    {
    }

    /**
     * Sets a LIMIT clause, optionally an offset clause
     *
     * ```php
     * $builder->limit(100);
     * $builder->limit(100, 20);
     * $builder->limit("100", "20");
     * ```
     *
     * @param int $limit
     * @param mixed $offset
     * @return BuilderInterface
     */
    public function limit(int $limit, $offset = null): BuilderInterface
    {
    }

    /**
     * Appends a NOT BETWEEN condition to the current HAVING conditions clause
     *
     * ```php
     * $builder->notBetweenHaving("SUM(Robots.price)", 100.25, 200.50);
     * ```
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @param string $operator
     * @return BuilderInterface
     */
    public function notBetweenHaving(string $expr, $minimum, $maximum, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface
    {
    }

    /**
     * Appends a NOT BETWEEN condition to the current WHERE conditions
     *
     * ```php
     * $builder->notBetweenWhere("price", 100.25, 200.50);
     * ```
     *
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @param string $operator
     * @return BuilderInterface
     */
    public function notBetweenWhere(string $expr, $minimum, $maximum, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface
    {
    }

    /**
     * Appends a NOT IN condition to the current HAVING conditions clause
     *
     * ```php
     * $builder->notInHaving("SUM(Robots.price)", [100, 200]);
     * ```
     *
     * @param string $expr
     * @param array $values
     * @param string $operator
     * @return BuilderInterface
     */
    public function notInHaving(string $expr, array $values, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface
    {
    }

    /**
     * Appends a NOT IN condition to the current WHERE conditions
     *
     * ```php
     * $builder->notInWhere("id", [1, 2, 3]);
     * ```
     *
     * @param string $expr
     * @param array $values
     * @param string $operator
     * @return BuilderInterface
     */
    public function notInWhere(string $expr, array $values, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface
    {
    }

    /**
     * Sets an OFFSET clause
     *
     * ```php
     * $builder->offset(30);
     * ```
     *
     * @param int $offset
     * @return BuilderInterface
     */
    public function offset(int $offset): BuilderInterface
    {
    }

    /**
     * Sets an ORDER BY condition clause
     *
     * ```php
     * $builder->orderBy("Robots.name");
     * $builder->orderBy(["1", "Robots.name"]);
     * $builder->orderBy(["Robots.name DESC"]);
     * ```
     *
     * @param array|string $orderBy
     * @return BuilderInterface
     */
    public function orderBy($orderBy): BuilderInterface
    {
    }

    /**
     * Appends a condition to the current HAVING conditions clause using an OR operator
     *
     * ```php
     * $builder->orHaving("SUM(Robots.price) > 0");
     *
     * $builder->orHaving(
     *     "SUM(Robots.price) > :sum:",
     *     [
     *         "sum" => 100,
     *     ]
     * );
     * ```
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return BuilderInterface
     */
    public function orHaving(string $conditions, array $bindParams = [], array $bindTypes = []): BuilderInterface
    {
    }

    /**
     * Appends a condition to the current conditions using an OR operator
     *
     * ```php
     * $builder->orWhere("name = 'Peter'");
     *
     * $builder->orWhere(
     *     "name = :name: AND id > :id:",
     *     [
     *         "name" => "Peter",
     *         "id"   => 100,
     *     ]
     * );
     * ```
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return BuilderInterface
     */
    public function orWhere(string $conditions, array $bindParams = [], array $bindTypes = []): BuilderInterface
    {
    }

    /**
     * Adds a RIGHT join to the query
     *
     * ```php
     * $builder->rightJoin(
     *     Robots::class,
     *     "r.id = RobotsParts.robots_id",
     *     "r"
     * );
     * ```
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @return BuilderInterface
     */
    public function rightJoin(string $model, string $conditions = null, string $alias = null): BuilderInterface
    {
    }

    /**
     * Set default bind parameters
     *
     * @param array $bindParams
     * @param bool $merge
     * @return BuilderInterface
     */
    public function setBindParams(array $bindParams, bool $merge = false): BuilderInterface
    {
    }

    /**
     * Set default bind types
     *
     * @param array $bindTypes
     * @param bool $merge
     * @return BuilderInterface
     */
    public function setBindTypes(array $bindTypes, bool $merge = false): BuilderInterface
    {
    }

    /**
     * Sets the DependencyInjector container
     *
     * @param \Phalcon\Di\DiInterface $container
     * @return void
     */
    public function setDI(\Phalcon\Di\DiInterface $container): void
    {
    }

    /**
     * Sets the query WHERE conditions
     *
     * ```php
     * $builder->where(100);
     *
     * $builder->where("name = 'Peter'");
     *
     * $builder->where(
     *     "name = :name: AND id > :id:",
     *     [
     *         "name" => "Peter",
     *         "id"   => 100,
     *     ]
     * );
     * ```
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return BuilderInterface
     */
    public function where(string $conditions, array $bindParams = [], array $bindTypes = []): BuilderInterface
    {
    }

    /**
     * Appends a BETWEEN condition
     *
     * @param string $clause
     * @param string $operator
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @return BuilderInterface
     */
    protected function conditionBetween(string $clause, string $operator, string $expr, $minimum, $maximum): BuilderInterface
    {
    }

    /**
     * Appends an IN condition
     *
     * @param string $clause
     * @param string $operator
     * @param string $expr
     * @param array $values
     * @return BuilderInterface
     */
    protected function conditionIn(string $clause, string $operator, string $expr, array $values): BuilderInterface
    {
    }

    /**
     * Appends a NOT BETWEEN condition
     *
     * @param string $clause
     * @param string $operator
     * @param string $expr
     * @param mixed $minimum
     * @param mixed $maximum
     * @return BuilderInterface
     */
    protected function conditionNotBetween(string $clause, string $operator, string $expr, $minimum, $maximum): BuilderInterface
    {
    }

    /**
     * Appends a NOT IN condition
     *
     * @param string $clause
     * @param string $operator
     * @param string $expr
     * @param array $values
     * @return BuilderInterface
     */
    protected function conditionNotIn(string $clause, string $operator, string $expr, array $values): BuilderInterface
    {
    }
}
