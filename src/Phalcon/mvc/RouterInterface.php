<?php

namespace Phalcon\Mvc;

/**
 * Interface for Phalcon\Mvc\Router
 */
interface RouterInterface
{

    /**
     * Adds a route to the router on any HTTP method
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $httpMethods
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function add(string $pattern, $paths = null, $httpMethods = null): RouteInterface;

    /**
     * Attach Route object to the routes stack.
     *
     * @param \Phalcon\Mvc\Router\RouteInterface $route
     * @param mixed $position
     * @return RouterInterface
     */
    public function attach(\Phalcon\Mvc\Router\RouteInterface $route, $position = Router::POSITION_LAST): RouterInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is CONNECT
     *
     * @param string $pattern
     * @param mixed $paths
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function addConnect(string $pattern, $paths = null): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is DELETE
     *
     * @param string $pattern
     * @param mixed $paths
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function addDelete(string $pattern, $paths = null): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is HEAD
     *
     * @param string $pattern
     * @param mixed $paths
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function addHead(string $pattern, $paths = null): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is GET
     *
     * @param string $pattern
     * @param mixed $paths
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function addGet(string $pattern, $paths = null): RouteInterface;

    /**
     * Add a route to the router that only match if the HTTP method is OPTIONS
     *
     * @param string $pattern
     * @param mixed $paths
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function addOptions(string $pattern, $paths = null): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is PATCH
     *
     * @param string $pattern
     * @param mixed $paths
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function addPatch(string $pattern, $paths = null): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is POST
     *
     * @param string $pattern
     * @param mixed $paths
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function addPost(string $pattern, $paths = null): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is PURGE
     * (Squid and Varnish support)
     *
     * @param string $pattern
     * @param mixed $paths
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function addPurge(string $pattern, $paths = null): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is PUT
     *
     * @param string $pattern
     * @param mixed $paths
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function addPut(string $pattern, $paths = null): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is TRACE
     *
     * @param string $pattern
     * @param mixed $paths
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function addTrace(string $pattern, $paths = null): RouteInterface;

    /**
     * Removes all the defined routes
     */
    public function clear();

    /**
     * Returns processed action name
     *
     * @return string
     */
    public function getActionName(): string;

    /**
     * Returns processed controller name
     *
     * @return string
     */
    public function getControllerName(): string;

    /**
     * Returns the route that matches the handled URI
     *
     * @return \Phalcon\Mvc\Router\RouteInterface
     */
    public function getMatchedRoute(): RouteInterface;

    /**
     * Return the sub expressions in the regular expression matched
     *
     * @return array
     */
    public function getMatches(): array;

    /**
     * Returns processed module name
     *
     * @return string
     */
    public function getModuleName(): string;

    /**
     * Returns processed namespace name
     *
     * @return string
     */
    public function getNamespaceName(): string;

    /**
     * Returns processed extra params
     *
     * @return array
     */
    public function getParams(): array;

    /**
     * Return all the routes defined in the router
     *
     * @return array|\Phalcon\Mvc\Router\RouteInterface[]
     */
    public function getRoutes(): array;

    /**
     * Returns a route object by its id
     *
     * @param mixed $id
     * @return bool|\Phalcon\Mvc\Router\RouteInterface
     */
    public function getRouteById($id);

    /**
     * Returns a route object by its name
     *
     * @param string $name
     * @return bool|\Phalcon\Mvc\Router\RouteInterface
     */
    public function getRouteByName(string $name);

    /**
     * Handles routing information received from the rewrite engine
     *
     * @param string $uri
     */
    public function handle(string $uri);

    /**
     * Mounts a group of routes in the router
     *
     * @param \Phalcon\Mvc\Router\GroupInterface $group
     * @return RouterInterface
     */
    public function mount(\Phalcon\Mvc\Router\GroupInterface $group): RouterInterface;

    /**
     * Sets the default action name
     *
     * @param string $actionName
     */
    public function setDefaultAction(string $actionName);

    /**
     * Sets the default controller name
     *
     * @param string $controllerName
     */
    public function setDefaultController(string $controllerName);

    /**
     * Sets the name of the default module
     *
     * @param string $moduleName
     */
    public function setDefaultModule(string $moduleName);

    /**
     * Sets an array of default paths
     *
     * @param array $defaults
     */
    public function setDefaults(array $defaults);

    /**
     * Check if the router matches any of the defined routes
     *
     * @return bool
     */
    public function wasMatched(): bool;

}
