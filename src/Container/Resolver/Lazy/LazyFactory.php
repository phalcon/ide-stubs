<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Container\Resolver\Lazy;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 *
 * Implementation of this file has been heavily influenced by CapsulePHP.
 * Additionally, there are implementations from ioc-interop, which is a
 * Composer dependency, and from service-interop and resolver-interop. The
 * latter two are copied and re-implemented here: service-interop is not yet
 * published on Packagist, and resolver-interop requires PHP 8.4 (this project
 * targets PHP 8.1). Once both packages become available and compatible, the
 * copies will be replaced with the actual Composer dependencies.
 *
 * @link    https://github.com/capsulephp/di
 * @license https://github.com/capsulephp/di/blob/3.x/LICENSE.md
 *
 * @link    https://github.com/ioc-interop/interface
 * @license https://github.com/ioc-interop/interface/blob/1.x/LICENSE.md
 *
 * @link    https://github.com/service-interop/interface
 * @license https://github.com/service-interop/interface/blob/1.x/LICENSE.md
 *
 * @link    https://github.com/resolver-interop/interface/tree/1.x
 * @license https://github.com/resolver-interop/interface/blob/1.x/LICENSE.md
 */
class LazyFactory
{
    /**
     * @param array<array-key, mixed> $values
     *
     * @return ArrayValues
     */
    public static function arrayValues(array $values): ArrayValues
    {
    }

    /**
     * @param callable $callableObject
     * @return Call
     */
    public static function call($callableObject): Call
    {
    }

    /**
     * @param string $id
     * @return CallableGet
     */
    public static function callableGet(string $id): CallableGet
    {
    }

    /**
     * @param string $id
     * @return CallableNew
     */
    public static function callableNew(string $id): CallableNew
    {
    }

    /**
     * @param string $name
     * @param string|null $type
     * @return CsEnv
     */
    public static function csEnv(string $name, ?string $type = null): CsEnv
    {
    }

    /**
     * @param string $name
     * @param string|null $type
     * @return Env
     */
    public static function env(string $name, ?string $type = null): Env
    {
    }

    /**
     * @param string $name
     * @param mixed $defaultValue
     * @param string|null $type
     * @return EnvDefault
     */
    public static function envDefault(string $name, $defaultValue, ?string $type = null): EnvDefault
    {
    }

    /**
     * @param string                  $function
     * @param array<array-key, mixed> $args
     *
     * @return FunctionCall
     * @param string $functionName
     */
    public static function functionCall(string $functionName, array $args): FunctionCall
    {
    }

    /**
     * @param string $id
     * @return Get
     */
    public static function get(string $id): Get
    {
    }

    /**
     * @param string                  $id
     * @param string                  $method
     * @param array<array-key, mixed> $args
     *
     * @return GetCall
     */
    public static function getCall(string $id, string $method, array $args): GetCall
    {
    }

    /**
     * @param string                  $id
     * @param string                  $method
     * @param array<array-key, mixed> $args
     *
     * @return NewCall
     */
    public static function newCall(string $id, string $method, array $args): NewCall
    {
    }

    /**
     * @param string $id
     * @return NewInstance
     */
    public static function newInstance(string $id): NewInstance
    {
    }

    /**
     * @param string                  $className
     * @param string                  $method
     * @param array<array-key, mixed> $args
     *
     * @return StaticCall
     */
    public static function staticCall(string $className, string $method, array $args): StaticCall
    {
    }
}
