<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Serializer;

use Phalcon\Traits\Php\MsgpackTrait;

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
    use \Phalcon\Traits\Php\MsgpackTrait;



    /**
     * Serializes data
     *
     * @param mixed $value
     * @return string
     */
    protected function doSerialize($value): string
    {
    }

    /**
     * @param string $value
     */
    protected function doUnserialize($value)
    {
    }
}
