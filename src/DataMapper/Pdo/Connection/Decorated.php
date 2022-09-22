<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Pdo\Connection;

use Phalcon\DataMapper\Pdo\Exception\CannotDisconnect;
use Phalcon\DataMapper\Pdo\Profiler\Profiler;
use Phalcon\DataMapper\Pdo\Profiler\ProfilerInterface;

/**
 * Decorates an existing PDO instance with the extended methods.
 */
class Decorated extends \Phalcon\DataMapper\Pdo\Connection\AbstractConnection
{
    /**
     *
     * Constructor.
     *
     * This overrides the parent so that it can take an existing PDO instance
     * and decorate it with the extended methods.
     *
     * @param \PDO                   $pdo
     * @param ProfilerInterface|null $profiler
     *
     */
    public function __construct(\PDO $pdo, \Phalcon\DataMapper\Pdo\Profiler\ProfilerInterface $profiler = null)
    {
    }

    /**
     * Connects to the database.
     *
     * @return void
     */
    public function connect(): void
    {
    }

    /**
     * Disconnects from the database; disallowed with decorated PDO connections.
     *
     * @throws CannotDisconnect
     * @return void
     */
    public function disconnect(): void
    {
    }
}
