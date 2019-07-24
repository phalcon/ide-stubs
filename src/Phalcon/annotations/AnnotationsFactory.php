<?php

namespace Phalcon\Annotations;

/**
 * Factory to create annotations components
 */
class AnnotationsFactory extends \Phalcon\Factory\AbstractFactory
{

    /**
     * AdapterFactory constructor.
     *
     * @param array $services
     */
    public function __construct(array $services = array()) {}

    /**
     * Factory to create an instace from a Config object
     *
     * @param mixed $config
     * @return mixed
     */
    public function load($config) {}

    /**
     * Create a new instance of the adapter
     *
     * @param string $name
     * @param array $options
     * @return \Phalcon\Annotations\Adapter\AbstractAdapter
     */
    public function newInstance(string $name, array $options = array()): AbstractAdapter {}

    /**
     * The available adapters
     *
     * @return array
     */
    protected function getAdapters(): array {}

}
