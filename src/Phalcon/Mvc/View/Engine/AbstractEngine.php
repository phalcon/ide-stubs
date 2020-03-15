<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\View\Engine;

use Phalcon\Di\Injectable;
use Phalcon\Mvc\ViewBaseInterface;

/**
 * All the template engine adapters must inherit this class. This provides
 * basic interfacing between the engine and the Phalcon\Mvc\View component.
 */
abstract class AbstractEngine extends Injectable implements \Phalcon\Mvc\View\Engine\EngineInterface
{

    protected $view;


    /**
     * Phalcon\Mvc\View\Engine constructor
     *
     * @param \Phalcon\Mvc\ViewBaseInterface $view
     * @param \Phalcon\Di\DiInterface $container
     */
    public function __construct(\Phalcon\Mvc\ViewBaseInterface $view, \Phalcon\Di\DiInterface $container = null)
    {
    }

    /**
     * Returns cached output on another view stage
     *
     * @return string
     */
    public function getContent(): string
    {
    }

    /**
     * Returns the view component related to the adapter
     *
     * @return ViewBaseInterface
     */
    public function getView(): ViewBaseInterface
    {
    }

    /**
     * Renders a partial inside another view
     *
     * @param array $params
     * @param string $partialPath
     * @return void
     */
    public function partial(string $partialPath, $params = null)
    {
    }
}
