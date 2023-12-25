<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
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
    public function get(string $name): bool|string;

    /**
     * Checks if a header exists
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
