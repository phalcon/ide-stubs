<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter;

use Phalcon\Contracts\Queue\Context as ContextInterface;
use Phalcon\Contracts\Queue\Queue as QueueInterface;
use Phalcon\Contracts\Queue\Topic as TopicInterface;

/**
 * Shared transport-session base. Every transport builds the same destination
 * value objects (GenericQueue / GenericTopic) and the same uniquely named
 * temporary queue, so those factories live here once. Concrete contexts
 * implement the transport-specific factories (consumer, producer, message,
 * subscription consumer) and the storage operations.
 */
abstract class AbstractContext implements ContextInterface
{
    /**
     * Creates a queue destination by name.
     *
     * @param string $queueName
     * @return QueueInterface
     */
    public function createQueue(string $queueName): QueueInterface
    {
    }

    /**
     * Creates a uniquely named temporary queue.
     *
     * @return QueueInterface
     */
    public function createTemporaryQueue(): QueueInterface
    {
    }

    /**
     * Creates a topic destination by name.
     *
     * @param string $topicName
     * @return TopicInterface
     */
    public function createTopic(string $topicName): TopicInterface
    {
    }
}
