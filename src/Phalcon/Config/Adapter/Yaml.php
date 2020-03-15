<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Config\Adapter;

use Phalcon\Config;

/**
 * Reads YAML files and converts them to Phalcon\Config objects.
 *
 * Given the following configuration file:
 *
 * ```yaml
 * phalcon:
 *   baseuri:        /phalcon/
 *   controllersDir: !approot  /app/controllers/
 * models:
 *   metadata: memory
 * ```
 *
 * You can read it as follows:
 *
 * ```php
 * define(
 *     "APPROOT",
 *     dirname(__DIR__)
 * );
 *
 * use Phalcon\Config\Adapter\Yaml;
 *
 * $config = new Yaml(
 *     "path/config.yaml",
 *     [
 *         "!approot" => function($value) {
 *             return APPROOT . $value;
 *         },
 *     ]
 * );
 *
 * echo $config->phalcon->controllersDir;
 * echo $config->phalcon->baseuri;
 * echo $config->models->metadata;
 * ```
 */
class Yaml extends Config
{

    /**
     * Phalcon\Config\Adapter\Yaml constructor
     *
     * @param string $filePath
     * @param array $callbacks
     */
    public function __construct(string $filePath, array $callbacks = null)
    {
    }
}
