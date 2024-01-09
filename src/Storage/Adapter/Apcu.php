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
use DateInterval;
use Exception;
use Phalcon\Storage\SerializerFactory;
use Phalcon\Support\Exception as SupportException;

/**
 * Apcu adapter
 *
 * @property array $options
 */
class Apcu extends \Phalcon\Storage\Adapter\AbstractAdapter
{
    /**
     * @var string
     */
    protected $prefix = 'ph-apcu-';

    /**
     * Apcu constructor.
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
     * Decrements a stored number
     *
     * @param string $key
     * @param int    $value
     *
     * @return bool|int
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
     */
    public function delete(string $key): bool
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
     * Checks if an element exists in the cache
     *
     * @param string $key
     *
     * @return bool
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
     * @throws Exception
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
     * @param string $key
     *
     * @return mixed
     */
    protected function doGet(string $key)
    {
    }

    /**
     * @todo Remove the below once we get traits
     * @param mixed $key
     * @param int $step
     * @return bool|int
     */
    protected function phpApcuDec($key, int $step = 1): int|bool
    {
    }

    /**
     * @param mixed $key
     * @return bool|array
     */
    protected function phpApcuDelete($key): bool|array
    {
    }

    /**
     * @param mixed $key
     * @return bool|array
     */
    protected function phpApcuExists($key): bool|array
    {
    }

    /**
     * @param mixed $key
     * @param int $step
     * @return bool|int
     */
    protected function phpApcuInc($key, int $step = 1): int|bool
    {
    }

    /**
     * @param mixed $key
     * @return mixed
     */
    protected function phpApcuFetch($key): mixed
    {
    }

    /**
     * @param string $pattern
     * @return bool|APCUIterator
     */
    protected function phpApcuIterator(string $pattern): APCUIterator|bool
    {
    }

    /**
     * @param mixed $key
     * @param mixed $payload
     * @param int $ttl
     * @return bool|array
     */
    protected function phpApcuStore($key, $payload, int $ttl = 0): bool|array
    {
    }
}
