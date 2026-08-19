<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage;

use Exception as BaseException;
use Phalcon\Contracts\Storage\StorageTypes;
use Phalcon\Factory\AbstractFactory;
use Phalcon\Storage\Serializer\Base64;
use Phalcon\Storage\Serializer\Igbinary;
use Phalcon\Storage\Serializer\Json;
use Phalcon\Storage\Serializer\MemcachedIgbinary;
use Phalcon\Storage\Serializer\MemcachedJson;
use Phalcon\Storage\Serializer\MemcachedPhp;
use Phalcon\Storage\Serializer\Msgpack;
use Phalcon\Storage\Serializer\None;
use Phalcon\Storage\Serializer\Php;
use Phalcon\Storage\Serializer\RedisIgbinary;
use Phalcon\Storage\Serializer\RedisJson;
use Phalcon\Storage\Serializer\RedisMsgpack;
use Phalcon\Storage\Serializer\RedisNone;
use Phalcon\Storage\Serializer\RedisPhp;
use Phalcon\Storage\Serializer\SerializerInterface;
use Throwable;

/**
 * @phpstan-import-type storage_services from StorageTypes
 */
class SerializerFactory extends AbstractFactory
{
    /**
     * SerializerFactory constructor.
     *
     * @param string[] $services
     */
    public function __construct(array $services = [])
    {
    }

    /**
     * @param string $name *
     * @return SerializerInterface
     * @throws BaseException
     */
    public function newInstance(string $name): SerializerInterface
    {
    }

    /**
     * @return class-string<Throwable>
     */
    protected function getExceptionClass(): string
    {
    }

    /**
     * Returns the available adapters
     *
     * @return string[]
     *
     * @phpstan-return storage_services
     */
    protected function getServices(): array
    {
    }
}
