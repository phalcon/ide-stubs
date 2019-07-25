<?php

namespace Phalcon\Http\Response;

/**
 * Phalcon\Http\Response\HeadersInterface
 *
 * Interface for Phalcon\Http\Response\Headers compatible bags
 */
interface HeadersInterface
{

    /**
     * Gets a header value from the internal bag
     *
     * @param string $name
     * @return string|bool
     */
    public function get(string $name);

    /**
     * Returns true if the header is set, false otherwise
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool;

    /**
     * Reset set headers
     */
    public function reset();

    /**
     * Sends the headers to the client
     *
     * @return bool
     */
    public function send(): bool;

    /**
     * Sets a header to be sent at the end of the request
     *
     * @param string $name
     * @param string $value
     */
    public function set(string $name, string $value);

    /**
     * Sets a raw header to be sent at the end of the request
     *
     * @param string $header
     */
    public function setRaw(string $header);

}
