<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Container;

use Closure;
use Phalcon\Container\Definition\Processor\ClosureProcessor;
use Phalcon\Container\Definition\Processor\ObjectProcessor;
use Phalcon\Container\Definition\Processor\Processor;
use Phalcon\Container\Definition\Processor\StringProcessor;
use Phalcon\Container\Definition\ServiceDefinition;
use Phalcon\Container\Definition\ServiceLifetime;
use Phalcon\Container\Exceptions\CannotExtendResolved;
use Phalcon\Container\Exceptions\CircularAliasFound;
use Phalcon\Container\Exceptions\InstanceNotFound;
use Phalcon\Container\Exceptions\NoProcessorFound;
use Phalcon\Container\Exceptions\ParameterNotFound;
use Phalcon\Container\Exceptions\ServiceNotFound;
use Phalcon\Container\Exceptions\ServiceNotRegistered;
use Phalcon\Container\Resolver\Lazy\Lazy;
use Phalcon\Container\Resolver\Resolver;
use Phalcon\Contracts\Container\Service\Collection;
use Phalcon\Di\InjectionAwareInterface;
use ReflectionException;

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
class Container implements \Phalcon\Contracts\Container\Service\Collection
{
    /**
     * @var array<string, string>
     */
    protected $aliases = [];

    /**
     * @var bool
     */
    protected $autowire = true;

    /**
     * @var array<string, string>
     */
    protected $instanceLifetimes = [];

    /**
     * @var array<string, object>
     */
    protected $instances = [];

    /**
     * @var array<string, mixed>
     */
    protected $parameters = [];

    /**
     * @var array<string, Processor>
     */
    protected $processors = [];

    /**
     * @var Resolver
     */
    protected $resolver;

    /**
     * @var array<string, ServiceDefinition>
     */
    protected $services = [];

    /**
     * @var array<string, list<string>>
     */
    protected $tags = [];

    public function __construct()
    {
    }

    /**
     * Bind an interface to a concrete class
     *
     * @param string $interface
     * @param string $concrete
     *
     * @return ServiceDefinition
     * @param string $interfaceName
     */
    public function bind(string $interfaceName, string $concrete): ServiceDefinition
    {
    }

    /**
     * Resolve to a closure on a get()
     *
     * @param string $name
     *
     * @return Closure
     */
    public function callableGet(string $name): Closure
    {
    }

    /**
     * Resolve to a closure on a new()
     *
     * @param string $name
     *
     * @return Closure
     */
    public function callableNew(string $name): Closure
    {
    }

    /**
     * Extends the definition
     *
     * @param string   $name
     * @param callable $callable
     *
     * @return void
     * @throws CannotExtendResolved
     * @throws ServiceNotFound
     * @param callable $callableObject
     */
    public function extend(string $name, $callableObject): void
    {
    }

    /**
     * Resolve and return an element registerd in the container
     *
     * @param string $name
     *
     * @return mixed
     * @throws ServiceNotFound
     */
    public function get(string $name): mixed
    {
    }

    /**
     * Return an alias
     *
     * @param string $name
     *
     * @return string
     */
    public function getAlias(string $name): string
    {
    }

    /**
     * Return services by tag
     *
     * @param string $tag
     *
     * @return list<mixed>
     */
    public function getByTag(string $tag): array
    {
    }

    /**
     * Return the service definition
     *
     * @param string $name
     *
     * @return ServiceDefinition
     * @throws ServiceNotFound
     */
    public function getDefinition(string $name): ServiceDefinition
    {
    }

    /**
     * Return a stored instance
     *
     * @param string $name
     *
     * @return object
     * @throws InstanceNotFound
     */
    public function getInstance(string $name): object
    {
    }

    /**
     * Return a parameter
     *
     * @param string $name
     *
     * @return mixed
     * @throws ParameterNotFound
     */
    public function getParameter(string $name): mixed
    {
    }

    /**
     * Return the resolver
     *
     * @return Resolver
     */
    public function getResolver(): Resolver
    {
    }

    /**
     * Resolve an return a service
     *
     * @param string $serviceName
     *
     * @return object
     * @throws ServiceNotFound
     * @throws ServiceNotRegistered
     */
    public function getService(string $serviceName): object
    {
    }

    /**
     * Does the container have a particular service
     *
     * @param string $name
     *
     * @return bool
     * @throws CircularAliasFound
     */
    public function has(string $name): bool
    {
    }

    /**
     * Does the service have an alias
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasAlias(string $name): bool
    {
    }

    /**
     * Does the service have a definition
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasDefinition(string $name): bool
    {
    }

    /**
     * Does the service have an instance
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasInstance(string $name): bool
    {
    }

    /**
     * Does the service have a parameter
     *
     * @param string $name
     *
     * @return bool
     */
    public function hasParameter(string $name): bool
    {
    }

    /**
     * Does the container have a particular service
     *
     * @param string $serviceName
     *
     * @return bool
     * @throws CircularAliasFound
     */
    public function hasService(string $serviceName): bool
    {
    }

    /**
     * Is AutoWiring enabled
     *
     * @return bool
     */
    public function isAutowireEnabled(): bool
    {
    }

    /**
     * Resolve and return a new service
     *
     * @param string $name
     *
     * @return mixed
     * @throws CircularAliasFound
     * @throws ReflectionException
     * @throws ServiceNotFound
     */
    public function new(string $name): mixed
    {
    }

    /**
     * Return a new service definition
     *
     * @param string $name
     *
     * @return ServiceDefinition
     */
    public function newDefinition(string $name): ServiceDefinition
    {
    }

    /**
     * Set a service
     *
     * @param string $name
     * @param mixed  $definition
     *
     * @return ServiceDefinition
     * @throws NoProcessorFound
     */
    public function set(string $name, $definition): ServiceDefinition
    {
    }

    /**
     * Set an alias
     *
     * @param string $name
     * @param string $alias
     *
     * @return static
     * @throws CircularAliasFound
     */
    public function setAlias(string $name, string $alias): static
    {
    }

    /**
     * Set AutoWire
     *
     * @param bool $enabled
     *
     * @return static
     */
    public function setAutowire(bool $enabled): static
    {
    }

    /**
     * Set a definition
     *
     * @param string            $name
     * @param ServiceDefinition $definition
     *
     * @return static
     */
    public function setDefinition(string $name, \Phalcon\Container\Definition\ServiceDefinition $definition): static
    {
    }

    /**
     * Set an instance
     *
     * @param string $name
     * @param object $instance
     * @param string $lifetime
     *
     * @return static
     */
    public function setInstance(string $name, $instance, string $lifetime): static
    {
    }

    /**
     * Set a parameter
     *
     * @param string $name
     * @param mixed  $value
     *
     * @return static
     */
    public function setParameter(string $name, $value): static
    {
    }

    /**
     * Register a tag with a service
     *
     * @param string $tag
     * @param string $serviceName
     *
     * @return void
     */
    public function setTag(string $tag, string $serviceName): void
    {
    }

    /**
     * Remove an alias
     *
     * @param string $name
     *
     * @return void
     */
    public function unsetAlias(string $name): void
    {
    }

    /**
     * Remove a definition
     *
     * @param string $name
     *
     * @return void
     */
    public function unsetDefinition(string $name): void
    {
    }

    /**
     * Remove an instance
     *
     * @param string $name
     *
     * @return void
     */
    public function unsetInstance(string $name): void
    {
    }

    /**
     * Remove instances based on lifetime
     *
     * @param string $lifetime
     *
     * @return void
     */
    public function unsetInstances(string $lifetime): void
    {
    }

    /**
     * Remove a parameter
     *
     * @param string $name
     *
     * @return void
     */
    public function unsetParameter(string $name): void
    {
    }

    /**
     * Detect circular aliases
     *
     * @param string $alias
     * @param string $target
     *
     * @return void
     * @throws CircularAliasFound
     */
    private function detectCircularAlias(string $alias, string $target): void
    {
    }

    /**
     * Locate a processor
     *
     * @param mixed $definition
     *
     * @return Processor
     * @throws NoProcessorFound
     */
    private function findProcessor($definition): Processor
    {
    }

    /**
     * Resolve the service
     *
     * @param string $name
     * @param bool   $cache
     *
     * @return mixed
     * @throws ServiceNotFound
     * @throws ReflectionException
     */
    private function resolve(string $name, bool $cache): mixed
    {
    }

    /**
     * Resolve an alias
     *
     * @param string $name
     *
     * @return string
     * @throws CircularAliasFound
     */
    private function resolveAlias(string $name): string
    {
    }

    /**
     * Resolve a paramater
     *
     * @param string $name
     *
     * @return mixed
     */
    private function resolveParameter(string $name): mixed
    {
    }
}
