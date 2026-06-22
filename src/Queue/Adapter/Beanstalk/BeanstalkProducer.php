<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Beanstalk;

use Phalcon\Contracts\Queue\Destination as DestinationInterface;
use Phalcon\Contracts\Queue\Message as MessageInterface;
use Phalcon\Contracts\Queue\Producer as ProducerInterface;
use Phalcon\Queue\Adapter\AbstractProducer;
use Phalcon\Queue\Adapter\MessageEnvelope;
use Phalcon\Queue\Adapter\QueueDestinationGuard;

/**
 * Sends messages to a Beanstalkd tube. Delivery delay (rounded down to whole
 * seconds) and message priority are supported natively; Beanstalkd has no
 * message expiry, so time to live is not (the default from AbstractProducer
 * rejects it).
 */
class BeanstalkProducer extends AbstractProducer
{
    /**
     * Default Beanstalkd priority (0 = most urgent).
     *
     * @var int
     */
    const int DEFAULT_PRIORITY = 100;

    /**
     * @var BeanstalkContext
     */
    protected $context;

    /**
     * Delivery delay in milliseconds, or null when not set.
     *
     * @var int | null
     */
    protected $deliveryDelay = null;

    /**
     * Job priority, or null when not set.
     *
     * @var int | null
     */
    protected $priority = null;

    /**
     * @param BeanstalkContext $context
     */
    public function __construct(BeanstalkContext $context)
    {
    }

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

    /**
     * @param mixed $priority
     * @return ProducerInterface
     */
    public function setPriority($priority = null): ProducerInterface
    {
    }
}
