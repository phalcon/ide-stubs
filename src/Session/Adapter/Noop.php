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
