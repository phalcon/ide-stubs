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
use Phalcon\Contracts\Http\HttpTypes;
use Phalcon\Http\Request\Exceptions\NullKeyException;
use Traversable;

/**
 * Shared base for the HTTP request bags. A bag is a string- or integer-keyed
 * value store backed by a raw array, exposing `get/has/set/remove/all` plus
 * typed readers for cast-with-default access.
 *
 * Two protected hooks (`normalizeKey`, `normalizeItems`) let subclasses
 * change key handling without restating the surface.
 *
 * The ArrayAccess append form (`$bag[] = $value`) is rejected with a
 * NullKeyException: the append form supplies no explicit key, so the write
 * could never be addressed by the caller.
 *
 * @phpstan-import-type http_bag_items from HttpTypes
 *
 * @implements ArrayAccess<int|string, mixed>
 * @implements IteratorAggregate<int|string, mixed>
 */
abstract class AbstractBag implements \ArrayAccess, \Countable, \IteratorAggregate
{
    /**
     * @phpstan-var http_bag_items
     */
    protected array $items = [];

    /**
     * AbstractBag constructor.
     *
     * @phpstan-param http_bag_items $items
     * @param array $items
     */
    public function __construct(array $items = [])
    {
    }

    /**
     * Returns all the elements of the bag
     *
     * @phpstan-return http_bag_items
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
     * @param int|string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    public function get($key, $defaultValue = null): mixed
    {
    }

    /**
     * Returns an element of the bag as an array. The default value is
     * returned if the element is not set or is not an array
     *
     * @param int|string $key
     *
     * @phpstan-param  http_bag_items $defaultValue
     * @phpstan-return http_bag_items
     * @param array $defaultValue
     * @return array
     */
    public function getArray($key, array $defaultValue = []): array
    {
    }

    /**
     * Returns an element of the bag cast to bool, or the default value if
     * it is not set
     *
     * @param int|string $key
     * @param bool $defaultValue
     * @return bool
     */
    public function getBool($key, bool $defaultValue = false): bool
    {
    }

    /**
     * Returns an element of the bag cast to float, or the default value if
     * it is not set
     *
     * @param int|string $key
     * @param double $defaultValue
     * @return float
     */
    public function getFloat($key, float $defaultValue = 0.0): float
    {
    }

    /**
     * Returns an element of the bag cast to int, or the default value if
     * it is not set
     *
     * @param int|string $key
     * @param int $defaultValue
     * @return int
     */
    public function getInt($key, int $defaultValue = 0): int
    {
    }

    /**
     * Returns the iterator of the bag
     *
     * @return Traversable<int|string, mixed>
     */
    public function getIterator(): Traversable
    {
    }

    /**
     * Returns an element of the bag cast to string, or the default value if
     * it is not set
     *
     * @param int|string $key
     * @param string $defaultValue
     * @return string
     */
    public function getString($key, string $defaultValue = ''): string
    {
    }

    /**
     * Checks whether an element exists in the bag
     *
     * @param int|string $key
     * @return bool
     */
    public function has($key): bool
    {
    }

    /**
     * Whether an offset exists
     *
     * @param mixed $offset
     * @return bool
     */
    public function offsetExists($offset): bool
    {
    }

    /**
     * Offset to retrieve
     *
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset): mixed
    {
    }

    /**
     * Offset to set
     *
     * @throws NullKeyException When the offset is null (append form)
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
    }

    /**
     * Offset to unset
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
     * @param int|string $key
     * @return void
     */
    public function remove($key): void
    {
    }

    /**
     * Sets an element in the bag
     *
     * @param int|string $key
     * @param mixed $value
     * @return void
     */
    public function set($key, $value): void
    {
    }

    /**
     * Normalizes the items at construction time. Identity in the base;
     * subclasses can override it to normalize keys
     *
     * @phpstan-param  http_bag_items $items
     * @phpstan-return http_bag_items
     * @param array $items
     * @return array
     */
    protected function normalizeItems(array $items): array
    {
    }

    /**
     * Normalizes a key for lookups and writes. Identity in the base;
     * subclasses can override it to change key handling
     *
     * @param mixed $key
     * @return string
     */
    protected function normalizeKey($key): string
    {
    }
}
