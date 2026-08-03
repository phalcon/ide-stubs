<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Session\Adapter;

use Phalcon\Session\Adapter\Exceptions\AdapterRuntimeError;
use Phalcon\Session\Adapter\Exceptions\InvalidSavePath;
use Phalcon\Session\Adapter\Exceptions\SavePathUnavailable;
use Phalcon\Traits\Php\FileTrait;
use Phalcon\Traits\Php\IniTrait;
use Phalcon\Traits\Support\Helper\Arr\GetTrait;
use Phalcon\Traits\Support\Helper\Str\DirSeparatorTrait;

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
    use \Phalcon\Traits\Support\Helper\Str\DirSeparatorTrait;
    use \Phalcon\Traits\Php\FileTrait;
    use \Phalcon\Traits\Support\Helper\Arr\GetTrait;
    use \Phalcon\Traits\Php\IniTrait;


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
     * The path of the session files
     *
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
     * @param mixed $id
     * @return string
     */
    public function read($id): string
    {
    }

    /**
     * Refresh the session file modification time without changing its data
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
     * @param mixed $id
     * @param mixed $data
     * @return bool
     */
    public function write($id, $data): bool
    {
    }

    /**
     * Gets the glob array or returns false on failure
     *
     * @param string $pattern
     *
     * @return array|false
     */
    protected function getGlobFiles(string $pattern): false|array
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
