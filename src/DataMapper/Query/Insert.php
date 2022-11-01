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
 * Insert Query
 */
class Insert extends \Phalcon\DataMapper\Query\AbstractQuery
{
    /**
     * Insert constructor.
     *
     * @param Connection $connection
     * @param Bind       $bind
     */
    public function __construct(\Phalcon\DataMapper\Pdo\Connection $connection, Bind $bind)
    {
    }

    /**
     * Sets a column for the `INSERT` query
     *
     * @param string $column
     *
     * @return Insert
     * @param mixed $value
     * @param int $type
     */
    public function column(string $column, $value = null, int $type = -1): Insert
    {
    }

    /**
     * Mass sets columns and values for the `INSERT`
     *
     * @param array $columns
     *
     * @return Insert
     */
    public function columns(array $columns): Insert
    {
    }

    /**
     * Adds table(s) in the query
     *
     * @param string $table
     *
     * @return Insert
     */
    public function into(string $table): Insert
    {
    }

    /**
     * Returns the id of the last inserted record
     *
     * @param string|null $name
     *
     * @return string
     */
    public function getLastInsertId(string $name = null): string
    {
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
    }

    /**
     * Adds the `RETURNING` clause
     *
     * @param array $columns
     *
     * @return Insert
     */
    public function returning(array $columns): Insert
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
     * @return Insert
     */
    public function set(string $column, $value = null): Insert
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
