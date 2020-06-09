<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger;

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
     * Log message
     *
     * @var string
     */
    protected $name;

    /**
     * Log timestamp
     *
     * @var integer
     */
    protected $time;

    /**
     * Log type
     *
     * @var integer
     */
    protected $type;


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
     * Log message
     *
     * @return string
     */
    public function getName(): string
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
     * Log type
     *
     * @return mixed
     */
    public function getType()
    {
    }

    /**
     * Phalcon\Logger\Item constructor
     *
     * @todo Remove the time or change the signature to an array
     * @param string $message
     * @param string $name
     * @param int $type
     * @param int $time
     * @param mixed $context
     */
    public function __construct(string $message, string $name, int $type, int $time = 0, $context = array())
    {
    }
}
