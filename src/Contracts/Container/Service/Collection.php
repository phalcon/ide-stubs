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
use Phalcon\Contracts\Container\ContainerTypes;
use Phalcon\Contracts\Container\Ioc\IocContainer;

/**
 * @phpstan-import-type container_tagged_services from ContainerTypes
 */
interface Collection extends \Phalcon\Contracts\Container\Ioc\IocContainer
{
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
     * @param string $name
     * @return string
     */
    public function getAlias(string $name): string;

    /**
     * @phpstan-return container_tagged_services
     * @param string $tag
     * @return array
     */
    public function getByTag(string $tag): array;

    /**
     * @param string $name
     * @return ServiceDefinition
     */
    public function getDefinition(string $name): ServiceDefinition;

    /**
     * @param string $name
     * @return object
     */
    public function getInstance(string $name): object;

    /**
     * @param string $name
     * @return mixed
     */
    public function getParameter(string $name): mixed;

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
     * @param string $name
     * @return bool
     */
    public function hasAlias(string $name): bool;

    /**
     * @param string $name
     * @return bool
     */
    public function hasDefinition(string $name): bool;

    /**
     * @param string $name
     * @return bool
     */
    public function hasInstance(string $name): bool;

    /**
     * @param string $name
     * @return bool
     */
    public function hasParameter(string $name): bool;

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
     * @return ServiceDefinition
     */
    public function newDefinition(string $name): ServiceDefinition;

    /**
     * @param string $name
     * @param mixed $definition
     * @return ServiceDefinition
     */
    public function set(string $name, $definition): ServiceDefinition;

    /**
     * @param string $name
     * @param string $alias
     * @return static
     */
    public function setAlias(string $name, string $alias): static;

    /**
     * @param bool $enabled
     * @return static
     */
    public function setAutowire(bool $enabled): static;

    /**
     * @param string $name
     * @param \Phalcon\Container\Definition\ServiceDefinition $definition
     * @return static
     */
    public function setDefinition(string $name, \Phalcon\Container\Definition\ServiceDefinition $definition): static;

    /**
     * @param string $name
     * @param object $instance
     * @param string $lifetime
     * @return static
     */
    public function setInstance(string $name, $instance, string $lifetime): static;

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
    public function unsetAlias(string $name): void;

    /**
     * @param string $name
     * @return void
     */
    public function unsetDefinition(string $name): void;

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
     * @return void
     */
    public function unsetParameter(string $name): void;
}
