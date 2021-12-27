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
use DateTimeZone;
use Exception;
use Phalcon\Logger\Adapter\AdapterInterface;
use Phalcon\Logger\Exception as LoggerException;
use Psr\Log\InvalidArgumentException;
use Psr\Log\LoggerInterface;

/**
 * Phalcon Logger.
 *
 * A PSR compatible logger, with various adapters and formatters. A formatter
 * interface is available as well as an adapter one. Adapters can be created
 * easily using the built in AdapterFactory. A LoggerFactory is also available
 * that allows developers to create new instances of the Logger or load them
 * from config files (see Phalcon\Config\Config object).
 *
 * @package Phalcon\Logger
 *
 * @property AdapterInterface[] $adapters
 * @property array              $excluded
 * @property int                $logLevel
 * @property string             $name
 * @property string             $timezone
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
    protected $adapters = [];

    /**
     * The excluded adapters for this log process
     *
     * @var array
     */
    protected $excluded = [];

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
     * @var DateTimeZone|null
     */
    protected $timezone = null;

    /**
     * The adapter stack
     *
     * @return mixed
     */
    public function getAdapters()
    {
    }

    /**
     * Minimum log level for the logger
     *
     * @return int
     */
    public function getLogLevel(): int
    {
    }

    /**
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Constructor.
     *
     * @param string            $name     The name of the logger
     * @param array             $adapters The collection of adapters to be used
     *                                    for logging (default [])
     * @param DateTimeZone|null $timezone Timezone. If omitted,
     *                                    date_Default_timezone_get() is used
     */
    public function __construct(string $name, array $adapters = [], \DateTimeZone $timezone = null)
    {
    }

    /**
     * Add an adapter to the stack. For processing we use FIFO
     *
     * @param string           $name    The name of the adapter
     * @param AdapterInterface $adapter The adapter to add to the stack
     *
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
     * @param array  $context
     *
     * @return void
     */
    public function alert($message, array $context = []): void
    {
    }

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function critical($message, array $context = []): void
    {
    }

    /**
     * Detailed debug information.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function debug($message, array $context = []): void
    {
    }

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function error($message, array $context = []): void
    {
    }

    /**
     * System is unusable.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function emergency($message, array $context = []): void
    {
    }

    /**
     * Exclude certain adapters.
     *
     * @param array $adapters
     *
     * @return Logger
     */
    public function excludeAdapters(array $adapters = []): Logger
    {
    }

    /**
     * Returns an adapter from the stack
     *
     * @param string $name The name of the adapter
     *
     * @return AdapterInterface
     * @throws LoggerException
     */
    public function getAdapter(string $name): AdapterInterface
    {
    }

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function info($message, array $context = []): void
    {
    }

    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param mixed $message
     * @param array $context
     *
     * @throws LoggerException
     * @return void
     */
    public function log($level, $message, array $context = []): void
    {
    }

    /**
     * Normal but significant events.
     *
     * @param string $message
     * @param array  $context
     *
     * @return void
     */
    public function notice($message, array $context = []): void
    {
    }

    /**
     * Removes an adapter from the stack
     *
     * @param string $name The name of the adapter
     *
     * @return Logger
     * @throws LoggerException
     */
    public function removeAdapter(string $name): Logger
    {
    }

    /**
     * Sets the adapters stack overriding what is already there
     *
     * @param array $adapters An array of adapters
     *
     * @return Logger
     */
    public function setAdapters(array $adapters): Logger
    {
    }

    /**
     * Sets the adapters stack overriding what is already there
     *
     * @param int $level
     *
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
     * @param array  $context
     *
     * @return void
     */
    public function warning($message, array $context = []): void
    {
    }

    /**
     * Adds a message to each handler for processing
     *
     * @param int    $level
     * @param string $message
     * @param array  $context
     *
     * @return bool
     * @throws Exception
     * @throws LoggerException
     */
    protected function addMessage(int $level, string $message, array $context = []): bool
    {
    }

    /**
     * Returns an array of log levels with integer to string conversion
     *
     * @return string[]
     */
    protected function getLevels(): array
    {
    }

    /**
     * Converts the level from string/word to an integer
     *
     * @param mixed $level
     *
     * @return int
     * @throws InvalidArgumentException
     */
    private function getLevelNumber($level): int
    {
    }
}
