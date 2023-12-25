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
use IteratorAggregate;
use InvalidArgumentException;
use JsonSerializable;
use Phalcon\Support\Collection\CollectionInterface;
use Serializable;
use Traversable;

/**
 * `Phalcon\Support\Collection` is a supercharged object oriented array. It implements:
 * - [ArrayAccess](https://www.php.net/manual/en/class.arrayaccess.php)
 * - [Countable](https://www.php.net/manual/en/class.countable.php)
 * - [IteratorAggregate](https://www.php.net/manual/en/class.iteratoraggregate.php)
 * - [JsonSerializable](https://www.php.net/manual/en/class.jsonserializable.php)
 * - [Serializable](https://www.php.net/manual/en/class.serializable.php)
 *
 * It can be used in any part of the application that needs collection of data
 * Such implementations are for instance accessing globals `$_GET`, `$_POST`
 * etc.
 *
 * @property array $data
 * @property bool  $insensitive
 * @property array $lowerKeys
 */
class Collection implements \ArrayAccess, \Phalcon\Support\Collection\CollectionInterface, \Countable, \IteratorAggregate, \JsonSerializable, \Serializable
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
     * Collection constructor.
     *
     * @param array $data
     * @param bool $insensitive
     */
    public function __construct(array $data = [], bool $insensitive = true)
    {
    }

    /**
     * Magic getter to get an element from the collection
     *
     * @param string $element
     * @return mixed
     */
    public function __get(string $element): mixed
    {
    }

    /**
     * Magic isset to check whether an element exists or not
     *
     * @param string $element
     * @return bool
     */
    public function __isset(string $element): bool
    {
    }

    /**
     * Magic setter to assign values to an element
     *
     * @param string $element
     * @param mixed $value
     * @return void
     */
    public function __set(string $element, $value): void
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
     * Count elements of an object.
     * See [count](https://php.net/manual/en/countable.count.php)
     *
     * @return int
     */
    public function count(): int
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
    public function get(string $element, $defaultValue = null, string $cast = null): mixed
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
     * Return the keys as an array
     *
     * @param bool $insensitive
     * @return array
     */
    public function getKeys(bool $insensitive = true): array
    {
    }

    /**
     * Return the values as an array
     *
     * @return array
     */
    public function getValues(): array
    {
    }

    /**
     * Determines whether an element is present in the collection.
     *
     * @param string $element
     * @return bool
     */
    public function has(string $element): bool
    {
    }

    /**
     * Initialize internal array
     *
     * @param array $data
     * @return void
     */
    public function init(array $data = []): void
    {
    }

    /**
     * Specify data which should be serialized to JSON
     * See [jsonSerialize](https://php.net/manual/en/jsonserializable.jsonserialize.php)
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
    }

    /**
     * Whether a offset exists
     * See [offsetExists](https://php.net/manual/en/arrayaccess.offsetexists.php)
     *
     * @param mixed $element
     * @return bool
     */
    public function offsetExists($element): bool
    {
    }

    /**
     * Offset to retrieve
     * See [offsetGet](https://php.net/manual/en/arrayaccess.offsetget.php)
     *
     * @param mixed $element
     * @return mixed
     */
    public function offsetGet($element): mixed
    {
    }

    /**
     * Offset to set
     * See [offsetSet](https://php.net/manual/en/arrayaccess.offsetset.php)
     *
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
    }

    /**
     * Offset to unset
     * See [offsetUnset](https://php.net/manual/en/arrayaccess.offsetunset.php)
     *
     * @param mixed $element
     * @return void
     */
    public function offsetUnset($element): void
    {
    }

    /**
     * Delete the element from the collection
     *
     * @param string $element
     * @return void
     */
    public function remove(string $element): void
    {
    }

    /**
     * Set an element in the collection
     *
     * @param string $element
     * @param mixed $value
     * @return void
     */
    public function set(string $element, $value): void
    {
    }

    /**
     * String representation of object
     * See [serialize](https://php.net/manual/en/serializable.serialize.php)
     *
     * @return string
     */
    public function serialize(): string
    {
    }

    /**
     * Returns the object in an array format
     *
     * @return array
     */
    public function toArray(): array
    {
    }

    /**
     * Returns the object in a JSON format
     *
     * The default string uses the following options for json_encode
     *
     * `JSON_HEX_TAG`, `JSON_HEX_APOS`, `JSON_HEX_AMP`, `JSON_HEX_QUOT`,
     * `JSON_UNESCAPED_SLASHES`
     *
     * See [rfc4627](https://www.ietf.org/rfc/rfc4627.txt)
     *
     * @param int $options
     * @return string
     */
    public function toJson(int $options = 4194383): string
    {
    }

    /**
     * Constructs the object
     * See [unserialize](https://php.net/manual/en/serializable.unserialize.php)
     *
     * @param string $serialized
     * @return void
     */
    public function unserialize(string $serialized): void
    {
    }

    /**
     * @return array
     */
    public function __serialize(): array
    {
    }

    /**
     * @param array $data
     * @return void
     */
    public function __unserialize(array $data): void
    {
    }

    /**
     * Internal method to set data
     *
     * @param string $element
     * @param mixed $value
     * @return void
     */
    protected function setData(string $element, $value): void
    {
    }

    /**
     * @todo to be removed when we get traits
     * @param mixed $value
     * @param int $flags
     * @param int $depth
     */
    protected function phpJsonEncode($value, int $flags = 0, int $depth = 512)
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
}
