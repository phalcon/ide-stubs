<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Forms\Loader;

use Phalcon\Contracts\Forms\Schema;
use Phalcon\Forms\Exception;

/**
 * Supplies form element definitions from a YAML string or file.
 *
 * Requires the PHP `yaml` extension (pecl/yaml).
 *
 * When $source is an existing, readable file path the file is parsed
 * directly; otherwise the value is treated as a raw YAML string.
 */
class YamlLoader implements \Phalcon\Contracts\Forms\Schema
{
    /**
     * @var string
     */
    protected $source;

    /**
     * @param string $source YAML string or path to a YAML file
     */
    public function __construct(string $source)
    {
    }

    /**
     * @return array
     * @throws Exception
     */
    public function load(): array
    {
    }
}
