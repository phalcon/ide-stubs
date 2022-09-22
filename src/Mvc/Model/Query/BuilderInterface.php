<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\Query;

use Phalcon\Mvc\Model\QueryInterface;

/**
 * Phalcon\Mvc\Model\Query\BuilderInterface
 *
 * Interface for Phalcon\Mvc\Model\Query\Builder
 */
interface BuilderInterface
{
    const OPERATOR_AND = 'and';

    const OPERATOR_OR = 'or';


    /**
     * Add a model to take part of the query
     *
     * @param string $model
     * @param string $alias
     * @return BuilderInterface
     */
    public function addFrom(string $model, string $alias = null): BuilderInterface;

    /**
     * Appends a condition to the current conditions using a AND operator
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return BuilderInterface
     */
    public function andWhere(string $conditions, array $bindParams = [], array $bindTypes = []): BuilderInterface;

    /**
     * Appends a BETWEEN condition to the current conditions
     *
     * @param mixed $minimum
     * @param mixed $maximum
     * @param string $expr
     * @param string $operator
     * @return BuilderInterface
     */
    public function betweenWhere(string $expr, $minimum, $maximum, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface;

    /**
     * Sets the columns to be queried
     *
     * @param string|array $columns
     * @return BuilderInterface
     */
    public function columns($columns): BuilderInterface;

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
    public function distinct($distinct): BuilderInterface;

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
    public function forUpdate(bool $forUpdate): BuilderInterface;

    /**
     * Sets the models who makes part of the query
     *
     * @param string|array $models
     * @return BuilderInterface
     */
    public function from($models): BuilderInterface;

    /**
     * Returns default bind params
     *
     * @return array
     */
    public function getBindParams(): array;

    /**
     * Returns default bind types
     *
     * @return array
     */
    public function getBindTypes(): array;

    /**
     * Return the columns to be queried
     *
     * @return string|array
     */
    public function getColumns();

    /**
     * Returns SELECT DISTINCT / SELECT ALL flag
     *
     * @return bool
     */
    public function getDistinct(): bool;

    /**
     * Return the models who makes part of the query
     *
     * @return string|array
     */
    public function getFrom();

    /**
     * Returns the GROUP BY clause
     *
     * @return array
     */
    public function getGroupBy(): array;

    /**
     * Returns the HAVING condition clause
     *
     * @return string
     */
    public function getHaving(): string;

    /**
     * Return join parts of the query
     *
     * @return array
     */
    public function getJoins(): array;

    /**
     * Returns the current LIMIT clause
     *
     * @return string|array
     */
    public function getLimit();

    /**
     * Returns the current OFFSET clause
     *
     * @return int
     */
    public function getOffset(): int;

    /**
     * Return the set ORDER BY clause
     *
     * @return string|array
     */
    public function getOrderBy();

    /**
     * Returns a PHQL statement built based on the builder parameters
     *
     * @return string
     */
    public function getPhql(): string;

    /**
     * Returns the query built
     *
     * @return QueryInterface
     */
    public function getQuery(): QueryInterface;

    /**
     * Return the conditions for the query
     *
     * @return string|array
     */
    public function getWhere();

    /**
     * Sets a GROUP BY clause
     *
     * @param string|array $group
     * @return BuilderInterface
     */
    public function groupBy($group): BuilderInterface;

    /**
     * Sets a HAVING condition clause
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return BuilderInterface
     */
    public function having(string $conditions, array $bindParams = [], array $bindTypes = []): BuilderInterface;

    /**
     * Adds an INNER join to the query
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @return BuilderInterface
     */
    public function innerJoin(string $model, string $conditions = null, string $alias = null): BuilderInterface;

    /**
     * Appends an IN condition to the current conditions
     *
     * @param string $expr
     * @param array $values
     * @param string $operator
     * @return BuilderInterface
     */
    public function inWhere(string $expr, array $values, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface;

    /**
     * Adds an :type: join (by default type - INNER) to the query
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @return BuilderInterface
     */
    public function join(string $model, string $conditions = null, string $alias = null): BuilderInterface;

    /**
     * Adds a LEFT join to the query
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @return BuilderInterface
     */
    public function leftJoin(string $model, string $conditions = null, string $alias = null): BuilderInterface;

    /**
     * Sets a LIMIT clause
     *
     * @param int $offset
     * @param int $limit
     * @return BuilderInterface
     */
    public function limit(int $limit, $offset = null): BuilderInterface;

    /**
     * Returns the models involved in the query
     *
     * @return string|array|null
     */
    public function getModels();

    /**
     * Appends a NOT BETWEEN condition to the current conditions
     *
     * @param mixed $minimum
     * @param mixed $maximum
     * @param string $expr
     * @param string $operator
     * @return BuilderInterface
     */
    public function notBetweenWhere(string $expr, $minimum, $maximum, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface;

    /**
     * Appends a NOT IN condition to the current conditions
     *
     * @param string $expr
     * @param array $values
     * @param string $operator
     * @return BuilderInterface
     */
    public function notInWhere(string $expr, array $values, string $operator = BuilderInterface::OPERATOR_AND): BuilderInterface;

    /**
     * Sets an OFFSET clause
     *
     * @param int $offset
     * @return BuilderInterface
     */
    public function offset(int $offset): BuilderInterface;

    /**
     * Sets an ORDER BY condition clause
     *
     * @param array|string $orderBy
     * @return BuilderInterface
     */
    public function orderBy($orderBy): BuilderInterface;

    /**
     * Appends a condition to the current conditions using an OR operator
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return BuilderInterface
     */
    public function orWhere(string $conditions, array $bindParams = [], array $bindTypes = []): BuilderInterface;

    /**
     * Adds a RIGHT join to the query
     *
     * @param string $model
     * @param string $conditions
     * @param string $alias
     * @return BuilderInterface
     */
    public function rightJoin(string $model, string $conditions = null, string $alias = null): BuilderInterface;

    /**
     * Set default bind parameters
     *
     * @param array $bindParams
     * @param bool $merge
     * @return BuilderInterface
     */
    public function setBindParams(array $bindParams, bool $merge = false): BuilderInterface;

    /**
     * Set default bind types
     *
     * @param array $bindTypes
     * @param bool $merge
     * @return BuilderInterface
     */
    public function setBindTypes(array $bindTypes, bool $merge = false): BuilderInterface;

    /**
     * Sets conditions for the query
     *
     * @param string $conditions
     * @param array $bindParams
     * @param array $bindTypes
     * @return BuilderInterface
     */
    public function where(string $conditions, array $bindParams = [], array $bindTypes = []): BuilderInterface;
}
