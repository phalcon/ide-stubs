<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Adapter;

use DateInterval;
use FilesystemIterator;
use Iterator;
use Phalcon\Storage\Exception;
use Phalcon\Storage\SerializerFactory;
use Phalcon\Storage\Traits\StorageErrorHandlerTrait;
use Phalcon\Support\Exception as SupportException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;

/**
 * Stream adapter
 *
 * @property string $storageDir
 * @property array  $options
 */
class Stream extends \Phalcon\Storage\Adapter\AbstractAdapter
{
    /**
     * @var string
     */
    protected $prefix = 'ph-strm';

    /**
     * @var string
     */
    protected $storageDir = '';

    /**
     * Stream constructor.
     *
     * @param SerializerFactory $factory
     * @param array             $options = [
     *     'storageDir'        => '',
     *     'defaultSerializer' => 'php',
     *     'lifetime'          => 3600,
     *     'prefix'            => ''
     * ]
     *
     * @throws Exception
     */
    public function __construct(\Phalcon\Storage\SerializerFactory $factory, array $options = [])
    {
    }

    /**
     * Flushes/clears the cache
     *
     * @return bool
     */
    public function clear(): bool
    {
    }

    /**
     * Stores data in the adapter
     *
     * @param string $prefix
     *
     * @return array
     */
    public function getKeys(string $prefix = ''): array
    {
    }

    /**
     * Stores data in the adapter forever. The key needs to manually deleted
     * from the adapter.
     *
     * @param string $key
     * @param mixed  $value
     *
     * @return bool
     */
    public function setForever(string $key, $value): bool
    {
    }

    /**
     * Decrements a stored number
     *
     * @param string $key
     * @param int    $value
     *
     * @return bool|int
     */
    protected function doDecrement(string $key, int $value = 1): int|bool
    {
    }

    /**
     * Deletes data from the adapter
     *
     * @param string $key
     *
     * @return bool
     */
    protected function doDelete(string $key): bool
    {
    }

    /**
     * Reads data from the adapter
     *
     * @param string     $key
     * @param mixed|null $defaultValue
     *
     * @return mixed|null
     */
    protected function doGet(string $key, $defaultValue = null): mixed
    {
    }

    /**
     * Checks if an element exists in the cache and is not expired
     *
     * @param string $key
     *
     * @return bool
     */
    protected function doHas(string $key): bool
    {
    }

    /**
     * Increments a stored number
     *
     * @param string $key
     * @param int    $value
     *
     * @return bool|int
     */
    protected function doIncrement(string $key, int $value = 1): int|bool
    {
    }

    /**
     * Stores data in the adapter. If the TTL is `null` (default) or not defined
     * then the default TTL will be used, as set in this adapter. If the TTL
     * is `0` or a negative number, a `delete()` will be issued, since this
     * item has expired. If you need to set this key forever, you should use
     * the `setForever()` method.
     *
     * @param string                $key
     * @param mixed                 $value
     * @param DateInterval|int|null $ttl
     *
     * @return bool
     */
    protected function doSet(string $key, $value, $ttl = null): bool
    {
    }

    /**
     * Returns the folder based on the storageDir and the prefix
     *
     * @param string $key
     *
     * @return string
     */
    private function getDir(string $key = ''): string
    {
    }

    /**
     * Returns the full path to the file
     *
     * @param string $key
     *
     * @return string
     */
    private function getFilepath(string $key): string
    {
    }

    /**
     * Check if the key has the prefix and remove it, otherwise just return the
     * key unaltered
     *
     * @param string $key
     *
     * @return string
     */
    private function getKeyWithoutPrefix(string $key): string
    {
    }

    /**
     * Returns an iterator for the directory contents
     *
     * @param string $dir
     *
     * @return Iterator
     */
    private function getIterator(string $dir): Iterator
    {
    }

    /**
     * Gets the file contents and returns an array or an error if something
     * went wrong
     *
     * @param string $filepath
     *
     * @return array
     */
    private function getPayload(string $filepath): array
    {
    }

    /**
     * Returns if the cache has expired for this item or not
     *
     * @param array $payload
     *
     * @return bool
     */
    private function isExpired(array $payload): bool
    {
    }

    /**
     * Stores an array payload on the file system
     *
     * @param array  $payload
     * @param string $key
     *
     * @return bool
     */
    private function storePayload(array $payload, string $key): bool
    {
    }

    /**
     * @todo Remove the methods below when we get traits
     * @param string $filename
     * @return bool
     */
    protected function phpFileExists(string $filename): bool
    {
    }

    /**
     * @param string $filename
     * @return string|bool
     */
    protected function phpFileGetContents(string $filename): bool|string
    {
    }

    /**
     * @param string $filename
     * @param mixed $data
     * @param int $flags
     * @param mixed $context
     * @return int|bool
     */
    protected function phpFilePutContents(string $filename, $data, int $flags = 0, $context = null): int|bool
    {
    }

    /**
     * @param string $filename
     * @param string $mode
     * @return mixed
     */
    protected function phpFopen(string $filename, string $mode): mixed
    {
    }

    /**
     * @param string $filename
     * @return bool
     */
    protected function phpUnlink(string $filename): bool
    {
    }

    /**
     * @param string $file
     * @return string
     */
    private function getDirFromFile(string $file): string
    {
    }

    /**
     * @param string $directory
     * @return string
     */
    private function getDirSeparator(string $directory): string
    {
    }
}
