<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Query;

use BadMethodCallException;
use Phalcon\Contracts\DataMapper\DataMapperTypes;
use Phalcon\DataMapper\Pdo\Exception\UnknownQueryMethod;

/**
 * Select Query
 *
 * @phpstan-import-type datamapper_call_arguments from DataMapperTypes
 * @phpstan-import-type datamapper_clauses from DataMapperTypes
 * @phpstan-import-type datamapper_columns from DataMapperTypes
 * @phpstan-import-type datamapper_select_store from DataMapperTypes
 *
 * @property datamapper_select_store $store
 */
class Select extends \Phalcon\DataMapper\Query\AbstractConditions
{
    /**
     * @var string
     */
    const string JOIN_INNER = 'INNER';

    /**
     * @var string
     */
    const string JOIN_LEFT = 'LEFT';

    /**
     * @var string
     */
    const string JOIN_NATURAL = 'NATURAL';

    /**
     * @var string
     */
    const string JOIN_RIGHT = 'RIGHT';

    protected string $asAlias = '';

    protected bool $forUpdate = false;

    /**
     * Proxied methods to the connection
     *
     * @phpstan-param datamapper_call_arguments $params
     *
     * @return mixed
     * @param string $method
     * @param array $params
     */
    public function __call(string $method, array $params)
    {
    }

    /**
     * Sets a `AND` for a `HAVING` condition
     *
     * @param string $condition
     * @param mixed $value
     * @param int $type
     * @return Select
     */
    public function andHaving(string $condition, $value = null, int $type = -1): Select
    {
    }

    /**
     * Concatenates to the most recent `HAVING` clause
     *
     * @param string $condition
     * @param mixed $value
     * @param int $type
     * @return Select
     */
    public function appendHaving(string $condition, $value = null, int $type = -1): Select
    {
    }

    /**
     * Concatenates to the most recent `JOIN` clause
     *
     * @param string $condition
     * @param mixed $value
     * @param int $type
     * @return Select
     */
    public function appendJoin(string $condition, $value = null, int $type = -1): Select
    {
    }

    /**
     * The `AS` statement for the query - useful in sub-queries
     *
     * @param string $asAlias
     * @return Select
     */
    public function asAlias(string $asAlias): Select
    {
    }

    /**
     * The columns to select from. If a key is set in the array element, the
     * key will be used as the alias
     *
     * @phpstan-param datamapper_columns $columns
     * @param array $columns
     * @return Select
     */
    public function columns(array $columns): Select
    {
    }

    /**
     * @param bool $enable
     * @return Select
     */
    public function distinct(bool $enable = true): Select
    {
    }

    /**
     * Enable the `FOR UPDATE` for the query
     *
     * @param bool $enable
     * @return Select
     */
    public function forUpdate(bool $enable = true): Select
    {
    }

    /**
     * Adds table(s) in the query
     *
     * @param string $table
     * @return Select
     */
    public function from(string $table): Select
    {
    }

    /**
     * Returns the compiled SQL statement
     *
     * @return string
     */
    public function getStatement(): string
    {
    }

    /**
     * Sets the `GROUP BY`
     *
     * @phpstan-param datamapper_clauses|string $groupBy
     * @param mixed $groupBy
     * @return Select
     */
    public function groupBy($groupBy): Select
    {
    }

    /**
     * Whether the query has columns or not
     *
     * @return bool
     */
    public function hasColumns(): bool
    {
    }

    /**
     * Sets a `HAVING` condition
     *
     * @param string $condition
     * @param mixed $value
     * @param int $type
     * @return Select
     */
    public function having(string $condition, $value = null, int $type = -1): Select
    {
    }

    /**
     * Sets a 'JOIN' condition
     *
     * @param string $join
     * @param string $table
     * @param string $condition
     * @param mixed $value
     * @param int $type
     * @return Select
     */
    public function join(string $join, string $table, string $condition, $value = null, int $type = -1): Select
    {
    }

    /**
     * Sets a `OR` for a `HAVING` condition
     *
     * @param string $condition
     * @param mixed $value
     * @param int $type
     * @return Select
     */
    public function orHaving(string $condition, $value = null, int $type = -1): Select
    {
    }

    /**
     * Resets the internal collections
     *
     * @return void
     */
    public function reset(): void
    {
    }

    /**
     * Start a sub-select
     *
     * @return Select
     */
    public function subSelect(): Select
    {
    }

    /**
     * Start a `UNION`
     *
     * @return Select
     */
    public function union(): Select
    {
    }

    /**
     * Start a `UNION ALL`
     *
     * @return Select
     */
    public function unionAll(): Select
    {
    }

    /**
     * Statement builder
     *
     * @param string $suffix
     * @return string
     */
    protected function getCurrentStatement(string $suffix = ''): string
    {
    }

    /**
     * Builds the columns list
     *
     * @return string
     */
    private function buildColumns(): string
    {
    }

    /**
     * Builds the from list
     *
     * @return string
     */
    private function buildFrom(): string
    {
    }
}
