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
 * Phalcon\Logger\Formatter\Line
 *
 * Formats messages using an one-line string
 */
class Line extends AbstractFormatter
{
    /**
     * Default date format
     *
     * @var string
     */
    protected $dateFormat;

    /**
     * Format applied to each message
     *
     * @var string
     */
    protected $format;


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
     * Format applied to each message
     *
     * @return string
     */
    public function getFormat(): string
    {
    }

    /**
     * Format applied to each message
     *
     * @param string $format
     */
    public function setFormat(string $format)
    {
    }

    /**
     * Phalcon\Logger\Formatter\Line construct
     *
     * @param string $format
     * @param string $dateFormat
     */
    public function __construct(string $format = '[%date%][%type%] %message%', string $dateFormat = 'c')
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
