<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue;

use Phalcon\Contracts\Queue\Context as ContextInterface;
use Phalcon\Factory\AbstractConfigFactory;

/**
 * Builds a queue Context from the standard Phalcon config shape. Mirrors
 * Phalcon\Cache\CacheFactory.
 */
class QueueFactory extends AbstractConfigFactory
{
    /**
     * @var AdapterFactory
     */
    protected $adapterFactory;

    /**
     * QueueFactory constructor. A default AdapterFactory is created when none
     * is supplied, so the factory is usable straight from the DI container.
     *
     * @param AdapterFactory|null $factory
     */
    public function __construct(?AdapterFactory $factory = null)
    {
    }

    /**
     * Builds a Context from a config array/object.
     *
     * @param array $config = [
     *     'adapter' => 'memory',
     *     'options' => []
     * ]
     * @return ContextInterface
     */
    public function load($config): ContextInterface
    {
    }

    /**
     * Builds a Context for the named adapter.
     *
     * @param string $name
     * @param array $options
     * @return ContextInterface
     */
    public function newInstance(string $name, array $options = []): ContextInterface
    {
    }

    /**
     * @return string
     */
    protected function getExceptionClass(): string
    {
    }
}
