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
class Event implements \Phalcon\Events\EventInterface
{
    /**
     * Is event cancelable?
     *
     * @var bool
     */
    protected $cancelable;

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
     *
     * @var bool
     */
    protected $stopped = false;

    /**
     * Event type
     *
     * @var string
     */
    protected $type;

    /**
     * Phalcon\Events\Event constructor
     *
     * @param object $source
     * @param string $type
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
     * @return EventInterface
     */
    public function stop(): EventInterface
    {
    }
}
