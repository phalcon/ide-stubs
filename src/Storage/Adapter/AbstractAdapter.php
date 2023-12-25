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
use Phalcon\Storage\Serializer\SerializerInterface;
use Phalcon\Storage\SerializerFactory;
use Phalcon\Support\Exception as SupportException;

/**
 * Class AbstractAdapter
 *
 * @package Phalcon\Storage\Adapter
 *
 * @property mixed               $adapter
 * @property string              $defaultSerializer
 * @property int                 $lifetime
 * @property array               $options
 * @property string              $prefix
 * @property SerializerInterface $serializer
 * @property SerializerFactory   $serializerFactory
 */
abstract class AbstractAdapter implements \Phalcon\Storage\Adapter\AdapterInterface
{
    /**
     * @var mixed
     */
    protected $adapter;

    /**
     * Name of the default serializer class
     *
     * @var string
     */
    protected $defaultSerializer = 'php';

    /**
     * Name of the default TTL (time to live)
     *
     * @var int
     */
    protected $lifetime = 3600;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var string
     */
    protected $prefix = 'ph-memo-';

    /**
     * Serializer
     *
     * @var SerializerInterface|null
     */
    protected $serializer;

    /**
     * Serializer Factory
     *
     * @var SerializerFactory
     */
    protected $serializerFactory;

    /**
     * AbstractAdapter constructor.
     *
     * @param SerializerFactory $factory
     * @param array             $options
     */
    protected function __construct(\Phalcon\Storage\SerializerFactory $factory, array $options = [])
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
     * @param int    $value
     *
     * @return int | bool
     */
    abstract public function decrement(string $key, int $value = 1): int|bool;

    /**
     * Deletes data from the adapter
     *
     * @param string $key
     *
     * @return bool
     */
    abstract public function delete(string $key): bool;

    /**
     * Reads data from the adapter
     *
     * @param string     $key
     * @param mixed|null $defaultValue
     *
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
     * @param string $prefix
     *
     * @return array
     */
    abstract public function getKeys(string $prefix = ''): array;

    /**
     * Returns the prefix
     *
     * @return string
     */
    public function getPrefix(): string
    {
    }

    /**
     * Checks if an element exists in the cache
     *
     * @param string $key
     *
     * @return bool
     */
    abstract public function has(string $key): bool;

    /**
     * Increments a stored number
     *
     * @param string $key
     * @param int    $value
     *
     * @return int | bool
     */
    abstract public function increment(string $key, int $value = 1): int|bool;

    /**
     * Stores data in the adapter
     *
     * @param string                $key
     * @param mixed                 $value
     * @param DateInterval|int|null $ttl
     *
     * @return bool
     */
    abstract public function set(string $key, $value, $ttl = null): bool;

    /**
     * @param string $serializer
     * @return void
     */
    public function setDefaultSerializer(string $serializer): void
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
     * Filters the keys array based on global and passed prefix
     *
     * @param mixed  $keys
     * @param string $prefix
     *
     * @return array
     */
    protected function getFilteredKeys($keys, string $prefix): array
    {
    }

    /**
     * Returns the key requested, prefixed
     *
     * @param string $key
     *
     * @return string
     */
    protected function getPrefixedKey($key): string
    {
    }

    /**
     * Returns serialized data
     *
     * @param mixed $content
     *
     * @return mixed
     */
    protected function getSerializedData($content): mixed
    {
    }

    /**
     * Calculates the TTL for a cache item
     *
     * @param DateInterval|int|null $ttl
     *
     * @return int
     * @throws Exception
     */
    protected function getTtl($ttl): int
    {
    }

    /**
     * Returns unserialized data
     *
     * @param mixed      $content
     * @param mixed|null $defaultValue
     *
     * @return mixed
     */
    protected function getUnserializedData($content, $defaultValue = null): mixed
    {
    }

    /**
     * Initializes the serializer
     *
     * @throws SupportException
     * @return void
     */
    protected function initSerializer(): void
    {
    }

    /**
     * @todo Remove this when we get traits
     * @param array $collection
     * @param mixed $index
     * @param mixed $defaultValue
     * @param string $cast
     * @return mixed
     */
    protected function getArrVal(array $collection, $index, $defaultValue = null, string $cast = null): mixed
    {
    }
}
