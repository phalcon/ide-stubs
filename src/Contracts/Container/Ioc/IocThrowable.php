<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Container\Ioc;

use Throwable;

/**
 * [_IocThrowable_][] extends [_Throwable_][] to mark an [_Exception_][] as
 * IOC-related.
 *
 * It adds no class members.
 */
interface IocThrowable extends \Throwable
{
}
