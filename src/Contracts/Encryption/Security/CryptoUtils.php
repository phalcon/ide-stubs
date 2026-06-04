<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Contracts\Encryption\Security;

use Phalcon\Encryption\Security\Random;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
interface CryptoUtils
{
    /**
     * @param string $data
     * @param string $key
     * @param string $algorithm
     * @param bool $raw
     * @return string
     */
    public function computeHmac(string $data, string $key, string $algorithm, bool $raw = false): string;

    /**
     * @return Random
     */
    public function getRandom(): Random;

    /**
     * @return int
     */
    public function getRandomBytes(): int;

    /**
     * @param int $randomBytes
     * @return Security
     */
    public function setRandomBytes(int $randomBytes): Security;

    /**
     * @param int $numberBytes
     * @return string
     */
    public function getSaltBytes(int $numberBytes = 0): string;
}
