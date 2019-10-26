<?php

namespace Phalcon\Session\Adapter;

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
     * @param array $options
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
     * @param mixed $savePath
     * @param mixed $sessionName
     * @return bool
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
