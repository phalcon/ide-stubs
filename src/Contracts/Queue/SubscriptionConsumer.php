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
 * Consumes from several queues at once, dispatching each message to the
 * callback registered for its consumer.
 */
interface SubscriptionConsumer
{
    /**
     * Starts consuming, blocking up to timeout milliseconds (0 = block
     * until a message is available).
     *
     * @param int $timeout
     * @return void
     */
    public function consume(int $timeout = 0): void;

    /**
     * Subscribes a consumer; the callback receives each delivered message.
     *
     * @param Consumer $consumer
     * @param callable $callback
     * @return void
     */
    public function subscribe(Consumer $consumer, $callback): void;

    /**
     * Removes a previously subscribed consumer.
     *
     * @param Consumer $consumer
     * @return void
     */
    public function unsubscribe(Consumer $consumer): void;

    /**
     * Removes every subscribed consumer.
     *
     * @return void
     */
    public function unsubscribeAll(): void;
}
