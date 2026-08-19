<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Stream;

use Phalcon\Contracts\Queue\ConnectionFactory as ConnectionFactoryInterface;
use Phalcon\Contracts\Queue\Context as ContextInterface;
use Phalcon\Contracts\Queue\QueueTypes;

/**
 * Builds a StreamContext.
 *
 * Options:
 *   - storageDir:   directory holding the queue files (default: a private
 *                   "phalcon_queue" subdirectory of the system temp dir).
 *   - pollInterval: milliseconds between consumer poll attempts (default 200).
 *
 * @phpstan-import-type queue_stream_options from QueueTypes
 */
class StreamConnectionFactory implements ConnectionFactoryInterface
{
    /**
     * @phpstan-param queue_stream_options $options
     */
    protected array $options = [];

    /**
     * @phpstan-param queue_stream_options $options
     * @param array $options
     */
    public function __construct(array $options = [])
    {
    }

    /**
     * @return ContextInterface
     */
    public function createContext(): ContextInterface
    {
    }
}
