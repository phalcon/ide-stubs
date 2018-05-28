<?php

namespace Phalcon\Cli;

/**
 * Phalcon\Cli\Dispatcher
 *
 * Dispatching is the process of taking the command-line arguments, extracting the module name,
 * task name, action name, and optional parameters contained in it, and then
 * instantiating a task and calling an action on it.
 *
 * <code>
 * use Phalcon\Di;
 * use Phalcon\Cli\Dispatcher;
 *
 * $di = new Di();
 * $dispatcher = new Dispatcher();
 * $dispatcher->setDi($di);
 *
 * $dispatcher->setTaskName("posts");
 * $dispatcher->setActionName("index");
 * $dispatcher->setParams([]);
 *
 * $handle = $dispatcher->dispatch();
 * </code>
 */
class Dispatcher extends \Phalcon\Dispatcher implements \Phalcon\Cli\DispatcherInterface
{

    protected $_handlerSuffix = 'Task';


    protected $_defaultHandler = 'main';


    protected $_defaultAction = 'main';


    protected $_options = array();


    /**
     * Sets the default task suffix
     *
     * @param string $taskSuffix
     */
    public function setTaskSuffix($taskSuffix) {}

    /**
     * Sets the default task name
     *
     * @param string $taskName
     */
    public function setDefaultTask($taskName) {}

    /**
     * Sets the task name to be dispatched
     *
     * @param string $taskName
     */
    public function setTaskName($taskName) {}

    /**
     * Gets last dispatched task name
     *
     * @return string
     */
    public function getTaskName() {}

    /**
     * Throws an internal exception
     *
     * @param string $message
     * @param int $exceptionCode
     */
    protected function _throwDispatchException($message, $exceptionCode = 0) {}

    /**
     * Handles a user exception
     *
     * @param \Exception $exception
     */
    protected function _handleException(\Exception $exception) {}

    /**
     * Returns the latest dispatched controller
     *
     * @return TaskInterface
     */
    public function getLastTask() {}

    /**
     * Returns the active task in the dispatcher
     *
     * @return TaskInterface
     */
    public function getActiveTask() {}

    /**
     * Set the options to be dispatched
     *
     * @param array $options
     */
    public function setOptions(array $options) {}

    /**
     * Get dispatched options
     *
     * @return array
     */
    public function getOptions() {}

    /**
     * Gets an option by its name or numeric index
     *
     * @param mixed $option
     * @param string|array $filters
     * @param mixed $defaultValue
     * @return mixed
     */
    public function getOption($option, $filters = null, $defaultValue = null) {}

    /**
     * Check if an option exists
     *
     * @param mixed $option
     * @return bool
     */
    public function hasOption($option) {}

    /**
     * Calls the action method.
     *
     * @param mixed $handler
     * @param string $actionMethod
     * @param array $params
     * @return mixed
     */
    public function callActionMethod($handler, $actionMethod, array $params = array()) {}

}
