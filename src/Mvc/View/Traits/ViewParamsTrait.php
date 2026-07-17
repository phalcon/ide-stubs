<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\View\Traits;

/**
 * Shared view parameter and content accessors
 *
 * @todo v7 - inspect the View/Simple interfaces (ViewInterface vs ViewBaseInterface) to see whether these accessors can be unified behind a shared contract
 */
trait ViewParamsTrait
{
    /**
     * @var string
     */
    protected $content = '';

    /**
     * @var array
     *
     * @todo Use a default [] once Zephir supports array trait defaults
     */
    protected $registeredEngines = null;

    /**
     * @var array
     *
     * @todo Use a default [] once Zephir supports array trait defaults
     */
    protected $viewParams = null;

    /**
     * Returns output from another view stage
     *
     * @return string
     */
    public function getContent(): string
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
     * @return array
     */
    public function getRegisteredEngines(): array
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
     * Externally sets the view content
     *
     * ```php
     * $this->view->setContent("<h1>hello</h1>");
     * ```
     *
     * @return static
     * @param string $content
     */
    public function setContent(string $content): static
    {
    }

    /**
     * Set a single view parameter
     *
     * ```php
     * $this->view->setVar("products", $products);
     * ```
     *
     * @return static
     * @param string $key
     * @param mixed $value
     */
    public function setVar(string $key, $value): static
    {
    }
}
