<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Queue;

/**
 * A session with the transport. Factory for messages, destinations,
 * producers and consumers.
 */
interface Context
{
    /**
     * Closes the context and releases its resources.
     *
     * @return void
     */
    public function close(): void;

    /**
     * Creates a consumer for the given destination.
     *
     * @param Destination $destination
     * @return Consumer
     */
    public function createConsumer(Destination $destination): Consumer;

    /**
     * Creates a message with an optional body, properties and headers.
     *
     * @param string $body
     * @param array $properties
     * @param array $headers
     * @return Message
     */
    public function createMessage(string $body = '', array $properties = [], array $headers = []): Message;

    /**
     * Creates a producer.
     *
     * @return Producer
     */
    public function createProducer(): Producer;

    /**
     * Creates a queue destination by name.
     *
     * @param string $queueName
     * @return Queue
     */
    public function createQueue(string $queueName): Queue;

    /**
     * Creates a subscription consumer for consuming from several queues.
     *
     * @return SubscriptionConsumer
     */
    public function createSubscriptionConsumer(): SubscriptionConsumer;

    /**
     * Creates a temporary queue tied to the lifetime of the context.
     *
     * @return Queue
     */
    public function createTemporaryQueue(): Queue;

    /**
     * Creates a topic destination by name.
     *
     * @param string $topicName
     * @return Topic
     */
    public function createTopic(string $topicName): Topic;

    /**
     * Removes all messages from the given queue.
     *
     * @param Queue $queue
     * @return void
     */
    public function purgeQueue(Queue $queue): void;
}
