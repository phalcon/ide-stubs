<?php

namespace Phalcon\Logger\Formatter;

use Phalcon\Logger\Formatter\AbstractFormatter;
use Phalcon\Logger\Item;

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
