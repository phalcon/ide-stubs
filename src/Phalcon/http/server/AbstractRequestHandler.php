<?php

namespace Phalcon\Http\Server;

/**
 * Handles a server request and produces a response.
 *
 * An HTTP request handler process an HTTP request in order to produce an
 * HTTP response.
 */
abstract class AbstractRequestHandler implements \Psr\Http\Server\RequestHandlerInterface
{

    /**
     * Handles a request and produces a response.
     *
     * May call other collaborating code to generate the response.
     *
     * @param \Psr\Http\Message\ServerRequestInterface $request
     * @return \Psr\Http\Message\ResponseInterface
     */
    abstract public function handle(\Psr\Http\Message\ServerRequestInterface $request): ResponseInterface;

}
