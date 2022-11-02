<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Pdo;

use Phalcon\DataMapper\Pdo\Connection\ConnectionInterface;
use Phalcon\DataMapper\Pdo\Exception\ConnectionNotFound;

/**
 * Manages Connection instances for default, read, and write connections.
 */
class ConnectionLocator implements \Phalcon\DataMapper\Pdo\ConnectionLocatorInterface
{
    /**
     * A default Connection connection factory/instance.
     *
     * @var ConnectionInterface
     */
    protected $master;

    /**
     * A registry of Connection "read" factories/instances.
     *
     * @var array
     */
    protected $read = [];

    /**
     * A registry of Connection "write" factories/instances.
     *
     * @var array
     */
    protected $write = [];

    /**
     * A collection of resolved instances
     *
     * @var array
     */
    private $instances = [];

    /**
     * Constructor.
     *
     * @param ConnectionInterface $master
     * @param array               $read
     * @param array               $write
     */
    public function __construct(\Phalcon\DataMapper\Pdo\Connection\ConnectionInterface $master, array $read = [], array $write = [])
    {
    }

    /**
     * Returns the default connection object.
     *
     * @return ConnectionInterface
     */
    public function getMaster(): ConnectionInterface
    {
    }

    /**
     * Returns a read connection by name; if no name is given, picks a
     * random connection; if no read connections are present, returns the
     * default connection.
     *
     * @param string $name
     *
     * @return ConnectionInterface
     * @throws ConnectionNotFound
     */
    public function getRead(string $name = ''): ConnectionInterface
    {
    }

    /**
     * Returns a write connection by name; if no name is given, picks a
     * random connection; if no write connections are present, returns the
     * default connection.
     *
     * @param string $name
     *
     * @return ConnectionInterface
     * @throws ConnectionNotFound
     */
    public function getWrite(string $name = ''): ConnectionInterface
    {
    }

    /**
     * Sets the default connection factory.
     *
     * @param ConnectionInterface $callable
     *
     * @return ConnectionLocatorInterface
     * @param \Phalcon\DataMapper\Pdo\Connection\ConnectionInterface $callableObject
     */
    public function setMaster(\Phalcon\DataMapper\Pdo\Connection\ConnectionInterface $callableObject): ConnectionLocatorInterface
    {
    }

    /**
     * Sets a read connection factory by name.
     *
     * @param string   $name
     * @param callable $callable
     *
     * @return ConnectionLocatorInterface
     * @param callable $callableObject
     */
    public function setRead(string $name, $callableObject): ConnectionLocatorInterface
    {
    }

    /**
     * Sets a write connection factory by name.
     *
     * @param string   $name
     * @param callable $callable
     *
     * @return ConnectionLocatorInterface
     * @param callable $callableObject
     */
    public function setWrite(string $name, $callableObject): ConnectionLocatorInterface
    {
    }

    /**
     * Returns a connection by name.
     *
     * @param string $type
     * @param string $name
     *
     * @return ConnectionInterface
     * @throws ConnectionNotFound
     */
    protected function getConnection(string $type, string $name = ''): ConnectionInterface
    {
    }
}
