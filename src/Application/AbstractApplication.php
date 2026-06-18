<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Application;

use Phalcon\Application\Exceptions\ModuleNotRegistered;
use Phalcon\Di\DiInterface;
use Phalcon\Di\Injectable;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;

/**
 * Base class for Phalcon\Cli\Console and Phalcon\Mvc\Application.
 */
abstract class AbstractApplication extends Injectable implements \Phalcon\Events\EventsAwareInterface
{
    /**
     * @var string
     */
    protected $defaultModule = '';

    /**
     * @var ManagerInterface|null
     */
    protected $eventsManager = null;

    /**
     * @var array
     */
    protected $modules = [];

    /**
     * Phalcon\AbstractApplication constructor
     *
     * @param \Phalcon\Di\DiInterface|null $container
     */
    public function __construct(?\Phalcon\Di\DiInterface $container = null)
    {
    }

    /**
     * Returns the default module name
     *
     * @return string
     */
    public function getDefaultModule(): string
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface|null
     */
    public function getEventsManager(): ManagerInterface|null
    {
    }

    /**
     * Gets the module definition registered in the application via module name
     *
     * @param string $name *
     * @return array|object
     */
    public function getModule(string $name): object|array
    {
    }

    /**
     * Return the modules registered in the application
     *
     * @return array
     */
    public function getModules(): array
    {
    }

    /**
     * Register an array of modules present in the application
     *
     * ```php
     * $this->registerModules(
     *     [
     *         "frontend" => [
     *             "className" => \Multiple\Frontend\Module::class,
     *             "path"      => "../apps/frontend/Module.php",
     *         ],
     *         "backend" => [
     *             "className" => \Multiple\Backend\Module::class,
     *             "path"      => "../apps/backend/Module.php",
     *         ],
     *     ]
     * );
     * ```
     *
     * @param array $modules
     * @param bool $merge
     * @return static
     */
    public function registerModules(array $modules, bool $merge = false): static
    {
    }

    /**
     * Sets the module name to be used if the router does not return a valid module
     *
     * @param string $defaultModule
     * @return static
     */
    public function setDefaultModule(string $defaultModule): static
    {
    }

    /**
     * Sets the events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     * @return void
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager): void
    {
    }
}
