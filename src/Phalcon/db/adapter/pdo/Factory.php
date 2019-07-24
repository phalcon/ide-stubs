<?php

namespace Phalcon\Db\Adapter\Pdo;

/**
 * Loads PDO Adapter class using 'adapter' option
 *
 * <code>
 * use Phalcon\Db\Adapter\Pdo\Factory;
 *
 * $options = [
 *     "host"     => "localhost",
 *     "dbname"   => "blog",
 *     "port"     => 3306,
 *     "username" => "sigma",
 *     "password" => "secret",
 *     "adapter"  => "mysql",
 * ];
 * $db = Factory::load($options);
 * </code>
 */
class Factory extends \Phalcon\Factory
{

    /**
     * @param \Phalcon\Config|array $config
     * @return \Phalcon\Db\AdapterInterface
     */
    public static function load($config) {}

}
