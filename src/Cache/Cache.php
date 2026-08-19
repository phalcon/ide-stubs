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
use Throwable;

/**
 * This component offers caching capabilities for your application.
 */
class Cache extends \Phalcon\Cache\AbstractCache
{
    /**
     * Wipes clean the entire cache's keys.
     *
     * @return bool True on success and false on failure.
     */
    public function clear(): bool
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
     * @throws InvalidArgumentException
     */
    public function delete(string $key): bool
    {
    }

    /**
     * Deletes multiple cache items in a single operation.
     *
     * @phpstan-param iterable<array-key, string> $keys
     * @param mixed $keys
     * @return bool
     */
    public function deleteMultiple($keys): bool
    {
    }

    /**
     * Fetches a value from the cache.
     *
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    public function get(string $key, $defaultValue = null): mixed
    {
    }

    /**
     * Obtains multiple cache items by their unique keys.
     *
     * @phpstan-param iterable<array-key, string> $keys
     *
     * @phpstan-return array<string, mixed>
     * @param mixed $keys
     * @param mixed $defaultValue
     */
    public function getMultiple($keys, $defaultValue = null)
    {
    }

    /**
     * Determines whether an item is present in the cache.
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
    }

    /**
     * Persists data in the cache, uniquely referenced by a key with an optional
     * expiration TTL time.
     *
     * @param string $key
     * @param mixed $value
     * @param mixed $ttl
     * @return bool
     */
    public function set(string $key, $value, $ttl = null): bool
    {
    }

    /**
     * Persists a set of key => value pairs in the cache, with an optional TTL.
     *
     * @phpstan-param iterable<string, mixed> $values
     * @param mixed $values
     * @param mixed $ttl
     * @return bool
     */
    public function setMultiple($values, $ttl = null): bool
    {
    }

    /**
     * Returns the exception class that will be used for exceptions thrown
     *
     * @return class-string<Throwable>
     */
    protected function getExceptionClass(): string
    {
    }
}
