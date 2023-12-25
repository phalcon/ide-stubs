<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http;

use DateTime;
use DateTimeZone;
use Phalcon\Di\Di;
use Phalcon\Di\DiInterface;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Http\Message\ResponseStatusCodeInterface;
use Phalcon\Http\Response\CookiesInterface;
use Phalcon\Http\Response\Exception;
use Phalcon\Http\Response\HeadersInterface;
use Phalcon\Mvc\Url\UrlInterface;
use Phalcon\Mvc\ViewInterface;
use Phalcon\Http\Response\Headers;
use Phalcon\Support\Helper\Json\Encode;

/**
 * Part of the HTTP cycle is return responses to the clients.
 * Phalcon\HTTP\Response is the Phalcon component responsible to achieve this task.
 * HTTP responses are usually composed by headers and body.
 *
 * ```php
 * $response = new \Phalcon\Http\Response();
 *
 * $response->setStatusCode(200, "OK");
 * $response->setContent("<html><body>Hello</body></html>");
 *
 * $response->send();
 * ```
 */
class Response implements \Phalcon\Http\ResponseInterface, \Phalcon\Di\InjectionAwareInterface, \Phalcon\Events\EventsAwareInterface, \Phalcon\Http\Message\ResponseStatusCodeInterface
{
    /**
     * @var DiInterface|null
     */
    protected $container = null;

    /**
     * @var string|null
     */
    protected $content = null;

    /**
     * @var CookiesInterface|null
     */
    protected $cookies = null;

    /**
     * @var ManagerInterface|null
     */
    protected $eventsManager = null;

    /**
     * @var string|null
     */
    protected $file = null;

    /**
     * @var Headers
     */
    protected $headers;

    /**
     * @var bool
     */
    protected $sent = false;

    /**
     * @var array
     */
    protected $statusCodes = [];

    /**
     * @var Encode
     */
    private $encode;

    /**
     * Phalcon\Http\Response constructor
     *
     * @param string $content
     * @param mixed $code
     * @param mixed $status
     */
    public function __construct(string $content = null, $code = null, $status = null)
    {
    }

    /**
     * Appends a string to the HTTP response body
     *
     * @param mixed $content
     * @return ResponseInterface
     */
    public function appendContent($content): ResponseInterface
    {
    }

    /**
     * Gets the HTTP response body
     *
     * @return string
     */
    public function getContent(): string
    {
    }

    /**
     * Returns cookies set by the user
     *
     * @return CookiesInterface
     */
    public function getCookies(): CookiesInterface
    {
    }

    /**
     * Returns the internal dependency injector
     *
     * @return DiInterface
     */
    public function getDI(): DiInterface
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface|null
     */
    public function getEventsManager(): ManagerInterface|null
    {
    }

    /**
     * Returns headers set by the user
     *
     * @return HeadersInterface
     */
    public function getHeaders(): HeadersInterface
    {
    }

    /**
     * Returns the reason phrase
     *
     * ```php
     * echo $response->getReasonPhrase();
     * ```
     *
     * @return string|null
     */
    public function getReasonPhrase(): string|null
    {
    }

    /**
     * Returns the status code
     *
     * ```php
     * echo $response->getStatusCode();
     * ```
     *
     * @return int|null
     */
    public function getStatusCode(): int|null
    {
    }

    /**
     * Checks if a header exists
     *
     * ```php
     * $response->hasHeader("Content-Type");
     * ```
     *
     * @param string $name
     * @return bool
     */
    public function hasHeader(string $name): bool
    {
    }

    /**
     * Check if the response is already sent
     *
     * @return bool
     */
    public function isSent(): bool
    {
    }

    /**
     * Redirect by HTTP to another action or URL
     *
     * ```php
     * // Using a string redirect (internal/external)
     * $response->redirect("posts/index");
     * $response->redirect("http://en.wikipedia.org", true);
     * $response->redirect("http://www.example.com/new-location", true, 301);
     *
     * // Making a redirection based on a named route
     * $response->redirect(
     *     [
     *         "for"        => "index-lang",
     *         "lang"       => "jp",
     *         "controller" => "index",
     *     ]
     * );
     * ```
     *
     * @param mixed $location
     * @param bool $externalRedirect
     * @param int $statusCode
     * @return ResponseInterface
     */
    public function redirect($location = null, bool $externalRedirect = false, int $statusCode = 302): ResponseInterface
    {
    }

    /**
     * Remove a header in the response
     *
     * ```php
     * $response->removeHeader("Expires");
     * ```
     *
     * @param string $name
     * @return ResponseInterface
     */
    public function removeHeader(string $name): ResponseInterface
    {
    }

    /**
     * Resets all the established headers
     *
     * @return ResponseInterface
     */
    public function resetHeaders(): ResponseInterface
    {
    }

    /**
     * Prints out HTTP response to the client
     *
     * @return ResponseInterface
     */
    public function send(): ResponseInterface
    {
    }

    /**
     * Sends cookies to the client
     *
     * @return ResponseInterface
     */
    public function sendCookies(): ResponseInterface
    {
    }

    /**
     * Sends headers to the client
     *
     * @return bool|ResponseInterface
     */
    public function sendHeaders(): ResponseInterface|bool
    {
    }

    /**
     * Sets Cache headers to use HTTP cache
     *
     * ```php
     * $this->response->setCache(60);
     * ```
     *
     * @param int $minutes
     * @return ResponseInterface
     */
    public function setCache(int $minutes): ResponseInterface
    {
    }

    /**
     * Sets HTTP response body
     *
     * ```php
     * $response->setContent("<h1>Hello!</h1>");
     * ```
     *
     * @param string $content
     * @return ResponseInterface
     */
    public function setContent(string $content): ResponseInterface
    {
    }

    /**
     * Sets the response content-length
     *
     * ```php
     * $response->setContentLength(2048);
     * ```
     *
     * @param int $contentLength
     * @return ResponseInterface
     */
    public function setContentLength(int $contentLength): ResponseInterface
    {
    }

    /**
     * Sets the response content-type mime, optionally the charset
     *
     * ```php
     * $response->setContentType("application/pdf");
     * $response->setContentType("text/plain", "UTF-8");
     * ```
     *
     * @param string $contentType
     * @param mixed $charset
     * @return ResponseInterface
     */
    public function setContentType(string $contentType, $charset = null): ResponseInterface
    {
    }

    /**
     * Sets a cookies bag for the response externally
     *
     * @param \Phalcon\Http\Response\CookiesInterface $cookies
     * @return ResponseInterface
     */
    public function setCookies(\Phalcon\Http\Response\CookiesInterface $cookies): ResponseInterface
    {
    }

    /**
     * Sets the dependency injector
     *
     * @param \Phalcon\Di\DiInterface $container
     * @return void
     */
    public function setDI(\Phalcon\Di\DiInterface $container): void
    {
    }

    /**
     * Set a custom ETag
     *
     * ```php
     * $response->setEtag(
     *     md5(
     *         time()
     *     )
     * );
     * ```
     *
     * @param string $etag
     * @return ResponseInterface
     */
    public function setEtag(string $etag): ResponseInterface
    {
    }

    /**
     * Sets an Expires header in the response that allows to use the HTTP cache
     *
     * ```php
     * $this->response->setExpires(
     *     new DateTime()
     * );
     * ```
     *
     * @param \DateTime $datetime
     * @return ResponseInterface
     */
    public function setExpires(\DateTime $datetime): ResponseInterface
    {
    }

    /**
     * Sets the events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     * @return void
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager): void
    {
    }

    /**
     * Sets an attached file to be sent at the end of the request
     *
     * @param string $filePath
     * @param mixed $attachmentName
     * @param mixed $attachment
     * @return ResponseInterface
     */
    public function setFileToSend(string $filePath, $attachmentName = null, $attachment = true): ResponseInterface
    {
    }

    /**
     * Overwrites a header in the response
     *
     * ```php
     * $response->setHeader("Content-Type", "text/plain");
     * ```
     *
     * @param string $name
     * @param mixed $value
     * @return ResponseInterface
     */
    public function setHeader(string $name, $value): ResponseInterface
    {
    }

    /**
     * Sets a headers bag for the response externally
     *
     * @param \Phalcon\Http\Response\HeadersInterface $headers
     * @return ResponseInterface
     */
    public function setHeaders(\Phalcon\Http\Response\HeadersInterface $headers): ResponseInterface
    {
    }

    /**
     * Sets HTTP response body. The parameter is automatically converted to JSON
     * and also sets default header: Content-Type: "application/json; charset=UTF-8"
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
     * @param int $jsonOptions
     * @param int $depth
     * @return ResponseInterface
     */
    public function setJsonContent($content, int $jsonOptions = 0, int $depth = 512): ResponseInterface
    {
    }

    /**
     * Sets Last-Modified header
     *
     * ```php
     * $this->response->setLastModified(
     *     new DateTime()
     * );
     * ```
     *
     * @param \DateTime $datetime
     * @return ResponseInterface
     */
    public function setLastModified(\DateTime $datetime): ResponseInterface
    {
    }

    /**
     * Sends a Not-Modified response
     *
     * @return ResponseInterface
     */
    public function setNotModified(): ResponseInterface
    {
    }

    /**
     * Sets the HTTP response code
     *
     * ```php
     * $response->setStatusCode(404, "Not Found");
     * ```
     *
     * @param int $code
     * @param string $message
     * @return ResponseInterface
     */
    public function setStatusCode(int $code, string $message = null): ResponseInterface
    {
    }

    /**
     * Send a raw header to the response
     *
     * ```php
     * $response->setRawHeader("HTTP/1.1 404 Not Found");
     * ```
     *
     * @param string $header
     * @return ResponseInterface
     */
    public function setRawHeader(string $header): ResponseInterface
    {
    }

    /**
     * @todo Remove this when we get traits
     * @param string $uri
     * @param mixed $suffix
     * @return string
     */
    private function getBasename(string $uri, $suffix = null): string
    {
    }
}
