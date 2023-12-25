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

/**
 * Interface for Phalcon\Cli\Router
 */
interface RouterInterface
{
    /**
     * Adds a route to the router on any HTTP method
     *
     * @param string $pattern
     * @param mixed $paths
     * @return RouteInterface
     */
    public function add(string $pattern, $paths = null): RouteInterface;

    /**
     * Returns processed action name
     *
     * @return string
     */
    public function getActionName(): string;

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
     * Returns processed extra params
     *
     * @todo deprecate this in the future
     * @return array
     */
    public function getParams(): array;

    /**
     * Returns processed extra params
     *
     * @return array
     */
    public function getParameters(): array;

    /**
     * Returns a route object by its id
     *
     * @param mixed $id
     * @return RouteInterface
     */
    public function getRouteById($id): RouteInterface;

    /**
     * Returns a route object by its name
     *
     * @param string $name
     * @return RouteInterface
     */
    public function getRouteByName(string $name): RouteInterface;

    /**
     * Return all the routes defined in the router
     *
     * @return array|\Phalcon\Cli\Router\RouteInterface[]
     */
    public function getRoutes(): array;

    /**
     * Returns processed task name
     *
     * @return string
     */
    public function getTaskName(): string;

    /**
     * Handles routing information received from the rewrite engine
     *
     * @param array $arguments
     */
    public function handle($arguments = null);

    /**
     * Sets the default action name
     *
     * @param string $actionName
     * @return void
     */
    public function setDefaultAction(string $actionName): void;

    /**
     * Sets the name of the default module
     *
     * @param string $moduleName
     * @return void
     */
    public function setDefaultModule(string $moduleName): void;

    /**
     * Sets an array of default paths
     *
     * @param array $defaults
     * @return void
     */
    public function setDefaults(array $defaults): void;

    /**
     * Sets the default task name
     *
     * @param string $taskName
     * @return void
     */
    public function setDefaultTask(string $taskName): void;

    /**
     * Check if the router matches any of the defined routes
     *
     * @return bool
     */
    public function wasMatched(): bool;
}
