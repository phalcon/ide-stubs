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
class InvalidUserFilterDefinition extends Exception
{
    /**
     * @param string $name
     * @param string $file
     * @param int $line
     */
    public function __construct(string $name, string $file, int $line)
    {
    }
}
