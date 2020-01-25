<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Helper;

/**
 * This class offers quick array functions throughout the framework
 */
class Arr
{

    /**
     * Chunks an array into smaller arrays of a specified size.
     *
     * @param array $collection
     * @param int   $size
     * @param bool  $preserveKeys
     *
     * @return array
     */
    final public static function chunk(array $collection, int $size, bool $preserveKeys = false): array
    {
    }

    /**
     * Helper method to filter the collection
     *
     * @param array    $collection
     * @param callable $method
     *
     * @return array
     */
    final public static function filter(array $collection, $method = null): array
    {
    }

    /**
     * Returns the first element of the collection. If a callable is passed, the
     * element returned is the first that validates true
     *
     * @param array    $collection
     * @param callable $method
     *
     * @return mixed
     */
    final public static function first(array $collection, $method = null)
    {
    }

    /**
     * Returns the key of the first element of the collection. If a callable
     * is passed, the element returned is the first that validates true
     *
     * @param array    $collection
     * @param callable $method
     *
     * @return mixed
     */
    final public static function firstKey(array $collection, $method = null)
    {
    }

    /**
     * Flattens an array up to the one level depth, unless `$deep` is set to `true`
     *
     * @param array $collection
     * @param bool  $deep
     *
     * @return array
     */
    final public static function flatten(array $collection, bool $deep = false): array
    {
    }

    /**
     * Helper method to get an array element or a default
     *
     * @param array $collection
     * @param mixed $index
     * @param mixed $defaultValue
     * @param string $cast
     * @return mixed
     */
    final public static function get(array $collection, $index, $defaultValue = null, string $cast = null)
    {
    }

    /**
     * Groups the elements of an array based on the passed callable
     *
     * @param array    $collection
     * @param callable $method
     *
     * @return array
     */
    final public static function group(array $collection, $method): array
    {
    }

    /**
     * Helper method to get an array element or a default
     *
     * @param array $collection
     * @param mixed $index
     *
     * return bool
     * @return bool
     */
    final public static function has(array $collection, $index): bool
    {
    }

    /**
     * Checks a flat list for duplicate values. Returns true if duplicate
     * values exist and false if values are all unique.
     *
     * @param array $collection
     *
     * @return bool
     */
    final public static function isUnique(array $collection): bool
    {
    }

    /**
     * Returns the last element of the collection. If a callable is passed, the
     * element returned is the first that validates true
     *
     * @param array    $collection
     * @param callable $method
     *
     * return mixed
     * @return mixed
     */
    final public static function last(array $collection, $method = null)
    {
    }

    /**
     * Returns the key of the last element of the collection. If a callable is
     * passed, the element returned is the first that validates true
     *
     * @param array    $collection
     * @param callable $method
     *
     * @return mixed
     */
    final public static function lastKey(array $collection, $method = null)
    {
    }

    /**
     * Sorts a collection of arrays or objects by key
     *
     * @param array  $collection
     * @param mixed  $attribute
     * @param string $order
     *
     * @return array
     */
    final public static function order(array $collection, $attribute, string $order = 'asc'): array
    {
    }

    /**
     * Retrieves all of the values for a given key:
     *
     * @param array  $collection
     * @param string $element
     *
     * @return array
     */
    final public static function pluck(array $collection, string $element): array
    {
    }

    /**
     * Helper method to set an array element
     *
     * @param array $collection
     * @param mixed $value
     * @param mixed $index
     *
     * @return array
     */
    final public static function set(array $collection, $value, $index = null): array
    {
    }

    /**
     * Returns a new array with n elements removed from the right.
     *
     * @param array $collection
     * @param int   $elements
     *
     * @return array
     */
    final public static function sliceLeft(array $collection, int $elements = 1): array
    {
    }

    /**
     * Returns a new array with the X elements from the right
     *
     * @param array $collection
     * @param int   $elements
     *
     * @return array
     */
    final public static function sliceRight(array $collection, int $elements = 1): array
    {
    }

    /**
     * Returns a new array with keys of the passed array as one element and
     * values as another
     *
     * @param array $collection
     *
     * @return array
     */
    final public static function split(array $collection): array
    {
    }

    /**
     * Returns the passed array as an object
     *
     * @param array $collection
     */
    final public static function toObject(array $collection)
    {
    }

    /**
     * Returns true if the provided function returns true for all elements of
     * the collection, false otherwise.
     *
     * @param array    $collection
     * @param callable $method
     *
     * @return bool
     */
    final public static function validateAll(array $collection, $method = null): bool
    {
    }

    /**
     * Returns true if the provided function returns true for at least one
     * element of the collection, false otherwise.
     *
     * @param array    $collection
     * @param callable $method
     *
     * @return bool
     */
    final public static function validateAny(array $collection, $method = null): bool
    {
    }

    /**
     * White list filter by key: obtain elements of an array filtering
     * by the keys obtained from the elements of a whitelist
     *
     * @param array $collection
     * @param array $whiteList
     *
     * @return array
     */
    final public static function whiteList(array $collection, array $whiteList): array
    {
    }
}
