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
use Phalcon\Traits\Support\Helper\Json\EncodeTrait;

/**
 * Formats messages using JSON encoding
 */
class Json extends \Phalcon\Logger\Formatter\AbstractFormatter
{
    use \Phalcon\Traits\Support\Helper\Json\EncodeTrait;



    /**
     * Json constructor.
     *
     * @param string $dateFormat
     * @param string $interpolatorLeft
     * @param string $interpolatorRight
     */
    public function __construct(string $dateFormat = 'c', string $interpolatorLeft = '%', string $interpolatorRight = '%')
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
