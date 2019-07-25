<?php

namespace Phalcon\Di;

/**
 * Represents a service in the services container
 */
interface ServiceInterface
{

    /**
     * Returns the service definition
     *
     * @return mixed
     */
    public function getDefinition();

    /**
     * Returns a parameter in a specific position
     *
     * @param int $position
     * @return array
     */
    public function getParameter(int $position);

    /**
     * Returns true if the service was resolved
     *
     * @return bool
     */
    public function isResolved(): bool;

    /**
     * Check whether the service is shared or not
     *
     * @return bool
     */
    public function isShared(): bool;

    /**
     * Resolves the service
     *
     * @param array $parameters
     * @param \Phalcon\Di\DiInterface $container
     * @return mixed
     */
    public function resolve($parameters = null, \Phalcon\Di\DiInterface $container = null);

    /**
     * Set the service definition
     *
     * @param mixed $definition
     */
    public function setDefinition($definition);

    /**
     * Changes a parameter in the definition without resolve the service
     *
     * @param int $position
     * @param array $parameter
     * @return ServiceInterface
     */
    public function setParameter(int $position, array $parameter): ServiceInterface;

    /**
     * Sets if the service is shared or not
     *
     * @param bool $shared
     */
    public function setShared(bool $shared);

}
