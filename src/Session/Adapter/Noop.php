<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Session\Adapter;

use SessionHandlerInterface;
use SessionUpdateTimestampHandlerInterface;

/**
 * Phalcon\Session\Adapter\Noop
 *
 * This is an "empty" or null adapter. It can be used for testing or any
 * other purpose that no session needs to be invoked
 *
 * ```php
 * <?php
 *
 * use Phalcon\Session\Manager;
 * use Phalcon\Session\Adapter\Noop;
 *
 * $session = new Manager();
 * $session->setAdapter(new Noop());
 * ```
 */
class Noop implements \SessionHandlerInterface, \SessionUpdateTimestampHandlerInterface
{
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
     * @param mixed $id
     * @return bool
     */
    public function destroy($id): bool
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
     * @param mixed $path
     * @param mixed $name
     * @return bool
     */
    public function open($path, $name): bool
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
     * Refresh the session lifetime without changing the session data
     *
     * @param mixed $id
     * @param mixed $data
     * @return bool
     */
    public function updateTimestamp($id, $data): bool
    {
    }

    /**
     * Validate the session id (used when strict mode is enabled)
     *
     * @param mixed $id
     * @return bool
     */
    public function validateId($id): bool
    {
    }

    /**
     * Write
     *
     * @param mixed $id
     * @param mixed $data
     * @return bool
     */
    public function write($id, $data): bool
    {
    }
}
