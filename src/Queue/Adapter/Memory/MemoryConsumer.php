<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Memory;

use Phalcon\Contracts\Queue\Message as MessageInterface;
use Phalcon\Contracts\Queue\Queue as QueueInterface;
use Phalcon\Queue\Adapter\AbstractConsumer;

/**
 * Receives messages from a single in-process queue. `receive()` is the
 * polling loop inherited from AbstractConsumer.
 */
class MemoryConsumer extends AbstractConsumer
{
    /**
     * @var MemoryContext
     */
    protected $context;

    /**
     * MemoryConsumer constructor.
     *
     * @param MemoryContext $context
     * @param \Phalcon\Contracts\Queue\Queue $queue
     */
    public function __construct(MemoryContext $context, \Phalcon\Contracts\Queue\Queue $queue)
    {
    }

    /**
     * No-op: a received message has already been removed from the queue.
     *
     * @param \Phalcon\Contracts\Queue\Message $message
     * @return void
     */
    public function acknowledge(\Phalcon\Contracts\Queue\Message $message): void
    {
    }

    /**
     * Removes and returns the next message, or null when the queue is empty.
     *
     * @return MessageInterface|null
     */
    public function receiveNoWait(): MessageInterface|null
    {
    }

    /**
     * Rejects the message. When requeue is true it is put back on the queue.
     *
     * @param \Phalcon\Contracts\Queue\Message $message
     * @param bool $requeue
     * @return void
     */
    public function reject(\Phalcon\Contracts\Queue\Message $message, bool $requeue = false): void
    {
    }
}
