<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Memory;

use Phalcon\Contracts\Queue\ConnectionFactory as ConnectionFactoryInterface;
use Phalcon\Contracts\Queue\Context as ContextInterface;
use Phalcon\Contracts\Queue\QueueTypes;

/**
 * Builds a MemoryContext. The Memory transport takes no options.
 *
 * @phpstan-import-type queue_connection_options from QueueTypes
 */
class MemoryConnectionFactory implements ConnectionFactoryInterface
{
    /**
     * @phpstan-param queue_connection_options $options
     */
    protected array $options = [];

    /**
     * MemoryConnectionFactory constructor.
     *
     * @phpstan-param queue_connection_options $options
     * @param array $options
     */
    public function __construct(array $options = [])
    {
    }

    /**
     * Creates a new in-process context.
     *
     * @return ContextInterface
     */
    public function createContext(): ContextInterface
    {
    }
}
