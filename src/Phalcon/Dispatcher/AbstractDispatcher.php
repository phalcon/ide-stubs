<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Dispatcher;

use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Events\ManagerInterface;
use Phalcon\Mvc\Model\BinderInterface;

/**
 * This is the base class for Phalcon\Mvc\Dispatcher and Phalcon\Cli\Dispatcher.
 * This class can't be instantiated directly, you can use it to create your own
 * dispatchers.
 */
abstract class AbstractDispatcher extends AbstractInjectionAware implements \Phalcon\Dispatcher\DispatcherInterface, \Phalcon\Events\EventsAwareInterface
{

    protected $activeHandler;

    /**
     * @var array
     */
    protected $activeMethodMap = array();


    protected $actionName = null;

    /**
     * @var string
     */
    protected $actionSuffix = 'Action';

    /**
     * @var array
     */
    protected $camelCaseMap = array();

    /**
     * @var string
     */
    protected $defaultAction = '';


    protected $defaultNamespace = null;


    protected $defaultHandler = null;

    /**
     * @var array
     */
    protected $handlerHashes = array();


    protected $handlerName = null;

    /**
     * @var string
     */
    protected $handlerSuffix = '';


    protected $eventsManager;

    /**
     * @var bool
     */
    protected $finished = false;

    /**
     * @var bool
     */
    protected $forwarded = false;

    /**
     * @var bool
     */
    protected $isControllerInitialize = false;


    protected $lastHandler = null;


    protected $modelBinder = null;

    /**
     * @var bool
     */
    protected $modelBinding = false;


    protected $moduleName = null;


    protected $namespaceName = null;

    /**
     * @var array
     */
    protected $params = array();


    protected $previousActionName = null;


    protected $previousHandlerName = null;


    protected $previousNamespaceName = null;


    protected $returnedValue = null;


    /**
     * @param mixed $handler
     * @param string $actionMethod
     * @param array $params
     */
    public function callActionMethod($handler, string $actionMethod, array $params = array())
    {
    }

    /**
     * Process the results of the router by calling into the appropriate
     * controller action(s) including any routing data or injected parameters.
     *
     * @return bool
     *
     * @throws \Exception if any uncaught or unhandled exception occurs during the dispatcher process.
     */
    public function dispatch(): bool
    {
    }

    /**
     * Forwards the execution flow to another controller/action.
     *
     * ```php
     * $this->dispatcher->forward(
     *     [
     *         "controller" => "posts",
     *         "action"     => "index",
     *     ]
     * );
     * ```
     *
     * @throws \Phalcon\Exception
     * @param array $forward
     * @return void
     */
    public function forward(array $forward)
    {
    }

    /**
     * Gets the latest dispatched action name
     *
     * @return string
     */
    public function getActionName(): string
    {
    }

    /**
     * Gets the default action suffix
     *
     * @return string
     */
    public function getActionSuffix(): string
    {
    }

    /**
     * Returns the current method to be/executed in the dispatcher
     *
     * @return string
     */
    public function getActiveMethod(): string
    {
    }

    /**
     * Returns bound models from binder instance
     *
     * ```php
     * class UserController extends Controller
     * {
     *     public function showAction(User $user)
     *     {
     *         // return array with $user
     *         $boundModels = $this->dispatcher->getBoundModels();
     *     }
     * }
     * ```
     *
     * @return array
     */
    public function getBoundModels(): array
    {
    }

    /**
     * Returns the default namespace
     *
     * @return string
     */
    public function getDefaultNamespace(): string
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface
     */
    public function getEventsManager(): ManagerInterface
    {
    }

    /**
     * Gets the default handler suffix
     *
     * @return string
     */
    public function getHandlerSuffix(): string
    {
    }

    /**
     * Gets model binder
     *
     * @return \Phalcon\Mvc\Model\BinderInterface|null
     */
    public function getModelBinder(): ?BinderInterface
    {
    }

    /**
     * Gets the module where the controller class is
     *
     * @return string
     */
    public function getModuleName(): string
    {
    }

    /**
     * Gets a namespace to be prepended to the current handler name
     *
     * @return string
     */
    public function getNamespaceName(): string
    {
    }

    /**
     * Gets a param by its name or numeric index
     *
     * @param mixed $param
     * @param string|array $filters
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getParam($param, $filters = null, $defaultValue = null)
    {
    }

    /**
     * Gets action params
     *
     * @return array
     */
    public function getParams(): array
    {
    }

    /**
     * Check if a param exists
     *
     * @param mixed $param
     * @return bool
     */
    public function hasParam($param): bool
    {
    }

    /**
     * Checks if the dispatch loop is finished or has more pendent
     * controllers/tasks to dispatch
     *
     * @return bool
     */
    public function isFinished(): bool
    {
    }

    /**
     * Sets the action name to be dispatched
     *
     * @param string $actionName
     * @return void
     */
    public function setActionName(string $actionName)
    {
    }

    /**
     * Sets the default action name
     *
     * @param string $actionName
     * @return void
     */
    public function setDefaultAction(string $actionName)
    {
    }

    /**
     * Sets the default namespace
     *
     * @param string $namespaceName
     * @return void
     */
    public function setDefaultNamespace(string $namespaceName)
    {
    }

    /**
     * Possible class name that will be located to dispatch the request
     *
     * @return string
     */
    public function getHandlerClass(): string
    {
    }

    /**
     * Set a param by its name or numeric index
     *
     * @param mixed $param
     * @param mixed $value
     * @return void
     */
    public function setParam($param, $value)
    {
    }

    /**
     * Sets action params to be dispatched
     *
     * @param array $params
     * @return void
     */
    public function setParams(array $params)
    {
    }

    /**
     * Sets the latest returned value by an action manually
     *
     * @param mixed $value
     * @return void
     */
    public function setReturnedValue($value)
    {
    }

    /**
     * Sets the default action suffix
     *
     * @param string $actionSuffix
     * @return void
     */
    public function setActionSuffix(string $actionSuffix)
    {
    }

    /**
     * Sets the events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     * @return void
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

    /**
     * Sets the default suffix for the handler
     *
     * @param string $handlerSuffix
     * @return void
     */
    public function setHandlerSuffix(string $handlerSuffix)
    {
    }

    /**
     * Enable model binding during dispatch
     *
     * ```php
     * $di->set(
     *     'dispatcher',
     *     function() {
     *         $dispatcher = new Dispatcher();
     *
     *         $dispatcher->setModelBinder(
     *             new Binder(),
     *             'cache'
     *         );
     *
     *         return $dispatcher;
     *     }
     * );
     * ```
     *
     * @param \Phalcon\Mvc\Model\BinderInterface $modelBinder
     * @param mixed $cache
     * @return DispatcherInterface
     */
    public function setModelBinder(\Phalcon\Mvc\Model\BinderInterface $modelBinder, $cache = null): DispatcherInterface
    {
    }

    /**
     * Sets the module where the controller is (only informative)
     *
     * @param string $moduleName
     * @return void
     */
    public function setModuleName(string $moduleName)
    {
    }

    /**
     * Sets the namespace where the controller class is
     *
     * @param string $namespaceName
     * @return void
     */
    public function setNamespaceName(string $namespaceName)
    {
    }

    /**
     * Returns value returned by the latest dispatched action
     *
     * @return mixed
     */
    public function getReturnedValue()
    {
    }

    /**
     * Check if the current executed action was forwarded by another one
     *
     * @return bool
     */
    public function wasForwarded(): bool
    {
    }

    /**
     * Set empty properties to their defaults (where defaults are available)
     *
     * @return void
     */
    protected function resolveEmptyProperties()
    {
    }

    /**
     * @param string $input
     * @return string
     */
    protected function toCamelCase(string $input): string
    {
    }
}
