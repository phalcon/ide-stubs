<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon;

use Traversable;

/**
 * `Phalcon\Collection` is a supercharged object oriented array. It implements:
 * - [ArrayAccess](https://www.php.net/manual/en/class.arrayaccess.php)
 * - [Countable](https://www.php.net/manual/en/class.countable.php)
 * - [IteratorAggregate](https://www.php.net/manual/en/class.iteratoraggregate.php)
 * - [JsonSerializable](https://www.php.net/manual/en/class.jsonserializable.php)
 * - [Serializable](https://www.php.net/manual/en/class.serializable.php)
 *
 * It can be used in any part of the application that needs collection of data
 * Such implementations are for instance accessing globals `$_GET`, `$_POST`
 * etc.
 */
class Collection implements \ArrayAccess, \Phalcon\Collection\CollectionInterface, \Countable, \IteratorAggregate, \JsonSerializable, \Serializable
{
    /**
     * @var array
     */
    protected $data = array();

    /**
     * @var bool
     */
    protected $insensitive = true;

    /**
     * @var array
     */
    protected $lowerKeys = array();


    /**
     * Collection constructor.
     *
     * @param array $data
     * @param bool $insensitive
     */
    public function __construct(array $data = array(), bool $insensitive = true)
    {
    }

    /**
     * Magic getter to get an element from the collection
     *
     * @param string $element
     * @return mixed
     */
    public function __get(string $element)
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
    public function __set(string $element, $value)
    {
    }

    /**
     * Magic unset to remove an element from the collection
     *
     * @param string $element
     * @return void
     */
    public function __unset(string $element)
    {
    }

    /**
     * Clears the internal collection
     *
     * @return void
     */
    public function clear()
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
    public function get(string $element, $defaultValue = null, string $cast = null)
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
     * @param bool $insensitive
     * @return array
     */
    public function getKeys(bool $insensitive = true): array
    {
    }

    /**
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
    public function init(array $data = array())
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
     */
    public function offsetGet($element)
    {
    }

    /**
     * Offset to set
     * See [offsetSet](https://php.net/manual/en/arrayaccess.offsetset.php)
     *
     * @param mixed $element
     * @param mixed $value
     * @return void
     */
    public function offsetSet($element, $value)
    {
    }

    /**
     * Offset to unset
     * See [offsetUnset](https://php.net/manual/en/arrayaccess.offsetunset.php)
     *
     * @param mixed $element
     * @return void
     */
    public function offsetUnset($element)
    {
    }

    /**
     * Delete the element from the collection
     *
     * @param string $element
     * @return void
     */
    public function remove(string $element)
    {
    }

    /**
     * Set an element in the collection
     *
     * @param string $element
     * @param mixed $value
     * @return void
     */
    public function set(string $element, $value)
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
    public function toJson(int $options = 79): string
    {
    }

    /**
     * Constructs the object
     * See [unserialize](https://php.net/manual/en/serializable.unserialize.php)
     *
     * @param mixed $serialized
     * @return void
     */
    public function unserialize($serialized)
    {
    }

    /**
     * Internal method to set data
     *
     * @param string $element
     * @param mixed $value
     * @return void
     */
    protected function setData(string $element, $value)
    {
    }
}
