<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc;

use Closure;
use Phalcon\Di\DiInterface;
use Phalcon\Di\Injectable;
use Phalcon\Events\ManagerInterface;
use Phalcon\Mvc\View\Exception;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Mvc\View\Engine\Php as PhpEngine;

/**
 * Phalcon\Mvc\View
 *
 * Phalcon\Mvc\View is a class for working with the "view" portion of the
 * model-view-controller pattern. That is, it exists to help keep the view
 * script separate from the model and controller scripts. It provides a system
 * of helpers, output filters, and variable escaping.
 *
 * ```php
 * use Phalcon\Mvc\View;
 *
 * $view = new View();
 *
 * // Setting views directory
 * $view->setViewsDir("app/views/");
 *
 * $view->start();
 *
 * // Shows recent posts view (app/views/posts/recent.phtml)
 * $view->render("posts", "recent");
 * $view->finish();
 *
 * // Printing views output
 * echo $view->getContent();
 * ```
 */
class View extends Injectable implements \Phalcon\Mvc\ViewInterface, \Phalcon\Events\EventsAwareInterface
{
    /**
     * Render Level: To the action view
     */
    const LEVEL_ACTION_VIEW = 1;

    /**
     * Render Level: To the templates "before"
     */
    const LEVEL_BEFORE_TEMPLATE = 2;

    /**
     * Render Level: To the controller layout
     */
    const LEVEL_LAYOUT = 3;

    /**
     * Render Level: To the main layout
     */
    const LEVEL_MAIN_LAYOUT = 5;

    /**
     * Render Level: No render any view
     */
    const LEVEL_NO_RENDER = 0;

    /**
     * Render Level: Render to the templates "after"
     */
    const LEVEL_AFTER_TEMPLATE = 4;

    /**
     * @var string
     */
    protected $actionName;

    /**
     * @var array
     */
    protected $activeRenderPaths;

    /**
     * @var string
     */
    protected $basePath = '';

    /**
     * @var string
     */
    protected $content = '';

    /**
     * @var string
     */
    protected $controllerName;

    /**
     * @var int
     */
    protected $currentRenderLevel = 0;

    /**
     * @var bool
     */
    protected $disabled = false;

    /**
     * @var array
     */
    protected $disabledLevels = [];

    /**
     * @var array|bool
     */
    protected $engines = false;

    /**
     * @var ManagerInterface|null
     */
    protected $eventsManager;

    /**
     * @var string|null
     */
    protected $layout = null;

    /**
     * @var string
     */
    protected $layoutsDir = '';

    /**
     * @var string
     */
    protected $mainView = 'index';

    /**
     * @var array
     */
    protected $options = [];

    /**
     * @var array
     */
    protected $params = [];

    /**
     * @var array|null
     */
    protected $pickView;

    /**
     * @var string
     */
    protected $partialsDir = '';

    /**
     * @var array
     */
    protected $registeredEngines = [];

    /**
     * @var int
     */
    protected $renderLevel = 5;

    /**
     * @var array
     */
    protected $templatesAfter = [];

    /**
     * @var array
     */
    protected $templatesBefore = [];

    /**
     * @var array
     */
    protected $viewsDirs = [];

    /**
     * @var array
     */
    protected $viewParams = [];

    /**
     * Phalcon\Mvc\View constructor
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
     * @param string $key
     * @return mixed|null
     */
    public function __get(string $key): mixed
    {
    }

    /**
     * Magic method to retrieve if a variable is set in the view
     *
     * ```php
     * echo isset($this->view->products);
     * ```
     *
     * @param string $key
     * @return bool
     */
    public function __isset(string $key): bool
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
     * Resets any template before layouts
     *
     * @return View
     */
    public function cleanTemplateAfter(): View
    {
    }

    /**
     * Resets any "template before" layouts
     *
     * @return View
     */
    public function cleanTemplateBefore(): View
    {
    }

    /**
     * Disables a specific level of rendering
     *
     * ```php
     * // Render all levels except ACTION level
     * $this->view->disableLevel(
     *     View::LEVEL_ACTION_VIEW
     * );
     * ```
     *
     * @param mixed $level
     * @return ViewInterface
     */
    public function disableLevel($level): ViewInterface
    {
    }

    /**
     * Disables the auto-rendering process
     *
     * @return View
     */
    public function disable(): View
    {
    }

    /**
     * Enables the auto-rendering process
     *
     * @return View
     */
    public function enable(): View
    {
    }

    /**
     * Checks whether view exists
     *
     * @deprecated
     * @param string $view
     * @return bool
     */
    public function exists(string $view): bool
    {
    }

    /**
     * Finishes the render process by stopping the output buffering
     *
     * @return View
     */
    public function finish(): View
    {
    }

    /**
     * Gets the name of the action rendered
     *
     * @return string
     */
    public function getActionName(): string
    {
    }

    /**
     * Returns the path (or paths) of the views that are currently rendered
     *
     * @return string|array
     */
    public function getActiveRenderPath(): string|array
    {
    }

    /**
     * Gets base path
     *
     * @return string
     */
    public function getBasePath(): string
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
     * Gets the name of the controller rendered
     *
     * @return string
     */
    public function getControllerName(): string
    {
    }

    /**
     * @return int
     */
    public function getCurrentRenderLevel(): int
    {
    }

    /**
     * @return array
     */
    public function getRegisteredEngines(): array
    {
    }

    /**
     * @return int
     */
    public function getRenderLevel(): int
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
     * Returns the name of the main view
     *
     * @return string
     */
    public function getLayout(): string
    {
    }

    /**
     * Gets the current layouts sub-directory
     *
     * @return string
     */
    public function getLayoutsDir(): string
    {
    }

    /**
     * Returns the name of the main view
     *
     * @return string
     */
    public function getMainView(): string
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
     * Renders a partial view
     *
     * ```php
     * // Retrieve the contents of a partial
     * echo $this->getPartial("shared/footer");
     * ```
     *
     * ```php
     * // Retrieve the contents of a partial with arguments
     * echo $this->getPartial(
     *     "shared/footer",
     *     [
     *         "content" => $html,
     *     ]
     * );
     * ```
     *
     * @param string $partialPath
     * @param mixed $params
     * @return string
     */
    public function getPartial(string $partialPath, $params = null): string
    {
    }

    /**
     * Gets the current partials sub-directory
     *
     * @return string
     */
    public function getPartialsDir(): string
    {
    }

    /**
     * Perform the automatic rendering returning the output as a string
     *
     * ```php
     * $template = $this->view->getRender(
     *     "products",
     *     "show",
     *     [
     *         "products" => $products,
     *     ]
     * );
     * ```
     *
     * @param mixed $configCallback
     * @param string $controllerName
     * @param string $actionName
     * @param array $params
     * @return string
     */
    public function getRender(string $controllerName, string $actionName, array $params = [], $configCallback = null): string
    {
    }

    /**
     * Returns a parameter previously set in the view
     *
     * @return mixed|null
     * @param string $key
     */
    public function getVar(string $key): mixed
    {
    }

    /**
     * Gets views directory
     *
     * @return string|array
     */
    public function getViewsDir(): string|array
    {
    }

    /**
     * Gets views directories
     *
     * @return array
     */
    protected function getViewsDirs(): array
    {
    }

    /**
     * Checks whether view exists
     *
     * @param string $view
     * @return bool
     */
    public function has(string $view): bool
    {
    }

    /**
     * Whether automatic rendering is enabled
     *
     * @return bool
     */
    public function isDisabled(): bool
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
     * Choose a different view to render instead of last-controller/last-action
     *
     * ```php
     * use Phalcon\Mvc\Controller;
     *
     * class ProductsController extends Controller
     * {
     *     public function saveAction()
     *     {
     *         // Do some save stuff...
     *
     *         // Then show the list view
     *         $this->view->pick("products/list");
     *     }
     * }
     * ```
     *
     * @param mixed $renderView
     * @return View
     */
    public function pick($renderView): View
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
     * @return View
     */
    public function registerEngines(array $engines): View
    {
    }

    /**
     * Executes render process from dispatching data
     *
     * ```php
     * // Shows recent posts view (app/views/posts/recent.phtml)
     * $view->start()->render("posts", "recent")->finish();
     * ```
     *
     * @param string $controllerName
     * @param string $actionName
     * @param array $params
     * @return bool|View
     */
    public function render(string $controllerName, string $actionName, array $params = []): View|bool
    {
    }

    /**
     * Resets the view component to its factory default values
     *
     * @return View
     */
    public function reset(): View
    {
    }

    /**
     * Sets base path. Depending of your platform, always add a trailing slash
     * or backslash
     *
     * ```php
     * $view->setBasePath(__DIR__ . "/");
     * ```
     *
     * @param string $basePath
     * @return View
     */
    public function setBasePath(string $basePath): View
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
     * @return View
     */
    public function setContent(string $content): View
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

    /**
     * Change the layout to be used instead of using the name of the latest
     * controller name
     *
     * ```php
     * $this->view->setLayout("main");
     * ```
     *
     * @param string $layout
     * @return View
     */
    public function setLayout(string $layout): View
    {
    }

    /**
     * Sets the layouts sub-directory. Must be a directory under the views
     * directory. Depending of your platform, always add a trailing slash or
     * backslash
     *
     * ```php
     * $view->setLayoutsDir("../common/layouts/");
     * ```
     *
     * @param string $layoutsDir
     * @return View
     */
    public function setLayoutsDir(string $layoutsDir): View
    {
    }

    /**
     * Sets default view name. Must be a file without extension in the views
     * directory
     *
     * ```php
     * // Renders as main view views-dir/base.phtml
     * $this->view->setMainView("base");
     * ```
     *
     * @param string $viewPath
     * @return View
     */
    public function setMainView(string $viewPath): View
    {
    }

    /**
     * Sets a partials sub-directory. Must be a directory under the views
     * directory. Depending of your platform, always add a trailing slash or
     * backslash
     *
     * ```php
     * $view->setPartialsDir("../common/partials/");
     * ```
     *
     * @param string $partialsDir
     * @return View
     */
    public function setPartialsDir(string $partialsDir): View
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
     * @return View
     */
    public function setParamToView(string $key, $value): View
    {
    }

    /**
     * Sets the render level for the view
     *
     * ```php
     * // Render the view related to the controller only
     * $this->view->setRenderLevel(
     *     View::LEVEL_LAYOUT
     * );
     * ```
     *
     * @param int $level
     * @return ViewInterface
     */
    public function setRenderLevel(int $level): ViewInterface
    {
    }

    /**
     * Sets a "template after" controller layout
     *
     * @param mixed $templateAfter
     * @return View
     */
    public function setTemplateAfter($templateAfter): View
    {
    }

    /**
     * Sets a template before the controller layout
     *
     * @param mixed $templateBefore
     * @return View
     */
    public function setTemplateBefore($templateBefore): View
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
     * @return View
     */
    public function setVar(string $key, $value): View
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
     * @return View
     */
    public function setVars(array $params, bool $merge = true): View
    {
    }

    /**
     * Sets the views directory. Depending of your platform,
     * always add a trailing slash or backslash
     *
     * @param mixed $viewsDir
     * @return View
     */
    public function setViewsDir($viewsDir): View
    {
    }

    /**
     * Starts rendering process enabling the output buffering
     *
     * @return View
     */
    public function start(): View
    {
    }

    /**
     * Renders the view and returns it as a string
     *
     * @param string $controllerName
     * @param string $actionName
     * @param array $params
     * @return string
     */
    public function toString(string $controllerName, string $actionName, array $params = []): string
    {
    }

    /**
     * Checks whether view exists on registered extensions and render it
     *
     * @param array $engines
     * @param string $viewPath
     * @param bool $silence
     * @param bool $mustClean
     */
    protected function engineRender(array $engines, string $viewPath, bool $silence, bool $mustClean = true)
    {
    }

    /**
     * Checks if a path is absolute or not
     *
     * @param string $path
     */
    final protected function isAbsolutePath(string $path)
    {
    }

    /**
     * Loads registered template engines, if none is registered it will use
     * Phalcon\Mvc\View\Engine\Php
     *
     * @return array
     */
    protected function loadTemplateEngines(): array
    {
    }

    /**
     * Processes the view and templates; Fires events if needed
     *
     * @param string $controllerName
     * @param string $actionName
     * @param array $params
     * @param bool $fireEvents
     * @return bool
     */
    public function processRender(string $controllerName, string $actionName, array $params = [], bool $fireEvents = true): bool
    {
    }

    /**
     * @todo Remove this when we get traits
     * @param string $directory
     * @return string
     */
    private function getDirSeparator(string $directory): string
    {
    }
}
