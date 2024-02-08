<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Cli;

use Phalcon\Di\DiInterface;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Cli\Router\Route;
use Phalcon\Cli\Router\Exception;
use Phalcon\Cli\Router\RouteInterface;

/**
 * Phalcon\Cli\Router is the standard framework router. Routing is the process
 * of taking a command-line arguments and decomposing it into parameters to
 * determine which module, task, and action of that task should receive the
 * request.
 *
 * ```php
 * $router = new \Phalcon\Cli\Router();
 *
 * $router->handle(
 *     [
 *         "module" => "main",
 *         "task"   => "videos",
 *         "action" => "process",
 *     ]
 * );
 *
 * echo $router->getTaskName();
 * ```
 */
class Router extends AbstractInjectionAware
{
    /**
     * @var string
     */
    protected $action = '';

    /**
     * @var string
     */
    protected $defaultAction = '';

    /**
     * @var string
     */
    protected $defaultModule = '';

    /**
     * @var array
     */
    protected $defaultParams = [];

    /**
     * @var string
     */
    protected $defaultTask = '';

    /**
     * @var RouteInterface|null
     */
    protected $matchedRoute = null;

    /**
     * @var array
     */
    protected $matches = [];

    /**
     * @var string
     */
    protected $module = '';

    /**
     * @var array
     */
    protected $params = [];

    /**
     * @var array
     */
    protected $routes = [];

    /**
     * @var string
     */
    protected $task = '';

    /**
     * @var bool
     */
    protected $wasMatched = false;

    /**
     * Phalcon\Cli\Router constructor
     *
     * @param bool $defaultRoutes
     */
    public function __construct(bool $defaultRoutes = true)
    {
    }

    /**
     * Adds a route to the router
     *
     * ```php
     * $router->add("/about", "About::main");
     * ```
     *
     * @param string|array $paths
     * @param string $pattern
     * @return RouteInterface
     */
    public function add(string $pattern, $paths = null): RouteInterface
    {
    }

    /**
     * Returns processed action name
     *
     * @return string
     */
    public function getActionName(): string
    {
    }

    /**
     * Returns the route that matches the handled URI
     *
     * @return RouteInterface|null
     */
    public function getMatchedRoute(): RouteInterface|null
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
     * Returns processed module name
     *
     * @return string
     */
    public function getModuleName(): string
    {
    }

    /**
     * Returns processed extra params
     *
     * @todo deprecate this in future versions
     * @return array
     */
    public function getParams(): array
    {
    }

    /**
     * Returns processed extra params
     *
     * @return array
     */
    public function getParameters(): array
    {
    }

    /**
     * Returns a route object by its id
     *
     * @param int $id
     * @return bool|RouteInterface
     */
    public function getRouteById($id): RouteInterface|bool
    {
    }

    /**
     * Returns a route object by its name
     *
     * @param string $name
     * @return bool|RouteInterface
     */
    public function getRouteByName(string $name): RouteInterface|bool
    {
    }

    /**
     * Returns all the routes defined in the router
     *
     * @return array|\Phalcon\Cli\Router\Route[]
     */
    public function getRoutes(): array
    {
    }

    /**
     * Returns processed task name
     *
     * @return string
     */
    public function getTaskName(): string
    {
    }

    /**
     * Handles routing information received from command-line arguments
     *
     * @param array $arguments
     */
    public function handle($arguments = null)
    {
    }

    /**
     * Sets the default action name
     *
     * @param string $actionName
     * @return Router
     */
    public function setDefaultAction(string $actionName): Router
    {
    }

    /**
     * Sets the name of the default module
     *
     * @param string $moduleName
     * @return Router
     */
    public function setDefaultModule(string $moduleName): Router
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
     * @return Router
     */
    public function setDefaults(array $defaults): Router
    {
    }

    /**
     * Sets the default controller name
     *
     * @param string $taskName
     * @return void
     */
    public function setDefaultTask(string $taskName): void
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
