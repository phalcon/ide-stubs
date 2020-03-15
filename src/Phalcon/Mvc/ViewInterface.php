<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc;

/**
 * Phalcon\Mvc\ViewInterface
 *
 * Interface for Phalcon\Mvc\View
 */
interface ViewInterface extends \Phalcon\Mvc\ViewBaseInterface
{

    /**
     * Resets any template before layouts
     */
    public function cleanTemplateAfter();

    /**
     * Resets any template before layouts
     */
    public function cleanTemplateBefore();

    /**
     * Disables the auto-rendering process
     */
    public function disable();

    /**
     * Enables the auto-rendering process
     */
    public function enable();

    /**
     * Finishes the render process by stopping the output buffering
     */
    public function finish();

    /**
     * Gets the name of the action rendered
     *
     * @return string
     */
    public function getActionName(): string;

    /**
     * Returns the path of the view that is currently rendered
     *
     * @return string|array
     */
    public function getActiveRenderPath();

    /**
     * Gets base path
     *
     * @return string
     */
    public function getBasePath(): string;

    /**
     * Gets the name of the controller rendered
     *
     * @return string
     */
    public function getControllerName(): string;

    /**
     * Returns the name of the main view
     *
     * @return string
     */
    public function getLayout(): string;

    /**
     * Gets the current layouts sub-directory
     *
     * @return string
     */
    public function getLayoutsDir(): string;

    /**
     * Returns the name of the main view
     *
     * @return string
     */
    public function getMainView(): string;

    /**
     * Gets the current partials sub-directory
     *
     * @return string
     */
    public function getPartialsDir(): string;

    /**
     * Whether the automatic rendering is disabled
     *
     * @return bool
     */
    public function isDisabled(): bool;

    /**
     * Choose a view different to render than last-controller/last-action
     *
     * @param string $renderView
     */
    public function pick(string $renderView);

    /**
     * Register templating engines
     *
     * @param array $engines
     */
    public function registerEngines(array $engines);

    /**
     * Executes render process from dispatching data
     *
     * @param string $controllerName
     * @param string $actionName
     * @param array $params
     * @return mixed
     */
    public function render(string $controllerName, string $actionName, array $params = array());

    /**
     * Resets the view component to its factory default values
     */
    public function reset();

    /**
     * Sets base path. Depending of your platform, always add a trailing slash
     * or backslash
     *
     * @param string $basePath
     */
    public function setBasePath(string $basePath);

    /**
     * Change the layout to be used instead of using the name of the latest
     * controller name
     *
     * @param string $layout
     */
    public function setLayout(string $layout);

    /**
     * Sets the layouts sub-directory. Must be a directory under the views
     * directory. Depending of your platform, always add a trailing slash or
     * backslash
     *
     * @param string $layoutsDir
     */
    public function setLayoutsDir(string $layoutsDir);

    /**
     * Sets default view name. Must be a file without extension in the views
     * directory
     *
     * @param string $viewPath
     */
    public function setMainView(string $viewPath);

    /**
     * Sets a partials sub-directory. Must be a directory under the views
     * directory. Depending of your platform, always add a trailing slash or
     * backslash
     *
     * @param string $partialsDir
     */
    public function setPartialsDir(string $partialsDir);

    /**
     * Sets the render level for the view
     *
     * @param int $level
     * @return ViewInterface
     */
    public function setRenderLevel(int $level): ViewInterface;

    /**
     * Appends template after controller layout
     *
     * @param string|array $templateAfter
     */
    public function setTemplateAfter($templateAfter);

    /**
     * Appends template before controller layout
     *
     * @param string|array $templateBefore
     */
    public function setTemplateBefore($templateBefore);

    /**
     * Starts rendering process enabling the output buffering
     */
    public function start();
}
