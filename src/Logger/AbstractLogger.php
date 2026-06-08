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
use Phalcon\Logger\Exceptions\AdapterNotFound;
use Phalcon\Logger\Exceptions\NoAdaptersConfigured;

/**
 * Abstract Logger Class
 *
 * Abstract logger class, providing common functionality. A formatter interface
 * is available as well as an adapter one. Adapters can be created easily using
 * the built in AdapterFactory. A LoggerFactory is also available that allows
 * developers to create new instances of the Logger or load them from config
 * files (see Phalcon\Config\Config object).
 *
 * @property AdapterInterface[] $adapters
 * @property array              $excluded
 * @property int                $logLevel
 * @property string             $name
 * @property string             $timezone
 */
abstract class AbstractLogger
{
    /**
     * @var int
     */
    const int ALERT = 2;

    /**
     * @var int
     */
    const int CRITICAL = 1;

    /**
     * @var int
     */
    const int CUSTOM = 8;

    /**
     * @var int
     */
    const int DEBUG = 7;

    /**
     * @var int
     */
    const int EMERGENCY = 0;

    /**
     * @var int
     */
    const int ERROR = 3;

    /**
     * @var int
     */
    const int INFO = 6;

    /**
     * @var int
     */
    const int NOTICE = 5;

    /**
     * @var int
     */
    const int TRACE = 9;

    /**
     * @var int
     */
    const int WARNING = 4;

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
     * @var DateTimeZone
     */
    protected $timezone;

    /**
     * Constructor.
     *
     * @param string            $name     The name of the logger
     * @param array             $adapters The collection of adapters to be used
     *                                    for logging (default [])
     * @param DateTimeZone|null $timezone Timezone. If omitted,
     *                                    date_Default_timezone_get() is used
     */
    public function __construct(string $name, array $adapters = [], ?\DateTimeZone $timezone = null)
    {
    }

    /**
     * Add an adapter to the stack. For processing we use FIFO
     *
     * @param string           $name    The name of the adapter
     * @param AdapterInterface $adapter The adapter to add to the stack
     *
     * @return static
     */
    public function addAdapter(string $name, \Phalcon\Logger\Adapter\AdapterInterface $adapter): static
    {
    }

    /**
     * Exclude certain adapters.
     *
     * @param array $adapters
     *
     * @return static
     */
    public function excludeAdapters(array $adapters = []): static
    {
    }

    /**
     * Returns an adapter from the stack
     *
     * @param string $name The name of the adapter
     *
     * @return AdapterInterface
     * @throws AdapterNotFound
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
     * Returns the log level
     *
     * @return int
     */
    public function getLogLevel(): int
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
     * Removes an adapter from the stack
     *
     * @param string $name The name of the adapter
     *
     * @return static
     * @throws AdapterNotFound
     */
    public function removeAdapter(string $name): static
    {
    }

    /**
     * Sets the adapters stack overriding what is already there
     *
     * @param array $adapters An array of adapters
     *
     * @return static
     */
    public function setAdapters(array $adapters): static
    {
    }

    /**
     * Sets the adapters stack overriding what is already there
     *
     * @param int $level
     *
     * @return static
     */
    public function setLogLevel(int $level): static
    {
    }

    /**
     * Adds a message to each handler for processing
     *
     * @param int $level
     * @param string $message
     * @param array  $context
     *
     * @return bool
     * @throws Exception
     * @throws NoAdaptersConfigured
     */
    protected function addMessage(int $level, string $message, array $context = []): bool
    {
    }

    /**
     * Converts the level from string/word to an integer
     *
     * @param mixed $level
     *
     * @return int
     */
    protected function getLevelNumber($level): int
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
}
