<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Stream;

use Phalcon\Queue\Adapter\AbstractSubscriptionConsumer;

/**
 * Consumes from several filesystem queues at once. The round-robin poll loop
 * lives in AbstractSubscriptionConsumer.
 */
class StreamSubscriptionConsumer extends AbstractSubscriptionConsumer
{
    /**
     * Retained for transports that may later need it for a native multi-queue
     * receive; the shared poll loop does not use it.
     *
     * @var StreamContext
     */
    protected $context;

    /**
     * @param StreamContext $context
     * @param int $pollInterval
     */
    public function __construct(StreamContext $context, int $pollInterval = 200)
    {
    }
}
