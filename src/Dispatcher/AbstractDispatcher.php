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
use Phalcon\Contracts\Dispatcher\DispatcherTypes;
use Phalcon\Di\DiInterface;
use Phalcon\Di\AbstractInjectionAware;
use Phalcon\Dispatcher\Exception as PhalconException;
use Phalcon\Dispatcher\Exceptions\ForwardInInitializeForbidden;
use Phalcon\Events\EventsAwareInterface;
use Phalcon\Events\ManagerInterface;
use Phalcon\Events\Traits\EventsAwareTrait;
use Phalcon\Filter\FilterInterface;
use Phalcon\Mvc\Model\Binder;
use Phalcon\Mvc\Model\BinderInterface;
use Phalcon\Support\Collection;

/**
 * This is the base class for Phalcon\Mvc\Dispatcher and Phalcon\Cli\Dispatcher.
 * This class can't be instantiated directly, you can use it to create your own
 * dispatchers.
 *
 * ## Error protocol
 *
 * Subclasses (including third-party ones) MUST implement the two abstract
 * error hooks throwDispatchException() and handleException().
 * The dispatch loop calls them on every error/exception path; a subclass that
 * omits them cannot be loaded.
 *
 * ## Hook channels
 *
 * A single lifecycle point can be intercepted through three independent
 * channels. For any given point they run in this order:
 *
 * 1.Events-manager listener - e.g. `dispatch:beforeExecuteRoute`. A
 *    listener returning `false` cancels; calling `forward()` re-enters the
 *    loop; throwing routes through handleException().
 * 2.Duck-typed handler method - e.g. a `beforeExecuteRoute()` method on
 *    the controller/task itself (presence is cached per class). Same
 *    `false` / `forward()` cancellation semantics as the event.
 * 3.`dispatch:beforeCallAction` observer - fired by
 *    callActionMethod() with a `Phalcon\Support\Collection` carrying
 *    the mutable keys `handler`, `action` and `params`. Listeners may rewrite
 *    those keys to changewhat gets invoked; the substituted callable is
 *    re-validated before the call. `dispatch:afterCallAction` receives the
 *    same Collection plus a `result` key.
 *
 * @todo fix the returnValue type in v7
 *
 * @phpstan-import-type dispatcher_bound_models from DispatcherTypes
 * @phpstan-import-type dispatcher_forward from DispatcherTypes
 * @phpstan-import-type dispatcher_handler_hashes from DispatcherTypes
 * @phpstan-import-type dispatcher_hook_cache from DispatcherTypes
 * @phpstan-import-type dispatcher_method_map from DispatcherTypes
 * @phpstan-import-type dispatcher_params from DispatcherTypes
 */
abstract class AbstractDispatcher extends AbstractInjectionAware implements \Phalcon\Dispatcher\DispatcherInterface, \Phalcon\Events\EventsAwareInterface
{
    use \Phalcon\Events\Traits\EventsAwareTrait;


    protected string $actionName = '';

    protected string $actionSuffix = 'Action';

    /**
     * @var object|null
     */
    protected $activeHandler = null;

    /**
     * @phpstan-var dispatcher_method_map
     */
    protected array $activeMethodMap = [];

    /**
     * @phpstan-var dispatcher_method_map
     */
    protected array $camelCaseMap = [];

    protected string $defaultAction = '';

    protected string $defaultHandler = '';

    protected string $defaultNamespace = '';

    protected bool $finished = false;

    protected bool $forwarded = false;

    /**
     * @phpstan-var dispatcher_handler_hashes
     */
    protected array $handlerHashes = [];

    /**
     * @phpstan-var dispatcher_hook_cache
     */
    protected array $handlerHookCache = [];

    protected string $handlerName = '';

    protected string $handlerSuffix = '';

    protected bool $isControllerInitialize = false;

    /**
     * @var mixed
     */
    protected $lastHandler = null;

    protected ?\Phalcon\Mvc\Model\BinderInterface $modelBinder = null;

    protected bool $modelBinding = false;

    protected string $moduleName = '';

    protected string $namespaceName = '';

    /**
     * @phpstan-var dispatcher_params
     */
    protected array $params = [];

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
     * @phpstan-param dispatcher_params $params
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
     * @phpstan-param dispatcher_forward $forward
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
     * @phpstan-return dispatcher_bound_models
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
     * Possible class name that will be located to dispatch the request
     *
     * @return string
     */
    public function getHandlerClass(): string
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
     * @phpstan-param array-key $param
     * @phpstan-param mixed $filters
     * @param mixed             $defaultValue
     *
     * @deprecated Use getParameter() instead
     *
     * Note: The interface declares `getParam(param, filters = null)` without the
     * `defaultValue` argument, so code typed against `DispatcherInterface`
     * cannot use the default-value feature. This signature drift is intentional
     * for now; the interface and implementation will be aligned in the next
     * major version.
     * @param mixed $param
     * @param mixed $filters
     * @return mixed
     */
    public function getParam($param, $filters = null, $defaultValue = null): mixed
    {
    }

    /**
     * Gets a param by its name or numeric index
     *
     * @phpstan-param array-key $param
     * @phpstan-param mixed $filters
     * @param mixed             $defaultValue
     * @param mixed $param
     * @param mixed $filters
     * @return mixed
     */
    public function getParameter($param, $filters = null, $defaultValue = null): mixed
    {
    }

    /**
     * Gets action params
     *
     * @phpstan-return dispatcher_params
     * @return array
     */
    public function getParameters(): array
    {
    }

    /**
     * Gets action params
     *
     * @deprecated Use getParameters() instead
     *
     * @phpstan-return dispatcher_params
     * @return array
     */
    public function getParams(): array
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
     * Gets previous dispatched handler name
     *
     * @return string
     */
    public function getPreviousHandlerName(): string
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
     * Returns value returned by the latest dispatched action
     *
     * @return mixed
     */
    public function getReturnedValue(): mixed
    {
    }

    /**
     * Check if a param exists
     *
     * @phpstan-param array-key $param
     *
     * @deprecated Use hasParameter() instead
     * @param mixed $param
     * @return bool
     */
    public function hasParam($param): bool
    {
    }

    /**
     * Check if a param exists
     *
     * @phpstan-param array-key $param
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
     * Sets the default action suffix
     *
     * @param string $actionSuffix
     * @return void
     */
    public function setActionSuffix(string $actionSuffix): void
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
     * @param string|null $moduleName
     * @return void
     */
    public function setModuleName(?string $moduleName = null): void
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
     * Set a param by its name or numeric index
     *
     * @deprecated Use setParameter() instead
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
     * @phpstan-param array-key $param
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
     * @phpstan-param dispatcher_params $params
     * @param array $params
     * @return void
     */
    public function setParameters(array $params): void
    {
    }

    /**
     * Sets action params to be dispatched
     *
     * @deprecated Use setParameters() instead
     *
     * @phpstan-param dispatcher_params $params
     * @param array $params
     * @return void
     */
    public function setParams(array $params): void
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
     * Check if the current executed action was forwarded by another one
     *
     * @return bool
     */
    public function wasForwarded(): bool
    {
    }

    /**
     * Handles a user exception triggered inside the dispatch loop.
     *
     * Subclasses implement the namespace-specific behavior (typically firing
     * the `dispatch:beforeException` event so listeners may forward or swallow
     * the exception).
     *
     * @param \Exception $exception *
     * @return mixed Return `false` to signal that the exception was handled
     *               (swallowed) and the current loop iteration should stop.
     *               Any other return value (including null) lets the caller
     *               bubble the exception, unless a forward was requested
     *               (`finished === false`).
     */
    abstract protected function handleException(\Exception $exception);

    /**
     * Set empty properties to their defaults (where defaults are available)
     *
     * @return void
     */
    protected function resolveEmptyProperties(): void
    {
    }

    /**
     * Throws an internal dispatch exception.
     *
     * Subclasses build the namespace-specific exception and route it through
     * handleException() before throwing it when it was not handled.
     *
     * @param string $message
     * @param int $exceptionCode *
     * @return mixed Returns `false` when handleException() swallowed the
     *               exception; otherwise the method throws and does not return.
     */
    abstract protected function throwDispatchException(string $message, int $exceptionCode = 0);

    /**
     * @param string $input
     * @return string
     */
    protected function toCamelCase(string $input): string
    {
    }
}
