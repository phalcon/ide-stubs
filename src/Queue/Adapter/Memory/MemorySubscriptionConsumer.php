<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Memory;

use Phalcon\Queue\Adapter\AbstractSubscriptionConsumer;

/**
 * Consumes from several in-process queues at once. The round-robin poll loop
 * lives in AbstractSubscriptionConsumer.
 */
class MemorySubscriptionConsumer extends AbstractSubscriptionConsumer
{
    /**
     * Retained for transports that may later need it for a native multi-queue
     * receive; the shared poll loop does not use it.
     *
     * @var MemoryContext
     */
    protected $context;

    /**
     * @param MemoryContext $context
     */
    public function __construct(MemoryContext $context)
    {
    }
}
