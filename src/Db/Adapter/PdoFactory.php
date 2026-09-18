<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db\Adapter;

use Phalcon\Config\ConfigInterface;
use Phalcon\Contracts\Db\DbTypes;
use Phalcon\Db\Adapter\Pdo\Mysql;
use Phalcon\Db\Adapter\Pdo\Postgresql;
use Phalcon\Db\Adapter\Pdo\Sqlite;
use Phalcon\Db\Exception;
use Phalcon\Factory\AbstractFactory;
use Phalcon\Traits\Support\Helper\Arr\GetTrait;

/**
 * @phpstan-import-type db_descriptor from DbTypes
 * @phpstan-import-type db_factory_config from DbTypes
 */
class PdoFactory extends AbstractFactory
{
    use \Phalcon\Traits\Support\Helper\Arr\GetTrait;



    /**
     * Constructor
     *
     * @phpstan-param array<string, class-string<AdapterInterface>> $services
     * @param array $services
     */
    public function __construct(array $services = [])
    {
    }

    /**
     * Factory to create an instance from a Config object
     *
     * @param array<string, mixed>|ConfigInterface $config = [
     *     'adapter' => 'mysql',
     *     'options' => [
     *         'host' => 'localhost',
     *         'port' => '3306',
     *         'dbname' => 'blog',
     *         'username' => 'sigma'
     *         'password' => 'secret',
     *         'dialectClass' => null,
     *         'options' => [],
     *         'dsn' => null,
     *         'charset' => 'utf8mb4'
     *     ]
     * ]
     * @return AdapterInterface
     */
    public function load($config): AdapterInterface
    {
    }

    /**
     * Create a new instance of the adapter
     *
     * @phpstan-param db_descriptor $options
     * @param string $name
     * @param array $options
     * @return AdapterInterface
     */
    public function newInstance(string $name, array $options = []): AdapterInterface
    {
    }

    /**
     * @return class-string<\Exception>
     */
    protected function getExceptionClass(): string
    {
    }

    /**
     * Returns the available adapters
     *
     * @return array<string, string>
     */
    protected function getServices(): array
    {
    }
}
