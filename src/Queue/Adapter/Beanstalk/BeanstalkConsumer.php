<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Beanstalk;

use Phalcon\Contracts\Queue\Message as MessageInterface;
use Phalcon\Contracts\Queue\Queue as QueueInterface;
use Phalcon\Contracts\Queue\VisibilityAware;
use Phalcon\Queue\Adapter\AbstractConsumer;
use Phalcon\Queue\Adapter\MessageEnvelope;

/**
 * Receives messages from a single Beanstalkd tube over its own connection.
 * `receive()` is overridden to use the native blocking reserve. Implements
 * VisibilityAware: a reserved job has a time-to-run window that `touch()`
 * extends; acknowledging deletes the job, rejecting releases it (requeue) or
 * buries it.
 */
class BeanstalkConsumer extends AbstractConsumer implements \Phalcon\Contracts\Queue\VisibilityAware
{
    /**
     * Default Beanstalkd priority used when releasing or burying.
     *
     * @var int
     */
    const int DEFAULT_PRIORITY = 100;

    /**
     * @var BeanstalkConnection
     */
    protected $connection;

    /**
     * @param BeanstalkConnection $connection
     * @param \Phalcon\Contracts\Queue\Queue $queue
     */
    public function __construct(BeanstalkConnection $connection, \Phalcon\Contracts\Queue\Queue $queue)
    {
    }

    /**
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

    /**
     * Extends the time-to-run window of a reserved job (VisibilityAware).
     *
     * @param \Phalcon\Contracts\Queue\Message $message
     * @return bool
     */
    public function touch(\Phalcon\Contracts\Queue\Message $message): bool
    {
    }

    /**
     * Builds a BeanstalkMessage from a reserved [id, body] pair, or null.
     *
     * @param mixed $job
     * @return MessageInterface|null
     */
    private function buildMessage($job): MessageInterface|null
    {
    }

    /**
     * Resolves a message's Beanstalkd job id. The `message` parameter is typed
     * `var` so the call is dynamic; this avoids Zephir resolving getJobId()
     * against the Message interface, which does not declare it.
     *
     * @param mixed $message
     * @return string
     */
    private function resolveJobId($message): string
    {
    }
}
