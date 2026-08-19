<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Adapter;

use Exception as BaseException;
use Phalcon\Contracts\Storage\StorageTypes;
use Phalcon\Storage\SerializerFactory;
use WeakReference;

/**
 * Weak Adapter
 *
 * Capabilities:
 * - Stores objects only, as WeakReferences; entries vanish when the referenced
 *   object is garbage-collected.
 * - TTL is ignored; no serializer is used (none/no-op).
 * - Counters unsupported: increment()/decrement() return false.
 * - setForever() is equivalent to set(); getKeys() reads the in-memory list.
 *
 * @phpstan-import-type storage_adapter_options from StorageTypes
 * @phpstan-import-type storage_keys from StorageTypes
 * @phpstan-import-type storage_options from StorageTypes
 * @phpstan-import-type storage_weak_list from StorageTypes
 */
class Weak extends \Phalcon\Storage\Adapter\AbstractAdapter
{
    /**
     * @var string|null
     */
    protected $fetching = null;

    /**
     * @var array<string, WeakReference<object>>
     *
     * @phpstan-var storage_weak_list
     */
    protected array $weakList = [];

    /**
     * @var array<string, mixed>
     *
     * @phpstan-var storage_options
     */
    protected array $options = [];

    /**
     * Constructor, there are no options
     *
     * @phpstan-param storage_adapter_options $options
     * @param \Phalcon\Storage\SerializerFactory $factory
     * @param array $options
     */
    public function __construct(\Phalcon\Storage\SerializerFactory $factory, array $options = [])
    {
    }

    /**
     * Flushes/clears the cache
     *
     * @return bool
     */
    public function clear(): bool
    {
    }

    /**
     * Stores data in the adapter
     *
     * @phpstan-return storage_keys
     * @param string $prefix
     * @return array
     */
    public function getKeys(string $prefix = ''): array
    {
    }

    /**
     * Will never set a serializer, WeakReference cannot be serialized
     *
     * @param string $serializer
     * @return void
     */
    public function setDefaultSerializer(string $serializer): void
    {
    }

    /**
     * For compatiblity only, there is no Forever with WeakReference.
     *
     * @param string $key
     * @param mixed $data
     * @return bool
     */
    public function setForever(string $key, $data): bool
    {
    }

    /**
     * Decrements a stored number - not supported for WeakReference
     *
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
     * @param string $key
     * @return bool
     */
    protected function doDelete(string $key): bool
    {
    }

    /**
     * Reads data from the adapter
     *
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    protected function doGet(string $key, $defaultValue = null): mixed
    {
    }

    /**
     * Checks if an element exists in the cache
     *
     * @param string $key
     * @return bool
     */
    protected function doHas(string $key): bool
    {
    }

    /**
     * Increments a stored number - not supported for WeakReference
     *
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
     * @throws BaseException
     * @param string $key
     * @param mixed $value
     * @param mixed $ttl
     * @return bool
     */
    protected function doSet(string $key, $value, $ttl = null): bool
    {
    }
}
