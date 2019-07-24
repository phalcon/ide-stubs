<?php

namespace Phalcon\Storage\Serializer;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class Msgpack extends \Phalcon\Storage\Serializer\AbstractSerializer
{

    /**
     * Serializes data
     *
     * @return string|null
     */
    public function serialize(): ?string {}

    /**
     * Unserializes data
     *
     * @param mixed $data
     */
    public function unserialize($data) {}

}
