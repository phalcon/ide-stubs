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
interface CsrfProtection
{
    /**
     * @return string|null
     */
    public function getToken(): string|null;

    /**
     * @return string|null
     */
    public function getTokenKey(): string|null;

    /**
     * @param string|null $tokenKey
     * @param mixed $tokenValue
     * @param bool $destroyIfValid
     * @return bool
     */
    public function checkToken(?string $tokenKey = null, $tokenValue = null, bool $destroyIfValid = true): bool;

    /**
     * @return Security
     */
    public function destroyToken(): Security;

    /**
     * @return string|null
     */
    public function getRequestToken(): string|null;

    /**
     * @return string|null
     */
    public function getSessionToken(): string|null;
}
