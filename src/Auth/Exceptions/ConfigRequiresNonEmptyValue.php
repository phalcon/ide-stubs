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
 * Config requires non-empty value
 */
class ConfigRequiresNonEmptyValue extends Exception
{
    /**
     * @param string $configName
     * @param string $configKey
     * @param string $suffix
     */
    public function __construct(string $configName, string $configKey, string $suffix = '')
    {
    }
}
