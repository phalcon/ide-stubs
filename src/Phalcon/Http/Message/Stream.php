<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http\Message;

use Psr\Http\Message\StreamInterface;

/**
 * PSR-7 Stream
 */
class Stream implements \Psr\Http\Message\StreamInterface
{
    /**
     * @var resource | null
     */
    protected $handle = null;

    /**
     * @var resource | string
     */
    protected $stream;


    /**
     * Stream constructor.
     *
     * @param mixed  $stream
     * @param string $mode
     */
    public function __construct($stream, string $mode = 'rb')
    {
    }

    /**
     * Closes the stream when the destructed.
     */
    public function __destruct()
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
     * Closes the stream and any underlying resources.
     *
     * @return void
     */
    public function close()
    {
    }

    /**
     * Separates any underlying resources from the stream.
     *
     * After the stream has been detached, the stream is in an unusable state.
     *
     * @return resource | null
     */
    public function detach()
    {
    }

    /**
     * Returns true if the stream is at the end of the stream.
     *
     * @return bool
     */
    public function eof(): bool
    {
    }

    /**
     * Returns the remaining contents in a string
     *
     * @return string
     */
    public function getContents(): string
    {
    }

    /**
     * Get stream metadata as an associative array or retrieve a specific key.
     *
     * The keys returned are identical to the keys returned from PHP's
     * stream_get_meta_data() function.
     *
     * @param mixed|null $key
     *
     * @return array|mixed|null
     */
    public function getMetadata($key = null)
    {
    }

    /**
     * Get the size of the stream if known.
     *
     * @return null|int
     */
    public function getSize(): ?int
    {
    }

    /**
     * Returns whether or not the stream is readable.
     *
     * @return bool
     */
    public function isReadable(): bool
    {
    }

    /**
     * Returns whether or not the stream is seekable.
     *
     * @return bool
     */
    public function isSeekable(): bool
    {
    }

    /**
     * Returns whether or not the stream is writable.
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

    /**
     * Seek to the beginning of the stream.
     *
     * If the stream is not seekable, this method will raise an exception;
     * otherwise, it will perform a seek(0).
     *
     * @return void
     */
    public function rewind()
    {
    }

    /**
     * Seek to a position in the stream.
     *
     * @param int $offset
     * @param int $whence
     * @return void
     */
    public function seek($offset, $whence = 0)
    {
    }

    /**
     * Sets the stream - existing instance
     *
     * @param mixed  $stream
     * @param string $mode
     * @return void
     */
    public function setStream($stream, string $mode = 'rb')
    {
    }

    /**
     * Returns the current position of the file read/write pointer
     *
     * @return int
     */
    public function tell(): int
    {
    }

    /**
     * Write data to the stream.
     *
     * @param string $data
     *
     * @return int
     */
    public function write($data): int
    {
    }

    /**
     * Checks if a handle is available and throws an exception otherwise
     *
     * @return void
     */
    private function checkHandle()
    {
    }

    /**
     * Checks if a handle is readable and throws an exception otherwise
     *
     * @return void
     */
    private function checkReadable()
    {
    }

    /**
     * Checks if a handle is seekable and throws an exception otherwise
     *
     * @return void
     */
    private function checkSeekable()
    {
    }

    /**
     * Checks if a handle is writeable and throws an exception otherwise
     *
     * @return void
     */
    private function checkWritable()
    {
    }
}
