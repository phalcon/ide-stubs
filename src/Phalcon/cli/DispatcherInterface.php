<?php

namespace Phalcon\Cli;

/**
 * Interface for Phalcon\Cli\Dispatcher
 */
interface DispatcherInterface extends \Phalcon\Dispatcher\DispatcherInterface
{

    /**
     * Returns the active task in the dispatcher
     *
     * @return TaskInterface
     */
    public function getActiveTask(): TaskInterface;

    /**
     * Returns the latest dispatched controller
     *
     * @return TaskInterface
     */
    public function getLastTask(): TaskInterface;

    /**
     * Get dispatched options
     *
     * @return array
     */
    public function getOptions(): array;

    /**
     * Gets last dispatched task name
     *
     * @return string
     */
    public function getTaskName(): string;

    /**
     * Gets default task suffix
     *
     * @return string
     */
    public function getTaskSuffix(): string;

    /**
     * Sets the default task name
     *
     * @param string $taskName
     */
    public function setDefaultTask(string $taskName);

    /**
     * Set the options to be dispatched
     *
     * @param array $options
     */
    public function setOptions(array $options);

    /**
     * Sets the task name to be dispatched
     *
     * @param string $taskName
     */
    public function setTaskName(string $taskName);

    /**
     * Sets the default task suffix
     *
     * @param string $taskSuffix
     */
    public function setTaskSuffix(string $taskSuffix);
}
