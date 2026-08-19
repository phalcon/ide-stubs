<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Pdo;

use Phalcon\Contracts\Events\EventsAware;
use Phalcon\DataMapper\Pdo\Connection\ConnectionInterface;
use Phalcon\DataMapper\Pdo\Exception\ConnectionNotFound;
use Phalcon\Events\ManagerInterface;
use Phalcon\Events\Traits\EventsAwareTrait;

/**
 * Manages Connection instances for default, read, and write connections.
 *
 * The locator gives its events manager to each connection that it returns,
 * so connections that are built on demand also fire the DataMapper events.
 */
class ConnectionLocator implements \Phalcon\DataMapper\Pdo\ConnectionLocatorInterface, \Phalcon\Contracts\Events\EventsAware
{
    use \Phalcon\Events\Traits\EventsAwareTrait;


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
     * @return static
     * @param \Phalcon\DataMapper\Pdo\Connection\ConnectionInterface $callableObject
     */
    public function setMaster(\Phalcon\DataMapper\Pdo\Connection\ConnectionInterface $callableObject): static
    {
    }

    /**
     * Sets a read connection factory by name.
     *
     * @param string   $name
     * @param callable $callable
     *
     * @return static
     * @param callable $callableObject
     */
    public function setRead(string $name, $callableObject): static
    {
    }

    /**
     * Sets a write connection factory by name.
     *
     * @param string   $name
     * @param callable $callable
     *
     * @return static
     * @param callable $callableObject
     */
    public function setWrite(string $name, $callableObject): static
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

    /**
     * Gives the locator's events manager to a connection. Does nothing when
     * the locator has no manager, or when the connection does not accept
     * one. It is safe to call this more than once on the same connection.
     *
     * @param ConnectionInterface $connection
     *
     * @return ConnectionInterface
     */
    private function applyEventsManager(\Phalcon\DataMapper\Pdo\Connection\ConnectionInterface $connection): ConnectionInterface
    {
    }
}
