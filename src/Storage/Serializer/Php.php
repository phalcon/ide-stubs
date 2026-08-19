<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Serializer;

use Phalcon\Storage\Serializer\Exceptions\InvalidUnserializationInput;
use Phalcon\Traits\Php\SerializeTrait;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class Php extends \Phalcon\Storage\Serializer\AbstractSerializer
{
    use \Phalcon\Traits\Php\SerializeTrait;



    /**
     * Serializes data
     *
     * @return bool|float|int|string|null
     */
    public function serialize(): mixed
    {
    }

    /**
     * Unserializes data
     *
     * @param mixed $data
     * @return void
     */
    public function unserialize($data): void
    {
    }
}
