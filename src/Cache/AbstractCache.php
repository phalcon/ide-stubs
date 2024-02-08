<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Cache;

use DateInterval;
use Phalcon\Cache\Adapter\AdapterInterface;
use Phalcon\Cache\Exception\InvalidArgumentException;
use Traversable;

/**
 * This component offers caching capabilities for your application.
 */
abstract class AbstractCache implements \Phalcon\Cache\CacheInterface
{
    /**
     * The adapter
     *
     * @var AdapterInterface
     */
    protected $adapter;

    /**
     * Constructor.
     *
     * @param AdapterInterface $adapter The cache adapter
     */
    public function __construct(\Phalcon\Cache\Adapter\AdapterInterface $adapter)
    {
    }

    /**
     * Returns the current adapter
     *
     * @return AdapterInterface
     */
    public function getAdapter(): AdapterInterface
    {
    }

    /**
     * Checks the key. If it contains invalid characters an exception is thrown
     *
     * @param mixed $key
     *
     * @throws InvalidArgumentException
     * @return void
     */
    protected function checkKey(string $key): void
    {
    }

    /**
     * Checks the key. If it contains invalid characters an exception is thrown
     *
     * @param mixed $keys
     *
     * @throws InvalidArgumentException
     * @return void
     */
    protected function checkKeys($keys): void
    {
    }

    /**
     * Wipes clean the entire cache's keys.
     *
     * @return bool True on success and false on failure.
     */
    protected function doClear(): bool
    {
    }

    /**
     * Delete an item from the cache by its unique key.
     *
     * @param string $key The unique cache key of the item to delete.
     *
     * @return bool True if the item was successfully removed. False if there
     *              was an error.
     *
     * @throws InvalidArgumentException MUST be thrown if the $key string is
     *                                  not a legal value.
     */
    protected function doDelete(string $key): bool
    {
    }

    /**
     * Deletes multiple cache items in a single operation.
     *
     * @param mixed $keys
     * @return bool
     */
    protected function doDeleteMultiple($keys): bool
    {
    }

    /**
     * Fetches a value from the cache.
     *
     * @param string $key          The unique key of this item in the cache.
     * @param mixed  $defaultValue Default value to return if the key does not exist.
     *
     * @return mixed The value of the item from the cache, or $default in case
     * of cache miss.
     *
     * @throws InvalidArgumentException MUST be thrown if the $key string is
     * not a legal value.
     */
    protected function doGet(string $key, $defaultValue = null): mixed
    {
    }

    /**
     * Obtains multiple cache items by their unique keys.
     *
     * @param mixed $keys
     * @param mixed $defaultValue
     * @return array
     */
    protected function doGetMultiple($keys, $defaultValue = null): array
    {
    }

    /**
     * Determines whether an item is present in the cache.
     *
     * @param string $key The cache item key.
     *
     * @return bool
     *
     * @throws InvalidArgumentException MUST be thrown if the $key string is
     * not a legal value.
     */
    protected function doHas(string $key): bool
    {
    }

    /**
     * Persists data in the cache, uniquely referenced by a key with an optional
     * expiration TTL time.
     *
     * @param string                $key    The key of the item to store.
     * @param mixed                 $value  The value of the item to store.
     *                                      Must be serializable.
     * @param null|int|DateInterval $ttl    Optional. The TTL value of this
     *                                      item. If no value is sent and the
     *                                      driver supports TTL then the library
     *                                      may set a default value for it or
     *                                      let the driver take care of that.
     *
     * @return bool True on success and false on failure.
     *
     * @throws InvalidArgumentException MUST be thrown if the $key string is not
     * a legal value.
     */
    protected function doSet(string $key, $value, $ttl = null): bool
    {
    }

    /**
     * Persists a set of key => value pairs in the cache, with an optional TTL.
     *
     * @param mixed $values
     * @param mixed $ttl
     * @return bool
     */
    protected function doSetMultiple($values, $ttl = null): bool
    {
    }

    /**
     * Returns the exception class that will be used for exceptions thrown
     *
     * @return string
     */
    abstract protected function getExceptionClass(): string;
}
