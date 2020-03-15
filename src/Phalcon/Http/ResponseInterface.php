<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http;

use Phalcon\Http\Response\HeadersInterface;

/**
 * Phalcon\Http\Response
 *
 * Interface for Phalcon\Http\Response
 */
interface ResponseInterface
{

    /**
     * Appends a string to the HTTP response body
     *
     * @param mixed $content
     * @return ResponseInterface
     */
    public function appendContent($content): ResponseInterface;

    /**
     * Gets the HTTP response body
     *
     * @return string
     */
    public function getContent(): string;

    /**
     * Returns the status code
     *
     * @return int|null
     */
    public function getStatusCode(): ?int;

    /**
     * Returns headers set by the user
     *
     * @return HeadersInterface
     */
    public function getHeaders(): HeadersInterface;

    /**
     * Checks if a header exists
     *
     * @param string $name
     * @return bool
     */
    public function hasHeader(string $name): bool;

    /**
     * Checks if the response was already sent
     *
     * @return bool
     */
    public function isSent(): bool;

    /**
     * Redirect by HTTP to another action or URL
     *
     * @param mixed $location
     * @param bool $externalRedirect
     * @param int $statusCode
     * @return ResponseInterface
     */
    public function redirect($location = null, bool $externalRedirect = false, int $statusCode = 302): ResponseInterface;

    /**
     * Resets all the established headers
     *
     * @return ResponseInterface
     */
    public function resetHeaders(): ResponseInterface;

    /**
     * Sets HTTP response body
     *
     * @param string $content
     * @return ResponseInterface
     */
    public function setContent(string $content): ResponseInterface;

    /**
     * Sets the response content-length
     *
     * @param int $contentLength
     * @return ResponseInterface
     */
    public function setContentLength(int $contentLength): ResponseInterface;

    /**
     * Sets the response content-type mime, optionally the charset
     *
     * @param string $charset
     * @param string $contentType
     * @return ResponseInterface
     */
    public function setContentType(string $contentType, $charset = null): ResponseInterface;

    /**
     * Sets output expire time header
     *
     * @param \DateTime $datetime
     * @return ResponseInterface
     */
    public function setExpires(\DateTime $datetime): ResponseInterface;

    /**
     * Sets an attached file to be sent at the end of the request
     *
     * @param string $filePath
     * @param mixed $attachmentName
     * @return ResponseInterface
     */
    public function setFileToSend(string $filePath, $attachmentName = null): ResponseInterface;

    /**
     * Overwrites a header in the response
     *
     * @param string $name
     * @param mixed $value
     * @return ResponseInterface
     */
    public function setHeader(string $name, $value): ResponseInterface;

    /**
     * Sets HTTP response body. The parameter is automatically converted to JSON
     *
     * ```php
     * $response->setJsonContent(
     *     [
     *         "status" => "OK",
     *     ]
     * );
     * ```
     *
     * @param mixed $content
     * @return ResponseInterface
     */
    public function setJsonContent($content): ResponseInterface;

    /**
     * Sends a Not-Modified response
     *
     * @return ResponseInterface
     */
    public function setNotModified(): ResponseInterface;

    /**
     * Send a raw header to the response
     *
     * @param string $header
     * @return ResponseInterface
     */
    public function setRawHeader(string $header): ResponseInterface;

    /**
     * Sets the HTTP response code
     *
     * @param int $code
     * @param string $message
     * @return ResponseInterface
     */
    public function setStatusCode(int $code, string $message = null): ResponseInterface;

    /**
     * Prints out HTTP response to the client
     *
     * @return ResponseInterface
     */
    public function send(): ResponseInterface;

    /**
     * Sends cookies to the client
     *
     * @return ResponseInterface
     */
    public function sendCookies(): ResponseInterface;

    /**
     * Sends headers to the client
     *
     * @return mixed
     */
    public function sendHeaders();
}
