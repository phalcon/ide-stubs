<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Cache;

use Psr\SimpleCache\CacheInterface;

/**
 * Creates a new Cache class
 */
class CacheFactory
{
    /**
     * @var AdapterFactory
     */
    protected $adapterFactory;


    /**
     * Constructor
     *
     * @param AdapterFactory $factory
     */
    public function __construct(AdapterFactory $factory)
    {
    }

    /**
     * Factory to create an instance from a Config object
     *
     * @param array|\Phalcon\Config $config = [
     *     'adapter' => 'apcu',
     *     'options' => [
     *         'servers' => [
     *             [
     *                 'host' => 'localhost',
     *                 'port' => 11211,
     *                 'weight' => 1,
     *
     *             ]
     *         ],
     *         'host' => '127.0.0.1',
     *         'port' => 6379,
     *         'index' => 0,
     *         'persistent' => false,
     *         'auth' => '',
     *         'socket' => '',
     *         'defaultSerializer' => 'Php',
     *         'lifetime' => 3600,
     *         'serializer' => null,
     *         'prefix' => 'phalcon',
     *         'storageDir' => ''
     *     ]
     * ]
     * @return mixed
     */
    public function load($config)
    {
    }

    /**
     * Constructs a new Cache instance.
     *
     * @param array $options = [
     *     'servers' => [
     *         [
     *             'host' => 'localhost',
     *             'port' => 11211,
     *             'weight' => 1,
     *
     *         ]
     *     ],
     *     'host' => '127.0.0.1',
     *     'port' => 6379,
     *     'index' => 0,
     *     'persistent' => false,
     *     'auth' => '',
     *     'socket' => '',
     *     'defaultSerializer' => 'Php',
     *     'lifetime' => 3600,
     *     'serializer' => null,
     *     'prefix' => 'phalcon',
     *     'storageDir' => ''
     * ]
     * @param string $name
     * @return CacheInterface
     */
    public function newInstance(string $name, array $options = array()): CacheInterface
    {
    }
}
