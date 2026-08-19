<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue;

use Phalcon\Config\ConfigInterface;
use Phalcon\Contracts\Queue\ConnectionFactory as ConnectionFactoryInterface;
use Phalcon\Contracts\Queue\QueueTypes;
use Phalcon\Factory\AbstractFactory;
use Phalcon\Queue\Adapter\Beanstalk\BeanstalkConnectionFactory;
use Phalcon\Queue\Adapter\Memory\MemoryConnectionFactory;
use Phalcon\Queue\Adapter\Redis\RedisConnectionFactory;
use Phalcon\Queue\Adapter\Stream\StreamConnectionFactory;
use Phalcon\Queue\Exceptions\Exception;

/**
 * Maps an adapter name to its ConnectionFactory. Mirrors
 * Phalcon\Storage\AdapterFactory.
 *
 * @phpstan-import-type queue_connection_options from QueueTypes
 */
class AdapterFactory extends AbstractFactory
{
    /**
     * AdapterFactory constructor.
     *
     * @phpstan-param array<string, class-string<ConnectionFactoryInterface>> $services
     * @param array $services
     */
    public function __construct(array $services = [])
    {
    }

    /**
     * Creates a new ConnectionFactory for the named adapter.
     *
     * @phpstan-param queue_connection_options $options
     * @param string $name
     * @param array $options
     * @return ConnectionFactoryInterface
     */
    public function newInstance(string $name, array $options = []): ConnectionFactoryInterface
    {
    }

    /**
     * Returns the exception class for the factory
     *
     * @return class-string<\Throwable>
     */
    protected function getExceptionClass(): string
    {
    }

    /**
     * Returns the available adapters.
     *
     * @return string[]
     */
    protected function getServices(): array
    {
    }
}
