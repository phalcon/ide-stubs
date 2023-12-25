<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Config;

use Phalcon\Support\Collection;

/**
 * `Phalcon\Config` is designed to simplify the access to, and the use of,
 * configuration data within applications. It provides a nested object property
 * based user interface for accessing this configuration data within application
 * code.
 *
 * ```php
 * $config = new \Phalcon\Config\Config(
 *     [
 *         "database" => [
 *             "adapter"  => "Mysql",
 *             "host"     => "localhost",
 *             "username" => "scott",
 *             "password" => "cheetah",
 *             "dbname"   => "test_db",
 *         ],
 *         "phalcon" => [
 *             "controllersDir" => "../app/controllers/",
 *             "modelsDir"      => "../app/models/",
 *             "viewsDir"       => "../app/views/",
 *         ],
 *     ]
 * );
 * ```
 */
class Config extends Collection implements \Phalcon\Config\ConfigInterface
{
    const DEFAULT_PATH_DELIMITER = '.';

    /**
     * @var string
     */
    protected $pathDelimiter = self::DEFAULT_PATH_DELIMITER;

    /**
     * Gets the default path delimiter
     *
     * @return string
     */
    public function getPathDelimiter(): string
    {
    }

    /**
     * Merges a configuration into the current one
     *
     * ```php
     * $appConfig = new \Phalcon\Config\Config(
     *     [
     *         "database" => [
     *             "host" => "localhost",
     *         ],
     *     ]
     * );
     *
     * $globalConfig->merge($appConfig);
     * ```
     *
     * @param array|ConfigInterface $toMerge
     *
     * @return ConfigInterface
     * @throws Exception
     */
    public function merge($toMerge): ConfigInterface
    {
    }

    /**
     * Returns a value from current config using a dot separated path.
     *
     * ```php
     * echo $config->path("unknown.path", "default", ".");
     * ```
     *
     * @param string      $path
     * @param mixed|null  $defaultValue
     * @param string|null $delimiter
     *
     * @return mixed
     */
    public function path(string $path, $defaultValue = null, string $delimiter = null): mixed
    {
    }

    /**
     * Sets the default path delimiter
     *
     * @param string|null $delimiter
     *
     * @return ConfigInterface
     */
    public function setPathDelimiter(string $delimiter = null): ConfigInterface
    {
    }

    /**
     * Converts recursively the object to an array
     *
     * ```php
     * print_r(
     *     $config->toArray()
     * );
     * ```
     *
     * @return array
     */
    public function toArray(): array
    {
    }

    /**
     * Performs a merge recursively
     *
     * @param array $source
     * @param array $target
     *
     * @return array
     */
    final protected function internalMerge(array $source, array $target): array
    {
    }

    /**
     * Sets the collection data
     *
     * @param mixed $element
     * @param mixed $value
     * @return void
     */
    protected function setData($element, $value): void
    {
    }
}
