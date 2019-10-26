<?php

namespace Phalcon\Http\Message;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\StreamInterface;
use Psr\Http\Message\UriInterface;

/**
 * PSR-7 Request
 */
final class Request extends AbstractRequest implements \Psr\Http\Message\RequestInterface
{

    /**
     * Request constructor.
     *
     * @param string $method
     * @param UriInterface|string|null $uri
     * @param StreamInterface|resource|string $body
     * @param array $headers
     */
    public function __construct(string $method = 'GET', $uri = null, $body = 'php://memory', $headers = array())
    {
    }
}
