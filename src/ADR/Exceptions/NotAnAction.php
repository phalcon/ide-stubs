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
 * Thrown when the dispatcher resolves a class that is not an ADR Action.
 */
class NotAnAction extends \Phalcon\ADR\Exceptions\Exception
{
    /**
     * @param string $className
     */
    public function __construct(string $className = '')
    {
    }
}
