<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\ADR\Responder;

use Phalcon\Contracts\ADR\Payload\Payload;
use Phalcon\Http\RequestInterface;
use Phalcon\Http\ResponseInterface;

/**
 * Turns a payload into an HTTP response. The only layer that speaks HTTP.
 */
interface Responder
{
    /**
     * @param \Phalcon\Http\RequestInterface $request
     * @param \Phalcon\Http\ResponseInterface $response
     * @param \Phalcon\Contracts\ADR\Payload\Payload $payload
     * @return ResponseInterface
     */
    public function __invoke(\Phalcon\Http\RequestInterface $request, \Phalcon\Http\ResponseInterface $response, \Phalcon\Contracts\ADR\Payload\Payload $payload): ResponseInterface;
}
