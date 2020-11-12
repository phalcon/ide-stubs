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
     */
    protected $connection;

    /**
     * Session options
     *
     * @var array
     */
    protected $options = array();

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
    public function __construct(array $options = array())
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
     * @param mixed $id
     * @return bool
     */
    public function destroy($id): bool
    {
    }

    /**
     * Garbage Collector
     *
     * @param mixed $maxlifetime
     * @return bool
     */
    public function gc($maxlifetime): bool
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
