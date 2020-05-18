<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon;

/**
 * `Phalcon\Config` is designed to simplify the access to, and the use of,
 * configuration data within applications. It provides a nested object property
 * based user interface for accessing this configuration data within application
 * code.
 *
 * ```php
 * $config = new \Phalcon\Config(
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
class Config extends Collection
{

    const DEFAULT_PATH_DELIMITER = '.';

    /**
     * @var string
     */
    protected $pathDelimiter = null;


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
     * $appConfig = new \Phalcon\Config(
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
     * @param mixed $toMerge
     * @return Config
     */
    public function merge($toMerge): Config
    {
    }

    /**
     * Returns a value from current config using a dot separated path.
     *
     * ```php
     * echo $config->path("unknown.path", "default", ".");
     * ```
     *
     * @param string $path
     * @param mixed $defaultValue
     * @param mixed $delimiter
     * @return mixed|null
     */
    public function path(string $path, $defaultValue = null, $delimiter = null)
    {
    }

    /**
     * Sets the default path delimiter
     *
     * @param string $delimiter
     * @return Config
     */
    public function setPathDelimiter(string $delimiter = null): Config
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
    protected function setData($element, $value)
    {
    }
}
