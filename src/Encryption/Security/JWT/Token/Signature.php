<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption\Security\JWT\Token;

/**
 * Signature class containing the encoded data and the hash.
 */
class Signature extends \Phalcon\Encryption\Security\JWT\Token\AbstractItem
{
    /**
     * Signature constructor.
     *
     * @param string $hash
     * @param string $encoded
     */
    public function __construct(string $hash = '', string $encoded = '')
    {
    }

    /**
     * @return string
     */
    public function getHash(): string
    {
    }
}
