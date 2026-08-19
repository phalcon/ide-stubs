<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Session\Adapter;

use Exception;
use Phalcon\Contracts\Session\SessionTypes;
use Phalcon\Session\Adapter\Exceptions\AdapterRuntimeError;
use Phalcon\Storage\AdapterFactory;

/**
 * Phalcon\Session\Adapter\Redis
 *
 * @phpstan-import-type session_redis_options from SessionTypes
 */
class Redis extends \Phalcon\Session\Adapter\AbstractAdapter
{
    protected bool $lockAcquired = false;

    /**
     * Lock time-to-live in seconds. The lock is not refreshed during the
     * request: a request that runs longer than this expiry loses its lock
     * silently and a concurrent request may then acquire it (the token-guarded
     * release still avoids deleting the newer lock). Raise this above the
     * longest expected request to retain the lock for the whole request.
     */
    protected int $lockExpiry = 30;

    protected bool $lockingEnabled = false;

    protected string $lockKey = '';

    protected int $lockRetries = 100;

    protected string $lockToken = '';

    protected int $lockWaitTime = 50000;

    protected string $prefix = '';

    /**
     * Constructor
     *
     * @param AdapterFactory $factory
     * @param array          $options = [
     *                                'prefix'         => 'sess-reds-',
     *                                'stripPrefix'    => false,
     *                                'host'           => '127.0.0.1',
     *                                'port'           => 6379,
     *                                'index'          => 0,
     *                                'persistent'     => false,
     *                                'auth'           => '',
     *                                'socket'         => '',
     *                                'lockingEnabled' => false,
     *                                'lockExpiry'     => 30,
     *                                'lockRetries'    => 100,
     *                                'lockWaitTime'   => 50000,
     * ]
     *
     * @phpstan-param session_redis_options $options
     *
     * @throws Exception
     */
    public function __construct(\Phalcon\Storage\AdapterFactory $factory, array $options = [])
    {
    }

    /**
     * Close - releases the session lock if one is held
     *
     * @return bool
     */
    public function close(): bool
    {
    }

    /**
     * Destroy
     *
     * @param string $id
     * @return bool
     */
    public function destroy(string $id): bool
    {
    }

    /**
     * Read
     *
     * @param string $id
     * @return string
     */
    public function read(string $id): string
    {
    }

    /**
     * Tries to acquire the session lock, pausing `lockWaitTime` microseconds
     * between attempts, up to `lockRetries` times
     *
     * @param string $id
     * @return bool
     */
    protected function acquireLock(string $id): bool
    {
    }

    /**
     * Releases the session lock - only when this instance still owns it
     *
     * @return void
     */
    protected function releaseLock(): void
    {
    }
}
