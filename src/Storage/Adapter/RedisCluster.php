<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Adapter;

use Phalcon\Storage\Exception as StorageException;
use Phalcon\Storage\SerializerFactory;

/**
 * RedisCluster adapter
 *
 * @property array $options
 */
class RedisCluster extends \Phalcon\Storage\Adapter\Redis
{
    /**
     * @var string
     */
    protected $prefix = 'ph-redc-';

    /**
     * You can create and connect to a cluster either by passing it one or more
     * 'seed' nodes, or by defining these in redis.ini as a 'named' cluster.
     *
     * If you are connecting with the cluster by offering a name, that is
     * configured in redis.ini:
     *
     *      ```
     *      # In redis.ini
     *      redis.clusters.seeds = "mycluster[]=localhost:7000&test[]=localhost:7001"
     *      redis.clusters.timeout = "mycluster=5"
     *      redis.clusters.read_timeout = "mycluster=10"
     *      redis.clusters.auth = "mycluster=password"
     *      ```
     * you can use `$options = ["name" => "mycluster"]`.
     *
     * If you don't have cluster seeds configured in your redis.ini,
     * you should pass hosts as an array,
     * eg. `$options = ["hosts" => ["a-host:7000", "b-host:7001"]]`.
     *
     * You can provide authentication data offering a string `user=password`
     * or array `["user" => "name", "password" => "secret"]`.
     *
     * The `timeout` is the amount of time library will wait when connecting
     * or writing to the cluster. `readTimeout` is the amount of time library
     * will wait for a result from the cluster.
     *
     * The `context` is an array of values used for ssl/tls stream context
     * options eg `["verify_peer" => 0, "local_cert" => "file:///path/to/cert.pem"]`
     *
     * @param SerializerFactory $factory
     * @param array             $options = [
     *     "name"        => null,
     *     "hosts"       => ["127.0.0.1:6379"],
     *     "timeout"     => 0,
     *     "readTimeout" => 0,
     *     "persistent"  => false,
     *     "auth"        => "",
     *     "context"     => null,
     * ]
     *
     * @throws \Phalcon\Support\Exception
     */
    public function __construct(\Phalcon\Storage\SerializerFactory $factory, array $options = [])
    {
    }

    /**
     * Flushes/clears the cache
     *
     * @return bool
     * @throws StorageException
     */
    public function clear(): bool
    {
    }

    /**
     * Returns the already connected adapter or connects to the Redis
     * Cluster server(s)
     *
     * @return mixed|\RedisCluster
     * @throws StorageException
     */
    public function getAdapter(): mixed
    {
    }

    /**
     * Checks the serializer. If it is a supported one it is set, otherwise
     * the custom one is set.
     *
     * @param \RedisCluster $connection
     * @return void
     */
    private function setSerializer(\RedisCluster $connection): void
    {
    }
}
