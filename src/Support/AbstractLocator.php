<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Support;

use Phalcon\Contracts\Container\Service\Collection;
use Phalcon\Di\DiInterface;
use Throwable;

/**
 * Abstract base class for service locators.
 *
 * Provides a unified way to register, validate, and resolve services
 * from a DI container, with support for both legacy Di and new Container.
 *
 * @template T of object
 */
abstract class AbstractLocator
{
    /**
     * @var Collection|DiInterface
     */
    protected $container;

    /**
     * @phpstan-var array<string, class-string<T>>
     * @var array
     */
    protected $services = [];

    /**
     * @phpstan-param array<string, class-string<T>> $services
     * @param mixed $container
     * @param array $services
     */
    public function __construct($container, array $services = [])
    {
    }

    /**
     * Returns the full registered service map (defaults plus any added via
     * register()).
     *
     * @return array<string, class-string<T>>
     */
    public function getAll(): array
    {
    }

    /**
     * Returns the class-string registered under the given name.
     *
     * @return class-string<T>
     *
     * @throws Exception
     * @param string $name
     */
    public function getClass(string $name): string
    {
    }

    /**
     * Whether a service with the given name is registered.
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Retrieve a shared service instance from the container.
     *
     * @return T
     * @param string $name
     */
    public function newInstance(string $name): object
    {
    }

    /**
     * Register a service or override an existing one.
     *
     * @phpstan-param class-string<T> $definition
     *
     * @throws Exception
     * @param string $name
     * @param string $definition
     * @return static
     */
    public function register(string $name, string $definition): static
    {
    }

    /**
     * Get the exception class to throw on errors.
     *
     * @return class-string<Throwable>
     */
    abstract protected function getExceptionClass(): string;

    /**
     * Get the interface/class that all registered services must implement.
     * This allows different locators to enforce different contracts.
     *
     * @return class-string
     */
    abstract protected function getInterfaceClass(): string;

    /**
     * Get the service class name for a given name.
     *
     * @return class-string<T>
     *
     * @throws Exception
     * @param string $name
     */
    protected function getService(string $name): string
    {
    }

    /**
     * Get the default services for this locator.
     *
     * @return array<string, class-string<T>>
     */
    abstract protected function getServices(): array;
}
