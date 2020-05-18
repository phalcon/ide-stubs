<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Di;

/**
 * Interface for Phalcon\Di
 */
interface DiInterface extends \ArrayAccess
{

    /**
     * Attempts to register a service in the services container
     * Only is successful if a service hasn't been registered previously
     * with the same name
     *
     * @param mixed $definition
     * @param string $name
     * @param bool $shared
     * @return bool|ServiceInterface
     */
    public function attempt(string $name, $definition, bool $shared = false);

    /**
     * Resolves the service based on its configuration
     *
     * @param string $name
     * @param mixed $parameters
     * @return mixed
     */
    public function get(string $name, $parameters = null);

    /**
     * Return the last DI created
     *
     * @return DiInterface|null
     */
    public static function getDefault(): ?DiInterface;

    /**
     * Returns a service definition without resolving
     *
     * @param string $name
     * @return mixed
     */
    public function getRaw(string $name);

    /**
     * Returns the corresponding Phalcon\Di\Service instance for a service
     *
     * @param string $name
     * @return ServiceInterface
     */
    public function getService(string $name): ServiceInterface;

    /**
     * Return the services registered in the DI
     *
     * @return array|ServiceInterface[]
     */
    public function getServices(): array;

    /**
     * Returns a shared service based on their configuration
     *
     * @param string $name
     * @param mixed $parameters
     * @return mixed
     */
    public function getShared(string $name, $parameters = null);

    /**
     * Check whether the DI contains a service by a name
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool;

    /**
     * Removes a service in the services container
     *
     * @param string $name
     * @return void
     */
    public function remove(string $name);

    /**
     * Resets the internal default DI
     *
     * @return void
     */
    public static function reset();

    /**
     * Registers a service in the services container
     *
     * @param string $name
     * @param mixed $definition
     * @param bool $shared
     * @return ServiceInterface
     */
    public function set(string $name, $definition, bool $shared = false): ServiceInterface;

    /**
     * Set a default dependency injection container to be obtained into static
     * methods
     *
     * @param DiInterface $container
     * @return void
     */
    public static function setDefault(DiInterface $container);

    /**
     * Sets a service using a raw Phalcon\Di\Service definition
     *
     * @param string $name
     * @param ServiceInterface $rawDefinition
     * @return ServiceInterface
     */
    public function setService(string $name, ServiceInterface $rawDefinition): ServiceInterface;

    /**
     * Registers an "always shared" service in the services container
     *
     * @param string $name
     * @param mixed $definition
     * @return ServiceInterface
     */
    public function setShared(string $name, $definition): ServiceInterface;
}
