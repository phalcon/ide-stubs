<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Dispatcher;

/**
 * Interface for Phalcon\Dispatcher\AbstractDispatcher
 */
interface DispatcherInterface
{

    /**
     * Dispatches a handle action taking into account the routing parameters
     *
     * @return bool
     */
    public function dispatch(): bool;

    /**
     * Forwards the execution flow to another controller/action
     *
     * @param array $forward
     * @return void
     */
    public function forward(array $forward);

    /**
     * Gets last dispatched action name
     *
     * @return string
     */
    public function getActionName(): string;

    /**
     * Gets the default action suffix
     *
     * @return string
     */
    public function getActionSuffix(): string;

    /**
     * Gets the default handler suffix
     *
     * @return string
     */
    public function getHandlerSuffix(): string;

    /**
     * Gets a param by its name or numeric index
     *
     * @param string|array $filters
     * @param mixed $param
     * @return mixed
     */
    public function getParam($param, $filters = null);

    /**
     * Gets action params
     *
     * @return array
     */
    public function getParams(): array;

    /**
     * Returns value returned by the latest dispatched action
     *
     * @return mixed
     */
    public function getReturnedValue();

    /**
     * Check if a param exists
     *
     * @param mixed $param
     * @return bool
     */
    public function hasParam($param): bool;

    /**
     * Checks if the dispatch loop is finished or has more pendent
     * controllers/tasks to dispatch
     *
     * @return bool
     */
    public function isFinished(): bool;

    /**
     * Sets the action name to be dispatched
     *
     * @param string $actionName
     * @return void
     */
    public function setActionName(string $actionName);

    /**
     * Sets the default action suffix
     *
     * @param string $actionSuffix
     * @return void
     */
    public function setActionSuffix(string $actionSuffix);

    /**
     * Sets the default action name
     *
     * @param string $actionName
     * @return void
     */
    public function setDefaultAction(string $actionName);

    /**
     * Sets the default namespace
     *
     * @param string $defaultNamespace
     * @return void
     */
    public function setDefaultNamespace(string $defaultNamespace);

    /**
     * Sets the default suffix for the handler
     *
     * @param string $handlerSuffix
     * @return void
     */
    public function setHandlerSuffix(string $handlerSuffix);

    /**
     * Sets the module name which the application belongs to
     *
     * @param string $moduleName
     * @return void
     */
    public function setModuleName(string $moduleName);

    /**
     * Sets the namespace which the controller belongs to
     *
     * @param string $namespaceName
     * @return void
     */
    public function setNamespaceName(string $namespaceName);

    /**
     * Set a param by its name or numeric index
     *
     * @param mixed $value
     * @param mixed $param
     * @return void
     */
    public function setParam($param, $value);

    /**
     * Sets action params to be dispatched
     *
     * @param array $params
     * @return void
     */
    public function setParams(array $params);
}
