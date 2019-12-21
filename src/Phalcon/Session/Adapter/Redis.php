<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Session\Adapter;

use Phalcon\Storage\AdapterFactory;

/**
 * Phalcon\Session\Adapter\Redis
 */
class Redis extends AbstractAdapter
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
     * @param AdapterFactory $factory
     */
    public function __construct(AdapterFactory $factory, array $options = array())
    {
    }
}
