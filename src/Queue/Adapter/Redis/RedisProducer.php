<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Redis;

use Phalcon\Contracts\Queue\Destination as DestinationInterface;
use Phalcon\Contracts\Queue\Message as MessageInterface;
use Phalcon\Contracts\Queue\Producer as ProducerInterface;
use Phalcon\Queue\Adapter\AbstractProducer;
use Phalcon\Queue\Adapter\QueueDestinationGuard;

/**
 * Sends messages to a Redis queue. Delivery delay is supported (via the
 * delayed sorted set); priority and time to live are not (the defaults from
 * AbstractProducer reject them).
 */
class RedisProducer extends AbstractProducer
{
    /**
     * @var RedisContext
     */
    protected $context;

    /**
     * Delivery delay in milliseconds, or null when not set.
     *
     * @var int | null
     */
    protected $deliveryDelay = null;

    /**
     * @param RedisContext $context
     */
    public function __construct(RedisContext $context)
    {
    }

    /**
     * @return int|null
     */
    public function getDeliveryDelay(): int|null
    {
    }

    /**
     * @param \Phalcon\Contracts\Queue\Destination $destination
     * @param \Phalcon\Contracts\Queue\Message $message
     * @return void
     */
    public function send(\Phalcon\Contracts\Queue\Destination $destination, \Phalcon\Contracts\Queue\Message $message): void
    {
    }

    /**
     * @param mixed $deliveryDelay
     * @return ProducerInterface
     */
    public function setDeliveryDelay($deliveryDelay = null): ProducerInterface
    {
    }
}
