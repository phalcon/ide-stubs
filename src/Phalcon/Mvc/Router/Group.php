<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Router;

/**
 * Phalcon\Mvc\Router\Group
 *
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
 */
class Group implements \Phalcon\Mvc\Router\GroupInterface
{

    protected $beforeMatch;


    protected $hostname;


    protected $paths;


    protected $prefix;


    protected $routes = array();


    /**
     * Phalcon\Mvc\Router\Group constructor
     *
     * @param mixed $paths
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
     * @param string|array $paths = [
     *     'module => '',
     *     'controller' => '',
     *     'action' => '',
     *     'namespace' => ''
     * ]
     * @param string $pattern
     * @param mixed $httpMethods
     * @return RouteInterface
     */
    public function add(string $pattern, $paths = null, $httpMethods = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is CONNECT
     *
     * @param string|array $paths = [
     *     'module => '',
     *     'controller' => '',
     *     'action' => '',
     *     'namespace' => ''
     * ]
     * @param string $pattern
     * @return RouteInterface
     */
    public function addConnect(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is DELETE
     *
     * @param string|array $paths = [
     *     'module => '',
     *     'controller' => '',
     *     'action' => '',
     *     'namespace' => ''
     * ]
     * @param string $pattern
     * @return RouteInterface
     */
    public function addDelete(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is GET
     *
     * @param string|array $paths = [
     *     'module => '',
     *     'controller' => '',
     *     'action' => '',
     *     'namespace' => ''
     * ]
     * @param string $pattern
     * @return RouteInterface
     */
    public function addGet(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is HEAD
     *
     * @param string|array $paths = [
     *     'module => '',
     *     'controller' => '',
     *     'action' => '',
     *     'namespace' => ''
     * ]
     * @param string $pattern
     * @return RouteInterface
     */
    public function addHead(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Add a route to the router that only match if the HTTP method is OPTIONS
     *
     * @param string|array $paths = [
     *     'module => '',
     *     'controller' => '',
     *     'action' => '',
     *     'namespace' => ''
     * ]
     * @param string $pattern
     * @return RouteInterface
     */
    public function addOptions(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is PATCH
     *
     * @param string|array $paths = [
     *     'module => '',
     *     'controller' => '',
     *     'action' => '',
     *     'namespace' => ''
     * ]
     * @param string $pattern
     * @return RouteInterface
     */
    public function addPatch(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is POST
     *
     * @param string|array $paths = [
     *     'module => '',
     *     'controller' => '',
     *     'action' => '',
     *     'namespace' => ''
     * ]
     * @param string $pattern
     * @return RouteInterface
     */
    public function addPost(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is PURGE
     *
     * @param string|array $paths = [
     *     'module => '',
     *     'controller' => '',
     *     'action' => '',
     *     'namespace' => ''
     * ]
     * @param string $pattern
     * @return RouteInterface
     */
    public function addPurge(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is PUT
     *
     * @param string|array $paths = [
     *     'module => '',
     *     'controller' => '',
     *     'action' => '',
     *     'namespace' => ''
     * ]
     * @param string $pattern
     * @return RouteInterface
     */
    public function addPut(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is TRACE
     *
     * @param string|array $paths = [
     *     'module => '',
     *     'controller' => '',
     *     'action' => '',
     *     'namespace' => ''
     * ]
     * @param string $pattern
     * @return RouteInterface
     */
    public function addTrace(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Sets a callback that is called if the route is matched.
     * The developer can implement any arbitrary conditions here
     * If the callback returns false the route is treated as not matched
     *
     * @param callable $beforeMatch
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
    public function clear()
    {
    }

    /**
     * Returns the 'before match' callback if any
     *
     * @return mixed
     */
    public function getBeforeMatch()
    {
    }

    /**
     * Returns the hostname restriction
     *
     * @return string
     */
    public function getHostname(): string
    {
    }

    /**
     * Returns the common paths defined for this group
     *
     * @return array|string
     */
    public function getPaths()
    {
    }

    /**
     * Returns the common prefix for all the routes
     *
     * @return string
     */
    public function getPrefix(): string
    {
    }

    /**
     * Returns the routes added to the group
     *
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
     * @param mixed $paths
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
     * @param string|array $paths = [
     *     'module => '',
     *     'controller' => '',
     *     'action' => '',
     *     'namespace' => ''
     * ]
     * @param string $pattern
     * @param mixed $httpMethods
     * @return RouteInterface
     */
    protected function addRoute(string $pattern, $paths = null, $httpMethods = null): RouteInterface
    {
    }
}
