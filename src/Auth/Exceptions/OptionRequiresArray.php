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
 * Option must be a non-empty array
 */
class OptionRequiresArray extends Exception
{
    /**
     * @param string $context
     * @param string $key
     */
    public function __construct(string $context, string $key)
    {
    }
}
