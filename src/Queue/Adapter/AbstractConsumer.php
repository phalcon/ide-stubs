<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter;

use Phalcon\Contracts\Queue\Consumer as ConsumerInterface;
use Phalcon\Contracts\Queue\Message as MessageInterface;
use Phalcon\Contracts\Queue\Queue as QueueInterface;

/**
 * Shared consumer base. Implements the blocking `receive()` as a polling loop
 * on top of the abstract `receiveNoWait()`; concrete consumers provide the
 * transport-specific `receiveNoWait`, `acknowledge` and `reject`.
 *
 * Transports with a native blocking receive (Redis BRPOP, Beanstalk reserve)
 * override `receive()` instead of polling.
 */
abstract class AbstractConsumer implements ConsumerInterface
{
    /**
     * Milliseconds slept between poll attempts.
     *
     * @var int
     */
    protected $pollInterval = 200;

    /**
     * The queue this consumer reads from.
     *
     * @var QueueInterface
     */
    protected $queue;

    /**
     * Acknowledges the message; the transport may then discard it.
     *
     * @param \Phalcon\Contracts\Queue\Message $message
     * @return void
     */
    abstract public function acknowledge(\Phalcon\Contracts\Queue\Message $message): void;

    /**
     * Returns the queue this consumer reads from.
     *
     * @return QueueInterface
     */
    public function getQueue(): QueueInterface
    {
    }

    /**
     * Receives a message, blocking up to timeout milliseconds (0 = block
     * until one is available), by polling `receiveNoWait()` every
     * `pollInterval` milliseconds. Returns null when none arrives in time.
     *
     * @param int $timeout
     * @return MessageInterface|null
     */
    public function receive(int $timeout = 0): MessageInterface|null
    {
    }

    /**
     * Receives a message without blocking, or null when none is ready.
     *
     * @return MessageInterface|null
     */
    abstract public function receiveNoWait(): MessageInterface|null;

    /**
     * Rejects the message. When requeue is true the transport redelivers it.
     *
     * @param \Phalcon\Contracts\Queue\Message $message
     * @param bool $requeue
     * @return void
     */
    abstract public function reject(\Phalcon\Contracts\Queue\Message $message, bool $requeue = false): void;

    /**
     * Sets the poll interval (in milliseconds) used by `receive()`.
     *
     * @param int $pollInterval
     * @return void
     */
    public function setPollInterval(int $pollInterval): void
    {
    }
}
