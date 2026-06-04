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
use ReflectionClass;
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
class ServiceDefinition
{
    /**
     * @phpstan-var array<array-key, mixed>
     * @var array
     */
    protected $arguments = [];

    /**
     * @var object | null
     */
    protected $container = null;

    /**
     * @var string | null
     */
    protected $className = null;

    /**
     * @var array
     */
    protected $constructorArgs = [];

    /**
     * @var array<array-key, callable>
     */
    protected $extenders = [];

    /**
     * @var callable | null
     */
    protected $factory = null;

    /**
     * @var bool
     */
    protected $frozen = false;

    /**
     * @var bool
     */
    protected $isCacheable = false;

    /**
     * @var string
     */
    protected $lifetime = ServiceLifetime::SCOPED;

    /**
     * @var mixed
     */
    protected $raw = null;

    /**
     * @var string
     */
    protected $serviceName;

    /**
     * @phpstan-var array<array-key, string>
     * @var array
     */
    protected $tags = [];

    /**
     * @var string
     */
    protected $type;

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
     * @param callable $extender
     *
     * @return static
     * @throws FrozenDefinition
     */
    public function addExtender($extender): static
    {
    }

    /**
     * Adds a tag
     *
     * @param string $tag
     *
     * @return static
     * @throws FrozenDefinition
     */
    public function addTag(string $tag): static
    {
    }

    /**
     * Builds a service and returns the instance back
     *
     * @param object $container
     *
     * @return object
     * @throws ReflectionException
     */
    public function buildService($container): object
    {
    }

    /**
     * Freezes the container
     *
     * @param object $container
     *
     * @return void
     * @throws ReflectionException
     */
    public function freeze($container): void
    {
    }

    /**
     * Returns the arguments
     *
     * @return array
     */
    public function getArguments(): array
    {
    }

    /**
     * Returns the class
     *
     * @return string
     * @throws NoClassSet
     */
    public function getClass(): string
    {
    }

    /**
     * Returns the constructor arguments
     *
     * @return array
     */
    public function getConstructorArgs(): array
    {
    }

    /**
     * Returns the extenders
     *
     * @return array<array-key, callable>
     */
    public function getExtenders(): array
    {
    }

    /**
     * Returns the factory
     *
     * @return callable
     * @throws NoFactorySet
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
     * @return array<array-key, string>
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
     * @return static
     * @throws FrozenDefinition
     */
    public function setArgument($param, $value): static
    {
    }

    /**
     * Set the container
     *
     * @param object $container
     *
     * @return static
     */
    public function setContainer($container): static
    {
    }

    /**
     * Set a class
     *
     * @param string $className
     *
     * @return static
     * @throws FrozenDefinition
     */
    public function setClass(string $className): static
    {
    }

    /**
     * Set extenders
     *
     * @param array<array-key, callable> $extenders
     *
     * @return static
     * @throws FrozenDefinition
     * @throws InvalidExtender
     */
    public function setExtenders(array $extenders): static
    {
    }

    /**
     * Set a factory
     *
     * @param callable $factory
     *
     * @return static
     * @throws FrozenDefinition
     */
    public function setFactory($factory): static
    {
    }

    /**
     * Set cachable
     *
     * @param bool $isCacheable
     *
     * @return static
     * @throws FrozenDefinition
     */
    public function setIsCacheable(bool $isCacheable): static
    {
    }

    /**
     * Set lifetime
     *
     * @param string $lifetime
     *
     * @return static
     * @throws FrozenDefinition
     */
    public function setLifetime(string $lifetime): static
    {
    }

    /**
     * Unset class
     *
     * @return static
     * @throws FrozenDefinition
     */
    public function unsetClass(): static
    {
    }

    /**
     * Unset extenders
     *
     * @return static
     * @throws FrozenDefinition
     */
    public function unsetExtenders(): static
    {
    }

    /**
     * Unset the factory
     *
     * @return static
     * @throws FrozenDefinition
     */
    public function unsetFactory(): static
    {
    }

    /**
     * Check if frozen
     *
     * @return void
     * @throws FrozenDefinition
     */
    protected function checkFrozen(): void
    {
    }

    /**
     * Resolve arguments
     *
     * @param object $container
     * @param array  $args
     *
     * @return array
     */
    private function resolveArgs($container, array $args): array
    {
    }
}
