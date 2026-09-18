<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Router;

use Phalcon\Contracts\Mvc\MvcTypes;

/**
 * Helper class to create a group of routes with common attributes
 *
 * ```php
 * $router = new \Phalcon\Mvc\Router();
 *
 * //Create a group with a common module and controller
 * $blog = new Group(
 *     [
 *         "module"     => "blog",
 *         "controller" => "index",
 *     ]
 * );
 *
 * //All the routes start with /blog
 * $blog->setPrefix("/blog");
 *
 * //Add a route to the group
 * $blog->add(
 *     "/save",
 *     [
 *         "action" => "save",
 *     ]
 * );
 *
 * //Add another route to the group
 * $blog->add(
 *     "/edit/{id}",
 *     [
 *         "action" => "edit",
 *     ]
 * );
 *
 * //This route maps to a controller different than the default
 * $blog->add(
 *     "/blog",
 *     [
 *         "controller" => "about",
 *         "action"     => "index",
 *     ]
 * );
 *
 * //Add the group to the router
 * $router->mount($blog);
 * ```
 *
 * @phpstan-import-type mvc_router_http_methods from MvcTypes
 * @phpstan-import-type mvc_router_paths from MvcTypes
 */
class Group implements \Phalcon\Mvc\Router\GroupInterface
{
    /**
     * @var callable|null
     *
     * @phpstan-var callable|null
     */
    protected $beforeMatch = null;

    /**
     * @var string|null
     */
    protected $hostname = null;

    /**
     * @var array|string|null
     *
     * @phpstan-var mvc_router_paths|string|null
     */
    protected $paths = null;

    /**
     * @var string|null
     */
    protected $prefix = null;

    /**
     * @phpstan-var list<RouteInterface>
     */
    protected array $routes = [];

    /**
     * Phalcon\Mvc\Router\Group constructor
     *
     * @param array|string $paths *
     * @phpstan-param mvc_router_paths|string|null $paths
     */
    public function __construct($paths = null)
    {
    }

    /**
     * Adds a route to the router on any HTTP method
     *
     * ```php
     * $router->add("/about", "About::index");
     * ```
     *
     * @param mixed $paths = [
     *                     'module => '',
     *                     'controller' => '',
     *                     'action' => '',
     *                     'namespace' => ''
     *                     ]
     *
     * @return RouteInterface
     * @param string $pattern
     * @param mixed $httpMethods
     */
    public function add(string $pattern, $paths = null, $httpMethods = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is CONNECT
     *
     * @param mixed $paths = [
     *                     'module => '',
     *                     'controller' => '',
     *                     'action' => '',
     *                     'namespace' => ''
     *                     ]
     *
     * @return RouteInterface
     * @param string $pattern
     */
    public function addConnect(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is DELETE
     *
     * @param mixed $paths = [
     *                     'module => '',
     *                     'controller' => '',
     *                     'action' => '',
     *                     'namespace' => ''
     *                     ]
     *
     * @return RouteInterface
     * @param string $pattern
     */
    public function addDelete(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is GET
     *
     * @param mixed $paths = [
     *                     'module => '',
     *                     'controller' => '',
     *                     'action' => '',
     *                     'namespace' => ''
     *                     ]
     *
     * @return RouteInterface
     * @param string $pattern
     */
    public function addGet(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is HEAD
     *
     * @param mixed $paths = [
     *                     'module => '',
     *                     'controller' => '',
     *                     'action' => '',
     *                     'namespace' => ''
     *                     ]
     *
     * @return RouteInterface
     * @param string $pattern
     */
    public function addHead(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Add a route to the router that only match if the HTTP method is OPTIONS
     *
     * @param mixed $paths = [
     *                     'module => '',
     *                     'controller' => '',
     *                     'action' => '',
     *                     'namespace' => ''
     *                     ]
     *
     * @return RouteInterface
     * @param string $pattern
     */
    public function addOptions(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is PATCH
     *
     * @param mixed $paths = [
     *                     'module => '',
     *                     'controller' => '',
     *                     'action' => '',
     *                     'namespace' => ''
     *                     ]
     *
     * @return RouteInterface
     * @param string $pattern
     */
    public function addPatch(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is POST
     *
     * @param mixed $paths = [
     *                     'module => '',
     *                     'controller' => '',
     *                     'action' => '',
     *                     'namespace' => ''
     *                     ]
     *
     * @return RouteInterface
     * @param string $pattern
     */
    public function addPost(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is PURGE
     *
     * @param mixed $paths = [
     *                     'module => '',
     *                     'controller' => '',
     *                     'action' => '',
     *                     'namespace' => ''
     *                     ]
     *
     * @return RouteInterface
     * @param string $pattern
     */
    public function addPurge(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is PUT
     *
     * @param mixed $paths = [
     *                     'module => '',
     *                     'controller' => '',
     *                     'action' => '',
     *                     'namespace' => ''
     *                     ]
     *
     * @return RouteInterface
     * @param string $pattern
     */
    public function addPut(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is TRACE
     *
     * @param mixed $paths = [
     *                     'module => '',
     *                     'controller' => '',
     *                     'action' => '',
     *                     'namespace' => ''
     *                     ]
     *
     * @return RouteInterface
     * @param string $pattern
     */
    public function addTrace(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Sets a callback that is called if the route is matched.
     * The developer can implement any arbitrary conditions here
     * If the callback returns false the route is treated as not matched
     *
     * @param callable $beforeMatch *
     * @return GroupInterface
     */
    public function beforeMatch($beforeMatch): GroupInterface
    {
    }

    /**
     * Removes all the pre-defined routes
     *
     * @return void
     */
    public function clear(): void
    {
    }

    /**
     * Returns the 'before match' callback if any
     *
     * @return mixed|null
     */
    public function getBeforeMatch(): null
    {
    }

    /**
     * Returns the hostname restriction
     *
     * @return string|null
     */
    public function getHostname(): string|null
    {
    }

    /**
     * Returns the common paths defined for this group
     *
     * @phpstan-return mvc_router_paths|string|null
     * @return array|string|null
     */
    public function getPaths(): string|array|null
    {
    }

    /**
     * Returns the common prefix for all the routes
     *
     * @return string|null
     */
    public function getPrefix(): string|null
    {
    }

    /**
     * Returns the routes added to the group
     *
     * @phpstan-return list<RouteInterface>
     * @return array|RouteInterface[]
     */
    public function getRoutes(): array
    {
    }

    /**
     * Set a hostname restriction for all the routes in the group
     *
     * @param string $hostname
     * @return GroupInterface
     */
    public function setHostname(string $hostname): GroupInterface
    {
    }

    /**
     * Set common paths for all the routes in the group
     *
     * @param array|string $paths *
     * @return GroupInterface
     */
    public function setPaths($paths): GroupInterface
    {
    }

    /**
     * Set a common uri prefix for all the routes in this group
     *
     * @param string $prefix
     * @return GroupInterface
     */
    public function setPrefix(string $prefix): GroupInterface
    {
    }

    /**
     * Adds a route applying the common attributes
     *
     * @param mixed $paths [
     *                     'module => '',
     *                     'controller' => '',
     *                     'action' => '',
     *                     'namespace' => ''
     *                     ]
     *
     * @return RouteInterface
     * @param string $pattern
     * @param mixed $httpMethods
     */
    protected function addRoute(string $pattern, $paths = null, $httpMethods = null): RouteInterface
    {
    }
}
