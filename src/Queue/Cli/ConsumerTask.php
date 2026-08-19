<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Cli;

use Phalcon\Cli\Dispatcher;
use Phalcon\Cli\Task;
use Phalcon\Config\Config;
use Phalcon\Config\ConfigInterface;
use Phalcon\Contracts\Queue\Processor as ProcessorInterface;
use Phalcon\Di\DiInterface;
use Phalcon\Queue\Consumer\QueueConsumer;
use Phalcon\Queue\Consumer\Worker;
use Phalcon\Queue\Consumer\WorkerOptions;
use Phalcon\Queue\QueueFactory;

/**
 * Optional CLI runner for a queue worker - the only class coupled to
 * Phalcon\Cli. A thin adapter: it resolves the context from the `queueFactory`
 * service, binds one queue to one processor (both given as command arguments),
 * and runs a Worker whose lifetime bounds come from CLI options. Users not on
 * Phalcon\Cli use Worker directly.
 *
 * Usage:
 *     <task> <queueName> <processorServiceId> \
 *         [--max-messages=N] [--max-time=SECONDS] \
 *         [--max-memory=MB] [--jitter=SECONDS]
 *
 * Register it in your own Phalcon\Cli\Console; it is not auto-wired into
 * FactoryDefault.
 */
class ConsumerTask extends Task
{
    /**
     * @return int
     */
    public function mainAction(): int
    {
    }

    /**
     * Reads a CLI option as an int, defaulting to 0 when it is absent or
     * cannot be expressed as a number.
     *
     * @param \Phalcon\Cli\Dispatcher $dispatcher
     * @param string $name
     * @return int
     */
    private function intOption(\Phalcon\Cli\Dispatcher $dispatcher, string $name): int
    {
    }

    /**
     * Reads a positional CLI argument as a string, defaulting to an empty
     * string when it is absent or cannot be expressed as one.
     *
     * @param array<int|string, mixed> $params
     * @param int $index
     * @return string
     */
    private function stringParam(array $params, int $index): string
    {
    }
}
