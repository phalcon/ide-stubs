<?php

namespace Phalcon\Config;

/**
 * Loads Config Adapter class using 'adapter' option, if no extension is provided it will be added to filePath
 *
 * <code>
 * use Phalcon\Config\Factory;
 *
 * $options = [
 *     "filePath" => "path/config",
 *     "adapter"  => "php",
 * ];
 * $config = Factory::load($options);
 * </code>
 */
class Factory extends \Phalcon\Factory
{

    /**
     * @param \Phalcon\Config|array $config
     * @return \Phalcon\Config
     */
    public static function load($config) {}

    /**
     * @param string $namespace
     * @param mixed $config
     */
    protected static function loadClass($namespace, $config) {}

}
