<?php

namespace Phalcon\Storage\Adapter;

/**
 * Stream adapter
 */
class Stream extends \Phalcon\Storage\Adapter\AbstractAdapter
{
    /**
     * @var string
     */
    protected $cacheDir = '';

    /**
     * @var array
     */
    protected $options = array();


    /**
     * Stream constructor.
     *
     * @param array $options
     *
     * @throws Exception
     * @param \Phalcon\Storage\SerializerFactory $factory
     * @param array $options
     */
    public function __construct(\Phalcon\Storage\SerializerFactory $factory = null, array $options = array()) {}

    /**
     * Flushes/clears the cache
     *
     * @return bool
     */
    public function clear(): bool {}

    /**
     * Decrements a stored number
     *
     * @param int    $value
     *
     * @throws \Exception
     * @param string $key
     * @param int $value
     * @return int|bool
     */
    public function decrement(string $key, int $value = 1) {}

    /**
     * Reads data from the adapter
     *
     * @param string $key
     *
     * @param string $key
     * @return bool
     */
    public function delete(string $key): bool {}

    /**
     * Reads data from the adapter
     *
     * @param null   $defaultValue
     *
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    public function get(string $key, $defaultValue = null) {}

    /**
     * Returns the already connected adapter or connects to the Memcached
     * server(s)
     *
     * @return mixed
     */
    public function getAdapter() {}

    /**
     * Stores data in the adapter
     *
     * @return array
     */
    public function getKeys(): array {}

    /**
     * Checks if an element exists in the cache and is not expired
     *
     * @param string $key
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool {}

    /**
     * Increments a stored number
     *
     * @param int    $value
     *
     * @throws \Exception
     * @param string $key
     * @param int $value
     * @return int|bool
     */
    public function increment(string $key, int $value = 1) {}

    /**
     * Stores data in the adapter
     *
     * @param null   $ttl
     *
     * @throws \Exception
     * @param string $key
     * @param mixed $value
     * @param mixed $ttl
     * @return bool
     */
    public function set(string $key, $value, $ttl = null): bool {}

    /**
     * Returns the folder based on the cacheDir and the prefix
     *
     * @param string $key
     *
     * @param string $key
     * @return string
     */
    private function getDir(string $key = ''): string {}

    /**
     * Returns the full path to the file
     *
     * @param string $key
     * @return string
     */
    private function getFilepath(string $key): string {}

    /**
     * @param string $dir
     * @return \Iterator
     */
    private function getIterator(string $dir): Iterator {}

    /**
     * Returns if the cache has expired for this item or not
     *
     * @param array $payload
     *
     * @param array $payload
     * @return bool
     */
    private function isExpired(array $payload): bool {}

}
