<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Assets\Asset;

/**
 * Represents JavaScript assets
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
    public function __construct(string $path, bool $local = true, bool $filter = true, array $attributes = array(), string $version = null, bool $autoVersion = false)
    {
    }
}
