<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Consumer;

use Phalcon\Contracts\Queue\Consumer as ConsumerInterface;
use Phalcon\Contracts\Queue\Processor as ProcessorInterface;
use Phalcon\Contracts\Queue\Queue as QueueInterface;

/**
 * Binds a processor to a queue, together with the consumer that reads it.
 */
class BoundProcessor
{
    /**
     * @var ConsumerInterface
     */
    protected $consumer;

    /**
     * @var ProcessorInterface
     */
    protected $processor;

    /**
     * @var QueueInterface
     */
    protected $queue;

    /**
     * @param \Phalcon\Contracts\Queue\Queue $queue
     * @param \Phalcon\Contracts\Queue\Processor $processor
     * @param \Phalcon\Contracts\Queue\Consumer $consumer
     */
    public function __construct(\Phalcon\Contracts\Queue\Queue $queue, \Phalcon\Contracts\Queue\Processor $processor, \Phalcon\Contracts\Queue\Consumer $consumer)
    {
    }

    /**
     * @return ConsumerInterface
     */
    public function getConsumer(): ConsumerInterface
    {
    }

    /**
     * @return ProcessorInterface
     */
    public function getProcessor(): ProcessorInterface
    {
    }

    /**
     * @return QueueInterface
     */
    public function getQueue(): QueueInterface
    {
    }
}
