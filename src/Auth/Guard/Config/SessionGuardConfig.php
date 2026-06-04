<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Guard\Config;

use Phalcon\Auth\Exception;
use Phalcon\Auth\Exceptions\ConfigRequiresNonEmptyValue;

/**
 * Configuration for the Session guard. Holds the names under which the
 * session key and remember-me cookie are stored. Defaults to 'auth' and
 * 'remember'; multi-guard apps can pass a $suffix ('web', 'admin', ...)
 * to derive 'auth_web' / 'remember_web' style names, or override either
 * full name explicitly.
 */
class SessionGuardConfig extends \Phalcon\Auth\Guard\Config\AbstractGuardConfig
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $rememberName;

    /**
     * @throws Exception
     * @param string|null $suffix
     * @param string|null $name
     * @param string|null $rememberName
     */
    public function __construct(?string $suffix = null, ?string $name = null, ?string $rememberName = null)
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * @return string
     */
    public function getRememberName(): string
    {
    }

    /**
     * @param string $prefix
     * @param string|null $suffix
     * @return string
     */
    private function derive(string $prefix, ?string $suffix = null): string
    {
    }

    /**
     * @throws Exception
     * @param string $param
     * @param string|null $value
     * @return void
     */
    private function validateNonEmpty(string $param, ?string $value = null): void
    {
    }
}
