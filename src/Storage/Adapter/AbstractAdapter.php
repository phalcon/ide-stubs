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
use DateTime;
use Exception;
use Phalcon\Contracts\Storage\StorageTypes;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Events\Traits\EventsAwareTrait;
use Phalcon\Storage\Serializer\SerializerInterface;
use Phalcon\Storage\SerializerFactory;
use Phalcon\Traits\Support\Helper\Arr\GetTrait;

/**
 * Storage AbstractAdapter
 *
 * @phpstan-import-type storage_keys from StorageTypes
 * @phpstan-import-type storage_options from StorageTypes
 */
abstract class AbstractAdapter implements \Phalcon\Storage\Adapter\AdapterInterface, \Phalcon\Events\EventsAwareInterface
{
    use \Phalcon\Events\Traits\EventsAwareTrait;
    use \Phalcon\Traits\Support\Helper\Arr\GetTrait;


    /**
     * @var mixed
     */
    protected $adapter;

    /**
     * Classes the "php" serializer may instantiate: true, false or a list
     * of class names (the "allowedClasses" option)
     *
     * @var bool|array<int, string>
     */
    protected $allowedClasses = true;

    /**
     * Name of the default serializer class
     */
    protected string $defaultSerializer = 'php';

    /**
     * EventType prefix.
     */
    protected string $eventType = 'storage';

    /**
     * Name of the default TTL (time to live)
     */
    protected int $lifetime = 3600;

    /**
     * @var array<string, mixed>
     *
     * @phpstan-var storage_options
     */
    protected array $options = [];

    protected string $prefix = 'ph-memo-';

    protected ?\Phalcon\Storage\Serializer\SerializerInterface $serializer = null;

    protected \Phalcon\Storage\SerializerFactory $serializerFactory;

    /**
     * Whether a leading prefix is stripped from incoming keys before the
     * adapter prefix is applied. Disable when keys are externally
     * generated identifiers that may legitimately start with the prefix
     * text (e.g. session ids).
     */
    protected bool $stripPrefix = true;

    /**
     * AbstractAdapter constructor.
     *
     * @phpstan-param storage_options $options
     * @param \Phalcon\Storage\SerializerFactory $serializerFactory
     * @param array $options
     */
    protected function __construct(\Phalcon\Storage\SerializerFactory $serializerFactory, array $options = [])
    {
    }

    /**
     * Flushes/clears the cache
     *
     * @return bool
     */
    abstract public function clear(): bool;

    /**
     * Decrements a stored number
     *
     * @param string $key
     * @param int $value
     * @return false|int
     */
    public function decrement(string $key, int $value = 1): int|false
    {
    }

    /**
     * Deletes data from the adapter
     *
     * @param string $key
     * @return bool
     */
    public function delete(string $key): bool
    {
    }

    /**
     * Deletes multiple data from the adapter
     *
     * @phpstan-param storage_keys $keys
     * @param array $keys
     * @return bool
     */
    public function deleteMultiple(array $keys): bool
    {
    }

    /**
     * Reads data from the adapter
     *
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    public function get(string $key, $defaultValue = null): mixed
    {
    }

    /**
     * Returns the adapter - connects to the storage if not connected
     *
     * @return mixed
     */
    public function getAdapter(): mixed
    {
    }

    /**
     * Name of the default serializer class
     *
     * @return string
     */
    public function getDefaultSerializer(): string
    {
    }

    /**
     * Returns all the keys stored
     *
     * @phpstan-return storage_keys
     * @param string $prefix
     * @return array
     */
    abstract public function getKeys(string $prefix = ''): array;

    /**
     * Returns the lifetime
     *
     * @return int
     */
    public function getLifetime(): int
    {
    }

    /**
     * Returns the prefix
     *
     * @return string
     */
    public function getPrefix(): string
    {
    }

    /**
     * Get the serializer
     *
     * @return SerializerInterface|null
     */
    public function getSerializer(): SerializerInterface|null
    {
    }

    /**
     * Checks if an element exists in the cache
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
    }

    /**
     * Increments a stored number
     *
     * @param string $key
     * @param int $value
     * @return false|int
     */
    public function increment(string $key, int $value = 1): int|false
    {
    }

    /**
     * Stores data in the adapter. If the TTL is `null` (default) or not defined
     * then the default TTL will be used, as set in this adapter. If the TTL
     * is `0` or a negative number, a `delete()` will be issued, since this
     * item has expired. If you need to set this key forever, you should use
     * the `setForever()` method.
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
     * @param string $serializer
     * @return void
     */
    public function setDefaultSerializer(string $serializer): void
    {
    }

    /**
     * Decrements a stored number
     *
     * @param string $key
     * @param int $value
     * @return false|int
     */
    abstract protected function doDecrement(string $key, int $value = 1): int|false;

    /**
     * Deletes data from the adapter
     *
     * @param string $key
     * @return bool
     */
    abstract protected function doDelete(string $key): bool;

    /**
     * Deletes multiple data from the adapter
     *
     * @phpstan-param storage_keys $keys
     * @param array $keys
     * @return bool
     */
    protected function doDeleteMultiple(array $keys): bool
    {
    }

    /**
     * @param string $key
     *
     * @return mixed
     * @param mixed $defaultValue
     */
    protected function doGet(string $key, $defaultValue = null): mixed
    {
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    protected function doGetData(string $key): mixed
    {
    }

    /**
     * Checks if an element exists in the cache
     *
     * @param string $key
     *
     * @return bool
     */
    abstract protected function doHas(string $key): bool;

    /**
     * Increments a stored number
     *
     * @param string $key
     * @param int $value
     * @return false|int
     */
    abstract protected function doIncrement(string $key, int $value = 1): int|false;

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
     */
    abstract protected function doSet(string $key, $value, $ttl = null): bool;

    /**
     * Filters the keys array based on global and passed prefix
     *
     * @phpstan-param storage_keys|false $keys
     *
     * @phpstan-return storage_keys
     * @param mixed $keys
     * @param string $prefix
     * @return array
     */
    protected function getFilteredKeys($keys, string $prefix): array
    {
    }

    /**
     * Check if the key has the prefix and remove it, otherwise just return the
     * key unaltered. When the `stripPrefix` option is `false` the key is
     * always returned unaltered.
     *
     * @param string $key
     * @return string
     */
    protected function getKeyWithoutPrefix(string $key): string
    {
    }

    /**
     * Returns the key requested, prefixed
     *
     * @param float|int|string $key
     * @return string
     */
    protected function getPrefixedKey($key): string
    {
    }

    /**
     * Returns serialized data
     *
     * @throws Exception
     * @param mixed $content
     * @return mixed
     */
    protected function getSerializedData($content): mixed
    {
    }

    /**
     * Calculates the TTL for a cache item
     *
     * @throws Exception
     * @param mixed $ttl
     * @return int
     */
    protected function getTtl($ttl): int
    {
    }

    /**
     * Returns unserialized data
     *
     * @param mixed $content
     * @param mixed $defaultValue
     * @return mixed
     */
    protected function getUnserializedData($content, $defaultValue = null): mixed
    {
    }

    /**
     * Initializes the serializer
     *
     * @throws Exception
     * @return void
     */
    protected function initSerializer(): void
    {
    }
}
