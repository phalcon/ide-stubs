<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\DataMapper\Pdo\Profiler;

use Psr\Log\AbstractLogger;

/**
 * A naive memory-based logger.
 *
 * @property array $messages
 */
class MemoryLogger extends AbstractLogger
{

    /**
     * @var array
     */
    protected $messages = [];

    /**
     * Returns the logged messages.
     *
     * @return array
     */
    public function getMessages(): array
    {
    }

    /**
     * @param string $message
     * @param mixed[] $context
     */
    public function emergency($message, array $context = [])
    {
    }

    /**
     * @param string $message
     * @param mixed[] $context
     */
    public function alert($message, array $context = [])
    {
    }

    /**
     * @param string $message
     * @param mixed[] $context
     */
    public function critical($message, array $context = [])
    {
    }

    /**
     * @param string $message
     * @param mixed[] $context
     */
    public function error($message, array $context = [])
    {
    }

    /**
     * @param string $message
     * @param mixed[] $context
     */
    public function warning($message, array $context = [])
    {
    }

    /**
     * @param string $message
     * @param mixed[] $context
     */
    public function notice($message, array $context = [])
    {
    }

    /**
     * @param string $message
     * @param mixed[] $context
     */
    public function info($message, array $context = [])
    {
    }

    /**
     * @param string $message
     * @param mixed[] $context
     */
    public function debug($message, array $context = [])
    {
    }

    /**
     * Logs a message.
     *
     * @param mixed  $level
     * @param string $message
     * @param array  $context
     */
    public function log($level, $message, array $context = [])
    {
    }
}
