<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Di;

use Phalcon\Di\Service;
use Phalcon\Di\DiInterface;
use Phalcon\Di\Exception;
use Phalcon\Di\Exception\ServiceResolutionException;
use Phalcon\Config\Adapter\Php;
use Phalcon\Config\Adapter\Yaml;
use Phalcon\Config\ConfigInterface;
use Phalcon\Di\ServiceInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Di\InitializationAwareInterface;
use Phalcon\Di\InjectionAwareInterface;
use Phalcon\Di\ServiceProviderInterface;

/**
 * Phalcon\Di\Di is a component that implements Dependency Injection/Service
 * Location of services and it's itself a container for them.
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
 */
class Di implements \Phalcon\Di\DiInterface
{

    /**
     * List of registered services
     *
     * @var ServiceInterface[]
     */
    protected $services = [];

    /**
     * List of shared instances
     *
     * @var array
     */
    protected $sharedInstances = [];

    /**
     * Events Manager
     *
     * @var ManagerInterface|null
     */
    protected $eventsManager = null;

    /**
     * Latest DI build
     *
     * @var DiInterface|null
     */
    static protected $_default;

    /**
     * Phalcon\Di\Di constructor
     */
    public function __construct()
    {
    }

    /**
     * Magic method to get or set services using setters/getters
     *
     * @param string $method
     * @param array $arguments
     * @return mixed|null
     */
    public function __call(string $method, array $arguments = [])
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
    public function attempt(string $name, $definition, bool $shared = false)
    {
    }

    /**
     * Resolves the service based on its configuration
     *
     * @param string $name
     * @param mixed $parameters
     * @return mixed
     */
    public function get(string $name, $parameters = null)
    {
    }

    /**
     * Return the latest DI created
     *
     * @return DiInterface|null
     */
    public static function getDefault(): ?DiInterface
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface|null
     */
    public function getInternalEventsManager(): ?ManagerInterface
    {
    }

    /**
     * Returns a service definition without resolving
     *
     * @param string $name
     * @return mixed
     */
    public function getRaw(string $name)
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
    public function getShared(string $name, $parameters = null)
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
     * @link https://docs.phalcon.io/en/latest/reference/di.html
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
     * @link https://docs.phalcon.io/en/latest/reference/di.html
     * @param string $filePath
     * @param array $callbacks
     * @return void
     */
    public function loadFromYaml(string $filePath, array $callbacks = null): void
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
     * Allows to obtain a shared service using the array syntax
     *
     * ```php
     * var_dump($di["request"]);
     * ```
     *
     * @param mixed $name
     * @return mixed
     */
    public function offsetGet($name)
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
     * Allows to register a shared service using the array syntax
     *
     * ```php
     * $di["request"] = new \Phalcon\Http\Request();
     * ```
     *
     * @param mixed $name
     * @param mixed $definition
     * @return void
     */
    public function offsetSet($name, $definition): void
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
     * Resets the internal default DI
     *
     * @return void
     */
    public static function reset(): void
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
}
