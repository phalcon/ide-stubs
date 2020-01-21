<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Session\Adapter;

/**
 * Phalcon\Session\Adapter\Redis
 */
class Redis extends \Phalcon\Session\Adapter\AbstractAdapter
{

    /**
     * Constructor
     *
     * @param array $options = [
     *     'prefix' => 'sess-reds-',
     *     'host' => '127.0.0.1',
     *     'port' => 6379,
     *     'index' => 0,
     *     'persistent' => false,
     *     'auth' => '',
     *     'socket' => ''
     * ]
     * @param \Phalcon\Storage\AdapterFactory $factory
     */
    public function __construct(\Phalcon\Storage\AdapterFactory $factory, array $options = array())
    {
    }
}
