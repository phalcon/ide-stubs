<?php

namespace Phalcon\Mvc;

/**
 * Phalcon\Mvc\Micro
 *
 * With Phalcon you can create "Micro-Framework like" applications. By doing
 * this, you only need to write a minimal amount of code to create a PHP
 * application. Micro applications are suitable to small applications, APIs and
 * prototypes in a practical way.
 *
 * ```php
 * $app = new \Phalcon\Mvc\Micro();
 *
 * $app->get(
 *     "/say/welcome/{name}",
 *     function ($name) {
 *         echo "<h1>Welcome $name!</h1>";
 *     }
 * );
 *
 * $app->handle("/say/welcome/Phalcon");
 * ```
 */
class Micro extends \Phalcon\Di\Injectable implements \ArrayAccess
{

    protected $activeHandler;


    protected $afterBindingHandlers = array();


    protected $afterHandlers = array();


    protected $beforeHandlers = array();


    protected $container;


    protected $errorHandler;


    protected $finishHandlers = array();


    protected $handlers = array();


    protected $modelBinder;


    protected $notFoundHandler;


    protected $responseHandler;


    protected $returnedValue;


    protected $router;


    protected $stopped;


    /**
     * Phalcon\Mvc\Micro constructor
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function __construct(\Phalcon\Di\DiInterface $container = null) {}

    /**
     * Appends an 'after' middleware to be called after execute the route
     *
     * @param callable $handler
     * @return Micro
     */
    public function after($handler): Micro {}

    /**
     * Appends a afterBinding middleware to be called after model binding
     *
     * @param callable $handler
     * @return Micro
     */
    public function afterBinding($handler): Micro {}

    /**
     * Appends a before middleware to be called before execute the route
     *
     * @param callable $handler
     * @return Micro
     */
    public function before($handler): Micro {}

    /**
     * Maps a route to a handler that only matches if the HTTP method is DELETE
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function delete(string $routePattern, $handler): RouteInterface {}

    /**
     * Sets a handler that will be called when an exception is thrown handling
     * the route
     *
     * @param callable $handler
     * @return Micro
     */
    public function error($handler): Micro {}

    /**
     * Appends a 'finish' middleware to be called when the request is finished
     *
     * @param callable $handler
     * @return Micro
     */
    public function finish($handler): Micro {}

    /**
     * Maps a route to a handler that only matches if the HTTP method is GET
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function get(string $routePattern, $handler): RouteInterface {}

    /**
     * Return the handler that will be called for the matched route
     *
     * @return callable
     */
    public function getActiveHandler() {}

    /**
     * Returns bound models from binder instance
     *
     * @return array
     */
    public function getBoundModels(): array {}

    /**
     * Returns the internal handlers attached to the application
     *
     * @return array
     */
    public function getHandlers(): array {}

    /**
     * Gets model binder
     *
     * @return null|\Phalcon\Mvc\Model\BinderInterface
     */
    public function getModelBinder(): ?BinderInterface {}

    /**
     * Returns the value returned by the executed handler
     *
     * @return mixed
     */
    public function getReturnedValue() {}

    /**
     * Returns the internal router used by the application
     *
     * @return RouterInterface
     */
    public function getRouter(): RouterInterface {}

    /**
     * Obtains a service from the DI
     *
     * @param string $serviceName
     * @return object
     */
    public function getService(string $serviceName) {}

    /**
     * Obtains a shared service from the DI
     *
     * @param string $serviceName
     * @return mixed
     */
    public function getSharedService(string $serviceName) {}

    /**
     * Handle the whole request
     *
     * @param string $uri
     * @return mixed
     */
    public function handle(string $uri) {}

    /**
     * Checks if a service is registered in the DI
     *
     * @param string $serviceName
     * @return bool
     */
    public function hasService(string $serviceName): bool {}

    /**
     * Maps a route to a handler that only matches if the HTTP method is HEAD
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function head(string $routePattern, $handler): RouteInterface {}

    /**
     * Maps a route to a handler without any HTTP method constraint
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function map(string $routePattern, $handler): RouteInterface {}

    /**
     * Mounts a collection of handlers
     *
     * @param \Phalcon\Mvc\Micro\CollectionInterface $collection
     * @return Micro
     */
    public function mount(\Phalcon\Mvc\Micro\CollectionInterface $collection): Micro {}

    /**
     * Sets a handler that will be called when the router doesn't match any of
     * the defined routes
     *
     * @param callable $handler
     * @return Micro
     */
    public function notFound($handler): Micro {}

    /**
     * Check if a service is registered in the internal services container using
     * the array syntax
     *
     * @param mixed $alias
     * @return bool
     */
    public function offsetExists($alias): bool {}

    /**
     * Allows to obtain a shared service in the internal services container
     * using the array syntax
     *
     * ```php
     * var_dump(
     *     $app["request"]
     * );
     * ```
     *
     * @param mixed $alias
     * @return mixed
     */
    public function offsetGet($alias) {}

    /**
     * Allows to register a shared service in the internal services container
     * using the array syntax
     *
     * ```php
     *    $app["request"] = new \Phalcon\Http\Request();
     * ```
     *
     * @param mixed $alias
     * @param mixed $definition
     */
    public function offsetSet($alias, $definition) {}

    /**
     * Removes a service from the internal services container using the array
     * syntax
     *
     * @param mixed $alias
     */
    public function offsetUnset($alias) {}

    /**
     * Maps a route to a handler that only matches if the HTTP method is OPTIONS
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function options(string $routePattern, $handler): RouteInterface {}

    /**
     * Maps a route to a handler that only matches if the HTTP method is PATCH
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function patch(string $routePattern, $handler): RouteInterface {}

    /**
     * Maps a route to a handler that only matches if the HTTP method is POST
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function post(string $routePattern, $handler): RouteInterface {}

    /**
     * Maps a route to a handler that only matches if the HTTP method is PUT
     *
     * @param string $routePattern
     * @param callable $handler
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function put(string $routePattern, $handler): RouteInterface {}

    /**
     * Sets externally the handler that must be called by the matched route
     *
     * @param callable $activeHandler
     */
    public function setActiveHandler($activeHandler) {}

    /**
     * Sets the DependencyInjector container
     *
     * @param \Phalcon\Di\DiInterface $container
     */
    public function setDI(\Phalcon\Di\DiInterface $container) {}

    /**
     * Sets model binder
     *
     * ```php
     * $micro = new Micro($di);
     *
     * $micro->setModelBinder(
     *     new Binder(),
     *     'cache'
     * );
     * ```
     *
     * @param \Phalcon\Mvc\Model\BinderInterface $modelBinder
     * @param mixed $cache
     * @return Micro
     */
    public function setModelBinder(\Phalcon\Mvc\Model\BinderInterface $modelBinder, $cache = null): Micro {}

    /**
     * Appends a custom 'reponse' handler to be called insted of the default
     * response handler
     *
     * @param callable $handler
     * @return Micro
     */
    public function setResponseHandler($handler): Micro {}

    /**
     * Sets a service from the DI
     *
     * @param string $serviceName
     * @param mixed $definition
     * @param bool $shared
     * @return \Phalcon\Di\ServiceInterface
     */
    public function setService(string $serviceName, $definition, bool $shared = false): ServiceInterface {}

    /**
     * Stops the middleware execution avoiding than other middlewares be
     * executed
     */
    public function stop() {}

}
