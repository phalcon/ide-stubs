<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc;

use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Events\ManagerInterface;
use Phalcon\Mvc\Router\RouteInterface;

/**
 * Phalcon\Mvc\Router
 *
 * Phalcon\Mvc\Router is the standard framework router. Routing is the
 * process of taking a URI endpoint (that part of the URI which comes after the
 * base URL) and decomposing it into parameters to determine which module,
 * controller, and action of that controller should receive the request
 *
 * ```php
 * use Phalcon\Mvc\Router;
 *
 * $router = new Router();
 *
 * $router->add(
 *     "/documentation/{chapter}/{name}\.{type:[a-z]+}",
 *     [
 *         "controller" => "documentation",
 *         "action"     => "show",
 *     ]
 * );
 *
 * $router->handle(
 *     "/documentation/1/examples.html"
 * );
 *
 * echo $router->getControllerName();
 * ```
 */
class Router extends AbstractInjectionAware implements \Phalcon\Mvc\RouterInterface, \Phalcon\Events\EventsAwareInterface
{

    const POSITION_FIRST = 0;


    const POSITION_LAST = 1;


    protected $action = null;


    protected $controller = null;


    protected $defaultAction;


    protected $defaultController;


    protected $defaultModule;


    protected $defaultNamespace;


    protected $defaultParams = array();


    protected $eventsManager;


    protected $keyRouteNames = array();


    protected $keyRouteIds = array();


    protected $matchedRoute;


    protected $matches;


    protected $module = null;


    protected $namespaceName = null;


    protected $notFoundPaths;


    protected $params = array();


    protected $removeExtraSlashes;


    protected $routes;


    protected $wasMatched = false;



    public function getKeyRouteNames()
    {
    }

    /**
     * @param mixed $keyRouteNames
     */
    public function setKeyRouteNames($keyRouteNames)
    {
    }


    public function getKeyRouteIds()
    {
    }

    /**
     * @param mixed $keyRouteIds
     */
    public function setKeyRouteIds($keyRouteIds)
    {
    }

    /**
     * Phalcon\Mvc\Router constructor
     *
     * @param bool $defaultRoutes
     */
    public function __construct(bool $defaultRoutes = true)
    {
    }

    /**
     * Adds a route to the router without any HTTP constraint
     *
     * ```php
     * use Phalcon\Mvc\Router;
     *
     * $router->add("/about", "About::index");
     *
     * $router->add(
     *     "/about",
     *     "About::index",
     *     ["GET", "POST"]
     * );
     *
     * $router->add(
     *     "/about",
     *     "About::index",
     *     ["GET", "POST"],
     *     Router::POSITION_FIRST
     * );
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
     * @param mixed $position
     * @return RouteInterface
     */
    public function add(string $pattern, $paths = null, $httpMethods = null, $position = Router::POSITION_LAST): RouteInterface
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
     * @param mixed $position
     * @return RouteInterface
     */
    public function addConnect(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
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
     * @param mixed $position
     * @return RouteInterface
     */
    public function addDelete(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
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
     * @param mixed $position
     * @return RouteInterface
     */
    public function addGet(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
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
     * @param mixed $position
     * @return RouteInterface
     */
    public function addHead(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
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
     * @param mixed $position
     * @return RouteInterface
     */
    public function addOptions(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
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
     * @param mixed $position
     * @return RouteInterface
     */
    public function addPatch(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
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
     * @param mixed $position
     * @return RouteInterface
     */
    public function addPost(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Adds a route to the router that only match if the HTTP method is PURGE
     * (Squid and Varnish support)
     *
     * @param string|array $paths = [
     *     'module => '',
     *     'controller' => '',
     *     'action' => '',
     *     'namespace' => ''
     * ]
     * @param string $pattern
     * @param mixed $position
     * @return RouteInterface
     */
    public function addPurge(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
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
     * @param mixed $position
     * @return RouteInterface
     */
    public function addPut(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
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
     * @param mixed $position
     * @return RouteInterface
     */
    public function addTrace(string $pattern, $paths = null, $position = Router::POSITION_LAST): RouteInterface
    {
    }

    /**
     * Attach Route object to the routes stack.
     *
     * ```php
     * use Phalcon\Mvc\Router;
     * use Phalcon\Mvc\Router\Route;
     *
     * class CustomRoute extends Route {
     *      // ...
     * }
     *
     * $router = new Router();
     *
     * $router->attach(
     *     new CustomRoute("/about", "About::index", ["GET", "HEAD"]),
     *     Router::POSITION_FIRST
     * );
     * ```
     *
     * @param \Phalcon\Mvc\Router\RouteInterface $route
     * @param mixed $position
     * @return RouterInterface
     */
    public function attach(\Phalcon\Mvc\Router\RouteInterface $route, $position = Router::POSITION_LAST): RouterInterface
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
     * Returns the internal event manager
     *
     * @return ManagerInterface
     */
    public function getEventsManager(): ManagerInterface
    {
    }

    /**
     * Returns the processed action name
     *
     * @return string
     */
    public function getActionName(): string
    {
    }

    /**
     * Returns the processed controller name
     *
     * @return string
     */
    public function getControllerName(): string
    {
    }

    /**
     * Returns the route that matches the handled URI
     *
     * @return RouteInterface
     */
    public function getMatchedRoute(): RouteInterface
    {
    }

    /**
     * Returns the sub expressions in the regular expression matched
     *
     * @return array
     */
    public function getMatches(): array
    {
    }

    /**
     * Returns the processed module name
     *
     * @return string
     */
    public function getModuleName(): string
    {
    }

    /**
     * Returns the processed namespace name
     *
     * @return string
     */
    public function getNamespaceName(): string
    {
    }

    /**
     * Returns the processed parameters
     *
     * @return array
     */
    public function getParams(): array
    {
    }

    /**
     * Returns a route object by its id
     *
     * @param mixed $id
     * @return bool|\Phalcon\Mvc\Router\RouteInterface
     */
    public function getRouteById($id)
    {
    }

    /**
     * Returns a route object by its name
     *
     * @param string $name
     * @return bool|\Phalcon\Mvc\Router\RouteInterface
     */
    public function getRouteByName(string $name)
    {
    }

    /**
     * Returns all the routes defined in the router
     *
     * @return array|\Phalcon\Mvc\Router\RouteInterface[]
     */
    public function getRoutes(): array
    {
    }

    /**
     * Handles routing information received from the rewrite engine
     *
     * ```php
     * // Passing a URL
     * $router->handle("/posts/edit/1");
     * ```
     *
     * @param string $uri
     * @return void
     */
    public function handle(string $uri)
    {
    }

    /**
     * Returns whether controller name should not be mangled
     *
     * @return bool
     */
    public function isExactControllerName(): bool
    {
    }

    /**
     * Mounts a group of routes in the router
     *
     * @param \Phalcon\Mvc\Router\GroupInterface $group
     * @return RouterInterface
     */
    public function mount(\Phalcon\Mvc\Router\GroupInterface $group): RouterInterface
    {
    }

    /**
     * Set a group of paths to be returned when none of the defined routes are
     * matched
     *
     * @param mixed $paths
     * @return RouterInterface
     */
    public function notFound($paths): RouterInterface
    {
    }

    /**
     * Set whether router must remove the extra slashes in the handled routes
     *
     * @param bool $remove
     * @return RouterInterface
     */
    public function removeExtraSlashes(bool $remove): RouterInterface
    {
    }

    /**
     * Sets the default action name
     *
     * @param string $actionName
     * @return RouterInterface
     */
    public function setDefaultAction(string $actionName): RouterInterface
    {
    }

    /**
     * Sets the default controller name
     *
     * @param string $controllerName
     * @return RouterInterface
     */
    public function setDefaultController(string $controllerName): RouterInterface
    {
    }

    /**
     * Sets the name of the default module
     *
     * @param string $moduleName
     * @return RouterInterface
     */
    public function setDefaultModule(string $moduleName): RouterInterface
    {
    }

    /**
     * Sets the name of the default namespace
     *
     * @param string $namespaceName
     * @return RouterInterface
     */
    public function setDefaultNamespace(string $namespaceName): RouterInterface
    {
    }

    /**
     * Sets an array of default paths. If a route is missing a path the router
     * will use the defined here. This method must not be used to set a 404
     * route
     *
     * ```php
     * $router->setDefaults(
     *     [
     *         "module" => "common",
     *         "action" => "index",
     *     ]
     * );
     * ```
     *
     * @param array $defaults
     * @return RouterInterface
     */
    public function setDefaults(array $defaults): RouterInterface
    {
    }

    /**
     * Returns an array of default parameters
     *
     * @return array
     */
    public function getDefaults(): array
    {
    }

    /**
     * Sets the events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     * @return void
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

    /**
     * Checks if the router matches any of the defined routes
     *
     * @return bool
     */
    public function wasMatched(): bool
    {
    }
}
