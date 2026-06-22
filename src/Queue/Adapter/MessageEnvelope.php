<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Queue\Adapter;

use Phalcon\Contracts\Queue\Message as MessageInterface;

/**
 * Encodes and decodes the {body, properties, headers} envelope shared by every
 * transport that persists a message as a serialized string (Stream, Redis,
 * Beanstalk). Centralizes the wire shape, the object-injection-safe
 * `allowed_classes => false` guard, and the missing-key defaults, so each
 * adapter only supplies its own concrete message factory around `decode()`.
 */
class MessageEnvelope
{
    /**
     * Decodes a serialized payload into a normalized {body, properties,
     * headers} array, or null when the payload is not a valid envelope.
     *
     * @param string $payload
     * @return array|null
     */
    public static function decode(string $payload): array|null
    {
    }

    /**
     * Serializes a message into its wire envelope.
     *
     * @param \Phalcon\Contracts\Queue\Message $message
     * @return string
     */
    public static function encode(\Phalcon\Contracts\Queue\Message $message): string
    {
    }
}
