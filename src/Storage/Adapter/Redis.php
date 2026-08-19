<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Adapter;

use DateInterval;
use Exception as BaseException;
use Phalcon\Contracts\Storage\StorageTypes;
use Phalcon\Storage\Exception as StorageException;
use Phalcon\Storage\Exceptions\AuthenticationFailed;
use Phalcon\Storage\Exceptions\ConnectionFailed;
use Phalcon\Storage\Exceptions\DatabaseSelectionFailed;
use Phalcon\Storage\SerializerFactory;
use Redis as RedisService;
use RedisException;

/**
 * Redis adapter
 *
 * Capabilities:
 * - Counters: native atomic (incrBy()/decrBy()).
 * - getKeys(): non-blocking SCAN iteration.
 * - Serializers: Phalcon-side, or backend-native via OPT_SERIALIZER. Native
 *   serializers change the bytes at rest and are not interchangeable with
 *   Phalcon-side serializers.
 *
 * @phpstan-import-type storage_keys from StorageTypes
 * @phpstan-import-type storage_options from StorageTypes
 * @phpstan-import-type storage_redis_context from StorageTypes
 * @phpstan-import-type storage_redis_options from StorageTypes
 * @phpstan-import-type storage_redis_settings from StorageTypes
 *
 * @phpstan-property RedisService|null $adapter
 * @phpstan-property storage_redis_settings $options
 */
class Redis extends \Phalcon\Storage\Adapter\AbstractAdapter
{
    protected string $prefix = 'ph-reds-';

    /**
     * Redis constructor.
     *
     * @param SerializerFactory $factory
     * @param array             $options = [
     *     "host"           => "127.0.0.1",
     *     "port"           => 6379,
     *     "index"          => 0,
     *     "timeout"        => 0,
     *     "persistent"     => false,
     *     "persistentId"   => "",
     *     "auth"           => "",
     *     "socket"         => "",
     *     "connectTimeout" => 0,
     *     "retryInterval"  => 0,
     *     "readTimeout"    => 0,
     *     "ssl"            => [],
     * ]
     *
     * @phpstan-param storage_redis_options $options
     */
    public function __construct(\Phalcon\Storage\SerializerFactory $factory, array $options = [])
    {
    }

    /**
     * Flushes/clears the cache
     *
     * @return bool
     * @throws StorageException
     */
    public function clear(): bool
    {
    }

    /**
     * Returns the already connected adapter or connects to the Redis
     * server(s)
     *
     * The return type is deliberately left wide: RedisCluster extends this
     * adapter and hands back a `RedisCluster` client, which is not a `Redis`.
     * Callers inside this class narrow it to `RedisService` locally.
     *
     * @return mixed|RedisService
     * @throws StorageException
     */
    public function getAdapter(): mixed
    {
    }

    /**
     * Returns all the keys stored
     *
     * SCAN replaces the blocking KEYS command. SCAN_NOPREFIX keeps the prefix
     * handling explicit: the physical prefix is matched and returned unchanged,
     * so getFilteredKeys() sees exactly what KEYS produced.
     *
     * @phpstan-return storage_keys
     * @param string $prefix
     * @return array
     */
    public function getKeys(string $prefix = ''): array
    {
    }

    /**
     * Stores data in the adapter forever. The key needs to manually deleted
     * from the adapter.
     *
     * @throws StorageException
     * @throws RedisException
     * @param string $key
     * @param mixed $data
     * @return bool
     */
    public function setForever(string $key, $data): bool
    {
    }

    /**
     * Decrements a stored number
     *
     * @param string $key
     * @param int    $value
     *
     * @throws RedisException
     * @throws StorageException
     * @return false|int
     */
    protected function doDecrement(string $key, int $value = 1): int|false
    {
    }

    /**
     * Deletes data from the adapter
     *
     * @throws RedisException
     * @throws StorageException
     * @param string $key
     * @return bool
     */
    protected function doDelete(string $key): bool
    {
    }

    /**
     * Deletes multiple keys from Redis using a single unlink call
     *
     * @phpstan-param storage_keys $keys
     *
     * @throws RedisException
     * @throws StorageException
     * @param array $keys
     * @return bool
     */
    protected function doDeleteMultiple(array $keys): bool
    {
    }

    /**
     * Checks if an element exists in the cache
     *
     * @throws RedisException
     * @throws StorageException
     * @param string $key
     * @return bool
     */
    protected function doHas(string $key): bool
    {
    }

    /**
     * Increments a stored number
     *
     * @throws RedisException
     * @throws StorageException
     * @param string $key
     * @param int $value
     * @return false|int
     */
    protected function doIncrement(string $key, int $value = 1): int|false
    {
    }

    /**
     * Stores data in the adapter. If the TTL is `null` (default) or not defined
     * then the default TTL will be used, as set in this adapter. If the TTL
     * is `0` or a negative number, a `delete()` will be issued, since this
     * item has expired. If you need to set this key forever, you should use
     * the `setForever()` method.
     *
     * @param string                $key
     * @param mixed                 $value
     * @param DateInterval|int|null $ttl
     *
     * @return bool
     * @throws BaseException
     */
    protected function doSet(string $key, $value, $ttl = null): bool
    {
    }

    /**
     * The parameter is the raw, user supplied options array; `RedisCluster`
     * overrides this method with its own set of keys, so the two signatures
     * have to agree on the wider type.
     *
     * @phpstan-param storage_options $options
     *
     * @phpstan-return storage_options
     * @param array $options
     * @return array
     */
    protected function getDefaultOptions(array $options): array
    {
    }

    /**
     * @param RedisService $connection
     *
     * @throws AuthenticationFailed
     * @return static
     */
    private function checkAuth(\Redis $connection): static
    {
    }

    /**
     * @throws ConnectionFailed
     * @param \Redis $connection
     * @return static
     */
    private function checkConnect(\Redis $connection): static
    {
    }

    /**
     * @throws DatabaseSelectionFailed
     * @param \Redis $connection
     * @return static
     */
    private function checkIndex(\Redis $connection): static
    {
    }

    /**
     * Checks the serializer. If it is a supported one it is set, otherwise
     * the custom one is set.
     *
     * @throws BaseException
     * @param \Redis $connection
     * @return void
     */
    private function setSerializer(\Redis $connection): void
    {
    }
}
