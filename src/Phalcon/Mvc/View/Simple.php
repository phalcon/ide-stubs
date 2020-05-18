<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\View;

use Phalcon\Di\Injectable;
use Phalcon\Events\ManagerInterface;

/**
 * Phalcon\Mvc\View\Simple
 *
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

    protected $activeRenderPath;


    protected $content;

    /**
     * @var \Phalcon\Mvc\View\EngineInterface[]|false
     */
    protected $engines = false;


    protected $eventsManager;


    protected $options;


    protected $partialsDir;

    /**
     * @var array|null
     */
    protected $registeredEngines;


    protected $viewsDir;


    protected $viewParams = array();


    /**
     * @return array|null
     */
    public function getRegisteredEngines(): ?array
    {
    }

    /**
     * Phalcon\Mvc\View\Simple constructor
     *
     * @param array $options
     */
    public function __construct(array $options = array())
    {
    }

    /**
     * Magic method to retrieve a variable passed to the view
     *
     * ```php
     * echo $this->view->products;
     * ```
     *
     * @param string $key
     * @return mixed|null
     */
    public function __get(string $key)
    {
    }

    /**
     * Magic method to pass variables to the views
     *
     * ```php
     * $this->view->products = $products;
     * ```
     *
     * @param string $key
     * @param mixed $value
     */
    public function __set(string $key, $value)
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
     * Returns output from another view stage
     *
     * @return string
     */
    public function getContent(): string
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return \Phalcon\Events\ManagerInterface|null
     */
    public function getEventsManager(): ?ManagerInterface
    {
    }

    /**
     * Returns parameters to views
     *
     * @return array
     */
    public function getParamsToView(): array
    {
    }

    /**
     * Returns a parameter previously set in the view
     *
     * @param string $key
     * @return mixed|null
     */
    public function getVar(string $key)
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
     * @param string $partialPath
     * @param mixed $params
     */
    public function partial(string $partialPath, $params = null)
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
     * @param array $engines
     */
    public function registerEngines(array $engines)
    {
    }

    /**
     * Renders a view
     *
     * @param string $path
     * @param array $params
     * @return string
     */
    public function render(string $path, array $params = array()): string
    {
    }

    /**
     * Externally sets the view content
     *
     * ```php
     * $this->view->setContent("<h1>hello</h1>");
     * ```
     *
     * @param string $content
     * @return Simple
     */
    public function setContent(string $content): Simple
    {
    }

    /**
     * Sets the events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     * @return void
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

    /**
     * Adds parameters to views (alias of setVar)
     *
     * ```php
     * $this->view->setParamToView("products", $products);
     * ```
     *
     * @param string $key
     * @param mixed $value
     * @return Simple
     */
    public function setParamToView(string $key, $value): Simple
    {
    }

    /**
     * Set a single view parameter
     *
     * ```php
     * $this->view->setVar("products", $products);
     * ```
     *
     * @param string $key
     * @param mixed $value
     * @return Simple
     */
    public function setVar(string $key, $value): Simple
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
     * @param array $params
     * @param bool $merge
     * @return Simple
     */
    public function setVars(array $params, bool $merge = true): Simple
    {
    }

    /**
     * Sets views directory
     *
     * @param string $viewsDir
     */
    public function setViewsDir(string $viewsDir)
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
     * @param array $params
     * @param string $path
     */
    final protected function internalRender(string $path, $params)
    {
    }
}
