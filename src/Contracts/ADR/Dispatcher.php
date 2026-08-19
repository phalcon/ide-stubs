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
 * Resolves an Action by class name, builds the middleware pipeline around it and
 * runs it to produce a response.
 *
 * @phpstan-import-type adr_middleware_names from ADRTypes
 */
interface Dispatcher
{
    /**
     * @phpstan-param class-string          $actionClass
     * @phpstan-param adr_middleware_names  $routeMiddleware
     * @param string $actionClass
     * @param \Phalcon\Contracts\Http\AttributeRequest $request
     * @param array $routeMiddleware
     * @return ResponseInterface
     */
    public function dispatch(string $actionClass, \Phalcon\Contracts\Http\AttributeRequest $request, array $routeMiddleware = []): ResponseInterface;
}
