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

/**
 * Builds a StreamContext.
 *
 * Options:
 *   - storageDir:   directory holding the queue files (default: system temp).
 *   - pollInterval: milliseconds between consumer poll attempts (default 200).
 */
class StreamConnectionFactory implements ConnectionFactoryInterface
{
    /**
     * @var array
     */
    protected $options = [];

    /**
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
