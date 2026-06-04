<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Auth\Access;

use Phalcon\Contracts\Auth\Access\Access;
use Phalcon\Support\AbstractLocator;

/**
 * Service locator for Phalcon\Auth access gates. Utilizes the container to
 * obtain the service. For the Phalcon\Container\Container one can use
 * autowiring. For the Phalcon\Di\Di, one needs to register the gates in it
 * to be used here.
 *
 * @extends AbstractLocator<Access>
 *
 */
class AccessLocator extends AbstractLocator
{
    /**
     * @return class-string<\Throwable>
     */
    protected function getExceptionClass(): string
    {
    }

    /**
     * @return class-string
     */
    protected function getInterfaceClass(): string
    {
    }

    /**
     * @return array<string, class-string<Access>>
     */
    protected function getServices(): array
    {
    }
}
