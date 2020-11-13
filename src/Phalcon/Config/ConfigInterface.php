<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Config;

/**
 * Phalcon\Config\ConfigInterface
 *
 * Interface for Phalcon\Config class
 */
interface ConfigInterface extends \Phalcon\Collection\CollectionInterface
{

    /**
     * @return string
     */
    public function getPathDelimiter(): string;

    /**
     * @param mixed $toMerge
     * @return ConfigInterface
     */
    public function merge($toMerge): ConfigInterface;

    /**
     * @param string $path
     * @param mixed $defaultValue
     * @param mixed $delimiter
     * @return mixed|null
     */
    public function path(string $path, $defaultValue = null, $delimiter = null);

    /**
     * @param string $delimiter
     * @return ConfigInterface
     */
    public function setPathDelimiter(string $delimiter = null): ConfigInterface;
}
