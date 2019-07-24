<?php

namespace Phalcon\Mvc\Model\MetaData;

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
class Stream extends \Phalcon\Mvc\Model\MetaData
{

    protected $metaDataDir = './';


    /**
     * Phalcon\Mvc\Model\MetaData\Files constructor
     *
     * @param array $options
     */
    public function __construct($options = null) {}

    /**
     * Reads meta-data from files
     *
     * @param string $key
     * @return array|null
     */
    public function read(string $key): ?array {}

    /**
     * Writes the meta-data to files
     *
     * @param string $key
     * @param array $data
     */
    public function write(string $key, array $data) {}

    /**
     * Throws an exception when the metadata cannot be written
     *
     * @param mixed $option
     */
    private function throwWriteException($option) {}

}
