<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Db\Adapter;

use Phalcon\Factory\AbstractFactory;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class PdoFactory extends AbstractFactory
{

    /**
     * Constructor
     *
     * @param array $services
     */
    public function __construct(array $services = array())
    {
    }

    /**
     * Factory to create an instance from a Config object
     *
     * @param array|\Phalcon\Config $config = [
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
     * @param string $name
     * @param array $options
     * @return AdapterInterface
     */
    public function newInstance(string $name, array $options = array()): AdapterInterface
    {
    }

    /**
     * Returns the available adapters
     *
     * @return array
     */
    protected function getAdapters(): array
    {
    }
}
