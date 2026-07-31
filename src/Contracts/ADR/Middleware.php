<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\ADR;

use Phalcon\Contracts\Http\AttributeRequest;
use Phalcon\Http\ResponseInterface;

/**
 * Wraps the handler chain. Middleware may pass the request through to the next
 * handler, decorate the response, short-circuit by returning its own response,
 * or throw to route through the error responder.
 */
interface Middleware
{
    /**
     * @param \Phalcon\Contracts\Http\AttributeRequest $request
     * @param Handler $next
     * @return ResponseInterface
     */
    public function __invoke(\Phalcon\Contracts\Http\AttributeRequest $request, Handler $next): ResponseInterface;
}
