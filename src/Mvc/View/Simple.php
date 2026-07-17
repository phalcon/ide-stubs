<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\View;

use Closure;
use Phalcon\Di\DiInterface;
use Phalcon\Di\Injectable;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Mvc\View\Engine\EngineInterface;
use Phalcon\Mvc\View\Engine\Php as PhpEngine;
use Phalcon\Mvc\View\Exceptions\InvalidEngineRegistration;
use Phalcon\Mvc\View\Exceptions\SimpleViewNotFound;
use Phalcon\Mvc\View\Exceptions\SimpleViewServicesUnavailable;
use Phalcon\Mvc\View\Traits\ViewParamsTrait;
use Phalcon\Mvc\ViewBaseInterface;
use Phalcon\Traits\Php\FileTrait;
use Phalcon\Traits\Support\Helper\Str\DirSeparatorTrait;

/**
 * This component allows to render views without hierarchical levels
 *
 * ```php
 * use Phalcon\Mvc\View\Simple as View;
 *
 * $view = new View();
 *
 * // Render a view
 * echo $view->render(
 *     "templates/my-view",
 *     [
 *         "some" => $param,
 *     ]
 * );
 *
 * // Or with filename with extension
 * echo $view->render(
 *     "templates/my-view.volt",
 *     [
 *         "parameter" => $here,
 *     ]
 * );
 * ```
 */
class Simple extends Injectable implements \Phalcon\Mvc\ViewBaseInterface, \Phalcon\Events\EventsAwareInterface
{
    use \Phalcon\Traits\Support\Helper\Str\DirSeparatorTrait;
    use \Phalcon\Traits\Php\FileTrait;
    use \Phalcon\Mvc\View\Traits\ViewParamsTrait;


    /**
     * @var string
     */
    protected $activeRenderPath;

    /**
     * @var EngineInterface[]|false
     */
    protected $engines = false;

    /**
     * @var ManagerInterface|null
     */
    protected $eventsManager;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var string
     */
    protected $viewsDir;

    /**
     * Phalcon\Mvc\View\Simple constructor
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
    }

    /**
     * Magic method to retrieve a variable passed to the view
     *
     * ```php
     * echo $this->view->products;
     * ```
     *
     * @return mixed|null
     * @param string $key
     */
    public function __get(string $key): mixed
    {
    }

    /**
     * Magic method to pass variables to the views
     *
     * ```php
     * $this->view->products = $products;
     * ```
     *
     * @return void
     * @param string $key
     * @param mixed $value
     */
    public function __set(string $key, $value): void
    {
    }

    /**
     * Returns the path of the view that is currently rendered
     *
     * @return string
     */
    public function getActiveRenderPath(): string
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
     * Gets views directory
     *
     * @return string
     */
    public function getViewsDir(): string
    {
    }

    /**
     * Renders a partial view
     *
     * ```php
     * // Show a partial inside another view
     * $this->partial("shared/footer");
     * ```
     *
     * ```php
     * // Show a partial inside another view with parameters
     * $this->partial(
     *     "shared/footer",
     *     [
     *         "content" => $html,
     *     ]
     * );
     * ```
     *
     * @return void
     * @param string $partialPath
     * @param mixed $params
     */
    public function partial(string $partialPath, $params = null): void
    {
    }

    /**
     * Register templating engines
     *
     * ```php
     * $this->view->registerEngines(
     *     [
     *         ".phtml" => \Phalcon\Mvc\View\Engine\Php::class,
     *         ".volt"  => \Phalcon\Mvc\View\Engine\Volt::class,
     *         ".mhtml" => \MyCustomEngine::class,
     *     ]
     * );
     * ```
     *
     * @return void
     * @param array $engines
     */
    public function registerEngines(array $engines): void
    {
    }

    /**
     * Renders a view
     *
     * @return string
     * @param string $path
     * @param array $params
     */
    public function render(string $path, array $params = []): string
    {
    }

    /**
     * Sets the events manager
     *
     * @return void
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager): void
    {
    }

    /**
     * Adds parameters to views (alias of setVar)
     *
     * ```php
     * $this->view->setParamToView("products", $products);
     * ```
     *
     * @return static
     * @param string $key
     * @param mixed $value
     */
    public function setParamToView(string $key, $value): static
    {
    }

    /**
     * Set all the render params
     *
     * ```php
     * $this->view->setVars(
     *     [
     *         "products" => $products,
     *     ]
     * );
     * ```
     *
     * @return static
     * @param array $params
     * @param bool $merge
     */
    public function setVars(array $params, bool $merge = true): static
    {
    }

    /**
     * Sets views directory
     *
     * @return void
     * @param string $viewsDir
     */
    public function setViewsDir(string $viewsDir): void
    {
    }

    /**
     * Loads registered template engines, if none are registered it will use
     * Phalcon\Mvc\View\Engine\Php
     *
     * @return array
     */
    protected function loadTemplateEngines(): array
    {
    }

    /**
     * Tries to render the view with every engine registered in the component
     *
     * @param string $path
     * @param array $params *
     * @return void
     */
    final protected function internalRender(string $path, $params): void
    {
    }
}
