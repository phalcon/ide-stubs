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
     * Read
     *
     * @param mixed $id
     * @return string
     */
    public function read($id): string
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
     * Write
     *
     * @param mixed $id
     * @param mixed $data
     * @return bool
     */
    public function write($id, $data): bool
    {
    }

    /**
     * @todo Remove this when we get traits
     * @param array $collection
     * @param mixed $index
     * @param mixed $defaultValue
     * @return mixed
     */
    protected function getArrVal(array $collection, $index, $defaultValue = null): mixed
    {
    }
}
