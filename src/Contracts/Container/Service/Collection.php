<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Container\Service;

use Closure;
use Phalcon\Container\Definition\ServiceDefinition;
use Phalcon\Container\Resolver\Resolver;
use Phalcon\Contracts\Container\Ioc\IocContainer;

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
interface Collection extends \Phalcon\Contracts\Container\Ioc\IocContainer
{
    /**
     * @param string $name
     * @return string
     */
    public function getAlias(string $name): string;

    /**
     * @param string $name
     * @return bool
     */
    public function hasAlias(string $name): bool;

    /**
     * @param string $name
     * @param string $alias
     * @return static
     */
    public function setAlias(string $name, string $alias): static;

    /**
     * @param string $name
     * @return void
     */
    public function unsetAlias(string $name): void;

    /**
     * @param string $name
     * @return ServiceDefinition
     */
    public function getDefinition(string $name): ServiceDefinition;

    /**
     * @param string $name
     * @return bool
     */
    public function hasDefinition(string $name): bool;

    /**
     * @param string $name
     * @return ServiceDefinition
     */
    public function newDefinition(string $name): ServiceDefinition;

    /**
     * @param string $name
     * @param \Phalcon\Container\Definition\ServiceDefinition $definition
     * @return static
     */
    public function setDefinition(string $name, \Phalcon\Container\Definition\ServiceDefinition $definition): static;

    /**
     * @param string $name
     * @return void
     */
    public function unsetDefinition(string $name): void;

    /**
     * @param string $name
     * @return object
     */
    public function getInstance(string $name): object;

    /**
     * @param string $name
     * @return bool
     */
    public function hasInstance(string $name): bool;

    /**
     * @param string $name
     * @param object $instance
     * @param string $lifetime
     * @return static
     */
    public function setInstance(string $name, $instance, string $lifetime): static;

    /**
     * @param string $name
     * @return void
     */
    public function unsetInstance(string $name): void;

    /**
     * @param string $lifetime
     * @return void
     */
    public function unsetInstances(string $lifetime): void;

    /**
     * @param string $name
     * @return mixed
     */
    public function getParameter(string $name): mixed;

    /**
     * @param string $name
     * @return bool
     */
    public function hasParameter(string $name): bool;

    /**
     * @param string $name
     * @param mixed $value
     * @return static
     */
    public function setParameter(string $name, $value): static;

    /**
     * @param string $name
     * @return void
     */
    public function unsetParameter(string $name): void;

    /**
     * @param string $interfaceName
     * @param string $concrete
     * @return ServiceDefinition
     */
    public function bind(string $interfaceName, string $concrete): ServiceDefinition;

    /**
     * @param string $name
     * @return Closure
     */
    public function callableGet(string $name): Closure;

    /**
     * @param string $name
     * @return Closure
     */
    public function callableNew(string $name): Closure;

    /**
     * @param string $name
     * @param callable $callableObject
     * @return void
     */
    public function extend(string $name, $callableObject): void;

    /**
     * @param string $name
     * @return mixed
     */
    public function get(string $name): mixed;

    /**
     * @param string $tag
     * @return array
     */
    public function getByTag(string $tag): array;

    /**
     * @return Resolver
     */
    public function getResolver(): Resolver;

    /**
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool;

    /**
     * @return bool
     */
    public function isAutowireEnabled(): bool;

    /**
     * @param string $name
     * @return mixed
     */
    public function new(string $name): mixed;

    /**
     * @param string $name
     * @param mixed $definition
     * @return ServiceDefinition
     */
    public function set(string $name, $definition): ServiceDefinition;

    /**
     * @param bool $enabled
     * @return static
     */
    public function setAutowire(bool $enabled): static;
}
