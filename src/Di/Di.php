<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Di;

use Phalcon\Config\Adapter\Php;
use Phalcon\Config\Adapter\Yaml;
use Phalcon\Config\ConfigInterface;
use Phalcon\Contracts\Config\ConfigTypes;
use Phalcon\Contracts\Di\DiTypes;
use Phalcon\Di\DiInterface;
use Phalcon\Di\Exception;
use Phalcon\Di\Exception\ServiceResolutionException;
use Phalcon\Di\Exceptions\AliasAlreadyInUse;
use Phalcon\Di\Exceptions\AliasNameMustBeString;
use Phalcon\Di\Exceptions\CircularAliasReference;
use Phalcon\Di\Exceptions\ServiceCannotBeResolved;
use Phalcon\Di\InitializationAwareInterface;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Di\Service;
use Phalcon\Di\ServiceInterface;
use Phalcon\Di\ServiceProviderInterface;
use Phalcon\Events\ManagerInterface;

/**
 * Phalcon\Di\Di is a component that implements Dependency Injection/Service
 * Location of services, and it's itself a container for them.
 *
 * Since Phalcon is highly decoupled, Phalcon\Di\Di is essential to integrate the
 * different components of the framework. The developer can also use this
 * component to inject dependencies and manage global instances of the different
 * classes used in the application.
 *
 * Basically, this component implements the `Inversion of Control` pattern.
 * Applying this, the objects do not receive their dependencies using setters or
 * constructors, but requesting a service dependency injector. This reduces the
 * overall complexity, since there is only one way to get the required
 * dependencies within a component.
 *
 * Additionally, this pattern increases testability in the code, thus making it
 * less prone to errors.
 *
 * ```php
 * use Phalcon\Di\Di;
 * use Phalcon\Http\Request;
 *
 * $di = new Di();
 *
 * // Using a string definition
 * $di->set("request", Request::class, true);
 *
 * // Using an anonymous function
 * $di->setShared(
 *     "request",
 *     function () {
 *         return new Request();
 *     }
 * );
 *
 * $request = $di->getRequest();
 * ```
 *
 * @phpstan-import-type config_callbacks from ConfigTypes
 * @phpstan-import-type di_parameters from DiTypes
 */
class Di implements \Phalcon\Di\DiInterface
{
    /**
     * List of service aliases
     *
     * @var array<string, string>
     */
    protected array $aliases = [];

    /**
     * Latest DI build
     *
     * @var DiInterface|null
     */
    protected static $defaultContainer = null;

    /**
     * Events Manager
     */
    protected ?\Phalcon\Events\ManagerInterface $eventsManager = null;

    /**
     * List of registered services
     *
     * @var ServiceInterface[]
     */
    protected array $services = [];

    /**
     * List of shared instances
     *
     * @var array<string, mixed>
     */
    protected array $sharedInstances = [];

    /**
     * Phalcon\Di\Di constructor
     */
    public function __construct()
    {
    }

    /**
     * Magic method to get or set services using setters/getters
     *
     * @param list<mixed> $arguments
     * @param string $method
     * @return mixed|null
     */
    public function __call(string $method, array $arguments = []): mixed
    {
    }

    /**
     * Return the latest DI created
     *
     * @return DiInterface|null
     */
    public static function getDefault(): DiInterface|null
    {
    }

    /**
     * Resets the internal default DI
     *
     * @return void
     */
    public static function reset(): void
    {
    }

    /**
     * Set a default dependency injection container to be obtained into static
     * methods
     *
     * @param \Phalcon\Di\DiInterface $container
     * @return void
     */
    public static function setDefault(\Phalcon\Di\DiInterface $container): void
    {
    }

    /**
     * Attempts to register a service in the services container
     * Only is successful if a service hasn't been registered previously
     * with the same name
     *
     * @param string $name
     * @param mixed $definition
     * @param bool $shared
     * @return bool|ServiceInterface
     */
    public function attempt(string $name, $definition, bool $shared = false): ServiceInterface|bool
    {
    }

    /**
     * Resolves the service based on its configuration
     *
     * @param string $name
     * @param mixed $parameters
     * @return mixed
     */
    public function get(string $name, $parameters = null): mixed
    {
    }

    /**
     * Return the alias based on a passed key. Returns an empty string if
     * the alias does not exist
     *
     * @param string $name
     * @return string
     */
    public function getAlias(string $name): string
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface|null
     */
    public function getInternalEventsManager(): ManagerInterface|null
    {
    }

    /**
     * Returns a service definition without resolving
     *
     * @param string $name
     * @return mixed
     */
    public function getRaw(string $name): mixed
    {
    }

    /**
     * Returns a Phalcon\Di\Service instance
     *
     * @param string $name
     * @return ServiceInterface
     */
    public function getService(string $name): ServiceInterface
    {
    }

    /**
     * Return the services registered in the DI
     *
     * @return array|\Phalcon\Di\ServiceInterface[]
     */
    public function getServices(): array
    {
    }

    /**
     * Resolves a service, the resolved service is stored in the DI, subsequent
     * requests for this service will return the same instance
     *
     * @param string $name
     * @param mixed $parameters
     * @return mixed
     */
    public function getShared(string $name, $parameters = null): mixed
    {
    }

    /**
     * Check whether the DI contains a service by a name
     *
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }

    /**
     * Check whether the DI has a cached shared instance for a service name.
     *
     * Unlike `has()`, which reports on the servicedefinition registry,
     * this method reports only on the resolved-instance cache populated by
     * `getShared()`.
     *
     * @param string $name
     * @return bool
     */
    public function hasShared(string $name): bool
    {
    }

    /**
     * Loads services from a php config file.
     *
     * ```php
     * $di->loadFromPhp("path/services.php");
     * ```
     *
     * And the services can be specified in the file as:
     *
     * ```php
     * return [
     *      'myComponent' => [
     *          'className' => '\Acme\Components\MyComponent',
     *          'shared' => true,
     *      ],
     *      'group' => [
     *          'className' => '\Acme\Group',
     *          'arguments' => [
     *              [
     *                  'type' => 'service',
     *                  'service' => 'myComponent',
     *              ],
     *          ],
     *      ],
     *      'user' => [
     *          'className' => '\Acme\User',
     *      ],
     * ];
     * ```
     *
     * @link https://docs.phalcon.io/latest/di/
     * @param string $filePath
     * @return void
     */
    public function loadFromPhp(string $filePath): void
    {
    }

    /**
     * Loads services from a yaml file.
     *
     * ```php
     * $di->loadFromYaml(
     *     "path/services.yaml",
     *     [
     *         "!approot" => function ($value) {
     *             return dirname(__DIR__) . $value;
     *         }
     *     ]
     * );
     * ```
     *
     * And the services can be specified in the file as:
     *
     * ```php
     * myComponent:
     *     className: \Acme\Components\MyComponent
     *     shared: true
     *
     * group:
     *     className: \Acme\Group
     *     arguments:
     *         - type: service
     *           name: myComponent
     *
     * user:
     *    className: \Acme\User
     * ```
     *
     * @phpstan-param config_callbacks|null $callbacks
     *
     * @link https://docs.phalcon.io/latest/di/
     * @param string $filePath
     * @param array|null $callbacks
     * @return void
     */
    public function loadFromYaml(string $filePath, ?array $callbacks = null): void
    {
    }

    /**
     * Check if a service is registered using the array syntax
     *
     * @param mixed $name
     * @return bool
     */
    public function offsetExists($name): bool
    {
    }

    /**
     * Allows to obtain a shared service using the array syntax
     *
     * ```php
     * var_dump($di["request"]);
     * ```
     *
     * @param mixed $name
     * @return mixed
     */
    public function offsetGet($name): mixed
    {
    }

    /**
     * Allows to register a shared service using the array syntax
     *
     * ```php
     * $di["request"] = new \Phalcon\Http\Request();
     * ```
     *
     * @param mixed $offset
     * @param mixed $value
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
    }

    /**
     * Removes a service from the services container using the array syntax
     *
     * @param mixed $name
     * @return void
     */
    public function offsetUnset($name): void
    {
    }

    /**
     * Registers a service provider.
     *
     * ```php
     * use Phalcon\Di\DiInterface;
     * use Phalcon\Di\ServiceProviderInterface;
     *
     * class SomeServiceProvider implements ServiceProviderInterface
     * {
     *     public function register(DiInterface $di)
     *     {
     *         $di->setShared(
     *             'service',
     *             function () {
     *                 // ...
     *             }
     *         );
     *     }
     * }
     * ```
     *
     * @param \Phalcon\Di\ServiceProviderInterface $provider
     * @return void
     */
    public function register(\Phalcon\Di\ServiceProviderInterface $provider): void
    {
    }

    /**
     * Removes a service in the services container
     * It also removes any shared instance created for the service
     *
     * @param string $name
     * @return void
     */
    public function remove(string $name): void
    {
    }

    /**
     * Removes the cached shared instance for a service, leaving the service
     * definition intact so the next `getShared()` call rebuilds it.
     *
     * @param string $name
     * @return void
     */
    public function removeShared(string $name): void
    {
    }

    /**
     * Registers a service in the services container
     *
     * @param string $name
     * @param mixed $definition
     * @param bool $shared
     * @return ServiceInterface
     */
    public function set(string $name, $definition, bool $shared = false): ServiceInterface
    {
    }

    /**
     * Sets one or more aliases to the given name.
     *
     * @param array<array-key, mixed>|string $aliases
     *
     * @return Di
     * @throws Exception
     * @param string $name
     */
    public function setAlias(string $name, $aliases): self
    {
    }

    /**
     * Sets the internal event manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    public function setInternalEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

    /**
     * Sets a service using a raw Phalcon\Di\Service definition
     *
     * @param string $name
     * @param \Phalcon\Di\ServiceInterface $rawDefinition
     * @return ServiceInterface
     */
    public function setService(string $name, \Phalcon\Di\ServiceInterface $rawDefinition): ServiceInterface
    {
    }

    /**
     * Registers an "always shared" service in the services container
     *
     * @param string $name
     * @param mixed $definition
     * @return ServiceInterface
     */
    public function setShared(string $name, $definition): ServiceInterface
    {
    }

    /**
     * Loads services from a Config object.
     *
     * @param \Phalcon\Config\ConfigInterface $config
     * @return void
     */
    protected function loadFromConfig(\Phalcon\Config\ConfigInterface $config): void
    {
    }

    /**
     * Resolve an alias to its actual service name
     *
     * @throws Exception
     * @param string $name
     * @return string
     */
    private function resolveAlias(string $name): string
    {
    }
}
