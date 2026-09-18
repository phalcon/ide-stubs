<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Encryption\Security;

use Phalcon\Contracts\Encryption\EncryptionTypes;

/**
 * @phpstan-import-type encryption_hash_information from EncryptionTypes
 * @phpstan-import-type encryption_hash_options from EncryptionTypes
 */
interface PasswordSecurity
{
    /**
     * @param string $password
     * @param string $passwordHash
     * @param int $maxPassLength
     * @return bool
     */
    public function checkHash(string $password, string $passwordHash, int $maxPassLength = 0): bool;

    /**
     * @return int
     */
    public function getDefaultHash(): int;

    /**
     * @phpstan-return encryption_hash_information
     * @param string $hash
     * @return array
     */
    public function getHashInformation(string $hash): array;

    /**
     * @return int
     */
    public function getWorkFactor(): int;

    /**
     * @phpstan-param encryption_hash_options $options
     * @param string $password
     * @param array $options
     * @return string
     */
    public function hash(string $password, array $options = []): string;

    /**
     * @param string $passwordHash
     * @return bool
     */
    public function isLegacyHash(string $passwordHash): bool;

    /**
     * @param int $defaultHash
     * @return Security
     */
    public function setDefaultHash(int $defaultHash): Security;

    /**
     * @param int $workFactor
     * @return Security
     */
    public function setWorkFactor(int $workFactor): Security;
}
