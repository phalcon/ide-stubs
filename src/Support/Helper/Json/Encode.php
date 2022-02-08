<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support\Helper\Json;

use JsonException;

/**
 * Encodes a string using `json_encode` and throws an exception if the
 * JSON data cannot be encoded
 *
 * The following options are used if none specified for json_encode
 *
 * JSON_HEX_TAG, JSON_HEX_APOS, JSON_HEX_AMP, JSON_HEX_QUOT,
 * JSON_UNESCAPED_SLASHES, JSON_THROW_ON_ERROR
 *
 * @see  https://www.ietf.org/rfc/rfc4627.txt
 */
class Encode
{
    /**
     * @param mixed $data    JSON data to parse
     * @param int   $options Bitmask of JSON decode options.
     * @param int   $depth   Recursion depth.
     *
     * @return string
     *
     * @throws JsonException if the JSON cannot be encoded.
     * @link http://www.php.net/manual/en/function.json-encode.php
     */
    public function __invoke($data, int $options = 4194383, int $depth = 512): string
    {
    }
}
