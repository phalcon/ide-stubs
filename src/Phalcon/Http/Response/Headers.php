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
 * Phalcon\Http\Response\Headers
 *
 * This class is a bag to manage the response headers
 */
class Headers implements \Phalcon\Http\Response\HeadersInterface
{

    protected $headers = array();


    /**
     * Gets a header value from the internal bag
     *
     * @param string $name
     * @return string|bool
     */
    public function get(string $name)
    {
    }

    /**
     * Checks if a header exists
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Removes a header to be sent at the end of the request
     *
     * @param string $header
     * @return HeadersInterface
     */
    public function remove(string $header): HeadersInterface
    {
    }

    /**
     * Reset set headers
     */
    public function reset()
    {
    }

    /**
     * Sends the headers to the client
     *
     * @return bool
     */
    public function send(): bool
    {
    }

    /**
     * Sets a header to be sent at the end of the request
     *
     * @param string $name
     * @param string $value
     * @return HeadersInterface
     */
    public function set(string $name, string $value): HeadersInterface
    {
    }

    /**
     * Sets a raw header to be sent at the end of the request
     *
     * @param string $header
     * @return HeadersInterface
     */
    public function setRaw(string $header): HeadersInterface
    {
    }

    /**
     * Returns the current headers as an array
     *
     * @return array
     */
    public function toArray(): array
    {
    }
}
