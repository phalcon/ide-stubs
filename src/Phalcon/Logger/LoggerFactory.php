<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Logger;

use Phalcon\Config;
use Phalcon\Config\ConfigInterface;
use Phalcon\Helper\Arr;
use Phalcon\Logger;

/**
 * Phalcon\Logger\LoggerFactory
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
     * @param AdapterFactory $factory
     */
    public function __construct(AdapterFactory $factory)
    {
    }

    /**
     * Factory to create an instance from a Config object
     *
     * @param array|\Phalcon\Config $config = [
     *     'name' => 'messages',
     *     'adapters' => [
     *         'adapter' => 'stream',
     *         'name' => 'file.log',
     *         'options' => [
     *             'mode' => 'ab',
     *             'option' => null,
     *             'facility' => null
     *         ]
     *     ]
     * ]
     * @return Logger
     */
    public function load($config): Logger
    {
    }

    /**
     * Returns a Logger object
     *
     * @param string $name
     * @param array  $adapters
     *
     * @return Logger
     */
    public function newInstance(string $name, array $adapters = array()): Logger
    {
    }
}
