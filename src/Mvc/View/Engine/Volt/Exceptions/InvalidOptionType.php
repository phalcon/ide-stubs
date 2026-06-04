<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\View\Engine\Volt\Exceptions;

use Phalcon\Mvc\View\Engine\Volt\Exception;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class InvalidOptionType extends Exception
{
    /**
     * @param string $option
     * @param string $type
     */
    public function __construct(string $option, string $type)
    {
    }
}
