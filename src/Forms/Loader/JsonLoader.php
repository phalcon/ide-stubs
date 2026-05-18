<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Forms\Loader;

use InvalidArgumentException;
use Phalcon\Contracts\Forms\Schema;
use Phalcon\Forms\Exception;
use Phalcon\Support\Helper\Json\Decode;

/**
 * Supplies form element definitions from a JSON string or file.
 *
 * When $source looks like an existing, readable file path it is read from
 * disk first; otherwise the value is treated as a raw JSON string.
 */
class JsonLoader implements \Phalcon\Contracts\Forms\Schema
{
    /**
     * @var string
     */
    protected $source;

    /**
     * @param string $source JSON string or path to a JSON file
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

    /**
     * @param string $filename
     */
    protected function phpFileGetContents(string $filename)
    {
    }
}
