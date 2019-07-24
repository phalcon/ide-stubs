<?php

namespace Phalcon\Logger;

/**
 * Loads Logger Adapter class using 'adapter' option
 *
 * <code>
 * use Phalcon\Logger\Factory;
 *
 * $options = [
 *     "name"    => "log.txt",
 *     "adapter" => "file",
 * ];
 * $logger = Factory::load($options);
 * </code>
 */
class Factory extends \Phalcon\Factory
{

    /**
     * @param \Phalcon\Config|array $config
     * @return AdapterInterface
     */
    public static function load($config) {}

    /**
     * @param string $namespace
     * @param mixed $config
     */
    protected static function loadClass($namespace, $config) {}

}
