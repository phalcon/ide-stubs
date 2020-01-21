<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Micro;

/**
 * Phalcon\Mvc\Micro\Collection
 *
 * Groups Micro-Mvc handlers as controllers
 *
 * ```php
 * $app = new \Phalcon\Mvc\Micro();
 *
 * $collection = new Collection();
 *
 * $collection->setHandler(
 *     new PostsController()
 * );
 *
 * $collection->get("/posts/edit/{id}", "edit");
 *
 * $app->mount($collection);
 * ```
 */
class Collection implements \Phalcon\Mvc\Micro\CollectionInterface
{

    protected $handler;


    protected $handlers = array();


    protected $lazy;


    protected $prefix;


    /**
     * Maps a route to a handler that only matches if the HTTP method is DELETE.
     *
     * @param callable|string $handler
     * @param string $routePattern
     * @param string $name
     * @return CollectionInterface
     */
    public function delete(string $routePattern, $handler, string $name = null): CollectionInterface
    {
    }

    /**
     * Maps a route to a handler that only matches if the HTTP method is GET.
     *
     * @param callable|string $handler
     * @param string $routePattern
     * @param string $name
     * @return CollectionInterface
     */
    public function get(string $routePattern, $handler, string $name = null): CollectionInterface
    {
    }

    /**
     * Returns the main handler
     *
     * @return mixed
     */
    public function getHandler()
    {
    }

    /**
     * Returns the registered handlers
     *
     * @return array
     */
    public function getHandlers(): array
    {
    }

    /**
     * Returns the collection prefix if any
     *
     * @return string
     */
    public function getPrefix(): string
    {
    }

    /**
     * Maps a route to a handler that only matches if the HTTP method is HEAD.
     *
     * @param callable|string $handler
     * @param string $routePattern
     * @param string $name
     * @return CollectionInterface
     */
    public function head(string $routePattern, $handler, string $name = null): CollectionInterface
    {
    }

    /**
     * Returns if the main handler must be lazy loaded
     *
     * @return bool
     */
    public function isLazy(): bool
    {
    }

    /**
     * Maps a route to a handler.
     *
     * @param callable|string $handler
     * @param string $routePattern
     * @param string $name
     * @return CollectionInterface
     */
    public function map(string $routePattern, $handler, string $name = null): CollectionInterface
    {
    }

    /**
     * Maps a route to a handler via methods.
     *
     * ```php
     * $collection->mapVia(
     *     "/test",
     *     "indexAction",
     *     ["POST", "GET"],
     *     "test"
     * );
     * ```
     *
     * @param callable $handler
     * @param string|array $method
     * @param string $routePattern
     * @param string $name
     * @return CollectionInterface
     */
    public function mapVia(string $routePattern, $handler, $method, string $name = null): CollectionInterface
    {
    }

    /**
     * Maps a route to a handler that only matches if the HTTP method is
     * OPTIONS.
     *
     * @param callable|string $handler
     * @param string $routePattern
     * @param string $name
     * @return CollectionInterface
     */
    public function options(string $routePattern, $handler, string $name = null): CollectionInterface
    {
    }

    /**
     * Maps a route to a handler that only matches if the HTTP method is PATCH.
     *
     * @param callable|string $handler
     * @param string $routePattern
     * @param string $name
     * @return CollectionInterface
     */
    public function patch(string $routePattern, $handler, string $name = null): CollectionInterface
    {
    }

    /**
     * Maps a route to a handler that only matches if the HTTP method is POST.
     *
     * @param callable|string $handler
     * @param string $routePattern
     * @param string $name
     * @return CollectionInterface
     */
    public function post(string $routePattern, $handler, string $name = null): CollectionInterface
    {
    }

    /**
     * Maps a route to a handler that only matches if the HTTP method is PUT.
     *
     * @param callable|string $handler
     * @param string $routePattern
     * @param string $name
     * @return CollectionInterface
     */
    public function put(string $routePattern, $handler, string $name = null): CollectionInterface
    {
    }

    /**
     * Sets the main handler.
     *
     * @param callable|string $handler
     * @param bool $lazy
     * @return CollectionInterface
     */
    public function setHandler($handler, bool $lazy = false): CollectionInterface
    {
    }

    /**
     * Sets if the main handler must be lazy loaded
     *
     * @param bool $lazy
     * @return CollectionInterface
     */
    public function setLazy(bool $lazy): CollectionInterface
    {
    }

    /**
     * Sets a prefix for all routes added to the collection
     *
     * @param string $prefix
     * @return CollectionInterface
     */
    public function setPrefix(string $prefix): CollectionInterface
    {
    }

    /**
     * Internal function to add a handler to the group.
     *
     * @param string|array $method
     * @param callable|string $handler
     * @param string $routePattern
     * @param string $name
     */
    protected function addMap($method, string $routePattern, $handler, string $name)
    {
    }
}
