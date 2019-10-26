<?php

namespace Phalcon\Http\Message;

use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

/**
 * PSR-17 RequestFactory
 */
final class RequestFactory implements \Psr\Http\Message\RequestFactoryInterface
{

    /**
     * Create a new request.
     *
     * @param string $method
     * @param UriInterface|string|null $uri
     *
     * @return RequestInterface
     */
    public function createRequest(string $method, $uri): RequestInterface
    {
    }
}
