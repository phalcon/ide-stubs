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
 * Thin enabler for the native `_method` override.
 *
 * `Request::getMethod()` already honors `X-HTTP-Method-Override` and, when the
 * parameter-override flag is on, the `_method` field. This middleware only
 * turns that flag on, and only for a `POST` request whose `_method` names a
 * safe verb (`PUT`/`PATCH`/`DELETE`), so `_method` cannot spoof an arbitrary
 * method.
 */
class MethodOverrideMiddleware implements \Phalcon\Contracts\ADR\Middleware
{
    /**
     * @var array<int, string>
     */
    protected array $allowed = ['DELETE', 'PATCH', 'PUT'];

    /**
     * @param \Phalcon\Contracts\Http\AttributeRequest $request
     * @param \Phalcon\Contracts\ADR\Handler $next
     * @return ResponseInterface
     */
    public function __invoke(\Phalcon\Contracts\Http\AttributeRequest $request, \Phalcon\Contracts\ADR\Handler $next): ResponseInterface
    {
    }
}
