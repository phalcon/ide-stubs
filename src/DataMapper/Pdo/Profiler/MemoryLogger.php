<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Pdo\Profiler;

use Phalcon\Logger\Enum;
use Phalcon\Logger\Adapter\AdapterInterface;
use Phalcon\Logger\Adapter\Noop;
use Phalcon\Logger\LoggerInterface;

/**
 * A memory-based logger.
 */
class MemoryLogger implements \Phalcon\Logger\LoggerInterface
{
    /**
     * @var array
     */
    protected $messages = [];

    /**
     * @param string $message
     * @param mixed[] $context
     * @return void
     */
    public function alert(string $message, array $context = []): void
    {
    }

    /**
     * @param string $message
     * @param mixed[] $context
     * @return void
     */
    public function critical(string $message, array $context = []): void
    {
    }

    /**
     * @param string $message
     * @param mixed[] $context
     * @return void
     */
    public function debug(string $message, array $context = []): void
    {
    }

    /**
     * @param string $message
     * @param mixed[] $context
     * @return void
     */
    public function emergency(string $message, array $context = []): void
    {
    }

    /**
     * @param string $message
     * @param mixed[] $context
     * @return void
     */
    public function error(string $message, array $context = []): void
    {
    }

    /**
     * Returns an adapter from the stack
     *
     * @param string $name The name of the adapter
     *
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
     * Returns the log level
     *
     * @return int
     */
    public function getLogLevel(): int
    {
    }

    /**
     * Returns the logged messages.
     *
     * @return array
     */
    public function getMessages(): array
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
     * @param string $message
     * @param mixed[] $context
     * @return void
     */
    public function info(string $message, array $context = []): void
    {
    }

    /**
     * @param string $message
     * @param mixed[] $context
     * @return void
     */
    public function notice(string $message, array $context = []): void
    {
    }

    /**
     * @param string $message
     * @param mixed[] $context
     * @return void
     */
    public function warning(string $message, array $context = []): void
    {
    }

    /**
     * Logs a message.
     *
     * @param mixed  $level
     * @param string $message
     * @param array  $context
     * @return void
     */
    public function log($level, string $message, array $context = []): void
    {
    }
}
