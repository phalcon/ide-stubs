<?php

namespace Phalcon\Assets\Asset;

/**
 * Represents Javascript assets
 */
class Js extends \Phalcon\Assets\Asset
{

    /**
     * Phalcon\Assets\Asset\Js constructor
     *
     * @param string $path
     * @param bool $local
     * @param bool $filter
     * @param array $attributes
     * @param string $version
     * @param bool $autoVersion
     */
    public function __construct(string $path, bool $local = true, bool $filter = true, array $attributes = array(), string $version = null, bool $autoVersion = false) {}

}
