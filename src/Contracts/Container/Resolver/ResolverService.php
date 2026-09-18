<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Container\Resolver;

use Phalcon\Contracts\Container\ContainerTypes;
use Phalcon\Contracts\Container\Ioc\IocContainer;
use ReflectionMethod;
use ReflectionParameter;
use ReflectionType;

/**
 * @phpstan-import-type container_arguments from ContainerTypes
 * @phpstan-import-type container_reflection_parameters from ContainerTypes
 * @phpstan-import-type container_resolved_arguments from ContainerTypes
 */
interface ResolverService extends \Phalcon\Contracts\Container\Resolver\ReflectionParameterResolver
{
    /**
     * @param string $className
     * @return bool
     */
    public function isResolvableClass(string $className): bool;

    /**
     * @phpstan-param container_arguments $arguments
     * @param \Phalcon\Contracts\Container\Ioc\IocContainer $ioc
     * @param callable $callableObject
     * @param array $arguments
     * @return mixed
     */
    public function resolveCall(\Phalcon\Contracts\Container\Ioc\IocContainer $ioc, $callableObject, array $arguments): mixed;

    /**
     * @phpstan-param class-string         $className
     * @phpstan-param container_arguments $arguments
     * @param \Phalcon\Contracts\Container\Ioc\IocContainer $ioc
     * @param string $className
     * @param array $arguments
     * @return object
     */
    public function resolveClass(\Phalcon\Contracts\Container\Ioc\IocContainer $ioc, string $className, array $arguments): object;

    /**
     * @param \Phalcon\Contracts\Container\Ioc\IocContainer $ioc
     * @param \ReflectionMethod $method
     * @param object $instance
     * @return void
     */
    public function resolveMethod(\Phalcon\Contracts\Container\Ioc\IocContainer $ioc, \ReflectionMethod $method, $instance): void;

    /**
     * @phpstan-param container_reflection_parameters $parameters
     * @phpstan-param container_arguments             $arguments
     *
     * @phpstan-return container_resolved_arguments
     * @param \Phalcon\Contracts\Container\Ioc\IocContainer $ioc
     * @param array $parameters
     * @param array $arguments
     * @return array
     */
    public function resolveParameters(\Phalcon\Contracts\Container\Ioc\IocContainer $ioc, array $parameters, array $arguments): array;

    /**
     * @param \Phalcon\Contracts\Container\Ioc\IocContainer $ioc
     * @param \ReflectionType $type
     * @return mixed
     */
    public function resolveType(\Phalcon\Contracts\Container\Ioc\IocContainer $ioc, \ReflectionType $type): mixed;
}
