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
 * A queue destination (point-to-point).
 */
interface Queue extends \Phalcon\Contracts\Queue\Destination
{
    /**
     * Returns the queue name.
     *
     * @return string
     */
    public function getQueueName(): string;
}
