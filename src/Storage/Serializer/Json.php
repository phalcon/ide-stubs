<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Serializer;

use InvalidArgumentException;
use JsonSerializable;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class Json extends \Phalcon\Storage\Serializer\AbstractSerializer
{


    /**
     * Serializes data
     *
     * @return JsonSerializable|mixed|string
     */
    public function serialize()
    {
    }

    /**
     * Unserializes data
     *
     * @param mixed $data
     *
     * @return void
     */
    public function unserialize($data): void
    {
    }

    /**
     * @todo Remove this when we get traits
     * @param string $data
     * @param bool $associative
     * @param int $depth
     * @param int $options
     * @return mixed
     */
    private function getDecode(string $data, bool $associative = false, int $depth = 512, int $options = 0)
    {
    }

    /**
     * @todo Remove this when we get traits
     * @param mixed $data
     * @param int $options
     * @param int $depth
     * @return string
     */
    private function getEncode($data, int $options = 0, int $depth = 512): string
    {
    }
}
