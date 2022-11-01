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
    /**
     * @var string
     */
    protected $selectClass = '';

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
     * @param <Connection> connection
     *
     * @return Delete
     * @param \Phalcon\DataMapper\Pdo\Connection $connection
     */
    public function newDelete(\Phalcon\DataMapper\Pdo\Connection $connection): Delete
    {
    }

    /**
     * Create a new Insert object
     *
     * @param <Connection> connection
     *
     * @return Insert
     * @param \Phalcon\DataMapper\Pdo\Connection $connection
     */
    public function newInsert(\Phalcon\DataMapper\Pdo\Connection $connection): Insert
    {
    }

    /**
     * Create a new Select object
     *
     * @param <Connection> connection
     *
     * @return Select
     * @param \Phalcon\DataMapper\Pdo\Connection $connection
     */
    public function newSelect(\Phalcon\DataMapper\Pdo\Connection $connection): Select
    {
    }

    /**
     * Create a new Update object
     *
     * @param <Connection> connection
     *
     * @return Update
     * @param \Phalcon\DataMapper\Pdo\Connection $connection
     */
    public function newUpdate(\Phalcon\DataMapper\Pdo\Connection $connection): Update
    {
    }
}
