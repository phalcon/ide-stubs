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
 * Delete Query
 *
 * @phpstan-import-type datamapper_clauses from DataMapperTypes
 * @phpstan-import-type datamapper_write_store from DataMapperTypes
 *
 * @property datamapper_write_store $store
 */
class Delete extends \Phalcon\DataMapper\Query\AbstractConditions
{
    /**
     * Delete constructor.
     *
     * @param \Phalcon\DataMapper\Pdo\Connection $connection
     * @param Bind $bind
     */
    public function __construct(\Phalcon\DataMapper\Pdo\Connection $connection, Bind $bind)
    {
    }

    /**
     * Adds table(s) in the query
     *
     * @param string $table
     * @return Delete
     */
    public function from(string $table): Delete
    {
    }

    /**
     * @return string
     */
    public function getStatement(): string
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
     * @return Delete
     */
    public function returning(array $columns): Delete
    {
    }
}
