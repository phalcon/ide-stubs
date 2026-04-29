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
 * Generates a version 1 (time-based) UUID.
 *
 * The timestamp is the number of 100-nanosecond intervals since
 * October 15, 1582 00:00:00.00 UTC (the UUID epoch). The node is resolved
 * via SysNodeProvider (hardware MAC, APCu-cached) with RandomNodeProvider
 * as fallback.
 *
 * @link https://www.ietf.org/rfc/rfc4122.txt
 */
class Version1 extends \Phalcon\Encryption\Security\Uuid\AbstractUuid implements \Phalcon\Encryption\Security\Uuid\TimeBasedUuidInterface
{
    /**
     * @param \DateTimeInterface $dateTime
     * @param mixed $node
     */
    public function __construct(\DateTimeInterface $dateTime = null, $node = null)
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
