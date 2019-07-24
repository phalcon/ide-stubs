<?php

namespace Phalcon\Cache\Backend;

/**
 * Loads Backend Cache Adapter class using 'adapter' option, if frontend will be provided as array it will call Frontend Cache Factory
 *
 * <code>
 * use Phalcon\Cache\Backend\Factory;
 * use Phalcon\Cache\Frontend\Data;
 *
 * $options = [
 *     "prefix"   => "app-data",
 *     "frontend" => new Data(),
 *     "adapter"  => "apc",
 * ];
 * $backendCache = Factory::load($options);
 * </code>
 */
class Factory extends \Phalcon\Factory
{

    /**
     * @param \Phalcon\Config|array $config
     * @return \Phalcon\Cache\BackendInterface
     */
    public static function load($config) {}

    /**
     * @param string $namespace
     * @param mixed $config
     */
    protected static function loadClass($namespace, $config) {}

}
