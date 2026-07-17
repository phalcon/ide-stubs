<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Exceptions;

use Phalcon\Auth\Exception;

/**
 * Access gate name is not registered
 */
class AccessNotRegistered extends Exception
{
    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
    }
}
