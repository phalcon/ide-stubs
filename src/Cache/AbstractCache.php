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
use Phalcon\Cache\Adapter\Redis;
use Phalcon\Cache\Exception\InvalidArgumentException;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Events\Traits\EventsAwareTrait;
use Throwable;
use Traversable;

/**
 * This component offers caching capabilities for your application.
 *
 * Event layering: cache operations can emit `cache:` events from two layers.
 * This facade fires `cache:before`/`cache:after` around each operation, and
 * the underlying `Storage` adapter (whose `eventType` is `"cache"`) also fires
 * `cache:before`/`cache:after` for the same operation. If an events manager
 * is wired into both the facade and the adapter, a single call emits the event
 * twice (once from each object). Wire the manager into one layer only; the
 * facade is the supported source for cache-level events (it also emits the
 * multi-key `cache:Multiple` events).
 */
abstract class AbstractCache implements \Phalcon\Cache\CacheInterface, \Phalcon\Events\EventsAwareInterface
{
    use \Phalcon\Events\Traits\EventsAwareTrait;


    protected \Phalcon\Cache\Adapter\AdapterInterface $adapter;

    /**
     * Constructor.
     *
     * @param AdapterInterface $adapter The cache adapter
     */
    public function __construct(\Phalcon\Cache\Adapter\AdapterInterface $adapter)
    {
    }

    /**
     * Fetches a value from the cache.
     *
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    abstract public function get(string $key, $defaultValue = null): mixed;

    /**
     * Returns the current adapter
     *
     * @return AdapterInterface
     */
    public function getAdapter(): AdapterInterface
    {
    }

    /**
     * Persists data in the cache, uniquely referenced by a key with an
     * optional expiration TTL time.
     *
     * @param string $key
     * @param mixed $value
     * @param mixed $ttl
     * @return bool
     */
    abstract public function set(string $key, $value, $ttl = null): bool;

    /**
     * Checks the key. If it contains invalid characters an exception is thrown
     *
     * @param string $key
     * @return void
     */
    protected function checkKey(string $key): void
    {
    }

    /**
     * Checks the key. If it contains invalid characters an exception is thrown
     *
     * @param mixed $keys
     * @return void
     */
    protected function checkKeys($keys): void
    {
    }

    /**
     * Wipes clean the entire cache's keys.
     *
     * @return bool
     */
    protected function doClear(): bool
    {
    }

    /**
     * Delete an item from the cache by its unique key.
     *
     * @param string $key
     * @return bool
     */
    protected function doDelete(string $key): bool
    {
    }

    /**
     * Deletes multiple cache items in a single operation.
     *
     * @phpstan-param iterable<array-key, string> $keys
     * @param mixed $keys
     * @return bool
     */
    protected function doDeleteMultiple($keys): bool
    {
    }

    /**
     * Fetches a value from the cache.
     *
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    protected function doGet(string $key, $defaultValue = null): mixed
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
     * @return array
     */
    protected function doGetMultiple($keys, $defaultValue = null): array
    {
    }

    /**
     * Determines whether an item is present in the cache.
     *
     * @param string $key
     * @return bool
     */
    protected function doHas(string $key): bool
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
    protected function doSet(string $key, $value, $ttl = null): bool
    {
    }

    /**
     * Persists a set of key => value pairs in the cache, with an optional TTL.
     *
     * @phpstan-param iterable<string, mixed> $values
     * @phpstan-param DateInterval|int|null   $ttl
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
     * @return class-string<Throwable>
     */
    abstract protected function getExceptionClass(): string;
}
