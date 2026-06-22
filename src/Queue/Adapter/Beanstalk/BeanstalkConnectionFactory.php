<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Beanstalk;

use Phalcon\Contracts\Queue\ConnectionFactory as ConnectionFactoryInterface;
use Phalcon\Contracts\Queue\Context as ContextInterface;

/**
 * Builds a BeanstalkContext.
 *
 * Options:
 *   - host:         server host (default 127.0.0.1).
 *   - port:         server port (default 11300).
 *   - persistent:   use a persistent socket (default false).
 *   - ttr:          default time-to-run in seconds for every job (default 86400).
 *   - pollInterval: milliseconds between subscription poll passes (default 200).
 */
class BeanstalkConnectionFactory implements ConnectionFactoryInterface
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
