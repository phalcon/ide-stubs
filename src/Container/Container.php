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
use Phalcon\Contracts\Container\ContainerTypes;
use Phalcon\Contracts\Container\Service\Collection;
use Phalcon\Contracts\Container\Service\Enumerable;
use Phalcon\Di\InjectionAwareInterface;
use ReflectionException;

/**
 * @phpstan-import-type container_aliases from ContainerTypes
 * @phpstan-import-type container_instance_lifetimes from ContainerTypes
 * @phpstan-import-type container_instances from ContainerTypes
 * @phpstan-import-type container_parameters from ContainerTypes
 * @phpstan-import-type container_processors from ContainerTypes
 * @phpstan-import-type container_service_names from ContainerTypes
 * @phpstan-import-type container_service_tags from ContainerTypes
 * @phpstan-import-type container_services from ContainerTypes
 * @phpstan-import-type container_tagged_services from ContainerTypes
 */
class Container implements \Phalcon\Contracts\Container\Service\Collection, \Phalcon\Contracts\Container\Service\Enumerable
{
    /**
     * @phpstan-var container_aliases
     */
    protected array $aliases = [];

    protected bool $autowire = true;

    /**
     * @phpstan-var container_instance_lifetimes
     */
    protected array $instanceLifetimes = [];

    /**
     * @phpstan-var container_instances
     */
    protected array $instances = [];

    /**
     * @phpstan-var container_parameters
     */
    protected array $parameters = [];

    /**
     * @phpstan-var container_processors
     */
    protected array $processors = [];

    protected \Phalcon\Container\Resolver\Resolver $resolver;

    /**
     * @phpstan-var container_services
     */
    protected array $services = [];

    /**
     * @phpstan-var container_service_tags
     */
    protected array $tags = [];

    public function __construct()
    {
    }

    /**
     * Bind an interface to a concrete class
     *
     * @param string $interfaceName
     * @param string $concrete
     * @return ServiceDefinition
     */
    public function bind(string $interfaceName, string $concrete): ServiceDefinition
    {
    }

    /**
     * Resolve to a closure on a get()
     *
     * @param string $name
     * @return Closure
     */
    public function callableGet(string $name): Closure
    {
    }

    /**
     * Resolve to a closure on a new()
     *
     * @param string $name
     * @return Closure
     */
    public function callableNew(string $name): Closure
    {
    }

    /**
     * Extends the definition
     *
     * @throws CannotExtendResolved
     * @throws ServiceNotFound
     * @param string $name
     * @param callable $callableObject
     * @return void
     */
    public function extend(string $name, $callableObject): void
    {
    }

    /**
     * Resolve and return an element registerd in the container
     *
     * @throws ServiceNotFound
     * @param string $name
     * @return mixed
     */
    public function get(string $name): mixed
    {
    }

    /**
     * Return an alias
     *
     * @param string $name
     * @return string
     */
    public function getAlias(string $name): string
    {
    }

    /**
     * Return services by tag
     *
     * @phpstan-return container_tagged_services
     * @param string $tag
     * @return array
     */
    public function getByTag(string $tag): array
    {
    }

    /**
     * Return the service definition
     *
     * @throws ServiceNotFound
     * @param string $name
     * @return ServiceDefinition
     */
    public function getDefinition(string $name): ServiceDefinition
    {
    }

    /**
     * Return a stored instance
     *
     * @throws InstanceNotFound
     * @param string $name
     * @return object
     */
    public function getInstance(string $name): object
    {
    }

    /**
     * Return a parameter
     *
     * @throws ParameterNotFound
     * @param string $name
     * @return mixed
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
     * @throws ServiceNotFound
     * @throws ServiceNotRegistered
     * @param string $serviceName
     * @return object
     */
    public function getService(string $serviceName): object
    {
    }

    /**
     * Returns the names of every registered service definition. Names that
     * only exist as an alias, a pre-set instance or a parameter are not
     * included.
     *
     * @phpstan-return container_service_names
     * @return array
     */
    public function getServiceNames(): array
    {
    }

    /**
     * Does the container have a particular service
     *
     * @throws CircularAliasFound
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Does the service have an alias
     *
     * @param string $name
     * @return bool
     */
    public function hasAlias(string $name): bool
    {
    }

    /**
     * Does the service have a definition
     *
     * @param string $name
     * @return bool
     */
    public function hasDefinition(string $name): bool
    {
    }

    /**
     * Does the service have an instance
     *
     * @param string $name
     * @return bool
     */
    public function hasInstance(string $name): bool
    {
    }

    /**
     * Does the service have a parameter
     *
     * @param string $name
     * @return bool
     */
    public function hasParameter(string $name): bool
    {
    }

    /**
     * Does the container have a particular service
     *
     * @throws CircularAliasFound
     * @param string $serviceName
     * @return bool
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
     * @throws CircularAliasFound
     * @throws ReflectionException
     * @throws ServiceNotFound
     * @param string $name
     * @return mixed
     */
    public function new(string $name): mixed
    {
    }

    /**
     * Return a new service definition
     *
     * @param string $name
     * @return ServiceDefinition
     */
    public function newDefinition(string $name): ServiceDefinition
    {
    }

    /**
     * Set a service
     *
     * @throws NoProcessorFound
     * @param string $name
     * @param mixed $definition
     * @return ServiceDefinition
     */
    public function set(string $name, $definition): ServiceDefinition
    {
    }

    /**
     * Set an alias
     *
     * @throws CircularAliasFound
     * @param string $name
     * @param string $alias
     * @return static
     */
    public function setAlias(string $name, string $alias): static
    {
    }

    /**
     * Set AutoWire
     *
     * @param bool $enabled
     * @return static
     */
    public function setAutowire(bool $enabled): static
    {
    }

    /**
     * Set a definition
     *
     * @param string $name
     * @param \Phalcon\Container\Definition\ServiceDefinition $definition
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
     * @return static
     */
    public function setInstance(string $name, $instance, string $lifetime): static
    {
    }

    /**
     * Set a parameter
     *
     * @param string $name
     * @param mixed $value
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
     * @return void
     */
    public function setTag(string $tag, string $serviceName): void
    {
    }

    /**
     * Remove an alias
     *
     * @param string $name
     * @return void
     */
    public function unsetAlias(string $name): void
    {
    }

    /**
     * Remove a definition
     *
     * @param string $name
     * @return void
     */
    public function unsetDefinition(string $name): void
    {
    }

    /**
     * Remove an instance
     *
     * @param string $name
     * @return void
     */
    public function unsetInstance(string $name): void
    {
    }

    /**
     * Remove instances based on lifetime
     *
     * @param string $lifetime
     * @return void
     */
    public function unsetInstances(string $lifetime): void
    {
    }

    /**
     * Remove a parameter
     *
     * @param string $name
     * @return void
     */
    public function unsetParameter(string $name): void
    {
    }

    /**
     * Detect circular aliases
     *
     * @throws CircularAliasFound
     * @param string $alias
     * @param string $target
     * @return void
     */
    private function detectCircularAlias(string $alias, string $target): void
    {
    }

    /**
     * Locate a processor
     *
     * @throws NoProcessorFound
     * @param mixed $definition
     * @return Processor
     */
    private function findProcessor($definition): Processor
    {
    }

    /**
     * Resolve the service
     *
     * @throws ServiceNotFound
     * @throws ReflectionException
     * @param string $name
     * @param bool $cache
     * @return mixed
     */
    private function resolve(string $name, bool $cache): mixed
    {
    }

    /**
     * Resolve an alias
     *
     * @throws CircularAliasFound
     * @param string $name
     * @return string
     */
    private function resolveAlias(string $name): string
    {
    }

    /**
     * Resolve a paramater
     *
     * @param string $name
     * @return mixed
     */
    private function resolveParameter(string $name): mixed
    {
    }
}
