<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger;

use DateTimeImmutable;

/**
 * Phalcon\Logger\Item
 *
 * Represents each item in a logging transaction
 */
class Item
{
    /**
     * Log Context
     *
     * @var mixed
     */
    protected $context;

    /**
     * Log message
     *
     * @var string
     */
    protected $message;

    /**
     * Log type
     *
     * @var integer
     */
    protected $level;

    /**
     * Log message
     *
     * @var string
     */
    protected $levelName;

    /**
     * Log timestamp
     *
     * @var DateTimeImmutable
     */
    protected $time;


    /**
     * Log Context
     *
     * @return mixed
     */
    public function getContext()
    {
    }

    /**
     * Log message
     *
     * @return string
     */
    public function getMessage(): string
    {
    }

    /**
     * Log type
     *
     * @return mixed
     */
    public function getLevel()
    {
    }

    /**
     * Log message
     *
     * @return string
     */
    public function getLevelName(): string
    {
    }

    /**
     * Log timestamp
     *
     * @return mixed
     */
    public function getTime()
    {
    }

    /**
     * Phalcon\Logger\Item constructor
     *
     * @param string $message
     * @param string $levelName
     * @param int $level
     * @param \DateTimeImmutable $time
     * @param array $context
     */
    public function __construct(string $message, string $levelName, int $level, \DateTimeImmutable $time, array $context = [])
    {
    }
}
