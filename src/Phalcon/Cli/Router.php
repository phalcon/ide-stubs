<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Cli;

use Phalcon\Cli\Router\RouteInterface;
use Phalcon\Di\AbstractInjectionAware;

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

    protected $action;


    protected $defaultAction = null;


    protected $defaultModule = null;

    /**
     * @var array
     */
    protected $defaultParams = array();


    protected $defaultTask = null;


    protected $matchedRoute;


    protected $matches;


    protected $module;

    /**
     * @var array
     */
    protected $params = array();


    protected $routes;


    protected $task;


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
     * @return array
     */
    public function getParams(): array
    {
    }

    /**
     * Returns a route object by its id
     *
     * @param int $id
     * @return bool|\Phalcon\Cli\Router\RouteInterface
     */
    public function getRouteById($id)
    {
    }

    /**
     * Returns a route object by its name
     *
     * @param string $name
     * @return bool|\Phalcon\Cli\Router\RouteInterface
     */
    public function getRouteByName(string $name)
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
     */
    public function setDefaultAction(string $actionName)
    {
    }

    /**
     * Sets the name of the default module
     *
     * @param string $moduleName
     */
    public function setDefaultModule(string $moduleName)
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
    public function setDefaultTask(string $taskName)
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
