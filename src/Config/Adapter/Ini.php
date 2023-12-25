<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Config\Adapter;

use Phalcon\Config\Config;
use Phalcon\Config\Exception;
use Phalcon\Support\Traits\PhpFileTrait;

/**
 * Reads ini files and converts them to Phalcon\Config\Config objects.
 *
 * Given the next configuration file:
 *
 * ```ini
 * [database]
 * adapter = Mysql
 * host = localhost
 * username = scott
 * password = cheetah
 * dbname = test_db
 *
 * [phalcon]
 * controllersDir = "../app/controllers/"
 * modelsDir = "../app/models/"
 * viewsDir = "../app/views/"
 * ```
 *
 * You can read it as follows:
 *
 * ```php
 * use Phalcon\Config\Adapter\Ini;
 *
 * $config = new Ini("path/config.ini");
 *
 * echo $config->phalcon->controllersDir;
 * echo $config->database->username;
 * ```
 *
 * PHP constants may also be parsed in the ini file, so if you define a constant
 * as an ini value before calling the constructor, the constant's value will be
 * integrated into the results. To use it this way you must specify the optional
 * second parameter as `INI_SCANNER_NORMAL` when calling the constructor:
 *
 * ```php
 * $config = new \Phalcon\Config\Adapter\Ini(
 *     "path/config-with-constants.ini",
 *     INI_SCANNER_NORMAL
 * );
 * ```
 */
class Ini extends Config
{
    /**
     * Ini constructor.
     *
     * @param string $filePath
     * @param int    $mode
     *
     * @throws Exception
     */
    public function __construct(string $filePath, int $mode = 1)
    {
    }

    /**
     * We have to cast values manually because parse_ini_file() has a poor
     * implementation.
     *
     * @param mixed $ini
     *
     * @return mixed
     */
    protected function cast($ini): mixed
    {
    }

    /**
     * @param array $ini
     *
     * @return array
     */
    protected function castArray(array $ini): array
    {
    }

    /**
     * Build multidimensional array from string
     *
     * @param string $path
     * @param mixed  $value
     *
     * @return array
     */
    protected function parseIniString(string $path, $value): array
    {
    }

    /**
     * @todo to be removed when we get traits
     * @param string $filename
     * @param bool $processSections
     * @param int $scannerMode
     */
    protected function phpParseIniFile(string $filename, bool $processSections = false, int $scannerMode = 1)
    {
    }
}
