<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR;

use Closure;
use Phalcon\ADR\Container\AdrProvider;
use Phalcon\ADR\Events\Event;
use Phalcon\ADR\Exceptions\RouteNotFound;
use Phalcon\Container\Container;
use Phalcon\Container\ContainerFactory;
use Phalcon\Contracts\ADR\Application as ApplicationInterface;
use Phalcon\Contracts\ADR\Dispatcher as DispatcherInterface;
use Phalcon\Contracts\ADR\Router\AttributeFilter as AttributeFilterInterface;
use Phalcon\Contracts\ADR\Router\Router as RouterInterface;
use Phalcon\Contracts\Events\Manager;
use Phalcon\Contracts\Http\AttributeRequest;
use Phalcon\Http\Request\Bag\AttributeBag;
use Phalcon\Http\Response;
use Phalcon\Http\ResponseInterface;

/**
 * ADR composition root. Owns (or accepts) a container, exposes a small
 * registration surface that hides the container's definition API, configures
 * the convention router, and handles the request through the ADR flow.
 *
 * When no container is supplied one is created with the ADR defaults
 * (`AdrProvider`) registered. Type-hinted dependencies autowire; only scalar
 * parameters need to be declared via `define()`.
 */
final class Application implements ApplicationInterface
{
    protected string $actionDirectory = '';

    protected string $baseNamespace = '';

    protected \Phalcon\Container\Container $container;

    /**
     * @var array<string, string[]>
     */
    protected array $middlewareMap = [];

    protected string $wordSeparator = '';

    /**
     * @param \Phalcon\Container\Container|null $container
     */
    public function __construct(?\Phalcon\Container\Container $container = null)
    {
    }

    /**
     * Bind an interface to a concrete class.
     *
     * @param string $interfaceName
     * @param string $concrete
     * @return static
     */
    public function bind(string $interfaceName, string $concrete): static
    {
    }

    /**
     * Register a class together with explicit values for its constructor
     * parameters. Type-hinted dependencies autowire; only the supplied
     * (usually scalar) parameters are declared. Lazy values (e.g.
     * `new Phalcon\Container\Resolver\Lazy\Env(...)`) may be passed as values.
     *
     * @param string $className
     * @param array $parameters
     * @return static
     */
    public function define(string $className, array $parameters = []): static
    {
    }

    /**
     * Register a post-build extender (decorator) for a service.
     *
     * @param string $name
     * @param \Closure $extender
     * @return static
     */
    public function extend(string $name, \Closure $extender): static
    {
    }

    /**
     * Register a factory closure for a service.
     *
     * @param string $name
     * @param \Closure $factory
     * @return static
     */
    public function factory(string $name, \Closure $factory): static
    {
    }

    /**
     * Returns the underlying container for definition-level access.
     *
     * @return Container
     */
    public function getContainer(): Container
    {
    }

    /**
     * Routes the request, writes the matched attributes onto it, dispatches
     * the Action and returns the response. A single try/catch routes any error
     * through the error responder; if that itself fails, a bare 500 is returned
     * so nothing escapes uncaught.
     *
     * @param \Phalcon\Contracts\Http\AttributeRequest $request
     * @return ResponseInterface
     */
    public function handle(\Phalcon\Contracts\Http\AttributeRequest $request): ResponseInterface
    {
    }

    /**
     * Attach a guard (middleware) to every Action under a namespace prefix.
     *
     * @param string $guard
     * @param string $prefix
     * @return static
     */
    public function secureWith(string $guard, string $prefix): static
    {
    }

    /**
     * Register a service with a raw definition (class-string, closure or value).
     *
     * @param string $name
     * @param mixed $definition
     * @return static
     */
    public function set(string $name, $definition): static
    {
    }

    /**
     * Set the filesystem root that backs the base namespace.
     *
     * @param string $actionDirectory
     * @return static
     */
    public function setActionDirectory(string $actionDirectory): static
    {
    }

    /**
     * Set the base namespace the convention router derives Actions from.
     *
     * @param string $baseNamespace
     * @return static
     */
    public function setBaseNamespace(string $baseNamespace): static
    {
    }

    /**
     * Set the single delimiter between words in a path segment.
     *
     * @param string $wordSeparator
     * @return static
     */
    public function setWordSeparator(string $wordSeparator): static
    {
    }
}
