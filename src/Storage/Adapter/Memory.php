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
use Phalcon\Storage\SerializerFactory;
use Phalcon\Support\Exception as SupportException;

/**
 * Memory adapter
 *
 * @property array $data
 * @property array $options
 */
class Memory extends \Phalcon\Storage\Adapter\AbstractAdapter
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * Maximum number of items retained in the in-memory store.
     * 0 (default) keeps the original unbounded behavior; a positive
     * value drops the oldest entry FIFO before a new key is stored.
     *
     * @var int
     */
    protected $maxItems = 0;

    /**
     * Memory constructor.
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
     */
    public function clear(): bool
    {
    }

    /**
     * Stores data in the adapter
     *
     * @param string $prefix
     *
     * @return array
     */
    public function getKeys(string $prefix = ''): array
    {
    }

    /**
     * Returns the configured store cap (0 = unlimited). See setMaxItems().
     *
     * @return int
     */
    public function getMaxItems(): int
    {
    }

    /**
     * Caps the number of items retained in the in-memory store.
     * 0 disables the cap (the default; preserves the original
     * unbounded behavior). When the cap is exceeded, the oldest
     * entry is evicted FIFO before a new key is stored.
     *
     * @param int $maxItems
     * @return static
     */
    public function setMaxItems(int $maxItems): static
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
     * Decrements a stored number
     *
     * @param string $key
     * @param int    $value
     *
     * @return bool|int
     */
    protected function doDecrement(string $key, int $value = 1): int|bool
    {
    }

    /**
     * Deletes data from the adapter
     *
     * @param string $key
     *
     * @return bool
     */
    protected function doDelete(string $key): bool
    {
    }

    /**
     * @param string $key
     *
     * @return mixed
     */
    protected function doGetData(string $key)
    {
    }

    /**
     * Checks if an element exists in the cache
     *
     * @param string $key
     *
     * @return bool
     */
    protected function doHas(string $key): bool
    {
    }

    /**
     * Increments a stored number
     *
     * @param string $key
     * @param int    $value
     *
     * @return bool|int
     */
    protected function doIncrement(string $key, int $value = 1): int|bool
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
}
