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
 * Generates a version 6 (reordered time-based) UUID.
 *
 * Uses the same 60-bit UUID timestamp as version 1 but rearranges the
 * fields so the most-significant time bits come first, producing UUIDs
 * that sort lexicographically in chronological order.
 *
 * @link https://www.rfc-editor.org/rfc/rfc9562
 */
class Version6 extends \Phalcon\Encryption\Security\Uuid\AbstractUuid implements \Phalcon\Encryption\Security\Uuid\TimeBasedUuidInterface
{
    public function __construct()
    {
    }

    /**
     * Returns a DateTimeImmutable built from the UUID's embedded timestamp.
     *
     * @return \DateTimeImmutable
     */
    public function getDateTime(): \DateTimeImmutable
    {
    }

    /**
     * Returns the 12-character hex node embedded in the UUID.
     *
     * @return string
     */
    public function getNode(): string
    {
    }
}
