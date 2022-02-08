<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Config;

use Phalcon\Config\Config;
use Phalcon\Config\ConfigInterface;
use Phalcon\Factory\AbstractFactory;

/**
 * Loads Config Adapter class using 'adapter' option, if no extension is
 * provided it will be added to filePath
 *
 * ```php
 * use Phalcon\Config\ConfigFactory;
 *
 * $options = [
 *     "filePath" => "path/config",
 *     "adapter"  => "php",
 * ];
 *
 * $config = (new ConfigFactory())->load($options);
 * ```
 */
class ConfigFactory extends AbstractFactory
{
    /**
     * ConfigFactory constructor.
     *
     * @param array $services
     */
    public function __construct(array $services = [])
    {
    }

    /**
     * Load a config to create a new instance
     *
     * @param string|array|\Phalcon\Config\Config $config = [
     *                                    'adapter'   => 'ini',
     *                                    'filePath'  => 'config.ini',
     *                                    'mode'      => null,
     *                                    'callbacks' => null
     *                                    ]
     *
     * @return ConfigInterface
     * @throws Exception
     */
    public function load($config): ConfigInterface
    {
    }

    /**
     * Returns a new Config instance
     *
     * @param string     $name
     * @param string     $fileName
     * @param mixed|null $params
     *
     * @return ConfigInterface
     * @throws Exception
     */
    public function newInstance(string $name, string $fileName, $params = null): ConfigInterface
    {
    }

    /**
     * @return string
     */
    protected function getExceptionClass(): string
    {
    }

    /**
     * Returns the available adapters
     *
     * @return string[]
     */
    protected function getServices(): array
    {
    }

    /**
     * @param mixed $config
     *
     * @return array
     * @throws Exception
     */
    protected function parseConfig($config): array
    {
    }

    /**
     * @param array $config
     *
     * @throws Exception
     * @return void
     */
    private function checkConfigArray(array $config): void
    {
    }
}
