<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support;

use Phalcon\Support\Collection;
use Traversable;

/**
 * Phalcon\Registry
 *
 * A registry is a container for storing objects and values in the application
 * space. By storing the value in a registry, the same object is always
 * available throughout your application.
 *
 * ```php
 * $registry = new \Phalcon\Registry();
 *
 * // Set value
 * $registry->something = "something";
 * // or
 * $registry["something"] = "something";
 *
 * // Get value
 * $value = $registry->something;
 * // or
 * $value = $registry["something"];
 *
 * // Check if the key exists
 * $exists = isset($registry->something);
 * // or
 * $exists = isset($registry["something"]);
 *
 * // Unset
 * unset($registry->something);
 * // or
 * unset($registry["something"]);
 * ```
 *
 * In addition to ArrayAccess, Phalcon\Registry also implements Countable
 * (count($registry) will return the number of elements in the registry),
 * Serializable and Iterator (you can iterate over the registry using a foreach
 * loop) interfaces. For PHP 5.4 and higher, JsonSerializable interface is
 * implemented.
 *
 * Phalcon\Registry is very fast (it is typically faster than any userspace
 * implementation of the registry); however, this comes at a price:
 * Phalcon\Registry is a final class and cannot be inherited from.
 *
 * Though Phalcon\Registry exposes methods like __get(), offsetGet(), count() etc,
 * it is not recommended to invoke them manually (these methods exist mainly to
 * match the interfaces the registry implements): $registry->__get("property")
 * is several times slower than $registry->property.
 *
 * Internally all the magic methods (and interfaces except JsonSerializable)
 * are implemented using object handlers or similar techniques: this allows to
 * bypass relatively slow method calls.
 */
final class Registry extends Collection
{
    /**
     * Constructor
     *
     * @param array $data
     */
    final public function __construct(array $data = [])
    {
    }

    /**
     * Magic getter to get an element from the collection
     *
     * @param string $element
     * @return mixed
     */
    final public function __get(string $element): mixed
    {
    }

    /**
     * Magic isset to check whether an element exists or not
     *
     * @param string $element
     * @return bool
     */
    final public function __isset(string $element): bool
    {
    }

    /**
     * Magic setter to assign values to an element
     *
     * @param string $element
     * @param mixed $value
     * @return void
     */
    final public function __set(string $element, $value): void
    {
    }

    /**
     * Magic unset to remove an element from the collection
     *
     * @param string $element
     * @return void
     */
    final public function __unset(string $element): void
    {
    }

    /**
     * Clears the internal collection
     *
     * @return void
     */
    final public function clear(): void
    {
    }

    /**
     * Count elements of an object
     *
     * @link https://php.net/manual/en/countable.count.php
     * @return int
     */
    final public function count(): int
    {
    }

    /**
     * Get the element from the collection
     *
     * @param string $element
     * @param mixed $defaultValue
     * @param string $cast
     * @return mixed
     */
    final public function get(string $element, $defaultValue = null, string $cast = null): mixed
    {
    }

    /**
     * Returns the iterator of the class
     *
     * @return Traversable
     */
    final public function getIterator(): Traversable
    {
    }

    /**
     * Determines whether an element is present in the collection.
     *
     * @param string $element
     * @return bool
     */
    final public function has(string $element): bool
    {
    }

    /**
     * Initialize internal array
     *
     * @param array $data
     * @return void
     */
    final public function init(array $data = []): void
    {
    }

    /**
     * Specify data which should be serialized to JSON
     *
     * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return array
     */
    final public function jsonSerialize(): array
    {
    }

    /**
     * Whether a offset exists
     *
     * @link https://php.net/manual/en/arrayaccess.offsetexists.php
     * @param mixed $element
     * @return bool
     */
    final public function offsetExists($element): bool
    {
    }

    /**
     * Offset to retrieve
     *
     * @link https://php.net/manual/en/arrayaccess.offsetget.php
     * @param mixed $element
     * @return mixed
     */
    final public function offsetGet($element): mixed
    {
    }

    /**
     * Offset to set
     *
     * @link https://php.net/manual/en/arrayaccess.offsetset.php
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    final public function offsetSet($offset, $value): void
    {
    }

    /**
     * Offset to unset
     *
     * @link https://php.net/manual/en/arrayaccess.offsetunset.php
     * @param mixed $element
     * @return void
     */
    final public function offsetUnset($element): void
    {
    }

    /**
     * Delete the element from the collection
     *
     * @param string $element
     * @return void
     */
    final public function remove(string $element): void
    {
    }

    /**
     * String representation of object
     *
     * @link https://php.net/manual/en/serializable.serialize.php
     * @return string
     */
    final public function serialize(): string
    {
    }

    /**
     * Set an element in the collection
     *
     * @param string $element
     * @param mixed $value
     * @return void
     */
    final public function set(string $element, $value): void
    {
    }

    /**
     * Returns the object in an array format
     *
     * @return array
     */
    final public function toArray(): array
    {
    }

    /**
     * Returns the object in a JSON format
     *
     * The default string uses the following options for json_encode
     *
     * JSON_HEX_TAG, JSON_HEX_APOS, JSON_HEX_AMP, JSON_HEX_QUOT, JSON_UNESCAPED_SLASHES
     *
     * @see https://www.ietf.org/rfc/rfc4627.txt
     * @param int $options
     * @return string
     */
    final public function toJson(int $options = 79): string
    {
    }

    /**
     * Constructs the object
     *
     * @link https://php.net/manual/en/serializable.unserialize.php
     * @param mixed $serialized
     * @return void
     */
    final public function unserialize($serialized): void
    {
    }
}
