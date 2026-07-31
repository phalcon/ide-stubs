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
 * Thrown when a route matches the path but not the request method.
 */
class MethodNotAllowed extends \Phalcon\ADR\Exceptions\Exception
{
    public function __construct()
    {
    }
}
