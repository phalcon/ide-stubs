<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Serializer;

use Phalcon\Contracts\Storage\StorageTypes;

/**
 * @property mixed $data
 * @property bool  $isSuccess
 *
 * @phpstan-import-type storage_serializer_data from StorageTypes
 */
abstract class AbstractSerializer implements \Phalcon\Storage\Serializer\SerializerInterface
{
    /**
     * @var mixed
     */
    protected $data = null;

    protected bool $isSuccess = true;

    /**
     * AbstractSerializer constructor.
     *
     * @param mixed $data
     */
    public function __construct($data = null)
    {
    }

    /**
     * Serialize data
     *
     * @return array
     *
     * @phpstan-return storage_serializer_data
     */
    public function __serialize(): array
    {
    }

    /**
     * Unserialize data
     *
     * @phpstan-param storage_serializer_data $data
     * @param array $data
     * @return void
     */
    public function __unserialize(array $data): void
    {
    }

    /**
     * @return mixed
     */
    public function getData(): mixed
    {
    }

    /**
     * Returns `true` if the serialize/unserialize operation was successful;
     * `false` otherwise
     *
     * @return bool
     */
    public function isSuccess(): bool
    {
    }

    /**
     * @param mixed $data
     * @return void
     */
    public function setData($data): void
    {
    }

    /**
     * If this returns true, then the data is returned as is
     *
     * @param mixed $data
     *
     * @phpstan-assert-if-false bool|float|int|numeric-string|null $data
     * @return bool
     */
    protected function isSerializable($data): bool
    {
    }
}
