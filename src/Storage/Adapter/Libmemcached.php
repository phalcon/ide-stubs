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
use Phalcon\Storage\Exception as StorageException;
use Phalcon\Storage\SerializerFactory;
use Phalcon\Support\Exception as SupportException;

/**
 * Libmemcached adapter
 */
class Libmemcached extends \Phalcon\Storage\Adapter\AbstractAdapter
{
    /**
     * @var string
     */
    protected $prefix = 'ph-memc-';

    /**
     * Libmemcached constructor.
     *
     * @param SerializerFactory $factory
     * @param array             $options
     *
     * @throws SupportException
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
     * Decrements a stored number
     *
     * @param string $key
     * @param int    $value
     *
     * @return bool|int
     * @throws StorageException
     */
    public function decrement(string $key, int $value = 1): int|bool
    {
    }

    /**
     * Reads data from the adapter
     *
     * @param string $key
     *
     * @return bool
     * @throws StorageException
     */
    public function delete(string $key): bool
    {
    }

    /**
     * Returns the already connected adapter or connects to the Memcached
     * server(s)
     *
     * @return \Memcached|null
     * @throws StorageException
     */
    public function getAdapter(): mixed
    {
    }

    /**
     * Stores data in the adapter
     *
     * @param string $prefix
     *
     * @return array
     * @throws StorageException
     */
    public function getKeys(string $prefix = ''): array
    {
    }

    /**
     * Checks if an element exists in the cache
     *
     * @param string $key
     *
     * @return bool
     * @throws StorageException
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
     * @throws StorageException
     */
    public function increment(string $key, int $value = 1): int|bool
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
    public function set(string $key, $value, $ttl = null): bool
    {
    }

    /**
     * Stores data in the adapter forever. The key needs to manually deleted
     * from the adapter.
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return bool
     */
    public function setForever(string $key, $value): bool
    {
    }

    /**
     * @param \Memcached $connection
     * @param array      $client
     *
     * @return Libmemcached
     * @throws StorageException
     */
    private function setOptions(\Memcached $connection, array $client): Libmemcached
    {
    }

    /**
     * @param \Memcached $connection
     * @param string     $saslUser
     * @param string     $saslPass
     *
     * @return Libmemcached
     */
    private function setSasl(\Memcached $connection, string $saslUser, string $saslPass): Libmemcached
    {
    }

    /**
     * Checks the serializer. If it is a supported one it is set, otherwise
     * the custom one is set.
     *
     * @param \Memcached $connection
     * @return void
     */
    private function setSerializer(\Memcached $connection): void
    {
    }

    /**
     * @param \Memcached $connection
     * @param array      $servers
     *
     * @return Libmemcached
     * @throws StorageException
     */
    private function setServers(\Memcached $connection, array $servers): Libmemcached
    {
    }
}
