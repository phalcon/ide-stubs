<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Pdo\Profiler;

use Phalcon\Contracts\DataMapper\DataMapperTypes;
use Phalcon\Logger\Adapter\AdapterInterface;
use Phalcon\Logger\Adapter\Noop;
use Phalcon\Logger\Enum;
use Phalcon\Logger\LoggerInterface;

/**
 * A memory-based logger.
 *
 * @phpstan-import-type datamapper_log_messages from DataMapperTypes
 */
class MemoryLogger implements \Phalcon\Logger\LoggerInterface
{
    /**
     * @phpstan-var datamapper_log_messages
     */
    protected array $messages = [];

    /**
     * @param mixed[] $context
     * @param string $message
     * @return void
     */
    public function alert(string $message, array $context = []): void
    {
    }

    /**
     * @param mixed[] $context
     * @param string $message
     * @return void
     */
    public function critical(string $message, array $context = []): void
    {
    }

    /**
     * @param mixed[] $context
     * @param string $message
     * @return void
     */
    public function debug(string $message, array $context = []): void
    {
    }

    /**
     * @param mixed[] $context
     * @param string $message
     * @return void
     */
    public function emergency(string $message, array $context = []): void
    {
    }

    /**
     * @param mixed[] $context
     * @param string $message
     * @return void
     */
    public function error(string $message, array $context = []): void
    {
    }

    /**
     * Returns an adapter from the stack
     *
     * @param string $name
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
     * @phpstan-return datamapper_log_messages
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
     * @param mixed[] $context
     * @param string $message
     * @return void
     */
    public function info(string $message, array $context = []): void
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

    /**
     * @param mixed[] $context
     * @param string $message
     * @return void
     */
    public function notice(string $message, array $context = []): void
    {
    }

    /**
     * @param mixed[] $context
     * @param string $message
     * @return void
     */
    public function trace(string $message, array $context = []): void
    {
    }

    /**
     * @param mixed[] $context
     * @param string $message
     * @return void
     */
    public function warning(string $message, array $context = []): void
    {
    }
}
