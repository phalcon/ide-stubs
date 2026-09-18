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
use Phalcon\DataMapper\Pdo\Connection;

/**
 * Insert Query
 *
 * @phpstan-import-type datamapper_clauses from DataMapperTypes
 * @phpstan-import-type datamapper_column_values from DataMapperTypes
 * @phpstan-import-type datamapper_write_store from DataMapperTypes
 *
 * @property datamapper_write_store $store
 */
class Insert extends \Phalcon\DataMapper\Query\AbstractQuery
{
    /**
     * Insert constructor.
     *
     * @param \Phalcon\DataMapper\Pdo\Connection $connection
     * @param Bind $bind
     */
    public function __construct(\Phalcon\DataMapper\Pdo\Connection $connection, Bind $bind)
    {
    }

    /**
     * Sets a column for the `INSERT` query
     *
     * @param string $column
     * @param mixed $value
     * @param int $type
     * @return Insert
     */
    public function column(string $column, $value = null, int $type = -1): Insert
    {
    }

    /**
     * Mass sets columns and values for the `INSERT`
     *
     * @phpstan-param datamapper_column_values $columns
     * @param array $columns
     * @return Insert
     */
    public function columns(array $columns): Insert
    {
    }

    /**
     * Returns the id of the last inserted record
     *
     * @param string|null $name
     * @return string
     */
    public function getLastInsertId(?string $name = null): string
    {
    }

    /**
     * @return string
     */
    public function getStatement(): string
    {
    }

    /**
     * Adds table(s) in the query
     *
     * @param string $table
     * @return Insert
     */
    public function into(string $table): Insert
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
     * Adds the `RETURNING` clause
     *
     * @phpstan-param datamapper_clauses $columns
     * @param array $columns
     * @return Insert
     */
    public function returning(array $columns): Insert
    {
    }

    /**
     * Sets a column = value condition
     *
     * @phpstan-param string|null $value
     * @param string $column
     * @param mixed $value
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
