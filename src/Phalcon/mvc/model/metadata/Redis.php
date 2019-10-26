<?php

namespace Phalcon\Mvc\Model\MetaData;

use Phalcon\Mvc\Model\MetaData;

/**
 * Phalcon\Mvc\Model\MetaData\Redis
 *
 * Stores model meta-data in the Redis.
 *
 * By default meta-data is stored for 48 hours (172800 seconds)
 *
 * ```php
 * use Phalcon\Mvc\Model\MetaData\Redis;
 *
 * $metaData = new Redis(
 *     [
 *         "host"       => "127.0.0.1",
 *         "port"       => 6379,
 *         "persistent" => 0,
 *         "lifetime"   => 172800,
 *         "index"      => 2,
 *     ]
 * );
 * ```
 */
class Redis extends MetaData
{

    /**
     * Phalcon\Mvc\Model\MetaData\Redis constructor
     *
     * @param array $options
     * @param \Phalcon\Cache\AdapterFactory $factory
     */
    public function __construct(\Phalcon\Cache\AdapterFactory $factory, array $options = array())
    {
    }

    /**
     * Flush Redis data and resets internal meta-data in order to regenerate it
     */
    public function reset()
    {
    }
}
