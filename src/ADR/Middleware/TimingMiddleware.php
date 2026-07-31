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
use Phalcon\Http\ResponseInterface;

/**
 * Adds an `X-Response-Time` header measuring how long the rest of the pipeline
 * took to produce the response.
 */
class TimingMiddleware implements \Phalcon\Contracts\ADR\Middleware
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
