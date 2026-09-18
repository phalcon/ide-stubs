<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Container\Resolver\Lazy;

use Phalcon\Contracts\Container\ContainerTypes;

/**
 * @phpstan-import-type container_arguments from ContainerTypes
 * @phpstan-import-type container_values from ContainerTypes
 */
class LazyFactory
{
    /**
     * @phpstan-param container_values $values
     *
     * @return ArrayValues
     * @param array $values
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
     * @phpstan-param callable-string     $functionName
     * @phpstan-param container_arguments $args
     *
     * @return FunctionCall
     * @param string $functionName
     * @param array $args
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
     * @phpstan-param container_arguments $args
     *
     * @return GetCall
     * @param string $id
     * @param string $method
     * @param array $args
     */
    public static function getCall(string $id, string $method, array $args): GetCall
    {
    }

    /**
     * @phpstan-param container_arguments $args
     *
     * @return NewCall
     * @param string $id
     * @param string $method
     * @param array $args
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
     * @phpstan-param container_arguments $args
     *
     * @return StaticCall
     * @param string $className
     * @param string $method
     * @param array $args
     */
    public static function staticCall(string $className, string $method, array $args): StaticCall
    {
    }
}
