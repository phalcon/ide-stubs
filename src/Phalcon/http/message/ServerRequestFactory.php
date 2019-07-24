<?php

namespace Phalcon\Http\Message;

/**
 * PSR-17 ServerRequestFactory
 */
class ServerRequestFactory implements \Psr\Http\Message\ServerRequestFactoryInterface
{

    /**
     * Create a new server request.
     *
     * Note that server-params are taken precisely as given - no
     * parsing/processing of the given values is performed, and, in particular,
     * no attempt is made to determine the HTTP method or URI, which must be
     * provided explicitly.
     *
     * @param string              $method       The HTTP method associated with
     *                                          the request.
     * @param UriInterface|string $uri          The URI associated with the
     *                                          request. If the value is a
     *                                          string, the factory MUST create
     *                                          a UriInterface instance based
     *                                          on it.
     * @param array               $serverParams Array of SAPI parameters with
     *                                          which to seed the generated
     *                                          request instance.
     *
     * @param string $method
     * @param mixed $uri
     * @param array $serverParams
     * @return \Psr\Http\Message\ServerRequestInterface
     */
    public function createServerRequest(string $method, $uri, array $serverParams = array()): ServerRequestInterface {}

    /**
     * Create a request from the supplied superglobal values.
     *
     * If any argument is not supplied, the corresponding superglobal value will
     * be used.
     *
     * The ServerRequest created is then passed to the fromServer() method in
     * order to marshal the request URI and headers.
     *
     * @param array $files   $_FILES superglobal
     *
     * @see fromServer()
     * @param array $server $_SERVER superglobal
     * @param array $get $_GET superglobal
     * @param array $post $_POST superglobal
     * @param array $cookies $_COOKIE superglobal
     * @param array $files
     * @return \Phalcon\Http\Message\ServerRequest
     */
    public function load(array $server = null, array $get = null, array $post = null, array $cookies = null, array $files = null): ServerRequest {}

    /**
     * Returns the apache_request_headers if it exists
     *
     * @return array|false
     */
    protected function getHeaders() {}

    /**
     * Calculates the host and port from the headers or the server superglobal
     *
     * @param Collection $headers
     *
     * @param Collection $server
     * @param \Phalcon\Collection $headers
     * @return array
     */
    private function calculateUriHost(\Phalcon\Collection $server, \Phalcon\Collection $headers): array {}

    /**
     * Get the host and calculate the port if present from the header
     *
     * @param string $host
     *
     * @param string $host
     * @return array
     */
    private function calculateUriHostFromHeader(string $host): array {}

    /**
     * Get the path from the request from IIS7/Rewrite, REQUEST_URL or
     * ORIG_PATH_INFO
     *
     * @param Collection $server
     *
     * @param \Phalcon\Collection $server
     * @return string
     */
    private function calculateUriPath(\Phalcon\Collection $server): string {}

    /**
     * Get the query string from the server array
     *
     * @param Collection $server
     *
     * @param \Phalcon\Collection $server
     * @return string
     */
    private function calculateUriQuery(\Phalcon\Collection $server): string {}

    /**
     * Calculates the scheme from the server variables
     *
     * @param Collection $headers
     *
     * @param Collection $server
     * @param \Phalcon\Collection $headers
     * @return string
     */
    private function calculateUriScheme(\Phalcon\Collection $server, \Phalcon\Collection $headers): string {}

    /**
     * Checks the source if it null and returns the super, otherwise the source
     * array
     *
     * @param mixed $source
     * @param array $super
     * @return array
     */
    private function checkNullArray($source, array $super): array {}

    /**
     * Create an UploadedFile object from an $_FILES array element
     *
     * @param array $file The $_FILES element
     *
     * @return UploadedFile
     *
     * @throws InvalidArgumentException If one of the elements is missing
     * @param array $file
     * @return \Phalcon\Http\Message\UploadedFile
     */
    private function createUploadedFile(array $file): UploadedFile {}

    /**
     * Returns a header
     *
     * @param mixed|null $defaultValue
     *
     * @param Collection $headers
     * @param string $name
     * @param mixed $defaultValue
     * @return mixed
     */
    private function getHeader(\Phalcon\Collection $headers, string $name, $defaultValue = null) {}

    /**
     * Parse a cookie header according to RFC 6265.
     *
     * @param string $cookieHeader A string cookie header value.
     *
     * @return array key/value cookie pairs.
     *
     * @param string $cookieHeader
     * @return array
     */
    private function parseCookieHeader(string $cookieHeader): array {}

    /**
     * Processes headers from SAPI
     *
     * @param Collection $server
     *
     * @param \Phalcon\Collection $server
     * @return \Phalcon\Collection
     */
    private function parseHeaders(\Phalcon\Collection $server): Collection {}

    /**
     * Parse the $_SERVER array amd return it back after looking for the
     * authorization header
     *
     * @param array $server Either verbatim, or with an added
     *                      HTTP_AUTHORIZATION header.
     *
     * @param array $server
     * @return \Phalcon\Collection
     */
    private function parseServer(array $server): Collection {}

    /**
     * Traverses a $_FILES and creates UploadedFile objects from it. It is used
     * recursively
     *
     * @param array $files
     *
     * @param array $files
     * @return \Phalcon\Collection
     */
    private function parseUploadedFiles(array $files): Collection {}

    /**
     * Calculates the Uri from the server superglobal or the headers
     *
     * @param Collection $headers
     *
     * @param Collection $server
     * @param \Phalcon\Collection $headers
     * @return \Phalcon\Http\Message\Uri
     */
    private function parseUri(\Phalcon\Collection $server, \Phalcon\Collection $headers): Uri {}

}
