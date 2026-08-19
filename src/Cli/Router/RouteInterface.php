<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Cli\Router;

use Phalcon\Contracts\Cli\CliTypes;

/**
 * Interface for Phalcon\Cli\Router\Route
 *
 * Note: `Phalcon\Cli\Router` always constructs and returns the concrete
 * `Phalcon\Cli\Router\Route`, and there is no injection point for an externally
 * built route, so this interface is a marker for type hints rather than an
 * implementable contract. The fluent route API used in practice -
 * `beforeMatch()`, `getBeforeMatch()`, `convert()`, and `getConverters()` - is
 * declared on the concrete `Route` class, not here.
 *
 * @phpstan-import-type cli_route_paths from CliTypes
 * @phpstan-import-type cli_route_reversed_paths from CliTypes
 */
interface RouteInterface
{
    /**
     * Set the routing delimiter
     *
     * @param string|null $delimiter
     */
    public static function delimiter(?string $delimiter = null);

    /**
     * Get routing delimiter
     *
     * @return string
     */
    public static function getDelimiter(): string;

    /**
     * Resets the internal route id generator
     *
     * @return void
     */
    public static function reset(): void;

    /**
     * Replaces placeholders from pattern returning a valid PCRE regular
     * expression
     *
     * @param string $pattern
     * @return string
     */
    public function compilePattern(string $pattern): string;

    /**
     * Returns the route's pattern
     *
     * @return string
     */
    public function getCompiledPattern(): string;

    /**
     * Returns the route's description
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Returns the route's name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Returns the paths
     *
     * @phpstan-return cli_route_paths
     * @return array
     */
    public function getPaths(): array;

    /**
     * Returns the route's pattern
     *
     * @return string
     */
    public function getPattern(): string;

    /**
     * Returns the paths using positions as keys and names as values
     *
     * @phpstan-return cli_route_reversed_paths
     * @return array
     */
    public function getReversedPaths(): array;

    /**
     * Returns the route's id
     *
     * @return string
     */
    public function getRouteId(): string;

    /**
     * Reconfigure the route adding a new pattern and a set of paths
     *
     * @param array|string|null $paths *
     * @return void
     * @param string $pattern
     */
    public function reConfigure(string $pattern, $paths = null): void;

    /**
     * Sets the route's description
     *
     * @param string $description
     * @return RouteInterface
     */
    public function setDescription(string $description): RouteInterface;

    /**
     * Sets the route's name
     *
     * @param string $name
     * @return RouteInterface
     */
    public function setName(string $name): RouteInterface;
}
