<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Cli\Console\Exceptions;

use Phalcon\Cli\Console\Exception;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class InvalidModuleDefinition extends Exception
{
    /**
     * @param string|null $name
     * @param string|null $reason
     */
    public function __construct(?string $name = null, ?string $reason = null)
    {
    }
}
