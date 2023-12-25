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
class Igbinary extends \Phalcon\Storage\Serializer\AbstractSerializer
{
    /**
     * Serializes data
     *
     * @return string
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
     * Wrapper for `igbinary_serialize`
     *
     * @param mixed $value
     *
     * @return string|null
     */
    protected function phpIgbinarySerialize($value): string|null
    {
    }

    /**
     * Serialize
     *
     * @param mixed $value
     *
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
     * @return mixed|false
     */
    protected function doUnserialize($value)
    {
    }
}
