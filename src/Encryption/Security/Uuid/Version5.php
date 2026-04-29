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
 * Generates a version 5 (name-based SHA-1) UUID.
 *
 * Given a namespace UUID and a name string, produces a deterministic UUID
 * by hashing namespace bytes + name with SHA-1 (first 16 bytes used),
 * then stamping version/variant bits.
 *
 * @link https://www.ietf.org/rfc/rfc4122.txt
 */
class Version5 extends \Phalcon\Encryption\Security\Uuid\AbstractUuid
{
    /**
     * @param string $namespaceName
     * @param string $name
     */
    public function __construct(string $namespaceName, string $name)
    {
    }
}
