<?php

namespace Phalcon\Config;

/**
 * Loads Config Adapter class using 'adapter' option, if no extension is
 * provided it will be added to filePath
 *
 * ```php
 * use Phalcon\Config\ConfigFactory;
 *
 * $options = [
 *     "filePath" => "path/config",
 *     "adapter"  => "php",
 * ];
 *
 * $config = (new ConfigFactory())->load($options);
 * ```
 */
class ConfigFactory extends \Phalcon\Factory\AbstractFactory
{

    /**
     * ConfigFactory constructor.
     *
     * @param array $services
     */
    public function __construct(array $services = array()) {}

    /**
     * Load a config to create a new instance
     *
     * @param mixed $config
     * @return object
     */
    public function load($config) {}

    /**
     * Returns a new Config instance
     *
     * @param string $name
     * @param string $fileName
     * @param mixed $params
     * @return object
     */
    public function newInstance(string $name, string $fileName, $params = null) {}

    /**
     * Returns the adapters for the factory
     *
     * @return array
     */
    protected function getAdapters(): array {}

}
