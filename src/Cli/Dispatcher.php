<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Cli;

use Phalcon\Cli\Dispatcher\Exception;
use Phalcon\Dispatcher\AbstractDispatcher as CliDispatcher;
use Phalcon\Events\ManagerInterface;
use Phalcon\Filter\FilterInterface;

/**
 * Dispatching is the process of taking the command-line arguments, extracting
 * the module name, task name, action name, and optional parameters contained in
 * it, and then instantiating a task and calling an action on it.
 *
 * ```php
 * use Phalcon\Di\Di;
 * use Phalcon\Cli\Dispatcher;
 *
 * $di = new Di();
 *
 * $dispatcher = new Dispatcher();
 *
 * $dispatcher->setDi($di);
 *
 * $dispatcher->setTaskName("posts");
 * $dispatcher->setActionName("index");
 * $dispatcher->setParams([]);
 *
 * $handle = $dispatcher->dispatch();
 * ```
 */
class Dispatcher extends \Phalcon\Dispatcher\AbstractDispatcher implements \Phalcon\Cli\DispatcherInterface
{
    /**
     * @var string
     */
    protected $defaultHandler = 'main';

    /**
     * @var string
     */
    protected $defaultAction = 'main';

    /**
     * @var string
     */
    protected $handlerSuffix = 'Task';

    /**
     * @var array
     */
    protected $options = [];

    /**
     * Calls the action method.
     *
     * @param mixed $handler
     * @param string $actionMethod
     * @param array $params
     * @return mixed
     */
    public function callActionMethod($handler, string $actionMethod, array $params = []): mixed
    {
    }

    /**
     * Returns the active task in the dispatcher
     *
     * @return TaskInterface
     */
    public function getActiveTask(): TaskInterface
    {
    }

    /**
     * Returns the latest dispatched controller
     *
     * @return TaskInterface
     */
    public function getLastTask(): TaskInterface
    {
    }

    /**
     * Gets an option by its name or numeric index
     *
     * @param  mixed $option
     * @param  string|array $filters
     * @param  mixed $defaultValue
     * @return mixed
     */
    public function getOption($option, $filters = null, $defaultValue = null): mixed
    {
    }

    /**
     * Get dispatched options
     *
     * @return array
     */
    public function getOptions(): array
    {
    }

    /**
     * Gets last dispatched task name
     *
     * @return string
     */
    public function getTaskName(): string
    {
    }

    /**
     * Gets the default task suffix
     *
     * @return string
     */
    public function getTaskSuffix(): string
    {
    }

    /**
     * Check if an option exists
     *
     * @param mixed $option
     * @return bool
     */
    public function hasOption($option): bool
    {
    }

    /**
     * Sets the default task name
     *
     * @param string $taskName
     * @return void
     */
    public function setDefaultTask(string $taskName): void
    {
    }

    /**
     * Set the options to be dispatched
     *
     * @param array $options
     * @return void
     */
    public function setOptions(array $options): void
    {
    }

    /**
     * Sets the task name to be dispatched
     *
     * @param string $taskName
     * @return void
     */
    public function setTaskName(string $taskName): void
    {
    }

    /**
     * Sets the default task suffix
     *
     * @param string $taskSuffix
     * @return void
     */
    public function setTaskSuffix(string $taskSuffix): void
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
