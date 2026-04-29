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
 * Shared base for all UUID version objects.
 */
abstract class AbstractUuid implements \Phalcon\Encryption\Security\Uuid\UuidInterface
{
    /**
     * @var string
     */
    const string MAX = 'ffffffff-ffff-ffff-ffff-ffffffffffff';

    /**
     * @var string
     */
    const string NIL = '00000000-0000-0000-0000-000000000000';

    /**
     * 100-nanosecond intervals between UUID epoch (1582-10-15) and Unix epoch (1970-01-01).
     *
     * @var int
     */
    const int TIME_OFFSET_INT = 0x01B21DD213814000;

    /**
     * Cached SysNodeProvider instance — shared within the request via static.
     *
     * @var NodeProviderInterface|null
     */
    protected static $nodeProvider = null;

    /**
     * The generated UUID string.
     *
     * @var string
     */
    protected $uid = '';

    /**
     * Returns the UUID string.
     *
     * @return string
     */
    public function __toString(): string
    {
    }

    /**
     * Returns the UUID string for JSON serialisation.
     *
     * @return string
     */
    public function jsonSerialize(): string
    {
    }

    /**
     * Returns the shared SysNodeProvider instance, creating it on first call.
     * The static property means one discovery per request regardless of how
     * many VersionN objects are constructed.
     *
     * @return NodeProviderInterface
     */
    protected function getNodeProvider(): NodeProviderInterface
    {
    }

    /**
     * Converts a 60-bit UUID timestamp (100-ns intervals since UUID epoch) to
     * a DateTimeImmutable. Used by Version1 and Version6.
     *
     * @param mixed $timestamp
     * @return \DateTimeImmutable
     */
    protected function uuidTimestampToDateTime($timestamp): \DateTimeImmutable
    {
    }

    /**
     * Formats a 32-character hex string as a canonical UUID string.
     *
     * @param string $hex
     * @return string
     */
    protected function format(string $hex): string
    {
    }

    /**
     * Converts a canonical UUID string to its 16-byte binary representation.
     *
     * @param string $uuid
     * @return string
     */
    protected function namespaceToBytes(string $uuid): string
    {
    }
}
