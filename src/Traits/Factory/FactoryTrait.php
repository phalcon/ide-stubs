<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Traits\Factory;

use Exception;

/**
 * Methods allowing a mapper based factory to operate. Supports injected
 * services, getting a service by name (key), initialization and setting of
 * the exception class (when exceptions are needed to be thrown)
 */
trait FactoryTrait
{
    /**
     * @var array<string, object>
     */
    private array $instances = [];

    /**
     * @var string[]
     */
    private array $mapper = [];

    /**
     * Return an object from the instances pool. If it does not exist, create it
     *
     * @throws Exception
     * @param string $name
     * @param mixed $arguments
     * @return object
     */
    protected function getCachedInstance(string $name, ...$arguments): object
    {
    }

    /**
     * Returns the exception class for the factory
     *
     * @return class-string<\Throwable>
     */
    abstract protected function getExceptionClass(): string;

    /**
     * Returns a service based on the name; throws exception if it does not
     * exist
     *
     * @throws Exception
     * @param string $name
     * @return string
     */
    protected function getService(string $name): string
    {
    }

    /**
     * Returns the services for the factory
     *
     * @return string[]
     */
    abstract protected function getServices(): array;

    /**
     * Initializes services
     *
     * @param string[] $services
     * @return void
     */
    protected function init(array $services = []): void
    {
    }
}
