<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Adapter;

use FilesystemIterator;
use Iterator;
use Phalcon\Contracts\Storage\StorageTypes;
use Phalcon\Storage\Exceptions\InvalidConfiguration;
use Phalcon\Storage\SerializerFactory;
use Phalcon\Traits\Php\FileTrait;
use Phalcon\Traits\Support\Helper\Str\DirFromFileTrait;
use Phalcon\Traits\Support\Helper\Str\DirSeparatorTrait;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use SplFileInfo;

/**
 * Stream adapter
 *
 * Capabilities:
 * - Counters: read-modify-write (doHas()/doGet()/doSet()); not atomic and racy
 *   across concurrent processes.
 * - getKeys(): recursive directory traversal; cost grows with the entry count.
 * - Serializers: Phalcon-side only.
 *
 * @phpstan-import-type storage_keys from StorageTypes
 * @phpstan-import-type storage_stream_options from StorageTypes
 * @phpstan-import-type storage_stream_payload from StorageTypes
 */
class Stream extends \Phalcon\Storage\Adapter\AbstractAdapter
{
    use \Phalcon\Traits\Support\Helper\Str\DirFromFileTrait;
    use \Phalcon\Traits\Support\Helper\Str\DirSeparatorTrait;
    use \Phalcon\Traits\Php\FileTrait;


    protected string $prefix = 'ph-strm';

    protected string $storageDir = '';

    /**
     * Stream constructor.
     *
     * @phpstan-param storage_stream_options $options
     *
     * @throws InvalidConfiguration
     * @param \Phalcon\Storage\SerializerFactory $factory
     * @param array $options
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
     * @phpstan-return storage_keys
     * @param string $prefix
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
     * @param mixed $data
     * @return bool
     */
    public function setForever(string $key, $data): bool
    {
    }

    /**
     * Decrements a stored number
     *
     * @param string $key
     * @param int $value
     * @return false|int
     */
    protected function doDecrement(string $key, int $value = 1): int|false
    {
    }

    /**
     * Deletes data from the adapter
     *
     * @param string $key
     * @return bool
     */
    protected function doDelete(string $key): bool
    {
    }

    /**
     * Reads data from the adapter
     *
     * @param string $key
     * @param mixed $defaultValue
     * @return mixed
     */
    protected function doGet(string $key, $defaultValue = null): mixed
    {
    }

    /**
     * Checks if an element exists in the cache and is not expired
     *
     * @param string $key
     * @return bool
     */
    protected function doHas(string $key): bool
    {
    }

    /**
     * Increments a stored number
     *
     * @param string $key
     * @param int $value
     * @return false|int
     */
    protected function doIncrement(string $key, int $value = 1): int|false
    {
    }

    /**
     * Stores data in the adapter. If the TTL is `null` (default) or not defined
     * then the default TTL will be used, as set in this adapter. If the TTL
     * is `0` or a negative number, a `delete()` will be issued, since this
     * item has expired. If you need to set this key forever, you should use
     * the `setForever()` method.
     *
     * @param string $key
     * @param mixed $value
     * @param mixed $ttl
     * @return bool
     */
    protected function doSet(string $key, $value, $ttl = null): bool
    {
    }

    /**
     * Returns the folder based on the storageDir and the prefix
     *
     * @param string $key
     * @return string
     */
    private function getDir(string $key = ''): string
    {
    }

    /**
     * Returns the full path to the file
     *
     * @param string $key
     * @return string
     */
    private function getFilepath(string $key): string
    {
    }

    /**
     * Returns an iterator for the directory contents
     *
     * @param string $dir
     * @return Iterator
     */
    private function getIterator(string $dir): Iterator
    {
    }

    /**
     * Gets the file contents and returns an array or an error if something
     * went wrong
     *
     * @phpstan-return storage_stream_payload
     * @param string $filepath
     * @return array
     */
    private function getPayload(string $filepath): array
    {
    }

    /**
     * Returns if the cache has expired for this item or not
     *
     * @phpstan-param storage_stream_payload $payload
     * @param array $payload
     * @return bool
     */
    private function isExpired(array $payload): bool
    {
    }

    /**
     * Stores an array payload on the file system
     *
     * @phpstan-param storage_stream_payload $payload
     * @param array $payload
     * @param string $key
     * @return bool
     */
    private function storePayload(array $payload, string $key): bool
    {
    }
}
