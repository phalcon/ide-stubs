<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Storage\Serializer;

use Phalcon\Traits\Php\IgbinaryTrait;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class Igbinary extends \Phalcon\Storage\Serializer\AbstractSerializer
{
    use \Phalcon\Traits\Php\IgbinaryTrait;



    /**
     * Serializes data
     *
     * @return mixed
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

    /**
     * Serialize
     *
     * @param mixed $value
     * @return string|null
     */
    protected function doSerialize($value): string|null
    {
    }

    /**
     * Unserialize
     *
     * @param string $value
     *
     * @return false|mixed
     */
    protected function doUnserialize($value)
    {
    }
}
