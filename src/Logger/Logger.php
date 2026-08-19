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
 * Phalcon Logger.
 *
 * A logger, with various adapters and formatters. A formatter
 * interface is available as well as an adapter one. Adapters can be created
 * easily using the built-in AdapterFactory. A LoggerFactory is also available
 * that allows developers to create new instances of the Logger or load them
 * from config files (see Phalcon\Config\Config object).
 */
class Logger extends \Phalcon\Logger\AbstractLogger implements \Phalcon\Logger\LoggerInterface
{
    /**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @throws Exception
     * @param string $message
     * @param array $context
     * @return void
     */
    public function alert(string $message, array $context = []): void
    {
    }

    /**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @throws Exception
     * @param string $message
     * @param array $context
     * @return void
     */
    public function critical(string $message, array $context = []): void
    {
    }

    /**
     * Detailed debug information.
     *
     * @throws Exception
     * @param string $message
     * @param array $context
     * @return void
     */
    public function debug(string $message, array $context = []): void
    {
    }

    /**
     * System is unusable.
     *
     * @throws Exception
     * @param string $message
     * @param array $context
     * @return void
     */
    public function emergency(string $message, array $context = []): void
    {
    }

    /**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @throws Exception
     * @param string $message
     * @param array $context
     * @return void
     */
    public function error(string $message, array $context = []): void
    {
    }

    /**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @throws Exception
     * @param string $message
     * @param array $context
     * @return void
     */
    public function info(string $message, array $context = []): void
    {
    }

    /**
     * Logs with an arbitrary level.
     *
     * An unknown level (a typo or an unmapped value) is not rejected; it maps
     * to the CUSTOM level and is logged, rather than raising an exception.
     *
     * @throws Exception
     * @param mixed $level
     * @param string $message
     * @param array $context
     * @return void
     */
    public function log($level, string $message, array $context = []): void
    {
    }

    /**
     * Normal but significant events.
     *
     * @throws Exception
     * @param string $message
     * @param array $context
     * @return void
     */
    public function notice(string $message, array $context = []): void
    {
    }

    /**
     * Extra-verbose diagnostic output.
     *
     * Use for high-frequency, fine-grained events such as raw socket frames,
     * HTTP response bodies, or internal state transitions that are too noisy
     * for DEBUG.
     *
     * @throws Exception
     * @param string $message
     * @param array $context
     * @return void
     */
    public function trace(string $message, array $context = []): void
    {
    }

    /**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     *
     * @throws Exception
     * @param string $message
     * @param array $context
     * @return void
     */
    public function warning(string $message, array $context = []): void
    {
    }
}
