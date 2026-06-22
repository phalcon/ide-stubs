<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Queue;

/**
 * Sends messages to a destination.
 */
interface Producer
{
    /**
     * Returns the delivery delay (in milliseconds) or null when not set.
     *
     * @return int|null
     */
    public function getDeliveryDelay(): int|null;

    /**
     * Returns the message priority or null when not set.
     *
     * @return int|null
     */
    public function getPriority(): int|null;

    /**
     * Returns the time to live (in milliseconds) or null when not set.
     *
     * @return int|null
     */
    public function getTimeToLive(): int|null;

    /**
     * Sends a message to the given destination.
     *
     * @param Destination $destination
     * @param Message $message
     * @return void
     */
    public function send(Destination $destination, Message $message): void;

    /**
     * Sets the delivery delay (in milliseconds). Null clears it.
     *
     * @param mixed $deliveryDelay
     * @return Producer
     */
    public function setDeliveryDelay($deliveryDelay = null): Producer;

    /**
     * Sets the message priority. Null clears it.
     *
     * @param mixed $priority
     * @return Producer
     */
    public function setPriority($priority = null): Producer;

    /**
     * Sets the time to live (in milliseconds). Null clears it.
     *
     * @param mixed $timeToLive
     * @return Producer
     */
    public function setTimeToLive($timeToLive = null): Producer;
}
