<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Redis;

use Phalcon\Queue\Adapter\AbstractSubscriptionConsumer;

/**
 * Consumes from several Redis queues at once. The round-robin poll loop lives
 * in AbstractSubscriptionConsumer.
 */
class RedisSubscriptionConsumer extends AbstractSubscriptionConsumer
{
    /**
     * Retained for transports that may later need it for a native multi-queue
     * receive; the shared poll loop does not use it.
     *
     * @var RedisContext
     */
    protected $context;

    /**
     * @param RedisContext $context
     * @param int $pollInterval
     */
    public function __construct(RedisContext $context, int $pollInterval = 200)
    {
    }
}
