<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Container\Resolver;

use Phalcon\Contracts\Container\Ioc\IocContainer;
use ReflectionMethod;
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
 * Composer dependency, and from service-interop and resolver-interop. They
 * are copied and re-implemented here because we need to support PHP 8.1.
 * Once we move to min 8.4 and packages become available and compatible, the
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
interface ResolverService extends \Phalcon\Contracts\Container\Resolver\ReflectionParameterResolver
{
    /**
     * @param string $className
     * @return bool
     */
    public function isResolvableClass(string $className): bool;

    /**
     * @param \Phalcon\Contracts\Container\Ioc\IocContainer $ioc
     * @param callable $callableObject
     * @param array $arguments
     * @return mixed
     */
    public function resolveCall(\Phalcon\Contracts\Container\Ioc\IocContainer $ioc, $callableObject, array $arguments): mixed;

    /**
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
