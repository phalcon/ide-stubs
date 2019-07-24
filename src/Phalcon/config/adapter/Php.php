<?php

namespace Phalcon\Config\Adapter;

/**
 * Reads php files and converts them to Phalcon\Config objects.
 *
 * Given the next configuration file:
 *
 * ```php
 * <?php
 *
 * return [
 *     "database" => [
 *         "adapter"  => "Mysql",
 *         "host"     => "localhost",
 *         "username" => "scott",
 *         "password" => "cheetah",
 *         "dbname"   => "test_db",
 *     ],
 *     "phalcon" => [
 *         "controllersDir" => "../app/controllers/",
 *         "modelsDir"      => "../app/models/",
 *         "viewsDir"       => "../app/views/",
 *     ],
 * ];
 * ```
 *
 * You can read it as follows:
 *
 * ```php
 * use Phalcon\Config\Adapter\Php;
 *
 * $config = new Php("path/config.php");
 *
 * echo $config->phalcon->controllersDir;
 * echo $config->database->username;
 * ```
 */
class Php extends \Phalcon\Config
{

    /**
     * Phalcon\Config\Adapter\Php constructor
     *
     * @param string $filePath
     */
    public function __construct(string $filePath) {}

}
