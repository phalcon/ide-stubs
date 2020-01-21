<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Adapter;

/**
 * Interface for Phalcon\Logger adapters
 */
interface AdapterInterface
{

    /**
     * Flushes/clears the cache
     *
     * @return bool
     */
    public function clear(): bool;

    /**
     * Decrements a stored number
     *
     * @param string $key
     * @param int $value
     * @return int|bool
     */
    public function decrement(string $key, int $value = 1);

    /**
     * Deletes data from the adapter
     *
     * @param string $key
     * @return bool
     */
    public function delete(string $key): bool;

    /**
     * Reads data from the adapter
     *
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    public function get(string $key, $defaultValue = null);

    /**
     * Returns the already connected adapter or connects to the backend
     * server(s)
     *
     * @return mixed
     */
    public function getAdapter();

    /**
     * Returns all the keys stored
     *
     * @param string $prefix
     * @return array
     */
    public function getKeys(string $prefix = ''): array;

    /**
     * Returns the prefix for the keys
     *
     * @return string
     */
    public function getPrefix(): string;

    /**
     * Checks if an element exists in the cache
     *
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool;

    /**
     * Increments a stored number
     *
     * @param string $key
     * @param int $value
     * @return int|bool
     */
    public function increment(string $key, int $value = 1);

    /**
     * Stores data in the adapter
     *
     * @param string $key
     * @param mixed $value
     * @param mixed $ttl
     * @return bool
     */
    public function set(string $key, $value, $ttl = null): bool;
}
