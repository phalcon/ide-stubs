<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\ADR\Front;

use Throwable;
use Phalcon\ADR\Application;
use Phalcon\ADR\Container\AdrProvider;
use Phalcon\Container\Container;
use Phalcon\Contracts\ADR\Application as ApplicationInterface;
use Phalcon\Contracts\ADR\Emitter\Emitter;
use Phalcon\Contracts\Front\FrontController;
use Phalcon\Contracts\Http\AttributeRequest;

/**
 * Boots a container, builds the Application, handles the request and emits the
 * response. Userland front controllers override `loadEnvironment()`,
 * `registerProviders()` and optionally `getApplication()`; bootstrap is
 * `exit((new AppFront(dirname(__DIR__)))->run());`.
 */
abstract class AbstractHttpFront implements \Phalcon\Contracts\Front\FrontController
{
    /**
     * @var Container|null
     */
    protected ?\Phalcon\Container\Container $container = null;

    /**
     * @var string
     */
    protected string $projectRoot = '';

    /**
     * @param string $projectRoot
     */
    public function __construct(string $projectRoot)
    {
    }

    /**
     * Builds the container, loads the environment and registers the providers,
     * returning the container for consumers that need it before (or instead
     * of) `run()`. The container is built once and cached, so calling `boot()`
     * and then `run()` reuses the same instance.
     *
     * @return Container
     */
    final public function boot(): Container
    {
    }

    /**
     * @return int<0,254>
     */
    final public function run(): int
    {
    }

    /**
     * @return Container
     */
    protected function buildContainer(): Container
    {
    }

    /**
     * Builds the Application the front will hand the request to. Override to
     * configure it (`setBaseNamespace()`/`secureWith()`) or to wire a different
     * `Phalcon\Contracts\ADR\Application` implementation.
     *
     * @param \Phalcon\Container\Container $container
     * @return ApplicationInterface
     */
    protected function getApplication(\Phalcon\Container\Container $container): ApplicationInterface
    {
    }

    /**
     * @param \Throwable $exception
     * @return int
     */
    protected function handleBootError(\Throwable $exception): int
    {
    }

    /**
     * @param \Phalcon\Container\Container $container
     * @return void
     */
    protected function loadEnvironment(\Phalcon\Container\Container $container): void
    {
    }

    /**
     * @param \Phalcon\Container\Container $container
     * @return void
     */
    protected function registerProviders(\Phalcon\Container\Container $container): void
    {
    }
}
