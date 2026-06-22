<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Redis;

use Phalcon\Contracts\Queue\Message as MessageInterface;
use Phalcon\Contracts\Queue\Queue as QueueInterface;
use Phalcon\Queue\Adapter\AbstractConsumer;

/**
 * Receives messages from a single Redis queue. `receive()` is overridden to
 * use the native blocking BRPOP (in one-second chunks, so due delayed
 * messages keep getting promoted) instead of the inherited polling loop.
 */
class RedisConsumer extends AbstractConsumer
{
    /**
     * @var RedisContext
     */
    protected $context;

    /**
     * @param RedisContext $context
     * @param \Phalcon\Contracts\Queue\Queue $queue
     */
    public function __construct(RedisContext $context, \Phalcon\Contracts\Queue\Queue $queue)
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
     * @param int $timeout
     * @return MessageInterface|null
     */
    public function receive(int $timeout = 0): MessageInterface|null
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
