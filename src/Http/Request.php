<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Http;

use Phalcon\Di\DiInterface;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Events\ManagerInterface;
use Phalcon\Filter\FilterInterface;
use Phalcon\Http\Message\RequestMethodInterface;
use Phalcon\Http\Request\File;
use Phalcon\Http\Request\FileInterface;
use Phalcon\Http\Request\Exception;
use Phalcon\Support\Helper\Json\Decode;
use UnexpectedValueException;
use stdClass;

/**
 * Encapsulates request information for easy and secure access from application
 * controllers.
 *
 * The request object is a simple value object that is passed between the
 * dispatcher and controller classes. It packages the HTTP request environment.
 *
 * ```php
 * use Phalcon\Http\Request;
 *
 * $request = new Request();
 *
 * if ($request->isPost() && $request->isAjax()) {
 *     echo "Request was made using POST and AJAX";
 * }
 *
 * // Retrieve SERVER variables
 * $request->getServer("HTTP_HOST");
 *
 * // GET, POST, PUT, DELETE, HEAD, OPTIONS, PATCH, PURGE, TRACE, CONNECT
 * $request->getMethod();
 *
 * // An array of languages the client accepts
 * $request->getLanguages();
 * ```
 */
class Request extends AbstractInjectionAware implements \Phalcon\Http\RequestInterface, \Phalcon\Http\Message\RequestMethodInterface
{
    /**
     * @var FilterInterface|null
     */
    private $filterService = null;

    /**
     * @var bool
     */
    private $httpMethodParameterOverride = false;

    /**
     * @var array
     */
    private $queryFilters = [];

    /**
     * @var array|null
     */
    private $patchCache = null;

    /**
     * @var array|null
     */
    private $putCache = null;

    /**
     * @var string
     */
    private $rawBody = '';

    /**
     * @var bool
     */
    private $strictHostCheck = false;

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
     * @param string $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function get(string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed
    {
    }

    /**
     * Gets an array with mime/types and their quality accepted by the
     * browser/client from _SERVER["HTTP_ACCEPT"]
     *
     * @return array
     */
    public function getAcceptableContent(): array
    {
    }

    /**
     * Gets auth info accepted by the browser/client from
     * $_SERVER["PHP_AUTH_USER"]
     *
     * @return array|null
     */
    public function getBasicAuth(): array|null
    {
    }

    /**
     * Gets best mime/type accepted by the browser/client from
     * _SERVER["HTTP_ACCEPT"]
     *
     * @return string
     */
    public function getBestAccept(): string
    {
    }

    /**
     * Gets best charset accepted by the browser/client from
     * _SERVER["HTTP_ACCEPT_CHARSET"]
     *
     * @return string
     */
    public function getBestCharset(): string
    {
    }

    /**
     * Gets best language accepted by the browser/client from
     * _SERVER["HTTP_ACCEPT_LANGUAGE"]
     *
     * @return string
     */
    public function getBestLanguage(): string
    {
    }

    /**
     * Return the HTTP method parameter override flag
     *
     * @return bool
     */
    public function getHttpMethodParameterOverride(): bool
    {
    }

    /**
     * Gets the preferred ISO locale variant.
     *
     * Gets the preferred locale accepted by the client from the
     * "Accept-Language" request HTTP header and returns the
     * base part of it i.e. `en` instead of `en-US`.
     *
     * Note: This method relies on the `$_SERVER["HTTP_ACCEPT_LANGUAGE"]` header.
     *
     * @link https://www.iso.org/standard/50707.html
     * @return string
     */
    public function getPreferredIsoLocaleVariant(): string
    {
    }

    /**
     * Gets most possible client IPv4 Address. This method searches in
     * `$_SERVER["REMOTE_ADDR"]` and optionally in
     * `$_SERVER["HTTP_X_FORWARDED_FOR"]`
     *
     * @param bool $trustForwardedHeader
     * @return string|bool
     */
    public function getClientAddress(bool $trustForwardedHeader = false): bool|string
    {
    }

    /**
     * Gets a charsets array and their quality accepted by the browser/client
     * from _SERVER["HTTP_ACCEPT_CHARSET"]
     *
     * @return array
     */
    public function getClientCharsets(): array
    {
    }

    /**
     * Gets content type which request has been made
     *
     * @return string|null
     */
    public function getContentType(): string|null
    {
    }

    /**
     * Gets auth info accepted by the browser/client from
     * $_SERVER["PHP_AUTH_DIGEST"]
     *
     * @return array
     */
    public function getDigestAuth(): array
    {
    }

    /**
     * Retrieves a query/get value always sanitized with the preset filters
     *
     * @param string $name
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function getFilteredQuery(string $name = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed
    {
    }

    /**
     * Retrieves a patch value always sanitized with the preset filters
     *
     * @param string $name
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function getFilteredPatch(string $name = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed
    {
    }

    /**
     * Retrieves a post value always sanitized with the preset filters
     *
     * @param string $name
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function getFilteredPost(string $name = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed
    {
    }

    /**
     * Retrieves a put value always sanitized with the preset filters
     *
     * @param string $name
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function getFilteredPut(string $name = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed
    {
    }

    /**
     * Gets HTTP header from request data
     *
     * @param string $header
     * @return string
     */
    final public function getHeader(string $header): string
    {
    }

    /**
     * Returns the available headers in the request
     *
     * <code>
     * $_SERVER = [
     *     "PHP_AUTH_USER" => "phalcon",
     *     "PHP_AUTH_PW"   => "secret",
     * ];
     *
     * $headers = $request->getHeaders();
     *
     * echo $headers["Authorization"]; // Basic cGhhbGNvbjpzZWNyZXQ=
     * </code>
     *
     * @return array
     */
    public function getHeaders(): array
    {
    }

    /**
     * Gets host name used by the request.
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
    public function getHttpHost(): string
    {
    }

    /**
     * Gets web page that refers active request. ie: http://www.google.com
     *
     * @return string
     */
    public function getHTTPReferer(): string
    {
    }

    /**
     * Gets decoded JSON HTTP raw request body
     *
     * @param bool $associative
     * @return array|bool|\stdClass
     */
    public function getJsonRawBody(bool $associative = false): \stdClass|bool|array
    {
    }

    /**
     * Gets languages array and their quality accepted by the browser/client
     * from _SERVER["HTTP_ACCEPT_LANGUAGE"]
     *
     * @return array
     */
    public function getLanguages(): array
    {
    }

    /**
     * Gets HTTP method which request has been made
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
    final public function getMethod(): string
    {
    }

    /**
     * Gets a variable from put request
     *
     * ```php
     * // Returns value from $_PATCH["user_email"] without sanitizing
     * $userEmail = $request->getPatch("user_email");
     *
     * // Returns value from $_PATCH["user_email"] with sanitizing
     * $userEmail = $request->getPatch("user_email", "email");
     * ```
     *
     * @param string $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function getPatch(string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed
    {
    }

    /**
     * Gets information about the port on which the request is made.
     *
     * @return int
     */
    public function getPort(): int
    {
    }

    /**
     * Gets a variable from the $_POST superglobal applying filters if needed
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
     * @param string $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function getPost(string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed
    {
    }

    /**
     * Gets a variable from put request
     *
     * ```php
     * // Returns value from $_PUT["user_email"] without sanitizing
     * $userEmail = $request->getPut("user_email");
     *
     * // Returns value from $_PUT["user_email"] with sanitizing
     * $userEmail = $request->getPut("user_email", "email");
     * ```
     *
     * @param string $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function getPut(string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed
    {
    }

    /**
     * Gets variable from $_GET superglobal applying filters if needed
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
     * @param string $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function getQuery(string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed
    {
    }

    /**
     * Gets HTTP raw request body
     *
     * @return string
     */
    public function getRawBody(): string
    {
    }

    /**
     * Gets HTTP schema (http/https)
     *
     * @return string
     */
    public function getScheme(): string
    {
    }

    /**
     * Gets variable from $_SERVER superglobal
     *
     * @param string $name
     * @return string|null
     */
    public function getServer(string $name): string|null
    {
    }

    /**
     * Gets active server address IP
     *
     * @return string
     */
    public function getServerAddress(): string
    {
    }

    /**
     * Gets active server name
     *
     * @return string
     */
    public function getServerName(): string
    {
    }

    /**
     * Gets attached files as Phalcon\Http\Request\File instances
     *
     * @param bool $onlySuccessful
     * @param bool $namedKeys
     * @return array|\Phalcon\Http\Request\FileInterface[]
     */
    public function getUploadedFiles(bool $onlySuccessful = false, bool $namedKeys = false): array
    {
    }

    /**
     * Gets HTTP URI which request has been made to
     *
     * ```php
     * // Returns /some/path?with=queryParams
     * $uri = $request->getURI();
     *
     * // Returns /some/path
     * $uri = $request->getURI(true);
     * ```
     *
     * @param bool $onlyPath If true, query part will be omitted
     * @return string
     */
    final public function getURI(bool $onlyPath = false): string
    {
    }

    /**
     * Gets HTTP user agent used to made the request
     *
     * @return string
     */
    public function getUserAgent(): string
    {
    }

    /**
     * Checks whether $_REQUEST superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Returns if the request has files or not
     *
     * @return bool
     */
    public function hasFiles(): bool
    {
    }

    /**
     * Checks whether headers has certain index
     *
     * @param string $header
     * @return bool
     */
    final public function hasHeader(string $header): bool
    {
    }

    /**
     * Checks whether the PATCH data has certain index
     *
     * @param string $name
     * @return bool
     */
    public function hasPatch(string $name): bool
    {
    }

    /**
     * Checks whether $_POST superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    public function hasPost(string $name): bool
    {
    }

    /**
     * Checks whether the PUT data has certain index
     *
     * @param string $name
     * @return bool
     */
    public function hasPut(string $name): bool
    {
    }

    /**
     * Checks whether $_GET superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    public function hasQuery(string $name): bool
    {
    }

    /**
     * Checks whether $_SERVER superglobal has certain index
     *
     * @param string $name
     * @return bool
     */
    final public function hasServer(string $name): bool
    {
    }

    /**
     * Checks whether request has been made using ajax
     *
     * @return bool
     */
    public function isAjax(): bool
    {
    }

    /**
     * Checks whether HTTP method is CONNECT.
     * if _SERVER["REQUEST_METHOD"]==="CONNECT"
     *
     * @return bool
     */
    public function isConnect(): bool
    {
    }

    /**
     * Checks whether HTTP method is DELETE.
     * if _SERVER["REQUEST_METHOD"]==="DELETE"
     *
     * @return bool
     */
    public function isDelete(): bool
    {
    }

    /**
     * Checks whether HTTP method is GET.
     * if _SERVER["REQUEST_METHOD"]==="GET"
     *
     * @return bool
     */
    public function isGet(): bool
    {
    }

    /**
     * Checks whether HTTP method is HEAD.
     * if _SERVER["REQUEST_METHOD"]==="HEAD"
     *
     * @return bool
     */
    public function isHead(): bool
    {
    }

    /**
     * Check if HTTP method match any of the passed methods
     * When strict is true it checks if validated methods are real HTTP methods
     *
     * @param mixed $methods
     * @param bool $strict
     * @return bool
     */
    public function isMethod($methods, bool $strict = false): bool
    {
    }

    /**
     * Checks whether HTTP method is OPTIONS.
     * if _SERVER["REQUEST_METHOD"]==="OPTIONS"
     *
     * @return bool
     */
    public function isOptions(): bool
    {
    }

    /**
     * Checks whether HTTP method is PATCH.
     * if _SERVER["REQUEST_METHOD"]==="PATCH"
     *
     * @return bool
     */
    public function isPatch(): bool
    {
    }

    /**
     * Checks whether HTTP method is POST.
     * if _SERVER["REQUEST_METHOD"]==="POST"
     *
     * @return bool
     */
    public function isPost(): bool
    {
    }

    /**
     * Checks whether HTTP method is PUT.
     * if _SERVER["REQUEST_METHOD"]==="PUT"
     *
     * @return bool
     */
    public function isPut(): bool
    {
    }

    /**
     * Checks whether HTTP method is PURGE (Squid and Varnish support).
     * if _SERVER["REQUEST_METHOD"]==="PURGE"
     *
     * @return bool
     */
    public function isPurge(): bool
    {
    }

    /**
     * Checks whether request has been made using any secure layer
     *
     * @return bool
     */
    public function isSecure(): bool
    {
    }

    /**
     * Checks if the `Request::getHttpHost` method will be use strict validation
     * of host name or not
     *
     * @return bool
     */
    public function isStrictHostCheck(): bool
    {
    }

    /**
     * Checks whether request has been made using SOAP
     *
     * @return bool
     */
    public function isSoap(): bool
    {
    }

    /**
     * Checks whether HTTP method is TRACE.
     * if _SERVER["REQUEST_METHOD"]==="TRACE"
     *
     * @return bool
     */
    public function isTrace(): bool
    {
    }

    /**
     * Checks if a method is a valid HTTP method
     *
     * @param string $method
     * @return bool
     */
    public function isValidHttpMethod(string $method): bool
    {
    }

    /**
     * Returns the number of files available
     *
     * @param bool $onlySuccessful
     * @return int
     */
    public function numFiles(bool $onlySuccessful = false): int
    {
    }

    /**
     * Set the HTTP method parameter override flag
     *
     * @param bool $override
     *
     * @return Request
     */
    public function setHttpMethodParameterOverride(bool $override): Request
    {
    }

    /**
     * Sets automatic sanitizers/filters for a particular field and for
     * particular methods
     *
     * @param string $name
     * @param array $filters
     * @param array $scope
     * @return RequestInterface
     */
    public function setParameterFilters(string $name, array $filters = [], array $scope = []): RequestInterface
    {
    }

    /**
     * Sets if the `Request::getHttpHost` method must be use strict validation
     * of host name or not
     *
     * @param bool $flag
     * @return RequestInterface
     */
    public function setStrictHostCheck(bool $flag = true): RequestInterface
    {
    }

    /**
     * Process a request header and return the one with best quality
     *
     * @param array $qualityParts
     * @param string $name
     * @return string
     */
    final protected function getBestQuality(array $qualityParts, string $name): string
    {
    }

    /**
     * Helper to get data from superglobals, applying filters if needed.
     * If no parameters are given the superglobal is returned.
     *
     * @param array $source
     * @param string $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    final protected function getHelper(array $source, string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed
    {
    }

    /**
     * Recursively counts file in an array of files
     *
     * @param mixed $data
     * @param bool $onlySuccessful
     * @return int
     */
    final protected function hasFileHelper($data, bool $onlySuccessful): int
    {
    }

    /**
     * Process a request header and return an array of values with their qualities
     *
     * @param string $serverIndex
     * @param string $name
     * @return array
     */
    final protected function getQualityHeader(string $serverIndex, string $name): array
    {
    }

    /**
     * Resolve authorization headers.
     *
     * @return array
     */
    protected function resolveAuthorizationHeaders(): array
    {
    }

    /**
     * Smooth out $_FILES to have plain array with all files uploaded
     *
     * @param array $names
     * @param array $types
     * @param array $tmp_names
     * @param array $sizes
     * @param array $errors
     * @param string $prefix
     * @return array
     */
    final protected function smoothFiles(array $names, array $types, array $tmp_names, array $sizes, array $errors, string $prefix): array
    {
    }

    /**
     * Checks the filter service and assigns it to the class parameter
     *
     * @return FilterInterface
     */
    private function getFilterService(): FilterInterface
    {
    }

    /**
     * @return array
     */
    private function getServerArray(): array
    {
    }

    /**
     * Gets filtered data
     *
     * @param string $methodKey
     * @param string $method
     * @param string $name
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    public function getFilteredData(string $methodKey, string $method, string $name = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed
    {
    }

    /**
     * Gets a variable from put request
     *
     * ```php
     * // Returns value from $_PATCH["user_email"] without sanitizing
     * $userEmail = $request->getPatch("user_email");
     *
     * // Returns value from $_PATCH["user_email"] with sanitizing
     * $userEmail = $request->getPatch("user_email", "email");
     * ```
     *
     * @param string $collection
     * @param string $name
     * @param mixed $filters
     * @param mixed $defaultValue
     * @param bool $notAllowEmpty
     * @param bool $noRecursive
     * @return mixed
     */
    private function getPatchPut(string $collection, string $name = null, $filters = null, $defaultValue = null, bool $notAllowEmpty = false, bool $noRecursive = false): mixed
    {
    }

    /**
     * parse multipart/form-data from raw data
     *
     * @return array
     */
    private function getFormData(): array
    {
    }
}
