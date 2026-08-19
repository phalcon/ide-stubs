<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Cli;

use Phalcon\Cli\Router\Exception;
use Phalcon\Cli\Router\Exceptions\BeforeMatchNotCallable;
use Phalcon\Cli\Router\Exceptions\RouterArgumentsInvalidType;
use Phalcon\Cli\Router\Route;
use Phalcon\Cli\Router\RouteInterface;
use Phalcon\Contracts\Cli\CliTypes;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Di\DiInterface;

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
 *
 * @phpstan-import-type cli_parameters from CliTypes
 * @phpstan-import-type cli_router_defaults from CliTypes
 * @phpstan-import-type cli_routes from CliTypes
 */
class Router extends AbstractInjectionAware implements \Phalcon\Cli\RouterInterface
{
    protected string $action = '';

    protected string $defaultAction = '';

    protected string $defaultModule = '';

    /**
     * @phpstan-var cli_parameters
     */
    protected array $defaultParams = [];

    protected string $defaultTask = '';

    protected ?\Phalcon\Cli\Router\RouteInterface $matchedRoute = null;

    /**
     * @var array<array-key, string>
     */
    protected array $matches = [];

    protected string $module = '';

    /**
     * @phpstan-var cli_parameters
     */
    protected array $params = [];

    /**
     * @phpstan-var cli_routes
     */
    protected array $routes = [];

    protected string $task = '';

    protected bool $wasMatched = false;

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
     * @phpstan-param mixed $paths
     * @param string $pattern
     * @param mixed $paths
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
     * @return array<array-key, string>
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
     * @phpstan-return cli_parameters
     * @return array
     */
    public function getParameters(): array
    {
    }

    /**
     * Returns processed extra params
     *
     * @deprecated Use {@see getParameters()} instead.
     *
     * @phpstan-return cli_parameters
     * @return array
     */
    public function getParams(): array
    {
    }

    /**
     * Returns a route object by its id
     *
     * @param mixed $id
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
     * @phpstan-return cli_routes
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
     * @phpstan-param mixed $arguments
     * @param mixed $arguments
     */
    public function handle($arguments = null)
    {
    }

    /**
     * Sets the default action name
     *
     * @param string $actionName
     * @return static
     */
    public function setDefaultAction(string $actionName): static
    {
    }

    /**
     * Sets the name of the default module
     *
     * @param string $moduleName
     * @return static
     */
    public function setDefaultModule(string $moduleName): static
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
     * @phpstan-param cli_router_defaults $defaults
     * @param array $defaults
     * @return static
     */
    public function setDefaults(array $defaults): static
    {
    }

    /**
     * Sets the default controller name
     *
     * @param string $taskName
     * @return static
     */
    public function setDefaultTask(string $taskName): static
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
