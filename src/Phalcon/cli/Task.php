<?php

namespace Phalcon\Cli;

use Phalcon\Di\Injectable;
use Phalcon\Events\ManagerInterface;

/**
 * Every command-line task should extend this class that encapsulates all the
 * task functionality
 *
 * A task can be used to run "tasks" such as migrations, cronjobs, unit-tests,
 * or anything that you want. The Task class should at least have a "mainAction"
 * method.
 *
 * ```php
 * class HelloTask extends \Phalcon\Cli\Task
 * {
 *     // This action will be executed by default
 *     public function mainAction()
 *     {
 *
 *     }
 *
 *     public function findAction()
 *     {
 *
 *     }
 * }
 * ```
 */
class Task extends Injectable implements \Phalcon\Cli\TaskInterface, \Phalcon\Events\EventsAwareInterface
{

    protected $eventsManager;


    /**
     * Phalcon\Cli\Task constructor
     */
    final public function __construct()
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return null|\Phalcon\Events\ManagerInterface
     */
    public function getEventsManager(): ?ManagerInterface
    {
    }

    /**
     * Sets the events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }
}
