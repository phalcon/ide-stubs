<?php

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
     * @return \Phalcon\Cli\Router\RouteInterface
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
     * @return \Phalcon\Cli\Router\RouteInterface
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
     * Returns processed extra params
     *
     * @return array
     */
    public function getParams(): array;

    /**
     * Returns a route object by its id
     *
     * @param mixed $id
     * @return \Phalcon\Cli\Router\RouteInterface
     */
    public function getRouteById($id): RouteInterface;

    /**
     * Returns a route object by its name
     *
     * @param string $name
     * @return \Phalcon\Cli\Router\RouteInterface
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
     */
    public function setDefaultAction(string $actionName);

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
     * Sets the default task name
     *
     * @param string $taskName
     */
    public function setDefaultTask(string $taskName);

    /**
     * Check if the router matches any of the defined routes
     *
     * @return bool
     */
    public function wasMatched(): bool;
}
