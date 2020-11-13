<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Session\Adapter;

use Phalcon\Helper\Str;
use Phalcon\Session\Exception;

/**
 * Phalcon\Session\Adapter\Stream
 *
 * This is the file based adapter. It stores sessions in a file based system
 *
 * ```php
 * <?php
 *
 * use Phalcon\Session\Manager;
 * use Phalcon\Session\Adapter\Stream;
 *
 * $session = new Manager();
 * $files = new Stream(
 *     [
 *         'savePath' => '/tmp',
 *     ]
 * );
 * $session->setAdapter($files);
 * ```
 */
class Stream extends \Phalcon\Session\Adapter\Noop
{
    /**
     * @var string
     */
    private $path = '';


    /**
     * Constructor
     *
     * @param array $options = [
     *     'prefix' => '',
     *     'savePath' => ''
     * ]
     */
    public function __construct(array $options = array())
    {
    }

    /**
     * @param mixed $id
     * @return bool
     */
    public function destroy($id): bool
    {
    }

    /**
     * @param mixed $maxlifetime
     * @return bool
     */
    public function gc($maxlifetime): bool
    {
    }

    /**
     * Ignore the savePath and use local defined path
     *
     * @return bool
     * @param mixed $savePath
     * @param mixed $sessionName
     */
    public function open($savePath, $sessionName): bool
    {
    }

    /**
     * @param mixed $id
     * @return string
     */
    public function read($id): string
    {
    }

    /**
     * @param mixed $id
     * @param mixed $data
     * @return bool
     */
    public function write($id, $data): bool
    {
    }
}
