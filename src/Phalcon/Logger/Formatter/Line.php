<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Formatter;

/**
 * Phalcon\Logger\Formatter\Line
 *
 * Formats messages using an one-line string
 */
class Line extends \Phalcon\Logger\Formatter\AbstractFormatter
{
    /**
     * Format applied to each message
     *
     * @var string
     */
    protected $format;


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
     * @param \Phalcon\Logger\Item $item
     * @return string
     */
    public function format(\Phalcon\Logger\Item $item): string
    {
    }
}
