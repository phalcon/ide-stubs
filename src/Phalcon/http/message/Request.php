<?php

namespace Phalcon\Http\Message;

/**
 * PSR-7 Request
 */
final class Request extends \Phalcon\Http\Message\AbstractRequest implements \Psr\Http\Message\RequestInterface
{

    /**
     * Request constructor.
     *
     * @param string $method
     * @param UriInterface|string|null $uri
     * @param StreamInterface|resource|string $body
     * @param array $headers
     */
    public function __construct(string $method = 'GET', $uri = null, $body = 'php://memory', $headers = array()) {}

}
