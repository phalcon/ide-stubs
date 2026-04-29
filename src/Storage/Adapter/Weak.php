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
use Exception as BaseException;
use Phalcon\Storage\SerializerFactory;
use Phalcon\Support\Exception as SupportException;
use Phalcon\Storage\Serializer\SerializerInterface;

/**
 * Weak Adapter
 */
class Weak extends \Phalcon\Storage\Adapter\AbstractAdapter
{
    /**
     * @var int|null
     */
    protected $fetching = null;

    /**
     * @var array
     */
    protected $weakList = [];

    /**
     * @var array
     */
    protected $options = [];

    /**
     * Constructor, there are no options
     *
     * @param array $options = []
     * @throws SupportException
     * @param \Phalcon\Storage\SerializerFactory $factory
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
     * For compatiblity only, there is no Forever with WeakReference.
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
     * will never set a serializer, WeakReference cannot be serialized
     *
     * @param string $serializer
     * @return void
     */
    public function setDefaultSerializer(string $serializer): void
    {
    }

    /**
     * Decrements a stored number — not supported for WeakReference
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
     * @return mixed
     */
    protected function doGet(string $key, $defaultValue = null): mixed
    {
    }

    /**
     * Checks if an element exists in the cache
     *
     * @param string $key
     *
     * @return bool
     */
    protected function doHas(string $key): bool
    {
    }

    /**
     * Increments a stored number — not supported for WeakReference
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
     * @throws BaseException
     */
    protected function doSet(string $key, $value, $ttl = null): bool
    {
    }
}
