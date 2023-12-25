<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Session\Adapter;

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
 *
 * @property array  $options
 * @property string $prefix
 * @property string $path
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
    public function __construct(array $options = [])
    {
    }

    /**
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
     * Ignore the savePath and use local defined path
     *
     * @return bool
     * @param mixed $path
     * @param mixed $name
     */
    public function open($path, $name): bool
    {
    }

    /**
     * Reads data from the adapter
     *
     * @param mixed $sessionId
     * @return string
     */
    public function read($sessionId): string
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

    /**
     * @todo Remove this when we get traits
     * @param array $collection
     * @param mixed $index
     * @param mixed $defaultValue
     * @param string $cast
     * @return mixed
     */
    protected function getArrVal(array $collection, $index, $defaultValue = null, string $cast = null): mixed
    {
    }

    /**
     * @param string $directory
     * @return string
     */
    private function getDirSeparator(string $directory): string
    {
    }

    /**
     * @param string $filename
     *
     * @return bool
     *
     * @link https://php.net/manual/en/function.file-exists.php
     */
    protected function phpFileExists(string $filename)
    {
    }

    /**
     * @param string $filename
     *
     * @return string|false
     *
     * @link https://php.net/manual/en/function.file-get-contents.php
     */
    protected function phpFileGetContents(string $filename)
    {
    }

    /**
     * @param string   $filename
     * @param mixed    $data
     * @param int      $flags
     * @param resource $context
     *
     * @return int|false
     *
     * @link https://php.net/manual/en/function.file-put-contents.php
     */
    protected function phpFilePutContents(string $filename, $data, int $flags = 0, $context = null)
    {
    }

    /**
     * @param string $filename
     * @param string $mode
     *
     * @return resource|false
     *
     * @link https://php.net/manual/en/function.fopen.php
     */
    protected function phpFopen(string $filename, string $mode)
    {
    }

    /**
     * Gets the value of a configuration option
     *
     * @param string $varname
     *
     * @return string
     *
     * @link https://php.net/manual/en/function.ini-get.php
     * @link https://php.net/manual/en/ini.list.php
     */
    protected function phpIniGet(string $varname): string
    {
    }

    /**
     * Tells whether the filename is writable
     *
     * @param string $filename
     *
     * @return bool
     *
     * @link https://php.net/manual/en/function.is-writable.php
     */
    protected function phpIsWritable(string $filename): bool
    {
    }
}
