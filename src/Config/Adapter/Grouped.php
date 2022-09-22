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
use Phalcon\Config\ConfigFactory;
use Phalcon\Config\ConfigInterface;
use Phalcon\Config\Exception;
use Phalcon\Factory\Exception as FactoryException;

/**
 * Reads multiple files (or arrays) and merges them all together.
 *
 * See `Phalcon\Config\ConfigFactory::load` To load Config Adapter class using 'adapter' option.
 *
 * ```php
 * use Phalcon\Config\Adapter\Grouped;
 *
 * $config = new Grouped(
 *     [
 *         "path/to/config.php",
 *         "path/to/config.dist.php",
 *     ]
 * );
 * ```
 *
 * ```php
 * use Phalcon\Config\Adapter\Grouped;
 *
 * $config = new Grouped(
 *     [
 *         "path/to/config.json",
 *         "path/to/config.dist.json",
 *     ],
 *     "json"
 * );
 * ```
 *
 * ```php
 * use Phalcon\Config\Adapter\Grouped;
 *
 * $config = new Grouped(
 *     [
 *         [
 *             "filePath" => "path/to/config.php",
 *             "adapter"  => "php",
 *         ],
 *         [
 *             "filePath" => "path/to/config.json",
 *             "adapter"  => "json",
 *         ],
 *         [
 *             "adapter"  => "array",
 *             "config"   => [
 *                 "property" => "value",
 *             ],
 *         ],
 *     ],
 * );
 * ```
 */
class Grouped extends Config
{
    /**
     * Phalcon\Config\Adapter\Grouped constructor
     *
     * @param array $arrayConfig
     * @param string $defaultAdapter
     */
    public function __construct(array $arrayConfig, string $defaultAdapter = 'php')
    {
    }
}
