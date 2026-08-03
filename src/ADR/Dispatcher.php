<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR;

use Phalcon\ADR\Events\Event;
use Phalcon\ADR\Exceptions\NotAnAction;
use Phalcon\Contracts\ADR\Action;
use Phalcon\Contracts\ADR\Dispatcher as DispatcherInterface;
use Phalcon\Contracts\Container\Ioc\IocContainer;
use Phalcon\Contracts\Events\Manager;
use Phalcon\Contracts\Http\AttributeRequest;
use Phalcon\Http\ResponseInterface;

/**
 * Resolves the Action (and middleware) through the container, wraps it in the
 * pipeline and runs it, firing the `pipeline:` events. Global middleware is
 * resolved once and cached; only route middleware resolves per request.
 *
 * The container resolution is the one deliberate Service Locator: it uses the
 * resolve-only `IocContainer` contract, so a container swap is a two-method
 * adapter. Everything else is constructor-injected.
 */
final class Dispatcher implements DispatcherInterface
{
    protected \Phalcon\Contracts\Container\Ioc\IocContainer $container;

    protected \Phalcon\Contracts\Events\Manager $events;

    /**
     * @var array
     */
    protected array $globalMiddleware = [];

    /**
     * @var array|null
     */
    protected ?array $resolvedGlobal = null;

    /**
     * @param \Phalcon\Contracts\Container\Ioc\IocContainer $container
     * @param \Phalcon\Contracts\Events\Manager $events
     * @param array $globalMiddleware
     */
    public function __construct(\Phalcon\Contracts\Container\Ioc\IocContainer $container, \Phalcon\Contracts\Events\Manager $events, array $globalMiddleware = [])
    {
    }

    /**
     * @param string $actionClass
     * @param \Phalcon\Contracts\Http\AttributeRequest $request
     * @param array $routeMiddleware
     * @return ResponseInterface
     */
    public function dispatch(string $actionClass, \Phalcon\Contracts\Http\AttributeRequest $request, array $routeMiddleware = []): ResponseInterface
    {
    }

    /**
     * @param array $classes
     * @return array
     */
    protected function resolveAll(array $classes): array
    {
    }

    /**
     * @return array
     */
    protected function resolveGlobal(): array
    {
    }
}
