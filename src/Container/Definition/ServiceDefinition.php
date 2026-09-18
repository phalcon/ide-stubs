<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Container\Definition;

use Phalcon\Container\Exceptions\FrozenDefinition;
use Phalcon\Container\Exceptions\InvalidExtender;
use Phalcon\Container\Exceptions\NoClassSet;
use Phalcon\Container\Exceptions\NoFactorySet;
use Phalcon\Contracts\Container\ContainerTypes;
use Phalcon\Contracts\Container\Ioc\IocContainer;
use Phalcon\Contracts\Container\Resolver\Resolvable;
use Phalcon\Contracts\Container\Service\Collection;
use ReflectionClass;
use ReflectionException;

/**
 * @phpstan-import-type container_arguments from ContainerTypes
 * @phpstan-import-type container_extenders from ContainerTypes
 * @phpstan-import-type container_tags from ContainerTypes
 */
class ServiceDefinition
{
    /**
     * @phpstan-var container_arguments
     */
    protected $arguments = [];

    protected ?string $className = null;

    /**
     * @phpstan-var container_arguments
     */
    protected array $constructorArgs = [];

    /**
     * @var object | null
     */
    protected $container = null;

    /**
     * @phpstan-var container_extenders
     */
    protected array $extenders = [];

    /**
     * @var callable | null
     */
    protected $factory = null;

    protected bool $frozen = false;

    protected bool $isCacheable = false;

    /**
     * @var string
     */
    protected $lifetime = ServiceLifetime::SCOPED;

    /**
     * @var mixed
     */
    protected $raw = null;

    protected string $serviceName;

    /**
     * @phpstan-var container_tags
     */
    protected array $tags = [];

    protected string $type;

    /**
     * @param string $serviceName
     * @param string $type
     * @param mixed $raw
     */
    public function __construct(string $serviceName, string $type, $raw = null)
    {
    }

    /**
     * Adds an extender
     *
     * @throws FrozenDefinition
     * @param callable $extender
     * @return static
     */
    public function addExtender($extender): static
    {
    }

    /**
     * Adds a tag
     *
     * @throws FrozenDefinition
     * @param string $tag
     * @return static
     */
    public function addTag(string $tag): static
    {
    }

    /**
     * Builds a service and returns the instance back
     *
     * @throws ReflectionException
     * @param object $container
     * @return object
     */
    public function buildService($container): object
    {
    }

    /**
     * Freezes the container
     *
     * @throws ReflectionException
     * @param object $container
     * @return void
     */
    public function freeze($container): void
    {
    }

    /**
     * Returns the arguments
     *
     * @phpstan-return container_arguments
     * @return array
     */
    public function getArguments(): array
    {
    }

    /**
     * Returns the class
     *
     * @throws NoClassSet
     * @return string
     */
    public function getClass(): string
    {
    }

    /**
     * Returns the constructor arguments
     *
     * @phpstan-return container_arguments
     * @return array
     */
    public function getConstructorArgs(): array
    {
    }

    /**
     * Returns the extenders
     *
     * @phpstan-return container_extenders
     * @return array
     */
    public function getExtenders(): array
    {
    }

    /**
     * Returns the factory
     *
     * @throws NoFactorySet
     * @return mixed
     */
    public function getFactory()
    {
    }

    /**
     * Returns the lifetime
     *
     * @return string
     */
    public function getLifetime(): string
    {
    }

    /**
     * Returns the name of the service
     *
     * @return string
     */
    public function getServiceName(): string
    {
    }

    /**
     * Returns the tags
     *
     * @phpstan-return container_tags
     * @return array
     */
    public function getTags(): array
    {
    }

    /**
     * Returns the type
     *
     * @return string
     */
    public function getType(): string
    {
    }

    /**
     * Does it have a class
     *
     * @return bool
     */
    public function hasClass(): bool
    {
    }

    /**
     * Do we have extenders
     *
     * @return bool
     */
    public function hasExtenders(): bool
    {
    }

    /**
     * Does it have a factory
     *
     * @return bool
     */
    public function hasFactory(): bool
    {
    }

    /**
     * Is it cacheable
     *
     * @return bool
     */
    public function isCacheable(): bool
    {
    }

    /**
     * Is it frozen
     *
     * @return bool
     */
    public function isFrozen(): bool
    {
    }

    /**
     * Set an argument
     *
     * @param int|string $param
     * @param mixed      $value
     *
     * @throws FrozenDefinition
     * @return static
     */
    public function setArgument($param, $value): static
    {
    }

    /**
     * Set a class
     *
     * @param string $className
     *
     * @throws FrozenDefinition
     * @return static
     */
    public function setClass(string $className): static
    {
    }

    /**
     * Set the container
     *
     * @param object $container
     * @return static
     */
    public function setContainer($container): static
    {
    }

    /**
     * Set extenders
     *
     * @phpstan-param container_arguments $extenders
     *
     * @throws FrozenDefinition
     * @throws InvalidExtender
     * @param array $extenders
     * @return static
     */
    public function setExtenders(array $extenders): static
    {
    }

    /**
     * Set a factory
     *
     * @throws FrozenDefinition
     * @param callable $factory
     * @return static
     */
    public function setFactory($factory): static
    {
    }

    /**
     * Set cachable
     *
     * @throws FrozenDefinition
     * @param bool $isCacheable
     * @return static
     */
    public function setIsCacheable(bool $isCacheable): static
    {
    }

    /**
     * Set lifetime
     *
     * @throws FrozenDefinition
     * @param string $lifetime
     * @return static
     */
    public function setLifetime(string $lifetime): static
    {
    }

    /**
     * Unset class
     *
     * @throws FrozenDefinition
     * @return static
     */
    public function unsetClass(): static
    {
    }

    /**
     * Unset extenders
     *
     * @throws FrozenDefinition
     * @return static
     */
    public function unsetExtenders(): static
    {
    }

    /**
     * Unset the factory
     *
     * @throws FrozenDefinition
     * @return static
     */
    public function unsetFactory(): static
    {
    }

    /**
     * Check if frozen
     *
     * @throws FrozenDefinition
     * @return void
     */
    protected function checkFrozen(): void
    {
    }

    /**
     * Resolve arguments
     *
     * @phpstan-param  container_arguments $args
     * @phpstan-return container_arguments
     * @param object $container
     * @param array $args
     * @return array
     */
    private function resolveArgs($container, array $args): array
    {
    }
}
