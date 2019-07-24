<?php

namespace Phalcon\Http\Message;

/**
 * PSR-17 StreamFactory
 */
final class StreamFactory implements \Psr\Http\Message\StreamFactoryInterface
{

    /**
     * Create a new stream from a string.
     *
     * The stream SHOULD be created with a temporary resource.
     *
     * @param string $content String content with which to populate the stream.
     *
     * @param string $content
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createStream(string $content = ''): StreamInterface {}

    /**
     * Create a stream from an existing file.
     *
     * The file MUST be opened using the given mode, which may be any mode
     * supported by the `fopen` function.
     *
     * The `$filename` MAY be any string supported by `fopen()`.
     *
     * @param string $filename The filename or stream URI to use as basis of
     *                         stream.
     * @param string $mode     The mode with which to open the underlying
     *                         filename/stream.
     *
     * @param string $filename
     * @param string $mode
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createStreamFromFile(string $filename, string $mode = 'r+b'): StreamInterface {}

    /**
     * Create a new stream from an existing resource.
     *
     * The stream MUST be readable and may be writable.
     *
     * @param mixed $phpResource
     * @return \Psr\Http\Message\StreamInterface
     */
    public function createStreamFromResource($phpResource): StreamInterface {}

}
