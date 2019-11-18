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
 * Phalcon\Session\Adapter\Libmemcached
 */
class Libmemcached extends \Phalcon\Session\Adapter\AbstractAdapter
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
