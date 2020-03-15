<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger\Adapter;

/**
 * Phalcon\Logger\Adapter\Syslog
 *
 * Sends logs to the system logger
 *
 * ```php
 * use Phalcon\Logger;
 * use Phalcon\Logger\Adapter\Syslog;
 *
 * // LOG_USER is the only valid log type under Windows operating systems
 * $logger = new Syslog(
 *     "ident",
 *     [
 *         "option"   => LOG_CONS | LOG_NDELAY | LOG_PID,
 *         "facility" => LOG_USER,
 *     ]
 * );
 *
 * $logger->log("This is a message");
 * $logger->log(Logger::ERROR, "This is an error");
 * $logger->error("This is another error");
 * ```
 */
class Syslog extends \Phalcon\Logger\Adapter\AbstractAdapter
{
    /**
     * Name of the default formatter class
     *
     * @var string
     */
    protected $defaultFormatter = 'Line';

    /**
     * @var int
     */
    protected $facility = 0;

    /**
     * @var string
     */
    protected $name = '';

    /**
     * @var bool
     */
    protected $opened = false;

    /**
     * @var int
     */
    protected $option = 0;


    /**
     * Phalcon\Logger\Adapter\Syslog constructor
     *
     * @param array $options = [
     *     'option' => null,
     *     'facility' => null
     * ]
     * @param string $name
     */
    public function __construct(string $name, array $options = array())
    {
    }

    /**
     * Closes the logger
     *
     * @return bool
     */
    public function close(): bool
    {
    }

    /**
     * Processes the message i.e. writes it to the syslog
     *
     * @param \Phalcon\Logger\Item $item
     * @return void
     */
    public function process(\Phalcon\Logger\Item $item)
    {
    }

    /**
     * Translates a Logger level to a Syslog level
     *
     * @param int $level
     * @return int
     */
    private function logLevelToSyslog(int $level): int
    {
    }
}
