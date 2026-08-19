<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Application;

use Closure;
use Phalcon\Application\Exceptions\ModuleNotRegistered;
use Phalcon\Contracts\Application\ApplicationTypes;
use Phalcon\Di\DiInterface;
use Phalcon\Di\Injectable;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Events\Traits\EventsAwareTrait;

/**
 * Base class for Phalcon\Cli\Console and Phalcon\Mvc\Application.
 *
 * @phpstan-import-type application_module_definition from ApplicationTypes
 * @phpstan-import-type application_modules from ApplicationTypes
 */
abstract class AbstractApplication extends Injectable implements \Phalcon\Events\EventsAwareInterface
{
    use \Phalcon\Events\Traits\EventsAwareTrait;


    protected string $defaultModule = '';

    /**
     * @phpstan-var application_modules
     */
    protected array $modules = [];

    /**
     * AbstractApplication constructor.
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
     * Gets the module definition registered in the application via module name
     *
     * @param string $name *
     * @phpstan-return Closure|application_module_definition
     * @return mixed
     */
    public function getModule(string $name): mixed
    {
    }

    /**
     * Return the modules registered in the application
     *
     * @phpstan-return application_modules
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
     * @phpstan-param application_modules $modules
     * @param array $modules
     * @param bool $merge
     * @return static
     */
    public function registerModules(array $modules, bool $merge = false): static
    {
    }

    /**
     * Sets the module name to be used if the router does not return a valid
     * module
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
