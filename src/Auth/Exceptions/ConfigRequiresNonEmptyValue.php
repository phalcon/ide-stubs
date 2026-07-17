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

    /**
     * Throws when the value is an empty string. A null value is treated as
     * "not provided" and passes, so optional settings can reuse the same
     * guard; callers that require presence reject null earlier. Keeps the
     * empty-value check shared by every config class in one place.
     *
     * @throws self
     * @param mixed $value
     * @param string $configName
     * @param string $configKey
     * @param string $suffix
     * @return void
     */
    public static function assert($value, string $configName, string $configKey, string $suffix = ''): void
    {
    }
}
