<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Query;

use Phalcon\DataMapper\Pdo\Connection;

/**
 * Update Query
 */
class Update extends \Phalcon\DataMapper\Query\AbstractConditions
{
    /**
     * Update constructor.
     *
     * @param Connection $connection
     * @param Bind       $bind
     */
    public function __construct(\Phalcon\DataMapper\Pdo\Connection $connection, Bind $bind)
    {
    }

    /**
     * Sets a column for the `UPDATE` query
     *
     * @param string $column
     *
     * @return Update
     * @param mixed $value
     * @param int $type
     */
    public function column(string $column, $value = null, int $type = -1): Update
    {
    }

    /**
     * Mass sets columns and values for the `UPDATE`
     *
     * @param array $columns
     *
     * @return Update
     */
    public function columns(array $columns): Update
    {
    }

    /**
     * Adds table(s) in the query
     *
     * @param string $table
     *
     * @return Update
     */
    public function from(string $table): Update
    {
    }

    /**
     * @return string
     */
    public function getStatement(): string
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
     * Adds the `RETURNING` clause
     *
     * @param array $columns
     *
     * @return Update
     */
    public function returning(array $columns): Update
    {
    }

    /**
     * Resets the internal store
     *
     * @return void
     */
    public function reset(): void
    {
    }

    /**
     * Sets a column = value condition
     *
     * @param string     $column
     * @param mixed|null $value
     *
     * @return Update
     */
    public function set(string $column, $value = null): Update
    {
    }

    /**
     * Builds the column list
     *
     * @return string
     */
    private function buildColumns(): string
    {
    }
}
