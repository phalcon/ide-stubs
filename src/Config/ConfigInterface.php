<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Config;

use Phalcon\Contracts\Config\ConfigTypes;
use Phalcon\Support\Collection\CollectionInterface;

/**
 * Phalcon\Config\ConfigInterface
 *
 * Interface for Phalcon\Config\Config class
 *
 * @extends CollectionInterface<mixed>
 *
 * @phpstan-import-type config_data from ConfigTypes
 */
interface ConfigInterface extends \Phalcon\Support\Collection\CollectionInterface
{
    /**
     * @return string
     */
    public function getPathDelimiter(): string;

    /**
     * @phpstan-param config_data|ConfigInterface $toMerge
     * @param mixed $toMerge
     * @return ConfigInterface
     */
    public function merge($toMerge): ConfigInterface;

    /**
     * @param string $path
     * @param mixed $defaultValue
     * @param string|null $delimiter
     * @return mixed
     */
    public function path(string $path, $defaultValue = null, ?string $delimiter = null): mixed;

    /**
     * @param string|null $delimiter
     * @return ConfigInterface
     */
    public function setPathDelimiter(?string $delimiter = null): ConfigInterface;
}
