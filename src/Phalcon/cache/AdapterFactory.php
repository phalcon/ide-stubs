<?php

namespace Phalcon\Cache;

/**
 * Factory to create Cache adapters
 */
class AdapterFactory extends \Phalcon\Factory\AbstractFactory
{
    /**
     * @var SerializerFactory
     */
    private $serializerFactory;


    /**
     * AdapterFactory constructor.
     *
     * @param \Phalcon\Storage\SerializerFactory $factory
     * @param array $services
     */
    public function __construct(\Phalcon\Storage\SerializerFactory $factory = null, array $services = array()) {}

    /**
     * Create a new instance of the adapter
     *
     * @param string $name
     * @param array $options
     * @return \Phalcon\Cache\Adapter\AbstractAdapter
     */
    public function newInstance(string $name, array $options = array()): AbstractAdapter {}

    /**
     * Returns the available adapters
     *
     * @return array
     */
    protected function getAdapters(): array {}

}
