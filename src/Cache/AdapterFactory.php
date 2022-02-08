<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Cache;

use Phalcon\Cache\Adapter\AdapterInterface;
use Phalcon\Cache\Exception\Exception;
use Phalcon\Factory\AbstractFactory;
use Phalcon\Storage\SerializerFactory;

/**
 * Factory to create Cache adapters
 *
 * @property SerializerFactory $serializerFactory
 */
class AdapterFactory extends AbstractFactory
{
    /**
     * @var SerializerFactory
     */
    private $serializerFactory;

    /**
     * AdapterFactory constructor.
     *
     * @param SerializerFactory $factory
     * @param array             $services
     */
    public function __construct(\Phalcon\Storage\SerializerFactory $factory, array $services = [])
    {
    }

    /**
     * Create a new instance of the adapter
     *
     * @param string $name
     * @param array  $options = [
     *     'servers' => [
     *         [
     *             'host'   => 'localhost',
     *             'port'   => 11211,
     *             'weight' => 1,
     *         ]
     *     ],
     *     'host'              => '127.0.0.1',
     *     'port'              => 6379,
     *     'index'             => 0,
     *     'persistent'        => false,
     *     'auth'              => '',
     *     'socket'            => '',
     *     'defaultSerializer' => 'Php',
     *     'lifetime'          => 3600,
     *     'serializer'        => null,
     *     'prefix'            => 'phalcon',
     *     'storageDir'        => ''
     * ]
     *
     * @return AdapterInterface
     * @throws Exception
     */
    public function newInstance(string $name, array $options = []): AdapterInterface
    {
    }

    /**
     * @return string
     */
    protected function getExceptionClass(): string
    {
    }

    /**
     * Returns the available adapters
     *
     * @return string[]
     */
    protected function getServices(): array
    {
    }
}
