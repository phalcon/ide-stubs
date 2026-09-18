<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Container\Resolver;

use Closure;
use Phalcon\Container\Exceptions\CannotResolveParameter;
use Phalcon\Container\Resolver\Lazy\Lazy;
use Phalcon\Contracts\Container\ContainerTypes;
use Phalcon\Contracts\Container\Resolver\ResolverService;
use Phalcon\Contracts\Container\Service\Collection;
use ReflectionClass;
use ReflectionException;
use ReflectionFunction;
use ReflectionMethod;
use ReflectionNamedType;
use ReflectionParameter;
use ReflectionType;

/**
 * @phpstan-import-type container_arguments from ContainerTypes
 * @phpstan-import-type container_reflection_parameters from ContainerTypes
 * @phpstan-import-type container_resolved_arguments from ContainerTypes
 */
class Resolver implements \Phalcon\Contracts\Container\Resolver\ResolverService
{
    /**
     * Is this a resolvable class?
     *
     * @param string $className
     * @return bool
     */
    public function isResolvableClass(string $className): bool
    {
    }

    /**
     * Resolve a call
     *
     * @phpstan-param container_arguments $arguments
     *
     * @return mixed
     * @throws ReflectionException
     * @param object $ioc
     * @param callable $callableObject
     * @param array $arguments
     */
    public function resolveCall($ioc, $callableObject, array $arguments): mixed
    {
    }

    /**
     * Resolve a class
     *
     * @phpstan-param class-string        $className
     * @phpstan-param container_arguments $arguments
     *
     * @throws ReflectionException
     * @param object $ioc
     * @param string $className
     * @param array $arguments
     * @return object
     */
    public function resolveClass($ioc, string $className, array $arguments): object
    {
    }

    /**
     * Resolve a method
     *
     * @throws ReflectionException
     * @param object $ioc
     * @param \ReflectionMethod $method
     * @param object $instance
     * @return void
     */
    public function resolveMethod($ioc, \ReflectionMethod $method, $instance): void
    {
    }

    /**
     * Resolve parameters
     *
     * @throws CannotResolveParameter
     * @throws ReflectionException
     * @param object $ioc
     * @param \ReflectionParameter $parameter
     * @return mixed
     */
    public function resolveParameter($ioc, \ReflectionParameter $parameter): mixed
    {
    }

    /**
     * Resolve parameters
     *
     * @phpstan-param container_reflection_parameters $parameters
     * @phpstan-param container_arguments             $arguments
     *
     * @phpstan-return container_resolved_arguments
     * @throws CannotResolveParameter
     * @throws ReflectionException
     * @param object $ioc
     * @param array $parameters
     * @param array $arguments
     * @return array
     */
    public function resolveParameters($ioc, array $parameters, array $arguments): array
    {
    }

    /**
     * type is ReflectionType
     *
     * @param object $ioc
     * @param mixed $type
     * @return mixed
     */
    public function resolveType($ioc, $type): mixed
    {
    }

    /**
     * @param object $ioc
     * @param mixed $arg
     * @return mixed
     */
    private function resolveArg($ioc, $arg): mixed
    {
    }
}
