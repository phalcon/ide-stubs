<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Pdo;

use Phalcon\DataMapper\Pdo\Connection\AbstractConnection;
use Phalcon\DataMapper\Pdo\Profiler\ProfilerInterface;

/**
 * Provides array quoting, profiling, a new `perform()` method, new `fetch()`
 * methods
 *
 * @property array             $arguments
 * @property PDO               $pdo
 * @property ProfilerInterface $profiler
 */
class Connection extends AbstractConnection
{
    /**
     * @var array
     */
    protected $arguments = array();


    /**
     * Constructor.
     *
     * This overrides the parent so that it can take connection attributes as a
     * constructor parameter, and set them after connection.
     *
     * @param string            $dsn
     * @param string            $username
     * @param string            $password
     * @param array             $options
     * @param array             $queries
     * @param ProfilerInterface $profiler
     */
    public function __construct(string $dsn, string $username = null, string $password = null, array $options = array(), array $queries = array(), \Phalcon\DataMapper\Pdo\Profiler\ProfilerInterface $profiler = null)
    {
    }

    /**
     * The purpose of this method is to hide sensitive data from stack traces.
     *
     * @return array
     */
    public function __debugInfo(): array
    {
    }

    /**
     * Connects to the database.
     *
     * @return void
     */
    public function connect()
    {
    }

    /**
     * Disconnects from the database.
     *
     * @return void
     */
    public function disconnect()
    {
    }
}
