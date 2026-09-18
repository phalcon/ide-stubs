<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Config;

use Phalcon\Config\Exceptions\InvalidMergeData;
use Phalcon\Contracts\Config\ConfigTypes;
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
 *
 * @extends Collection<mixed>
 *
 * @phpstan-import-type config_data from ConfigTypes
 */
class Config extends Collection implements \Phalcon\Config\ConfigInterface
{
    /**
     * @var string
     */
    const string DEFAULT_PATH_DELIMITER = '.';

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
     * @phpstan-param config_data|ConfigInterface $toMerge
     *
     * @throws Exception
     * @param mixed $toMerge
     * @return ConfigInterface
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
     * @param string $path
     * @param mixed $defaultValue
     * @param string|null $delimiter
     * @return mixed
     */
    public function path(string $path, $defaultValue = null, ?string $delimiter = null): mixed
    {
    }

    /**
     * Sets the default path delimiter
     *
     * @param string|null $delimiter
     * @return ConfigInterface
     */
    public function setPathDelimiter(?string $delimiter = null): ConfigInterface
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
     * Builds a new collection with the given data, carrying over the
     * configuration of the current one. Clone-based instead of
     * constructor-based: adapter subclasses (Ini, Json, Php, Yaml, Grouped)
     * define file-loading constructors that are incompatible with the
     * parent's `(array $data, ...)` signature, so `filter()`, `map()`,
     * `sort()` and `where()` would otherwise fail on any adapter instance.
     *
     * @param array<int|string, mixed> $data
     * @return static
     */
    protected function cloneEmpty(array $data = []): static
    {
    }

    /**
     * Performs a merge recursively
     *
     * @param array<array-key, mixed> $source
     * @param array<array-key, mixed> $target
     *
     * @return array<array-key, mixed>
     */
    final protected function internalMerge(array $source, array $target): array
    {
    }

    /**
     * Sets the collection data
     *
     * Array values become nested Config objects carrying the `insensitive`,
     * `strictNull` and `type` flags of this instance. The `type` guard is
     * applied to leaf values only - arrays are not validated themselves;
     * the nested Config validates its own leaves.
     *
     * @param mixed $element
     * @param mixed $value
     * @return void
     */
    protected function setData($element, $value): void
    {
    }
}
