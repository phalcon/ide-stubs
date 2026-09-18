<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\MetaData;

use Phalcon\Contracts\Mvc\MvcTypes;
use Phalcon\Mvc\Model\MetaData;
use Phalcon\Mvc\Model\MetaData\Exceptions\MetaDataDirectoryNotWritable;
use Phalcon\Support\Settings;
use Phalcon\Traits\Php\FileTrait;

/**
 * Phalcon\Mvc\Model\MetaData\Stream
 *
 * Stores model meta-data in PHP files.
 *
 * ```php
 * $metaData = new \Phalcon\Mvc\Model\MetaData\Files(
 *     [
 *         "metaDataDir" => "app/cache/metadata/",
 *     ]
 * );
 * ```
 *
 * @phpstan-import-type mvc_metadata_index from MvcTypes
 */
class Stream extends MetaData
{
    use \Phalcon\Traits\Php\FileTrait;


    protected string $metaDataDir = './';

    /**
     * Phalcon\Mvc\Model\MetaData\Files constructor
     *
     * @param array<string, mixed> $options
     */
    public function __construct(array $options = [])
    {
    }

    /**
     * Reads meta-data from files
     *
     * @phpstan-return mvc_metadata_index|null
     * @param mixed $key
     * @return array|null
     */
    public function read($key): array|null
    {
    }

    /**
     * Writes the meta-data to files
     *
     * @phpstan-param mvc_metadata_index $data
     * @param mixed $key
     * @param array $data
     * @return void
     */
    public function write($key, array $data): void
    {
    }

    /**
     * Builds the cache file path. Namespace separators become "_", so a
     * name that itself contains "_" gets a hash suffix; otherwise "A\\B"
     * and "A_B" would share one file.
     *
     * @param string $key
     * @return string
     */
    private function getFilePath(string $key): string
    {
    }

    /**
     * Throws an exception when the metadata cannot be written
     *
     * @param mixed $option
     * @return void
     */
    private function throwWriteException($option): void
    {
    }
}
