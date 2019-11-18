<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http\Message\Stream;

use Phalcon\Http\Message\Stream;

/**
 * Describes a data stream from "php://input"
 *
 * Typically, an instance will wrap a PHP stream; this interface provides
 * a wrapper around the most common operations, including serialization of
 * the entire stream to a string.
 */
class Input extends Stream
{
    /**
     * @var string
     */
    private $data = '';

    /**
     * @var bool
     */
    private $eof = false;


    /**
     * Input constructor.
     */
    public function __construct()
    {
    }

    /**
     * Reads all data from the stream into a string, from the beginning to end.
     *
     * This method MUST attempt to seek to the beginning of the stream before
     * reading data and read the stream until the end is reached.
     *
     * Warning: This could attempt to load a large amount of data into memory.
     *
     * This method MUST NOT raise an exception in order to conform with PHP's
     * string casting operations.
     *
     * @see http://php.net/manual/en/language.oop5.magic.php#object.tostring
     * @return string
     */
    public function __toString(): string
    {
    }

    /**
     * Returns the remaining contents in a string
     *
     * @throws RuntimeException if unable to read.
     * @throws RuntimeException if error occurs while reading.
     *
     * @param int $length
     *
     * @return string
     */
    public function getContents(int $length = -1): string
    {
    }

    /**
     * Returns whether or not the stream is writeable.
     *
     * @return bool
     */
    public function isWritable(): bool
    {
    }

    /**
     * Read data from the stream.
     *
     * @param int $length
     *
     * @return string
     */
    public function read($length): string
    {
    }
}
