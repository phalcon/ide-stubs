<?php

namespace Phalcon\Storage\Adapter;

use Iterator;
use Phalcon\Storage\Exception;

/**
 * Stream adapter
 */
class Stream extends AbstractAdapter
{
    /**
     * @var string
     */
    protected $storageDir = '';

    /**
     * @var array
     */
    protected $options = array();

    /**
     * @var bool
     */
    private $warning = false;


    /**
     * Stream constructor.
     *
     * @param array $options
     *
     * @param \Phalcon\Storage\SerializerFactory $factory
     * @throws Exception
     */
    public function __construct(\Phalcon\Storage\SerializerFactory $factory = null, array $options = array())
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
     * @param int $value
     *
     * @return bool|int
     * @throws \Exception
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
     * @param string $key
     * @param null $defaultValue
     *
     * @return mixed|null
     */
    public function get(string $key, $defaultValue = null)
    {
    }

    /**
     * Returns the already connected adapter or connects to the Memcached
     * server(s)
     *
     * @return mixed
     */
    public function getAdapter()
    {
    }

    /**
     * Stores data in the adapter
     *
     * @return array
     */
    public function getKeys(): array
    {
    }

    /**
     * Checks if an element exists in the cache and is not expired
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
     * @param int $value
     *
     * @return bool|int
     * @throws \Exception
     */
    public function increment(string $key, int $value = 1)
    {
    }

    /**
     * Stores data in the adapter
     *
     * @param string $key
     * @param mixed $value
     * @param null $ttl
     *
     * @return bool
     * @throws \Exception
     */
    public function set(string $key, $value, $ttl = null): bool
    {
    }

    /**
     * Returns the folder based on the storageDir and the prefix
     *
     * @param string $key
     *
     * @return string
     */
    private function getDir(string $key = ''): string
    {
    }

    /**
     * Returns the full path to the file
     *
     * @param string $key
     * @return string
     */
    private function getFilepath(string $key): string
    {
    }

    /**
     * Returns an iterator for the directory contents
     *
     * @param string $dir
     * @return \Iterator
     */
    private function getIterator(string $dir): Iterator
    {
    }

    /**
     * Gets the file contents and returns an array or an error if something
     * went wrong
     *
     * @param string $filepath
     * @return array
     */
    private function getPayload(string $filepath): array
    {
    }

    /**
     * Returns if the cache has expired for this item or not
     *
     * @param array $payload
     *
     * @return bool
     */
    private function isExpired(array $payload): bool
    {
    }
}
