<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Logger;

use Phalcon\Logger;

/**
 * PhalconNG\Logger\LoggerFactory
 *
 * Logger factory
 */
class LoggerFactory
{
    /**
     * @var AdapterFactory
     */
    private $adapterFactory;


    /**
     * @param \Phalcon\Logger\AdapterFactory $factory
     */
    public function __construct(\Phalcon\Logger\AdapterFactory $factory)
    {
    }

    /**
     * Factory to create an instace from a Config object
     *
     * @param mixed $config
     * @return mixed
     */
    public function load($config)
    {
    }

    /**
     * Returns a Logger object
     *
     * @param array  $adapters
     *
     * @param string $name
     * @param array $adapters
     * @return \Phalcon\Logger
     */
    public function newInstance(string $name, array $adapters = array()): Logger
    {
    }
}
