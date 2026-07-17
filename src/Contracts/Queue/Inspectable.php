<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Queue;

/**
 * Optional capability contract for a transport that can report statistics for
 * a queue (for example ready, delayed and buried job counts). Callers detect
 * support with `instanceof`.
 *
 * The array returned by getStats() is ADAPTER-NATIVE: its keys and their
 * semantics are defined by the implementing adapter and are NOT guaranteed to
 * be uniform across adapters. It is an inspection surface, not a portable or
 * normalized schema. Each implementation documents the exact keys it returns.
 */
interface Inspectable
{
    /**
     * Returns statistics for the given queue.
     *
     * @param Queue $queue
     * @return array
     */
    public function getStats(Queue $queue): array;
}
