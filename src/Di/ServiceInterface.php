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
 * Represents a service in the services container
 */
interface ServiceInterface
{
    /**
     * Returns the service definition
     *
     * @return mixed
     */
    public function getDefinition(): mixed;

    /**
     * Returns a parameter in a specific position
     *
     * @return array
     * @param int $position
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
     * @param DiInterface $container
     * @return mixed
     */
    public function resolve($parameters = null, DiInterface $container = null): mixed;

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
