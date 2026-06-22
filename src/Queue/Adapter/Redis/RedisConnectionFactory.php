<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter\Redis;

use Phalcon\Contracts\Queue\ConnectionFactory as ConnectionFactoryInterface;
use Phalcon\Contracts\Queue\Context as ContextInterface;
use Phalcon\Queue\Exceptions\Exception;
use Phalcon\Storage\Adapter\Redis as StorageRedis;
use Phalcon\Storage\Exception as StorageException;
use Phalcon\Storage\SerializerFactory;

/**
 * Connects to a Redis server (ext-redis) and builds a RedisContext. The
 * connection (connect/pconnect, auth, database select) is delegated to
 * Phalcon\Storage\Adapter\Redis so the queue reuses the framework's hardened
 * connection handling instead of re-implementing it.
 *
 * Options:
 *   - host:         server host (default 127.0.0.1).
 *   - port:         server port (default 6379).
 *   - timeout:      connection timeout in seconds (default 0).
 *   - persistent:   use a persistent connection (default false).
 *   - persistentId: identifier for the persistent connection.
 *   - auth:         password, or [user, password] for ACL auth.
 *   - index:        database index to SELECT (default 0).
 *   - prefix:       key prefix for every queue (default "phalcon_queue:").
 *   - pollInterval: milliseconds between subscription poll passes (default 200).
 */
class RedisConnectionFactory implements ConnectionFactoryInterface
{
    /**
     * @var array
     */
    protected $options = [];

    /**
     * @param array $options
     */
    public function __construct(array $options = [])
    {
    }

    /**
     * @return ContextInterface
     */
    public function createContext(): ContextInterface
    {
    }
}
