<?php

namespace Phalcon\Events;

/**
 * Phalcon\Events\Manager
 *
 * Phalcon Events Manager, offers an easy way to intercept and manipulate, if
 * needed, the normal flow of operation. With the EventsManager the developer
 * can create hooks or plugins that will offer monitoring of data, manipulation,
 * conditional execution and much more.
 */
interface ManagerInterface
{

    /**
     * Attach a listener to the events manager
     *
     * @param object|callable $handler
     * @param string $eventType
     */
    public function attach(string $eventType, $handler);

    /**
     * Detach the listener from the events manager
     *
     * @param object $handler
     * @param string $eventType
     */
    public function detach(string $eventType, $handler);

    /**
     * Removes all events from the EventsManager
     *
     * @param string $type
     */
    public function detachAll(string $type = null);

    /**
     * Fires an event in the events manager causing the active listeners to be
     * notified about it
     *
     * @param object $source
     * @param mixed $data
     * @param string $eventType
     * @param bool $cancelable
     * @return mixed
     */
    public function fire(string $eventType, $source, $data = null, bool $cancelable = true);

    /**
     * Returns all the attached listeners of a certain type
     *
     * @param string $type
     * @return array
     */
    public function getListeners(string $type): array;

    /**
     * Check whether certain type of event has listeners
     *
     * @param string $type
     * @return bool
     */
    public function hasListeners(string $type): bool;
}
