<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http;

use Phalcon\Contracts\Http\HttpTypes;
use Phalcon\Http\Request\FileInterface;
use stdClass;

/**
 * Interface for Phalcon\Http\Request
 *
 * @phpstan-import-type http_basic_auth from HttpTypes
 * @phpstan-import-type http_digest_auth from HttpTypes
 * @phpstan-import-type http_quality_part from HttpTypes
 * @phpstan-import-type http_request_headers from HttpTypes
 */
interface RequestInterface
{
    /**
     * Gets a variable from the $_REQUEST superglobal applying filters if
     * needed. If no parameters are given the $_REQUEST superglobal is returned
     *
     * ```php
     * // Returns value from $_REQUEST["user_email"] without sanitizing
     * $userEmail = $request->get("user_email");
     *
     * // Returns value from $_REQUEST["user_email"] with sanitizing
     * $userEmail = $request->get("user_email", "email");
     * ```
     *
     * @todo check the filters here
     * @param string|null $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function get(?string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed;

    /**
     * Return an array with mime/types and their quality accepted by the
     * browser/client from _SERVER["HTTP_ACCEPT"]
     *
     * @phpstan-return list<http_quality_part>
     * @return array
     */
    public function getAcceptableContent(): array;

    /**
     * Gets auth info accepted by the browser/client from
     * $_SERVER["PHP_AUTH_USER"]
     *
     * @phpstan-return http_basic_auth|null
     * @return array|null
     */
    public function getBasicAuth(): array|null;

    /**
     * Return the best mime/type accepted by the browser/client from
     * _SERVER["HTTP_ACCEPT"]
     *
     * @return string
     */
    public function getBestAccept(): string;

    /**
     * Return the best charset accepted by the browser/client from
     * _SERVER["HTTP_ACCEPT_CHARSET"]
     *
     * @return string
     */
    public function getBestCharset(): string;

    /**
     * Return the best language accepted by the browser/client from
     * _SERVER["HTTP_ACCEPT_LANGUAGE"]
     *
     * @return string
     */
    public function getBestLanguage(): string;

    /**
     * Return the most possible client IPv4 Address. This method searches in
     * $_SERVER["REMOTE_ADDR"] and optionally in
     * $_SERVER["HTTP_X_FORWARDED_FOR"]
     *
     * @param bool $trustForwardedHeader
     * @return string|bool
     */
    public function getClientAddress(bool $trustForwardedHeader = false): bool|string;

    /**
     * Return a charset array and their quality accepted by the browser/client
     * from _SERVER["HTTP_ACCEPT_CHARSET"]
     *
     * @phpstan-return list<http_quality_part>
     * @return array
     */
    public function getClientCharsets(): array;

    /**
     * Return the content type which request has been made
     *
     * @return string|null
     */
    public function getContentType(): string|null;

    /**
     * Return the auth info accepted by the browser/client from
     * $_SERVER["PHP_AUTH_DIGEST"]
     *
     * @phpstan-return http_digest_auth
     * @return array
     */
    public function getDigestAuth(): array;

    /**
     * Return the HTTP header from request data
     *
     * @param string $header
     * @return string
     */
    public function getHeader(string $header): string;

    /**
     * Returns the available headers in the request
     *
     * ```php
     * $_SERVER = [
     *     "PHP_AUTH_USER" => "phalcon",
     *     "PHP_AUTH_PW"   => "secret",
     * ];
     *
     * $headers = $request->getHeaders();
     *
     * echo $headers["Authorization"]; // Basic cGhhbGNvbjpzZWNyZXQ=
     * ```
     *
     * @phpstan-return http_request_headers
     * @return array
     */
    public function getHeaders(): array;

    /**
     * Return the host name used by the request.
     *
     * `Request::getHttpHost` trying to find host name in following order:
     *
     * - `$_SERVER["HTTP_HOST"]`
     * - `$_SERVER["SERVER_NAME"]`
     * - `$_SERVER["SERVER_ADDR"]`
     *
     * Optionally `Request::getHttpHost` validates and clean host name.
     * The `Request::$strictHostCheck` can be used to validate host name.
     *
     * Note: validation and cleaning have a negative performance impact because
     * they use regular expressions.
     *
     * ```php
     * use Phalcon\Http\Request;
     *
     * $request = new Request;
     *
     * $_SERVER["HTTP_HOST"] = "example.com";
     * $request->getHttpHost(); // example.com
     *
     * $_SERVER["HTTP_HOST"] = "example.com:8080";
     * $request->getHttpHost(); // example.com:8080
     *
     * $request->setStrictHostCheck(true);
     * $_SERVER["HTTP_HOST"] = "ex=am~ple.com";
     * $request->getHttpHost(); // UnexpectedValueException
     *
     * $_SERVER["HTTP_HOST"] = "ExAmPlE.com";
     * $request->getHttpHost(); // example.com
     * ```
     *
     * @return string
     */
    public function getHttpHost(): string;

    /**
     * Return the web page that refers active request. ie: https://phalcon.io
     *
     * @return string
     */
    public function getHTTPReferer(): string;

    /**
     * Return the decoded JSON HTTP raw request body
     *
     * @phpstan-return array<array-key, mixed>|bool|stdClass
     * @param bool $associative
     * @return array|bool|stdClass
     */
    public function getJsonRawBody(bool $associative = false): stdClass|bool|array;

    /**
     * Return the languages array and their quality accepted by the
     * browser/client from _SERVER["HTTP_ACCEPT_LANGUAGE"]
     *
     * @phpstan-return list<http_quality_part>
     * @return array
     */
    public function getLanguages(): array;

    /**
     * Return the HTTP method which request has been made
     *
     * If the X-HTTP-Method-Override header is set, and if the method is a POST,
     * then it is used to determine the "real" intended HTTP method.
     *
     * The _method request parameter can also be used to determine the HTTP
     * method, but only if setHttpMethodParameterOverride(true) has been called.
     *
     * The method is always an uppercased string.
     *
     * @return string
     */
    public function getMethod(): string;

    /**
     * Return the information about the port on which the request is made
     *
     * @return int
     */
    public function getPort(): int;

    /**
     * Return a variable from the $_POST superglobal applying filters if needed.
     * If no parameters are given the $_POST superglobal is returned
     *
     * ```php
     * // Returns value from $_POST["user_email"] without sanitizing
     * $userEmail = $request->getPost("user_email");
     *
     * // Returns value from $_POST["user_email"] with sanitizing
     * $userEmail = $request->getPost("user_email", "email");
     * ```
     *
     * @todo check the filters
     * @param string|null $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function getPost(?string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed;

    /**
     * Return a variable from put request
     *
     * ```php
     * // Returns value from PUT stream without sanitizing
     * $userEmail = $request->getPut("user_email");
     *
     * // Returns value from PUT stream with sanitizing
     * $userEmail = $request->getPut("user_email", "email");
     * ```
     *
     * @todo check the filters
     * @param string|null $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function getPut(?string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed;

    /**
     * Return a variable from $_GET superglobal applying filters if needed.
     * If no parameters are given the $_GET superglobal is returned
     *
     * ```php
     * // Returns value from $_GET["id"] without sanitizing
     * $id = $request->getQuery("id");
     *
     * // Returns value from $_GET["id"] with sanitizing
     * $id = $request->getQuery("id", "int");
     *
     * // Returns value from $_GET["id"] with a default value
     * $id = $request->getQuery("id", null, 150);
     * ```
     *
     * @todo check the filters
     * @param string|null $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function getQuery(?string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed;

    /**
     * Return the HTTP raw request body
     *
     * @return string
     */
    public function getRawBody(): string;

    /**
     * Return the HTTP schema (http/https)
     *
     * @return string
     */
    public function getScheme(): string;

    /**
     * Return a variable from $_SERVER superglobal
     *
     * @param string $name
     * @return string|null
     */
    public function getServer(string $name): string|null;

    /**
     * Return the active server address IP
     *
     * @return string
     */
    public function getServerAddress(): string;

    /**
     * Return the active server name
     *
     * @return string
     */
    public function getServerName(): string;

    /**
     * Return the attached files as Phalcon\Http\Request\FileInterface
     * compatible instances
     *
     * @return FileInterface[]
     * @param bool $onlySuccessful
     * @param bool $namedKeys
     */
    public function getUploadedFiles(bool $onlySuccessful = false, bool $namedKeys = false): array;

    /**
     * Return the HTTP URI which request has been made to
     *
     * ```php
     * // Returns /some/path?with=queryParams
     * $uri = $request->getURI();
     *
     * // Returns /some/path
     * $uri = $request->getURI(true);
     * ```
     *
     * @param bool $onlyPath
     * @return string
     */
    public function getURI(bool $onlyPath = false): string;

    /**
     * Return the HTTP user agent used to make the request
     *
     * @return string
     */
    public function getUserAgent(): string;

    /**
     * Return whether the $_REQUEST superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool;

    /**
     * Return whether the request includes attached files
     *
     * @return bool
     */
    public function hasFiles(): bool;

    /**
     * Return whether the headers have a certain index
     *
     * @param string $header
     * @return bool
     */
    public function hasHeader(string $header): bool;

    /**
     * Return whether the $_POST superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    public function hasPost(string $name): bool;

    /**
     * Return whether the PUT data has certain index
     *
     * @param string $name
     * @return bool
     */
    public function hasPut(string $name): bool;

    /**
     * Return whether the $_GET superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    public function hasQuery(string $name): bool;

    /**
     * Return whether the $_SERVER superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    public function hasServer(string $name): bool;

    /**
     * Return whether the request has been made using ajax. Checks if
     * $_SERVER["HTTP_X_REQUESTED_WITH"] === "XMLHttpRequest"
     *
     * @return bool
     */
    public function isAjax(): bool;

    /**
     * Return whether the HTTP method is CONNECT. if
     * $_SERVER["REQUEST_METHOD"] === "CONNECT"
     *
     * @return bool
     */
    public function isConnect(): bool;

    /**
     * Return whether the HTTP method is DELETE. if
     * $_SERVER["REQUEST_METHOD"] === "DELETE"
     *
     * @return bool
     */
    public function isDelete(): bool;

    /**
     * Return whether the HTTP method is GET. if
     * $_SERVER["REQUEST_METHOD"] === "GET"
     *
     * @return bool
     */
    public function isGet(): bool;

    /**
     * Return whether the HTTP method is HEAD. if
     * $_SERVER["REQUEST_METHOD"] === "HEAD"
     *
     * @return bool
     */
    public function isHead(): bool;

    /**
     * Return if the current HTTP method matches any of the passed methods
     *
     * @param array<array-key, mixed>|string $methods
     * @param bool $strict
     * @return bool
     */
    public function isMethod($methods, bool $strict = false): bool;

    /**
     * Return whether the HTTP method is OPTIONS. if
     * $_SERVER["REQUEST_METHOD"] === "OPTIONS"
     *
     * @return bool
     */
    public function isOptions(): bool;

    /**
     * Return whether the HTTP method is POST. if
     * $_SERVER["REQUEST_METHOD"] === "POST"
     *
     * @return bool
     */
    public function isPost(): bool;

    /**
     * Return whether the HTTP method is PURGE (Squid and Varnish support). if
     * $_SERVER["REQUEST_METHOD"] === "PURGE"
     *
     * @return bool
     */
    public function isPurge(): bool;

    /**
     * Return whether the HTTP method is PUT. if
     * $_SERVER["REQUEST_METHOD"] === "PUT"
     *
     * @return bool
     */
    public function isPut(): bool;

    /**
     * Return whether the request has been made using any secure layer
     *
     * @return bool
     */
    public function isSecure(): bool;

    /**
     * Return whether the request has been made using SOAP
     *
     * @return bool
     */
    public function isSoap(): bool;

    /**
     * Return whether the HTTP method is TRACE.
     * if $_SERVER["REQUEST_METHOD"] === "TRACE"
     *
     * @return bool
     */
    public function isTrace(): bool;

    /**
     * Returns the number of files available
     *
     * @param bool $onlySuccessful
     * @return int
     */
    public function numFiles(bool $onlySuccessful = false): int;
}
