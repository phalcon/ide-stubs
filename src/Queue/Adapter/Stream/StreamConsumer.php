<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Stream;

use Phalcon\Contracts\Queue\Message as MessageInterface;
use Phalcon\Contracts\Queue\Queue as QueueInterface;
use Phalcon\Queue\Adapter\AbstractConsumer;

/**
 * Receives messages from a single filesystem queue. `receive()` is the
 * polling loop inherited from AbstractConsumer.
 */
class StreamConsumer extends AbstractConsumer
{
    /**
     * @var StreamContext
     */
    protected $context;

    /**
     * @param StreamContext $context
     * @param \Phalcon\Contracts\Queue\Queue $queue
     * @param int $pollInterval
     */
    public function __construct(StreamContext $context, \Phalcon\Contracts\Queue\Queue $queue, int $pollInterval = 200)
    {
    }

    /**
     * No-op: a received message has already been removed from the queue file.
     *
     * @param \Phalcon\Contracts\Queue\Message $message
     * @return void
     */
    public function acknowledge(\Phalcon\Contracts\Queue\Message $message): void
    {
    }

    /**
     * @return MessageInterface|null
     */
    public function receiveNoWait(): MessageInterface|null
    {
    }

    /**
     * @param \Phalcon\Contracts\Queue\Message $message
     * @param bool $requeue
     * @return void
     */
    public function reject(\Phalcon\Contracts\Queue\Message $message, bool $requeue = false): void
    {
    }
}
