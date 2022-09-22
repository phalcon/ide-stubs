<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Events;

/**
 * Interface for Phalcon\Events managers.
 */
interface ManagerInterface
{
    /**
     * Attach a listener to the events manager
     *
     * @param object|callable $handler
     * @param string $eventType
     * @return void
     */
    public function attach(string $eventType, $handler): void;

    /**
     * Detach the listener from the events manager
     *
     * @param object $handler
     * @param string $eventType
     * @return void
     */
    public function detach(string $eventType, $handler): void;

    /**
     * Removes all events from the EventsManager
     *
     * @param string $type
     * @return void
     */
    public function detachAll(string $type = null): void;

    /**
     * Fires an event in the events manager causing the active listeners to be
     * notified about it
     *
     * @param object $source
     * @param mixed $data
     * @return mixed
     * @param string $eventType
     * @param bool $cancelable
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
