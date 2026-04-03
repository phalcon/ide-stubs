<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Di;

/**
 * Exceptions thrown in Phalcon\Di will use this class
 */
class Exception extends \Exception
{
    /**
     * @param string $name
     * @return Exception
     */
    public static function serviceCannotBeResolved(string $name): Exception
    {
    }

    /**
     * @param string $name
     * @return Exception
     */
    public static function serviceNotFound(string $name): Exception
    {
    }

    /**
     * @param int $position
     * @return Exception
     */
    public static function unknownServiceInParameter(int $position): Exception
    {
    }

    /**
     * @param string $method
     * @return Exception
     */
    public static function undefinedMethod(string $method): Exception
    {
    }
}
