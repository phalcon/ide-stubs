<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Formatter;

use JsonException;
use Phalcon\Logger\Item;

/**
 * Formats messages using JSON encoding
 */
class Json extends \Phalcon\Logger\Formatter\AbstractFormatter
{
    /**
     * Json constructor.
     *
     * @param string $dateFormat
     */
    public function __construct(string $dateFormat = 'c')
    {
    }

    /**
     * Applies a format to a message before sent it to the internal log
     *
     * @param Item $item
     *
     * @return string
     * @throws JsonException
     */
    public function format(\Phalcon\Logger\Item $item): string
    {
    }
}
