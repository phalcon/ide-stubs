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
class Noop implements \SessionHandlerInterface
{
    /**
     * The connection of some adapters
     *
     * @var null
     */
    protected $connection = null;

    /**
     * Session options
     *
     * @var array
     */
    protected $options = [];

    /**
     * Session prefix
     *
     * @var string
     */
    protected $prefix = '';

    /**
     * Time To Live
     *
     * @var int
     */
    protected $ttl = 8600;

    /**
     * Constructor
     *
     * @param array $options = [
     *     'prefix' => ''
     * ]
     */
    public function __construct(array $options = [])
    {
    }

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
    public function gc(int $maxlifetime): int|false
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
     * Helper method to get the name prefixed
     *
     * @param mixed $name
     * @return string
     */
    protected function getPrefixedName($name): string
    {
    }
}
