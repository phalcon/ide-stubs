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
use Memcached;
use Phalcon\Contracts\Storage\StorageTypes;
use Phalcon\Storage\Exception as StorageException;
use Phalcon\Storage\Exceptions\ConnectionFailed;
use Phalcon\Storage\Exceptions\InvalidConfiguration;
use Phalcon\Storage\SerializerFactory;
use Phalcon\Support\Exception as SupportException;

/**
 * Libmemcached adapter
 *
 * Capabilities:
 * - Counters: native atomic (Memcached::increment()/decrement()).
 * - getKeys(): Memcached::getAllKeys(), which is server-dependent and may be
 *   incomplete or unavailable on modern memcached builds.
 * - Serializers: Phalcon-side plus libmemcached's own options.
 *
 * @phpstan-import-type storage_keys from StorageTypes
 * @phpstan-import-type storage_libmemcached_client from StorageTypes
 * @phpstan-import-type storage_libmemcached_options from StorageTypes
 * @phpstan-import-type storage_libmemcached_sasl from StorageTypes
 * @phpstan-import-type storage_libmemcached_servers from StorageTypes
 * @phpstan-import-type storage_libmemcached_settings from StorageTypes
 *
 * @phpstan-property Memcached|null $adapter
 * @phpstan-property storage_libmemcached_settings $options
 */
class Libmemcached extends \Phalcon\Storage\Adapter\AbstractAdapter
{
    protected string $prefix = 'ph-memc-';

    /**
     * Libmemcached constructor.
     *
     * @phpstan-param storage_libmemcached_options $options
     * @param \Phalcon\Storage\SerializerFactory $factory
     * @param array $options
     */
    public function __construct(\Phalcon\Storage\SerializerFactory $factory, array $options = [])
    {
    }

    /**
     * Flushes/clears the cache
     *
     * @throws StorageException
     * @return bool
     */
    public function clear(): bool
    {
    }

    /**
     * Returns the already connected adapter or connects to the Memcached
     * server(s)
     *
     * @return Memcached
     * @throws StorageException
     */
    public function getAdapter(): mixed
    {
    }

    /**
     * Stores data in the adapter
     *
     * @phpstan-return storage_keys
     *
     * @throws StorageException
     * @param string $prefix
     * @return array
     */
    public function getKeys(string $prefix = ''): array
    {
    }

    /**
     * Stores data in the adapter forever. The key needs to be manually deleted
     * from the adapter.
     *
     * @throws StorageException
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
     * @throws StorageException
     * @param string $key
     * @param int $value
     * @return false|int
     */
    protected function doDecrement(string $key, int $value = 1): int|false
    {
    }

    /**
     * Deletes data from the adapter
     *
     * @throws StorageException
     * @param string $key
     * @return bool
     */
    protected function doDelete(string $key): bool
    {
    }

    /**
     * Deletes multiple keys from Memcached using a single deleteMulti call
     *
     * @phpstan-param storage_keys $keys
     *
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
     * @throws StorageException
     */
    protected function doSet(string $key, $value, $ttl = null): bool
    {
    }

    /**
     * @phpstan-param storage_libmemcached_client $client
     *
     * @throws InvalidConfiguration
     * @param \Memcached $connection
     * @param array $client
     * @return static
     */
    private function setOptions(\Memcached $connection, array $client): static
    {
    }

    /**
     * @param \Memcached $connection
     * @param string $saslUser
     * @param string $saslPass
     * @return static
     */
    private function setSasl(\Memcached $connection, string $saslUser, string $saslPass): static
    {
    }

    /**
     * Checks the serializer. If it is a supported one it is set, otherwise
     * the custom one is set.
     *
     * @throws SupportException
     * @param \Memcached $connection
     * @return void
     */
    private function setSerializer(\Memcached $connection): void
    {
    }

    /**
     * @phpstan-param storage_libmemcached_servers $servers
     *
     * @throws ConnectionFailed
     * @param \Memcached $connection
     * @param array $servers
     * @return static
     */
    private function setServers(\Memcached $connection, array $servers): static
    {
    }
}
