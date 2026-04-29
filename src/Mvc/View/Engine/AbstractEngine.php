<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\View\Engine;

use Phalcon\Di\DiInterface;
use Phalcon\Di\Injectable;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Mvc\ViewBaseInterface;

/**
 * All the template engine adapters must inherit this class. This provides
 * basic interfacing between the engine and the Phalcon\Mvc\View component.
 */
abstract class AbstractEngine extends Injectable implements \Phalcon\Mvc\View\Engine\EngineInterface, \Phalcon\Events\EventsAwareInterface
{
    /**
     * @var ManagerInterface|null
     */
    protected $eventsManager = null;

    /**
     * @var ViewBaseInterface
     */
    protected $view;

    /**
     * Phalcon\Mvc\View\Engine constructor
     *
     * @param ViewBaseInterface $view
     * @param DiInterface|null $container
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
     * Returns the internal event manager
     *
     * @return ManagerInterface|null
     */
    public function getEventsManager(): ManagerInterface|null
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
     * @param string $partialPath
     * @param mixed|null $params *
     * @return void
     */
    public function partial(string $partialPath, $params = null): void
    {
    }

    /**
     * Sets the events manager
     *
     * @param ManagerInterface $eventsManager
     * @return void
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager): void
    {
    }

    /**
     * Helper method to fire an event
     *
     * @param string     $eventName
     * @param mixed|null $data
     * @param bool       $cancellable
     *
     * @return mixed|bool
     */
    protected function fireManagerEvent(string $eventName, $data = null, bool $cancellable = true): mixed
    {
    }
}
