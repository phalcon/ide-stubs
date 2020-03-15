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
use Phalcon\Storage\Exception;
use Phalcon\Storage\Serializer\SerializerInterface;
use Phalcon\Storage\SerializerFactory;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
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
    protected $defaultSerializer = 'Php';

    /**
     * Name of the default TTL (time to live)
     *
     * @var int
     */
    protected $lifetime = 3600;

    /**
     * @var string
     */
    protected $prefix = '';

    /**
     * Serializer
     *
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * Serializer Factory
     *
     * @var SerializerFactory
     */
    protected $serializerFactory;


    /**
     * Name of the default serializer class
     *
     * @return string
     */
    public function getDefaultSerializer(): string
    {
    }

    /**
     * Name of the default serializer class
     *
     * @param string $defaultSerializer
     */
    public function setDefaultSerializer(string $defaultSerializer)
    {
    }

    /**
     * @return string
     */
    public function getPrefix(): string
    {
    }

    /**
     * Sets parameters based on options
     *
     * @param array $options = [
     *     'defaultSerializer' => 'Php',
     *     'lifetime' => 3600,
     *     'serializer' => null,
     *     'prefix' => ''
     * ]
     * @param \Phalcon\Storage\SerializerFactory $factory
     */
    protected function __construct(\Phalcon\Storage\SerializerFactory $factory, array $options = array())
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
     * @return int|bool
     */
    abstract public function decrement(string $key, int $value = 1);

    /**
     * Deletes data from the adapter
     *
     * @param string $key
     * @return bool
     */
    abstract public function delete(string $key): bool;

    /**
     * Reads data from the adapter
     *
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    abstract public function get(string $key, $defaultValue = null);

    /**
     * Returns the adapter - connects to the storage if not connected
     *
     * @return mixed
     */
    abstract public function getAdapter();

    /**
     * Returns all the keys stored
     *
     * @param string $prefix
     * @return array
     */
    abstract public function getKeys(string $prefix = ''): array;

    /**
     * Checks if an element exists in the cache
     *
     * @param string $key
     * @return bool
     */
    abstract public function has(string $key): bool;

    /**
     * Increments a stored number
     *
     * @param string $key
     * @param int $value
     * @return int|bool
     */
    abstract public function increment(string $key, int $value = 1);

    /**
     * Stores data in the adapter
     *
     * @param string $key
     * @param mixed $value
     * @param mixed $ttl
     * @return bool
     */
    abstract public function set(string $key, $value, $ttl = null): bool;

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
     * @param mixed $key
     * @return string
     */
    protected function getPrefixedKey($key): string
    {
    }

    /**
     * Returns serialized data
     *
     * @param mixed $content
     * @return mixed
     */
    protected function getSerializedData($content)
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
     * @param mixed $content
     * @param mixed $defaultValue
     * @return mixed
     */
    protected function getUnserializedData($content, $defaultValue = null)
    {
    }

    /**
     * Initializes the serializer
     *
     * @return void
     */
    protected function initSerializer()
    {
    }
}
