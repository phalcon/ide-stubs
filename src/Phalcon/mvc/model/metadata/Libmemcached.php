<?php

namespace Phalcon\Mvc\Model\MetaData;

/**
 * Phalcon\Mvc\Model\MetaData\Libmemcached
 *
 * Stores model meta-data in the Memcache.
 *
 * By default meta-data is stored for 48 hours (172800 seconds)
 */
class Libmemcached extends \Phalcon\Mvc\Model\MetaData
{

    /**
     * Phalcon\Mvc\Model\MetaData\Libmemcached constructor
     *
     * @param \Phalcon\Cache\AdapterFactory $factory
     * @param array $options
     */
    public function __construct(\Phalcon\Cache\AdapterFactory $factory, array $options = array()) {}

    /**
     * Flush Memcache data and resets internal meta-data in order to regenerate it
     */
    public function reset() {}

}
