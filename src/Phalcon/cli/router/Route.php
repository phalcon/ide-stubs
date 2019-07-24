<?php

namespace Phalcon\Cli\Router;

/**
 * This class represents every route added to the router
 */
class Route
{

    const DEFAULT_DELIMITER = ' ';


    protected $beforeMatch;


    protected $compiledPattern;


    protected $converters;


    protected $delimiter;


    static protected $delimiterPath = self::DEFAULT_DELIMITER;


    protected $description;


    protected $id;


    protected $name;


    protected $paths;


    protected $pattern;


    static protected $uniqueId = 0;


    /**
     * @param string $pattern
     * @param array|string $paths
     */
    public function __construct(string $pattern, $paths = null) {}

    /**
     * Sets a callback that is called if the route is matched.
     * The developer can implement any arbitrary conditions here
     * If the callback returns false the route is treated as not matched
     *
     * @param callback $callback
     * @return RouteInterface
     */
    public function beforeMatch($callback): RouteInterface {}

    /**
     * Replaces placeholders from pattern returning a valid PCRE regular
     * expression
     *
     * @param string $pattern
     * @return string
     */
    public function compilePattern(string $pattern): string {}

    /**
     * Adds a converter to perform an additional transformation for certain
     * parameter
     *
     * @param string $name
     * @param callable $converter
     * @return RouteInterface
     */
    public function convert(string $name, $converter): RouteInterface {}

    /**
     * Set the routing delimiter
     *
     * @param string $delimiter
     */
    public static function delimiter(string $delimiter = null) {}

    /**
     * Extracts parameters from a string
     *
     * @param string $pattern
     * @return array|bool
     */
    public function extractNamedParams(string $pattern) {}

    /**
     * Returns the 'before match' callback if any
     *
     * @return mixed
     */
    public function getBeforeMatch() {}

    /**
     * Returns the route's compiled pattern
     *
     * @return string
     */
    public function getCompiledPattern(): string {}

    /**
     * Returns the router converter
     *
     * @return array
     */
    public function getConverters(): array {}

    /**
     * Get routing delimiter
     *
     * @return string
     */
    public static function getDelimiter(): string {}

    /**
     * Returns the route's description
     *
     * @return string
     */
    public function getDescription(): string {}

    /**
     * Returns the route's name
     *
     * @return string
     */
    public function getName(): string {}

    /**
     * Returns the paths
     *
     * @return array
     */
    public function getPaths(): array {}

    /**
     * Returns the route's pattern
     *
     * @return string
     */
    public function getPattern(): string {}

    /**
     * Returns the paths using positions as keys and names as values
     *
     * @return array
     */
    public function getReversedPaths(): array {}

    /**
     * Returns the route's id
     *
     * @return string
     */
    public function getRouteId(): string {}

    /**
     * Reconfigure the route adding a new pattern and a set of paths
     *
     * @param string $pattern
     * @param array|string $paths
     */
    public function reConfigure(string $pattern, $paths = null) {}

    /**
     * Resets the internal route id generator
     */
    public static function reset() {}

    /**
     * Sets the route's description
     *
     * @param string $description
     * @return RouteInterface
     */
    public function setDescription(string $description): RouteInterface {}

    /**
     * Sets the route's name
     *
     * ```php
     * $router->add(
     *     "/about",
     *     [
     *         "controller" => "about",
     *     ]
     * )->setName("about");
     * ```
     *
     * @param string $name
     * @return RouteInterface
     */
    public function setName(string $name): RouteInterface {}

}
