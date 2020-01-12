<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Formatter;

use Phalcon\Helper\Json as JsonHelper;
use Phalcon\Logger\Item;

/**
 * Phalcon\Logger\Formatter\Json
 *
 * Formats messages using JSON encoding
 */
class Json extends \Phalcon\Logger\Formatter\AbstractFormatter
{

    /**
     * Phalcon\Logger\Formatter\Json construct
     *
     * @param string $dateFormat
     */
    public function __construct(string $dateFormat = 'c')
    {
    }

    /**
     * Applies a format to a message before sent it to the internal log
     *
     * @param \Phalcon\Logger\Item $item
     * @return string
     */
    public function format(\Phalcon\Logger\Item $item): string
    {
    }
}
