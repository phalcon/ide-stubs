<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon;

use Phalcon\Cache\Adapter\AdapterInterface;
use Psr\SimpleCache\CacheInterface;

/**
 * This component offers caching capabilities for your application.
 * Phalcon\Cache implements PSR-16.
 */
class Cache implements CacheInterface
{
    /**
     * The adapter
     *
     * @var AdapterInterface
     */
    protected $adapter;


    /**
     * The adapter
     *
     * @return AdapterInterface
     */
    public function getAdapter()
    {
    }

    /**
     * Constructor.
     *
     * @param AdapterInterface $adapter The cache adapter
     */
    public function __construct(\Phalcon\Cache\Adapter\AdapterInterface $adapter)
    {
    }

    /**
     * Wipes clean the entire cache's keys.
     *
     * @return bool
     */
    public function clear(): bool
    {
    }

    /**
     * Delete an item from the cache by its unique key.
     *
     * @param string $key The unique cache key of the item to delete.
     *
     * @return bool True if the item was successfully removed. False if there was an error.
     *
     * @throws Phalcon\Cache\Exception\InvalidArgumentException MUST be thrown if the $key string is not a legal value.
     * @param mixed $key
     * @return bool
     */
    public function delete($key): bool
    {
    }

    /**
     * Deletes multiple cache items in a single operation.
     *
     * @param iterable $keys A list of string-based keys to be deleted.
     *
     * @return bool True if the items were successfully removed. False if there was an error.
     *
     * @throws Phalcon\Cache\Exception\InvalidArgumentException MUST be thrown if $keys is neither an array nor a Traversable, or if any of the $keys are not a legal value.
     * @param mixed $keys
     * @return bool
     */
    public function deleteMultiple($keys): bool
    {
    }

    /**
     * Fetches a value from the cache.
     *
     * @param mixed  $default Default value to return if the key does not exist.
     *
     * @return mixed The value of the item from the cache, or $default in case of cache miss.
     *
     * @throws Phalcon\Cache\Exception\InvalidArgumentException MUST be thrown if the $key string is not a legal value.
     * @param string $key The unique key of this item in the cache.
     * @param mixed $defaultValue
     * @return mixed
     */
    public function get($key, $defaultValue = null)
    {
    }

    /**
     * Obtains multiple cache items by their unique keys.
     *
     * @param mixed    $default Default value to return for keys that do not exist.
     *
     * @return iterable A list of key => value pairs. Cache keys that do not exist or are stale will have $default as value.
     *
     * @throws Phalcon\Cache\Exception\InvalidArgumentException MUST be thrown if $keys is neither an array nor a Traversable, or if any of the $keys are not a legal value.
     * @param iterable $keys A list of keys that can obtained in a single operation.
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getMultiple($keys, $defaultValue = null)
    {
    }

    /**
     * Determines whether an item is present in the cache.
     *
     * @param string $key The cache item key.
     *
     * @return bool
     *
     * @throws Phalcon\Cache\Exception\InvalidArgumentException MUST be thrown if the $key string is not a legal value.
     * @param mixed $key
     * @return bool
     */
    public function has($key): bool
    {
    }

    /**
     * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time.
     *
     * @param null|int|\DateInterval $ttl   Optional. The TTL value of this item. If no value is sent and
     *                                      the driver supports TTL then the library may set a default value
     *                                      for it or let the driver take care of that.
     *
     * @return bool True on success and false on failure.
     *
     * @throws Phalcon\Cache\Exception\InvalidArgumentException MUST be thrown if the $key string is not a legal value.
     * @param string $key The key of the item to store.
     * @param mixed $value The value of the item to store. Must be serializable.
     * @param mixed $ttl
     * @return bool
     */
    public function set($key, $value, $ttl = null): bool
    {
    }

    /**
     * Persists a set of key => value pairs in the cache, with an optional TTL.
     *
     * @param null|int|\DateInterval $ttl    Optional. The TTL value of this item. If no value is sent and
     *                                       the driver supports TTL then the library may set a default value
     *                                       for it or let the driver take care of that.
     *
     * @return bool True on success and false on failure.
     *
     * @throws Phalcon\Cache\Exception\InvalidArgumentException MUST be thrown if $values is neither an array nor a Traversable, or if any of the $values are not a legal value.
     * @param iterable $values A list of key => value pairs for a multiple-set operation.
     * @param mixed $ttl
     * @return bool
     */
    public function setMultiple($values, $ttl = null): bool
    {
    }

    /**
     * Checks the key. If it contains invalid characters an exception is thrown
     *
     * @param mixed $key
     */
    protected function checkKey($key)
    {
    }

    /**
     * Checks the key. If it contains invalid characters an exception is thrown
     *
     * @param mixed $keys
     */
    protected function checkKeys($keys)
    {
    }
}
