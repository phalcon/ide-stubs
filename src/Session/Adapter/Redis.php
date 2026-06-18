<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Session\Adapter;

use Phalcon\Session\Adapter\Exceptions\AdapterRuntimeError;
use Phalcon\Storage\AdapterFactory;

/**
 * Phalcon\Session\Adapter\Redis
 */
class Redis extends \Phalcon\Session\Adapter\AbstractAdapter
{
    /**
     * @var bool
     */
    protected $lockAcquired = false;

    /**
     * Lock time-to-live in seconds. The lock is not refreshed during the
     * request: a request that runs longer than this expiry loses its lock
     * silently and a concurrent request may then acquire it (the token-guarded
     * release still avoids deleting the newer lock). Raise this above the
     * longest expected request to retain the lock for the whole request.
     *
     * @var int
     */
    protected $lockExpiry = 30;

    /**
     * @var bool
     */
    protected $lockingEnabled = false;

    /**
     * @var string
     */
    protected $lockKey = '';

    /**
     * @var int
     */
    protected $lockRetries = 100;

    /**
     * @var string
     */
    protected $lockToken = '';

    /**
     * @var int
     */
    protected $lockWaitTime = 50000;

    /**
     * @var string
     */
    protected $prefix = '';

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
     * @param mixed $id
     * @return bool
     */
    public function destroy($id): bool
    {
    }

    /**
     * Read
     *
     * @param mixed $id
     * @return string
     */
    public function read($id): string
    {
    }

    /**
     * Tries to acquire the session lock, pausing `lockWaitTime` microseconds
     * between attempts, up to `lockRetries` times
     *
     * @param mixed $id
     * @return bool
     */
    protected function acquireLock($id): bool
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
