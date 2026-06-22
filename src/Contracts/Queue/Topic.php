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
 * A topic destination (publish/subscribe).
 */
interface Topic extends \Phalcon\Contracts\Queue\Destination
{
    /**
     * Returns the topic name.
     *
     * @return string
     */
    public function getTopicName(): string;
}
