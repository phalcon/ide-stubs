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
use Phalcon\Contracts\Queue\Context as ContextInterface;
use Phalcon\Contracts\Queue\QueueTypes;
use Phalcon\Factory\AbstractConfigFactory;
use Phalcon\Queue\Exceptions\Exception;

/**
 * Builds a queue Context from the standard Phalcon config shape. Mirrors
 * Phalcon\Cache\CacheFactory.
 *
 * @phpstan-import-type queue_connection_options from QueueTypes
 */
class QueueFactory extends AbstractConfigFactory
{
    protected AdapterFactory $adapterFactory;

    /**
     * A default AdapterFactory is created when none is supplied, so the
     * factory is usable straight from the DI container.
     *
     * @param AdapterFactory|null $factory
     */
    public function __construct(?AdapterFactory $factory = null)
    {
    }

    /**
     * Builds a Context from a config array/object.
     *
     * @param array<string, mixed>|ConfigInterface $config = [
     *     'adapter' => 'memory',
     *     'options' => [],
     * ]
     * @return ContextInterface
     */
    public function load($config): ContextInterface
    {
    }

    /**
     * Builds a Context for the named adapter.
     *
     * @phpstan-param queue_connection_options $options
     * @param string $name
     * @param array $options
     * @return ContextInterface
     */
    public function newInstance(string $name, array $options = []): ContextInterface
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
}
