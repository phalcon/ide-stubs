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
 * Handles a request end to end: routes it, dispatches the Action and returns
 * the response, routing any error through the error responder.
 */
interface Application
{
    /**
     * @param \Phalcon\Contracts\Http\AttributeRequest $request
     * @return ResponseInterface
     */
    public function handle(\Phalcon\Contracts\Http\AttributeRequest $request): ResponseInterface;
}
