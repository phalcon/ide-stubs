<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Session\Adapter;

use Phalcon\Storage\Adapter\AdapterInterface;
use Phalcon\Traits\Support\Helper\Arr\GetTrait;
use SessionHandlerInterface;
use SessionUpdateTimestampHandlerInterface;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
abstract class AbstractAdapter implements \SessionHandlerInterface, \SessionUpdateTimestampHandlerInterface
{
    use \Phalcon\Traits\Support\Helper\Arr\GetTrait;


    protected \Phalcon\Storage\Adapter\AdapterInterface $adapter;

    /**
     * Close
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
     * Garbage Collector
     *
     * @param int $max_lifetime
     * @return false|int
     */
    public function gc(int $max_lifetime): int|false
    {
    }

    /**
     * Open
     *
     * @param string $path
     * @param string $name
     * @return bool
     */
    public function open(string $path, string $name): bool
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
     * Refresh the session lifetime without changing the session data
     *
     * @param string $id
     * @param string $data
     * @return bool
     */
    public function updateTimestamp(string $id, string $data): bool
    {
    }

    /**
     * Validate the session id (used when strict mode is enabled)
     *
     * @param string $id
     * @return bool
     */
    public function validateId(string $id): bool
    {
    }

    /**
     * Write
     *
     * @param string $id
     * @param string $data
     * @return bool
     */
    public function write(string $id, string $data): bool
    {
    }
}
