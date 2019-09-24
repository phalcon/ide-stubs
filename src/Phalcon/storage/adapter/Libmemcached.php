<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Storage\Adapter;

use Phalcon\Storage\Exception;

/**
 * Libmemcached adapter
 */
class Libmemcached extends AbstractAdapter
{
    /**
     * @var array
     */
    protected $options = array();


    /**
     * Libmemcached constructor.
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
     * @throws Exception
     * @return bool
     */
    public function clear(): bool
    {
    }

    /**
     * Decrements a stored number
     *
     * @param string $key
     * @param int $value
     * @return int|bool
     */
    public function decrement(string $key, int $value = 1)
    {
    }

    /**
     * Reads data from the adapter
     *
     * @param string $key
     *
     * @throws Exception
     * @param string $key
     * @return bool
     */
    public function delete(string $key): bool
    {
    }

    /**
     * Reads data from the adapter
     *
     * @param null   $defaultValue
     *
     * @throws Exception
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    public function get(string $key, $defaultValue = null)
    {
    }

    /**
     * Returns the already connected adapter or connects to the Memcached
     * server(s)
     *
     * @throws Exception
     * @return mixed
     */
    public function getAdapter()
    {
    }

    /**
     * Stores data in the adapter
     *
     * @throws Exception
     * @return array
     */
    public function getKeys(): array
    {
    }

    /**
     * Checks if an element exists in the cache
     *
     * @param string $key
     *
     * @throws Exception
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
    }

    /**
     * Increments a stored number
     *
     * @param int    $value
     *
     * @throws Exception
     * @param string $key
     * @param int $value
     * @return int|bool
     */
    public function increment(string $key, int $value = 1)
    {
    }

    /**
     * Stores data in the adapter
     *
     * @param null   $ttl
     *
     * @throws Exception
     * @param string $key
     * @param mixed $value
     * @param mixed $ttl
     * @return bool
     */
    public function set(string $key, $value, $ttl = null): bool
    {
    }

    /**
     * Checks the serializer. If it is a supported one it is set, otherwise
     * the custom one is set.
     *
     * @param Memcached $connection
     */
    private function setSerializer(\Memcached $connection)
    {
    }
}
