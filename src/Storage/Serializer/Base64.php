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

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class Base64 extends \Phalcon\Storage\Serializer\AbstractSerializer
{
    /**
     * Serializes data
     *
     * @return string
     */
    public function serialize(): string
    {
    }

    /**
     * Unserializes data
     *
     * @param mixed $data
     *
     * @retrun void
     * @return void
     */
    public function unserialize($data): void
    {
    }

    /**
     * Wrapper for base64_decode
     *
     * @param string $input
     * @param bool   $strict
     *
     * @return string|false
     */
    protected function phpBase64Decode(string $input, bool $strict = false)
    {
    }
}
