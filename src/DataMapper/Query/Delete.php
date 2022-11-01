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
 * Delete Query
 */
class Delete extends \Phalcon\DataMapper\Query\AbstractConditions
{
    /**
     * Delete constructor.
     *
     * @param Connection $connection
     * @param Bind       $bind
     */
    public function __construct(\Phalcon\DataMapper\Pdo\Connection $connection, Bind $bind)
    {
    }

    /**
     * Adds table(s) in the query
     *
     * @param string $table
     *
     * @return Delete
     */
    public function from(string $table): Delete
    {
    }

    /**
     * Adds the `RETURNING` clause
     *
     * @param array $columns
     *
     * @return Delete
     */
    public function returning(array $columns): Delete
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
}
