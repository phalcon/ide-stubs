<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc;

use Phalcon\Mvc\Router\RouteInterface;
use Phalcon\Mvc\Router\GroupInterface;

/**
 * Interface for Phalcon\Mvc\Router
 */
interface RouterInterface
{
    /**
     * Adds a route to the router on any HTTP method
     *
     * @param string $pattern
     * @param array|string|null $paths
     * @param array|string|null $httpMethods *
     * @return RouteInterface
     * @param int $position
     */
    public function add(string $pattern, $paths = null, $httpMethods = null, int $position = Router::POSITION_LAST): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is CONNECT
     *
     * @param string $pattern
     * @param array|string|null $paths *
     * @return RouteInterface
     * @param int $position
     */
    public function addConnect(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is DELETE
     *
     * @param string $pattern
     * @param array|string|null $paths *
     * @return RouteInterface
     * @param int $position
     */
    public function addDelete(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is HEAD
     *
     * @param string $pattern
     * @param array|string|null $paths *
     * @return RouteInterface
     * @param int $position
     */
    public function addHead(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is GET
     *
     * @param string $pattern
     * @param array|string|null $paths *
     * @return RouteInterface
     * @param int $position
     */
    public function addGet(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface;

    /**
     * Add a route to the router that only match if the HTTP method is OPTIONS
     *
     * @param string $pattern
     * @param array|string|null $paths *
     * @return RouteInterface
     * @param int $position
     */
    public function addOptions(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is PATCH
     *
     * @param string $pattern
     * @param array|string|null $paths *
     * @return RouteInterface
     * @param int $position
     */
    public function addPatch(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is POST
     *
     * @param string $pattern
     * @param array|string|null $paths *
     * @return RouteInterface
     * @param int $position
     */
    public function addPost(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is PURGE
     * (Squid and Varnish support)
     *
     * @param string $pattern
     * @param array|string|null $paths *
     * @return RouteInterface
     * @param int $position
     */
    public function addPurge(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is PUT
     *
     * @param string $pattern
     * @param array|string|null $paths *
     * @return RouteInterface
     * @param int $position
     */
    public function addPut(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface;

    /**
     * Adds a route to the router that only match if the HTTP method is TRACE
     *
     * @param string $pattern
     * @param array|string|null $paths *
     * @return RouteInterface
     * @param int $position
     */
    public function addTrace(string $pattern, $paths = null, int $position = Router::POSITION_LAST): RouteInterface;

    /**
     * Attach Route object to the routes stack.
     *
     * @param RouteInterface $route
     * @param int $position *
     * @return RouterInterface
     */
    public function attach(\Phalcon\Mvc\Router\RouteInterface $route, int $position = Router::POSITION_LAST): RouterInterface;

    /**
     * Removes all the defined routes
     *
     * @return void
     */
    public function clear(): void;

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
     * @return RouteInterface|null
     */
    public function getMatchedRoute(): RouteInterface|null;

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
     * @return RouteInterface|bool
     * @param mixed $id
     */
    public function getRouteById($id): RouteInterface|bool;

    /**
     * Returns a route object by its name
     *
     * @return RouteInterface|bool
     * @param string $name
     */
    public function getRouteByName(string $name): RouteInterface|bool;

    /**
     * Handles routing information received from the rewrite engine
     *
     * @param string $uri
     * @return void
     */
    public function handle(string $uri): void;

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
     * @return RouterInterface
     */
    public function setDefaultAction(string $actionName): RouterInterface;

    /**
     * Sets the default controller name
     *
     * @param string $controllerName
     * @return RouterInterface
     */
    public function setDefaultController(string $controllerName): RouterInterface;

    /**
     * Sets the name of the default module
     *
     * @param string $moduleName
     * @return RouterInterface
     */
    public function setDefaultModule(string $moduleName): RouterInterface;

    /**
     * Sets an array of default paths
     *
     * @param array $defaults
     * @return RouterInterface
     */
    public function setDefaults(array $defaults): RouterInterface;

    /**
     * Check if the router matches any of the defined routes
     *
     * @return bool
     */
    public function wasMatched(): bool;
}
