<?php

namespace Phalcon\Mvc;

/**
 * Phalcon\Mvc\DispatcherInterface
 *
 * Interface for Phalcon\Mvc\Dispatcher
 */
interface DispatcherInterface extends \Phalcon\Dispatcher\DispatcherInterface
{

    /**
     * Returns the active controller in the dispatcher
     *
     * @return \Phalcon\Mvc\ControllerInterface
     */
    public function getActiveController(): ControllerInterface;

    /**
     * Gets last dispatched controller name
     *
     * @return string
     */
    public function getControllerName(): string;

    /**
     * Returns the latest dispatched controller
     *
     * @return \Phalcon\Mvc\ControllerInterface
     */
    public function getLastController(): ControllerInterface;

    /**
     * Sets the default controller suffix
     *
     * @param string $controllerSuffix
     */
    public function setControllerSuffix(string $controllerSuffix);

    /**
     * Sets the controller name to be dispatched
     *
     * @param string $controllerName
     */
    public function setControllerName(string $controllerName);

    /**
     * Sets the default controller name
     *
     * @param string $controllerName
     */
    public function setDefaultController(string $controllerName);

}
