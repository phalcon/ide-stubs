<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Memory;

use Phalcon\Contracts\Queue\Consumer as ConsumerInterface;
use Phalcon\Contracts\Queue\Destination as DestinationInterface;
use Phalcon\Contracts\Queue\Message as MessageInterface;
use Phalcon\Contracts\Queue\Producer as ProducerInterface;
use Phalcon\Contracts\Queue\Queue as QueueInterface;
use Phalcon\Contracts\Queue\SubscriptionConsumer as SubscriptionConsumerInterface;
use Phalcon\Queue\Adapter\AbstractContext;
use Phalcon\Queue\Adapter\QueueDestinationGuard;

/**
 * In-process transport session. Owns the named FIFO queues that this context's
 * producers and consumers share. The destination factories (createQueue /
 * createTopic / createTemporaryQueue) come from AbstractContext.
 */
class MemoryContext extends AbstractContext
{
    /**
     * Named queues: queue name => list of messages (FIFO).
     *
     * @var array
     */
    protected $queues = [];

    /**
     * Closes the context and drops every stored message.
     *
     * @return void
     */
    public function close(): void
    {
    }

    /**
     * Creates a consumer for the given queue destination.
     *
     * @param \Phalcon\Contracts\Queue\Destination $destination
     * @return ConsumerInterface
     */
    public function createConsumer(\Phalcon\Contracts\Queue\Destination $destination): ConsumerInterface
    {
    }

    /**
     * Creates a message.
     *
     * @param string $body
     * @param array $properties
     * @param array $headers
     * @return MessageInterface
     */
    public function createMessage(string $body = '', array $properties = [], array $headers = []): MessageInterface
    {
    }

    /**
     * Creates a producer.
     *
     * @return ProducerInterface
     */
    public function createProducer(): ProducerInterface
    {
    }

    /**
     * Creates a subscription consumer.
     *
     * @return SubscriptionConsumerInterface
     */
    public function createSubscriptionConsumer(): SubscriptionConsumerInterface
    {
    }

    /**
     * Removes the front message from a queue, or null when it is empty.
     * Internal transport API used by MemoryConsumer.
     *
     * @param string $queueName
     * @return MessageInterface|null
     */
    public function popMessage(string $queueName): MessageInterface|null
    {
    }

    /**
     * Removes all messages from the given queue.
     *
     * @param \Phalcon\Contracts\Queue\Queue $queue
     * @return void
     */
    public function purgeQueue(\Phalcon\Contracts\Queue\Queue $queue): void
    {
    }

    /**
     * Appends a message to the back of a queue.
     * Internal transport API used by MemoryProducer.
     *
     * @param string $queueName
     * @param \Phalcon\Contracts\Queue\Message $message
     * @return void
     */
    public function pushMessage(string $queueName, \Phalcon\Contracts\Queue\Message $message): void
    {
    }
}
