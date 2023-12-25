<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\MetaData;

use Phalcon\Mvc\Model\MetaData;
use Phalcon\Mvc\Model\Exception;

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
 */
class Stream extends MetaData
{
    /**
     * @var string
     */
    protected $metaDataDir = './';

    /**
     * Phalcon\Mvc\Model\MetaData\Files constructor
     *
     * @param array $options
     */
    public function __construct(array $options = [])
    {
    }

    /**
     * Reads meta-data from files
     *
     * @param string $key
     * @return array|null
     */
    public function read(string $key): array|null
    {
    }

    /**
     * Writes the meta-data to files
     *
     * @param string $key
     * @param array $data
     * @return void
     */
    public function write(string $key, array $data): void
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
