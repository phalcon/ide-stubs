<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Encryption\Security\JWT\Token;

use Phalcon\Contracts\Encryption\EncryptionTypes;

/**
 * Storage class for a Token Item
 *
 * @phpstan-import-type encryption_jwt_payload from EncryptionTypes
 */
class Item extends \Phalcon\Encryption\Security\JWT\Token\AbstractItem
{
    /**
     * Item constructor.
     *
     * @phpstan-param encryption_jwt_payload $payload
     * @param array $payload
     * @param string $encoded
     */
    public function __construct(array $payload, string $encoded)
    {
    }

    /**
     * @return mixed|null
     * @param string $name
     * @param mixed $defaultValue
     */
    public function get(string $name, $defaultValue = null): mixed
    {
    }

    /**
     * @phpstan-return encryption_jwt_payload
     * @return array
     */
    public function getPayload(): array
    {
    }

    /**
     * @param string $name
     * @return bool
     */
    public function has(string $name): bool
    {
    }
}
