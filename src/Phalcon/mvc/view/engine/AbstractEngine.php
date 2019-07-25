<?php

namespace Phalcon\Mvc\View\Engine;

/**
 * All the template engine adapters must inherit this class. This provides
 * basic interfacing between the engine and the Phalcon\Mvc\View component.
 */
abstract class AbstractEngine extends \Phalcon\Di\Injectable implements \Phalcon\Mvc\View\Engine\EngineInterface
{

    protected $view;


    /**
     * Phalcon\Mvc\View\Engine constructor
     *
     * @param \Phalcon\Mvc\ViewBaseInterface $view
     * @param \Phalcon\Di\DiInterface $container
     */
    public function __construct(\Phalcon\Mvc\ViewBaseInterface $view, \Phalcon\Di\DiInterface $container = null) {}

    /**
     * Returns cached output on another view stage
     *
     * @return string
     */
    public function getContent(): string {}

    /**
     * Returns the view component related to the adapter
     *
     * @return \Phalcon\Mvc\ViewBaseInterface
     */
    public function getView(): ViewBaseInterface {}

    /**
     * Renders a partial inside another view
     *
     * @param string $partialPath
     * @param array $params
     * @return string
     */
    public function partial(string $partialPath, $params = null): string {}

}
