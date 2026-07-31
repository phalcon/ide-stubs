<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Emitter;

use Phalcon\ADR\Exceptions\HeadersAlreadySent;
use Phalcon\Contracts\ADR\Emitter\Emitter;
use Phalcon\Http\ResponseInterface;

/**
 * Emits a response through the SAPI (headers + body via `Response::send()`).
 * Refuses to emit once headers have already been sent.
 */
class SapiEmitter implements \Phalcon\Contracts\ADR\Emitter\Emitter
{
    /**
     * @param \Phalcon\Http\ResponseInterface $response
     * @return void
     */
    public function emit(\Phalcon\Http\ResponseInterface $response): void
    {
    }
}
