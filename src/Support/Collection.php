<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support;

use ArrayAccess;
use ArrayIterator;
use Countable;
use InvalidArgumentException;
use IteratorAggregate;
use JsonSerializable;
use Phalcon\Support\Collection\CollectionInterface;
use Phalcon\Support\Collection\Exceptions\InvalidValueType;
use Phalcon\Support\Helper\Json\Encode;
use Traversable;

/**
 * `Phalcon\Support\Collection` is a supercharged object-oriented array. It implements:
 * - [ArrayAccess](https://www.php.net/manual/en/class.arrayaccess.php)
 * - [Countable](https://www.php.net/manual/en/class.countable.php)
 * - [IteratorAggregate](https://www.php.net/manual/en/class.iteratoraggregate.php)
 * - [JsonSerializable](https://www.php.net/manual/en/class.jsonserializable.php)
 *
 * It can be used in any part of the application that needs collection of data
 * Such implementations are for instance accessing globals `$_GET`, `$_POST`
 * etc.
 *
 * @phpstan-template T
 *
 * @property array       $data
 * @property bool        $insensitive
 * @property array       $lowerKeys
 * @property bool        $strictNull
 * @property string|null $type
 */
class Collection implements \Phalcon\Support\Collection\CollectionInterface, \Countable, \JsonSerializable
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var bool
     */
    protected $insensitive = true;

    /**
     * @var array
     */
    protected $lowerKeys = [];

    /**
     * @var bool
     */
    protected $strictNull = false;

    /**
     * @var string|null
     */
    protected $type = null;

    /**
     * Collection constructor.
     *
     * @phpstan-param array<int|string, mixed> $data
     * @param array $data
     * @param bool $insensitive
     * @param bool $strictNull
     * @param string|null $type
     */
    public function __construct(array $data = [], bool $insensitive = true, bool $strictNull = false, ?string $type = null)
    {
    }

    /**
     * Magic getter to get an element from the collection
     *
     * @param string $element
     *
     * @return mixed|null
     */
    public function __get(string $element): mixed
    {
    }

    /**
     * Magic isset to check whether an element exists or not
     *
     * @param string $element
     *
     * @return bool
     */
    public function __isset(string $element): bool
    {
    }

    /**
     * Returns the state of the collection for serialization, including
     * configuration flags so the round-trip restores full state.
     *
     * @return array
     */
    public function __serialize(): array
    {
    }

    /**
     * Magic setter to assign values to an element
     *
     * @param string $element
     * @param mixed  $value
     * @return void
     */
    public function __set(string $element, $value): void
    {
    }

    /**
     * Restores the collection state. Accepts both the structured format
     * emitted by __serialize() and the legacy flat-array format for BC
     * with previously serialized data.
     *
     * @param array $data
     *
     * @return void
     */
    public function __unserialize(array $data): void
    {
    }

    /**
     * Magic unset to remove an element from the collection
     *
     * @param string $element
     * @return void
     */
    public function __unset(string $element): void
    {
    }

    /**
     * Clears the internal collection
     *
     * @return void
     */
    public function clear(): void
    {
    }

    /**
     * Returns the values from a single property/method extracted from every
     * item in the collection, keyed by the original collection key.
     *
     * @param string $propertyOrMethod
     *
     * @return array<int|string, mixed>
     */
    public function column(string $propertyOrMethod): array
    {
    }

    /**
     * Count elements of an object
     *
     * @return int
     */
    public function count(): int
    {
    }

    /**
     * Invokes the callback for every item in the collection. Returns the
     * collection itself to allow chaining.
     *
     * @phpstan-param callable(T, array-key): mixed $callback
     *
     * @param callable $callback
     *
     * @return static
     */
    public function each($callback): static
    {
    }

    /**
     * Returns a new collection of items for which the callback returns true.
     * Keys are preserved.
     *
     * @phpstan-param  callable(T, array-key): bool $callback
     * @phpstan-return static<T>
     *
     * @param callable $callback
     *
     * @return static
     */
    public function filter($callback): static
    {
    }

    /**
     * Returns the first value in the collection, or null if empty.
     *
     * @phpstan-return T|null
     *
     * @return mixed
     */
    public function first(): mixed
    {
    }

    /**
     * Get the element from the collection
     *
     * @phpstan-return T|mixed
     *
     * @param string      $element
     * @param mixed|null  $defaultValue
     * @param string|null $cast
     *
     * @return mixed
     */
    public function get(string $element, $defaultValue = null, ?string $cast = null): mixed
    {
    }

    /**
     * Returns the iterator of the class
     *
     * @return Traversable
     */
    public function getIterator(): Traversable
    {
    }

    /**
     * Returns the keys (insensitive or not) of the collection.
     *
     * @deprecated Use {@see self::keys()} instead. Will be removed in a future major release.
     *
     * @param bool $insensitive Case-insensitive keys (default: true)
     *
     * @return array<int|string, mixed>
     */
    public function getKeys(bool $insensitive = true): array
    {
    }

    /**
     * Returns the configured runtime type guard, or null if none.
     *
     * @return string|null
     */
    public function getType(): string|null
    {
    }

    /**
     * Returns the values of the internal array.
     *
     * @deprecated Use {@see self::values()} instead. Will be removed in a future major release.
     *
     * @return array<int|string, mixed>
     */
    public function getValues(): array
    {
    }

    /**
     * Get the element from the collection
     *
     * @param string $element Name of the element
     *
     * @return bool
     */
    public function has(string $element): bool
    {
    }

    /**
     * Initialize internal array
     *
     * @phpstan-param array<int|string, mixed> $data
     * @param array $data
     * @return void
     */
    public function init(array $data = []): void
    {
    }

    /**
     * Return if the collection is empty
     *
     * @return bool
     */
    public function isEmpty(): bool
    {
    }

    /**
     * Specify data which should be serialized to JSON
     *
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return array<int|string, mixed>
     */
    public function jsonSerialize(): array
    {
    }

    /**
     * Returns the keys (insensitive or not) of the collection.
     *
     * @param bool $insensitive Case-insensitive keys (default: true)
     *
     * @return array<int|string, mixed>
     */
    public function keys(bool $insensitive = true): array
    {
    }

    /**
     * Returns the last value in the collection, or null if empty.
     *
     * @phpstan-return T|null
     *
     * @return mixed
     */
    public function last(): mixed
    {
    }

    /**
     * Returns a new collection with the callback applied to every value.
     * Keys are preserved.
     *
     * @phpstan-param  callable(T, array-key): mixed $callback
     * @phpstan-return static<mixed>
     *
     * @param callable $callback
     *
     * @return static
     */
    public function map($callback): static
    {
    }

    /**
     * Whether a offset exists
     *
     * @link https://php.net/manual/en/arrayaccess.offsetexists.php
     *
     * @param mixed $element
     *
     * @return bool
     */
    public function offsetExists($element): bool
    {
    }

    /**
     * Offset to retrieve
     *
     * @link https://php.net/manual/en/arrayaccess.offsetget.php
     *
     * @param mixed $element
     *
     * @return mixed
     */
    public function offsetGet($element): mixed
    {
    }

    /**
     * Offset to set
     *
     * @link https://php.net/manual/en/arrayaccess.offsetset.php
     *
     * @param mixed $element
     * @param mixed $value
     * @return void
     */
    public function offsetSet($element, $value): void
    {
    }

    /**
     * Offset to unset
     *
     * @link https://php.net/manual/en/arrayaccess.offsetunset.php
     *
     * @param mixed $element
     * @return void
     */
    public function offsetUnset($element): void
    {
    }

    /**
     * Reduces the collection to a single value using the callback. The
     * callback receives `($accumulator, $value, $key)`.
     *
     * @phpstan-param callable(mixed, T, array-key): mixed $callback
     *
     * @param callable $callback
     * @param mixed    $initial
     *
     * @return mixed
     */
    public function reduce($callback, $initial = null): mixed
    {
    }

    /**
     * Delete the element from the collection
     *
     * @param string $element Name of the element
     * @return void
     */
    public function remove(string $element): void
    {
    }

    /**
     * Replaces the collection data with a new array, clearing existing data first
     *
     * @phpstan-param array<int|string, mixed> $data
     * @param array $data
     * @return void
     */
    public function replace(array $data): void
    {
    }

    /**
     * BC - delegate to __serialize()
     *
     * @return string|null
     */
    public function serialize(): string|null
    {
    }

    /**
     * Set an element in the collection
     *
     * @param string $element Name of the element
     * @param mixed  $value   Value to store for the element
     * @return void
     */
    public function set(string $element, $value): void
    {
    }

    /**
     * Returns a new collection sorted by value. Keys are preserved. When a
     * callback is supplied, `uasort` is used. Without a callback, the
     * comparison direction is controlled by the `$order` argument
     * (`SORT_ASC` or `SORT_DESC`).
     *
     * @phpstan-return static<T>
     *
     * @param callable|null $callback
     * @param int           $order    `SORT_ASC` (4, default) or `SORT_DESC` (3)
     *
     * @return static
     *
     * @throws InvalidArgumentException When a non-callable callback is given.
     */
    public function sort($callback = null, int $order = 4): static
    {
    }

    /**
     * Returns the object in an array format
     *
     * @phpstan-return array<array-key, T>
     *
     * @return array<int|string, mixed>
     */
    public function toArray(): array
    {
    }

    /**
     * Returns the object in a JSON format
     *
     * The following options are used if none specified for json_encode
     *
     * JSON_HEX_TAG, JSON_HEX_APOS, JSON_HEX_AMP, JSON_HEX_QUOT,
     * JSON_UNESCAPED_SLASHES, JSON_THROW_ON_ERROR
     *
     * @see https://www.ietf.org/rfc/rfc4627.txt
     *
     * @param int $options `
     *
     * @return string
     */
    public function toJson(int $options = 4194383): string
    {
    }

    /**
     * BC - delegate to __unserialize()
     *
     * @param string $data
     *
     * @return void
     */
    public function unserialize(string $data): void
    {
    }

    /**
     * Returns the values of the internal array.
     *
     * @return array<int|string, mixed>
     */
    public function values(): array
    {
    }

    /**
     * Returns a new collection containing only the items whose
     * `propertyOrMethod` strictly equals `$value`.
     *
     * @phpstan-return static<T>
     *
     * @param string $propertyOrMethod
     * @param mixed  $value
     *
     * @return static
     */
    public function where(string $propertyOrMethod, $value): static
    {
    }

    /**
     * Builds a new collection of the same concrete class, carrying over the
     * configuration (insensitivity, strict-null, type) of the current one.
     *
     * @param array<int|string, mixed> $data
     *
     * @return static
     */
    protected function cloneEmpty(array $data = []): static
    {
    }

    /**
     * Extracts a single value from an item. For arrays returns the keyed
     * entry; for objects, prefers a callable method, then a readable
     * property. Returns null when nothing matches.
     *
     * @param mixed  $item
     * @param string $propertyOrMethod
     *
     * @return mixed
     */
    protected function extractValue($item, string $propertyOrMethod): mixed
    {
    }

    /**
     * Checks if we need insensitive keys and if so, converts the element to
     * lowercase
     *
     * @param string $element
     * @return string
     */
    protected function processKey(string $element): string
    {
    }

    /**
     * Internal method to set data
     *
     * @phpstan-param T $value
     *
     * @param string $element Name of the element
     * @param mixed  $value   Value to store for the element
     * @return void
     */
    protected function setData(string $element, $value): void
    {
    }

    /**
     * Validates the value against the configured `$type` guard. When `$type`
     * is null this is a no-op. Scalar tokens (`int`, `string`, `bool`,
     * `float`, `array`, `object`) map to their `is_` checks; anything else
     * is treated as a class/interface name and tested with `instanceof`.
     *
     * @param mixed $value
     *
     * @throws InvalidValueType
     * @return void
     */
    protected function validateType($value): void
    {
    }

    /**
     * @param mixed $value
     * @return mixed
     */
    private function checkSerializable($value): mixed
    {
    }
}
