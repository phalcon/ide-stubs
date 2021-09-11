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
 * This class offers a wrapper for JSON methods to serialize and unserialize
 */
class Json
{

    /**
     * Decodes a string using `json_decode` and throws an exception if the
     * JSON data cannot be decoded
     *
     * ```php
     * use Phalcon\Helper\Json;
     *
     * $data = '{"one":"two","0":"three"}';
     *
     * var_dump(Json::decode($data));
     * // [
     * //     'one' => 'two',
     * //     'three'
     * // ];
     * ```
     *
     * @param string $data        JSON data to parse
     * @param bool   $associative When `true`, objects are converted to arrays
     * @param int    $depth       Recursion depth.
     * @param int    $options     Bitmask of JSON decode options.
     *
     * @return mixed
     *
     * @throws \InvalidArgumentException if the JSON cannot be decoded.
     * @link http://www.php.net/manual/en/function.json-decode.php
     */
    final public static function decode(string $data, bool $associative = false, int $depth = 512, int $options = 0)
    {
    }

    /**
     * Encodes a string using `json_encode` and throws an exception if the
     * JSON data cannot be encoded
     *
     * ```php
     * use Phalcon\Helper\Json;
     *
     * $data = [
     *     'one' => 'two',
     *     'three'
     * ];
     *
     * echo Json::encode($data);
     * // {"one":"two","0":"three"}
     * ```
     *
     * @param mixed  $data        JSON data to parse
     * @param int    $options     Bitmask of JSON decode options.
     * @param int    $depth       Recursion depth.
     *
     * @return mixed
     *
     * @throws \InvalidArgumentException if the JSON cannot be encoded.
     * @link http://www.php.net/manual/en/function.json-encode.php
     */
    final public static function encode($data, int $options = 0, int $depth = 512): string
    {
    }
}
