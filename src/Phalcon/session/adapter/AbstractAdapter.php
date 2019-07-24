<?php

namespace Phalcon\Session\Adapter;

/**
 * This file is part of the Phalcon.
 *
 * (c) Phalcon Team <team@phalcon.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
abstract class AbstractAdapter implements \SessionHandlerInterface
{
    /**
     * @var <AdapterInterface>
     */
    protected $adapter;


    /**
     * Close
     *
     * @return bool
     */
    public function close(): bool {}

    /**
     * Destroy
     *
     * @param mixed $id
     * @return bool
     */
    public function destroy($id): bool {}

    /**
     * Garbage Collector
     *
     * @param mixed $maxlifetime
     * @return bool
     */
    public function gc($maxlifetime): bool {}

    /**
     * Read
     *
     * @param mixed $id
     * @return string
     */
    public function read($id): string {}

    /**
     * Open
     *
     * @param mixed $savePath
     * @param mixed $sessionName
     * @return bool
     */
    public function open($savePath, $sessionName): bool {}

    /**
     * Write
     *
     * @param mixed $id
     * @param mixed $data
     * @return bool
     */
    public function write($id, $data): bool {}

}
