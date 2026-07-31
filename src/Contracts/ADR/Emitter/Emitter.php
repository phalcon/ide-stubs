<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\ADR\Emitter;

use Phalcon\Http\ResponseInterface;

/**
 * Sends a response to the client. Called by the front controller only.
 */
interface Emitter
{
    /**
     * @param \Phalcon\Http\ResponseInterface $response
     * @return void
     */
    public function emit(\Phalcon\Http\ResponseInterface $response): void;
}
