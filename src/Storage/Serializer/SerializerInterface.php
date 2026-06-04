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
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
interface SerializerInterface
{
    /**
     * @return mixed
     */
    public function getData(): mixed;

    /**
     * Serializes data
     *
     * @return mixed
     */
    public function serialize(): mixed;

    /**
     * @param mixed $data
     * @return void
     */
    public function setData($data): void;

    /**
     * Unserializes data
     *
     * @param mixed $data
     * @return void
     */
    public function unserialize($data): void;
}
