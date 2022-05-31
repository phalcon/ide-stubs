<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Events;

use Closure;
use SplPriorityQueue;

/**
 * Phalcon Events Manager, offers an easy way to intercept and manipulate, if
 * needed, the normal flow of operation. With the EventsManager the developer
 * can create hooks or plugins that will offer monitoring of data, manipulation,
 * conditional execution and much more.
 */
class Manager implements \Phalcon\Events\ManagerInterface
{
    const DEFAULT_PRIORITY = 100;

    /**
     * @var bool
     */
    protected $collect = false;

    /**
     * @var bool
     */
    protected $enablePriorities = false;

    /**
     * @var array
     */
    protected $events = [];

    /**
     * @var array
     */
    protected $responses = [];

    /**
     * Attach a listener to the events manager
     *
     * @param object|callable $handler
     * @param string $eventType
     * @param int $priority
     * @return void
     */
    public function attach(string $eventType, $handler, int $priority = self::DEFAULT_PRIORITY): void
    {
    }

    /**
     * Returns if priorities are enabled
     *
     * @return bool
     */
    public function arePrioritiesEnabled(): bool
    {
    }

    /**
     * Tells the event manager if it needs to collect all the responses returned
     * by every registered listener in a single fire
     *
     * @param bool $collect
     * @return void
     */
    public function collectResponses(bool $collect): void
    {
    }

    /**
     * Detach the listener from the events manager
     *
     * @param object $handler
     * @param string $eventType
     * @return void
     */
    public function detach(string $eventType, $handler): void
    {
    }

    /**
     * Removes all events from the EventsManager
     *
     * @param string $type
     * @return void
     */
    public function detachAll(string $type = null): void
    {
    }

    /**
     * Set if priorities are enabled in the EventsManager.
     *
     * A priority queue of events is a data structure similar
     * to a regular queue of events: we can also put and extract
     * elements from it. The difference is that each element in a
     * priority queue is associated with a value called priority.
     * This value is used to order elements of a queue: elements
     * with higher priority are retrieved before the elements with
     * lower priority.
     *
     * @param bool $enablePriorities
     * @return void
     */
    public function enablePriorities(bool $enablePriorities): void
    {
    }

    /**
     * Fires an event in the events manager causing the active listeners to be
     * notified about it
     *
     * ```php
     * $eventsManager->fire("db", $connection);
     * ```
     *
     * @param object $source
     * @param mixed $data
     * @return mixed
     * @param string $eventType
     * @param bool $cancelable
     */
    public function fire(string $eventType, $source, $data = null, bool $cancelable = true)
    {
    }

    /**
     * Internal handler to call a queue of events
     *
     * @return mixed
     * @param \SplPriorityQueue $queue
     * @param EventInterface $event
     */
    final public function fireQueue(\SplPriorityQueue $queue, EventInterface $event)
    {
    }

    /**
     * Returns all the attached listeners of a certain type
     *
     * @param string $type
     * @return array
     */
    public function getListeners(string $type): array
    {
    }

    /**
     * Returns all the responses returned by every handler executed by the last
     * 'fire' executed
     *
     * @return array
     */
    public function getResponses(): array
    {
    }

    /**
     * Check whether certain type of event has listeners
     *
     * @param string $type
     * @return bool
     */
    public function hasListeners(string $type): bool
    {
    }

    /**
     * Check if the events manager is collecting all all the responses returned
     * by every registered listener in a single fire
     *
     * @return bool
     */
    public function isCollecting(): bool
    {
    }

    /**
     * @param mixed $handler
     * @return bool
     */
    public function isValidHandler($handler): bool
    {
    }
}
