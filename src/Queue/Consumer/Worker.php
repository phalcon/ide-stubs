<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Consumer;

/**
 * Long-running operational shell around a QueueConsumer. Owns the outer loop,
 * the bounded lifetime (max messages / seconds / memory, plus jitter) and -
 * when ext-pcntl is available - graceful shutdown on SIGTERM/SIGINT/SIGQUIT.
 * The current message always finishes before the loop stops (drain, not
 * guillotine), because the stop flag is only checked between iterations.
 */
class Worker
{
    /**
     * @var QueueConsumer
     */
    protected $consumer;

    /**
     * @var WorkerOptions
     */
    protected $options;

    /**
     * @param QueueConsumer $consumer
     * @param WorkerOptions|null $options
     */
    public function __construct(QueueConsumer $consumer, ?WorkerOptions $options = null)
    {
    }

    /**
     * Signal handler: requests a graceful stop.
     *
     * @param int $signal
     * @return void
     */
    public function handleSignal(int $signal): void
    {
    }

    /**
     * Runs the worker until a lifetime bound trips or a stop is requested.
     * Returns the number of messages processed.
     *
     * @return int
     */
    public function run(): int
    {
    }

    /**
     * Installs graceful-shutdown signal handlers when ext-pcntl is available;
     * a no-op otherwise (the lifetime bounds still apply).
     *
     * @return void
     */
    private function installSignalHandlers(): void
    {
    }
}
