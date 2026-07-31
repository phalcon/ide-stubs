<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Middleware;

use Phalcon\Contracts\ADR\Handler;
use Phalcon\Contracts\ADR\Middleware;
use Phalcon\Contracts\Http\AttributeRequest;
use Phalcon\Http\Request\Bag\AttributeBag;
use Phalcon\Http\ResponseInterface;

/**
 * Ensures every request carries an `X-Request-Id`, reusing an incoming one or
 * generating it, exposing it on the request attributes and the response.
 */
class RequestIdMiddleware implements \Phalcon\Contracts\ADR\Middleware
{
    /**
     * @param \Phalcon\Contracts\Http\AttributeRequest $request
     * @param \Phalcon\Contracts\ADR\Handler $next
     * @return ResponseInterface
     */
    public function __invoke(\Phalcon\Contracts\Http\AttributeRequest $request, \Phalcon\Contracts\ADR\Handler $next): ResponseInterface
    {
    }
}
