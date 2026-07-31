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
 * Receives the request and returns a response. The terminal handler in the
 * pipeline is the Action.
 */
interface Handler
{
    /**
     * @param \Phalcon\Contracts\Http\AttributeRequest $request
     * @return ResponseInterface
     */
    public function __invoke(\Phalcon\Contracts\Http\AttributeRequest $request): ResponseInterface;
}
