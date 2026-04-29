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
 * Generates a version 7 (Unix timestamp) UUID per RFC 9562.
 *
 * Layout (128 bits):
 *   unix_ts_ms (48) | ver=7 (4) | rand_a (12) | var=10 (2) | rand_b (62)
 *
 * @link https://www.rfc-editor.org/rfc/rfc9562
 */
class Version7 extends \Phalcon\Encryption\Security\Uuid\AbstractUuid
{
    public function __construct()
    {
    }
}
