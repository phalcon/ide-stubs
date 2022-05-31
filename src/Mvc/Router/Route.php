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
 * Phalcon\Mvc\Router\Route
 *
 * This class represents every route added to the router
 */
class Route implements \Phalcon\Mvc\Router\RouteInterface
{

    /**
     * @var callable|null
     */
    protected $beforeMatch = null;

    /**
     * @var string|null
     */
    protected $compiledPattern = null;

    /**
     * @var array
     */
    protected $converters = [];

    /**
     * @var GroupInterface|null
     */
    protected $group = null;

    /**
     * @var string|null
     */
    protected $hostname = null;

    /**
     * @var string|null
     */
    protected $id = null;

    /**
     * @var array|string
     */
    protected $methods = [];

    /**
     * @var callable|null
     */
    protected $match = null;

    /**
     * @var string|null
     */
    protected $name = null;

    /**
     * @var array
     */
    protected $paths = [];

    /**
     * @var string
     */
    protected $pattern;

    /**
     * @var int
     */
    static protected $uniqueId = 0;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
    }

    /**
     * Phalcon\Mvc\Router\Route constructor
     *
     * @param string $pattern
     * @param mixed $paths
     * @param mixed $httpMethods
     */
    public function __construct(string $pattern, $paths = null, $httpMethods = null)
    {
    }

    /**
     * Sets a callback that is called if the route is matched.
     * The developer can implement any arbitrary conditions here
     * If the callback returns false the route is treated as not matched
     *
     * ```php
     * $router->add(
     *     "/login",
     *     [
     *         "module"     => "admin",
     *         "controller" => "session",
     *     ]
     * )->beforeMatch(
     *     function ($uri, $route) {
     *         // Check if the request was made with Ajax
     *         if ($_SERVER["HTTP_X_REQUESTED_WITH"] === "xmlhttprequest") {
     *             return false;
     *         }
     *
     *         return true;
     *     }
     * );
     * ```
     *
     * @param callable $callback
     * @return RouteInterface
     */
    public function beforeMatch($callback): RouteInterface
    {
    }

    /**
     * Replaces placeholders from pattern returning a valid PCRE regular expression
     *
     * @param string $pattern
     * @return string
     */
    public function compilePattern(string $pattern): string
    {
    }

    /**
     * {@inheritdoc}
     *
     * @param string $name
     * @param mixed $converter
     * @return RouteInterface
     */
    public function convert(string $name, $converter): RouteInterface
    {
    }

    /**
     * Extracts parameters from a string
     *
     * @param string $pattern
     * @return array|bool
     */
    public function extractNamedParams(string $pattern)
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
     * Returns the route's compiled pattern
     *
     * @return string
     */
    public function getCompiledPattern(): string
    {
    }

    /**
     * Returns the router converter
     *
     * @return array
     */
    public function getConverters(): array
    {
    }

    /**
     * Returns the group associated with the route
     *
     * @return GroupInterface|null
     */
    public function getGroup(): ?GroupInterface
    {
    }

    /**
     * Returns the HTTP methods that constraint matching the route
     *
     * @return array|string
     */
    public function getHttpMethods()
    {
    }

    /**
     * Returns the hostname restriction if any
     *
     * @return string|null
     */
    public function getHostname(): ?string
    {
    }

    /**
     * Returns the 'match' callback if any
     *
     * @return mixed
     */
    public function getMatch()
    {
    }

    /**
     * Returns the route's name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
    }

    /**
     * Returns the paths
     *
     * @return array
     */
    public function getPaths(): array
    {
    }

    /**
     * Returns the route's pattern
     *
     * @return string
     */
    public function getPattern(): string
    {
    }

    /**
     * Returns the paths using positions as keys and names as values
     *
     * @return array
     */
    public function getReversedPaths(): array
    {
    }

    /**
     * Returns the route's id
     *
     * @return string
     */
    public function getRouteId(): string
    {
    }

    /**
     * Returns routePaths
     *
     * @param mixed $paths
     * @return array
     */
    public static function getRoutePaths($paths = null): array
    {
    }

    /**
     * Allows to set a callback to handle the request directly in the route
     *
     * ```php
     * $router->add(
     *     "/help",
     *     []
     * )->match(
     *     function () {
     *         return $this->getResponse()->redirect("https://support.google.com/", true);
     *     }
     * );
     * ```
     *
     * @param mixed $callback
     * @return RouteInterface
     */
    public function match($callback): RouteInterface
    {
    }

    /**
     * Reconfigure the route adding a new pattern and a set of paths
     *
     * @param string $pattern
     * @param mixed $paths
     * @return void
     */
    public function reConfigure(string $pattern, $paths = null): void
    {
    }

    /**
     * Resets the internal route id generator
     *
     * @return void
     */
    public static function reset(): void
    {
    }

    /**
     * Sets the group associated with the route
     *
     * @param GroupInterface $group
     * @return RouteInterface
     */
    public function setGroup(GroupInterface $group): RouteInterface
    {
    }

    /**
     * Sets a set of HTTP methods that constraint the matching of the route (alias of via)
     *
     * ```php
     * $route->setHttpMethods("GET");
     *
     * $route->setHttpMethods(
     *     [
     *         "GET",
     *         "POST",
     *     ]
     * );
     * ```
     *
     * @param mixed $httpMethods
     * @return RouteInterface
     */
    public function setHttpMethods($httpMethods): RouteInterface
    {
    }

    /**
     * Sets a hostname restriction to the route
     *
     * ```php
     * $route->setHostname("localhost");
     * ```
     *
     * @param string $hostname
     * @return RouteInterface
     */
    public function setHostname(string $hostname): RouteInterface
    {
    }

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
    public function setName(string $name): RouteInterface
    {
    }

    /**
     * Set one or more HTTP methods that constraint the matching of the route
     *
     * ```php
     * $route->via("GET");
     *
     * $route->via(
     *     [
     *         "GET",
     *         "POST",
     *     ]
     * );
     * ```
     *
     * @param mixed $httpMethods
     * @return RouteInterface
     */
    public function via($httpMethods): RouteInterface
    {
    }
}
