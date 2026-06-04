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
use Phalcon\Contracts\Container\Resolver\ResolverService;
use ReflectionClass;
use ReflectionException;
use ReflectionFunction;
use ReflectionMethod;
use ReflectionNamedType;
use ReflectionParameter;
use ReflectionType;

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
class Resolver implements \Phalcon\Contracts\Container\Resolver\ResolverService
{
    /**
     * Is this a resolvable class?
     *
     * @param string $className
     *
     * @return bool
     */
    public function isResolvableClass(string $className): bool
    {
    }

    /**
     * Resolve a call
     *
     * @param object   $ioc
     * @param callable $callable
     * @param array    $arguments
     *
     * @return mixed
     * @throws ReflectionException
     * @param callable $callableObject
     */
    public function resolveCall($ioc, $callableObject, array $arguments): mixed
    {
    }

    /**
     * Resolve a class
     *
     * @param object $ioc
     * @param string $className
     * @param array  $arguments
     *
     * @return object
     * @throws ReflectionException
     */
    public function resolveClass($ioc, string $className, array $arguments): object
    {
    }

    /**
     * Resolve a method
     *
     * @param object           $ioc
     * @param ReflectionMethod $method
     * @param object           $object
     *
     * @return void
     * @throws ReflectionException
     * @param object $instance
     */
    public function resolveMethod($ioc, \ReflectionMethod $method, $instance): void
    {
    }

    /**
     * Resolve parameters
     *
     * @param object              $ioc
     * @param ReflectionParameter $parameter
     *
     * @return mixed
     * @throws CannotResolveParameter
     * @throws ReflectionException
     */
    public function resolveParameter($ioc, \ReflectionParameter $parameter): mixed
    {
    }

    /**
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
