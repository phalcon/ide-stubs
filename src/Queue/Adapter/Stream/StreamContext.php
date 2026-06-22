<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Stream;

use Phalcon\Contracts\Queue\Consumer as ConsumerInterface;
use Phalcon\Contracts\Queue\Destination as DestinationInterface;
use Phalcon\Contracts\Queue\Message as MessageInterface;
use Phalcon\Contracts\Queue\Producer as ProducerInterface;
use Phalcon\Contracts\Queue\Queue as QueueInterface;
use Phalcon\Contracts\Queue\SubscriptionConsumer as SubscriptionConsumerInterface;
use Phalcon\Queue\Adapter\AbstractContext;
use Phalcon\Queue\Adapter\MessageEnvelope;
use Phalcon\Queue\Adapter\QueueDestinationGuard;

/**
 * Filesystem transport session. Each queue is one append-only file under the
 * configured directory; cross-process safety comes from flock. One message
 * per line, stored as base64(serialize([...])) so bodies with newlines are
 * safe. The destination factories come from AbstractContext.
 */
class StreamContext extends AbstractContext
{
    /**
     * Milliseconds slept between poll attempts by consumers.
     *
     * @var int
     */
    protected $pollInterval = 200;

    /**
     * Directory (with trailing separator) that holds the queue files.
     *
     * @var string
     */
    protected $storageDir = '';

    /**
     * @param string $storageDir
     * @param int $pollInterval
     */
    public function __construct(string $storageDir, int $pollInterval = 200)
    {
    }

    /**
     * @return void
     */
    public function close(): void
    {
    }

    /**
     * @param \Phalcon\Contracts\Queue\Destination $destination
     * @return ConsumerInterface
     */
    public function createConsumer(\Phalcon\Contracts\Queue\Destination $destination): ConsumerInterface
    {
    }

    /**
     * @param string $body
     * @param array $properties
     * @param array $headers
     * @return MessageInterface
     */
    public function createMessage(string $body = '', array $properties = [], array $headers = []): MessageInterface
    {
    }

    /**
     * @return ProducerInterface
     */
    public function createProducer(): ProducerInterface
    {
    }

    /**
     * @return SubscriptionConsumerInterface
     */
    public function createSubscriptionConsumer(): SubscriptionConsumerInterface
    {
    }

    /**
     * Removes the front message from a queue file, or null when it is empty.
     * Internal transport API used by StreamConsumer.
     *
     * @param string $queueName
     * @return MessageInterface|null
     */
    public function popMessage(string $queueName): MessageInterface|null
    {
    }

    /**
     * @param \Phalcon\Contracts\Queue\Queue $queue
     * @return void
     */
    public function purgeQueue(\Phalcon\Contracts\Queue\Queue $queue): void
    {
    }

    /**
     * Appends a message to the back of a queue file.
     * Internal transport API used by StreamProducer.
     *
     * @param string $queueName
     * @param \Phalcon\Contracts\Queue\Message $message
     * @return void
     */
    public function pushMessage(string $queueName, \Phalcon\Contracts\Queue\Message $message): void
    {
    }

    /**
     * @return void
     */
    private function ensureDir(): void
    {
    }

    /**
     * @param string $queueName
     * @return string
     */
    private function getFilepath(string $queueName): string
    {
    }
}
