<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model\MetaData;

use Phalcon\Cache\AdapterFactory;
use Phalcon\Contracts\Mvc\MvcTypes;
use Phalcon\Contracts\Storage\StorageTypes;
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
 *
 * @phpstan-import-type storage_adapter_options from StorageTypes
 */
class Redis extends MetaData
{
    /**
     * Phalcon\Mvc\Model\MetaData\Redis constructor
     *
     * @param array<string, mixed> $options
     * @param \Phalcon\Cache\AdapterFactory $factory
     */
    public function __construct(\Phalcon\Cache\AdapterFactory $factory, array $options = [])
    {
    }

    /**
     * Flush Redis data and resets internal meta-data in order to regenerate it
     *
     * @return void
     */
    public function reset(): void
    {
    }
}
