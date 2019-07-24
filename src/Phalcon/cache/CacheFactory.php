<?php

namespace Phalcon\Cache;

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
     * @param \Phalcon\Cache\AdapterFactory $factory
     */
    public function __construct(\Phalcon\Cache\AdapterFactory $factory) {}

    /**
     * Factory to create an instace from a Config object
     *
     * @param mixed $config
     * @return mixed
     */
    public function load($config) {}

    /**
     * Constructs a new Cache instance.
     *
     * @param string $name
     * @param array $options
     * @return \Phalcon\Cache\CacheInterface
     */
    public function newInstance(string $name, array $options = array()): CacheInterface {}

}
