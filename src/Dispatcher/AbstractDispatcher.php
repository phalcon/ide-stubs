<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Dispatcher;

use Exception;
use Phalcon\Di\DiInterface;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Dispatcher\Exception as PhalconException;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Filter\FilterInterface;
use Phalcon\Mvc\Model\Binder;
use Phalcon\Mvc\Model\BinderInterface;

/**
 * This is the base class for Phalcon\Mvc\Dispatcher and Phalcon\Cli\Dispatcher.
 * This class can't be instantiated directly, you can use it to create your own
 * dispatchers.
 */
abstract class AbstractDispatcher extends AbstractInjectionAware implements \Phalcon\Dispatcher\DispatcherInterface, \Phalcon\Events\EventsAwareInterface
{
    /**
     * @var object|null
     */
    protected $activeHandler = null;

    /**
     * @var array
     */
    protected $activeMethodMap = [];

    /**
     * @var string
     */
    protected $actionName = '';

    /**
     * @var string
     */
    protected $actionSuffix = 'Action';

    /**
     * @var array
     */
    protected $camelCaseMap = [];

    /**
     * @var string
     */
    protected $defaultAction = '';

    /**
     * @var string
     */
    protected $defaultNamespace = '';

    /**
     * @var string
     */
    protected $defaultHandler = '';

    /**
     * @var array
     */
    protected $handlerHashes = [];

    /**
     * @var string
     */
    protected $handlerName = '';

    /**
     * @var string
     */
    protected $handlerSuffix = '';

    /**
     * @var ManagerInterface|null
     */
    protected $eventsManager = null;

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

    /**
     * @var mixed|null
     */
    protected $lastHandler = null;

    /**
     * @var BinderInterface|null
     */
    protected $modelBinder = null;

    /**
     * @var bool
     */
    protected $modelBinding = false;

    /**
     * @var string
     */
    protected $moduleName = '';

    /**
     * @var string
     */
    protected $namespaceName = '';

    /**
     * @var array
     */
    protected $params = [];

    /**
     * @var string|null
     */
    protected $previousActionName = '';

    /**
     * @var string|null
     */
    protected $previousHandlerName = '';

    /**
     * @var string|null
     */
    protected $previousNamespaceName = '';

    /**
     * @var string|null
     */
    protected $returnedValue = null;

    /**
     * @param mixed $handler
     * @param string $actionMethod
     * @param array $params
     */
    public function callActionMethod($handler, string $actionMethod, array $params = [])
    {
    }

    /**
     * Process the results of the router by calling into the appropriate
     * controller action(s) including any routing data or injected parameters.
     *
     * @return mixed Returns the dispatched handler class (the Controller for Mvc dispatching or a Task
     *               for CLI dispatching) or <tt>false</tt> if an exception occurred and the operation was
     *               stopped by returning <tt>false</tt> in the exception handler.
     *
     * @throws \Exception if any uncaught or unhandled exception occurs during the dispatcher process.
     */
    public function dispatch(): mixed
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
     * @throws PhalconException
     * @param array $forward
     * @return void
     */
    public function forward(array $forward): void
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
     * @return ManagerInterface|null
     */
    public function getEventsManager(): ManagerInterface|null
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
     * @return BinderInterface|null
     */
    public function getModelBinder(): BinderInterface|null
    {
    }

    /**
     * Gets the module where the controller class is
     *
     * @return string|null
     */
    public function getModuleName(): string|null
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
     *
     * @todo remove this in future versions
     */
    public function getParam($param, $filters = null, $defaultValue = null): mixed
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
    public function getParameter($param, $filters = null, $defaultValue = null): mixed
    {
    }

    /**
     * Gets action params
     *
     * @todo remove this in future versions
     * @return array
     */
    public function getParams(): array
    {
    }

    /**
     * Gets action params
     *
     * @return array
     */
    public function getParameters(): array
    {
    }

    /**
     * Check if a param exists
     *
     * @todo deprecate this in the future
     * @param mixed $param
     * @return bool
     */
    public function hasParam($param): bool
    {
    }

    /**
     * Check if a param exists
     *
     * @param mixed $param
     * @return bool
     */
    public function hasParameter($param): bool
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
    public function setActionName(string $actionName): void
    {
    }

    /**
     * Sets the default action name
     *
     * @param string $actionName
     * @return void
     */
    public function setDefaultAction(string $actionName): void
    {
    }

    /**
     * Sets the default namespace
     *
     * @param string $defaultNamespace
     * @return void
     */
    public function setDefaultNamespace(string $defaultNamespace): void
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
     * @todo deprecate this in the future
     * @param mixed $param
     * @param mixed $value
     * @return void
     */
    public function setParam($param, $value): void
    {
    }

    /**
     * Set a param by its name or numeric index
     *
     * @param mixed $param
     * @param mixed $value
     * @return void
     */
    public function setParameter($param, $value): void
    {
    }

    /**
     * Sets action params to be dispatched
     *
     * @todo deprecate this in the future
     * @param array $params
     * @return void
     */
    public function setParams(array $params): void
    {
    }

    /**
     * Sets action params to be dispatched
     *
     * @param array $params
     * @return void
     */
    public function setParameters(array $params): void
    {
    }

    /**
     * Sets the latest returned value by an action manually
     *
     * @param mixed $value
     * @return void
     */
    public function setReturnedValue($value): void
    {
    }

    /**
     * Sets the default action suffix
     *
     * @param string $actionSuffix
     * @return void
     */
    public function setActionSuffix(string $actionSuffix): void
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
     * Sets the default suffix for the handler
     *
     * @param string $handlerSuffix
     * @return void
     */
    public function setHandlerSuffix(string $handlerSuffix): void
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
    public function setModuleName(string $moduleName = null): void
    {
    }

    /**
     * Sets the namespace where the controller class is
     *
     * @param string $namespaceName
     * @return void
     */
    public function setNamespaceName(string $namespaceName): void
    {
    }

    /**
     * Returns value returned by the latest dispatched action
     *
     * @return mixed
     */
    public function getReturnedValue(): mixed
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
    protected function resolveEmptyProperties(): void
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
