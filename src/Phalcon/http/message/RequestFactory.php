<?php

namespace Phalcon\Http\Message;

/**
 * PSR-17 RequestFactory
 */
final class RequestFactory implements \Psr\Http\Message\RequestFactoryInterface
{

    /**
     * Create a new request.
     *
     * @param UriInterface|string|null $uri
     *
     * @param string $method
     * @param mixed $uri
     * @return \Psr\Http\Message\RequestInterface
     */
    public function createRequest(string $method, $uri): RequestInterface {}

}
