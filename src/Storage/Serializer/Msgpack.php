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
class Msgpack extends \Phalcon\Storage\Serializer\Igbinary
{
    /**
     * Serializes data
     *
     * @return string
     * @param mixed $value
     */
    protected function doSerialize($value): string
    {
    }

    /**
     * @param mixed $value
     *
     * @return mixed
     */
    protected function doUnserialize($value)
    {
    }
}
