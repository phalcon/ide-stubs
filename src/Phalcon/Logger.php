<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon;

use Psr\Log\LoggerInterface;
use Phalcon\Logger\Adapter\AdapterInterface;
use Phalcon\Logger\Item;
use Phalcon\Logger\Exception;

/**
 * Phalcon\Logger
 *
 * This component offers logging capabilities for your application. The
 * component accepts multiple adapters, working also as a multiple logger.
 * Phalcon\Logger implements PSR-3.
 *
 * ```php
 * use Phalcon\Logger;
 * use Phalcon\Logger\Adapter\Stream;
 *
 * $adapter1 = new Stream('/logs/first-log.log');
 * $adapter2 = new Stream('/remote/second-log.log');
 * $adapter3 = new Stream('/manager/third-log.log');
 *
 * $logger = new Logger(
 *         'messages',
 *         [
 *             'local'   => $adapter1,
 *             'remote'  => $adapter2,
 *             'manager' => $adapter3,
 *         ]
 *     );
 *
 * // Log to all adapters
 * $logger->error('Something went wrong');
 *
 * // Log to specific adapters
 * $logger
 *         ->excludeAdapters(['manager'])
 *         ->info('This does not go to the "manager" logger);
 * ```
 */
class Logger implements \Psr\Log\LoggerInterface
{

    const ALERT = 2;


    const CRITICAL = 1;


    const CUSTOM = 8;


    const DEBUG = 7;


    const EMERGENCY = 0;


    const ERROR = 3;


    const INFO = 6;


    const NOTICE = 5;


    const WARNING = 4;

    /**
     * The adapter stack
     *
     * @var AdapterInterface[]
     */
    protected $adapters = array();

    /**
     * Minimum log level for the logger
     *
     * @var int
     */
    protected $logLevel = 8;

    /**
     * @var string
     */
    protected $name = '';

    /**
     * The excluded adapters for this log process
     *
     * @var AdapterInterface[]
     */
    protected $excluded = array();


    /**
     * Minimum log level for the logger
     *
     * @return int
     */
    public function getLogLevel(): int
    {
    }

    /**
     * Constructor.
     *
     * @param string $name The name of the logger
     * @param array $adapters The collection of adapters to be used for logging (default [])
     */
    public function __construct(string $name, array $adapters = array())
    {
    }

    /**
     * Add an adapter to the stack. For processing we use FIFO
     *
     * @param string $name The name of the adapter
     * @param AdapterInterface $adapter The adapter to add to the stack
     * @return Logger
     */
    public function addAdapter(string $name, \Phalcon\Logger\Adapter\AdapterInterface $adapter): Logger
    {
    }

    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @param string $message
     * @param array $context
     * @return void
     */
    public function alert($message, array $context = array())
    {
    }

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @param string $message
     * @param array $context
     * @return void
     */
    public function critical($message, array $context = array())
    {
    }

    /**
     * Detailed debug information.
     *
     * @param string $message
     * @param array $context
     * @return void
     */
    public function debug($message, array $context = array())
    {
    }

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param string $message
     * @param array $context
     * @return void
     */
    public function error($message, array $context = array())
    {
    }

    /**
     * System is unusable.
     *
     * @param string $message
     * @param array $context
     * @return void
     */
    public function emergency($message, array $context = array())
    {
    }

    /**
     * Exclude certain adapters.
     *
     * @param array $adapters
     * @return Logger
     */
    public function excludeAdapters(array $adapters = array()): Logger
    {
    }

    /**
     * Returns an adapter from the stack
     *
     * @param string $name The name of the adapter
     *
     * @throws Exception
     * @return AdapterInterface
     */
    public function getAdapter(string $name): AdapterInterface
    {
    }

    /**
     * Returns the adapter stack array
     *
     * @return AdapterInterface[]
     */
    public function getAdapters(): array
    {
    }

    /**
     * Returns the name of the logger
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @param string $message
     * @param array $context
     * @return void
     */
    public function info($message, array $context = array())
    {
    }

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string $message
     * @param array $context
     * @return void
     */
    public function log($level, $message, array $context = array())
    {
    }

    /**
     * Normal but significant events.
     *
     * @param string $message
     * @param array $context
     * @return void
     */
    public function notice($message, array $context = array())
    {
    }

    /**
     * Removes an adapter from the stack
     *
     * @param string $name The name of the adapter
     *
     * @throws Logger\Exception
     * @return Logger
     */
    public function removeAdapter(string $name): Logger
    {
    }

    /**
     * Sets the adapters stack overriding what is already there
     *
     * @param array $adapters An array of adapters
     * @return Logger
     */
    public function setAdapters(array $adapters): Logger
    {
    }

    /**
     * Sets the log level above which we can log
     *
     * @param int $level
     * @return Logger
     */
    public function setLogLevel(int $level): Logger
    {
    }

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     *
     * @param string $message
     * @param array $context
     * @return void
     */
    public function warning($message, array $context = array())
    {
    }

    /**
     * Adds a message to each handler for processing
     *
     * @param int $level
     * @param string $message *
     * @throws Logger\Exception
     * @param array $context
     * @return bool
     */
    protected function addMessage(int $level, string $message, array $context = array()): bool
    {
    }

    /**
     * Returns an array of log levels with integer to string conversion
     *
     * @return array
     */
    protected function getLevels(): array
    {
    }

    /**
     * Converts the level from string/word to an integer
     *
     * @param string|int $level
     * @return int
     */
    private function getLevelNumber($level): int
    {
    }
}
