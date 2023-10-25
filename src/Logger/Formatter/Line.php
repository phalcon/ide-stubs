<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Formatter;

use Exception;
use Phalcon\Logger\Item;

/**
 * Class Line
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
     * Line constructor.
     *
     * @param string $format
     * @param string $dateFormat
     * @param string $interpolatorLeft
     * @param string $interpolatorRight
     */
    public function __construct(string $format = '[%date%][%level%] %message%', string $dateFormat = 'c', string $interpolatorLeft = '%', string $interpolatorRight = '%')
    {
    }

    /**
     * Applies a format to a message before sent it to the internal log
     *
     * @param Item $item
     *
     * @return string
     * @throws Exception
     */
    public function format(\Phalcon\Logger\Item $item): string
    {
    }

    /**
     * Return the format applied to each message
     *
     * @return string
     */
    public function getFormat(): string
    {
    }

    /**
     * Set the format applied to each message
     *
     * @param string $format
     *
     * @return Line
     */
    public function setFormat(string $format): Line
    {
    }
}
