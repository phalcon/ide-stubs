<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Exceptions;

/**
 * Thrown when the emitter is asked to send a response after headers have
 * already been sent.
 */
class HeadersAlreadySent extends \Phalcon\ADR\Exceptions\Exception
{
    public function __construct()
    {
    }
}
