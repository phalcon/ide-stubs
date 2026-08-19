<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Adapter;

use APCUIterator;
use Exception;
use Phalcon\Contracts\Storage\StorageTypes;
use Phalcon\Storage\SerializerFactory;
use Phalcon\Traits\Php\ApcuTrait;

/**
 * Apcu adapter
 *
 * Capabilities:
 * - Counters: native atomic (apcu_inc()/apcu_dec()).
 * - getKeys(): APCUIterator regex scan over the shared APCu store.
 * - Serializers: Phalcon-side only; no backend-native serializer.
 *
 * @phpstan-import-type storage_adapter_options from StorageTypes
 * @phpstan-import-type storage_keys from StorageTypes
 *
 * @phpstan-property storage_adapter_options $options
 */
class Apcu extends \Phalcon\Storage\Adapter\AbstractAdapter
{
    use \Phalcon\Traits\Php\ApcuTrait;


    protected string $prefix = 'ph-apcu-';

    /**
     * Apcu constructor.
     *
     * @phpstan-param storage_adapter_options $options
     *
     * @throws Exception
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
     * Stores data in the adapter forever. The key needs to manually deleted
     * from the adapter.
     *
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
     * Deletes multiple keys from APCu in a single call
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
     * @return mixed
     */
    protected function doGetData(string $key): mixed
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
     * Increments a stored number
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
     * @throws Exception
     * @param string $key
     * @param mixed $value
     * @param mixed $ttl
     * @return bool
     */
    protected function doSet(string $key, $value, $ttl = null): bool
    {
    }
}
