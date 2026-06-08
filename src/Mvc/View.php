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
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Mvc\View\Engine\Php as PhpEngine;
use Phalcon\Mvc\View\Exception;
use Phalcon\Mvc\View\Exceptions\InvalidEngineRegistration;
use Phalcon\Mvc\View\Exceptions\InvalidViewsDirType;
use Phalcon\Mvc\View\Exceptions\ViewNotFound;
use Phalcon\Mvc\View\Exceptions\ViewServicesUnavailable;
use Phalcon\Mvc\View\Exceptions\ViewsDirItemMustBeString;

/**
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
     *
     * @var int
     */
    const int LEVEL_ACTION_VIEW = 1;

    /**
     * Render Level: To the templates "before"
     *
     * @var int
     */
    const int LEVEL_BEFORE_TEMPLATE = 2;

    /**
     * Render Level: To the controller layout
     *
     * @var int
     */
    const int LEVEL_LAYOUT = 3;

    /**
     * Render Level: To the main layout
     *
     * @var int
     */
    const int LEVEL_MAIN_LAYOUT = 5;

    /**
     * Render Level: No render any view
     *
     * @var int
     */
    const int LEVEL_NO_RENDER = 0;

    /**
     * Render Level: Render to the templates "after"
     *
     * @var int
     */
    const int LEVEL_AFTER_TEMPLATE = 4;

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
     * @return static
     */
    public function cleanTemplateAfter(): static
    {
    }

    /**
     * Resets any "template before" layouts
     *
     * @return static
     */
    public function cleanTemplateBefore(): static
    {
    }

    /**
     * Disables the auto-rendering process
     *
     * @return static
     */
    public function disable(): static
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
     * @return static
     */
    public function disableLevel($level): static
    {
    }

    /**
     * Enables the auto-rendering process
     *
     * @return static
     */
    public function enable(): static
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
     * @return static
     */
    public function finish(): static
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
     * @return string|null
     */
    public function getLayout(): string|null
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
     * @return array
     */
    public function getRegisteredEngines(): array
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
     * @return int
     */
    public function getRenderLevel(): int
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
     * @return static
     */
    public function pick($renderView): static
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
     * @return static
     */
    public function registerEngines(array $engines): static
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
     * @return false|static
     */
    public function render(string $controllerName, string $actionName, array $params = []): static|false
    {
    }

    /**
     * Resets the view component to its factory default values
     *
     * @return static
     */
    public function reset(): static
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
     * @return static
     */
    public function setBasePath(string $basePath): static
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
     * @return static
     */
    public function setContent(string $content): static
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
     * @return static
     */
    public function setLayout(string $layout): static
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
     * @return static
     */
    public function setLayoutsDir(string $layoutsDir): static
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
     * @return static
     */
    public function setMainView(string $viewPath): static
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
     * @return static
     */
    public function setParamToView(string $key, $value): static
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
     * @return static
     */
    public function setPartialsDir(string $partialsDir): static
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
     * @return static
     */
    public function setRenderLevel(int $level): static
    {
    }

    /**
     * Sets a "template after" controller layout
     *
     * @param mixed $templateAfter
     * @return static
     */
    public function setTemplateAfter($templateAfter): static
    {
    }

    /**
     * Sets a template before the controller layout
     *
     * @param mixed $templateBefore
     * @return static
     */
    public function setTemplateBefore($templateBefore): static
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
     * @return static
     */
    public function setVar(string $key, $value): static
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
     * @return static
     */
    public function setVars(array $params, bool $merge = true): static
    {
    }

    /**
     * Sets the views directory. Depending of your platform,
     * always add a trailing slash or backslash
     *
     * @param mixed $viewsDir
     * @return static
     */
    public function setViewsDir($viewsDir): static
    {
    }

    /**
     * Starts rendering process enabling the output buffering
     *
     * @return static
     */
    public function start(): static
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
     * Gets views directories
     *
     * @return array
     */
    protected function getViewsDirs(): array
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
     * @todo Remove this when we get traits
     * @param string $directory
     * @return string
     */
    private function getDirSeparator(string $directory): string
    {
    }
}
