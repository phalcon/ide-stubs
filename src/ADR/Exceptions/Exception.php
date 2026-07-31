<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Exceptions;

use Exception as BaseException;
use Phalcon\Contracts\ADR\Exceptions\ADRThrowable;

/**
 * Generic exception for the ADR component, and the base for every typed ADR
 * exception.
 */
class Exception extends \Exception implements \Phalcon\Contracts\ADR\Exceptions\ADRThrowable
{
}
