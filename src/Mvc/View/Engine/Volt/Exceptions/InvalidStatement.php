<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\View\Engine\Volt\Exceptions;

use Phalcon\Contracts\Mvc\MvcTypes;
use Phalcon\Mvc\View\Engine\Volt\Exception;

/**
 * @phpstan-import-type mvc_volt_node from MvcTypes
 */
class InvalidStatement extends Exception
{
    /**
     * @param string $file
     * @param int $line
     * @param array $statement
     */
    public function __construct(string $file, int $line, array $statement)
    {
    }
}
