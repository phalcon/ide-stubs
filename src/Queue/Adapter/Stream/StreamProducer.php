<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Stream;

use Phalcon\Contracts\Queue\Destination as DestinationInterface;
use Phalcon\Contracts\Queue\Message as MessageInterface;
use Phalcon\Queue\Adapter\AbstractProducer;
use Phalcon\Queue\Adapter\QueueDestinationGuard;

/**
 * Appends messages to a filesystem queue. The Stream transport delivers in
 * insertion order with no scheduling, so delivery delay, priority and time to
 * live are not supported (the defaults from AbstractProducer reject them).
 */
class StreamProducer extends AbstractProducer
{
    /**
     * @var StreamContext
     */
    protected $context;

    /**
     * @param StreamContext $context
     */
    public function __construct(StreamContext $context)
    {
    }

    /**
     * @param \Phalcon\Contracts\Queue\Destination $destination
     * @param \Phalcon\Contracts\Queue\Message $message
     * @return void
     */
    public function send(\Phalcon\Contracts\Queue\Destination $destination, \Phalcon\Contracts\Queue\Message $message): void
    {
    }
}
