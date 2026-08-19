<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Events\Traits;

use Phalcon\Events\Exception as EventsException;
use Phalcon\Events\ManagerInterface;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
trait EventsAwareTrait
{
    protected ?\Phalcon\Events\ManagerInterface $eventsManager = null;

    /**
     * Returns the internal event manager
     *
     * @return ManagerInterface|null
     */
    public function getEventsManager(): ManagerInterface|null
    {
    }

    /**
     * Sets the events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     * @return void
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager): void
    {
    }

    /**
     * Helper method to fire an event
     *
     * @throws EventsException
     * @param string $eventName
     * @param mixed $data
     * @param bool $cancellable
     * @return mixed
     */
    protected function fireManagerEvent(string $eventName, $data = null, bool $cancellable = true): mixed
    {
    }
}
