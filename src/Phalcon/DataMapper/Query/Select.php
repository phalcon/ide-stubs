<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Query;

/**
 * Class Select
 *
 * @property string $asAlias
 * @property bool   $forUpdate
 *
 * @method int    fetchAffected()
 * @method array  fetchAll()
 * @method array  fetchAssoc()
 * @method array  fetchColumn(int $column = 0)
 * @method array  fetchGroup(int $flags = PDO::FETCH_ASSOC)
 * @method object fetchObject(string $class = 'stdClass', array $arguments = [])
 * @method array  fetchObjects(string $class = 'stdClass', array $arguments = [])
 * @method array  fetchOne()
 * @method array  fetchPairs()
 * @method mixed  fetchValue()
 */
class Select extends \Phalcon\DataMapper\Query\AbstractConditions
{

    const JOIN_INNER = 'INNER';


    const JOIN_LEFT = 'LEFT';


    const JOIN_NATURAL = 'NATURAL';


    const JOIN_RIGHT = 'RIGHT';

    /**
     * @var string
     */
    protected $asAlias = '';

    /**
     * @var bool
     */
    protected $forUpdate = false;


    /**
     * Proxied methods to the connection
     *
     * @param string $method
     * @param array  $params
     *
     * @return mixed
     */
    public function __call(string $method, array $params)
    {
    }

    /**
     * Sets a `AND` for a `HAVING` condition
     *
     * @param string     $condition
     * @param mixed|null $value
     * @param int        $type
     *
     * @return Select
     */
    public function andHaving(string $condition, $value = null, int $type = -1): Select
    {
    }

    /**
     * The `AS` statement for the query - useful in sub-queries
     *
     * @param string $asAlias
     *
     * @return Select
     */
    public function asAlias(string $asAlias): Select
    {
    }

    /**
     * Concatenates to the most recent `HAVING` clause
     *
     * @param string     $condition
     * @param mixed|null $value
     * @param int        $type
     *
     * @return Select
     */
    public function appendHaving(string $condition, $value = null, int $type = -1): Select
    {
    }

    /**
     * Concatenates to the most recent `JOIN` clause
     *
     * @param string     $condition
     * @param mixed|null $value
     * @param int        $type
     *
     * @return Select
     */
    public function appendJoin(string $condition, $value = null, int $type = -1): Select
    {
    }

    /**
     * The columns to select from. If a key is set in an array element, the
     * key will be used as the alias
     *
     * @param string ...$column
     *
     * @return Select
     * @param string  ...$column
     *
     */
    public function columns(): Select
    {
    }

    /**
     * @param bool $enable
     *
     * @return Select
     */
    public function distinct(bool $enable = true): Select
    {
    }

    /**
     * Adds table(s) in the query
     *
     * @param string $table
     *
     * @return Select
     */
    public function from(string $table): Select
    {
    }

    /**
     * Enable the `FOR UPDATE` for the query
     *
     * @param bool $enable
     *
     * @return Select
     */
    public function forUpdate(bool $enable = true): Select
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
     * @param array|string $groupBy
     *
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
     * @param string     $condition
     * @param mixed|null $value
     * @param int        $type
     *
     * @return Select
     */
    public function having(string $condition, $value = null, int $type = -1): Select
    {
    }

    /**
     * Sets a 'JOIN' condition
     *
     * @param string     $join
     * @param string     $table
     * @param string     $condition
     * @param mixed|null $value
     * @param int        $type
     *
     * @return Select
     */
    public function join(string $join, string $table, string $condition, $value = null, int $type = -1): Select
    {
    }

    /**
     * Sets a `OR` for a `HAVING` condition
     *
     * @param string     $condition
     * @param mixed|null $value
     * @param int        $type
     *
     * @return Select
     */
    public function orHaving(string $condition, $value = null, int $type = -1): Select
    {
    }

    /**
     * Resets the internal collections
     *
     * @return Select
     */
    public function reset(): Select
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
     *
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
