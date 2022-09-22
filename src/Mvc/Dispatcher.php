<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc;

use Phalcon\Mvc\Dispatcher\Exception;
use Phalcon\Events\ManagerInterface;
use Phalcon\Http\ResponseInterface;
use Phalcon\Dispatcher\AbstractDispatcher as BaseDispatcher;

/**
 * Dispatching is the process of taking the request object, extracting the
 * module name, controller name, action name, and optional parameters contained
 * in it, and then instantiating a controller and calling an action of that
 * controller.
 *
 * ```php
 * $di = new \Phalcon\Di\Di();
 *
 * $dispatcher = new \Phalcon\Mvc\Dispatcher();
 *
 * $dispatcher->setDI($di);
 *
 * $dispatcher->setControllerName("posts");
 * $dispatcher->setActionName("index");
 * $dispatcher->setParams([]);
 *
 * $controller = $dispatcher->dispatch();
 * ```
 */
class Dispatcher extends \Phalcon\Dispatcher\AbstractDispatcher implements \Phalcon\Mvc\DispatcherInterface
{
    protected $defaultAction = 'index';

    protected $defaultHandler = 'index';

    protected $handlerSuffix = 'Controller';

    /**
     * Forwards the execution flow to another controller/action.
     *
     * ```php
     * use Phalcon\Events\Event;
     * use Phalcon\Mvc\Dispatcher;
     * use App\Backend\Bootstrap as Backend;
     * use App\Frontend\Bootstrap as Frontend;
     *
     * // Registering modules
     * $modules = [
     *     "frontend" => [
     *         "className" => Frontend::class,
     *         "path"      => __DIR__ . "/app/Modules/Frontend/Bootstrap.php",
     *         "metadata"  => [
     *             "controllersNamespace" => "App\Frontend\Controllers",
     *         ],
     *     ],
     *     "backend" => [
     *         "className" => Backend::class,
     *         "path"      => __DIR__ . "/app/Modules/Backend/Bootstrap.php",
     *         "metadata"  => [
     *             "controllersNamespace" => "App\Backend\Controllers",
     *         ],
     *     ],
     * ];
     *
     * $application->registerModules($modules);
     *
     * // Setting beforeForward listener
     * $eventsManager  = $di->getShared("eventsManager");
     *
     * $eventsManager->attach(
     *     "dispatch:beforeForward",
     *     function(Event $event, Dispatcher $dispatcher, array $forward) use ($modules) {
     *         $metadata = $modules[$forward["module"]]["metadata"];
     *
     *         $dispatcher->setModuleName(
     *             $forward["module"]
     *         );
     *
     *         $dispatcher->setNamespaceName(
     *             $metadata["controllersNamespace"]
     *         );
     *     }
     * );
     *
     * // Forward
     * $this->dispatcher->forward(
     *     [
     *         "module"     => "backend",
     *         "controller" => "posts",
     *         "action"     => "index",
     *     ]
     * );
     * ```
     *
     * @param array $forward
     * @return void
     */
    public function forward(array $forward): void
    {
    }

    /**
     * Returns the active controller in the dispatcher
     *
     * @return ControllerInterface
     */
    public function getActiveController(): ControllerInterface
    {
    }

    /**
     * Possible controller class name that will be located to dispatch the
     * request
     *
     * @return string
     */
    public function getControllerClass(): string
    {
    }

    /**
     * Gets last dispatched controller name
     *
     * @return string
     */
    public function getControllerName(): string
    {
    }

    /**
     * Returns the latest dispatched controller
     *
     * @return ControllerInterface
     */
    public function getLastController(): ControllerInterface
    {
    }

    /**
     * Gets previous dispatched action name
     *
     * @return string
     */
    public function getPreviousActionName(): string
    {
    }

    /**
     * Gets previous dispatched controller name
     *
     * @return string
     */
    public function getPreviousControllerName(): string
    {
    }

    /**
     * Gets previous dispatched namespace name
     *
     * @return string
     */
    public function getPreviousNamespaceName(): string
    {
    }

    /**
     * Sets the controller name to be dispatched
     *
     * @param string $controllerName
     */
    public function setControllerName(string $controllerName)
    {
    }

    /**
     * Sets the default controller suffix
     *
     * @param string $controllerSuffix
     */
    public function setControllerSuffix(string $controllerSuffix)
    {
    }

    /**
     * Sets the default controller name
     *
     * @param string $controllerName
     */
    public function setDefaultController(string $controllerName)
    {
    }

    /**
     * Handles a user exception
     *
     * @param \Exception $exception
     */
    protected function handleException(\Exception $exception)
    {
    }

    /**
     * Throws an internal exception
     *
     * @param string $message
     * @param int $exceptionCode
     */
    protected function throwDispatchException(string $message, int $exceptionCode = 0)
    {
    }
}
