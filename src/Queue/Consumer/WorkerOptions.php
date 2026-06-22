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
 * Immutable lifetime bounds for a Worker. A value of 0 means "no limit".
 * The worker stops on whichever bound trips first.
 */
class WorkerOptions
{
    /**
     * Seconds added to maxSeconds (randomised per worker) so a pool does not
     * restart in lockstep.
     *
     * @var int
     */
    protected $jitter = 0;

    /**
     * Memory ceiling in megabytes.
     *
     * @var int
     */
    protected $maxMemory = 0;

    /**
     * Maximum number of messages to process.
     *
     * @var int
     */
    protected $maxMessages = 0;

    /**
     * Maximum run time in seconds.
     *
     * @var int
     */
    protected $maxSeconds = 0;

    /**
     * @param int $maxMessages
     * @param int $maxSeconds
     * @param int $maxMemory
     * @param int $jitter
     */
    public function __construct(int $maxMessages = 0, int $maxSeconds = 0, int $maxMemory = 0, int $jitter = 0)
    {
    }

    /**
     * @return int
     */
    public function getJitter(): int
    {
    }

    /**
     * @return int
     */
    public function getMaxMemory(): int
    {
    }

    /**
     * @return int
     */
    public function getMaxMessages(): int
    {
    }

    /**
     * @return int
     */
    public function getMaxSeconds(): int
    {
    }
}
