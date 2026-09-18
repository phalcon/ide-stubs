<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Di;

use Closure;
use Phalcon\Contracts\Di\DiTypes;
use Phalcon\Di\Exception\ServiceResolutionException;
use Phalcon\Di\Exceptions\DefinitionMustBeArrayForRead;
use Phalcon\Di\Exceptions\DefinitionMustBeArrayForUpdate;
use Phalcon\Di\Service\Builder;

/**
 * Represents individually a service in the services container
 *
 * ```php
 * $service = new \Phalcon\Di\Service(
 *     "request",
 *     \Phalcon\Http\Request::class
 * );
 *
 * $request = service->resolve();
 * ```
 *
 * @phpstan-import-type di_parameters from DiTypes
 * @phpstan-import-type di_service_argument from DiTypes
 * @phpstan-import-type di_service_definition from DiTypes
 */
class Service implements \Phalcon\Di\ServiceInterface
{
    /**
     * @var mixed
     */
    protected $definition;

    protected bool $resolved = false;

    protected bool $shared = false;

    /**
     * @var mixed|null
     */
    protected $sharedInstance = null;

    /**
     * Service constructor.
     *
     * @param mixed $definition
     * @param bool $shared
     */
    final public function __construct($definition, bool $shared = false)
    {
    }

    /**
     * Returns the service definition
     *
     * @return mixed
     */
    public function getDefinition(): mixed
    {
    }

    /**
     * Returns a parameter in a specific position
     *
     * @return array
     * @param int $position
     */
    public function getParameter(int $position)
    {
    }

    /**
     * Returns true if the service was resolved
     *
     * @return bool
     */
    public function isResolved(): bool
    {
    }

    /**
     * Check whether the service is shared or not
     *
     * @return bool
     */
    public function isShared(): bool
    {
    }

    /**
     * Resolves the service
     *
     * @phpstan-param di_parameters|null $parameters
     * @param mixed $parameters
     * @param DiInterface|null $container
     * @return mixed
     */
    public function resolve($parameters = null, ?DiInterface $container = null): mixed
    {
    }

    /**
     * Set the service definition
     *
     * @param mixed $definition
     * @return void
     */
    public function setDefinition($definition): void
    {
    }

    /**
     * Changes a parameter in the definition without resolve the service
     *
     * @phpstan-param di_service_argument $parameter
     * @param int $position
     * @param array $parameter
     * @return ServiceInterface
     */
    public function setParameter(int $position, array $parameter): ServiceInterface
    {
    }

    /**
     * Sets if the service is shared or not
     *
     * @param bool $shared
     * @return void
     */
    public function setShared(bool $shared): void
    {
    }

    /**
     * Sets/Resets the shared instance related to the service
     *
     * @param mixed $sharedInstance
     * @return void
     */
    public function setSharedInstance($sharedInstance): void
    {
    }
}
