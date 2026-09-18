<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Query;

use Phalcon\Contracts\DataMapper\DataMapperTypes;

/**
 * Class AbstractConditions
 *
 * @phpstan-import-type datamapper_clauses from DataMapperTypes
 * @phpstan-import-type datamapper_column_values from DataMapperTypes
 */
abstract class AbstractConditions extends \Phalcon\DataMapper\Query\AbstractQuery
{
    /**
     * Sets a `AND` for a `WHERE` condition
     *
     * @param string     $condition
     * @param mixed|null $value
     * @param int        $type
     *
     * @return AbstractConditions
     */
    public function andWhere(string $condition, $value = null, int $type = -1): AbstractConditions
    {
    }

    /**
     * Concatenates to the most recent `WHERE` clause
     *
     * @param string     $condition
     * @param mixed|null $value
     * @param int        $type
     *
     * @return AbstractConditions
     */
    public function appendWhere(string $condition, $value = null, int $type = -1): AbstractConditions
    {
    }

    /**
     * Sets the `LIMIT` clause
     *
     * @param int $limit
     * @return AbstractConditions
     */
    public function limit(int $limit): AbstractConditions
    {
    }

    /**
     * Sets the `OFFSET` clause
     *
     * @param int $offset
     * @return AbstractConditions
     */
    public function offset(int $offset): AbstractConditions
    {
    }

    /**
     * Sets the `ORDER BY`
     *
     * @param array|string $orderBy
     *
     * @return AbstractConditions
     *
     * @phpstan-param datamapper_clauses|string $orderBy
     */
    public function orderBy($orderBy): AbstractConditions
    {
    }

    /**
     * Sets a `OR` for a `WHERE` condition
     *
     * @param string $condition
     * @param mixed $value
     * @param int $type
     * @return AbstractConditions
     */
    public function orWhere(string $condition, $value = null, int $type = -1): AbstractConditions
    {
    }

    /**
     * Sets a `WHERE` condition
     *
     * @param string $condition
     * @param mixed $value
     * @param int $type
     * @return AbstractConditions
     */
    public function where(string $condition, $value = null, int $type = -1): AbstractConditions
    {
    }

    /**
     * @phpstan-param datamapper_column_values $columnsValues
     * @param array $columnsValues
     * @return AbstractConditions
     */
    public function whereEquals(array $columnsValues): AbstractConditions
    {
    }

    /**
     * Appends a conditional
     *
     * @phpstan-param 'HAVING'|'WHERE' $store
     * @param string $store
     * @param string $andor
     * @param string $condition
     * @param mixed $value
     * @param int $type
     * @return void
     */
    protected function addCondition(string $store, string $andor, string $condition, $value = null, int $type = -1): void
    {
    }

    /**
     * Concatenates a conditional
     *
     * @phpstan-param 'HAVING'|'WHERE' $store
     * @param string $store
     * @param string $condition
     * @param mixed $value
     * @param int $type
     * @return void
     */
    protected function appendCondition(string $store, string $condition, $value = null, int $type = -1): void
    {
    }

    /**
     * Builds a `BY` list
     *
     * @phpstan-param 'GROUP'|'ORDER' $type
     * @param string $type
     * @return string
     */
    protected function buildBy(string $type): string
    {
    }

    /**
     * Builds the conditional string
     *
     * @phpstan-param 'HAVING'|'WHERE' $type
     * @param string $type
     * @return string
     */
    protected function buildCondition(string $type): string
    {
    }

    /**
     * Builds the `LIMIT` clause
     *
     * @return string
     */
    protected function buildLimit(): string
    {
    }

    /**
     * Builds the `LIMIT` clause for all drivers
     *
     * @return string
     */
    protected function buildLimitCommon(): string
    {
    }

    /**
     * Builds the early `LIMIT` clause - MS SQLServer
     *
     * @return string
     */
    protected function buildLimitEarly(): string
    {
    }

    /**
     * Builds the `LIMIT` clause for MSSQLServer
     *
     * @return string
     */
    protected function buildLimitSqlsrv(): string
    {
    }

    /**
     * Processes a value (array or string) and merges it with the store
     *
     * @param string       $store
     * @param array|string $data
     *
     * @phpstan-param 'GROUP'|'ORDER'           $store
     * @phpstan-param datamapper_clauses|string $data
     * @return void
     */
    protected function processValue(string $store, $data): void
    {
    }
}
