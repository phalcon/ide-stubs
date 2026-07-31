<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http\Request\Bag;

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Phalcon\Http\Request\Exceptions\NullKeyException;
use Traversable;

/**
 * Shared base for the HTTP request bags. A bag is a string-keyed value store
 * backed by a raw array, exposing `get/has/set/remove/all` plus typed readers
 * for cast-with-default access.
 *
 * Two protected hooks (`normalizeKey`, `normalizeItems`) let subclasses
 * change key handling without restating the surface.
 *
 * The ArrayAccess append form (`$bag[] = $value`) is rejected with a
 * NullKeyException: bags are always string-keyed, so an auto-indexed write
 * could never be addressed by the caller.
 */
abstract class AbstractBag implements \ArrayAccess, \Countable, \IteratorAggregate
{
    /**
     * @var array
     */
    protected $items = [];

    /**
     * AbstractBag constructor.
     *
     * @param array $items
     */
    public function __construct(array $items = [])
    {
    }

    /**
     * Returns all the elements of the bag
     *
     * @return array
     */
    public function all(): array
    {
    }

    /**
     * Returns the number of elements in the bag
     *
     * @return int
     */
    public function count(): int
    {
    }

    /**
     * Returns an element of the bag, or the default value if it is not set
     *
     * @param string $key
     * @param mixed  $defaultValue
     *
     * @return mixed
     */
    public function get(string $key, $defaultValue = null): mixed
    {
    }

    /**
     * Returns an element of the bag as an array. The default value is
     * returned if the element is not set or is not an array
     *
     * @param string $key
     * @param array  $defaultValue
     *
     * @return array
     */
    public function getArray(string $key, array $defaultValue = []): array
    {
    }

    /**
     * Returns an element of the bag cast to bool, or the default value if
     * it is not set
     *
     * @param string $key
     * @param bool   $defaultValue
     *
     * @return bool
     */
    public function getBool(string $key, bool $defaultValue = false): bool
    {
    }

    /**
     * Returns an element of the bag cast to float, or the default value if
     * it is not set
     *
     * @param string $key
     * @param float  $defaultValue
     *
     * @return float
     */
    public function getFloat(string $key, float $defaultValue = 0.0): float
    {
    }

    /**
     * Returns an element of the bag cast to int, or the default value if
     * it is not set
     *
     * @param string $key
     * @param int    $defaultValue
     *
     * @return int
     */
    public function getInt(string $key, int $defaultValue = 0): int
    {
    }

    /**
     * Returns the iterator of the bag
     *
     * @return Traversable
     */
    public function getIterator(): Traversable
    {
    }

    /**
     * Returns an element of the bag cast to string, or the default value if
     * it is not set
     *
     * @param string $key
     * @param string $defaultValue
     *
     * @return string
     */
    public function getString(string $key, string $defaultValue = ''): string
    {
    }

    /**
     * Checks whether an element exists in the bag
     *
     * @param string $key
     *
     * @return bool
     */
    public function has(string $key): bool
    {
    }

    /**
     * Whether an offset exists
     *
     * @link https://php.net/manual/en/arrayaccess.offsetexists.php
     *
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset): bool
    {
    }

    /**
     * Offset to retrieve
     *
     * @link https://php.net/manual/en/arrayaccess.offsetget.php
     *
     * @param mixed $offset
     *
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
    }

    /**
     * Offset to set
     *
     * @link https://php.net/manual/en/arrayaccess.offsetset.php
     *
     * @param mixed $offset
     * @param mixed $value
     *
     * @throws NullKeyException When the offset is null (append form)
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
    }

    /**
     * Offset to unset
     *
     * @link https://php.net/manual/en/arrayaccess.offsetunset.php
     *
     * @param mixed $offset
     * @return void
     */
    public function offsetUnset($offset): void
    {
    }

    /**
     * Removes an element from the bag
     *
     * @param string $key
     * @return void
     */
    public function remove(string $key): void
    {
    }

    /**
     * Sets an element in the bag
     *
     * @param string $key
     * @param mixed  $value
     * @return void
     */
    public function set(string $key, $value): void
    {
    }

    /**
     * Normalizes the items at construction time. Identity in the base;
     * subclasses can override it to normalize keys
     *
     * @param array $items
     *
     * @return array
     */
    protected function normalizeItems(array $items): array
    {
    }

    /**
     * Normalizes a key for lookups and writes. Identity in the base;
     * subclasses can override it to change key handling
     *
     * @param string $key
     *
     * @return string
     */
    protected function normalizeKey(string $key): string
    {
    }
}
