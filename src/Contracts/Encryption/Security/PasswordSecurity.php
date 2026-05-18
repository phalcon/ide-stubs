<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Encryption\Security;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
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
     * @param string $hash
     * @return array
     */
    public function getHashInformation(string $hash): array;

    /**
     * @return int
     */
    public function getDefaultHash(): int;

    /**
     * @param int $defaultHash
     * @return Security
     */
    public function setDefaultHash(int $defaultHash): Security;

    /**
     * @return int
     */
    public function getWorkFactor(): int;

    /**
     * @param int $workFactor
     * @return Security
     */
    public function setWorkFactor(int $workFactor): Security;
}
