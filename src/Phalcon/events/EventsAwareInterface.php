<?php

namespace Phalcon\Events;

/**
 * Phalcon\Events\EventsAwareInterface
 *
 * This interface must for those classes that accept an EventsManager and
 * dispatch events
 */
interface EventsAwareInterface
{

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface
     */
    public function getEventsManager(): ManagerInterface;

    /**
     * Sets the events manager
     *
     * @param ManagerInterface $eventsManager
     */
    public function setEventsManager(ManagerInterface $eventsManager);

}
