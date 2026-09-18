<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Events;

use Phalcon\Contracts\Events\Stoppable;
use Phalcon\Events\Exceptions\EventNotCancelable;
use Phalcon\Events\Exceptions\InvalidEventSource;

/**
 * This class offers contextual information of a fired event in the
 * EventsManager
 *
 * ```php
 * Phalcon\Events\Event;
 *
 * $event = new Event("db:afterQuery", $this, ["data" => "mydata"], true);
 * if ($event->isCancelable()) {
 *     $event->stop();
 * }
 * ```
 */
class Event implements \Phalcon\Events\EventInterface, \Phalcon\Contracts\Events\Stoppable
{
    /**
     * Is event cancelable?
     */
    protected bool $cancelable;

    /**
     * Event data
     *
     * @var mixed
     */
    protected $data;

    /**
     * Event source
     *
     * @var object|null
     */
    protected $source = null;

    /**
     * Is event propagation stopped?
     */
    protected bool $stopped = false;

    /**
     * Event type
     */
    protected string $type;

    /**
     * Event constructor.
     *
     * @throws InvalidEventSource
     * @param string $type
     * @param mixed $source
     * @param mixed $data
     * @param bool $cancelable
     */
    public function __construct(string $type, $source = null, $data = null, bool $cancelable = true)
    {
    }

    /**
     * @return mixed
     */
    public function getData(): mixed
    {
    }

    /**
     * @return object|null
     */
    public function getSource(): object|null
    {
    }

    /**
     * @return string
     */
    public function getType(): string
    {
    }

    /**
     * Check whether the event is cancelable.
     *
     * ```php
     * if ($event->isCancelable()) {
     *     $event->stop();
     * }
     * ```
     *
     * @return bool
     */
    public function isCancelable(): bool
    {
    }

    /**
     * Returns whether propagation must stop. PSR-14 alias backed by the same
     * `stopped` flag as `isStopped()`; calling `stop()` flips both.
     *
     * @return bool
     */
    public function isPropagationStopped(): bool
    {
    }

    /**
     * Check whether the event is currently stopped.
     *
     * @return bool
     */
    public function isStopped(): bool
    {
    }

    /**
     * Sets event data.
     *
     * @param mixed $data
     * @return EventInterface
     */
    public function setData($data = null): EventInterface
    {
    }

    /**
     * Sets event type.
     *
     * @param string $type
     * @return EventInterface
     */
    public function setType(string $type): EventInterface
    {
    }

    /**
     * Stops the event preventing propagation.
     *
     * ```php
     * if ($event->isCancelable()) {
     *     $event->stop();
     * }
     * ```
     *
     * @throws EventNotCancelable
     * @return EventInterface
     */
    public function stop(): EventInterface
    {
    }
}
