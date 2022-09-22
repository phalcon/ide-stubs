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
use SessionHandlerInterface;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
abstract class AbstractAdapter implements \SessionHandlerInterface
{
    /**
     * @var AdapterInterface
     */
    protected $adapter;

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
     * @param mixed $sessionId
     * @return bool
     */
    public function destroy($sessionId): bool
    {
    }

    /**
     * Garbage Collector
     *
     * @param int $maxlifetime
     * @return false|int
     */
    public function gc(int $maxlifetime)
    {
    }

    /**
     * Read
     *
     * @param mixed $sessionId
     * @return string
     */
    public function read($sessionId): string
    {
    }

    /**
     * Open
     *
     * @param mixed $savePath
     * @param mixed $sessionName
     * @return bool
     */
    public function open($savePath, $sessionName): bool
    {
    }

    /**
     * Write
     *
     * @param mixed $sessionId
     * @param mixed $data
     * @return bool
     */
    public function write($sessionId, $data): bool
    {
    }

    /**
     * @todo Remove this when we get traits
     * @param array $collection
     * @param mixed $index
     * @param mixed $defaultValue
     * @return mixed
     */
    protected function getArrVal(array $collection, $index, $defaultValue = null)
    {
    }
}
