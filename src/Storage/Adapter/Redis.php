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
 * Redis adapter
 *
 * @property array $options
 */
class Redis extends \Phalcon\Storage\Adapter\AbstractAdapter
{
    /**
     * @var string
     */
    protected $prefix = 'ph-reds-';

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
     * ]
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
     * Returns the already connected adapter or connects to the Redis
     * server(s)
     *
     * @return mixed|\Redis
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
     * @return bool|false|int
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
     * @param \Redis $connection
     *
     * @return Redis
     * @throws StorageException
     */
    private function checkAuth(\Redis $connection): Redis
    {
    }

    /**
     * @param \Redis $connection
     *
     * @return Redis
     * @throws StorageException
     */
    private function checkConnect(\Redis $connection): Redis
    {
    }

    /**
     * @param \Redis $connection
     *
     * @return Redis
     * @throws StorageException
     */
    private function checkIndex(\Redis $connection): Redis
    {
    }

    /**
     * Checks the serializer. If it is a supported one it is set, otherwise
     * the custom one is set.
     *
     * @param \Redis $connection
     * @return void
     */
    private function setSerializer(\Redis $connection): void
    {
    }
}
