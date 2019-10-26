<?php

namespace Phalcon\Config\Adapter;

use Phalcon\Config;

/**
 * Reads JSON files and converts them to Phalcon\Config objects.
 *
 * Given the following configuration file:
 *
 * ```json
 * {"phalcon":{"baseuri":"\/phalcon\/"},"models":{"metadata":"memory"}}
 * ```
 *
 * You can read it as follows:
 *
 * ```php
 * use Phalcon\Config\Adapter\Json;
 *
 * $config = new Json("path/config.json");
 *
 * echo $config->phalcon->baseuri;
 * echo $config->models->metadata;
 * ```
 */
class Json extends Config
{

    /**
     * Phalcon\Config\Adapter\Json constructor
     *
     * @param string $filePath
     */
    public function __construct(string $filePath)
    {
    }
}
