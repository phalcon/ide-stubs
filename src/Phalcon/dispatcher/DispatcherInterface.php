<?php

namespace Phalcon\Dispatcher;

/**
 * Interface for Phalcon\Dispatcher\AbstractDispatcher
 */
interface DispatcherInterface
{

    /**
     * Dispatches a handle action taking into account the routing parameters
     *
     * @return object|bool
     */
    public function dispatch(): bool;

    /**
     * Forwards the execution flow to another controller/action
     *
     * @param array $forward
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
     * @param mixed $param
     * @param string|array $filters
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
     */
    public function setActionName(string $actionName);

    /**
     * Sets the default action suffix
     *
     * @param string $actionSuffix
     */
    public function setActionSuffix(string $actionSuffix);

    /**
     * Sets the default action name
     *
     * @param string $actionName
     */
    public function setDefaultAction(string $actionName);

    /**
     * Sets the default namespace
     *
     * @param string $defaultNamespace
     */
    public function setDefaultNamespace(string $defaultNamespace);

    /**
     * Sets the default suffix for the handler
     *
     * @param string $handlerSuffix
     */
    public function setHandlerSuffix(string $handlerSuffix);

    /**
     * Sets the module name which the application belongs to
     *
     * @param string $moduleName
     */
    public function setModuleName(string $moduleName);

    /**
     * Sets the namespace which the controller belongs to
     *
     * @param string $namespaceName
     */
    public function setNamespaceName(string $namespaceName);

    /**
     * Set a param by its name or numeric index
     *
     * @param mixed $param
     * @param mixed $value
     */
    public function setParam($param, $value);

    /**
     * Sets action params to be dispatched
     *
     * @param array $params
     */
    public function setParams(array $params);

}
