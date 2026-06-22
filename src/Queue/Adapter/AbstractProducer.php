<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter;

use Phalcon\Contracts\Queue\Destination as DestinationInterface;
use Phalcon\Contracts\Queue\Message as MessageInterface;
use Phalcon\Contracts\Queue\Producer as ProducerInterface;
use Phalcon\Queue\Exceptions\DeliveryDelayNotSupportedException;
use Phalcon\Queue\Exceptions\PriorityNotSupportedException;
use Phalcon\Queue\Exceptions\TimeToLiveNotSupportedException;

/**
 * Shared producer base. Defaults every optional capability (delivery delay,
 * priority, time to live) to "unsupported": the getter returns null and the
 * setter throws the matching exception for any non-null value. A concrete
 * producer overrides only the capabilities its transport actually supports,
 * and implements `send()`.
 */
abstract class AbstractProducer implements ProducerInterface
{
    /**
     * @return int|null
     */
    public function getDeliveryDelay(): int|null
    {
    }

    /**
     * @return int|null
     */
    public function getPriority(): int|null
    {
    }

    /**
     * @return int|null
     */
    public function getTimeToLive(): int|null
    {
    }

    /**
     * @param \Phalcon\Contracts\Queue\Destination $destination
     * @param \Phalcon\Contracts\Queue\Message $message
     * @return void
     */
    abstract public function send(\Phalcon\Contracts\Queue\Destination $destination, \Phalcon\Contracts\Queue\Message $message): void;

    /**
     * @param mixed $deliveryDelay
     * @return ProducerInterface
     */
    public function setDeliveryDelay($deliveryDelay = null): ProducerInterface
    {
    }

    /**
     * @param mixed $priority
     * @return ProducerInterface
     */
    public function setPriority($priority = null): ProducerInterface
    {
    }

    /**
     * @param mixed $timeToLive
     * @return ProducerInterface
     */
    public function setTimeToLive($timeToLive = null): ProducerInterface
    {
    }
}
