<?php

namespace Phalcon\Logger;

/**
 * PhalconNG\Logger\LoggerFactory
 *
 * Logger factory
 */
class LoggerFactory
{
    /**
     * @var AdapterFactory
     */
    private $adapterFactory;


    /**
     * @param \Phalcon\Logger\AdapterFactory $factory
     */
    public function __construct(\Phalcon\Logger\AdapterFactory $factory) {}

    /**
     * Factory to create an instace from a Config object
     *
     * @param mixed $config
     * @return mixed
     */
    public function load($config) {}

    /**
     * Returns a Logger object
     *
     * @param array  $adapters
     *
     * @param string $name
     * @param array $adapters
     * @return \Phalcon\Logger\Logger
     */
    public function newInstance(string $name, array $adapters = array()): Logger {}

}
