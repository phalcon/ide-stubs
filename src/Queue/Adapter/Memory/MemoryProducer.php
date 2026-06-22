<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Memory;

use Phalcon\Contracts\Queue\Destination as DestinationInterface;
use Phalcon\Contracts\Queue\Message as MessageInterface;
use Phalcon\Queue\Adapter\AbstractProducer;
use Phalcon\Queue\Adapter\QueueDestinationGuard;

/**
 * Sends messages into an in-process queue. The Memory transport delivers
 * immediately and in-process, so delivery delay, priority and time to live are
 * not supported (the defaults from AbstractProducer reject them).
 */
class MemoryProducer extends AbstractProducer
{
    /**
     * @var MemoryContext
     */
    protected $context;

    /**
     * @param MemoryContext $context
     */
    public function __construct(MemoryContext $context)
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
