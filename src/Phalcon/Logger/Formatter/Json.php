<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Formatter;

use Phalcon\Logger\Item;

/**
 * Phalcon\Logger\Formatter\Json
 *
 * Formats messages using JSON encoding
 */
class Json extends AbstractFormatter
{
    /**
     * Default date format
     *
     * @var string
     */
    protected $dateFormat;


    /**
     * Default date format
     *
     * @return string
     */
    public function getDateFormat(): string
    {
    }

    /**
     * Default date format
     *
     * @param string $dateFormat
     */
    public function setDateFormat(string $dateFormat)
    {
    }

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
     * @param Item $item
     * @return string
     */
    public function format(Item $item): string
    {
    }
}
