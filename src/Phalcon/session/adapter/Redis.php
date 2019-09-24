<?php

/**
 * This file is part of the Phalcon.
 *
 * (c) Phalcon Team <team@phalcon.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Phalcon\Session\Adapter;

/**
 * Phalcon\Session\Adapter\Redis
 */
class Redis extends AbstractAdapter
{

    /**
     * Constructor
     *
     * @param \Phalcon\Storage\AdapterFactory $factory
     * @param array $options
     */
    public function __construct(\Phalcon\Storage\AdapterFactory $factory, array $options = array())
    {
    }
}
