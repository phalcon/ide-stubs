<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Logger\Formatter;

/**
 * Phalcon\Logger\Formatter\Syslog
 *
 * Prepares a message to be used in a Syslog backend
 */
class Syslog extends AbstractFormatter
{

    /**
     * Applies a format to a message before sent it to the internal log
     *
     * @param \Phalcon\Logger\Item $item
     * @return array
     */
    public function format(\Phalcon\Logger\Item $item): array
    {
    }
}
