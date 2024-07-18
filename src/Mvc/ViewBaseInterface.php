<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc;

use Phalcon\Cache\Adapter\AdapterInterface;

/**
 * Phalcon\Mvc\ViewInterface
 *
 * Interface for Phalcon\Mvc\View and Phalcon\Mvc\View\Simple
 */
interface ViewBaseInterface
{
    /**
     * Returns cached output from another view stage
     *
     * @return string
     */
    public function getContent(): string;

    /**
     * Returns parameters to views
     *
     * @return array
     */
    public function getParamsToView(): array;

    /**
     * Gets views directory
     *
     * @return string|array
     */
    public function getViewsDir(): string|array;

    /**
     * Renders a partial view
     *
     * @param string $partialPath
     * @param mixed $params
     */
    public function partial(string $partialPath, $params = null);

    /**
     * Externally sets the view content
     *
     * @param string $content
     */
    public function setContent(string $content);

    /**
     * Adds parameters to views (alias of setVar)
     *
     * @param string $key
     * @param mixed $value
     */
    public function setParamToView(string $key, $value);

    /**
     * Adds parameters to views
     *
     * @param string $key
     * @param mixed $value
     */
    public function setVar(string $key, $value);

    /**
     * Sets views directory. Depending of your platform, always add a trailing
     * slash or backslash
     *
     * @param string $viewsDir
     */
    public function setViewsDir(string $viewsDir);
}
