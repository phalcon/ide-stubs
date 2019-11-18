<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Adapter;

use Phalcon\Storage\Exception;

/**
 * Redis adapter
 */
class Redis extends \Phalcon\Storage\Adapter\AbstractAdapter
{
    /**
     * @var array
     */
    protected $options = array();


    /**
     * Constructor
     *
     * @param \Phalcon\Storage\SerializerFactory $factory
     * @param array $options
     */
    public function __construct(\Phalcon\Storage\SerializerFactory $factory = null, array $options = array())
    {
    }

    /**
     * Flushes/clears the cache
     *
     * @return bool
     * @throws Exception
     */
    public function clear(): bool
    {
    }

    /**
     * Decrements a stored number
     *
     * @param string $key
     * @param int    $value
     *
     * @return bool|int
     * @throws Exception
     */
    public function decrement(string $key, int $value = 1)
    {
    }

    /**
     * Reads data from the adapter
     *
     * @param string $key
     *
     * @return bool
     * @throws Exception
     */
    public function delete(string $key): bool
    {
    }

    /**
     * Reads data from the adapter
     *
     * @param string $key
     * @param null   $defaultValue
     *
     * @return mixed
     * @throws Exception
     */
    public function get(string $key, $defaultValue = null)
    {
    }

    /**
     * Returns the already connected adapter or connects to the Redis
     * server(s)
     *
     * @return mixed|\Redis
     * @throws Exception
     */
    public function getAdapter()
    {
    }

    /**
     * Stores data in the adapter
     *
     * @return array
     * @throws Exception
     */
    public function getKeys(): array
    {
    }

    /**
     * Checks if an element exists in the cache
     *
     * @param string $key
     *
     * @return bool
     * @throws Exception
     */
    public function has(string $key): bool
    {
    }

    /**
     * Increments a stored number
     *
     * @param string $key
     * @param int    $value
     *
     * @return bool|int
     * @throws Exception
     */
    public function increment(string $key, int $value = 1)
    {
    }

    /**
     * Stores data in the adapter
     *
     * @param string $key
     * @param mixed  $value
     * @param null   $ttl
     *
     * @return bool
     * @throws Exception
     */
    public function set(string $key, $value, $ttl = null): bool
    {
    }

    /**
     * Checks the serializer. If it is a supported one it is set, otherwise
     * the custom one is set.
     *
     * @param \Redis $connection
     */
    private function setSerializer(\Redis $connection)
    {
    }
}
