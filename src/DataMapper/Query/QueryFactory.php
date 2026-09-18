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
 * QueryFactory
 */
class QueryFactory
{
    protected string $selectClass = '';

    /**
     * QueryFactory constructor.
     *
     * @param string $selectClass
     */
    public function __construct(string $selectClass = '')
    {
    }

    /**
     * Create a new Bind object
     *
     * @return Bind
     */
    public function newBind(): Bind
    {
    }

    /**
     * Create a new Delete object
     *
     * @param \Phalcon\DataMapper\Pdo\Connection $connection
     * @return Delete
     */
    public function newDelete(\Phalcon\DataMapper\Pdo\Connection $connection): Delete
    {
    }

    /**
     * Create a new Insert object
     *
     * @param \Phalcon\DataMapper\Pdo\Connection $connection
     * @return Insert
     */
    public function newInsert(\Phalcon\DataMapper\Pdo\Connection $connection): Insert
    {
    }

    /**
     * Create a new Select object
     *
     * @param \Phalcon\DataMapper\Pdo\Connection $connection
     * @return Select
     */
    public function newSelect(\Phalcon\DataMapper\Pdo\Connection $connection): Select
    {
    }

    /**
     * Create a new Update object
     *
     * @param \Phalcon\DataMapper\Pdo\Connection $connection
     * @return Update
     */
    public function newUpdate(\Phalcon\DataMapper\Pdo\Connection $connection): Update
    {
    }
}
