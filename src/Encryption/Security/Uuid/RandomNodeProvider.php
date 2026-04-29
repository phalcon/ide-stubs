<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption\Security\Uuid;

/**
 * Generates a random 48-bit node with the multicast bit set.
 *
 * Used as a fallback when no hardware MAC address is available.
 *
 * @link https://www.ietf.org/rfc/rfc4122.txt Section 4.5
 */
class RandomNodeProvider implements \Phalcon\Encryption\Security\Uuid\NodeProviderInterface
{
    /**
     * Returns a random 12-character hex node with the multicast bit set.
     *
     * @return string
     */
    public function getNode(): string
    {
    }
}
