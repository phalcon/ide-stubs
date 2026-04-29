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
 * Generates a version 4 (random) UUID.
 *
 * All 122 non-fixed bits are random. Identical algorithm to
 * Phalcon\Encryption\Security\Random::uuid().
 *
 * @link https://www.ietf.org/rfc/rfc4122.txt
 */
class Version4 extends \Phalcon\Encryption\Security\Uuid\AbstractUuid
{
    public function __construct()
    {
    }
}
