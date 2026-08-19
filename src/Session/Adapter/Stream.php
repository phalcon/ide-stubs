<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Session\Adapter;

use Phalcon\Contracts\Session\SessionTypes;
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
 * @phpstan-import-type session_files from SessionTypes
 * @phpstan-import-type session_stream_options from SessionTypes
 *
 * @phpstan-property session_stream_options $options
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
     * @phpstan-var session_stream_options
     */
    protected array $options = [];

    /**
     * Session prefix
     */
    protected string $prefix = '';

    /**
     * The path of the session files
     */
    private string $path = '';

    /**
     * Constructor
     *
     * @phpstan-param session_stream_options $options
     *
     * @throws InvalidSavePath
     * @throws SavePathUnavailable
     * @param array $options
     */
    public function __construct(array $options = [])
    {
    }

    /**
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
     *
     * @return false|int
     * @throws AdapterRuntimeError
     */
    public function gc(int $max_lifetime): int|false
    {
    }

    /**
     * Ignore the savePath and use local defined path
     *
     * @param string $path
     * @param string $name
     * @return bool
     */
    public function open(string $path, string $name): bool
    {
    }

    /**
     * Reads data from the adapter
     *
     * @param string $id
     * @return string
     */
    public function read(string $id): string
    {
    }

    /**
     * Refresh the session file modification time without changing its data
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
     * @param string $id
     * @param string $data
     * @return bool
     */
    public function write(string $id, string $data): bool
    {
    }

    /**
     * Gets the glob array or returns false on failure
     *
     * @param string $pattern
     *
     * @return array|false
     *
     * @phpstan-return session_files|false
     */
    protected function getGlobFiles(string $pattern): false|array
    {
    }

    /**
     * Helper method to get the name prefixed
     *
     * @param float|int|string $name
     * @return string
     */
    protected function getPrefixedName($name): string
    {
    }
}
