<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Beanstalk;

use Phalcon\Queue\Adapter\AbstractSubscriptionConsumer;

/**
 * Consumes from several Beanstalkd tubes at once. The round-robin poll loop
 * lives in AbstractSubscriptionConsumer.
 */
class BeanstalkSubscriptionConsumer extends AbstractSubscriptionConsumer
{
    /**
     * Retained for transports that may later need it for a native multi-queue
     * receive; the shared poll loop does not use it.
     *
     * @var BeanstalkContext
     */
    protected $context;

    /**
     * @param BeanstalkContext $context
     * @param int $pollInterval
     */
    public function __construct(BeanstalkContext $context, int $pollInterval = 200)
    {
    }
}
