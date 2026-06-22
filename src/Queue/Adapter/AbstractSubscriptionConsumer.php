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
use Phalcon\Contracts\Queue\SubscriptionConsumer as SubscriptionConsumerInterface;

/**
 * Shared subscription-consumer base. Implements the round-robin poll loop that
 * dispatches each subscribed consumer's messages to its callback; a callback
 * returning false stops consumption. The loop relies only on the consumer's
 * `receiveNoWait()`, so it is transport-agnostic. Concrete adapters keep just
 * the constructor that captures their context and poll interval.
 */
abstract class AbstractSubscriptionConsumer implements SubscriptionConsumerInterface
{
    /**
     * Milliseconds slept between poll passes.
     *
     * @var int
     */
    protected $pollInterval = 200;

    /**
     * Subscriptions keyed by queue name: [consumer, callback].
     *
     * @var array
     */
    protected $subscriptions = [];

    /**
     * Polls every subscription, dispatching each message to its callback,
     * blocking up to timeout milliseconds (0 = block until a callback
     * returns false).
     *
     * @param int $timeout
     * @return void
     */
    public function consume(int $timeout = 0): void
    {
    }

    /**
     * Subscribes a consumer; the callback receives each delivered message.
     *
     * @param \Phalcon\Contracts\Queue\Consumer $consumer
     * @param callable $callback
     * @return void
     */
    public function subscribe(\Phalcon\Contracts\Queue\Consumer $consumer, $callback): void
    {
    }

    /**
     * Removes a previously subscribed consumer.
     *
     * @param \Phalcon\Contracts\Queue\Consumer $consumer
     * @return void
     */
    public function unsubscribe(\Phalcon\Contracts\Queue\Consumer $consumer): void
    {
    }

    /**
     * Removes every subscribed consumer.
     *
     * @return void
     */
    public function unsubscribeAll(): void
    {
    }

    /**
     * Resolves a consumer's queue name. The `consumer` parameter is typed
     * `var` so the call is dynamic; this avoids Zephir resolving the
     * Consumer::getQueue() return type's short name in the wrong namespace.
     *
     * @param mixed $consumer
     * @return string
     */
    private function resolveQueueName($consumer): string
    {
    }
}
