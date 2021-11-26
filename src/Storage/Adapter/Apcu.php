<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Adapter;

use APCuIterator;
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
    public function decrement(string $key, int $value = 1)
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
     * Reads data from the adapter
     *
     * @param string     $key
     * @param mixed|null $defaultValue
     *
     * @return mixed
     */
    public function get(string $key, $defaultValue = null)
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
    public function increment(string $key, int $value = 1)
    {
    }

    /**
     * Stores data in the adapter
     *
     * @param string                 $key
     * @param mixed                  $value
     * @param \DateInterval|int|null $ttl
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
}
