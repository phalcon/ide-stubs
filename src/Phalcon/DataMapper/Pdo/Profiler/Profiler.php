<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Pdo\Profiler;

use Psr\Log\LoggerInterface;

/**
 * Sends query profiles to a logger.
 *
 * @property bool            $active
 * @property array           $context
 * @property string          $logFormat
 * @property string          $logLevel
 * @property LoggerInterface $logger
 */
class Profiler implements \Phalcon\DataMapper\Pdo\Profiler\ProfilerInterface
{
    /**
     * @var bool
     */
    protected $active = false;

    /**
     * @var array
     */
    protected $context = array();

    /**
     * @var string
     */
    protected $logFormat = '';

    /**
     * @var int
     */
    protected $logLevel = 0;

    /**
     * @var LoggerInterface
     */
    protected $logger;


    /**
     * Constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(\Psr\Log\LoggerInterface $logger = null)
    {
    }

    /**
     * Finishes and logs a profile entry.
     *
     * @param string $statement
     * @param array  $values
     * @return void
     */
    public function finish(string $statement = null, array $values = array())
    {
    }

    /**
     * Returns the log message format string, with placeholders.
     *
     * @return string
     */
    public function getLogFormat(): string
    {
    }

    /**
     * Returns the underlying logger instance.
     *
     * @return LoggerInterface
     */
    public function getLogger(): LoggerInterface
    {
    }

    /**
     * Returns the level at which to log profile messages.
     *
     * @return string
     */
    public function getLogLevel(): string
    {
    }

    /**
     * Returns true if logging is active.
     *
     * @return bool
     */
    public function isActive(): bool
    {
    }

    /**
     * Enable or disable profiler logging.
     *
     * @param bool $active
     *
     * @return ProfilerInterface
     */
    public function setActive(bool $active): ProfilerInterface
    {
    }

    /**
     * Sets the log message format string, with placeholders.
     *
     * @param string $logFormat
     *
     * @return ProfilerInterface
     */
    public function setLogFormat(string $logFormat): ProfilerInterface
    {
    }

    /**
     * Level at which to log profile messages.
     *
     * @param string $logLevel
     *
     * @return ProfilerInterface
     */
    public function setLogLevel(string $logLevel): ProfilerInterface
    {
    }

    /**
     * Starts a profile entry.
     *
     * @param string $method
     * @return void
     */
    public function start(string $method)
    {
    }
}
