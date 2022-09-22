<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Serializer;

/**
 * @property mixed $data
 * @property bool  $isSuccess
 */
abstract class AbstractSerializer implements \Phalcon\Storage\Serializer\SerializerInterface
{
    /**
     * @var mixed
     */
    protected $data = null;

    /**
     * @var bool
     */
    protected $isSuccess = true;

    /**
     * AbstractSerializer constructor.
     *
     * @param mixed|null $data
     */
    public function __construct($data = null)
    {
    }

    /**
     * Serialize data
     *
     * @return array
     */
    public function __serialize(): array
    {
    }

    /**
     * Unserialize data
     *
     * @param array $data
     * @return void
     */
    public function __unserialize(array $data): void
    {
    }

    /**
     * @return mixed
     */
    public function getData()
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
     * @return bool
     */
    protected function isSerializable($data): bool
    {
    }
}
