<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Config\Adapter;

use InvalidArgumentException;
use Phalcon\Config\Config;

/**
 * Reads JSON files and converts them to Phalcon\Config\Config objects.
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

    /**
     * @todo This will be removed when traits are introduced
     * @param string $data
     * @param bool $associative
     * @param int $depth
     * @param int $options
     * @return mixed
     */
    private function decode(string $data, bool $associative = false, int $depth = 512, int $options = 0)
    {
    }
}
