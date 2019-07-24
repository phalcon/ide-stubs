<?php

namespace Phalcon\Helper;

/**
 * This class offers quick array functions throughout the framework
 */
class Arr
{

    /**
     * @param array $collection
     */
    final public static function arrayToObject(array $collection) {}

    /**
     * Chunks an array into smaller arrays of a specified size.
     *
     * @param bool  $preserveKeys
     *
     * @param array $collection
     * @param int $size
     * @param bool $preserveKeys
     * @return array
     */
    final public static function chunk(array $collection, int $size, bool $preserveKeys = false): array {}

    /**
     * Returns the first element of the collection. If a callable is passed, the
     * element returned is the first that validates true
     *
     * @param callable $method
     *
     * @param array $collection
     * @param mixed $method
     * @return mixed
     */
    final public static function first(array $collection, $method = null) {}

    /**
     * Returns the key of the first element of the collection. If a callable
     * is passed, the element returned is the first that validates true
     *
     * @param callable $method
     *
     * @param array $collection
     * @param mixed $method
     * @return mixed
     */
    final public static function firstKey(array $collection, $method = null) {}

    /**
     * Flattens an array up to the one level depth, unless `$deep` is set to `true`
     *
     * @param bool  $deep
     *
     * @param array $collection
     * @param bool $deep
     * @return array
     */
    final public static function flatten(array $collection, bool $deep = false): array {}

    /**
     * Helper method to get an array element or a default
     *
     * @param array $collection
     * @param mixed $index
     * @param mixed $defaultValue
     * @return mixed
     */
    final public static function get(array $collection, $index, $defaultValue = null) {}

    /**
     * Groups the elements of an array based on the passed callable
     *
     * @param callable $method
     *
     * @param array $collection
     * @param mixed $method
     * @return array
     */
    final public static function group(array $collection, $method): array {}

    /**
     * Helper method to get an array element or a default
     *
     * @param mixed $index
     *
     * return bool
     * @param array $collection
     * @param mixed $index
     * @return bool
     */
    final public static function has(array $collection, $index): bool {}

    /**
     * Checks a flat list for duplicate values. Returns true if duplicate
     * values exist and false if values are all unique.
     *
     * @param array $collection
     *
     * @param array $collection
     * @return bool
     */
    final public static function isUnique(array $collection): bool {}

    /**
     * Returns the last element of the collection. If a callable is passed, the
     * element returned is the first that validates true
     *
     * @param callable $method
     *
     * return mixed
     * @param array $collection
     * @param mixed $method
     * @return mixed
     */
    final public static function last(array $collection, $method = null) {}

    /**
     * Returns the key of the last element of the collection. If a callable is
     * passed, the element returned is the first that validates true
     *
     * @param callable $method
     *
     * @param array $collection
     * @param mixed $method
     * @return mixed
     */
    final public static function lastKey(array $collection, $method = null) {}

    /**
     * Sorts a collection of arrays or objects by key
     *
     * @param string $order
     *
     * @param array $collection
     * @param mixed $attribute
     * @param string $order
     * @param mixed $attr
     * @return array
     */
    final public static function order(array $collection, $attribute, string $order = 'asc'): array {}

    /**
     * Retrieves all of the values for a given key:
     *
     * @param string $element
     *
     * @param array $collection
     * @param string $element
     * @return array
     */
    final public static function pluck(array $collection, string $element): array {}

    /**
     * Helper method to set an array element
     *
     * @param mixed $index
     *
     * @param array $collection
     * @param mixed $value
     * @param mixed $index
     * @return array
     */
    final public static function set(array $collection, $value, $index = null): array {}

    /**
     * Returns a new array with n elements removed from the right.
     *
     * @param int   $elements
     *
     * @param array $collection
     * @param int $elements
     * @return array
     */
    final public static function sliceLeft(array $collection, int $elements = 1): array {}

    /**
     * Returns a new array with the X elements from the right
     *
     * @param int   $elements
     *
     * @param array $collection
     * @param int $elements
     * @return array
     */
    final public static function sliceRight(array $collection, int $elements = 1): array {}

    /**
     * Returns a new array with keys of the passed array as one element and
     * values as another
     *
     * @param array $collection
     *
     * @param array $collection
     * @return array
     */
    final public static function split(array $collection): array {}

    /**
     * Returns true if the provided function returns true for all elements of
     * the collection, false otherwise.
     *
     * @param callable $method
     *
     * @param array $collection
     * @param mixed $method
     * @return bool
     */
    final public static function validateAll(array $collection, $method): bool {}

    /**
     * Returns true if the provided function returns true for at least one
     * element fo the collection, false otherwise.
     *
     * @param callable $method
     *
     * @param array $collection
     * @param mixed $method
     * @return bool
     */
    final public static function validateAny(array $collection, $method): bool {}

    /**
     * Helper method to filter the collection
     *
     * @param callable $method
     *
     * @param array $collection
     * @param mixed $method
     * @return array
     */
    final private static function filterCollection(array $collection, $method = null): array {}

    /**
     * White list filter by key: obtain elements of an array filtering
     * by the keys obtained from the elements of a whitelist
     *
     * @param array $whiteList
     *
     * @param array $collection
     * @param array $whiteList
     * @return array
     */
    final public static function whiteList(array $collection, array $whiteList): array {}

}
